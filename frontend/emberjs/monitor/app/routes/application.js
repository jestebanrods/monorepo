import Ember from "ember";
import config from "../config/environment";
import service from "../models/service"

class myWs {
  constructor(host, model) {
    this.host = host
    this.model = model
    this.connect()
  }

  onopen() {
    this.model.set('online', 'Conectado');
  }

  onclose() {
    this.model.set('online', 'Desconectado');
    // setTimeout(() => {
    //   this.connect()
    // }, 2000)
  }

  onmessage(event) {
    // Conevertir a un objeto JSON el mensaje de entrada
    let message = JSON.parse(event.data);
    // Recuperar las variables del modelo
    let services = this.model.get('services');
    let assigned = this.model.get('assigned');
    let all_assigned = this.model.get('all_assigned');
    // Definición de variables auxiliares
    let legth_register = 5;
    let legth_all_register = 200;

    console.log(message);

    // Si el mensaje es un nuevo servicio
    if (message.action === 'agi_servicio_nuevo') {
      message.data.timestamp;
      // Si se reenvia por frecuencia borrar el registro anterior
      if (message.data.rotacion >= 1) removeById(message.data.id, services);
      // Se agrega al final de la tabla de servicios activos
      // services.pushObject(s1.create(message.data));
      services.pushObject(service.create(message.data));
    }

    // Si el mensaje es un registro exitoso del movil
    if (message.action === 'js_registrar_movil_bien') {
      // Se borra el registro de la tabla de servicios
      removeById(message.data.id, services);
      // Se agrega al comienzo de la tabla de asignados
      assigned.unshiftObject(message.data);
      all_assigned.unshiftObject(message.data);
      // Limitar la cantidad de registros de la tabla asignados
      if (assigned.length > legth_register) assigned.splice(legth_register, 1);
      // Limitar el total de los registros de asignados
      if (all_assigned.length > legth_all_register) all_assigned.splice(legth_all_register, 1);
    }

  }

  connect() {
    this.ws = new WebSocket(this.host)
    this.ws.onopen = () => {
      this.onopen()
    }
    this.ws.onclose = (event) => {
      this.onclose(event)
    }
    this.ws.onerror = (event) => {
      this.onclose(event)
    }
    this.ws.onmessage = (event) => {
      this.onmessage(event)
    }
  }
}

export default Ember.Route.extend({
  model() {
    let model = Ember.Object.create({
      services: Ember.A(),
      assigned: Ember.A(),
      all_assigned: Ember.A(),
      online: 'Desconectado',
      times: Ember.A()
    });

    // Creo la conexión y el manejador de websockets
    let websocket = new myWs(config.Services.host, model)

    //Devuelve los datos del modelo
    return model;
  },

  actions: {}
});

function removeById(id, services) {
  services.forEach((item, index) => {
    if (item.id === id) {
      clearInterval(services[index].get('intervalId'));
      services.removeObject(services[index]);
    }
  });
}

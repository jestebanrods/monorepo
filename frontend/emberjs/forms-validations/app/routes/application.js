import Ember from 'ember';

export default Ember.Route.extend({

  model() {
    return Ember.Object.create({
      history: Ember.A(),
      notify: '',
      msg: '',
    });
  },

  actions: {
    getData() {
      let model = this.modelFor(this.routeName);
      clearModel(model);
      check(model);
    },
    clearAll() {
      let model = this.modelFor(this.routeName);
      clearModel(model);
      Ember.$('#_quantity').val('');
      Ember.$('#_movil').val('');
      Ember.$('#_phone').val('');
      Ember.$('#_dateInit').val('');
      Ember.$('#_dateEnd').val('');
    }
  },

});

function setNotification(model, notify, msg) {
  model.set('notify', notify);
  model.set('msg', msg);
}

function noRegExpMatch(regex, value) {
  return regex.exec(value) === null ? true : false;
}

function check(model) {
  let cantidad = Ember.$('#_quantity').val(),
    movil = Ember.$('#_movil').val(),
    telefono = Ember.$('#_phone').val(),
    dateInit = Ember.$('#_dateInit').val(),
    dateEnd = Ember.$('#_dateEnd').val();

  let regexNumber = /^[0-9]+$/;
  let regexDate = /^([0-9]{2}\/[0-9]{2}\/[0-9]{4})$/;

  if (cantidad === '' && movil === '' && telefono === '' && dateInit === '' && dateEnd === '') {
    console.log('error campos vacios')
    setNotification(model, 'danger', 'Error campos vacios');
  } else if (cantidad !== '' && movil === '' && telefono === '' && dateInit === '') {
    console.log('error campos obligatorios')
    setNotification(model, 'danger', 'Error campos obligatorios');
  } else if (noRegExpMatch(regexNumber, cantidad) && cantidad !== '') {
    console.log('error cantidad')
    setNotification(model, 'danger', 'Error cantidad');
  } else if (noRegExpMatch(regexNumber, movil) && movil !== '') {
    console.log('error movil')
    setNotification(model, 'danger', 'Error movil');
  } else if (noRegExpMatch(regexNumber, telefono) && telefono !== '') {
    console.log('error telefono')
    setNotification(model, 'danger', 'Error telefono');
  } else if (noRegExpMatch(regexDate, dateInit) && dateInit !== '') {
    console.log('error fecha inicio')
    setNotification(model, 'danger', 'Error fecha inicio');
  } else if (noRegExpMatch(regexDate, dateEnd) && dateEnd !== '') {
    console.log('error fecha final')
    setNotification(model, 'danger', 'Error fecha fina');
  }
}

function clearModel(model) {
  model.set('notify', '');
  model.set('msg', '');
}

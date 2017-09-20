import Ember from "ember";

export default Ember.Controller.extend({
  names: [],
  actions: {
    consultAjax() {
      let list = [];
      Ember.$.ajax({
        url: 'https://jsonplaceholder.typicode.com/users',
        method: 'GET',
        dataType: 'json',
      }).then((response) => {
        response.forEach((users) => {
          list.push(users.name);
        });
        this.set('names', list);
        let person = this.get('person');
        this.set('person', person)
      })
    },
  }
});

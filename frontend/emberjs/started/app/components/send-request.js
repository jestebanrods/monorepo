import Ember from "ember";

export default Ember.Component.extend({
  actions: {
    toggleBody() {
      this.toggleProperty('isShowingBody');
    },
    sendAjax() {
      return Ember.$.ajax({
        type: "GET",
        url: "https://swapi.co/api/people/1/"
      }).then(function (response) {
        return response.name
      });
    },
    sendAjaxPromise(){
      this.actions.sendAjax().then((name) => {
        this.set('name', name);
      })
    }
  }
});

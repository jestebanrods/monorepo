import Ember from "ember";

var capital = '';

export default Ember.Component.extend({
  keyDown(event){
    let code = event.keyCode;
    let char = String.fromCharCode(code);
    capital = code == 8 ? capital.substr(0, capital.length - 1) : capital + char;
    capital = capital.toLowerCase();
    Ember.$.ajax({
      type: "GET",
      url: `https://restcountries.eu/rest/v2/capital/${capital}`
    }).then((response, error, xhr) => {
      let code_error = xhr.status;
      if (code_error == 200) {
        return this.set('countries', response)
      }
    })
  }
});

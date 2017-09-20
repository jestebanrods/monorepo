import Ember from "ember";

export default Ember.Route.extend({
  model(params){
    return {show_id: params.show_id};
  }
});

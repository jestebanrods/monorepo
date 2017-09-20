import Ember from 'ember';

export function transformDatetime(params/*, hash*/) {
  let date = new Date(params * 1000);
  return `${date.toLocaleDateString()} - ${date.toLocaleTimeString()}`;
}

export default Ember.Helper.helper(transformDatetime);

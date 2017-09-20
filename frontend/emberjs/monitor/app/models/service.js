import Ember from "ember";
import DS from 'ember-data';

export default DS.Model.extend({
  intervalId: 0,
  ti: 0,
  init() {
    this.set('ti', parseInt(Date.now() / 1000 - this.get('timestamp')))
    const x = setInterval(() => {
      this.set('ti', this.get('ti') + 1)
    }, 1000)
    this.set('intervalId', x)
  },
  elapsed: Ember.computed('ti', function () {
    let s = this.ti % 60
    let m = parseInt(this.ti / 60)
    return `${pad(m)}:${pad(s)}`
  }),
});

function pad(i) {
  return i < 10 ? `0${i}` : i;
}


import { moduleForComponent, test } from 'ember-qunit';
import hbs from 'htmlbars-inline-precompile';

moduleForComponent('transform-datetime', 'helper:transform-datetime', {
  integration: true
});

// Replace this with your real tests.
test('it renders', function(assert) {
  this.set('inputValue', '1234');

  this.render(hbs`{{transform-datetime inputValue}}`);

  assert.equal(this.$().text().trim(), '1234');
});


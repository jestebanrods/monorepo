import { moduleForComponent, test } from 'ember-qunit';
import hbs from 'htmlbars-inline-precompile';

moduleForComponent('websocket-port', 'Integration | Component | websocket port', {
  integration: true
});

test('it renders', function(assert) {

  // Set any properties with this.set('myProperty', 'value');
  // Handle any actions with this.on('myAction', function(val) { ... });

  this.render(hbs`{{websocket-port}}`);

  assert.equal(this.$().text().trim(), '');

  // Template block usage:
  this.render(hbs`
    {{#websocket-port}}
      template block text
    {{/websocket-port}}
  `);

  assert.equal(this.$().text().trim(), 'template block text');
});

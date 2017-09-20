import Ember from "ember";
import config from "./config/environment";

const Router = Ember.Router.extend({
  location: config.locationType,
  rootURL: config.rootURL
});

Router.map(function () {
  this.route('not-found', {path: '/*path'});
  this.route('jers', {path: '/jers/pruebas-de-la-url-amigable'});
  this.route('rtlsa');
  this.route('simcards', function () {
    this.route('new');
    this.route('show', {path: 'show/:show_id'});
    this.route('found');
  });
  this.route('autocomplete');
  this.route('user');
  this.route('capital');
});

export default Router;

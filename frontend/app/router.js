import Ember from 'ember';
import config from './config/environment';

const Router = Ember.Router.extend({
  location: config.locationType,
  rootURL: config.rootURL
});

Router.map(function() {
  // this.resource('todos', { path : '/'}, function () {
  //   this.route('completed');
  //   this.route('remaining');
  // });
  this.route('TodosRoute');
  this.route('TodosIndexRoute');
  this.route('TodosCompletedRoute');
  this.route('TodosRemainingRoute');
});

export default Router;

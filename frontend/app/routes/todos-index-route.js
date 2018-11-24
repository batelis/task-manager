import Ember from 'ember';

export default Ember.Route.extend({
  setupController: function () {
    this.controllerFor('todos').set('model', this.modelFor('todos'));
  }
});

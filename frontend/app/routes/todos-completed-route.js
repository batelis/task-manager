import Ember from 'ember';

export default Ember.Route.extend({
  setupController: function () {
    var todos = this.store.filter('todo', function (todo) {
      return todo.get('is_completed');
    });

    this.controllerFor('todos').set('model', todos);
  }
});

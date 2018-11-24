/* global Ember */


export default Ember.Helper.helper( 'pluralize', function (singular, count) {
  var inflector = new Ember.Inflector(Ember.Inflector.defaultRules);

  return count === 1 ? singular : inflector.pluralize(singular);
});


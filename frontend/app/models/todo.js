import Model from 'ember-data/model';

export default Model.extend({
  text: DS.attr('string'),
  is_completed: DS.attr('boolean')
});

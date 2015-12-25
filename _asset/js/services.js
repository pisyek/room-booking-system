var eventServices = angular.module('eventServices', ['ngResource']);

eventServices.factory('Event', ['$resource',
	function($resource){
		return $resource('/api', {}, {
		query: {method:'GET', params:{phoneId:'phones'}, isArray:true}
	});
}]);
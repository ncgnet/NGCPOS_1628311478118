// START - USED SERVICES
/*
 *	UserService.list
 *		PARAMS: 
 *		
 *
 *	UserService.delete
 *		PARAMS: 
 *					ObjectId id - Id
 *		
 *
 */
// END - USED SERVICES

// START - REQUIRED RESOURCES
/*
 * UserService  
 */
// END - REQUIRED RESOURCES


//CRUD LIST FOR [object Object]

app.controller('UserListController', ['$scope', 'UserService',
    function ($scope, UserService ) {
		
    	$scope.list = UserService.query();
    	
}]);
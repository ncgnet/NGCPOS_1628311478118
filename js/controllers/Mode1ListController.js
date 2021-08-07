// START - USED SERVICES
/*
 *	Mode1Service.delete
 *		PARAMS: 
 *					ObjectId id - Id
 *		
 *
 *	Mode1Service.list
 *		PARAMS: 
 *		
 *
 */
// END - USED SERVICES

// START - REQUIRED RESOURCES
/*
 * Mode1Service  
 */
// END - REQUIRED RESOURCES


//CRUD LIST FOR [object Object]

app.controller('Mode1ListController', ['$scope', 'Mode1Service',
    function ($scope, Mode1Service ) {
		
    	$scope.list = Mode1Service.query();
    	
}]);
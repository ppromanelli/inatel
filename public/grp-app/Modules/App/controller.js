gpr.controller('appController', function($scope,$http,Locations,$state) {
        // create a message to display in our view
        $scope. init = function(){
        	$scope.INATEL = readCookie('inatel');
        }

        $scope.logout = function(){
        	eraseCookie('inatel');
        	$state.go('login');
        }
        
        
})
.filter("cargo", [function () {
    return function(input) {
    	switch(input){
    		case 'Manager':return 'Gestor';
    		case 'Customer':return 'Cliente';
    		case 'User':return 'Usuario';
    	}
    };
}]);
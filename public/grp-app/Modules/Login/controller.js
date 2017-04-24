gpr.controller('loginController', function($scope,$http,Login,$state,$rootScope) {
        // create a message to display in our view
        console.log("loginController");
    $scope. init = function(){
        if(readCookie('inatel')){
        	$rootScope.INATEL = JSON.parse(readCookie('inatel'));
			$state.go('app.dashboard');
        }	
	        console.log("loginController --- init");
    }
        
    $scope. login = function(){
    	$scope. loginData = {};
        $scope.loginData.email 		= $scope.email;
        $scope.loginData.password 	= $scope.password;
	        // save the comment. pass in comment data from the form
	        // use the function we created in our service
	    Login.login($scope.loginData)
	        .success(function(data) {

	        	if(data.error)
	            	console.log(data);
	            else{

	            	createCookie('inatel', JSON.stringify(data),100000);
    				$rootScope.INATEL = JSON.parse(readCookie('inatel'));

	            	$state.go('app.dashboard');
	            }

	        })
	        .error(function(data) {
	            console.log(data);
	        });

    }
});
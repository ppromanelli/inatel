gpr.controller('userController', function($scope,$http,Service,Device,Customer) {
        // create a message to display in our view
        $scope. init = function(){
        	$scope.chart = true;
	        
	        getData();
        }

        function getData(){
        	Service.user()
	        .success(function(data) {
	        	var moto = 0;
	        	var nokia = 0;
	        	var sam = 0;
	        	var iphone = 0;
	        	$scope.serviceData = data;

	        	angular.forEach(data,function(service){
	        		if(service.name === 'Moto g4') moto++;
	        		if(service.name === 'Nokia') nokia++;
	        		if(service.name === 'Samsung') sam++;
	        		if(service.name === 'iPhone') iphone++;
	        	})

	        	$scope.labelsService =  ['Moto g4','Nokia','Samsung','iPhone'];
				$scope.service = [moto, nokia, sam, iphone ];
				$scope.seriesService =  ['Total'];
	        })
	        .error(function(data) {
	            console.log(data);
	        });

	        Customer.user()
	        .success(function(data) {
	        	var m = 0;
	        	var f = 0;

	        	$scope.customerData = data;

	        	angular.forEach(data,function(service){
	        		if(service.gender === 'Masculino') m++;
	        		if(service.gender === 'Feminino') f++;
	        	})
	        	$scope.labelsCustomer =  ['Masculino','Feminino'];
				$scope.customer = [m, f];
				$scope.seriesCustomer =  ['Total'];
	        })
	        .error(function(data) {
	            console.log(data);
	        });
        }
        
});
gpr.controller('dashboardController', function($scope,$http,Customer) {
        // create a message to display in our view
        $scope. init = function(){
        	
	        $scope.chart = true;

	        getData();
        }

        function getData(){
        	Customer.manager()
	        .success(function(data) {
	        	$scope.serviceData = data;
	        	
	        	var oiMoto = 0;
	        	var oiNoki = 0;
	        	var oiSam = 0;
	        	var oiIphone = 0;

	        	var vivoMoto = 0;
	        	var vivoNoki = 0;
	        	var vivoSam = 0;
	        	var vivoIphone = 0;

	        	var claroMoto = 0;
	        	var claroNoki = 0;
	        	var claroSam = 0;
	        	var claroIphone = 0;

	        	var timMoto = 0;
	        	var timNoki = 0;
	        	var timSam = 0;
	        	var timIphone = 0;

	        	var nextelMoto = 0;
	        	var nextelNoki = 0;
	        	var nextelSam = 0;
	        	var nextelIphone = 0;

	        	angular.forEach(data,function(service){
	        		
	        		if(service.type === 'Oi'){
	        			if(service.devices_name === 'Moto g4')oiMoto++;
	        			if(service.devices_name === 'Nokia')	oiNoki++;
	        			if(service.devices_name === 'Samsung')oiSam++;
	        			if(service.devices_name === 'iPhone')oiIphone++;
	        		}
	        		if(service.type === 'Vivo'){
	        			if(service.devices_name === 'Moto g4')		vivoMoto++;
	        			if(service.devices_name === 'Nokia')		vivoNoki++;
	        			if(service.devices_name === 'Samsung')		vivoSam++;
	        			if(service.devices_name === 'iPhone')		vivoIphone++;
	        		}
	        		if(service.type === 'Claro'){
	        			if(service.devices_name === 'Moto g4')		claroMoto++;
	        			if(service.devices_name === 'Nokia')		claroNoki++;
	        			if(service.devices_name === 'Samsung')		claroSam++;
	        			if(service.devices_name === 'iPhone')		claroIphone++;
	        		}
	        		if(service.type === 'Tim'){
	        			if(service.devices_name === 'Moto g4')		timMoto++;
	        			if(service.devices_name === 'Nokia')		timNoki++;
	        			if(service.devices_name === 'Samsung')		timSam++;
	        			if(service.devices_name === 'iPhone')		timIphone++;
	        		}
	        		if(service.type === 'Nextel'){
	        			if(service.devices_name === 'Moto g4')		nextelMoto++;
	        			if(service.devices_name === 'Nokia')		nextelNoki++;
	        			if(service.devices_name === 'Samsung')		nextelSam++;
	        			if(service.devices_name === 'iPhone')		nextelIphone++;
	        		}
	        	});
				var moto = [ oiMoto,vivoMoto,claroMoto,timMoto,nextelMoto];
				var noki = [ oiNoki,vivoNoki,claroNoki,timNoki,nextelNoki];
				var sam = [ oiSam,vivoSam,claroSam,timSam,nextelSam];
				var iphone = [ oiIphone,vivoIphone,claroIphone,timIphone,nextelIphone];

				$scope.labelsService =  ['Oi','Vivo','Claro','Tim','Nextel'];
				$scope.service = [moto,noki,sam,iphone];
	        	$scope.seriesService =  ['Moto g4','Nokia','Samsung','iPhone'];

	        })
	        .error(function(data) {
	            console.log(data);
	        });
        }
        
});
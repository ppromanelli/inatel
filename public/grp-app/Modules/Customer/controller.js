gpr.controller('customerController', function($scope,$http,Service) {
        // create a message to display in our view
        $scope. init = function(){
        	
	        $scope.chart = true;

	        getData();
	        

        }

        function getData(){
        	Service.customer()
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
	        		
	        		if(service.devices_name === 'Moto g4'){
	        			if(service.type === 'Oi')oiMoto++;
	        			if(service.type === 'Vivo')	vivoMoto++;
	        			if(service.type === 'Claro')claroMoto++;
	        			if(service.type === 'Tim')timMoto++;
	        			if(service.type === 'Nextel')nextelMoto++;
	        		}
	        		if(service.devices_name === 'Nokia'){
	        			if(service.type === 'Oi')		oiNoki++;
	        			if(service.type === 'Vivo')		vivoNoki++;
	        			if(service.type === 'Claro')		claroNoki++;
	        			if(service.type === 'Tim')		timNoki++;
	        			if(service.type === 'Nextel')	nextelNoki++;
	        		}
	        		if(service.devices_name === 'Samsung'){
	        			if(service.type === 'Oi')		oiSam++;
	        			if(service.type === 'Vivo')		vivoSam++;
	        			if(service.type === 'Claro')		claroSam++;
	        			if(service.type === 'Tim')		timSam++;
	        			if(service.type === 'Nextel')	nextelSam++;
	        		}
	        		if(service.devices_name === 'iPhone'){
	        			if(service.type === 'Oi')		oiIphone++;
	        			if(service.type === 'Vivo')		vivoIphone++;
	        			if(service.type === 'Claro')		claroIphone++;
	        			if(service.type === 'Tim')		timIphone++;
	        			if(service.type === 'Nextel')	nextelIphone++;
	        		}
	        	});
				
				var oi = [oiMoto,oiNoki,oiSam,oiIphone];
	        	var vivo = [vivoMoto,vivoNoki,vivoSam,vivoIphone];
	        	var claro = [claroMoto,claroNoki,claroSam,claroIphone];
	        	var tim = [timMoto,timNoki,timSam,timIphone];
	        	var nextel = [nextelMoto,nextelNoki,nextelSam,nextelIphone];

	        	$scope.labelsService =  ['Moto g4','Nokia','Samsung','iPhone'];
				$scope.service = [oi,vivo,claro,tim,nextel];
				$scope.seriesService =  ['Oi','Vivo','Claro','Tim','Nextel'];

	        })
	        .error(function(data) {
	            console.log(data);
	        });
        }

        
        
});
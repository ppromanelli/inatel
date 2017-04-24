var gpr = angular.module('gpr', ["ui.router","openlayers-directive","factoryModel","chart.js"]);


gpr.config(function($stateProvider, $urlRouterProvider) {
  //
  // For any unmatched url, redirect to /state1
  $urlRouterProvider.otherwise("/login");
  //
  // Now set up the states
  $stateProvider
    .state('app', {
      url: "/",
      templateUrl: "grp-app/Modules/App/template.html",
      controller : "appController"
      
    })
    .state('app.dashboard', {
      url: "dashboard",
      templateUrl: "grp-app/Modules/Dashboard/template.html",
      controller : "dashboardController"
      
    })
    .state('app.customer', {
      url: "customer",
      templateUrl: "grp-app/Modules/Customer/template.html",
      controller : "customerController"
      
    })
    .state('app.user', {
      url: "user",
      templateUrl: "grp-app/Modules/User/template.html",
      controller : "userController"
      
    })
    .state('login', {
      url: '/login',
      templateUrl: 'grp-app/Modules/Login/template.html',
       controller: 'loginController'
    });
})
.run(function($rootScope,$state) { 
  $rootScope.$on('$stateChangeStart', function(e, toState, toParams, fromState, fromParams) {
      if(readCookie('inatel')){
        $rootScope.INATEL = JSON.parse(readCookie('inatel'));
      }else{
        if(toState.name !='login' ){
          e.preventDefault();
          $state.go('login');
        }
      } 
  });
});
// #### CREATE:COOKIE ##########################################################
    function createCookie(name,value,days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime()+(days*24*60*60*1000));
            var expires = "; expires="+date.toGMTString();
        }
        else var expires = "";
        
        document.cookie = name+"="+value+expires+"; path=/";
    }
// #### CREATE:COOKIE ##########################################################

// #### READ:COOKIE ############################################################
    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
// #### READ:COOKIE ############################################################

// #### ERASE:COOKIE ###########################################################
    function eraseCookie(name) {

        createCookie(name,"",-1);
    }
// #### ERASE:COOKIE ###########################################################

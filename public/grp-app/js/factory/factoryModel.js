// public/js/services/commentService.js

angular.module('factoryModel', [])
.factory('Login', function($http) {

    return {
        // get all the comments
        login : function(loginData) {
            return $http({
                method: 'POST',
                url: '/api/login',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(loginData)
            });
        },
    }

})
.factory('Service', function($http) {

    return {
        // get all the comments
        manager : function() {
            return $http({
                method: 'GET',
                url: '/api/service-manager',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
            });
        },
        customer : function() {
            return $http({
                method: 'GET',
                url: '/api/service-customer',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
            });
        },
        user : function() {
            return $http({
                method: 'GET',
                url: '/api/service-user',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
            });
        },
    }

})
.factory('Device', function($http) {

    return {
        // get all the comments
        manager : function() {
            return $http({
                method: 'GET',
                url: '/api/device-manager',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
            });
        },
        customer : function() {
            return $http({
                method: 'GET',
                url: '/api/device-customer',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
            });
        },
        user : function() {
            return $http({
                method: 'GET',
                url: '/api/device-user',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
            });
        },
    }

})
.factory('Customer', function($http) {

    return {
        // get all the comments
        manager : function() {
            return $http({
                method: 'GET',
                url: '/api/customer-manager',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
            });
        },
        customer : function() {
            return $http({
                method: 'GET',
                url: '/api/customer-customer',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
            });
        },
        user : function() {
            return $http({
                method: 'GET',
                url: '/api/customer-user',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
            });
        },
    }

})
.factory('Locations', function($http) {

    return {
        // get all the comments
        get : function() {
            return $http.get('/api/locations');
        },

        // save a comment (pass in comment data)
        save : function(locationData) {
            return $http({
                method: 'POST',
                url: '/api/locations',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(locationData)
            });
        },

        // destroy a comment
        destroy : function(id) {
            return $http.delete('/api/locations/' + id);
        }
    }

});
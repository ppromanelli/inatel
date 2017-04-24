var commentApp = angular.module('commentApp', ['commentService','ngRoute','openlayers-directive']); 

// configure our routes
    commentApp.config(function($routeProvider) {
        $routeProvider

            // route for the home page
            .when('/', {
                templateUrl : '../views/pages/home.html',
                controller  : 'mainControllers'
            })

            // route for the about page
            .when('/about', {
                templateUrl : '../views/pages/about.html',
                controller  : 'aboutController'
            })

            // route for the contact page
            .when('/contact', {
                templateUrl : '../views/pages/contact.html',
                controller  : 'contactController'
            });
    });

    // create the controller and inject Angular's $scope
    commentApp.controller('mainControllers', function($scope) {
        // create a message to display in our view
        $scope.message = 'Everyone come and see how good I look!';
        $scope.sampa = {
        	lat: -23.57,
        	lon:  -46.60,
        	zoom: 10
        }
    });

    commentApp.controller('aboutController', function($scope) {
        $scope.message = 'Look! I am an about page.';
    });

    commentApp.controller('contactController', function($scope, $http, Comment) {
    // object to hold all the data for the new comment form
    $scope.commentData = {};

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // get all the comments first and bind it to the $scope.comments object
    // use the function we created in our service
    // GET ALL COMMENTS ==============
    Comment.get()
        .success(function(data) {
            $scope.comments = data;
            $scope.loading = false;
        });

    // function to handle submitting the form
    // SAVE A COMMENT ================
    $scope.submitComment = function() {
        $scope.loading = true;

        // save the comment. pass in comment data from the form
        // use the function we created in our service
        Comment.save($scope.commentData)
            .success(function(data) {

                // if successful, we'll need to refresh the comment list
                Comment.get()
                    .success(function(getData) {
                        $scope.comments = getData;
                        $scope.loading = false;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };

    // function to handle deleting a comment
    // DELETE A COMMENT ====================================================
    $scope.deleteComment = function(id) {
        $scope.loading = true; 

        // use the function we created in our service
        Comment.destroy(id)
            .success(function(data) {

                // if successful, we'll need to refresh the comment list
                Comment.get()
                    .success(function(getData) {
                        $scope.comments = getData;
                        $scope.loading = false;
                    });

            });
    };

});
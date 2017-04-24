<!-- app/views/index.php -->

<!doctype html> <html lang="en"> <head> <meta charset="UTF-8"> <title>Laravel and Angular Comment System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .comment    { padding-bottom:20px; }
    </style>
    
    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <script src="js/bower_components/openlayers/ol.js"></script>
    <script src="js/bower_components/angular-sanitize/angular-sanitize.min.js"></script>
    <script src="js/bower_components/angular-openlayers-directive/dist/angular-openlayers-directive.js"></script>
    
    <link rel="stylesheet" href="js/bower_components/openlayers/ol.css" />
    
    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
        <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="js/services/commentService.js"></script> <!-- load our service -->
        <script src="js/app.js"></script> <!-- load our application -->
    

</head> 
<!-- declare our angular app and controller --> 
<body class="container" ng-app="commentApp"> <div class="col-md-8 col-md-offset-2">
    <header>
            <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">GRP START</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#about"><i class="fa fa-shield"></i> About</a></li>
                    <li><a href="#contact"><i class="fa fa-comment"></i> Contact</a></li>
                </ul>
            </div>
            </nav>
        </header>
    
    <div id="main">

        <!-- angular templating -->
        <!-- this is where content will be injected -->
        <div ng-view class='jumbotron text-center'></div>

    </div>

    
    
</div> 
</body> 
</html>
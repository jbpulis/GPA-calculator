<!doctype html>
<html ng-app="GPAapp">
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular-route.min.js"></script>
    <link rel="stylesheet" ng-href="style.css">
  </head>
  <body>
<div class="main">

    <div class="navbar" id="header" role="navigation">
        <div class="container">
            <div class="navbar-header" id="navbar-header-id">
                <a href="#/">
                  <h1 id="header-label">MyGPA</h1>
                </a>
                <input type="button" value="Main" onclick="window.location.href='#/'" />
                <input type="button" value="Edit" onclick="window.location.href='#/edit'" />
                <input type="button" value="New" onclick="window.location.href='#/new'" />
                <input type="button" value="Logout" onclick=""/>
            </div>
        </div>
    </div>

    
    <div id="center">
        <div id="left-stripe"></div>
            <div id="content"> 
                <input type="button" value="submit" onclick="" />
                <input type="button" value="cancel" onclick="window.location.href='splash.html'" />
            </div>
        <div id="right-stripe"></div>
    </div>
</div>
  </body>
</html>
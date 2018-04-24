<!doctype html>
<html ng-app="GPAapp">
<<<<<<< HEAD
    <head>
        <title>MyGPA-Calculator</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular-route.min.js"></script>
        <link rel="stylesheet" ng-href="style.css">
    </head>
    <body>
        <div class="main">
            <div class="navbar">
                <nav id="nav01">
                    <ul id="menu">
                        <li>
                            <a href="#/">Main</a>
                        </li>
                        <li>
                            <a href="#/edit">Edit</a>
                        </li>
                        <li>
                            <a href="#/new">New</a>
                        </li>
                    </ul>
                </nav>
                <nav id="nav02">
                    <ul id="menu2">
                        <li>
                            <a href="#/">MyGPA</a>
                        </li>
                    </ul>
                </nav>
                <nav id="nav03">
                    <ul id="menu3">
                        <li>
                            <a href="#/login" onclick="window.location.href='#/login'">Log In</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="center">
                <div id="left-stripe"></div>
                <div id="right-stripe"></div>
                <div id="content">
                    <div ng-view></div>
                </div>
                
            </div>
            <script src="model_controller_script.js"></script>
        </div>
        <footer id="foot01">
            <p>  <?php echo date("Y"); ?> GPA-calculator. All rights reserved.</p>
        </footer>
    </body>
=======
  <head>
  <title>MyGPA-Calculator</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular-route.min.js"></script>
    <link rel="stylesheet" ng-href="style.css">
  </head>
  <body>
<div class="main">
    <div class="navbar">
        <nav id="nav01">
            <ul id="menu">
                <li>
                    <a href="#/" onclick="window.location.href='#/'">Main</a>
                </li>
                <li>
                    <a href="#/edit" onclick="window.location.href='#/edit'">Edit</a>
                </li>
                <li>
                    <a href="#/new" onclick="window.location.href='#/new'">New</a>
                </li>
            </ul>
        </nav>
        <nav id="nav02">
            <ul id="menu2">
                <li>
                <a href="#/" onclick="window.location.href='#/'">MyGPA</a>
                </li>
            </ul>
        </nav>
        <nav id="nav03">
            <ul id="menu3">
                <li>
                    <a href="#/login" onclick="window.location.href='#/login'">Log In</a>
                </li>
            </ul>
        </nav>
    </div>

    
    <div id="center">
        <div id="left-stripe"></div>
<<<<<<< HEAD:index.html
            <div id="content"> 
              <div ng-view></div>
            </div>
=======
>>>>>>> feature/login:index.php
        <div id="right-stripe"></div>
        <div id="content"> 
            <div ng-view></div>
        </div>
        
    </div>
<script src="script.js"></script>
</div>
    
    <!-- View / need to figure out how to put them in different files this is ugly -->
<!-- main -->
    <script type="text/ng-template" id="pages/main.html">
      <h1>Main</h1>
      <h3>{{message}}</h3>
    </script>

<!-- edit -->
    <script type="text/ng-template" id="pages/edit.html">
      <h1>Edit</h1>
      <ul>
        <li><a href= #/editGPA>Starting GPA</a></li>
      </ul>
      <ul>
        <li><a href= #/viewSemester>class</a></li>
      </ul>
      <h3>{{message}}</h3>
    </script>

<!-- editGPA -->
    <script type="text/ng-template" id="pages/editGPA.html">
      <h1>Edit GPA</h1>
      <form action="/action_page.php">
          Credits Taken: <input type="text" name="cTaken"><br>
          Grade Points Earned: <input type="text" name="pointsEarned"><br>
          <input type="submit" value="Submit" onclick=>
          <input type="button" value="cancel" onclick="window.location.href='#/edit'"/>
      </form>
      <h3>{{message}}</h3>
    </script>


<!-- viewSemester -->
    <script type="text/ng-template" id="pages/viewSemester.html">
      <h1>Semester *year from DB</h1>
        <table>
            <tr>
                <th><a href= #/editClass>Class Name from DB</a></th>
                <th>
                  <select>
                      <option value="4.0">A+</option>
                      <option value="4.0">A</option>
                      <option value="3.7">A-</option>
                      <option value="3.3">B+</option>
                      <option value="3.0">B</option>
                      <option value="2.7">B-</option>
                      <option value="2.3">C+</option>
                      <option value="2.0">C</option>
                      <option value="1.7">C-</option>
                      <option value="1.3">D+</option>
                      <option value="1.0">D</option>
                      <option value="0.7">D-</option>
                      <option value="0.0">F</option>
                  </select>
                </th> 
                <th>grade % from the DB</th>
            </tr>
        </table>
        <table>
            <tr>
                <th>GPA</a></th>
                <th>
                    <textarea rows="1" cols="5" name="GPAestimate" id="GPAestimate"></textarea>
                </th>
            </tr>
        </table>
      <input type="button" value="update DB" onclick=""/>
      <input type="button" value="back" onclick="window.location.href='#/edit'"/>
      <h3>{{message}}</h3>
    </script>

<!-- editClass -->
    <script type="text/ng-template" id="pages/editClass.html">
      <h1>Edit Class</h1>
      <form action="/action_page.php">
          Class Name: <input type="text" name="cName"><br>
          <p>Semester: </p>
          <select>
            <option value="Fall">Fall</option>
            <option value="Spring">Spring</option>
            <option value="Summer-">Summer-</option>
            <option value="Interim">Interim</option>
          </select>
          <br>
          Class Weight: <input type="text" name="cWeight"><br>
          Class Year: <input type="text" name="cYear"><br>
          <input type="submit" value="Submit" onclick=>
          <input type="button" value="Delete" onclick="window.location.href='#/edit'"/>
      </form>
      <h3>{{message}}</h3>
    </script>

<!-- New -->
    <script type="text/ng-template" id="pages/new.html">
      <h1>New</h1>
      <form action="/action_page.php">
          Class Name: <input type="text" name="cName"><br>
          <p>Semester: </p>
          <select>
            <option value="Fall">Fall</option>
            <option value="Spring">Spring</option>
            <option value="Summer-">Summer-</option>
            <option value="Interim">Interim</option>
          </select>
          <br>
          Class Weight: <input type="text" name="cWeight"><br>
          Class Year: <input type="text" name="cYear"><br>
          <input type="submit" value="Submit">
      </form>
      <h3>{{message}}</h3>
    </script>

    <footer id="foot01">
        <p>  <?php echo date("Y"); ?> GPA-calculator. All rights reserved.</p>
    </footer>
  </body>
>>>>>>> parent of e61d2cf... views out of index.php and script.js rename
</html>
<!-- editClass -->

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


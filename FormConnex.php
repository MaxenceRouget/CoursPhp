<?php
  include("./Header.php");
?>
<html>
<div class="container">
<h2>connecte toi</h2>

<form action="./FormConnexSql.php" method="post">

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

</html>

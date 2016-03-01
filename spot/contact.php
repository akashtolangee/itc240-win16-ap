<php?


<h3>Contact Us</h3>
<?php
if(isset($_POST['Email']))
{//data sent - send email
  echo'<pre>';
  var_dump($_POST);
  echo'</pre>'
}else{ //show from
  echo'
  
  <form action ="action.php" method="post">
  <p>Name: <input type= "text" name="Name" /></p>
  <p>Email: <input type= "email" name="Email" /></p>
  <p> Comments: <textarea name="Comments"></textarea></p>
  <p><input type="submit" value="Contact Us!"/></p>
  </form>
  ';
  }
  
  ?>
<?php

//fetch.php

if(isset($_POST["id"]))
{
 $connect = new PDO('mysql:host=mysql.profitmaster.clk;dbname=calendar', 'calendar', 'calendar');
 $query = "SELECT `id`,`title`,`description`,`start`,`end` from leave_cal WHERE id=:id";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>

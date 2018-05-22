<?php

//insert.php
$connect = new PDO('mysql:host=mysql.profitmaster.clk;dbname=calendar', 'calendar', 'calendar');

if(isset($_POST['title'])) {
 $query = "
 INSERT INTO `leave_cal` 
 (`title`, `description`, `start`, `end`) 
 VALUES (:title, :description, :start, :end)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
    array(
    ':title'  => $_POST['title'],
    ':description' => $_POST['description'],
    ':start' => $_POST['start'],
    ':end' => $_POST['end']
    )
 );
}
?>


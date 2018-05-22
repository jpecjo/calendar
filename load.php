<?php

//load.php

$connect = new PDO('mysql:host=mysql.profitmaster.clk;dbname=calendar', 'calendar', 'calendar');

$data = array();

$query = "SELECT * FROM leave_cal ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'description' => $row["description"],
  'start' => $row["start"],
  'end' => $row["end"]
 );
}

echo json_encode($data);

?>

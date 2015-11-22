<?php
mysql_connect(
"0.0.0.0", 
"d_barnett"
);
mysql_select_db("world");


$ALL = $_REQUEST['all'];

# execute a SQL query on the database
$results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$ALL%';");
print $results;
# loop through each country
while ($row = mysql_fetch_array($results)) {
  ?>
  <li> <?php echo $row["name"]; ?>, ruled by <?php echo $row["head_of_state"]; ?> </li>
  <?php
}
$ch1 = 'unchecked';

if (isset($_POST['Submit1'])) {

if (isset($_POST['ch1'])) {
$ch1 = $_POST['ch1'];

if ($ch1 == 'all') {
$ch1 = 'checked';
}
}
}

?>
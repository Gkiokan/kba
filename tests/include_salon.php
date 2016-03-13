<?php // Connecting to the database
	$mysqli = new mysqli('db1.khraft.de','u34134','cybercustomers', 'db34134');

if (!$mysqli)
{
	print "<h1>Unable to Connect to MySQL</h1>";
}
?>
<?
$id = intval($_GET['ID']);
$sql_statement  = "SELECT ID, company, street, nr, city, zip, lat, lng, email, tel, short_url FROM customers Where ID = $id";

$result = $mysqli->query($sql_statement);

$mysqli->set_charset('utf8');
$myrowcount = 0;

if (!$result) {
	$outputDisplay .= "<p>MySQL No: ".$mysqli->errno."</p>";
	$outputDisplay .= "<p>MySQL Error: ".$mysqli->error."</p>";
	$outputDisplay .= "<p>SQL Statement: ".$sql_statement."</p>";
	$outputDisplay .= "<p>MySQL Affected Rows: ".$mysqli->affected_rows."</p>";
} else {

$row = $result->fetch_assoc();

                $id = $row['ID'];
		$salonname = $row['company'];
                $strasse = $row['street'];
                $ort = $row['city'];
                 $plz = $row['zip'];
                  $lat = $row['lat'];
                   $lng = $row['lng'];
                    $email = $row['email'];
                     $tel = $row['tel'];
                      $url = $row['short_url'];
         
}

?>

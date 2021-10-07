<?php
$host = 'sql11.freemysqlhosting.net';
$user = 'sql11442834';
$password = 'H51KfgW1Wq'; 
$dbName= 'sql11442834';
// Connessione al server DB
$conn = mysql_connect($host,$user,$password)
if(!$conn) die("Errore di connessione con il server antonio".mysql_error());
else echo "<p>connessione al server antonio riuscita</p>";
//selezione del DB

$ok = mysql_select_db($dbName,$conn);
if(!$ok) die("Errore di selezione del DB di antonio".mysql_error());
else echo "<p>selezione DB antonio ok</p>";
/* Si suppone che nel DB temp sia già presente la tabella nazioni
-----------------------------
| Tabella nazioni |
-----------------------------
| id | nazione | capitale |
-----------------------------
*/
//Inserimento record nella tabella già definita nazioni
$nazione = $_POST['nazione']
$capitale= $_POST['capitale']




$query_insert = "INSERT INTO "nazioni" (nazione, capitale) VALUES ('$nazione', '$capitale')";
$result=mysql_query($query_insert);
if(!$result) echo("Errore di inserimento $sql <br/>".mysql_error());
else echo "<p>Inserimento ok</p>";
mysql_close($conn);
?>
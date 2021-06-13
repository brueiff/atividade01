<?php
$servername = "qao3ibsa7hhgecbv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "chmr8mc65esbq2d8";
$password = "tiwc68257n43dd88";
$dbname    = "f7ryywuthik3rpec";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO escola (aluno, disciplina, nota1, nota2) 
  VALUES ('joao ', 'matematica', '8','10')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "aluno cadastrado";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
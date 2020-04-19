<?php
$hostname = "localhost";
$port     = "5432";
$dbname   = "myroad";
$username = "zhangshoushen";
$password = "zss6701";
$result   = "postgresql connect fasle";

$connect  = pg_connect("host=$hostname port=$port dbname=$dbname user=$username password=$password");
if ($connect)
{
	$result = "postgresql connect success!";
}
pg_close($connect);

echo($result);

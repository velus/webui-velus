<?php
$connect_error = 'sorry we seem to have a minor fault'; //conection error
//conecting to the mysql and the database
mysql_connect('localhost','root','we9529xn@5') or die($connect_error); //dubug un comment or die (mysql_error());
mysql_select_db('login') or die ($connect_error);
?>

<?php
include('connect.php');

$q1="create table counter (id int)";
$q2="create table comment (id int auto_increment, name varchar(45), comments varchar(250), primary key(id))";
$q3="create table buses (id int auto_increment, name varchar(40), arr_time time, dept_itme time, primary key(id))";
$q4="create table admintable (id int auto_increment, user varchar(40), pass varchar(20), primary key(id))";
mysqli_query($conn,$q1) or die("Already exixt");
mysqli_query($conn,$q2) or die("Already exixt");
mysqli_query($conn,$q3) or die("Already exixt");
mysqli_query($conn,$q4) or die("Already exixt");

?>
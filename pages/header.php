<?php
require('../connect.php');
session_start();
if($_SESSION['email']){

}else{
	header('location:../index.php');
}
?>
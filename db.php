<?php


// $connect=mysqli_connect('localhost','testdbnew123','testdbnew123','testdbnew123');  
$connect=mysqli_connect('localhost','root','','meetme');  
			if (!$connect)
				{
    				die('Could not connect: ' . mysqli_connect_error());
				}   
//$time_update = 'SET time_zone = "+05:30"';
//mysqli_query($con,$time_update);


?>
<?php
include('db.php');

$id_title = $_POST['id_title'];
$id_desc = $_POST['id_desc'];

$month = date('m', time());
$year = date('Y', time());

		$que ="INSERT INTO `blog` (`slno`, `title`, `description`, `addedon`) VALUES (NULL, '$id_title', '$id_desc', NOW())";

		$query1=mysqli_query($connect,$que);
		
	        $result['status'] = 1;
	 	    $result['message']="success";
		


 echo json_encode($result);

?>
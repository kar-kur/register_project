<?php


if(isset($_POST['insert']))

	$Username = $_POST['Username'];
	$Text = $_POST['Text'];
	


	$db = new mysqli('localhost', 'root', '', 'mysqli_2');

	$sql = '

        INSERT INTO

                    $text

                    (Username,  Text)

        VALUES

                    (Username, Text, NOW())';
	$result = mysqli_query ($query);

	if($result) {
		echo 'Data Inserted';

	}else{ 
		echo 'Data not Inserted';
	}

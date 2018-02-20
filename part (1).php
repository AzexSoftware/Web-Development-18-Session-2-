 <?php 

 	// $s = "<h1>sdfsdf</h1>";
 	// $i = 0 ; 
 	// while ($i < strlen($s)){
 	// 	if($s{$i} == "<" || $s{$i} == ">"){
 	// 		$s{$i} = " ";
 	// 	}
 	// 	$i++;
 	// }
 	// echo "$s ";

 	$gender = "female";
 	$age = 20;
 	if ($gender == "male"){
 		$test = "1";
 	} else {
 		$test = "0";
 	}

 	if ($test == "1" && $age <= 20){
 		echo "boy";
 	} elseif ($test == "1" && $age <= 60 && $age >= 20){
 		echo "man";
 	} elseif ($test == "1" && $age>= 60 ){
 		echo "old man";
 	}

 	



 	for ($counter = 1 ; $counter <= 5 ; $counter++){
 		echo "$counter ";
 	}
 	
						
						

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<?php echo $degree ?>

	<select>
		<?php 
			for ($count = 1950 ; $count <= 2000 ; $count++){
				echo "<option>$count</option>";
			}
		?>
	</style>




</body>
</html>
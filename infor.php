<html>
<body>
<?php 

include_once("config.php");

 if(isset($_POST['Submit'])) {    
	$first_name=$_POST['field1'];
	$last_name=$_POST['field2'];
	$nic=$_POST['field3'];
	$tpnumber=$_POST['field4'];
	$heading=$_POST['field5'];
	$detail=$_POST['field6'];

$filename = addslashes($_FILES['img']['name']);
$tmpname = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$filetype = addslashes($_FILES['img']['type']);
$filesize = addslashes($_FILES['img']['size']);
$array = array('jpg','jpeg');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!empty($filename)){
if(in_array($ext, $array)){
$result=mysqli_query($mysqli,"INSERT INTO advertisement(firstname,lastname,nic,telephone,heading,detail,name,image) VALUES ('$first_name','$last_name','$nic','$tpnumber','$heading','$detail','$filename','$tmpname')");
echo "uploaded";
}
else{
echo "failed";
}
}
}		
?>
 </body>
 </html>
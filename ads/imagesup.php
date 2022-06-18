<?php include '../sql/conn.php'; ?>
<?php

echo $aid=$_SESSION["addid"];

//image 1
$file_tmp1 = $_FILES['pic1']['tmp_name'];
$file_name1 = "v".$aid."_".rand(1,100)."_".$_FILES['pic1']['name'];
echo $target_file1 = "images/".$file_name1;
if($file_tmp1!="")
{ move_uploaded_file($file_tmp1,$target_file1); }
else { $file_name1=""; }


//image 2 
$file_tmp2 = $_FILES['pic2']['tmp_name'];
$file_name2 = "v".$aid."_".rand(1,100)."_".$_FILES['pic2']['name'];
$target_file2 = "images/".$file_name2;
if($file_tmp2!="")
{ move_uploaded_file($file_tmp2,$target_file2); }
else { $file_name2=""; }


//image 3 
$file_tmp3 = $_FILES['pic3']['tmp_name'];
$file_name3 = "v".$aid."_".rand(1,100)."_".$_FILES['pic3']['name'];
$target_file3 = "images/".$file_name3;
if($file_tmp3!="")
{ move_uploaded_file($file_tmp3,$target_file3); }
else { $file_name3=""; }


//image 4
$file_tmp4 = $_FILES['pic4']['tmp_name'];
$file_name4 = "v".$aid."_".rand(1,100)."_".$_FILES['pic4']['name'];
$target_file4 = "images/".$file_name4;
if($file_tmp4!="")
{ move_uploaded_file($file_tmp4,$target_file4); }
else { $file_name4=""; }


//image 5
$file_tmp5 = $_FILES['pic5']['tmp_name'];
$file_name5 = "v".$aid."_".rand(1,100)."_".$_FILES['pic5']['name'];
$target_file5 = "images/".$file_name5;
if($file_tmp5!="")
{ move_uploaded_file($file_tmp5,$target_file5); }
else { $file_name5=""; }


$sql=" INSERT INTO images(aid,pic1,pic2,pic3,pic4,pic5) 
VALUES('$aid','$file_name1','$file_name2','$file_name3','$file_name4','$file_name5') ";

if ($conn->query($sql) === TRUE) {
	echo "success";
	unset($_SESSION["addid"]);
	header('Location: ../seller/admin.php'); exit;
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
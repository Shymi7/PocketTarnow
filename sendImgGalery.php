<?php
session_start();
$target_dir = "img/galeriaBaza/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        $_SESSION['error'] = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       $_SESSION['error'] = "File is not an image.";
        $uploadOk = 0;
    }
}
 //Check if file already exists
if (file_exists($target_file)) {
    $_SESSION['error'] = "Sorry, file already exists.";
    $uploadOk = 0;
}
 //Check file size
if ($_FILES["file"]["size"] > 15000000) {
    $_SESSION['error'] = "Sorry, your file is too large.";
    $uploadOk = 0;
}
 //Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $_SESSION['error'] = "Sorry, your file was not uploaded.";
 //if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $sci = $target_dir.basename( $_FILES["file"]["name"]);
        //$_SESSION['error'] = $sci;
    } else {
        $_SESSION['error'] = "Sorry, there was an error uploading your file.";
    }
}


if(isset($_POST['tytul']))      $tytul = $_POST['tytul'];
else
{
    $_SESSION['error'] = "podaj tytul";
    header("Location: atractionAdd.php");
    exit();
}
if(!isset($sci))    
{
    $_SESSION['error'] = "wybierz zdjecie";
    header("Location: atractionAdd.php");
    exit();
}

include_once("db_conn.php");

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn) echo "qwno";
    mysqli_query($conn ,'SET CHARACTER SET utf8');
    mysqli_query($conn ,'SET collation_connection = utf8_general_ci');

$sql = "INSERT INTO zdjencia Values(NULL,'$sci','$tytul')";

$result = mysqli_query($conn,$sql);

header("Location: index.php");
?>
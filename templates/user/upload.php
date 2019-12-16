<?php
//include_once("../../database/inserts.php");

$target_dir = "../../Images/";

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]) && $_FILES["fileToUpload"]["tmp_name"] != NULL) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

$target_file = $target_dir .  uniqid('user_') . '.' . $imageFileType;
echo '<script>console.log(\'' . $target_file . '\')</script>';

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 5000000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        insertUserPhoto($id, $image);
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
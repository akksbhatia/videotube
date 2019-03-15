<?php
require_once("includes/header.php");
require_once("includes/classes/videoUploadData.php");
require_once("includes/classes/videoProcessor.php");


if(!isset($_POST["uploadButton"]))
{
    echo "No file sent to page.";
    exit();
}

// 1) create file upload data
$videoUploadData = new videoUploadData($_FILES["fileInput"], $_POST["titleInput"], $_POST["descriptionInput"], $_POST["privacyInput"], $_POST["categoryInput"], "REPLACE-THIS");

//2) process video data (upload)

$videoProcessor = new videoProcessor($con);
$wassuccessful = $videProcessor->upload($videoUploadData);

?>
<?php

require_once("includes/config.php");

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
<script src="assets/js/commonactions.js"></script>
    
<title>UDYOGTV - Bhawana Chamber of Industries</title>

</head>

<body>
    <div id="pageContainer">

        <div id="mastHeadContainer">
            <button class="navShowHide"><img src="assets/images/icons/menu.png" height="24px"></button>
            
            <a class="logoContainer" href="index.php"><img src="assets/images/icons/logo.png" title="logo" alt="site logo"></a>
            
            <div class="searchBarContainer">
            
            <form action="search.php" method="get">
            
                <input type="text" class="searchBar" name="term" placeholder="Seach">
                <button class="searchButton"><img src="assets/images/icons/search.png"></button>
                
            </form>
                
            </div>
            
            <div class="rightIcons">
                
                <a href="upload.php"><img src="assets/images/icons/upload.png" class="upload"></a>
                
                 <a href="#"><img src="assets/images/profilepictures/default.png" class="upload"></a>
                
            </div>
            
        </div>

        <div id="sideNavContainer" style="display:none">
        
        </div>

        <div id="mainSectionContainer">
            <div id="mainContentContainer">
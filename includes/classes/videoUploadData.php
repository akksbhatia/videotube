<?php

class videUploadData
{
    public $videoDataArray, $title, $description, $privacy, $category, $uploadBy;
    
    public function __construct($videoDataArray, $title, $description, $privacy, $category, $uploadBy)
    {
        $this->videoDataArray = $videoDataArray;
        $this->title = $title;
        $this->description = $descriptiopn;
        $this->privacy = $privacy;
        $this->category = $category;
        $this->uploadBy = $uploadBy;
    }
    

}

?>
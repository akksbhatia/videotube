<?php

class videoProcessor
{
    private $con;
    private $sizeLimit = 500000000;
    
    public function _construct($con)
    {
        $this->con = $con;
    }
    
    public function upload($videoUploadData)
    {
        $targetDir = "uploads/videos/";
        $videoData = $videoUploadData->videoDataArray;
        
        $tempFilePath = $targetDiv . uniqid() . basename($videoData["name"]);
        
        // link example - uploads/videos/324yg234gh3/dogs playing.mp4
        
        $tempFilePath = str_replace(" ","_",$tempFilePath);
        
        // link example - uploads/videos/324yg234gh3/dogs_playing.mp4
        
        $isValidData = $this->processData($videoData, $tempFilePath);
        
    }
    
    private function processData($videoData, $tempDataPath)
    {
        $videoType = pathInfo($filePath, PATHINFO_EXTENTION);  //Outputs file format .mp4,.avi etc
        
        if(!$this->isValidSize($videoData))
        {
            echo "File too large";
            return false;
        }
    }
    
    private function isValidSize($data)
    {
        return $data["size"] <= $this->sizeLimit;
    }
}


?>
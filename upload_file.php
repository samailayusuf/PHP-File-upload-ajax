<?php

// making the name of the file
$file_name = $_FILES['file']['name'];

//This is the file upload Location... a folder called upload
$file_location = 'uploaded_files/'.$file_name;

// file extension
$file_extension = pathinfo($file_location, PATHINFO_EXTENSION);

$file_extension = strtolower($file_extension);//

// Valid image extensions permitted for upload
$image_ext = array("jpg","png","jpeg");

$response_data = 0;
if(in_array($file_extension,$image_ext)){
  // Uploading the file to the specified location in line 7
  if(move_uploaded_file($_FILES['file']['tmp_name'],$file_location)){
    $response_data = $file_location; //Returning the data that contains the image to be rendered
  }
}

echo $response_data; //Returning the data to the ajax call
<!-- ////////////         in HTML file :           ///////// -->
<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload" multiple>
-->

<?php

// TO DO : add inner directory with variable folder name
$target_dir = "uploads/";

// Find number of files :
$n = count($_FILES['fileToUpload']['name']);

// Init variable for file upload success (should be equal to $n at the end)
$success = 0;

for ($i = 0; $i < $n; $i++){
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Files cannot exceed 10M.";
  // if everything is ok, try to upload file
  } else {
      // set path and name of new file :
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$i]) . date(is);
      // $target_file specifies the path of the file to be uploaded
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      //     $type = pathinfo($_FILES["fileToUpload"]["tmp_name"], PATHINFO_EXTENSION);

      // Move file from temporary folder to OUR folder, as set in php.ini
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"][$i]). " has been uploaded.";
          $success++;
      }
  }
}

if ($success == 0) {
  echo "Sorry, something went wrong, no file was uploaded";
} else {
  echo "successfully uploaded $success files";
  if ($success < $n) {
    echo "<br>error on " . $n - $success . " files.";
  }
}
?>

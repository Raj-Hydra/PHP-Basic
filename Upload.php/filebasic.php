<?php 
    //  print_r($_FILES ['fileupload']);
    //  if($_FILES ['fileupload']){
    //      $path = $_FILES['fileupload'] ['name'];
    //      $upload_path = "./".$path;

    //        if(move_uploaded_file($_FILES['fileupload'] ['tmp_name'] , $upload_path)){
    //         echo "file uploaded";
    //        }else{
    //             die("File not Uploaded");
    //            } 
    //      }else{
    //         die("no  file found");}

//<--------------------********************--------------------------->

    // print_r($_FILES['Testing']['name']);

    if($_FILES ['Testing']){
      $path = $_FILES ['Testing'] ['name'];
      $upload = "../Basic/".$path ; // (.) Single for upward (..) Double dot for bacward in folder structure.
      
      if(move_uploaded_file($_FILES ['Testing'] ['tmp_name'], $upload))
      { 
        print_r('File uploaded');
      
      } else {die('Failed to upload');}
  
    } else {die('No file found');}
            
     ?>
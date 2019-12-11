<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  class UploadsController extends Controller
  {
      public function store(Request $request)
      {
        //'add_an_image[]' is the name of the file input element in the form, REMEMBER to include multiple attribute 
        $imageFiles = $request->allFiles('add_an_image');

        foreach($imageFiles as $images)
          {
              foreach($images as $image)
              {
                 $info_image = $image->getClientOriginalName();
                 $file_destination = "/upload_dir";
                 
                 //the files will be stored in the location specified below (storage/app/public/upload_dir
                 $image->storeAs('/public'."/".$file_destination,
                 $info_image);
             }
         }         
    }
   
 }
   
?>

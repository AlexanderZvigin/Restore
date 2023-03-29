<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class Filescontroller extends Controller
{
    public function FileSave(Request $request)
    {
    //  $path = Storage::putFile('public', $request->file('file'),'public');
        //  return $path;
        //  echo $request->file('file');
        $directory="/app/public/";
        $filename="123.jpg";
      //  $path = storage_path('public/' . $filename);
        //$files = Storage::get($path);
      //  dd($files);
       $contents = Storage::download('1234.docx');
       return $contents;
      //$files = Storage::files();
    //return $files;
    //$directories = Storage::allDirectories();
    //return $directories;

    }
}

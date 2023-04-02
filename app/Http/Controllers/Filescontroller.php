<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class Filescontroller extends Controller
{
    public function FileSave(Request $request)
    {
      $filenameWithExt = $request->file('file')->getClientOriginalName ();
      //dd($filenameWithExt);
// Get Filename
$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//dd($filename);
// Get just Extension
$extension = $request->file('file')->getClientOriginalExtension();
$fileNameToStore = $filename.'.'.$extension;
//dd($fileNameToStore);
// Filename To store
//dd($request->file('image'));
$path = $request->file('file')->storeAs('public/images',$fileNameToStore);
//dd($path);
///СЕЙВИТЬ ТОЛЬКО ИМЯ ФАЙЛА А 3АТЕМ В ШАБЛОНЕ ПОДКЛЮЧИТЬСЯ И ВЫВЕСТИ ФАЙЛ
}
    //  $path = Storage::putFile('public', $request->file('file'),'public');
        //  return $path;
        //  echo $request->file('file');
        //$directory="/app/public/";
      //  $filename="123.jpg";
      //  $path = storage_path('public/' . $filename);
        //$files = Storage::get($path);
      //  dd($files);
       //$contents = Storage::download('1234.docx');
      // return $contents;
      //$files = Storage::files();
    //return $files;
    //$directories = Storage::allDirectories();
    //return $directories;
public function Display()
{
  //echo "string";
  $directory='public/images';
  $files = Storage::files($directory);
  dd($files);
}
}

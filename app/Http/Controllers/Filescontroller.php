<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Photos;

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
$photo=new Photos();
$photo->Filename=$fileNameToStore;
$photo->save();
// Filename To store
//dd($request->file('image'));
$path = $request->file('file')->storeAs('public/images',$fileNameToStore);
return redirect()->route('updateDocument')->with('success','Фото успешно загружено');
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
  //$directory='public/images';
//$photos = Storage::files($directory);
//dd($photos);
    return view('Photos',['photos'=>Photos::all()]);
}
public function getDocument($document_name)
{
  return Storage::download('public/documents/'.$document_name);
}
}

<?php

namespace App\Http\Controllers;

use App\Models\Medias;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediasController extends Controller
{
    //Show all Medias.
    public function index()
    {
        return Medias::orderBy('created_at')->get();
    }

    public function store(Request $request)
    {   
        try{
            $path = "/public";
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();

            //the function getSize() gets a byte size, wich means that 5000000 is 5mb
            if($file->getSize() <= 5000000){
                $request->file('file')->storeAs($path,$fileName);

                $media = new Medias;
    
                $media->tale_id = $request->tale;
                $media->path = $path;
                $media->file_name = $fileName;
    
                $media->save();
                $message = "Media Saved!";
            }else{
                $message = "This file is too large.";
            }

            return ([
                'Message' => $message,
            ]);
        }catch(Exception $e){
            return ([
                'Message' => $e->getMessage(),
            ]);
        }
    }


    public function downloadFile(Request $request)
    {   
        try{

            return Storage::download("public/" . $request->file);

        }catch(Exception $e){
            return ([
                'Message' => $e->getMessage(),
            ]);
        }
    }
    
    public function getUrls(Request $request)
    {   
        try{
            $medias = Medias::where('tale_id', $request->id)->select(array('path', 'file_name'))->get();

            $urlsReturn = [];
            foreach($medias as $media){

                $urlsReturn[] = [
                    'path' => $media->path . "/" . $media->file_name
                ];
            }

            return $urlsReturn;

        }catch(Exception $e){
            return ([
                'Message' => $e->getMessage(),
            ]);
        }
    }

    public function show($id)
    {
        return Medias::where('id', $id)->first();
    }

    public function update(Request $request)
    {

        try {
            Medias::where('id', $request->id)->update(['tittle' => $request->tittle, 'boddy' => $request->boddy, 'is_enable' => $request->enable]);

            return ([
                'Message' => 'Media updated!',
            ]);
        } catch (\Exception $e) {
            return ([
                'Message' => $e->getMessage(),
            ]);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $media = Medias::where('file_name', $request->file)->first();

            if($media){
                Storage::disk('public')->delete($media->file_name);

                $media->delete();
                $message = 'Media successfully deleted!';
            }else{
                $message = 'Media not found.';
            }

            return ([
                'Message' => $message,
            ]);

        } catch (\Exception $e) {
            return ([
                'Message' => $e->getMessage(),
            ]);
        }
    }
}

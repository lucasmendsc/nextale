<?php

namespace App\Http\Controllers;

use App\Models\Medias;
use Exception;
use Illuminate\Http\Request;

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
            $path = "public/storage/contents";
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $request->file('file')->storeAs($path,$fileName);

            $media = new Medias;
            $media->tale_id = $request->tale;
            $media->path = $path;
            $media->file_name = $fileName;

            $media->save();

            return ([
                'Message' => 'Media saved!',
            ]);
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

    public function destroy($id)
    {
        try {
            Medias::where('id', $id)->delete();
            return ([
                'Message' => 'Media successfully deleted!',
            ]);
        } catch (\Exception $e) {
            return ([
                'Message' => $e->getMessage(),
            ]);
        }
    }
}

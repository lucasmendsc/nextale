<?php

namespace App\Http\Controllers;

use App\Models\Tales;
use Illuminate\Http\Request;

class TalesController extends Controller
{
    //Show rows of tales.
    public function index()
    {
        $tales = Tales::all();
        return response()->json($tales);
    }

    public function store(Request $request)
    {
        try {
            $tale = Tales::create($request->all());
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }

    }

    public function show($id)
    {
        return Tales::where('id', $id)->first();
		
    }

    public function update(Request $request){
    
        try{
            Tales::where('id', $request->id)->update(['tittle' => $request->tittle,'boddy' => $request->boddy]);
              
            return $this->success([
                'Message' => 'Tale updated!',
            ]);
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try{
            Tales::where('id', $id)->delete();
            return $this->success([
                'Message' => 'Tale successfully deleted!',
            ]);
        }catch (\Exception $e) {
            return $this->error($e->getMessage());

        }
       
    }
}

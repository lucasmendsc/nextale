<?php

namespace App\Http\Controllers;

use App\Models\Tales;
use Illuminate\Http\Request;

class TalesController extends Controller
{
    //Show all Tales.
    public function index()
    {
        return Tales::orderBy('created_at')->get();
    }

    public function store(Request $request)
    {
        try {
            $tale = new Tales;
    
            $tale->tittle = $request->tittle;
            $tale->boddy = $request->boddy;
            $tale->is_enable = $request->enable;

            $tale->save();

            return ([
                'Message' => 'Tale created!',
            ]);
        } catch (\Exception $e) {
            return ([
                'Message' => $e->getMessage(),
            ]);
        }

    }

    public function show($id)
    {
        return Tales::where('id', $id)->first();
		
    }

    public function update(Request $request){
    
        try{
            Tales::where('id', $request->id)->update(['tittle' => $request->tittle,'boddy' => $request->boddy,'is_enable' => $request->enable]);
              
            return ([
                'Message' => 'Tale updated!',
            ]);
        } catch (\Exception $e) {
            return ([
                'Message' => $e->getMessage(),
            ]);
        }
    }

    public function destroy($id)
    {
        try{
            Tales::where('id', $id)->delete();
            return ([
                'Message' => 'Tale successfully deleted!',
            ]);
        }catch (\Exception $e) {
            return ([
                'Message' => $e->getMessage(),
            ]);

        }
       
    }
}

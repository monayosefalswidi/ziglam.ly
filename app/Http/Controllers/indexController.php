<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\representative;
use App\Models\initiative;
use App\Models\Zone;
use App\Models\city;
use App\Models\counter;

class indexController extends Controller
{
    public function index()
    {
        return view('index', [
            'cities' => city::latest('id')->paginate(10),
            'Initiatives' => initiative::latest('id')->paginate(10),
            'representatives' => representative::latest('id')->paginate(10),
            'zones' => Zone::latest('id')->paginate(10),
            'counters' => counter::latest('id')->paginate(10),
        ]);
    }
    public function zones(Request $request,$id)
    {
        return view('pages.zones', [
            'city' =>city::latest('id')->where(['id'=>$id])->first(),
            'zones' => zone::latest('id')->where(['city_id'=>$id])->paginate(10),
            'representatives' => representative::latest('id')->where(['zone_id'=>$id])->paginate(10)
        ]);
    }
    public function representative(Request $request,$id)
    {
        return view('pages.representatives', [
            'zone' =>zone::latest('id')->where(['id'=>$id])->first(),
            'representatives' => representative::latest('id')->where(['zone_id'=>$id])->paginate(10)
        ]);
    }
    public function initiatives()
    {
        return view('pages.initiatives', [
          
            'Initiatives' => initiative::latest('id')->paginate(10),
         
        ]);
    }
    public function initiativeDetails(Request $request,$id)
    {
        return view('pages.initiativeDetails', [
            'Initi' =>initiative::latest('id')->where(['id'=>$id])->first()
    
        ]);
    }
}

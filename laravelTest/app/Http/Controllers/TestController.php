<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Doctor;
use App\Slot;
use DB;
use Auth;
class TestController extends Controller
{
    public  function __contruct(){
        $this->middleware('auth');
    }

    //QUestion One Answer
    public function questionOne()
    { 
        if (!(Auth::check())) {
            return redirect()->action('HomeController@index');
        }
        
            $data = DB::table('appointments')
                ->join('slots','appointments.slot_id','=','slots.id')
                ->join('doctors','appointments.doctor_id','=','doctors.id')
                ->whereMonth('slots.date','10')
                ->orderBy('slots.date','ASC')
                ->orderBy('slots.time','ASC')
                ->select('doctors.doctor_name','appointments.patient_name','slots.date','slots.time')
                ->get();
            return view('questionOne',compact('data'));
        
    }
    //QUestion Two Answer
    public function questionTwo()
    {
        if (!(Auth::check())) {
            return redirect()->action('HomeController@index');
        }
        
        $id = DB::table('appointments')
                     ->select(DB::raw('count(doctor_id) as doctorCount, doctor_id'))
                     ->groupBy('doctor_id')
                     ->orderBy('doctorCount','DESC')
                     ->first();
                     
        $name = Doctor::where('id',$id->doctor_id)->first();
        $data = [
            'name' => $name->doctor_name,
            'count' => $id->doctorCount
        ];
        return view('questionTwo',compact('data'));
    }

    //QUestion Three Answer
    public function questionThree()
    {
        if (!(Auth::check())) {
            return redirect()->action('HomeController@index');
        }

        $data = DB::table('appointments')
                        ->join('slots','appointments.slot_id','=','slots.id')
                        ->join('doctors','appointments.doctor_id','=','doctors.id')
                        ->select('appointments.*','slots.duration','doctors.doctor_name')
                        ->get()->toArray();
        //dump($data);
        // $orginzedData = [];

        // foreach($data as $item){
        //     $orginzedData[$item->doctor_id][] = $item;
        // }
        // dump($orginzedData);
       
        return view('questionThree',compact('data'));
    }
}
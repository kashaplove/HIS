<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Patients;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AnalyticsController extends Controller
{
    //
    public function index(Request $request){
        $year=date('Y');
        if($request->has('year')){
            $year=$request->year;    
        }
        $title="Statistics";

        //this month out patients
        $out_patients_this_month=Appointment::whereYear('created_at', date('Y'))->where('created_at', '>=', Carbon::now()->startOfMonth())->where('completed','YES')->where('admit','NO')->get()->count();
        
        //this month in patients
        $in_patients_this_month= Appointment::whereYear('created_at', date('Y'))->where('created_at', '>=', Carbon::now()->startOfMonth())->where('admit','YES')->get()->count();
        
        //this month new registrations
        $new_patient_regs_this_month=Patients::whereYear('created_at', date('Y'))->where('created_at', '>=', Carbon::now()->startOfMonth())->get()->count();

        // this month total checking
        $total_checkings_this_month=Appointment::whereYear('created_at', date('Y'))->where('created_at', '>=', Carbon::now()->startOfMonth())->get()->count();
        

        return view('stat.index',compact(
            'year',
            'title',
            'in_patients_this_month',
            'new_patient_regs_this_month',
            'total_checkings_this_month',
            'out_patients_this_month'
        ));

    }
}

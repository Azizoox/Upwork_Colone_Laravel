<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index(){
        $jobs = Job::where("status",1)->orderBy("id","desc")->get();
        return view("jobs.index",compact("jobs"));
    }
    public function show(Job $id){
        return view('jobs.show',['job'=>$id]);
    }
}

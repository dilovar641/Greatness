<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
       $jobs = Job::get();
		return view ('job.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
        return view ('job.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        Job::create($request->all());
		return redirect()->route('jobs.index')->withsuccess('Created Empl'.$request->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job) 
    {
        return view ('job.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view ('job.form',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, Job $job)
    {
        $job->update($request->all());
		return redirect()->route('jobs.index')->withsuccess('Updated Job'.$job->name);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
		$job->delete();
        return redirect()->route('jobs.index')->withsuccess('jobs has been delete'.$job->name);
    }
}

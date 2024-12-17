<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;




Route::get('/', function () {



    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return
        view('jobs.index', [
            'jobs' => $jobs
        ]);
});


Route::get('/jobs/create', function () {

    return view('jobs.create');
});


Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id); {
        return view('jobs.show', [
            'job' => $job
        ]);
    }
});


// create
Route::post('/jobs', function () {
    // validation

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});


//edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id); {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }
});

//update
Route::patch('/jobs/{id}', function ($id) {
    // validate
    request()->validate([
        'title' => 'required',
        'salary' => 'required'
    ]);
    //authorize(On hold...)

    $job = Job::findOrFail($id);

    $job->title = request('title');
    $job->salary = request('salary');
    $job->save();
    //update the job
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    //and persit
    //redirect to the job page
    return redirect('/jobs/'. $job->id);
});

//destroy

Route::delete('/jobs/{id}', function ($id) {
    //authorize(On hold...)
    //delete the job
    //redirect to the jobs page
    Job::findOrFail($id)->delete();
 
    return redirect('/jobs');
});


Route::get('/contact', function () {
    return
        view('contact');
});

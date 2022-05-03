<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    // Show single jobs
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    // Show Create Form
    public function create()
    {
        return view('jobs.create');
    }

    // Store Job Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('jobs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Job::create($formFields);

        return redirect('/')->with('message', 'Job created succesfully!');
    }

    // Show Edit Form
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    // Update Job Data
    public function update(Request $request, Job $job)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required',],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $job->update($formFields);

        return back()->with('message', 'Job updated succesfully!');
    }

    // Delete Job
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/')->with('message', 'Job deleted successfully');
    }
}

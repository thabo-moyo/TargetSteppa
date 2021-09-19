<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    private $project;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('users');
        $this->project = new Project();
    }


    /**
     * create a new controller instance.
     *
     * @param  mixed $data
     * @return bool
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $data['user_id'] = $request->user()->id;
        $validated = Validator::make($data, $this->project->getRules());

        if (!$validated->fails()) {
            try {
                $this->project->make($data);

                return  redirect('/')->with('success', 'Projected Added');

            } catch (\Illuminate\Database\QueryException $exception) {

                return  \back()->withErrors($exception->getMessage());

            }
        }

        return  \back()->withErrors($validated);
    }
}

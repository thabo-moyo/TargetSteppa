<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Project::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProjectRequest $request
     * @return array|Project
     */
    public function store(ProjectRequest $request): array | Project
    {
        $validated = $request->validated();

        if (!empty($validated)) {
            $data = $request->all();
            $data['user_id'] = $request->user()->id ?? Auth::id();

            try {
                return Project::create($data);

            } catch (\PDOException $exception) {
                Log::info('Failed to Create Project: ' . $exception->errorInfo);
                return ['Error' => 'Failed to create new project' . $exception->errorInfo];

            }

        }

        return ['Error' => 'Failed Validation. '];
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @return Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return Response
     */
    public function destroy(Project $project)
    {
        //
    }
}

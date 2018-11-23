<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Task;
use App\repositories\TaskRepository;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $repository;

    function __construct(TaskRepository $TaskRepository)
    {
        $this->repository = $TaskRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json($this->repository->geAll());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TaskRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $data=$request->validated();
        return response()->json($this->repository->store($data));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $Task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $Task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $Task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $Task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TaskRequest $request
     * @param  \App\Task $Task
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, Task $Task)
    {
        $data=$request->validated();
        return response()->json($this->repository->update($data, $Task));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $Task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $Task)
    {
        return response()->json($this->repository->remove($Task));
    }
}

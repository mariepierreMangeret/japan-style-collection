<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\ActualityRequest;
use App\Models\Actuality;
use Facades\App\Services\ActualityService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualities =  ActualityService::getActualities();

        return view('admin.actuality.list', compact('actualities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actuality.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ActualityRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActualityRequest $request)
    {
        Actuality::create($request->validated());
        
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $actuality
     * @return \Illuminate\Http\Response
     */
    public function show(Actuality $actuality)
    {
        return view('admin.actuality.show', compact('actuality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $actuality
     * @return \Illuminate\Http\Response
     */
    public function edit(Actuality $actuality)
    {
        return view('admin.actuality.edit', compact('actuality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ActualityRequest  $request
     * @param  int  $actuality
     * @return \Illuminate\Http\Response
     */
    public function update(ActualityRequest $request, Actuality $actuality)
    {
        $actuality->update($request->validated());

        return view('admin.actuality.show', compact('actuality'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $actuality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actuality $actuality)
    {
        $actuality->delete();

        return $this->index();
    }
}

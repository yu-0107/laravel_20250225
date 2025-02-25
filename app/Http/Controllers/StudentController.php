<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('hello student index');
        $data =[
            [
                'id'=>1,
                'name'=>'amy',
            ],
            [
                'id'=>2,
                'name'=>'bob',
            ],
            [
                'id'=>3,
                'name'=>'cat',
            ]
            ];
        return view('student.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function excel()
    {
        dd('hello student controller excel');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function hello()
    {
        dd('hello world');
    }
}

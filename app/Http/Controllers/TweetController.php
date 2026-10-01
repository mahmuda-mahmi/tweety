<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tweets = [
            [
                'author' => 'Alice Johnson',
                'message' => 'Working on something cool with Chirper ... ',
                'time' => '3 hours ago'
            ],
            [
                'author' => 'Bob Smith',
                'message' => 'Just finished a great workout! Feeling energized.',
                'time' => '5 hours ago'
            ],
            [
                'author' => 'Charlie Brown',
                'message' => 'Excited to announce my new project! Stay tuned for updates.',
                'time' => '1 day ago'
            ]
        ];
        return view('home', ['tweets' => $tweets]);
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
        //
    }
}

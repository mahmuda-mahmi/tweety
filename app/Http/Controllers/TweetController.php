<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tweets = Tweet::with('user')
        ->latest()
        ->take(50)
        ->get();
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
        $validated = $request->validate([
            'message' => 'required|string|max:255|min:8',
        ],[
            'message.required' => 'The message field is required.',
            'message.string' => 'The message must be a string.',
            'message.max' => 'The message may not be greater than 255 characters.',
            'message.min' => 'The message must be at least 8 characters.',
        ]);

        auth()->user()->tweets()->create($validated);

        return redirect('/')->with('success', 'Tweet created successfully.');
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
    public function edit(Tweet $tweet)
    {
        $this->authorize('update', $tweet);

        return view('tweet.edit', compact('tweet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tweet $tweet)
    {
        $this->authorize('update', $tweet);

        $validated = $request->validate([
            'message' => 'required|string|max:255|min:8',
        ],[
            'message.required' => 'The message field is required.',
            'message.max' => 'The message may not be greater than 255 characters.',
        ]);


        return redirect('/')->with('success', 'Tweet has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tweet $tweet)
    {
        $this->authorize('delete', $tweet);

        $tweet->delete();

        return redirect('/')->with('success', 'Tweet has been deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Songs;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $songs=Songs::all();

        return view('songs.index',compact('songs'))->with('songs', $songs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'embed_code' => 'required',
            
        ]);
         
           // Create Song
        $song = new Songs;
        $song->title = $request->input('title');
        $song->genre = $request->input('genre');
        $song->user_id = auth()->user()->id;
        $song->embed_code = $request->input('embed_code');
        $song->save();

        return redirect('/songs')->with('success', 'Song Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Songs::find($id);
        return view('songs.show')->with('song', $song);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $song = Songs::find($id);
        
        //Check if song exists before deleting
        if (!isset($song)){
            return redirect('/songs')->with('error', 'No Songs Found');
        }

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/songs')->with('error', 'Unauthorized Page');
        }

        return view('songs.edit')->with('song', $song);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'embed_code' => 'required',
            
        ]);

        $song = Songs::find($id);
         

        // Update Post
        $song->title = $request->input('title');
        $song->genre = $request->input('genre');
        $song->embed_code = $request->input('embed_code');
        $post->save();

        return redirect('/songs')->with('success', 'Song Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $song = Songs::find($id);
        
        //Check if song exists before deleting
        if (!isset($song)){
            return redirect('/songs')->with('error', 'No Songs Found');
        }

        // Check for correct user
        if(auth()->user()->id !==$song->user_id){
            return redirect('/songs')->with('error', 'Unauthorized Page');
        }

        
        
        $post->delete();
        return redirect('/songs')->with('success', 'Song Removed');
    }
}

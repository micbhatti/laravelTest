<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award;
class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('award.index')->with(['awards' => Award::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('award.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flight = Award::create(['title' => $request->title]);
        return redirect()->route('award.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $award = Award::find($id);
        return view('award.edit')->with('award', $award);
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
        $award = Award::find($id);
        $award->title = $request->title;
        $award->save();
        return redirect()->route('award.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $award = Award::find($id);
        $award->delete();
        return redirect()->route('award.all');
    }

    public function search(Request $request)
    {
        $awards = Award::where('title', 'like', '%' . $request->key  . '%')->get();
        return view('award.search')->with(['awards' => $awards, 'key' => $request->key]);
    }
}

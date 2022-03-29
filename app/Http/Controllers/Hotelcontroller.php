<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class Hotelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Hotel::all();
        return view('detail', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_hotel' => 'required',
            'location' => 'required',
            'price' => 'required',
            'fasilitas' => 'required',
            'synopsis' => 'required',
            'image' => 'required',
            'image.*'=> 'image|mimes:jpeg,png,jpg|max:2048']);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path().'/image/', $imageName);
        $hotel = Hotel::create([
            'nama_hotel' => $request['nama_hotel'],
            'location' => $request['location'],
            'price' => $request['price'],
            'fasilitas' => $request['fasilitas'],
            'synopsis' => $request['synopsis'],
            'image'=>$request['image'],
            'image'=>$imageName]);

        return redirect('/hotel');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $item = Hotel::findorFail($id);
        $items = Hotel::all();
        return view('detail', [
            'item' => $item,
            'items' => $items

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Hotel::findorfail($id);
        return view('edit', [
            'item' => $item
        ]);
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
            'nama_hotel' => 'required',
            'location' => 'required',
            'price' => 'required',
            'fasilitas' => 'required',
            'synopsis' => 'required',
            'image' => 'required',
            'image.*'=> 'image|mimes:jpeg,png,jpg|max:2048']);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path().'/image/', $imageName);
        $hotel = Hotel::find($id)->update([
            'nama_hotel' => $request['nama_hotel'],
            'location' => $request['location'],
            'price' => $request['price'],
            'fasilitas' => $request['fasilitas'],
            'synopsis' => $request['synopsis'],
            'image'=>$request['image'],
            'image'=>$imageName]);

        return redirect('detail/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Hotel::find($id);
        $item->delete();
        return redirect('hotel');
    }
}

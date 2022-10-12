<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.image.index', [
            'title' => 'Code-N | - Dashboard Image',
            'description' => 'Code-N adalah blog yang membahas seputar web design dan web programming',
            'poster' => 'logo-icon.png',
            'images' => Image::latest()->search(request(['search']))->paginate(20)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.image.create', [
            'title' => 'Code-N | Add Image',
            'description' => 'Code-N adalah blog yang membahas seputar web design dan web programming',
            'poster' => 'logo-icon.png',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'img' => 'required|image|file|max:1024'
        ]);

        if($request->file('img')) {
            $validateData['img'] = $request->file('img')->store('content-images');
        }

        Image::create($validateData);

        return redirect('/dashboard/image')->with('success', 'Image added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        if($image->img) {
            Storage::delete($image->img);
        }

        Image::destroy($image->id);

        return redirect('/dashboard/image');
    }
}

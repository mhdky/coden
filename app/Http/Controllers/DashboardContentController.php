<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.content.index', [
            'title' => 'Code-N | - Dashboard Content',
            'description' => 'Code-N adalah blog yang membahas seputar web design dan web programming',
            'poster' => 'logo-icon.png',
            'contents' => Content::latest()->searchcontent(request(['search-content']))->paginate(20)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.content.create', [
            'title' => 'Code-N | - Add Content',
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
            'poster' => 'required|image|file|max:1024',
            'title' => 'required|min:5|max:255',
            'slug' => 'required|unique:contents|min:5|max:255',
            'description' => 'required|min:5|max:500',
            'date' => 'required|min:5|max:20',
            'author' => 'required|min:3|max:30',
            'body' => 'required',
            'twitter' => 'required|url',
            'facebook' => 'required|url',            
            'linkedin' => 'required|url',    
            'pinterest' => 'required|url',    
            'telegram' => 'required|url',    
            'whatsapp' => 'required|url',    
            'youtube_on_off' => 'required',  
            'youtube' => ''
        ]);

        if($request->file('poster')) {
            $validateData['poster'] = $request->file('poster')->store('content-images');
        }

        Content::create($validateData);

        return redirect('/dashboard/content')->with('success', 'Content added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        return view('admin.dashboard.content.edit', [
            'title' => 'Code-N | Edit Content',
            'description' => 'Code-N adalah blog yang membahas seputar web design dan web programming',
            'poster' => 'logo-icon.png',
            'content' => $content
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $rules = [
            'poster' => 'image|file|max:1024',
            'title' => 'required|min:5|max:255',
            'description' => 'required|min:5|max:500',
            'date' => 'required|min:5|max:20',
            'author' => 'required|min:3|max:30',
            'body' => 'required',
            'twitter' => 'url',
            'facebook' => 'required|url',            
            'linkedin' => 'required|url',    
            'pinterest' => 'required|url',    
            'telegram' => 'required|url',    
            'whatsapp' => 'required|url',    
            'youtube_on_off' => 'required',  
            'youtube' => ''
        ];
        
        if($request->slug != $content->slug) {
            $rules['slug']  = 'required|unique:contents|min:5|max:255';
        }
        
        $validateData = $request->validate($rules);

        if($request->file('poster')) {
            if($request->oldPoster) {
                Storage::delete($request->oldPoster);
            }
            $validateData['poster'] = $request->file('poster')->store('content-images');
        }
        
        Content::where('id', $content->id)->update($validateData);

        return redirect('/dashboard/content')->with('success', 'Content edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        if($content->poster) {
            Storage::delete($content->poster);
        }

        Content::destroy($content->id);

        return redirect('/dashboard/content');
    }
}

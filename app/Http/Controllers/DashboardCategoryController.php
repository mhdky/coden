<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.category.index', [
            'title' => 'Code-N | - Dashboard Content',
            'description' => 'Code-N adalah blog yang membahas seputar web design dan web programming',
            'poster' => 'logo-icon.png',
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.category.create', [
            'title' => 'Code-N | - Dashboard Add Category',
            'description' => 'Code-N adalah blog yang membahas seputar web design dan web programming',
            'poster' => 'logo-icon.png'
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
            'name' => 'required',
            'url' => 'required'
        ]);

        Category::create($validateData);

        return redirect('/dashboard/category')->with('success', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.dashboard.category.edit', [
            'title' => 'Code-N | - Dashboard Add Category',
            'description' => 'Code-N adalah blog yang membahas seputar web design dan web programming',
            'poster' => 'logo-icon.png',
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'url' => 'required'
        ]);
        
        Category::where('id', $category->id)->update($validateData);

        return redirect('/dashboard/category')->with('success', 'Category edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);

        return redirect('/dashboard/category');
    }
}

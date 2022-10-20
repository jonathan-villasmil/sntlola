<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();

            return view('admin/categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/categories.create' , ['category' => new Category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCategoryRequest $request)
    {   
        // $validated = $request->validate([
        //     'name'=> ['required', 'min:4'],
        // ]);

        // $category = new Category;
        // $category->name = $request->input('name');
        // $category->description = $request->input('description');
        // $category->save(); igual  a Category::create

        Category::create($request->validated());

        // session()->flash('status', 'Category Created!');

        return redirect()->route('admin/categories.index')->with('status', 'Category Created!');
        // return to_route('categories.index'); hace lo mismo que(redirect()->route('categories.index'))

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin/categories.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin/categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCategoryRequest $request, Category $category)
    {
        // $validated = $request->validate([
        //     'name'=> ['required', 'min:4'],
        // ]);
        // $category = Category::find($category);

        // $category->name = $request->input('name');
        // $category->description = $request->input('description');
        // $category->save();

        $category->update($request->validated());

        session()->flash('status', 'Category Updated!');

        return redirect()->route('categories.show', $category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('categories.index')->with('status', 'Categoria borrada!');
    }
}

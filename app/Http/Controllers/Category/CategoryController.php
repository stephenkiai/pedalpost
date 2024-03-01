<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * here we retrieve all categories,
     * count the number of post in each category
     * pass that data to the frontend
     */
    public function index()
    {
        $categories = Category::withCount('posts')->get();
        //dd($categories);

        return view('front.account.category_list')->with('categories', $categories);
    }


    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('front.account.new_category');
    }


    /**
     * recieve request from frontend
     * with category name, validate
     * create a new category and store in db
     *
     */
    public function store(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            "category_name" => 'required|unique:categories'
        ]);

        // Create a new category instance
        $category = new Category();
        $category->category_name = $request->category_name;

        // Save the category
        $category->save();

        // Redirect the user back or to a different route
        return redirect()->route('category.index')->with('success', 'Category created successfully!');

    }
    

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        //dd($category);
        return view('front.account.category_edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required|unique:categories',

        ]);

        $category->update([
            'category_name' => $request->category_name,

        ]);

        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
      // Delete the category
      $category->delete();

      // Redirect back with a success message
      return redirect()->back()->with('success', 'Category deleted successfully');
  }
}

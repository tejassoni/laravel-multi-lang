<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Requests\SubCategoryCreateRequest;
use App\Models\Category;

class SubCategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->view('subcategory.index', [
            'categories' => SubCategory::with(['getCatUserHasOne','getParentCatHasOne'])->orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parent_category = Category::where('status',1)->get();
        return view('subcategory.create',\compact('parent_category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryCreateRequest $request)
    {
        $created = SubCategory::create(['name' => $request->name, 'description' => $request->description,'parent_category_id' => $request->select_parent_cat, 'user_id' => auth()->user()->id]);

        if ($created) { // inserted success
            return redirect()->route('subcategory.index')
                ->withSuccess('created successfully...!');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'fails not created..!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subcategory)
    {
        $subcategory->with('getParentCatHasOne')->where('status',1);
        return view('subcategory.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subcategory)
    {
        return view('subcategory.edit', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryCreateRequest $request, SubCategory $subcategory)
    {
        $subcategory->update($request->all());

        return redirect()->route('subcategory.index')
            ->withSuccess('Updated Successfully...!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subcategory)
    {
        $subcategory->delete();

        return redirect()->route('subcategory.index')
            ->withSuccess('Deleted Successfully.');
    }
}

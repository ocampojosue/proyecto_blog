<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(Request $request){
    $request->validate([
        'name'=>'required',
        'slug'=>'required|unique:categories'
    ]);
    $categories = Category::create($request->all());
    return redirect()->route('admin.categories.edit',$categories)->with('info','La categoria se creó con éxito');
    }

    public function show(Category $category){
        return view('admin.categories.show',compact('categories'));
    }


    public function edit(Category $category){
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request, Category $category){
        $request->validate([
            'name'=>'required',
            'slug'=>"required|unique:categories,slug,$category->id"
        ]);
        $category->update($request->all());
        return redirect()->route('admin.categories.edit',$category)->with('info','La categoria se actualizó con éxito');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('admin.categories.index')->with('info','La categoria se eliminó exitosamente');
    }
}

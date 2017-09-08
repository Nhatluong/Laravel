<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function showListCategory(){
        $categories = Category::all();// câu lệnh select * from category
        return view('category.list',["categories" => $categories]);
    }

    public function showAddForm(){
        return view('category.add');
    }

    public function addCategory(Request $request){
        $category = new Category();
        $category->name = $request->input("namecategory");
        $category->save();
        return redirect(route("category.list"));
    }

    public function showEditForm(Request $request, $id){
        $category = Category::find($id); //tìm theo id của nó
        return view("category.edit",["category" => $category]);
    }
    public function editCategory(Request $request,$id){
        $category = Category::find($id);
        $category->name = $request->input("namecategory");
        $category->save();
        return redirect(route("category.list"));
    }
    public function showDeleteForm($id){
        $category = Category::find($id);
        return view("category.delete",["category" => $category]);
    }
    public function deleteCategory(Request $request,$id){
        $category = Category::find($id);
        $category->delete();
        return redirect(route("category.list"));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Category;
use Session;

class CategoryController extends Controller
{
    public function index(){
    	return view('category.index');
    }

    public function create(){
    	return view('category.create');
    }
   public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:10|min:3',
            
        ]);

        if ($validator->fails()) {
        	session::flash('coc','Category Not Created');
            return redirect('category/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $category= new Category();
    $category->name = $request->name;
    $category->save();
    session::flash('cc','Category is Created');
    return redirect('category/create');

        // Store the blog post...
    }

    public function show(){
        $categories = Category::all();
        return view('category.show', compact('categories'));
    }

    public function edit($id){
       $category = Category::find($id);
       return view('category.edit',compact('category'));
    }
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:10|min:3',
            
        ]);

        if ($validator->fails()) {
            session::flash('coc','Category Not Created');
            return redirect('category/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('category/show')->with('cc','Category has been Updated');
    }

    public function Destroy($id){
        $category= Category::find($id);
        $category->delete();
        return redirect('category/show')->with('cd','Category has been Deleted');
    }
 }

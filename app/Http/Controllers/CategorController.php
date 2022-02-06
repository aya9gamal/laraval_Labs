<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use   App\Models\Category;
use  App\Models\Article;
class CategorController extends Controller
{
    //
    public function index(){
        $cates=Category::all();
       
        return view('home',['cates'=>$cates]);
    }
    public function create(){
        return view('create_cate') ;
    }
    public function save(Request $request){
        
      $category=new Category;
      $category->name=$request->name;
      $category->save();
      return redirect('/');
    }
public function delete($id){
    $category = Category::where('id','=', $id)->get(); 
    $category = Category::find($id)->delete();
    // $cateogry = Category::whereId($id)->get();
    //$category = Category::findOrFail($id);

    // if($category)
    // {
    //     $category->delete();
    // }

    return redirect('/');
}
public function edit($id){
    // dd($id);
    $category = Category::findOrFail($id);
    // dd($category);
    return view('edit_cate',['category'=>$category]);
}
public function update(Request $request){
//   return $request->id;
$category=Category::find($request->id);
$category->name=$request->name;
$category->save();
return redirect('/');
}
public function show($id){
    $category = Category::findOrFail($id);
    $article=Article::all();
    $arr=[];
    foreach($article as $artic){
        if($id==$artic['cate_id']){
         array_push($arr,$artic);
        
        }
        // return $arr;
    }
    // return $arr;
    return  view ('category_details',['data' => $category,"array"=> $arr]);
}
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use   App\Models\Category;
use  App\Models\Article;
use App\Http\Requests\StoreCategoryRequest;
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
    public function save(StoreCategoryRequest $request){
        // $validated = $request->validate([
        //     'name' => 'required|min:3|max:255',            
        // ]);
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
public function update(StoreCategoryRequest $request){
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
    // foreach($article as $artic){
    //     if($id==$artic['cate_id']){
    //      array_push($arr,$artic);
    //      }      
    // }
    $comments=Category::find($id)->Articles;
    foreach ($comments as $comment) {
        array_push($arr,$comment);
    }
  
   
    return  view ('category_details',['data' => $category,"array"=> $arr]);
}
}

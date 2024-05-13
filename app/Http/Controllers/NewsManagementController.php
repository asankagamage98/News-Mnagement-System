<?php

namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use \App\Models\NewsManagement as Newsmgt;

class NewsManagementController extends Controller
{


    public function index(){
        return view('pages.home.index');
    }
    public function NewsPage(){
        return view('pages.news.createNews');
    }
   //create a news
   public function createNews(Request $request){
   // dd($request);
        $data = $request->validate([
            'title'=>'string|required',
            'content'=>'string|required',
            'autherName'=>'string|required',
            'publisheDate'=>'date|required',
            'newsType'=>'string|required'
        ]);

        $saveData = Newsmgt::create($data)->all();
        //dd($saveData);
        //return response()->json(['message' => 'News published successfully'], 200);
        return redirect()->back();
   }


    //get all news
   public function getAll(){
        return Newsmgt::all();
   }

   //get news byid
   public function getByID(Request $request , String $id){
        return Newsmgt::find($id);
   }

   //update news
   public function updateNews(Request $request , String $id){
        $findData = Newsmgt::find($id);
        $findData->update($request->all());
        return $findData;
   }

   //delete news
   public function deleteNews(Request $request , String $id){
        Newsmgt::destroy($id);

   }
}

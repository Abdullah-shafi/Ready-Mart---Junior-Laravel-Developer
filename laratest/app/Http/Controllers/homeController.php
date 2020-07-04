<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use Validator;
use DB;


class homeController extends Controller
{
  //home
   public function index(Request $req){
       
         $sec1 = DB::table('blog')
                       ->where('section', 1)
                       ->where('publish',0)
                       ->orderby('id','desc')
                       ->limit(1)
                       ->get();
         $sec1_e = DB::table('blog')
                       ->where('section', 1)
                       ->where('publish',0)
                       ->orderby('id','asc')
                       ->limit(4)
                       ->get();
          $sec_2 = DB::table('blog')
                       ->where('section', 2)
                       ->where('publish',0)
                       ->orderby('id','desc')
                       ->limit(1)
                       ->get(); 
          $sec_2_e = DB::table('blog')
                       ->where('section', 2)
                       ->where('publish',0)
                       ->orderby('id','asc')
                       ->limit(4)
                       ->get();                             

      return view('home.index')
                 ->with('sec1',$sec1)
                 -> with('sec2',$sec1_e)
                 -> with('sec_2',$sec_2)
                 -> with('sec_2_e',$sec_2_e);
      
                
      
    }


     //details
   public function details(Request $req,$id){
       
         $details = DB::table('blog')
                       ->where('id', $id)
                       ->get();
         
                      

      return view('home.details')
                 ->with('details',$details);
      
                
      
    }


    //admin
   public function admin(Request $req){
       
         $all = DB::table('blog')
                      ->where('publish',0)
                       ->get();
                             

      return view('home.admin')
                 ->with('all',$all);
      
                
      
    }

        //admin
   public function admin_unpublished(Request $req,$id){
       
         DB::table('blog')
                        ->where('id',$id)
                        ->update( ['publish' =>1]);

                             

     
      return redirect()->route('home.admin'); 
      
                
      
    }

      //admin_post
   public function post(Request $req){

      return view('home.post');
                
                
      
    }
 
   //admin_post_ipload
   public function post_upload(Request $req){


  $validation = Validator::make($req->all(), [
            'title'=>'bail|required|unique:blog',   
             'type'=>'bail|required',
               'brief' => 'required' ,  
                'body' => 'required' ,  

                 'link' => 'required' , 
                 'pic'=> 'required'   
        ]);
            
       if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

            return redirect()->route('home.post')
                            ->with('errors', $validation->errors())
                            ->withInput();
            }
            else
            {

         if($req->hasFile('pic')){
      $file = $req->file('pic');
        $image=date('mdYHis') . uniqid() .$file->getClientOriginalName();
      if($file->move('image',$image)){

      

$req->session()->flash('upload', '* Uploaded Successfully');
               DB::table('blog')
                    ->insert(
           ['title' =>$req->title, 'type'=>$req->type,'section'=>$req->section,'brief'=>$req->brief,  'body'=>$req->body,'link'=>$req->link,'image'=>$image,'video_id'=>$req->video_id,'publish'=>0]
            );
          
           return redirect()->route('home.post');   
 

      }

      else{
        
      }

    }
    else{

      return redirect()->route('home.post');
     
    }

            }

      
                
                
      
    }


}

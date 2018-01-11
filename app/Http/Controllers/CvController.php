<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use Auth;

use App\Http\Requests\cvRequest;
class CvController extends Controller
{
public function __construct(){
    $this->middleware('auth');
}

	// lister les cvs 
    public function index() {
$listecv=Auth::user()->cvs;
//$listecv= Cv::where('user_id',Auth::user()->id)->get();
return view('cv.index',['cvs'=>$listecv]); }

// formulaire cv 
     public function create() {

return view('cv.create');
    	
    }

//save cv
     public function store(cvRequest $request) {
     	$CV = new Cv();
     	$CV->titre=$request->input('titre');
  	$CV->presentation=$request->input('presentation');
    $CV->user_id=Auth::user()->id;
  	$CV->save();
    session()->flash('success','Le Cv à été Bien Enregisté !! ');
  	return redirect('cvs');

    	
    }
//recuper cv mettre dans formulaire
     public function edit($id) {

$cv=Cv::find($id);
return view('cv.edit',['cv'=>$cv]);
    	
    }
 //   modifer cv
     public function update(cvRequest $request ,$id) {

   $cv= Cv::find($id);
    $cv->titre=$request->input('titre');
     $cv->presentation=$request->input('presentation');
    	$cv->save();
    	return redirect('cvs');
    }
//supprimer cv
     public function destroy(Request $request,$id) {
$cv=Cv::find($id);
$cv->delete();
return redirect('cvs');

    	
    }
public function fouad() {

return view('layouts.acc');
    	
    }


}

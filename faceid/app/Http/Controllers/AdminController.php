<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class AdminController extends Controller
{
    //
    public function getPerson(){
    	$person = Person::paginate(10);
    	return view('admin/person',['persons'=>$person]);
    }
    public function deletePerson($id){
    	$person = Person::find($id);
    	if (!$person) return redirect()->back();
    	$person->delete();
    	return redirect()->back();
    }
    public function getPersonDetail($id){
        return view('admin/person-detail');
    }
}

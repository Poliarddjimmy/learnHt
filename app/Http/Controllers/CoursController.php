<?php

namespace learnHt\Http\Controllers;

use Illuminate\Http\Request;
use learnHt\Http\Requests;
use Auth;
use learnHt\cours;
use Validator;
use learnHt\category;
use learnHt\User;
use learnHt\modul;

class CoursController extends Controller
{
    public function index()
    {
        $cours = cours::get();
        return view('cours', compact('cours'));
    }
    
    
    public function add()
    {
            $category = category::get();
            return view('add_cours', compact('category'));
        
    }

    public function module($id, $nom)
    {
        if(isset(Auth::user()->code))
        {
            return view('add_module', compact('id'));
        }
        else
        {
            return view('/auth/login');
        }
    }

    

    public function addmodule(Request $request)
    {
        if(isset(Auth::user()->code))
        {
        	$input = $request->all();

	        if( modul::create($input))
	        {
	            return back();
	        }
        }
        else
        {
            return view('/auth/login');
        }
    }

    public function create(Request $request)
    {
        if(isset(Auth::user()->code))
        {
        	$input = $request->all();

	        if( cours::create($input))
	        {
	            return redirect('courses');
	        }
        }
        else
        {
            return view('/auth/login');
        }
    }

    public function blo($id)
    {
        $nom = str_replace(array("-"), " ", $id);
        $cours = cours::where('nom_cours', $nom)->get();
        return view('voir', compact('cours', 'id'));
    }

    public function show($id, $tit)
    {
        $nom = str_replace(array("-"), " ", $id);
        $tit = str_replace(array("-"), " ", $tit);
        $cours = cours::where('nom_cours', $nom)->get();
        $module = modul::where('titre', $tit)->get();
        return view('show', compact('module', 'cours', 'id', 'tit'));
    }
	
}

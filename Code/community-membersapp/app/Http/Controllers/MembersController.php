<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
class MembersController extends Controller
{
    //
    function index(){
        $members = Member::latest()->get();
        return view('templates.members', ['members' => $members]);
    }
    function create(){
    	return view('templates.index');
    }
    function store(){
    	$this->validate(request(), [
    		'name'=> 'required',
    		'phone'=> 'required',
    		'email'=> 'required',
    		'month'=>'required',
    		'day'=>'required',
    		'year'=>'required',
    		'address1'=> 'required',
    		'address2'=> 'required'
    	]);
    	Member::create([
    		'name'=> request('name'),
    		'phone'=> request('phone'),
    		'email'=> request('email'),
    		'month'=> request('month'),
    		'day'=> request('day'),
    		'year'=> request('year'),
    		'address1'=> request('address1'),
    		'address2'=> request('address2')
    	]);
    	return redirect('/?post=submitted'); 
    }
}

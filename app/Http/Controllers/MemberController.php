<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{

	public function index(){
		return view('members.index');
	}

	public function create(){
		return view('members.create');
	}

	public function store(){
		
	}

	public function edit($id){
		
	}

	public function update($id){
		
	}

	public function delete($id){
		
	}
}

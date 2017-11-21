<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(){
		return view('groups.index');
	}

	public function create(){
		return view('groups.create');
	}

	public function store(){
		
	}

	public function show($id){
		return view('groups.show');
	}

	public function share($id){
		return view('groups.share');
	}

	public function edit($id){
		
	}

	public function update($id){
		
	}

	public function delete($id){
		
	}
}

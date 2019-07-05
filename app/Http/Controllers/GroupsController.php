<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function Index(Request $request)
    {
       $groups = Groups::all();
      
       return view('groups', compact('groups'));
    }
    public function create(Request $request)
    {
       
    }
    public function store(Request $request)
    {
      
    }
    public function show(Groups $group, Request $request)
    {
       
    }
    public function edit(Request $request)
    {
      
    }
    public function update(Request $request)
    {
       
    }
    public function destroy(Request $request)
    {
       
    }
}


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
}


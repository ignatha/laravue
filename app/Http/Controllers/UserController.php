<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
class UserController extends Controller
{
   public function index()
   {
   	return view('welcome');
   }

   public function api()
   {
   		$user = User::all();
   		return response()->json($user);
   }
}

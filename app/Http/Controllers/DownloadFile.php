<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
//ndihmon te therras Auth
use Illuminate\Support\Facades\Auth;

class DownloadFile extends Controller
{

	public function download(Request $request) 

	{
		//kemi deklaruar se nqs user eshte regjistruar me nje prej kanaleve perkatese do ti shfaqet lista e kanalit perkates ne te kundert errorrrr bicccccccccccc
if ($request->user() && $request->user()->kanalet != 'shqiptare')
{
return view('unauthorized')->with('role', 'shqiptare');
}
 if ($request->user() && $request->user()->kanalet == 'shqiptare')
{
return view('get');
}

  
  
}   
}

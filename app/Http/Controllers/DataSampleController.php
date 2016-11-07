<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\DataSampleRequest;
use App\Http\Controllers\Controller;

class DataSampleController extends Controller
{
    public function getForm()
	{
		return view('dataSample');
	}
	
	public function postForm(DataSampleRequest $request)
	{	
		/* Needed to add to DataBase */
		/*$email = new Email;
		$email->email = something
		$email->save();*/
		
		$file = $request->input('dataSample');
		if (file_exists($file)) 
		{
			$lines = file($file);
			foreach ($lines as $lineContent)
			{
				/* Add to DataBase */
				/*$dataType = split("=",$lineContent);*/
			}
			return view('dataSampleOk',['message' => 'The file correctly imported...']);
		}
		else
		{
			return view('dataSampleOk',['message' => 'The file doesnt exist, try again...']);
		}
		
	}
}

<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests\DataSampleRequest;
use App\Http\Controllers\Controller;

use App\Session;
use App\User;
use App\Activity;

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
            $data = ["geometry" => []];
			$lines = file($file);
			foreach ($lines as $lineContent)
			{
                $d = parse_ini_string($lineContent);
                foreach($d as $k => $v) {
                    if($k != "GEOPOS") {
                        $data[$k] = $v;
                    } else {
                        if (preg_match('#(\\d+\\.\\d+)\\;(\\d+\.\\d+)#', $lineContent, $matches)) {
                            $data["geometry"][] = [(float) $matches[1], (float) $matches[2]];
                        }
                    }
                }

			}

            $activity = Activity::create(['name' => 'derp', 'coefficient' => 1]);
            $session = Auth::user()->sessions()->create([
                "duration" => (int) $data["DURATION"],
                "date" => date("Y-m-d"), // FIXME
                "activity_id" => $activity->id,
                "distance" => (int) $data["DISTANCE"],
                "footsteps" => (int) $data["STEP_NUMBER"],
                "calories" => (int) $data["KALORIES"],
                "geometry" => $data["geometry"],
            ]);

            // Ceci est un test.
            $session = Session::find($session->id);

			return view('dataSampleOk',['message' => 'The file correctly imported...', 'session' => $session]);
		}
		else
		{
			return view('dataSampleOk',['message' => 'The file doesnt exist, try again...']);
		}

	}
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use Illuminate\Http\Request;
use App\Models\Application;
use Exception;
use Illuminate\Support\Facades\Hash;

class ApplicationController extends Controller
{
    public function createApplication(ApplicationRequest $request) {

            $applicaton = new Application;

            $applicaton->first_name = $request->first_name;
            $applicaton->last_name = $request->last_name;
            $applicaton->email = $request->email;
            $applicaton->student_id_number = $request->student_id_number;
            $applicaton->password = Hash::make($request->password);
            $applicaton->save();

            return response([
                'status'    => 'success',
                'message'   => 'Registration Successfully!',
                'data'      => $applicaton
            ], 201);
    }

    public function displayApplicationWithStatusPending() {
        $application = Application::where('status', 'pending')->paginate(10);

        return response([
            'status'    => 'success',
            'message'   =>  'list of pending applications',
            'data'      =>  $application->items(),
        ], 200);
    }

    public function displayApplicationWithStatusApproved() {
        $application = Application::where('status', 'approved')->paginate();

        return response([
            'status'    => 'success',
            'message'   =>  'list of approved applications',
            'data'      =>  $application
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\submitCompleteProfile;
use App\Models\Pain;
use App\Models\Patient;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function profile(){
        $user = Auth::user()->toArray();
        $patient = Patient::where('user_id', $user['id'])->first()->toArray();
        $data = $user + $patient;
        return view('patient.profile', compact('data'));
    }

    public function completeProfile(){

        $pains = Pain::all()->pluck('name', 'id');
        $patient = Patient::where('user_id', Auth::id())->first()->toArray();
        if($patient){
            $patient['email'] = Auth::user()->email;
        }else{
            $patient = [];
        }
        return view('patient.completeProfile', compact('pains', 'patient'));
    }


    public function submitCompleteProfile(submitCompleteProfile $request){
        $user = Auth::user();
        DB::transaction(function () use ($user, $request) {
            $user->update([
                'email' => $request->get('email')
            ]);

            Patient::updateOrCreate(['user_id' => $user->id],
                $request->all());
        }, 3);
        return redirect()->route('patientProfile');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function index(Request $request)
    {
        $residents = Resident::paginate(10);
        return view('resident.index')->with('residents', $residents);
    }

    public function create(Request $request)
    {
        return view('resident.create');
    }

    public function store(Request $request)
    {
        $firstname = $request->firstname;
        $middlename = $request->middlename;
        $lastname = $request->lastname;
        
        $suffix = $request->suffix;
        $alias = $request->alias;
        $gender = $request->gender;

        $birthdate = $request->birthdate;
        $birthplace = $request->birthplace;
        $email = $request->email;

        $contact = $request->contact;
        $citizenship = $request->citizenship;
        $civilstatus = $request->civilstatus;

        $alivedordeceased = $request->alivedordeceased;
        $voterstatus = $request->voterstatus;
        $bloodtype = $request->bloodtype;
        
        $pwd = $request->pwd;
        // $region = $request->region;
        // $province = $request->province;

        // $citymun = $request->citymun;
        // $brgy = $request->brgy;
        $street = $request->street;

        $nationalid = $request->nationalid;
        $remarks = $request->remarks;
        $occupation = $request->occupation;

        $officeaddress = $request->officeaddress;
        $employer = $request->employer;
        $employercontact = $request->employercontact;
        
        Resident::create([
            'firstname' => $firstname,
            'middlename' => $middlename,
            'lastname' => $lastname,

            'suffix' => $suffix,
            'alias' => $alias,
            'gender' => $gender,

            'birthdate' => $birthdate,
            'birthplace' => $birthplace,
            'email' => $email,

            'contact' => $contact,
            'citizenship' => $citizenship,
            'civilstatus' => $civilstatus,

            'alivedordeceased' => $alivedordeceased,
            'voterstatus' => $voterstatus,
            'bloodtype' => $bloodtype,

            'pwd' => $pwd,
            // 'region' => $region,
            // 'province' => $province,

            // 'citymun' => $citymun,
            // 'brgy' => $brgy,
            'street' => $street,

            'nationalid' => $nationalid,
            'remarks' => $remarks,
            'occupation' => $occupation,

            'officeaddress' => $officeaddress,
            'employer' => $employer,
            'employercontact' => $employercontact,
        ]);

        return redirect()->route('resident.index');
    }

    
}

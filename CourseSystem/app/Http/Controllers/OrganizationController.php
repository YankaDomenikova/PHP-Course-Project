<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function allOrganizations(){
        $organization = Organization::all();
        return view('organizations_list_admin', compact('organization'));
    }

    public function add(){
        return view('add_organization');
    }

    public function create(Request  $request){
        $this->validate($request, [
            'organization_name' => 'required',
            'city' => 'required'
        ]);
        $organization  = new Organization();
        $organization->organization_name = $request->organization_name;
        $organization->city = $request->city;
        $organization ->save();

        return redirect('/organizations');
    }

    public function edit(Organization $organization){
        return view('edit_organization', compact('organization'));
    }

    public function update(Request $request, Organization $organization)
    {
        if (isset($_POST['delete'])) {
            $organization->delete();

            return redirect('/organizations');
        } else {
            $this->validate($request, [
                'organization_name' => 'required',
                'city' => 'required'
            ]);
            $organization->organization_name = $request->organization_name;
            $organization->city = $request->city;

            $organization->save();
            return redirect('/organizations');
        }
    }
}

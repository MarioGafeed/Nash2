<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\DataTables\PermissionsDatatable;
use Session;
use Validator;

class PermissionController extends Controller
{
    public function index(PermissionsDatatable $dataTable)
    {
        return $dataTable->render('backend.permissions.index', ['title' => trans('main.show-all').' '.trans('main.permissions')]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {

        // dd(Permission::pluck('name')->toArray());
        $roles = Role::get(); //Get all roles
        return view('backend.permissions.create', [
            'title'     => trans('main.permissions'),
            'roles'     => $roles,
        ]);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $rules = [
            'name'         => 'required|unique:permissions|max:50',
        ];
        $validator = Validator::make($request->all(), $rules);
        $validator->SetAttributeNames([
            'name'         => trans('main.permision_name'),
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $name = $request['name'];
        $permission = new Permission();
        $permission->name = $name;

        $roles = $request['roles'];

        $permission->save();

        if (!empty($request['roles'])) { //If one or more role is selected
            foreach ($roles as $role) {
                $r = Role::where('id', '=', $role)->firstOrFail(); //Match input role to db record
                $permission = Permission::where('name', '=', $name)->first(); //Match input //permission to db record
                $r->givePermissionTo($permission);
            }
        }

        // get thye user permissions depinding on then roles
        $permissions = auth()->user()->getAllPermissions()->pluck('name')->toArray();
        // save the persdissions to can Chack on the persissions
        session()->put('user.permissions', $permissions);

        session()->flash('success', trans('main.added-message'));
        // return redirect()->route('permissions.index');
        return redirect()->back();
    }



    public function show($id)
    {
        return view('backend.permissions.show', [
            'title'       => trans('main.role_name'),
            'role'        => $role,
        ]);
    }



    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        $roles = Role::get(); //Get all roles
        return view('backend.permissions.edit', [
            'title'       => trans('main.permissions'),
            'permission' => $permission,
            'roles'     => $roles,
        ]);
    }



    public function update(Request $request, $id)
    {
        $permission = Permission::findOrFail($id);
        $rules = [
            'name'         => 'required|unique:permissions,name,'.$permission->id.',id',
        ];
        $validator = Validator::make($request->all(), $rules);
        $validator->SetAttributeNames([
            'name'         => trans('main.permision_name'),
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        $input = $request->only(['name']);

        $permission->fill($input)->save();


        // get thye user permissions depinding on then roles
        $permissions = auth()->user()->getAllPermissions()->pluck('name')->toArray();
        // save the persdissions to can Chack on the persissions
        session()->put('user.permissions', $permissions);


        session()->flash('success', trans('log.edit_record'));
        return redirect()->route('permissions.index');
    }


    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        //Make it impossible to delete this specific permission
        if ($permission->name == "Admin") {
            session()->flash('error', 'error this permision can not be deleted');
            return redirect()->route('permissions.index');
        }
        $permission->delete();


        // get thye user permissions depinding on then roles
        $permissions = auth()->user()->getAllPermissions()->pluck('name')->toArray();
        // save the persdissions to can Chack on the persissions
        session()->put('user.permissions', $permissions);

        session()->flash('success', trans('log.delete_record'));
        return redirect()->route('permissions.index');
    }
}

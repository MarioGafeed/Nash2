<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\DataTables\RolesDatatable;
use App\DataTables\UserRolesDataTable;
use Validator;

class RoleController extends Controller
{
    public function index(RolesDatatable $dataTable)
    {
        return $dataTable->render('backend.roles.index', ['title' => trans('main.show-all').' '.trans('main.roles')]);
    }

    public function create()
    {
        $permissions = Permission::all(); //Get all permissions
        return view('backend.roles.create', [
            'title' => trans('main.role_name'),
            'permissions' => $permissions
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
             'name'         => 'required|unique:roles',
             'permissions'  => 'required',
         ];
        $validator = Validator::make($request->all(), $rules);
        $validator->SetAttributeNames([
             'name'         => trans('main.role_name'),
             'permissions'  => trans('main.permissions')
         ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        $name = $request['name'];
        $role = new Role();
        $role->name = $name;
        if (array_search('Admin', $request['permissions'])) { // returns false if not found
            $permissions = array_except($request['permissions'], array_search('Admin', $request['permissions']));
        } else {
            $permissions = $request['permissions'];
        }
        $role->save();
        if ($role->name === 'Admin') {
            $role->syncPermissions(Permission::all());
        } else {
            //Looping thru selected permissions
            foreach ($permissions as $permission) {
                if (Permission::find($permission)) {
                    $p = Permission::where('id', '=', $permission)->firstOrFail();
                    //Fetch the newly created role and assign permission
                    $role = Role::where('name', '=', $name)->first();
                    $role->givePermissionTo($p);
                }
            }
        }


        // get thye user permissions depinding on then roles
        $permissions = auth()->user()->getAllPermissions()->pluck('name')->toArray();
        // save the persdissions to can Chack on the persissions
        session()->put('user.permissions', $permissions);


        session()->flash('success', trans('main.added-message'));
        return redirect()->route('roles.index');
    }


    public function show(UserRolesDataTable $dataTable, $id)
    {
        // GetRoleName
        $role = Role::find($id);
        if ($role) {
            return $dataTable->GetRoleName($role->name)->render('backend.roles.show', [
                'title' => trans('main.show-all').' '.trans('main.roles'),
                'show' => $role,
            ]);
        }
        return redirect()->back();
    }


    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('backend.roles.edit', [
            'title'       => trans('main.role_name'),
            'role'        => $role,
            'permissions' => $permissions
        ]);
    }


    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        if ($role) {
            if ($role->name == 'Admin') {
                session()->flash('error', trans('main.error-message-role'));
            } else {
                $rules = [
                    'name'         => 'required|unique:roles,name,'.$id.',id',
                    'permissions'  => 'required',
                ];
                $validator = Validator::make($request->all(), $rules);
                $validator->SetAttributeNames([
                    'name'         => trans('main.role_name'),
                    'permissions'  => trans('main.permisions')
                ]);
                if ($validator->fails()) {
                    return back()->withInput()->withErrors($validator);
                }
                $input = $request->except(['permissions']);
                $permissions = $request['permissions'];
                $role->fill($input)->save();
                $p_all = Permission::all(); //Get all permissions

                foreach ($p_all as $p) {
                    $role->revokePermissionTo($p); //Remove all permissions associated with role
                }

                foreach ($permissions as $permission) {
                    $p = Permission::where('id', '=', $permission)->firstOrFail(); //Get corresponding form //permission in db
                    $role->givePermissionTo($p);  //Assign permission to role
                }

                // get thye user permissions depinding on then roles
                $permissions = auth()->user()->getAllPermissions()->pluck('name')->toArray();
                // save the persdissions to can Chack on the persissions
                session()->put('user.permissions', $permissions);

                session()->flash('success', trans('main.updated'));
            }
            return redirect()->route('roles.index');
        }
        return back()->withErrors(['There Is Some Error']);
    }


    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        if ($role) {
            if ($role->name == 'Admin') {
                session()->flash('error', trans('main.error-message-role'));
            } else {
                session()->flash('success', trans('main.deleted-message'));
                $role->delete();
            }
        }

        // get thye user permissions depinding on then roles
        $permissions = auth()->user()->getAllPermissions()->pluck('name')->toArray();
        // save the persdissions to can Chack on the persissions
        session()->put('user.permissions', $permissions);

        return redirect()->route('roles.index');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class WebAdminsController extends Controller
{
    public function webAdmins()
    {
        $users = User::where(function ($query) {
            $query->where('role', '!=', 0)
                ->orWhereNull('role');
        })->get();
        return view('admin.users.users', compact('users'));
    }
    public function newWebAdmin()
    {
        return view('admin.users.add-web-admin');
    }
    protected function storeWebAdmin(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required'],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                // 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                // 'not_regex:/^(?=.*\b(?:\w)+\b)[\w!@#$%^&*()-=+`~{}\[\]:";\'<>?,.\/]+$/',
            ],
        ], [
            'role.required' => 'Please select admin role',
            'password.required' => 'The password field can\'t be empty.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.regex' => 'The password must contain at least one lowercase letter, one uppercase letter, one number, and one special character.',
            'password.not_regex' => 'The password must not be a simple repeating pattern.',
        ]);

        // Create a new user instance
        $data = new User();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->password = Hash::make($request->password);

        $data->save();

        return redirect()->back()->with('message', 'Added Successfully');
    }
    public function editWebAdmin($name)
    {
        $admin = User::where('name', $name)->firstOrFail();
        return view('admin.users.edit-web-admin', compact('admin'));
    }
    public function updateWebAdmin(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'role' => ['required'],
        ]);

        // Create a new user instance
        $admin = User::findOrFail($id);

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->role = $request->role;

        $admin->update();

        return redirect()->back()->with('message', "{$admin->name} Updated Successfully");
    }
    public function destroyWebAdmin($id)
    {
        $webAdmin = User::findOrFail($id);
        try {
            $webAdmin->delete();
            return redirect()->route('admin.web')->with('message', "{$webAdmin->name} Successfully removed.");
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', 'Something went wrong failed to remove an admin, Please try again.');
        }
    }
}

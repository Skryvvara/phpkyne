<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function work() {
        $projects = DB::table('project')->get();

        return view('work')->with('projects', $projects);
    }

    public function control() {
        $users = User::get();
        $roles = Role::get();
        $permissions = Permission::get();

        return view('roles')->with('users', $users)->with('roles', $roles)->with('permissions', $permissions);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'alias' => ['required', 'string', 'min:3', 'max:20', 'unique:role'],
            'short_alias' => ['required', 'string', 'min:3', 'max:5', 'unique:role'],
            'description' => ['required', 'string', 'min:8'],
        ]);
    }

    public function create_role(Request $request) {
        $data = [
            'alias' => $request->alias,
            'short_alias' => $request->short_alias,
            'description' => $request->description
        ];

        $validator = $this->validator($data);
        if ($validator->fails()) {
            return $validator->messages();
        } else {
            Role::create([
                'alias' => $data['alias'],
                'short_alias' => $data['short_alias'],
                'description' => $data['description']
            ]);
            return redirect()->back();
        }
    }

    public function game() {
        return view('game');
    }

    public function getQuestions() {
        $questions = ["Question 1", "Question 2", "Question 3", "Question 4", "Question 5"];

        return json_encode($questions);
    }
}

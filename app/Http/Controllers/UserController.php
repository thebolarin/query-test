<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Get List of Users
     * 
     * @queryParam  count int The number of records to return. Example 10
     * @queryParam  search_term string The search term. Example Either first_name,last_name,email,telephone
     * 
     * @group  User Management
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , User $user){
        $validator = \Validator::make([
            'search_term' => $request->search_term ?? null,
            "count" => $count ?? null
        ], [
            'search_term' => 'nullable|string|max:100',
            'count' => 'nullable|integer'
        ]);

        if ($validator->fails()) {
            return response()
                ->json(["errors" => $validator->errors()], 400);
        }

        $search_term = $request->search_term;
        $count = isset($request->count) ? $request->count : 10;
        
        $users = $user->newQuery();

        if(isset($search_term) && !is_null($search_term) && !empty($search_term))
        {
            $users->search($search_term);
        }

       return view('index', ['users' => $users->simplePaginate($count)]);
    }
}

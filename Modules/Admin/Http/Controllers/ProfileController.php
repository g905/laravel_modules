<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        return view('admin::profile.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $user = User::getOneById($request->user()->id);
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->company = $request->get('company');
        $user->description = $request->get('description');
        $user->city = $request->get('city');
        $user->address = $request->get('address');
        $user->country = $request->get('country');
        $user->zip = $request->get('zip-code');

        if($request->hasFile('file'))
        {
            $destinationPath = public_path('uploads/avatars/');
            $fileName = $user->id . '.jpg';

            $request->file('file')->move($destinationPath, $fileName);
            $user->image  = $fileName;
        }

        if($user->save())
        {
            return back()->with('success','User data updated successfully!');
        } else {
            return back()->with('error', 'something wrong');
        }

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}

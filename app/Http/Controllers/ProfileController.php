<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\EditUserSettingsRequest;

class ProfileController extends Controller {

    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show', 'verify');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::isActive()->paginate();

        return view('profiles.index', compact('users'));
    }


    /**
     * Display the specified resource.
     *
     * @param  string $username
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::isActive()->where('username', $username)->with('profile')->firstOrFail();

        return view('profiles.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::where('username', auth()->user()->username)->firstOrFail();

        return view('profiles.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        auth()->user()->profile()->update([
            'name'          => request('name'),
            'location'      => request('location'),
            'date_of_birth' => request('date_of_birth')
        ]);

        return redirect()->back()->with('flash', 'Profile updated.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function settings()
    {
        return view('profiles.settings');
    }

    /**
     * Update user settings
     *
     * @param EditUserSettingsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSettings(EditUserSettingsRequest $request)
    {
        if (auth()->user()->email !== request('email'))
        {
            auth()->user()->unverifyEmail();
        }

        auth()->user()->update([
            'email' => request('email')
        ]);

        return redirect()->back()->with('flash', 'Settings updated.');
    }

    /**
     * Show the form for editing the password.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function password()
    {
        return view('profiles.password');
    }

    /**
     * Update user password
     *
     * @param EditUserSettingsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(UpdatePasswordRequest $request)
    {
        auth()->user()->update([
            'password' => bcrypt(request('password'))
        ]);

        return redirect()->back()->with('flash', 'Password updated.');
    }

    /**
     * Verify email address.
     *
     * @param $token
     * @return bool|\Illuminate\Http\RedirectResponse
     */
    public function verify($token)
    {
        if (!$token)
        {
            return false;
        }

        $user = User::where('confirm_token', $token)->firstOrFail();
        $user->
        verifyEmail();


        auth()->loginUsingId($user->id);

        return redirect('dashboard')->with(['flash' => 'Your email address has now been verified.']);
    }

    /**
     * Confirmation page of account deactivation.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function confirmDeactivation()
    {
        return view('profiles.deactivate');
    }

    /**
     * Deactivate users profile.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deactivate()
    {
        auth()->user()->deactivateAccount();

        auth()->logout();

        return redirect('/')->with(['flash' => 'Your account has been deactivated.']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Send me the request.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function make()
    {
        return redirect()->back()->with(['flash' => 'Your request has been made, I will get back to you shortly.']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MailingList;

class MailingListController extends Controller
{
    public function store(Request $request)
    {	
    	$request->validate([
    		'email' => 'required|email|unique:mailing_lists',
    	]);

    	$member = new MailingList;
    	$member->email = $request->input('email');
    	$member->save();

    	return redirect()
    		->back()
    		->with('message', "Congratulations, you have been subscribed!");
    }
}

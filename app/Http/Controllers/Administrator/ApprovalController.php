<?php

namespace App\Http\Controllers\Administrator;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Status;

class ApprovalController extends Controller
{
    // notify admin of registered users through email
    // (no code) link on email should redirect admin to view accounts
    // (with code) notify admin on new user accounts
    // list all registered doctors
    // when accept button is clicked, change user status to Status::ACCEPTED
    // when reject button is clicked, change user status to Status::REJECTED

    public function index ()
    {
        // list all registered doctors
        $users = User::with('status')->where('is_admin', 0)->get();

        return view('admin.modules.accounts.index')->with([
            'users' => $users
        ]);
    }

    public function changeStatus (Request $request)
    {
        $request->only('user', 'status');

        $status = $request->status;

        $request->validate([
            'status' => 'int|exists:statuses,id',
            'user' => 'int|exists:users,id',
        ]);

        $user = User::findOrFail($request['user']);

        $user->status_id = $status == Status::TYPE_ACCEPTED ? Status::TYPE_ACCEPTED : Status::TYPE_REJECTED;
        $user->save();

        return redirect()->route('admin.accounts.index');
        // change user status (either accepted or rejected)
        // redirect user to index
    }
}

<?php

namespace App\Http\Middleware;

class ApprovalMiddleware
{
    public function handle($request, $next)
    {
        if (auth()->check()) {
            if (!auth()->user()->approved){
                auth()->logout();

                return redirect()->route('login')->with('message', trans('Thank you for your interest. Kindly wait for Metafix admin approval.'));

            } 
        }

        return $next($request);
    }
}
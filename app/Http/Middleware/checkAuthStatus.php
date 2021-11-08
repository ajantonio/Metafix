<?php

namespace App\Http\Middleware;

use App\Models\Status;
use Closure;
use Illuminate\Http\Request;

class checkAuthStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()) {
            switch (auth()->user()->status_id) {
                case Status::TYPE_ACCEPTED:
                    return $next($request);
                    break;
                case Status::TYPE_PENDING:
                    return $this->redirectLogout('Thank you for your interest. Kindly wait for Metafix admin approval.', 'success');
                    break;
                case Status::TYPE_REJECTED:
                    return $this->redirectLogout('Your account is rejected.', 'danger');
                    break;
                default:
                    return $this->redirectLogout('An error occurred. Please try again.');
                    break;
            }
        }
    }

    protected function redirectLogout($message, $type = 'info') {
        auth()->logout();
        return redirect()->route('login')->with([
            'message' => $message,
            'colorClass' => 'alert-'.$type
        ]);
    }
}

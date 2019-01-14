<?php
namespace App\Http\Middleware;
use Closure;
use Session;
use Log;

class SessionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $email = Session::get('email');
        if($email)
            return $next($request);
        else {
            return redirect('/login');
        }
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateJWT
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
        $token = $request->cookie('token');
        if($token){
            $tokenParts = explode(".", $token);  
            $tokenHeader = base64_decode($tokenParts[0]);
            $tokenPayload = base64_decode($tokenParts[1]);
            $jwtHeader = json_decode($tokenHeader);
            $jwtPayload = json_decode($tokenPayload);
            $request->attributes->add(['jwtEmail' => $jwtPayload->username, 'jwtOrg' => $jwtPayload->orgName]);
            view()->share('jwtEmail', $jwtPayload->username);
            view()->share('jwtOrg', $jwtPayload->orgName);
            return $next($request);
        }

        return redirect('login');
    }
}

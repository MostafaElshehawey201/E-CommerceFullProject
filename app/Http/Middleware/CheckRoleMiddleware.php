<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMiddleware
{

    public function handle(Request $request, Closure $next, ...$roles): Response
{
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    // هنا $roles هتبقى Array فيها القيم كلها: ["SuperAdmin","Admin","Employee"]
    if (!in_array(Auth::user()->role->name, $roles)) {
        abort(403, 'غير مسموح لك بالدخول.');
    }
    return $next($request);
}
}

<?php

namespace App\Http\Middleware;

use App\Models\Department;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminDepartmetMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->route('department') == 'developer') {
            return $next($request);
        } else {

            $department = Department::where('slug', $request->route('department'))->first();

            if (!$department) {


                abort(403, 'Department not found.');
            } else {

                $position = Auth::guard('admin')->user()->positions->firstWhere('department_id', $department->id);

                if (!$position) {
                    abort(403, 'Unauthorized access to this department.');
                } elseif ($position->pivot->is_active == false) {
                    abort(403, 'Your position in this department is inactive. Please contact the administrator.');
                }
            }

            return $next($request);
        }
    }
}

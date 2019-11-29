<?php
namespace App\Http\Middleware;
use Closure;
class Student
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->role->name == 'teacher' OR auth()->user()->role->name == 'administrator') {
            return $next($request);
        } elseif (auth()->user()->role->name == 'parent') {
            if ($request->student->parent_id == auth()->user()->id) {
                return $next($request);
            }
        }
        return redirect(404);
    }
}
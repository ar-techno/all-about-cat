<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use App\menu;
use App\aksesmenu;
use App\aksessubmenu;
class hakakses
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
        $user       =  \Auth::user();
        $current    =   explode(".", Route::currentRouteName());
        $menu       =   menu::where('link', $current[0])->first();
        if (is_null($menu->parent_menu_id)) {
            $akses       =   aksesmenu::where('menu_id',$menu->id)->get();
        }
        else
        {
            $akses       =   aksessubmenu::where('menu_id',$menu->id)->get();
        }
        foreach ($akses as $key) {
            if ($user->akses_group_id == $key->akses_group_id) {
                return $next($request);
            }
            else
            {
                if ($user->akses_group_id == 99) {
                    return redirect('/info-acount');
                }
                
            }
        }


        abort('404');
    }
}

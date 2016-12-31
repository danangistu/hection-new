<?php

namespace App\Http\Middleware;

use Closure;

class Activity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handleAct()
    {
        $userId = getUser()->id;
        
        $action = getUser()->username.' '.webarq()->getAction()->title.' '.webarq()->getMenu()->title;
        
        injectModel('UserActivity')->create([
            'user_id'   => $userId,
            'action'    => $action,
        ]);
    }

    public function handle($request, Closure $next)
    {

        if(isset($request))
        {
            if($request->isMethod('get') && webarq()->getAction()->slug == 'delete')
            {
                $this->handleAct();
            }

            if($request->isMethod('post'))
            {
                $this->handleAct();
            } 
        }
                
        
        return $next($request);
    }
}

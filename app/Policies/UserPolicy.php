<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function before()
    {
        dump('policy before');
        return true;
    }

    //    public function viewAny(User $user)
//    {
//        dump('viewAny');
//        return false;
//    }

    public function fallback($original)
    {
        // $original === 'viewAny'
        dump('fallback');
        return true;
    }
}

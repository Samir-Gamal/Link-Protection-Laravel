<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CheckPasswordPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function checkPassword()
    {
        $user = User::find(auth()->user()->id);
        if ($user->password_route == 0) {
            return true;
        }
        return false;
    }
}

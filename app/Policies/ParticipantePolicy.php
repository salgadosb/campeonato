<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class ParticipantePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function update($user, $part)
    {
        return $user->isAutor($part);
    }
}

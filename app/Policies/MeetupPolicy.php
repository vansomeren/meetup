<?php

namespace App\Policies;

use App\User;
use App\Models\Meetup;

class MeetupPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \App\Meetup  $meetup
     * @return bool
     */
    public function update(User $user, Meetup $meetup)
    {
        return $user->id === $meetup->owner_id;
    }
    /**
     * Determine if the given post can be deleted by the user.
     *
     * @param  \App\User  $user
     * @param  \App\Meetup  $meetup
     * @return bool
     */
    public function delete(User $user, Meetup $meetup) {

        return $user->id === $meetup->owner_id;
    }


}
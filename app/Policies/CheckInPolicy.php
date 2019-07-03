<?php

namespace App\Policies;

use App\User;
use App\CheckIn;
use Illuminate\Auth\Access\HandlesAuthorization;

class CheckInPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any check ins.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the check in.
     *
     * @param  \App\User  $user
     * @param  \App\CheckIn  $checkIn
     * @return mixed
     */
    public function view(User $user, CheckIn $checkIn)
    {
        return $user->profile->id === $checkIn->profile_id;
    }

    /**
     * Determine whether the user can create check ins.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the check in.
     *
     * @param  \App\User  $user
     * @param  \App\CheckIn  $checkIn
     * @return mixed
     */
    public function update(User $user, CheckIn $checkIn)
    {
        return $user->profile->id === $checkIn->profile_id;
    }

    /**
     * Determine whether the user can delete the check in.
     *
     * @param  \App\User  $user
     * @param  \App\CheckIn  $checkIn
     * @return mixed
     */
    public function delete(User $user, CheckIn $checkIn)
    {
        return $user->profile->id === $checkIn->profile_id;
    }

    /**
     * Determine whether the user can restore the check in.
     *
     * @param  \App\User  $user
     * @param  \App\CheckIn  $checkIn
     * @return mixed
     */
    public function restore(User $user, CheckIn $checkIn)
    {
        return $user->profile->id === $checkIn->profile_id;
        //
    }

    /**
     * Determine whether the user can permanently delete the check in.
     *
     * @param  \App\User  $user
     * @param  \App\CheckIn  $checkIn
     * @return mixed
     */
    public function forceDelete(User $user, CheckIn $checkIn)
    {
        return $user->profile->id === $checkIn->profile_id;
    }
}

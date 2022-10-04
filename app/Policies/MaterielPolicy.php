<?php

namespace App\Policies;

use App\Models\Materiel;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Str;

class MaterielPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {

    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Materiel $materiel)
    {
        return ($materiel->unite = $user->getPersonnel()->id) and (Str::lower($user->getPersonnelName()) == "chef");
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Materiel $materiel)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Materiel $materiel)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Materiel $materiel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Materiel $materiel)
    {
        //
    }
}

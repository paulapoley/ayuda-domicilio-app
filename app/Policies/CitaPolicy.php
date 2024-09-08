<?php

namespace App\Policies;

use App\Models\Cita;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CitaPolicy
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
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Cita $cita)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $cita->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $cita->profesional_id == $user->profesional->id);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Cita $cita)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $cita->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $cita->profesional_id == $user->profesional->id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Cita $cita)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $cita->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $cita->profesional_id == $user->profesional->id);
    }
    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Auth\Access\Response|bool
     */
    /*
    public function restore(User $user, Cita $cita)
    {
        //
    */

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Auth\Access\Response|bool
     */
    /*
    public function forceDelete(User $user, Cita $cita)
    {
        //
    }*/
    public function attach_servicio(User $user, Cita $cita)
    {
        return true;
    }

    public function detach_servicio(User $user, Cita $cita)
    {
        return true;
    }
}

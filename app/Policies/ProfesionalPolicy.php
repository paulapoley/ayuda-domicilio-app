<?php

namespace App\Policies;

use App\Models\Profesional;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfesionalPolicy
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
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Profesional $profesional)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $profesional->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $profesional->profesional_id == $user->profesional->id);
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
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Profesional $profesional)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $profesional->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $profesional->profesional_id == $user->profesional->id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Profesional $profesional)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $profesional->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $profesional->profesional_id == $user->profesional->id);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Profesional $profesional)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $profesional->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $profesional->profesional_id == $user->profesional->id);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Profesional $profesional)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $profesional->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $profesional->profesional_id == $user->profesional->id);
    }
}

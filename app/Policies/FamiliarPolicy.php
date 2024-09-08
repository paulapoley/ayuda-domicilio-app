<?php

namespace App\Policies;

use App\Models\Familiar;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FamiliarPolicy
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
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Familiar $familiar)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $familiar->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $familiar->profesional_id == $user->profesional->id);
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
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Familiar $familiar)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $familiar->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $familiar->profesional_id == $user->profesional->id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Familiar $familiar)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $familiar->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $familiar->profesional_id == $user->profesional->id);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Familiar $familiar)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $familiar->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $familiar->profesional_id == $user->profesional->id);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Familiar $familiar)
    {
        return $user->tipo_usuario_id == 3 || ($user->tipo_usuario_id == 2 && $familiar->familiar_id == $user->familiar->id) || ($user->tipo_usuario_id == 1 && $familiar->profesional_id == $user->profesional->id);
    }
}

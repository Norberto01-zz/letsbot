<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 02/02/18
 * Time: 05:15 PM
 */
namespace App\Repositories;

use App\User;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}

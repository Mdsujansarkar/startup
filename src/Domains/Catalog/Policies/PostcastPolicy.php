<?php
declare(strict_types=1);
namespace App\Policies;

use Castr\Domains\Shared\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostcastPolicy
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
}

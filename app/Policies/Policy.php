<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Gate;

class Policy
{
    use HandlesAuthorization;

    public function viewAny($user)
    {
        return $this->gateAllows('viewAny');
    }

    public function gateAllows($function)
    {
        $model = str_replace(
            'Policy',
            null,
            (new \ReflectionClass($this))->getShortName()
        );
        $permission = $function . $model;

        return Gate::allows($permission);
    }

    public function __call($name, $arguments)
    {
        return $this->gateAllows($name);
    }
}

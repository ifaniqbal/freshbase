<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class SpatieLaravelPermissionTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testBasicUsage()
    {
        $role = Role::create(['name' => 'writer']);
        $permission = Permission::create(['name' => 'edit articles']);
        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        $user = User::create([
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
        ]);
        $user->givePermissionTo('edit articles');
        $user->assignRole('writer');

        $this->assertEquals(1, $user->roles->count());
        $this->assertEquals(1, $user->permissions->count());
        $this->assertEquals(1, $role->permissions->count());
    }
}

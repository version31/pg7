<?php

use Illuminate\Database\Seeder;

class UserSync extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            1 => 'admin',
            2 => 'provider',
            3 => 'user',
        ];

        $old_users = \App\Old\User::whereNotNull('mobile')->get();

        foreach ($old_users as $old) {
            $role = $roles[$old['role_id']];

            if(! in_array($old['gender'] , ['male','female']))
                $old['gender'] = 'not-selected';

            unset($old['role_id']);
            unset($old['count_video']);
            unset($old['limit_insert_video']);
            $user = \App\User::create($old->toArray());
            $user->assignRole($role);

        }
    }
}

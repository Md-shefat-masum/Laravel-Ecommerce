<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();

        $user = new User();
        $user->role_id = 1;
        $user->first_name = 'Mr.Super';
        $user->last_name = 'Admin';
        $user->username = 'super_admin';
        $user->photo = 'avatar.png';
        $user->phone = '+880 123654789';
        $user->email = 'superadmin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->slug = 'super_admin';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new User();
        $user->role_id = 2;
        $user->first_name = 'Mr. vua';
        $user->last_name = 'Admin';
        $user->username = 'admin';
        $user->photo = 'avatar.png';
        $user->phone = '+880 123654789';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->slug = 'admin';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new User();
        $user->role_id = 3;
        $user->first_name = 'Mr. vua';
        $user->last_name = 'modarator';
        $user->username = 'modarator';
        $user->photo = 'avatar.png';
        $user->phone = '+880 123654789';
        $user->email = 'modarator@gmail.com';
        $user->password = Hash::make('12345678');
        $user->slug = 'modarator';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new User();
        $user->role_id = 4;
        $user->first_name = 'Mr. vua';
        $user->last_name = 'user';
        $user->username = 'user';
        $user->photo = 'avatar.png';
        $user->phone = '+880 123654789';
        $user->email = 'user@gmail.com';
        $user->password = Hash::make('12345678');
        $user->slug = 'user';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new User();
        $user->role_id = 5;
        $user->first_name = 'Mr. vua';
        $user->last_name = 'subscriber';
        $user->username = 'subscriber';
        $user->photo = 'avatar.png';
        $user->phone = '+880 123654789';
        $user->email = 'subscriber@gmail.com';
        $user->password = Hash::make('12345678');
        $user->slug = 'subscriber';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();
    }
}

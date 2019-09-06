<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->times(50)->make();
        User::insert($user->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
//        $user->name = 'xiangyang';
//        $user->email = '827544120@qq.com';
//        $user->save();
        $user->update([
            'name' => 'xiangyang',
            'email' => '827544120@qq.com',
        ]);
    }
}

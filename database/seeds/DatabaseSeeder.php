<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $users = factory(App\User::class, 50)->create();

        $users->each(function (App\User $user) use ($users) {
            $messages = factory(App\Messege::class)
                ->times(20)
                ->create([
                    'user_id' => $user->id,
                ]);
            $messages->each(function (App\Messege $messege) use ($users){
                factory(App\Response::class, random_int(1, 10))->create([
                    'message_id' => $messege->id,
                    'user_id' => $users->random(1)->first()->id,
                ]);
            });
                $user->follows()->sync(
                    $users->random(10)
            );
        });
    }
}
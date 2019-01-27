<?php

    use App\User;
    use Illuminate\Database\Seeder;

    class UsersCollectionSeeder extends Seeder
    {
        public function run()
        {
            $user = new User;
            $user->name = 'Admin';
            $user->email = 'figured@figured.figured';
            $user->password = bcrypt('figured');
            $user->save();
        }
    }

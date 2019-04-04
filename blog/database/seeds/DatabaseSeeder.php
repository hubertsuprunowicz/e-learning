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
         $this->call(UsersTableSeeder::class);
         $this->call(MessagesTableSeeder::class);
         $this->call(LessonsTableSeeder::class);
         $this->call(LessonEnrollsTableSeeder::class);
         $this->call(AdvertisementsTableSeeder::class);
         $this->call(OpinionsTableSeeder::class);
         $this->call(ResetPasswordTableSeeder::class);
         $this->call(PaymentsTableSeeder::class);
    }
}

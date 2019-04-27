<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Lesson;
use App\Opinion;
use App\Lesson_enroll;
use App\Message;
use App\Payment;
use App\Advertisement;

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

		factory(User::class, 7)
			->create()
			->each(function () {
				factory(Lesson::class, 5)
					->create()
					->each(function () {
						factory(Lesson_enroll::class, 3)->create();
					})
					->each(function () {
						factory(Advertisement::class, 1)->create();
					});
			})
			->each(function () {
				factory(Opinion::class, 6)->create();
			})
			->each(function () {
				factory(Message::class, 14)->create();
			})
			->each(function () {
				factory(Payment::class, 2)->create();
			});

    }
}

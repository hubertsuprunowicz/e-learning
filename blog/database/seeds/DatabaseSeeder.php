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
			->each(function ($user) {
				factory(Lesson::class, 4)
					->create(['author_id' => $user->id])
					->each(function ($lesson) {
						factory(Lesson_enroll::class, 10)->create(['lesson_id' => $lesson->id]);
					})
					->each(function ($lesson) {
						factory(Advertisement::class, 1)
							->create(['lesson_id' => $lesson->id])
							->each(function ($user, $lesson) {
								factory(Payment::class, 5)->create(['user_id' => $user->id]);
							})
							->each(function ($user) {
								factory(Opinion::class, 6)->create(['user_id' => $user->id]);
							});

					});

			})

			->each(function ($user) {
				factory(Message::class, 14)->create(['user_id' => $user->id, 'sent_to' => $user->name]);
			});

    }
}

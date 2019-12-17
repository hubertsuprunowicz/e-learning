<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$lesson = new \App\Lesson([
			'author_id' => 2,
			'date' => '2018-08-03 17:16:00',
			'price' => 160.50,
			'subject' => 'HTML course',
			'length' => 120,
			'student_limit' => 5,
			'description' => 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\n\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.',
            'video_link' => 'https://player.vimeo.com/video/137857207'
		]);
		$lesson->save();

		$lesson = new \App\Lesson([
			'author_id' => 3,
			'date' => '2018-08-30 14:16:00',
			'price' => 355.86,
			'subject' => 'CSS course',
			'length' => 220,
			'student_limit' => 15,
			'description' => 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\n\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.',
            'video_link' => 'https://player.vimeo.com/video/137857207'
		]);
		$lesson->save();

		$lesson = new \App\Lesson([
			'author_id' => 4,
			'date' => '2018-04-11 01:35:00',
			'price' => 99.15,
			'subject' => 'JS course',
			'length' => 120,
			'student_limit' => 4,
			'description' => 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\n\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.',
            'video_link' => 'https://player.vimeo.com/video/137857207'
		]);
		$lesson->save();

		$lesson = new \App\Lesson([
			'author_id' => 5,
			'date' => '2018-10-03 02:19:00',
			'price' => 393.39,
			'subject' => 'PHP course',
			'length' => 120,
			'student_limit' => 20,
			'description' => 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.',
            'video_link' => 'https://player.vimeo.com/video/137857207'
		]);
		$lesson->save();

		$lesson = new \App\Lesson([
			'author_id' => 6,
			'date' => '2018-08-30 17:30:00',
			'price' => 235.25,
			'subject' => 'Laravel course',
			'length' => 120,
			'student_limit' => 100,
			'description' => 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.',
            'video_link' => 'https://player.vimeo.com/video/137857207'
		]);
		$lesson->save();

		$lesson = new \App\Lesson([
			'author_id' => 4,
			'date' => '2018-09-04 18:27:00',
			'price' => 92.44,
			'subject' => 'SQL course',
			'length' => 120,
			'student_limit' => 55,
			'description' => 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\n\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.',
            'video_link' => 'https://player.vimeo.com/video/137857207'
		]);
		$lesson->save();

		$lesson = new \App\Lesson([
			'author_id' => 3,
			'date' => '2018-11-20 14:10:00',
			'price' => 47.80,
			'subject' => 'Java course',
			'length' => 120,
			'student_limit' => 2,
			'description' => 'Fusce consequat. Nulla nisl. Nunc nisl.\n\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.',
            'video_link' => 'https://player.vimeo.com/video/137857207'
		]);
		$lesson->save();
    }
}

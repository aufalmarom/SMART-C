<?php

use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::insert([
            [
                'name' => 'Responden 3',
                'rating' => '4',
                'review' => 'awesome',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Responden 4',
                'rating' => '5',
                'review' => 'excellent',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
    }
}

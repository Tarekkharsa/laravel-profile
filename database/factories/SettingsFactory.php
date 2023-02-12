<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'home_title'=> "Building beautiful web experiences.",
            'my_work_excerpt' => 'I’ve had the pleasure of working with multiple Fortune 500 companies, designing and implementing both frontend and backend.',
            'work_experience_excerpt' => 'I’ve had the pleasure of working with multiple Fortune 500 companies, designing and implementing both frontend and backend.',
            'twitter'=>  'https://twitter.com/',
            'skype' => 'https://www.skype.com',
            'phone_number' => '555-555-1234',
            'linkedin' => 'https://www.linkedin.com',
        ];
    }
}

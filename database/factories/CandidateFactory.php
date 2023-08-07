<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_party'=> rand(1,200),
            'photo'=> $this->faker->randomElement([
                'http://127.0.0.1:8000/assets/img/team/profile-picture-3.jpg',
                'http://127.0.0.1:8000/assets/img/team/profile-picture-2.jpg',
                'http://127.0.0.1:8000/assets/img/team/profile-picture-1.jpg',
                'http://127.0.0.1:8000/assets/img/team/profile-picture-4.jpg',
                'http://127.0.0.1:8000/assets/img/team/profile-picture-5.jpg',

            ]),
            'name'=> $this->faker->lastName,
            'lastname'=> $this->faker->lastName,
            'firstname'=> $this->faker->firstName,
            'gender'=> $this->faker->randomElement(['Homme','Femme']),
            'slogan'=> $this->faker->sentence(10),
            'id_facebook'=> 'http://127.0.0.1:8000/candidates',
            'id_twitter'=>'http://127.0.0.1:8000/candidates',
            'id_linkedIn'=> 'http://127.0.0.1:8000/candidates'

        ];
    }
}

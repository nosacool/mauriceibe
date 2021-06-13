<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'content'=>$this->faker->sentence(20,true),
            'title' => $this->faker->text(),
            'author'=> $this->faker->name(),
            'short_desc' => $this->faker->text(40)

        ];
    }
}

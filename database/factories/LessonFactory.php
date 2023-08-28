<?php

namespace Database\Factories;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{

    protected $model=Lesson::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->sentence(),
            'url'=>'https://www.youtube.com/watch?v=rzy4BRWwGhk&list=RDrzy4BRWwGhk&start_radio=1',
            'iframe'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/ivRG9d_189Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
            'platform_id'=>1,
            ];
    }
}

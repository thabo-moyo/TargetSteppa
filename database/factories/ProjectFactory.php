<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'user_id' => 1,
            'title' => $this->faker->name(),
            'content' => $this->faker->text(),
            'status' => $this->faker->text(5),
            'due_date' => now(),
            'completed' => 0,
            'deleted' => 0,
            'tasks' => \json_encode(['test' => true, 'data' => 'okay']), // password
        ];
    }

    public function run()
    {
        Project::factory()
            ->count(50)
            ->create();
    }
}

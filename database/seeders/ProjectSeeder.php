<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->words(4, true);
            $project->preview = $faker->imageUrl(600, 300, 'jpg');
            $project->repo_url = $faker->url();
            $project->start_date = $faker->dateTimeBetween('-5 month', 'now');
            $project->end_date = $faker->dateTimeBetween($project->start_date, 'now');
            $project->description = $faker->paragraph();
            //dd($project);
            $project->save();
        }
    }
}

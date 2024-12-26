<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            Project::create([
                'title' => 'project_' . $i + 1,
                'description' => 'description_' . $i + 1,
                'about' => '',
                'technologies' => 'project, abcd',
                'tags' => 'tag1, tag2',
                'github_link' => 'http://localhost/phpmyadmin/index.php?route=/table/structure&db=cv&table=projects',
                'images' => 'image_1, image_2'
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksDatabase extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title'=> 'tarea 1',
            'description'=> 'descripcióntarea 1',
            'status'=> 'completed',
        ]);
        Task::create([
            'title'=> 'tarea 2',
            'description'=> 'descripcióntarea 2',
            'status'=> 'not completed',
        ]);
    }
}

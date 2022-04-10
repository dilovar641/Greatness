<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		//\App\Models\Job::factory()->count(30)->create(); 
		//factory(App\Job::class, 10)->create();
       Job::factory(5)->create();
	   // \DB::table('jobs')
        // ->insert([
            // 'name' => 'Taylor',
            // 'age'  => 21,
			// 'salary' => 200
        // ]);
    }
}

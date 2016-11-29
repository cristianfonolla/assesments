<?php

namespace Scool\Assesments\seeds;


use Illuminate\Database\Seeder;
use Scool\Assesments\Models\Grade;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Grade::class,1)->create();
    }
}

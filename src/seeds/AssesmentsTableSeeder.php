<?php

namespace Scool\Assesments\seeds;

use Illuminate\Database\Seeder;
use Scool\Assesments\Models\Assesment;

/**
 * Class AssesmentsTableSeeder
 */
class AssesmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Assesment::class,1)->create();
    }
}

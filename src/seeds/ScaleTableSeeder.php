<?php
namespace Scool\Assesments\seeds;

use Illuminate\Database\Seeder;
use Scool\Assesments\Models\Scale;

class ScaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Scale::class,1)->create();

    }
}

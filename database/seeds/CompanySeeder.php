<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Company::class,20)->create()->each(function($company){
            
        // })
        factory(App\Company::class,20)->make();
    }
}

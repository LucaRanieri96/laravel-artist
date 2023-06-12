<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $labels = [
            'Universal Music Group', 'Sony Music Entertainment', 'Warner Music Group', 'EMI Group', 'BMG Rights Management'
        ];

        foreach ($labels as $label) {
            
            $newLabel = new Label();
            $newLabel->name = $label;
            $newLabel->slug = Str::slug('name');
            $newLabel->save(); 
        }
       
    }
}

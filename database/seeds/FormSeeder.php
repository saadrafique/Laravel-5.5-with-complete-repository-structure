<?php

use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Form::create([
			'store' => 'store 1',
			'title' => 'title 1',
			'title_suffix' => 'month',
			'coupon_code' => 'code 1',
			'aff_url' => 'url here 1',
			'start_date' => date('Y-m-d'),
			'end_date' => date('Y-m-d'),
			'photo' => '/photo/7_photo.jpg'
		]);

        \App\Form::create([
            'store' => 'store 2',
            'title' => 'title 2',
            'title_suffix' => 'year',
            'coupon_code' => 'code 2',
            'aff_url' => 'url here 2',
            'start_date' => date('Y-m-d'),
            'end_date' => date('Y-m-d'),
            'photo' => '/photo/8_photo.jpg'
        ]);
    }
}

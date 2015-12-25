<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$datetime = new DateTime('today');
		
        DB::table('events')->insert([
			'name'			=> 'Pisyek',
			'title' 		=> 'SI Finance',
			'start_time'	=> strtotime($datetime->setTime(10, 00)->format('Y-m-d H:i:s')),
			'end_time'		=> strtotime($datetime->add(new DateInterval('PT1H'))->format('Y-m-d H:i:s')),
		]);
		
		$datetime = new DateTime('tomorrow');
		
		DB::table('events')->insert([
			'name'			=> 'Aron Kumar',
			'title'			=> 'Meeting HR & You',
			'start_time'	=> strtotime($datetime->format('Y-m-d H:i:s')),
			'end_time'		=> strtotime($datetime->add(new DateInterval('PT2H'))->format('Y-m-d H:i:s')),
		]);
		
		$datetime = new DateTime('yesterday');
		
		DB::table('events')->insert([
			'name'			=> 'Jericho',
			'title' 		=> 'HYPE',
			'start_time'	=> strtotime($datetime->setTime(11, 00)->format('Y-m-d H:i:s')),
			'end_time'		=> strtotime($datetime->add(new DateInterval('PT1H'))->format('Y-m-d H:i:s')),
		]);
		
		DB::table('events')->insert([
			'name'			=> 'Remy',
			'title' 		=> 'HC PDC',
			'start_time'	=> strtotime($datetime->setTime(14, 00)->format('Y-m-d H:i:s')),
			'end_time'		=> strtotime($datetime->add(new DateInterval('PT2H'))->format('Y-m-d H:i:s')),
		]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TodoListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'id' => 1,
                'TodoName' => 'Saturday',
                'Isdone' => '1',
                'OrderNum' => '1'
            ),
            array(
                'id' => 2,
                'TodoName' => 'Monday',
                'Isdone' => '',
                'OrderNum' => '2'
            )
        );
        DB::table('todolists')->insert($data);
    }
}

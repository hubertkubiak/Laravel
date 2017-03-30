<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DictsPopulate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('dicts')->insert([
            ['id' => 1, 'nazwa' => 'Plec'],
            ['id' => 2, 'nazwa' => 'PAL']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('dicts')->where('id', '=', '1')->delete();
        DB::table('dicts')->where('id', '=', '2')->delete();
    }
}

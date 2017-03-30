<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DictsValuesPopulate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('dicts_values')->insert([
            ['id' => 1, 'key' => '0', 'desc' => 'kobieta', 'id_dict' => 1],
            ['id' => 2, 'key' => '1', 'desc' => 'mezczyzna', 'id_dict' => 1],
            ['id' => 3, 'key' => '1.2', 'desc' => 'tryb siedzacy', 'id_dict' => 2],
            ['id' => 4, 'key' => '1.3', 'desc' => 'dosc aktywny', 'id_dict' => 2],
            ['id' => 5, 'key' => '1.4', 'desc' => 'srednio aktywny', 'id_dict' => 2],
            ['id' => 6, 'key' => '1.5', 'desc' => 'aktywny', 'id_dict' => 2],
            ['id' => 7, 'key' => '1.6', 'desc' => 'super aktywny', 'id_dict' => 2]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('dicts_values')->where('id', '=', '1')->delete();
        DB::table('dicts_values')->where('id', '=', '2')->delete();
        DB::table('dicts_values')->where('id', '=', '3')->delete();
        DB::table('dicts_values')->where('id', '=', '4')->delete();
        DB::table('dicts_values')->where('id', '=', '5')->delete();
        DB::table('dicts_values')->where('id', '=', '6')->delete();
        DB::table('dicts_values')->where('id', '=', '7')->delete();
    }
}

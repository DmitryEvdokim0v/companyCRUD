<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('number')->nullable(false);
            $table->integer('count_of_goods')->nullable(false);
            $table->timestamps();
            
        });
        DB::table('company')->insert([
            ['name' => 'Компания1', 'address' => 'Адрес1', 'number'=> '+88888888888', 'count_of_goods'=>3],
            ['name' => 'Компания2', 'address' => 'Адрес2', 'number'=> '+88888888888','count_of_goods'=>2],
            [ 'name' => 'Компания3', 'address' => 'Адрес3', 'number'=> '+88888888888','count_of_goods'=>2],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
};

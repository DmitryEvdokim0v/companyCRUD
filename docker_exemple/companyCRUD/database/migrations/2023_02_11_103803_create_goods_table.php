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
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->nullable(false);
            $table->string('name')->nullable(false);
            $table->integer('price')->nullable(false);
            $table->integer('count')->nullable(false);
            $table->timestamps();
        });
        DB::table('goods')->insert([
            ['company_id'=> 1, 'name' => 'Товар1', 'price' => '1000', 'count'=> '15'],
            ['company_id'=> 1, 'name' => 'Товар2', 'price' => '2000', 'count'=> '25'],
            ['company_id'=> 1, 'name' => 'Товар3', 'price' => '3000', 'count'=> '35'],
            ['company_id'=> 2, 'name' => 'Товар1', 'price' => '4000', 'count'=> '45'],
            ['company_id'=> 2, 'name' => 'Товар2', 'price' => '5000', 'count'=> '15'],
            ['company_id'=> 3, 'name' => 'Товар1', 'price' => '6000', 'count'=> '25'],
            ['company_id'=> 3, 'name' => 'Товар2', 'price' => '7000', 'count'=> '15'],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boostings', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->string('current_rank')->default('iron_4');
            $table->integer('league_points')->nullable();
            $table->string('server')->default('1');
            $table->string('queue')->default('1');
            $table->string('roleType')->nullable();
            $table->string('desired_rank')->nullable();
            $table->string('options')->nullable();
            $table->float('price')->default(0);
            $table->integer('status')->default(0);
            $table->integer('wins')->nullable();
            $table->integer('games')->nullable();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE boostings AUTO_INCREMENT = 1000;");

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisions');
    }
}

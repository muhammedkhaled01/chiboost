<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('current_rank')->default('iron_4');
            $table->integer('league_points')->default(0);
            $table->string('server')->default('1');
            $table->string('queue')->default('1');
            $table->string('roleType')->nullable();
            $table->string('desired_rank')->default('iron_3');
            $table->string('options')->nullable();
            $table->float('price')->default(0);
            $table->integer('status')->default(0);
            $table->timestamps();
        });
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

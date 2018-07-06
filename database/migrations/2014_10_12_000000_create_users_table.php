<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 190)->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->unsignedInteger('user_type')->default(3);
            $table->string('photo', 2000)->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('city')->nulable();
            $table->unsignedInteger('state')->nulable();
            $table->unsignedInteger('country')->nulable();
            $table->string('map_coordinates')->nulable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('other')->nullable();
            $table->string('reg')->nullable();
            $table->string('expertise')->nullable();
            $table->text('bio')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->text('preferences')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('blocked_at')->nullable();
            $table->rememberToken();
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('user_type', 'user_type_id')
                ->references('id')
                ->on('user_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('city','city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('state', 'state_id')
                ->references('id')
                ->on('states')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('country', 'country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('city_id')->nullable();
            $table->string('mobile')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('shop_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('website')->nullable();
            $table->text('bio')->nullable();
            $table->enum('gender', ['male', 'female', 'not-selected'])->default('not-selected');;
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->text('address')->nullable();
            $table->integer('count_product')->unsigned()->default(0);
            $table->integer('count_like')->unsigned()->default(0);
            $table->integer('limit_insert_product')->unsigned()->default(0);
            $table->timestamp('shop_expired_at')->nullable();
            $table->decimal('longitude', 10, 8)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->tinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('password');
            $table->string('last_name')->after('first_name');
            $table->string('phone_number')->after('last_name');
            $table->date('dob')->nullable()->after('phone_number');
            $table->string('address')->nullable()->after('dob');
            $table->string('image')->nullable()->after('address');
            $table->string('website')->nullable()->after('image');
            $table->string('city')->nullable()->after('website');
            $table->text('paragraph')->nullable()->after('city');
            $table->string('cover_image')->nullable()->after('paragraph');
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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->date('dob');
            $table->string('address');
            $table->string('image');
            $table->string('website');
            $table->string('city');
            $table->text('paragraph');
            $table->string('cover_image');
        });
    }
};
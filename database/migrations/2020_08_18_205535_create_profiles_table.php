<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            "profiles"
            , function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description")->nullable;
            $table->string("avatar_path")->nullable;
            $table->date("birthday");
            $table->string("facebook_path")->nullable;
            $table->string("instagram_path")->nullable;
            $table->string("twitter_path")->nullable;
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
        Schema::dropIfExists("profiles");
    }
}

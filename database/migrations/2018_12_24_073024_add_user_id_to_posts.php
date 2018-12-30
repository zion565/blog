<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * created this page with terminal commend: php artisan make:migration add_user_id_to_posts
     * 
     * Run the migrations.
     * in terminal commend
     * just for add column user_id to posts table
     * the commend is: "php artisan migrate"
     * 
     * @return void
     */
    public function up()
    {
        Schema::table('posts',function($table){
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts',function($table){
            $table->dropColumn('user_id');
        });
    }
}

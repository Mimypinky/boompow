<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabProp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('Profile',function($table){
        $table->integer('qp_id')->unsigned();
        $table->foreign('qp_id')->references('id')->on('Question_pwd');
        $table->unique('email');
      });
      Schema::table('Users',function($table){
        $table->integer('profile_id')->unsigned();
        $table->foreign('profile_id')->references('id')->on('Profile');
        $table->index('firstname');
        $table->index('lastname');
      });
      Schema::table('Friends',function($table){
        $table->integer('from_uid')->unsigned();
        $table->integer('to_uid')->unsigned();
        $table->integer('action_user_id')->unsigned();
        $table->foreign('from_uid')->references('id')->on('Users');
        $table->foreign('to_uid')->references('id')->on('Users');
        $table->foreign('action_user_id')->references('id')->on('Users');
      });
      Schema::table('Events',function($table){
        $table->integer('created_by')->unsigned();
        $table->index('title');
        $table->index('status');
        $table->integer('event_groupid')->unsigned();
        $table->foreign('created_by')->references('id')->on('Users');
        $table->foreign('event_groupid')->references('id')->on('Join_events');

      });
      Schema::table('Join_events',function($table){
        $table->integer('eventid')->unsigned();
        $table->index('eventid');
        $table->integer('user_id')->unsigned();
        $table->foreign('eventid')->references('id')->on('Events');
        $table->foreign('user_id')->references('id')->on('Users');
      });
      Schema::table('Posts',function($table){
        $table->integer('user_id')->unsigned();
        $table->index('user_id');
        $table->foreign('user_id')->references('id')->on('Users');
        $table->binary('photo')->nullable();
      });
      Schema::table('Comments',function($table){
        $table->integer('user_id')->unsigned();
        $table->index('user_id');
        $table->foriegn('user_id')->references('id')->on('Users');
      });
      Schema::table('Likes',function($table){
        $table->integer('liked_by')->unsigned();
        $table->index('liked_by');
        $table->integer('post_id')->unsigned();
        $table->index('post_id');
        $table->foreign('liked_by')->references('id')->on('Users');
        $table->foregin('post_id')->references('id')->on('Posts');

      });
      Schema::table('Pins',function($table){
        $table->integer('user_id')->unsigned();
        $table->integer('content_id')->unsigned();
        $table->integer('category_id')->unsigned();
        $table->index('user_id');
        $table->index('content_id');
        $table->index('category_id');
        $table->foreign('user_id')->references('id')->on('Users');
        $table->foreign('content_id')->references('id')->on('Contents');
        $table->foreign('category_id')->references('id')->on('Category');
      });
      Schema::table('Chat',function($table){
        $table->integer('from_user_id')->unsigned();
        $table->index('from_user_id');
        $table->foreign('fron_user_id')->references('id')->on('Users');
        $table->integer('to_user_id')->unsigned();
        $table->index('to_user_id');
        $table->foreign('to_user_id')->references('id')->on('Users');
      });
      Schema::table('Notifications',function($table){
        $table->integer('user_id')->unsigned();
        $table->index('user_id');
        $table->foreign('user_id')->references('id')->on('Users');
        $table->integer('noti_type')->unsigned();
        $table->foreign('noti_type')->references('id')->on('Noti_type');
      });
      Schema::table('Contents',function($table){
        $table->integer('cate_id')->unsigned();
        $table->foreign('cate_id')->references('id')->on('Category');
        $table->string('author')->nullable();
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

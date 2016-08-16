<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Profile', function (Blueprint $table) {
         $table->increments('id');
         $table->binary('avatar');
         $table->string('bio');
         $table->date('dob');
         $table->enum('gender', ['male', 'female']);
         $table->integer('qp_id');
         $table->string('email');
         $table->timestamps();
       });
       Schema::create('Question_pwd', function (Blueprint $table) {
          $table->increments('id');
          $table->string('question');
        });
        Schema::create('Users', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('pwdId');
          $table->string('firstname');
          $table->integer('lastname');
          $table->integer('profile_id');
          $table->timestamps();
         });
        Schema::create('Friends', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('from_uid');
          $table->integer('to_uid');
          $table->string('status');//0-pending,1-accepted,2-declined,3-blocked
          $table->integer('action_user_id');
          $table->timestamps();
        });
        Schema::create('Events', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->integer('created_by');
          $table->longtext('description');
          $table->datetime('start_time');
          $table->datetime('finish_time');
          $table->string('status');
          $table->integer('event_groupid');
          $table->integer('link');
          $table->timestamps();
        });
        Schema::create('Join_events', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('eventid');
          $table->integer('user_id');
          $table->string('status');
          $table->timestamps();
        });
        Schema::create('Posts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->longtext('text');
          $table->binary('photo');
          $table->string('type'); //maybe friend'post,event,content
          $table->timestamps();
        });
        Schema::create('Comments', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->string('comment_text');
          $table->timestamps();
        });
        Schema::create('Likes', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('liked_by');
          $table->string('post_id');
          $table->timestamps();
        });
        Schema::create('Contents', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('title');
          $table->longtext('description');
          $table->string('author');
          $table->string('references');
          $table->integer('category_id');
          $table->timestamps();
        });
        Schema::create('Category', function (Blueprint $table) {
          $table->increments('id');
          $table->string('category_name');
          $table->timestamps();
        });
        Schema::create('Pins', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('content_id');
          $table->integer('category_id');
          $table->timestamps();
        });
        Schema::create('Favourites', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('content_id');
          $table->timestamps();
        });
        Schema::create('Notifications', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('noti_type');
          $table->boolean('read');
          $table->string('url');
          $table->timestamps();
        });
        Schema::create('Noti_type', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('noti_type');
          $table->string('noti_message');
          $table->timestamps();
        });
        Schema::create('Chat', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('from_user_id');
          $table->integer('to_user_id');
          $table->longtext('message');
          $table->boolean('read');
          $table->boolean('mute');
          $table->timestamps();
        });
        Schema::create('Groupchat', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->string('group_name');
          $table->boolean('mute');
          $table->timestamps();
        });
        Schema::create('Photos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('caption');
          $table->integer('user_id');
          $table->string('url');
          $table->string('name');
          $table->string('type');
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
        //
    }
}

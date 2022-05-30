<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineCourseVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_course_videos', function (Blueprint $table) {
            $table->id();
            $table->string('classs_videos')->nullable() ;
            $table->string('course_name_from_courses')->nullable() ;
            $table->string('mode_of_upload')->nullable() ;
            $table->string('leactures_videos')->nullable() ;
            $table->string('lecture_url')->nullable() ;
            $table->string('study_materials')->nullable() ;
            $table->string('video_uploaded_date')->nullable() ;
            $table->string('video_availabel_upto_date')->nullable() ;
            $table->enum('lecture_status', ['active', 'inactive'])->nullable();
            $table->string('empty2')->nullable() ;
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
        Schema::dropIfExists('online_course_videos');
    }
}

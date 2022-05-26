<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('publisher_name')->nullable() ;
            $table->string('publisher_email')->nullable() ;
            $table->string('course_name')->nullable() ;
            $table->string('type_of_course')->nullable() ;
            $table->string('board_type')->nullable() ;
            $table->string('medium_type')->nullable() ;
            $table->string('stream_type')->nullable() ;
            $table->string('subject_selected')->nullable() ;
            $table->string('mode_of_class')->nullable() ;
            $table->string('sel_state')->nullable() ;
            $table->string('sel_center_name')->nullable() ;
            $table->string('center_address')->nullable() ;
            $table->string('meeting_name')->nullable() ;
            $table->text('meeting_description')->nullable() ;
            $table->string('meeting_link')->nullable() ;
            $table->string('course_banner_image')->nullable() ;
            $table->string('course_broucher')->nullable() ;
            $table->string('course_sample_video')->nullable() ;
            $table->string('course_sample_pdf')->nullable() ;
            $table->text('short_description')->nullable() ;
            $table->float('course_base_price')->nullable() ;
            $table->float('course_discount')->nullable() ;
            $table->float('course_total_price')->nullable() ;
            $table->enum('course_status', ['active', 'inactive'])->nullable();
            $table->string('empty1')->nullable() ;
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
        Schema::dropIfExists('courses');
    }
}

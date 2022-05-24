<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->string('party_hosted_by')->nullable() ;
            $table->string('party_name')->nullable() ;
            $table->string('party_description')->nullable() ;
            $table->string('party_starting_date')->nullable() ;
            $table->string('party_ending_date')->nullable() ;
            $table->string('party_starting_time')->nullable() ;
            $table->string('party_ending_time')->nullable() ;
            $table->string('party_city')->nullable() ;
            $table->string('party_location')->nullable() ;
            $table->string('party_fees')->nullable() ;
            $table->string('party_discount')->nullable() ;
            $table->string('party_includes')->nullable() ;
            $table->string('party_banner_image')->nullable() ;
            $table->string('party_gallary_images')->nullable() ;
            $table->string('party_gallary_videos')->nullable() ;
            $table->enum('party_status', ['approve', 'deny'])->nullable();

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
        Schema::dropIfExists('parties');
    }
}

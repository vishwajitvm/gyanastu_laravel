<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserpartyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userparty_requests', function (Blueprint $table) {
            $table->id();
            $table->string('user_party_request_username')->nullable() ;
            $table->string('user_party_request_useremail')->nullable() ;
            $table->string('user_party_request_userphoneno1')->nullable() ;
            $table->string('Request_party_name')->nullable() ;
            $table->string('user_party_contribution')->nullable() ;
            $table->string('user_party_request_userphoneno2')->nullable() ;
            $table->string('party_request_special_message')->nullable() ;
            $table->enum('user_party_request_status', ['approve', 'deny'])->nullable();
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
        Schema::dropIfExists('userparty_requests');
    }
}

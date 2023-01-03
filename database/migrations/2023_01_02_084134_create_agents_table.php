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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('agent_name');
            $table->string('agent_phone')->unique();
            $table->string('agent_email')->unique();
            $table->text('agent_address');
            $table->text('agent_password');
            $table->string('agent_login')->nullable();
            $table->string('agent_logout')->nullable();
            $table->text('created_by');
            $table->tinyInteger('status')->default(1)->comment('0 = Inactive, 1= Active');
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
        Schema::dropIfExists('agents');
    }
};

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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name',50);
            $table->string('employee_phone',20)->unique();
            $table->string('employee_email')->unique();
            $table->string('employee_registration_number',20)->unique();
            $table->text('password');
            $table->string('employee_login');
            $table->string('employee_logout');
            $table->tinyInteger('employee_type');
            $table->tinyInteger('status')->default(1)->comment('1 = Published; 0 = Unpublished');
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
        Schema::dropIfExists('employees');
    }
};

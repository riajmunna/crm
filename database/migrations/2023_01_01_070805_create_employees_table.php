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
            $table->string('batch_id');
            $table->string('employee_name');
            $table->string('employee_phone')->unique();
            $table->string('employee_email')->unique();
            $table->string('employee_registration_number')->unique();
            $table->text('password');
            $table->string('employee_login')->nullable();
            $table->string('employee_logout')->nullable();
            $table->tinyInteger('employee_work_type')->dafault(1)->comment('1=Email; 2=Data Entry');
            $table->integer('employee_work_amount')->comment('Total Number of Email');
            $table->tinyInteger('status')->default(1)->comment('1 = Published; 0 = Unpublished');
            $table->integer('created_by');
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

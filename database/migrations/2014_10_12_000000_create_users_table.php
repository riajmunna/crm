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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            /* Employee*/
            $table->string('batch_id')->unique()->nullable();
            $table->string('employee_registration_number')->unique()->nullable();
            $table->tinyInteger('employee_work_type')->dafault(1)->nullable()->comment('1=Email; 2=Data Entry');
            $table->integer('employee_work_amount')->nullable()->comment('Total Number of Email');
            $table->string('employee_total_working_time')->nullable();
            /* User*/
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->text('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_login')->nullable();
            $table->string('user_logout')->nullable();
            $table->tinyInteger('user_type')->default(1)->comment('1=Admin; 2=Agent; 3=Employee');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();

            $table->integer('created_by')->default(1);
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
        Schema::dropIfExists('users');
    }
};

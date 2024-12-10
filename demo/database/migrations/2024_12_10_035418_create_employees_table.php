<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();  // ID cho nhân viên
            $table->string('name');  // Tên nhân viên
            $table->string('email')->unique();  // Email nhân viên
            $table->timestamps();  // Thời gian tạo và cập nhật
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('employees');
    }
    
};

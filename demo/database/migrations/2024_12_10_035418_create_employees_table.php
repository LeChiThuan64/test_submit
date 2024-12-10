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
            $table->string('password');  // Mật khẩu nhân viên
            $table->tinyInteger('role')->default(1);  // Thêm trường role với giá trị mặc định là 1 (user), 0 là admin
            $table->timestamps();  // Thời gian tạo và cập nhật
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};

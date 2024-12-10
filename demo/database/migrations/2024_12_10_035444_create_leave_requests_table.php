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
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->id();  // ID đơn xin nghỉ phép
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');  // Mối quan hệ với bảng employees
            $table->date('start_date');  // Ngày bắt đầu nghỉ
            $table->date('end_date');  // Ngày kết thúc nghỉ
            $table->text('reason');  // Lý do nghỉ phép
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');  // Trạng thái duyệt
            $table->timestamps();  // Thời gian tạo và cập nhật
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leave_requests');
    }
    
};

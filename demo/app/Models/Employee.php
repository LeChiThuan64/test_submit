<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Định nghĩa mối quan hệ với bảng leave_requests
    public function leaveRequests()
    {
        return $this->hasMany(LeaveRequest::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Authenticatable
{
    use HasFactory, HasApiTokens;

    // Định nghĩa mối quan hệ với bảng leave_requests
    public function leaveRequests()
    {
        return $this->hasMany(LeaveRequest::class);
    }
}

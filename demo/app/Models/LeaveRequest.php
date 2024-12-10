<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    use HasFactory;

    // Định nghĩa mối quan hệ với bảng employees
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

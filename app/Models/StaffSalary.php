<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffSalary extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'rec_id',
        'salary',
        'basic',
        'da',
        'conveyance',
        'allowance',
        'medical_allowance',
        'tds',
        'esi',
        'pf',
        'leave',
        'prof_tax',
        'labour_welfare',
    ];
}
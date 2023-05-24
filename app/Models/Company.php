<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'street', 'city', 'postal_code', 'country', 'total_slots', 'total_employees', 'images', 'user_id', 'available_from', 'available_to'];
}

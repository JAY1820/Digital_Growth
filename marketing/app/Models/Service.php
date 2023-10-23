<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    use HasFactory;

    protected $table = 'service'; // Specify the table name if it's different from the model name

    protected $fillable = ['service_id', 'plan_name', 'plan_description', 'plan_price']; // Define the fillable attributes

    // Add any relationships if needed
}

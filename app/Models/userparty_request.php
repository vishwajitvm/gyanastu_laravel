<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userparty_request extends Model
{
    use HasFactory;
    // public $table = "userparty_requests" ;
    protected $casts = [
        'user_party_contribution' => 'array',
    ] ;
}

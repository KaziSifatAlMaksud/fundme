<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'contact_us';
    public $timestamps = false;
    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status',
    ];

    // The attributes that should be hidden for arrays
    protected $hidden = [];

}

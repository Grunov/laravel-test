<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
      'ticket_title',
      'name',
      'phone',
      'company',
      'message',
      'file_url',
      'user_id',
  ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['article_id', 'reader_name', 'reader_email', 'subject', 'content'];
}

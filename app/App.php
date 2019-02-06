<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table = 'app';

    protected $fillabled = ['access_token', 'refresh_token'];
}

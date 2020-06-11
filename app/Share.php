<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $fillable=['share_id','page_name','data','attach','social_network'];
}

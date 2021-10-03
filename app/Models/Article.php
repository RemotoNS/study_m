<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function article()
    {
        return $this -> belongsTo("App\User");
    }

}

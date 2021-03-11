<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Table nam eyou can do change all default from here

    protected $table ='posts';

    public $primaryKey='id';

}

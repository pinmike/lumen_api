<?php
/**
 * Created by PhpStorm.
 * User: michaelpinnell
 * Date: 25/09/2017
 * Time: 14:39
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = ['name','category','description','published_on'];
    public $timestamps = false;
}
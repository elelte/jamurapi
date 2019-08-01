<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class todo extends Model {

    protected $table = 'todo';

    protected $fillable = [
        'id', 'name', 'url_string'
    ];
    		
    protected $hidden = [
        'created_at', 'updated_at'
    ];

}

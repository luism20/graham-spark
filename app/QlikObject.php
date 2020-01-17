<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QlikObject extends Model
{
	protected $table = 'objects';
    //
    protected $fillable = [ 	    
	    'companyId',
	    'mainAppId',
	    'objectId',
	    'objectName'
	  ]; 
}

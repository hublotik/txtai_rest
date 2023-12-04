<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeadphonesAsr extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'headphones_asr';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Brand', 'Impedance', 'Link', 'Model', 'Price', 'Review', 'Review_Date', 'Sensitivity', 'Type'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

}

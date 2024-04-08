<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class court
 * @package App\Models
 * @version February 19, 2024, 2:43 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $bookings
 * @property string $surface
 * @property boolean $floodlights
 * @property boolean $indoor
 */
class court extends Model
{


    public $table = 'court';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'surface',
        'floodlights',
        'indoor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'surface' => 'string',
        'floodlights' => 'boolean',
        'indoor' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'surface' => 'nullable|string|max:30',
        'floodlights' => 'nullable|boolean',
        'indoor' => 'nullable|boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'courtid');
    }

    public function __toString()
    {
        return $this->firstname. " ". $this->surface;
    }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Qatnashchi
 * @package App\Models
 * @version April 15, 2021, 7:22 pm UTC
 *
 * @property string $title
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $gender
 * @property string $email
 * @property string $country
 * @property string $city
 * @property string $organization
 * @property string $position
 * @property string $academic_degree
 * @property string $work_phone
 * @property string $desired_status
 * @property string $need_visa
 * @property string $accompanying_person
 * @property string $comments
 */
class Qatnashchi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'qatnashchis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'last_name',
        'first_name',
        'middle_name',
        'gender',
        'email',
        'country',
        'city',
        'organization',
        'position',
        'academic_degree',
        'work_phone',
        'desired_status',
        'need_visa',
        'accompanying_person',
        'comments'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'last_name' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'country' => 'string',
        'city' => 'string',
        'organization' => 'string',
        'position' => 'string',
        'academic_degree' => 'string',
        'work_phone' => 'string',
        'desired_status' => 'string',
        'need_visa' => 'string',
        'accompanying_person' => 'string',
        'comments' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'last_name' => 'required',
        'first_name' => 'required',
        'email' => 'required',
        'country' => 'required',
        'city' => 'required',
        'organization' => 'required',
        'position' => 'required',
        'academic_degree' => 'required'
    ];

    
}

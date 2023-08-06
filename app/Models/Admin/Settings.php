<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Settings
 * @package App\Models\Admin
 * @version August 6, 2023, 4:37 pm UTC
 *
 * @property string $config_model
 * @property string $field_name
 * @property string $field_type
 * @property boolean $status
 */
class Settings extends Model
{
    use SoftDeletes;


    public $table = 'settings';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'config_model',
        'field_name',
        'field_type',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'config_model' => 'string',
        'field_name' => 'string',
        'field_type' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'config_model' => 'required',
        'field_name' => 'required',
        'field_type' => 'required'
    ];

    
}

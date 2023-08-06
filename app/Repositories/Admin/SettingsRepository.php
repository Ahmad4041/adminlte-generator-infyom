<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Settings;
use App\Repositories\BaseRepository;

/**
 * Class SettingsRepository
 * @package App\Repositories\Admin
 * @version August 6, 2023, 4:37 pm UTC
*/

class SettingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'config_model',
        'field_name',
        'field_type',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Settings::class;
    }
}

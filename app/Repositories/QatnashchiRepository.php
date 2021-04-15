<?php

namespace App\Repositories;

use App\Models\Qatnashchi;
use App\Repositories\BaseRepository;

/**
 * Class QatnashchiRepository
 * @package App\Repositories
 * @version April 15, 2021, 7:22 pm UTC
*/

class QatnashchiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'comments',
        'string',
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
        return Qatnashchi::class;
    }
}

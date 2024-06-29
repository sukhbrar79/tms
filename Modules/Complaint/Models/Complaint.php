<?php

namespace Modules\Complaint\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complaint extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'complaints';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Complaint\database\factories\ComplaintFactory::new();
    }
}


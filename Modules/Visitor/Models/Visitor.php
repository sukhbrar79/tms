<?php

namespace Modules\Visitor\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use Modules\Block\Models\Block;
use Modules\Flat\Models\Flat;

class Visitor extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'visitors';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Visitor\database\factories\VisitorFactory::new();
    }

    public function block()
    {
        return $this->hasOne(Block::class, 'id', 'block_id');
    }

    public function flat()
    {
        return $this->hasOne(Flat::class, 'id', 'block_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'resident_id');
    }
}

<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends OrmApiBaseModel
{
    protected $table = 'tags';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            
        ];
    }

    public function spouseRelationships()
    {
        return [
            'posts' => []
        ];
    }

    public function childRelationships()
    {
        return [
            
        ];
    }

    public function rules()
    {
        return [
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'name' => 'sometimes:required'
        ];
    }

    protected $fillable = [
        'created_at',
        'updated_at',
        'name'
    ];

    

    

        public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_tags', 'post_id', 'tags_id');
    }
}
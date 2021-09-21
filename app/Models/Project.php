<?php

namespace App\Models;

use App\Models\Project as ModelsProject;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    private array $rules = [
        'title' => 'required|string',
        'due_date' => 'required|date',
        'tasks' => 'required|json|string',
        'content' => 'required|string',
        'user_id' => 'required|int'
    ];

    /**
     * @var string[]
     */
    protected array $status = [
        'IN PROGRESS',
        'ON HOLD',
        'COMPLETE'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $attributes = [
        'completed' => false,
        'deleted' => false,
        'status' => 'done'
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'due_date',
        'tasks',
        'content',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * @return string[]
     */
    public function getRules(): array
    {
        return $this->rules;
    }

}

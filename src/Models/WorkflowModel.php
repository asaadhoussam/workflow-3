<?php namespace Bantenprov\Workflow\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The WorkflowModel class.
 *
 * @package Bantenprov\Workflow
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class WorkflowModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'workflows';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = ['name', 'label', 'content_type'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @property int id
 * @property string author_id
 * @property string title
 * @property int text
 * @property int image
 * @package App\Models
 */
class News extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';
}

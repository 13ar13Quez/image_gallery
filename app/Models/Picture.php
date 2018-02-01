<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'picture';
    protected $primaryKey = 'id';

    public function scopeEnable($query)
    {
        return $query->where('status', 1);
    }

    public function scopePicName($query, $name)
    {
        return $query->where('pic_name', $name);
    }
}
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['external_id'];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public function stages()
    {
        return $this->hasMany(Stage::class);
    }
}

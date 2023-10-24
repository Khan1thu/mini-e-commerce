<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Product extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'brand', 'description', 'category', 'price', 'logo'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name', 'like', '%' . request('search') . '%')->orwhere('description', 'like', '%' . request('search') . '%')->orwhere('category', 'like', '%' . request('search') . '%');
        }
    }
}

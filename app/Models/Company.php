<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'logo', 'description'];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id',
        'datacenter_id',
        'name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'account_id' => 'integer',
        'datacenter_id' => 'integer',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function datacenter()
    {
        return $this->belongsTo(Datacenter::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 *
 * @property $id
 * @property $room_number
 * @property $floor
 * @property $type
 * @property $categories
 * @property $prix_par_nuit
 * @property $disponible
 * @property $created_at
 * @property $updated_at
 *
 * @property Reservation[] $reservations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Room extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['room_number', 'floor', 'type', 'categories', 'prix_par_nuit', 'disponible'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany(\App\Models\Reservation::class, 'id', 'room_id');
    }
    
}

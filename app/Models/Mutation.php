<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutation extends Model
{
    use HasFactory;

    protected $fillable = ['id_mut', 'type_mut', 'date_mut', 'petugas', 'item_id', 'diameter', 'tebal', 'lebar', 'panjang', 'pcs', 'vol_m3'];

    public $timestamps = false;

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

}

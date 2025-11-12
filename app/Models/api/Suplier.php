<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Suplier extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'suplier';
    protected $primaryKey = 'suplier_id';
    protected $fillable = ['suplier_id', 'suplier_nama', 'suplier_tgl'];
    //
    public function pembelian(): HasMany
    {
        return $this->hasMany(Pembelian::class, 'suplier_id', 'suplier_id');
    }

    public function nota_data(): HasMany
    {
        return $this->HasMany(NotaData::class, 'suplier_id', 'suplier_id');
    }
}

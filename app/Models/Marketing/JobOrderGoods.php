<?php

namespace App\Models\Marketing;

use App\Models\Common\UnitContainer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use Livewire\Wireable;

class JobOrderGoods extends Model implements Wireable
{
    use HasFactory;

    protected $table = 'joborder_goods';

    // public $incrementing = false;
    // protected $keyType = 'string';
    protected $primaryKey = 'items';

    public $timestamps = false;

    protected $fillable = [
        'items',
        'comCode',
        'documentID',
        'goodNo',
        'goodDec',
        'goodWeight',
        'good_unit',
        'goodSize',
        'goodKind',
    ];

    protected $casts = [
        'items' => 'integer',
        'comCode' => 'string',
        'documentID' => 'string',
        'goodNo' => 'string',
        'goodDec' => 'string',
        'goodWeight' => 'float',
        'good_unit' => 'string',
        'goodSize' => 'string',
        'goodKind' => 'string',
    ];

    public function id(){
        return $this->items;
    }

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
        $this->fill($attributes);
        $this->exists = $attributes['exists'] ?? false;
        $this->setConnection($attributes['connection'] ?? 'mysql');
    }

    public static function fromLivewire($value): self
    {
        return new static($value);
    }

    public function toLiveWire() : array
    {
        // return $this->toArray();
        $arr = $this->toArray();
        $arr['exists'] = $this->exists;
        $arr['connection'] = $this->getConnectionName();
        return $arr;
    }

    public function unit(): HasOne
    {
        return $this->hasOne(UnitContainer::class, 'unitCode', 'good_unit');
    }
}

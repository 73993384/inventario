<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $cod_producto
 * @property $codigo
 * @property $descripcion
 * @property $precio
 * @property $existencia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'cod_producto' => 'required',
		'codigo' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'existencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_producto','codigo','descripcion','precio','existencia'];



}

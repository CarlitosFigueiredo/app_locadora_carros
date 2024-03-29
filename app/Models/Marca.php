<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'imagem'];

    public function rules(): array
    {
        return [
            'nome' => 'required|unique:marcas,nome,'. $this->id .'|min:3',
            'imagem' => 'required',
        ];
    }

    public function feedback(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.unique' => 'O nome da marca já existe',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres',
        ];
    }
}

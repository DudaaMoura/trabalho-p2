<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores'; // referência à tabela no banco de dados
    protected $fillable = ['nome','data_nascimento', 'biografia']; // campos que podem ser preenchidos em massa

    public function livros() // Define o relacionamento com o modelo Livro
    {
        return $this->hasMany( // um autor tem muitos livros //hasmany é usado para relacionamentos de um-para-muitos
            Livro::class,
            'autor_id', // chave estrangeira na tabela livros
            'id' // chave primária na tabela autores
        );
    }
}

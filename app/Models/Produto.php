<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{ 
    use HasFactory;

    public $nome;
    public $ingredientes;
    public $valor;
   
    public function render()
    {
        return view('livewire.cliente.blade.php');
    }

    public function store()
    {
        Cliente::create([
        'nome' => $this->nome,
        'ingredientes' => $this->ingredientes,
        'valor' => $this->valor,

        ]);
  
    }
}
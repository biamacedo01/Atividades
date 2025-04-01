<?php

namespace App\Livewire\Create;

use App\Models\Cliente;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.cliente.create');
    }

    public function store()
    {
        Cliente::create([
        'nome' => $this->nome,
        'endereco' => $this->endereco,
        'telefone' => $this->telefone,
        'cpf' => $this->cpf,
        'email' => $this->email,
        'password' => $this->password,

        ]);


        session()->flash('sucess', 'Cadastro Realizado');
    }
}

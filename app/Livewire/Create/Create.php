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



    protected $rules=[
        'nome'=>'required|nome|max:80',
        'endereco'=>'required|endereco|min:10',
        'telefone'=>'required|telefone|min:11',
        'cpf'=>'required|cpf|min:11',
        'email'=>'required|email|min:25',
        'password'=>'required|password|min:6'
        
    ];
     protected $message =[
        'nome.required' => 'nome obrigatorio',
        'nome.max' => 'nome deve conter no maximo 80 caracteres',
        'endereco.required' => 'obrigatorio',
        'endereco.min' => 'endereco  deve conter no minimo 10 caracteres',
        'telefone.required' => 'telefone obrigatorio',
        'telefone.required' => 'telefone deve conter no minimo 11 caracteres',
        'cpf.required' => 'cpf obrigatorio',
        'cpf.required' => 'cpf deve conter no minimo 11 caracteres',
        'email.required' => 'nome obrigatorio',
        'email.required' => 'email deve conter no minimo 25 carcateres',
        'password.required'=>'password obrigatorio',
        'password'=>'password deve conter no minimo 6 caracteres'

     ];

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

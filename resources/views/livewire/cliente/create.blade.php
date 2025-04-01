<div class="mt-5">





    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">

            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

            </button>

        </div>
    @endif





    <div class="card">

        <h5 class="card-header">Cadastro de Lanches</h5>





        <div class="card-body">

            <form wire:submit.prevent="store">

                <div class="mb-3">

                    <label for="nome" class="form-label">Nome</label>

                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Nome"
                        wire:model.defer="nome">


                    <div class="card-body">

                        <form wire:submit.prevent="store">

                            <div class="mb-3">

                                <label for="nome" class="form-label">Endereco</label>

                                <input type="text" class="form-control" id="Endereco" name="Endereco"
                                    placeholder="Ex: Endereco" wire:model.defer="endereco">





                                <div>


                                    <div>

                                        <div class="card-body">

                                            <form wire:submit.prevent="store">

                                                <div class="mb-3">

                                                    <label for="telefone" class="form-label">Telefone</label>

                                                    <input type="text" class="form-control" id="Telefone"
                                                        name="Telefone" placeholder="Ex: (18)99999-9999"
                                                        wire:model.defer="tel">


                                                    <div>

                                                        <div class="card-body">

                                                            <form wire:submit.prevent="store">

                                                                <div class="mb-3">

                                                                    <label for="nome"
                                                                        class="form-label">Email</label>

                                                                    <input type="text" class="form-control"
                                                                        id="email" name="email"
                                                                        placeholder="Ex: Email"
                                                                        wire:model.defer="email">

                                                                    <div>

                                                                        <div class="card-body">

                                                                            <form wire:submit.prevent="store">

                                                                                <div class="mb-3">

                                                                                    <label for="cpf"
                                                                                        class="form-label">Cpf</label>

                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="cpf" name="cpf"
                                                                                        placeholder="Ex: Email"
                                                                                        wire:model.defer="cpf">

                                                                                    <div>

                                                                                        <div class="card-body">

                                                                                            <form
                                                                                                wire:submit.prevent="store">

                                                                                                <div class="mb-3">

                                                                                                    <label
                                                                                                        for="senha"
                                                                                                        class="form-label">Senha</label>

                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        id="senha"
                                                                                                        name="senha"
                                                                                                        placeholder="Ex: Senha"
                                                                                                        wire:model.defer="senha">

                                                                                                    <div>





                                                                                                        <div
                                                                                                            class="mb-3">

                                                                                                            <button
                                                                                                                type="submit"
                                                                                                                class="btn btn-success">Cadastrar</button>

                                                                                                        </div>

                                                                                                    </div>













                                                                                                </div>

                                                                                            </form>

                                                                                        </div>

                                                                                    </div>





                                                                                </div>

<div>
   <div class="mt-5">
    <div class="card">
        <h5 class="card-header"> Cadastro de Tarefas</h5>
        <div class="card-body">
            <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome" name="nome" id="nome" placeholder="Ex.: Estudar... ">

                </div>

                <div class="mb-3">
                    <label for="nome" class="form-label">Data de Trefa</label>
                    <input type="datetime-local" class="form-control" id="data_hora" nome="data_hora" wire:model="data_hora">

                </div>

                <div class="mb-3">
                    <label for="nome" class="form-label">Descriçao</label>
                    <textarea class="form-control" id="descricao"  wire:model="descricao" rows="4" name="descricao"></textarea>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Salvar</label>

                </div>
            </form>

        </div>
    </div>
</div>
</div>

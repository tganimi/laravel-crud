<div class="form-group">
    <label for="nome">Nome</label>
    {!! Form::text('nome', null, ['class' => 'form-control', 'id' => 'nome', 'placeholder' => 'Informe o nome']) !!}
</div>

<div class="form-group">
    <label for="matricula">Matrícula</label>
    {!! Form::text('matricula', null, ['class' => 'form-control', 'id' => 'matricula', 'placeholder' => 'Informe a matrícula']) !!}
</div>

<div class="form-group">
    <label for="data_nascimento">Data de nascimento</label>
    {!! Form::text('data_nascimento', null, ['class' => 'form-control', 'id' => 'data_nascimento', 'placeholder' => 'Informe a data nascimento', 'data-mask' => "00/00/0000"]) !!}
</div>

<div class="form-group">
    <label for="telefone">Telefone</label>
    {!! Form::text('telefone', null, ['class' => 'form-control', 'id' => 'telefone', 'placeholder' => 'Informe o telefone']) !!}
</div>

<div class="form-group">
    <label for="email">E-mail</label>
    {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Informe o e-mail']) !!}
</div>

<div class="form-group">
    <label for="salario">Salário</label>
    {!! Form::text('salario', null, ['class' => 'form-control', 'id' => 'salario', 'placeholder' => 'Informe o salário']) !!}
</div>

<div class="form-group">
    <label for="departamento">Departamento</label>
    {!! Form::select('departamento_id', $departamentos, $funcionario->departamento_id ?? null, ['class' => 'form-control', 'id' => 'departamento']) !!}
</div>

<button type="submit" class="btn btn-success">Salvar</button>

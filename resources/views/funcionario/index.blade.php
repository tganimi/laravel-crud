@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@3">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">Funcionários <a style="float: right" class="btn btn-primary" href="{{ route('create_funcionario') }}">Novo funcionário</a></div>

                    <div class="card-body">


                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Matrícula</th>
                                <th>Email</th>
                                <th>Departamento</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['funcionarios'] as $funcionario)
                                <tr class="row-{{$funcionario->id}}">
                                    <td>{{ $funcionario->nome  }}</td>
                                    <td>{{ $funcionario->matricula }}</td>
                                    <td>{{ $funcionario->email }}</td>
                                    <td>{{ $funcionario->departamento->nome }}</td>
                                    <td>
                                        <a title="Editar" href="{{ route('edit_funcionario', $funcionario->id) }}"><i style="font-size: 30px;" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    </td>
                                    <td>
                                        <form id="form-{{ $funcionario->id }}" action="{{ route('destroy_funcionario', $funcionario->id) }}" method="POST">
                                            @method('delete')
                                            {{csrf_field()}}
                                            <button type="button" class="btn-delete btn-sm btn-danger" data-id="{{ $funcionario->id }}" title="Remover"><i style="font-size: 14px;" class="fa fa-times" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://use.fontawesome.com/3de7526532.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-delete").click(function(){

                Swal.fire({
                    title: 'Tem certeza que deseja remover esse funcionário?',
                    text: "Essa ação não poderá ser revertida!",
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Não',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim'
                }).then((result) => {
                    if (result.value) {
                        var funcionarioId = $(this).data("id");
                        $("#form-"+funcionarioId).submit();
                    }
                })
            });
        })
    </script>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Editar Funcionário #{{$funcionario->id}} <a style="float: right" class="btn btn-primary" href="{{ route('index_funcionario') }}">voltar</a></div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {!! Form::model($funcionario, ['route' => ['update_funcionario', $funcionario->id], 'method' => 'PUT']) !!}
                            @include('funcionario.partials.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            var maskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                options = {onKeyPress: function(val, e, field, options) {
                        field.mask(maskBehavior.apply({}, arguments), options);
                    }
                };

            $("#telefone").mask(maskBehavior, options);

            $('#salario').mask('000.000.000.000.000,00', {reverse: true});
        })
    </script>

@endsection





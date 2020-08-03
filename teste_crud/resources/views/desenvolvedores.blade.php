<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Desenvolvedores</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css'>
</head>

<body class="container">

    <div class="page-header">
        <h2>Devs</h2>
    </div>
    <div class="text-right"><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#add_dev">+ Adicionar</button></div>
    <div>
        <table id="tabela_desenvolvedores" class="display nowrap dataTable dtr-inline collapsed" width="100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th width="7%">Sexo</th>
                    <th width="7%">Idade</th>
                    <th>Hobby</th>
                    <th width="14%">Data de nascimento</th>
                    <th>Editar/Excluir</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($desenvolvedores))
                    @foreach ($desenvolvedores as $desenvolvedor)
                        <tr>
                            <td>{{$desenvolvedor->nome}}</td>
                            <td>{{$desenvolvedor->sexo}}</td>
                            <td>{{$desenvolvedor->idade}}</td>
                            <td>{{$desenvolvedor->hobby}}</td>
                            <td>{{date('d/m/Y', strtotime($desenvolvedor->datanascimento))}}</td>
                                <td>
                                    <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#">
                                        <i class="fas fa-edit"></i>
                                        Alterar
                                    </button>
                                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#">
                                        <i class="fas fa-trash"></i>
                                        Excluir
                                    </button>
                                </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="text-center">
            {{ $desenvolvedores->links() }}
        </div>
    </div>

    <!-- Modal Incluir Desenvolvedor -->
    <div class="modal fade" id="add_dev" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle" style="color:#5c5cd6">Cadastrar desenvolvedor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form" method="post" action="{{route('dev.store')}}">
                {!! csrf_field() !!}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo:</label>
                            <input type="radio" id="sexo" name="sexo" value="M" checked style="margin-left:14px"> Masculino
                            <input type="radio" id="sexo" name="sexo" value="F" style="margin-left:14px"> Feminino
                        </div>
                        <div class="form-group">
                            <label for="idade">Idade:</label>
                            <input type="number" class="form-control" id="idade" name="idade">
                        </div>
                        <div class="form-group">
                            <label for="hobby">Hobby:</label>
                            <input type="text" class="form-control" id="hobby" name="hobby">
                        </div>
                        <div class="form-group">
                            <label for="datanascimento">Data de nascimento:</label>
                            <input type="date" class="form-control" id="datanascimento" name="datanascimento">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Cadastrar
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Fechar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Editar Desenvolvedor -->
    {{-- <div class="modal fade" id="edit_dev" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle" style="color:#5c5cd6">Alterar desenvolvedor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form" method="post" action="{{route('dev.update', $dev->id)}}">
                    {!! method_field('PUT') !!}
                    {!! csrf_field() !!}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo:</label>
                            <input type="radio" id="sexo" name="sexo" value="M" checked style="margin-left:14px"> Masculino
                            <input type="radio" id="sexo" name="sexo" value="F" style="margin-left:14px"> Feminino
                        </div>
                        <div class="form-group">
                            <label for="idade">Idade:</label>
                            <input type="number" class="form-control" id="idade" name="idade">
                        </div>
                        <div class="form-group">
                            <label for="hobby">Hobby:</label>
                            <input type="text" class="form-control" id="hobby" name="hobby">
                        </div>
                        <div class="form-group">
                            <label for="datanascimento">Data de nascimento:</label>
                            <input type="date" class="form-control" id="datanascimento" name="datanascimento">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Alterar
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Fechar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js"></script> --}}
    <script src="js/app.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</body>

</html>

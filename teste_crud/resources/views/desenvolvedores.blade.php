<!DOCTYPE html>
<html ng-app='desenvolvedores'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Desenvolvedores</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
</head>

<body class="container" ng-controller="DesenvolvedorControler as desenvolvedores">

    <div class="page-header">
        <h2>Devs</h2>
    </div>
    <div>
        <h3> Desenvolvedor: {{desenvolvedores.desenvolvedor.nome}}</h3>
        {{-- <h4> Hobby: {{desenvolvedores.desenvolvedor.hobby}}</h4>
        <h4> Status: {{desenvolvedores.desenvolvedor.status}}</h4> --}}
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js"></script>
    <script src="js/app.js"></script>

</body>

</html>

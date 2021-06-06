<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="resources/css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Gestão de Formulários</title>
</head>

<body>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="resources/js/materialize.min.js"></script>


<div class="nav-wrapper">
    <nav class="blue accent-4 z-depth-2">
        <div class="nav-wrapper container">
            <ul class="left hide-on-med-and-down">
                <li><a href="/questionario">Gestão de Questionários</a></li>
                <li><a href="/resposta">Gestão de Respostas</a></li>
                <li><a href="/tipos-de-questoes">Gestão de Tipo de Questões</a></li>
                <li><a href="/questoes"> Gestão de Questões </a></li>
            </ul>
        </div>
    </nav>
</div>

<div class='pagina'>
    <div id='questionarios'>
        <h3 class='titulo-secao inline-block'>Gestão de Questionários</h3>
        <p><strong>Lista de Formulários:</strong></p>
        @foreach($questionnaires as $questionnaire)
            <p> {{ $questionnaire->description }}</p>
        @endforeach
    </div>
    <div id="tiposDeQuestoes">
        <h3 class='titulo-secao inline-block'>Gestão de Tipos de Questão</h3>
        <p><strong>Lista de Tipos de Questões:</strong></p>
        @foreach($listtypes as $listtype)
            <p> {{ $listtype->description }}</p>
        @endforeach
    </div>
    <div>
        <h3 class='titulo-secao inline-block'>Gestão de Respostas Padronizadas</h3>
    </div>
    <div>
        <h3 class='titulo-secao inline-block'>Gestão de Questão</h3>
    </div>
</div>

</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="resources/js/materialize.min.js"></script>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
    <link rel="icon" href="https://1.bp.blogspot.com/-1CKbnU5Uc40/V6oxJZML28I/AAAAAAABdNw/bpb9Ks5imHAkhHTR-jS-KauFV0RwiVSIgCLcB/s320/1vv5gh.png" type="imagem/gif">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link href="css/mySidenav.css" rel="stylesheet"> -->
    <link href="css/margemDiv.css" rel="stylesheet">
    
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/inicio">Escola</a>   
            </div>  
            <ul class="nav navbar-nav"> 
                <li class="active"><a href="#">Aluno</a></li>
                <li><a href="/aluno">Profissional</a></li>
                <li><a href="#">Classes</a></li>    
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Atendimentos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Lançamento de presença</a></li>
                        <li><a href="#">Registro Entrada/Saída</a></li>
                        <li><a href="#">Migração de aluno entre salas</a></li>
                        <li><a href="#">Registro de atividades do grupo</a></li>
                        <li><a href="#">Planejamento de aula(horários)</a></li>
                    </ul>
                </ul>
            </div>
        </nav>



        <div id="margemDiv" class="margemDiv">
            <h2 align="center">Cadastro de Aluno</h2>

            <div aria-dropeffect="popup" >

                <form  action="/store.php" method="post" autocomplete="on">
                    <div>
                        <label for:"fnome" >Nome: </label> <input type="text" name="fname"><br>
                        Data de Nascimento: <input type="date" name="">

                        Sexo: <select name="Sexo">
                            <option value="selecionar" selected>Selecionar</option>
                            <option value="volvo" >Feminino</option>
                            <option value="saab">Masculino</option>
                        </select><br>

                        Telefone:<input type="text" class="form-control cel-sp-mask" placeholder="Ex.: (00) 00000-0000"><br><br>



                        <fieldset form="" >
                            <legend>Filiação</legend>

                            Nome do Pai:<input type="text" name="lname"><br>
                            Nome da Mãe:<input type="text" name="lname"><br>
                        </fieldset>
                        <br>
                        <fieldset form="">
                            <legend>Endereço</legend>
                            Rua:<input type="text" name="lname"><br>
                            Número:<input type="text" name=""><br>
                            Complemento:<input type="text" name="lname"><br>
                            Bairro:<input type="text" name="lname"><br>
                            Cidade:<input type="text" name="lname"><br>
                            Estado:<input type="text" name="lname"><br>
                            CEP:<input type="text" class="form-control cep-mask" placeholder="Ex.: 00000-000"></br>

                        </fieldset>
                        <fieldset>
                            <div>
                                <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
                                <input type="file"/><br>
                            </div>
                            <div>
                                <iframe src=""></iframe>
                            </div>
                        </fieldset>
                        <br>Data do cadastro:<input type="date"  name=""><br><br>
                        <input type="submit">

                    </div>
                </form>
            </div>
        </div>

        <div id="s" class="mySidenav">
            <ul>
                <li><a href="/cadastrarAluno">Cadastrar</a></li>
                <li><a href="/aluno">Todos</a></li>
            </ul>
        </div>

    </body>
    </html>
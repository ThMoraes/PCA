<?php
    if(isset($_POST['submit'])){   
        
        include_once('cadastrarpaciente.php');

        $CPF = $_POST['CPF']);
        $Prontuário = $_POST['Prontuário']);
        $NomeCompleto = $_POST['Nome Completo']);
        $TipoSaguíneo = $_POST['Tipo Saguíneo']);
        $Email = $_POST['Email']);
        $Telefone = $_POST['(DD) Telefone']);
        $CEP = $_POST['CEP']);
        $Rua = $_POST['Rua']);
        $Número = $_POST['Número']);
        $Complemento = $_POST['Complemento']);
        $Cidade = $_POST['Cidade']);
        $Município = $_POST['Município']);
        $PontoReferência = $_POST['Ponto de Referência']);
        $UF = $_POST['UF']);
        $LocalNascimento = $_POST['Local de Nascimento']);
        $EstadoCivil = $_POST['Estado Civil']);
        $Sexo = $_POST['Sexo']);
        $NomePai = $_POST['Nome do Pai']);
        $TelefonePai = $_POST['(DD) Telefone do Pai']);
        $NomeMãe = $_POST['Nome da Mãe']);
        $TelefoneMãe = $_POST['Telefone da Mãe']);
        $SalaAtendimento = $_POST['Sala de Atendimento']);
        $Sintomas = $_POST['Sintomas']);
        $Alergias = $_POST['Alergias']);
        $DoençasCrônicas = $_POST['Doenças Crônicas']);
        $RemédiosControlados = $_POST['Toma Remédios Controlados']);

        $result = mysqli_query($conexao, "INSERT INTO cadastropacientes(CPF,Prontuário,Nome Completo,Tipo Saguíneo,Email,(DD) Telefone,CEP,Rua,Número,Complemento,Cidade,Município,Ponto de Referência,UF,Local de Nascimento,Estado Civil,Sexo,Nome do Pai,(DD) Telefone do Pai,Nome da Mãe,Telefone da Mãe,Sala de Atendimento,Sintomas,Alergias,Doenças Crônicas,Toma Remédios Controlados) VALUES ('$CPF','$Prontuário','$NomeCompleto','$TipoSaguíneo','$Email','$Telefone','$CEP','$Rua','$Número','$Complemento','$Cidade','$Município','$PontoReferência','$UF','$LocalNascimento','$EstadoCivil','$Sexo','$NomePai','$TelefonePai','$NomeMãe','$TelefoneMãe','$SalaAtendimento','$Sintomas','$Alergias','$DoençasCrônicas','$RemédiosControlados')")
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="title" id="title">TBMGN | Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="img/logo3.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">

</head>
<body id="body" class="body" onKeyDown="printPage()">    
    <section class="autenticacao" id="autenticacao">
        <div class="divisaoAutenticacao">
            <div class="divisaoAutenticacaoEsquerda">
                <div class="divisaoAutenticacaoEsquerdas">
                    <div class="tituloDivisaoAutenticacaoEsquerda">
                        <h1 class="nomeTituloDivisaoAutenticacaoEsquerda">BEM-VINDO(A)</h1>
                    </div>
                    <div class="conteudoDivisaoAutenticacaoEsquerda">
                        <p>Caso ainda não tenha usuário e senha entre em contato com o administrador da sua organização.</p>
                    </div>
                </div>
            </div>
            <div class="divisaoAutenticacaoDireita">
                <div class="tituloDivisaoAutenticacaoDireita">
                    <h1 class="nomeTituloDivisaoAutenticacaoDireita">Login</h1>
                </div>
                <div class="conteudoDivisaoAutenticacaoDireita">
                    <p class="descricaoDivisaoAutenticacao" for="campoAutenticacaoUsuario">
                        <label class="nomeInputDivisaoAutenticacaoDireita">Usuário</label>
                        <br>
                        <input type="text" class="campoAutenticacao" id="campoAutenticacaoUsuario" name="campoAutenticacaoUsuario" value="589045">
                    </p>    
                    <p class="descricaoDivisaoAutenticacao" for="campoAutenticacaoSenha">
                        <label class="nomeInputDivisaoAutenticacaoDireita">Senha</label>
                        <br>
                        <input type="text" class="campoAutenticacao" id="campoAutenticacaoSenha" name="campoAutenticacaoSenha" value="589045">
                    </p>
                    <input type="button" value="ENTRAR" class="botaoAutenticar" onclick="Autenticacao()">
                </div>
                <p class="LinkEsqueceuSenha" onclick="esqueceuSenha()">Esqueceu a sua senha?</p>
                
            </div>
        </div>
    </section>
    
    <section class="esqueceuSenha" id="esqueceuSenha">
        <div class="divisaoEsqueceuSenha">
            <div class="divisaoEsqueceuSenhaEsquerda">
                <div class="tituloDivisaoEsqueceuSenhaEsquerda">
                    <h1 class="nomeTituloDivisaoEsqueceuSenhaEsquerda">Esqueceu a senha?</h1>
                </div>
                <div class="conteudoDivisaoEsqueceuSenhaEsquerda">
                    <p>Preencha os formulários para que seu administrador te ajude a mudar a senha.</p>
                </div>
            </div>
            <div class="divisaoEsqueceuSenhaDireita">
                <p class="LinkbotaoVoltar"><span class="material-icons" id="botaoVoltar" onclick="window.location.reload()">arrow_back</span></p>
                <div class="tituloDivisaoEsqueceuSenhaDireita">
                    <h1 class="nomeTituloDivisaoEsqueceuSenhaDireita">Recuperação de senha</h1>
                </div>
                <div class="conteudoDivisaoEsqueceuSenhaDireita">
                    <p class="descricaoDivisaoEsqueceuSenha">
                        <label class="nomeInputDivisaoEsqueceuSenhaDireita" for="campoEsqueceuSenhaUsuario">Usuário</label><br>
                        <input type="text" class="campoEsqueceuSenha" id="campoEsqueceuSenhaUsuario" name="campoEsqueceuSenhaUsuario" value="">
                    </p>    
                    <p class="descricaoDivisaoEsqueceuSenha">
                        <label class="nomeInputDivisaoEsqueceuSenhaDireita" for="campoEsqueceuSenhaEmail">Email</label><br>
                        <input type="email"class="campoEsqueceuSenha" name="campoEsqueceuSenhaEmail" id="campoEsqueceuSenhaEmail" value="">
                    </p>
                    <input type="button" value="ENVIAR" class="botaoEsqueceuSenha" onclick="Acessar()">
                </div>
            </div>
        </div>
    </section>

    
    <section class="acessoFuncionario" id="acessoFuncionario">
        <div class="menuHamburguerAcessoFuncionario" id="menuHamburguerAcessoFuncionario">
            <p class="LinkbotaoHamburguer"><span class="material-icons" id="botaoHamburguer" onclick="menuHamburguer()">menu</span></p>
        </div>

        <div class="menuAcessoFuncionario" id="menuAcessoFuncionario">
            <div class="menuFecharAcessoFuncionario" id="menuFecharAcessoFuncionario">
                <p class="LinkbotaoFechar"><span class="material-icons" id="botaoFechar" onclick="menuFechar()">close</span></p>
            </div>
            <div class="dadosAcessoFuncionario" id="dadosAcessoFuncionario">
                <img src="img/iconeAvatar.png" class="imagemFuncionario">
                <p class="descricaoMenuAcessoFuncionario" id="descricaoMenuAcessoFuncionarioNome">Nome: 
                    <span class="nomeAcessoFuncionario" id="nomeAcessoFuncionarioNome"></span>
                </p>
                <p class="descricaoMenuAcessoFuncionario" id="descricaoMenuAcessoFuncionarioMatricula">Matrícula: 
                    <span class="nomeAcessoFuncionario" id="nomeAcessoFuncionarioMatricula"></span>
                </p>
                <p class="descricaoMenuAcessoFuncionario" id="descricaoMenuAcessoFuncionarioFuncao">Função: 
                    <span class="nomeAcessoFuncionario" id="nomeAcessoFuncionarioFuncao"></span>
                </p>
            </div>

            <div class="dadosMenuAcessoFuncionario" id="dadosMenuAcessoFuncionario">
                <p class="dadoMenuAcessoFuncionario" id="menuConsultarCadastro" onclick="menuConsultarCadastro()" onmouseover="dadoMenuAcessoFuncionarioOver()"><span class="material-icons iconedadoMenuAcessoFuncionario" id="iconeMenuConsultarCadastro">how_to_reg</span> <span class="nomeDadoMenuAcessoFuncionario">Consultar cadastro</span></p>
                <p class="dadoMenuAcessoFuncionario" id="menuCadastrarPaciente" onclick="menuCadastrarPaciente()"><span class="material-icons iconedadoMenuAcessoFuncionario" id="iconeMenuCadastrarPaciente">person_add</span> <span class="nomeDadoMenuAcessoFuncionario">Cadastrar paciente</span></p>
                <p class="dadoMenuAcessoFuncionario" id="menuCriarFichaAtendimento" onclick="menuCriarFichaAtendimento()"><span class="material-icons iconedadoMenuAcessoFuncionario" id="iconeMenuCriarFichaAtendimento">create_new_folder</span> <span class="nomeDadoMenuAcessoFuncionario">Criar ficha de atendimento</span></p>
                <p class="dadoMenuAcessoFuncionario" id="menuConsultarHistorico" onclick="menuConsultarHistorico()"><span class="material-icons iconedadoMenuAcessoFuncionario" id="iconeMenuConsultarHistorico">history</span> <span class="nomeDadoMenuAcessoFuncionario">Consultar histórico</span></p>
                <p class="dadoMenuAcessoFuncionario" id="menuFazerLogoof" onclick="document.location.reload()"><span class="material-icons iconedadoMenuAcessoFuncionario" id="iconeMenuFazerLogoof">logout</span><span class="nomeDadoMenuAcessoFuncionario"> Fazer logoof</span></p>
            </div>
        </div>

        <div class="consultarCadastro" id="consultarCadastro">
            <div class="pesquisarConsultarCadastro" id="pesquisarConsultarCadastro"></div>
                <div class="tituloConsultarCadastro" id="tituloConsultarCadastro">
                    <h1 class="nomeTituloConsultarCadastro">CONSULTAR CADASTRO</h1>
                </div>            
                <div class="conteudoConsultarCadastro" id="conteudoConsultarCadastro">
                    <div class="descricaoConsultarCadastro">
                        <label class="nomeInputconsultarCadastro">CPF</label>
                        <br>
                        <input type="text"class="campoConsultarCadastro" id="campoConsultarCadastroCPF" value="85263149075">
                    <input type="button" value="CONSULTAR" class="botaoConsultarCadastro" onclick="consultarCadastroCriado()">
                </div>
                </div>
            </div>

            <div class="funcionarioConsultarCadastroCriado" id="funcionarioConsultarCadastroCriado">
                <div class="tituloFuncionarioConsultarCadastroCriado" id="tituloFuncionarioConsultarCadastroCriado">
                    <h1 class="nomeTituloFuncionarioConsultarCadastroCriado">CONSULTAR CADASTRO</h1>
                </div>            
                <div class="divisaoFuncionarioConsultarCadastroCriado" id="divisaoFuncionarioConsultarCadastroCriado">
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoCPF">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoCPF" id="funcionarioConsultarCadastroCriadoCPF">CPF</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoCPF" name="funcionarioConsultarCadastroCriadoCPF" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoProntuario">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoProntuario" id="funcionarioConsultarCadastroCriadoProntuario">Prontuário</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoProntuario" name="funcionarioConsultarCadastroCriadoProntuario" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoNomeCompleto">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoNomeCompleto" id="funcionarioConsultarCadastroCriadoNomeCompleto">Nome Completo</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoNomeCompleto" name="funcionarioConsultarCadastroCriadoNomeCompleto" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoTipoSaguineo">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoTipoSaguineo" id="funcionarioConsultarCadastroCriadoTipoSaguineo">Tipo Saguíneo</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoTipoSaguineo" name="funcionarioConsultarCadastroCriadoTipoSaguineo" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoEmail">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoEmail" id="funcionarioConsultarCadastroCriadoEmail">Email</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoEmail" name="funcionarioConsultarCadastroCriadoEmail" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoTelefone">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoTelefone" id="funcionarioConsultarCadastroCriadoTelefone">(DD) Telefone</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoTelefone" name="funcionarioConsultarCadastroCriadoTelefone" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoCEP">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoCEP" id="funcionarioConsultarCadastroCriadoCEP">CEP</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoCEP" name="funcionarioConsultarCadastroCriadoCEP" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoRua">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoRua" id="funcionarioConsultarCadastroCriadoRua">Rua</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoRua" name="funcionarioConsultarCadastroCriadoRua" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoNumero">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoNumero" id="funcionarioConsultarCadastroCriadoNumero">Número</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoNumero" name="funcionarioConsultarCadastroCriadoNumero" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoComplemento">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoComplemento" id="funcionarioConsultarCadastroCriadoComplemento">Complemento</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoComplemento" name="funcionarioConsultarCadastroCriadoComplemento" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoCidade">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoCidade" id="funcionarioConsultarCadastroCriadoCidade">Cidade</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoCidade" name="funcionarioConsultarCadastroCriadoCidade" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoMunicipio">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoMunicipio" id="funcionarioConsultarCadastroCriadoMunicipio">Município</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoMunicipio" name="funcionarioConsultarCadastroCriadoMunicipio" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoPontoReferencia">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoPontoReferencia" id="funcionarioConsultarCadastroCriadoPontoReferencia">Ponto de Referência</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoPontoReferencia" name="funcionarioConsultarCadastroCriadoPontoReferencia" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoUF">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoUF" id="funcionarioConsultarCadastroCriadoUF">UF</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoUF" name="funcionarioConsultarCadastroCriadoUF" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoLocalNascimento">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoLocalNascimento" id="funcionarioConsultarCadastroCriadoLocalNascimento">Local de Nascimento</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoLocalNascimento" name="funcionarioConsultarCadastroCriadoLocalNascimento" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoEstadoCivil">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoEstadoCivil" id="funcionarioConsultarCadastroCriadoEstadoCivil">Estado Civil</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoEstadoCivil" name="funcionarioConsultarCadastroCriadoEstadoCivil" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoSexo">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoSexo" id="funcionarioConsultarCadastroCriadoSexo">Sexo</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoSexo" name="funcionarioConsultarCadastroCriadoSexo" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoNomePai">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoNomePai" id="funcionarioConsultarCadastroCriadoNomePai">Nome do Pai</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoNomePai" name="funcionarioConsultarCadastroCriadoNomePai" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoTelefonePai">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoTelefonePai" id="funcionarioConsultarCadastroCriadoTelefonePai">(DD) Telefone</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoTelefonePai" name="funcionarioConsultarCadastroCriadoTelefonePai" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoNomeMae">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoNomeMae" id="funcionarioConsultarCadastroCriadoNomeMae">Nome da Mãe</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoNomeMae" name="funcionarioConsultarCadastroCriadoNomeMae" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoTelefoneMae">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoTelefoneMae" id="funcionarioConsultarCadastroCriadoTelefoneMae">(DD) Telefone</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoTelefoneMae" name="funcionarioConsultarCadastroCriadoTelefoneMae" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoTipoMedico">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoTipoMedico" id="funcionarioConsultarCadastroCriadoTipoMedico">Tipo de Médico</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoTipoMedico" name="funcionarioConsultarCadastroCriadoTipoMedico" value="" disabled="disabled">
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoSalaAtendimento">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoSalaAtendimento" id="funcionarioConsultarCadastroCriadoSalaAtendimento">Sala de Atendimento</label><br>
                        <input type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoSalaAtendimento" name="funcionarioConsultarCadastroCriadoSalaAtendimento" value="" disabled="disabled">
                    </div>                    
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoSintomas">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoSintomas" id="funcionarioConsultarCadastroCriadoSintomas">Sintomas</label><br>
                        <textarea type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoSintomas" name="funcionarioConsultarCadastroCriadoSintomas"  disabled="disabled"></textarea>
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoAlergias">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoAlergias" id="funcionarioConsultarCadastroCriadoAlergias">Alergias</label><br>
                        <textarea type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoAlergias" name="funcionarioConsultarCadastroCriadoAlergias" disabled="disabled"></textarea>
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoDoencasCronicas">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoDoencasCronicas" id="funcionarioConsultarCadastroCriadoDoencasCronicas">Doenças Crônicas</label><br>
                        <textarea type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoDoencasCronicas" name="funcionarioConsultarCadastroCriadoDoencasCronicas" disabled="disabled"></textarea>
                    </div>
                    <div class="descricaoFuncionarioConsultarCadastroCriado" id="descricaoFuncionarioConsultarCadastroCriadoRemediosControlados">
                        <label class="nomeInputFuncionarioConsultarCadastroCriado" for="funcionarioConsultarCadastroCriadoRemediosControlados" id="funcionarioConsultarCadastroCriadoRemediosControlados">Toma Remédios Controlados? Se sim, qual/quais?</label><br>
                        <textarea type="text" class="inputFuncionarioConsultarCadastroCriado" id="inputFuncionarioConsultarCadastroCriadoRemediosControlados" name="funcionarioConsultarCadastroCriadoRemediosControlados" disabled="disabled"></textarea>
                    </div>

                </div>
            </div>
        </div>

        <div class="CadastrarPaciente" id="CadastrarPaciente">
            <div class="funcionarioCadastrarPaciente" id="funcionarioCadastrarPaciente">
                <div class="tituloFuncionarioCadastrarPaciente" id="tituloFuncionarioCadastrarPaciente">
                    <h1 class="nomeTituloFuncionarioCadastrarPaciente">CADASTRAR PACIENTE</h1>
                </div>            
                <div class="divisaoFuncionarioCadastrarPaciente" id="divisaoFuncionarioCadastrarPaciente">
                    <form action="index.php" method="POST">
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteCPF">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteCPF" id="funcionarioCadastrarPacienteCPF">CPF</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteCPF" name="funcionarioCadastrarPacienteCPF" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteProntuario">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteProntuario" id="funcionarioCadastrarPacienteProntuario">Prontuário</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteProntuario" name="funcionarioCadastrarPacienteProntuario" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteNomeCompleto">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteNomeCompleto" id="funcionarioCadastrarPacienteNomeCompleto">Nome Completo</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteNomeCompleto" name="funcionarioCadastrarPacienteNomeCompleto" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteTipoSaguineo">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteTipoSaguineo" id="funcionarioCadastrarPacienteTipoSaguineo">Tipo Saguíneo</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteTipoSaguineo" name="funcionarioCadastrarPacienteTipoSaguineo" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteEmail">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteEmail" id="funcionarioCadastrarPacienteEmail">Email</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteEmail" name="funcionarioCadastrarPacienteEmail" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteTelefone">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteTelefone" id="funcionarioCadastrarPacienteTelefone">(DD) Telefone</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteTelefone" name="funcionarioCadastrarPacienteTelefone" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteCEP">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteCEP" id="funcionarioCadastrarPacienteCEP">CEP</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteCEP" name="funcionarioCadastrarPacienteCEP" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteRua">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteRua" id="funcionarioCadastrarPacienteRua">Rua</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteRua" name="funcionarioCadastrarPacienteRua" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteNumero">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteNumero" id="funcionarioCadastrarPacienteNumero">Número</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteNumero" name="funcionarioCadastrarPacienteNumero" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteComplemento">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteComplemento" id="funcionarioCadastrarPacienteComplemento">Complemento</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteComplemento" name="funcionarioCadastrarPacienteComplemento" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteCidade">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteCidade" id="funcionarioCadastrarPacienteCidade">Cidade</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteCidade" name="funcionarioCadastrarPacienteCidade" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteMunicipio">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteMunicipio" id="funcionarioCadastrarPacienteMunicipio">Município</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteMunicipio" name="funcionarioCadastrarPacienteMunicipio" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacientePontoReferencia">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacientePontoReferencia" id="funcionarioCadastrarPacientePontoReferencia">Ponto de Referência</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacientePontoReferencia" name="funcionarioCadastrarPacientePontoReferencia" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteUF">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteUF" id="funcionarioCadastrarPacienteUF">UF</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteUF" name="funcionarioCadastrarPacienteUF" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteLocalNascimento">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteLocalNascimento" id="funcionarioCadastrarPacienteLocalNascimento">Local de Nascimento</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteLocalNascimento" name="funcionarioCadastrarPacienteLocalNascimento" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteEstadoCivil">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteEstadoCivil" id="funcionarioCadastrarPacienteEstadoCivil">Estado Civil</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteEstadoCivil" name="funcionarioCadastrarPacienteEstadoCivil" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteSexo">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteSexo" id="funcionarioCadastrarPacienteSexo">Sexo</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteSexo" name="funcionarioCadastrarPacienteSexo" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteNomePai">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteNomePai" id="funcionarioCadastrarPacienteNomePai">Nome do Pai</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteNomePai" name="funcionarioCadastrarPacienteNomePai" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteTelefonePai">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteTelefonePai" id="funcionarioCadastrarPacienteTelefonePai">(DD) Telefone</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteTelefonePai" name="funcionarioCadastrarPacienteTelefonePai" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteNomeMae">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteNomeMae" id="funcionarioCadastrarPacienteNomeMae">Nome da Mãe</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteNomeMae" name="funcionarioCadastrarPacienteNomeMae" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteTelefoneMae">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteTelefoneMae" id="funcionarioCadastrarPacienteTelefoneMae">(DD) Telefone</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteTelefoneMae" name="funcionarioCadastrarPacienteTelefoneMae" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteTipoMedico">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteTipoMedico" id="funcionarioCadastrarPacienteTipoMedico">Tipo de Médico</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteTipoMedico" name="funcionarioCadastrarPacienteTipoMedico" value="">
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteSalaAtendimento">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteSalaAtendimento" id="funcionarioCadastrarPacienteSalaAtendimento">Sala de Atendimento</label><br>
                            <input type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteSalaAtendimento" name="funcionarioCadastrarPacienteSalaAtendimento" value="">
                        </div>                    
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteSintomas">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteSintomas" id="funcionarioCadastrarPacienteSintomas">Sintomas</label><br>
                            <textarea type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteSintomas" name="funcionarioCadastrarPacienteSintomas" ></textarea>
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteAlergias">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteAlergias" id="funcionarioCadastrarPacienteAlergias">Alergias</label><br>
                            <textarea type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteAlergias" name="funcionarioCadastrarPacienteAlergias"></textarea>
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteDoencasCronicas">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteDoencasCronicas" id="funcionarioCadastrarPacienteDoencasCronicas">Doenças Crônicas</label><br>
                            <textarea type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteDoencasCronicas" name="funcionarioCadastrarPacienteDoencasCronicas"></textarea>
                        </div>
                        <div class="descricaoFuncionarioCadastrarPaciente" id="descricaoFuncionarioCadastrarPacienteRemediosControlados">
                            <label class="nomeInputFuncionarioCadastrarPaciente" for="funcionarioCadastrarPacienteRemediosControlados" id="funcionarioCadastrarPacienteRemediosControlados">Toma Remédios Controlados? Se sim, qual/quais?</label><br>
                            <textarea type="text" class="inputFuncionarioCadastrarPaciente" id="inputFuncionarioCadastrarPacienteRemediosControlados" name="funcionarioCadastrarPacienteRemediosControlados"></textarea>
                        </div>
                    </form>                    
                    <input type="submit" name="submit" id="submit" value="CADASTRAR PACIENTE" class="botaoCadastrarPaciente" onclick="cadastrarPacienteCriado()">

                </div>
            </div>
        </div>
    </section>

    <section class="acessoPaciente" id="acessoPaciente">
        <p class="descricaoAcessoPaciente"><span class="nomeInput">Nome Completo: </span><input type="text" id="nomeCompletoPaciente" value="" disabled="disabled"></p>
        <p class="descricaoAcessoPaciente"><span class="nomeInput">Idade: </span><input type="text" id="idadePaciente" value="" disabled="disabled"></p>
        <p class="descricaoAcessoPaciente"><span class="nomeInput">Grupo Saguígneo: </span><input type="text" id="grupoSanguineoPaciente" value="" disabled="disabled"></p>
        <p class="descricaoAcessoPaciente"><span class="nomeInput">Problemas de Saúde: </span><input type="text"id="problemasSaudePaciente" value="" disabled="disabled"></p>
        <p class="descricaoAcessoPaciente"><span class="nomeInput">Alergia: </span><input type="text" id="alergiaPaciente" value="" disabled="disabled"></p>
        <p class="descricaoAcessoPaciente"><span class="nomeInput">Peso: </span><input type="text" id="pesoPaciente" value="" disabled="disabled"></p>
        <p class="descricaoAcessoPaciente"><span class="nomeInput">Altura: </span><input type="text" id="alturaPaciente" value="" disabled="disabled"></p>
    </section>

    
    <section class="cadastroPaciente" id="cadastroPaciente">
        <p class="descricaoCadastroPaciente"><span class="nomeInput">Nome Completo: </span><input type="text" id="nomeCompletoFuncionario" value=""></p>
        <p class="descricaoCadastroPaciente"><span class="nomeInput">Idade: </span><input type="text" id="idadeFuncionario" value=""></p>
        <p class="descricaoCadastroPaciente"><span class="nomeInput">Grupo Saguígneo: </span><input type="text" id="grupoSanguineoFuncionario" value=""></p>
        <p class="descricaoCadastroPaciente"><span class="nomeInput">Problemas de Saúde: </span><input type="text"id="problemasSaudeFuncionario" value=""></p>
        <p class="descricaoCadastroPaciente"><span class="nomeInput">Alergia: </span><input type="text" id="alergiaFuncionario" value=""></p>
        <p class="descricaoCadastroPaciente"><span class="nomeInput">Peso: </span><input type="text" id="pesoFuncionario" value=""></p>
        <p class="descricaoCadastroPaciente"><span class="nomeInput">Altura: </span><input type="text" id="alturaFuncionario" value=""></p>
    </section>

    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
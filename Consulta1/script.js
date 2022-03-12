function Autenticacao(){
    var campoAutenticacaoUsuario = document.getElementById("campoAutenticacaoUsuario").value;
    var campoAutenticacaoSenha = document.getElementById("campoAutenticacaoSenha").value;
    /* var quantVet = parseInt(campoAutenticacaoUsuario.length); */

    var autenticacao = document.getElementById("autenticacao");
    var acessoFuncionario = document.getElementById("acessoFuncionario");

    var title = document.getElementById("title");
    var body = document.getElementById("body");

    var nomeAcessoFuncionarioNome = document.getElementById("nomeAcessoFuncionarioNome");
    var nomeAcessoFuncionarioMatricula = document.getElementById("nomeAcessoFuncionarioMatricula");
    var nomeAcessoFuncionarioFuncao = document.getElementById("nomeAcessoFuncionarioFuncao");


    if(campoAutenticacaoUsuario == "589045" && campoAutenticacaoSenha == "589045"){
        acessoFuncionario.className = "acessoFuncionarioMostrar";
        autenticacao.className = "autenticacaoOcultar";

        title.innerHTML = "TBMGN | Funcionário";
        body.className = "fundoBranco";

        nomeAcessoFuncionarioNome.innerHTML = "Jeniffer Lopez";
        nomeAcessoFuncionarioMatricula.innerHTML = "589045";
        nomeAcessoFuncionarioFuncao.innerHTML = "Recepcionista";
    }
    else if(campoAutenticacaoUsuario == "12345" && campoAutenticacaoSenha == "12345"){
        acessoFuncionario.className = "acessoFuncionarioMostrar";
        autenticacao.className = "autenticacaoOcultar";

        title.innerHTML = "TBMGN | Funcionário";
        body.className = "fundoBranco";

        nomeAcessoFuncionarioNome.innerHTML = "João Paulo";
        nomeAcessoFuncionarioMatricula.innerHTML = "12345";
        nomeAcessoFuncionarioFuncao.innerHTML = "Doutor";
    }
}


function esqueceuSenha(){
    var title = document.getElementById("title");
    
    var autenticacao = document.getElementById("autenticacao");
    var esqueceuSenha = document.getElementById("esqueceuSenha");

    
    title.innerHTML = "TBMGN | Esqueceu senha";
    
    autenticacao.className = "autenticacaoOcultar";
    esqueceuSenha.className = "esqueceuSenhaMostrar";

}


function dadoMenuAcessoFuncionarioOver(){
    var dadoMenuAcessoFuncionario = document.getElementById("dadoMenuAcessoFuncionario");
    
    dadoMenuAcessoFuncionario.className = "dadoMenuAcessoFuncionarioOver";
}

function menuConsultarCadastro(){
    var consultarCadastro = document.getElementById("consultarCadastro");
    var funcionarioConsultarCadastroCriado = document.getElementById("funcionarioConsultarCadastroCriado");
    var funcionarioCadastrarPacienteCriado = document.getElementById("funcionarioCadastrarPacienteCriado");
    
    consultarCadastro.className = "consultarCadastro";
    funcionarioConsultarCadastroCriado.className = "funcionarioConsultarCadastroCriado";
    funcionarioCadastrarPacienteCriado.className = "funcionarioCadastrarPacienteCriado";
}
function menuHamburguer(){
    var acessoFuncionarioMostrar = document.getElementById("acessoFuncionarioMostrar");
    var menuAcessoFuncionario = document.getElementById("menuAcessoFuncionario");
    
    
    acessoFuncionarioMostrar.className = "acessoFuncionarioMostrarOriginal";
    menuAcessoFuncionario.className = "menuAcessoFuncionarioOriginal";
}

function consultarCadastroCriado(){
    var campoConsultarCadastroCPF = document.getElementById("campoConsultarCadastroCPF").value;
    
    var consultarCadastro = document.getElementById("consultarCadastro");
    var funcionarioConsultarCadastroCriado = document.getElementById("funcionarioConsultarCadastroCriado");
    var funcionarioCadastrarPaciente = document.getElementById("funcionarioCadastrarPaciente");

    var inputFuncionarioConsultarCadastroCriadoCPF = document.getElementById("inputFuncionarioConsultarCadastroCriadoCPF");
    var inputFuncionarioConsultarCadastroCriadoProntuario = document.getElementById("inputFuncionarioConsultarCadastroCriadoProntuario");
    var inputFuncionarioConsultarCadastroCriadoNomeCompleto = document.getElementById("inputFuncionarioConsultarCadastroCriadoNomeCompleto");
    var inputFuncionarioConsultarCadastroCriadoTipoSaguineo = document.getElementById("inputFuncionarioConsultarCadastroCriadoTipoSaguineo");
    var inputFuncionarioConsultarCadastroCriadoEmail = document.getElementById("inputFuncionarioConsultarCadastroCriadoEmail");
    var inputFuncionarioConsultarCadastroCriadoTelefone = document.getElementById("inputFuncionarioConsultarCadastroCriadoTelefone");
    var inputFuncionarioConsultarCadastroCriadoCEP = document.getElementById("inputFuncionarioConsultarCadastroCriadoCEP");
    var inputFuncionarioConsultarCadastroCriadoRua = document.getElementById("inputFuncionarioConsultarCadastroCriadoRua");
    var inputFuncionarioConsultarCadastroCriadoNumero = document.getElementById("inputFuncionarioConsultarCadastroCriadoNumero");
    var inputFuncionarioConsultarCadastroCriadoComplemento = document.getElementById("inputFuncionarioConsultarCadastroCriadoComplemento");
    var inputFuncionarioConsultarCadastroCriadoCidade = document.getElementById("inputFuncionarioConsultarCadastroCriadoCidade");
    var inputFuncionarioConsultarCadastroCriadoMunicipio = document.getElementById("inputFuncionarioConsultarCadastroCriadoMunicipio");
    var inputFuncionarioConsultarCadastroCriadoPontoReferencia = document.getElementById("inputFuncionarioConsultarCadastroCriadoPontoReferencia");
    var inputFuncionarioConsultarCadastroCriadoUF = document.getElementById("inputFuncionarioConsultarCadastroCriadoUF");
    var inputFuncionarioConsultarCadastroCriadoLocalNascimento = document.getElementById("inputFuncionarioConsultarCadastroCriadoLocalNascimento");
    var inputFuncionarioConsultarCadastroCriadoEstadoCivil = document.getElementById("inputFuncionarioConsultarCadastroCriadoEstadoCivil");
    var inputFuncionarioConsultarCadastroCriadoSexo = document.getElementById("inputFuncionarioConsultarCadastroCriadoSexo");
    var inputFuncionarioConsultarCadastroCriadoNomePai = document.getElementById("inputFuncionarioConsultarCadastroCriadoNomePai");
    var inputFuncionarioConsultarCadastroCriadoTelefonePai = document.getElementById("inputFuncionarioConsultarCadastroCriadoTelefonePai");
    var inputFuncionarioConsultarCadastroCriadoNomeMae = document.getElementById("inputFuncionarioConsultarCadastroCriadoNomeMae");
    var inputFuncionarioConsultarCadastroCriadoTelefoneMae = document.getElementById("inputFuncionarioConsultarCadastroCriadoTelefoneMae");
    var inputFuncionarioConsultarCadastroCriadoTipoMedico = document.getElementById("inputFuncionarioConsultarCadastroCriadoTipoMedico");
    var inputFuncionarioConsultarCadastroCriadoSalaAtendimento = document.getElementById("inputFuncionarioConsultarCadastroCriadoSalaAtendimento");
    var inputFuncionarioConsultarCadastroCriadoSintomas = document.getElementById("inputFuncionarioConsultarCadastroCriadoSintomas");
    var inputFuncionarioConsultarCadastroCriadoAlergias = document.getElementById("inputFuncionarioConsultarCadastroCriadoAlergias");
    var inputFuncionarioConsultarCadastroCriadoDoencasCronicas = document.getElementById("inputFuncionarioConsultarCadastroCriadoDoencasCronicas");
    var inputFuncionarioConsultarCadastroCriadoRemediosControlados = document.getElementById("inputFuncionarioConsultarCadastroCriadoRemediosControlados");

    if(campoConsultarCadastroCPF == "85263149075"){    
        consultarCadastro.className = "consultarCadastroOcultar";
        funcionarioConsultarCadastroCriado.className = "funcionarioConsultarCadastroCriadoMostrar";
        funcionarioCadastrarPaciente.className = "funcionarioCadastrarPaciente";
        
        inputFuncionarioConsultarCadastroCriadoCPF.value = "852.631.490-75";
        inputFuncionarioConsultarCadastroCriadoProntuario.value = "26.7908";
        inputFuncionarioConsultarCadastroCriadoNomeCompleto.value = "JOAQUIM OLIVEIRA MONOEL QUEIROZ DA SILVA";
        inputFuncionarioConsultarCadastroCriadoTipoSaguineo.value = "O+";
        inputFuncionarioConsultarCadastroCriadoEmail.value = "joaquimroz@unigranrio.br";
        inputFuncionarioConsultarCadastroCriadoTelefone.value = "(21) 9 9548-6280";
        inputFuncionarioConsultarCadastroCriadoCEP.value = "89.456-481";
        inputFuncionarioConsultarCadastroCriadoRua.value = "ESTRADA DA LIGAÇÃO";
        inputFuncionarioConsultarCadastroCriadoNumero.value = "500";
        inputFuncionarioConsultarCadastroCriadoComplemento.value = "LOTE:49 QUADRA:52";
        inputFuncionarioConsultarCadastroCriadoCidade.value = "BELFORD-ROXO";
        inputFuncionarioConsultarCadastroCriadoMunicipio.value = "RIO DE JANEIRO";
        inputFuncionarioConsultarCadastroCriadoPontoReferencia.value = "CIEP366";
        inputFuncionarioConsultarCadastroCriadoUF.value = "RJ";
        inputFuncionarioConsultarCadastroCriadoLocalNascimento.value = "JACAREPAGUÁ";
        inputFuncionarioConsultarCadastroCriadoEstadoCivil.value = "CASADO";
        inputFuncionarioConsultarCadastroCriadoSexo.value = "M";
        inputFuncionarioConsultarCadastroCriadoNomePai.value = "JÓSE ALBERTO DA SILVA";
        inputFuncionarioConsultarCadastroCriadoTelefonePai.value = "(21) 9 9548-6280";
        inputFuncionarioConsultarCadastroCriadoNomeMae.value = "JOANA OLIVEIRA MONOEL QUEIROZ DA SILVA";
        inputFuncionarioConsultarCadastroCriadoTelefoneMae.value = "(21) 9 9548-6280";
        inputFuncionarioConsultarCadastroCriadoTipoMedico.value = "ORTOPEDIA";
        inputFuncionarioConsultarCadastroCriadoSalaAtendimento.value = "A";
        inputFuncionarioConsultarCadastroCriadoSintomas.value = "DORES NOS PÉS";
        inputFuncionarioConsultarCadastroCriadoAlergias.value = "";
        inputFuncionarioConsultarCadastroCriadoDoencasCronicas.value = "DIABETE";
        inputFuncionarioConsultarCadastroCriadoRemediosControlados.value = "Jardiance 25mg, Ozempic 0,25mg";
    }
    else if(campoConsultarCadastroCPF == "01234567890"){    
        consultarCadastro.className = "consultarCadastroOcultar";
        funcionarioConsultarCadastroCriado.className = "funcionarioConsultarCadastroCriadoMostrar";
        funcionarioCadastrarPaciente.className = "funcionarioCadastrarPaciente";
        
        inputFuncionarioConsultarCadastroCriadoCPF.value = "012.345.678-90";
        inputFuncionarioConsultarCadastroCriadoProntuario.value = "26.7909";
        inputFuncionarioConsultarCadastroCriadoNomeCompleto.value = "BARBARA COSTA DE OLIVEIRA";
        inputFuncionarioConsultarCadastroCriadoTipoSaguineo.value = "O-";
        inputFuncionarioConsultarCadastroCriadoEmail.value = "barbinha123@unigranrio.br";
        inputFuncionarioConsultarCadastroCriadoTelefone.value = "(21) 9 9548-6280";
        inputFuncionarioConsultarCadastroCriadoCEP.value = "89.456-481";
        inputFuncionarioConsultarCadastroCriadoRua.value = "ESTRADA DA LIGAÇÃO";
        inputFuncionarioConsultarCadastroCriadoNumero.value = "500";
        inputFuncionarioConsultarCadastroCriadoComplemento.value = "LOTE:49 QUADRA:52";
        inputFuncionarioConsultarCadastroCriadoCidade.value = "DUQUE DE CAXIAS";
        inputFuncionarioConsultarCadastroCriadoMunicipio.value = "RIO DE JANEIRO";
        inputFuncionarioConsultarCadastroCriadoPontoReferencia.value = "UNIGRANRIO";
        inputFuncionarioConsultarCadastroCriadoUF.value = "RJ";
        inputFuncionarioConsultarCadastroCriadoLocalNascimento.value = "JACAREPAGUÁ";
        inputFuncionarioConsultarCadastroCriadoEstadoCivil.value = "CASADO";
        inputFuncionarioConsultarCadastroCriadoSexo.value = "F";
        inputFuncionarioConsultarCadastroCriadoNomePai.value = "WALDIR DE OLIVEIRA";
        inputFuncionarioConsultarCadastroCriadoTelefonePai.value = "(21) 9 9548-6280";
        inputFuncionarioConsultarCadastroCriadoNomeMae.value = "MAIRA COSTA DE OLIVEIRA";
        inputFuncionarioConsultarCadastroCriadoTelefoneMae.value = "(21) 9 9548-6280";
        inputFuncionarioConsultarCadastroCriadoTipoMedico.value = "ORTOPEDIA";
        inputFuncionarioConsultarCadastroCriadoSalaAtendimento.value = "A";
        inputFuncionarioConsultarCadastroCriadoSintomas.value = "DORES ABDOMINAIS";
        inputFuncionarioConsultarCadastroCriadoAlergias.value = "";
        inputFuncionarioConsultarCadastroCriadoDoencasCronicas.value = "";
        inputFuncionarioConsultarCadastroCriadoRemediosControlados.value = "";
    }
}
function menuCadastrarPaciente(){
    var consultarCadastro = document.getElementById("consultarCadastro");
    var funcionarioConsultarCadastroCriado = document.getElementById("funcionarioConsultarCadastroCriado");
    var funcionarioCadastrarPaciente = document.getElementById("funcionarioCadastrarPaciente");
    
    consultarCadastro.className = "consultarCadastroOcultar";
    funcionarioConsultarCadastroCriado.className = "funcionarioConsultarCadastroCriado";
    funcionarioCadastrarPaciente.className = "funcionarioCadastrarPacienteMostrar";
}






/* Travar F5 para rerarregar */
window.addEventListener('keydown', function (e) {
    var code = e.which || e.keyCode;
    if (code == 116) e.preventDefault();
    else return true;
    // fazer algo aqui para quando a tecla F5 for premida
});
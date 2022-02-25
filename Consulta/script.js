function Acessar(){
    var body = document.getElementById("body");

    
    var divisaoBotaoVoltar = document.getElementById("divisaoBotaoVoltar");
    
    var campoLogin = document.getElementById("campoLogin").value;
    var quantVet = parseInt(campoLogin.length);

    var nomeCompletoFuncionario = document.getElementById("nomeCompletoFuncionario");
    var nomeCompletoPaciente = document.getElementById("nomeCompletoPaciente");

    
    var autenticacao = document.getElementById("autenticacao");
    var acessoFuncionario = document.getElementById("acessoFuncionario");

    if(campoLogin == "12345"){        
        body.className = "bodyAcesso";
        divisaoBotaoVoltar.className = " divisaoBotaoVoltarMostrar";
        nomeCompletoFuncionario.value = "Alcimar";
        acessoFuncionario.className = "acessoFuncionarioMostrar";
        autenticacao.className = "autenticacaoOcultar";
    }
    else if(campoLogin == "00123456789"){
        body.className = "bodyAcesso";
        divisaoBotaoVoltar.className = " divisaoBotaoVoltarMostrar";
        nomeCompletoPaciente.value = "Lucas";
        acessoPaciente.className = "acessoPacienteMostrar";
        autenticacao.className = "autenticacaoOcultar";
    }
    else if(quantVet == 5){
        body.className = "bodyAcesso";
        divisaoBotaoVoltar.className = " divisaoBotaoVoltarMostrar";
        nomeCompletoFuncionario.value = "Funcionário";
        acessoFuncionario.className = "acessoFuncionarioMostrar";
        autenticacao.className = "autenticacaoOcultar";
    }
    else if(quantVet == 11){
        body.className = "bodyAcesso";
        divisaoBotaoVoltar.className = " divisaoBotaoVoltarMostrar";
        nomeCompletoPaciente.value = "Paciente";
        acessoPaciente.className = "acessoPacienteMostrar";
        autenticacao.className = "autenticacaoOcultar";
    }
}
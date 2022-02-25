function consultar(){
    /* var nome = document.getElementById("campoLogin");  */   

    if(document.getElementById("campoLogin").value == "Thiago"){
        /* var nomeCompleto = document.getElementById("nomeCompleto"); */

        document.getElementById("nomeCompleto").value = "Thiago";
    }
    else if(document.getElementById("campoLogin").value == "Matheus"){
        /* var nomeCompleto = document.getElementById("nomeCompleto"); */

        document.getElementById("nomeCompleto").value = "Matheus";
    }
    else{
        /* var nomeCompleto = document.getElementById("nomeCompleto"); */

        document.getElementById("nomeCompleto").value = "ERRO";
    }
}
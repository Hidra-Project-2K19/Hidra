function validar(){
    
    var nome = document.getElementById("nome");
    var email = document.getElementById("email");
    var usuario = document.getElementById("usuario");
    var senha = document.getElementById("senha");
    var i = 0;

    if (nome.value.length != 0){
        i = i + 1;
    }
    if (email.value.length != 0){
        i = i + 1;
    }
    if (usuario.value.length != 0){
        i = i + 1;
    }
    if (senha.value.length != 0){
        i = i + 1;
    }

    if(i == 0){
        $('.caixa1')
        .css("background-color", "rgba(255, 0, 0, 0.219)")
    }else if(i == 1){
        $('.caixa1')
    .css("background-color", "rgba(255, 230, 0, 0.39)")
    }else if(i == 2){
        $('.caixa1')
    .css("background-color", "rgba(255, 230, 0, 0.39)")
    }else if(i == 3){
        $('.caixa1')
        .css("background-color", "rgba(255, 230, 0, 0.39)")
    }else if(i == 4){
        $('.caixa1')
        .css("background-color", "rgba(0, 255, 76, 0.425)")
    }

}
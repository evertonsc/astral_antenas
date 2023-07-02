function trocaImagemAtiva(imagem){

    if(!imagem.classList.contains("imagem_ativa")){
        
        // Mudar a imagem principal trocando o src dela pelo src da imagem secundária que foi clicada
        var imgPrincipal = document.querySelector(".imagem_principal");
        var imgSecundariaSelecionada = imagem.getAttribute("src");
        imgPrincipal.setAttribute('src', imgSecundariaSelecionada);


        // Mudar a imagem secundária selecionada
        var imagemSelecionada = document.querySelector(".imagem_ativa");    // Pega a imagem selecionada atual
        imagemSelecionada.classList.remove("imagem_ativa");                 // Remove a classe imagem ativa dela
        imagem.classList.add("imagem_ativa");                               // Adiciona a classe imagem_ativa na nova imagem selecionada
    }
    
}




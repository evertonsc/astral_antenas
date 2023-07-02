function defineMenuAtivo(){
    var url = window.location.href;
    var itensMenu = document.querySelectorAll(".a-menu");

    // Verifica se a url tem query string
    if(url.includes("?")){
        // Divide a string com base no caractere "?"
        var partes = url.split("?");

        // Obtém a parte antes do "?"
        url = partes.shift();
    }

    itensMenu.forEach(item => {

        // Se algum dos menus tiver a classe menu-ativo remove ela
        if(item.classList.contains("menu-ativo")){
            item.classList.remove("menu-ativo");
        }

        // Se a url for igual ao href do item atual, adiciona a classe menu-ativo
        if(url == item.href){
            item.classList.add("menu-ativo");
        }
        
    });
    
}


window.onload = () => {
    defineMenuAtivo();
};
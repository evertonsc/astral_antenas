/* Quando a foto da fachada na página inicial atingir 800px de width (que é o max-width dela) vou trocar o flex-direction dela para "row", fazendo assim com que ela fique centralizada. */

// primeiras divs, imagem e texto
const primeiroContainer = document.querySelector(".container_fachada");
const primeiroTexto = document.querySelector(".primeiro_texto");
const containerFotoFachada = document.querySelector(".foto_fachada_container");
const imgFachada = document.querySelector(".foto_fachada");

// segundas divs, imagem e texto
const segundoContainer = document.querySelector(".container_interior");
const segundoTexto = document.querySelector(".segundo_texto");
const containerFotoInterior = document.querySelector(".foto_interior_container");
const imgInterior = document.querySelector(".foto_interior");


// as variáveis acima estão na mesma ordem que o HTML


function verificarLarguraJanela() {

    if(window.innerWidth > 900){

        if(imgFachada.width == 600 && imgInterior.width == 600){
    
            // primeiras divs, imagem e texto
            containerFotoFachada.style.flexDirection = "row";
            primeiroContainer.style.display = "inline-flex";
            primeiroContainer.style.alignItems = "center";
            containerFotoFachada.style.justifyContent = "flex-start";
            primeiroTexto.style.width = "400px";
            primeiroTexto.style.textAlign = "start";
            primeiroTexto.style.margin = "0 0 0 2em";
            primeiroTexto.remove();
            primeiroContainer.appendChild(primeiroTexto);
    
    
            // segundas divs, imagem e texto
            containerFotoInterior.style.flexDirection = "row";
            segundoContainer.style.display = "inline-flex";
            segundoContainer.style.alignItems = "center";
            segundoContainer.style.justifyContent = "flex-end";
            containerFotoInterior.style.justifyContent = "flex-start";
            segundoTexto.style.width = "400px";
            segundoTexto.style.textAlign = "end";
            segundoTexto.style.margin = "0 2em 0 0";
            segundoTexto.remove();
            segundoContainer.insertBefore(segundoTexto, containerFotoInterior);


        }   
    } else if (window.innerWidth < 900 || window.innerWidth > 1200) {
        // volta aos estilos padrões

        // os containers que envolvem a imagem e o texto respectivo voltam ao display block
        primeiroContainer.style.display = "block";
        segundoContainer.style.display = "block";

        // os containers que envolvem somente a imagem voltam a ser flexDirection column
        containerFotoFachada.style.flexDirection = "column";
        containerFotoInterior.style.flexDirection = "column";

        // os textos voltam a não ter uma width fixa
        primeiroTexto.style.width = "auto";
        primeiroTexto.style.textAlign = "center";
        primeiroTexto.style.margin = "0";

        segundoTexto.style.width = "auto";
        segundoTexto.style.textAlign = "center";
        segundoTexto.style.margin = "0";

        // E preciso remover eles para adicionar novamente em outra posição
        primeiroTexto.remove();
        primeiroContainer.insertBefore(primeiroTexto, containerFotoFachada);

        segundoTexto.remove();
        segundoContainer.insertBefore(segundoTexto, containerFotoInterior);
    }

}

// Registrar o evento de redimensionamento da janela
window.addEventListener("resize", verificarLarguraJanela);

// Assim que o usuário entrar na página, vai executar isso para verificar qual a width atual da janela.
window.onload = () => {
    verificarLarguraJanela();
};






  
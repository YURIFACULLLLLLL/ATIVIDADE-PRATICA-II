function criarPost() {
    let input = document.getElementById("postInput");
    let texto = input.value;

    if (texto.trim() === "") {
        alert("O post não pode estar vazio!");
        return;
    }

    let post = document.createElement("div");
    post.className = "post";

    post.innerHTML = `
        <p>${texto}</p>
        <button onclick="curtir(this)"> 0 curtidas</button>
    `;

    document.getElementById("posts").prepend(post);
    input.value = "";
}

function curtir(botao) {
    let texto = botao.innerText;
    let numero = parseInt(texto.match(/\d+/)[0]);
    numero++;
    botao.innerText = ` ${numero} curtidas`;
}

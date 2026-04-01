<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Feed</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<nav class="sidebar">
    <button>🏠 Início</button>
    <button>🔍 Pesquisa</button>
    <button>➕ Nova Postagem</button>
    <button>👤 Perfil</button>
</nav>

<main class="conteudo">

<div class="perfil">
    <img src="img/joker-persona-video.webp">
    <div>
        <h2><?php echo $_SESSION["usuario"]; ?></h2>
        <p>@usuario</p>
    </div>
</div>

<div class="postagem-form">
    <input type="text" id="postInput" placeholder="Quais são as novidades?">
    <button onclick="criarPost()">Postar</button>
</div>

<div id="posts"></div>

</main>
</div>

<script src="js/script.js"></script>

</body>
</html>

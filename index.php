<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Casa da Dona Rita</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<img src="./img/logot.png" style="height: 100px; width: 150px; margin: 10px;">
			<ul>
				<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Blog" alt="Blog">Blog</a></li>
				<li><a href="#" title="CONHEÇA A DONA RITA" alt="CONHEÇA A DONA RITA">CONHEÇA A DONA RITA</a></li>
                <li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
			</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Venha para a casa de Dona Rita,e escolha sua marmita!!!.</h1>
                    </header>
                    <p>Impossível não voltar novamente.</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		<section class="main_mkn">
			<header class="main_mkn_header">
				<h1>Exemplo das listagens das marmitas</h1>
				<p>Comfira nossas marmitas</p>
			</header>
			<?php foreach ($cardapio as $key => $value) { ?>
			<article>
				<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<a href="pagina2.php?id=<?=$value['id'];?>" class="btn-verMais">Ver Mais</a>
			</article>
			<?php } ?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<!-- preparar o footer -->
	<a>Todos os direitos reservados a Maikon Luiz Da Silva Marques RA:21034112-5</a>
	</footer>
</body>
</html>
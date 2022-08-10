<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<img src="./img/logot.png" style="height: 100px; width: 150px; margin: 10px;">
			<ul>
				<li><a href="#" title="home" alt="home">Home</a></li>
				<li><a href="#" title="blog" alt="blog">Blog</a></li>
				<li><a href="#" title="Conheça Dona Rita" alt="Conheça Dona Rita">CONHEÇA A DONA RITA</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		
		<section class="main_mkn">
			<header class="main_mkn_header">
				
			</header>
			<?php
                $id = $_GET['id'];

				foreach($cardapio as $key => $value){
                    if($value['id'] == $id){
			?>
			<article>
			<h2><?=$value['titulo'];?></h2>
				<img src=<?=$value['imagem'];?>>
			    <?=$value['descricao'];?></p>	
			</article>
			<?php
                    }
				}
			?>
			
		</section>
			<!-- <?php
				foreach($cardapio as $key => $value){
                    if($value['id'] != $id){		
			?>
			<article>
				<h2><?=$value['titulo'];?></h2>
				
	    	</article>
			<?php
                    }
				}
			?> -->
			
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
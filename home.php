<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
    
    <title>Pagina Principal- Loja Virtual</title>
    <link type="text/css" rel="stylesheet" href="estilo/home.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/login.js"></script>

</head>
<body>
    <header>
        <div>
            <ul >
                <li ><a href="#"><img src="img/mini/miniatura.php?src=img/caminhao.png&w=14&h=10$q=100"> Frete Gratis</a></li>
                <li><a href="#"><img src="img/telAtendimento.png" width="14" height="10"> Central de Atendimento</a></li>
                <li><a href="#"><img src="img/devolucao.png" width="14" height="10"> Saiba sobre as regras de devolução</a></li>
            </ul> 

        </div>

        <div>   
            <figure>
                <a href="/"><img src="img/logo-desenvolvendophp.png" width="201"></a>
            </figure>

            <form>
                <input type="search" class="inputButton input" />
                <button class="inputButton button" >Buscar</button>
            </form>
            <section>
                <figure><img src="img/carrinho.png" width="30" title="Meu Carrinho">
                    <figcaption title="Meu Carrinho">3</figcaption>
                </figure>

                <figure><img src="img/entrar.png" width="30" title="Acessa Minha Conta">
                </figure>
            </section>
            <nav>
                <ul>
                    <li><a href="#">Oferta do dia</a></li>
                    <?php
                    $itemMenu = array('Massa Muscular', 'Proteinas', 'Vitaminas', 'Energia', 'Acessórios', 'Massa Muscular');
                    for ($i = 0; $i < Count($itemMenu); $i++) {
                        ?>
                        <li>
                            <a href=""> <?= $itemMenu[$i] ?> </a>
                            <ul>
                                <figure>
                                    <img src="img/ZMA.jpg" width="50">
                                    <figcaption>
                                        <p>ZMA - Cápsula - Optimus Nutrition</p>
                                        <span>
                                            <?php
                                            $desc = 'O ZMA deriva da combinação do zinco com magnésio e vitamina B6. Este suplemento alimentar natural 
                                                aumenta os níveis anabólicos, gera força, resistência e massa muscular. Com uma fórmula projetada e
                                                patenteada, ele apresenta quantidade e formas muito precisas e selecionadas de Aspartato de Monometionina 
                                                de Zinco, Aspartato de Magnésio e vitamina B6.';
                                            print substr($desc, 0, 276).'...';
                                            ?>
                                        </span>
                                        <a href="">Confira essa oferta</a>
                                    </figcaption>

                                </figure>
                                <li><a href="">BCAA</a></li>
                                <li><a href="">Pré-Hormonais</a></li>
                                <li><a href="">Pré-Treino</a></li>
                                <li><a href="">ZMA</a></li>
                                <li><a href="">Packs</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                    <li><a href="#">Blog</a></li>
                </ul>

            </nav>



        </div>
    </header>


</body>
</html>

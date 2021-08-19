<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./Css/style.css">
    <script src="https://kit.fontawesome.com/837f27737e.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto01</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left">logomarca</div><!-- Logo -->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contatos</a></li>
                </ul>
            </nav><!-- desktop -->
            <nav class="Mobile right">
                <div class="btn-menu-mobile">
                    <i class="fas fa-bars"></i>
                </div><!-- Botão menu mobile -->
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Serviços</a></li>
                        <li><a href="">Contatos</a></li>
                    </ul>
            </nav><!-- Mobile -->
            <div class="clear"><!-- clear -->
        </div><!-- center -->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="center">
            <form>
                <h2>Qual o Seu melhor e-mail?</h2>
                <input type="email" name="email" require/>
                <input type="submit" name="acao" value="Cadastrar!">
            </form>
        </div><!-- center -->
    </section><!-- banner principal -->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Davi Alexandre Dias</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus tincidunt diam, vitae sodales dui bibendum quis. Donec ornare eget tellus ac pretium. Sed nec venenatis neque. Quisque hendrerit felis id tincidunt tristique. Quisque sem lorem, tincidunt consectetur egestas at, egestas posuere diam. Donec id gravida tellus. Aliquam gravida lacus sit amet elementum facilisis. Etiam quam magna, posuere aliquet lorem quis, tincidunt faucibus dui. </p>
            </div><!-- W50 -->
            <div class="w50 left">
                <!-- Pegar img depois -->
               <img class="right" src="./Images/OIP.jfif" alt="Splice">
            </div><!-- W50 -->
            <div class="clear"></div>
        </div><!-- Center -->
    </section><!-- Descrição do Autor -->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Minhas specialidades</h2>
            <div class="box-especialidades w33 left">
                <h3><i class="fab fa-html5"></i></h3>
                <h4>HTLM5</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus tincidunt diam, vitae sodales dui bibendum quis. Donec ornare eget tellus ac pretium. Sed nec venenatis neque. Quisque hendrerit felis id tincidunt tristique. Quisque sem lorem, tincidunt consectetur egestas at, egestas posuere diam. Donec id gravida tellus.</p>
            </div><!-- box especialidade -->
            <div class="box-especialidades w33 left">
                <h3><i class="fab fa-css3"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus tincidunt diam, vitae sodales dui bibendum quis. Donec ornare eget tellus ac pretium. Sed nec venenatis neque. Quisque hendrerit felis id tincidunt tristique. Quisque sem lorem, tincidunt consectetur egestas at, egestas posuere diam. Donec id gravida tellus.</p>
            </div><!-- box especialidade -->
            <div class="box-especialidades w33 left">
                <h3><i class="fab fa-js"></i></h3>
                <h4>JavaScript</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus tincidunt diam, vitae sodales dui bibendum quis. Donec ornare eget tellus ac pretium. Sed nec venenatis neque. Quisque hendrerit felis id tincidunt tristique. Quisque sem lorem, tincidunt consectetur egestas at, egestas posuere diam. Donec id gravida tellus.</p>
            </div><!-- box especialidade -->
            <div class="clear"></div><!-- clear -->
        </div><!-- Center -->
    </section><!-- Especialidades -->


    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2><!-- title -->
                <div class="depoimento-single">
                    <p>Vivamus tempor, leo at sagittis volutpat, metus nibh mattis metus, eget blandit arcu sem a enim. Pellentesque pretium ante ligula, sed volutpat orci rhoncus sit amet. Mauris et velit quis metus bibendum tincidunt eu ac orci. Sed euismod metus arcu, eu facilisis mauris efficitur at. Praesent aliquet est ipsum, et congue erat rutrum nec. Suspendisse placerat sed augue a pulvinar. Phasellus laoreet quam ut justo posuere fermentum.</p>
                    <p class="nome-autor">Lorem Ipsum</p><!-- Nome autor -->
                </div><!-- depoimento single -->
                <div class="depoimento-single">
                    <p>Vivamus tempor, leo at sagittis volutpat, metus nibh mattis metus, eget blandit arcu sem a enim. Pellentesque pretium ante ligula, sed volutpat orci rhoncus sit amet. Mauris et velit quis metus bibendum tincidunt eu ac orci. Sed euismod metus arcu, eu facilisis mauris efficitur at. Praesent aliquet est ipsum, et congue erat rutrum nec. Suspendisse placerat sed augue a pulvinar. Phasellus laoreet quam ut justo posuere fermentum.</p>
                    <p class="nome-autor">Lorem Ipsum</p><!-- Nome autor -->
                </div><!-- depoimento single -->
                <div class="depoimento-single">
                    <p>Vivamus tempor, leo at sagittis volutpat, metus nibh mattis metus, eget blandit arcu sem a enim. Pellentesque pretium ante ligula, sed volutpat orci rhoncus sit amet. Mauris et velit quis metus bibendum tincidunt eu ac orci. Sed euismod metus arcu, eu facilisis mauris efficitur at. Praesent aliquet est ipsum, et congue erat rutrum nec. Suspendisse placerat sed augue a pulvinar. Phasellus laoreet quam ut justo posuere fermentum.</p>
                    <p class="nome-autor">Lorem Ipsum</p><!-- Nome autor -->
                </div><!-- depoimento single -->
                <div class="depoimento-single">
                    <p>Vivamus tempor, leo at sagittis volutpat, metus nibh mattis metus, eget blandit arcu sem a enim. Pellentesque pretium ante ligula, sed volutpat orci rhoncus sit amet. Mauris et velit quis metus bibendum tincidunt eu ac orci. Sed euismod metus arcu, eu facilisis mauris efficitur at. Praesent aliquet est ipsum, et congue erat rutrum nec. Suspendisse placerat sed augue a pulvinar. Phasellus laoreet quam ut justo posuere fermentum.</p>
                    <p class="nome-autor">Lorem Ipsum</p><!-- Nome autor -->
                </div><!-- depoimento single -->
            </div><!-- w50 -->
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2><!-- title -->
                <div class="servicos">
                    <ul>
                        <li>Integer et blandit odio, sed sagittis arcu. Donec ut sagittis nunc. Praesent id aliquam quam. Sed sodales aliquam neque sit amet mattis. </li>
                        <li>Integer et blandit odio, sed sagittis arcu. Donec ut sagittis nunc. Praesent id aliquam quam. Sed sodales aliquam neque sit amet mattis. .</li>
                        <li>Integer et blandit odio, sed sagittis arcu. Donec ut sagittis nunc. Praesent id aliquam quam. Sed sodales aliquam neque sit amet mattis. </li>
                        <li>Integer et blandit odio, sed sagittis arcu. Donec ut sagittis nunc. Praesent id aliquam quam. Sed sodales aliquam neque sit amet mattis. </li>
                        <li>Integer et blandit odio, sed sagittis arcu. Donec ut sagittis nunc. Praesent id aliquam quam. Sed sodales aliquam neque sit amet mattis. </li>
                    </ul>
                </div><!-- servicos -->
            </div><!-- w50 -->
            <div class="clear"></div>
        </div><!-- center -->
    </section><!-- extras -->

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!-- center -->
    </footer>
</body>
</html>
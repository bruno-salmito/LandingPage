<!-- 
    Landing Page modelo
    Autor: Bruno Salmito
    # Pode alterar a vontade
-->
<!DOCTYPE html>
<html lang="pt-br">
<!--
    adicionar o back-end
-->

<head>
    <!-- TAGS SEO -->
    <meta name="description" content="Descrição do meu site">
    <meta name="author" content="Autor do site">
    <meta name="keywords" content="palavras,separadas por vírgula">
    <!-- TAG RESPONSIVO -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">

    <title>Landing Page</title>
    <!-- links e fonts -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Charset-->
    <meta charset="UTF-8">
</head>

<body>
    <!-- 
        Cabeçalho do site
    -->
    <header>
        <div class="center">
            <div class="logo"></div>
            <div class="logo"></div>
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>
 
    <div class="msgSucesso">Enviado com sucesso...</div>   
    <div class="msgErro">Algo deu Errado</div>  
    <div class="loader">
        <img src="img/loader.gif" alt="">
    </div>

    <section class="banner">
        <div class="center bg_main">
            <div class="form-container">
                <h2>Pode acreditar, por dentro é ainda mais bonito.</h2>
                <form method="post" autocomplete="off">
                    <div class="input_container">
                        <label for="nome">Nome</label>
                        <input required type="text" name="nome">
                    </div>
                    <!--input_container-->
                    <div class="input_container">
                        <label for="email">E-Mail</label>
                        <input required type="email" name="email">
                    </div>
                    <!--input_container-->
                    <div class="input_container">
                        <label for="telefone">Telefone</label>
                        <input required type="text" name="telefone">
                    </div>
                    <!--input_container-->
                    <div class="input_container">
                        <label for="msg">Mensagem</label>
                        <textarea required name="msg"></textarea>
                    </div>
                    <!--input_container-->
                    <div class="input_container">
                        <input type="submit" name="acao" value="Enviar">
                    </div>
                    <!--input_container-->
                </form>
            </div>
            <!--form-container-->

            <div class="clear"></div>
        </div>
        <!--center-->
        <div class="arrow">
            <i class="fa fa-arrow-down"></i>
        </div>
        <!--arrow-->
        <div class="clear"></div>
    </section>
    <!--banner-->

    <!-- 
        Section contenedo chamada para o site
        Adicionar a dashboard aqui também
    -->
    <section class="chamada">
        <div class="center">
            <h2>Viva a vida que você sempre sonhou.</h2>
            <h3>Apartamentos de frente para o mar</h3>
        </div>
    </section>
    <!--chamada-->

    <!-- 
        Mosaico contendo a bg e texto de exemplos
        Adicionar a dashboard
    -->
    <section class="mosaico">
        <div class="center">
            <div class="wraper_mosaico" data-anime="left">
                <div class="item_1" style="background-image: url('img/mosaico-1.jpeg'); order: 2;"></div>
                <div class="item_2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, pariatur quia qui dolores
                        sint commodi inventore dolore quas, facere nostrum adipisci doloribus perspiciatis, minima
                        reiciendis. Sit aperiam temporibus repudiandae provident.</p>
                </div>
            </div>
            <!--wraper-mosaico-->
            <div class="wraper_mosaico" data-anime="right">
                <div class="item_1" style="background-image: url('img/mosaico4.jpg');"></div>
                <div class="item_2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, pariatur quia qui dolores
                        sint commodi inventore dolore quas, facere nostrum adipisci doloribus perspiciatis, minima
                        reiciendis. Sit aperiam temporibus repudiandae provident.</p>
                </div>
            </div>
            <!--wraper-mosaico-->
            <div class="wraper_mosaico" data-anime="left">
                <div class="item_1" style="background-image: url('img/mosaico3.jpg'); order: 2;"></div>
                <div class="item_2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, pariatur quia qui dolores
                        sint commodi inventore dolore quas, facere nostrum adipisci doloribus perspiciatis, minima
                        reiciendis. Sit aperiam temporibus repudiandae provident.</p>
                </div>
            </div>
            <!--wraper-mosaico-->
            <div class="wraper_mosaico" data-anime="right">
                <div class="item_1" style="background-image: url('img/mosaico2.jpg');"></div>
                <div class="item_2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, pariatur quia qui dolores
                        sint commodi inventore dolore quas, facere nostrum adipisci doloribus perspiciatis, minima
                        reiciendis. Sit aperiam temporibus repudiandae provident.</p>
                </div>
            </div>
            <!--wraper-mosaico-->
        </div>
        <!--center-->
    </section>
    <!--mosaico-->

    <!-- 
        Mensagem de suscesso caso o e-mail seja enviado com sucesso e inserido no banco de dados
    -->
    <div class="sucesso">
        <p>Enviado com sucesso</p>
    </div>

    <footer >
        <div class="center">
            <img src="img/logo1.png" alt="Construções inteligentes">
        </div>
    </footer>
    <script src="js/animate.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/formulario.js"></script>
</body>

</html>
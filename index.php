<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gustavo - Desafio Linx (Email)</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="..\src\style.css">
        <script type="text/javascript" async src="..\src\products.js"></script>
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <p class="head-text-1">uma seleção de produtos</p>
            <p class="head-text-2">especial para você</p>
            <p class="head-text-3">Todos os produtos desta lista foram selecionados a partir da sua navegação. Aproveite!</p>
    
            <nav class="head-nav">
                <div class="nav-flex">
                    <a href="https://www.linx.com.br/quem-somos/"><p>Conheça a Linx</p></a>
                    <a href="#anchor-help"><p>Ajude o algorítimo</p></a>
                    <a href="#anchor-items"><p>Seus produtos</p></a>
                    <a href="#anchor-title"><p>Compartilhe</p></a>
                </div>
            </nav>
        </header>
        <!-- Middle -->
        <section>
            <div class="help-content" id="anchor-help">
                <form class="form-help" action="#" method="post" onsubmit="">
                    <div class="form-fields">
                        <div class="input-group">
                            <p class="text-help">Ajude o algorítimo a ser mais certeiro</p>
                            <p class="text-long-help">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Pellentesque ultricies tellus nec mi porta convallis sollicitudin eu urna. 
                                Mauris rhoncus erat sed interdum dignissim. Suspendisse semper pretium consectetur. 
                                Praesent bibendum arcu risus, sit amet iaculis ex tempus quis. 
                                Cras et erat ut tellus vulputate tincidunt. 
                                Aenean lacinia euismod augue vel egestas. 
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
                                Vestibulum vel urna tortor. Vivamus et arcu non felis tristique eleifend. 
                            </p>
                            <p class="text-long-help">
                                Morbi eu condimentum urna. 
                                Curabitur eu magna eget turpis condimentum ultrices. Suspendisse quis lorem ultricies, pulvinar purus sed, egestas erat. 
                                Etiam ultricies a ante vehicula pharetra. Quisque ut neque mattis, consequat velit ut, ultrices orci. 
                                Nulla varius elementum erat vel pharetra. Aenean sit amet nisi diam. 
                                Morbi viverra, magna ac luctus commodo, odio ante suscipit libero, at mattis augue est vel metus.
                            </p>
                        </div>
                        <div class="input-group">
                            <label for="nome">Seu Nome:</label>
                            <input type="text" name="nome" id="nome" required minlength="3">

                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" required>
                            
                            <label for="cpf">CPF:</label>
                            <input type="text" maxlength="14" name="cpf" id="cpf" onkeyup="maskCpf(this);" required>
                            
                            <group class="inline-radio">
                                <input type="radio" id="one" name="first_item" value="1" required/>
                                <label for="masculino">Masculino</label>

                                <input type="radio" id="two" name="first_item" value="2" />
                                <label for="feminino">Feminino</label>
                            </group>

                            <button class="submit-btn btn help-btn" type="submit">Enviar</button>
                        </div>
                        <div class="input-group">
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <h2 class="selection-title" id="anchor-items">Sua seleção especial</h2>
            <div class="items" id="items">
            </div>
            <button id="btn-page" class="btn-items" onclick="carregaProdutos()">
                Ainda mais produtos aqui!
            </button>
    
        </section>
    
        <section>
            <h2 class="news-title">Compartilhe a novidade</h2>
            <div class="news-content" id="anchor-title">
                <p class="text-news">Quer que seus amigos também ganhem a lista personalizada deles? Preencha agora!</p>
                <form class="form-news" action="#" method="post" onsubmit="">
                    <div class="form-fields">
                        <div class="input-group">
                            <label for="nome">Nome do seu amigo:</label>
                            <input type="text" name="nome" id="nome" required minlength="3">
                        </div>
                        <div class="input-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                    </div>
    
                    <div class="form-submit">
                        <button class="submit-btn" type="submit">Enviar agora</button>
                    </div>
                </form>
            </div>
        </section>
    
        <footer class="footer">
            <div class="footerText">
                <p>Testando suas habilidades em HTML, CSS e JS.</p>
                <p>Linx Impulse</p>
                <p>2019</p>
            </div>
        </footer>
    </body>
</html>
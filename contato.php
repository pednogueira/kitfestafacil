<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Contato | Kit Festa Fácil</title>
        <link rel="shortcut icon" href="images/icon.png">
        <meta charset="utf-8">

        <?php include_once 'template/head.php'; ?>

        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">

        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>  
        <script type="text/javascript" src="js/Forum_400.font.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script> 

        <!--jquery-->
        <script type='text/javascript' src="js/jquery1-8-2.min.js"></script>
        <script type='text/javascript' src="js/jquery.mask.min.js"></script>
        <script type='text/javascript' src="js/scripts.js"></script>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="bootstrap/js/bootstrap.js"/>
        <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js"/>
        <link rel="stylesheet" href="bootstrap/js/npm.js"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <!--[if lt IE 9]>
                <script type="text/javascript" src="js/html5.js"></script>
                <style type="text/css">
                        .slider_bg {behavior:url(js/PIE.htc)}
                </style>
        <![endif]-->
        <!--[if lt IE 7]>
                <div style='clear:both;text-align:center;position:relative'>
                        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
                </div>
        <![endif]-->
    </head>
    <body id="page5" onselectstart="return false">
        <div class="body6">
            <div class="body1">
                <div class="main">
                    <!-- header -->
                    <header>
                        <h1><a href="index.html" id="logo">Kit Festa Fácil</a></h1>
                        <nav>
                            <ul id="top_nav">
                                <li><a href="index.php"><img src="images/icon_1.gif" alt=""></a></li>
                                <li><a href="#"><img src="images/icon_2.gif" alt=""></a></li>
                                <li class="end"><a href="contato.php"><img src="images/icon_3.gif" alt=""></a></li>
                            </ul>
                        </nav>
                        <nav>
                            <ul id="menu">
                                <li class="active"><a href="contato.php">Contato</a></li>
                                <li><a href="kits.php">Nossos Kits</a></li>
                                <li><a href="bolos.php">Nossos Bolos</a></li>
                                <li><a href="index.php">Home</a></li>
                            </ul>
                        </nav>
                    </header><div class="ic"></div>
                    <!-- / header -->
                    <!-- content -->
                    <article id="content">
                        <div class="wrap">
                            <div class="box">
                                <div>
                                    <h2 class="letter_spacing">Faça já <span>seu pedido</span></h2><br/>
                                    <form id="ContactForm form" action="enviarpedido.php" method="post">
                                        <div class="col-xs-6">
                                            <label></label>
                                            <input class="form-control" type="text" name="nome" required="required" placeholder="Nome" pattern="[A-Z a-z\s àèìòùâêîôûäëïöüáéíóúãõÀÈÌÒÙÂÊÎÔÛÄËÏÖÜÁÉÍÓÚÃÕç]+$">
                                        </div>
                                        <div class="col-xs-6">
                                            <label></label>
                                            <input class="form-control" type="text" name="email" required="required" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                        </div>
                                        <div class="col-xs-3">
                                            <label></label>
                                            <input class="form-control" type="text" name="tel" required="required" placeholder="Telefone" pattern="[0-9 ()-]+$" id="tel">
                                        </div>
                                        <div class="col-xs-3">
                                            <label></label>
                                            <input class="form-control" type="text" name="tel" required="required" placeholder="Celular" pattern="[0-9 ()-]+$" id="cel">
                                        </div>
                                        <div class="col-xs-6">
                                            <label></label>
                                            <input class="form-control" type="text" name="data" required="required" placeholder="Dia da Festa" id="data">
                                        </div>
                                        <div class="col-xs-6">
                                            <label></label>
                                            <input class="form-control" type="text" name="end" required="required" placeholder="Endereço">
                                        </div>
                                        <div class="col-xs-2">
                                            <label></label>
                                            <input class="form-control" type="text" name="numero" required="required" placeholder="Nº" pattern="[0-9]">
                                        </div>
                                        <div class="col-xs-4">
                                            <label></label>
                                            <input class="form-control" type="text" name="compl" required="required" placeholder="Complemento">
                                        </div>
                                        <div class="col-xs-3">
                                            <label></label>
                                            <select class="form-control" name="kit" required="required">
                                                <option value="">Escolha seu Kit Festa</option>
                                                <option value="Kit Parabéns - R$64,00">Kit Parabéns - R$64,00</option>
                                                <option value="Kit Saúde - R$110,00">Kit Saúde - R$110,00</option>
                                                <option value="Kit Amor - R$195,00">Kit Amor - R$195,00</option>
                                                <option value="Kit Alegria - R$285,00">Kit Alegria - R$285,00</option>
                                                <option value="Kit Família - R$440,00">Kit Família - R$440,00</option>
                                                <option value="Kit Galera - R$870,00">Kit Galera - R$870,00</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-3">
                                            <label></label>
                                            <select class="form-control" name="bolo" required="required">
                                                <option value="">Escolha o bolo</option>
                                                <option value="Bolo de Mousse de Limão">Bolo de Mousse de Limão</option>
                                                <option value="Bolo de Morango com Chantilly">Bolo de Morango com Chantilly</option>
                                                <option value="Bolo de Prestígio">Bolo de Prestígio</option>
                                                <option value="Bolo de Mousse de Maracuja">Bolo de Mousse de Maracujá</option>
                                                <option value="Bolo de Doce de Leite">Bolo de Doce de Leite</option>
                                            </select>
                                        </div>

                                        <div class="col-xs-6">
                                            <label></label>
                                            <input class="form-control" type="text" name="obs" required="required" placeholder="Observações">
                                        </div>

                                        <div class=" right col-xs-4">
                                            <label></label>
                                            <input type="submit" value="Fazer Pedido" class="btn">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="body2">
            <div class="main">
                <?php include_once './template/article2.php'; ?>
                <!-- / content -->
            </div>
        </div>
        <div class="body3">
            <div class="body4">
                <div class="main">
                    <!-- footer -->
                    <?php include_once 'template/footer.php'; ?>
                    <!-- / footer -->
                </div>
            </div>
        </div>
        <script type="text/javascript"> Cufon.now();</script>
    </body>
</html>
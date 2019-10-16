<?php require_once("header.php"); ?>

        <section id="banner">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="imagens/collab.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imagens/equality.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imagens/happiness.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section id="servicos">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="mb-5">Serviços</h2>
                    </div>
                </div>
                <div class="row">
                    <?php listarSevicos(); ?>
                </div>
            </div>
        </section>
        <section id="sobre">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="imagens/Brave Love-logo vertical w slogan.png" class="img-fluid" alt="Logo">
                    </div>
                    <div class="col sobre-text"">
                        <h2>Sobre</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magnam eveniet temporibus illo repudiandae ab quia natus, consequatur vero at exercitationem dignissimos ad quod nam voluptatem sed autem adipisci ipsum?</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contato">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Entre em contato</h2>
                        <form>
                            <div class="form-group">
                                <label for="nomeUsuario">Nome</label>
                                <input type="text" class="form-control" id="nomeUsuario" placeholder="Pablo Vittar">
                            </div>
                            <div class="form-group">
                                <label for="emailUsuario">E-mail</label>
                                <input type="text" class="form-control" id="emailUsuario" placeholder="pablo@vittar.com">
                            </div>
                            <div class="form-group">
                                <label for="mensagemUsuario">Mensagem</label>
                                <textarea name="mensagemUsuario" id="mensagemUsuario" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.0513669380357!2d-46.67744548432649!3d-23.602490668999035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1569681982037!5m2!1spt-BR!2sbr" 
                        width="100%" height="550" frameborder="0" style="border:1;"></iframe>
                    </div>
                </div>
            </div>
        </section>
<?php require_once("footer.php"); ?>
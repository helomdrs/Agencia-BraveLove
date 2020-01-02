<?php 
    include ('header.php');

    if(isset($_SESSION['logado']) && !isset($_GET['logout'])) {
        header('Location: admin.php');
    } else if (isset($_GET['logout'])){
        header('Location: index.php');
    }
?>

<main>
    <div class="container">
        <div class="row">
            <img src="imagens/collab.jpg" class="img-fluid">
        </div>
        <div class="col">
            <h1 class="mt-5">Login</h1>
            <form method="POST">
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="some@example.com" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="manterConectado"> Manter conectado
                    </label>
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-primary" name="login">Entrar</button>
                </div>
                <?php
                    if(isset($erro)){
                        echo "<div class='alert alert-warning'> $erro </div>";
                    }
                ?>
            </form>
        </div>
    </div>
</main>
<?php include('footer.php'); ?>
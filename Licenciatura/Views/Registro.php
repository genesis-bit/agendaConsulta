

<!doctype html>
<html lang='pt'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale-1">
        <title>Registro</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/boxicons.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
<body>

  <div class="Container">
    <div class="box form-box">
 
    <Header>Registrar</Header>
    <form action="" method="">

        <div class="field input">
    <label for="username">Nome-Completo</label>
    <input type="text" name="nome" id="nome"  autocomplete="off" required>
        </div>

        <div class="field input">
    <label for="username">Email</label>
    <input type="text" name="email" id="email" autocomplete="off" required>
        </div>

        <div class="field input">
    <label for="username">Telefone</label>
    <input type="number" name="telefone" id="telefone" autocomplete="off" required>
        </div>

        <div class="field input">
    <label for="username">Senha</label>
    <input type="password" name="password" id="password" autocomplete="off" required>
        </div>

        <div class="field">
    <input type="Submit" class="btn bg-primary" name="submit" value="Registrar" required>
    
        </div>

        <div class="link">
       tem uma conta? <a href="Login.php">Login</a>
        </div>
    </form>
    </div>


  </div>




<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery.min.js"></script>
<!-- end script -->
    </body>
    </html>
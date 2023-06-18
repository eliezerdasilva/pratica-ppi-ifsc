<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Document</title>
</head>
<body>`
<div class="ripple-background">
        <div class="circle xxlarge shade1"></div>
        <div class="circle xlarge shade2"></div>
        <div class="circle large shade3"></div>
        <div class="circle medium shade4"></div>
        <div class="circle small shade5"></div>
      </div>
<?php
    include_once "db.php";

            $id = $_GET['id'];

        // Chame a função para obter os dados do usuário por ID
        $usuario = recuperaUsuario($id);
        var_dump($usuario);
        // Verifique se o usuário foi encontrado
        if ($usuario) {
            // Atribua os valores dos campos de input às variáveis ​​correspondentes
            $id = $usuario['id'];
            $nome = $usuario['nome'];
            $email = $usuario['email'];
            $senha = $usuario['senha'];
            $data = $usuario['data_Nascimento'];
            $dataFormatada = date_create_from_format('Y-m-d', $data)->format('d/m/Y');
            $tele = $usuario['telefone'];
        } else {
            // Usuário não encontrado, faça o tratamento adequado
            // ...
        }
    ?>

    <div class='box'> 
    <span class='text-center'>Alterar Cadastro</span>

        <form action='update.php' method='POST' class="form"> 
            <input type="hidden" name="id" value="<?php echo $id; ?>">
           
            <div class="campos um">
                <div class='input-container'>
                    <input type='text' name='nome' value='<?php echo $nome; ?>' required=""/>
                    <label>Nome</label>		
                </div>

                <div class='input-container'>
                    <input type='text' name='email' value='<?php echo $email; ?>' required=""/>
                    <label>Email</label>		
                </div>

                <div class="input-container">
                    <input type="text" name="telefone" value='<?php echo $tele; ?>al'required="" />
                    <label>Telefone</label>
                </div>
            </div>
            

            <div class="campo dois">
                <div class="input-container">
                        <input type="text" name="dataNas" id="dataNas" autocomplete="off" value='<?php echo $dataFormatada; ?>' required="" />
                        <label>Data de Nascimento</label>
                </div>

                <div class='input-container'>
                    <input type='text' name='senha' value='<?php echo $senha; ?>' required=""/>
                    <label>Senha</label>
                </div>

                <input type='submit' value='Confirmar' class='btn'>
            </div>
            
        </form>
    </div>

    
</body>
</html>

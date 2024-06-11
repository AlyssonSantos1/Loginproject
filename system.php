<?php
    include_once('configuracao.php');
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true)  and  (!isset($_SESSION['senha']) == true))
    {
        
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        header('Location: login.php');

    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conexao->query($sql);

    print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SYSTEMS | Sys</title>
    <style>
        body{
            background: linear-gradient(90deg, rgba(187,187,187,0.11808473389355745) 0%, rgba(21,232,241,0.9164040616246498) 89%, rgba(34,206,213,0.9416141456582633) 100%);
            color: blueviolet
        }
    </style>
    <div class="d-flex">
        <a href="logout.php" class="btn btn-danger" mx-0 >Exit</a>

    </div>
    
</head>
    <?php
        echo "<h1> Welcome <u>$logado</u> </h1>";
    ?>
    <div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Nome | Name</th>
            <th scope="col">Email </th>
            <th scope="col">Telefone | Phone</th>
            <th scope="col">Sexo | Gender</th>
            <th scope="col">Idade | Age</th>
            <th scope="col">Senha | Password</th>

        </tr>
    </thead>
    <tbody>
        <?php
        while($user_data = mysqli_fetch_assoc($result));
        

            echo "<tr>";
            echo "<td>". $user_data['nome']."</td>";
            echo "<td>". $user_data['email']."</td>";
            echo "<td>". $user_data['telefone']."</td>";
            echo "<td>". $user_data['sexo']."</td>";
            echo "<td>". $user_data['idade']."</td>";
            echo "<td>". $user_data['senha']."</td>";
            
            echo "<td>"

        ?>
        
    </tbody>
    </table>
    </div>
<body>
    <h1>Authorized Acess System</h1>
</body>
</html>
<?php 
    require_once "./components/form.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artigos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="main-form">
        <form action="" class="form">
            <h1>Dados Pessoais</h1>
            <?= input(false,"nome","Nome Completo:","text") ?>
            <?= input(false,"email","E-mail:","email") ?>
            <?= input(false,"cpf","CPF:","text") ?>
            <?= input(false,"telefone","Telefone:","text") ?>
            <h1>Informações da Reserva</h1>
            <?= select("","","","") ?>
            <?= input(false,"check-in","Data de Check-in:","date") ?>
            <?= input(false,"check-out","Date de Check-out:","date") ?>
            <?= input(false,"hospedes","Número de Hóspedes:","number") ?>
            <?= input(true,"observacao","Observações:","") ?>
            <button>Confirmar Reserva</button>
        </form>
    </main>
</body>
</html>
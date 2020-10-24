<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Polimorfismo</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        form {
            border: 1px solid #ccc;
            width: 400px;
            border-radius: 8px;
            padding: 20px;
        }

        form input {
            width: 100%;
            padding: 5px 5px;
        }
    </style>
</head>

<body>
    <form action="exibeFunc.php" method="POST">
        <p>Nome</p>
        <input type="text" name="nome" placeholder="Digite seu nome" />

        <p>Salário</p>
        <input type="number" name="salario" placeholder="Digite seu salário" />

        <p>Observações</p>
        <input type="text" name="obs" placeholder="Insira a sua observação" />

        <p>Qual o tipo de funcionário?</p>
        <select name="tipo_funcionario">
            <option value="0" selected disabled>Selecione</option>
            <option value="1">Gerente</option>
            <option value="2">Programador</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>
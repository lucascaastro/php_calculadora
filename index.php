<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
</head>

<body>
  <form action="calculadora.php" method="POST">
    <input type="number" name="num1" placeholder="Número 1">
    <input type="number" name="num2" placeholder="Número 2">

    <select name="tipo" id="tipo">
      <option selected>Selecione uma operação:</option>
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="x">x</option>
      <option value="/">/</option>
    </select>
    <button type="submit">Calcular</button>

  </form>

</body>

</html>
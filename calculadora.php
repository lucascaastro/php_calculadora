<?php
  $numero1 = $_POST['num1'];
  $numero2 = $_POST['num2'];
  $tipo = $_POST['tipo'];

    if($tipo == '+'){
      $resultado = $numero1 + $numero2;
      echo "<h1> Resultado de sua soma foi: " . $resultado . "</h1>";
    }else if ($tipo == '-'){
      $resultado = $numero1 - $numero2;
      echo "<h1>Resultado de sua subtração foi: " . $resultado . "</h1>";
    }else if ($tipo == 'x'){
      $resultado = $numero1 * $numero2;
      echo "<h1>Resultado de sua multiplicação foi: " . $resultado . "</h1>";
    }else if ($tipo == '/'){
      $resultado = $numero1 / $numero2;
      echo "<h1>Resultado de sua divisão foi: " . $resultado . "</h1>";
    }
    else{
      echo  "<script>alert('Operação invalida, selecione: + , - , x ou /'); </script>";
    }
?>
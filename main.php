
<?php
    function hoosonbish ($field) {
      if($field != "") {
        return true;
      }
      return false;
    }
    function calculate($nom1, $nom2, $uildel) {
      switch ($uildel) {
        case "+":
          return $nom1 + $nom2;
          break;
        case "-":
          return $nom1 - $nom2;
          break;
        case "*":
          return $nom1 * $nom2;
          break;
        case "/":
          return $nom1 / $nom2;
          break;
      default:
      echo 'ene aldaa';
      }
    }
    $hariu = calculate($_POST["nomer1"], $_POST["nomer2"], $_POST["uildel"]);
      echo "<h1>$hariu</h1>";
?>
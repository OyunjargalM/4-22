
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>
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
    }
  }
  $hariu = calculate($_POST["nomer1"], $_POST["nomer2"], $_POST["uildel"]);
    echo "<h1>$hariu</h1>";
     ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
              <form action="suuliinh.php" method="POST">
                    <h2>CALCULATOR</h2>
                    <input name="nomer1" type="number" placeholder="number1" Required>
                    <input name="nomer2" type="number" placeholder="number2" Required>
                    <select name="uildel" class="form-select" aria-label="uildel" Required>
                      <option  selected></option>
                      <option value="+">+</option>
                      <option value="-">-</option>
                      <option value="*">*</option>
                      <option value="/">/</option>
                    </select>
                    <button type="submit">Calculate</button>
              </form>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
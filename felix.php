 <?PHP
      if (isset($_POST['verifica'])) {
        $number = $_POST['number'];
        if ($number % 2 == 0 ) {
          echo "Numarul este par";
        }
        if($number % 2 == 1 ) {
          echo "Numarul este impar";
        }
        if ($number == "") {
          echo "Tasteaza numar";
        }
      }
    ?>

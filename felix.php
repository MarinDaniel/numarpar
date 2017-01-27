 <?PHP
      if (isset($_POST['verifica'])) {
        $number = $_POST['number'];
        if ($number % 2 == 0 ) {
          echo "Numarul este par";
        }
        elseif($number = "") {
         echo "Tasteaza numar";
       }else {
          echo "Numarul este impar";
        }
      }
    ?>

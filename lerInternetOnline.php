<?php
$batFile = 'lerVelocidadeInternet.exe';


$chave = $_POST['dogio_id'];


if (file_exists($batFile)) {
    exec("start $batFile", $output, $return_var);

    if ($return_var === 0) {

        $max_attempts = 10; 
        $wait_time = 1; 

        for ($i = 0; $i < $max_attempts; $i++) {
            if (file_exists('finalFest.php')) {
				header("Location: enviar.php?chave=$chave");
                exit;
            } else {
                sleep($wait_time);
            }
        }
    } 
}

?>
<?php 
    session_start();

    // Quando pressionar o checkbox, terá o valor "verify_darkmode" no GET. Assim, sendo possível analisar se vai desatirar ou ativar o darkmode
    if (isset($_GET['verify_darkmode'])) {

        $checkbox = $_POST['checkbox'];
        if ($checkbox == 'on') {
            $_SESSION['darkmode'] = true;
        } else {
            unset($_SESSION['darkmode']);
        }
        header('Location: ?');
    }

    if (isset($_SESSION['darkmode'])) {
        $darkmode = true;
    } else {
        $darkmode = false;

    }
?>
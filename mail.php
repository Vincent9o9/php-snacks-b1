<!-- Passare come parametri GET name, mail ed age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$nome = $_GET['name'];
$mail = $_GET['mail'];
$eta = $_GET['age'];

// var_dump(empty($nome));
// var_dump($mail);
// var_dump($eta);

if(empty($nome) || empty($mail) || empty($eta)){
    $text = 'errore compilare i campi vuoti';
} else if(strlen($nome) <= 3 || strpos($mail, '.') == false || strpos($mail, '@') == false || !is_numeric($eta)){
    $text = 'accesso negato';
} else {
    $text = 'accedi';
}
echo $text;
?>

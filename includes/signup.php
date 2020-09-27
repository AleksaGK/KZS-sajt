<?php

include 'db.php';

$ime = $_POST['name'];
$mejl = $_POST['email'];
$poruka = $_POST['message'];


$sql = "
INSERT INTO korisnici(Ime, Email, Poruka)
VALUES (?,?,?);
";


$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, 'sss', $ime,$mejl,$poruka);

mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);


$ime = null;
$mejl = null;
$poruka = null;



$message = '';
$error = '';


if(file_exists('../data.json')){
    $current_data = file_get_contents('../data.json');
    $array_data = json_decode($current_data, true);
    $extra = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'message' => $_POST['message']
    );
    $array_data[] = $extra;
    $final_data = json_encode($array_data);
    if(file_put_contents('../data.json',$final_data)){
        $message = "<p>File Appended Successfully</p>";
    }
}else{
    $error = 'JSON File not exists';
}
header("Location: ../index.php?form=sent");


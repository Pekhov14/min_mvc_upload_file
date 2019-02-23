<?php

// Model

//var_dump($_FILES['image']); //массив image имя name inputa

function upload_image ($image) {
    $name     = $image['name']; //$_FILES['image']
    $tmp_name = $image['tmp_name'];

    $name = 'image.jpg'; // Влом было делать генирацию нового имени


    // Переместить загруженную картинку/файл [где лежит, куда сохранить]
    move_uploaded_file($tmp_name, "uploads/" . $name);
}
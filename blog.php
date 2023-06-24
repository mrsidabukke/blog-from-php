<?php

function tampilkan(){
    global $link;

    $query = "SELECT * FROM blog";
    $result = mysqli_query($link,$query) or die('gagal menampilkan data');

    return $result;
}


function tampilkan_per_id($id){
    global $link;

    $query = "SELECT * FROM blog WHERE id=$id";
    $result = mysqli_query($link, $query) or die ('gagal menampilkan data');

    return $result;
}

// function tampilkan_per_id($id){
//     global $link;

//     $id = mysqli_real_escape_string($link, $id); // Melakukan sanitasi terhadap variabel $id

//     $query = "SELECT * FROM blog WHERE id=$id";
//     $result = mysqli_query($link, $query) or die ('gagal menampilkan data');

//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result); // Mengambil data hasil query dalam bentuk array
//         return $row;
//     } else {
//         return null;
//     }
// }


function tambah_data($judul, $konten, $tag){
    $query = "INSERT INTO blog (judul, isi, tag) VALUES ('$judul', '$konten', '$tag')";
    
    return run($query);
}
function edit_data($judul, $konten, $tag, $id){
    $query = "UPDATE blog SET judul = '$judul', isi = '$konten', tag = '$tag' WHERE id = $id";
    
    return run($query);
}


function run($query){
    global $link;

    if(mysqli_query($link, $query)) return true;
    else return false;
}

function excerpt($string){
    $string = substr($string, 0, 50);
    return $string . "...";
}
?>
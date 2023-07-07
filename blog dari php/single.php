<?php

require_once "view/header.php";
require_once "core/init.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $article = tampilkan_per_id($id);
    while($row = mysqli_fetch_assoc($article)){
        $judul_awal = $row['judul'];
        $konten_awal = $row['isi'];
        $tag_awal = $row['tag'];
    }
}

?>

<P id="judul_single"> <?=$judul_awal; ?> </P>

<p id="isi_single"> <?=$konten_awal; ?> </p>

<p id="tag_single"> <?=$tag_awal; ?> </p>

<?php require_once "view/footer.php"; ?>
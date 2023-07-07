<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php
require_once "view/header.php";
require_once "core/init.php";

$error = '';
$id    = $_GET['id'];

if(isset($_GET['id'])){
 $article = tampilkan_per_id($id);   
 while($row = mysqli_fetch_assoc($article)){
     $judul_awal = $row['judul'];
     $konten_awal = $row['isi'];
     $tag_awal = $row['tag'];

 }
}   

if(isset($_POST['submit'])){

    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $tag = $_POST['tag'];

    if(!empty(trim($judul)) && !empty(trim($konten)) && !empty(trim($tag))){

        if(tambah_data($judul, $konten, $tag)){
            header('Location: index.php');
        }else{
            $error = 'ada masalah saat menambah data';
        }
 
    }else{
        $error = 'judul, konten, dan tag wajib diisilah . bujang';
    }

}


?>

<form action="" method="post">
    <label for="judul"> Judul </label> <br>
    <input type="text" name="judul" value="<?=$judul_awal; ?>" > <br>

    <label for="konten"> isi </label> <br>
    <textarea name="konten"  cols="30" rows="10"><?=$konten_awal; ?></textarea> <br>

    <label for="tag"> tag </label> <br>
    <input type="text" name="tag" value="<?=$tag_awal; ?>"> <br>

    <div id="error"> <?=$error ?> </div>

    <input type="submit" name="submit" value="submit">

    </form>

<?php
require_once "view/footer.php";
?>

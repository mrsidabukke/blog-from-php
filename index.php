<?php
require_once "view/header.php";
require_once "core/init.php";

$articles = tampilkan();


?>

<?php while($row = mysqli_fetch_assoc($articles)): ?>

<div class="each_article">
   <h3> <?php echo $row ['judul'] ?> </h3>
   <p> 

   <?= $row['isi']; ?>

   </p>

   <p class="waktu"> <?= $row['waktu']; ?></p>
   <p class="tag"> tag: <?= $row["tag"]; ?> </p>
   <a href="edit.php?id=<? $row['id']; ?>"> edit </a>
</div>

<?php endwhile; ?>


<?php
require_once "view/footer.php";
?>

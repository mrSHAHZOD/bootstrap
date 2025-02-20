<?php
$title = 'Post';
require 'includs/header.php';

require 'database.php';

$id = $_GET['post_id'];
$statement = $pdo->prepare("SELECT * FROM posts where id = ?");
$statement->execute([$id]);
$post = $statement->fetch();

?>

<div class="container mt-5" >
  <h4><?= $post['id'] ?> </h4>
<h1><?= $post['title'] ?> </h1>
    <p class="fs-5 col-md-8"><?php echo $post['body'] ?></p>
    
    <p><?= $post['created_at'] ?></p>
    <hr class="col-3 col-md-2 mb-5">

</div>


<?php require 'includs/footer.php';  ?>
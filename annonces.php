<?php
    require_once 'model.php';

    if( isUser( $_POST['login'], $_POST['password'] ) ) {
        $login = $_POST['login'];
        $annonces = getAllAnnonces();
    }

    // inclut le code de la présentation HTML
    require 'view/annonces.php';
?>


<!DOCTYPE html>
<html lang="fr">
 <head>
  <title>Exemple Blog Basic PHP</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 </head>
 <body>
    <p> Hello <?php echo $_POST['login']; ?> </p>
    <h1>List of Posts</h1>
    <ul>
        <?php while ($row = mysqli_fetch_assoc($resultall)): ?>
        <li>
            <a href="post.php?id=<?php echo $row['id']; ?>">
            <?php echo $row['title']; ?>
            </a>
        </li>
        <?php endwhile ?>
    </ul>

 </body>
</html>

<?php
    mysqli_close( $link );
?>

<!DOCTYPE html>
<html>
<head><title>Flowers</title></head>
<body>
<h1>Details for: <?php echo $flower->nume;?></h1>

<h3>Culoare: <?php echo $flower->culoare;?></h3>
<h3>Marime: <?php echo $flower->marime;?></h3>
<h3>Pret: <?php echo $flower->pret;?></h3>

<?php echo link_to("/", 'Back')."<br/><br/>";?>

</body>
</html>

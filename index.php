<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php

    require_once __DIR__ . '/vendor/autoload.php';

    use Nfq\Akademija\Not_Typed;
    use Nfq\Akademija\Soft;
    use Nfq\Akademija\Strict;

     ?>

<?php
echo 'calculateHomeWorkSum: ';
echo calculateHomeWorkSum(3, 2.2, '1') ;
?>
<br>
<?php
echo 'Nfq\Akademija\Not_Typed\calculateHomeWorkSum: ';
echo Not_Typed\calculateHomeWorkSum(3, 2.2, '1');
?>
<br>
<?php echo 'Nfq\Akademija\Soft\calculateHomeWorkSum: ';
echo Soft\calculateHomeWorkSum(3, 2.2, '1');
?>
<br>
<?php echo 'Nfq\Akademija\Strict\calculateHomeWorkSum: ';
echo Strict\calculateHomeWorkSum(3, 2.2, '1');
?>




  </body>
</html>

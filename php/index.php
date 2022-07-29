
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>lista</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    
   $result_bancodnit = 'SELECT * FROM dnit';
   while($row_dado = mysqli_fetch_assoc($resultado_bancodnit)){
       echo $row_dado['microrregião'];   
       echo $row_dado['br'];
       echo $row_dado['tipo'];
       echo $row_dado['código'];
       echo $row_dado['relevo'];
       echo $row_dado['vmda'];
       echo $row_dado['vmdc'];
       echo $row_dado['nota'];
       echo $row_dado['porto'];
       echo $row_dado['no'];
       echo $row_dado['intervenção'];

    }
    ?>
    
</body>
</html>

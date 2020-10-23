<html>
<head>
     <title>CONVERSOR</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <h2>Conversor de monedas.</h2>

        <h3>Tipo de moneda del monto de origen: </h3> 
        <input selected = "true" type="Radio" name="moneda1" value="cordoba"/>Córdoba
        <input type="Radio" name="moneda1" value="dolar"/>Dólar
        <input type="Radio" name="moneda1" value="pesetas"/>Pesetas
        <input type="Radio" name="moneda1" value="euros"/>Euros


        <h3>Tipo de moneda a convertir: </h3> 
        <input type="Radio" name="moneda2" value="cordoba"/>Córdoba
        <input type="Radio" name="moneda2" value="dolar"/>Dólar
        <input type="Radio" name="moneda2" value="pesetas"/>Pesetas
        <input type="Radio" name="moneda2" value="euros"/>Euros
        <br><br><br>

        Monto de origen: 
        <input type="text" name="monto1" size="10" required/>
        <br><br>
        Monto convertido: 
      
        <?php  

function convertidorE_P()
{
    
    if (isset($_POST["moneda2"]) && isset($_POST["moneda1"])) 
    {
    $seleccionado2 = $_POST['moneda2'];
    $seleccionado1 = $_POST['moneda1'];
       
    if ($seleccionado2 == "dolar" && $seleccionado1 == 'cordoba') 
    {
        echo "";
        $num1= $_POST['monto1'];
        $dolar = $num1*34.6874;
        echo $dolar;
       } 
       else if ($seleccionado2 == "cordoba" && $seleccionado1 == 'dolar')
       {
        echo "";
        $num1= $_POST['monto1'];
        $cor = $num1/34.6874;
        echo $cor;
       }
       else
       {
           echo "";
       }
    }


    if (isset($_POST["moneda2"]) && isset($_POST["moneda1"])) 
    {
    $seleccionado2 = $_POST['moneda2'];
    $seleccionado1 = $_POST['moneda1'];
       
    if ($seleccionado2 == "dolar" && $seleccionado1 == 'pesetas') 
    {
        echo "";
        $num1= $_POST['monto1'];
        $dolar = $num1/10.68;
        echo $dolar;
       } 
       else if ($seleccionado2 == "pesetas" && $seleccionado1 == 'dolar')
       {
        echo "";
        $num1= $_POST['monto1'];
        $pes = $num1*10.68;
        echo $pes;
       }
       else
       {
           echo "";
       }
    }


    if (isset($_POST["moneda2"]) && isset($_POST["moneda1"])) 
    {
    $seleccionado2 = $_POST['moneda2'];
    $seleccionado1 = $_POST['moneda1'];
       
    if ($seleccionado2 == "dolar" && $seleccionado1 == 'euros') 
    {
        echo "";
        $num1= $_POST['monto1'];
        $dolar = $num1*1325;
        echo $dolar;
       } 
       else if ($seleccionado2 == "euros" && $seleccionado1 == 'dolar')
       {
        echo "";
        $num1= $_POST['monto1'];
        $eu = $num1/1325;
        echo $eu;
       }
       else
       {
           echo "";
       }
    }
    
    if ($seleccionado2 == "cordoba" && $seleccionado1 == 'pesetas') 
    {
        echo "";
        $num1= $_POST['monto1'];
        $cord = $num1*248;
        echo $cord;
       } 
       else if ($seleccionado2 == "pesetas" && $seleccionado1 == 'cordoba')
       {
        echo "";
        $num1= $_POST['monto1'];
        $pest = $num1/248;
        echo $pest;
       }
       else
       {
           echo "";
       }


       if ($seleccionado2 == "cordoba" && $seleccionado1 == 'euros') 
    {
        echo "";
        $num1= $_POST['monto1'];
        $cordo = $num1*41.25;
        echo $cordo;
       } 
       else if ($seleccionado2 == "euros" && $seleccionado1 == 'cordoba')
       {
        echo "";
        $num1= $_POST['monto1'];
        $euro = $num1/41.25;
        echo $euro;
       }
       else
       {
           echo "";
       }

       if ($seleccionado2 == "pesetas" && $seleccionado1 == 'euros') 
    {
        echo "";
        $num1= $_POST['monto1'];
        $pese = $num1*166.386;
        echo $pese;
       } 
       else if ($seleccionado2 == "euros" && $seleccionado1 == 'pesetas')
       {
        echo "";
        $num1= $_POST['monto1'];
        $eur = $num1/166.386;
        echo $eur;
       }
       else
       {
           echo "";
       }


}

?>

    <input type="text" name="monto2" size="10" readonly="readonly" value = "<?php 
    echo convertidorE_P();
     ?>" />
    <br><br>

        <input type = "submit" value ="convertir">
           
        <div>
          
    </form>
    <br>
    
</body>

</html>
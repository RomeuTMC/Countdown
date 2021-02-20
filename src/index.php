<?php
if(isset($_GET['time'])){
    $time=$_GET['time'];
} else {
    $time=date('Y-m-d').'T23:59:59';
}
if(isset($_GET['width'])){
    $width=$_GET['width'];
} else {
    $width=500;
}
if(isset($_GET['height'])){
    $height=$_GET['height'];
} else {
    $height=150;
}
if(isset($_GET['boxc'])){
    $boxc=$_GET['boxc'];
} else {
    $boxc="#000000";
}
if(isset($_GET['fontc'])){
    $fontc=$_GET['fontc'];
} else {
    $fontc="#FFFFFF";
}
if(isset($_GET['fonts'])){
    $fonts=$_GET['fonts'];
} else {
    $fonts="60";
}
if(isset($_GET['xoff'])){
    $xoff=$_GET['xoff'];
} else {
    $xoff="1";
}
if(isset($_GET['loff'])){
    $loff=$_GET['loff'];
} else {
    $loff="70";
}
if(isset($_GET['doff'])){
    $doff=$_GET['doff'];
} else {
    $doff="1";
}
if(isset($_GET['hoff'])){
    $hoff=$_GET['hoff'];
} else {
    $hoff="1";
}
if(isset($_GET['moff'])){
    $moff=$_GET['moff'];
} else {
    $moff="1";
}
if(isset($_GET['soff'])){
    $soff=$_GET['soff'];
} else {
    $soff="1";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1920, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Countdown - Configuração</title>
</head>
<body>
    <div class="container-fluid">
        <h1>Countdown</h1>
        <h2>Configurar</h2>
            <form action='index.php' method="GET">
                <div class="form-group">
                    <label>Horario Final:</label>
                    <input type="datetime-local" id="date-time" name="time" value="<?php echo $time; ?>" min="<?php date('Y-m-dTh:m:s');?>" max="<?php (date('Y')+1).'-'.date('m-d');?>T23:59:59">
                </div>
                <div class="form-group">
                    <label>Largura:</label>
                    <input type="number" id="width" name="width" value="<?php echo $width; ?>" min="100" max="1920" step="1">
                </div>
                <div class="form-group">
                    <label>Altura:</label>
                    <input type="number" id="height" name="height" value="<?php echo $height; ?>" min="100" max="1080" step="1">
                </div>
                <div class="form-group">
                    <label>Cor do Fundo:</label>
                    <input type="color" id="boxc" name="boxc" value="<?php echo $boxc; ?>">
                </div>
                <div class="form-group">
                    <label>Cor da Fonte:</label>
                    <input type="color" id="fontc" name="fontc" value="<?php echo $fontc; ?>">
                </div>
                <div class="form-group">
                    <label>Tamanho da Fonte:</label>
                    <input type="number" id="fonts" name="fonts" value="<?php echo $fonts; ?>" min='20' max='1000'>
                </div>
                <div class="form-group">
                    <label>OffSet Largura:</label>
                    <input type="number" id="xoff" name="xoff" value="<?php echo $xoff; ?>" min='0' max='1000'>
                </div>
                <div class="form-group">
                    <label>OffSet Altura:</label>
                    <input type="number" id="loff" name="loff" value="<?php echo $loff; ?>" min='0' max='1000'>
                </div>
                <div class="form-group">
                    <label>OffSet Legenda: (dia/hora/minuto/segundo)</label>
                    <input type="number" id="doff" name="doff" value="<?php echo $doff; ?>" min='0' max='10' step=0.1>
                    <input type="number" id="doff" name="hoff" value="<?php echo $hoff; ?>" min='0' max='10' step=0.1>
                    <input type="number" id="doff" name="moff" value="<?php echo $moff; ?>" min='0' max='10' step=0.1>
                    <input type="number" id="doff" name="soff" value="<?php echo $soff; ?>" min='0' max='10' step=0.1>
                </div>

            <button type=submit class='btn btn-primary'>PREVISUALIZAR</button>
            </form>
        <h2>Preview</h2>
            <?php
                $CTDOWN="countdown.php?time=$time".
                "&width=$width".
                "&height=$height".
                "&boxColor=".substr("$boxc", -6).
                "&font=BebasNeue&".
                "fontColor=".substr("$fontc", -6).
                "&fontSize=$fonts".
                "&xOffset=$xoff".
                "&yOffset=$loff".
                "&labelOffsets=$doff,$hoff,$moff,$soff";
            ?>
            <img src='<?php echo($CTDOWN); ?>'></br>
            </br>
            Use o código abaixo para usar este countdow em seus projetos.</br>
            <div class='w-100 border'><code>&lt;img src='<?php echo($CTDOWN); ?>'&gt;</code></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

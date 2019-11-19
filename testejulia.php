<?php
session_start();

if(isset($_SESSION['prim'])) {
    $_SESSION['pos']=$_SESSION['pos']+5;
    echo "proximos" . $_SESSION['pos'];
} else {
    $_SESSION['prim']='n';
    $_SESSION['pos']=5;
    echo "primeiro";
}

?>

<!doctype html>

<html>

<head>
    <meta charset="utf-8">
</head>

<script type='application/javascript'>

</script>

<body style='background-image:url(imagens/trilha.png);background-filter: alpha(opacity=70);opacity: 0.7;'>
    <div>
        <button id='btn1'> Mover Esquerda</button>
    </div>

    <h1> Teste</h1>
    <div>
        <img id='img1' src='imagens/edufisco.png' style="position:absolute; left:<?php echo $_SESSION['pos']; ?>%; top: 50%; width: 200px; height:200px;"> </div>

</body>
<script type='application/javascript'>
    btn = document.getElementById('btn1');
    btn.addEventListener('click', mover);
    imagem = document.getElementById('img1');

    function mover() {
        posimg = imagem.offsetLeft;
        posimg += 5;
        imagem.style.left = parseFloat(posimg) + 'px';
    }

</script>

<?php
        echo "<script type='application/javascript'> //mover(); </script>";
    ?>

</html>

<!doctype html>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        .container {
            border: 1px solid black;
            width: 95%;
            margin: auto;
            /*display: inline-block;*/
            position: relative;
        }

        .mov {
            position: absolute;
            top: 70%;
            /*ajustar a posição inicial*/
            left: 10%;
            /*ajustar a posição inicial */
            height: 10%;
            width: 10%;
        }

        .questoes {
            border: 1px solid black;
            width: 100%;
            margin: auto;
        }

    </style>
    <script>
        $(document).ready(function() {
            var h = window.innerHeight;

            //divisão da altura da tela entre questões e imagem
            var himg = Math.trunc(h * .66);
            var hquestoes = Math.trunc(h * .28);
            $(".container").height(himg + "px");
            $(".questoes").height(hquestoes + "px");

            $("#btnmoverleft").click(function() {
                var pos = $("#boneco").position();
                var imgtop = pos.left;
                //.10 tamanho do passo->ajustar
                var passo = (window.innerHeight * .66) * .10;
                imgtop += passo;
                $("#boneco").css("left", parseFloat(imgtop) + "px");

            });
            $("#btnmoverdir").click(function() {
                var pos = $("#boneco").position();
                var imgtop = pos.left;
                //.10 tamanho do passo->ajustar
                var passo = (window.innerHeight * .66) * .10;
                imgtop -= passo;
                $("#boneco").css("left", parseFloat(imgtop) + "px");

            });

            $("#btnmovertop").click(function() {
                var pos = $("#boneco").position();
                var imgtop = pos.top;
                //.10 tamanho do passo->ajustar
                var passo = (window.innerHeight * .66) * .14;
                imgtop -= passo;
                $("#boneco").css("top", parseFloat(imgtop) + "px");
            });
            $("#btnmoverbaixo").click(function() {
                var pos = $("#boneco").position();
                var imgtop = pos.top;
                //.10 tamanho do passo->ajustar
                var passo = (window.innerHeight * .66) * .14;
                imgtop += passo;
                $("#boneco").css("top", parseFloat(imgtop) + "px");
            });
        });

    </script>
</head>

<body>
    <div class="questoes">
        <p style="margin:0px;">Área das questões </p>
        <button id='btnmovertop'>Mover Acima</button>
        <button id='btnmoverbaixo'>Mover Abaixo</button>
        <button id='btnmoverleft'>Mover Direita</button>
        <button id='btnmoverdir'>Mover Esquerda</button>

    </div>

    <div class="container">
        <!--imagem do fundo -->
        <img src="imagens/trilha.png" style="width:96%;height:100%;z-index:-1;">
        <!--imagem do boneco -->
        <img id='boneco' class='mov' src='imagens/edufisco.png'>


    </div>

</body>

<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        .container {
            border: 1px solid black;
            width: 100%;
            display: inline-block;
            position: relative;
        }

        .mov {
            position: absolute;
            top: 25%;
            /*ajustar a posição inicial*/
            left: 40%;
            /*ajustar a posição inicial */
            height: 10%;
            width: 10%;
        }

        .questoes {
            border: 1px solid black;
            width: 100%;

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

            $("#btnmover").click(function() {
                var pos = $("#boneco").position();
                var imgtop = pos.top;
                //.10 tamanho do passo->ajustar
                var passo = (window.innerHeight * .66) * .10;
                imgtop += passo;
                $("#boneco").css("top", parseFloat(imgtop) + "px");

            });
        });

    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <div class="questoes">
                    <p style="margin:0px;">Área das questões </p>
                    <button id='btnmover'>Mover</button>

                </div>
            </div>
            <div class="col-sm-7">
                <div class="container">
                    <!--imagem do fundo -->
                    <img src="imagens/mimis.png" style="width:100%;height:100%;z-index:-1;">
                    <!--imagem do boneco -->
                    <img id='boneco' class='mov' src='imagens/android.png'>
                </div>
                --
            </div>
        </div>
    </div>

</body>

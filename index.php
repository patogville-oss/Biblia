<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biblia Online</title>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: Arial, sans-serif;
    }

    body{
        background:#f4f4f4;
        color:#333;
    }

    header{
        background:#5b3cc4;
        color:white;
        padding:20px;
        text-align:center;
        box-shadow:0 2px 10px rgba(0,0,0,0.2);
    }

    header h1{
        font-size:35px;
    }

    .container{
        width:90%;
        max-width:1000px;
        margin:30px auto;
    }

    .search-box{
        display:flex;
        gap:10px;
        margin-bottom:30px;
    }

    .search-box input{
        flex:1;
        padding:15px;
        border:none;
        border-radius:10px;
        font-size:16px;
    }

    .search-box button{
        padding:15px 25px;
        border:none;
        background:#5b3cc4;
        color:white;
        border-radius:10px;
        cursor:pointer;
        font-size:16px;
        transition:0.3s;
    }

    .search-box button:hover{
        background:#4425a8;
    }

    .verse-card{
        background:white;
        padding:25px;
        border-radius:15px;
        margin-bottom:20px;
        box-shadow:0 5px 15px rgba(0,0,0,0.1);
        transition:0.3s;
    }

    .verse-card:hover{
        transform:translateY(-3px);
    }

    .verse-title{
        color:#5b3cc4;
        margin-bottom:10px;
        font-size:20px;
        font-weight:bold;
    }

    .verse-text{
        font-size:18px;
        line-height:1.7;
    }

    footer{
        text-align:center;
        padding:20px;
        background:#222;
        color:white;
        margin-top:40px;
    }

    @media(max-width:600px){
        .search-box{
            flex-direction:column;
        }

        header h1{
            font-size:28px;
        }
    }
</style>
</head>

<body>

<header>
    <h1>📖 Biblia Online</h1>
    <p>Lee la palabra de Dios en cualquier momento</p>
</header>

<div class="container">

    <div class="search-box">
        <input type="text" id="searchInput" placeholder="Buscar versículo...">
        <button onclick="buscarVersiculo()">Buscar</button>
    </div>

    <div id="verses">

        <div class="verse-card">
            <div class="verse-title">Juan 3:16</div>
            <div class="verse-text">
                Porque de tal manera amó Dios al mundo, que ha dado a su Hijo unigénito,
                para que todo aquel que en él cree, no se pierda, mas tenga vida eterna.
            </div>
        </div>

        <div class="verse-card">
            <div class="verse-title">Salmos 23:1</div>
            <div class="verse-text">
                Jehová es mi pastor; nada me faltará.
            </div>
        </div>

        <div class="verse-card">
            <div class="verse-title">Filipenses 4:13</div>
            <div class="verse-text">
                Todo lo puedo en Cristo que me fortalece.
            </div>
        </div>

        <div class="verse-card">
            <div class="verse-title">Jeremías 29:11</div>
            <div class="verse-text">
                Porque yo sé los pensamientos que tengo acerca de vosotros, dice Jehová,
                pensamientos de paz, y no de mal, para daros el fin que esperáis.
            </div>
        </div>

    </div>

</div>

<footer>
    © 2026 Biblia Online - Creado con HTML, CSS y JavaScript
</footer>

<script>
function buscarVersiculo() {

    let input = document.getElementById("searchInput").value.toLowerCase();
    let cards = document.querySelectorAll(".verse-card");

    cards.forEach(card => {

        let text = card.innerText.toLowerCase();

        if(text.includes(input)){
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }

    });
}
</script>

</body>
</html>
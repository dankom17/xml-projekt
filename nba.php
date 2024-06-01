<?php
$players = json_decode(file_get_contents('najbolji.json'), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>NBA</title>
    <style>
        body {
            font-size: 30px;
        }
        h1 {
            text-align: center;
            color: #fff;
            background-color: blue;
            padding: 10px;
            border-radius: 1px;
        }
        h2 {
            text-align: center;
            background-color: #0e0101;
            padding: 10px;
            margin-bottom: 20px;
            color: white;
            background: linear-gradient(to right, #a8dd16, #3e627e);
        }
        p.prva {
            color: rgb(0, 0, 0);
            padding: 2px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 30px;
        }
        .container {
            display: flex;
            align-items: center;
        }
        .container img {
            margin-left: 5px;
        }
        .prva {
            margin-right: 15px;
        }
        h3 {
            text-align: center;
            background-color: #0e0101;
            padding: 10px;
            margin-bottom: 20px;
            color: white;
            background: linear-gradient(to bottom, #786da7, #011a33);
        }
        h4 {
            text-align: center;
            background-color: #0e0101;
            padding: 10px;
            margin-bottom: 20px;
            color: white;
            background: linear-gradient(to bottom, #786da7, #011a33);
        }
        li {
            padding: 2px;
            font-size: 30px;
        }
        h2, h3, h4 {
            font-size: 50px;
        }
        .table {
            font-family: 'Verdana';
            font-size: 25px;
            text-align: center;
            width: 70%;
            margin: 0 auto;
            border-collapse: collapse;
            border-radius: 5px;
            overflow: hidden;
        }
        .table th, .table td {
            padding: 10px;
        }
        .table thead {
            background-color: #286da7;
            color: #fff;
        }
        .table tbody tr:hover {
            background-color: #CFBFBC;
        }
        p.prva {
            font-size: 28px;
            font-family: "Verdana";
            line-height: 1.6;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
        footer p {
            font-size: 55px;
            margin: 0;
            font-family: "Montserrat";
        }
        p.f {
            font-size: 30px;
            font-family: "Verdana";
            line-height: 1.6;
        }


      


    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid d-flex flex-column align-items-center">
    <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php" target="_blank">Hrvati u NBA</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1>NBA - National Basketball Association</h1>
<h2>Povijest</h2>

<div class="container">
    <p class="prva">Najprestižnija profesionalna košarkaška liga na svijetu je Nacionalna košarkaška asocijacija (NBA), koja je postala sinonim za vrhunsku sportsku izvedbu i globalnu popularnost. Liga je osnovana 1946. godine kao Basketball Association of America (BAA), a kasnije je 1949. godine postala NBA kada se spojila s Nacionalnom košarkaškom ligom (NBL). Godine 1954., prvi put je uvedeno pravilo od 24 sekunde, koje je značajno oživilo igru, a mnogo godina kasnije slijedila je košarka na Starom kontinentu. U sezoni 1979/80 prvi put je uvedena linija za 3 poena, što je NBA igru učinilo još napadački orijentiranom i atraktivnijom.</p>
    <img src="nba1.png" width="50%" alt="" srcset="">
</div>

<h3>Najbolji igrači svih vremena</h3>

<table class="table table-striped" id="players-table">
    <thead>
        <tr>
            <th scope="col" onclick="sortTable(0)" >Ime</th>
            <th scope="col" onclick="sortTable(1)">Prezime</th>
            <th scope="col" onclick="sortTable(2)">Godina drafta</th>
            <th scope="col" onclick="sortTable(3)">Broj naslova</th>
            <th scope="col" onclick="sortTable(4)">Career high</th>
            <th scope="col" onclick="sortTable(5)">MVP</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($players as $player) { ?>
        <tr>
            <td><?php echo $player['ime']; ?></td>
            <td><?php echo $player['prezime']; ?></td>
            <td><?php echo $player['godinadrafta']; ?></td>
            <td><?php echo $player['brojnaslova']; ?></td>
            <td><?php echo $player['careerhigh']; ?></td>
            <td><?php echo $player['MVP']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>


<script>


</script>
<h3>Nedostižan NBA rekord</h3>
<div class="container">
    <p class="prva">Wilt Chamberlain je jedan od najboljih košarkaša svih vremena, u ožujku 1962. godine zabija 100 poena New York Knicksima. Mnogi ga smatraju jednim od najvećih rekorda u povijesti sporta. Chamberlain je u toj utakmici postavio pet drugih ligaških rekorda, uključujući i najveći broj ubačenih slobodnih bacanja, što je značajno postignuće, budući da su ga smatrali lošim strijelcem slobodnih bacanja. Taj rekord još uvijek nitko nije oborio, najbliže je došao Kobe Bryant koji je 2006. godine postigao 81 protiv Toronto Raptorsa.</p>
    <img src="boxscore.jpg" alt="" srcset="">
</div>



<footer>
    <p>Danko Meštrović</p>
    <p class="f">Tehničko veleučilište u Zagrebu</p>
   <a href="https://www.nba.com/" target="_blank"> <img src="nbalogo.png" width="10%"></a>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hrvati u NBA ligi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style> 

        body {
        h1{
            text-align: center;
            background-color: #0e0101;
            padding: 10px; 
            margin-bottom: 20px; 
            color:white;
            background:linear-gradient(to bottom, #286da7, #011a33)

        }
        
        }
        h2 { text-align: center;
                color: #fff;
                background-color: #552828;
                padding: 10px;
                border-radius: 2px;
               background:linear-gradient(to bottom, #286da7, #011a33);
        }
    
        h1{
            text-align: center;
            
                padding: 10px;
                border-radius: 2px;
        } 
        
        p{
            font-size:30px;
            
        }

        .container {
            display: flex;
            align-items: center;
        }

        .container img{
            margin-left: auto;
        }

        .prva {
            margin-right: 5px;
        }
     
        .navbar-brand{
            font-size:30px;
            align-items: center;
            
        }

        li{     
                font-size: 30px;
        }
        
        .navbar-collapse{
            font-family:Arial;
        }
        
      
        
        .table {
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            text-align: center;
            width: 100%;
            border-collapse: collapse;
            border-radius: 5px;
            overflow: hidden;
        }

        .table th, .table td {
            padding: 10px;
            
        }


        .table tbody tr:hover {
            background-color: #FCFAFA /* Tamnoplava pozadina za prelazak miša */
        }

        .navbar-gradient {
    background: linear-gradient(90deg, #ff7e5f, #feb47b);
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

            p.f{
                font-size:30px;
                font-family:"Verdana";
                line-height:1.6
            }
        
        .container2{
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 100%;
            max-width: 1060px;
            margin: 0 auto;
        }

    </style>
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
          <a class="nav-link" href="nba.php" target="_blank">NBA</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</head>

<body>
<h1>Hrvati u NBA-u</h1>
<div class="container">

<p class="prva">Hrvatski košarkaši u NBA ligi igraju od 1989. godine i dolaska Dražena Petrovića
     pa preko Stojka Vrankovića koji se priključio 1990. Od tada do danas je najjaču košarkašu
     ligu iskusio 21 Hrvat. Hrvatska u ovom trenutku ima četiri košarkaša u NBA ligi.
 Bogdanović, Šarić i Zubac nastupaju za New York Knickse, Golden State Warriors, 
      odnosno LA Clipperse, dok Luka Šamanić brani boje Utah Jazza.</p>
      <div style="text-align: center;">
        <img src="babo.jpeg" alt="" srcset="" width="600" height="400">
        <p>Bojan Bogdanović</p>
    </div>
      
    </div>
<?php
// Učitavanje XML datoteke
$xml = simplexml_load_file('popis.xml');
?>
<br>
<br>
 <h2>Svi Hrvati koji su igrali u NBA ligi</h2>
<div class="container">
   
    <table class="table table-striped" id="players-table">
        <thead>
            <tr class="bg-info">
                <th data-column="ime" data-order="asc">Ime</th>
                <th data-column="prezime" data-order="asc">Prezime</th>
                <th data-column="godinadraft" data-order="asc">Godina drafta</th>
                <th data-column="naslovi" data-order="asc">Broj naslova</th>
                <th data-column="brojtimova" data-order="asc">Broj timova</th>
                <th data-column="brojsezona" data-order="asc">Broj sezona</th>
                <th data-column="status" data-order="asc">Status</th>
                <th data-column="careerhigh" data-order="asc">Career high</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($xml->igrac as $igrac): ?>
                <tr>
                    <td><?php echo $igrac->ime; ?></td>
                    <td><?php echo $igrac->prezime; ?></td>
                    <td><?php echo $igrac->godinadraft; ?></td>
                    <td><?php echo $igrac->naslovi; ?></td>
                    <td><?php echo $igrac->brojtimova; ?></td>
                    <td><?php echo $igrac->brojsezona; ?></td>
                    <td><?php echo $igrac->status; ?></td>
                    <td><?php echo $igrac->careerhigh; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


<h2>Dražen vs Jordan</h2>
<div class="container2">
    <p class="prva">
        Dražen Petrović je u svojoj NBA karijeri susreo Michaela Jordana 11 puta. Prvi susret dogodio se u studenom 1989. godine, kada je Dražen odigrao samo 2 minute i postigao jedan koš.
        Tri godine kasnije, u prosincu 1992. godine, Dražen je odigrao svoju najbolju utakmicu protiv Jordana.
        U 40 minuta igre zabilježio je 25 poena, 9 skokova i 6 asistencija. Njegova izvanredna igra, međutim, nije bila dovoljna da zaustavi 
        Michaela Jordana, koji je postigao 38 poena i vodio Chicago Bullse do pobjede rezultatom 95-89.
    </p>
    <iframe width="1060" height="615" src="https://www.youtube.com/embed/gfqsyb4M2h8?si=Q1f_ritp9T1ZixzV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>


</body>


<footer>
    <p>Danko Meštrović</p>
    <p class="f">Tehničko veleučilište u Zagrebu</p>
   <a href="https://www.nba.com/" target="_blank"> <img src="nbalogo.png" width="10%"></a>
</footer>

             
</html>



<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl6.css">
    <title>Organizer</title>
</head>
<body>
    <div class="baner1">
        <h2>MÓJ ORGANIZER<br></h2>
    </div>
    <div class="baner2">
        <!-- Fromularz -->
        <form action="" method="POST">
            <label>Wpisz wydarzenia<input type="text" name="wydarzenia"></label>
            <button>Zapisz</button>
        </form>
        <?php 
                $conn = mysqli_connect("localhost","root","","egzamin6");
                $wydarzenia = $_POST['wydarzenia'];
                $zapytanie = "UPDATE zadania SET wpis='$wydarzenia' WHERE dataZadania='2020-08-27';";
                $res = mysqli_query($conn,$zapytanie);

            ?> 
    </div>
    <div class="baner3">
        <img src="logo2.png" alt="Mój organizer">
    </div>
    <div class="main">
            <!-- Skrypt1 -->
           <?php 
            $conn = mysqli_connect("localhost","root","","egzamin6");
            $zapytanie1 = "SELECT dataZadania,miesiac,wpis FROM `zadania` WHERE miesiac = 'sierpien';";
            $res1 = mysqli_query($conn, $zapytanie1);
            while($wiersz=mysqli_fetch_row($res1)) {
               echo "<div class='day'>
                    <h6>$wiersz[0],$wiersz[1]</h6>
                    <p>$wiersz[2]</p>
                </div>";
            }
           ?>
    </div>
    <div class="footer">
        <!-- Skrypt2 -->
        <?php 
            $conn = mysqli_connect("localhost","root","","egzamin6");
            $zapytanie2 = "SELECT miesiac,rok  FROM `zadania` WHERE dataZadania = '2020-08-01';";
            $res2 = mysqli_query($conn,$zapytanie2);
            while($wiersz1=mysqli_fetch_row($res2)){
                echo "<h1>miesiąc:$wiersz1[0],rok:$wiersz1[1]</h1>";
            } 
            mysqli_close($conn);
        ?>
        <p>Stronę wykonał: Paweł Lewandowski</p>
    </div>

</body>
</html>
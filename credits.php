<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: violet;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            font-size: 50px;
            text-align: center;
            color: white;
            text-decoration: none;
        }
        .card {
            background-color: white;
            width: 200px; /* Atur lebar kotak */
            height: 200px; /* Atur tinggi kotak sama dengan lebar untuk menjadi kotak */
            font-size: 20px;
            margin-bottom: 50%;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 15px auto;
            border-radius: 10px; /* Untuk sedikit melengkungkan sudut */
            box-shadow: 13px 10px 20px 1px rgba(0,0,0,0.62);
            -webkit-box-shadow: 13px 10px 20px 1px rgba(0,0,0,0.62);
            -moz-box-shadow: 13px 10px 20px 1px rgba(0,0,0,0.62);
        }

        .card img {
            width: 100px; /* Sesuaikan lebar gambar */
            height: 100px; /* Sesuaikan tinggi gambar */
            object-fit: cover; /* Agar gambar tetap proporsional */
            margin-bottom: 10px; /* Jarak antara gambar dan teks */
        }

        .back-button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-align: center;
            display: block;
            margin: 20px auto;
        }    
    </style>
</head>
<body>
    <a href="index.php"><h1>JENIS BARANG</h1></a>
    
    <div class="card">
        <img src="sprei.jpg" alt="">
        <h2>SPREI</h2>
    </div> 
    <div class="card">
        <img src="pakaian.jpg" alt="">
        <h2>PAKAIAN</h2>
    </div>
    <div class="card">
        <img src="boneka.jpg" alt="">
        <h2>BONEKA</h2>
    </div>   
    <div class="card">
        <img src="selimut.jpg" alt="">
        <h2>SELIMUT</h2>
    </div>      
    <div class="card">
        <img src="gordyn.jpg" alt="">
        <h2>GORDYN</h2>
    </div>   
   
    <a href="dashboard.php"><button class="back-button">Kembali</button></a> 
</body>
</html>
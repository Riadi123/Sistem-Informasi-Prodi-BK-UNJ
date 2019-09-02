<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Riadi Satiopa Batubara</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
        body {
        background-image: url("background.jpg");
        }
        
        div{
            font-family: 'Poppins', sans-serif; 
            color      : #0D340D;
        }
        .grid-container {
            display: grid;
            }
            .grid-item {
            /* border-style    : solid; */
            font-size: 30px;
            width: 1100px;
            margin: auto;
            }

            /* Input Nama */
            input[type=text] {
            width: 600px;
            padding: 8px;
            margin: 0 0 5px 20px;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            border-radius: 100px;
            box-shadow   : 5px 5px 5px #8a795d; 
            font-family: 'Poppins', sans-serif; 
            }

            /* Input Deskripsi */
            textarea[name ="message" ]{
            width: 600px;
            height: 150px;
            padding: 8px;
            margin: 5px 0 0 20px;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            border-radius: 10px;
            box-shadow   : 5px 5px 5px #8a795d;  
            font-family: 'Poppins', sans-serif; 
            }
            input[type=text]:focus, textarea[name=message]:focus {
            background-color: #ffffff;
            outline: none;
            
            }
            /* Tombol Unggah Foto */
            .submitbtn{
                border: none;
                border-radius: 5px;
                display: inline-block;
                cursor: pointer;
                margin: 0 0 0 970px;
                padding: 6px;
                font-size: 15px;
                color: white;
                text-align: center;
                background-color: #0D340D;
                font-family: 'Poppins', sans-serif; 
            }
            .submitbtn:hover{
                background-color: #6CAF50;
            }
        /*Agar bisa menggunakan tab*/
        pre{
            font-size   : 15px;
            font-family: 'Poppins', sans-serif;
            color      : #0D340D;

        }
        
        </style>
    </head>
    <body>
    <!--Kotak Pembatas Total-->
    <div class="grid-container" style="margin-start: 10px; margin-top: -60px;">
    <!--Kotak Bagian Atas-->
    <div class="grid-item" style="margin-top: 5%">
    <h3 style="text-align: center;">Formulir Ketidakhadiran Dosen</h3>
    </div>
    
    
    <!--Kotak Bagian Bawah-->
    <div class="grid-item" style="float: left; ">
    <!--Kotak Bagian Bawah Kiri-->
    <div class="grid-item" style="width: 400px; float: left ">
    <pre style="text-align: right;">Nama Dosen          : </pre>
    <pre style="text-align: right; margin-top: 30px;">Mata Kuliah         : </pre>
    <pre style="text-align: right; margin-top: 20px;">Deskripsi        : </pre>
    </div>

    <!--Kotak Bagian Bawah Kanan-->
    <div class="grid-item" style="width: 700px float: left;">
    <form action="/action_page.php">
    <input type="text" placeholder="Masukan nama dosen" name="dosen" required>
    <input type="text" placeholder="Masukan nama mata kuliah" name="matkul" required>
    <textarea name="message" id="deskripsi" cols="30" rows="10" placeholder="Masukkan deskripsi keadaan kelas"></textarea>
    <button type="submit" class="submitbtn">Submit</button>
    </form></div>
    
    </div>
    
    </div>
    <!--Batas Kotak Pembatas Total-->

    </body>
</html>

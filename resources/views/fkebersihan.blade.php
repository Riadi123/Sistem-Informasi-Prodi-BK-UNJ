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
            padding: 10px;
            margin: 5px 0 10px 20px;
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
            padding: 10px;
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
            .btnunggah{
                border: none;
                border-radius: 5px;
                display: inline-block;
                cursor: pointer;
                margin-left: 420px;
                padding: 5px;
                font-size: 10px;
                text-align: center;
            }
            .btnunggah:hover{
                background-color: #4CAF50;
            }
        /*Agar bisa menggunakan tab*/
        pre{
            font-size   : 15px;
            font-family: 'Poppins', sans-serif;
            color      : #0D340D;

        }
        /*Setting Ukuran Gambar*/
        img{
            width: 35px;
            height: 35px;
        }
        /*Setting Button Input Gambar*/
        .inputfile {
        width: 0.1px;
        height: 0.1px;
        border-radius: 5px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
        
        }
        .inputfile + label {
        margin-left: 420px;
        font-size: 12px;
        cursor: pointer;
        padding: 2px 2px 2px 2px;
        width: 90px;
        height: 20px;
        text-align:center;
        border-radius: 5px;
        font-weight: 700;
        color: white;
        background-color: #0D340D;
        display: inline-block;
    }

    .inputfile:focus + label,
    .inputfile + label:hover {
        background-color: #4CAF50;
    }
        </style>
    </head>
    <body>
    <!--Kotak Pembatas Total-->
    <div class="grid-container" style="margin-start: 10px; margin-top: -60px;">
    <!--Kotak Bagian Atas-->
    <div class="grid-item" style="margin-top: 5%">
    <h3 style="text-align: center;">Formulir Kebersihan Kelas</h3>
    </div>
    
    
    <!--Kotak Bagian Bawah-->
    <div class="grid-item" style="float: left; ">
    <!--Kotak Bagian Bawah Kiri-->
    <div class="grid-item" style="width: 400px; float: left ">
    <pre style="text-align: right;">Nama Kelas          : </pre>
    <pre style="text-align: right; margin-top: 30px;">Deskripsi Kelas     : </pre>
    </div>

    <!--Kotak Bagian Bawah Kanan-->
    <div class="grid-item" style="width: 700px float: left;">
    <form action="/action_page.php">
    <input type="text" placeholder="Masukan Kelas" name="Kelas" required>
    <textarea name="message" id="deskripsi" cols="30" rows="10" placeholder="Masukkan deskripsi keadaan kelas"></textarea>
    </form></div>
    <input type="file" name="file" id="file" class="inputfile" />
    <label for="file">Choose a file</label>
    </div>
    
    </div>
    <!--Batas Kotak Pembatas Total-->

    </body>
</html>

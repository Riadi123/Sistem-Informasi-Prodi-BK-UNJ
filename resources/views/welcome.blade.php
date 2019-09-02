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
            font-size: 30px;
            text-align: center;
            width: 1100px;
            margin: auto;
            }
        .kontak{
            background-color    : #B6EDB6;
            width               : 350px;
            height              : 100px;
            border-radius       : 5px;
            box-shadow          : 5px 5px 5px #8a795d;
            float               : left;
            margin-left         : 8px;
            margin-right        : 5px;
            margin-top          : 10px;
            font-size           : 23px;
            padding-top         : 10px;
            
        }
        .kontak:hover {
            opacity: 0.8;
            cursor: pointer;
        }
        p{
            font-size   : 15px;
        }
        @media screen and (max-width:1350px) {
        .kontak {
            width:100%; /* The width is 100%, when the viewport is 800px or smaller */
            margin: auto;
            margin-top: 10px;
        }}
        
        </style>
    </head>
    <body>
    <div class="grid-container">
    <div class="grid-item" style="margin-top: 5%">
    <h3>Formulir Seputar Kuliah</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati nihil itaque inventore consectetur aspernatur id ipsum excepturi nemo accusantium expedita. Nesciunt pariatur corporis, autem unde voluptas ipsum quo voluptatem repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aliquam, harum unde fuga ad necessitatibus vero non fugit! Molestias quod debitis velit obcaecati et soluta esse exercitationem a natus tenetur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat repudiandae iste excepturi ut praesentium asperiores quia ipsam aspernatur optio maiores dignissimos ea, neque beatae adipisci nulla necessitatibus! Neque, repudiandae qui? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor tempora blanditiis minima fugit eligendi, quis, sequi illum alias voluptates voluptate nulla, beatae autem a dolores! Assumenda aliquid odit blanditiis dolore!</p>
    </div>
    <div class="grid-item" style=" ">
    <a href="{{ route('fkebersihan') }}"><div class="kontak" >Formulir <br>Kebersihan Kelas</div></a>
    <a href="{{ route('fketerlambatan') }}"><div class="kontak">Formulir <br>Keterlambatan Dosen</div></a>
    <a href="{{ route('fketidakhadiran') }}"><div class="kontak">Formulir <br>Ketidakhadiran Dosen</div></a>
    <a href="{{ route('fpkm') }}"><div class="kontak">Formulir <br>Pembimbingan PKM</div></a>
    <a href="{{ route('fskripsi') }}"><div class="kontak">Formulir <br>Pembimbingan Skripsi</div></a>
    <a href="{{ route('f56') }}"><div class="kontak">Formulir <br>05 & 06</div></a>
    </div>
    </div>

    </body>
</html>

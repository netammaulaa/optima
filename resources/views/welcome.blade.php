<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color:#ffffff;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            
            .header{
                background-color: #FFFFFF;
                height: 80px;
            }

            .top-left {
                position: absolute;
                font-size: 15px;
                color: #000000;
                left: 10px;
                top: 12px;
                word-spacing: .2rem;
                padding-left: 200px;
                text-align: center;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 12px;
                padding-right: 200px;
                text-align: center;
            }

            .top-right > a {
                color: #000000;
                padding: 0 25px;
                margin-right: 50;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .sub-head{
               text-align: center;
               font-size: 16px;
                letter-spacing: .1rem;

            }

            .search{
                padding-top: 1px;
                background-color: #000080;
                height: 150px;
                font-size: 16px;
                color: #ffffff;
                line-height: 1px;
                justify-content: 200px;
                
            }

        </style>
    </head>
    <body>
    <div class="header">
        <div class="top-left">
            <tr>logo</tr>
            <tr>Spare Part & Peralatan Kapal</tr>
        </div>

        <div class="top-right">
            <a href="">Profil</a>
            <a href="">HubungiKami</a>
            <a href="">Blog</a>
            <a href="">Whatsapp 082134562134</a>
        </div>

        <br>
        <br>
        <div class="sub-head">
            <td>ANEKA SPARE PARTS</td>
            <td>GENSET & KELISTRIKAN</td>
            <td>ANEKA POMPA</td>
            <td>PANEL & GAUGE</td>
            <td>HARGA TURUN</td>
        </div>
    </div>

    <div class="search">
        <p style="padding-left: 230px;">Cari spare part & aneka peralatan kapal yang anda inginkan</p>
        <div class="form-group" style="padding-left: 230px; width">
            <input type="text" class="form-control" placeholder="Ketik Pencarian Anda">
            <button type="button" class="dropdown-toggle" id="Semua Kategori" data-toggle="dropdown" aria-expanded="true">
                Semua Kategori
            <span class="caret"></span>     
        <button type="button" class="btn btn-success">Cari</button>
        </div>
    </form>
    
    </div>
    </div>
    </body>
</html>

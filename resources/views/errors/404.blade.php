<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Page Not Found.</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #fff;
                display: table;
                font-weight: 100;
                background:url('{{url('img/foot.png')}}') #41c0f3;
                background-repeat: no-repeat;
                background-size:100%; 
                background-position:bottom;
                background-attachment: fixed;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
                margin-top: -50px; 
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
            .qwe{
                font-size: 90px!important;
                font-weight: 700;
            }
            .back{
                border-radius: 18px;
                border: none;
                border: 1px solid #fff;
                background: rgba(255, 0, 0, 0);
                padding: 10px 20px;
                font-size: inherit;
                font-weight: 600;
                color: #ffffff;
            }
            .back:hover{
                color:#41c0f3;
                background-color: #fff;
            }
            .back:focus {
                outline:none;
            }
            @media screen and (max-width:500px){
                .title {
                    font-size: 45px;
                }
            }
            @media screen and (max-width: 667px){
                .content {
                    margin-top:0px; 
                 }
                 .title {
                    font-size: 45px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title qwe">404</div>
                <div class="title">Uups.. Halaman tidak ditemukan.</div>
                <a href="{{route('home')}}"><button class="back">Go Back To Home</button></a>
            </div>
        </div>
    </body>
</html>
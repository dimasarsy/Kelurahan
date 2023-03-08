<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
    <link rel="icon" type="image/x-icon " href="assets/img/home/home.png">

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="bc1e3d88-0942-4b8f-b14f-8da128ba00ba";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        .navbar-nav a {
            margin-right: 20px;
            margin-left: 10px;
            color: white;
            text-decoration: none;
        }

        .navbar-nav a:hover {
            color: orangered;
        }

        .navbar-nav-login a {
            margin-right: 20px;
            margin-left: 10px;
            color: white;
            text-decoration: none;
        }

        .navbar-nav-login a:hover {
            color: orangered;
        }

        .navbar-nav-login a svg:hover {
            color: orangered;
        }

        .navbar-nav-login svg {
            margin-right: 20px;
            margin-left: 10px;
            color: white;
            text-decoration: none;
        }
    </style>

    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="container">

            <a class="navbar-brand" href="<?php base_url() ?>home"><img src="assets/img/home/home.png" style="width:50px; height:50px; margin-right:3%"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url() ?>home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url() ?>terbaru">Info Terbaru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url() ?>Layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url() ?>About">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url() ?>Laporan">Lapor</a>
                    </li>
                </ul>
                <ul class="navbar-nav-login  mb-2 mb-lg-0">
                    <a href="<?= base_url() ?>auth" data-toggle='modal' data-target='popup'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                    </a>
                </ul>
            </div>
        </div>
    </nav>
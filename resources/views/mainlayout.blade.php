<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Yayasan Wredha Mulya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand-vertical {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        
        .navbar-brand-vertical .brand-top,
        .navbar-brand-vertical .brand-bottom {
            line-height: 1;
        }

        .navbar-brand-vertical .brand-top,
        .navbar-brand-vertical .brand-bottom {
            font-size: 1rem;
        }

        .custom-margin {
            margin-right: 50px; /* Jarak ke menu navigasi */
        }

        .navbar-nav {
            display: flex; /* Menjadikan ul sebagai flex container */
            align-items: center; /* Menyelaraskan item di tengah secara vertikal */
            gap: 20px; /* Memberikan jarak antar item menu */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-light">
        <div class="container-fluid">
            <img src="{{ asset('ikon/ywm.jpg') }}" alt="Yayasan Wredha Mulya Logo" width="70" height="64" class="me-auto">
            <a class="navbar-brand navbar-brand-vertical text-success custom-margin">
                <span class="brand-top">Yayasan</span>
                <span class="brand-bottom">Wredha Mulya</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-success" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-success" href="#">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-success" href="#">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-success" href="#">Kontak Kami</a>
                    </li>
                </ul> 
            </div>
        </div>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website is under construction</title>
    <style>
        :root {
            --primary-color: #0056b3;
            --secondary-color: #f8f9fa;
            --accent-color: #ffc107;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, var(--secondary-color), #e9ecef);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            width: 100%;
            max-width: 800px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .container:hover {
            transform: translateY(-5px);
        }
        
        .logo-container {
            width: 150px;
            height: 150px;
            margin: 0 auto 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        
        .logo {
            max-width: 100%;
            max-height: 100%;
            border-radius: 50%;
            object-fit: contain;
        }
        
        .main-text {
            color: var(--primary-color);
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.3;
        }
        
        .sub-text {
            color: #6c757d;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }
        
        .wave-decoration {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%230056b3" fill-opacity="0.1" d="M0,256L48,261.3C96,267,192,277,288,245.3C384,213,480,139,576,138.7C672,139,768,213,864,218.7C960,224,1056,160,1152,138.7C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-repeat: repeat-x;
            background-size: 1440px 100px;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 30px 20px;
            }
            
            .main-text {
                font-size: 1.8rem;
            }
            
            .logo-container {
                width: 120px;
                height: 120px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Space untuk Logo -->
        <div class="logo-container">
            <!-- Ganti URL dibawah ini dengan URL/gambar logo yang ingin ditampilkan -->
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo LLDIKTI XVII">
        </div>
        
        <h1 class="main-text">Selamat Datang</h1>
        <h2 class="main-text">ini merupakan halaman test</h2>
        <h1 class="main-text">LLDIKTI Wilayah XVII</h1>
        <p class="sub-text">Lembaga Layanan Pendidikan Tinggi Wilayah XVII</p>
        <div class="wave-decoration"></div>
    </div>
</body>
</html>
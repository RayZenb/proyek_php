<?php include('koneksi.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - binbin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            overflow-x: hidden;
        }

        video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        header {
            background: #4E56C0;
            padding: 1rem 0;
        }

        .kepala nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        h1 {
            color: white;
            font-size: 1.8rem;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #D78FEE;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 80px);
            padding: 2rem;
        }

        .hero {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 450px;
        }

        .judul {
            text-align: center;
            margin-bottom: 2rem;
        }

        .judul h3 {
            font-size: 2rem;
            color: #333;
        }

        .input-box {
            margin-bottom: 1.5rem;
        }

        .input-box input,
        .input-box select {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .input-box input:focus,
        .input-box select:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .terms {
            margin-bottom: 1.5rem;
        }

        .terms label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #555;
            font-size: 0.9rem;
        }

        .terms input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .terms a {
            color: #4CAF50;
            text-decoration: none;
        }

        .terms a:hover {
            text-decoration: underline;
        }

        .btn {
            width: 100%;
            padding: 1rem;
            background: #9B5DE0;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #D78FEE;
        }

        .login-lk {
            text-align: center;
            margin-top: 1.5rem;
        }

        .login-lk p {
            color: #555;
        }

        .login-lk a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        .login-lk a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            nav ul {
                gap: 1rem;
                font-size: 0.9rem;
            }

            .hero {
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <section class="kepala">
            <nav>
                <h1>Hoshi.com</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </nav>
        </section>
    </header>
    
    <main>
        <div class="hero">
            <div class="judul">
                <h3>Register</h3>
                <br>
                <p>Pendaftaran member Hoshi.com ^w^ </p>
            </div>
            
            <form action="register1.php" method="POST">
                <div class="input-box">
                    <input type="text" name="fullname" placeholder="Nama Lengkap" required>
                </div>
                
                <div class="input-box">
                    <input type="textarea" name="alamat" placeholder="Alamat Lengkap" required>
                </div>
                
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                
                <div class="input-box">
                    <input type="tel" name="phone" placeholder="Nomor Whatsapp yang bisa di hubungi" required>
                </div>
                <div class="terms">
                    <label>
                        <input type="checkbox" name="terms" required>
                        I agree to the <a href="#">Terms & Conditions</a>
                    </label>
                </div>

                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </main>
</body>
</html>

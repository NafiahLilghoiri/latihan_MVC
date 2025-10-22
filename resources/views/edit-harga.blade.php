<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Harga Produk</title>
    <style>
        body {
            background: linear-gradient(135deg, #fbeee6, #e8d3c5);
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.25);
            padding: 35px 45px;
            width: 380px;
            text-align: center;
            animation: fadeInUp 0.8s ease;
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h2 {
            color: #6b3e26;
            margin-bottom: 20px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        p {
            color: #4b2e16;
            margin: 8px 0;
            font-size: 14px;
        }

        b {
            color: #8b4513;
        }

        label {
            color: #4b2e16;
            font-weight: 500;
            display: block;
            text-align: left;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 2px solid #c69c72;
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
            font-size: 14px;
        }

        input:focus {
            border-color: #8b5e3c;
            box-shadow: 0 0 8px rgba(139, 69, 19, 0.4);
        }

        button {
            background-color: #8b5e3c;
            color: #fff;
            border: none;
            padding: 10px 25px;
            border-radius: 15px;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        button:hover {
            background-color: #6b3e26;
            transform: scale(1.05);
            box-shadow: 0 5px 12px rgba(107, 62, 38, 0.3);
        }

        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: #a07b5d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🍁 Form Ubah Harga Produk 🍂</h2>
        <p>Nama Produk: <b>Laptop ASUS</b></p>
        <p>Kategori: <b>Elektronik</b></p>
        <p>Harga Saat Ini: <b>Rp5.000.000</b></p>

        <form action="/produk/update-harga" method="POST">
            @csrf
            @method('PATCH')

            <label>Harga Baru:</label>
            <input type="number" name="harga" value="5000000" required>

            <button type="submit">💾 Perbarui Harga</button>
        </form>

        <div class="footer">Didesain hangat oleh Nafiah 🤎</div>
    </div>
</body>
</html>

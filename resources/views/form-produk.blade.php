<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk</title>
    <style>
        body {
            background: linear-gradient(135deg, #ffd6e0, #fff0f6);
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
            box-shadow: 0 8px 20px rgba(255, 182, 193, 0.4);
            padding: 30px 40px;
            width: 350px;
            text-align: center;
        }

        h2 {
            color: #ff5c8d;
            margin-bottom: 20px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        label {
            color: #444;
            font-weight: 500;
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 2px solid #ffc0cb;
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
            margin-bottom: 15px;
        }

        input:focus, select:focus {
            border-color: #ff85a2;
            box-shadow: 0 0 8px rgba(255, 133, 162, 0.4);
        }

        button {
            background-color: #ff85a2;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 15px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #ff5c8d;
            transform: scale(1.05);
            box-shadow: 0 5px 10px rgba(255, 92, 141, 0.3);
        }

        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🍓 Form Input Produk 🍰</h2>
        <form action="/kirim-produk" method="POST">
            @csrf
            <label>Nama Produk:</label>
            <input type="text" name="nama" placeholder="Masukkan nama produk..." required>

            <label>Harga Produk:</label>
            <input type="number" name="harga" placeholder="Masukkan harga..." required>

            <label>Kategori:</label>
            <select name="kategori">
                <option value="Makanan">Makanan 🍩</option>
                <option value="Minuman">Minuman 🧃</option>
                <option value="Elektronik">Elektronik 💻</option>
            </select>

            <button type="submit">💌 Kirim</button>
        </form>
        <div class="footer">Dibuat dengan 💖 oleh Nafiah</div>
    </div>
</body>
</html>

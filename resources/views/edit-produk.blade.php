<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
    <style>
        body {
            background: linear-gradient(135deg, #ffe0eb, #fff5f8);
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
            box-shadow: 0 8px 20px rgba(255, 192, 203, 0.4);
            padding: 35px 45px;
            width: 370px;
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
            color: #ff5c8d;
            margin-bottom: 25px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        label {
            color: #555;
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
            font-size: 14px;
        }

        input:focus, select:focus {
            border-color: #ff85a2;
            box-shadow: 0 0 8px rgba(255, 133, 162, 0.4);
        }

        button {
            background-color: #ff85a2;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 15px;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
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
        <h2>🎀 Form Edit Produk 🎀</h2>
        <form action="/produk/update" method="POST">
            @csrf 
            @method('PUT') 

            <label>Nama Produk:</label>
            <input type="text" name="nama" value="Laptop Lama" required>

            <label>Harga Produk:</label>
            <input type="number" name="harga" value="5000000" required>

            <label>Kategori:</label>
            <select name="kategori">
                <option value="Elektronik" selected>Elektronik 💻</option>
                <option value="Makanan">Makanan 🍰</option>
                <option value="Minuman">Minuman 🧃</option>
            </select>

            <button type="submit">💾 Perbarui Data</button>
        </form>
        <div class="footer">Diedit dengan 💖 oleh Nafiah</div>
    </div>
</body>
</html>

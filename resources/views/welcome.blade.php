<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Reset beberapa gaya default browser */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Gaya dasar untuk elemen body */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    text-align: center;
    padding: 20px;
}

/* Gaya untuk elemen h1 */
h1 {
    font-size: 36px;
    color: #333;
    margin: 10px 0;
}

/* Gaya khusus untuk h1 yang pertama */
h1:first-of-type {
    color: #007BFF;
}

/* Gaya untuk elemen p */
p {
    font-size: 18px;
    color: #666;
    margin: 10px 0;
}

/* Gaya khusus untuk elemen p */
p:first-of-type {
    font-weight: bold;
    color: #333;
}

        
    </style>
</head>
<body>
    <h1>selamat datang</h1>
    <h1>di</h1>
    <h1>Garuda Cyber Institute</h1>
    <p>{{ $namadpn }} {{ $namabel }}</p>
</body>
</html>
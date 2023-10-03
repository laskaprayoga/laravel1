<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>

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
    font-size: 24px;
    color: #333;
    margin: 10px 0;
}

/* Gaya untuk elemen form */
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Gaya untuk elemen label */
label {
    font-weight: bold;
    display: block;
    margin-bottom: 10px;
    color: #333;
}

/* Gaya untuk input teks */
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

/* Gaya untuk tombol submit */
button[type="submit"] {
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
}

/* Gaya untuk tombol submit saat dihover */
button[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <h1>Halaman Register</h1>
    <form method="GET" action="/welcome" >
            <div class="form-group">
                <label >Nama Depan:</label>
                <input type="text"  name="namadepan" class="form-control" required>
            </div>
        
            <div class="form-group">
                <label >Nama Belakang:</label>
                <input type="text"  name="namabelakang" class="form-control" required>
            </div>
        
            <div class="form-group">
                <label for="other_field">Isian Lainnya:</label>
                <input type="text" id="other_field" name="other_field" class="form-control">
            </div>
        
            <!-- Tambahkan input untuk isian lainnya jika diperlukan -->
        
            <button type="submit" class="btn btn-primary">Submit</button>
        
        
    </form>
</body>
</html>
   
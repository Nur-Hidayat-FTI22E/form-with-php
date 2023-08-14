<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pendaftaran</title>
  <style>
    /* Reset CSS */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  body {
    font-family: Arial, sans-serif;
    background-color: #f3f5fa;
    color: #333;
  }
  
  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

img{
    margin-left: 200px;
    margin-right: 200px;
}

  h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #37517e;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #37517e;
  }
  
  input[type="text"],
  input[type="email"],
  input[type="tel"],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
 
  select {
    appearance: none;
    background-image: url("arrow-down.svg"); /* Ganti dengan icon panah bawah */
    background-repeat: no-repeat;
    background-position: right 10px center;
    padding-right: 30px;
  }
  
  textarea {
    resize: vertical;
  }
  
  .btn-submit {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #47b2e4;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
  }
  
  .btn-submit:hover {
    background-color: #23a3df;
  }
  .copyright{
    margin-left: 28px;
    margin-right: 20px;
    font-size: 10pxpx;
  }
  /* Responsive styles */
  @media screen and (max-width: 768px) {
    .container {
      padding: 20px;
    }
  }
  
  </style>
</head>
<body>
    <!-- Favicons -->
    <link href="form/favicon.png" rel="icon">
    <link href="form/favicon.png" rel="apple-touch-icon">

  <div class="container">
    <img src="logo coconut1@4x.png" alt="" width="100px">
    <h1>Pendaftaran Coconut Open Class</h1>
    <form action="connect.php" method="POST">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="telepon">Telepon:</label>
        <input type="tel" id="telepon" name="telepon" required>
      </div>
      <div class="form-group">
        <label for="telepon">Asal Institusi:</label>
        <input type="tel" id="asal_institusi" name="asal_institusi" required>
      </div>
      <button type="submit" class="btn-submit">Daftar Sekarang</button>
    </form>
    <div class="container footer-bottom clearfix">
      <div class="copyright">
         Copyright &copy; 2023 by<strong> <span>Panitia Coconut Open Class</span></strong>
      </div>
      <div class="credits">
      </div>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <title>Endog</title>
</head>
<style>
  body {
    font-family: 'Montserrat', sans-serif;
  }

  html,
  body,
  .container,
  .d-flex,
  .row {
    height: 100%;
  }
</style>

<body class="bg-primary">
  <!-- <a href='https://www.freepik.com/vectors/education-cartoon'>Education cartoon vector created by pch.vector - www.freepik.com</a> -->
  <div class="container">
    <div class="d-flex justify-content-center align-items-center">
      <div class="card">
        <div class="card-body p-0">
          <div class="row m-0 p-0">
            <div class="col-md-8 d-none d-lg-block">
              <img src="assets/img/auth-image.jpg" alt="image" class="img-fluid rounded-start">
            </div>
            <div class="col-md-4 bg-light py-3">
              <div class="row justify-content-center align-items-center">
                <div class="col mx-2">
                  <p class="text-center">PPDB-CLIENT</p>
                  <div class="mb-3">
                    <label for="nisnFormControlInput1" class="form-label">NISN</label>
                    <input type="text" class="form-control rounded-0" id="nisnFormControlInput1" placeholder="Nomor Induk Siswa Nasional" required>
                  </div>
                  <div class="mb-3">
                    <label for="passwordFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control rounded-0" id="passwordFormControlInput1" placeholder="Password" required>
                  </div>
                  <button class="btn btn-info float-end rounded-0">Login</button>
                  <p class="small">Tidak punya akun? daftar <a href="signup.php" class="text-decoration-none">di sini</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
</body>

</html>
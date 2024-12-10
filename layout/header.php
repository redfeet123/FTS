<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Varela Round' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <link rel="stylesheet" href="../include/css/header.css">
    <link rel="stylesheet" href="../include/css/style.css">
    <link rel="stylesheet" href="../include/css/personal.css">
    <link rel="stylesheet" href="../include/css/footer.css">




</head>

<body>
<div class="container-fluid">

  <header>
    <div class="logo-menu">
      <img src="./images/logo.png">
      <a href="./personal.php">Personal</a>
      <a href="./index.php">Business</a>
    </div>
    <ul>
      <div class="menus">
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Help</a></li>
      </div>
      <div class="log-sign">
        <li><a href="#" class="login">Login</a></li>
        <li><a href="#" class="sign-up">Signup</a></li>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" 
            data-bs-toggle="dropdown" aria-expanded="false">
            <span id="selectedLanguage">Language</span>
            <img id="selectedFlag" src="/images/Group 1264.png" alt="Selected Language" 
              style="width: 20px; margin-left: 5px;">
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li>
              <a class="dropdown-item" href="#" data-flag="/images/Group 1264.png" data-lang="English">
                English <img src="/images/Group 1264.png" alt="English" style="width: 20px; margin-left: 5px;">
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#" data-flag="/images/france.png" data-lang="French">
                French <img src="/images/france.png" alt="French" style="width: 20px; margin-left: 5px;">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </ul>

  </header>


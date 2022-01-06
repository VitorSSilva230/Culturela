
<?php
  include "conexao.php";

  $culturas = [];

  @$sql_result = mysqli_query($conexao, "SELECT nome FROM culture_data");

  while($row = mysqli_fetch_assoc($sql_result)){
    $culturas[] = $row['nome'];
  }
  
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title> Culturela - Seu portal sobre jardinagem</title>

</head>

<body style="background-color: #F7F4E6;">

  <div class="col-11 m-auto">
    <nav
      class="navbar col-11 mx-auto me-auto position-fixed shadow-sm p-3 mb-5 bg-body rounded  navbar-expand-lg navbar navbar-light bg-light p-1"
      style="z-index: 999;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"> <img src="img/logo1.png" alt="" width="75" height="75"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
            <li class="nav-item dropdown" style="width: 100px;">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Culturas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item"   href="frutiferas.php">Frutíferas</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="hortalicas.php">Hortaliças</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="ornamentais.php">Ornamentais</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown" style="width: 200 px;">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Descubra sobre
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="pequenos_espacos.php">Pequenos espaços</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="adubacao.php">Adubação</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="boas_praticas.php">Boas práticas</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown" style="width: 200 px;">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Conteúdos recomendados
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCt_mQUFwggqLNwXmE_iH5EA">Spagnhol Plantas</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="https://www.youtube.com/user/vidanojardim">Vida no Jradim</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="https://www.youtube.com/user/BlogGuindaste">Minhas Plantas</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contato.php">Contato</a>
            </li>
          </ul>
          <form class="d-flex" action="resultado.php" method="POST"> 
          <select class="form-select" name="pesquisar" aria-label="Default select example">
            <?php foreach($culturas as $cultura) :?>
            <option value="<?= $cultura ?>"> <?= $cultura ?></option>
            <?php endforeach; ?>
          </select>
            <button class="btn btn-outline-success"  type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </div>

  <br><br><br><br><br> <br> <br>

  <div class="text-center col-11 mx-auto shadow p-3 mb-5 bg-body rounded ">
    <img class="img-fluid" src="img/estampa.png" />
  </div>
  <br> <br>
  <ul>
  <div class="row g-0">
    <div class="col-md-4">
      <figure class="figure">
        <img src="img/bem-estar.jpg" class="figure-img img-fluid shadow p-3 mb-5 bg-body rounded" alt="...">
      </figure>
    </div>
    <div class="col-md-8">
      <br> <br>
      <div class="card-body col-8 mx-auto">
        <h4 class="card-title" style="font-size: 30px;"> <strong> Inspire-se </strong></h4>
        <p class="card-text" style="font-size: 20px;">Conosco você aprende a cutivar suas culturas favoritas e
          desenvolver seu lado em contato com meio ambiente. </p>

      </div>
    </div>
  </div>
  <br> <br>
  <div class="row g-0 col-11 mx-auto " style="flex-direction: row-reverse;">
    <div class="col-md-4">
      <figure class="figure">
        <img src="img/suculentas.jpg" class="figure-img img-fluid shadow p-3 mb-5 bg-body rounded" alt="...">
      </figure>
    </div>
    <div class="col-md-8">
      <br> <br>
      <div class="card-body col-8 mx-auto">
        <h4 class="card-title" style="font-size: 30px;"> <strong> Descubra </strong></h4>
        <p class="card-text" style="font-size: 20px;">Descubra mais sobre o que deseja plantar, aprenda novas técnicas
          e aprimore seus conhecimentos. </p>

      </div>
    </div>
  </div>

  <div class="row g-0">
    <div class="col-md-4">
      <figure class="figure">
        <img src="img/mudas.jpg" class="figure-img img-fluid shadow p-3 mb-5 bg-body rounded" alt="...">
      </figure>
    </div>
    <div class="col-md-8">
      <br>
      <br>
      <div class="card-body col-8 mx-auto">
        <h4 class="card-title" style="font-size: 30px;"> <strong> Produza </strong></h4>
        <p class="card-text" style="font-size: 20px;">O que é melhor do que colher os frutos que você mesmo
          plantou(literalmente)? Se beneficie com os resultados do seu cultivo. </p>

      </div>
    </div>
  </div>
  <br> <br> <br>
  <div class=" col-10 m-auto text-center">
    <p style="font-size: 30px;"> <strong>Nossa Missão</strong></p>
    <p style="font-size: 20px;"> Nossa missão é levar até você instruções e informações a cerca das principais
      cultivares que você pode desenvolver na sua casa e na sua horta.</p>
  </div>
  <br>
  <div id="carouselExampleIndicators" class="carousel slide col-6 m-auto" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/moça.jpg" class="d-block w-100 rounded" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/preparo.jpg" class="d-block w-100 rounded" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/muda.jpg" class="d-block w-100 rounded" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br><br><br>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <div class="b-example-divider"></div>
  <div class="container m-auto col-11">
    <footer style="background-color: #F7F4E6;" class="d-flex flex-wrap align-items-center py-3 my-4 border-top">
      <div class="col-md-100 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1 ">
          <img src="img/logo1.png" class="bi" width="60" height="50">
        </a>
        <span class="text-muted" style="width:400px;">&copy; 2021 Culturela - todos os direitos
          reservados</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex mx-auto">
        <li class="ms-3"><a class="text-muted" href="#"><i style="font-size: 30px; color: darkgreen;"
              class="fab fa-twitter"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i style="font-size: 30px; color: darkgreen;"
              class="fab fa-instagram"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i style="font-size: 30px; color: darkgreen;"
              class="fab fa-facebook-square"></i></a></li>
      </ul>
    </footer>
  </div>

  <br>
  <div class="b-example-divider"></div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>

</html>
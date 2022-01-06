
<?php
  include "conexao.php";

  $culturas = [];

  $sql_result = mysqli_query($conexao, "SELECT nome FROM culture_data");

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

  <title> Culturela - Informações sobre diversas culturas</title>



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

  <nav class=" col-11 mx-auto" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="adubacao.html"></a>Hortaliças</li>
    </ol>
  </nav>

  <div class="col-11 mx-auto">
  <h2 > Saiba como cultivar e produzir hortaliças. </h2><br>
  <p>As hortaliças estão presente no prato do brasileiro, em suas saladas, como temperos, no seu lanche e pratos principais. Montamos uma seleção de hortaliças fáceis de cultivar que irão dar mais sabor  a sua cozinha. Vamos lá?</p>
  <br><hr><br></div> 
    <div class="col-11 mx-auto">
    
    <?php
    include "conexao.php";
    
    $sql_result = mysqli_query($conexao, "SELECT * FROM culture_data WHERE id_categoria like '%2%' ");
    ?>	
    </div>
    <?php while($row = mysqli_fetch_assoc($sql_result)) :?>
    
    <div class="card mb-3 col-6 mx-auto">
    <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><h4><?= $row['nome'] ?> </h4></p>
        </div>
        <img class="card-img-top" src="<?= $row['url_img']  ?>"  height="600"  alt="Card image cap">

        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <p class="card-text"><?= $row['descricao'] ?></p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Época plantio</h5>
            <p class="card-text"><?= $row['epoca_de_plantio'] ?></p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Plantio</h5>
            <p class="card-text"><?= $row['plantio'] ?></p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Rega</h5>
            <p class="card-text"><?= $row['rega'] ?></p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Colheita/Floramento</h5>
            <p class="card-text"><?= $row['floramento_colheita'] ?></p>
        </div>
    </div><br>
    <?php endwhile; ?>
      
    <br> <br> <br>
    <div class=" col-10 m-auto text-center">
      <p style="font-size: 30px;"> <strong>Nossa Missão</strong></p>
      <p style="font-size: 20px;"> Nossa missão é levar até você instruções e informações a cerca das principais
        cultivares que você pode desenvolver na sua casa e na sua horta.</p>
    </div>
      <br>
     
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


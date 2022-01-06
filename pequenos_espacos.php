
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
      <li class="breadcrumb-item active" aria-current="page"><a href="boas_praticas.html"></a>Pequenos Espaços</li>
    </ol>
  </nav>
  <br><br> 

  <div class=" col-11 m-auto text-left">
      <p style="font-size: 30px;"> <strong>Aprenda a cultivar em pequenos espaços</strong></p>
      <p style="font-size: 20px;"> Na maioria das vezes o que nos impede de ter aquela hortinha, aquelas plantas que amamos é o espaço, porém, trago-lhes um artigo que vai te dar dicas de como utilizar aqueles espaço pequeno na sua casa ou apartamento para cultivar suas plantinhas. </p>
  </div>
<br><br>
  <div class=" text-center mx-auto">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/aOr-SKRX3yc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
<p>Seu navegador não possui Suporte para este recurso...</p> 
</iframe>
  </div>
  <br><br>
  <div class="col-11 m-auto text-left"> 

  <P> Mesmo com metragens reduzidas, é perfeitamente possível fazer um jardim prosperar. Em casas e apartamentos pequenos, o verde ganha força por meio de jardins verticais, vasos, hortas e até mesmo frutíferas: basta garantir à espécie o mínimo necessário para que ela cresça saudável e feliz! </P>

  <p> Confira abaixo quatro dicas para criar um jardim em espaços pequenos:</p>

  <p> <h3> 1. Escolha o local para a sua horta </h3> </p>

  
  <p> Vamos começar a sua horta?! Bem, primeiramente precisamos definir um local para a horta, se você mora em apartamento ou casa veja um espaço onde tenha uma incidência maior de luz solar direta.</p>
  
  <p> Se o apartamento ou casa tiver um espaço que tenha incidência de sol o dia todo, você poderá ter uma horta completa, com vegetais, ervas, hortaliças, leguminosas etc. Mas se o único espaço que você tem com luz direta for só por algumas horas, também é possível plantar ervas e temperos, mas lembre-se que o espaço precisa ter pelo menos de 2 a 4 horas de sol por dia. </p>

  <p> O espaço escolhido pode ser uma varanda, parapeito de janela, laje, entre outros, o importante é ter uma iluminação natural direta e começar a fazer sua horta! </p>
  <div class="img-fluid col-11">
  <img src="img/vertical.jpg" /><br><br> 
  </div>
  <div class="img-fluid">
  <img src="img/parapeito.jpg" />
  </div>
  <p> <h3> 2. Como plantar </h3> </p>

  <p> Agora que você já tem o espaço definido para fazer a sua horta, precisa escolher como plantar. Veja o espaço escolhido, pense em quais espécies gostaria de cultivar e qual modelo combina com a sua decoração. Vamos passar aqui alguns tipos de cultivo. </p>

  <p> <strong>Plantando na terra:</strong> essa opção é ideal para quem tem quintal com espaço, dessa forma as sementes ou as mudas são plantadas diretamente no solo. </p>

  <p> <strong>Vasos:</strong> os vasos são excelentes para quem não possui um espaço grande, eles têm de diversos tamanhos, cores, formatos e materiais e podem ser colocados tanto em casas como em apartamentos </p>

  <p> <strong>Embalagens recicladas:</strong> você também pode utilizar garrafas pet, caixas de leite, latinha de refrigerante, potes de vidro de alimentos em conserva, cano de pvc entre outros. Use a criatividade e aproveite para fazer sua horta sustentável e barata. </p>

  <p> <strong>Horta Vertical:</strong> a ideia da horta vertical é montá-la em espaços próximos ou na parede, você pode utilizar desde vasos de parede até garrafas pet para fazer a sua horta vertical, ela é muito utilizada em apartamentos que não tem espaço. </p>

  <p> <h3> 3. O que plantar na sua horta </h3> </p>

  <p> Você tem o espaço e já sabe como cultivar a sua horta, mas e agora o que plantar?
      Para quem está começando com o plantio é indicado começar com plantas mais fáceis de cultivo, como os temperos. Veja alguns tipos para você começar a sua horta <a href="hortalicas.php"> aqui.</a> </p>

  <p> <h3> 4. Como cuidar da sua horta </h3> </p>

  <p> Agora é hora de deixar sua horta mais bonita, para isso é muito importante a boa iluminação natural, pelo menos durante algumas horas por dia dependendo do tipo de espécie que você está plantando. Cuidado com as regas, cada tipo de planta tem uma quantidade ideal, algumas preferem mais e outras menos. O solo deve estar sempre bem adubado, podendo você mesmo fazer o seu próprio adubo. <a href="adubacao.php"> Veja aqui dicas para adubação </a> </p>
  </div>
        </div>
      </div>
    </div>
    <br> <br> <br>
    <div class=" col-10 m-auto text-center">
      <p style="font-size: 30px;"> <strong>Nossa Missão</strong></p>
      <p style="font-size: 20px;"> Nossa missão é levar até você instruções e informações a cerca das principais
        cultivares que você pode desenvolver na sua casa e na sua horta.</p>
    </div>
  
    <br><br><br><br>
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
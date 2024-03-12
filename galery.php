<?
include "header.php";
?>
<div class="container">

  <main>

    <div class="h1_main">
      <h1>Галерея</h1>
    </div>
      <div class="blocks row row-cols-2 row-cols-lg-3">
        <!-- начало 1ряда -->

        <div class="card col w26 el_block_3d">
          <img src="img/01.png" class="card-img-top" alt="...">
          
        </div>

        <div class="card col w26 el_block_3d">
          <img src="img/01.png" class="card-img-top" alt="...">
          
        </div>
        <div class="card col w26 el_block_3d">
          <img src="img/01.png" class="card-img-top" alt="...">
          
        </div>
</div>

        <!-- карусель -->
        <div id="carouselExampleCaptions" class="carousel slide slider" >
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/photo.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Метка первого слайда</h5>
                <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/photo.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Метка второго слайда</h5>
                <p>Некоторый репрезентативный заполнитель для второго слайда.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/photo.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Метка третьего слайда</h5>
                <p>Некоторый репрезентативный заполнитель для третьего слайда.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div>

      <div class="blocks row row-cols-2 row-cols-lg-3">

        <!-- начало 2 ряда -->
        <div class="card col w26 el_block_3d">
          <img src="img/01.png" class="card-img-top" alt="...">
          
        </div>
        <div class="card col w26 el_block_3d">
          <img src="img/01.png" class="card-img-top" alt="...">
          
        </div>
        <div class="card col w26 el_block_3d">
          <img src="img/01.png" class="card-img-top" alt="...">
          
        </div>
      </div>
  </main>
</div>
<?
include "footer.php";
?>
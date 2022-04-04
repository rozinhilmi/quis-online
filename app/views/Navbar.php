

<section class="mb-3">
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler first-button"  data-mdb-toggle="collapse"
        data-mdb-target="#navbarToggleExternalContent9"
        aria-controls="navbarToggleExternalContent9" aria-expanded="false"
        aria-label="Toggle navigation">
        <div class="animated-icon1"><span></span><span></span><span></span></div>
      </button>
    </div>
  </nav>
  <div class="collapse" id="navbarToggleExternalContent9">
    <div class="bg-light shadow-3 p-4">
      <button class="btn btn-link btn-block border-bottom m-0">Link 1</button>
      <button class="btn btn-link btn-block border-bottom m-0">Link 2</button>
      <button class="btn btn-link btn-block m-0">Link 3</button>
    </div>
  </div>
</section>

<div class="side-bar">
  <div class="logo">
    <h2>Name</h2>
  </div>
  <a href="<?= BASE_URL ?>/Home"><h4>Home</h4></a>
  <a href="<?= BASE_URL ?>/Ujian"><h4>Ujian</h4></a>
  <a href="<?= BASE_URL ?>/About"><h4>About</h4></a>
  <br>
  <center>
  <form action="" method="POST">
    <button type="submit" name="logout" class="btn btn-outline-dark">Logout</button>
  </form>
  </center>
  
</div>
<nav>
  <ul class="menu" id="menu">
    <li class="item"><a href="index.php">Strona główna</a></li>
    <li class="item"><a href="bio.php">Biografia</a></li>
    <li class="item"><a href="links.php">Linki</a></li>
    <li class="item"><a href="bibliography.php">Bibliografia</a></li>
    <li class="item"><a href="gallery.php">Galeria</a></li>
    <li class="item"><a href="quotes.php">Cytaty</a></li>
  </ul>
  <button id="btn_resp" class="resp_btn hamburger hamburger--emphatic">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
</nav>
<script>
  document.querySelector("#btn_resp").addEventListener("click", function () {
    const menu = document.querySelector("#menu");
    const hamburger = document.getElementById("btn_resp");
    menu.classList.toggle("active");
    hamburger.classList.toggle("is-active");
    document.body.classList.toggle("block");
  });
</script>

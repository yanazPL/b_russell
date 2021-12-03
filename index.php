<!DOCTYPE html>
<html lang="pl-PL">
  <?php
      include '_head.php' 
  ?>
  <body>
    <?php
        include '_navbar.php';
    ?>
    <main>
      <section class="home-container">
        <div class="who-is">
          <h1>Bertrand Russell<br />(1872-1970)</h1>
          <p>
            Brytyjski filozof, matematyk, logik. Laureat nagrody Nobla w
            dziedzinie literatury. Aktywista na rzecz pacyfizmu.
          </p>
        </div>
        <img src="assets/img/russell_home.jpg" id="home-image"  alt="Bertrand Russel with pipe"/>
      </section>
      <section class="things">
      <h2>JEDEN CYTAT</h2>
        <div class="one-thing">
          <q>
            Większość ludzi wolała by umrzeć, niż myśleć. I tak zresztą robią.
          </q>
        </div>
        <h2>JEDNA WYPOWIEDŹ</h2>
        <div class="one-thing">
          <iframe
            width="567"
            height="425"
            src="https://www.youtube.com/embed/Mw4MLcNsHhU"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <h2>JEDNA KSIĄŻKA</h2>
        <h3>Problemy Filozofii</h3>
        <div class="one-thing">
          
          <p>
            Problemy filozofii to zwięzłe wprowadzenie do filozofii. Nie wymaga
            żadnej wstępnej wsiedzy. Książka napisana jest w bardzo klarowny
            sposób, chociaż porusza wiele ważnych zagadnień. Russell koncentruje
            się głownie na teorii poznania.<br /><a
              href="http://sady.up.krakow.pl/fil.russell.problfil9.10.htm"
              >Przeczytaj fragment po polsku</a
            ><br/><a
              href="http://www.gutenberg.org/ebooks/5827"
              >Przeczytaj całość po angielsku</a>
          </p>
          <a href="https://lubimyczytac.pl/ksiazka/110605/problemy-filozofii"
            ><img src="assets/img/problemy_filozofii.jpg" alt="Book paperback"
          /></a>
        </div>
        <h2>JEDEN ARTYKUŁ</h2>
        <h3>On denoting</h3>
        <div class="one-thing"> 
          <p>
            Prawdopodobnie najważniejszy pojedyńczy artykuł Russella dla rozwoju
            filozofii. Zawiera opis jego teorii deskrypcji. Klasyczny tekst
            filozofii analitycznej.<br/><a
              href="http://sady.up.krakow.pl/fil.russell.denotowanie.htm"
              >Przeczytaj tłumaczenie</a
            ><br/><a
              href="https://www.uvm.edu/~lderosse/courses/lang/Russell(1905).pdf"
              >Przeczytaj oryginał</a>
          </p>
        </div>
      </section>
      <section class="social-media">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
      </section>
    </main>
    <?php
      include '_footer.php';
    ?>
  </body>
</html>

<footer>
  <div>
    <p>
      <!-- Liczba odwiedzin: <?php include '_counter.php';?> -->
    </p>
    <p>
      Jan Gregorczyk - Projekt zaliczeniowy UP
    </p>
  </div>
</footer>
<script>
  for(let link of document.querySelectorAll('#menu li a')){
    link.addEventListener('mouseover', function(){
      for(let elem of document.querySelectorAll('#menu li a')){
        elem.style.color = '#dddddd';
      }
      this.style.color = 'rgb(39, 39, 39)';
    })
    link.addEventListener('mouseout', function(){
      for(let elem of document.querySelectorAll('#menu li a')){
        elem.style.color = 'rgb(39, 39, 39)';
      }
    })
  }
</script>

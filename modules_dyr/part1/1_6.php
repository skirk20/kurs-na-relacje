<link rel="stylesheet" href="../../style/style.css">
<?php
include_once("../../sample/navigation_modules.html");
include_once("../module_1.php");
?>
<article class="modules-content">
<h2>Inspiratorium</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/UKPSXc-tJ6Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="attached">
    <a href="../../resources/dyrektor_transkrypcja.pdf" target="_blank"><img src="../../images/zasob_16.png" alt="ikona załącznika">transkrypcja tekstu</a>
</p>
    <div class = "back_next">
            <a href="1_5.php" class="back-button"> wróć</a>
            <a href="1_7.php" class="start-button">przejdź dalej</a>
            </div>
</article>
</section>
</section>
<script>
    
    function blure(){
        document.getElementsByClassName("btn")[5].style.color='black'
    }
    window.onload = blure();
</script>
<?php
include_once("../../sample/footer.html")
?>
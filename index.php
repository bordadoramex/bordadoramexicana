<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <link rel="shortcut icon" href="assets/img/logco-1.png"> 
    <?php include './inc/link.php'; ?>

<body id="container-page-index" >
    <?php include './inc/navbar.php'; ?>
   
    
 <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td  <div class="page-header">

  <!--banner de la empresa en el index-->
<script> 
//creo array de imágenes 
array_imagen = new Array(6) 
array_imagen[0] = new Image(120,41) 
array_imagen[0].src = "assets/img-products/DVC00784.JPG" 
array_imagen[1] = new Image(120,41) 
array_imagen[1].src = "assets/img-products/DVC00723.JPG" 
array_imagen[2] = new Image(120,41) 
array_imagen[2].src = "assets/img-products/DVC01043.JPG" 
array_imagen[3] = new Image(120,41) 
array_imagen[3].src = "assets/img-products/DVC00779.JPG" 
array_imagen[4] = new Image(120,41) 
array_imagen[4].src = "assets/img-products/DVC00727.JPG"
array_imagen[5] = new Image(120,41) 
array_imagen[5].src = "assets/img-products/DVC00725.JPG"

//creo el array de URLs 
array_url = new Array(6) 
array_url[0] = "http://www.salvarpatrimonio.org/" 
array_url[1] = "http://www.guiarte.com/" 
array_url[2] = "http://www.estiloymoda.com/" 
array_url[3] = "http://www.websitealbum.com/"
array_url[4] = "http://www.websitealbum.com/" 
array_url[5] = "http://www.websitealbum.com/" 

//variable para llevar la cuenta de la imagen siguiente 
contador = 0 

//función para rotar el banner 
function alternar_banner(){ 
    window.document["banner"].src = array_imagen[contador].src 
    window.document.links[0].href = array_url[contador] 
    contador ++ 
    contador = contador % array_imagen.length 
    setTimeout("alternar_banner()",3500) 
}
</script> 


<body onload="alternar_banner()"> 

<a href="#"><img src="#" name="banner" width=100% height=400px object-fit:cover; position: absolut; margin-top: 55px; border=0></a> 

    </body>                   
</div>

    
</head>

         
   <footer class="main-MVV">
            <TABLE BORDER=0>
  <TR>
      <TH><h1>Vision</h1></TH>
      <TH><h1>Mision</h1></TH>
      <TH><h1>Valores</h1></TH>
  </TR>
  <TR ALIGN=center>
      <TD><img src="assets/img/Misio.jpg" alt=""></TD>
      <TD><img src="assets/img/vision.jpg" alt=""></TD>
      <TD><img src="assets/img/Valore.jpg" alt=""></TD>
  </TR>
 
    <TR align="left">
      <TD> <p>Seremos la mejor opcion de productos bordados del mercado, atraves de ser la empresa mas competitiva en Diseño,Moda,Servicio,Calidad y Precio.<br>
                       Garantiza la mejor rentabilidad a los accionistas y ofrece las mejores condiciones <br>de trabajo del mercado a su personal.<p></TD>
      <TD ><p>Producir y comercializar bordados que satisfagan al cliente en sus nececidades,<br> con moda,diseño y servicio competitivo a nivel Internacional.
                       Ademas, se ha definido y se ha documentado sus valores(Objetivos) que son los siguientes:<p> </TD>
      <TD><ul style="border-style: none">
                           <li>Queremos ser competitivos a nivel en precio, calidad y servicio.</li>
                           <li>Todas las acciones que realicemos estarán dentro de un marco ético y legal.</li>
                           <li>Respetaremos a la persona y a su dignidad.</li>
                           <li>Exigiremos congruencia, perseverancia y consistencia en nuestros propsitos al actuar.</li>
                           <li>Fomentaremos el desarrollo de nuestros trabajadores.</li>
                       </ul>
                     </TD>
  </TR>
</TABLE>
    </footer>
     
     
        <div class="container">
 
          <h3>Novedades de Nuestra Tienda</h3>
      <link rel="stylesheet" href="swiper.min.css">
    <link rel="stylesheet" href="estilo.css">

<section id="new-prod-index">
   <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
             <div class="imgbox">
                <img src="imgind/40403.jpg" class="img__galeri">
             </div>
              <div class="detalles">
                 <h3>Bordadora <br> <span>web site</span></h3>
              </div>
          </div>
          <div class="swiper-slide">
            <div class="imgbox">
               <img src="imgind/40449.jpg" class="img__galeri">
            </div>
             <div class="detalles">
                <h3>Bordadora <br> <span>web site</span></h3>
             </div>
         </div>
         <div class="swiper-slide">
            <div class="imgbox">
               <img src="imgind/40421.jpg" class="img__galeri">
            </div>
             <div class="detalles">
                <h3>Bordadora <br> <span>web site</span></h3>
             </div>
         </div>
         <div class="swiper-slide">
            <div class="imgbox">
               <img src="imgind/40438.jpg" class="img__galeri" >
            </div>
             <div class="detalles">
                <h3>Bordadora <br> <span>web site</span></h3>
             </div>
         </div>
         <div class="swiper-slide">
            <div class="imgbox">
               <img src="imgind/40443.jpg"  class="img__galeri" >
            </div>
             <div class="detalles">
                <h3>Bordadora<br> <span>web site</span></h3>
             </div>
         </div>
         <div class="swiper-slide">
            <div class="imgbox">
               <img src="imgind/40458.jpg"  class="img__galeri">
            </div>
             <div class="detalles">
                <h3>Bordadora <br> <span>web site</span></h3>
             </div>
         </div>
         <div class="swiper-slide">
            <div class="imgbox">
               <img src="imgind/40441.jpg"  class="img__galeri">
            </div>
             <div class="detalles">
                <h3>Bordadora <br> <span>web site</span></h3>
             </div>
         </div> 
         <div class="swiper-slide">
            <div class="imgbox">
               <img src="imgind/40472.jpg" class="img__galeri">
            </div>
             <div class="detalles">
                <h3>Bordadora <br> <span>web site</span></h3>
             </div>
         </div>
         <div class="swiper-slide">
            <div class="imgbox">
               <img src="imgind/40476.jpg" class="img__galeri" >
            </div>
             <div class="detalles">
                <h3>Bordadora <br> <span>web site</span></h3>
             </div>
         </div>
         <div class="swiper-slide">
            <div class="imgbox">
               <img src="imgind/40498.jpg"  class="img__galeri" >
            </div>
             <div class="detalles">
                <h3>Bordadora <br> <span>web site</span></h3>
             </div>
         </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
      <script src="swiper.min.js"></script>
      <script>
        var swiper = new Swiper('.swiper-container', {
          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          coverflowEffect: {
            rotate: 70,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true,
          },
          pagination: {
            el: '.swiper-pagination',
          },
        });
      </script>
     
   </section>
 </div>
    <?php include './inc/footer.php'; ?>

</body>
</html>
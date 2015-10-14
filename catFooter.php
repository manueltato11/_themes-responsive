<!-- Begin Subtitulos con las categorias Mod -->
   
   <h1 class="demot-float-left-dark" id="tag-cloud-caption"><a name="categorias">
      <span id="los">LOS</span>
      <span id="mejores">MEJORES CARTELES</span>
      <span id="de">DE</span>
   </a>
   </h1>

   <h2 class="demot-float-left-dark" id="tag-cloud">
   <?php

   global $rewrite;

   // nos conectamos con la base de datos
   $conn = mysql_connect('localhost', 'manuel11_AdmiCar', 'k1uRdZf)6xwp');
   if (!$conn or !mysql_select_db('manuel11_carteles2013', $conn)) die('cannot connect to db');

   // prepara las categorias para visualizarlas

   $query = mysql_query("SELECT  * FROM  `tentego_img_cat` ORDER BY  `tentego_img_cat`.`name` ASC ");
   while($cat = mysql_fetch_array($query)) 
   {
         echo '<strong><a href="'.$rewrite->categories($cat['id'],$rewrite->changeSigns($cat['name'])).'" title="Carteles y Desmotivaciones de '.$cat['name'].'" rel="tag">'.$cat['name'].'</a> </strong>';
    }
   ?>
   </h2>
<!-- End Subtitulos con las categorias Mod -->

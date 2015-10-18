<?php
// proteccion ip en segundos
$counter_expire = 600;

// ignorar los agentes de la lista
$counter_ignore_agents = array('bot', 'bot1', 'bot3');

// ignorar esta lista de ip
$counter_ignore_ips = array('127.0.0.50', '127.0.0.30');

// configuracion de la base de datos
$counter_host = "localhost";
$counter_user = "root";
$counter_password = "";
$counter_database = "manuel11_carteles2013";

// obteniendo informacion basica
$counter_agent = $_SERVER['HTTP_USER_AGENT'];
$counter_ip = $_SERVER['REMOTE_ADDR']; 
$counter_time = time();

// conectandonos con la base de datos
$counter_connected = true;
$link = mysqli_connect($counter_host, $counter_user, $counter_password, $counter_database);
if (!$link) 
{
    // si no se puede conectar con la base de datos
    $counter_connected = false;
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    exit;
}

if ($counter_connected == true) 
{
   $ignore = false; 
   
   // obteniendo la informacion de counter (contadores)
   $sql = "SELECT * FROM counter_values LIMIT 1";
   $res = mysqli_query($link, $sql);
   
   // llevar en vacio
   if (mysqli_num_rows($res) == 0)
   {      
      $sql = "INSERT INTO `counter_values` (`id`, `day_id`, `day_value`, `yesterday_id`, `yesterday_value`, `week_id`, `week_value`, `month_id`, `month_value`, `year_id`, `year_value`, `all_value`, `record_date`, `record_value`) VALUES ('1', '" . date("z") . "',  '1', '" . (date("z")-1) . "',  '1', '" . date("W") . "', '1', '" . date("n") . "', '1', '" . date("Y") . "',  '1',  '1',  NOW(),  '1')"; //          |Se cambio por 1 << estaba 0
      mysqli_query($link, $sql);

      // cargar los ajustes
      $sql = "SELECT * FROM counter_values LIMIT 1";
      $res = mysqli_query($link, $sql);
      
      $ignore = true;
   }   
   $row = mysqli_fetch_assoc($res);
   
   $day_id = $row['day_id'];
   $day_value = $row['day_value'];
   $yesterday_id = $row['yesterday_id'];
   $yesterday_value = $row['yesterday_value'];
   $week_id = $row['week_id'];
   $week_value = $row['week_value'];
   $month_id = $row['month_id'];
   $month_value = $row['month_value'];
   $year_id = $row['year_id'];
   $year_value = $row['year_value'];
   $all_value = $row['all_value'];
   $record_date = $row['record_date'];
   $record_value = $row['record_value'];
   
   
   // comprobar ignorar la lista
   $length = sizeof($counter_ignore_agents);
   for ($i = 0; $i < $length; $i++)
   {
      if (substr_count($counter_agent, strtolower($counter_ignore_agents[$i])))
      {
         $ignore = true;
         break;
      }
   }
   
   $length = sizeof($counter_ignore_ips);
   for ($i = 0; $i < $length; $i++)
   {
      if ($counter_ip == $counter_ignore_ips[$i])
      {
         $ignore = true;
         break;
      }
   }

   // eliminar ip gratis
   if ($ignore == false)
   {
      $sql = "DELETE FROM counter_ips WHERE unix_timestamp(NOW())-unix_timestamp(visit) >= $counter_expire"; 
      mysqli_query($link, $sql);      
   }
      
   // comprobar la entrada
   if ($ignore == false)
   {
      $sql = "update counter_ips set visit = NOW() where ip = '$counter_ip'";
      mysqli_query($link, $sql);
      
      if (mysqli_affected_rows($link) > 0)
      {
         $ignore = true;                                 
      }
      else
      {
         // insertar direccion ip
         $sql = "INSERT INTO counter_ips (ip, visit) VALUES ('$counter_ip', NOW())";
         mysqli_query($link, $sql); 
      }       
   }
   
   // usuarios online?
   $sql = "SELECT * FROM counter_ips";
   $res = mysqli_query($link, $sql);
   $online = mysqli_num_rows($res);
      
   // añadir visita
   if ($ignore == false)
   {          
      // ayer
      if ($day_id == (date("z")-1)) 
      {
         $yesterday_value = $day_value; 
      }
      else
      {
         if ($yesterday_id != (date("z")-1))
         {
            $yesterday_value = 0; 
         }
      }
      $yesterday_id == (date("z")-1);
      
      // el dia actual
      if ($day_id == date("z")) 
      {
         $day_value++; 
      }
      else 
      {
         $day_value = 1;
         $day_id = date("z");
      }
      
      // esta semana
      if ($week_id == date("W")) 
      {
         $week_value++; 
      }
      else 
      { 
         $week_value = 1;
         $week_id = date("W");
      }
      
      // este mes
      if ($month_id == date("n")) 
      {
         $month_value++; 
      }
      else 
      {
         $month_value = 1;
         $month_id = date("n");
      }
      
      // este año
      if ($year_id == date("Y")) 
      {
         $year_value++; 
      }
      else 
      {
         $year_value = 1;
         $year_id = date("Y");
      }
      
      // total de visitas
      $all_value++;
         
      // record
      if ($day_value > $record_value)
      {
         $record_value = $day_value;
         $record_date = date("Y-m-d H:i:s");
      }
   // se actualizan los datos
      $sql = "UPDATE counter_values SET day_id = '$day_id', day_value = '$day_value', yesterday_id = '$yesterday_id', yesterday_value = '$yesterday_value', week_id = '$week_id', week_value = '$week_value', month_id = '$month_id', month_value = '$month_value', year_id = '$year_id', year_value = '$year_value', all_value = '$all_value', record_date = '$record_date', record_value = '$record_value' WHERE id = 1";
      mysqli_query($link, $sql);      
   }    

?>
</div>
<!-- End container-fluid -->
<!-- Begin Footer -->
<div class="secondary col-md-12 col-sm-12 col-xs-12">
   <div class="panel panel-primary">
     <div class="panel-body">
     <div id="vote_response"></div>
       <div class="text-center" id="footer">
         <div class="furniture">
              <?php echo "Hoy: ".$day_value." visitas"." | "."Esta Semana: ".$week_value." visitantes"." | "."Total Visitantes: ".$all_value;?><br/>
                  <?php echo "Usuarios Online: ".$online. " | "; ?>
                  <!-- Consulta de usuarios registrados-->
                  <?php
                  $sql="SELECT * FROM tablicacms_users"; 
                  $result=mysql_query($sql); 
                  $num=mysql_num_rows($result); 
                  echo "Usuarios Registrados: ".$num;  
                  ?>
                  <!-- Consulta de Carteles creados-->
                  <?php
                  $sql="SELECT * FROM tentego_img"; 
                  $result=mysql_query($sql); 
                  $num=mysql_num_rows($result); 
                  echo " | Carteles Creados: ".$num;  
              ?>
              <br/>
              <?php echo "Record del Sitio: ".$record_value.", "; ?> (<?php echo date("d.m.Y", strtotime($record_date)) ?>)

                 <script type="text/javascript" id="_waugfg" async>var _wau = _wau || []; _wau.push(["small", "9ao3j6g4n4yd", "gfg"]);
                  (function() {var s=document.createElement("script"); s.async=true;
                  s.src="http://widgets.amung.us/small.js";
                  document.getElementsByTagName("head")[0].appendChild(s);
                  })();</script>
            <div class="links">
               <a href="<?php echo $rewrite->contact; ?>">Contactenos</a>
               <img src="<?php echo $page->host(); ?>_themes/<?php echo $theme; ?>/img/navigation_symbol.png" alt="symbol" />
               <a href="<?php echo $rewrite->rules; ?>">Reglamentos del Sitio</a>
               <img src="<?php echo $page->host(); ?>_themes/<?php echo $theme; ?>/img/navigation_symbol.png" alt="symbol" />
               <a href="<?php echo $rewrite->mapadelsitio; ?>">Mapa del Sitio</a>      
            </div>
            <span class="copyrights">Copyright © Created by <a href="https://twitter.com/manueltato11">Manuel Fernando</a></span>
         </div>
      </div>  
   </div>
</div> <!-- END col-md-4-->
<!-- End Footer -->

<!-- <script type="text/javascript" async src="http://code.jquery.com/jquery-latest.js"></script> -->
<script type="text/javascript" async src="<?php echo $page->host(); ?>_themes/<?php echo $theme; ?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script type="text/javascript" async src="<?php echo $page->host(); ?>_themes/<?php echo $theme; ?>/js/rrssb.min.js"></script>
</body>
</html>

<?php
}
?>
<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<?php
    function mensaje($mensaje,$pagina,$imagen){

      echo"
      <script> 
      $(document).ready(function(){
      $('#modal').modal();});
        </script>
        ";

    	echo" 
    	<div class='modal' tabindex='-1' id='modal' data-backdrop='static' data-keyboard='false'>
  		<div class='modal-dialog'>
    	<div class='modal-content'>
      	
      	<div class='modal-header>
        	<h5 class='modal-title' align='center'></h5>
        </div>
     		

         <div class='modal-body'>
         	<center>
        	<img src='img/".$imagen."' width='20%'>
          	<b>".$mensaje."</b></center>
      	</div>

      
        <div class='modal-footer'>
          <button type='button' class='btn btn-primary' data-dismiss='modal' onclick='regresarAnterior()'>Cerrar</button>
        
        </div>
      </div>
    </div>
  </div>

  <script>
  function regresarAnterior(){
    window.open('".$pagina."','_self');}
    </script>
";

    }
?>
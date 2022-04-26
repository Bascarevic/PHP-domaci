<?php  require_once 'delovi/vrh.php';
require_once 'delovi/navbar.php';?>
 <br>
   <div class="row" >
    <div class="col-md-4">
    <select name="genre_list" id="genre_list"  class="form-control">
        <option value="Akcija">Akcija</option>
        <option value="Drama">Drama</option>
        <option value="Animirani film">Animirani film</option>
        <option value="Triler">Triler</option>
        <option value="Komedija">Komedija</option>
        <option value="Porodicni">Porodicni</option>
        <option value="Horor">Horor</option>
    </select>
    </div>
    <div class="col-md-4">
     <button type="button" name="search" id="search" class="btn btn-info">Search</button>
    </div>
   </div>
 
  <br> <br>
  <table id="tabela" class="table">
      <thead>
          <tr>
              <th>Naziv</th>
              <th>Opis</th>
              <th>Zanr</th>
          </tr>
        </thead>
        <tbody id="tbody">

        </tbody>
  </table>
  <?php require_once 'delovi/dno.php'; ?>


<script>
var table = document.getElementById('tbody');

$(document).ready(function(){
  $('#search').click(function(){
   //  var select = document.getElementById('genre_list');
   //  var genre = select.options[select.selectedIndex].value;
     var genre = $('#genre_list').find(":selected").text();//moze i jquery!
     console.log(genre);
    if(genre!=''){
    $.ajax({
        url:"pretragaPoZanru.php",
        method:"POST",
        data:{genre:genre},
        dataType:"JSON",
        success: function(data){
            //var text = JSON.parse(this.data);
            /*
          $('#molimte').text(data[0].naziv); //MORA SVAKI ELEMENT POSEBNO
          console.log("Proba");
          console.log(data[0].id); 
          console.log(data.length);//ZAPAMTI!
          */
         // ubaciUTabelu(data);
        while(table.firstChild){//ovako cistimo tabelu
            table.removeChild(table.firstChild);
        }
        //ovo moze i u posebnu f-ju
         for(var i=0;i<data.length;i++){
             var row = `<tr>
							<td>${data[i].naziv}</td>
							<td>${data[i].opis}</td>
							<td>${data[i].zanr}</td>
					  </tr>`;
            table.innerHTML+=row;

         }
  
        },
    });
  }
  });
});
</script>
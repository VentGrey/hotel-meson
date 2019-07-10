$(document).ready(function() {
  var $Pa = $("#P1");
  var $Pb = $("#P2");
  var $Pc = $("#P3");
  var $Pd = $("#P4");

  var url = "administracion/precio_tipo.php";
  var serial="";
  $.ajax({
    type: 'POST',
    url: url,
    dataType: 'json',
    success: function(data)
    {
      $Pa.empty();
      $Pa.append('<span class="main-subtext-price" id="p1">'+data[0].precio+'</span>');
      $Pb.empty();
      $Pb.append('<span class="main-subtext-price" id="p1">'+data[1].precio+'</span>');
      $Pc.empty();
      $Pc.append('<span class="main-subtext-price" id="p1">'+data[2].precio+'</span>');
      $Pd.empty();
      $Pd.append('<span class="main-subtext-price" id="p1">'+data[3].precio+'</span>');

      //alert(data[0].precio);
      //console.log(data);
    }
  });
});

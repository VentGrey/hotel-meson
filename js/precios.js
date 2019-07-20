$(document).ready(function() {
  var $Pa = $("#p1");
  var $Pb = $("#p2");
  var $Pc = $("#p3");
  var $Pd = $("#p4");
  var $Ci = $("#checkin");
  var $Co = $("#checkout");


  var url = "administracion/precio_tipo.php";
  var serial="";
  $.ajax({
    type: 'POST',
    url: url,
    dataType: 'json',
    success: function(data)
    {
      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth()).padStart(2, '0');
      $Pa.empty();
      $Pa.append('<span class="main-subtext-price" id="p1">' + '$' + data[0].precio + '-MXN' + '</span>');
      $Pb.empty();
      $Pb.append('<span class="main-subtext-price" id="p1">' + '$' + data[1].precio + '-MXN' + '</span>');
      $Pc.empty();
      $Pc.append('<span class="main-subtext-price" id="p1">' + '$' + data[2].precio + '-MXN' + '</span>');
      $Pd.empty();
      $Pd.append('<span class="main-subtext-price" id="p1">' + '$' + data[3].precio + '-MXN' + '</span>');
      
      if( dd == '19' && mm == '06') {
        $Pa.empty();
        $Pa.append('<span class="main-subtext-price" id="p1">' + '$' + '5000' + '-MXN' + '</span>');
      }
      
      //alert(data[0].precio);
      //console.log(data);
    }
  });
});

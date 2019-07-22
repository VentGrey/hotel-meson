$(document).ready(function() {
    var $Pa = $("#p1");
    var $Pb = $("#p2");
    var $Pc = $("#p3");
    var $Pd = $("#p4");
    // Por si luego podemos implementar el precio de checkin y checkout
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
            let today = new Date();
            let dd = String(today.getDate()).padStart(2, '0');
            let mm = String(today.getMonth()).padStart(2, '0');

            $Pa.empty();
            $Pa.append('<span class="main-subtext-price" id="p1">' + '$' + data[0].precio + '-MXN' + '</span>');
            $Pb.empty();
            $Pb.append('<span class="main-subtext-price" id="p1">' + '$' + data[1].precio + '-MXN' + '</span>');
            $Pc.empty();
            $Pc.append('<span class="main-subtext-price" id="p1">' + '$' + data[2].precio + '-MXN' + '</span>');
            $Pd.empty();
            $Pd.append('<span class="main-subtext-price" id="p1">' + '$' + data[3].precio + '-MXN' + '</span>');

            // Mostrar precios por temporada de forma dinámica

            // Temporadas altas por mes
            // Enero
            if (mm == '01' && (dd == '01' || dd == '02' || dd == '03'
                               || dd == '04' || dd == '05' || dd == '06' || dd =='07')) {
                $Pa.empty();
                $Pa.append('<span class="main-subtext-price" id="p1">' + '$' + '5000' + '-MXN' + '</span>');
                // Febrero
            } else if (mm == '02' && (dd == '01' || dd == '02' || dd == '03' || dd == '04' || dd == '27' || dd == '28' || dd == '29')) {
                // Modificar precios aquí



                // Marzo
            } else if (mm == '03' && (dd == '01' || dd == '02' || dd == '03' || dd == '04' || dd == '05' || dd == '15' || dd == '16' || dd == '17' || dd == '18')) {
                // Modificar precios aquí


                // Abril
            } else if (mm == '04' && (dd == '12' || dd == '13' || dd == '14' || dd == '15' || dd == '16' || dd == '17' || dd == '18' || dd == '19' || dd == '20' || dd == '21' || dd == '22' || dd == '23' || dd == '24' || dd == '25' || dd == '26' || dd == '27' || dd == '28' || dd == '29' || dd == '30')) {

                // Mayo
            } else if (mm == '05' && (dd == '01' || dd == '10' || dd == '11' || dd == '12' || dd == '13')) {

                // Julio
            } else if (mm == '07' && (dd == '05' || dd == '06' || dd == '07' || dd == '08' || dd == '09' || dd == '10' || dd == '11' || dd == '12' || dd == '13' || dd == '14' || dd == '15' || dd == '16' || dd == '17' || dd == '18' || dd == '19' || dd == '20' || dd == '21' || dd == '22' || dd == '23' || dd == '24' || dd == '25' || dd == '26' || dd == '27' || dd == '28' || dd == '29' || dd == '30' || dd == '31')) {

                // Agosto
            } else if (mm == '08' && (dd == '01' || dd == '02' ||dd == '03' ||dd == '04' ||dd == '05' ||dd == '06' ||dd == '07' ||dd == '08' ||dd == '09' ||dd == '10' ||dd == '11' ||dd == '12' ||dd == '13' ||dd == '14' ||dd == '15' ||dd == '16' ||dd == '17' || dd == '18')) {

                // Septiembre
            } else if (mm == '09' && (dd == '14' || dd == '15' || dd == '16' || dd == '17')) {

                // Noviembre
            } else if (mm == '11' && (dd == '02' || dd == '03' || dd == '04' || dd == '05' || dd == '16' || dd == '17' || dd == '18' || dd == '19')) {

                // Diciembre
            } else if (mm == '12' && (dd == '20' || dd == '21' || dd == '22' || dd == '23' || dd == '24' || dd == '25' || dd == '26' || dd == '27' || dd == '28' || dd == '29' || dd == '30' || dd == '31')) {

            } else {

            }

            //alert(data[0].precio);
            //console.log(data);
        }
    });
});

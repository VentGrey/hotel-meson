function compare() {
    let start_date = document.getElementById("checkIn").value;
    let end_date = document.getElementById("checkOut").value;

    if ((new Date(start_date).getTime() < new Date(end_date).getTime())) {
        // Código de comparación aquí adentro
    }
}

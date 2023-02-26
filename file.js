function reda() {
    var table = document.getElementById("myTable");
    if (table.style.visibility === "hidden") {
        table.style.visibility = "visible";
    } else {
        table.style.visibility = "hidden";
    }
}
function afficherHeure() {
    var maintenant = new Date();
    var heure = maintenant.getHours();
    var minute = maintenant.getMinutes();
    var seconde = maintenant.getSeconds();
    heure = ajouterZeros(heure);
    minute = ajouterZeros(minute);
    seconde = ajouterZeros(seconde);
    document.getElementById('heure').innerHTML = heure + ":" + minute + ":" + seconde;
}
function ajouterZeros(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
setInterval(afficherHeure, 1000);

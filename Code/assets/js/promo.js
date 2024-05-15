function updatePromos() {
    var selectEcole = document.getElementById("id_ecole");
    var idEcole = selectEcole.value;
    
    var selectPromo = document.getElementById("id_promo");
    selectPromo.innerHTML = "";

    if (idEcole !== "") {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var promos = JSON.parse(xhr.responseText);
                for (var i = 0; i < promos.length; i++) {
                    var option = document.createElement("option");
                    // Accéder aux propriétés id et name de chaque objet
                    option.value = promos[i].id;
                    option.text = promos[i].name;
                    selectPromo.appendChild(option);
                }
            }
        };
        xhr.open("GET", "controllers/promo.php?id_ecole=" + idEcole, true);
        xhr.send();
    }
}

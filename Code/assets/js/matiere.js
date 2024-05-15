function updateMatiere() {
    var selectEcole = document.getElementById("id_ecole");
    var idEcole = selectEcole.value;
    
    var selectMatiere = document.getElementById("id_matiere");
    selectMatiere.innerHTML = "";

    if (idEcole !== "") {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var matieres = JSON.parse(xhr.responseText);
                for (var i = 0; i < matieres.length; i++) {
                    var option = document.createElement("option");
                    // Accéder aux propriétés id et name de chaque objet
                    option.value = matieres[i].id;
                    option.text = matieres[i].name;
                    selectPromo.appendChild(option);
                }
            }
        };
        xhr.open("GET", "controllers/matiere.php?id_ecole=" + idEcole, true);
        xhr.send();
    }
}

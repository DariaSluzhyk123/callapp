let x = document.getElementById('liczba').value;
function myFunkcja() {
    if (x == "") {
        document.getElementById("demo").style.color = "red";
        document.getElementById("demo").innerHTML = "Nie podałeś"
        document.getElementById("liczba").style.backgroundColor = "yellow";
        document.getElementById("liczba").focus();
    }
    else if (isNaN(x)) {
        document.getElementById("liczba").style.backgroundColor = "white";
        document.getElementById("liczby").value = x;
        document.getElementById("demo").innerHTML = "";
    } else {
        document.getElementById("demo").innerHTML = "Napisałeś" + x + "to nie jest liczba";
        alert("Nie podałeś liczby");
        document.getElementById("liczba").style.backgroundColor = "yellow";
        document.getElementById("liczba").select();
    }
}

function oblicz2() {
    let suma = 0;
    /*
    if (document.getElementById("1").checked) suma += parseInt(document.getElementById("1").value);
    if (document.getElementById("5").checked) suma += parseInt(document.getElementById("5").value);
    if (document.getElementById("3").checked) suma += parseInt(document.getElementById("3").value);
    if (document.getElementById("7").checked) suma += parseInt(document.getElementById("7").value);

    document.getElementById("suma").value =suma;
    */
    for (let i = 1; i <= 4; i++) {
        if (document.getElementById(`l${i})`).checked) suma += parseInt(document.getElementById(`l${i}`).value);
        document.getElementById("suma").value = suma;
    }
}

function plec(){
    
    let plecValue;
    if (document.getElementById("d1").checked){
        plecValue = "kobieta";
    }
    else if (document.getElementById("d2").checked){
        plecValue = "mężczyzna";
    }
    document.getElementById("ple").textContent = plecValue;
}

function pobierz(){
    let ddl = document.getElementById("opcja")
    let selectedValue = ddl.options[ddl.selectedIndex].value;
    alert(`Zaznaczono ${selectedValue}`);
    document.body.style.backgroundColor = `${selectedValue}`;
    /*
    if (selectedValue == "Weib"){
        document.body.style.backgroundColor = "White";
    } else if (selectedValue == "Silber"){
        document.body.style.backgroundColor = "#CAC8D4";
    } else if (selectedValue == "Anthrazit"){
        document.body.style.backgroundColor = "#2A1E5B";
    } else if (selectedValue == "Braun"){
        document.body.style.backgroundColor = "#695249";
    }
    */
}
function owocki(){
    let imie = document.getElementById("imie").value;
    let selectedMy = [];
    let owoce = document.getElementById("owoce");
    for (let option of owoce.options)
    {
        if (option.selected) {
            selectedMy.push(option.value);
        }
    }
    document.getElementById("dem").style.color ="purple";
    document.getElementById("dem").style.fontSize="35px";
    document.getElementById("dem").innerHTML = `Owoce ${selectedMy} dostarczę dla ${imie}`;
}
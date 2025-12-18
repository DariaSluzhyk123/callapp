const liczba = document.getElementById('liczba');

if (!isNaN(liczba))
{
    alert("Nie podałeś liczby");
} else{
    const liczby = document.getElementById('liczby');
    liczba.value = liczby.value;
}
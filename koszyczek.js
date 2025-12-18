/*document.getElementById('dodaj').addEventListener('click', functiom(){


    const nazwa = document.getElementById('nazwa');
    const cena = parseFloat(document.getElementById('cena'));
    const ilosc = parseFloat(document.getElementById('ilosc'));

    if (nazwa || isNaN(cena) || isNaN(ilosc)) {
        alert("Uzupełnij pola");

    }
    const wartosc = cena * ilosc;
    const tbody = document.querySelector("#table tbody");
    const tr = document.querySelector("tr");
    tr.innerHTML = `
    <td>${nazwa}</td>
    <td>${cena.toFixed(2)}</td>
    <td>${ilosc}</td>
    <td>${wartosc.toFixed(2)}</td>
    <td><button class="usun">X</button></td>
    `;
    tbody.appendChild(tr);
    przeliczSume();
});
function przeliczSume(){
    const wiersze = document.getElementById
}
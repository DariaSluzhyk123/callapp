let pesel = prompt("Podaj numer pesel","08222407120")
let pesal =pesel.lenght;

if (pesal == 11 ) {
    alert("Za krótki");
}
   else if (isNaN(pesel) == true){
    alert("Nie jest peselem");
   }
    else{
        const peselArray = pesel.split("");
        const wagi = [1,]
        let suma = fir*1 + sec * 3 + third*7+fou*9+fif*1+sic*3+sev*7+eig*9+nine*1+ten*3;
        let x = suma %10;
        let cyfra = (x==0) ? 0: 10-x;
        let rok = (fir +sec > "25") ? "19"+fir+sec;
        let mie = (third+fou)%20;
        let stu = (third+fou)/20;
        let dzi = pesel.slice(4,6);
        let rok1;
        if (stu == 0) rok1 = "19"+fir+sec;{
        }
        else if(stu == 1) rok1 = "20"+fir+sec;
        document.getElementById("datauro").innerHTML="Pesel: "+pesel+"<br><br> Data urodzenia "+rok+"."+mie+"."+dzi;
        document.getElementById("plec").innerHTML= (ten%2==0)?"To kobieta":"To mężczyzna";
    }
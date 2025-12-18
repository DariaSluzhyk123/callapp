let m = parseInt(prompt("Podaj liczbe z zakresu 1900-2099"));
let p = 24;
let q = 5;
    if ( m >= 1900 && m <= 2099) {
       let a = m % 19;
       let b = m % 4;
       let c = m % 7;
       let d = (19*a+24)%30;
       let e = (2*b +4*c+6*d+5)% 7;
       let wielkanoc = d+e;
       wielkanoc += 22;
       if (wielkanoc > 31){
        wielkanoc -= 31;
        if (wielkanoc >25){
            wielkanoc -= 7;
        }
        document.getElementById("za1").innerHTML +="Wielkanoc będzie "+wielkanoc+" kwietnia";
       } 
       else document.getElementById("za1").innerHTML +="Wielkanoc będzie"+wielkanoc+" marca";
    }
    else document.getElementById("za1").innerHTML +="Podałeś błędny rok"+m;

let pesel = prompt("Podaj numer pesel","08222407120")
let pesal =pesel.lenght;

if (pesal == 11 ) {
    alert("Za krótki");
}
   else if (isNaN(pesel) == true){
    alert("Nie jest peselem");
   }
    else{
        let fir = pesel.charAt(0);
        let sec = pesel.charAt(1);
        let third = pesel.charAt(2);
        let fou = pesel.charAt(3);
        let fif = pesel.charAt(4);
        let sic = pesel.charAt(5);
        let sev = pesel.charAt(6);
        let eig = pesel.charAt(7);
        let nine = pesel.charAt(8);
        let ten = pesel.charAt(9);
        let ele = pesel.charAt(10);
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
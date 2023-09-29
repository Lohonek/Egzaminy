const btn = document.querySelector('#btn')

btn.addEventListener('click', oblicz)

function  oblicz(){
    const ilosc = document.querySelector('#ilosc').value
    const upust = document.querySelector('#upust').checked
    const wynik = document.querySelector('#wynik')
    let cena

    if(ilosc <= 50){
        cena = ilosc * 2
    }else if(ilosc >= 51){
        cena = ilosc * 1
    }

    if(upust){
        cena = cena * 0.8
    }

    wynik.innerHTML = "Koszt ogłoszen: " + cena + "PLN"
}
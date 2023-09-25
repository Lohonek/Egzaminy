const btn = document.querySelector('#btn');

btn.addEventListener('click', oblicz)


function oblicz(){
    const wynik = document.querySelector('#wynik')

    const wartoscx = document.querySelector('#wartoscx').value
    const wartoscy = document.querySelector('#wartoscy').value
    const pow = wartoscx * wartoscy;
    const cena = pow * 8;

    wynik.innerHTML = cena + 'zl'

}
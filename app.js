const btn = document.querySelector('#btn');

btn.addEventListener('click', oblicz)


function oblicz(){
    const wynik = document.querySelector('#wynik')
    const wpow = document.querySelector('#wpow')

    const x = document.querySelector('#x').value
    const y = document.querySelector('#y').value
    const pow = (x * 2 * 2.7) + (y * 2 * 2.7);
    const cena = pow * 8;

    wpow.innerHTML = 'Powierzchnia calkowita scian: ' + pow + 'm2';
    wynik.innerHTML = 'Koszt malowania: ' + cena + 'zl'

}
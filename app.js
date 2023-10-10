const btn = document.querySelector('#btn')

btn.addEventListener('click', function(){
    const check = document.querySelector('#check').checked
    const ilekm = document.querySelector('#ilekm').value
    const wynik = document.querySelector('#wynik')
    
    if(check){
        wynik.textContent = 'Dowieziemy Twoją pizzę za darmo'
    }else{
        wynik.textContent = `Dowóz będzie Cię kosztował ${ilekm * 2} zł`
    }
})
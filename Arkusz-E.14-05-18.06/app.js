const btn = document.querySelector("#btn");

btn.addEventListener("click", oblicz);

function oblicz() {
  const ilegosci = document.querySelector("#ilegosci").value;
  const poprawiny = document.querySelector("#poprawint").checked;
  const wynik = document.querySelector("#wynik");

  let cena;

  cena = ilegosci * 100;

  if (poprawiny) {
    cena = cena * 1.3;
  }

  wynik.innerHTML = `Koszt Twojego wesela to ${cena} złotych`;
}

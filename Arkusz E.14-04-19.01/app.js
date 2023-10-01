const btn = document.querySelector("#btn");

btn.addEventListener("click", oblicz);

function oblicz() {
  const number = document.querySelector("#number").value;
  const waga = document.querySelector("#waga").value;

  const wynik = document.querySelector("#wynik");

  let cena;

  if (number == "1") {
    cena = waga * 5;
  } else if (number == "2") {
    cena = waga * 7;
  } else if (number == "3") {
    cena = waga * 6;
  }

  if (cena === undefined) {
    wynik.innerHTML = `Koszt zamówienia wynosi 0 zł`;
  } else {
    wynik.innerHTML = `Koszt zamówienia wynosi ${cena} zł`;
  }
}

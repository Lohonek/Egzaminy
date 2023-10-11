const btn = document.querySelector("#btn");
btn.addEventListener("click", oblicz);

function oblicz() {
  const wynik = document.querySelector("#wynik");

  const i1 = document.querySelector("#pierwszy").value;
  const i2 = document.querySelector("#drugi").value;
  const i3 = document.querySelector("#trzeci").value;
  let srednia;

  if (i1.length == 0 || i2.length == 0 || i3.length == 0) {
    alert("wpisz poprawne dane");
  } else {
    srednia = (parseFloat(i1) + parseFloat(i2) + parseFloat(i3)) / 3;
    wynik.innerHTML = `Średnia ocen: ${srednia}`;
  }
}

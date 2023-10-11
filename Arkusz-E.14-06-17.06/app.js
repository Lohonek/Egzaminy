const btn = document.querySelector("#btn");

btn.addEventListener("click", oblicz);

function oblicz() {
  const pow = document.querySelector("#pow").value;
  const wynik = document.querySelector("#wynik");
  let cena;

  if (document.querySelector("#kwa").checked) {
    cena = pow * 70;
  } else if (document.querySelector("#pro").checked) {
    cena = pow * 80;
  }

  wynik.innerHTML = cena + " zł";
}

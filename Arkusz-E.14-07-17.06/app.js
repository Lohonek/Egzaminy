const btn = document.querySelector("#btn");

btn.addEventListener("click", oblicz);

const wynik = document.querySelector("#wynik");

function oblicz() {
  const pow = document.querySelector("#pow").value;
  const pok = document.querySelector("#pok").value;
  const laz = document.querySelector("#laz").checked;

  let cenap = pow * 4000;
  let cenas = pok * 1000;

  let cena = cenap + cenas;

  if (laz) {
    cena += 2000;
  }

  wynik.innerHTML = cena + " zł";
}

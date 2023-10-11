const btn = document.querySelector("#btn");

btn.addEventListener("click", sprawdz);

function sprawdz() {
  const wynik = document.querySelector("#wynik");

  const imie = document.querySelector("#imie").value;
  const nazwisko = document.querySelector("#nazwisko").value;
  const email = document.querySelector("#email").value;
  const usluga = document.querySelector("#usluga").value;

  const check = document.querySelector("#check").checked;

  if (check == true) {
    wynik.innerHTML =
      imie.toUpperCase() +
      " " +
      nazwisko.toUpperCase() +
      "</br> Treść Twojej sprawy: " +
      usluga +
      "</br> Na podany e-mail zostanie wysłana oferta";
  } else {
    wynik.innerHTML =
      '<span style="color:red">' +
      "Musisz się zapozanć z regulaminem" +
      "</span>";
  }
}

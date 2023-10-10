const btn = document.querySelector("#btn");

btn.addEventListener("click", function () {
  const ksztalt = document.querySelector("#ksztalt").value;
  const colorR = document.querySelector("#colorR").value;
  const colorG = document.querySelector("#colorG").value;
  const colorB = document.querySelector("#colorB").value;
  const wynik = document.querySelector("#wynik");
  const wcolor = document.querySelector("#wcolor");

  const color = function () {
    wcolor.style.backgroundColor = `rgb(${colorR},${colorG},${colorB})`;
  };

  if (ksztalt == 1) {
    wynik.textContent = "Zamówiłeś żelka: miś";
    color();
  } else if (ksztalt == 2) {
    wynik.textContent = "Zamówiłeś żelka: żabka";
    color();
  } else if (ksztalt == 3) {
    wynik.textContent = "Zamówiłeś żelka: serce";
    color();
  } else if (ksztalt != 1 || ksztalt != 2 || ksztalt != 3) {
    wynik.textContent = "Zamówiłeś żelka: inny ksztalt";
    color();
  }
});

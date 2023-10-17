const btnk = document.querySelector("#btnk");
btnk.addEventListener("click", function () {
  let t = document.querySelector("#temp").value;
  console.log("click");
  if (isNaN(t)) {
    alert("Błąd danych!");
  } else {
    document.querySelector("#res").innerHTML = parseInt(t) + 273.15;
  }
});

const btnf = document.querySelector("#btnf");
btnf.addEventListener("click", function () {
  let t = document.querySelector("#temp").value;
  if (isNaN(t)) {
    alert("Błąd danych!");
  } else {
    document.querySelector("#res").innerHTML = parseInt(t) * 1.8 + 32;
  }
});

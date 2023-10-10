const btn = document.querySelector("#btn");

btn.addEventListener("click", function () {
  const input = document.querySelector("#input").value;
  const wynik = document.querySelector("#wynik");

  let puszka = Math.round(input / 4);

  wynik.textContent = `Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: ${puszka}`;
});

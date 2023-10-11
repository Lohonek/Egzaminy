const redb = document.querySelector("#red");
redb.addEventListener("click", red);

function red() {
  const size = document.querySelector("#rozmiar").value;
  const style = document.querySelector("#wybor").value;

  if (style === "kursywa") {
    document.querySelector("#wynik").style =
      "color:red; font-size:" + size + "%; font-style: italic;";
  } else {
    document.querySelector("#wynik").style =
      "color:red; font-size:" + size + "%;";
  }
}

const greenelement = document.querySelector("#green");
greenelement.addEventListener("click", green);

function green() {
  const size = document.querySelector("#rozmiar").value;
  const style = document.querySelector("#wybor").value;

  if (style === "kursywa") {
    document.querySelector("#wynik").style =
      "color:green; font-size:" + size + "%; font-style: italic;";
  } else {
    document.querySelector("#wynik").style =
      "color:green; font-size:" + size + "%;";
  }
}

const blueelement = document.querySelector("#blue");
blueelement.addEventListener("click", blue);

function blue() {
  const size = document.querySelector("#rozmiar").value;
  const style = document.querySelector("#wybor").value;

  if (style === "kursywa") {
    document.querySelector("#wynik").style =
      "color:blue; font-size:" + size + "%; font-style: italic;";
  } else {
    document.querySelector("#wynik").style =
      "color:blue; font-size:" + size + "%;";
  }
}

let opis = document.querySelectorAll(".description");
for(i=0; i<opis.length; i++){
  let str = opis[i].innerHTML; 
  let ispisi = str.substr(0, 40) + "...";
  opis[i].innerHTML = ispisi;
}

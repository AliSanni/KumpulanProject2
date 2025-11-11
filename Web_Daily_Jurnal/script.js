const lightBtn = document.getElementById("lightBtn");
const blueBtn = document.getElementById("blueBtn");
const body = document.body;

lightBtn.addEventListener("click", () => {
  body.classList.remove("blue-theme");
});
blueBtn.addEventListener("click", () => {
  body.classList.add("blue-theme");
});

//untuk jam digital
const tsEl = document.getElementById("timestamp");
function pad(n) {
  return n < 10 ? "0" + n : n;
}
function updateTime() {
  const d = new Date();
  const dd = d.getDate(),
    mm = d.getMonth() + 1,
    yyyy = d.getFullYear();
  const hh = pad(d.getHours()),
    min = pad(d.getMinutes()),
    ss = pad(d.getSeconds());
  tsEl.textContent = `${dd}/${mm}/${yyyy} ${hh}:${min}:${ss}`;
}
updateTime();
setInterval(updateTime, 1000);

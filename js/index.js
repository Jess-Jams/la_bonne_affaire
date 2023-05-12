// const mousemove = document.querySelector(".mousemove");
// window.addEventListener("mousemove", (e) => {
//   mousemove.style.left = e.pageX + "px";
//     mousemove.style.top = e.pageY + "px";
//     console.log(e);
// });
const mousemove = document.querySelector(".mousemove");
window.addEventListener("mousemove", (e) => {
  mousemove.style.left = e.pageX + "px";
    mousemove.style.top = e.pageY + "px";
  if (e.pageX === 196 && e.pageY === 643) {
    alert("hello");
  }
});
window.addEventListener("mousedown", () => {
  mousemove.style.transform = "scale(2) translate(-25% ,-25%) rotate(100deg) ";
});

window.addEventListener("mouseup", () => {
  mousemove.style.transform = "scale(1) translate(-50% ,-50%)";
});
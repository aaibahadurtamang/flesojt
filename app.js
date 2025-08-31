
Array.from(document.getElementsByTagName('input')).forEach((e, i) => {
    e.addEventListener('keyup', (el) => {
        const caret = document.getElementsByClassName('bi bi-caret-down-fill')[i];
        if (caret) {
            if (e.value.length > 0) {
                caret.style.transform = "rotate(180deg)";
            } else {
                caret.style.transform = "rotate(0deg)";
            }
        }
    });
});



let menu_btn = document.getElementsByClassName('bi-three-dots')[0];
let menu_bx = document.getElementById('menu_bx');

document.querySelector(".bi-three-dots").addEventListener("click", () => {
  document.querySelector("header nav ul").classList.toggle("ul_active");
});




let inputbox = document.querySelector(".input-box"),
    busqueda = document.querySelector(".busqueda"),
     cerrarIcon = document.querySelector(".cerrar-icon");
   
   busqueda.addEventListener("click", () => inputbox.classList.add("open"));
   cerrarIcon.addEventListener("click", () => inputbox.classList.remove("close"));






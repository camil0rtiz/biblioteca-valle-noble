formMain.addEventListener("submit", (e) => { 
    if (contrasena.value !== confirmar_contrasena.value) { 
      e.preventDefault(); 
      err.innerHTML = "Las contraseñas no coinciden"; 
      setTimeout(() => {
        err.innerHTML = " ";
      }, 2000); 
    }
  });
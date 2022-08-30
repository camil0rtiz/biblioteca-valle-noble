const membresia = document.getElementById('id_membresia');

const formIsValid = {
    membresia: false
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    validar();
    validateForm();
});

const validar = () =>{
    console.log('hola');
    const membresiaValue = membresia.value.trim();
    
    if(membresiaValue == ''){

        conMembresiaError('Ingrese membresia');
        
    }else{
        formIsValid.membresia = true;
    }

}

id_membresia.addEventListener("change",(e)=>{
    if(e.target.value.trim().length != 0){
        mem.innerHTML = " ";
    }
})


const conMembresiaError = (message) => {
    mem.innerHTML = message;
}

const validateForm = () => {
    const formValue = Object.values(formIsValid);
    const valid = formValue.findIndex(value=> value == false);
    console.log(valid);
    if(valid == -1) {
        form.submit();
    }
}









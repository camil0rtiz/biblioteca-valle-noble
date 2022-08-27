const form = document.getElementById("form");
const nombre = document.getElementById('nombre');
const primer_apellido = document.getElementById('a_paterno');
const segundo_apellido = document.getElementById('a_materno');
const correo = document.getElementById('correo');
const direccion = document.getElementById('direccion');
const fono = document.getElementById('fono');



const formIsValid = {
    nombre: false,
    primer_apellido: false,
    segundo_apellido: false,
    correo: false,
    fono:false,
    direccion: false, 
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    validar();
    validateForm();
});

const validar = () =>{

    const nombrevalue = nombre.value.trim();
    const primapellidovalue = primer_apellido.value.trim();
    const segapellidovalue = segundo_apellido.value.trim();
    const correovalue = correo.value.trim();
    const direccionvalue = direccion.value.trim();
    const fonovalue = fono.value.trim();
    console.log(nombrevalue);


    if(nombrevalue === ''){
        errorNombre('Nombre es requerido');
    }else if(validarInput(nombrevalue)){
        errorNombre('Ingrese solo letras');
    }
    else{
        formIsValid.nombre = true
    } 

    if(primapellidovalue == ''){
        errorPriApellido('Primer apellido es requerido');
    }else if(validarInput(primapellidovalue)){
        errorPriApellido('Ingrese solo letras');
    }
    else{
        formIsValid.primer_apellido = true
    } 

    if(segapellidovalue == ''){
        errorSeApellido('Segundo apellido es requerido');
    }else if(validarInput(segapellidovalue)){
        errorSeApellido('Ingrese solo letras');
    }
    else{
        formIsValid.segundo_apellido = true
    } 

    if(correovalue === '') {
        correoError('Email es requerido');
    }else if(isValidEmail(correovalue) == false){
        correoError('Email no es valido');
    }
    else{
        formIsValid.correo = true
    } 

    if(direccionvalue == ''){
        errorDireccion('Dirección es requerida');
    }else{
        formIsValid.direccion = true
    } 

    if(fonovalue == ''){
        errorFono('Teléfono es requerido');
    }else if(fonovalue.length !== 9){
        errorFono('Teléfono debe llevar 9 digitos');
    }
    else if(validarNumTele(fonovalue) == false){
        errorFono('Número de teléfono no es valido');
    }
    else{
        formIsValid.fono = true
    } 

}

nombre.addEventListener("change",(e)=>{
    if(e.target.value.trim().length > 0){
        nom.innerHTML = " ";
    }
})

primer_apellido.addEventListener("change",(e)=>{
    if(e.target.value.trim().length > 0){
        p_apellido.innerHTML = " ";
    }
})

segundo_apellido.addEventListener("change",(e)=>{
    if(e.target.value.trim().length > 0){
        s_apellido.innerHTML = " ";
    }
})

correo.addEventListener("change",(e)=>{
    if(e.target.value.trim().length > 0){
        email.innerHTML = " ";
    }
})

direccion.addEventListener("change",(e)=>{
    if(e.target.value.trim().length > 0){
        direc.innerHTML = " ";
    }
})

fono.addEventListener("change",(e)=>{
    if(e.target.value.trim().length > 0){
        fon.innerHTML = " ";
    }
})


const errorNombre = (message) => {
    nom.innerHTML = message;
}

const errorPriApellido = (message) => {
    p_apellido.innerHTML = message;
}

const errorSeApellido = (message) => {
    s_apellido.innerHTML = message;
}

const  correoError = (message) => {
    email.innerHTML = message;
}

const errorDireccion = (message) => {
    direc.innerHTML = message;
}

const errorFono = (message) => {
    fon.innerHTML = message;
}


const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    return re.test(String(email).toLowerCase());
}

const validateForm = () => {
    const formValue = Object.values(formIsValid);
    const valid = formValue.findIndex(value=> value == false);
    console.log(formValue.findIndex(value=> value == false));
    if(valid == -1) {
        form.submit();
    }
}

const validarInput = (text) =>{
    patron = /[0-9@]/;
    return patron.test(text);
}


const validarNumTele = numero => {

    const numeroPermitido = /^(\+?56)?(\s?)(0?9)(\s?)[98765432]\d{7}$/

    return numeroPermitido.test(String(numero).toLowerCase());    

} 
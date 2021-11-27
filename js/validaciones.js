  
const formulario = document.getElementById('crear-instructor');
const inputs = document.querySelectorAll('#crear-instructor input');
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    dni: /^\d{8}$/, // 0 a 8 numeros.
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
    distrito: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    direccion: /^[a-zA-Z0-9\_\-\.\s\,]{1,100}$/, // Letras, numeros, guion y guion_bajo
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{9}$/ // 7 a 14 numeros.

}
const campos = {
	usuario: false,
    dni:false,
    apellido:false,
	nombre: false,
	password: false,
	correo: false,
	telefono: false
}

const validarFormulario=(e)=>{
    switch (e.target.name){
        case "DNI":
        validarCampo(expresiones.dni,e.target,'DNI');
        break;

        case "nombre":
        validarCampo(expresiones.nombre,e.target,'nombre');
        break;

        case "apellido":
        validarCampo(expresiones.apellido,e.target,'apellido');
        break;

        case "correo":
        validarCampo(expresiones.correo, e.target, 'correo');
        break;

        case "distrito":
        validarCampo(expresiones.distrito, e.target, 'distrito');
        break; 

        case "direccion":
        validarCampo(expresiones.direccion, e.target, 'direccion');
        break;

        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
        break;
    }

}
const validarCampo = (expresion,input,campo) =>{
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo')
        campos[campo]=true;
        }else{
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo')
        campos[campo]=false;
    }
}
inputs.forEach((input) =>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur',validarFormulario);
}

)
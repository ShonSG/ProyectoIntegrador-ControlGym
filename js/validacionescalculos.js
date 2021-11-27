const formularioooo = document.getElementById('crear-calculos');
const inputssss = document.querySelectorAll('#crear-calculos input');
const expresionessss = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    dni: /^\d{1,9}.$/, // 0 a 8 numeros.
    pesoimc: /^-?([0-9]*\.?[0-9]+|[0-9]+\.?[0-9]*)$/,
    alturaimc :/^-?([0-9]*\.?[0-9]+|[0-9]+\.?[0-9]*)$/,
    pesoh: /^-?([0-9]*\.?[0-9]+|[0-9]+\.?[0-9]*)$/,
    pesoprot: /^-?([0-9]*\.?[0-9]+|[0-9]+\.?[0-9]*)$/,
    horash: /^\d{1,9}$/,
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
    distrito: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    direccion: /^[a-zA-Z0-9\_\-\.\s\,]{1,100}$/, // Letras, numeros, guion y guion_bajo
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{9}$/ // 7 a 14 numeros.

}
const campossss = {
	usuario: false,
    dni:false,
    apellido:false,
	nombre: false,
	password: false,
	correo: false,
	telefono: false
}

const validarFormularioooo=(e)=>{

// console.log(e.target.name);
// }
    switch (e.target.name){
        case "Peso":
        validarCampoooo(expresionessss.pesoimc,e.target,'Peso');
    
        break;
        
        case "Altura":
        validarCampoooo(expresionessss.alturaimc,e.target,'Altura');
        break;
        
        case "PesoH":
        validarCampoooo(expresionessss.pesoh,e.target,'PesoH');
        break; 
        
        case "Horasd":
            validarCampoooo(expresionessss.horash,e.target,'Horasd');
            break;
        case "Pesote":
        validarCampoooo(expresionessss.pesoprot,e.target,'Pesote');
        break;
            
    }

}
const validarCampoooo = (expresion,input,campo) =>{
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo')
        camposs[campo]=true;
        }else{
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo')
        camposs[campo]=false;
    }
}
inputssss.forEach((input) =>{
    input.addEventListener('keyup', validarFormularioooo);
    input.addEventListener('blur',validarFormularioooo);
}
);

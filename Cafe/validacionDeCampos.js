function validacion(){
    //El apellido paterno debe contener al menos 6 Caracteres
    const apepat = document.getElementById("txtApepat").value;
    if(apepat.length < 6){
        swal('Cuidado','Tu apellido paterno debe tener al menos 6 caracteres','warning');
        return false;
    }
    //El apellido materno debe contener al menos 6 Caracteres
    const apemat = document.getElementById("txtApepat").value;
    if(apemat.length < 6){
        swal('Cuidado','Tu apellido materno debe tener al menos 6 caracteres','warning');
        return false;
    }

    //El campo Numero de telefono solo debe contener numeros
    const numeroCel = document.getElementById("txtNumeroCel").value;
    if(isNaN(numeroCel)){
        swal('Ciudado','El numero de telefono solo debe contener numeros','warning');
        return false;
    }
    //La contraseña debe tener al menos 8 caracteres
    const pass = document.getElementById("txtPassword");
    if(pass.value.length < 8){
        swal('La contraseña debe tener al menos 8 caracteres', 'Tu contraseña debe tener una mayuscula y un numero','warning');
        return false;
    }
    return true;
}
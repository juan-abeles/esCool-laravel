window.onload = function (){
    var formulario = document.querySelector("#formulario")
    formulario.elements.email.focus()
    //console.log("hola")
    formulario.onsubmit=function(evento){
        if(!validaciones()){
            evento.preventDefault()
        }else{
            formulario.submit()
        }
    }

    function validaciones(){
        var email = formulario.elements.email
        var password = formulario.elements.password
        console.log("hola")
        if(!validarEmail(email.value)) return false
        if(!validarPassword(password.value)) return false
        
        
        return true
    }

    function validarEmail(email){
        var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/
        //if(re.test(email)) return true
        //alert("Debes colocar un email válido")
        //return false
        
        var error = document.getElementById("errorEmail")
        if (!re.test(email)){
            error.innerHTML="Debes colocar un email válido"
            error.setAttribute("class","alert alert-danger")
            return false
        }else{
            error.innerHTML=""
            error.removeAttribute("class","alert alert-danger")
            formulario.elements.password.focus()
            return true
        }
    }

    function validarPassword(password){
        var re_pwd = /^(?=[^A-Z]*[A-Z])(?=[^a-z]*[a-z])(?=[^0-9]*[0-9]).{6,}$/
        error = document.getElementById("errorPassword")
        if (!re_pwd.test(password)){
         error.innerHTML="Debes colocar una password válida"
         error.setAttribute("class","alert alert-danger")
         return false
        }else{
         error.innerHTML=""
         error.removeAttribute("class","alert alert-danger")
         return true
        }
     }



}
var inputs = document.querySelectorAll("input.form-control");
var x = 0;
document.querySelector("#btn").onclick = function(){
    for(var i=0; i<inputs.length; i++){
        if(inputs[i].value == ""){
            inputs[i].style.backgroundColor = "#ff8080";
            x++;
        }else{
            inputs[i].style.backgroundColor = "#1aff1a";
        }
    }

    if(x == 0){
        document.getElementById("mandar").submit(); 
    }else{
        alert("Preencha todos os campos!!!");
    }
}
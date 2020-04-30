let name = document.querySelector('#name');
let email = document.querySelector('#email');


let main_pass = document.querySelector("#password")
let dubl =document.querySelector("#dubl")
let submit = document.querySelector("#sub")

submit.onclick = (e) =>{
    if(main_pass.value === dubl.value){
        alert("Все отлично! проходите!")
    } else{
        e.preventDefault();
        alert("Вас оставновила полиция паролей! В этот раз предупреждение")
    }
}

let banned = document.querySelectorAll(".banned");
let admin_makes = document.querySelectorAll(".admin_make");
let delete_its = document.querySelectorAll(".delete_it");

console.log(delete_its.length)
for(let i = 0; i < delete_its.length; i++){
    console.log(i);
    delete_its[i].onclick = () =>{
        let user_id = delete_its[i].getAttribute('id');
        // console.log(id);
        delete_its[i].parentElement.parentElement.remove()
        Query(user_id);
    }
}

console.log(window.location.hostname);

let path = window.location.hostname;
function Query(user_id){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", `http://${path}:8080/admin/ajax.php?user=${user_id}`);
    xhr.send()

    let that = this;
    xhr.addEventListener("load", function(){
        console.log(xhr);
        let answer = xhr.responseText;
        alert(answer);
    })
}






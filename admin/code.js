
let bannedes = document.querySelectorAll(".banned");
let admin_makes = document.querySelectorAll(".admin_make");
let delete_its = document.querySelectorAll(".delete_it");
let actives = document.querySelectorAll(".activе_it");
// conso



function setAction(arr, method) {
    for (let i = 0; i < arr.length; i++) {
        arr[i].onclick = function() {
            let user_id = arr[i].getAttribute('id');
            Query_delete(user_id, method);
            if(method === "delete") {
                delete_its[i].parentElement.parentElement.remove()
            }
             else if( method ==='admin'){
                admin_th =  this.parentNode.parentNode.querySelector('.role');
                admin_th.innerHTML = "admin";
            } else if( method ==='ban'){
                admin_th =  this.parentNode.parentNode.querySelector('.role');
                admin_th.innerHTML = "ban";
            } else if( method ==='activate'){
                admin_th =  this.parentNode.parentNode.querySelector('.role');
                admin_th.innerHTML = "1";
            }
        }
    }
}

setAction(delete_its, 'delete')
setAction(bannedes, 'ban')
setAction(admin_makes, 'admin')
setAction(actives, 'activate')


let path = window.location.hostname;
function Query_delete(user_id, method){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", `http://${path}:8080/admin/ajax/ajaxs_${method}.php?user=${user_id}`);
    xhr.send()
    xhr.addEventListener("load", function(){
        console.log(xhr);
        let answer = xhr.responseText;
        alert(answer);
    })
}






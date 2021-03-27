let i = document.getElementById('id'),
n = document.getElementById('name'),
a = document.getElementById('address'),
b = document.getElementById('branch'),
f = document.querySelector('form');

f.addEventListener('submit', (e)=>{
e.preventDefault();
fetch('php/add_record.php',{
    method: "POST",
    body: JSON.stringify({
        "id": i.value,
        "name": n.value,
        "address": a.value,
        "branch": b.value
    }),
    headers: {"Content-Type": "application/json; charset=UTF-8"}
}).then(res => res.json())
.then(data => console.log(data))
.catch(err => console.log(err));
})



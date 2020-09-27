//dodavanje u localStorage

let users=[];

const addUser = (ev)=>{
    ev.preventDefault();
    //kreiranje "korisnika"
    let user = {
        id: Date.now(),
        name: document.getElementById('nameID').value,
        email: document.getElementById('emailID').value,
        message: document.getElementById('messageID').value
    }

    //obavestavanje korisnika
    users.push(user);
    document.forms[0].reset();
    alert('Uspesno ste poslali formu');

    //ispisivanje
    console.log('\n' + JSON.stringify(users,'\t',2));

    //cuvanje na localStorage
    localStorage.setItem('myUsers', JSON.stringify(users))
}



    document.getElementById('btn-subm').addEventListener('click', addUser,false);


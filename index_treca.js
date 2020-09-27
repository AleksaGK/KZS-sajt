function reply_click(id) {
    //proveri koje dugme je kliknuto
    const bool = document.getElementById(`${id}`).classList.contains('active');

    //klik na necekirano dugme
    if (!bool) {
        //prolazak kroz svako
        for (let j = 0; j < 3; j++) {
            //sacuvaj j+1 dugme
            let el = document.getElementById(`person${j + 1}`);

            //ukloni prethodni cekirano
            if (el.classList.contains('active')) {
                el.classList.remove('active');
                document.getElementById(`field${j + 1}`).style.display = 'none';
            }
        }

        document.getElementById(`${id}`).classList.toggle('active');

        document.getElementById(`field${id.substring(id.length - 1)}`).style.display = 'block';

    }
}

(function () {
    for (let j = 0; j < 3; j++) {
        var btnHasActive = document.getElementById(`person${j + 1}`).classList.contains('active');

        if (!btnHasActive)
            document.getElementById(`field${j + 1}`).style.display = 'none';
    }
})()

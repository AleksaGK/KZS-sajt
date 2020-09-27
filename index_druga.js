//fetch the API

const box1 = document.getElementById('box1');
const box2 = document.getElementById('box2');
const box3 = document.getElementById('box3');
const box4 = document.getElementById('box4');

let out;


fetch(
    'https://api.punkapi.com/v2/beers'
).then(result => {
    return result.json();
}).then(data => {
    //slike i tekst
    for (index in data) {
        const beerInfo = new Array(
            data[index].name,
            data[index].image_url);
            beerOut(beerInfo, index);
        if(index === '0')
            box1.innerHTML = out;
        else if(index === '1'){
            box2.innerHTML = out;
        }
        else if(index === '2'){
            box3.innerHTML = out;
        }
        else if(index === '3'){
            box4.innerHTML = out;
        }
    }
    //dugmici
    $(document).ready(function() {
        $(".button").click(function(event) {
            for (index in data) {
                const beerInfo = new Array(
                    data[index].name,
                    data[index].image_url);
                    beerOut(beerInfo);
                if(index == event.target.value*4){
                    box1.innerHTML = out;
                }
                else if(index == event.target.value*4+1){
                    box2.innerHTML = out;
                }
                else if(index == event.target.value*4+2){
                    box3.innerHTML = out;
                }
                else if(index == event.target.value*4+3){
                    box4.innerHTML = out;
                }
            }
        });
    });
})
.catch(error => console.log(error));


function beerOut(beer) {
    out=`
    <div class="col-lg-3 col-md-4 col-sm-6 col-12 gallery-item">
        <div class="main">
            <div>
                <img src="${beer[1]}" alt="Image" class="img-fluid gallery-img" />
            </div>
            <div>
                <h4 class="gallery-title">${beer[0]}</h4>
                <p class="gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                <p class="gallery-price">7€</p>
            </div>
        </div>
    </div>
    `;
}

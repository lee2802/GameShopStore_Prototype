let items = document.querySelectorAll('.buy-now');

let products = [
    {
        name: 'Animal-Crossing',
        tag: 'animalcrossing-switch',
        price: '140',
        selled: 0
    },
    {
        name: 'Clubhouse-51',
        tag: 'clubhouse51-nitendo',
        price: '135',
        selled: 0
    },
    {
        name: 'Death Stranding',
        tag: 'deathstranding',
        price: '120',
        selled: 0
    },
    {
        name: 'PS4-Bundle',
        tag: 'PS4-MEGA',
        price: '1300',
        selled: 0
    },
    {
        name: 'Game-Drive',
        tag: 'gamedrive',
        price: '129',
        selled: 0
    },
    {
        name: 'Nitendo Switch',
        tag: 'nitendoswitch',
        price: '1600',
        selled: 0
    },
    {
        name: 'Nitendo Switch Lite',
        tag: 'nitendolite',
        price: '900',
        selled: 0
    },
    {
        name: 'Ring-Fit-Bundle-Set',
        tag: 'ringfitbundle',
        price: '670',
        selled: '0'
    },
    {
        name: 'Legend-of-Zelda',
        tag: 'zelda-nitendo',
        price: '135',
        selled: 0
    }
]

for(let i=0; i<items.length; i++){
    items[i].addEventListener('click',() => {
        clickedItem(products[i]);
        totalCost(products[i]);
    })
    
}

function clickedItem(product){
    console.log("clicked item is ", product);
    setItems(product);
}

function setItems(product){
    let buyItem = localStorage.getItem('ProductToBuy');
    buyItem = JSON.parse(buyItem);

    if(buyItem != null){
        if(buyItem[product.tag] == undefined){
         buyItem={
             [product.tag]: product
         }
        }
        buyItem[product.tag].selled += 1;
    }
    else{
        product.selled = 1;
        buyItem = {
            [product.tag]: product
        }
    }
      
    localStorage.setItem("ProductToBuy", JSON.stringify(buyItem));
}

function totalCost(product){
    let shippingFee = 10;
    let total = parseInt(product.price) + shippingFee;
    localStorage.setItem("TotalCost",total );
}

function displayCart(){
    let cartItem = localStorage.getItem("ProductToBuy");
    cartItem = JSON.parse(cartItem);
    let productContainer = document.querySelector(".products");

    console.log(cartItem);
    if(cartItem && productContainer){
        productContainer.innerHTML = '';
        Object.values(cartItem).map(item => {
            productContainer.innerHTML += `
            <div class="product">
                <img class="itemPhoto" src="shopping item/${item.tag}.jpg"></img>
                <span>${item.name}</span>
            </div>
            <div class="price">
                RM${item.price}
            </div>
            <div class="quantity">
                1
            </div>
            <div class="total">
                RM${item.price}
            </div>
            `
        });
    }
}

function displaySelled(){
    let selledItem = localStorage.getItem("ProductToBuy");
    selledItem = JSON.parse(selledItem);
    //let productContainer = document.querySelector(".selledItem1");
    let productContainer;
    let selledProduct;
    let buy;
    let compareResult;
    let select;
    
    if(selledItem["animalcrossing-switch"] != undefined){
        buy = JSON.stringify(selledItem["animalcrossing-switch"].tag);
    }
    else if(selledItem["clubhouse51-nitendo"] != undefined){
        buy = JSON.stringify(selledItem["clubhouse51-nitendo"].tag);
    }
    else if(selledItem["deathstranding"] != undefined){
        buy = JSON.stringify(selledItem["deathstranding"].tag);
    }
    else if(selledItem["PS4-MEGA"] != undefined){
        buy = JSON.stringify(selledItem["PS4-MEGA"].tag);
    }
    else if(selledItem["gamedrive"] != undefined){
        buy = JSON.stringify(selledItem["gamedrive"].tag);
    }
    else if(selledItem["nitendoswitch"] != undefined){
        buy = JSON.stringify(selledItem["nitendoswitch"].tag);
    }
    else if(selledItem["nitendolite"] != undefined){
        buy = JSON.stringify(selledItem["nitendolite"].tag);
    }
    else if(selledItem["ringfitbundle"] != undefined){
        buy = JSON.stringify(selledItem["ringfitbundle"].tag);
    }
    else if(selledItem["zelda-nitendo"] != undefined){
        buy = JSON.stringify(selledItem["zelda-nitendo"].tag);
    }
    
    for(let i=0; i<9 ; i++){
        selledProduct = JSON.stringify(products[i].tag);
        if(buy.localeCompare(selledProduct) == 0){
            select = JSON.stringify(i+1);
            //console.log(".selledItem"+select);
            productContainer = document.querySelector(".selledItem"+select);
        }
    }

    if(selledItem && productContainer){
        productContainer.innerHTML = '';
        Object.values(selledItem).map(item => {
            productContainer.innerHTML += `
            <div>
                Item Ordered: ${item.selled}
            </div>
            `
        });
    }
}

displayCart();
displaySelled();

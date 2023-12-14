const qtyPlus = document.querySelectorAll(".plus");
const qtyMinus = document.querySelectorAll(".min");
let qty = document.querySelectorAll('.quantity');
const prices = document.querySelectorAll('.product-price');
const total = document.querySelectorAll('.total');
const totalItem = document.querySelectorAll('.total-item');
const product = document.querySelectorAll('.product-name');
const cards = document.querySelectorAll('.card');
const cardForms = document.querySelectorAll('.add-to-cart');
const coBtn = document.querySelector('#co');
const coFrom = document.querySelector('.co-form');

product.forEach((item, index) => {
    total.innerHTML = getTotal(index);
});

// Add To Cart
cards.forEach((item, index) => {
    item.addEventListener('click', () => {
        cardForms[index].submit();
    });
});

// When Checkout Button Click
coBtn.addEventListener('click', () => {
    coFrom.submit();
});

getSubtotal();

qty.forEach((item, index )=> {
    item.addEventListener('change', () => {
        getTotal(index);
        getSubtotal();
    });
})

// When + button click
qtyPlus.forEach((item , index) => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        plusBtn(index);
        getTotal(index);
        getSubtotal();
    });
})

// When - button click  
qtyMinus.forEach((item , index) => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        minBtn(index);
        getTotal(index);
        getSubtotal();
    });
})

function plusBtn(index) {
    let before = parseInt(qty[index].value);
    let after = before + 1;
    qty[index].value = after;
}

function minBtn(index) {
    let before = parseInt(qty[index].value);
    if (before <= 1) {
        qty[index].value = 1;
    } else {
        let after = before - 1;
        qty[index].value = after;
    }
}

function getTotal(index) {
    const price = parseInt(prices[index].innerHTML);
    const quantity = parseInt(qty[index].value);

    let totalPrice = price * quantity;
    totalItem[index].value = totalPrice;
    total[index].innerHTML = totalPrice;
}

function getSubtotal(){
    const arr = [];

    total.forEach((item) => {
        const total = parseInt(item.innerHTML);
        arr.push(total);
    })

    const sum = arr.reduce((accumulator, object) => {
        return accumulator + object;
    }, 0);

    document.querySelector('#subtotal').innerHTML = sum;
}

const rupiah = (number)=>{
    return new Intl.NumberFormat("id-ID", {
      style: "currency",
      currency: "IDR"
    }).format(number);
}
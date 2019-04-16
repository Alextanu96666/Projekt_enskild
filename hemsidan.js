if(document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready())
} else {
    ready()
}

function ready() {

    let removeBtn = document.getElementsByClassName("btn-danger");
        let i;
        for (i = 0; i < removeBtn.length; i++ ) {
           let button = removeBtn[i];
           button.addEventListener("click", removeItem)
               
           
        }

        let quantityInput = document.getElementsByClassName("cart-quantity-input")
        for (i = 0; i < quantityInput.length; i++ ) {
            let input = quantityInput[i]
            input.addEventListener('change', quantityChanged)
                
            
         }

         let addToCart = document.getElementsByClassName("shop-item-button")
         for (i = 0; i < addToCart.length; i++) {
             let button = addToCart[i]
             button.addEventListener("click", addToCartClicked)
         }


         let ticketButton = document.getElementById("submit-btn")
         ticketButton.addEventListener("click", createTickets)
         
         //  let purchaseBtn = document.getElementById("purchase")
         // purchaseBtn.addEventListener("click", testCreateDivs())
         
         
         
        }
        
        function testCreateDivs(namn) {
           
        
           
           let arr = document.getElementsByClassName('cart-quantity-input');


           
           
        function findTotal() {
         let tot = 0;
         for (let i = 0; i < arr.length; i++) {
            tot += parseInt(arr[i].value);
           }
           document.getElementsByClassName('num-of-tickets')[0].value = tot;
        }
        
        for (let i = 0; i < arr.length; i++) {
           arr[i].addEventListener('keyup', findTotal());
        }
        let register = document.getElementById("registration")
        register.classList.add("visibile")


        
        for (let i = 0; i < arr.length; i++) {
           for (let j = 0; j < arr[i].value; j++) {
               let mindiv = document.getElementById('ticket-name')
               let newDiv = document.createElement('input')
               newDiv.setAttribute("type", "text")
               newDiv.setAttribute("name", "def-input[]")
               mindiv.appendChild(newDiv)
            //   newDiv.readOnly = true
               
               
           let namn = document.getElementsByClassName('cart-item-title')
               console.log(namn)
               newDiv.value = namn[i].innerText
               
             }
           }

           
        }













function removeItem(event) {
            let clickedBtn = event.target
            clickedBtn.parentElement.parentElement.remove();
               updateCartPrice()
            }
            

            function quantityChanged(event) {
    let input = event.target
    if(isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartPrice()
}





function addToCartClicked(event) {
    let button = event.target
    parentItem = button.parentElement.parentElement
    primaryParent = button.parentElement.parentElement.parentElement
    console.log(parentItem)
    let namn = parentItem.getElementsByClassName("shop-item-title")[0].innerText
    console.log(namn)
    let price = parentItem.getElementsByClassName("price-item")[0].innerText
    console.log(price)
    let image = parentItem.getElementsByClassName("responsive_image")[0].src
    console.log(namn, price, image)
    addItem(namn, price, image)
    
    updateCartPrice()
}


function addItem(namn, price, image) {
    let NewRow = document.createElement("div")
    let CartItems = document.getElementsByClassName("cart-items")[0]
    let CartNames = CartItems.getElementsByClassName("cart-item-title")
    
    
    for (i = 0; i < CartNames.length; i++) {
        if (CartNames[i].innerText == namn) {
            alert('wrong')
            return
        }
    }
    let NewHtml = `<div class="cart-row">
    
    <div class="cart-item cart-column">
    <img class="cart-item-image" src="${image}" width="100" height="100">
    <span class="cart-item-title">${namn}</span>
    </div>
    <span class="cart-price cart-column">${price}</span>
    <div class="cart-quantity cart-column">
    <input class="cart-quantity-input" type="number" value="1">
    <button class="btn btn-danger" type="button">REMOVE</button>
    </div>
    </div>`
    NewRow.innerHTML = NewHtml
    CartItems.append(NewRow)
    NewRow.getElementsByClassName("btn-danger")[0].addEventListener("click", removeItem)
    NewRow.getElementsByClassName("cart-quantity-input")[0].addEventListener("change", quantityChanged)
}


function updateCartPrice() {
    
    
    
    let cartContainer = document.getElementsByClassName("cart-items")[0]
    
    let cartRows = cartContainer.getElementsByClassName("cart-row")
    
        let total = 0
        for (i = 0; i < cartRows.length; i++ ) {
            let cartRow = cartRows[i];  // rows from cart
            //   console.log(cartRow)
            let priceElement = cartRow.getElementsByClassName("cart-price")[0]
            let quantityElem = cartRow.getElementsByClassName("cart-quantity-input")[0]
            let price = parseFloat(priceElement.innerText.replace('KR', ''))
            //   console.log(price)
            let quantity = quantityElem.value
            
            //   console.log(price * quantity)
            total = total + (price * quantity)
            
            

           
            
         }
         total = Math.round(total * 100)/100
         document.getElementsByClassName("cart-total-price")[0].innerText = 'KR' + ' ' + total 
         
        }
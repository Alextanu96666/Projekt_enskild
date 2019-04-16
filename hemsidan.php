<?php

include_once 'registration_to_db.php';
include 'CRUD/database.php';
        $pdo = Database::connect();
                       $sqlJT = 'SELECT * FROM products WHERE ProductID = 1 ORDER BY ProductID DESC';
                       foreach ($pdo->query($sqlJT) as $JT);

                       $sqlMadrid = 'SELECT * FROM products WHERE ProductID = 2 ORDER BY ProductID DESC';
                       foreach ($pdo->query($sqlMadrid) as $Madrid);

                       $sqlCoachella = 'SELECT * FROM products WHERE ProductID = 3 ORDER BY ProductID DESC';
                       foreach ($pdo->query($sqlCoachella) as $coach);

                       $sqlUntold = 'SELECT * FROM products WHERE ProductID = 4 ORDER BY ProductID DESC';
                       foreach ($pdo->query($sqlUntold) as $untold);

                       $sqlWeek = 'SELECT * FROM products WHERE ProductID = 5 ORDER BY ProductID DESC';
                       foreach ($pdo->query($sqlWeek) as $week);

                       $sqlSuper = 'SELECT * FROM products WHERE ProductID = 6 ORDER BY ProductID DESC';
                       foreach ($pdo->query($sqlSuper) as $super);
                           
                       
//if (isset($_POST['send-info'])) {
  //  $firstname = $_POST['firstName'];
  //  $lastname = $_POST['lastName'];
  //  $adress = $_POST['adress'];
   // $tickets = $_POST['def-input'];
  //  $numberoftickets = $_POST['quantity'];
  //  $totalPrice = $_POST['elementPrice'];

// $obj = new RegistrationDB();
// $obj -> Register($firstname, $lastname, $adress);

//$obj = new RegisterObjekt();
//$obj -> ObjektRegister($tickets, $numberoftickets);
//} 


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="layout.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="varukorg.css">
        <link rel="stylesheet" href="shopping_test.css">
        <link rel="stylesheet" href="test.css">
        <script type="text/javascript" src="hemsidan.js" async></script>
        
    <title>Document</title>
</head>
<body>
    <header>
        <div class = "upPart">
            <div class = "textContainer">
                <h1>ONLINE STORE</h1>
                <p>Sell and Shop</p>
            </div>
        </div>
        <div class="container">
            <h1 class="logo"></h1>
            
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="login.php">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
              <div class="container2">
                  <div class="row">
                      <div class ="elements">
                          <div class = "primaryElem">
                              <div class ="headerPanel"> <span class="shop-item-title"><?php echo $JT['ProductName'] ?></span></div>
                              <div class ="bodyPanel"><img src="images/Justin-Timberlake (1).jpg" class ="responsive_image"></div>
                              <div class ="footerPanel"><input class="shop-item-button"type="submit" value="ADD TO CART" name="button">
                             <h2> Price: <span class="price-item" name="cambio"> 150 KR </span></h2> 
                            </div>
                              
                            </div>
                        </div>
                        <div class ="elements"><div class = "primaryElem">
                            <div class ="headerPanel"> <span class="shop-item-title"><?php echo $Madrid['ProductName'] ?></span></div>
                            <div class ="bodyPanel"><img src="images/La-Liga-preview-Real-Madrid-vs-Barcelona.jpg" class ="responsive_image"></div>
                            <div class ="footerPanel"><button class="shop-item-button"type="button">ADD TO CART</button>
                            <h2> Price:<span class="price-item"> 200 KR </span></h2>
                        </div>
                        </div>
                    </div>
                        <div class ="elements"><div class = "primaryElem">
                            <div class ="headerPanel"> <span class="shop-item-title"><?php echo $coach['ProductName'] ?></span></div>
                            <div class ="bodyPanel"><img src="images/coachella-2019-1280x720.jpg" class ="responsive_image"></div>
                            <div class ="footerPanel"><button class="shop-item-button"type="button">ADD TO CART</button>
                            <h2> Price: <span class="price-item"> 250 KR </span></h2>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
           
            <div class="container2">
                <div class="row">
                    <div class ="elements">
                        <div class = "primaryElem">
                            <div class ="headerPanel"><span class="shop-item-title"><?php echo $untold['ProductName'] ?></span></div>
                            <div class ="bodyPanel"><img src="images/3694-artwork.jpg" class ="responsive_image"></div>
                            <div class ="footerPanel"><button class="shop-item-button"type="button">ADD TO CART</button>
                            <h2> Price: <span class="price-item"> 150 KR </span> </h2>
                        </div>
                        </div>
                    </div>
                    <div class ="elements"><div class = "primaryElem">
                        <div class ="headerPanel"> <span class="shop-item-title"><?php echo $week['ProductName'] ?></span></div>
                        <div class ="bodyPanel"><img src="images/what-to-wear-today-gq-0116-33.jpg" class ="responsive_image"></div>
                        <div class ="footerPanel"><button class="shop-item-button"type="button">ADD TO CART</button>
                        <h2> Price: <span class="price-item"> 250 KR </span> </h2>
                    </div>
                    </div></div>
                    <div class ="elements"><div class = "primaryElem">
                        <div class ="headerPanel"> <span class="shop-item-title"><?php echo $super['ProductName'] ?></span></div>
                        <div class ="bodyPanel"><img src="images/When-is-Super-Bowl-2019_0.jpg" class ="responsive_image"></div>
                        <div class ="footerPanel"><button class="shop-item-button"type="button">ADD TO CART</button>
                        <h2> Price: <span class="price-item"> 190 KR </span> </h2>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>
    
    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price-cart cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            
        </div>
        <div class="cart-items">
        
</div>
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
        <input class="btn btn-primary btn-purchase" type="submit" id="purchase" onclick="testCreateDivs()" value="PURCHASE">
    </section>

            <div id="registration">
                <div class = "mini-container">
                <form method = "post" action="file.php">
                    <fieldset style="width: 600px; position: absolute; margin-left: 29%; background-color: white;">
                        <legend> Personalia </legend>
                        First Name: <input type="text" name="firstName" class="text-name" placeholder="First Name"> <br \> <br \>
                        Last Name: <input type="text" name="lastName" class="text-name" placeholder="Last Name"> <br \> <br \>
                        Adress: <input type="text" name="adress" class="adressen" placeholder="Adress"> <br \> <br \>
                        Your tickets: <div class="yourTicket" id="ticket-name"></div> <br \> <br \>
                        Number of tickets: <input type="number" min="1" max="10" readonly id="num-tickets" class="num-of-tickets" name="quantity"> <br \> <br \>
                        Price: 
                        <input type="submit" name="send-info" id="submit-btn">
                         
                    </fieldset>
                </form>
                
                </div>
            </div>

 
    
        
        
    </body>
    </html>
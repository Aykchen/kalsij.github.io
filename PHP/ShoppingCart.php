<!--Retrieve data from items -->
<?php
    
    //just for now to visual data: transfering data from product page -> shopping cart, BUT should be remove in final version
    //session_destroy();

    //click ctrl shift I to see the print text in the Elements section of the body
    session_start();

    echo "the post data (only contains the qty): ";
    print_r ($_POST);

    echo "the session data (contains every info except qty: ";
    print_r ($_SESSION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "The method is POST";
    }
    else {
        echo "the method is not a POST";
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Shopping Cart</title>
    <meta chartset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    //Bootstrap
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    //Style
    <link rel="stylesheet" type="text/css" href="../Styles/newStyle.css"/>
    //Javascript
    <script type="text/javaScript" src="../Javascript/shoppingCart.js" async></script>

</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="background-color: blue;">
        <h1 style="margin-top:0mm;color:white; font-size:50px;font-style:italic; font-weight:bold; margin-right:1cm;">
            GSO</h1>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li><a href="GroceryStore-1.html">Home</a></li>

                <li><a href="#">Aisles</a>
                    <ul>
                     
                        <li><a href="Fruits and vegetables.html">Fruits and Vegetables</a></li>
                        <li><a href="Meat.html">Meat</a></li>
                        <li><a href="Dairy.html">Dairy</a></li>
                        <li><a href="Bread.html">Bread</a></li>
                
                        </a>
                </li>
            </ul>

            <li><a href="#">Account</a>
                <ul>
                    <li><a href="SignUp.html">Sign up</a></li>
                    <li><a href="SignIn.html">Sign in</a></li>
                </ul>
            </li>
        </div>

        <a href="ShoppingCart.html"><img src="../Media/cart_logo.png" alt="Shopping Cart" width="50px" height="50px"
                style="float:right"></a>
    </nav>

    <h1 class="ShoppingCartTitle">My Shopping Cart</h1>
    <div class="container-fluid">
        <div class="shoppingCart row">

            <!-- List of items in shopping cart -->
            <div class="Cart col-md-8 ">
                <h3>MY CART</h3>
                <hr></br>

                <div class="listMyCart justify-content-between align-items-center  row">
                    <div class="col-md-4"><img src="../Media/Tomatoes(vince_lee_unsplash).jpg" alt="lemon" style="width: 105px;"></div>

                    <div class="col-md-3"><h6>Tomatoes</br>(40g avg)</h6></div>

                    <!-- Button to change the quantity of the item -->
                    <div class="col-md-2">
                        <div class="qtyItems">
                            <button class="incrementButton" type="button">+</button>
                            <span class="quantityProduct">1</span> 
                            <button class="decrementButton" type="button">-</button>
                        </div>
                    </div>

                    <div class="priceItem col-md-2 "><h6>$ 1.50</h6></div>

                    <!-- Button to delete the item -->
                    <div class="col-md-1">
                        <div class="delete-trash">
                            <button type="button"><img src="../Media/TrashCan(Flaticon).png" alt="trash can" style="height:25px; width: 25px;"></button>
                        </div>
                    </div>
                
                </div>

                </br>

                <div class="listMyCart justify-content-between align-items-center  row">
                    <div class="col-md-4"><img src="../Media/Lemons(daniel_kim_unsplash).jpg" alt="lemon" style="width: 105px;"></div>

                    <div class="col-md-3"><h6>Lemons</br>(80g avg)</h6></div>

                    <!-- Button to change the quantity of the item -->
                    <div class="col-md-2">
                        <div class="qtyItems">
                            <button class="incrementButton" type="button">+</button>
                            <span class="quantityProduct">10</span> 
                            <button class="decrementButton" type="button">-</button>
                        </div>
                    </div>

                    <div class="priceItem col-md-2"><h6>$ 1.00</h6></div>

                    <!-- Button to delete the item -->
                    <div class="col-md-1">
                        <div class="delete-trash">
                            <button type="button"><img src="../Media/TrashCan(Flaticon).png" alt="trash can" style="height:25px; width: 25px;"></button>
                        </div>
                    </div>
                
                </div>
           
                </br>

                <div class="listMyCart justify-content-between align-items-center  row">
                    <div class="col-md-4"><img src="../Media/Blueberries(veeterzy_WOg_unsplash).jpg" alt="blueberries" style="width: 105px;"></div>

                    <div class="col-md-3"><h6>Blueberries</br>(200g avg)</h6></div>

                    <!-- Button to change the quantity of the item -->
                    <div class="col-md-2">
                        <div class="qtyItems">
                            <button class="incrementButton" type="button">+</button>
                            <span class="quantityProduct">50</span> 
                            <button class="decrementButton" type="button">-</button>
                        </div>
                    </div>

                    <div class="priceItem col-md-2"><h6>$ 5.50</h6></div>

                    <!-- Button to delete the item -->
                    <div class="col-md-1">
                        <div class="delete-trash">
                            <button type="button"><img src="../Media/TrashCan(Flaticon).png" alt="trash can" style="height:25px; width: 25px;"></button>
                        </div>
                    </div>
               
                </div>
                 </br><hr></br>

            </div>

            <!-- Summary of the items (number of items, subtotal, QST, GST and total)-->
            <div class="summaryItems col-md-4" style="left: 10px;">
                <div class="listSummary">

                    <h3>SUMMARY LIST</h3>
                    <hr></br>

                    <div class="justify-content-between row">
                        <div class="col-md-auto">Qty of Items</div>
                        <div class="totalItems col-md-auto" >61</div>
                    </div>
                    <hr></br>

                    <div class="justify-content-between row">
                        <div class="col-md-auto">Subtotal</div>
                        <div class="subtotalPrice col-md-auto">$ 286.50</div>
                    </div>
                    <hr></br>

                    <div class="justify-content-between row">
                        <div class="col-md-auto">GST</div>
                        <div class="GSTPrice col-md-auto">$ 14.33</div>
                    </div>

                    <div class="justify-content-between row">
                        <div class="col-md-auto">QST</div>
                        <div class="QSTPrice col-md-auto">$ 28.58</div>
                    </div>
                    <hr></br>

                    <div class="justify-content-between row">
                        <div class="col-md-auto">Total</div>
                        <div class="totalPrice col-md-auto">$ 329.40</div>
                    </div>
                    </br><hr>

                    <!-- Button to continue shopping -->
                    <div class="justify-content-center row">
                        <div class="continue">

                            <a href="GroceryStore-1.html"><button type="button">CONTINUE SHOPPING</button></a>
                            <hr>

                            <a href="CheckOut.html"><button type="button">CHECK OUT</button></a>
                            <hr>
                            
                        </div>
                    </div>

                    <div class="justify-content-center row">
                        <div class="donate">
                            <a href="https://www.canadahelps.org/en/donate-to-coronavirus-outbreak-response/"
                            target="_blank"><button type="button">DONATION  |  HELP US </br>FIGHT AGAINST COVID-19</button></a>    
                        </div>
                    </div></br>

                </div>   
            </div>

        </div>
    </div>

     <!---------footer----------->
     <footer class="container py-4">
        <div class="row">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">&copy; 2021-2022 </br> </small>
            <ul class="list-unstyled text-small">
                <li><a href="BackstoreProductList.html"class="text-muted">Backstore</a></li></ul>
            </div>
            <div class="col-6 col-md">
                <h5>Team</h5>
                <ul class="list-unstyled text-small">
                <li><a class="text-muted">Fatema Akther</a></li>
                <li><a class="text-muted">Julie Trinh</a></li>
                <li><a class="text-muted">Jasmit Kalsi</a></li>
                <li><a class="text-muted">Dzmitry Fiodarau</a></li>
                <li><a class="text-muted">Alice Chen</a></li>
                <li><a class="text-muted">Georgia Pitic</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Promotions</h5>
                <ul class="list-unstyled text-small">
                <li><a class="text-muted">Newsletter</a></li>
                <li><a class="text-muted">Gift cards</a></li>
                <li><a class="text-muted">Contests</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                <li><a href="Contact Us.html" class="text-muted">Contact us</a></li>
                <li><a class="text-muted">Our story</a></li>
                <li><a class="text-muted">FAQ</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>

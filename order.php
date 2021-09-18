<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuAnNhaHang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="container">
            <div class="logo">
                <img src="./anh/logo.png" alt="" class="img-responsive">
            </div>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="food.php">Foods</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="order-food">
        <div class="order-background">
            <div class="container">
                <h2 class="order-content">Fill this form to confirm your order</h2>
                <form class="selecter-food">
                    <fieldset>
                        <legend>Selecter Food</legend>
                        <div class="food-menu-img">
                            <img src="./anh/menu-pizza.jpg" alt="" class="order-img">
                        </div>
                        <div class="food-menu-desc">
                            <h3>Food Title</h3>
                            <p class="food-price">$2.3</p>
                            <div class="order-label">Quantlty</div>
                            <input type="number" name="qtq" class="input-respontsive" value="1" require>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Dellvery Details</legend>
                        <div class="order-label">Full Name</div>
                        <input type="text " name="full name" placeholder="E.g.Vijay Thapa" class="input-respontsive"require>

                        <div class="order-label">Phone Number</div>
                        <input type="tel " name="contact" placeholder="E.g. 9843xxxxxx" class="input-respontsive"require>

                        <div class="order-label">Email</div>
                        <input type="email " name="email" placeholder="E.g.hi@vijaythapa.com" class="input-respontsive"require>

                        <div class="order-label">Address</div>
                        <textarea type="address " rows="10" placeholder="E.g. street,city,country" class="input-respontsive"require></textarea>

                        <input type="submit" name="submit" value="Confirm Order" class="btn-primary">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="./anh/129116540_426805215145688_3600266875695006466_n.png" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="./anh/99384986_711556522719545_7406983535052980224_n.png" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="./anh/100651708_766678490402755_5849077263319957504_n.png" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer">
        <div class="container text-center">
            <p> All rights reserved. designed by <a href="#">Hoai-Phuong</a> </p>
        </div>
    </div>
</body>
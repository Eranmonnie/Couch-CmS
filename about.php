<?php
require_once ('couch/cms.php');
?>

<cms:template title='Home' icon='home'>
    <cms:editable name="body" label="Body" type="richtext" />
    <cms:editable name="excerpt" label="Excerpt" type="textarea" />
</cms:template>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="general_style.css">
    <link rel="stylesheet" href="about.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <title>Rale Way Farm - About</title>
</head>
<body>
    <div class="main-container">
        <div class="navbar">
            <div class="logo"><img src="./assets/Rayvalley favicon 1.png"></div>
            <div>
                <ul class="menu-bar">
                    <li><a href="index.php">Home</a></li>
                    <li class="current"><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="mini-bar">
                <div class="place-order"><p><a href="/">Join Now</a></p></div>
                <div class="hamburger-menu">
                    <label for="checkbox_toggle" class="hamburger">
                        <span>&#9776;</span>
                        <input type="checkbox" id="checkbox_toggle" style="display: none;"/>
                        <div>
                            <ul class="menu-bar">
                                <li ><a href="farm.php">Home</a></li>
                                <li><a>Product</a></li>
                                <li><a href="about.php" class="current">About</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="hero-section">
            <div id="darkens">
                <div class="hero-text">
                    <h1>BRINGING YOU THE FRESHEST PRODUCE.</h1>
                </div>
            </div>
        </div>
        <div class="best-seller-section">
            <div class="best-seller-header">
                <h2>BEST SELLER</h2>
            </div>
            <div class="best-seller-images">
                <div>
                    <img src="./assets/maize.png">
                    <h4>A Sack of Maize</h4>
                    <p>₦11,0000</p>
                    <p><s>₦35,000</s></p>
                </div>
                <div>
                    <img src="./assets/best_seller_onions.png">
                    <h4>A Basket of Onions</h4>
                    <p>₦7,5000</p>
                    <p><s>₦15,000</s></p>
                </div>
                <div>
                    <img src="./assets/best_seller_palm kernel.png">
                    <h4>A Drum of Palm Kernel</h4>
                    <p>₦13,0000</p>
                    <p><s>₦22,000</s></p>
                </div>
                <div>
                    <img src="./assets/plantain.png">
                    <h4>A bunch of Plantain</h4>
                    <p>₦9,0000</p>
                    <p><s>₦14,000</s></p>
                </div>
            </div>
        </div>
        <div class="mandate">
            <img src="./assets/Anniversary.svg" alt="">
            <h2>WE GIVE YOU THE BEST PRICE IN THE MARKET</h2>
            <p>We always stick to our mandate which is to get every of our customer the best quality of food items in the market at affordable prices.</p>
        </div>
        <div class="reason-section">
            <div>
                <h2>THE PROBLEM</h2>
                <h3>WHY WE DO THIS.</h3>
                <p><span>C</span>onsidering statistical data, it is evident that a significant majority, approximately 80%, of individuals worldwide face challenges in either finding time to personally visit the market for their desired items or simply dislike the entire process. Consequently, when these individuals do go to the market, they often feel rushed or exhausted, leading to compromised choices of food or inability to obtain their preferred items.
                    </p>
            </div>
            <div>
                <h2>THE SOLUTION</h2>
                <h3>HOW DO WE DO IT.</h3>
                <p><span>R</span>ALE WAY FARM is dedicated to simplifying your grocery shopping experience by providing high-quality food items at affordable prices. Our mission is to bridge the gap between individuals and the arduous task of going to the market.<br><span>H</span>ere's how it works: Once we receive your food item order, our capable workers enter into our farmlands, they meticulously handpick each item on your list, ensuring utmost quality.</p>
            </div>
        </div>
        <div class="order-process">
            <div id="title"><h2>OUR <span>ESTEEMED</span> PROCESS</h2></div>
            <div class="order-process-layer">
                <p>Ray Valley Farms, sprouting from the fertile soil of a small agricultural community in 1980, started as a modest family venture with a dream to cultivate not just crops but also a sustainable legacy. Founded by the visionary farmer, John Anderson, and his family, the company embarked on a journey that would eventually transform it into a thriving agricultural enterprise.</p>
                <p>The initial years were characterized by hard work, dedication, and a commitment to traditional farming practices. Ray Valley Farms earned a reputation for producing high-quality, locally-sourced produce. As technology advanced, the company embraced innovation, integrating precision farming techniques, data analytics, and sustainable farming practices. This marriage of tradition and technology propelled Green Haven Farms into a new era of efficiency and productivity.</p>
            </div>
        </div>
        <div class="footer-section">
            <div class="socials-main">
                <div class="socials">
                    <div><a href="/"><img src="./assets/instagram icon white.svg"><span class="tooltip-text">Instagram</span></a></div>
                    <div><a href="/"><img src="./assets/whatsapp icon white.svg"><span class="tooltip-text">Whatsapp</span></a></div>
                    <div><a href="/"><img src="./assets/twitter icon white.svg"><span class="tooltip-text">Twitter</span></a></div>
                    <div><a href="/"><img src="./assets/facebook icon white.svg"><span class="tooltip-text">Facebook</span></a></div>
                </div>
                <div class="address">
                    <h4>Adresss:</h4>
                    <address>Illishan remo, Ogun State, Nigeria, 20-60.</address>
                </div>
            </div>
            <div class="phone-contact">
                <div><img src="./assets/phone icon white.svg"></div>
                <div>: +234 913 7819 540</div>
            </div>
            <div class="copyright">
                <div><img src="./assets/copyright icon white.svg"></div>
                <div>Ray Valley Farm 2023</div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
COUCH::invoke();
?>
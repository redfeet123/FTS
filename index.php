<?php include('./layout/header.php'); ?>

<div class="bg-images">
    <div class="textandcc">
        <div class="text">
            <h1 id="main">Fast and Secure Global Banking & International Money Transfers</h1>
            <p id="virtual">With Virtual Bank Accounts for businesses and individuals in xx Currencies</p>
            <p class="light-text">Open a free money transfer account with FTS today and make business payouts or send money safely to anywhere in the world.</p>
            <button class="open-account"><a href="#">OPEN AN ACCOUNT</a></button>
        </div>
        <main>
            <h1>Current Exchnage Rate</h1>
            <div class="exchange-rate">
                <h1><span id="exchange-rate"></span></h1>
            </div>
            <div class="controls" id="controls">
                <div class="control">
                    <input type="number" id="base-input" value="0" min="0" step="0.01" />
                    <button id="base" data-drawer>USD</button>
                </div>
                <div class="line"></div>

                <div class="control" id="control">
                    <input type="number" id="target-input" value="0" readonly />
                    <button id="target" data-drawer>EUR</button>
                </div>
                <button class="swap-btn" id="swap-btn">
                    <span class="material-symbols-outlined"> sync_alt </span>
                </button>
            </div>

            <div class="fees">
                <p>Total Fee - 7.56 USD</p>
            </div>

            <div class="drawer" id="drawer">
                <div class="title" id="title2">
                    <button id="dismiss-btn">
                        <span class="material-symbols-outlined2"> west </span>
                    </button>
                    <h3>Select Currency</h3>
                </div>
                <div class="search">
                    <input type="search" id="search" placeholder="Search" />
                </div>
                <ul class="currency-list" id="currency-list"></ul>
            </div>
            <div class="dropdown2" id="dropdown2">
                <p>Sending Method</p>
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="selectedLanguage2">Bank Account</span>
                    
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li class="no-1">
                        <a class="dropdown-item2" href="#" data-flag="/images/Group 1264.png" data-lang="English">
                            Online Transfer
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item2" href="#" data-flag="/images/Group 1264.png" data-lang="English">
                            Bank Account
                        </a>
                    </li>
                </ul>
            </div>

            <div class="dropdown2">
                <p>Receiving Method</p>
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="selectedLanguage3">Cash Pickup</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li class="no-1">
                        <a class="dropdown-item3" href="#" data-flag="/images/Group 1264.png" data-lang="English">
                            Credit Transfer
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item3" href="#" data-flag="/images/Group 1264.png" data-lang="English">
                            Cash Pickup
                        </a>
                    </li>
                </ul>
            </div>

            <a href="#" class="get-start-link"><button class="get-started">GET STARTED</button></a>

        </main>
    </div>
    <div class="container">
    <div class="stat">
        <div id="count1" class="value counter2" data-target="9250000" data-unit="$" data-format="M">$0</div>
        <div class="label">Transacted Successfully</div>
    </div>
    <div class="stat">
        <div id="count2" class="value counter2" data-target="50000" data-format="K">0</div>
        <div class="label">Satisfied Customers</div>
    </div>
    <div class="stat">
        <div id="count3" class="value counter2" data-target="65">0</div>
        <div class="label">Countries Available</div>
    </div>
    <div class="stat">
        <div id="count4" class="value counter2" data-target="25" data-format="plus">0</div>
        <div class="label">Valuable Partners</div>
    </div>
</div>

</div>
<div class="container2">
    <div class="container2-text">
        <h1>PERSONAL ACCOUNT</h1>
        <h1 class="main-heading">Secure and fast money transfers</h1>
        <h1 class="text2">Send and receive money online, within the FTS app, to a Bank account, Local wallet or Debit card, safely to anywhere in the world.</h1>
        <div class="icon-text1">
            <div class="icon1"></div>
            <div class="icon-text1_1">
                <h1 class="text3">Global network of pickup locations</h1>
                <p>Or choose from xx local pick-up locations from our international</p>
            </div>
        </div>
        <div class="icon-text1">
            <div class="icon2"></div>
            <div class="icon-text1_1">
                <h1 class="text3">Transparancy</h1>
                <p>Clear, fair and transparent pricing</p>
            </div>
        </div>
        <div class="icon-text1">
            <div class="icon3">
                <img src="./images/Group 1404.png">
            </div>
            <div class="icon-text1_1">
                <h1 class="text3">Fast transaction settlements</h1>
                <p>We guarantee transactions are settled within xx hours.</p>
            </div>
        </div>
        <div class="icon-text1">
            <div class="icon3">
                <img src="./images/Group 1378.png">
            </div>
            <div class="icon-text1_1">
                <h1 class="text3">Dedicated support</h1>
                <p>Get 24/7 updates by text, email, the FTS app and access to our dedicated customer service team.</p>
            </div>
        </div>
        <button id="more-information"><a href="#">CLICK HERE FOR MORE INFORMATION</a></button>
    </div>
    <img src="/images/Group 1408.png">
</div>
<div class="container3">
    <h1>Opening an account in FTS is simple and quick.</h1>
    <p>Once signed up, you can open virtual bank accounts and transfer money at favorable exchange rates anywhere in the world.</p>

    <div class="steps">
        <div class="step1">
            <div class="signup">
                <div id="signup"></div>
            </div>
            <h1>SIGNUP</h1>

        </div>
        <img src="./images/Path 1.png">
        <div class="step2">
            <div class="signup" id="signup2">
                <div id="signup2_2"></div>
            </div>
            <h1>TRANSFER</h1>
        </div>
        <img src="./images/Path 18.png">
        <div class="step3">
            <div class="signup" id="signup3">
                <div id="signup3_3"></div>
            </div>
            <h1>RECEIVED IN X HRS OR LESS</h1>
        </div>
    </div>
    <button class="open-account2"><a href="#">OPEN AN ACCOUNT</a></button>
</div>

<div class="container4">
    <img src="./images/Group 1422.png">
    <div class="container4-text">
        <h1>PERSONAL ACCOUNT</h1>
        <h1 class="main-heading">Go global and expand your business reach</h1>
        <h1 class="text2">Sign up to our platform and make payments with the real exchange rate in 65+ countries.</h1>
        <p>Apply for a business account online in 3 easy steps and start sending payments instantly.</p>
        <div class="icon-text1">
            <img src="/images/Group 1382.png">
            <div class="icon-text2_1">
                <h1 class="text4">All in one business account</h1>
                <p>Virtual Business accounts, Mobile Wallets and Prepaid Cards</p>
            </div>
        </div>
        <div class="icon-text1">
            <img src="/images/Group 1381.png">
            <div class="icon-text2_1">
                <h1 class="text4">Business Payments & Mass Payouts</h1>
                <p>Send mass pay-outs to businesses worldwide.</p>
            </div>
        </div>
        <div class="icon-text1">
            <img src="/images/Group 1380.png">
            <div class="icon-text2_1">
                <h1 class="text4">Cross Border payments</h1>
                <p>Take advantage of our global network, to settle payments easily and securely. Transfer through SEPA, SWIFT, CHAPS, BACS and Faster payments systems, </p>
            </div>
        </div>
        <div class="icon-text1">
            <img src="/images/Group 1379.png">
            <div class="icon-text2_1">
                <h1 class="text4">Easy and simple API integrations</h1>
                <p>With a global selection of bank integrations </p>
            </div>
        </div>
        <div class="icon-text1">
            <img src="/images/Group 1378.png">
            <div class="icon-text2_1">
                <h1 class="text4">Dedicated support</h1>
                <p>Dedicated 24/7 customer service and sales teams</p>
            </div>
        </div>
        <div class="icon-text1">
            <img src="/images/Group 1377.png">
            <div class="icon-text2_1">
                <h1 class="text4">Track and manage payments</h1>
                <p>Through the FTS website, FTS app, SMS or email. Set up bespoke alerts to be notified of transactions in real time</p>
            </div>
        </div>
        <button class="more-information margin"><a href="#">CLICK HERE FOR MORE INFORMATION</a></button>
    </div>
</div>

<div class="container5">
    <div class="container4-text adjust-width">
        <h1>ACCOUNT SECURITY</h1>
        <h1 class="main-heading adjust-size">Secure and fraud free transfers makes FTS the most reliable money transfer service</h1>
        <h1 class="text2">Sign up to our platform and make payments with the real exchange rate in 65+ countries.</h1>
        <p>Our fraud monitoring technologies and in-house fraud monitoring team, protect you from transaction fraud. We are also a member of xxxx</p>
        <div class="buttons">
            <button class="learn-more"><a href="#">LEARN MORE</a></button>
            <button class="learn-more change-color"><a href="#">GET STARTED</a></button>
        </div>
    </div>
    <img src="./images/Group 1413.png">
</div>

<div class="container6">
    <div class="currency-list">
        <h1>Currencies</h1>

        <div class="currency-column">
            <div class="currencies">
                <div class="currency">
                    <img src="./images/Group 1264.png">
                    <h1>USD<span class="light-text"> – US dollar</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/hkd.png">
                    <h1>HKD<span class="light-text"> – Hong Kong dollar</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/ind.png">
                    <h1>INR<span class="light-text"> – Indian rupee</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/php.png">
                    <h1>PHP<span class="light-text"> – Philippine peso</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/idr.png">
                    <h1>IDR<span class="light-text"> – Indonesian rupiah</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/euro.png">
                    <h1>EUR<span class="light-text"> – Euro</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/gbp.png">
                    <h1>GBP<span class="light-text"> – British pound</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/nzd.png">
                    <h1>NZD<span class="light-text"> – New Zealand dollar</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/jpy.png">
                    <h1>JPY<span class="light-text"> – Japanese yen</span></h1>
                </div>
            </div>
            <div class="currencies">
                <div class="currency">
                    <img src="./images/Group 1264.png">
                    <h1>USD<span class="light-text"> – US dollar</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/hkd.png">
                    <h1>HKD<span class="light-text"> – Hong Kong dollar</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/ind.png">
                    <h1>INR<span class="light-text"> – Indian rupee</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/php.png">
                    <h1>PHP<span class="light-text"> – Philippine peso</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/idr.png">
                    <h1>IDR<span class="light-text"> – Indonesian rupiah</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/euro.png">
                    <h1>EUR<span class="light-text"> – Euro</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/gbp.png">
                    <h1>GBP<span class="light-text"> – British pound</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/nzd.png">
                    <h1>NZD<span class="light-text"> – New Zealand dollar</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/jpy.png">
                    <h1>JPY<span class="light-text"> – Japanese yen</span></h1>
                </div>
            </div>
            <div class="currencies">
                <div class="currency">
                    <img src="./images/Group 1264.png">
                    <h1>USD<span class="light-text"> – US dollar</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/hkd.png">
                    <h1>HKD<span class="light-text"> – Hong Kong dollar</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/ind.png">
                    <h1>INR<span class="light-text"> – Indian rupee</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/php.png">
                    <h1>PHP<span class="light-text"> – Philippine peso</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/idr.png">
                    <h1>IDR<span class="light-text"> – Indonesian rupiah</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/euro.png">
                    <h1>EUR<span class="light-text"> – Euro</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/gbp.png">
                    <h1>GBP<span class="light-text"> – British pound</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/nzd.png">
                    <h1>NZD<span class="light-text"> – New Zealand dollar</span></h1>
                </div>
                <div class="currency">
                    <img src="./images/jpy.png">
                    <h1>JPY<span class="light-text"> – Japanese yen</span></h1>
                </div>
            </div>
        </div>
        <button class="learn-more change-color"><a href="#">ABOUT CURRENCIES</a></button>
    </div>
</div>


<!-- Container7 -->
<div class="container7 swiper">
    <h1>What our customers are saying about us</h1>
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <div class="imageandquotes">
                    <img src="./images/Ellipse 183.png" class="card-image">
                    <img src="./images/Icon open-double-quote-serif-right.png" class="double-quotes">

                </div>
                <div class="texts">
                    <div class="review">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea.
                    </div>
                    <div class="nameandstars">
                        <h1>Jake</h1>
                        <img src="./images/Union 5.png">
                    </div>
                    <p>Director - Sample Company | 6 Months ago</p>
                </div>
            </li>
            <li class="card-item swiper-slide">
                <div class="imageandquotes">
                    <img src="./images/Ellipse 183.png" class="card-image">
                    <img src="./images/Icon open-double-quote-serif-right.png" class="double-quotes">

                </div>
                <div class="texts">
                    <div class="review">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea.
                    </div>
                    <div class="nameandstars">
                        <h1>Sam</h1>
                        <img src="./images/Union 5.png">
                    </div>
                    <p>Director - Sample Company | 6 Months ago</p>
                </div>
            </li>
            <li class="card-item swiper-slide">
                <div class="imageandquotes">
                    <img src="./images/Ellipse 183.png" class="card-image">
                    <img src="./images/Icon open-double-quote-serif-right.png" class="double-quotes">

                </div>
                <div class="texts">
                    <div class="review">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea.
                    </div>
                    <div class="nameandstars">
                        <h1>Sui</h1>
                        <img src="./images/Union 5.png">
                    </div>
                    <p>Director - Sample Company | 6 Months ago</p>
                </div>
            </li>
            <li class="card-item swiper-slide">
                <div class="imageandquotes">
                    <img src="./images/Ellipse 183.png" class="card-image">
                    <img src="./images/Icon open-double-quote-serif-right.png" class="double-quotes">

                </div>
                <div class="texts">
                    <div class="review">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea.
                    </div>
                    <div class="nameandstars">
                        <h1>Jake</h1>
                        <img src="./images/Union 5.png">
                    </div>
                    <p>Director - Sample Company | 6 Months ago</p>
                </div>
            </li>
            <li class="card-item swiper-slide">
                <div class="imageandquotes">
                    <img src="./images/Ellipse 183.png" class="card-image">
                    <img src="./images/Icon open-double-quote-serif-right.png" class="double-quotes">

                </div>
                <div class="texts">
                    <div class="review">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea.
                    </div>
                    <div class="nameandstars">
                        <h1>Jake</h1>
                        <img src="./images/Union 5.png">
                    </div>
                    <p>Director - Sample Company | 6 Months ago</p>
                </div>
            </li>
            <li class="card-item swiper-slide">
                <div class="imageandquotes">
                    <img src="./images/Ellipse 183.png" class="card-image">
                    <img src="./images/Icon open-double-quote-serif-right.png" class="double-quotes">

                </div>
                <div class="texts">
                    <div class="review">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea.
                    </div>
                    <div class="nameandstars">
                        <h1>Jake</h1>
                        <img src="./images/Union 5.png">
                    </div>
                    <p>Director - Sample Company | 6 Months ago</p>
                </div>
            </li>
        </ul>

    </div>
    <div class="trust-pilot">
        <p>Our user love our services</p>
        <img src="./images/image 1.png">
    </div>
</div>

<div class="container8">
    <h1>Frequently Asked Questions</h1>
    <p>Can't find it here? Check out our <a href="#"><span class="help-link">Help center</span></a></p>
    <div class="questions-container">
        <div class="question">
            <button>
                <span>How much does it cost to transfer?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada.</p>
        </div>

        <div class="question">
            <button>
                <span>How long will a money transfer take?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada.</p>
        </div>

        <div class="question">
            <button>
                <span>How much does it cost to transfer?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam ea odit voluptate culpa quas explicabo.</p>
        </div>

        <div class="question">
            <button>
                <span>How to send money online?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus corporis pariatur a maiores minus tempore magni nam beatae dolores omnis.</p>
        </div>
        <div class="question">
            <button>
                <span>Is my money safe with FTS?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus corporis pariatur a maiores minus tempore magni nam beatae dolores omnis.</p>
        </div>
        <div class="question">
            <button>
                <span>Can I open an FTS account for business?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus corporis pariatur a maiores minus tempore magni nam beatae dolores omnis.</p>
        </div>
        <div class="question flex">
            <a href="#">See More FAQs <i class="fas fa-chevron-right d-arrow"></i></a>
        </div>
    </div>
</div>


<div class="container9">
    <div class="text">
        <p>Download our app for</p>
        <h1>Fast and Secure International Money Transfers</h1>
        <p class="black">Open a free money transfer account with FTS today and send money safely to anywhere in the world.</p>
        <p class="black no-margin">Download and get started fast.</p>
        <div class="play-appstore">
            <a href="/" tabIndex="0"><img class="bn45" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/2560px-Google_Play_Store_badge_EN.svg.png" alt="bn45" /></a>
            <a href="/" tabIndex="0"><img class="bn46" src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="bn45" /></a>
        </div>

    </div>
    <img src="./images/Group 1371.png">
</div>





<?php include('./layout/footer.php'); ?>
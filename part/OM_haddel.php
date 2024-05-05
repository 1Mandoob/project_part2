<html>
    <head>
    <!-- Meta tags for character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Um haddel</title>
    <link rel="stylesheet" href="singup_login.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="calc.js"></script>
</head>

<body>
    
    <script type="text/javascript">
        
        var name;
        var price;
        var src;
        function food(name, price, src){
    this.name = name;
    this.price = price;
    this.src = src;
    }
    const foods = [new food("Harres", 2.5, "imgs/food_content/Am_hadeel/ha.jpeg"), 
                  new food("grape leaves", 3, "imgs/food_content/Am_hadeel/MAh.jpg"),
                   new food("Sambosa", 0.5, "imgs/food_content/Am_hadeel/sa.jpg"), 
                   new food("Shawarma", 1, "imgs/food_content/Am_hadeel/sha.jpg"), 
                   new food("Fattah",1.5, "imgs/food_content/Am_hadeel/wa.jpg")]
    
    </script>
    
    


    <header>

        <!-- Navigation bar -->
       

        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">

            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="imgs/icons/Mandoob-logos_black.png" alt="Logo" width="30" height="24"
                        class="d-inline-block align-text-top">
                    <span>Mandoob</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end " style="margin-right: 90px;" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.html">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cntctus.html">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="log_in.html">Login/Singup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="funpage.html">Game</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calculation.php">Bill</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="questionnaire.html">questionnaire</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Order
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="trucks.html">Truck</a></li>
                                <li><a class="dropdown-item" href="HomeMade.html">HomeMade business</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form id="searchBox">
                        <input type="text" id="searchInput" placeholder="Search...">
                        <button type="submit">Search</button>
                    </form>

                </div>
            </div>
        </nav>



    </header>

    
    <hr  class="hidden"/>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                    <div class="card-imgs"> <img  src="imgs/food_content/Am_hadeel/OM.jpg" alt=".."  height="400px" width="400px"></div>
                    </div>
                         <div class="col-md-6">
                    <div class="card-title"> 
                        <h1 class="display-1" style="padding-top: 100px; margin-left: 50px;">OM Hadeel</h1>
                    
                    </div>
                 </div>
                </div>
            </div>
            </div>

        </div>
    </div>
    <main>

        <div class="container mt-4 font1">
            <div class="row g-2">

                <div class="col-md-6">

                    <div class="card">

                        <div class="d-flex justify-content-center">
                            <img src="imgs/food_content/Am_hadeel/ha.jpeg" class="card-img-center img-fluid"
                                style="width: 200px; height: 200px;" alt="...">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Harres</h5>
                            <p class="card-text"></p>
                            <h6>Only for: 2.5 OMR</h6>
<!-- Inside the button element -->
                            <button type="button" class="btn btn-primary" value="2.5" onclick="addToCart('Harres',2.5)">Add to cart</button>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="card">

                        <div class="d-flex justify-content-center">
                            <img src="imgs/food_content/Am_hadeel/MAh.jpg" class="card-img-center img-fluid"
                                style="width: 200px; height: 200px;" alt="...">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">grape leaves</h5>
                            <p class="card-text"></p>
                            <h6>Only for: 3 OMR</h6>
                            <!-- Inside the button element -->
<button type="button" class="btn btn-primary" value="2.5" onclick="addToCart('grape leaves',3)">Add to cart</button>

                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card">

                        <div class="d-flex justify-content-center">
                            <img src="imgs/food_content/Am_hadeel/sa.jpg" class="card-img-center img-fluid"
                                style="width: 200px; height: 200px;" alt="...">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Sambosa</h5>
                            <p class="card-text"></p>
                            <h6>Only for: 0.5 OMR</h6>
                            <!-- Inside the button element -->
<button type="button" class="btn btn-primary" value="2.5" onclick="addToCart('Sambosa',0.5)">Add to cart</button>

                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card">

                        <div class="d-flex justify-content-center">
                            <img src="imgs/food_content/Am_hadeel/sha.jpg" class="card-img-center img-fluid"
                                style="width: 200px; height: 200px;" alt="...">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Shawarma</h5>
                            <p class="card-text"></p>
                            <h6>Only for: 1 OMR</h6><!-- Inside the button element -->
                            <button type="button" class="btn btn-primary" value="2.5" onclick="addToCart('Shawarma',1)">Add to cart</button>
                            
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card">

                        <div class="d-flex justify-content-center">
                            <img src="imgs/food_content/Am_hadeel/wa.jpg" class="card-img-center img-fluid"
                                style="width: 200px; height: 200px;" alt="...">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Fattah</h5>
                            <p class="card-text"></p>
                            <h6>Only for: 1.5 OMR</h6>
                            <!-- Inside the button element -->
<button type="button" class="btn btn-primary" value="2.5" onclick="addToCart('Fattah',1.5)">Add to cart</button>

                        </div>
                    </div>

                </div>

               

            </div>


        </div>

        </div>

    </main>

    <hr>
    <footer class="footer" style="margin-top: 40px;">

        <div class="container">

            <div class="row">
            
                <div class="col-md-4">
                    <h4>About Us</h4>
                    <p>Mandoob is a website for food delivery</p>
                </div>

                <div class="col-md-4">
                    <h4>Links</h4>

                    <table>
                        <tr>
                            <td><a href="#"><img src="imgs/icons/icons8-instagram-64.png" alt="insta-account" width="22"
                                        height="20"></a></td>
                            <td><a href="#"><img src="imgs/icons/icons8-email-50.png" alt="email-account" width="22"
                                        height="20"></a></td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="imgs/icons/icons8-twitter-50.png" alt="twitter-account" width="22"
                                        height="20"></a></td>
                            <td><a href="#"><img src="imgs/icons/icons8-facebook-50.png" alt="insta-account" width="22"
                                        height="20"></a></td>
                        </tr>
                    </table>

                </div>
                
                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <p>123 Musct Seeb, SQU</p>
                    <p> <a href="mailto:1.mandoob.123@gmail.com">Email: Mandoob@gmail.com</a></p>
                    <p>Phone: 99221133</p>
                </div>

            </div>
            
            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <p>&copy; 2024 Mandoob. All rights reserved.</p>
                </div>
            </div>
        
        </div>

    </footer>
    <script>
            
        document.getElementById('searchBox').addEventListener('submit', function(event) {
event.preventDefault(); // Prevent the form from submitting and reloading the page

// Get the user's search query
var searchQuery = document.getElementById('searchInput').value.toLowerCase();

// Filter the food items based on the search query
var filteredFoodItems = foods.filter(function(item) {
    return item.name.toLowerCase().includes(searchQuery);
});

// Clear the existing food items displayed on the page
var foodItemsContainer = document.querySelector('.row.g-2');
foodItemsContainer.innerHTML = '';

// Display the filtered food items
filteredFoodItems.forEach(function(item) {
    var colDiv = document.createElement('div');
    colDiv.classList.add('col-md-6');

    var cardDiv = document.createElement('div');
    cardDiv.classList.add('card');

    var imageDiv = document.createElement('div');
    imageDiv.classList.add('d-flex', 'justify-content-center');

    var image = document.createElement('img');
    image.src = item.src; // Assuming image names match food item names
    image.classList.add('card-img-center', 'img-fluid');
    image.style.width = '200px';
    image.style.height = '200px';

    var cardBody = document.createElement('div');
    cardBody.classList.add('card-body');

    var title = document.createElement('h5');
    title.classList.add('card-title');
    title.textContent = item.name;

    var price = document.createElement('h6');
    price.textContent = 'Only for: ' + item.price + ' OMR';

    var addToCartBtn = document.createElement('button');
    addToCartBtn.type = 'button'; // Add appropriate href
    addToCartBtn.classList.add('btn', 'btn-primary');
    addToCartBtn.textContent = 'Add to cart';
    addToCartBtn.value = item.price;
    addToCartBtn.onclick = function() {
        addToCart(item.name, item.price);
    };

    // Append elements to their respective parent elements
    imageDiv.appendChild(image);
    cardBody.appendChild(title);
    cardBody.appendChild(price);
    cardBody.appendChild(addToCartBtn);
    cardDiv.appendChild(imageDiv);
    cardDiv.appendChild(cardBody);
    colDiv.appendChild(cardDiv);
    foodItemsContainer.appendChild(colDiv);
});
});

function addToCart(name, price) {
    console.log("Adding to cart:", name, price);

    // Create an object to hold the data to be sent
    var data = {
        itemName: name,
        itemPrice: price
    };

    // Make a POST request to meal.php using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "meal.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response here if needed
            console.log(xhr.responseText);
        }
    };

    // Convert the data object to JSON before sending
    xhr.send(JSON.stringify(data));

    // Optionally, provide some visual feedback to the user that the item has been added to the cart
    alert('Item added to cart!');
}


    </script>

</body>

</html>

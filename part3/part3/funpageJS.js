
// Create style object for a card
function create_CardStyle(src, color) {
    return { card_img: src, card_color: color };
}



var cards_style = [
    create_CardStyle("imgs/gameImgs/burger.jpg", "rgb(120, 120, 196)"),
    create_CardStyle("imgs/gameImgs/masha.jpg", "rgb(125, 243, 102)"),
    create_CardStyle("imgs/gameImgs/cheese.jpeg", "rgb(209, 160, 26)"),

    create_CardStyle("imgs/gameImgs/wha.jpeg", "rgb(45, 154, 68)"),
    create_CardStyle("imgs/gameImgs/donate.jpg", "rgb(171, 18, 74)"),
    create_CardStyle("imgs/gameImgs/fires.jpg", "rgb(171, 18, 153)")
];


// check if the index in the gird is not empty
var is_index_empty = new Array(12).fill(1);

// store two pairs for each card style (first and second index in grid)
var index_of_card_InGrid = [];

// store the index of style for each index of the gird 
var index_of_cardStyle = new Array(13).fill(0);



// generate the index  in the grid randomly for each style
for (i = 1; i <= 6; i++) {
    var pos_one = -1;

    while (pos_one == -1) {
        var curr_choice = Math.floor(Math.random() * 12) + 1;

        if (is_index_empty[curr_choice - 1] == 1) {
            pos_one = curr_choice;
            is_index_empty[curr_choice - 1] = 0;
            break;
        }
    }

    var pos_two = -1;


    while (pos_two == -1) {
        var curr_choice = Math.floor(Math.random() * 12) + 1;

        if (is_index_empty[curr_choice - 1] == 1) {
            pos_two = curr_choice;
            is_index_empty[curr_choice - 1] = 0;
            break;
        }
    }

    index_of_card_InGrid.push([pos_one, pos_two]);

    // store the style of the choosing indexes
    index_of_cardStyle[pos_one] = i;
    index_of_cardStyle[pos_two] = i;
}


// change the card style for given card index:
function change_CardContent(card_inex, card_style) {

    var card = document.getElementById("card-" + card_inex);
    var img = card.querySelector("a img");


    card.style.border = "5px solid " + card_style.card_color;
    img.style.border = "5px solid " + card_style.card_color;
    img.src = card_style.card_img;
}



// display the choosing style for each index in the grid:
for (i = 0; i < cards_style.length; i++) {
    change_CardContent(index_of_card_InGrid[i][0], cards_style[i]);
    change_CardContent(index_of_card_InGrid[i][1], cards_style[i]);
}




var isItSecondClick = 0;
var src_Of_firstClick = 0;

var total_points = 0;


// Handle the event when cliking a card:
function click_card(card) {

    var card_id = card.id;
    var card_index = 0;

    // getting the index form the id: ("card-##") 
    for (var i = 5; i < card_id.length; i++) {
        card_index = 10 * card_index + Number(card_id.charAt(i));
    }


    var number_of_cardStyle = index_of_cardStyle[card_index];

    change_CardContent(card_index, cards_style[number_of_cardStyle - 1]);


    var img_src = card.querySelector("a img").src;


    // check if its the second click:
    if (isItSecondClick == 1) {

        isItSecondClick = 0;

        if (src_Of_firstClick == img_src) {
            total_points++;

            console.log(src_Of_firstClick, img_src, "YESs");
            document.getElementById("points").innerHTML = total_points;
        }
    }

    else {

        isItSecondClick = 1;

        console.log(isItSecondClick, img_src, "YES");
        src_Of_firstClick = img_src;
    }
}



let strating_counter = 5;

// change the content every second
let countStaring = setInterval(function () {

    // decrease the number of the timer
    document.getElementById("timer").innerHTML = strating_counter;
    strating_counter--;

    if (strating_counter < 0) {

        clearInterval(countStaring);

        for (i = 1; i <= 12; i++) {

            // change the style of the cards
            var card = document.getElementById("card-" + i);
            var img = card.querySelector("a img");
            var linkk = card.querySelector("a");

            card.style.border = "5px solid black";
            img.style.border = "5px solid black";
            img.src = "imgs/gameImgs/question-sign-2.png";


            // adding the event of cliking for the cards:

            // IIFE : Function call itslef
            (function (card) {

                // click_card is clousre under it's parent function so it have access to card after each itreacion
                linkk.onclick = function () { click_card(card) };
            })(card);

        }


        var counter_playing = 10;


        document.getElementById("timer").innerHTML = "Go";
        document.getElementById("timer").style.color = "green";

        let countPlaying = setInterval(function () {

            document.getElementById("timer").innerHTML = counter_playing;
            counter_playing--;


            if (counter_playing < 0) {

                clearInterval(countPlaying);


                // change the style of the cards
                for (i = 1; i <= 12; i++) {

                    var card = document.getElementById("card-" + i);
                    var img = card.querySelector("a img");
                    var linkk = card.querySelector("a");

                    card.style.border = "5px solid black";
                    img.style.border = "5px solid black";
                    img.src = "imgs/gameImgs/question-sign-2.png";
                }


                document.getElementById("timer").innerHTML = "Finish";
                document.getElementById("timer").style.color = "red";

                if (total_points == 12) {
                    var discount_number = 77898;

                    alert("You win a discount: " + discount_number);
                }
            }

        }, 1000);

    }
    
}, 1000);




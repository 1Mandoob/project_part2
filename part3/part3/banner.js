
var displayed_text = ["Welecome to the Mandoob website!", "To day is", "", "and the time is", ""];
var index = 0;


var curr_date = new Date();

//channing and displaying the text every 2 seconds 
setInterval(function () {

    if (index >= displayed_text.length) {
        index = 0;
    }

    // getting the current date & time
    if (index == 2) {
        displayed_text[index] = curr_date.toDateString();
    }

    else if (index == 4) {
        displayed_text[index] = curr_date.toTimeString().slice(0, 8);
    }

    document.getElementById("text-banner").innerHTML = displayed_text[index];
    index++;
}, 2000)

// Turn background to blue using Javascript (no CSS)
    // Upon each button is set a different color
        // Background timer change will change color of text too

function setBackgroundColor() {
    document.body.style.backgroundColor = "blue";
    setTimeout ( "textColorChange()", 3000 );
    // Code below changes background to red after 3 seconds, by calling the function (backgroundColorChange) below.
    setTimeout ( "backgroundColorChange()", 3000 );
}

function backgroundColorChange() {
    document.body.style.backgroundColor = "red";
}

function textColorChange() {
    document.body.style.color = "white";
}

// Turn on below to set background with Image too
 // TODO -- Scale image to over full screen

function setBackgroundImage() {
    document.body.style.background = "#dddddd url('/public_html/assets/images/daylight-water.jpg') no-repeat top left";
}





// Select a div and change innterHTML to innerText

function demoInnerText() {
    alert(document.getElementById("demo").innerText)
}


function demoInnerHTML() {
    alert(document.getElementById('demo').innerHTML)
}

function demoTextContent() {
    alert(document.getElementById('demo').textContent)
}
// Change a class once you do an action (e.g. When I click this button, change the background to blue

// Make a backing plate
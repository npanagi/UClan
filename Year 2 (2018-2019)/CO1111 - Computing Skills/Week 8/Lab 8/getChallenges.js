//---------------------//
// FLORI ISE NOOBAS <3 //
//---------------------//

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
        //console.log(this.responseText);
        var object = JSON.parse(this.responseText);
       for (var i = 0; i < object.treasureHunts.length; i++) {
            console.log(object.treasureHunts[i].name);
        }

    }
    else {
        //TODO If response not received (error).
    }
};
xhttp.open("GET", "https://codecyprus.org/th/api/list", true);
xhttp.send();

var myObj = {firstname: "John", lastname: "Smith", age: 30, male: true};
//Define the data as a JavaScript object.

var myJSON = JSON.stringify(myObj); //Convert it to string using JSON.stringify().
console.log(myJSON); //Print the JSON text to the console.

var challangesList = document.getElementById("challenges");
//for (var i=0; i < )

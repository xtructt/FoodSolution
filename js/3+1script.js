// var foodchoosen = []

//your code here
//Script for menu 
// Variables
var foodArray = [];
var foodArrayCart = [];
var savedname = ""
var name = "";
var total = 0;
var numberOfFoods = 0;
var names = [];
var loginCheck = false;
var quantity = 0;
var position = -1;
var foodNameIndex = [];
var test1 = [];

// Cookies script 
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
};

function getCookie(cname) {
  
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
};

function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 30);
        }
    }
};



//MENU FUNCTIONS/////////////////////////////////////////////////////////////////////////////////////
//Function get food name +  price + display +calculate+ remove item ( work but not as expect)
function saveLocal(){
    var foodNameJson = JSON.stringify(foodArray); //tranform array to json string
    sessionStorage.setItem("foodname", foodNameJson); //save json strong to local/sessionStorage 
};
function newIndex(a){
    for (i = 0; i < foodNameIndex.length; i++){
        if (a == foodNameIndex[i]){
            return i;
        }
    }
};
function getQuantity(){
    var a = 0;
    for (i = 0; i < foodArray.length; i++){
        a += foodArray[i][2];
    }
    return a;
};
function getInfo(clickedFood) {
    var check = false; // used to check if the food is in the array
    name = clickedFood.find(".foodcontent h7").text(); //get name
    var price = Number(clickedFood.find(".foodcontent .Price").text());//get price
    //Check if the food is already in the list
    for (i = 0; i < foodArray.length; i++) {
        if (name == foodArray[i][0]) {
            check = true;
            //Increase the quantity
            foodArray[i][2]++;
            document.getElementById(i).innerHTML = "(" + foodArray[i][2] + ")";
        }
    };
    // if clicked item is not in the array - Inner HTML part
    if (!(check)) {
        foodArray.push([name, price, 1]); //Add food's name to an array
        foodNameIndex.push(name);
        position = newIndex(name);// get position for new items. The postion is stored on a seperate array
        //if not choosen display on the list
        quantity = 1;
        $(".choosefoods").append("<li><span class='nameOfFoods'>" + name + "</span> <span id='" + position + "'>(" + quantity + ")</span><span> <i class='fa fa-trash trashicon'></i></span></li>");
    };
    total += price; // Caculate Total
    $(".Total").html(total); //Change Total cost
   saveLocal();
}
//Add remove function
$(".choosefoods").on("click", "span", function (event) {
    //Get name + index of deleted item
    var name = $(this).parent().find(".nameOfFoods").text();
    var index = -1;
    for (i = 0; i < foodArray.length; i++) {
        if (name == foodArray[i][0]) {
            index = i;
        }
    }
    if (foodArray[index][2] > 1) {
        foodArray[index][2]--;
        document.getElementById(index).innerHTML = "(" + foodArray[index][2] + ")";
        total -= foodArray[index][1];
        $(".Total").html(total);
        saveLocal();
    } else {

        $(this).parent().fadeOut(500, function () {
            total -= foodArray[index][1];
            $(".Total").html(total);
            //remove item from the array
            foodArray.splice(index, 1);// update food information array
            foodNameIndex.splice(index, 1);// upadate the index array
            $(this).remove();
            saveLocal();
        })
    };
    event.stopImmediatePropagation;
});
//add food and caculate cost when clicked
$(".foodinfo").click(function () {
    //check number of food choosen
    var foodQuantity = getQuantity(); // count the # of food choosen
    if (foodQuantity != 3) {
        var a = $(this);
        getInfo(a);
    } else {
        alert("Would you like to purchase?")
    };
});

$(".foodinfo1").click(function () {
    var a = $(this)
    getInfo(a)
});
////////////////////////////////////////////////////////////////////////////////////////////////

//JS for Cart
// function deleteStorage(){
//     sessionStorage.getItem("foodname", "");
// }
function displayCart(){
    var cartTotal = 0;
    var displaytimes = 0;
    //get items from local storage
    var foodNameJson = sessionStorage.getItem("foodname")
    // json string --> array
    foodArrayCart = JSON.parse(foodNameJson);
    // print the result
    for (i = 0; i < foodArrayCart.length; i++){
        $(".displayFoods").append("<div class='row foodLines'>");
        $(".displayFoods").append("<div class='col-md-3 foodName'>" + foodArrayCart[i][0] + "</div>");
        $(".displayFoods").append("<div class='col-md-3'>" + foodArrayCart[i][1] + "</div>");
        $(".displayFoods").append("<div class='col-md-3'>" + foodArrayCart[i][2] + "</div>");
        $(".displayFoods").append("<div class='col-md-3'>" + foodArrayCart[i][2] * foodArrayCart[i][1] + "</div>");
        cartTotal += foodArrayCart[i][2] * foodArrayCart[i][1];
        $(".displayFoods").append("</div>");
    };
    $(".displayFoods").append("<div class='row'></div>");
    
    $(".displayFoods").append("<div class='col-md-7 cartTotal tfood'>" + cartTotal + "</div>");
};
$(".cartInfo").one("mouseover", function(){
        AutoFill();
        deltime();
});

/////////////////////////////////////////////////////////////////////////////////////////////////////

// }

//remove items when click on trash icon
// $(".choosefoods").on("click", "span", function (event) {
//     $(this).parent().fadeOut(500, function () {
//         $(this).remove();
//         var a = $(this).parent().text();
//         console.log($.inArray(a, foodchoosen))
//     });
//     event.stopImmediatePropagation;
// });

//delivery ramdom time
function deltime() {
    var calTime = Math.floor((Math.random() * 60) + 5);
    document.getElementById('deltime').innerHTML = calTime;
};


//session storage for search panel 
function place() {
    if (typeof (Storage) !== "undefined") {
        sessionStorage.setItem("place", document.getElementById('result').value);
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
    }

};

//script for shipping/checkout 


// function message ( loginMsg ) // or we can even do think this and appear 2 buttons - and depends on what customer choose will run the bellow script 
// 								//if we are UNABLE to do it. 
// 	{
// 		    if (loginMsg == null) // if nothing is easier than if we set the loginMsg == somethings here 
// 		    {
// 		        //nothing happens
// 		    } else if (loginMsg == something) {
// 		        document.getElementById("address").innerHTML = localStorage("address") // maybe this one will have to be number or index
// 		            ...
// 		    }
// 	};

// //onload fucntion to validate user login or not 

// function checklogin (localstorage (username)) {
// 		if (localstorage(username) == null) {
// 			//nothing happens
// 		} else if {
// 			document.getElementById("loginresult").innerHTML = "<p id='loginMsg'>login as" . localstorage(username) . "</p>"

// 		}
// };


//SignUp Fomr ( input to local storage)

//Log in form (match with local storage)

function validateForm() {
    var usr1 = document.loginForm.usr.value;
    var pw = document.loginForm.pword.value;
    var username = "username";
    var password = "password";
    if ((usr1 == username) && (pw == password)) {
        return true;
    } else {
        alert("Login was unssuccefull");
        return false;
    }
};


//https://stackoverflow.com/questions/29497179/how-to-add-multiple-text-to-local-storage-html5
//https://stackoverflow.com/questions/2837988/multiple-storages-using-localstorage
// https://stackoverflow.com/questions/23134756/simple-javascript-login-form-validation
//https://stackoverflow.com/questions/12275247/get-id-by-key-in-localstorage

//https://stackoverflow.com/questions/10688974/reading-localstorage-values-via-indexes 


//https://stackoverflow.com/questions/34299555/javascript-login-register-with-localstorage

//Singup - Log in 

function storing(tname, pw) {
    names[0] = document.getElementById('tname').value;
    names[1] = document.getElementById('pw').value;
    names[2] = document.getElementById('temail').value;
    names[3] = document.getElementById('tadress1').value;
    names[4] = document.getElementById('tsurburb1').value;
    names[5] = document.getElementById('tstate1').value;
    names[6] = document.getElementById('tpost1').value;
    names[7] = document.getElementById('tphone1').value;

    console.log(names);
    localStorage.setItem("names", JSON.stringify(names));
    alert("thank you for signup");
    
};

function checking(un, p) {
    var lognames = localStorage.getItem("names");
    console.log(lognames);
    names1 = JSON.parse(lognames);
    console.log(names1);
    var ckname = [];
    ckname[0] = document.getElementById("un").value;
    ckname[1] = document.getElementById("p").value;
    console.log(ckname);
    if (ckname[0] == names1[0] && ckname[1] == names1[1]) {
        alert('Welcome back ' + ckname[0]);

        loginCheck = true;
    } else {
        alert('Wrong password or username');
    };


};

function AutoFill() {
    console.log("Run");
    var test = localStorage.getItem("names");
    console.log(test);
     test1 = JSON.parse(test);
    console.log(test1);
         document.getElementById("cname").value = test1[0];
         document.getElementById("email").value = test1[2];
         document.getElementById("phone1").value = test1[7];
         document.getElementById("adress1").value = test1[3];
         document.getElementById("surburb1").value = test1[4];
         document.getElementById("state1").value = test1[5];
         document.getElementById("postcode1").value = test1[6];
        
         
            
};

//backup


//Start function
class StarRating extends HTMLElement {
    get value () {
        return this.getAttribute('value') || 0;
    }

    set value (val) {
        this.setAttribute('value', val);
        this.highlight(this.value - 1);
    }

    get number () {
        return this.getAttribute('number') || 5;
    }

    set number (val) {
        this.setAttribute('number', val);

        this.stars = [];

        while (this.firstChild) {
            this.removeChild(this.firstChild);
        }

        for (let i = 0; i < this.number; i++) {
            let s = document.createElement('div');
            s.className = 'star';
            this.appendChild(s);
            this.stars.push(s);
        }

        this.value = this.value;
    }

    highlight (index) {
        this.stars.forEach((star, i) => {
            star.classList.toggle('full', i <= index);
        });
    }

    constructor () {
        super();

        this.number = this.number;

        this.addEventListener('mousemove', e => {
            let box = this.getBoundingClientRect(),
                starIndex = Math.floor((e.pageX - box.left) / box.width * this.stars.length);

            this.highlight(starIndex);
        });

        this.addEventListener('mouseout', () => {
            this.value = this.value;
        });

        this.addEventListener('click', e => {
            let box = this.getBoundingClientRect(),
                starIndex = Math.floor((e.pageX - box.left) / box.width * this.stars.length);

            this.value = starIndex + 1;

            let rateEvent = new Event('rate');
            this.dispatchEvent(rateEvent);
        });
    }
}

customElements.define('x-star-rating', StarRating);

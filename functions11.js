
function removeCookies(index) {
    var result = confirm("Delete " + document.title + " From Shopping Cart ?");
    if ( result == true) {

        var my_cookies = unescape(document.cookie);

        //Split cookie up based on ;
        var cookie_array = my_cookies.split(";");

        //Get the length of the resulting array
        var length = cookie_array.length;

        var i = 0;
        
         
            //Split key/value pairs
          
            var cookie_val = cookie_array[i].split("=");

        for (i = 0; i < length; i++) {


            if (i == index) {

                //Delete the cookie
                document.cookie = cookie_val[0] + "=" + cookie_val[1] + cookie_val[2] + "=" + cookie_val[3] + "=" + cookie_val[4] + ";" + "expires=Thu, 01-Jan-95 00:00:01 GMT";
            }

        }
          
        location.reload();
    }
}

var total_amount = 0;
function setCookies() {
    var result = confirm("Add " + document.title + " to cart ?");
   
    if (result == true) {
        var title = document.title;
        var catalog = document.loop_form.catalog.value;
        var price = document.loop_form.price.value;
        var quanity = document.loop_form.quanity.value;
        var item = document.getElementById("image").getAttribute("src");
        var total = price * quanity;
        total_amount += total;
        //Set the cookie
        document.cookie = catalog + "=" + item + "=" + price + "=" + quanity + "=" + total.toFixed(2) + "=" + title + "=" + total_amount;
        //    document.write(document.cookie);
      
    }
  
}
var i = 0;


function checkout() {

    var p_total = 0;
    //See if Cookie is empty
    if (document.cookie.length > 0) {
        //document.write(document.cookie + "<BR/>");




        //Unescape cookies - only necessary if used escape
        var my_cookies = unescape(document.cookie);

        //Split cookie up based on ;
        var cookie_array = my_cookies.split(";");
        var product = my_cookies.split(";");
        //Get the length of the resulting array
        var length = cookie_array.length;

        for (i = 0; i < length; i++) {
            //Split key/value pairs
            var cookie_val = cookie_array[i].split("=");
        }

        for (i = 0; i < length; i++) {
            //Split key/value pairs
            var index = i;
            //Build table dynamically
            var newrow1 = document.getElementById("table1").insertRow(1);

            var newtd0a = newrow1.insertCell(-1);
            newtd0a.align = "center";
            newtd0a.width = 100;
            var newtd1a = newrow1.insertCell(-1);
            newtd1a.align = "center";
            var newtd2a = newrow1.insertCell(-1);
            newtd2a.align = "center";
            var newtd3a = newrow1.insertCell(-1);
            newtd3a.align = "center";
            var newtd4a = newrow1.insertCell(-1);
            newtd4a.align = "center";
            newtd0a.innerHTML = cookie_val[0];
            newtd1a.innerHTML = cookie_val[5] + ' <BR /><img src=  "' + cookie_val[1] + ' "/> ';
            newtd2a.innerHTML = '$' + cookie_val[2];
            newtd3a.innerHTML = cookie_val[3];
            newtd4a.innerHTML = '$' + cookie_val[4];

            var p_total = Number(cookie_val[6]) + p_total;
            var cookie_val = cookie_array[i].split("=");

        }


        var newrow2 = document.getElementById("table1").insertRow(length + 1);

        var newtd1 = newrow2.insertCell(-1);
        var newtd2 = newrow2.insertCell(-1);
        var newtd3 = newrow2.insertCell(-1);
        var newtd4 = newrow2.insertCell(-1);
        var newtd5 = newrow2.insertCell(-1);
        newtd1.align = "left";
        newtd1.width = 100;
        newtd1.innerHTML = "TOTAL";
        newtd5.innerHTML = '$' + p_total.toFixed(2);
    }
    else {
        window.alert("Empty Cart - Please Buy Something First");
    }

}
function processCookies() {

    var p_total = 0;
    //See if Cookie is empty
    if (document.cookie.length > 0) {
        //document.write(document.cookie + "<BR/>");


      

        //Unescape cookies - only necessary if used escape
        var my_cookies = unescape(document.cookie);

            //Split cookie up based on ;
            var cookie_array = my_cookies.split(";");
            var product = my_cookies.split(";");
            //Get the length of the resulting array
            var length = cookie_array.length;

            for (i = 0; i < length; i++) {
                //Split key/value pairs
                var cookie_val = cookie_array[i].split("=");
            }

        for (i = 0; i < length; i++) {
                   
                //Split key/value pairs
            
            //Build table dynamically
            var newrow1 = document.getElementById("table1").insertRow(1);

            var newtd0a = newrow1.insertCell(-1);
            newtd0a.align = "center";
            newtd0a.width = 100;
            var newtd1a = newrow1.insertCell(-1);
            newtd1a.align = "center";
            var newtd2a = newrow1.insertCell(-1);
            newtd2a.align = "center";
            var newtd3a = newrow1.insertCell(-1);
            newtd3a.align = "center";
            var newtd4a = newrow1.insertCell(-1);
            newtd4a.align = "center";
            newtd0a.innerHTML = cookie_val[0];
                newtd1a.innerHTML = cookie_val[5] + ' <BR /><img src=  "' + cookie_val[1] + ' "/> <BR/><input name="label" type="button" value="Remove" id="index" onclick="removeCookies('+i+')" >';
            newtd2a.innerHTML = '$' + cookie_val[2];
            newtd3a.innerHTML = cookie_val[3];
            newtd4a.innerHTML = '$' + cookie_val[4];

                var p_total = Number(cookie_val[6]) + p_total;
                var cookie_val = cookie_array[i].split("=");

            }


        var newrow2 = document.getElementById("table1").insertRow(length+1);

        var newtd1 = newrow2.insertCell(-1);
        var newtd2 = newrow2.insertCell(-1);
        var newtd3 = newrow2.insertCell(-1);
        var newtd4 = newrow2.insertCell(-1);
        var newtd5 = newrow2.insertCell(-1);
        newtd1.align = "left";
        newtd1.width = 100;
        newtd1.innerHTML = "TOTAL";
        newtd5.innerHTML = '$' + p_total.toFixed(2);
    }
    else {
        window.alert("Empty Cart - Please Buy Something First");
    }

}

function address(event) {

    
    if (event.key === 'Tab')
    {
       
        const address = document.form1.address1.value;
        const validAddress = /^\d+\s+[a-zA-Z]+(\s+[a-zA-Z]+)*\s*$/.test(address);
        if (!validAddress) {
       
             alert("Please enter a valid address");
            event.target.focus();
            event.preventDefault();
        }
    }


}

function credit(event) {
     
    if (event.key === 'Tab') {
        const num = document.form1.address12.value;
        var i = 0;
        var sum = 0;
        var doublestring = "";
        if (num.length !== 16) {
            alert("Invalid Credit card number!");
            cc.target.focus();
            cc.preventDefault();

        }
     
        for (i = 0; i < num.length; i++) {
            if (i % 2 == 0) {
                doublestring += (num[i] * 2), toString();

            }
            else {
                doublestring += num[i];
            }
            sum += parseInt(doublestring[doublestring.length - 1]);
        }



        if (sum % 10 !== 0) {
            windows.alert("Invalid Credit card number!");
            cc.target.focus();
            cc.preventDefault();
        }

        

    }
}
var pics = new Array(10);
pics[0] = "images/0.png";
pics[1] = "images/1.png";
pics[2] = "images/2.png";
pics[3] = "images/3.png";
pics[4] = "images/4.png";
pics[5] = "images/5.png";
pics[6] = "images/6.png";
pics[7] = "images/7.png";
pics[8] = "images/8.png";
pics[9] = "images/9.png";
 


//Array for labels

var captions = new Array("Weights", "Balance-Living Lifestyle Change", "Elliptical Trainer", "Download our App from the App Store ", "Our Weight Room", "Read our Health Blogs!", "Meet our Trainers!", "Our Wide Assortment of Free-Weights", "Enjoy our Outdoor Yoga Class!", "Balance-Living is Healthy Living!");


var c = 0;
var timer = 0;
var fadeOut_opacity = 1;
var fadeIn_opacity = 0;
var delta = 0.001;


function dissolve1() {
    document.getElementById("pic1").style.opacity = fadeOut_opacity;
    document.getElementById("pic2").style.opacity = fadeIn_opacity;
    document.getElementById("link1").innerHTML = captions[c+1];

    fadeOut_opacity -= delta;
    fadeIn_opacity += delta;

    if ((fadeIn_opacity >= 1) && (fadeOut_opacity <= 0)) {  return; }

    timer = setTimeout("dissolve1()",1 );
}
function sleep() {

    console.log("sleep ");
}
function cyclePics() {
    //Set captions
   
    document.getElementById("link1").innerHTML = captions[c];
    
    //Set labels
      fadeOut_opacity = 1;
    fadeIn_opacity = 0;

    setTimeout("sleep()", 7000);
    dissolve1();
    c += 1;
    //Reset 
    if (c % 9 == 0)
        c = 0;


    setTimeout("sleep()", 7000);
   // reset pics ;
    document.getElementById("pic1").src = pics[c];
    document.getElementById("pic2").src = pics[c + 1];

    document.getElementById("pic1").style.opacity = 1;
    document.getElementById("pic2").style.opacity = 0;
   

    
    //Set time out
    timer = setTimeout("cyclePics()", 7000);
}
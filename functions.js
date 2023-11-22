function event1(event, info) {
    window.alert("Empty Cart - Please Buy Something First");

    //Display info for text
    if (info === "Text") {
        window.alert("Text is " + document.myform.text.value);
    }
    else if (info == "Key") {
        var key = event.key;
        alert("Key is " + key);
    }
}
var req;

function validate() {
    var url = "http://localhost/validate.php;
    req = new XMLHttpRequest();
    req.onreadystatechange = callback;

    req.open("POST", url, true);
    req.send(null);
}


function callback()
{
    if (req.readyState == 4) {
        if (req.status == 200) {
            // update the HTML DOM based on whether or not username is valid
            document.getElementById('label1').innerHTML = req.responseText; // places text in       contentArea
        }
    }
}


function setCookies() {
    confirm("Add " + document.title+" to cart ?")
   

    var key = document.form.quanity.value;
    var value = document.form.price.value;

    //Set the cookie
    document.cookie = key + "=" + value;
    document.write(document.cookie);
   
}


function checkout() {
   document.write(document.cookie + "<BR/>");

    var p_total = 0;
    //See if Cookie is empty
    if (document.cookie.length > 0) {
        document.write(document.cookie + "<BR/>");




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
			// document.write("$value is " + cookie_val[i] + "<br/>"); 
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
            newtd0a.innerHTML = cookie_val[1];
            newtd1a.innerHTML = ' <BR /><img src=  "' + cookie_val[0] + ' "/> ';
            newtd2a.innerHTML = '$' + cookie_val[2];
            newtd3a.innerHTML = cookie_val[3];
           // newtd4a.innerHTML = '$' + cookie_val[4];

            var p_total = Number(cookie_val[5]) + p_total;
            var cookie_val = cookie_array[i].split("=");

        }



    }
    else {
        window.alert("Empty Cart - Please Buy Something First");
    }

}
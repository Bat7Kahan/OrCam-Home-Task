 /// <reference path="jquery-3.6.0.js" />

$("#submit").on('click', function () {
    
    document.getElementById("submit").disabled = true;
    //resets spans with error messages from previous error messages
    setError("first_name",'');
    setError("last_name",'');
    setError("country",'');
    setError("phone",'');
    setError("email",'');
    //gets form information
    const first_name = document.getElementById('first_name').value;
    const last_name = document.getElementById('last_name').value;
    const country = document.getElementById('country').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;

    //validation checks
    //feild_name, feild_value, regex, is required?
    if(!validateFeild("first_name" , first_name,/^[A-Za-z \-]*$/)) return;
    if(!validateFeild("last_name" ,last_name, /^[A-Za-z \-]*$/)) return;
    if(!validateFeild("country", country, /^[A-Za-z \-]*$/)) return;
    if(!validateFeild("phone" ,phone, /^[0-9\-]*$/)) return;
    if(!validateFeild("email", email, /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) return;

    //if no errors occured
        $.ajax({
            type: "POST",
            url: "register.php",
            dataType: "text",
            data: {
                "first_name": first_name,
                "last_name": last_name,
                "country": country,
                "phone": phone,
                "email": email
            },
            success: (response) => {
                document.getElementById("submit").disabled = false;
//                const json_response = JSON.parse(response);
//                if(json_response.success === ''){
//                    setError(first_name_error,json_response.first_name_error);
//                    setError(last_name_error,json_response.last_name_error);
//                    setError(country_error,json_response.country_error);
//                    setError(phone_error,json_response.phone_error);
//                    setError(email_error,json_response.email_error);
//                }
//                else{
                    document.getElementById('user_information_form').reset();
                    document.getElementById('message').innerHTML = response;
                    setTimeout(function () {
                        document.getElementById('message').innerHTML = '';
                    }, 5000);
//                }
            },
            error: (response) => {
               document.getElementById("submit").disabled = false;
               //const json_response = JSON.parse(response);
               document.getElementById('message').innerHTML = response;
                setTimeout(function () {
                    document.getElementById('message').innerHTML = '';
                }, 5000);
            }
        });
    //}
});

//sets error message in html
//input: 1. feild name 2. message
function setError(feild, message){
    document.getElementById(`${feild}_error`).innerText = message;
    return;
}

//check feild validation
//boolean function
//input: 1. feild name 2. feild value 3. regex (optional) 4. is required (default is true)
//if error occures returns false
function validateFeild(feild_name, feild_value, regex){
    //checks that feilds are not empty
    if(feild_value === ''){
        setError(feild_name, `${feild_name} is Required`);
        document.getElementById("submit").disabled = false;
        return false;
    }
    //check that pattern exsits in string
    if(!regex.test(feild_value)){
        setError(feild_name, `Invalid ${feild_name} (does not pattern ${regex})`);
        document.getElementById("submit").disabled = false;
        return false;
    }
    setError(feild_name, ``);
    return true;
}

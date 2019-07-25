var inputBox = document.getElementById('first_inp');

inputBox.onkeyup = function () {
    document.getElementById('first_text2').innerHTML = inputBox.value;
};
var inputBox1 = document.getElementById('last_input');
inputBox1.onkeyup = function () {
    document.getElementById('last_name2').innerHTML = inputBox1.value;
};

var inputBox2 = document.getElementById('street_address');
inputBox2.onkeyup = function () {
    document.getElementById('address_person').innerHTML = inputBox2.value;
};

var inputBox3 = document.getElementById('city_address');
inputBox3.onkeyup = function () {
    document.getElementById('sity_sity').innerHTML = inputBox3.value;
};

var inputBox4 = document.getElementById('state_address');
inputBox4.onkeyup = function () {
    document.getElementById('state').innerHTML = inputBox4.value;
};

var inputBox5 = document.getElementById('zip_code');
inputBox5.onkeyup = function () {
    document.getElementById('zip_zip').innerHTML = inputBox5.value;
};

var inputBox6 = document.getElementById('email_address');
inputBox6.onkeyup = function () {
    document.getElementById('email_email').innerHTML = inputBox6.value;
};

var inputBox7 = document.getElementById('phone');
inputBox7.onkeyup = function () {
    document.getElementById('phone_phone').innerHTML = inputBox7.value;
};
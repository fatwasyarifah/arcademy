function is_name_valid(name) {
    // huruf besar A sampai Z
    var Regex = /[A-Z]/g;
    return Regex.test(name) ;
}

function is_age_valid(age) {
    var Regex = /^[0-9]{2}?$/g ;
    return Regex.test(age) ;
}

function is_username_valid(username) {
    var Regex = /^[a-z]{4}[_.][0-9]{3}?$/g ;
    return Regex.test(username) ;
}

// penggunaan
console.log("Menuliskan 'TIARA' itu " + (is_name_valid('TIARA') ? 'Benar' : 'Salah')); // benar
console.log("Menuliskan 'tiara' itu " + (is_name_valid('tiara') ? 'Benar' : 'Salah')); // salah
console.log(" ")
console.log("Menuliskan '21' itu " + (is_age_valid(21) ? 'Benar' : 'Salah')); // benar
console.log("Menuliskan '8' itu " + (is_age_valid(8) ? 'Benar' : 'Salah')); // salah
console.log(" ")
console.log("Menuliskan 'yani_333' itu " + (is_username_valid('yani_333') ? 'Benar' : 'Salah')); // benar
console.log("Menuliskan 'dian.11' itu " + (is_username_valid('dian.11') ? 'Benar' : 'Salah')); // salah
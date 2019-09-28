function countChar(str, car) {
    let result = 0;
    for (i = 0; i < str.length; i++) {
        if (str.charAt(i) == car) {
            result++
        }
    }
    result > 0 ? console.log(result) : console.log("Not Found!");



}

const budi = countChar('abcdsags', 'a');
console.log(budi)
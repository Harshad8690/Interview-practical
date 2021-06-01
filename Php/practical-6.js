function checkPalindrome(inputString){

    var temp = inputString.toLowerCase();
    var reverseString = temp.split('').reverse().join('');

    if(temp == reverseString){
        return true;
    }
    else{
        return false;
    }
}

console.log(checkPalindrome("provide your string here"));
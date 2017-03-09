function randomNumber(min, max) {
    var minNum = parseInt(min);
    var maxNum = parseInt(max);
    var diff = Math.abs(max - min);
    return parseInt(Math.random() * diff) + min;
}
var dataKey = ['dumb','ways','the','best'];
var word = 'dumbways';
function check(dataKey, word){
    if(word == dataKey[0] || dataKey[1]){
        if(word == dataKey[2]){
            return false;
        }else if(word == dataKey[3]){
            return false;
        }
        return true;
    }
}
console.log("dumbways => " + check(dataKey,"dumbways"))
console.log("dumb => " + check(dataKey,"dumb"))
console.log("ways => " + check(dataKey,"ways"))
console.log("the => " + check(dataKey,"the"))
console.log("best => " + check(dataKey,"best"))

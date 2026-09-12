a = Number(prompt("enter a number"));
if (a >= 0 && a <=12 ){
console.log("child");
} else if(a >= 13 && a <= 20){
console.log("teen"); }
else if( a < 20 && a <= 59 ){
console.log("adult");
} else if(a >= 60){
console.log("old");
}else{
console.log("Invalid Age");
}
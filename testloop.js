/* var i;
for(i=0; i<3; i++){
    console.log(i,"inside i");
	setTimeout(() =>console.log(i) ,1);
}
let j;
for(j=0; j<3; j++){
    console.log(j, "inside j");
	setTimeout(()=>console.log(j),1);
} */

console.log(varNumber); // undefined
console.log(letNumber); // Doesn't log, as it throws a ReferenceError letNumber is not defined

var varNumber = 1;
let letNumber = 1;
// (function b() {
//     // console.log(a, this);
//     let a=2;
// })();

// let x = function () {
//     console.log(this);
//     let c=2;
// }

// x.d=3;
// console.log(x.d)
// b();
/* function test(i) {
    console.log(i);
} */
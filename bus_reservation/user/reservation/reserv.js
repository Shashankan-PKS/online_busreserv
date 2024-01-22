var a = document.getElementById("card1");
function show1(){
    if(a.style.display = 'none'){
        a.style.display = 'block';
    }
}
function hide1(){
    if(a.style.display = 'block'){
        a.style.display = 'none';
    }
}

var b = document.getElementById("card2");
function show2(){
    if(b.style.display = 'none'){
        b.style.display = 'block';
    }
}
function hide2(){
    if(b.style.display = 'block'){
        b.style.display = 'none';
    }
}

var c = document.getElementById("card3");
function show3(){
    if(c.style.display = 'none'){
        c.style.display = 'block';
    }
}
function hide3(){
    if(c.style.display = 'block'){
        c.style.display = 'none';
    }
}

var d = document.getElementById("card4");
function show4(){
    if(d.style.display = 'none'){
        d.style.display = 'block';
    }
}
function hide4(){
    if(d.style.display = 'block'){
        d.style.display = 'none';
    }
}

var e = document.getElementById("card5");
function show5(){
    if(e.style.display = 'none'){
        e.style.display = 'block';
    }
}
function hide5(){
    if(e.style.display = 'block'){
        e.style.display = 'none';
    }
}

var f = document.getElementById("card6");
function show6(){
    if(f.style.display = 'none'){
        f.style.display = 'block';
    }
}
function hide6(){
    if(f.style.display = 'block'){
        f.style.display = 'none';
    }
}

var g = document.getElementById("card7");
function show7(){
    if(g.style.display = 'none'){
        g.style.display = 'block';
    }
}
function hide7(){
    if(g.style.display = 'block'){
        g.style.display = 'none';
    }
}

var h = document.getElementById("card8");
function show8(){
    if(h.style.display = 'none'){
        h.style.display = 'block';
    }
}
function hide8(){
    if(h.style.display = 'block'){
        h.style.display = 'none';
    }
}

var i = document.getElementById("card9");
function show9(){
    if(i.style.display = 'none'){
        i.style.display = 'block';
    }
}
function hide9(){
    if(i.style.display = 'block'){
        i.style.display = 'none';
    }
}

var j = document.getElementById("card10");
function show10(){
    if(j.style.display = 'none'){
        j.style.display = 'block';
    }
}
function hide10(){
    if(j.style.display = 'block'){
        j.style.display = 'none';
    }
}

var k = document.getElementById("card11");
function show11(){
    if(k.style.display = 'none'){
        k.style.display = 'block';
    }
}
function hide11(){
    if(k.style.display = 'block'){
        k.style.display = 'none';
    }
}

var l = document.getElementById("card12");
function show12(){
    if(l.style.display = 'none'){
        l.style.display = 'block';
    }
}
function hide12(){
    if(l.style.display = 'block'){
        l.style.display = 'none';
    }
}


let output1 = document.getElementById("result1");

function disp1(num){
    output1.value += num  + (', ');
}
function del1(){
    output1.value = output1.value.slice(0,-1);
}
let output2 = document.getElementById("result2");

function disp2(num){
    output2.value += num  + (', ');
}
function del2(){
    output2.value = output2.value.slice(0,-1);
}
let output3 = document.getElementById("result3");

function disp3(num){
    output3.value += num  + (', ');
}
function del3(){
    output3.value = output3.value.slice(0,-1);
}
let output4 = document.getElementById("result4");

function disp4(num){
    output4.value += num  + (', ');
}
function del4(){
    output4.value = output4.value.slice(0,-1);
}
let output5 = document.getElementById("result5");

function disp5(num){
    output5.value += num  + (', ');
}
function del5(){
    output5.value = output5.value.slice(0,-1);
}
let output6 = document.getElementById("result6");

function disp6(num){
    output6.value += num  + (', ');
}
function del6(){
    output1.value = output6.value.slice(0,-1);
}
let output7 = document.getElementById("result7");

function disp7(num){
    output7.value += num  + (', ');
}
function del7(){
    output7.value = output7.value.slice(0,-1);
}
let output8 = document.getElementById("result8");

function disp8(num){
    output8.value += num  + (', ');
}
function del8(){
    output8.value = output8.value.slice(0,-1);
}
let output9 = document.getElementById("result9");

function disp(num){
    output9.value += num  + (', ');
}
function del(){
    output9.value = output9.value.slice(0,-1);
}
let output10 = document.getElementById("result10");

function disp10(num){
    output10.value += num  + (', ');
}
function del10(){
    output10.value = output10.value.slice(0,-1);
}
let output11 = document.getElementById("result11");

function disp11(num){
    output11.value += num  + (', ');
}
function del11(){
    output11.value = output11.value.slice(0,-1);
}
let output12 = document.getElementById("result12");

function disp12(num){
    output12.value += num  + (', ');
}
function del12(){
    output12.value = output12.value.slice(0,-1);
}
function filter() {

    var filterValue = document.getElementById('filter').value;
    var cards = document.getElementsByClassName('buscard');

    for (var i = 0; i < cards.length; i++) {
        var cardId = cards[i].id;

        if (filterValue === '') {
            cards[i].style.display = 'block';
        } else if( cardId === filterValue ) {
            cards[i].style.display = 'block';
        }else{
            cards[i].style.display = 'none';
        }
        
    }
}


document.getElementById('datesel').min = new Date().toISOString().split('T')[0];



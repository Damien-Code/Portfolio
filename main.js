let a = 0
let b = 0
let c = 0

function changeColor() {
    let color = ["black", "white"];
    let textColor = ["white", "black"];
    let bColor = ["white", "black"];
    document.getElementById("body").style.backgroundColor = color[a];
    document.getElementById("body").style.color = textColor[b];
    document.getElementById("body").style.borderColor = bColor[c];
    a++;
    b++;
    c++;
    if (a == color.length) a = 0;
    if(b == textColor.length) b = 0;
    if(c ==bColor.length) c = 0;
}



// function changeTextColor() {
//     let textColor = ["white", "black"];
//     document.getElementById("body").style.color = textColor[b];
//     b++;
//     if (b == textColor.length) b = 0;
// }




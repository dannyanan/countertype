window.addEventListener("load", function() {
    // console.log('typetester.js loaded!');

// Gets data from user and updates Type Tester

let typeSpec = document.querySelector("#typeSpecimen");

// SET FONT FAMILY FOR PAGE
let fontFamily = typeSpec.dataset.fontFamily;
typeSpec.style.fontFamily = fontFamily;
// console.log(fontFamily);


// UPDATE SIZE FUNCTIONALITY 
let sizeInput = document.getElementById('size');
sizeInput.addEventListener('input',updateSize);

function updateSize(){
    let newVal = sizeInput.value;
    let newFontSize = newVal + 'px';
    let label = document.getElementById('sizeDetail');

    typeSpec.style.fontSize = newFontSize;
    label.innerHTML = newFontSize;
}


// UPDATE LEADING FUNCTIONALITY
let lineHeightInput = document.getElementById('leading');
lineHeightInput.addEventListener('input',updateLineHeight);

function updateLineHeight(){
    let newVal = lineHeightInput.value;
    let newLineHeight = newVal + '%';
    let label = document.getElementById('leadingDetail');

    typeSpec.style.lineHeight = newLineHeight;
    label.innerHTML = newLineHeight;
}


// UPDATE KERNING FUNCTIONALITY
let kerningInput = document.getElementById('kerning');
kerningInput.addEventListener('input',updateKerning);

function updateKerning(){
    let newVal = kerningInput.value;
    let newKerning = newVal + 'px';
    let label = document.getElementById('kerningDetail');

    typeSpec.style.letterSpacing = newKerning;
    label.innerHTML = newKerning;
}


// UPDATE PARAGRAPH ALINGMENT FUNCTIONALITY
document.querySelector('.alignLeft').addEventListener('click', function(){
    typeSpec.style.textAlign = 'left';
});

document.querySelector('.alignCenter').addEventListener('click', function(){
    typeSpec.style.textAlign = 'center';
});

document.querySelector('.alignRight').addEventListener('click', function(){
    typeSpec.style.textAlign = 'right';
});
  


// Whole lightswitch functionality
let lightIsOn = true;
let lightSwitch = document.querySelector('#switch');
let switchBox = document.querySelector('.lights');
let switchStatus = document.querySelector('h6.status');
let bgColor = '#BD7100';

// Function to turn lights off
function lightsOff() {
    typeSpec.style.backgroundColor = 'black';
    typeSpec.style.color = bgColor;
    lightSwitch.src = lightSwitch.dataset.srcOff;
    switchStatus.innerHTML = 'off';
    lightIsOn = false;
}
// Function to turn lights on
function lightsOn() {
    typeSpec.style.backgroundColor = bgColor;
    typeSpec.style.color = 'black';
    lightSwitch.src = lightSwitch.dataset.srcOn;
    switchStatus.innerHTML = 'on';
    lightIsOn = true;
}

// Functionality to flip light switch on and off
switchBox.addEventListener('click', function(){
    if (lightIsOn === true) {
        lightsOff();
    } else {
        lightsOn();
    }
});

 
// Function to detect number of available options 
// in option bar and format it accordingly,
// depending on width of viewport

// let width = window.innerWidth;
// let optionRow = document.querySelector('.options');
// let colNum = optionRow.children.length;

// function formatOptionRow() {   
//     if (colNum <= 3 || width > 480) {
//         optionRow.style.gridTemplateColumns = `repeat(${colNum}, auto)`;
//     } else if (colNum > 3 && width <= 480) {
//         optionRow.style.gridTemplateColumns = "repeat(3, auto)";
//         optionRow.style.gridTemplateRows = "repeat(2, auto)";
//         optionRow.style.borderBottom = "1px solid black";
//     }
// }

// formatOptionRow();



// OPENTYPE FEATURES

let ssList = [document.querySelector('#ss00'), document.querySelector('#ss01'), document.querySelector('#ss02'), document.querySelector('#ss03'), document.querySelector('#ss04'), document.querySelector('#ss05')];

let typeSpecPara = document.querySelector('#typeSpecimen p');

for (i = 0; i < ssList.length; i++) {
    ssList[i].addEventListener('click',function(){
        let id = this.id;
        typeSpecPara.style.fontFeatureSettings = id;
        console.log(id);
    });
};


}); // CLOSE on WINDOW load




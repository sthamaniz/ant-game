const SCREEN_OVERFLOW = 55;
const HEIGHT_OF_ANT = 50;
const WIDTH_OF_ANT = 50;
const NUMBER_OF_ANTS = 2; 

/*

OR

const CONSTANTS = {
    screenOverflow: 55,
    heightOfAnt: 50
}

and use it as 

CONSTANTS.screenOverflow 
*/


const antPosition = {
    top: null,
    left: null
}

const antMovement = {
    top: 'increase',
    left: 'increase',
    size: 1
}

const init = (field) => {
    let displayAnts = ``;
    for (let a = 0; a < NUMBER_OF_ANTS; a++) {

        antPosition.top = Math.floor(Math.random() * (parseFloat(window.innerHeight) - parseFloat(SCREEN_OVERFLOW))) + 1;
        antPosition.left = Math.floor(Math.random() * (parseFloat(window.innerWidth) - parseFloat(SCREEN_OVERFLOW))) + 1;

        displayAnts += `<div style="height:${HEIGHT_OF_ANT}px;width:${WIDTH_OF_ANT}px;background-color:white;border-radius:50px;position:absolute;top:${antPosition.top};left:${antPosition.left};"></div>`;
    }
    field.innerHTML = displayAnts;
}


const startGameLoop = () =>{
    
    setInterval(() => {
        

        let windowHeight = parseFloat(window.innerHeight) - parseFloat(SCREEN_OVERFLOW);
        let windowWidth = parseFloat(window.innerWidth) - parseFloat(SCREEN_OVERFLOW);

        //Top and bottom collision check
        if (antPosition.top <= 10) {
            antMovement.top = 'increase';
        } else if (antPositionTop >= windowHeight) {
            antMovementTop = 'decrease';
        }

        //Left and right collision check
        if (antPositionLeft <= 10) {
            antMovementLeft = 'increase';
        } else if (antPositionLeft >= windowWidth) {
            antMovementLeft = 'decrease';
        }

        //current position to increase or decrease the top and left
        ant[i].style.top = antPositionTop;
        ant[i].style.left = antPositionLeft;

        //Increase or decrease according to the top value
        if (antMovementTop == 'increase') {
            antPositionTop = parseFloat(antPositionTop) + parseFloat(antMovement.size);
        } else if (antMovementTop == 'decrease') {
            antPositionTop = parseFloat(antPositionTop) - parseFloat(antMovement.size);
        } else {
            antPositionTop = parseFloat(antPositionTop) + parseFloat(antMovement.size);
        }

        //Increase or decrease according to the left value
        if (antMovementLeft == 'increase') {
            antPositionLeft = parseFloat(antPositionLeft) + parseFloat(antMovement.size);
        } else if (antMovementLeft == 'decrease') {
            antPositionLeft = parseFloat(antPositionLeft) - parseFloat(antMovement.size);
        } else {
            antPositionLeft = parseFloat(antPositionLeft) + parseFloat(antMovement.size);
        }

    },50);
}

const updateAnt = () => {
    let antMovementTop, antMovementLeft;
    let xCoordinateOfAntThis = ant[i].offsetLeft+WIDTH_OF_ANT/2;
    let yCoordinateOfAntThis = ant[i].offsetTop+HEIGHT_OF_ANT/2;

    for (let i = 0; i< ant.length; i++) {
            // each other collision check
            let xCoordinateOfAntOther = ant[i].offsetLeft+WIDTH_OF_ANT/2;
            let yCoordinateOfAntOther = ant[i].offsetTop+HEIGHT_OF_ANT/2;
            let differenceOfX = parseFloat(xCoordinateOfAntOther) - parseFloat(xCoordinateOfAntThis);
            let differenceOfY = parseFloat(yCoordinateOfAntOther) - parseFloat(yCoordinateOfAntThis);
            let distanceBetweenAnts = Math.sqrt((differenceOfX * differenceOfX) + (differenceOfY * differenceOfY));
            if (distanceBetweenAnts < WIDTH_OF_ANT) {
                
                if (antMovementTop == 'increase') {
                    antMovementTop = 'decrease';
                } else {
                    antMovementTop = 'increase';
                }
                
                if (antMovementLeft == 'increase') {
                    antMovementLeft = 'decrease';
                } else {
                    antMovementLeft = 'increase';
                }

            }
    }
}

export collisionCheck = () => {

}

const 
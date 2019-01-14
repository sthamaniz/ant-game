<html>
    <head>
        <title>Ant Game</title>
    </head>
    <body>
        <div id="field" style="height:100%;width:100%;background-color:grey;">
        </div>

        <button id="pause" style="position:absolute; top:0px;">pause</button>
        
        <script>
            const screenOverFlow = 55;
            const heightOfAnt = 50;
            const widthOfAnt = 50;
            const numberOfAnts = 2; 

            const field = document.getElementById('field');

            let displayAnts = ``;
            for (let a = 0; a < numberOfAnts; a++) {

                let initialAntPositionTop = Math.floor(Math.random() * (parseFloat(window.innerHeight) - parseFloat(screenOverFlow))) + 1;
                let initialAntPositionLeft = Math.floor(Math.random() * (parseFloat(window.innerWidth) - parseFloat(screenOverFlow))) + 1;

                displayAnts += `<div style="height:${heightOfAnt}px;width:${widthOfAnt}px;background-color:white;border-radius:50px;position:absolute;top:${initialAntPositionTop};left:${initialAntPositionLeft};"></div>`;
            }
            field.innerHTML = displayAnts;

            let ant = field.children;
            for (let i = 0; i < ant.length; i++) {

                let antPositionTop = ant[i].style.getPropertyValue('top');
                let antPositionLeft = ant[i].style.getPropertyValue('left');
    

                let antMovementTop;
                let antMovementLeft;

                const antMovementSize = 1;

                setInterval(() => {

                    let xCoordinateOfAntThis = ant[i].offsetLeft+widthOfAnt/2;
                    let yCoordinateOfAntThis = ant[i].offsetTop+heightOfAnt/2;

                    for (let j = 0; j< ant.length; j++) {
                        if (j != i) {
                            let xCoordinateOfAntOther = ant[j].offsetLeft+widthOfAnt/2;
                            let yCoordinateOfAntOther = ant[j].offsetTop+heightOfAnt/2;

                            let differenceOfX = parseFloat(xCoordinateOfAntOther) - parseFloat(xCoordinateOfAntThis);
                            let differenceOfY = parseFloat(yCoordinateOfAntOther) - parseFloat(yCoordinateOfAntThis);
                            let distanceBetweenAnts = Math.sqrt((differenceOfX * differenceOfX) + (differenceOfY * differenceOfY));

                            if (distanceBetweenAnts < widthOfAnt) {
                                
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
 
                    let windowHeight = parseFloat(window.innerHeight) - parseFloat(screenOverFlow);
                    let windowWidth = parseFloat(window.innerWidth) - parseFloat(screenOverFlow);

                    if (antPositionTop <= 10) {
                        antMovementTop = 'increase';
                    } else if (antPositionTop >= windowHeight) {
                        antMovementTop = 'decrease';
                    }
    
                    if (antPositionLeft <= 10) {
                        antMovementLeft = 'increase';
                    } else if (antPositionLeft >= windowWidth) {
                        antMovementLeft = 'decrease';
                    }
    
                    ant[i].style.top = antPositionTop;
                    ant[i].style.left = antPositionLeft;
    
                    if (antMovementTop == 'increase') {
                        antPositionTop = parseFloat(antPositionTop) + parseFloat(antMovementSize);
                    } else if (antMovementTop == 'decrease') {
                        antPositionTop = parseFloat(antPositionTop) - parseFloat(antMovementSize);
                    } else {
                        antPositionTop = parseFloat(antPositionTop) + parseFloat(antMovementSize);
                    }
    
                    if (antMovementLeft == 'increase') {
                        antPositionLeft = parseFloat(antPositionLeft) + parseFloat(antMovementSize);
                    } else if (antMovementLeft == 'decrease') {
                        antPositionLeft = parseFloat(antPositionLeft) - parseFloat(antMovementSize);
                    } else {
                        antPositionLeft = parseFloat(antPositionLeft) + parseFloat(antMovementSize);
                    }

                },50);
                
            }
            
        </script>
    </body>
</html>
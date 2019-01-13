<html>
    <head>
        <title>Ant Game</title>
    </head>
    <body>
        <div id="field" style="height:100%;width:100%;background-color:grey;">
            <div style="height:50px;width:50px;background-color:white;border-radius:50px;position:absolute;top:25px;left:25px;"></div>
            <div style="height:50px;width:50px;background-color:white;border-radius:50px;position:absolute;top:75px;left:75px;"></div>
        </div>

        <button id="pause" style="position:absolute; top:0px;">pause</button>
        
        <script>
            const screenOverFlow = 55;

            let field = document.getElementById('field');
            let numberOfAnts = 0; 

            let displayAnts = ``;
            for (let a = 0; a < numberOfAnts; a++) {

                let initialAntPositionTop = Math.floor(Math.random() * (parseFloat(window.innerHeight) - parseFloat(screenOverFlow))) + 1;
                let initialAntPositionLeft = Math.floor(Math.random() * (parseFloat(window.innerWidth) - parseFloat(screenOverFlow))) + 1;

                displayAnts += `<div style="height:50px;width:50px;background-color:white;border-radius:50px;position:absolute;top:${initialAntPositionTop};left:${initialAntPositionLeft};"></div>`;
            }
            // field.innerHTML = displayAnts;

            let antsList = [];
            for (let i = 0; i < field.children.length; i++) {
                antsList.push(field.children[i]);
            }

            antsList.forEach(list => {
                let antPositionTop = list.style.getPropertyValue('top');
                let antPositionLeft = list.style.getPropertyValue('left');

                let antMovementTop;
                let antMovementLeft;

                const antMovementSize = 5;

                console.log(list.offsetTop,list.offsetLeft);
                console.log(list.width);
                let center=[list.offsetLeft+list.width/2,list.offsetTop+list.height/2];
                console.log(center)

                // setInterval(() => {
                //     let windowHeight = parseFloat(window.innerHeight) - parseFloat(screenOverFlow);
                //     let windowWidth = parseFloat(window.innerWidth) - parseFloat(screenOverFlow);

                //     if (antPositionTop <= 10) {
                //         antMovementTop = 'increase';
                //     } else if (antPositionTop >= windowHeight) {
                //         antMovementTop = 'decrease';
                //     }
    
                //     if (antPositionLeft <= 10) {
                //         antMovementLeft = 'increase';
                //     } else if (antPositionLeft >= windowWidth) {
                //         antMovementLeft = 'decrease';
                //     }
    
                //     list.style.top = antPositionTop;
                //     list.style.left = antPositionLeft;
    
                //     if (antMovementTop == 'increase') {
                //         antPositionTop = parseFloat(antPositionTop) + parseFloat(antMovementSize);
                //     } else if (antMovementTop == 'decrease') {
                //         antPositionTop = parseFloat(antPositionTop) - parseFloat(antMovementSize);
                //     } else {
                //         antPositionTop = parseFloat(antPositionTop) + parseFloat(antMovementSize);
                //     }
    
                //     if (antMovementLeft == 'increase') {
                //         antPositionLeft = parseFloat(antPositionLeft) + parseFloat(antMovementSize);
                //     } else if (antMovementLeft == 'decrease') {
                //         antPositionLeft = parseFloat(antPositionLeft) - parseFloat(antMovementSize);
                //     } else {
                //         antPositionLeft = parseFloat(antPositionLeft) + parseFloat(antMovementSize);
                //     }

                // },40);
            });
            
        </script>
    </body>
</html>
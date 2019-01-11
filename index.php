<html>
    <head>
        <title>Ant Game</title>
    </head>
    <body>
        <div id="field" style="height:100%;width:100%;background-color:grey;">
            <div style="height:50px;width:50px;background-color:white;border-radius:50px;position:absolute;top:10px;left:10px;"></div>
            <div style="height:50px;width:50px;background-color:white;border-radius:50px;position:absolute;top:100px;left:100px;"></div>
            <div style="height:50px;width:50px;background-color:white;border-radius:50px;position:absolute;top:500px;left:400px;"></div>
            <div style="height:50px;width:50px;background-color:white;border-radius:50px;position:absolute;top:300px;left:100px;"></div>
            <div style="height:50px;width:50px;background-color:white;border-radius:50px;position:absolute;top:100px;left:300px;"></div>
        </div>

        <button id="pause" style="position:absolute; top:0px;">pause</button>
        
        <script>
            let field = document.getElementById('field');
            let ants = field.children;

            let antslist = [];

            for (let i = 0; i < ants.length; i++) {
                antslist.push(ants[i]);
            }

            let setantposition = antslist.map(positionant => {
                let setantpositiontop = Math.floor(Math.random() * (parseFloat(window.innerHeight) - parseFloat(55))) + 1;
                let setantpositionleft = Math.floor(Math.random() * (parseFloat(window.innerWidth) - parseFloat(55))) + 1;

                positionant.style.top = setantpositiontop;
                positionant.style.left = setantpositionleft;

            }); 

            let moveantpostion = antslist.map(moveant => {

                let antpositiontop = moveant.style.getPropertyValue('top'); 
                let antpositionleft = moveant.style.getPropertyValue('left'); 

                let antmovementtop; 
                let antmovementleft; 
                
                let moveanttimeinterval = setInterval(()=> {
                    let windowheight = parseFloat(window.innerHeight) - parseFloat(55);
                    let windowwidth = parseFloat(window.innerWidth) - parseFloat(55);
                    
                    if (antpositiontop <= 10) {
                        antmovementtop = 'increase';
                    } else if (antpositiontop >= windowheight) {
                        antmovementtop = 'decrease';
                    }
    
                    if (antpositionleft <= 10) {
                        antmovementleft = 'increase';
                    } else if (antpositionleft >= windowwidth) {
                        antmovementleft = 'decrease';
                    }
    
                    moveant.style.top = antpositiontop;
                    moveant.style.left = antpositionleft;
    
                    if (antmovementtop == 'increase') {
                        antpositiontop = parseFloat(antpositiontop) + parseFloat(5);
                    } else if (antmovementtop == 'decrease') {
                        antpositiontop = parseFloat(antpositiontop) - parseFloat(5);
                    } else {
                        antpositiontop = parseFloat(antpositiontop) + parseFloat(5);
                    }
    
                    if (antmovementleft == 'increase') {
                        antpositionleft = parseFloat(antpositionleft) + parseFloat(5);
                    } else if (antmovementleft == 'decrease') {
                        antpositionleft = parseFloat(antpositionleft) - parseFloat(5);
                    } else {
                        antpositionleft = parseFloat(antpositionleft) + parseFloat(5);
                    }
    
    
                },40);

            });

            
        </script>
    </body>
</html>
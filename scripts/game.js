class Game {

    constructor(field){
        this.field = field;
    }

    setField(field){
        this.field = field;
    }

    getInitialPosition(){
        Math.floor(Math.random() * (parseFloat(window.innerHeight) - parseFloat(screenOverFlow))) + 1
    }

    antHtml(height, width, top, left){
        return `<div style="height:${height}px;width:${width}px;background-color:white;border-radius:50px;position:absolute;top:${top};left:${left};"></div>`
    }

    init(){
        let displayAnts = ``;
        for (let a = 0; a < numberOfAnts; a++) {
            const top = getInitialPosition();
            const left = getInitialPosition();
            displayAnts += antHtml(height, width, top, left);
        }
        this.field.innerHTML = displayAnts;
    }

}
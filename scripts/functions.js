function updateAntPosition(ant, left, right){
    ant.style.top = antPositionTop;
    ant.style.left = antPositionLeft;
}

function getAntPosition(ant){
    let top = ant.style.getPropertyValue('top');
    let left = ant.style.getPropertyValue('left');
    return {top, left};
}
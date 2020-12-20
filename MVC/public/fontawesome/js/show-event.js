function showEvent(myButton){
    var tag=document.getElementById("myButton");

    function mouseOver() {
        tag.style.background="yellow";
    };
    function mouseOut() {
        tag.style.background="red";
    };
}
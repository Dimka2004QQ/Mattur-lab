function openDrop() {
    document.getElementsByClassName("dropdown")[0].style.display = "block";
}

setTimeout(function closeDrop() { 
    document.getElementsByClassName("dropdown")[0].style.display = "none";
} ,1000);
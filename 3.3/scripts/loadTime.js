
let currentTime = serverTimeStart;

function updateTime() {
    const date = new Date(currentTime);
    document.getElementById("currentTime").textContent = date.toLocaleString();
    currentTime += 1000;
}

setInterval(updateTime, 1000);
window.onload = updateTime;
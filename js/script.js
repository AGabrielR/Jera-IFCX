let time = 0;
const countdownEl = document.getElementById('timer');

function startTimer(t){
    if(timer!=null){
        clearInterval(timer);
    }

    var startingMinutes = t;
    time = startingMinutes * 60;

    timer = setInterval(updateCountdown, 1000);
}

function updateCountdown(){
    const minutes = Math.floor(time / 60);
    let seconds = time % 60

    seconds = seconds < 10 ? '0' + seconds : seconds;

    countdownEl.innerHTML = `${minutes}:${seconds}`;
    time--;

    if(minutes == 0 && seconds == 0){
        clearInterval(timer);
        document.getElementById('toque').play();
    }
}
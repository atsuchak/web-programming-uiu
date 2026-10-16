let total = 0, cnt = 0

function pass() {
    cnt++
    let input = Number(document.getElementById('input').value)

    total += input;

    let progress = "";
    if(total >= 0 && total <= 800) progress = "You're off to a healthy start!"
    else if(total >= 801 && total <= 1600) progress = "Good progress, keep it balanced!"
    else if(total >= 1601 && total <= 1999) progress = "Almost at your limit!"
    else if(total >= 2000) progress = "Goal reached! Stay mindful!"

    if(cnt > 10 && total < 2000) progress = "Be cautious of frequent snacking!"

    document.getElementById('output').innerText = `${progress}`

    document.getElementById('input').value = ""
}
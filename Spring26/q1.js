let sub = []
let total = 0, cnt = 0

function pass() {
    cnt++ 

    let input1 = document.getElementById('input1').value
    let input2 = Number(document.getElementById('input2').value)

    sub.push(input1)

    total += input2

    let avg = total/cnt

    let feedback = ""
    if(total >= 0 && total <= 5) feedback = "Start studying regularly!"
    else if(total >= 6 && total <= 12) feedback = "Good progress!"
    else if(total >= 13 && total <= 19) feedback = "Almost ready!"
    else if(total >= 20) feedback = "Weekly goal reached!"

    if(cnt > 7) feedback = "Increase your study time!"

    document.getElementById('output').innerText = `Total: ${total} hours, Average: ${avg} hours, Subjects: [${sub}], ${feedback}`

    document.getElementById('input1').value = ""
    document.getElementById('input2').value = ""
}
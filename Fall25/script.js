function pass() {
    let input1 = Number(document.getElementById('input1').value)
    let input2 = Number(document.getElementById('input2').value)
    let input3 = Number(document.getElementById('input3').value)
    let input4 = Number(document.getElementById('input4').value)
    let input5 = Number(document.getElementById('input5').value)

    let bestTwo = (input1+input2+input3) - Math.min(input1, input2, input3)

    let total = bestTwo + input4 + input5

    let status = ""
    total > 54? status = "Passed" : status = "Failed"
    
    // document.getElementById('output').innerText = `Best two CT's total: ${bestTwo}\nMidterm marks: ${input4}\nFinal marks: ${input5}\n\n<b>Total Marks</b>: ${total}\nStatus: ${status}`
    document.getElementById('output').innerHTML = `Best two CT's total: ${bestTwo}<br>Midterm marks: ${input4}<br>Final marks: ${input5}<br><br><b>Total Marks: ${total}</b><br>Status: ${status}`;

    document.getElementById('input1').value = ""
    document.getElementById('input2').value = ""
    document.getElementById('input3').value = ""
    document.getElementById('input4').value = ""
    document.getElementById('input5').value = ""
}
document.addEventListener('DOMContentLoaded', function() {

    const sliderE2 = document.querySelector("#range2")
    const sliderValue2 = document.querySelector(".value2")

    sliderE2.addEventListener("input", (event) => {
        const tempSliderValue = event.target.value;

        sliderValue2.textContent = tempSliderValue;

        const progress = (tempSliderValue / sliderE2.max) * 100;

        sliderE2.style.background = `linear-gradient(to right, #F2BD2A ${progress}%, #ccc ${progress}%)`;

        OnChangeAlert();
    })
    const sliderE3 = document.querySelector("#range3")
    const sliderValue3 = document.querySelector(".value3")

    sliderE3.addEventListener("input", (event) => {
        const tempSliderValue = event.target.value;

        sliderValue3.textContent = tempSliderValue;

        const progress = (tempSliderValue / sliderE3.max) * 100;

        sliderE3.style.background = `linear-gradient(to right, #F2BD2A ${progress}%, #ccc ${progress}%)`;

        OnChangeAlert();
    })
    const sliderE4 = document.querySelector("#range4")
    const sliderValue4 = document.querySelector(".value4")

    sliderE4.addEventListener("input", (event) => {
        const tempSliderValue = event.target.value;

        sliderValue4.textContent = tempSliderValue;

        const progress = (tempSliderValue / sliderE4.max) * 100;

        sliderE4.style.background = `linear-gradient(to right, #F2BD2A ${progress}%, #ccc ${progress}%)`;

        OnChangeAlert();
    });
});




document.getElementById('boton').addEventListener('click', (e) => {






    OnChangeAlert();
})


function OnChangeAlert() {
    var text = document.getElementById("range2").value;
    var text1 = document.getElementById("range3").value;
    var text2 = document.getElementById("range4").value;

    SumTwoField(text, text1, text2);

    const sliderE21 = document.getElementById("range2")
    sliderE21.addEventListener("input", (event) => {
        OnChangeAlert()
    })
}

function SumTwoField(text, text1, text2) {
    var SumOfField = parseInt(text) + parseInt(text1) + parseInt(text2); //text + text1;
    return document.getElementById("SumResult").innerHTML = SumOfField;
}
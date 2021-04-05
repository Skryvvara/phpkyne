const AllQuestions = GameArray;
var sessQuestions = [];

document.addEventListener("DOMContentLoaded", function() {
    init();
    let nextbutton = document.getElementById('nextbutton');
    nextbutton.addEventListener("click", function() {
        init();
    })
})

function init() {
    if (sessQuestions.length <= 0) {
        sessQuestions = AllQuestions.slice();
    }

    let index = getRandomInt(sessQuestions.length);
    setQuestionText(index);
    sessQuestions.splice(index, 1);
}

function setQuestionText(index) {
    let element = document.getElementById('question');
    if (element) {
        element.innerText = sessQuestions[index]
    }

    element = null;
    element = document.getElementById('remaining');
    if (element) {
        element.innerText = `${sessQuestions.length} of ${AllQuestions.length} questions remaining.`
    }
}

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}
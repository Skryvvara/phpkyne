let sessQuestions: Array<string> = []
let AllQuestions: Array<string> = []

document.addEventListener("DOMContentLoaded", function() {
    fetch('/api/game')
        .then((res: any) => res.json())
        .then((response: any) => {
            AllQuestions = response
            init()
        })

    let nextButton = document.getElementById('next-button')!;
    nextButton.addEventListener("click", (event) => {
        init()
    })
})

function init() {
    if (sessQuestions.length <= 0) {
        sessQuestions = AllQuestions.slice();
    }

    let index: number = getRandomInt(sessQuestions.length);
    setQuestionText(index);
    sessQuestions.splice(index, 1);
}

function setQuestionText(index: number) {
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

function getRandomInt(max: number) {
    return Math.floor(Math.random() * max);
}

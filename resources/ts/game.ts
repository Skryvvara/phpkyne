let sessQuestions: Array<string> = []
let AllQuestions: Array<string> = []

document.addEventListener('DOMContentLoaded', function() {
    fetch('/api/game')
        .then((res: any) => res.json())
        .then((response: any) => {
            AllQuestions = response
            init()
        })

    let nextButton = document.getElementById('next-button')!
    nextButton.addEventListener('click', (event) => {
        init()
    })
})

function init() {
    if (sessQuestions.length <= 0) {
        sessQuestions = AllQuestions.slice()
    }

    let index: number = getRandomInt(sessQuestions.length);
    setQuestionText(index)
    sessQuestions.splice(index, 1)
}

function setQuestionText(index: number) {
    let question = document.getElementById('question')!
    question.innerText = sessQuestions[index]

    let counter = document.getElementById('remaining')!;
    if (counter) {
        counter.innerText = `${sessQuestions.length} of ${AllQuestions.length} questions remaining.`
    }
}

function getRandomInt(max: number) {
    return Math.floor(Math.random() * max)
}

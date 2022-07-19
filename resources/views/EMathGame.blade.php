<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementary MATH Quiz</title>
    <link rel="stylesheet" href="css/game1.css">
    <link rel="stylesheet" href="css/game2.css">
</head>
<body>
    <div class="container">
        <div id="game" class="justify-center flex-column">
            <div id="hud">
                <div class="hud-item">
                    <p id="progressText" class="hud-prefix">
                        Question
                    </p>
                    <div id="progressBar">
                        <div id="progressBarFull"></div>
                    </div>
                </div>
                <div class="hud-item">
                    <p class="hud-prefix">
                        Score
                    </p>
                    <h1 class="hud-main-text" id="score">
                        0
                    </h1>
                </div>
            </div>
            <p id="question" style="font-size:30px">What is the answer to this question</p>
            <div class="choice-container">
                <p class="choice-prefix">A</p>
                <p class="choice-text" data-number="1">Choice</p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">B</p>
                <p class="choice-text" data-number="2">Choice 2</p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">C</p>
                <p class="choice-text" data-number="3">Choice 3</p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">D</p>
                <p class="choice-text" data-number="4">Choice 4</p>
            </div>
        </div>
    </div>
    <script>
const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const progressText = document.querySelector('#progressText');
const scoreText = document.querySelector('#score');
const progressBarFull = document.querySelector('#progressBarFull');

let currentQuestion = {}
let acceptingAnswers = true
let score = 0
let questionCounter = 0
let availableQuestions = []

let questions = [
    {
        question: '123 + 4 - 5 + 67 - 89 = ?',
        choice1: '101',
        choice2: '100',
        choice3: '99',
        choice4: '102',
        answer: 2,
    },
    {
        question:
            '123 - 4 - 5 - 6 - 7 + 8 - 9 = ?',
        choice1: '99',
        choice2: '100',
        choice3: '102',
        choice4: '101',
        answer: 2,
    },
    {
        question: "If N = 0.999, then 10N = ?",
        choice1: "9.99",
        choice2: "99.9",
        choice3: "0.0999",
        choice4: "999",
        answer: 1,
    },
    {
        question: 'From 0 to 1,000, the letter "A" only appears in ?',
        choice1: '10',
        choice2: '1',
        choice3: '100',
        choice4: '1,000',
        answer: 4
    }
]

const SCORE_POINTS = 100
const MAX_QUESTIONS = 4

startGame = () => {
    questionCounter = 0
    score = 0
    availableQuestions = [...questions]
    getNewQuestion()
}

getNewQuestion = () => {
    if(availableQuestions.length === 0 || questionCounter > MAX_QUESTIONS) {
        localStorage.setItem('mostRecentScore', score)

        return window.location.assign('/end.html')
    }

    questionCounter++
    progressText.innerText = `Question ${questionCounter} of ${MAX_QUESTIONS}`
    progressBarFull.style.width = `${(questionCounter/MAX_QUESTIONS) * 100}%`
    
    const questionsIndex = Math.floor(Math.random() * availableQuestions.length)
    currentQuestion = availableQuestions[questionsIndex]
    question.innerText = currentQuestion.question

    choices.forEach(choice => {
        const number = choice.dataset['number']
        choice.innerText = currentQuestion['choice' + number]
    })

    availableQuestions.splice(questionsIndex, 1)

    acceptingAnswers = true
}

choices.forEach(choice => {
    choice.addEventListener('click', e => {
        if(!acceptingAnswers) return

        acceptingAnswers = false
        const selectedChoice = e.target
        const selectedAnswer = selectedChoice.dataset['number']

        let classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect'

        if(classToApply === 'correct') {
            incrementScore(SCORE_POINTS)
        }

        selectedChoice.parentElement.classList.add(classToApply)

        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply)
            getNewQuestion()

        }, 1000)
    })
})

incrementScore = num => {
    score +=num
    scoreText.innerText = score
}

startGame()
    </script>
</body>
</html>
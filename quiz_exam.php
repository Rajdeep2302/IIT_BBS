<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participate in Quiz - Quiz Portal</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-blue-900 text-center">Quiz Title</h2>
        <p class="text-gray-700 text-center mt-2">Answer the following questions</p>

        <div id="quizContainer" class="mt-4 space-y-6">
            <!-- Sample Question -->
            <div class="p-4 border rounded bg-gray-100">
                <p class="font-semibold text-lg">1. What is the capital of France?</p>
                <div class="mt-2">
                    <label class="block">
                        <input type="radio" name="question1" value="Paris" class="mr-2"> Paris
                    </label>
                    <label class="block">
                        <input type="radio" name="question1" value="London" class="mr-2"> London
                    </label>
                    <label class="block">
                        <input type="radio" name="question1" value="Berlin" class="mr-2"> Berlin
                    </label>
                    <label class="block">
                        <input type="radio" name="question1" value="Madrid" class="mr-2"> Madrid
                    </label>
                </div>
            </div>

            <div class="p-4 border rounded bg-gray-100">
                <p class="font-semibold text-lg">2. What is 5 + 3?</p>
                <div class="mt-2">
                    <label class="block">
                        <input type="radio" name="question2" value="6" class="mr-2"> 6
                    </label>
                    <label class="block">
                        <input type="radio" name="question2" value="7" class="mr-2"> 7
                    </label>
                    <label class="block">
                        <input type="radio" name="question2" value="8" class="mr-2"> 8
                    </label>
                    <label class="block">
                        <input type="radio" name="question2" value="9" class="mr-2"> 9
                    </label>
                </div>
            </div>
        </div>

        <button onclick="submitQuiz()" class="mt-6 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Submit Answers
        </button>
    </div>

    <script>
        function submitQuiz() {
            let answers = {};
            let questions = document.querySelectorAll("#quizContainer > div");

            questions.forEach((question, index) => {
                let selectedOption = question.querySelector("input:checked");
                if (selectedOption) {
                    answers[`Question ${index + 1}`] = selectedOption.value;
                }
            });

            if (Object.keys(answers).length < questions.length) {
                alert("Please answer all questions before submitting.");
                return;
            }

            console.log("Submitted Answers:", answers);
            alert("Quiz Submitted Successfully!");
            window.location.href = "index.php"; // Redirect to dashboard or result page
        }
    </script>
</body>
</html>
    
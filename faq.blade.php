<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faq</title>
    <style>
        .question_button {
            font-family: 'Times New Roman';
            font-size: 30px;
            background: none;
            border: none;
            width: 300px;
            cursor: pointer;
            transition: 0.3s;
        }
        
        .question_button:hover {
            color: lightblue;
            font-size 12px;
        }
    </style>
</head>

<body>
    
    <div>
        <h1>FAQ</h1>

        <!-- FAQ Headline -->

        <div>
            <button class="question_button" onclick="faq(this)">{{ $faq['question'] }}</button>
            <div class="answer" style="display: none;">
                {{ $faq['answer'] }}
            </div><br>


            <button class="question_button" onclick="faq(this)">{{ $faq['question'] }}</button>
            <div class="answer" style="display: none;">
                {{ $faq['answer'] }}
            </div><br>


            <button class="question_button" onclick="faq(this)">{{ $faq['question'] }}</button>
            <div class="answer" style="display: none;">
                {{ $faq['answer'] }}
            </div><br>


            <button class="question_button" onclick="faq(this)">{{ $faq['question'] }}</button>
            <div class="answer" style="display: none;">
                {{ $faq['answer'] }}
            </div><br>
        </div>

        <!-- Questions and answers -->


        <script>
            function faq(button) {
                let answer = button.nextElementSibling;
                if (answer.style.display === "none") {
                    answer.style.display = "block";
                } else {
                    answer.style.display = "none";
                }
            }
        </script>

        <!-- Toggle function -->
</body>
</html>

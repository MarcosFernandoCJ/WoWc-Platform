<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes</title>
</head>
<body>

    <h1>Quizzes</h1>
            <form method="POST" action="{{ route('quizzes.check') }}">
                @csrf
        @foreach($quizzes as $quiz)
            <div>
                <h2>{{ $quiz->question }}</h2>
                @foreach($quiz->answers as $answer)
                    <div>
                        <input type="radio" name="answerselected[{{ $quiz->id }}]" value="{{ $answer }}">
                        <label for="{{ $answer }}{{ $quiz->id }}">{{ $answer }}</label>
                    </div>
                @endforeach
            </div>
        @endforeach
                <button type="submit">Submit Answer</button>
            </form>
</body>
</html>
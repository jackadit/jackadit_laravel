@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6">
            <ol class="flex items-center space-x-2 text-gray-600">
                <li><a href="{{ route('courses.index') }}" class="hover:text-blue-600">Cours</a></li>
                <li>/</li>
                <li><a href="{{ route('courses.show', $course) }}" class="hover:text-blue-600">{{ $course->title }}</a></li>
                <li>/</li>
                <li><a href="{{ route('courses.lessons.show', [$course, $lesson]) }}" class="hover:text-blue-600">{{ $lesson->title }}</a></li>
                <li>/</li>
                <li><a href="{{ route('courses.lessons.quizzes.show', [$course, $lesson, $quiz]) }}" class="hover:text-blue-600">{{ $quiz->title }}</a></li>
                <li>/</li>
                <li class="text-gray-900 font-medium">Ajouter une Question</li>
            </ol>
        </nav>

        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Ajouter une Question</h1>

            <form action="{{ route('courses.lessons.quizzes.questions.store', [$course, $lesson, $quiz]) }}" method="POST" id="questionForm">
                @csrf

                <!-- Texte de la question -->
                <div class="mb-6">
                    <label for="question_text" class="block text-sm font-medium text-gray-700 mb-2">
                        Question <span class="text-red-500">*</span>
                    </label>
                    <textarea
                        name="question_text"
                        id="question_text"
                        rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('question_text') border-red-500 @enderror"
                        required
                    >{{ old('question_text') }}</textarea>
                    @error('question_text')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Type de question -->
                    <div>
                        <label for="question_type" class="block text-sm font-medium text-gray-700 mb-2">
                            Type de question <span class="text-red-500">*</span>
                        </label>
                        <select
                            name="question_type"
                            id="question_type"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('question_type') border-red-500 @enderror"
                            required
                            onchange="updateAnswerFields()"
                        >
                            <option value="multiple_choice" {{ old('question_type') == 'multiple_choice' ? 'selected' : '' }}>Choix multiple</option>
                            <option value="true_false" {{ old('question_type') == 'true_false' ? 'selected' : '' }}>Vrai/Faux</option>
                        </select>
                        @error('question_type')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Points -->
                    <div>
                        <label for="points" class="block text-sm font-medium text-gray-700 mb-2">
                            Points <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="number"
                            name="points"
                            id="points"
                            value="{{ old('points', 1) }}"
                            min="1"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('points') border-red-500 @enderror"
                            required
                        >
                        @error('points')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Explication -->
                <div class="mb-6">
                    <label for="explanation" class="block text-sm font-medium text-gray-700 mb-2">
                        Explication (optionnel)
                    </label>
                    <textarea
                        name="explanation"
                        id="explanation"
                        rows="2"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Explication affichée après la réponse"
                    >{{ old('explanation') }}</textarea>
                </div>

                <!-- Réponses -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-4">
                        Réponses <span class="text-red-500">*</span>
                    </label>

                    <div id="answersContainer" class="space-y-4">
                        <!-- Les réponses seront ajoutées ici par JavaScript -->
                    </div>

                    <button
                        type="button"
                        onclick="addAnswer()"
                        id="addAnswerBtn"
                        class="mt-4 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition"
                    >
                        + Ajouter une réponse
                    </button>
                </div>

                <!-- Boutons -->
                <div class="flex justify-between items-center pt-6 border-t">
                    <a
                        href="{{ route('courses.lessons.quizzes.questions.index', [$course, $lesson, $quiz]) }}"
                        class="px-6 py-2 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 transition"
                    >
                        Annuler
                    </a>
                    <button
                        type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
                    >
                        Enregistrer la Question
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let answerCount = 0;

        function initializeAnswers() {
            const questionType = document.getElementById('question_type').value;

            if (questionType === 'true_false') {
                createTrueFalseAnswers();
                document.getElementById('addAnswerBtn').style.display = 'none';
            } else {
                // Ajouter 4 réponses par défaut pour choix multiple
                for (let i = 0; i < 4; i++) {
                    addAnswer();
                }
                document.getElementById('addAnswerBtn').style.display = 'block';
            }
        }

        function createTrueFalseAnswers() {
            const container = document.getElementById('answersContainer');
            container.innerHTML = '';

            container.innerHTML = `
        <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-lg">
            <input type="radio" name="answers[0][is_correct]" value="1" id="true_radio" required class="w-4 h-4">
            <label for="true_radio" class="flex-1">
                <input type="hidden" name="answers[0][text]" value="Vrai">
                <span class="text-lg font-medium">Vrai</span>
            </label>
        </div>
        <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-lg">
            <input type="radio" name="answers[0][is_correct]" value="0" id="false_radio" required class="w-4 h-4">
            <label for="false_radio" class="flex-1">
                <input type="hidden" name="answers[1][text]" value="Faux">
                <span class="text-lg font-medium">Faux</span>
            </label>
        </div>
    `;
        }

        function addAnswer() {
            const container = document.getElementById('answersContainer');
            const answerId = answerCount++;

            const answerDiv = document.createElement('div');
            answerDiv.className = 'flex items-start space-x-4 p-4 bg-gray-50 rounded-lg';
            answerDiv.id = `answer_${answerId}`;

            answerDiv.innerHTML = `
        <input
            type="checkbox"
            name="answers[${answerId}][is_correct]"
            value="1"
            class="w-5 h-5 mt-2 text-green-600 border-gray-300 rounded focus:ring-green-500"
        >
        <div class="flex-1">
            <input
                type="text"
                name="answers[${answerId}][text]"
                placeholder="Texte de la réponse ${answerId + 1}"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                required
            >
        </div>
        <button
            type="button"
            onclick="removeAnswer(${answerId})"
            class="px-3 py-2 text-red-600 hover:bg-red-100 rounded-lg transition"
        >
            ✕
        </button>
    `;

            container.appendChild(answerDiv);
        }

        function removeAnswer(answerId) {
            const answerDiv = document.getElementById(`answer_${answerId}`);
            if (answerDiv) {
                answerDiv.remove();
            }
        }

        function updateAnswerFields() {
            answerCount = 0;
            initializeAnswers();
        }

        // Initialiser les réponses au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            initializeAnswers();
        });
    </script>
@endsection

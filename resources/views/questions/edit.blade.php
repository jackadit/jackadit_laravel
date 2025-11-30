@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8 max-w-4xl">

        {{-- Breadcrumb --}}
        <nav class="mb-6 text-sm">
            <ol class="flex items-center space-x-2 text-gray-600">
                <li><a href="{{ route('courses.index') }}" class="hover:text-blue-600">Cours</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('courses.show', $course) }}" class="hover:text-blue-600">{{ $course->title }}</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('lessons.show', [$course, $lesson]) }}" class="hover:text-blue-600">{{ $lesson->title }}</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('quizzes.show', [$course, $lesson, $quiz]) }}" class="hover:text-blue-600">{{ $quiz->title }}</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 font-medium">Modifier la question</li>
            </ol>
        </nav>

        {{-- Header --}}
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">✏️ Modifier la question</h1>
                    <p class="text-gray-600">Quiz : <span class="font-semibold">{{ $quiz->title }}</span></p>
                </div>
                <a href="{{ route('quizzes.show', [$course, $lesson, $quiz]) }}"
                   class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                    ← Retour
                </a>
            </div>
        </div>

        {{-- Formulaire --}}
        <form action="{{ route('questions.update', [$course, $lesson, $quiz, $question]) }}"
              method="POST"
              class="bg-white rounded-lg shadow-md p-6">
            @csrf
            @method('PUT')

            {{-- Question --}}
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    📝 Question *
                </label>
                <textarea
                    name="question_text"
                    rows="3"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('question_text') border-red-500 @enderror"
                    placeholder="Posez votre question ici...">{{ old('question_text', $question->question_text) }}</textarea>
                @error('question_text')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Type et Points --}}
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        🎯 Type de question *
                    </label>
                    <select
                        name="question_type"
                        id="questionType"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('question_type') border-red-500 @enderror">
                        <option value="multiple_choice" {{ old('question_type', $question->question_type) == 'multiple_choice' ? 'selected' : '' }}>Choix multiples</option>
                        <option value="true_false" {{ old('question_type', $question->question_type) == 'true_false' ? 'selected' : '' }}>Vrai/Faux</option>
                        <option value="short_answer" {{ old('question_type', $question->question_type) == 'short_answer' ? 'selected' : '' }}>Réponse courte</option>
                    </select>
                    @error('question_type')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        ⭐ Points *
                    </label>
                    <input
                        type="number"
                        name="points"
                        min="1"
                        max="100"
                        value="{{ old('points', $question->points) }}"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('points') border-red-500 @enderror">
                    @error('points')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Réponses --}}
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-3">
                    ✅ Réponses possibles (cochez la/les bonne(s) réponse(s))
                </label>

                <div id="answersContainer" class="space-y-3">
                    @foreach($question->answers as $index => $answer)
                        <div class="answer-item flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-200">
                            <input
                                type="checkbox"
                                name="answers[{{ $index }}][is_correct]"
                                value="1"
                                {{ $answer->is_correct ? 'checked' : '' }}
                                class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500">

                            <input
                                type="text"
                                name="answers[{{ $index }}][answer_text]"
                                value="{{ old('answers.'.$index.'.answer_text', $answer->answer_text) }}"
                                placeholder="Texte de la réponse..."
                                required
                                class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">

                            <button
                                type="button"
                                class="remove-answer px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition"
                                onclick="removeAnswer(this)">
                                🗑️
                            </button>
                        </div>
                    @endforeach
                </div>

                <button
                    type="button"
                    id="addAnswer"
                    class="mt-3 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                    ➕ Ajouter une réponse
                </button>
            </div>

            {{-- Explication --}}
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    💡 Explication (optionnel)
                </label>
                <textarea
                    name="explanation"
                    rows="2"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('explanation') border-red-500 @enderror"
                    placeholder="Expliquez pourquoi cette réponse est correcte...">{{ old('explanation', $question->explanation) }}</textarea>
                @error('explanation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Boutons --}}
            <div class="flex justify-end gap-3 pt-4 border-t">
                <a href="{{ route('quizzes.show', [$course, $lesson, $quiz]) }}"
                   class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                    Annuler
                </a>
                <button
                    type="submit"
                    class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                    ✅ Enregistrer les modifications
                </button>
            </div>
        </form>

    </div>

    {{-- JavaScript pour gérer les réponses --}}
    <script>
        let answerIndex = {{ $question->answers->count() }};

        document.getElementById('addAnswer').addEventListener('click', function() {
            const container = document.getElementById('answersContainer');
            const newAnswer = document.createElement('div');
            newAnswer.className = 'answer-item flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-200';
            newAnswer.innerHTML = `
        <input
            type="checkbox"
            name="answers[${answerIndex}][is_correct]"
            value="1"
            class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500">

        <input
            type="text"
            name="answers[${answerIndex}][answer_text]"
            placeholder="Texte de la réponse..."
            required
            class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">

        <button
            type="button"
            class="remove-answer px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition"
            onclick="removeAnswer(this)">
            🗑️
        </button>
    `;
            container.appendChild(newAnswer);
            answerIndex++;
        });

        function removeAnswer(button) {
            const answersContainer = document.getElementById('answersContainer');
            if (answersContainer.children.length > 2) {
                button.closest('.answer-item').remove();
            } else {
                alert('⚠️ Vous devez garder au moins 2 réponses possibles.');
            }
        }
    </script>
@endsection

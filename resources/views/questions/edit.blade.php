@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">

        {{-- Breadcrumb --}}
        <nav class="text-sm mb-6">
            <ol class="flex items-center space-x-2 text-gray-600">
                <li><a href="{{ route('courses.index') }}" class="hover:text-blue-600">Cours</a></li>
                <li>/</li>
                <li><a href="{{ route('courses.show', $course) }}" class="hover:text-blue-600">{{ $course->title }}</a></li>
                <li>/</li>
                <li><a href="{{ route('lessons.show', [$course, $lesson]) }}" class="hover:text-blue-600">{{ $lesson->title }}</a></li>
                <li>/</li>
                <li><a href="{{ route('quizzes.show', [$course, $lesson, $quiz]) }}" class="hover:text-blue-600">{{ $quiz->title }}</a></li>
                <li>/</li>
                <li class="text-gray-900 font-medium">Modifier une question</li>
            </ol>
        </nav>

        {{-- 🎨 TITRE --}}
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 flex items-center gap-3">
                <span class="text-4xl">✏️</span>
                Modifier une question
            </h1>
        </div>

        {{-- Formulaire --}}
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8">

            <form action="{{ route('questions.update', [$course, $lesson, $quiz, $question]) }}"
                  method="POST"
                  id="questionForm">
                @csrf
                @method('PUT')

                {{-- Texte de la question --}}
                <div class="mb-6">
                    <label for="question_text" class="block text-sm font-medium text-gray-700 mb-2">
                        📝 Question <span class="text-red-500">*</span>
                    </label>
                    <textarea
                        name="question_text"
                        id="question_text"
                        rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('question_text') border-red-500 @enderror"
                        placeholder="Ex: Quelle est la capitale de la France ?"
                        required
                    >{{ old('question_text', $question->question_text) }}</textarea>
                    @error('question_text')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    {{-- Type de question --}}
                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-700 mb-2">
                            🎯 Type de question <span class="text-red-500">*</span>
                        </label>
                        <select
                            name="type"
                            id="type"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('type') border-red-500 @enderror"
                            required
                            onchange="updateAnswerFields()"
                        >
                            <option value="multiple_choice" {{ old('type', $question->type) == 'multiple_choice' ? 'selected' : '' }}>
                                ☑️ Choix multiples (QCM)
                            </option>
                            <option value="true_false" {{ old('type', $question->type) == 'true_false' ? 'selected' : '' }}>
                                ✔️ Vrai/Faux
                            </option>
                            <option value="short_answer" {{ old('type', $question->type) == 'short_answer' ? 'selected' : '' }}>
                                ✍️ Réponse courte
                            </option>
                        </select>
                        @error('type')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Points --}}
                    <div>
                        <label for="points" class="block text-sm font-medium text-gray-700 mb-2">
                            ⭐ Points <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="number"
                            name="points"
                            id="points"
                            value="{{ old('points', $question->points) }}"
                            min="1"
                            max="100"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('points') border-red-500 @enderror"
                            required
                        >
                        @error('points')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Explication --}}
                <div class="mb-6">
                    <label for="explanation" class="block text-sm font-medium text-gray-700 mb-2">
                        💡 Explication (optionnel)
                    </label>
                    <textarea
                        name="explanation"
                        id="explanation"
                        rows="2"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Explication affichée après la réponse"
                    >{{ old('explanation', $question->explanation) }}</textarea>
                </div>

                {{-- 🎯 RÉPONSES (conditionnelles selon le type) --}}

                {{-- ✅ Pour QCM uniquement --}}
                @if($question->type === 'multiple_choice')
                    <div id="optionsDiv" class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            ✅ Options de réponse <span class="text-red-500">*</span>
                        </label>

                        <div id="optionsList" class="space-y-3">
                            @php
                                $data = json_decode($question->correct_answers, true);
                                $options = $data['options'] ?? [];
                                $correctIndex = $data['correct'] ?? 0;
                            @endphp

                            @foreach($options as $index => $option)
                                <div class="flex items-center space-x-3 bg-gray-50 p-3 rounded-lg">
                                    <input
                                        type="radio"
                                        name="correct_option"
                                        value="{{ $index }}"
                                        {{ $index === $correctIndex ? 'checked' : '' }}
                                        class="w-5 h-5 text-blue-600 focus:ring-blue-500"
                                    >
                                    <input
                                        type="text"
                                        name="options[]"
                                        value="{{ $option }}"
                                        placeholder="Texte de l'option {{ $index + 1 }}..."
                                        required
                                        class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    >
                                    <button
                                        type="button"
                                        onclick="this.parentElement.remove()"
                                        class="text-red-600 hover:text-red-800 font-bold text-xl"
                                        title="Supprimer cette option"
                                    >
                                        🗑️
                                    </button>
                                </div>
                            @endforeach
                        </div>

                        <button
                            type="button"
                            id="addOption"
                            class="mt-3 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition"
                        >
                            ➕ Ajouter une option
                        </button>
                    </div>
                @endif

                {{-- ✅ Pour Vrai/Faux et Réponse courte --}}
                @if(in_array($question->type, ['true_false', 'short_answer']))
                    <div id="simpleAnswerDiv" class="mb-6">
                        <label for="simple_answer" class="block text-sm font-medium text-gray-700 mb-2">
                            ✅ Bonne réponse <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            name="simple_answer"
                            id="simple_answer"
                            value="{{ $question->correct_answer }}"
                            placeholder="{{ $question->type === 'true_false' ? 'Entrez : true ou false' : 'Entrez la réponse exacte attendue...' }}"
                            required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        >
                    </div>
                @endif


                {{-- Boutons --}}
                <div class="flex justify-between items-center pt-6 border-t">
                    <a
                        href="{{ route('quizzes.show', [$course, $lesson, $quiz]) }}"
                        class="px-6 py-2 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 transition"
                    >
                        ◀️ Annuler
                    </a>
                    <button
                        type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
                    >
                        ✅ Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // 🔄 Gestion dynamique des réponses lors du changement de type
        document.getElementById('type').addEventListener('change', function() {
            if (!confirm('⚠️ Changer le type de question effacera les réponses actuelles. Continuer ?')) {
                // Restaurer le type initial
                this.value = '{{ $question->type }}';
                return;
            }

            const type = this.value;
            const optionsDiv = document.getElementById('optionsDiv');
            const simpleAnswerDiv = document.getElementById('simpleAnswerDiv');

            if (type === 'multiple_choice') {
                // Afficher QCM
                if (optionsDiv) {
                    optionsDiv.classList.remove('hidden');
                } else {
                    // Créer la structure QCM si elle n'existe pas
                    createQCMStructure();
                }

                if (simpleAnswerDiv) {
                    simpleAnswerDiv.classList.add('hidden');
                    document.getElementById('simple_answer')?.removeAttribute('required');
                }
            } else {
                // Afficher réponse simple
                if (optionsDiv) {
                    optionsDiv.classList.add('hidden');
                }

                if (simpleAnswerDiv) {
                    simpleAnswerDiv.classList.remove('hidden');
                    document.getElementById('simple_answer')?.setAttribute('required', 'required');

                    if (type === 'true_false') {
                        document.getElementById('simple_answer').placeholder = 'Entrez : true ou false';
                    } else {
                        document.getElementById('simple_answer').placeholder = 'Entrez la réponse exacte attendue...';
                    }
                } else {
                    // Créer la structure simple si elle n'existe pas
                    createSimpleAnswerStructure(type);
                }
            }
        });

        // ➕ Ajouter une option (pour QCM uniquement)
        const addOptionBtn = document.getElementById('addOption');
        if (addOptionBtn) {
            addOptionBtn.addEventListener('click', function() {
                const optionsList = document.getElementById('optionsList');
                const index = optionsList.children.length;

                const div = document.createElement('div');
                div.className = 'flex items-center space-x-3 bg-gray-50 p-3 rounded-lg';
                div.innerHTML = `
                <input
                    type="radio"
                    name="correct_option"
                    value="${index}"
                    class="w-5 h-5 text-blue-600 focus:ring-blue-500"
                >
                <input
                    type="text"
                    name="options[]"
                    placeholder="Texte de l'option ${index + 1}..."
                    required
                    class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                <button
                    type="button"
                    onclick="this.parentElement.remove()"
                    class="text-red-600 hover:text-red-800 font-bold text-xl"
                    title="Supprimer cette option"
                >
                    🗑️
                </button>
            `;

                optionsList.appendChild(div);
            });
        }

        // 📤 Soumission du formulaire
        document.getElementById('questionForm').addEventListener('submit', function(e) {
            const type = document.getElementById('type').value;

            if (type === 'multiple_choice') {
                // Validation QCM
                const options = Array.from(document.querySelectorAll('input[name="options[]"]'))
                    .map(input => input.value.trim())
                    .filter(val => val !== '');

                const correctIndex = document.querySelector('input[name="correct_option"]:checked')?.value;

                if (options.length < 2) {
                    e.preventDefault();
                    alert('⚠️ Il faut au moins 2 options !');
                    return;
                }

                if (correctIndex === undefined) {
                    e.preventDefault();
                    alert('⚠️ Sélectionnez la bonne réponse !');
                    return;
                }
            } else {
                // Validation Vrai/Faux et Réponse courte
                const simpleAnswer = document.getElementById('simple_answer')?.value.trim();

                if (!simpleAnswer) {
                    e.preventDefault();
                    alert('⚠️ Entrez la bonne réponse !');
                    return;
                }
            }
        });
    </script>

@endsection

@extends('layouts.app')

@section('title', 'Ajouter une Question')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-12">
        <div class="max-w-4xl mx-auto px-4">

            {{-- En-tête --}}
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">➕ Nouvelle Question</h1>
                        <p class="text-gray-600 mt-2">
                            Quiz : <span class="font-semibold">{{ $quiz->title }}</span>
                        </p>
                    </div>
                    <a href="{{ route('quizzes.show', [$course, $lesson, $quiz]) }}"
                       class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                        ← Retour
                    </a>
                </div>
            </div>

            {{-- Formulaire --}}
            <div class="bg-white rounded-xl shadow-lg p-8">
                <form method="POST" action="{{ route('questions.store', [$course, $lesson, $quiz]) }}" id="questionForm">
                    @csrf

                    {{-- Texte de la question --}}
                    <div class="mb-6">
                        <label for="question_text" class="block text-sm font-medium text-gray-700 mb-2">
                            ❓ Question <span class="text-red-500">*</span>
                        </label>
                        <textarea
                            name="question_text"
                            id="question_text"
                            rows="3"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('question_text') border-red-500 @enderror"
                            placeholder="Ex: Quelle est la capitale de la France ?">{{ old('question_text') }}</textarea>
                        @error('question_text')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Type de question --}}
                    <div class="mb-6">
                        <label for="type" class="block text-sm font-medium text-gray-700 mb-2">
                            🎯 Type de Question <span class="text-red-500">*</span>
                        </label>
                        <select
                            name="type"
                            id="type"
                            required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('type') border-red-500 @enderror"
                        >
                            <option value="">-- Choisir un type --</option>
                            <option value="multiple_choice" {{ old('type') == 'multiple_choice' ? 'selected' : '' }}>Choix multiples (QCM)</option>
                            <option value="true_false" {{ old('type') == 'true_false' ? 'selected' : '' }}>Vrai / Faux</option>
                            <option value="short_answer" {{ old('type') == 'short_answer' ? 'selected' : '' }}>Réponse courte</option>
                        </select>
                        @error('type')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- SECTION QCM --}}
                    <div id="qcm_section" class="hidden mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            ✅ Options de réponses
                        </label>

                        <div id="optionsList" class="space-y-3">
                            {{-- Option A --}}
                            <div id="option_0" class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-200">
                                <span class="text-gray-600 font-medium w-6">A)</span>
                                <input
                                    type="text"
                                    data-option-text="0"
                                    placeholder="Option 1"
                                    class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input
                                        type="radio"
                                        name="correct_option_radio"
                                        value="0"
                                        class="w-4 h-4 text-green-600">
                                    <span class="text-sm text-gray-700">✅ Correct</span>
                                </label>
                            </div>

                            {{-- Option B --}}
                            <div id="option_1" class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-200">
                                <span class="text-gray-600 font-medium w-6">B)</span>
                                <input
                                    type="text"
                                    data-option-text="1"
                                    placeholder="Option 2"
                                    class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input
                                        type="radio"
                                        name="correct_option_radio"
                                        value="1"
                                        class="w-4 h-4 text-green-600">
                                    <span class="text-sm text-gray-700">✅ Correct</span>
                                </label>
                            </div>
                        </div>

                        <button
                            type="button"
                            onclick="addOption()"
                            class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                            ➕ Ajouter une option
                        </button>
                    </div>

                    {{-- SECTION RÉPONSE SIMPLE --}}
                    <div id="simple_section" class="hidden mb-6">
                        <label for="simple_answer" class="block text-sm font-medium text-gray-700 mb-2">
                            ✅ Bonne réponse
                        </label>
                        <input
                            type="text"
                            id="simple_answer"
                            placeholder="Ex: Vrai / Paris / 42"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    {{-- Points --}}
                    <div class="mb-6">
                        <label for="points" class="block text-sm font-medium text-gray-700 mb-2">
                            🎯 Points
                        </label>
                        <input
                            type="number"
                            name="points"
                            id="points"
                            value="{{ old('points', 1) }}"
                            min="1"
                            required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>

                    {{-- Explication --}}
                    <div class="mb-6">
                        <label for="explanation" class="block text-sm font-medium text-gray-700 mb-2">
                            💡 Explication (optionnel)
                        </label>
                        <textarea
                            name="explanation"
                            id="explanation"
                            rows="3"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"
                            placeholder="Explication de la bonne réponse...">{{ old('explanation') }}</textarea>
                    </div>

                    {{-- Bouton soumettre --}}
                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition font-semibold">
                            ✅ Créer la Question
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- JAVASCRIPT --}}
    <script>
        // Ignorer l'erreur "Permission denied" de PHPStorm
        window.onerror = function(message) {
            if (message.includes('Permission denied')) {
                return true;
            }
        };

        let optionCount = 2;

        // Afficher/masquer les sections
        function updateAnswerFields() {
            const type = document.getElementById('type').value;
            const qcmSection = document.getElementById('qcm_section');
            const simpleSection = document.getElementById('simple_section');

            console.log('🔄 Type:', type);

            if (!qcmSection || !simpleSection) {
                console.error('❌ Sections introuvables !');
                return;
            }

            if (type === 'multiple_choice') {
                qcmSection.classList.remove('hidden');
                simpleSection.classList.add('hidden');
                console.log('✅ QCM affiché');
            } else if (type === 'true_false' || type === 'short_answer') {
                qcmSection.classList.add('hidden');
                simpleSection.classList.remove('hidden');
                console.log('✅ Réponse simple affichée');
            } else {
                qcmSection.classList.add('hidden');
                simpleSection.classList.add('hidden');
            }
        }

        // Ajouter une option
        function addOption() {
            const list = document.getElementById('optionsList');
            const div = document.createElement('div');
            div.id = `option_${optionCount}`;
            div.className = 'flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-200';
            div.innerHTML = `
            <span class="text-gray-600 font-medium w-6">${String.fromCharCode(65 + optionCount)})</span>
            <input type="text" data-option-text="${optionCount}" placeholder="Option ${optionCount + 1}"
                   class="flex-1 px-3 py-2 border border-gray-300 rounded-lg">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="radio" name="correct_option_radio" value="${optionCount}" class="w-4 h-4 text-green-600">
                <span class="text-sm text-gray-700">✅ Correct</span>
            </label>
            <button type="button" onclick="removeOption(${optionCount})" class="text-red-500 hover:text-red-700">🗑️</button>
        `;
            list.appendChild(div);
            optionCount++;
        }

        // Supprimer une option
        function removeOption(index) {
            document.getElementById(`option_${index}`).remove();
        }

        // Soumettre le formulaire
        document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.getElementById('type');
            typeSelect.addEventListener('change', updateAnswerFields);
            updateAnswerFields();

            document.getElementById('questionForm').addEventListener('submit', function(e) {
                const type = document.getElementById('type').value;

                if (type === 'multiple_choice') {
                    const options = [];
                    document.querySelectorAll('[data-option-text]').forEach(input => {
                        if (input.value.trim()) {
                            options.push(input.value.trim());
                        }
                    });

                    const correctRadio = document.querySelector('input[name="correct_option_radio"]:checked');
                    if (!correctRadio || options.length < 2) {
                        e.preventDefault();
                        alert('⚠️ Ajoutez au moins 2 options et cochez la bonne réponse !');
                        return false;
                    }

                    const jsonData = {
                        options: options,
                        correct: parseInt(correctRadio.value)
                    };

                    console.log('✅ JSON:', jsonData);

                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = 'correct_answer';
                    hiddenInput.value = JSON.stringify(jsonData);
                    this.appendChild(hiddenInput);

                } else if (type === 'true_false' || type === 'short_answer') {
                    const simpleAnswer = document.getElementById('simple_answer')?.value.trim();

                    if (!simpleAnswer) {
                        e.preventDefault();
                        alert('⚠️ Entrez la bonne réponse !');
                        return false;
                    }

                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = 'correct_answer';
                    hiddenInput.value = simpleAnswer;
                    this.appendChild(hiddenInput);
                }

                return true;
            });
        });
    </script>
@endsection

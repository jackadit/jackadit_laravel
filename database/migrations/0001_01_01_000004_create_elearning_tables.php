<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // ========================================
        // 1. CATEGORIES
        // ========================================
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('color', 7)->default('#3B82F6');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->index('slug');
            $table->index('is_active');
        });

        // 2. COURSES
        // ========================================
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('short_description')->nullable();

            $table->enum('level', ['beginner', 'intermediate', 'advanced'])->default('beginner');
            $table->string('language', 5)->default('fr');

            $table->decimal('price', 8, 2)->default(0);
            $table->integer('duration')->default(0)->comment('Duration in minutes');

            $table->string('thumbnail')->nullable();
            $table->string('video_preview')->nullable();

            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->boolean('is_published')->default(false);
            $table->boolean('is_featured')->default(false);

            $table->integer('enrollment_count')->default(0);
            $table->decimal('rating', 3, 2)->default(0);
            $table->integer('reviews_count')->default(0);

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('slug');
            $table->index('instructor_id');
            $table->index('category_id');
            $table->index('is_published');
            $table->index('status');
        });

        // ========================================
        // 3. SECTIONS
        // ========================================
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');

            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('order')->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->index('course_id');
        });

        // ========================================
        // 4. LESSONS
        // ========================================
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->foreignId('section_id')->constrained('sections')->onDelete('cascade');

            $table->string('title');
            $table->string('slug');
            $table->longText('content')->nullable();

            $table->enum('type', ['video', 'article', 'quiz', 'file'])->default('article');
            $table->string('video_url')->nullable();
            $table->string('file_path')->nullable();

            $table->integer('duration_minutes')->nullable()->comment('Durée en minutes');
            $table->integer('order')->default(0);

            $table->boolean('is_free')->default(false);
            $table->boolean('is_preview')->default(false);
            $table->boolean('is_published')->default(true);

            $table->timestamps();
            $table->softDeletes();

            $table->index('course_id');
            $table->index('section_id');
            $table->index('slug');
        });

        // ========================================
        // 5. QUIZZES
        // ========================================
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();

            $table->integer('attempts_count')->default(0)->after('id');
            $table->integer('passed_count')->default(0)->after('attempts_count');
            $table->decimal('average_score', 5, 2)->default(0)->after('passed_count');

            // Quiz de cours (évaluation globale du cours)
            $table->foreignId('course_id')
                ->nullable()
                ->constrained()
                ->onDelete('cascade')
                ->comment('Quiz associé à un cours entier');

            // Quiz de leçon (évaluation d\'une leçon spécifique)
            $table->foreignId('lesson_id')
                ->nullable()
                ->constrained()
                ->onDelete('cascade')
                ->comment('Quiz associé à une leçon');

            $table->string('title');
            $table->text('description')->nullable();

            // ✅ Configuration du quiz
            $table->integer('passing_score')->default(70)->comment('Score minimum en %');
            $table->integer('duration_minutes')->nullable()->comment('Durée limite en minutes');
            $table->integer('max_attempts')->nullable()->comment('Nombre de tentatives max');

            // ✅ Options de comportement
            $table->boolean('randomize_questions')->default(false)->comment('Mélanger les questions');
            $table->boolean('show_correct_answers')->default(true)->comment('Afficher les bonnes réponses après soumission');

            $table->boolean('is_published')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->index('course_id');
            $table->index('lesson_id');
            $table->index('is_published');
        });


        // ========================================
        // 6. QUESTIONS
        // ========================================
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');

            // ✅ Contenu de la question
            $table->text('question_text');

            // ✅ Type et configuration
            $table->enum('type', ['single', 'multiple', 'true_false'])->default('single');
            $table->enum('difficulty', ['easy', 'medium', 'hard'])->default('medium');

            // ✅ Scoring
            $table->integer('points')->default(1);
            $table->integer('order')->default(0);

            // ✅ AJOUTS : Options avancées
            $table->integer('time_limit')->nullable()->comment('Temps limite en secondes pour cette question');
            $table->text('explanation')->nullable()->comment('Explication de la bonne réponse');
            $table->boolean('show_correct_answers')->default(true)->comment('Afficher les réponses correctes après tentative');
            $table->boolean('is_required')->default(true)->comment('Question obligatoire (false = bonus)');

            $table->timestamps();
            $table->softDeletes();

            // ✅ Index
            $table->index('quiz_id');
            $table->index(['quiz_id', 'order']);
            $table->index('type');
            $table->index('difficulty');
        });

        // ========================================
        // 7. ANSWERS
        // ========================================
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade');

            $table->text('answer_text');
            $table->boolean('is_correct')->default(false);
            $table->integer('order')->default(0);
            $table->text('explanation')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index('question_id');
        });

        // ========================================
        // 8. ENROLLMENTS
        // ========================================
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            // ⭐ AJOUT
            $table->foreignId('payment_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null')
                ->comment('Paiement associé (null si gratuit)');

            $table->decimal('price_paid', 8, 2)->default(0);
            $table->enum('status', ['active', 'completed', 'expired', 'cancelled'])->default('active');
            $table->integer('progress')->default(0)->comment('Progress percentage');

            $table->timestamp('enrolled_at')->useCurrent();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('last_accessed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();  // ✅ CETTE LIGNE DOIT ÊTRE PRÉSENTE

            $table->unique(['user_id', 'course_id']);
            $table->index('user_id');
            $table->index('course_id');
            $table->index('status');
        });

        // ========================================
        // 9. PAYEMENTS
        // ========================================
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            // ============================================
            // RELATIONS
            // ============================================

            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')
                ->comment('Utilisateur payeur');

            $table->foreignId('course_id')
                ->constrained()
                ->onDelete('cascade')
                ->comment('Cours acheté');

            $table->foreignId('enrollment_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null')
                ->comment('Inscription générée après paiement');

            // ============================================
            // TRANSACTION
            // ============================================

            $table->string('transaction_id')
                ->unique()
                ->comment('ID unique de transaction');

            $table->string('invoice_number')
                ->unique()
                ->nullable()
                ->comment('Numéro de facture (ex: INV-2024-001)');

            $table->string('stripe_payment_intent_id')
                ->nullable()
                ->unique()
                ->comment('ID Stripe PaymentIntent');

            // ============================================
            // MONTANTS
            // ============================================

            $table->decimal('original_amount', 10, 2)
                ->comment('Prix original du cours');

            $table->decimal('discount_amount', 10, 2)
                ->default(0)
                ->comment('Montant de la réduction');

            $table->decimal('amount', 10, 2)
                ->comment('Montant final payé');

            $table->string('currency', 3)
                ->default('USD')
                ->comment('Devise (USD, EUR, etc.)');

            $table->string('coupon_code', 50)
                ->nullable()
                ->comment('Code promo utilisé');

            // ============================================
            // STATUT & MÉTHODE
            // ============================================

            $table->enum('status', [
                'pending',      // En attente
                'processing',   // En cours de traitement
                'completed',    // Payé
                'failed',       // Échec
                'refunded',     // Remboursé
                'cancelled'     // Annulé
            ])->default('pending');

            $table->enum('payment_method', [
                'stripe_card',
                'stripe_sepa',
                'paypal',
                'bank_transfer',
                'free',         // Cours gratuit
                'admin'         // Ajouté par admin
            ])->nullable();

            // ============================================
            // DATES
            // ============================================

            $table->timestamp('paid_at')
                ->nullable()
                ->comment('Date de paiement effectif');

            $table->timestamp('refunded_at')
                ->nullable()
                ->comment('Date de remboursement');

            $table->timestamp('expires_at')
                ->nullable()
                ->comment('Expiration (pour paiements pending)');

            // ============================================
            // MÉTADONNÉES
            // ============================================

            $table->json('metadata')
                ->nullable()
                ->comment('Données Stripe/PayPal supplémentaires');

            $table->text('failure_reason')
                ->nullable()
                ->comment('Raison de l\'échec');

            $table->string('ip_address', 45)
                ->nullable()
                ->comment('IP de l\'utilisateur');

            $table->text('user_agent')
                ->nullable()
                ->comment('Navigateur utilisé');

            // ============================================
            // MÉTADONNÉES SYSTÈME
            // ============================================

            $table->timestamps();
            $table->softDeletes();

            // ============================================
            // INDEX POUR PERFORMANCE
            // ============================================

            $table->index('transaction_id');
            $table->index('invoice_number');
            $table->index('stripe_payment_intent_id');
            $table->index(['user_id', 'status']);
            $table->index(['course_id', 'status']);
            $table->index('status');
            $table->index('paid_at');
            $table->index('coupon_code');
        });

        // ========================================
        // 10. LESSON COMPLETIONS
        // ========================================
        Schema::create('lesson_completions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('lesson_id')->constrained('lessons')->onDelete('cascade');

            $table->timestamp('completed_at')->useCurrent();
            $table->timestamps();

            $table->unique(['user_id', 'lesson_id']);
            $table->index('user_id');
            $table->index('lesson_id');
        });

        // ========================================
        // 11. QUIZ ATTEMPTS
        // ========================================
        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');
            $table->foreignId('enrollment_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null')
                ->comment('Lien vers inscription au cours');

            $table->integer('attempt_number')->default(1);
            $table->enum('status', ['in_progress', 'completed', 'abandoned'])->default('in_progress');

            $table->integer('score')->default(0);
            $table->boolean('is_passed')->default(false);

            $table->timestamp('started_at')->useCurrent();
            $table->timestamp('completed_at')->nullable();
            $table->integer('time_spent')->nullable();

            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->json('answers')->nullable()->comment('Réponses utilisateur');

            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id');
            $table->index('quiz_id');
            $table->index('enrollment_id');
            $table->index('status');
            $table->index('started_at');
            $table->index('is_passed');
        });

        // ========================================
        // 12. QUIZ_ANSWERS
        // ========================================
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_attempt_id')
                ->constrained()
                ->onDelete('cascade')
                ->comment('Tentative de quiz (contient user_id)');

            $table->foreignId('question_id')
                ->constrained()
                ->onDelete('cascade')
                ->comment('Question posée');

            $table->foreignId('answer_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null')
                ->comment('Réponse choisie (QCM simple)');

            // Pour QCM à choix multiples
            $table->json('selected_answers')
                ->nullable()
                ->comment('IDs des réponses sélectionnées [1,3,5]');

            // Pour questions ouvertes
            $table->text('answer_text')
                ->nullable()
                ->comment('Réponse textuelle');

            $table->boolean('is_correct')
                ->default(false)
                ->comment('Réponse correcte');

            $table->decimal('points_earned', 5, 2)
                ->default(0)
                ->comment('Points obtenus');

            $table->text('feedback')
                ->nullable()
                ->comment('Retour du formateur/système');

            // ============================================
            // MÉTRIQUES TEMPORELLES ⭐ AJOUTÉ
            // ============================================

            $table->integer('time_taken')
                ->nullable()
                ->comment('Temps passé en secondes');

            $table->timestamp('answered_at')
                ->nullable()
                ->comment('Moment exact de la réponse');

            $table->timestamps();
            $table->softDeletes();

            // Une seule réponse par question par tentative
            $table->unique(['quiz_attempt_id', 'question_id'], 'unq_attempt_question');

            // Recherche par tentative
            $table->index('quiz_attempt_id');

            // Statistiques par question
            $table->index('question_id');

            // Filtrage par correction
            $table->index('is_correct');

            // Tri par date
            $table->index('answered_at');
        });

        // ========================================
        // 13. CERTIFICATES
        // ========================================
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');

            $table->string('certificate_number')->unique();
            $table->timestamp('issued_at')->useCurrent();
            $table->string('file_path')->nullable();

            $table->timestamps();

            $table->unique(['user_id', 'course_id']);
            $table->index('certificate_number');
        });

    }

    public function down(): void
    {
        // Ordre inverse pour respecter les foreign keys
        Schema::dropIfExists('payements');
        Schema::dropIfExists('certificates');
        Schema::dropIfExists('quiz_answers');
        Schema::dropIfExists('quiz_attempts');
        Schema::dropIfExists('lesson_completions');
        Schema::dropIfExists('enrollments');
        Schema::dropIfExists('answers');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('quizzes');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('sections');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('categories');
    }
};

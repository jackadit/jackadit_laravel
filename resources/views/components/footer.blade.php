<footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">

            <!-- Colonne 1 : À propos -->
            <div>
                <div class="flex items-center space-x-3 mb-6">
                    <div class="bg-gradient-to-r from-primary-600 to-purple-600 text-white font-bold text-xl px-4 py-2 rounded-xl">
                        JA
                    </div>
                    <span class="text-xl font-bold">Jackadit</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Plateforme d'apprentissage du développement web moderne.
                    Cours pratiques, projets réels, communauté active.
                </p>
                <div class="flex items-center space-x-3">
                    <a href="#" class="social-icon" aria-label="Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon" aria-label="GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Colonne 2 : Navigation -->
            <div>
                <h4 class="font-semibold text-lg mb-4">Navigation</h4>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <span>Accueil</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cours.index') }}" class="text-gray-400 hover:text-white transition-colors flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <span>Cours</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <span>Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Colonne 3 : Ressources -->
            <div>
                <h4 class="font-semibold text-lg mb-4">Ressources</h4>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <span>Documentation</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <span>Tutoriels</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <span>FAQ</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <span>Support</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Colonne 4 : Newsletter -->
            <div>
                <h4 class="font-semibold text-lg mb-4">Newsletter</h4>
                <p class="text-sm text-gray-400 mb-4">Reçois les dernières actus directement dans ta boîte mail</p>
                <form class="flex flex-col space-y-3">
                    <input type="email"
                           placeholder="ton@email.com"
                           class="px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-400 focus:border-transparent transition-all">
                    <button type="submit"
                            class="px-4 py-2 bg-gradient-to-r from-primary-600 to-purple-600 rounded-lg font-medium hover:from-primary-700 hover:to-purple-700 transform hover:scale-105 transition-all">
                        S'abonner
                    </button>
                </form>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-white/10 mt-12 pt-8 text-center">
            <p class="text-sm text-gray-400">
                &copy; {{ date('Y') }} <span class="font-semibold text-white">Jackadit</span>. Tous droits réservés.
                <span class="mx-2">•</span>
                <a href="#" class="hover:text-white transition-colors">Mentions légales</a>
                <span class="mx-2">•</span>
                <a href="#" class="hover:text-white transition-colors">Politique de confidentialité</a>
            </p>
        </div>
    </div>
</footer>

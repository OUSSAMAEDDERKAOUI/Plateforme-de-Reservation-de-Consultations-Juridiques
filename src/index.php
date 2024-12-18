<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet d'Avocats - Votre partenaire juridique de confiance</title>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="bg-gray-50">
    <!-- Navigation -->
   <!-- Navigation (même que index.html) -->
   <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.html" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                        </svg>
                        <span class="ml-2 text-xl font-semibold">LexConsult</span>
                    </a>
                </div>
    
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="index.html" class="text-gray-700 hover:text-blue-700 px-3 py-2">Accueil</a>
                    <a href="reservations.html" class="text-gray-700 hover:text-blue-700 px-3 py-2">Réservations</a>
                    <a href="login.html" class="text-gray-700 hover:text-blue-700 px-3 py-2">Connexion</a>
                    <a href="register.html" class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800">Inscription</a>
                </div>
    
                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-700">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index.html" class="block text-gray-700 hover:text-blue-700 px-3 py-2">Accueil</a>
                <a href="reservations.html" class="block text-gray-700 hover:text-blue-700 px-3 py-2">Réservations</a>
                <a href="login.html" class="block text-gray-700 hover:text-blue-700 px-3 py-2">Connexion</a>
                <a href="register.html" class="block text-gray-700 hover:text-blue-700 px-3 py-2">Inscription</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative h-[600px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80')">
        <div class="absolute inset-0 bg-black bg-opacity-60">
            <div class="max-w-7xl mx-auto px-4 h-full flex items-center">
                <div class="text-white max-w-2xl">
                    <h1 class="text-5xl font-bold mb-6">Expertise Juridique à Votre Service</h1>
                    <p class="text-xl mb-8">Notre cabinet d'avocats vous accompagne dans tous vos besoins juridiques avec professionnalisme et dévouement.</p>
                    <a href="reservations.html" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg text-lg font-semibold transition-colors">
                        Prendre Rendez-vous
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-law-dark">Nos Domaines d'Expertise</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4 text-law-dark">Droit des Affaires</h3>
                    <p class="text-gray-600">Conseil et accompagnement pour vos projets d'entreprise</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4 text-law-dark">Droit Immobilier</h3>
                    <p class="text-gray-600">Expertise en transactions et litiges immobiliers</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4 text-law-dark">Droit de la Famille</h3>
                    <p class="text-gray-600">Accompagnement personnalisé pour vos affaires familiales</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Avocats -->
    <section id="avocats" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-law-dark">Notre Équipe</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="lawyer-card bg-white p-6 rounded-lg shadow-md text-center">
                    <img src="https://via.placeholder.com/150" alt="Avocat" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Me. Sophie Martin</h3>
                    <p class="text-gray-600 mb-4">Droit des Affaires</p>
                    <button class="bg-law-gold text-white px-4 py-2 rounded hover:bg-opacity-90 transition">
                        Voir le profil
                    </button>
                </div>
                <div class="lawyer-card bg-white p-6 rounded-lg shadow-md text-center">
                    <img src="https://via.placeholder.com/150" alt="Avocat" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Me. Thomas Dubois</h3>
                    <p class="text-gray-600 mb-4">Droit Immobilier</p>
                    <button class="bg-law-gold text-white px-4 py-2 rounded hover:bg-opacity-90 transition">
                        Voir le profil
                    </button>
                </div>
                <div class="lawyer-card bg-white p-6 rounded-lg shadow-md text-center">
                    <img src="https://via.placeholder.com/150" alt="Avocat" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Me. Julie Laurent</h3>
                    <p class="text-gray-600 mb-4">Droit de la Famille</p>
                    <button class="bg-law-gold text-white px-4 py-2 rounded hover:bg-opacity-90 transition">
                        Voir le profil
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-law-dark">Contactez-nous</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Informations de Contact</h3>
                    <p class="mb-2">📍 123 Avenue des Avocats, 75000 Paris</p>
                    <p class="mb-2">📞 01 23 45 67 89</p>
                    <p class="mb-2">✉️ contact@cabinet-juridique.fr</p>
                </div>
                <form class="space-y-4">
                    <div>
                        <input type="text" placeholder="Nom complet" class="w-full p-3 border rounded-lg">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" class="w-full p-3 border rounded-lg">
                    </div>
                    <div>
                        <textarea placeholder="Message" rows="4" class="w-full p-3 border rounded-lg"></textarea>
                    </div>
                    <button type="submit" class="bg-law-gold text-white px-6 py-3 rounded-lg hover:bg-opacity-90 transition w-full">
                        Envoyer
                    </button>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">LexConsult</h3>
                    <p class="text-gray-400">Expertise juridique professionnelle à votre service.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="text-gray-400 hover:text-white">Accueil</a></li>
                        <li><a href="reservations.html" class="text-gray-400 hover:text-white">Réservations</a></li>
                        <li><a href="login.html" class="text-gray-400 hover:text-white">Connexion</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>contact@lexconsult.fr</li>
                        <li>+33 1 23 45 67 89</li>
                        <li>123 Avenue des Avocats<br>75001 Paris</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Horaires</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>Lun-Ven: 9h-18h</li>
                        <li>Sam: 9h-12h</li>
                        <li>Dim: Fermé</li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; 2024 LexConsult. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <script type="module" src="/main.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - LexConsult</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="min-h-screen flex flex-col bg-gray-50">
    <!-- Navigation Simplifiée -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.html" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                        </svg>
                        <span class="ml-2 text-xl font-semibold">LexConsult Admin</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <button onclick="window.location.href='login.html'" class="text-gray-700 hover:text-blue-700 px-3 py-2">
                        Déconnexion
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Dashboard Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Tableau de Bord</h1>
                <p class="mt-2 text-gray-600">Bienvenue, Me. Jean Dupont</p>
            </div>

            <!-- Statistiques -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Consultations du Jour -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Consultations du Jour</h3>
                    <p class="text-3xl font-bold text-blue-600">5</p>
                    <p class="text-sm text-gray-500 mt-1">+2 par rapport à hier</p>
                </div>

                <!-- Consultations en Attente -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">En Attente</h3>
                    <p class="text-3xl font-bold text-yellow-600">3</p>
                    <p class="text-sm text-gray-500 mt-1">Requiert votre attention</p>
                </div>

                <!-- Consultations de Demain -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Demain</h3>
                    <p class="text-3xl font-bold text-green-600">4</p>
                    <p class="text-sm text-gray-500 mt-1">Consultations prévues</p>
                </div>

                <!-- Total du Mois -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Total du Mois</h3>
                    <p class="text-3xl font-bold text-purple-600">42</p>
                    <p class="text-sm text-gray-500 mt-1">+15% ce mois-ci</p>
                </div>
            </div>

            <!-- Graphique des Consultations -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Évolution des Consultations</h3>
                <canvas id="consultationsChart" height="100"></canvas>
            </div>

            <!-- Liste des Consultations -->
            <div class="bg-white rounded-lg shadow-md">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Consultations à Venir</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Heure</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sujet</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Consultation 1 -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Sophie Martin</div>
                                        <div class="text-sm text-gray-500">sophie.martin@email.com</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-03-20</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14:00</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Droit immobilier</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Confirmé
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-3">Modifier</button>
                                        <button class="text-red-600 hover:text-red-900">Annuler</button>
                                    </td>
                                </tr>

                                <!-- Consultation 2 -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Pierre Durand</div>
                                        <div class="text-sm text-gray-500">pierre.durand@email.com</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-03-21</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10:00</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Droit des affaires</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            En attente
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-green-600 hover:text-green-900 mr-3">Accepter</button>
                                        <button class="text-red-600 hover:text-red-900">Refuser</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
    <script>
       
    </script>
</body>
</html>
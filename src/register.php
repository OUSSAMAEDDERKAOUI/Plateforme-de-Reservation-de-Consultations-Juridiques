<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - LexConsult</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="min-h-screen flex flex-col bg-gray-50">
    <!-- Navigation (même que index.html) -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.html" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg>
                        <span class="ml-2 text-xl font-semibold">LexConsult</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="http://localhost/Plateforme-de-Reservation-de-Consultations-Juridiques/src/index.php" class="text-gray-700 hover:text-blue-700 px-3 py-2">Accueil</a>
                    <a href="http://localhost/Plateforme-de-Reservation-de-Consultations-Juridiques/src/reservation.php" class="text-gray-700 hover:text-blue-700 px-3 py-2">Réservations</a>
                    <a href="http://localhost/Plateforme-de-Reservation-de-Consultations-Juridiques/src/login.php" class="text-gray-700 hover:text-blue-700 px-3 py-2">Connexion</a>
                    <a href="http://localhost/Plateforme-de-Reservation-de-Consultations-Juridiques/src/register.php" class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800">Inscription</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="burger-btn" class="text-gray-700 hover:text-blue-700">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden bg-white text-gray-100">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="http://localhost/Plateforme-de-Reservation-de-Consultations-Juridiques/src/index.php" class="block text-gray-700 hover:text-blue-700 px-3 py-2">Accueil</a>
                <a href="http://localhost/Plateforme-de-Reservation-de-Consultations-Juridiques/src/reservation.php" class="block text-gray-700 hover:text-blue-700 px-3 py-2">Réservations</a>
                <a href="http://localhost/Plateforme-de-Reservation-de-Consultations-Juridiques/src/login.php" class="block text-gray-700 hover:text-blue-700 px-3 py-2">Connexion</a>
                <a href="http://localhost/Plateforme-de-Reservation-de-Consultations-Juridiques/src/register.php" class="block text-gray-700 hover:text-blue-700 px-3 py-2">Inscription</a>
            </div>
        </div>
    </nav>
    <!-- ... Copier la navigation de index.html ... -->

    <main class="my-[160px] h-[500px] md: my-[100px] lg:mb-[-43px] ">
        <div class=" py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900">Créer un compte</h2>
                    <p class="mt-2 text-gray-600">Rejoignez notre plateforme juridique</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="w-[100%] mx-auto flex justify-center gap-12 flex-wrap ">
                        <a href="./registerclient.php"><button class="border border-indigo-600 h-12 px-6  rounded-[10px] bg-blue-600 text-white text-center font-bold text-xl	">
                                <h1 class="py-[6px]">Créer un compte Client</h1>
                            </button></a>
                        <a href="./registeradmin.php"><button class="border border-indigo-600 h-12 px-4  rounded-[10px] bg-blue-600 text-white text-center font-bold text-xl	">
                                <h1 class="py-[6px]">Créer un compte Avocat</h1>

                            </button></a>


                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white">

        <div class="my-8 pt-8 border-t border-gray-700 text-center text-gray-400">
            <p>&copy; 2024 LexConsult. Tous droits réservés.</p>
        </div>
    </footer>
    <script>
        document.getElementById('burger-btn').onclick = function(e) {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }
    </script>
</body>

</html>
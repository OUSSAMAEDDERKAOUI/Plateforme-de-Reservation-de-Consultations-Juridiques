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

    <main class="my-12" >
    <section class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
      <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-900">Inscription Avocat</h2>
        <p class="mt-2 text-gray-600">Créez votre compte professionnel</p>
      </div>

      <form class="space-y-6" method="POST" action="./avocatInsert.php">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
          <!-- Nom -->
          <div>
            <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
            <input type="text" id="nom" name="nom" required
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
              placeholder="Votre nom">
          </div>

          <!-- Prénom -->
          <div>
            <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
            <input type="text" id="prenom" name="prenom" required
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
              placeholder="Votre prénom">
          </div>
        </div>

        <!-- Téléphone -->
        <div>
          <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
          <input type="tel" id="telephone" name="telephone" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
            placeholder="+33 X XX XX XX XX">
        </div>

        <!-- Adresse -->
        <div>
          <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
          <input type="text" id="adresse" name="adress" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
            placeholder="Votre adresse professionnelle">
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
            placeholder="vous@exemple.com">
        </div>

        <!-- Mot de passe -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
          <input type="password" id="password" name="password" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
            placeholder="••••••••">
        </div>

        <!-- Spécialité -->
        <div>
          <label for="specialite" class="block text-sm font-medium text-gray-700">Spécialité</label>
          <input type="text" id="specialite" name="specialite" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
            placeholder="Ex: Droit des affaires, Droit pénal...">
        </div>

        <!-- Biographie -->
        <div>
          <label for="biographie" class="block text-sm font-medium text-gray-700">Biographie</label>
          <textarea id="biographie" name="biographie" rows="4" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
            placeholder="Décrivez votre parcours professionnel..."></textarea>
        </div>

        <!-- Photo -->
        <!-- <div>
          <label class="block text-sm font-medium text-gray-700">Photo</label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600">
                <label for="photo" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                  <span>Télécharger un fichier</span>
                  <input id="photo" name="photo" type="file" class="sr-only" accept="image/*" required>
                </label>
              </div>
              <p class="text-xs text-gray-500">PNG, JPG jusqu'à 10MB</p>
            </div>
          </div>
        </div> -->

        <div>
          <button type="submit"
            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            S'inscrire
          </button>
        </div>
      </form>
    </div>
    </section>
    </main>

    <!-- Footer (même que index.html) -->
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
         document.getElementById('burger-btn').onclick = function(e) {
document.getElementById('mobile-menu').classList.toggle('hidden')  ;      
    }
    </script>
    <!-- ... Copier le footer de index.html ... -->
</body>
</html>
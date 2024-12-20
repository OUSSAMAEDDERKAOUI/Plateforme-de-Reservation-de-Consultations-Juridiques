<?php

require  './db.php';
require './check_role.php';

if (!isAuth('client')) {
    header('Location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservations - LexConsult</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .cacher {
            display: none;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col bg-gray-50">

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

            </div>
        </div>
    </nav>

    <main class="flex-grow pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-3xl font-bold text-gray-900 mb-8">Nos Avocats</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $stmt = $conn->prepare("SELECT  * FROM users JOIN  info ON users.id_users=info.id_lawyer");

                $stmt->execute();

                $result = $stmt->get_result();

                while ($rows = $result->fetch_assoc()) {
                    echo "<div class='bg-white rounded-lg shadow-md overflow-hidden'>";
                    echo " <img src='https://images.unsplash.com/photo-1560250097-0b93528c311a'alt='Me. Jean Dupont 'class='w-full h-48 object-cover'>";
                    echo '<div class="p-6">';
                   $id= $rows['id_lawyer'] ;
                    echo '<h3 class="text-xl font-semibold mb-2">' . $rows['fname'] . '  ' . $rows['lname'] . '</h3>';

                    echo '<p class="text-gray-600 mb-4">';
                    echo "<span class='font-bold'>Spécialiste en : </span>" . $rows['speciality'] . '</p>';
                    echo '<div class="space-y-2">';
                    echo ' <p class="text-sm text-gray-500">';
                    echo "<span class='font-bold'>Biographie : </span>" . $rows['biography'] . '</p>';
                    echo '<p class="text-sm text-gray-500">';
                    echo "<span class='font-bold'>Telephone : </span>" . $rows['phone'] . '</p>';
                    echo '<p class="text-sm text-gray-500">';
                    echo "<span class='font-bold'>adresse : </span>" . $rows['adress'] . '</p>';
                    echo '</div>';
                    echo ' <button id="" class="mt-4 w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors avocatReserv">';
                    echo 'Réserver une consultation';
                    echo '</button>';
                    echo '</div>';
                    echo '</div>';
                

               echo' <div id="reservationModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
                    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                        <div class="mt-3">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Réserver une consultation</h3>';
                            echo'<form id="reservationForm" class="space-y-4" method="POST" action="./reservationPost.php">';
                              echo'  <input type="hidden" id="lawyerName">
                                <div>
                                    <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                                    <input type="date" id="date" name="date" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <!-- <div>
                            <label for="time" class="block text-sm font-medium text-gray-700">Heure</label>
                            <select id="time" name="time" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                            </select>
                        </div> -->
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700">Sujet de la consultation</label>
                                    <textarea id="subject" name="subject" rows="3" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                                </div>
                                <div class="flex justify-end space-x-3">
                                    <button type="button" id="annuler-btn" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
                                        Annuler
                                    </button>';
              

                                    echo "<a href='./reservationPost.php?id=" . $id . "'>";
                                    echo'<button id="confirmer-btn" type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">';
                                          echo  'Confirmer' ;
                                       echo' </button>';
                                  echo'  </a>';
                
               
                                echo'</div>';
                          echo'  </form>
                        </div>
                    </div>
                </div>';
                }
                ?>
    </main>

    <!-- Footer -->
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
        const vocatReserv = document.querySelectorAll('.avocatReserv')
        vocatReserv.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('reservationModal').classList.remove('hidden')
            });
        })



        document.getElementById('annuler-btn').onclick = function(e) {
            e.preventDefault();
            document.getElementById('reservationModal').classList.add('hidden');
        };

        document.getElementById('confirmer-btn').onclick = function(e) {


            document.getElementById('reservationModal').classList.add('hidden');

        }
        document.getElementById('burger-btn').onclick = function(e) {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }
    </script>
    <script src="./js/script.js"></script>
</body>

</html>
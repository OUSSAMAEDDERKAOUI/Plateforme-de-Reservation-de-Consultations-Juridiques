<?php

include './db.php';
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
    <title>Cabinet Legal - Espace Client</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen mb-32">
        <!-- Header -->
        <header class="bg-white shadow-sm">
            <nav class="bg-white shadow-lg mb-16  w-full z-50">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <a href="index.html" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                                <span class="ml-2 text-xl font-semibold">LexConsult Admin</span>
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="http://localhost/Plateforme-de-Reservation-de-Consultations-Juridiques/src/reservation.php" class="text-gray-700 hover:text-blue-700 px-3 py-2"> <button class="text-gray-700 hover:text-blue-700 px-3 py-2">Réservations</button> </a>

                            <a href="./logout.php">
                                <button class="text-gray-700 hover:text-blue-700 px-3 py-2">
                                    Déconnexion
                                </button>
                            </a>


                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto py-6  sm:px-6 lg:px-8">
            <!-- Dashboard Tab -->
            <div id="dashboard" class="tab-content">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                    <!-- Quick Stats -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Aperçu Rapide</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <p class="text-sm text-blue-600 font-medium">Prochains RDV</p>
                                    <p class="text-2xl font-semibold text-blue-800">3</p>
                                </div>
                                <div class="bg-green-50 p-4 rounded-lg">
                                    <p class="text-sm text-green-600 font-medium">RDV Confirmés</p>
                                    <p class="text-2xl font-semibold text-green-800">2</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Next Appointment -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Prochain Rendez-vous</h3>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <p class="font-medium text-blue-900">Consultation Droit des Affaires</p>
                                <p class="text-sm text-blue-600 mt-1">Me Martin Dubois</p>
                                <p class="text-sm text-blue-600 mt-1"> 02 Janvier 2025 à 14:30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Appointments Tab -->
            <div id="appointments" class="tab-content mt-16">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                        <h2 class="text-lg font-medium text-gray-900">Mes Rendez-vous</h2>
                        <div class="flex space-x-3">
                            <select id="statusFilter" onchange="filterAppointments()" class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="all">Tous les statuts</option>
                                <option value="confirmed">Confirmés</option>
                                <option value="pending">En attente</option>
                                <option value="cancelled">Annulés</option>
                            </select>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 ">
                        <ul id="appointmentsList" class="divide-y divide-gray-200">
                            <li class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-900">TITLE</h3>
                                        <p class="mt-1 text-sm text-gray-500">
                                            <span class="font-medium">ousammmmmmmmm</span>
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            21/11/2020
                                        </p>
                                        <span class="mt-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                        ${appointment.status === 'confirmed' ? 'bg-green-100 text-green-800' : 
                          appointment.status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 
                          'bg-red-100 text-red-800'}">
                                        </span>
                                    </div>
                                    <div class="flex space-x-2">

                                        <button onclick="openModifyModal('${appointment.id}')"
                                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                            Modifier
                                        </button>
                                        <button onclick="cancelAppointment('${appointment.id}')"
                                            class="text-red-600 hover:text-red-800 text-sm font-medium">
                                            Annuler
                                        </button>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Profile Tab -->
            <div id="profile" class="tab-content mt-16 ">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="text-lg font-medium text-gray-900">Informations Personnelles</h2>
                        <p class="mt-1 text-sm text-gray-500">Gérez vos informations personnelles et vos préférences.</p>
                    </div>
                    <div class="border-t border-gray-200">
                        <form id="profileForm" class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="firstName" class="block text-sm font-medium text-gray-700">Prénom</label>
                                    <input type="text" name="firstName" id="firstName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="lastName" class="block text-sm font-medium text-gray-700">Nom</label>
                                    <input type="text" name="lastName" id="lastName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                                    <input type="tel" name="phone" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                </div>
                                <div class="col-span-6">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Adresse</label>
                                    <textarea name="address" id="address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Enregistrer les modifications
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Appointment Modification Modal -->
    <div id="modifyModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 max-w-md w-full">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Modifier le Rendez-vous</h3>
            <form id="modifyForm">
                <input type="hidden" id="appointmentId">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Date</label>
                    <input type="date" id="modifyDate" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Heure</label>
                    <input type="time" id="modifyTime" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeModal()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-md">
                        Annuler
                    </button>
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-md">
                        Confirmer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="hidden fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
        <p id="toastMessage"></p>
    </div>

    <script src="js/data.js"></script>
    <script src="js/appointments.js"></script>
    <script src="js/profile.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/utils.js"></script>
</body>

</html>
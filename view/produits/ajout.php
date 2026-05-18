<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion de Commandes — Formulaire Produit</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans antialiased">

  <!-- Navigation -->
  <nav class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center space-x-8">
          <a href="../index.html" class="text-xl font-bold text-indigo-600">📦 GES-COMMANDE</a>
          <div class="hidden sm:flex space-x-4">
            <a href="../index.html" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-100">Dashboard</a>
            <a href="../clients/liste.html" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-100">Clients</a>
            <a href="liste.html" class="px-3 py-2 rounded-md text-sm font-medium text-indigo-600 bg-indigo-50">Produits</a>
            <a href="../commandes/liste.html" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-100">Commandes</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- En-tête -->
  <header class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Ajouter un produit</h2>
    <p class="mt-1 text-sm text-gray-500">Remplissez les champs ci-dessous.</p>
  </header>

  <!-- Formulaire -->
  <section class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-12">
    <form class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8" action="#" method="POST">

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <!-- Référence -->
        <div>
          <label for="reference" class="block text-sm font-medium text-gray-700 mb-1">Référence <span class="text-red-500">*</span></label>
          <input type="text" name="reference" id="reference" required
                 class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                 placeholder="Ex: REF007">
        </div>

        <!-- Nom -->
        <div>
          <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-500">*</span></label>
          <input type="text" name="nom" id="nom" required
                 class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                 placeholder="Ex: Écran 27 pouces">
        </div>

        <!-- Description -->
        <div class="sm:col-span-2">
          <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
          <textarea name="description" id="description" rows="3"
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition resize-none"
                    placeholder="Description détaillée du produit…"></textarea>
        </div>

        <!-- Prix unitaire -->
        <div>
          <label for="prix_unitaire" class="block text-sm font-medium text-gray-700 mb-1">Prix unitaire (€) <span class="text-red-500">*</span></label>
          <input type="number" name="prix_unitaire" id="prix_unitaire" required min="0" step="0.01"
                 class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                 placeholder="0.00">
        </div>

        <!-- Stock -->
        <div>
          <label for="stock" class="block text-sm font-medium text-gray-700 mb-1">Stock <span class="text-red-500">*</span></label>
          <input type="number" name="stock" id="stock" required min="0" step="1"
                 class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                 placeholder="0">
        </div>
      </div>

      <!-- Boutons -->
      <div class="mt-8 flex flex-col sm:flex-row sm:justify-end space-y-3 sm:space-y-0 sm:space-x-3">
        <a href="liste.html" class="px-6 py-2.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition text-center">Annuler</a>
        <button type="submit" class="px-6 py-2.5 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition shadow-sm">
          Enregistrer
        </button>
      </div>
    </form>
  </section>

</body>
</html>

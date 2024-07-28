<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<?php include './sidebar.php' ?>





<div class="p-4 sm:ml-64">
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Manage Students</h1>
    <table class="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="px-4 py-2 border-b">Student ID</th>
          <th class="px-4 py-2 border-b">Name</th>
          <th class="px-4 py-2 border-b">Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Sample row -->
        <tr class="hover:bg-gray-100">
          <td class="px-4 py-2 border-b">1</td>
          <td class="px-4 py-2 border-b">John Doe</td>
          <td class="px-4 py-2 border-b">
            <button class="bg-blue-500 text-white px-2 py-1 rounded mr-2 hover:bg-blue-600">Edit</button>
            <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
          </td>
        </tr>
        <!-- Repeat rows as needed -->
      </tbody>
    </table>
  </div>

  
</div>












</body>
</html>
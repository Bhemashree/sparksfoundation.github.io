<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>home</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?> 
    <div class="container">
    <h5 class="text-center">S.F.BANK </h5>
    </div>
    <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-5x2 text-4xl mb-4 font-medium text-gray-900">SPARKS FOUNDATION BANK
        <br class="hidden lg:inline-block">Welcomes You
      </h1>
    
      <div class="flex justify-center">
        <button class="inline-flex text-black bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">VIEW CUSTOMERS
        <li class="nav-item">
          <a class="nav-link" href="/web/view customer.php">click here</a>
        </li>
        </button>
        <button class="ml-4 inline-flex text-black-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">MONEY TRANSFER
        <li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">click here</a>
        </li>
        </button>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="https://source.unsplash.com/720x600/?bank,money">
    </div>
  </div>
</section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>
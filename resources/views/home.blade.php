<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="/assets/myAdsStyle.css" />
    <title>Aw2Store</title>
  </head>

  <body>
    <!-- Header -->
    <x-base.header />
    <!-- Header -->

    <main>
      <!-- Hero Área -->
      <x-hero />
      <!--/Hero Área -->

      <!-- Categories Area -->
      <livewire:categories-list />
      <!-- /Categories Area -->

      <x-filtered-advertises />
      
    </main>
    <x-base.footer />
  </body>
</html>

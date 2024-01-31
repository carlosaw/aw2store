<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/adsListStyle.css" />
    <link rel="stylesheet" href="/assets/myAdsStyle.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Aw2Store - Anúncios</title>
  </head>

  <body>
    <!-- Header -->
    <x-base.header />
    <!-- Header -->
    
 
    <main>
      <div class="ads">
        <div class="ads-title">Anúncios da categoria <b>{{$category->name}}</b></div>
        <div class="ads-area">
          @if(count($filteredAds) > 0)
            @foreach($filteredAds as $ad)
              <x-basic-ad :ad="$ad" />
            @endforeach
          @else
            <span> Não há anúncios para exibir! </span>
          @endif
        </div>

        <div class="mt-10">
          {{ $filteredAds->links() }}
        </div>
      </div>
      
      <!-- Footer -->
      <x-base.footer />
      <!-- Footer -->

    </main>
  </body>
</html>

<div class="ads">
    <div class="ads-title">Anúncios recentes</div>
    <div class="ads-area">
        @if ($advertisesList->count() > 0)
        @foreach($advertisesList as $ad)
            <x-basic-ad :ad="$ad" />
        @endforeach
        @else
            <span>Não há anúncios recentes para exibir!</span>
        @endif          
    </div>
</div>
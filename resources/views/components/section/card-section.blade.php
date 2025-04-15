
@php
    // Define the awards and use Vite::asset() for the imageUrl
    $awards = [
        [
            'pageUrl' => 'ignite-awards',
            'imageUrl' => Vite::asset('resources/img/card_ignite.webp'),
            'awardTitle' => 'The IGNITE Awards',
            'awardText' => '',
            'id' => 'ignite'
        ],
        [
            'pageUrl' => 'graphic-design',
            'imageUrl' => Vite::asset('resources/img/card_graphic.webp'),
            'awardTitle' => 'Graphic Design Awards',
            'awardText' => '',
            'id' => 'graphic-design'
        ],
        [
            'pageUrl' => 'user-experience',
            'imageUrl' => Vite::asset('resources/img/card_ux.webp'),
            'awardTitle' => 'User Experience Awards',
            'awardText' => '',
            'id' => 'ux'
        ],
        [
            'pageUrl' => 'web-development',
            'imageUrl' => Vite::asset('resources/img/card_web.webp'),
            'awardTitle' => 'Web Development Awards',
            'awardText' => '',
            'id' => 'web'
        ],
        
    ];
@endphp

<section class="cards-section">
      <div class="cards-container">
      @foreach ($awards as $award)
            @if ($award['id'] !== $hiddenAward)  <!-- Check if the award should be hidden -->
                <x-awards-item 
                    :pageUrl="url($award['pageUrl'])" 
                    :imageUrl="$award['imageUrl']" 
                    :awardTitle="$award['awardTitle']" 
                    :awardText="$award['awardText']" 
                />
            @endif
        @endforeach
            
    </div>
</section>

@php
    // Define the awards and use Vite::asset() for the imageUrl
    $awards = [
        [
            'pageUrl' => 'ignite-awards',
            'imageUrl' => Vite::asset('resources/img/IGNITE@3x.png'),
            'awardTitle' => 'The IGNITE Award',
            'awardText' => 'See criteria for the IGNITE award. Student and Instructor voted!',
            'id' => 'ignite'
        ],
        [
            'pageUrl' => 'graphic-design',
            'imageUrl' => Vite::asset('resources/img/IGNITE@3x.png'),
            'awardTitle' => 'Graphic Design',
            'awardText' => 'See criteria for all Graphic Design awards.',
            'id' => 'graphic-design'
        ],
        [
            'pageUrl' => 'user-experience',
            'imageUrl' => Vite::asset('resources/img/UX@3x.png'),
            'awardTitle' => 'User Experience',
            'awardText' => 'See criteria for all UX awards.',
            'id' => 'ux'
        ],
        [
            'pageUrl' => 'web-development',
            'imageUrl' => Vite::asset('resources/img/WEB@3x.png'),
            'awardTitle' => 'Web Development',
            'awardText' => 'See criteria for all Web awards.',
            'id' => 'web'
        ],
        [
            'pageUrl' => 'general-awards',
            'imageUrl' => Vite::asset('resources/img/GEN@3x.png'),
            'awardTitle' => 'General',
            'awardText' => 'See criteria for general awards. ',
            'id' => 'general'
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
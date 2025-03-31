<div onclick="window.location.href='{{ $pageUrl }}';" class="card">
    <img
        src="{{ $imageUrl }}"
        alt="{{ $awardTitle }}"
        class="card-img"
    />
    <div class="card-content">
    <h2 class="card-title">{{ $awardTitle }}</h2>
    <p class="card-text">
    {{ $awardText }}
    </p>
    </div>
</div>
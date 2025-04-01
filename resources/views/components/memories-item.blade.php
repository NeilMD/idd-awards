<div class="gallery-item" data-attr-link="{{ $memory['link'] }}">
    <div class="gallery-image-container">
        <img loading="lazy" src="{{ $memory['imageUrl'] }}" alt="{{ $memory['title'] }}" class="gallery-image">
    </div>
    <div class="gallery-info">
        <h3 class="gallery-title">{{ $memory['title'] }}</h3>
        <p class="gallery-submitter">By {{ $memory['name'] }}</p>
        <p class="gallery-description">{{ $memory['description'] }}</p>
    </div>
    <div class="gallery-category">
        <span> {{ $memory['design_category'] }}</span>
    </div>
</div>
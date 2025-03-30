<div class="gallery-item">
    <div class="gallery-image-container">
        <img loading="lazy" src="{{ $memory['imageUrl'] }}" alt="{{ $memory['title'] }}" class="gallery-image">
    </div>
    <div class="gallery-info">
        <h3 class="gallery-title">{{ $memory['title'] }}</h3>
        <p class="gallery-submitter">By {{ $memory['name'] }}</p>
        <p class="gallery-description">{{ $memory['design_category'] . $memory['description'] }}</p>
    </div>
</div>
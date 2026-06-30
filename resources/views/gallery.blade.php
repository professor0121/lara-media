<x-layout>
    @section('title', 'Hospital Gallery - ' . config('app.name', 'MediaBundle'))
    @section('meta_description', 'View our modern facilities, rooms, and advanced medical equipment.')

    <div class="banner">
        <div class="container">
            <div class="middle-allign-wrapper">
                <h1 class="page-heading">Capturing <span class="span-background">Moments</span> of Care, Compassion, and Healing</h1>
                <div class="breadcrumb-block">
                    <a class="breadcrumb" href="{{ route('home') }}">Home</a>
                    <div>/</div>
                    <div>Gallery</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="default-section">
        <div class="container w-dyn-list">
            <div class="gallery-collumn w-dyn-items" role="list">
                @forelse($galleryItems as $item)
                    <div class="w-dyn-item w-dyn-repeater-item" role="listitem">
                        <a class="gallery-lightbox w-inline-block w-lightbox" data-w-id="26887e98-2e2d-8598-7b15-ca66c5a25134" href="#">
                            <img alt="{{ $item->title }}" class="gallery-image" loading="lazy" src="{{ $item->image_path }}" width="70"/>
                            <div class="hover-overlay doctor-overlay">
                                <img alt="" class="lightbox-eye" loading="lazy" src="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650ad9004a4963b0a9427eb4_eye-open%201.svg" width="70"/>
                            </div>
                            <script class="w-json" type="application/json">{
                                "items": [
                                    {
                                        "url": "{{ $item->image_path }}",
                                        "type": "image"
                                    }
                                ],
                                "group": "Gallery"
                            }</script>
                        </a>
                    </div>
                @empty
                    <div class="empty-block" style="text-align: center; padding: 48px; color: #64748b; width: 100%;">
                        <div>No gallery items found.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>

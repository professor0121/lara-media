<x-layout>
    @section('title', $post->title . ' - ' . config('app.name', 'MediaBundle'))
    @section('meta_description', $post->summary ?? "Read this blog post on TNC Medflow's health blog.")

    @php
        $author = \App\Models\Doctor::first() ?? (object)[
            'name' => 'Robert Fox',
            'title' => 'Dr.',
            'specialty' => 'Cardiologist',
            'image_path' => 'https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650ab299ed3778abeac747dc_650a867a37d9816c7cc189e0_Rectangle%252054.png'
        ];
    @endphp

    <div class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb-block secondary">
                <a class="breadcrumb-link" href="{{ route('home') }}">Home</a>
                <div>/</div>
                <a class="breadcrumb-link" href="{{ route('blog.index') }}">Blog</a>
                <div>/</div>
                <div>{{ $post->title }}</div>
            </div>
        </div>
    </div>
    
    <section class="default-section">
        <div class="container">
            <div class="two-column-flex reverse">
                <div class="left-sidebar-wrapper">
                    <!-- Related Posts Sidebar -->
                    <div class="sidebar main-sidebar">
                        <div class="sidebar-title-wrapper">
                            <h3 class="sidebar-title">Related Posts</h3>
                        </div>
                        <div class="w-dyn-list">
                            <div class="related-post-body w-dyn-items" role="list">
                                @forelse($latestPosts as $lpost)
                                    <div class="related-post-block w-dyn-item" role="listitem">
                                        <a class="mask related-images w-inline-block" href="{{ route('blog.show', $lpost->slug) }}">
                                            <img alt="{{ $lpost->title }}" class="related-image" loading="lazy" src="{{ $lpost->image_path }}" width="70" />
                                        </a>
                                        <a class="text-limit-masking w-inline-block" href="{{ route('blog.show', $lpost->slug) }}">
                                            <h3 class="related-post-title">{{ $lpost->title }}</h3>
                                        </a>
                                    </div>
                                @empty
                                    <div style="padding: 16px; color: #64748b;">No related posts.</div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    
                    <!-- Categories Sidebar -->
                    <div class="sidebar main-sidebar">
                        <div class="sidebar-title-wrapper categories">
                            <h3 class="sidebar-title categories">Categories</h3>
                        </div>
                        <div class="w-dyn-list">
                            <div class="categories-block w-dyn-items" role="list">
                                @forelse($categories as $cat)
                                    <div class="related-post-block w-dyn-item" role="listitem">
                                        <a class="categories-item" href="{{ route('blog.index', ['category' => $cat->slug]) }}">{{ $cat->name }}</a>
                                    </div>
                                @empty
                                    <div style="padding: 16px; color: #64748b;">No categories.</div>
                                @endforelse
                            </div>
                        </div>
                        <div class="white-border-gap categories"></div>
                    </div>
                    
                    <!-- Tags Sidebar -->
                    <div class="sidebar main-sidebar">
                        <div class="sidebar-title-wrapper categories">
                            <h3 class="sidebar-title categories">Tags</h3>
                        </div>
                        <div class="w-dyn-list">
                            <div class="tags-sidebar-block w-dyn-items" role="list">
                                @forelse($tags as $tag)
                                    <div class="w-dyn-item" role="listitem">
                                        <a class="tag-button sidebar-design" href="{{ route('blog.index', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                                    </div>
                                @empty
                                    <div style="padding: 16px; color: #64748b;">No tags.</div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Main Blog Post Container -->
                <div class="blog-post-wrapper">
                    <div class="blog-post-container">
                        <img alt="{{ $post->title }}" class="blog-post-image" loading="lazy" src="{{ $post->image_path }}" width="70" />
                        <div class="blog-info-block">
                            <a class="author-block w-inline-block" href="{{ route('about') }}">
                                <img alt="{{ $author->name }}" class="author-image" loading="lazy" src="{{ $author->image_path }}" width="70" />
                                <div class="text-link">{{ $author->title }} {{ $author->name }}</div>
                            </a>
                            <div class="separator"></div>
                            <div>{{ $post->published_at?->format('F d, Y') ?? now()->format('F d, Y') }}</div>
                            @if($post->category)
                                <div class="separator"></div>
                                <a class="text-link" href="{{ route('blog.index', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
                            @endif
                        </div>
                        <h1 class="blog-post-title">{{ $post->title }}</h1>
                        <p>{{ $post->content }}</p>
                        
                        @if($post->summary)
                            <div class="quote-block">
                                <blockquote class="block-quote">“{{ $post->summary }}”</blockquote>
                                <img alt="" class="quote-svg-blog" loading="lazy" src="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650acad846a18cefd31a823e_quote-left%201.svg" width="70" />
                            </div>
                        @endif
                        
                        <div class="post-share-container">
                            <div class="share-icons-wrapper">
                                <div class="title">Share on:</div>
                                <div class="share-icons-block">
                                    <div class="social-share-icon"></div>
                                    <div class="social-share-icon twitter"></div>
                                    <div class="social-share-icon linkedin"></div>
                                    <div class="social-share-icon pinterest"></div>
                                    <div class="social-share-icon whatsapp"></div>
                                </div>
                            </div>
                            <div class="w-dyn-list">
                                <div class="tags-icon-container w-dyn-items" role="list">
                                    @foreach($post->tags as $tag)
                                        <div class="w-dyn-item" role="listitem">
                                            <a class="tag-button" href="{{ route('blog.index', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Author Information Section -->
                    <div class="blog-post-container author-information">
                        <a class="author-image-wrapper w-inline-block" href="{{ route('about') }}">
                            <img alt="{{ $author->name }}" class="author-thumbnail" loading="lazy" src="{{ $author->image_path }}" width="70" />
                        </a>
                        <div class="author-information-block">
                            <a class="w-inline-block" href="{{ route('about') }}">
                                <h4 class="author-title">{{ $author->title }} {{ $author->name }}</h4>
                            </a>
                            <div class="author-degree">{{ $author->specialty }}, {{ config('app.name', 'MediaBundle') }}</div>
                            <p>Meet our dedicated doctors at {{ config('app.name', 'MediaBundle') }} - experienced, compassionate, and committed to your well-being. Your health is our priority.</p>
                            <div class="author-share-icons-container">
                                <a class="author-social-icon" href="http://www.Facebook.com"></a>
                                <a class="author-social-icon twitter" href="http://www.Twitter.com"></a>
                                <a class="author-social-icon linkedin" href="http://www.Linkedin.com"></a>
                                <a class="author-social-icon pinterest" href="http://www.pinterest.com"></a>
                                <a class="author-social-icon whatsapp" href="https://web.whatsapp.com/"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
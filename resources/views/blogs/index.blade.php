<x-layout>
    @section('title', 'Health Blog - ' . config('app.name', 'MediaBundle'))
    @section('meta_description', "Read health insights, tips, and news from TNC Medflow's health blog.")

    <div class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb-block secondary">
                <a class="breadcrumb-link" href="{{ route('home') }}">Home</a>
                <div>/</div>
                <div>Blog Left Sidebar</div>
            </div>
        </div>
    </div>

    <section class="default-section">
        <div class="container">
            <div class="w-layout-grid two-column-flex">
                <div class="left-sidebar-wrapper">
                    <!-- Latest Posts Sidebar -->
                    <div class="sidebar main-sidebar">
                        <div class="sidebar-title-wrapper">
                            <h3 class="sidebar-title">Latest Posts</h3>
                        </div>
                        <div class="w-dyn-list">
                            <div class="related-post-body w-dyn-items" role="list">
                                @forelse($latestPosts as $lpost)
                                    <div class="related-post-block w-dyn-item" role="listitem">
                                        <a class="mask related-images w-inline-block"
                                            href="{{ route('blog.show', $lpost->slug) }}">
                                            <img alt="{{ $lpost->title }}" class="related-image" loading="lazy"
                                                src="{{ $lpost->image_path }}" width="70" />
                                        </a>
                                        <a class="text-limit-masking margin-top-5px w-inline-block"
                                            href="{{ route('blog.show', $lpost->slug) }}">
                                            <h3 class="related-post-title">{{ $lpost->title }}</h3>
                                        </a>
                                    </div>
                                @empty
                                    <div style="padding: 16px; color: #64748b;">No recent posts.</div>
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
                                        <a class="categories-item"
                                            href="{{ route('blog.index', ['category' => $cat->slug]) }}">{{ $cat->name }}</a>
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
                                        <a class="tag-button sidebar-design"
                                            href="{{ route('blog.index', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                                    </div>
                                @empty
                                    <div style="padding: 16px; color: #64748b;">No tags.</div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Blog Posts List -->
                <div class="w-dyn-list" id="w-node-_5c8f830a-a1da-a99f-c17d-55186496a040-d8f60aa9">
                    <div class="blog-posts-grid w-dyn-items" role="list">
                        @forelse($posts as $post)
                            <div class="w-dyn-item" role="listitem">
                                <div class="blog-post-card">
                                    <a class="mask border-radius-10px w-inline-block"
                                        href="{{ route('blog.show', $post->slug) }}">
                                        <img alt="{{ $post->title }}" class="blog-card-thumbnail" loading="lazy"
                                            src="{{ $post->image_path }}" width="70" />
                                    </a>
                                    <a class="w-inline-block" href="{{ route('blog.show', $post->slug) }}">
                                        <h3 class="blog-title blog-page">{{ $post->title }}</h3>
                                    </a>
                                    @if($post->category)
                                        <a class="blog-card-category"
                                            href="{{ route('blog.index', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <div class="empty-block"
                                style="text-align: center; padding: 48px; color: #64748b; width: 100%;">
                                <div>No blog posts found.</div>
                            </div>
                        @endforelse
                    </div>

                    @if($posts->hasPages())
                        <div style="margin-top: 40px; display: flex; justify-content: center;">
                            {{ $posts->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-layout>
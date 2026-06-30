<x-layout>
    @section('title', 'Search Results - ' . config('app.name', 'MediaBundle'))
    @section('meta_description', 'Search results for medical services, doctors, and health insights.')

    <div class="banner">
        <div class="container">
            <div class="middle-allign-wrapper">
                <h1 class="page-heading">Search <span class="span-background">Results</span></h1>
                <div class="breadcrumb-block">
                    <a class="breadcrumb" href="{{ route('home') }}">Home</a>
                    <div>/</div>
                    <div>Search</div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-section">
        <div class="container">
            <h3 style="margin-bottom: 24px;">Showing results for: <span style="color: var(--primary);">"{{ $query }}"</span></h3>

            @if($blogPosts->isEmpty() && $doctors->isEmpty() && $departments->isEmpty())
                <div class="empty-block" style="text-align: center; padding: 48px; color: #64748b; width: 100%;">
                    <div>No results found for your query. Try searching for different terms (e.g., "Cardiology", "Allergies").</div>
                </div>
            @else
                <!-- Departments Results -->
                @if($departments->isNotEmpty())
                    <div style="margin-bottom: 48px;">
                        <h2 style="font-size: 24px; margin-bottom: 24px; font-weight: bold; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">Departments ({{ $departments->count() }})</h2>
                        <div class="w-dyn-list">
                            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px;">
                                @foreach($departments as $dept)
                                    <div class="left-sidebar-body" style="padding: 24px; border: 1px solid #e2e8f0; border-radius: 8px; background: #fff; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
                                        <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 12px; margin-top: 0;">
                                            <a href="{{ route('departments.show', $dept->slug) }}" style="color: #0f3b5c; text-decoration: none; hover: underline;">
                                                {{ $dept->name }} Department
                                            </a>
                                        </h3>
                                        <p style="color: #64748b; font-size: 14px; line-height: 1.6; margin: 0;">{{ Str::limit($dept->description, 160) }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Doctors Results -->
                @if($doctors->isNotEmpty())
                    <div style="margin-bottom: 48px;">
                        <h2 style="font-size: 24px; margin-bottom: 24px; font-weight: bold; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">Doctors ({{ $doctors->count() }})</h2>
                        <div class="w-dyn-list">
                            <div class="specialist-grid w-dyn-items" role="list" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
                                @foreach($doctors as $doc)
                                    <div class="w-dyn-item" role="listitem">
                                        <div class="doctor-card" style="position: relative; overflow: hidden; background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); transition: transform 0.2s;">
                                            <img alt="{{ $doc->title }} {{ $doc->name }}" class="doctor-image" loading="lazy" src="{{ $doc->image_path }}" style="width: 100%; height: 260px; object-fit: cover;" />
                                            <div class="doctor-body" style="padding: 20px;">
                                                <h4 class="title" style="margin: 0 0 8px 0; font-size: 18px; font-weight: bold; color: #0f3b5c;">{{ $doc->title }} {{ $doc->name }}</h4>
                                                <div class="designation" style="font-size: 14px; color: #64748b; margin-bottom: 8px;">{{ $doc->specialty }}</div>
                                                <div class="doctor-degree" style="font-size: 12px; color: #94a3b8; margin-bottom: 8px;">MBBS, MRCF, FRCP</div>
                                                <div class="department-name-block" style="font-size: 12px; font-weight: 600; color: #0f3b5c; display: flex; gap: 2px;">
                                                    <div>(</div>
                                                    <div>{{ $doc->department->name }}</div>
                                                    <div>)</div>
                                                </div>
                                            </div>
                                            <!-- Action Button Layer for visibility and functionality -->
                                            <div style="padding: 0 20px 20px 20px;">
                                                <a class="primary-button w-button" href="{{ route('doctors.show', $doc->slug) }}" style="display: block; text-align: center; text-decoration: none; padding: 10px 16px; font-size: 14px; font-weight: bold; background: #0f3b5c; color: #fff; border-radius: 4px;">See Doctor Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Blog Posts Results -->
                @if($blogPosts->isNotEmpty())
                    <div style="margin-bottom: 48px;">
                        <h2 style="font-size: 24px; margin-bottom: 24px; font-weight: bold; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">Articles & News ({{ $blogPosts->count() }})</h2>
                        <div class="w-dyn-list">
                            <div class="blog-posts-grid w-dyn-items" role="list" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
                                @foreach($blogPosts as $post)
                                    <div class="w-dyn-item" role="listitem">
                                        <div class="blog-post-card" style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
                                            <a class="mask border-radius-10px w-inline-block" href="{{ route('blog.show', $post->slug) }}" style="display: block;">
                                                <img alt="{{ $post->title }}" class="blog-card-thumbnail" loading="lazy" src="{{ $post->image_path }}" style="width: 100%; height: 180px; object-fit: cover;" />
                                            </a>
                                            <div style="padding: 20px;">
                                                <a class="w-inline-block" href="{{ route('blog.show', $post->slug) }}" style="text-decoration: none;">
                                                    <h3 class="blog-title blog-page" style="margin: 0 0 12px 0; font-size: 16px; font-weight: bold; color: #0f3b5c; line-height: 1.4;">{{ $post->title }}</h3>
                                                </a>
                                                @if($post->category)
                                                    <a class="blog-card-category" href="{{ route('blog.index', ['category' => $post->category->slug]) }}" style="font-size: 12px; text-transform: uppercase; font-weight: bold; color: #0f3b5c; text-decoration: none;">{{ $post->category->name }}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </div>
</x-layout>

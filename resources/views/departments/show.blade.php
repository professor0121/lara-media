<x-layout>
    @section('title', $department->name . ' Department - ' . config('app.name', 'MediaBundle'))
    @section('meta_description', $department->description)

    <div class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb-block secondary">
                <a class="breadcrumb-link" href="{{ route('home') }}">Home</a>
                <div>/</div>
                <div>Department Details</div>
            </div>
        </div>
    </div>
    
    <div class="default-section">
        <div class="container">
            <div class="two-column-flex">
                <!-- Left Sidebar Departments List -->
                <div class="sidebar main-sidebar">
                    <div class="sidebar-title-wrapper">
                        <h3 class="sidebar-title">Departments</h3>
                    </div>
                    <div class="white-border-gap"></div>
                    <div class="w-dyn-list">
                        <div class="w-dyn-items" role="list">
                            @foreach($departments as $dept)
                                <div class="left-sidebar-body w-dyn-item" role="listitem">
                                    <div class="border-wrapper">
                                        <a aria-current="{{ request()->is('department/' . $dept->slug) ? 'page' : 'false' }}"
                                            class="hover-wrapper w-inline-block {{ request()->is('department/' . $dept->slug) ? 'w--current' : '' }}"
                                            href="{{ route('departments.show', $dept->slug) }}">
                                            <div class="title-wrapper-merge">
                                                <div>{{ $dept->name }}</div>
                                                <div>Department</div>
                                            </div>
                                            <div class="submenu-arrow"></div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Right Content Area -->
                <div class="right-sidebar">
                    <div class="department-details">
                        <h2 class="department-single-title">{{ $department->name }}: Dedicated to Your Well-Being</h2>
                        <p>{{ $department->description }}</p>
                        <div class="department-rich-block w-richtext">
                            <p>At {{ config('app.name', 'MediaBundle') }}, we provide state-of-the-art diagnostic and treatment facilities inside our {{ $department->name }} department. Our professional medical team is committed to delivering custom care pathways tailored for every patient.</p>
                            <h3>Our Core Commitments</h3>
                            <p>We work collaboratively across specialties to diagnose and treat complex medical conditions. Backed by modern infrastructure and expert practitioners, your recovery is supported every step of the way.</p>
                        </div>
                    </div>
                    
                    <!-- Specialist Doctors in Department -->
                    <div class="specialist-container">
                        <div class="title-wrapper-merge">
                            <div class="specialist-title">{{ $department->name }}</div>
                            <div class="specialist-title">Specialists</div>
                        </div>
                        <div class="divider divider-gap"></div>
                        <div class="w-dyn-list">
                            <div class="specialist-grid w-dyn-items" role="list">
                                @forelse($doctors as $doc)
                                    <div class="w-dyn-item" role="listitem">
                                        <div class="doctor-card" data-w-id="65efd451-ae68-45d6-96ef-134cc4a64f7c">
                                            <img alt="{{ $doc->title }} {{ $doc->name }}" class="doctor-image" loading="lazy" src="{{ $doc->image_path }}" width="70" />
                                            <div class="doctor-body">
                                                <h4 class="title">{{ $doc->title }} {{ $doc->name }}</h4>
                                                <div class="designation">{{ $doc->specialty }}</div>
                                                <div class="doctor-degree">MBBS, MRCF, FRCP</div>
                                                <div class="department-name-block">
                                                    <div>(</div>
                                                    <div>{{ $department->name }}</div>
                                                    <div>)</div>
                                                </div>
                                            </div>
                                            <div class="hover-overlay doctor-overlay" style="display:none;-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0">
                                                <a class="book-appoinment-button w-button" data-w-id="65efd451-ae68-45d6-96ef-134cc4a64f8d" href="#">Book Appoinment</a>
                                                <a class="book-appoinment-button hover-state w-button" href="{{ route('doctors.show', $doc->slug) }}">See Doctor Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="empty-block" style="text-align: center; padding: 48px; color: #64748b; width: 100%;">
                                        <div>No specialists assigned to this department yet.</div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
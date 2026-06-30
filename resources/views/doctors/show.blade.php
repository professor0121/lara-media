<x-layout>
    @section('title', $doctor->title . ' ' . $doctor->name . ' - ' . config('app.name', 'MediaBundle'))
    @section('meta_description', $doctor->bio)

    <div class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb-block secondary">
                <a class="breadcrumb-link" href="{{ route('home') }}">Home</a>
                <div>/</div>
                <a class="breadcrumb-link" href="{{ route('departments.show', $doctor->department->slug) }}">Departments</a>
                <div>/</div>
                <div>Doctor's Profile</div>
            </div>
        </div>
    </div>
    
    <div class="default-section">
        <div class="container">
            <div class="doctor-profile-container">
                <!-- Sidebar info -->
                <div class="sidebar" id="w-node-_013277cb-c514-47a4-346f-656551be64e1-6064f10f">
                    <div class="mask border-radius-10px">
                        <img alt="{{ $doctor->title }} {{ $doctor->name }}" class="doctor-profile-image" data-w-id="013277cb-c514-47a4-346f-656551be64e3" loading="lazy" src="{{ $doctor->image_path }}" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.3, 1.3, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.3, 1.3, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.3, 1.3, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.3, 1.3, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" width="70"/>
                    </div>
                    <div class="doctor-profile-body">
                        <h2 class="single-profile-name">{{ $doctor->title }} {{ $doctor->name }}</h2>
                        <div class="single-profile-designation">{{ $doctor->specialty }}</div>
                        <div class="doctor-personal-information">
                            <div class="doctor-contact-info-block">
                                <div class="info-icon"></div>
                                <div>{{ Str::slug($doctor->name) }}@mediabundle.com</div>
                            </div>
                            <div class="doctor-contact-info-block">
                                <div class="info-icon"></div>
                                <div>(316) 555-0116</div>
                            </div>
                            <div class="doctor-contact-info-block">
                                <div class="info-icon"></div>
                                <div>6301 Elgin St. Celina, Delaware 10255</div>
                            </div>
                        </div>
                        <div class="schedule-block">
                            <div class="info-icon"></div>
                            <div class="doctor-schedule-block">
                                <div class="schedule-title">Schedule Patients</div>
                                <div>04:00 PM - 10:00 PM (Sunday to Friday)</div>
                            </div>
                        </div>
                        <a class="doctor-appoinment-button w-button" data-w-id="013277cb-c514-47a4-346f-656551be6501" href="#" data-doctor-id="{{ $doctor->id }}">Book an appointment</a>
                    </div>
                </div>
                
                <!-- Main details sidebar -->
                <div class="doctor-right-sidebar-wrapper" data-w-id="013277cb-c514-47a4-346f-656551be6503" id="w-node-_013277cb-c514-47a4-346f-656551be6503-6064f10f">
                    <div class="doctor-information-sidebar">
                        <div class="title-wrapper-merge">
                            <div class="title">About</div>
                            <div class="title">{{ $doctor->title }} {{ $doctor->name }}</div>
                        </div>
                        <p>{{ $doctor->bio }}</p>
                    </div>
                    
                    <div class="doctor-information-sidebar">
                        <div class="title">Areas of Expertise:</div>
                        <div class="areas-of-expertise-wrapper w-dyn-list">
                            <div class="w-dyn-items" role="list">
                                <div class="areas-of-expertise-block w-dyn-item" role="listitem">
                                    <div>●</div>
                                    <a class="areas-of-experise-text" href="#">{{ $doctor->specialty }} Consultation</a>
                                </div>
                                <div class="areas-of-expertise-block w-dyn-item" role="listitem">
                                    <div>●</div>
                                    <a class="areas-of-experise-text" href="#">Diagnostic Screenings</a>
                                </div>
                                <div class="areas-of-expertise-block w-dyn-item" role="listitem">
                                    <div>●</div>
                                    <a class="areas-of-experise-text" href="#">Patient Management & Rehabilitation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="doctor-information-sidebar">
                        <div class="title">Education and Training:</div>
                        <div class="w-richtext">
                            <ul role="list">
                                <li>Medical Degree: Doctor of Medicine (MD) from Teknon Medical Center</li>
                                <li>Residency: Internal Medicine Residency Training</li>
                                <li>Fellowship: Advanced Clinical Fellowship in {{ $doctor->specialty }}</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="doctor-information-sidebar">
                        <div class="title">Professional Achievements:</div>
                        <div class="w-richtext">
                            <ul role="list">
                                <li>Published several research articles in renowned medical journals.</li>
                                <li>Presented at national and international specialty conferences.</li>
                                <li>Active board-certified member of national specialty associations.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="doctor-information-sidebar">
                        <div class="title">Patient-Centered Approach:</div>
                        <p>To schedule a consultation with {{ $doctor->title }} {{ $doctor->name }} or to learn more about our {{ $doctor->department->name }} Department's services, please contact our office or use our convenient online appointment booking system.</p>
                    </div>
                </div>
            </div>
            
            <div class="filter-blur-background doctor-top-right"></div>
            <div class="filter-blur-background doctor-bottom-right"></div>
            <div class="filter-blur-background doctor-top-left"></div>
        </div>
    </div>
</x-layout>
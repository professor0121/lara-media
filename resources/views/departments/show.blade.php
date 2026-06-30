<x-layout>
    @section('title', 'Department Details - TNC Medflow')
    @section('meta_description', 'Learn about our specialized medical departments and services.')

    <div class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb-block secondary"><a class="breadcrumb-link" href="/home">Home</a>
                <div>/</div>
                <div>Department Details</div>
            </div>
        </div>
    </div>
    <div class="default-section">
        <div class="container">
            <div class="two-column-flex">
                <div class="sidebar main-sidebar">
                    <div class="sidebar-title-wrapper">
                        <h3 class="sidebar-title">Departments</h3>
                    </div>
                    <div class="white-border-gap"></div>
                    <div class="w-dyn-list">
                        <div class="w-dyn-items" role="list">
                            <div class="left-sidebar-body w-dyn-item" role="listitem">
                                <div class="border-wrapper"><a class="hover-wrapper w-inline-block"
                                        href="/department/cardiology">
                                        <div class="title-wrapper-merge">
                                            <div>Cardiology</div>
                                            <div>Department</div>
                                        </div>
                                        <div class="submenu-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="left-sidebar-body w-dyn-item" role="listitem">
                                <div class="border-wrapper"><a class="hover-wrapper w-inline-block"
                                        href="/department/dermatology">
                                        <div class="title-wrapper-merge">
                                            <div>Dermatology</div>
                                            <div>Department</div>
                                        </div>
                                        <div class="submenu-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="left-sidebar-body w-dyn-item" role="listitem">
                                <div class="border-wrapper"><a aria-current="page"
                                        class="hover-wrapper w-inline-block w--current"
                                        href="/department/gastroenterology">
                                        <div class="title-wrapper-merge">
                                            <div>{{ $department->name }}</div>
                                            <div>Department</div>
                                        </div>
                                        <div class="submenu-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="left-sidebar-body w-dyn-item" role="listitem">
                                <div class="border-wrapper"><a class="hover-wrapper w-inline-block"
                                        href="/department/maternity-and-obstetrics">
                                        <div class="title-wrapper-merge">
                                            <div>Maternity and Obstetrics</div>
                                            <div class="w-condition-invisible">Department</div>
                                        </div>
                                        <div class="submenu-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="left-sidebar-body w-dyn-item" role="listitem">
                                <div class="border-wrapper"><a class="hover-wrapper w-inline-block"
                                        href="/department/neurology">
                                        <div class="title-wrapper-merge">
                                            <div>Neurology</div>
                                            <div>Department</div>
                                        </div>
                                        <div class="submenu-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="left-sidebar-body w-dyn-item" role="listitem">
                                <div class="border-wrapper"><a class="hover-wrapper w-inline-block"
                                        href="/department/oncology">
                                        <div class="title-wrapper-merge">
                                            <div>Oncology</div>
                                            <div>Department</div>
                                        </div>
                                        <div class="submenu-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="left-sidebar-body w-dyn-item" role="listitem">
                                <div class="border-wrapper"><a class="hover-wrapper w-inline-block"
                                        href="/department/orthopedics">
                                        <div class="title-wrapper-merge">
                                            <div>Orthopedics</div>
                                            <div>Department</div>
                                        </div>
                                        <div class="submenu-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="left-sidebar-body w-dyn-item" role="listitem">
                                <div class="border-wrapper"><a class="hover-wrapper w-inline-block"
                                        href="/department/pediatrics">
                                        <div class="title-wrapper-merge">
                                            <div>Pediatrics</div>
                                            <div>Department</div>
                                        </div>
                                        <div class="submenu-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="left-sidebar-body w-dyn-item" role="listitem">
                                <div class="border-wrapper"><a class="hover-wrapper w-inline-block"
                                        href="/department/urology">
                                        <div class="title-wrapper-merge">
                                            <div>Urology</div>
                                            <div>Department</div>
                                        </div>
                                        <div class="submenu-arrow"></div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-sidebar">
                    <div class="department-details">
                        <h2 class="department-single-title">Gastroenterology: Your Digestive Health Matters</h2><img
                            alt="" class="department-cover" loading="lazy"
                            sizes="(max-width: 479px) 100vw, (max-width: 767px) 87vw, (max-width: 991px) 90vw, 45vw"
                            src="https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650abdf8a4b01c81f0fce5ee_650a867a37d9816c7cc18978_Rectangle%252020%2520(6).png"
                            srcset="https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650abdf8a4b01c81f0fce5ee_650a867a37d9816c7cc18978_Rectangle%252020%2520(6)-p-500.png 500w, https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650abdf8a4b01c81f0fce5ee_650a867a37d9816c7cc18978_Rectangle%252020%2520(6).png 600w"
                            width="70" />
                        <p>Addressing digestive system disorders with a multidisciplinary approach, advanced endoscopic
                            procedures, and compassionate care for better gastrointestinal health.</p>
                        <div class="department-rich-block w-richtext">
                            <p>In the intricate tapestry of healthcare, few departments are as vital as cardiology. At
                                TNC Hospital, we pride ourselves on housing a state-of-the-art Cardiology Department
                                that serves as the heartbeat of our commitment to your well-being.</p>
                            <h3>Our Expertise</h3>
                            <p>Our team of cardiology specialists is at the forefront of cardiovascular care. With years
                                of experience and a passion for healing, they tackle a wide range of heart-related
                                issues, from routine check-ups to complex surgeries. Their expertise ensures that your
                                heart is in capable hands.<br />‍<br />At TNC Hospital, our Cardiology Department isn't
                                just about treating heart conditions; it's about preserving the quality of life,
                                ensuring your heart remains strong and steady. Your heart's health is our concern, and
                                your well-being is our mission. Trust us to keep your heart beating strong.</p>
                        </div>
                    </div>
                    <div class="specialist-container">
                        <div class="title-wrapper-merge">
                            <div class="specialist-title">Gastroenterology</div>
                            <div class="specialist-title">Specialist</div>
                        </div>
                        <div class="divider divider-gap"></div>
                        <div class="w-dyn-list">
                            <div class="specialist-grid w-dyn-items" role="list">
                                <div class="w-dyn-item" role="listitem">
                                    <div class="doctor-card" data-w-id="65efd451-ae68-45d6-96ef-134cc4a64f7c"><img
                                            alt="" class="doctor-image" loading="lazy"
                                            src="https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650ab299fdc5045f2bc5f3e8_650a867a37d9816c7cc189d7_image%2520(1).png"
                                            width="70" />
                                        <div class="doctor-body">
                                            <h4 class="title">Dr. Kathryn Murphy</h4>
                                            <div class="designation">Junior Oncologist</div>
                                            <div class="doctor-degree">MBBS, MRCF (US), FRCP, FACC, (UK</div>
                                            <div class="department-name-block">
                                                <div>(</div>
                                                <div>{{ $department->name }}</div>
                                                <div>)</div>
                                            </div>
                                        </div>
                                        <div class="hover-overlay doctor-overlay"
                                            style="display:none;-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0">
                                            <a class="book-appoinment-button w-button"
                                                data-w-id="65efd451-ae68-45d6-96ef-134cc4a64f8d" href="#">Book
                                                Appoinment</a><a class="book-appoinment-button hover-state w-button"
                                                href="/doctor/katheryn-murphy">See Doctor Profile</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-dyn-item" role="listitem">
                                    <div class="doctor-card" data-w-id="65efd451-ae68-45d6-96ef-134cc4a64f7c"><img
                                            alt="" class="doctor-image" loading="lazy"
                                            src="https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650ab46c19db76ab43d1ff65_650a867a37d9816c7cc189d4_image.png"
                                            width="70" />
                                        <div class="doctor-body">
                                            <h4 class="title">Dr. Emily Thompson</h4>
                                            <div class="designation">MD Cardiologist</div>
                                            <div class="doctor-degree">MBBS, MRCF (UK), FRCP, FACC</div>
                                            <div class="department-name-block">
                                                <div>(</div>
                                                <div>{{ $department->name }}</div>
                                                <div>)</div>
                                            </div>
                                        </div>
                                        <div class="hover-overlay doctor-overlay"
                                            style="display:none;-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0">
                                            <a class="book-appoinment-button w-button"
                                                data-w-id="65efd451-ae68-45d6-96ef-134cc4a64f8d" href="#">Book
                                                Appoinment</a><a class="book-appoinment-button hover-state w-button"
                                                href="/doctor/dr-emily-thompson">See Doctor Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
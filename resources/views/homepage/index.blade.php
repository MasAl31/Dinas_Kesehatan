@include('homepage.layout.header')
<section id="hero" class="hero section light-background">

    <img src="{{ url('homepage') }}/img/hero-bg.jpg" alt="" data-aos="fade-in">

    <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
            <h2>DINAS KESEHATAN <br>KABUPATEN PURWAKARTA</h2>
            {{-- <p>We are team of talented designers making websites with Bootstrap</p> --}}
        </div><!-- End Welcome -->

        <div class="content row gy-4">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                    <h3>Kenapa harus di Dinas Kesehatan?</h3>
                    <p>
                        Menyajikan Informasi terkait dinas kesehatan dan topik kesehatan di Kabupaten Purwakarta
                    </p>
                    <div class="text-center">
                        <a href="#about" class="more-btn"><span>Baca lebih lanjut</span> <i
                                class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div><!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="d-flex flex-column justify-content-center">
                    <div class="row gy-4">

                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                <i class="bi bi-clipboard-data"></i>
                                <h4> Rumah Sakit</h4>
                                {{-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                    aliquip</p> --}}
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                <i class="bi bi-gem"></i>
                                <h4>Puskesmas</h4>
                                {{-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt</p> --}}
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                <i class="bi bi-inboxes"></i>
                                <h4>Dokter</h4>
                                {{-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis
                                    facere</p> --}}
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>
            </div>
        </div><!-- End  Content-->

    </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

    <div class="container">

        <div class="row gy-4 gx-5">

            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ url('homepage') }}/img/about.jpg" class="img-fluid" alt="">
                {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox pulsating-play-btn"></a> --}}
            </div>

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <h3>Tentang Kami</h3>
                <p>
                    Pemerintah yang bertanggung jawab dalam mengatur dan menyelenggarakan 
                    berbagai kegiatan untuk meningkatkan kesehatan masyarakat. 
                    Tugas kami meliputi penyuluhan kesehatan, pengawasan terhadap penyakit menular, 
                    pencegahan penyakit, pengelolaan fasilitas kesehatan, serta penyediaan layanan kesehatan dasar. 
                    Dinas Kesehatan juga berperan dalam mengatur kebijakan, standar, dan regulasi terkait dengan kesehatan masyarakat, 
                    serta bekerja sama dengan berbagai pihak untuk mencapai tujuan kesehatan nasional.
                </p>
                <ul>
                    <li>
                        <i class="fa-solid fa-heart-circle-xmark"></i>
                        <div>
                            <h5>Rumah Sakit</h5>
                            <p>Fasilitas kesehatan yang sangat penting bagi kesehatan manusia dan menyediakan layanan medis 
                                dan perawatan yang lebih kompleks dibandingkan dengan pusat kesehatan primer. 
                                Rumah sakit sangat penting untuk menyediakan diagnosis, pengobatan, rehabilitasi, dan 
                                perawatan jangka panjang bagi pasien yang membutuhkan perawatan intensif.
                            </p>
                        </div>
                    </li>
                    <li>
                        <i class="fa-solid fa-pump-medical"></i>
                        <div>
                            <h5>Klinik</h5>
                            <p>Fasilitas kesehatan yang menawarkan layanan medis dasar, pemeriksaan, diagnosis, pengobatan, 
                                dan perawatan kepada pasien dengan kondisi medis yang lebih ringan atau tidak darurat. 
                                Klinik biasanya berfokus pada layanan medis primer dan pencegahan, seperti pemeriksaan kesehatan rutin, 
                                pengobatan penyakit umum, konsultasi medis, dan tindakan medis sederhana. Klinik juga dapat memiliki 
                                fasilitas dasar seperti ruang pemeriksaan, ruang tunggu, dan ruang perawatan. Mereka juga dapat memiliki fasilitas 
                                diagnostik dasar seperti laboratorium darah, ruang rontgen, atau ruang USG</p>
                        </div>
                    </li>
                    <li>
                        <i class="fa-solid fa-vial-circle-check"></i>
                        <div>
                            <h5>Lab Kesehatan</h5>
                            <p>fasilitas medis dimana tes laboratorium dilakukan untuk mendiagnosis, memantau, atau 
                                menilai kondisi kesehatan seseorang. Tes yang umum dilakukan di lab kesehatan meliputi pemeriksaan darah, urine, 
                                dan berbagai tes lainnya untuk mendeteksi penyakit atau mengevaluasi fungsi organ tubuh.</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </div>

</section><!-- /About Section -->

<!-- Stats Section -->
<section id="stats" class="stats section light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="fa-solid fa-user-doctor"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Dokter</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="fa-regular fa-hospital"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Departments</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="fas fa-flask"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Laboratorium Penelitian</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="fas fa-award"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Penghargaan</p>
                </div>
            </div><!-- End Stats Item -->

        </div>

    </div>

</section><!-- /Stats Section -->

<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Layanan</h2>
        <p>Kami siap melayani Anda kapan saja dengan tim medis yang terlatih dan fasilitas lengkap untuk menangani berbagai kondisi darurat</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                    <div class="icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Layanan Darurat 24 Jam</h3>
                    </a>
                    <p>Untuk kenyamanan Anda, Kami menyelenggarakan pelayanan penyaringan untuk kasus-kasus yang membutuhkan penanganan lanjutan seperti ICU, ICCU, maupun rawat inap.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Farmasi</h3>
                    </a>
                    <p>Farmasi kami menyediakan berbagai obat atas resep dokter, Pelayanan Informasi Obat (PIO) dan Pelayanan Informasi Obat (PIO).</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Konsultasi</h3>
                    </a>
                    <p>Untuk kenyamanan Anda, kami menyediakan layanan konsultasi langsung dengan dokter spesialis.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fas fa-dna"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Radiologi dan Diagnostik</h3>
                    </a>
                    <p>Kami memiliki fasilitas radiologi dan diagnostik canggih seperti MRI, CT scan, dan X-ray untuk membantu dokter mendiagnosis kondisi Anda dengan tepat.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fas fa-wheelchair"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Rehabilitas dan Fisioterapi</h3>
                    </a>
                    <p>Kami menyediakan layanan rehabilitasi untuk membantu pasien pulih dari cedera atau operasi. Tim fisioterapis kami akan merancang program pemulihan yang sesuai dengan kebutuhan Anda.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fas fa-notes-medical"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Kesehatan Mental</h3>
                    </a>
                    <p>Layanan kesehatan mental kami mencakup konseling, terapi psikologis, dan perawatan psikiatris. Tim profesional kami siap membantu Anda mengatasi berbagai masalah kesehatan mental, seperti depresi, kecemasan, dan gangguan stres.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>

</section><!-- /Services Section -->

<!-- Appointment Section -->
<section id="appointment" class="appointment section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Konsultasi</h2>
        <p></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="Nama" required="">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email"
                        placeholder="Email" required="">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="phone" id="phone"
                        placeholder="No. Telepon" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="datetime-local" name="date" class="form-control datepicker" id="date"
                        placeholder="Appointment Date" required="">
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="department" id="department" class="form-select" required="">
                        <option value="">Pilih Rumah Sakit</option>
                        <option value="Department 1">RS. Siloam </option>
                        <option value="Department 2">RSIA. Asri </option>
                        <option value="Department 3">RSUD. Bayu Asih </option>
                    </select>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="doctor" id="doctor" class="form-select" required="">
                        <option value="">Pilih Dokter</option>
                        <option value="Doctor 1">Dokter 1</option>
                        <option value="Doctor 2">Dokter 2</option>
                        <option value="Doctor 3">Dokter 3</option>
                    </select>
                </div>
            </div>

            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan (Optional)"></textarea>
            </div>
            <div class="mt-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                <div class="text-center"><button type="submit">Konsultasi sekarang</button></div>
            </div>
        </form>

    </div>

</section><!-- /Appointment Section -->

<!-- Departments Section -->
<section id="departments" class="departments section">

    <!-- Section Title -->
    {{-- <div class="container section-title" data-aos="fade-up">
        <h2>Departments</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title --> --}}

    {{-- <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Cardiology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Neurology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Hepatology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Pediatrics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Eye Care</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    <div class="tab-pane active show" id="departments-tab-1">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Cardiology</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente
                                    dila parde sonata raqer a videna mareta paulona marka</p>
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint.
                                    Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est
                                    repellat minima eveniet eius et quis magni nihil. Consequatur dolorem
                                    quaerat quos qui similique accusamus nostrum rem vero</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ url('homepage') }}/img/departments-1.jpg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="departments-tab-2">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Et blanditiis nemo veritatis excepturi</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente
                                    dila parde sonata raqer a videna mareta paulona marka</p>
                                <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et
                                    reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et
                                    velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto
                                    madirna desera vafle de nideran pal</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ url('homepage') }}/img/departments-2.jpg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="departments-tab-3">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non
                                    enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat
                                    perferendis aut</p>
                                <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis
                                    quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima
                                    molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam.
                                    Soluta et harum voluptatem optio quae</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ url('homepage') }}/img/departments-3.jpg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="departments-tab-4">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure
                                    voluptas iure porro quis delectus</p>
                                <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam
                                    necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in
                                    consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam
                                    quia a laborum inventore</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ url('homepage') }}/img/departments-4.jpg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="departments-tab-5">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro
                                    quia.</p>
                                <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis
                                    recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui
                                    quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ url('homepage') }}/img/departments-5.jpg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}

</section><!-- /Departments Section -->

<!-- Doctors Section -->
<section id="doctors" class="doctors section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Dokter</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"><img src="{{ url('homepage') }}/img/doctors/agri.jpeg" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Dokter Umum</span>
                        <p><!--Explicabo voluptatem mollitia et repellat qui dolorum quasi --></p>
                        {{-- <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"><img src="{{ url('homepage') }}/img/doctors/as'ad.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h4>William Jhonson</h4>
                        <span>Dokter Spesialis Kelamin</span>
                        <p><!-- Aut maiores voluptates amet et quis praesentium qui senda para --></p>
                        {{-- <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"><img src="{{ url('homepage') }}/img/doctors/anggri.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h4>AngTzy Anderson</h4>
                        <span>Dokter Gigi</span>
                        <p><!-- Quisquam facilis cum velit laborum corrupti fuga rerum quia --></p>
                        {{-- <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"><img src="{{ url('homepage') }}/img/doctors/cewe2.jpeg" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>Dokter Kandungan</span>
                        <p><!--Dolorum tempora officiis odit laborum officiis et et accusamus--></p>
                        {{-- <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->

        </div>

    </div>

</section><!-- /Doctors Section -->

<!-- Faq Section -->
<section id="faq" class="faq section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Pertanyaan yang sering di ajukan</h2>
        <p>Berikut adalah pertanyaan yang sering di ajukan masyarakat</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                <div class="faq-container">

                    <div class="faq-item faq-active">
                        <h3>Apa saja fasilitas yang ada di Rumah sakit Purwakarta?</h3>
                        <div class="faq-content">
                            <p>Ruang Pendaftaran dan Administrasi, Ruang Pemeriksaan Umum, Unit Gawat Darurat (UGD), Ruang Radiologi, 
                                Ruang Operasi, Ruang Rawat Inap, Unit Perawatan Intensif (ICU), Ruang Bersalin</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Berapa biaya konsultasi dengan dokter?</h3>
                        <div class="faq-content">
                            <p> Biaya konsultasi dokter dapat bervariasi tergantung pada spesialisasi dan lokasi rumah sakit.
                                 Pastikan untuk bertanya langsung ke petugas administrasi.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Bagaimana cara mengatur janji temu dengan dokter?</h3>
                        <div class="faq-content">
                            <p>Anda dapat menghubungi rumah sakit melalui telepon atau datang langsung ke ruang pendaftaran untuk membuat janji temu
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Bagaimana cara meminta surat rujukan BPJS?</h3>
                        <div class="faq-content">
                            <p>#Pasien tidak bisa meminta surat rujukan secara langsung. Dokter yang menentukan apakah pasien harus dirujuk ke rumah sakit atau tidak.<br>
                                #Jika kondisi pasien bisa ditangani, rawat jalan di FKTP dilakukan hingga pasien sembuh.<br>
                                #Jika penyakit kambuh, jangan langsung datang ke rumah sakit dengan membawa surat rujukan sebelumnya, Karena kemungkinan besar akan ditolak.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Apakah tidak apa-apa bila merasa kram atau ada bercak darah?</h3>
                        <div class="faq-content">
                            <p>Kram atau bercak darah pada trimester pertama bisa normal karena proses implan telur yang dibuahi. Namun, jika terjadi terus-menerus, segera hubungi dokter kandungan untuk evaluasi lebih lanjut
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Apa yang harus dilakukan jika gigi terasa ngilu?</h3>
                        <div class="faq-content">
                            <p>Gigi yang terasa ngilu adalah tanda bahwa ada masalah di sepanjang saluran akar gigi atau lapisan email (enamel) yang terkikis. Pertama-tama, mengonsumsi makanan atau minuman yang terlalu panas atau terlalu dingin bisa mengakibatkan ketidaknyamanan pada gigi yang sensitif. Jika kamu mengalami hal ini, cobalah gunakanlah pasta gigi yang dirancang khusus untuk gigi sensitif. Jika rasa ngilu masih berlanjut atau terdapat luka pada gigi, segeralah berkonsultasi dengan dokter gigi untuk mendapatkan perawatan yang tepat.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>

            </div><!-- End Faq Column-->

        </div>

    </div>

</section><!-- /Faq Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                <h3>Testimoni</h3>
                <p>
                </p>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="{{ url('homepage') }}/img/testimonials/testimonials-1.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Saul Goodman</h3>
                                        <h4>Pegawai Swasta</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Saya kagum dengan tempatnya yang modern, nyaman, pelayanan yang cepat dan terintegrasi dengan sangat baik.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="{{ url('homepage') }}/img/testimonials/testimonials-2.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Siska Rostika</h3>
                                        <h4> Ibu Rumah Tangga</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Rumah sakitnya bagus dengan fasilitas yang memadai serta penanganan
                                        dokter yang sangat baik dan ramah.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="{{ url('homepage') }}/img/testimonials/testimonials-3.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Agnes Kusmana</h3>
                                        <h4>Mahasiswi</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Pelayanan yang saya rasakan sangat baik, staf dan dokter ramah serta memberikan informasi yang sangat jelas.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="{{ url('homepage') }}/img/testimonials/testimonials-4.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3> Erik H.H Van Putten </h3>
                                        <h4>Wiraswasta</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Pelayanannya responsif dan sangat profesional. Suasana yang sangat
                                        kondusif sehingga merasa aman dan nyaman.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="{{ url('homepage') }}/img/testimonials/testimonials-5.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Rinus Mesakh</h3>
                                        <h4>Wirausaha</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Pelayanannya responsif dan sangat profesional. Suasana yang sangat kondusif sehingga merasa aman dan nyaman.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </div>

    </div>

</section><!-- /Testimonials Section -->

<!-- Gallery Section -->
<section id="gallery" class="gallery section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p></p>
    </div><!-- End Section Title -->

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ url('homepage') }}/img/gallery/gallery-1.jpg" class="glightbox"
                        data-gallery="images-gallery">
                        <img src="{{ url('homepage') }}/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ url('homepage') }}/img/gallery/gallery-2.jpg" class="glightbox"
                        data-gallery="images-gallery">
                        <img src="{{ url('homepage') }}/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ url('homepage') }}/img/gallery/gallery-3.jpg" class="glightbox"
                        data-gallery="images-gallery">
                        <img src="{{ url('homepage') }}/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ url('homepage') }}/img/gallery/gallery-4.jpg" class="glightbox"
                        data-gallery="images-gallery">
                        <img src="{{ url('homepage') }}/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ url('homepage') }}/img/gallery/gallery-5.jpg" class="glightbox"
                        data-gallery="images-gallery">
                        <img src="{{ url('homepage') }}/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ url('homepage') }}/img/gallery/gallery-6.jpg" class="glightbox"
                        data-gallery="images-gallery">
                        <img src="{{ url('homepage') }}/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ url('homepage') }}/img/gallery/gallery-7.jpg" class="glightbox"
                        data-gallery="images-gallery">
                        <img src="{{ url('homepage') }}/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ url('homepage') }}/img/gallery/gallery-8.jpg" class="glightbox"
                        data-gallery="images-gallery">
                        <img src="{{ url('homepage') }}/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

        </div>

    </div>

</section><!-- /Gallery Section -->

<section id="gallery" class="gallery section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Berita</h2>
        <p>Berita Rumah Sakit Terkini dan Terbaru Hari ini</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

            @foreach ($berita as $item)
            <div class="col-md-4 mx-2">
                <div class="card w-100">
                    <img src="{{ url('storage/'.$item->foto) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">{{ $item->isi }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

</section><!-- /Gallery Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Jika Anda Mempunyai Pertanyaan Cepat Silakan Hubungi Kami.</p>
    </div><!-- End Section Title -->

    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.900277281723!2d107.44287497366712!3d-6.534277193458452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e70243881db%3A0x8c47b40728701a25!2sDinas%20Kesehatan%20Kabupaten%20Purwakarta!5e0!3m2!1sid!2sid!4v1721225829736!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Lokasi</h3>
                        <p>Jl. Veteran No.60, Nagri Kaler, Kec. Purwakarta<br>Kab.Purwakarta, Jawa Barat 41115 <br> Indonesia</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Hubungi Kami</h3>
                        <p>085280613035</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Kami</h3>
                        <p>deniaprianto42@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nama"
                                required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subjek" placeholder="Subjek"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="pesan" rows="6" placeholder="Pesan" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Pesan mu telah terkirim. Terima kasih!</div>

                            <button type="submit">Kirim Pesan</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section>

@include('homepage.layout.footer')

@extends('layouts.front')

@section('content')
<section class="home" id="home">
        <div class="home-container container grid">
          <div class="home-img-bg">
            <!-- <img src="assets/images/bg-hero.jpg" alt="" class="home-img" /> -->
          </div>

          <div class="home-data">
            <h1 class="home-title">
              We Teach You <br />
              Everything You Need To Know
            </h1>
            <p class="home-description">
              Discover the way you learn & take control of your life and make
              something useful for others.
            </p>
            <div class="home-btns">
              <a href="{{ route('courses.index') }}" class="button btn-gray btn-small"> My Course </a>
              <a href="#course" class="button button-home">Discover Course</a>
            </div>
          </div>
        </div>
      </section>

      <section class="story section container">
        <div class="story-container grid">
          <div class="story-data">
            <h2 class="section-title story-section-title">Our Goals</h2>
            <h1 class="story-title">
              Enjoy learning without any pressure
            </h1>

            <p class="story-description">
              Learn make something with real world project that help you increase creativity
            </p>
            <a href="#course" class="button btn-small">Discover</a>
          </div>
          <div class="story-images">
            <img src="{{ asset('frontend/assets/images/goals.jpg') }}" alt="" class="story-img" />
            <div class="story-square"></div>
          </div>
        </div>
      </section>

      <section class="products section container" id="course">
        <h2 class="section-title">All Course</h2>

        <div class="new-container">
          <div class="swiper new-swipper">
            <div class="swiper-wrapper">
            @foreach($courses as $course)
              <article class="products-card swiper-slide">
              <a style="color: inherit;" href="{{ route('courses.show', [$course->slug]) }}" class="products-link">
                <img
                  src="{{ Storage::url($course->course_image) }}"
                  class="products-img"
                  alt=""
                />
                <h3 class="products-title">{{ $course->title }}</h3>
                <div class="products-star">
                @for ($star = 1; $star <= 5; $star++)
                    @if ($course->rating >= $star)
                    <i class="bx bxs-star"></i>
                    @else
                    <i class='bx bx-star'></i>
                    @endif
                @endfor
                </div>
                <span class="products-price">${{ $course->price }}</span>
                @if($course->students()->count() > 5)
                  <button class="products-button">
                    Popular
                  </button>
                @endif
                <span class="products-student">
                {{ $course->students()->count() }} students
                </span>
              </a>
              </article>
            @endforeach
    
            </div>
            <div
              class="swiper-button-next"
              style="
                bottom: initial;
                top: 50%;
                right: 0;
                left: initial;
                border-radius: 50%;
              "
            >
              <i class="bx bx-right-arrow-alt"></i>
            </div>
            <div
              class="swiper-button-prev"
              style="bottom: initial; top: 50%; border-radius: 50%"
            >
              <i class="bx bx-left-arrow-alt"></i>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonial section container">
        <div class="testimonial grid">
          <div class="swiper testimonial-swipper">
            <div class="swiper-wrapper">
              <div class="testimonial-card swiper-slide" style="text-align: center;">
                <div class="testimonial-quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>
                <p class="testimonial-description">
                Sangat mengesankan! Aplikasi ini dilengkapi dengan fitur-fitur canggih yang mendukung pembelajaran online. 
                Saya suka banyaknya opsi yang tersedia.
                </p>
                <h3 class="testimonial-date"> 4 April 2022</h3>

                <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                  <img
                    src="{{ asset('frontend/assets/images/testimonial1.jpg') }}"
                    alt=""
                    class="testimonial-profile-img"
                  />

                  <div class="testimonial-profile-data">
                    <span class="testimonial-profile-name">Bagas Setiawan</span>
                    <span class="testimonial-profile-detail"
                      >Director of a Company</span
                    >
                  </div>
                </div>
              </div>
              <div class="testimonial-card swiper-slide" style="text-align: center;">
                <div class="testimonial-quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>
                <p class="testimonial-description">
                Pengembang secara konsisten memberikan pembaruan,
                 tetapi beberapa perbaikan kecil masih diperlukan untuk meningkatkan stabilitas aplikasi.
                </p>
                <h3 class="testimonial-date"> 8 Juli 2023</h3>

                <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                  <img
                    src="{{ asset('frontend/assets/images/testimonial2.jpg') }}"
                    alt=""
                    class="testimonial-profile-img"
                  />

                  <div class="testimonial-profile-data">
                    <span class="testimonial-profile-name">Sintya Amara</span>
                    <span class="testimonial-profile-detail"
                      >Director of a Company</span
                    >
                  </div>
                </div>
              </div>
              <div class="testimonial-card swiper-slide" style="text-align: center;">
                <div class="testimonial-quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>
                <p class="testimonial-description">
                Meskipun tingkat keamanan cukup tinggi, 
                beberapa tambahan lapisan keamanan akan membuat saya lebih percaya diri dalam berbagi informasi pribadi.
                </p>
                <h3 class="testimonial-date">10 Agustus 2023</h3>

                <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                  <img
                    src="{{ asset('frontend/assets/images/testimonial3.jpeg') }}"
                    alt=""
                    class="testimonial-profile-img"
                  />

                  <div class="testimonial-profile-data">
                    <span class="testimonial-profile-name">Dafit Maulana</span>
                    <span class="testimonial-profile-detail"
                      >Director of a Company</span
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-button-next" style="right: 30%;left: initial;top:initial;bottom: 3rem;">
              <i class="bx bx-right-arrow-alt"></i>
            </div>
            <div class="swiper-button-prev" style="right: initial;left: 30%;top:initial;bottom: 3rem;">
              <i class="bx bx-left-arrow-alt"></i>
            </div>
          </div>
      </section>

      <section class="newsletter section container">
        <div class="newsletter-bg grid">
          <div>
            <h2 class="newsletter-title">
              Subscribe Our <br />
              Newsletter
            </h2>
            <p class="newsletter-description">
              Be the first to know the new course and discount.
            </p>
          </div>

          <!-- Modifikasi formulir dengan menambahkan event listener -->
          <form action="" class="newsletter-subscribe" id="newsletterForm" onsubmit="handleFormSubmission(event)">
              <input
                  type="email"
                  placeholder="Enter your email"
                  class="newsletter-input"
              />
              <button type="submit" class="button">SEND</button>
          </form>
        </div>
      </section>

      <script>
    function showSweetAlert() {
        Swal.fire({
            title: 'Thank You!',
            text: 'You have subscribed to our newsletter.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed || result.isDismissed) {
                Swal.close();
            }
        });
    }

    function handleFormSubmission(event) {
        event.preventDefault();

        showSweetAlert();
    }
</script>

@endsection
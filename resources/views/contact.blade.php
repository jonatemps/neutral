@extends('master')

@section('title')
P2G Partners | Contact
@endsection


@section('content')


    <!-- ====== Page Title Section Start -->
    <section class="ad a1H a1I[150px] a2p">
        <div class="aa">
          <div class="a8 a1K a9 ab[-16px]">
            <div class="a7 md:a2q/12 lg:a2r/12 ae">
              <div class="aB[570px] a2s md:a2t">
                <h1
                  class="
                    a1g a1A
                    dark:aI
                    a2u
                    sm:a1O
                    a2v
                  "
                >
                  Nous contacter
                </h1>
                <p
                  class="
                    a1R
                    aH
                    a1S
                    a1U
                  "
                >
                Notre équipe d’assistance reste disposer à vous fournir les meilleures orientations.
                </p>
              </div>
            </div>
            <div class="a7 md:a20/12 lg:a1D/12 ae">
              <div class="a2w">
                <ul class="a8 a9 md:a1d">
                  <li class="a8 a9">
                    <a
                      href="{{route('home')}}"
                      class="
                        a1R aH a1S a2x
                        hover:a1W
                      "
                    >
                      Acceuil
                    </a>
                    <span
                      class="
                        ah
                        aU
                        aV
                        a2y
                        aX
                        a2z
                        aZ
                        a2A
                      "
                    ></span>
                  </li>
                  <li class="a1R aH a1W">
                    Contact
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div>
          <span class="a3 a4 a5 a1Y[-1]">
            <svg
              width="287"
              height="254"
              viewBox="0 0 287 254"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.1"
                d="M286.5 0.5L-14.5 254.5V69.5L286.5 0.5Z"
                fill="url(#paint0_linear_111:578)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_111:578"
                  x1="-40.5"
                  y1="117"
                  x2="301.926"
                  y2="-97.1485"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#4A6CF7" />
                  <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </span>
          <span class="a3 a_ a4 a1Y[-1]">
            <svg
              width="628"
              height="258"
              viewBox="0 0 628 258"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.1"
                d="M669.125 257.002L345.875 31.9983L524.571 -15.8832L669.125 257.002Z"
                fill="url(#paint0_linear_0:1)"
              />
              <path
                opacity="0.1"
                d="M0.0716344 182.78L101.988 -15.0769L142.154 81.4093L0.0716344 182.78Z"
                fill="url(#paint1_linear_0:1)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_0:1"
                  x1="644"
                  y1="221"
                  x2="429.946"
                  y2="37.0429"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#4A6CF7" />
                  <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                </linearGradient>
                <linearGradient
                  id="paint1_linear_0:1"
                  x1="18.3648"
                  y1="166.016"
                  x2="105.377"
                  y2="32.3398"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#4A6CF7" />
                  <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </span>
        </div>
      </section>
      <!-- ====== Page Title Section End -->

    <!-- ====== Coordinate Section Start -->
        @include('partials.coordinate')
    <!-- ====== Coordinate Section End -->


      <!-- ====== Contact Section Start -->
      @include('partials.contactForm')
      <!-- ====== Contact Section End -->


@endsection

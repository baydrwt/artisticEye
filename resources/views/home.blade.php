@extends('layouts.main')

@section('content')

    {{-- Section 1 --}}
    <section class="hero-section">
        <div class="socmed-sidebar d-flex flex-column justify-content-between align-items-center" style="height: 370px">
            <svg width="10" height="228" viewBox="0 0 10 228" fill="none">
                <g filter="url(#filter0_d_28_16)">
                <line x1="5" x2="5" y2="220" stroke="#F0F0F0"/>
                </g>
                <defs>
                <filter id="filter0_d_28_16" x="0.5" y="0" width="9" height="228" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_28_16"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_28_16" result="shape"/>
                </filter>
                </defs>
            </svg>
            <a href="https://www.instagram.com/baydrwt/" target="blank_">
                <svg width="28" height="28" fill="#F8F8F891" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
            </a>
            <a href="https://twitter.com/eegoism" target="blank_">
                <svg width="30px" height="30px" viewBox="0 0 24 24">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                    <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7828 3.91825C20.1313 3.83565 20.3743 3.75444 20.5734 3.66915C20.8524 3.54961 21.0837 3.40641 21.4492 3.16524C21.7563 2.96255 22.1499 2.9449 22.4739 3.11928C22.7979 3.29366 23 3.6319 23 3.99986C23 5.08079 22.8653 5.96673 22.5535 6.7464C22.2911 7.40221 21.9225 7.93487 21.4816 8.41968C21.2954 11.7828 20.3219 14.4239 18.8336 16.4248C17.291 18.4987 15.2386 19.8268 13.0751 20.5706C10.9179 21.3121 8.63863 21.4778 6.5967 21.2267C4.56816 20.9773 2.69304 20.3057 1.38605 19.2892C1.02813 19.0108 0.902313 18.5264 1.07951 18.109C1.25671 17.6916 1.69256 17.4457 2.14144 17.5099C3.42741 17.6936 4.6653 17.4012 5.6832 16.9832C5.48282 16.8742 5.29389 16.7562 5.11828 16.6346C4.19075 15.9925 3.4424 15.1208 3.10557 14.4471C2.96618 14.1684 2.96474 13.8405 3.10168 13.5606C3.17232 13.4161 3.27562 13.293 3.40104 13.1991C2.04677 12.0814 1.49999 10.5355 1.49999 9.49986C1.49999 9.19192 1.64187 8.90115 1.88459 8.71165C1.98665 8.63197 2.10175 8.57392 2.22308 8.53896C2.12174 8.24222 2.0431 7.94241 1.98316 7.65216C1.71739 6.3653 1.74098 4.91284 2.02985 3.75733C2.1287 3.36191 2.45764 3.06606 2.86129 3.00952C3.26493 2.95299 3.6625 3.14709 3.86618 3.50014C4.94369 5.36782 6.93116 6.50943 8.78086 7.18568C9.6505 7.50362 10.4559 7.70622 11.0596 7.83078C11.1899 6.61019 11.5307 5.6036 12.0538 4.80411C12.7439 3.74932 13.7064 3.12525 14.74 2.84698C16.5227 2.36708 18.5008 2.91382 19.7828 3.91825ZM10.7484 9.80845C10.0633 9.67087 9.12171 9.43976 8.09412 9.06408C6.7369 8.56789 5.16088 7.79418 3.84072 6.59571C3.86435 6.81625 3.89789 7.03492 3.94183 7.24766C4.16308 8.31899 4.5742 8.91899 4.94721 9.10549C5.40342 9.3336 5.61484 9.8685 5.43787 10.3469C5.19827 10.9946 4.56809 11.0477 3.99551 10.9046C4.45603 11.595 5.28377 12.2834 6.66439 12.5135C7.14057 12.5929 7.49208 13.0011 7.49986 13.4838C7.50765 13.9665 7.16949 14.3858 6.69611 14.4805L5.82565 14.6546C5.95881 14.7703 6.103 14.8838 6.2567 14.9902C6.95362 15.4727 7.65336 15.6808 8.25746 15.5298C8.70991 15.4167 9.18047 15.6313 9.39163 16.0472C9.60278 16.463 9.49846 16.9696 9.14018 17.2681C8.49626 17.8041 7.74425 18.2342 6.99057 18.5911C6.63675 18.7587 6.24134 18.9241 5.8119 19.0697C6.14218 19.1402 6.48586 19.198 6.84078 19.2417C8.61136 19.4594 10.5821 19.3126 12.4249 18.6792C14.2614 18.0479 15.9589 16.9385 17.2289 15.2312C18.497 13.5262 19.382 11.1667 19.5007 7.96291C19.51 7.71067 19.6144 7.47129 19.7929 7.29281C20.2425 6.84316 20.6141 6.32777 20.7969 5.7143C20.477 5.81403 20.1168 5.90035 19.6878 5.98237C19.3623 6.04459 19.0272 5.94156 18.7929 5.70727C18.0284 4.94274 16.5164 4.43998 15.2599 4.77822C14.6686 4.93741 14.1311 5.28203 13.7274 5.89906C13.3153 6.52904 13 7.51045 13 8.9999C13 9.28288 12.8801 9.5526 12.6701 9.74221C12.1721 10.1917 11.334 9.92603 10.7484 9.80845Z" fill="#F8F8F891"/> </g>
                </svg>
            </a>
            <a href="https://web.facebook.com/bayu.darwanto/" target="blank_">
                <svg width="33px" height="33px" viewBox="0 0 192 192">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"/> 
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/> 
                    <g id="SVGRepo_iconCarrier">
                    <path stroke="#f8f8f891" stroke-linecap="round" stroke-width="12" d="M96 170c40.869 0 74-33.131 74-74 0-40.87-33.131-74-74-74-40.87 0-74 33.13-74 74 0 40.869 33.13 74 74 74Zm0 0v-62m30-48h-10c-11.046 0-20 8.954-20 20v28m0 0H74m22 0h22"/>  
                    </g> 
                </svg>
            </a>
        </div>
        <div class="title-description">
            <h1 class="title text-center">BEAUTIFUL MOMENT <span class="d-block" style="margin-top:-25px">IS EVERYTHING</span> </h1>
            <h2 class="description text-center">Capture all beautiful and <span class="d-block">memorable moment with us</span></h2>
        </div>
        <div class="scrolldown-sidebar d-flex flex-column justify-content-between align-items-center" style="height: 320px">
            <p>scroll down</p>
            <svg width="8" height="221" viewBox="0 0 8 221" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.64645 220.354C3.84171 220.549 4.15829 220.549 4.35355 220.354L7.53553 217.172C7.7308 216.976 7.7308 216.66 7.53553 216.464C7.34027 216.269 7.02369 216.269 6.82843 216.464L4 219.293L1.17157 216.464C0.976311 216.269 0.659728 216.269 0.464466 216.464C0.269204 216.66 0.269204 216.976 0.464466 217.172L3.64645 220.354ZM3.5 0L3.5 220H4.5L4.5 0L3.5 0Z" fill="#F0F0F0"/>
            </svg>                
        </div>
        <div class="background-image">
            <div class="col-md-6">
                <img class="img-section-1a" src="../asset/section1/section 1.webp" alt="">
            </div>
            <div class="col-md-6">
                <img src="../asset/section1/Frame 5.png" alt="">
            </div>
        </div>
    </section> 

    {{-- Section 2 --}}
    <section class="benefits-section ">
        <h2>Advantages of Our Services</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-benefits">
                            <p>01</p>
                            <h3>High Quality Photos</h3>
                        </div>
                        <div class="card-benefits">
                            <p>03</p>
                            <h3>Latest Equipment</h3>
                        </div>
                        <div class="card-benefits">
                            <p>05</p>
                            <h3>Expert Editing</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-benefits">
                            <p>02</p>
                            <h3>Creativity & Unique Style</h3>
                        </div>
                        <div class="card-benefits">
                            <p>04</p>
                            <h3>Memorable Experience</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <img class="img-section-2"  src="../asset/section1/section 2.webp" height="550" width="380" alt="">
            </div>
        </div>
    </section>

    {{-- Section 3 --}}
    <section class="recent-works-section">
        <h2 class="text-end">Some of Our <span class="d-block">Recent Work</span></h2>
        <div class="row">
            <div class="col-md-6 p-0">
                <div class="row d-flex align-items-center" >
                    <div class="col-md-6">
                        <img src="../asset/section1/Frame 26.png" alt="">
                    </div>
                    <div class="col-md-6 ps-0">
                        <img src="../asset/section1/section 4.webp" height="350" width="250" alt="" style="margin-bottom: 30px">
                        <img src="../asset/section1/Frame 24.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0" style="margin-top:-120px">
                <div class="row d-flex align-items-center" >
                    <div class="col-md-6 img-2">
                        <img src="../asset/section1/section 3 b.webp" style="margin-bottom: 30px" height="350" width="250" alt="">
                        <img src="../asset/section1/section 3.webp" height="350" width="250" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="../asset/section1/Frame 22.png" alt="" >
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 4 --}}
    <section class="products-section">
        <h2 class="text-center">Discover Our Featured Products</h2>
        <div class="splide caraousel-products">
            <div class="splide__track">
                <div class="splide__list ">
                    @foreach ($products as $product)
                    <div class="splide__slide product show-offcanvas-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-{{ $product->id }}" data-product-name="{{ $product->name }}">
                        <div class="img_box text-center">
                            <img src="{{ asset('storage/' . $product->image ) }}" alt="" width="310" height="400">
                            <div class="desc_box">
                                <h3 >{{ $product->name }}</h3>
                                <h4 >{{ number_format($product->price, 0, ',', '.') }} IDR</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach                          
                </div>
            </div>
        </div>
    </section>

    {{-- Section 5 --}}
    <section class="review-section">
        <h2>Our Review's By Our Client</h2>
        <div class="splide caraousel-review d-flex justify-content-center">
            <div class="splide__track">
                <div class="splide__list d-flex align-items-center">   
                    @foreach ($reviews as $review)
                    <div class="splide__slide container d-flex flex-column justify-content-evenly">
                        <div class="reviewer container">
                            <div class="profile-user">
                                <svg width="50" height="50" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                            </div>
                            <div class="profile-username">
                                <h5>{{ $review->user->name }}</h5>
                                <div class="stars mt-1">
                                    <input disabled type="radio" name="rate_{{ $review->id }}" id="star1_{{ $review->id }}" value="1" {{ ($review->rate) == '1' ? 'checked' : '' }}>
                                    <label for="star1_{{ $review->id }}"><i class="fa-solid fa-star mx-1"></i></label>
                                    
                                    <input disabled type="radio" name="rate_{{ $review->id }}" id="star2_{{ $review->id }}" value="2" {{ ($review->rate) == '2' ? 'checked' : '' }}>
                                    <label for="star2_{{ $review->id }}"><i class="fa-solid fa-star mx-1"></i></label>
                                    
                                    <input disabled type="radio" name="rate_{{ $review->id }}" id="star3_{{ $review->id }}" value="3" {{ ($review->rate) == '3' ? 'checked' : '' }}>
                                    <label for="star3_{{ $review->id }}"><i class="fa-solid fa-star mx-1"></i></label>
                                    
                                    <input disabled type="radio" name="rate_{{ $review->id }}" id="star4_{{ $review->id }}" value="4" {{ ($review->rate) == '4' ? 'checked' : '' }}>
                                    <label for="star4_{{ $review->id }}"><i class="fa-solid fa-star mx-1"></i></label>
                                    
                                    <input disabled type="radio" name="rate_{{ $review->id }}" id="star5_{{ $review->id }}" value="5" {{ ($review->rate) == '5' ? 'checked' : '' }}>
                                    <label for="star5_{{ $review->id }}"><i class="fa-solid fa-star mx-1"></i></label>
                                </div>
                            </div>
                            <div class="quotation-mark">
                                <svg fill="#848484" width="64px" height="64px" viewBox="0 0 349.078 349.078" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M198.779,322.441v-58.245c0-7.903,6.406-14.304,14.304-14.304c28.183,0,43.515-28.904,45.643-85.961h-45.643 c-7.897,0-14.304-6.41-14.304-14.304V26.64c0-7.9,6.406-14.301,14.304-14.301h121.69c7.896,0,14.305,6.408,14.305,14.301v122.988 c0,27.349-2.761,52.446-8.181,74.611c-5.568,22.722-14.115,42.587-25.398,59.049c-11.604,16.917-26.132,30.192-43.155,39.437 c-17.152,9.304-37.09,14.026-59.267,14.026C205.186,336.745,198.779,330.338,198.779,322.441z M14.301,249.887 C6.404,249.887,0,256.293,0,264.185v58.257c0,7.896,6.404,14.298,14.301,14.298c22.166,0,42.114-4.723,59.255-14.026 c17.032-9.244,31.558-22.508,43.161-39.437c11.29-16.462,19.836-36.328,25.404-59.061c5.423-22.165,8.178-47.263,8.178-74.6V26.628 c0-7.9-6.41-14.301-14.304-14.301H14.301C6.404,12.327,0,18.734,0,26.628v122.988c0,7.899,6.404,14.304,14.301,14.304h45.002 C57.201,220.982,42.09,249.887,14.301,249.887z"></path> </g> </g></svg>
                            </div>
                        </div>
                        <div class="box-review container d-flex justify-content-center ">
                            <p>{{ $review->review }}</p>
                        </div>
                    </div>      
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Section 6 --}}
    <section class="closing-section d-flex flex-column align-items-center">
        <h2 class="text-center">EXPERIENCE THE DIFFERENCE WITH OUR PRODUCT</h2>
        <div class="button-closing text-center d-flex align-items-center">
           <a href="/form-book">BOOK NOW</a>
        </div>
    </section>

    {{-- Modal About --}}
    <div class="modal fade" id="about" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                  <h5 class="modal-title text-center">About artisticEye</h5>
                  <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Welcome to Artistic Eye Photography, where every moment is a masterpiece. At Artistic Eye, we believe in the power of visual storytelling, and our passion is to capture the essence of life's most precious moments through the lens of our cameras.</p>
                    <p>Our team of talented photographers is dedicated to turning ordinary moments into extraordinary memories. With a keen eye for detail and a commitment to excellence, we specialize in a wide range of photography services, including weddings, portraits, events, and product photography.</p>
                    <p>Contact us today to schedule a session and let your journey with Artistic Eye Photography begin.</p>
                </div>
              </div>
          </div>
    </div>

    {{-- Modal Contact --}}
    <div class="modal fade" id="contact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark" style="border-radius: 20px!important">
                <div class="modal-header">
                  <h5 class="modal-title text-center">Contact artisticEye</h5>
                  <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Instagram : <a href="https://www.instagram.com/baydrwt/" target="blank_">@artisticEye</a></p>
                    <p>Twitter : <a href="https://twitter.com/eegoism" target="blank_">@artisticEye</a></p>
                    <p>Facebook : <a href="https://web.facebook.com/bayu.darwanto/" target="blank_">artisticEye</a></p>
                    <p>Whatsapp : <a href="https://wa.me/081908271385" target="blank_">+6281908271385</a></p>
                </div>
              </div>
          </div>
    </div>

    {{-- Product's Offcanvas --}}
    @foreach ($products as $product)
    <div class="offcanvas offcanvas-bottom container" data-offcanvas-name="{{ $product->name }}" tabindex="-1" id="offcanvas-{{ $product->id }}">
        <div class="offcanvas-header" style="border-bottom:1px solid rgba(0,0,0,0.5)">
            <h2 class="offcanvas-title text-dark" id="offcanvasBottomLabel" >{{ $product->name }}</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small d-flex flex-column justify-content-evenly">
            <h3 class="text-dark desc" style="text-align: justify">{{ $product->desc }}</h3>
            <h4 class="text-dark text-start benefits">Benefits : {{ $product->benefits }}</h4>
        </div>
    </div>
    @endforeach  
@endsection
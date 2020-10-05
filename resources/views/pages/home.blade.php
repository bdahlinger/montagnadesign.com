@extends('layouts.app')

@section('content')
<div class="home">

    <header class="">

        <nav>
            <a href="#Gallery" v-scroll-to="'#Gallery'">Gallery</a>
            <a href="#Contact" v-scroll-to="'#Contact'">Contact</a>
        </nav>

        <h1>

            <img src="{{Storage::url('montagna-logo.svg')}}" alt="Montagna Design" class="img-fluid">

        </h1>


    </header>


    <img src="{{Storage::url('header-01.jpg')}}" alt="Tent Interior" class="w-100 img-fluid">


    <div class="container">

        <div class="row">

            <div class="col-lg-10 offset-lg-1 py-5">

                <div class="">

                    <h2 class="mb-5">A Boutique Full-Service Interior Design Company</h2>


                    <p>
                        Montagna has provided interior design and smart-home technology for our high-end residential and hospitality clients for 15 years—in locations all over the United States. We specialize in a modern country-chic focus and in incorporating smart-home technology to create efficient and ecological structures in which our customers feel right at home.
                    </p>


                </div>


            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-8 offset-lg-2 pb-5">

                <h3 class="mb-5">Services Provided</h3>

                <ul>
                    <li>Residential design, including new builds and remodels</li>
                    <li>Model home design</li>
                    <li>Retail procurement</li>
                    <li>Smart home technology design</li>
                </ul>

            </div>

        </div>

    </div>

    <div id="Gallery">

        <div class="gallery" itemscope itemtype="http://schema.org/ImageGallery">

            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-01.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-01-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Tent</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>

            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-02.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-02-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Tent</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>


            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-03.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-03-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Tent</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>





            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-04.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-04-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Home</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>

            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-05.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-05-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Home</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>


            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-06.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-06-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Home</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>




            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-07.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-07-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Home</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>

            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-08.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-08-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Home</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>


            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-09.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-09-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Home</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>




            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-10.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-10-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Home</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>

            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-11.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-11-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Luxury Home</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>


            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-12.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-12-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Dining Pavilion</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>



            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-13.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-13-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Dining Pavilion</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>

            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-14.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-14-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Dining Pavilion</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>


            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-15.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-15-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Restaurant</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>


            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-16.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-16-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Restaurant</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>

            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-17.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-17-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Restaurant</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>


            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="{{Storage::url('gallery-18.jpg')}}" itemprop="contentUrl" data-size="1920x1080">
                    <img class="img-fluid" src="{{Storage::url('gallery-18-t.jpg')}}" itemprop="thumbnail" alt="Luxury Tent" />
                </a>
                <figcaption itemprop="caption description">Restaurant</figcaption>
                <font-awesome-icon :icon="['fal', 'search-plus']"  full-width></font-awesome-icon>
            </figure>

























        </div>

    </div>

    <footer>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 offset-lg-2 pt-5">

                    <div id="Contact">

                        <h3 class="mb-5">Contact Information</h3>

                        <address>
                            Montagna, LLC<br/>
                            6850 Paradise Rd<br/>
                            Las Vegas NV 89119<br/>
                            <a href="mailto:consult@montagnadesign.com">

                                <font-awesome-icon :icon="['fal', 'envelope']" fixed-width></font-awesome-icon>

                                consult@montagnadesign.com
                            </a>

                        </address>

                    </div>

                </div>

            </div>

            <div class="row mt-4">
                <div class="col text-center small">
                    &copy; <?php echo date("Y"); ?> MONTAGNA LLC, ALL RIGHTS RESERVED.
                </div>
            </div>

        </div>

    </footer>

</div>

@include('partials.photoswipe')

@endsection

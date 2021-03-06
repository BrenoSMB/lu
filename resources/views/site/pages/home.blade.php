@extends('site.master.app')

@section('master')

    @include('site.includes.header')

    <div class="sliderfull">
        <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
            <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-16" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="/images/slider/slider1.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-17" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="/images/slider/slider2.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    </li>
                    <li data-index="rs-18" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="/images/slider/slider3.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    </li>
                </ul>
                <div class="tp-static-layers"></div>
                <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
            </div>
        </div>
    </div>
    <section class="slider-titile">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 pull-right">
                    <div class="sliderarrow">
                        <a class="left rev-leftarrow">Left</a>
                        <a class="right rev-rightarrow">Right</a>
                    </div>
                    <div class="titile-bg">
                        <h1>The Kewl Salon</h1>
                    </div>
                    <div class="white-bg">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus.Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="salon" class="col-padtop wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-padright-none wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;"><img src="{{ action('CropImageController@crop', ['modelo.jpg', 587, 600]) }}" alt="Saloon"></div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-padleft-none wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"><img src="{{ action('CropImageController@crop', ['modelo.jpg', 587, 300]) }}" alt="Saloon"></div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-padleft-none wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;"><img src="{{ action('CropImageController@crop', ['modelo.jpg', 587, 300]) }}" alt="Saloon"></div>
            </div>
        </div>
    </section>
    <section id="ourteam" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h2>CONHEÇA NOSSOS ESTILISTAS ESPECIALISTAS</h2>
                    <div class="ourteamd">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus. Nullam non neque eros. Pellentesque nec vulputate eros.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="responsive">
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>
                            <div class="team">
                                <h3>Sara Anderson</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>
                            <div class="team">
                                <h3>Medona Johnson</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>

                            <div class="team">
                                <h3>Andria Joseph</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>
                            <div class="team">
                                <h3>Sara Anderson</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>
                            <div class="team">
                                <h3>Medona Johnson</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>

                            <div class="team">
                                <h3>Andria Joseph</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>
                            <div class="team">
                                <h3>Sara Anderson</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>
                            <div class="team">
                                <h3>Medona Johnson</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>

                            <div class="team">
                                <h3>Andria Joseph</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>
                            <div class="team">
                                <h3>Sara Anderson</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>
                            <div class="team">
                                <h3>Medona Johnson</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>
                        <div>
                            <div class="third-effect">
                                <img src="https://www.placehold.it/384x444" class="img-responsive" alt="Our Team">
                                <div class="mask">
                                    <a href="#">Facebook</a>
                                    <a href="#" class="twitter">Twitter</a>
                                </div>
                            </div>

                            <div class="team">
                                <h3>Andria Joseph</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section id="services" class="col-padtop">
        <div class="container">
            <div class="row marbottom">
                <div class="col-sm-12 col-md-7 col-lg-5 pull-right wow fadeInUp">
                    <h2>Our Services</h2>
                    <p class="pull-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus.</p>
                </div>
            </div>
            <div class="row marbottom wow fadeInUp">
                <div class="col-sm-12 col-md-7 col-lg-7 col-padright-none">
                    <div class="subtitle">
                        <h2 class="titile col-xs-offset-1 col-sm-offset-0 col-md-offset-1 ">CUTTING</h2>
                    </div>
                    <img src="https://www.placehold.it/684x394" class="img-responsive" alt="cutting">
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5 col-padleft-none">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>CUT</th>
                            <th>WOMENS</th>
                            <th>MENS</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Stylist</td>
                            <td>$80</td>
                            <td>$70</td>
                        </tr>
                        <tr>
                            <td>Senior Stylist</td>
                            <td>$90</td>
                            <td>$80</td>
                        </tr>
                        <tr>
                            <td>Master Stylist</td>
                            <td>$110</td>
                            <td>$100</td>
                        </tr>
                        <tr>
                            <td>Celebrity Stylist</td>
                            <td>$POA</td>
                            <td>$POA</td>
                        </tr>
                        <tr>
                            <td>Cut</td>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <td>Cut</td>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <td>Cut</td>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <td>Cut</td>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <td>Cut</td>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row marbottom wow fadeInUp">
                <div class="col-sm-12 col-md-7 col-lg-7 col-padleft-none displayhide">
                    <div class="subtitle">
                        <h2 class="titile col-xs-offset-2">COLOUR</h2>
                    </div>
                    <div class="subtitle">
                        <h2 class="color">COLOUR</h2>
                    </div>
                    <img src="https://www.placehold.it/684x394" class="img-responsive" alt="Colour"></div>
                <div class="col-sm-12 col-md-5 col-lg-5 col-padright-none">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>COLOUR</th>
                            <th>Jnr</th>
                            <th>Snr</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="bigw">Permanent, Demi Gloss</td>
                            <td class="smallw">from $70</td>
                            <td>from $80</td>
                        </tr>
                        <tr>
                            <td>Colour Correction</td>
                            <td>from $90</td>
                            <td>from $110</td>
                        </tr>
                        <tr>
                            <td>Fashion Foiling</td>
                            <td>from $75</td>
                            <td>from $85</td>
                        </tr>
                        <tr>
                            <td>Tint roots</td>
                            <td>$75</td>
                            <td>$85</td>
                        </tr>
                        <tr>
                            <td>Tint and foils</td>
                            <td>$110</td>
                            <td>$120</td>
                        </tr>
                        <tr>
                            <td>Half Head - Short</td>
                            <td>from $120</td>
                            <td>from $130</td>
                        </tr>
                        <tr>
                            <td>Half Head - Long</td>
                            <td>from $150</td>
                            <td>from $170</td>
                        </tr>
                        <tr>
                            <td>Full Head - Short</td>
                            <td>from $160</td>
                            <td>from $180</td>
                        </tr>
                        <tr>
                            <td>Full Head - Long</td>
                            <td>from $220</td>
                            <td>from $250</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7 col-padleft-none displayvisible">
                    <div class="subtitle">
                        <h2 class="titile col-xs-offset-2">COLOUR</h2>
                    </div>
                    <img src="https://www.placehold.it/684x394" class="img-responsive" alt="Colour"></div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-sm-12 col-md-7 col-lg-7 col-padright-none">
                    <div class="subtitle">
                        <h2 class="titile col-xs-offset-1">STYLE</h2>
                    </div>
                    <img src="https://www.placehold.it/684x394" class="img-responsive" alt="Style"></div>
                <div class="col-sm-12 col-md-5 col-lg-5 col-padleft-none">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>STYLE</th>
                            <th>PRICE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Blowdrying - Short</td>
                            <td>$60</td>
                        </tr>
                        <tr>
                            <td>Blowdrying - Medium</td>
                            <td>$70</td>
                        </tr>
                        <tr>
                            <td>Blowdrying - Long</td>
                            <td>$80</td>
                        </tr>
                        <tr>
                            <td>Formals</td>
                            <td>$130</td>
                        </tr>
                        <tr>
                            <td>Bride</td>
                            <td>$180</td>
                        </tr>
                        <tr>
                            <td>Style</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <td>Style</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <td>Style</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <td>Style</td>
                            <td>$</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    @include('site.components.appoinment')

    <section class="excellence wow fadeInUp">
        <div id="parallax-2" class="parallax fixed fixed-desktop">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-5 pull-right col-pad5 bg-white">
                        <h2>Expression of Excellence</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus. Nullam non neque eros. Pellentesque nec vulputate eros. Integer scelerisque lorem id massa accumsan, ut faucibus ante suscipit. Nunc tincidunt et ligula vitae pharetra.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                </div>
                <div class="col-lg-12 filter">
                    <ul>
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".Wcut">Cutting</a></li>
                        <li><a href="#" data-filter=".coloring">Coloring</a></li>
                        <li><a href="#" data-filter=".Hspa">Conditioning</a></li>
                        <li><a href="#" data-filter=".Bspa">Styling</a></li>
                        <li><a href="#" data-filter=".manucuring">Manicuring</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="portfoliodiv">
                    <div class="col-25 coloring manucuring"><a class="fancybox" href="images/gallery/large/280x375.png" data-fancybox-group="gallery">
                            <div class="hover">
                                <img src="https://www.placehold.it/280x375" alt="Portfolio"/>
                                <div class="mask-img">
                                    <div class="hvrlink">
                                        <h3>Cut</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-25 Wcut manucuring"><a class="fancybox" href="images/gallery/large/280x375.png" data-fancybox-group="gallery">
                            <div class="hover">
                                <img src="https://www.placehold.it/280x450" alt="Portfolio"/>
                                <div class="mask-img">
                                    <div class="hvrlink">
                                        <h3>Style</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div class="col-25 coloring Hspa"><a class="fancybox" href="images/gallery/large/280x375.png" data-fancybox-group="gallery">
                            <div class="hover">
                                <img src="https://www.placehold.it/280x375" alt="Portfolio"/>
                                <div class="mask-img">
                                    <div class="hvrlink">
                                        <h3>Cut</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div class="col-25 Wcut"><a class="fancybox" href="images/gallery/large/280x375.png" data-fancybox-group="gallery">
                            <div class="hover">
                                <img src="https://www.placehold.it/280x450" alt="Portfolio"/>
                                <div class="mask-img">
                                    <div class="hvrlink">
                                        <h3>Style</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div class="col-25 coloring"><a class="fancybox" href="images/gallery/large/280x375.png" data-fancybox-group="gallery">
                            <div class="hover">
                                <img src="https://www.placehold.it/280x375" alt="Portfolio"/>
                                <div class="mask-img">
                                    <div class="hvrlink">
                                        <h3>Cut</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div class="col-25 Bspa"><a class="fancybox" href="images/gallery/large/280x375.png" data-fancybox-group="gallery">
                            <div class="hover">
                                <img src="https://www.placehold.it/280x375" alt="Portfolio"/>
                                <div class="mask-img">
                                    <div class="hvrlink">
                                        <h3>Style</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div class="col-25 Bspa"><a class="fancybox" href="images/gallery/large/280x375.png" data-fancybox-group="gallery">
                            <div class="hover">
                                <img src="https://www.placehold.it/280x375" alt="Portfolio"/>
                                <div class="mask-img">
                                    <div class="hvrlink">
                                        <h3>Cut</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div class="col-25"><a class="fancybox" href="images/gallery/large/280x375.png" data-fancybox-group="gallery">
                            <div class="hover">
                                <img src="https://www.placehold.it/280x375" alt="Portfolio"/>
                                <div class="mask-img">
                                    <div class="hvrlink">
                                        <h3>Style</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </section>
    <section id="promotions" class="col-padtop wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-gray">
                        <h2 class="text-center">PROMOÇÕES ESPECIAIS</h2>
                        <div class="col-sm-12 col-lg-12">
                            <div id="myCarousel-1" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="img-right"><img src="https://www.placehold.it/713x400" alt="First slide" class="img-responsive"></div>
                                        <div class="col-pad4 gbg-white">
                                            <h4>Free hair treatment</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-right"><img src="https://www.placehold.it/713x400" alt="First slide" class="img-responsive"></div>
                                        <div class="gbg-white col-pad4">
                                            <h4>Monday Makeup</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-right"><img src="https://www.placehold.it/713x400" alt="First slide" class="img-responsive"></div>
                                        <div class="gbg-white col-pad4">
                                            <h4>Happy Hair</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-control"><a class="left" href="#myCarousel-1" role="button" data-slide="prev"></a> <a class="right" href="#myCarousel-1" role="button" data-slide="next"></a></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="video" class="col-padtop wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="responsive-object">
                        <iframe src="https://www.youtube.com/embed/idjnjfPbRSg?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 pull-right">
                    <h2>Showreel</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus. Nullam non neque eros. Pellentesque nec vulputate eros. Integer scelerisque lorem id massa accumsan, ut faucibus ante suscipit. Nunc tincidunt et ligula vitae pharetra. Fusce ut lobortis augue, eget volutpat felis.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonialdiv wow fadeInUp">
        <div class="container">
            <div class="testimonilabg">
                <h2>Depoimentos</h2>
                <div id="myCarousel-2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="img-left"><img src="https://www.placehold.it/150x150" alt="Testimonial" class="img-responsive"></div>
                            <div class="col-pad4 tbg-white">
                                <h4>Free hair treatment</h4>
                                <h6>Advertising Model</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-left"><img src="https://www.placehold.it/150x150" alt="Testimonial" class="img-responsive"></div>
                            <div class="col-pad4 tbg-white">
                                <h4>Monday Makeup</h4>
                                <h6>Advertising Model</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-left"><img src="https://www.placehold.it/150x150" alt="Testimonial" class="img-responsive"></div>
                            <div class="col-pad4 tbg-white">
                                <h4>Free hair treatment</h4>
                                <h6>Advertising Model</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-left"><img src="https://www.placehold.it/150x150" alt="Testimonial" class="img-responsive"></div>
                            <div class="col-pad4 tbg-white">
                                <h4>Monday Makeup</h4>
                                <h6>Advertising Model</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus.</p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-control"><a class="left" href="#myCarousel-2" role="button" data-slide="prev"></a> <a class="right" href="#myCarousel-2" role="button" data-slide="next"></a></div>
                </div>
            </div>
        </div>
    </section>

    @include('site.includes.footer')

@endsection
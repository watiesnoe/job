@extends('layouts.siteLayouts.app')

@section('content')
    <section class="section-box-2">
        <div class="container">
            <div class="banner-hero banner-image-single"><img src="{{asset('assets/imgs/page/candidates/img.png')}}" alt="jobbox"></div>
            <div class="box-company-profile">
                <div class="image-compay"><img src="{{asset('assets/imgs/page/candidates/candidate-profile.png')}}" alt="jobbox"></div>
                <div class="row mt-10  ">

                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col">
                                <div class="mt-5">
                                    <span class="ml-10"> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;Stage</span>
                                    <span class="ml-20"> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;IP/IT</span>
                                    <span class="ml-20"> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;Paris,75 </span>&nbsp; &nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-15 mt-10 "><a class="btn btn-grey-small mr-5" href="#">Stage de 6mois</a>
                                    <a class="btn btn-grey-small mr-5" href="#">Téletravail</a>
                                    <a class="btn btn-grey-small mr-5" href="#">De 2200 à 2300 € par mois</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 text-sm-end">
                        <a class="btn  btn-outline-primary" href="{{url('/')}}">Revenir aux offres</a>
                        <a class="btn  btn-apply  ml-10" href="page-contact.html">Postuler</a>
                    </div>
                </div>
            </div>
            <div class="box-nav-tabs mt-40 mb-0">
                <ul class="nav" role="tablist">
                    <li><a class="ml-100 mr-20 hover-up " href="#tab-short-bio" data-bs-toggle="tab" >Desciptif du post</a></li>
                    <li><a class="ml-100 mr-20 hover-up " href="#tab-skills" data-bs-toggle="tab" role="tab" aria-controls="tab-skills" aria-selected="false">Presentation du cabinet</a></li>
                    <li><a class="ml-100 mr-20 hover-up " href="#tab-work-experience" data-bs-toggle="tab" role="tab" aria-controls="tab-work-experience" aria-selected="false">Profil recherché</a></li>
                    <li><a class="ml-100 mr-20 hover-up " href="#tab-work-recrutement" data-bs-toggle="tab" role="tab" aria-controls="tab-work-recrutement" aria-selected="false">Recrutement</a></li>
                </ul>
            </div>
            <div class="border-bottom pt-10 pb-10"></div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="content-single">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-short-bio" role="tabpanel" aria-labelledby="tab-short-bio">
                                <h4>About Me</h4>
                                <p></p>
                                <ul>
                                    <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>
                                    <li>5+ years of industry experience in interactive design and / or visual design</li>
                                    <li>Excellent interpersonal skills</li>
                                    <li>Aware of trends in&#x202F;mobile, communications, and collaboration</li>
                                    <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>
                                    <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>
                                    <li>History of impacting shipping products with your work</li>
                                    <li>A Bachelor&rsquo;s Degree in Design (or related field) or equivalent professional experience</li>
                                    <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>
                                </ul>

                            </div>
                            <div class="tab-pane fade" id="tab-skills" role="tabpanel" aria-labelledby="tab-skills">
                                <h4>Presentation du cabinet</h4>
                                <p>Leader en droit des affaires en France, FIDAL est le partenaire de confiance des dirigeants et des managers, déterminé à dispenser des conseils
                                    éclairés et audacieux, mais aussi pragmatiques et stratégiques.

                                    La Direction Régionale Val De Loire Océan couvre un territoire hors du commun par son histoire, sa culture et son environnement, qui a su conjuguer
                                    activités traditionnelles et innovantes et se doter de pôles de compétitivité de renommée internationale. Fidal y compte 130 avocats et juriste, répartis
                                    dans 11 bureaux (Angers, Blois, Chartres, Châteauroux, La Roche-sur-Yon, Laval, Le Mans, Nantes, Orléans, Saint Nazaire et Tours)</p>Hello there! My name is Alan Walker. I am a graphic designer, and I&rsquo;m very passionate and dedicated to my work. With 20 years experience as a professional a graphic designer, I have acquired the skills and knowledge necessary to make your project a success.
                                <p>
                            </div>
                            <div class="tab-pane fade" id="tab-work-experience" role="tabpanel" aria-labelledby="tab-work-experience">
                                <h4>Work Experiences</h4>
                                <p></p>Hello there! My name is Alan Walker. I am a graphic designer, and I&rsquo;m very passionate and dedicated to my work. With 20 years experience as a professional a graphic designer, I have acquired the skills and knowledge necessary to make your project a success.
                                <p></p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!
                            </div>
                            <div class="tab-pane fade" id="tab-work-recrutement" role="tabpanel" aria-labelledby="tab-work-recrutement">
                                <h4>Work Experiences</h4>
                                <p></p>Hello there! My name is Alan Walker. I am a graphic designer, and I&rsquo;m very passionate and dedicated to my work. With 20 years experience as a professional a graphic designer, I have acquired the skills and knowledge necessary to make your project a success.
                                <p></p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!
                            </div>
                        </div>
                    </div>
                    <div class="box-related-job content-page">

                        <div class="paginations">
                            <ul class="pager">
                                <li><a class="pager-prev" href="#"></a></li>
                                <li><a class="pager-number" href="#">1</a></li>
                                <li><a class="pager-number" href="#">2</a></li>
                                <li><a class="pager-number" href="#">3</a></li>
                                <li><a class="pager-number" href="#">4</a></li>
                                <li><a class="pager-number" href="#">5</a></li>
                                <li><a class="pager-number active" href="#">6</a></li>
                                <li><a class="pager-number" href="#">7</a></li>
                                <li><a class="pager-next" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

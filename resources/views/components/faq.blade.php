<section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h1 class="text-danger">{{ __('faq.title') }}</h1>
        </header>

        <div class="row">
            <div class="col-lg-6">
                <!-- F.A.Q List 1-->
                <div class="accordion accordion-flush" id="faqlist1">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                {{ __('faq.faqTitle1') }}
                            </button>
                        </h2>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                <ul>
                                    <li>{{ __('faq.faq1.1') }}</li>
                                    <li>{{ __('faq.faq1.2') }}</li>
                                    <li>{{ __('faq.faq1.3') }}</li>
                                    <li>{{ __('faq.faq1.4') }}</li>
                                    <li>{{ __('faq.faq1.5') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                {{ __('faq.faqTitle2') }}
                            </button>
                        </h2>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                <ul>
                                    <li>{{ __('faq.faq2.1') }}</li>
                                    <li>{{ __('faq.faq2.2') }}</li>
                                    <li>{{ __('faq.faq2.3') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                {{ __('faq.faqTitle3') }}
                            </button>
                        </h2>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                <ul>
                                    <li>{{ __('faq.faq3.1') }}</li>
                                    <li>{{ __('faq.faq3.2') }}</li>
                                    <li>{{ __('faq.faq3.3') }}</li>
                                    <li>{{ __('faq.faq3.4') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">

                <!-- F.A.Q List 2-->
                <div class="accordion accordion-flush" id="faqlist2">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                {{ __('faq.faqTitle4') }}
                            </button>
                        </h2>
                        <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                {{ __('faq.faq4') }}
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                {{ __('faq.faqTitle5') }}
                            </button>
                        </h2>
                        <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                <ul>
                                    <li>{{ __('faq.faq5.1') }}</li>
                                    <li>{{ __('faq.faq5.2') }}</li>
                                    <li>{{ __('faq.faq5.3') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                {{ __('faq.faqTitle6') }}
                            </button>
                        </h2>
                        <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                <ul>
                                    <li>{{ __('faq.faq6.1') }}</li>
                                    <li>{{ __('faq.faq6.2') }}</li>
                                    <li>{{ __('faq.faq6.3') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</section>

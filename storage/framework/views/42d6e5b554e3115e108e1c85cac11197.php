<?php $__env->startSection('contacts'); ?>
    <section class="top-banner">
        <div class="text-center">
            <span><a href="/" class="home-link">Ana Sayfa</a></span>
            <span class="mx-1">/</span>
            <span class="home-active-page">İletişim</span>
        </div>
    </section>

    <section class="contact-us">
        <div class="container">
            <div class="mt-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 col-lg-5 col-sm-12">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d6142.339939555392!2d27.92242!3d39.668391!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMznCsDQwJzAzLjAiTiAyN8KwNTUnMTYuMCJF!5e0!3m2!1sen!2sus!4v1715682338170!5m2!1sen!2sus"
                                        height="250" style="border:0; width: 100%" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="location">
                                    <div class="location-title fw-bold">
                                        Merkez
                                    </div>
                                    <div class="address">Yeni Sanayi Sitesi, 17. Sk., No: 20</div>
                                    <div>Karesi/BALIKESİR</div>
                                    <div class="phone-number-one">+90 (266) 246 33 46</div>
                                    <div class="phone-number-two">+90 (266) 246 22 44</div>
                                    <div class="e-mail">info@ozaytubular.com</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3071.9288442126986!2d27.88560487717127!3d39.651315901867356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b700370b1c0c0f%3A0xf2a70f460c63611c!2sEge%2C%20Demirciler%20Cd.%20No%3A81%20D%3Ab%2C%2010020%20Bal%C4%B1kesir%20Merkez%2FBal%C4%B1kesir%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1715682697189!5m2!1sen!2sus"
                                            height="250" style="border:0; width: 100%" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="location">
                                        <div class="location-title fw-bold">
                                            Swhowroom
                                        </div>
                                        <div class="address">Ege mh. Demirciler Cd No:81/B</div>
                                        <div>Karesi/BALIKESİR</div>
                                        <div class="phone-number-one">+90 (266) 244 44 24</div>
                                        <div class="e-mail">info@ozaytubular.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7 col-sm-12 text-center">
                        <div class="contact-us-form-title"><h3>İletişim</h3></div>
                        <form id="contactForm" class="ps-5 contact-us-form">
                            <?php echo csrf_field(); ?>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"
                                       data-sb-validations="required,email" name="email" oninvalid="this.setCustomValidity('Bu alan email olmak zorundadır.')"/>
                                <label for="emailAddress">Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="Phone Number" type="text" placeholder="phoneNumber"
                                       data-sb-validations="required" name="phone"/>
                                <label for="phoneNumber">Telefon Numarası</label>
                            </div>
                            <div class="form-floating mb-3 contact-form-message">
                                <textarea class="form-control" id="message" type="text" placeholder="Mesaj"
                                          style="height: 10rem;" data-sb-validations="required"
                                          name="message"></textarea>
                                <label for="message">Mesaj</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Gönder</button>
                            </div>
                        </form>
                      <?php $__env->startPush('js-stack'); ?>
                            <script>
                                window.addEventListener('DOMContentLoaded', () => {
                                    let $contactFormPage = $("form#contactForm");

                                    $contactFormPage.on("submit", function (e) {
                                        e.preventDefault();
                                        $contactFormPage.find("button[type=submit]").attr("disabled", "disabled");

                                        $.ajax({
                                            url: '<?php echo e(route('contacts.store')); ?>',
                                            method: 'POST',
                                            data: $contactFormPage.serialize(),
                                            success: function () {
                                                Swal.fire({
                                                    title: "Mesaj",
                                                    text: "Başarıyla kaydedilmiştir.",
                                                    icon: "success"
                                                });
                                                $contactFormPage[0].reset();
                                                $contactFormPage.find("button[type=submit]").removeAttr("disabled");
                                            },
                                            error: function (e) {
                                                $contactFormPage.find("button[type=submit]").removeAttr("disabled")
                                                ajaxDefaultErrorCallback(e);
                                            }
                                        });
                                    });
                                });
                            </script>
                      <?php $__env->stopPush(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/index.blade.php ENDPATH**/ ?>

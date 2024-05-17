<?php $__env->startSection('title', 'Ayarlar'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2 class="fw-bold">Sayfa Ayarlarını Güncelle</h2>
        <div class="row row-sm mt-4">
            <div class="col-lg-12">
                <form id="settingUpdate">
                    <div class="card custom-card shadow mb-3">
                        <div class="card-header border-bottom">
                            <h3 class="card-title fw-bold text-primary mb-0" style="font-size: 1.25rem;">Ana sayfa ilk bölüm</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="mb-3">
                                    <label for="heroTitle"><?php echo e(__('Ana Sayfa İlk Başlık')); ?></label>
                                    <input type="text" class="form-control" id="heroTitle" name="heroTitle"
                                           value="<?php echo e(config('settings.heroTitle')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="heroDescription"><?php echo e(__('Ana Sayfa İlk Açıklama')); ?></label>
                                    <input type="text" class="form-control" id="heroDescription"
                                           name="heroDescription"
                                           value="<?php echo e(config('settings.heroDescription')); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card shadow mb-3">
                        <div class="card-header border-bottom">
                            <h3 class="card-title fw-bold text-primary mb-0" style="font-size: 1.25rem;">Ana sayfa kartlar</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="mb-3">
                                    <label for="heroCardTitle1"><?php echo e(__('Ana Sayfa Kart Başlık #1')); ?></label>
                                    <input type="text" class="form-control" id="heroCardTitle1" name="heroCardTitle1"
                                           value="<?php echo e(config('settings.heroCardTitle1')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardBoldDescription1"><?php echo e(__('Ana Sayfa Kart Kalın Açıklama #1')); ?></label>
                                    <input type="text" class="form-control" id="heroCardBoldDescription1"
                                           name="heroCardBoldDescription1"
                                           value="<?php echo e(config('settings.heroCardBoldDescription1')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardDescription1"><?php echo e(__('Ana Sayfa Kart Açıklama #1')); ?></label>
                                    <input type="text" class="form-control" id="heroCardDescription1"
                                           name="heroCardDescription1"
                                           value="<?php echo e(config('settings.heroCardDescription1')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardTitle2"><?php echo e(__('Ana Sayfa Kart Başlık #2')); ?></label>
                                    <input type="text" class="form-control" id="heroCardTitle2" name="heroCardTitle2"
                                           value="<?php echo e(config('settings.heroCardTitle2')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardBoldDescription2"><?php echo e(__('Ana Sayfa Kart Kalın Açıklama #2')); ?></label>
                                    <input type="text" class="form-control" id="heroCardBoldDescription2"
                                           name="heroCardBoldDescription2"
                                           value="<?php echo e(config('settings.heroCardBoldDescription2')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardDescription2"><?php echo e(__('Ana Sayfa Kart Açıklama #2')); ?></label>
                                    <input type="text" class="form-control" id="heroCardDescription2"
                                           name="heroCardDescription2"
                                           value="<?php echo e(config('settings.heroCardDescription2')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardTitle3"><?php echo e(__('Ana Sayfa Kart Başlık #3')); ?></label>
                                    <input type="text" class="form-control" id="heroCardTitle3" name="heroCardTitle3"
                                           value="<?php echo e(config('settings.heroCardTitle3')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardBoldDescription3"><?php echo e(__('Ana Sayfa Kart Kalın Açıklama #3')); ?></label>
                                    <input type="text" class="form-control" id="heroCardBoldDescription3"
                                           name="heroCardBoldDescription3"
                                           value="<?php echo e(config('settings.heroCardBoldDescription3')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardDescription3"><?php echo e(__('Ana Sayfa Kart Açıklama #3')); ?></label>
                                    <input type="text" class="form-control" id="heroCardDescription3"
                                           name="heroCardDescription3"
                                           value="<?php echo e(config('settings.heroCardDescription3')); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card shadow mb-3">
                        <div class="card-header border-bottom">
                            <h3 class="card-title fw-bold text-primary mb-0" style="font-size: 1.25rem;">Ana sayfa biz kimiz alanı</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="mb-3">
                                    <label for="homePageAboutUsTitle"><?php echo e(__('Biz Kimiz Başlık')); ?></label>
                                    <input type="text" class="form-control" id="homePageAboutUsTitle" name="homePageAboutUsTitle"
                                           value="<?php echo e(config('settings.homePageAboutUsTitle')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageAboutUsDescription"><?php echo e(__('Biz Kimiz Açıklama')); ?></label>
                                    <input type="text" class="form-control" id="homePageAboutUsDescription"
                                           name="homePageAboutUsDescription"
                                           value="<?php echo e(config('settings.homePageAboutUsDescription')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageQualityPolicyTitleBlack"><?php echo e(__('Kalite Politikası Başlık #Siyah Renk')); ?></label>
                                    <input type="text" class="form-control" id="homePageQualityPolicyTitleBlack"
                                           name="homePageQualityPolicyTitleBlack"
                                           value="<?php echo e(config('settings.homePageQualityPolicyTitleBlack')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageQualityPolicyTitleRed"><?php echo e(__('Kalite Politikası Başlık #Kırmızı Renk')); ?></label>
                                    <input type="text" class="form-control" id="homePageQualityPolicyTitleRed"
                                           name="homePageQualityPolicyTitleRed"
                                           value="<?php echo e(config('settings.homePageQualityPolicyTitleRed')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageQualityPolicyDescription"><?php echo e(__('Kalite Politikası Açıklama')); ?></label>
                                    <input type="text" class="form-control" id="homePageQualityPolicyDescription"
                                           name="homePageQualityPolicyDescription"
                                           value="<?php echo e(config('settings.homePageQualityPolicyDescription')); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card shadow mb-3">
                        <div class="card-header border-bottom">
                            <h3 class="card-title fw-bold text-primary mb-0" style="font-size: 1.25rem;">Ana sayfa fotoğraflı alan</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="mb-3">
                                    <label for="homePageBannerTitle"><?php echo e(__('Fotoğraflı Alan Başlık')); ?></label>
                                    <input type="text" class="form-control" id="homePageBannerTitle" name="homePageBannerTitle"
                                           value="<?php echo e(config('settings.homePageBannerTitle')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageBannerDescription"><?php echo e(__('Fotoğraflı Alan Açıklama')); ?></label>
                                    <input type="text" class="form-control" id="homePageBannerDescription" name="homePageBannerDescription"
                                           value="<?php echo e(config('settings.homePageBannerDescription')); ?>">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card custom-card shadow mb-3">
                        <div class="card-header border-bottom">
                            <h3 class="card-title fw-bold text-primary mb-0" style="font-size: 1.25rem;">Ana sayfa hizmetlerimiz bölümü</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="mb-3">
                                    <label for="homePageServicesTitle"><?php echo e(__('Hizmetlerimiz Başlık')); ?></label>
                                    <input type="text" class="form-control" id="homePageServicesTitle" name="homePageServicesTitle"
                                           value="<?php echo e(config('settings.homePageServicesTitle')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesDescription"><?php echo e(__('Hizmetlerimiz Açıklama')); ?></label>
                                    <input type="text" class="form-control" id="homePageServicesDescription" name="homePageServicesDescription"
                                           value="<?php echo e(config('settings.homePageServicesDescription')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardTitle1"><?php echo e(__('Hizmetlerimiz Alanı Kart Başlık #1')); ?></label>
                                    <input type="text" class="form-control" id="homePageServicesCardTitle1" name="homePageServicesCardTitle1"
                                           value="<?php echo e(config('settings.homePageServicesCardTitle1')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardDescription1"><?php echo e(__('Hizmetlerimiz Alanı Kart Açıklama #1')); ?></label>
                                    <input type="text" class="form-control" id="homePageServicesCardDescription1" name="homePageServicesCardDescription1"
                                           value="<?php echo e(config('settings.homePageServicesCardDescription1')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardTitle2"><?php echo e(__('Hizmetlerimiz Alanı Kart Başlık #2')); ?></label>
                                    <input type="text" class="form-control" id="homePageServicesCardTitle2" name="homePageServicesCardTitle2"
                                           value="<?php echo e(config('settings.homePageServicesCardTitle2')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardDescription2"><?php echo e(__('Hizmetlerimiz Alanı Kart Açıklama #2')); ?></label>
                                    <input type="text" class="form-control" id="homePageServicesCardDescription2" name="homePageServicesCardDescription2"
                                           value="<?php echo e(config('settings.homePageServicesCardDescription2')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardTitle3"><?php echo e(__('Hizmetlerimiz Alanı Kart Başlık #3')); ?></label>
                                    <input type="text" class="form-control" id="homePageServicesCardTitle3" name="homePageServicesCardTitle3"
                                           value="<?php echo e(config('settings.homePageServicesCardTitle3')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardDescription3"><?php echo e(__('Hizmetlerimiz Alanı Kart Açıklama #3')); ?></label>
                                    <input type="text" class="form-control" id="homePageServicesCardDescription3" name="homePageServicesCardDescription3"
                                           value="<?php echo e(config('settings.homePageServicesCardDescription3')); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card shadow mb-3">
                        <div class="card-header border-bottom">
                            <h3 class="card-title fw-bold text-primary mb-0" style="font-size: 1.25rem;">Ana sayfa hedefimiz bölümü</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="mb-3">
                                    <label for="homePageOurGoalsTitle"><?php echo e(__('Hedefimiz Başlık')); ?></label>
                                    <input type="text" class="form-control" id="homePageOurGoalsTitle" name="homePageOurGoalsTitle"
                                           value="<?php echo e(config('settings.homePageOurGoalsTitle')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsDescription"><?php echo e(__('Hedefimiz Açıklama')); ?></label>
                                    <input type="text" class="form-control" id="homePageOurGoalsDescription" name="homePageOurGoalsDescription"
                                           value="<?php echo e(config('settings.homePageOurGoalsDescription')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardTitle1"><?php echo e(__('Hedefimiz Alanı Kart Başlık #1')); ?></label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardTitle1" name="homePageOurGoalsCardTitle1"
                                           value="<?php echo e(config('settings.homePageOurGoalsCardTitle1')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardDescription1"><?php echo e(__('Hedefimiz Alanı Kart Açıklama #1')); ?></label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardDescription1" name="homePageOurGoalsCardDescription1"
                                           value="<?php echo e(config('settings.homePageOurGoalsCardDescription1')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardTitle2"><?php echo e(__('Hedefimiz Alanı Kart Başlık #2')); ?></label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardTitle2" name="homePageOurGoalsCardTitle2"
                                           value="<?php echo e(config('settings.homePageOurGoalsCardTitle2')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardDescription2"><?php echo e(__('Hedefimiz Alanı Kart Açıklama #2')); ?></label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardDescription2" name="homePageOurGoalsCardDescription2"
                                           value="<?php echo e(config('settings.homePageOurGoalsCardDescription2')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardTitle3"><?php echo e(__('Hedefimiz Alanı Kart Başlık #3')); ?></label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardTitle3" name="homePageOurGoalsCardTitle3"
                                           value="<?php echo e(config('settings.homePageOurGoalsCardTitle3')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardDescription3"><?php echo e(__('Hedefimiz Alanı Kart Açıklama #3')); ?></label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardDescription3" name="homePageOurGoalsCardDescription3"
                                           value="<?php echo e(config('settings.homePageOurGoalsCardDescription3')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardTitle4"><?php echo e(__('Hedefimiz Alanı Kart Başlık #4')); ?></label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardTitle4" name="homePageOurGoalsCardTitle4"
                                           value="<?php echo e(config('settings.homePageOurGoalsCardTitle4')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardDescription4"><?php echo e(__('Hedefimiz Alanı Kart Açıklama #4')); ?></label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardDescription4" name="homePageOurGoalsCardDescription4"
                                           value="<?php echo e(config('settings.homePageOurGoalsCardDescription4')); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" bg-gray d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm me-1 btn-spinner d-none" role="status"
                                      aria-hidden="true"></span>
                            Güncelle
                        </button>
                    </div>
                </form>
                <?php $__env->startPush('js-stack'); ?>
                    <script>
                        window.addEventListener('DOMContentLoaded', () => {
                            let $settingsUpdateForm = $("form#settingUpdate");
                            $settingsUpdateForm.on("submit", function (e) {
                                e.preventDefault();
                                $settingsUpdateForm.find("button[type=submit]").attr("disabled", "disabled");
                                $.ajax({
                                    url: '<?php echo e(route('admin.settings.update')); ?>',
                                    method: 'POST',
                                    data: $settingsUpdateForm.serialize(),
                                    success: function () {
                                        window.location = "<?php echo e(route('admin.settings.edit')); ?>";
                                    },
                                    error: function (e) {
                                        $settingsUpdateForm.find("button[type=submit]").removeAttr("disabled")
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/admin/settings/edit.blade.php ENDPATH**/ ?>
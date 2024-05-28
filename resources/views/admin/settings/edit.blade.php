@extends('admin.layouts.layout')
@section('title', 'Ayarlar')
@section('content')
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
                                    <label for="heroTitle">{{ __('Ana Sayfa İlk Başlık') }}</label>
                                    <input type="text" class="form-control" id="heroTitle" name="heroTitle"
                                           value="{{ config('settings.heroTitle') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heroDescription">{{ __('Ana Sayfa İlk Açıklama') }}</label>
                                    <input type="text" class="form-control" id="heroDescription"
                                           name="heroDescription"
                                           value="{{ config('settings.heroDescription') }}">
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
                                    <label for="heroCardTitle1">{{ __('Ana Sayfa Kart Başlık #1') }}</label>
                                    <input type="text" class="form-control" id="heroCardTitle1" name="heroCardTitle1"
                                           value="{{ config('settings.heroCardTitle1') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardBoldDescription1">{{ __('Ana Sayfa Kart Kalın Açıklama #1') }}</label>
                                    <input type="text" class="form-control" id="heroCardBoldDescription1"
                                           name="heroCardBoldDescription1"
                                           value="{{ config('settings.heroCardBoldDescription1') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardDescription1">{{ __('Ana Sayfa Kart Açıklama #1') }}</label>
                                    <input type="text" class="form-control" id="heroCardDescription1"
                                           name="heroCardDescription1"
                                           value="{{ config('settings.heroCardDescription1') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardTitle2">{{ __('Ana Sayfa Kart Başlık #2') }}</label>
                                    <input type="text" class="form-control" id="heroCardTitle2" name="heroCardTitle2"
                                           value="{{ config('settings.heroCardTitle2') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardBoldDescription2">{{ __('Ana Sayfa Kart Kalın Açıklama #2') }}</label>
                                    <input type="text" class="form-control" id="heroCardBoldDescription2"
                                           name="heroCardBoldDescription2"
                                           value="{{ config('settings.heroCardBoldDescription2') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardDescription2">{{ __('Ana Sayfa Kart Açıklama #2') }}</label>
                                    <input type="text" class="form-control" id="heroCardDescription2"
                                           name="heroCardDescription2"
                                           value="{{ config('settings.heroCardDescription2') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardTitle3">{{ __('Ana Sayfa Kart Başlık #3') }}</label>
                                    <input type="text" class="form-control" id="heroCardTitle3" name="heroCardTitle3"
                                           value="{{ config('settings.heroCardTitle3') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardBoldDescription3">{{ __('Ana Sayfa Kart Kalın Açıklama #3') }}</label>
                                    <input type="text" class="form-control" id="heroCardBoldDescription3"
                                           name="heroCardBoldDescription3"
                                           value="{{ config('settings.heroCardBoldDescription3') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heroCardDescription3">{{ __('Ana Sayfa Kart Açıklama #3') }}</label>
                                    <input type="text" class="form-control" id="heroCardDescription3"
                                           name="heroCardDescription3"
                                           value="{{ config('settings.heroCardDescription3') }}">
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
                                    <label for="homePageAboutUsTitle">{{ __('Biz Kimiz Başlık') }}</label>
                                    <input type="text" class="form-control" id="homePageAboutUsTitle" name="homePageAboutUsTitle"
                                           value="{{ config('settings.homePageAboutUsTitle') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageAboutUsDescription">{{ __('Biz Kimiz Açıklama') }}</label>
                                    <input type="text" class="form-control" id="homePageAboutUsDescription"
                                           name="homePageAboutUsDescription"
                                           value="{{ config('settings.homePageAboutUsDescription') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageQualityPolicyTitleBlack">{{ __('Kalite Politikası Başlık #Siyah Renk') }}</label>
                                    <input type="text" class="form-control" id="homePageQualityPolicyTitleBlack"
                                           name="homePageQualityPolicyTitleBlack"
                                           value="{{ config('settings.homePageQualityPolicyTitleBlack') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageQualityPolicyTitleRed">{{ __('Kalite Politikası Başlık #Kırmızı Renk') }}</label>
                                    <input type="text" class="form-control" id="homePageQualityPolicyTitleRed"
                                           name="homePageQualityPolicyTitleRed"
                                           value="{{ config('settings.homePageQualityPolicyTitleRed') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageQualityPolicyDescription">{{ __('Kalite Politikası Açıklama') }}</label>
                                    <input type="text" class="form-control" id="homePageQualityPolicyDescription"
                                           name="homePageQualityPolicyDescription"
                                           value="{{ config('settings.homePageQualityPolicyDescription') }}">
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
                                    <label for="homePageBannerTitle">{{ __('Fotoğraflı Alan Başlık') }}</label>
                                    <input type="text" class="form-control" id="homePageBannerTitle" name="homePageBannerTitle"
                                           value="{{ config('settings.homePageBannerTitle') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageBannerDescription">{{ __('Fotoğraflı Alan Açıklama') }}</label>
                                    <input type="text" class="form-control" id="homePageBannerDescription" name="homePageBannerDescription"
                                           value="{{ config('settings.homePageBannerDescription') }}">
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
                                    <label for="homePageServicesTitle">{{ __('Hizmetlerimiz Başlık') }}</label>
                                    <input type="text" class="form-control" id="homePageServicesTitle" name="homePageServicesTitle"
                                           value="{{ config('settings.homePageServicesTitle') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesDescription">{{ __('Hizmetlerimiz Açıklama') }}</label>
                                    <input type="text" class="form-control" id="homePageServicesDescription" name="homePageServicesDescription"
                                           value="{{ config('settings.homePageServicesDescription') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardTitle1">{{ __('Hizmetlerimiz Alanı Kart Başlık #1') }}</label>
                                    <input type="text" class="form-control" id="homePageServicesCardTitle1" name="homePageServicesCardTitle1"
                                           value="{{ config('settings.homePageServicesCardTitle1') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardDescription1">{{ __('Hizmetlerimiz Alanı Kart Açıklama #1') }}</label>
                                    <input type="text" class="form-control" id="homePageServicesCardDescription1" name="homePageServicesCardDescription1"
                                           value="{{ config('settings.homePageServicesCardDescription1') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardTitle2">{{ __('Hizmetlerimiz Alanı Kart Başlık #2') }}</label>
                                    <input type="text" class="form-control" id="homePageServicesCardTitle2" name="homePageServicesCardTitle2"
                                           value="{{ config('settings.homePageServicesCardTitle2') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardDescription2">{{ __('Hizmetlerimiz Alanı Kart Açıklama #2') }}</label>
                                    <input type="text" class="form-control" id="homePageServicesCardDescription2" name="homePageServicesCardDescription2"
                                           value="{{ config('settings.homePageServicesCardDescription2') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardTitle3">{{ __('Hizmetlerimiz Alanı Kart Başlık #3') }}</label>
                                    <input type="text" class="form-control" id="homePageServicesCardTitle3" name="homePageServicesCardTitle3"
                                           value="{{ config('settings.homePageServicesCardTitle3') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageServicesCardDescription3">{{ __('Hizmetlerimiz Alanı Kart Açıklama #3') }}</label>
                                    <input type="text" class="form-control" id="homePageServicesCardDescription3" name="homePageServicesCardDescription3"
                                           value="{{ config('settings.homePageServicesCardDescription3') }}">
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
                                    <label for="homePageOurGoalsTitle">{{ __('Hedefimiz Başlık') }}</label>
                                    <input type="text" class="form-control" id="homePageOurGoalsTitle" name="homePageOurGoalsTitle"
                                           value="{{ config('settings.homePageOurGoalsTitle') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsDescription">{{ __('Hedefimiz Açıklama') }}</label>
                                    <input type="text" class="form-control" id="homePageOurGoalsDescription" name="homePageOurGoalsDescription"
                                           value="{{ config('settings.homePageOurGoalsDescription') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardTitle1">{{ __('Hedefimiz Alanı Kart Başlık #1') }}</label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardTitle1" name="homePageOurGoalsCardTitle1"
                                           value="{{ config('settings.homePageOurGoalsCardTitle1') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardDescription1">{{ __('Hedefimiz Alanı Kart Açıklama #1') }}</label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardDescription1" name="homePageOurGoalsCardDescription1"
                                           value="{{ config('settings.homePageOurGoalsCardDescription1') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardTitle2">{{ __('Hedefimiz Alanı Kart Başlık #2') }}</label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardTitle2" name="homePageOurGoalsCardTitle2"
                                           value="{{ config('settings.homePageOurGoalsCardTitle2') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardDescription2">{{ __('Hedefimiz Alanı Kart Açıklama #2') }}</label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardDescription2" name="homePageOurGoalsCardDescription2"
                                           value="{{ config('settings.homePageOurGoalsCardDescription2') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardTitle3">{{ __('Hedefimiz Alanı Kart Başlık #3') }}</label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardTitle3" name="homePageOurGoalsCardTitle3"
                                           value="{{ config('settings.homePageOurGoalsCardTitle3') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardDescription3">{{ __('Hedefimiz Alanı Kart Açıklama #3') }}</label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardDescription3" name="homePageOurGoalsCardDescription3"
                                           value="{{ config('settings.homePageOurGoalsCardDescription3') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardTitle4">{{ __('Hedefimiz Alanı Kart Başlık #4') }}</label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardTitle4" name="homePageOurGoalsCardTitle4"
                                           value="{{ config('settings.homePageOurGoalsCardTitle4') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="homePageOurGoalsCardDescription4">{{ __('Hedefimiz Alanı Kart Açıklama #4') }}</label>
                                    <input type="text" class="form-control" id="homePageOurGoalsCardDescription4" name="homePageOurGoalsCardDescription4"
                                           value="{{ config('settings.homePageOurGoalsCardDescription4') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card shadow mb-3">
                        <div class="card-header border-bottom">
                            <h3 class="card-title fw-bold text-primary mb-0" style="font-size: 1.25rem;">Footer (Sayfa Alt Bilgi)</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="mb-3">
                                    <label for="footerDescriptionLeft">{{ __('Footer Açıklama #1') }}</label>
                                    <input type="text" class="form-control" id="footerDescriptionLeft" name="footerDescriptionLeft"
                                           value="{{ config('settings.footerDescriptionLeft') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="footerDescriptionRight">{{ __('Footer Açıklama #2') }}</label>
                                    <input type="text" class="form-control" id="footerDescriptionRight" name="footerDescriptionRight"
                                           value="{{ config('settings.footerDescriptionRight') }}">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card custom-card shadow mb-3">
                        <div class="card-header border-bottom">
                            <h3 class="card-title fw-bold text-primary mb-0" style="font-size: 1.25rem;">Sosyal Medya Hesapları</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="mb-3">
                                    <label for="footerDescriptionLeft">{{ __('Facebook Hesabı') }}</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                           value="{{ config('settings.facebook') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="footerDescriptionRight">{{ __('Instagram Hesabı') }}</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram"
                                           value="{{ config('settings.instagram') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="footerDescriptionRight">{{ __('Twitter Hesabı') }}</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter"
                                           value="{{ config('settings.twitter') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="footerDescriptionRight">{{ __('Youtube Hesabı') }}</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube"
                                           value="{{ config('settings.youtube') }}">
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
                @push('js-stack')
                    <script>
                        window.addEventListener('DOMContentLoaded', () => {
                            let $settingsUpdateForm = $("form#settingUpdate");
                            $settingsUpdateForm.on("submit", function (e) {
                                e.preventDefault();
                                $settingsUpdateForm.find("button[type=submit]").attr("disabled", "disabled");
                                $.ajax({
                                    url: '{{ route('admin.settings.update') }}',
                                    method: 'POST',
                                    data: $settingsUpdateForm.serialize(),
                                    success: function () {
                                        window.location = "{{ route('admin.settings.edit') }}";
                                    },
                                    error: function (e) {
                                        $settingsUpdateForm.find("button[type=submit]").removeAttr("disabled")
                                        ajaxDefaultErrorCallback(e);
                                    }
                                });
                            });
                        });
                    </script>
                @endpush
            </div>
        </div>
    </div>
@endsection

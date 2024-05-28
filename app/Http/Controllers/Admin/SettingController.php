<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SettingController extends Controller
{
    //
    public function edit()
    {
        return view('admin.settings.edit');
    }

    public function update(Request $request)
    {
        try {
            Setting::query()->where('key', 'heroTitle')->update([
                'value' => $request->heroTitle ?? ''
            ]);
            Setting::query()->where('key', 'heroDescription')->update([
                'value' => $request->heroDescription ?? ''
            ]);
            Setting::query()->where('key', 'heroCardTitle1')->update([
                'value' => $request->heroCardTitle1 ?? ''
            ]);
            Setting::query()->where('key', 'heroCardBoldDescription1')->update([
                'value' => $request->heroCardBoldDescription1 ?? ''
            ]);
            Setting::query()->where('key', 'heroCardDescription1')->update([
                'value' => $request->heroCardDescription1 ?? ''
            ]);
            Setting::query()->where('key', 'heroCardTitle2')->update([
                'value' => $request->heroCardTitle2 ?? ''
            ]);
            Setting::query()->where('key', 'heroCardBoldDescription2')->update([
                'value' => $request->heroCardBoldDescription2 ?? ''
            ]);
            Setting::query()->where('key', 'heroCardDescription2')->update([
                'value' => $request->heroCardDescription2 ?? ''
            ]);
            Setting::query()->where('key', 'heroCardTitle3')->update([
                'value' => $request->heroCardTitle3 ?? ''
            ]);
            Setting::query()->where('key', 'heroCardBoldDescription3')->update([
                'value' => $request->heroCardBoldDescription3 ?? ''
            ]);
            Setting::query()->where('key', 'heroCardDescription3')->update([
                'value' => $request->heroCardDescription3 ?? ''
            ]);
            Setting::query()->where('key', 'homePageAboutUsTitle')->update([
                'value' => $request->homePageAboutUsTitle ?? ''
            ]);
            Setting::query()->where('key', 'homePageAboutUsDescription')->update([
                'value' => $request->homePageAboutUsDescription ?? ''
            ]);
            Setting::query()->where('key', 'homePageQualityPolicyTitleBlack')->update([
                'value' => $request->homePageQualityPolicyTitleBlack ?? ''
            ]);
            Setting::query()->where('key', 'homePageQualityPolicyTitleRed')->update([
                'value' => $request->homePageQualityPolicyTitleRed ?? ''
            ]);
            Setting::query()->where('key', 'homePageQualityPolicyDescription')->update([
                'value' => $request->homePageQualityPolicyDescription ?? ''
            ]);
            Setting::query()->where('key', 'homePageBannerTitle')->update([
                'value' => $request->homePageBannerTitle ?? ''
            ]);
            Setting::query()->where('key', 'homePageBannerDescription')->update([
                'value' => $request->homePageBannerDescription ?? ''
            ]);
            Setting::query()->where('key', 'homePageServicesTitle')->update([
                'value' => $request->homePageServicesTitle ?? ''
            ]);
            Setting::query()->where('key', 'homePageServicesDescription')->update([
                'value' => $request->homePageServicesDescription ?? ''
            ]);
            Setting::query()->where('key', 'homePageServicesCardTitle1')->update([
                'value' => $request->homePageServicesCardTitle1 ?? ''
            ]);
            Setting::query()->where('key', 'homePageServicesCardDescription1')->update([
                'value' => $request->homePageServicesCardDescription1 ?? ''
            ]);
            Setting::query()->where('key', 'homePageServicesCardTitle2')->update([
                'value' => $request->homePageServicesCardTitle2 ?? ''
            ]);
            Setting::query()->where('key', 'homePageServicesCardDescription2')->update([
                'value' => $request->homePageServicesCardDescription2 ?? ''
            ]);
            Setting::query()->where('key', 'homePageServicesCardTitle3')->update([
                'value' => $request->homePageServicesCardTitle3 ?? ''
            ]);
            Setting::query()->where('key', 'homePageServicesCardDescription3')->update([
                'value' => $request->homePageServicesCardDescription3 ?? ''
            ]);
            Setting::query()->where('key', 'homePageOurGoalsTitle')->update([
                'value' => $request->homePageOurGoalsTitle ?? ''
            ]);
            Setting::query()->where('key', 'homePageOurGoalsDescription')->update([
                'value' => $request->homePageOurGoalsDescription ?? ''
            ]);
            Setting::query()->where('key', 'homePageOurGoalsCardTitle1')->update([
                'value' => $request->homePageOurGoalsCardTitle1 ?? ''
            ]);
            Setting::query()->where('key', 'homePageOurGoalsCardDescription1')->update([
                'value' => $request->homePageOurGoalsCardDescription1 ?? ''
            ]);
            Setting::query()->where('key', 'homePageOurGoalsCardTitle2')->update([
                'value' => $request->homePageOurGoalsCardTitle2 ?? ''
            ]);
            Setting::query()->where('key', 'homePageOurGoalsCardDescription2')->update([
                'value' => $request->homePageOurGoalsCardDescription2 ?? ''
            ]);
            Setting::query()->where('key', 'homePageOurGoalsCardTitle3')->update([
                'value' => $request->homePageOurGoalsCardTitle3 ?? ''
            ]);
            Setting::query()->where('key', 'homePageOurGoalsCardDescription3')->update([
                'value' => $request->homePageOurGoalsCardDescription3 ?? ''
            ]);
            Setting::query()->where('key', 'homePageOurGoalsCardTitle4')->update([
                'value' => $request->homePageOurGoalsCardTitle4 ?? ''
            ]);
            Setting::query()->where('key', 'homePageOurGoalsCardDescription4')->update([
                'value' => $request->homePageOurGoalsCardDescription4 ?? ''
            ]);
            Setting::query()->where('key', 'footerDescriptionLeft')->update([
                'value' => $request->footerDescriptionLeft ?? ''
            ]);
            Setting::query()->where('key', 'footerDescriptionRight')->update([
                'value' => $request->footerDescriptionRight ?? ''
            ]);
            Setting::query()->where('key', 'facebook')->update([
                'value' => $request->facebook ?? ''
            ]);
            Setting::query()->where('key', 'instagram')->update([
                'value' => $request->instagram ?? ''
            ]);
            Setting::query()->where('key', 'twitter')->update([
                'value' => $request->twitter ?? ''
            ]);
            Setting::query()->where('key', 'youtube')->update([
                'value' => $request->youtube ?? ''
            ]);

        } catch (\Exception $exception) {
            throw ValidationException::withMessages([$exception->getMessage()]);
        }
    }
}

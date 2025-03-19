<?php

declare(strict_types=1);

namespace JTL\Router\Controller\Backend;

use JTL\Router\Route;

class Collection
{
    /**
     * @return array<string, class-string<ControllerInterface>>
     */
    public function getRoutes(): array
    {
        return [
            Route::BANNER                => BannerController::class,
            Route::ORDERS                => OrderController::class,
            Route::IMAGES                => ImagesController::class,
            Route::PACKAGINGS            => PackagingsController::class,
            Route::CONTACT_FORMS         => ContactFormsController::class,
            Route::SYNC                  => SyncController::class,
            Route::SHIPPING_METHODS      => ShippingMethodsController::class,
            Route::COMPARELIST           => ComparelistController::class,
            Route::SYSTEMLOG             => SystemLogController::class,
            Route::SYSTEMCHECK           => SystemCheckController::class,
            Route::STATUSMAIL            => StatusMailController::class,
            Route::SEARCHSPECIAL         => SearchSpecialController::class,
            Route::SEARCHSPECIALOVERLAYS => SearchSpecialOverlayController::class,
            Route::STATUS                => StatusController::class,
            Route::STATS . '[/{id}]'     => StatsController::class,
            Route::LANGUAGE              => LanguageController::class,
            Route::SITEMAP               => SitemapController::class,
            Route::LOGO                  => LogoController::class,
            Route::RSS                   => RSSController::class,
            Route::META                  => GlobalMetaDataController::class,
            Route::PROFILER              => ProfilerController::class,
            Route::PRICEHISTORY          => PriceHistoryController::class,
            Route::PERMISSIONCHECK       => PermissionCheckController::class,
            Route::PASS                  => PasswordController::class,
            Route::CUSTOMERFIELDS        => CustomerFieldsController::class,
            Route::COUPONS               => CouponsController::class,
            Route::FILESYSTEM            => FilesystemController::class,
            Route::DBCHECK               => DBCheckController::class,
            Route::CATEGORYCHECK         => CategoryCheckController::class,
            Route::USERS                 => AdminAccountController::class,
            Route::REVIEWS               => ReviewController::class,
            Route::SLIDERS               => SliderController::class,
            Route::IMAGE_MANAGEMENT      => ImageManagementController::class,
            Route::BOXES                 => BoxController::class,
            Route::BRANDING . '[/{id}]'  => BrandingController::class,
            Route::CACHE                 => CacheController::class,
            Route::CHECKBOX              => CheckboxController::class,
            Route::COUNTRIES             => CountryController::class,
            Route::DBMANAGER             => DBManagerController::class,
            Route::DBUPDATER             => DBUpdateController::class,
            Route::EMAILBLOCKLIST        => EmailBlocklistController::class,
            Route::ACTIVATE              => ActivationController::class,
            Route::LINKS                 => LinkController::class,
            Route::EMAILHISTORY          => EmailHistoryController::class,
            Route::EMAILTEMPLATES        => EmailTemplateController::class,
            Route::CRON                  => CronController::class,
            Route::NEWS                  => NewsController::class,
            Route::PAYMENT_METHODS       => PaymentMethodsController::class,
            Route::REDIRECT              => RedirectController::class,
            Route::FAVS                  => FavsController::class,
            Route::WAREHOUSES            => WarehousesController::class,
            Route::DASHBOARD             => DashboardController::class,
            Route::SELECTION_WIZARD      => SelectionWizardController::class,
            Route::TAC                   => TaCController::class,
            Route::RESET                 => ResetController::class,
            Route::SEPARATOR             => SeparatorController::class,
            Route::CONSENT               => ConsentController::class,
            Route::EXPORT                => ExportController::class,
            Route::EXPORT_START          => ExportStarterController::class,
            Route::FILECHECK             => FileCheckController::class,
            Route::GIFTS                 => GiftsController::class,
            Route::CAMPAIGN              => CampaignController::class,
            Route::CUSTOMER_IMPORT       => CustomerImportController::class,
            Route::COUPON_STATS          => CouponStatsController::class,
            Route::LICENSE               => LicenseController::class,
            Route::LOGOUT                => LogoutController::class,
            Route::NAVFILTER             => NavFilterController::class,
            Route::NEWSLETTER            => NewsletterController::class,
            Route::NEWSLETTER_IMPORT     => NewsletterImportController::class,
            Route::OPC                   => OPCController::class,
            Route::OPCCC                 => OPCCCController::class,
            Route::ZIP_IMPORT            => ZipImportController::class,
            Route::TEMPLATE              => TemplateController::class,
            Route::SITEMAP_EXPORT        => SitemapExportController::class,
            Route::PERSISTENT_CART       => PersistentCartController::class,
            Route::WIZARD                => WizardController::class,
            Route::WISHLIST              => WishlistController::class,
            Route::LIVESEARCH            => LivesearchController::class,
            Route::PLUGIN_MANAGER        => PluginManagerController::class,
            Route::CONFIG . '[/{id}]'    => ConfigController::class,
            Route::MARKDOWN              => MarkdownController::class,
            Route::EXPORT_QUEUE          => ExportQueueController::class,
            Route::PLUGIN . '/{id}'      => PluginController::class,
            Route::PREMIUM_PLUGIN        => PremiumPluginController::class,
            Route::SEARCHCONFIG          => SearchConfigController::class,
            Route::IO                    => IOController::class,
            Route::SEARCHRESULTS         => SearchController::class,
            Route::ELFINDER              => ElfinderController::class,
            Route::CODE                  => CodeController::class,
            Route::LOCALIZATION_CHECK    => LocalizationController::class,
            Route::API_KEY               => ApiKeyController::class,
            Route::REPORT                => ReportController::class,
            Route::REPORT_VIEW           => ReportViewController::class,
        ];
    }
}

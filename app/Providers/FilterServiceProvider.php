<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class FilterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       Blade::directive('firstFiveUpper',function($expression){
            return "<?php echo \App\Filters\CustomFilters::firstFiveUpper($expression); ?>";
       });
       Blade::directive('firstNUpper',function($expression){
            return "<?php echo \App\Filters\CustomFilters::firstNUpper($expression); ?>";
       });
       Blade::directive('lenthLimit',function($expression){
            return "<?php echo \App\Filters\CustomFilters::lenthLimit($expression); ?>";
       });
       Blade::directive('rating',function($expression){
            return "<?php echo \App\Filters\CustomFilters::rating($expression); ?>";
       });
       Blade::directive('convertNumberToWords',function($expression){
            return "<?php echo \App\Filters\CustomFilters::convertNumberToWords($expression); ?>";
       });
       Blade::directive('convertNumberToCurrency',function($expression){
            return "<?php echo \App\Filters\CustomFilters::convertNumberToCurrency($expression); ?>";
       });
    }
}

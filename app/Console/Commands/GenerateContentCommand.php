<?php

namespace App\Console\Commands;

use App\Events\ContentUpdated;
use Illuminate\Console\Command;

class GenerateContentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'content:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Stream sample output to the browser';

    protected $content = [
"'.env.example' -> '.env'
[32mInstalling dependencies from lock file (including require-dev)[39m
[32mVerifying lock file contents can be installed on current platform.[39m
",
"[32mPackage operations: 110 installs, 0 updates, 0 removals[39m
  - Installing [32mdoctrine/inflector[39m ([33m2.0.4[39m): Extracting archive
  - Installing [32mdoctrine/lexer[39m ([33m1.2.3[39m): Extracting archive
  - Installing [32msymfony/polyfill-ctype[39m ([33mv1.26.0[39m): Extracting archive
  - Installing [32mwebmozart/assert[39m ([33m1.11.0[39m): Extracting archive
  - Installing [32mdragonmantank/cron-expression[39m ([33mv3.3.1[39m): Extracting archive
  - Installing [32msymfony/deprecation-contracts[39m ([33mv3.1.1[39m): Extracting archive
  - Installing [32mpsr/container[39m ([33m2.0.2[39m): Extracting archive
  - Installing [32mfakerphp/faker[39m ([33mv1.20.0[39m): Extracting archive
  - Installing [32msymfony/polyfill-mbstring[39m ([33mv1.26.0[39m): Extracting archive
  - Installing [32msymfony/http-foundation[39m ([33mv6.1.2[39m): Extracting archive
  - Installing [32mfruitcake/php-cors[39m ([33mv1.2.0[39m): Extracting archive
  - Installing [32mpsr/http-message[39m ([33m1.0.1[39m): Extracting archive
  - Installing [32mpsr/http-client[39m ([33m1.0.1[39m): Extracting archive
  - Installing [32mralouphie/getallheaders[39m ([33m3.0.3[39m): Extracting archive
  - Installing [32mpsr/http-factory[39m ([33m1.0.1[39m): Extracting archive
",

"  - Installing [32mguzzlehttp/psr7[39m ([33m2.4.0[39m): Extracting archive
  - Installing [32mguzzlehttp/promises[39m ([33m1.5.1[39m): Extracting archive
  - Installing [32mguzzlehttp/guzzle[39m ([33m7.4.5[39m): Extracting archive
  - Installing [32mlaravel/pint[39m ([33mv1.0.0[39m): Extracting archive
  - Installing [32mvoku/portable-ascii[39m ([33m2.0.1[39m): Extracting archive
  - Installing [32msymfony/polyfill-php80[39m ([33mv1.26.0[39m): Extracting archive
  - Installing [32mphpoption/phpoption[39m ([33m1.8.1[39m): Extracting archive
  - Installing [32mgraham-campbell/result-type[39m ([33mv1.0.4[39m): Extracting archive
  - Installing [32mvlucas/phpdotenv[39m ([33mv5.4.1[39m): Extracting archive
  - Installing [32msymfony/css-selector[39m ([33mv6.1.0[39m): Extracting archive
  - Installing [32mtijsverkoyen/css-to-inline-styles[39m ([33m2.2.4[39m): Extracting archive
  - Installing [32msymfony/var-dumper[39m ([33mv6.1.0[39m): Extracting archive
  - Installing [32msymfony/routing[39m ([33mv6.1.1[39m): Extracting archive
  - Installing [32msymfony/process[39m ([33mv6.1.0[39m): Extracting archive
  - Installing [32msymfony/polyfill-php72[39m ([33mv1.26.0[39m): Extracting archive
  - Installing [32msymfony/polyfill-intl-normalizer[39m ([33mv1.26.0[39m): Extracting archive
",

"  - Installing [32msymfony/polyfill-intl-idn[39m ([33mv1.26.0[39m): Extracting archive
  - Installing [32msymfony/mime[39m ([33mv6.1.1[39m): Extracting archive
  - Installing [32msymfony/service-contracts[39m ([33mv3.1.1[39m): Extracting archive
  - Installing [32mpsr/event-dispatcher[39m ([33m1.0.0[39m): Extracting archive
  - Installing [32msymfony/event-dispatcher-contracts[39m ([33mv3.1.1[39m): Extracting archive
  - Installing [32msymfony/event-dispatcher[39m ([33mv6.1.0[39m): Extracting archive
  - Installing [32mpsr/log[39m ([33m3.0.0[39m): Extracting archive
  - Installing [32megulias/email-validator[39m ([33m3.2.1[39m): Extracting archive
  - Installing [32msymfony/mailer[39m ([33mv6.1.2[39m): Extracting archive
  - Installing [32msymfony/error-handler[39m ([33mv6.1.0[39m): Extracting archive
  - Installing [32msymfony/http-kernel[39m ([33mv6.1.2[39m): Extracting archive
  - Installing [32msymfony/finder[39m ([33mv6.1.0[39m): Extracting archive
  - Installing [32msymfony/polyfill-intl-grapheme[39m ([33mv1.26.0[39m): Extracting archive
  - Installing [32msymfony/string[39m ([33mv6.1.2[39m): Extracting archive
  - Installing [32msymfony/console[39m ([33mv6.1.2[39m): Extracting archive
  - Installing [32msymfony/polyfill-php81[39m ([33mv1.26.0[39m): Extracting archive
",

"  - Installing [32mramsey/collection[39m ([33m1.2.2[39m): Extracting archive
  - Installing [32mbrick/math[39m ([33m0.9.3[39m): Extracting archive
  - Installing [32mramsey/uuid[39m ([33m4.3.1[39m): Extracting archive
  - Installing [32mpsr/simple-cache[39m ([33m3.0.0[39m): Extracting archive
  - Installing [32mnunomaduro/termwind[39m ([33mv1.13.0[39m): Extracting archive
  - Installing [32msymfony/translation-contracts[39m ([33mv3.1.1[39m): Extracting archive
  - Installing [32msymfony/translation[39m ([33mv6.1.0[39m): Extracting archive
  - Installing [32mnesbot/carbon[39m ([33m2.59.1[39m): Extracting archive
  - Installing [32mmonolog/monolog[39m ([33m2.7.0[39m): Extracting archive
  - Installing [32mleague/mime-type-detection[39m ([33m1.11.0[39m): Extracting archive
  - Installing [32mleague/flysystem[39m ([33m3.1.1[39m): Extracting archive
  - Installing [32mnette/utils[39m ([33mv3.2.7[39m): Extracting archive
  - Installing [32mnette/schema[39m ([33mv1.2.2[39m): Extracting archive
  - Installing [32mdflydev/dot-access-data[39m ([33mv3.0.1[39m): Extracting archive
  - Installing [32mleague/config[39m ([33mv1.1.1[39m): Extracting archive
  - Installing [32mleague/commonmark[39m ([33m2.3.4[39m): Extracting archive
",

"  - Installing [32mlaravel/serializable-closure[39m ([33mv1.2.0[39m): Extracting archive
  - Installing [32mlaravel/framework[39m ([33mv9.21.3[39m): Extracting archive
  - Installing [32mlaravel/sail[39m ([33mv1.15.0[39m): Extracting archive
  - Installing [32mlaravel/sanctum[39m ([33mv2.15.1[39m): Extracting archive
  - Installing [32mnikic/php-parser[39m ([33mv4.14.0[39m): Extracting archive
  - Installing [32mpsy/psysh[39m ([33mv0.11.7[39m): Extracting archive
  - Installing [32mlaravel/tinker[39m ([33mv2.7.2[39m): Extracting archive
  - Installing [32mhamcrest/hamcrest-php[39m ([33mv2.0.1[39m): Extracting archive
  - Installing [32mmockery/mockery[39m ([33m1.5.0[39m): Extracting archive
  - Installing [32mfilp/whoops[39m ([33m2.14.5[39m): Extracting archive
  - Installing [32mfacade/ignition-contracts[39m ([33m1.0.2[39m): Extracting archive
  - Installing [32mnunomaduro/collision[39m ([33mv6.2.1[39m): Extracting archive
  - Installing [32mphpdocumentor/reflection-common[39m ([33m2.2.0[39m): Extracting archive
  - Installing [32mphpdocumentor/type-resolver[39m ([33m1.6.1[39m): Extracting archive
  - Installing [32mphpdocumentor/reflection-docblock[39m ([33m5.3.0[39m): Extracting archive
  - Installing [32msebastian/version[39m ([33m3.0.2[39m): Extracting archive
",

"  - Installing [32msebastian/type[39m ([33m3.0.0[39m): Extracting archive
  - Installing [32msebastian/resource-operations[39m ([33m3.0.3[39m): Extracting archive
  - Installing [32msebastian/recursion-context[39m ([33m4.0.4[39m): Extracting archive
  - Installing [32msebastian/object-reflector[39m ([33m2.0.4[39m): Extracting archive
  - Installing [32msebastian/object-enumerator[39m ([33m4.0.4[39m): Extracting archive
  - Installing [32msebastian/global-state[39m ([33m5.0.5[39m): Extracting archive
  - Installing [32msebastian/exporter[39m ([33m4.0.4[39m): Extracting archive
  - Installing [32msebastian/environment[39m ([33m5.1.4[39m): Extracting archive
  - Installing [32msebastian/diff[39m ([33m4.0.4[39m): Extracting archive
  - Installing [32msebastian/comparator[39m ([33m4.0.6[39m): Extracting archive
  - Installing [32msebastian/code-unit[39m ([33m1.0.8[39m): Extracting archive
  - Installing [32msebastian/cli-parser[39m ([33m1.0.1[39m): Extracting archive
  - Installing [32mphpunit/php-timer[39m ([33m5.0.3[39m): Extracting archive
  - Installing [32mphpunit/php-text-template[39m ([33m2.0.4[39m): Extracting archive
  - Installing [32mphpunit/php-invoker[39m ([33m3.1.1[39m): Extracting archive
  - Installing [32mphpunit/php-file-iterator[39m ([33m3.0.6[39m): Extracting archive
",

"  - Installing [32mtheseer/tokenizer[39m ([33m1.2.1[39m): Extracting archive
  - Installing [32msebastian/lines-of-code[39m ([33m1.0.3[39m): Extracting archive
  - Installing [32msebastian/complexity[39m ([33m2.0.2[39m): Extracting archive
  - Installing [32msebastian/code-unit-reverse-lookup[39m ([33m2.0.3[39m): Extracting archive
  - Installing [32mphpunit/php-code-coverage[39m ([33m9.2.15[39m): Extracting archive
  - Installing [32mdoctrine/instantiator[39m ([33m1.4.1[39m): Extracting archive
  - Installing [32mphpspec/prophecy[39m ([33mv1.15.0[39m): Extracting archive
  - Installing [32mphar-io/version[39m ([33m3.2.1[39m): Extracting archive
  - Installing [32mphar-io/manifest[39m ([33m2.0.3[39m): Extracting archive
  - Installing [32mmyclabs/deep-copy[39m ([33m1.11.0[39m): Extracting archive
  - Installing [32mphpunit/phpunit[39m ([33m9.5.21[39m): Extracting archive
  - Installing [32mspatie/backtrace[39m ([33m1.2.1[39m): Extracting archive
  - Installing [32mspatie/flare-client-php[39m ([33m1.2.0[39m): Extracting archive
  - Installing [32mspatie/ignition[39m ([33m1.3.1[39m): Extracting archive
  - Installing [32mspatie/laravel-ignition[39m ([33m1.3.1[39m): Extracting archive
",

"
[32mGenerating optimized autoload files[39m
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

  [37;44m INFO [39;49m Discovering packages.
",

"  laravel/sail [90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m [32;1mDONE[39;22m
  laravel/sanctum [90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m [32;1mDONE[39;22m
  laravel/tinker [90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m [32;1mDONE[39;22m
  nesbot/carbon [90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m [32;1mDONE[39;22m
  nunomaduro/collision [90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m [32;1mDONE[39;22m
  nunomaduro/termwind [90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m [32;1mDONE[39;22m
  spatie/laravel-ignition [90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m[90m.[39m [32;1mDONE[39;22m
",

"[32m79 packages you are using are looking for funding.[39m
[32mUse the `composer fund` command to find out more![39m

  [37;44m INFO [39;49m Application key set successfully.
"
    ];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        collect($this->content)->each(function($chunk) {
            ContentUpdated::dispatch($chunk);
            usleep(500000); // half second
        });

        return Command::SUCCESS;
    }
}

<?php return array (
  'admin' => 
  array (
    'domain' => NULL,
  ),
  'adsterra' => 
  array (
    'api_key' => NULL,
  ),
  'app' => 
  array (
    'server_ip' => '93.127.211.43',
    'name' => 'Laravel',
    'chat_access_key' => NULL,
    'chat_token_url' => NULL,
    'env' => 'debug',
    'domain' => 'localhost:4002',
    'debug' => true,
    'url' => 'https://localhost:4002',
    'asset_url' => NULL,
    'timezone' => 'Europe/Berlin',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:UlD1dVVj6LyQfq94cxIoaLBH4Sfal4n+x4f1AdHPEjI=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Bus\\BusServiceProvider',
      2 => 'Illuminate\\Cache\\CacheServiceProvider',
      3 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      4 => 'Illuminate\\Cookie\\CookieServiceProvider',
      5 => 'Illuminate\\Database\\DatabaseServiceProvider',
      6 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      7 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      8 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      9 => 'Illuminate\\Hashing\\HashServiceProvider',
      10 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      11 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      12 => 'Illuminate\\Queue\\QueueServiceProvider',
      13 => 'Illuminate\\Session\\SessionServiceProvider',
      14 => 'Illuminate\\Translation\\TranslationServiceProvider',
      15 => 'Illuminate\\Validation\\ValidationServiceProvider',
      16 => 'Illuminate\\View\\ViewServiceProvider',
      17 => 'Dev\\LaravelAssets\\Providers\\LaravelAssetsProvider',
      18 => 'Dev\\LaravelVue\\Providers\\LaravelVueProvider',
      19 => 'App\\Providers\\AppServiceProvider',
      20 => 'App\\Providers\\EventServiceProvider',
      21 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'user',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'user' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'customer' => 
      array (
        'driver' => 'session',
        'provider' => 'customers',
      ),
      'employee' => 
      array (
        'driver' => 'session',
        'provider' => 'employees',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
      'customers' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Customer',
      ),
      'employees' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Employee',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
      'customers' => 
      array (
        'provider' => 'customers',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
      'employees' => 
      array (
        'provider' => 'employees',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'cache' => 
  array (
    'default' => 'database',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/var/www/html/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cloudlfare' => 
  array (
    'api_key' => 'SbbCrlq-w4t9afW7jNvX6El5N4lDhyG14G2wFOnw',
    'api_email' => 'elifg5039@gmail.com',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'test',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'mysql',
        'port' => '3306',
        'database' => 'test',
        'username' => 'test',
        'password' => 'test',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'mysql',
        'port' => '3306',
        'database' => 'test',
        'username' => 'test',
        'password' => 'test',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'mysql',
        'port' => '3306',
        'database' => 'test',
        'username' => 'test',
        'password' => 'test',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'dev' => 
  array (
    'user_mail' => 'user@user.com',
    'sub_domain' => NULL,
    'log_enabled' => false,
  ),
  'fast' => 
  array (
    'enabled' => true,
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app/public',
        'url' => 'https://localhost:4002/storage',
        'visibility' => 'public',
      ),
      'private' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app/private',
        'visibility' => 'private',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
      ),
    ),
    'links' => 
    array (
      '/var/www/html/public/storage' => '/var/www/html/storage/app/public',
    ),
  ),
  'google' => 
  array (
    'enabled' => false,
    'client_credentials' => '/var/www/html/storage/app/private/global/google-credentials.json',
    'client_id' => NULL,
  ),
  'google-fonts' => 
  array (
    'fonts' => 
    array (
      'default' => 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',
      'roboto' => 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',
    ),
    'disk' => 'public',
    'path' => 'fonts',
    'inline' => false,
    'fallback' => false,
    'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15',
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'light' => 
  array (
    'enabled' => true,
  ),
  'location_england' => 
  array (
    'bath' => 
    array (
    ),
    'birmingham' => 
    array (
    ),
    'bradford' => 
    array (
    ),
    'brighton_hove' => 
    array (
    ),
    'bristol' => 
    array (
    ),
    'cambridge' => 
    array (
    ),
    'canterbury' => 
    array (
    ),
    'carlisle' => 
    array (
    ),
    'chelmsford' => 
    array (
    ),
    'chester' => 
    array (
    ),
    'chichester' => 
    array (
    ),
    'colchester' => 
    array (
    ),
    'coventry' => 
    array (
    ),
    'derby' => 
    array (
    ),
    'doncaster' => 
    array (
    ),
    'durham' => 
    array (
    ),
    'ely' => 
    array (
    ),
    'exeter' => 
    array (
    ),
    'gloucester' => 
    array (
    ),
    'hereford' => 
    array (
    ),
    'kingston_upon_hull' => 
    array (
    ),
    'lancaster' => 
    array (
    ),
    'leeds' => 
    array (
    ),
    'leicester' => 
    array (
    ),
    'lichfield' => 
    array (
    ),
    'lincoln' => 
    array (
    ),
    'liverpool' => 
    array (
    ),
    'london' => 
    array (
    ),
    'manchester' => 
    array (
    ),
    'milton_keynes' => 
    array (
    ),
    'newcastle_upon_tyne' => 
    array (
    ),
    'norwich' => 
    array (
    ),
    'nottingham' => 
    array (
    ),
    'oxford' => 
    array (
    ),
    'peterborough' => 
    array (
    ),
    'plymouth' => 
    array (
    ),
    'portsmouth' => 
    array (
    ),
    'preston' => 
    array (
    ),
    'ripon' => 
    array (
    ),
    'salford' => 
    array (
    ),
    'salisbury' => 
    array (
    ),
    'sheffield' => 
    array (
    ),
    'southampton' => 
    array (
    ),
    'southend_on_sea' => 
    array (
    ),
    'st_albans' => 
    array (
    ),
    'stoke_on_trent' => 
    array (
    ),
    'sunderland' => 
    array (
    ),
    'truro' => 
    array (
    ),
    'wakefield' => 
    array (
    ),
    'wells' => 
    array (
    ),
    'westminster' => 
    array (
    ),
    'winchester' => 
    array (
    ),
    'wolverhampton' => 
    array (
    ),
    'worcester' => 
    array (
    ),
    'york' => 
    array (
    ),
  ),
  'location_germany' => 
  array (
    'aachen' => 
    array (
    ),
    'augsburg' => 
    array (
    ),
    'bergisch_gladbach' => 
    array (
    ),
    'berlin' => 
    array (
    ),
    'bielefeld' => 
    array (
    ),
    'bochum' => 
    array (
    ),
    'bonn' => 
    array (
    ),
    'bottrop' => 
    array (
    ),
    'braunschweig' => 
    array (
    ),
    'bremen' => 
    array (
    ),
    'bremerhaven' => 
    array (
    ),
    'chemnitz' => 
    array (
    ),
    'cologne' => 
    array (
    ),
    'darmstadt' => 
    array (
    ),
    'dortmund' => 
    array (
    ),
    'dresden' => 
    array (
    ),
    'duisburg' => 
    array (
    ),
    'dusseldorf' => 
    array (
    ),
    'erfurt' => 
    array (
    ),
    'erlangen' => 
    array (
    ),
    'essen' => 
    array (
    ),
    'frankfurt_am_main' => 
    array (
    ),
    'freiburg_im_breisgau' => 
    array (
    ),
    'furth' => 
    array (
    ),
    'gelsenkirchen' => 
    array (
    ),
    'gottingen' => 
    array (
    ),
    'gutersloh' => 
    array (
    ),
    'hagen' => 
    array (
    ),
    'halle_saale' => 
    array (
    ),
    'hamburg' => 
    array (
    ),
    'hamm' => 
    array (
    ),
    'hanover' => 
    array (
    ),
    'heidelberg' => 
    array (
    ),
    'heilbronn' => 
    array (
    ),
    'herne' => 
    array (
    ),
    'hildesheim' => 
    array (
    ),
    'ingolstadt' => 
    array (
    ),
    'jena' => 
    array (
    ),
    'karlsruhe' => 
    array (
    ),
    'kassel' => 
    array (
    ),
    'kiel' => 
    array (
    ),
    'koblenz' => 
    array (
    ),
    'krefeld' => 
    array (
    ),
    'leipzig' => 
    array (
    ),
    'leverkusen' => 
    array (
    ),
    'lubeck' => 
    array (
    ),
    'ludwigshafen_am_rhein' => 
    array (
    ),
    'magdeburg' => 
    array (
    ),
    'mainz' => 
    array (
    ),
    'mannheim' => 
    array (
    ),
    'moers' => 
    array (
    ),
    'monchengladbach' => 
    array (
    ),
    'mulheim_an_der_ruhr' => 
    array (
    ),
    'munich' => 
    array (
    ),
    'munster' => 
    array (
    ),
    'neuss' => 
    array (
    ),
    'nuremberg' => 
    array (
    ),
    'oberhausen' => 
    array (
    ),
    'offenbach_am_main' => 
    array (
    ),
    'oldenburg' => 
    array (
    ),
    'osnabruck' => 
    array (
    ),
    'paderborn' => 
    array (
    ),
    'pforzheim' => 
    array (
    ),
    'potsdam' => 
    array (
    ),
    'recklinghausen' => 
    array (
    ),
    'regensburg' => 
    array (
    ),
    'remscheid' => 
    array (
    ),
    'reutlingen' => 
    array (
    ),
    'rostock' => 
    array (
    ),
    'saarbrucken' => 
    array (
    ),
    'salzgitter' => 
    array (
    ),
    'siegen' => 
    array (
    ),
    'solingen' => 
    array (
    ),
    'stuttgart' => 
    array (
    ),
    'trier' => 
    array (
    ),
    'ulm' => 
    array (
    ),
    'wiesbaden' => 
    array (
    ),
    'wolfsburg' => 
    array (
    ),
    'wuppertal' => 
    array (
    ),
    'wurzburg' => 
    array (
    ),
  ),
  'location_malta' => 
  array (
    'birgu' => 
    array (
    ),
    'bormla' => 
    array (
    ),
    'mdina' => 
    array (
    ),
    'qormi' => 
    array (
    ),
    'rabat' => 
    array (
    ),
    'senglea' => 
    array (
    ),
    'siggiewi' => 
    array (
    ),
    'valletta' => 
    array (
    ),
    'zabbar' => 
    array (
    ),
    'zebbug' => 
    array (
    ),
    'zejtun' => 
    array (
    ),
  ),
  'location_turkey' => 
  array (
    'ankara' => 
    array (
      0 => 'akyurt',
      1 => 'altindag',
      2 => 'ayas',
      3 => 'bala',
      4 => 'beypazari',
      5 => 'camlidere',
      6 => 'cankaya',
      7 => 'cubuk',
      8 => 'elmadag',
      9 => 'etimesgut',
      10 => 'evren',
      11 => 'golbasi',
      12 => 'gudul',
      13 => 'haymana',
      14 => 'kahramankazan',
      15 => 'kalecik',
      16 => 'kecioren',
      17 => 'kizilay',
      18 => 'kizilcahamam',
      19 => 'mamak',
      20 => 'nallihan',
      21 => 'polatli',
      22 => 'pursaklar',
      23 => 'sincan',
      24 => 'sereflikochisar',
      25 => 'yenimahalle',
    ),
    'adana' => 
    array (
      0 => 'ceyhan',
      1 => 'cukurova',
      2 => 'kozan',
      3 => 'pozanti',
      4 => 'saricam',
      5 => 'yuregir',
    ),
    'adiyaman' => 
    array (
      0 => 'golbasi',
      1 => 'kahta',
      2 => 'besni',
      3 => 'samsat',
    ),
    'afyon' => 
    array (
      0 => 'bolvadin',
      1 => 'dinar',
      2 => 'sandikli',
      3 => 'dazkiri',
      4 => 'emirdag',
      5 => 'erenler',
      6 => 'sinanpasa',
    ),
    'agri' => 
    array (
      0 => 'dogubayazit',
      1 => 'hamur',
      2 => 'diyadin',
      3 => 'patnos',
      4 => 'tutak',
      5 => 'taslicay',
    ),
    'amasya' => 
    array (
      0 => 'merzifon',
      1 => 'suluova',
      2 => 'tasova',
      3 => 'goynucek',
      4 => 'gumushacikoy',
    ),
    'antalya' => 
    array (
      0 => 'akseki',
      1 => 'alanya',
      2 => 'elmali',
      3 => 'finike',
      4 => 'gazipasa',
      5 => 'gundogmus',
      6 => 'ibradi',
      7 => 'demre',
      8 => 'kas',
      9 => 'kemer',
      10 => 'korkuteli',
      11 => 'kumluca',
      12 => 'manavgat',
      13 => 'serik',
      14 => 'muratpasa',
      15 => 'konyaalti',
      16 => 'aksu',
      17 => 'dosemealti',
      18 => 'kepez',
    ),
    'artvin' => 
    array (
      0 => 'ardanuc',
      1 => 'arhavi',
      2 => 'borcka',
      3 => 'hopa',
      4 => 'kemalpasa',
      5 => 'murgul',
      6 => 'savsat',
      7 => 'yusufeli',
    ),
    'aydin' => 
    array (
      0 => 'bozdogan',
      1 => 'buharkent',
      2 => 'cine',
      3 => 'didim',
      4 => 'germencik',
      5 => 'incirliova',
      6 => 'karacasu',
      7 => 'karpuzlu',
      8 => 'kocarli',
      9 => 'kosk',
      10 => 'kusadasi',
      11 => 'kuyucak',
      12 => 'nazilli',
      13 => 'soke',
      14 => 'sultanhisar',
      15 => 'yenipazar',
    ),
    'balikesir' => 
    array (
      0 => 'altieylul',
      1 => 'karesi',
      2 => 'ayvalik',
      3 => 'balya',
      4 => 'bandirma',
      5 => 'bigadic',
    ),
    'bartin' => 
    array (
      0 => 'amasra',
      1 => 'kurucasile',
      2 => 'ulus',
    ),
    'batman' => 
    array (
      0 => 'besiri',
      1 => 'gercus',
      2 => 'hasankeyif',
      3 => 'kozluk',
      4 => 'sason',
    ),
    'bayburt' => 
    array (
      0 => 'aydintepe',
      1 => 'demirozu',
    ),
    'bilecik' => 
    array (
      0 => 'bozuyuk',
      1 => 'golpazari',
      2 => 'inhisar',
      3 => 'osmaneli',
      4 => 'pazaryeri',
      5 => 'sogut',
      6 => 'yenipazar',
    ),
    'bingol' => 
    array (
      0 => 'adakli',
      1 => 'genc',
      2 => 'karliova',
      3 => 'kigi',
      4 => 'solhan',
      5 => 'yayladere',
      6 => 'yedisu',
    ),
    'bitlis' => 
    array (
      0 => 'adilcevaz',
      1 => 'ahlat',
      2 => 'guroymak',
      3 => 'hizan',
      4 => 'mutki',
      5 => 'tatvan',
    ),
    'bolu' => 
    array (
      0 => 'dortdivan',
      1 => 'gerede',
      2 => 'goynuk',
      3 => 'kibriscik',
      4 => 'mengen',
      5 => 'mudurnu',
      6 => 'seben',
      7 => 'yenicaga',
    ),
    'burdur' => 
    array (
      0 => 'aglasun',
      1 => 'altinyayla',
      2 => 'bucak',
      3 => 'cavdir',
      4 => 'celtikci',
      5 => 'golhisar',
      6 => 'karamanli',
      7 => 'kemer',
      8 => 'tefenni',
      9 => 'yesilova',
    ),
    'bursa' => 
    array (
      0 => 'buyukorhan',
      1 => 'gemlik',
      2 => 'gursu',
      3 => 'harmancik',
      4 => 'inegol',
      5 => 'iznik',
      6 => 'karacabey',
      7 => 'keles',
      8 => 'mudanya',
      9 => 'mustafakemalpasa',
      10 => 'nilufer',
      11 => 'orhaneli',
      12 => 'orhangazi',
      13 => 'osmangazi',
      14 => 'yenisehir',
      15 => 'yildirim',
    ),
    'canakkale' => 
    array (
      0 => 'ayvacik',
      1 => 'bayramic',
      2 => 'biga',
      3 => 'bozcaada',
      4 => 'can',
      5 => 'eceabat',
      6 => 'ezine',
      7 => 'gelibolu',
      8 => 'gokceada',
      9 => 'lapseki',
      10 => 'yenice',
    ),
    'cankiri' => 
    array (
      0 => 'atkaracalar',
      1 => 'bayramoren',
      2 => 'cerkes',
      3 => 'eldivan',
      4 => 'ilgaz',
      5 => 'kizilirmak',
      6 => 'korgun',
      7 => 'kursunlu',
      8 => 'orta',
      9 => 'sabanozu',
      10 => 'yaprakli',
    ),
    'corum' => 
    array (
      0 => 'alaca',
      1 => 'bayat',
      2 => 'bogazkale',
      3 => 'dodurga',
      4 => 'iskilip',
      5 => 'kargi',
      6 => 'lacin',
      7 => 'mecitozu',
      8 => 'oguzlar',
      9 => 'ortakoy',
      10 => 'osmancik',
      11 => 'sungurlu',
      12 => 'ugurludag',
    ),
    'diyarbakir' => 
    array (
      0 => 'baglar',
      1 => 'bismil',
      2 => 'cermik',
      3 => 'cinar',
      4 => 'cungus',
      5 => 'dicle',
      6 => 'egil',
      7 => 'ergani',
      8 => 'hani',
      9 => 'hazro',
      10 => 'kayapinar',
      11 => 'kocakoy',
      12 => 'kulp',
      13 => 'lice',
      14 => 'silvan',
      15 => 'sur',
      16 => 'yenisehir',
    ),
    'duzce' => 
    array (
      0 => 'akcakoca',
      1 => 'cumayeri',
      2 => 'cilimli',
      3 => 'golyaka',
      4 => 'gumusova',
      5 => 'kaynasli',
      6 => 'yigilca',
    ),
    'edirne' => 
    array (
      0 => 'enez',
      1 => 'havsa',
      2 => 'ipsala',
      3 => 'kesan',
      4 => 'lalapasa',
      5 => 'meric',
      6 => 'suloglu',
      7 => 'uzunkopru',
    ),
    'elazig' => 
    array (
      0 => 'agin',
      1 => 'alacakaya',
      2 => 'aricak',
      3 => 'baskil',
      4 => 'karakocan',
      5 => 'keban',
      6 => 'kovancilar',
      7 => 'maden',
      8 => 'palu',
      9 => 'sivrice',
    ),
    'erzincan' => 
    array (
      0 => 'cayirli',
      1 => 'ilic',
      2 => 'kemah',
      3 => 'kemaliye',
      4 => 'otlukbeli',
      5 => 'refahiye',
      6 => 'tercan',
      7 => 'uzumlu',
    ),
    'erzurum' => 
    array (
      0 => 'askale',
      1 => 'aziziye',
      2 => 'cat',
      3 => 'hinis',
      4 => 'horasan',
      5 => 'ispir',
      6 => 'uzumlu',
      7 => 'karacoban',
      8 => 'karayazi',
      9 => 'koprukoy',
      10 => 'narman',
      11 => 'oltu',
      12 => 'olur',
      13 => 'palandoken',
      14 => 'pasinler',
      15 => 'pazaryolu',
      16 => 'senkaya',
      17 => 'tekman',
      18 => 'tortum',
      19 => 'uzundere',
      20 => 'yakutiye',
    ),
    'eskisehir' => 
    array (
      0 => 'alpu',
      1 => 'beylikova',
      2 => 'cifteler',
      3 => 'gunyuzu',
      4 => 'han',
      5 => 'inonu',
      6 => 'mahmudiye',
      7 => 'mihaliccik',
      8 => 'odunpazari',
      9 => 'saricakaya',
      10 => 'seyitgazi',
      11 => 'sivrihisar',
      12 => 'tepebasi',
    ),
    'gaziantep' => 
    array (
      0 => 'araban',
      1 => 'islahiye',
      2 => 'karkamis',
      3 => 'nizip',
      4 => 'nurdagi',
      5 => 'oguzeli',
      6 => 'sahinbey',
      7 => 'sehitkamil',
      8 => 'yavuzeli',
    ),
    'giresun' => 
    array (
      0 => 'alucra',
      1 => 'bulancak',
      2 => 'camoluk',
      3 => 'dereli',
      4 => 'dogankent',
      5 => 'espiye',
      6 => 'eynesil',
      7 => 'gorele',
      8 => 'guce',
      9 => 'kesap',
      10 => 'piraziz',
      11 => 'sebinkarahisar',
      12 => 'tirebolu',
      13 => 'yaglidere',
    ),
    'gumushane' => 
    array (
      0 => 'kelkit',
      1 => 'kose',
      2 => 'kurtun',
      3 => 'siran',
      4 => 'torul',
    ),
    'hakkari' => 
    array (
      0 => 'cukurca',
      1 => 'derecik',
      2 => 'semdinli',
      3 => 'yuksekova',
    ),
    'hatay' => 
    array (
      0 => 'altinozu',
      1 => 'antakya',
      2 => 'arsuz',
      3 => 'belen',
      4 => 'defne',
      5 => 'dortyol',
      6 => 'erzin',
      7 => 'hassa',
      8 => 'iskenderun',
      9 => 'kirikhan',
      10 => 'kumlu',
      11 => 'payas',
      12 => 'reyhanli',
      13 => 'samandag',
      14 => 'yayladagi',
    ),
    'igdir' => 
    array (
      0 => 'aralik',
      1 => 'karakoyunlu',
      2 => 'tuzluca',
    ),
    'isparta' => 
    array (
      0 => 'aksu',
      1 => 'atabey',
      2 => 'egirdir',
      3 => 'gelendost',
      4 => 'gonen',
      5 => 'keciborlu',
      6 => 'senirkent',
      7 => 'sutculer',
      8 => 'sarkikaraagac',
      9 => 'uluborlu',
      10 => 'yalvac',
      11 => 'yenisarbademli',
    ),
    'istanbul' => 
    array (
      0 => 'adalar',
      1 => 'arnavutkoy',
      2 => 'atasehir',
      3 => 'avcilar',
      4 => 'bagcilar',
      5 => 'bahcelievler',
      6 => 'bakirkoy',
      7 => 'basaksehir',
      8 => 'bayrampasa',
      9 => 'besiktas',
      10 => 'beykoz',
      11 => 'beylikduzu',
      12 => 'beyoglu',
      13 => 'buyukcekmece',
      14 => 'catalca',
      15 => 'cekmekoy',
      16 => 'esenler',
      17 => 'esenyurt',
      18 => 'eyupsultan',
      19 => 'fatih',
      20 => 'gaziosmanpasa',
      21 => 'gungoren',
      22 => 'kadikoy',
      23 => 'kagithane',
      24 => 'kartal',
      25 => 'kucukcekmece',
      26 => 'maltepe',
      27 => 'pendik',
      28 => 'sancaktepe',
      29 => 'sariyer',
      30 => 'silivri',
      31 => 'sultanbeyli',
      32 => 'sultangazi',
      33 => 'sile',
      34 => 'sisli',
      35 => 'tuzla',
      36 => 'umraniye',
      37 => 'uskudar',
      38 => 'zeytinburnu',
    ),
    'izmir' => 
    array (
      0 => 'aliaga',
      1 => 'balcova',
      2 => 'bayindir',
      3 => 'bayrakli',
      4 => 'bergama',
      5 => 'beydag',
      6 => 'bornova',
      7 => 'buca',
      8 => 'cesme',
      9 => 'cigli',
      10 => 'dikili',
      11 => 'foca',
      12 => 'gaziemir',
      13 => 'guzelbahce',
      14 => 'karabaglar',
      15 => 'karaburun',
      16 => 'karsiyaka',
      17 => 'kemalpasa',
      18 => 'kinik',
      19 => 'kiraz',
      20 => 'konak',
      21 => 'menederes',
      22 => 'menemen',
      23 => 'narlidere',
      24 => 'odemis',
      25 => 'seferihisar',
      26 => 'selcuk',
      27 => 'tire',
      28 => 'torbali',
      29 => 'urla',
    ),
    'kahramanmaras' => 
    array (
      0 => 'afsin',
      1 => 'andirin',
      2 => 'caglayancerit',
      3 => 'dulkadiroglu',
      4 => 'ekinozu',
      5 => 'elbistan',
      6 => 'goksun',
      7 => 'nurhak',
      8 => 'onikisubat',
      9 => 'pazarcik',
      10 => 'turkoglu',
    ),
    'karabuk' => 
    array (
      0 => 'elfani',
      1 => 'eskipazar',
      2 => 'ovacik',
      3 => 'safranbolu',
      4 => 'yenice',
    ),
    'karaman' => 
    array (
      0 => 'ayranci',
      1 => 'basyayla',
      2 => 'ermenek',
      3 => 'kazimkarabekir',
      4 => 'sariveliler',
    ),
    'kars' => 
    array (
      0 => 'akyaka',
      1 => 'arpacay',
      2 => 'digor',
      3 => 'kagizman',
      4 => 'sarikamis',
      5 => 'selim',
      6 => 'susuz',
    ),
    'kastamonu' => 
    array (
      0 => 'abana',
      1 => 'agli',
      2 => 'arac',
      3 => 'azdavay',
      4 => 'bozkurt',
      5 => 'cide',
      6 => 'catalzeytin',
      7 => 'daday',
      8 => 'devrekani',
      9 => 'doganyurt',
      10 => 'hanonu',
      11 => 'ihsangazi',
      12 => 'inebolu',
      13 => 'kure',
      14 => 'pinarbasi',
      15 => 'seydiler',
      16 => 'senpazar',
      17 => 'taskopru',
      18 => 'tosya',
    ),
    'kayseri' => 
    array (
      0 => 'akkisla',
      1 => 'bunyan',
      2 => 'develi',
      3 => 'felahiye',
      4 => 'hacilar',
      5 => 'incesu',
      6 => 'kocasinan',
      7 => 'melikgazi',
      8 => 'ozvatan',
      9 => 'pinarbasi',
      10 => 'sarioglan',
      11 => 'sariz',
      12 => 'talas',
      13 => 'tomarza',
      14 => 'yahyali',
      15 => 'yesilhisar',
    ),
    'kirikkale' => 
    array (
      0 => 'bahsili',
      1 => 'baliseyh',
      2 => 'celebi',
      3 => 'delice',
      4 => 'karakecili',
      5 => 'keskin',
      6 => 'sulakyurt',
      7 => 'yahsihan',
    ),
    'kirsehir' => 
    array (
      0 => 'akcakent',
      1 => 'akpinar',
      2 => 'boztepe',
      3 => 'cicekdagi',
      4 => 'kaman',
      5 => 'mucur',
    ),
    'kilis' => 
    array (
      0 => 'elbeyli',
      1 => 'musabeyli',
      2 => 'polateli',
    ),
    'kocaeli' => 
    array (
      0 => 'basiskele',
      1 => 'cayirova',
      2 => 'darica',
      3 => 'derince',
      4 => 'dilovasi',
      5 => 'gebze',
      6 => 'golcuk',
      7 => 'izmit',
      8 => 'kandira',
      9 => 'karamursel',
      10 => 'kartepe',
      11 => 'korfez',
    ),
    'konya' => 
    array (
      0 => 'ahirli',
      1 => 'akoren',
      2 => 'aksehir',
      3 => 'altinekin',
      4 => 'beysehir',
      5 => 'bozkir',
      6 => 'cihanbeyli',
      7 => 'celtik',
      8 => 'cumra',
      9 => 'derbent',
      10 => 'derebucak',
      11 => 'doganhisar',
      12 => 'emirgazi',
      13 => 'eregli',
      14 => 'guneysinir',
      15 => 'hadim',
      16 => 'halkapinar',
      17 => 'huyuk',
      18 => 'ilgin',
      19 => 'kadinhani',
      20 => 'karapinar',
      21 => 'karatay',
      22 => 'kulu',
      23 => 'meram',
      24 => 'sarayonu',
      25 => 'selcuklu',
      26 => 'seydisehir',
      27 => 'taskent',
      28 => 'tuzlukcu',
      29 => 'yalihuyuk',
      30 => 'yunak',
    ),
    'kutahya' => 
    array (
      0 => 'altintas',
      1 => 'aslanapa',
      2 => 'cavdarhisar',
      3 => 'domanic',
      4 => 'ement',
      5 => 'gediz',
      6 => 'hisarcik',
      7 => 'pazarlar',
      8 => 'simav',
      9 => 'saphane',
      10 => 'tavsanli',
    ),
    'malatya' => 
    array (
      0 => 'akcadag',
      1 => 'arapgir',
      2 => 'arguvan',
      3 => 'battalgazi',
      4 => 'darende',
      5 => 'dogansehir',
      6 => 'doganyol',
      7 => 'hekimhan',
      8 => 'kale',
      9 => 'kuluncak',
      10 => 'puturge',
      11 => 'yazihan',
      12 => 'yesilyurt',
    ),
    'manisa' => 
    array (
      0 => 'ahmetli',
      1 => 'akhisar',
      2 => 'alasehir',
      3 => 'demirci',
      4 => 'golmarmara',
      5 => 'gordes',
      6 => 'kirkagac',
      7 => 'kula',
      8 => 'salihli',
      9 => 'sarigol',
      10 => 'saruhanli',
      11 => 'selendi',
      12 => 'soma',
      13 => 'sehzadeler',
      14 => 'turgutlu',
      15 => 'yunusemre',
    ),
    'mardin' => 
    array (
      0 => 'artuklu',
      1 => 'dargecit',
      2 => 'derik',
      3 => 'kiziltepe',
      4 => 'miizidagi',
      5 => 'midyat',
      6 => 'nusaybin',
      7 => 'omerli',
      8 => 'savur',
      9 => 'yesilli',
    ),
    'mersin' => 
    array (
      0 => 'akdeniz',
      1 => 'anamur',
      2 => 'aydincik',
      3 => 'bozyazi',
      4 => 'camliyayla',
      5 => 'erdemli',
      6 => 'gulnar',
      7 => 'mezitli',
      8 => 'mut',
      9 => 'silifke',
      10 => 'tarsus',
      11 => 'toroslar',
      12 => 'yenisehir',
    ),
    'mugla' => 
    array (
      0 => 'bodrum',
      1 => 'dalaman',
      2 => 'datca',
      3 => 'fethiye',
      4 => 'kavaklidere',
      5 => 'koycegiz',
      6 => 'marmaris',
      7 => 'mentese',
      8 => 'milas',
      9 => 'ortaca',
      10 => 'seydikemer',
      11 => 'ula',
      12 => 'yatagan',
    ),
    'mus' => 
    array (
      0 => 'bulanik',
      1 => 'haskoy',
      2 => 'korkut',
      3 => 'malazgirt',
      4 => 'varto',
    ),
    'nevsehir' => 
    array (
      0 => 'acigol',
      1 => 'avanos',
      2 => 'derinkuyu',
      3 => 'gulsehir',
      4 => 'hacibektas',
      5 => 'kozakli',
      6 => 'urgup',
    ),
    'nigde' => 
    array (
      0 => 'altunhisar',
      1 => 'bor',
      2 => 'camardi',
      3 => 'ciftlik',
      4 => 'ulukisla',
    ),
    'ordu' => 
    array (
      0 => 'akkus',
      1 => 'altinordu',
      2 => 'aybasti',
      3 => 'camas',
      4 => 'catalpinar',
      5 => 'caybasi',
      6 => 'fatsa',
      7 => 'golkoy',
      8 => 'gulyali',
      9 => 'gurgentepe',
      10 => 'ikizce',
      11 => 'kabaduz',
      12 => 'kabatas',
      13 => 'korgan',
      14 => 'kumru',
      15 => 'mesudiye',
      16 => 'persembe',
      17 => 'ulubey',
      18 => 'unye',
    ),
    'osmaniye' => 
    array (
      0 => 'bahce',
      1 => 'duzici',
      2 => 'hasanbeyli',
      3 => 'kadirli',
      4 => 'sumbas',
      5 => 'toprakkale',
    ),
    'rize' => 
    array (
      0 => 'ardesen',
      1 => 'camlihemsin',
      2 => 'cayeli',
      3 => 'derepazan',
      4 => 'findikli',
      5 => 'guneysu',
      6 => 'hemsin',
      7 => 'ikizdere',
      8 => 'iyidere',
      9 => 'kalkandere',
      10 => 'pazar',
    ),
    'sakarya' => 
    array (
      0 => 'adapazari',
      1 => 'akyazi',
      2 => 'arifiye',
      3 => 'erenler',
      4 => 'ferizli',
      5 => 'geyve',
      6 => 'hendek',
      7 => 'karapurcek',
      8 => 'karasu',
      9 => 'kaynarca',
      10 => 'kocaali',
      11 => 'pamukova',
      12 => 'sapanca',
      13 => 'serdivan',
      14 => 'sogutlu',
      15 => 'tarakli',
    ),
    'samsun' => 
    array (
      0 => 'alacam',
      1 => 'asarcik',
      2 => 'atakum',
      3 => 'ayvacik',
      4 => 'bafra',
      5 => 'canik',
      6 => 'carsamba',
      7 => 'havza',
      8 => 'ilkadim',
      9 => 'kavak',
      10 => 'ladik',
      11 => 'ondokuzmayis',
      12 => 'salipazari',
      13 => 'tekkekoy',
      14 => 'terme',
      15 => 'vezirkopru',
      16 => 'yakakent',
    ),
    'siirt' => 
    array (
      0 => 'baykan',
      1 => 'eruh',
      2 => 'kurtalan',
      3 => 'pervari',
      4 => 'sirvan',
      5 => 'tillo',
    ),
    'sinop' => 
    array (
      0 => 'ayancik',
      1 => 'boyabat',
      2 => 'dikmen',
      3 => 'duragan',
      4 => 'erfelek',
      5 => 'gerze',
      6 => 'sarayduzu',
      7 => 'turkeli',
    ),
    'sivas' => 
    array (
      0 => 'akincilar',
      1 => 'altinyayla',
      2 => 'divrigi',
      3 => 'digansar',
      4 => 'gemerek',
      5 => 'golova',
      6 => 'hafik',
      7 => 'imranli',
      8 => 'kangal',
      9 => 'koyulhisar',
      10 => 'susehir',
      11 => 'sarkisla',
      12 => 'ulas',
      13 => 'yildizeli',
      14 => 'zara',
    ),
    'sanliurfa' => 
    array (
      0 => 'akcakale',
      1 => 'birecik',
      2 => 'ceylanpinar',
      3 => 'eyyubiye',
      4 => 'halfeti',
      5 => 'haliliye',
      6 => 'harran',
      7 => 'hilvan',
      8 => 'karakopru',
      9 => 'siverek',
      10 => 'suruc',
      11 => 'virasehir',
    ),
    'sirnak' => 
    array (
      0 => 'beytussebap',
      1 => 'cizre',
      2 => 'guclukonak',
      3 => 'idil',
      4 => 'silopi',
      5 => 'uludere',
    ),
    'tekirdag' => 
    array (
      0 => 'cerezkoy',
      1 => 'corlu',
      2 => 'ergene',
      3 => 'hayrabolu',
      4 => 'kapakli',
      5 => 'malkara',
      6 => 'mereglisi',
      7 => 'muratli',
      8 => 'saray',
      9 => 'suleymanpasa',
      10 => 'sarkoy',
    ),
    'tokat' => 
    array (
      0 => 'almus',
      1 => 'artova',
      2 => 'basciftlik',
      3 => 'erbaa',
      4 => 'niksar',
      5 => 'pazar',
      6 => 'resadiye',
      7 => 'sulusaray',
      8 => 'turhal',
      9 => 'yesilyurt',
      10 => 'zile',
    ),
    'trabzon' => 
    array (
      0 => 'akcaabat',
      1 => 'arakli',
      2 => 'arsin',
      3 => 'besikduzu',
      4 => 'carsibasi',
      5 => 'caykara',
      6 => 'dernekpazari',
      7 => 'duzkoy',
      8 => 'hayrat',
      9 => 'koprubasi',
      10 => 'macka',
      11 => 'of',
      12 => 'ortahisar',
      13 => 'surmene',
      14 => 'salpazari',
      15 => 'tonya',
      16 => 'vakfikebir',
      17 => 'yomra',
    ),
    'tunceli' => 
    array (
      0 => 'cemisgezek',
      1 => 'hozat',
      2 => 'mazgrit',
      3 => 'nazimiye',
      4 => 'ovacik',
      5 => 'pertek',
      6 => 'pulumur',
    ),
    'usak' => 
    array (
      0 => 'banaz',
      1 => 'esma',
      2 => 'karahalli',
      3 => 'sivasli',
      4 => 'ulubey',
    ),
    'van' => 
    array (
      0 => 'bahcesaray',
      1 => 'basakale',
      2 => 'caldiran',
      3 => 'catak',
      4 => 'edremit',
      5 => 'ercis',
      6 => 'gevas',
      7 => 'gulpinar',
      8 => 'ipekyolu',
      9 => 'muradiye',
      10 => 'ozalp',
      11 => 'saray',
      12 => 'tusba',
    ),
    'yalova' => 
    array (
      0 => 'altinova',
      1 => 'armutlu',
      2 => 'cinarcik',
      3 => 'ciftlikkoy',
      4 => 'termal',
    ),
    'yozgat' => 
    array (
      0 => 'akdagmadeni',
      1 => 'aydincik',
      2 => 'bogazliyan',
      3 => 'candir',
      4 => 'cayiralan',
      5 => 'cekerek',
      6 => 'kadisehri',
      7 => 'saraykent',
      8 => 'sarikaya',
      9 => 'sorgun',
      10 => 'sefaatli',
      11 => 'yenifakili',
      12 => 'yerkoy',
    ),
    'zonguldak' => 
    array (
      0 => 'alapli',
      1 => 'caycuma',
      2 => 'devrek',
      3 => 'gokcebey',
      4 => 'karadeniz_eregli',
      5 => 'kilimli',
      6 => 'kozlu',
    ),
  ),
  'location_turkey_meta' => 
  array (
    'bind_last' => 
    array (
      'city' => 
      array (
      ),
      'district' => 
      array (
        0 => 'of',
        1 => 'genc',
        2 => 'olur',
        3 => 'hani',
      ),
    ),
  ),
  'locationmap_turkey' => 
  array (
    'ankara' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195885.05346095178!2d32.5979546970634!3d39.903259902390374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347d520732db1%3A0xbdc57b0c0842b8d!2zQW5rYXJhLCBUw7xya2Vp!5e0!3m2!1sde!2slu!4v1689215865424!5m2!1sde!2slu',
    'akyurt' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195249.51452031758!2d32.97057134893706!3d40.12504719358177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40821b0ab85ecc03%3A0x5e6da97ce04d43b2!2sAkyurt%2FAnkara%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689273107703!5m2!1sen!2sus',
    'altindag' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97814.56214792636!2d32.89162425507178!3d39.99269587458572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4082076812935815%3A0x84514048c480eeca!2zQWx0xLFuZGHEny9BbmthcmEsIFTDvHJraXll!5e0!3m2!1sen!2sus!4v1689273167954!5m2!1sen!2sus',
    'ayas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d391069.7211897266!2d31.91879495437936!3d40.02559496828762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d2da36a5e2a6eb%3A0x9a47b879c38a3269!2zQXlhxZ8vQW5rYXJhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sus!4v1689273214205!5m2!1sen!2sus',
    'bala' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12305.259256103966!2d33.109389257788614!3d39.55250854546154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d49db38283d987%3A0xc57cc99968a423fa!2zQmFsYSwgQmFsw6IvQW5rYXJhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sus!4v1689273272656!5m2!1sen!2sus',
    'beypazari' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24392.784048438138!2d31.90539494855756!3d40.16237157478795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d2b9ec61c2436f%3A0xdee880680184af30!2zQmV5cGF6YXLEsSwgQW5rYXJhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sus!4v1689273311007!5m2!1sen!2sus',
    'camlidere' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194179.5892313644!2d32.177817486246845!3d40.49614289352497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4082eb47d33c841f%3A0xb893d4a36cbda9f9!2zw4dhbWzEsWRlcmUvQW5rYXJhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sus!4v1689276049928!5m2!1sen!2sus',
    'cankaya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196187.41573939912!2d32.717911422381135!3d39.79738198066943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d345ad9f357261%3A0x4b01c691eefd6f1d!2zw4dhbmtheWEvQW5rYXJhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sus!4v1689276128696!5m2!1sen!2sus',
    'cubuk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97494.7274862391!2d32.949338717794646!3d40.21550818540679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4082142f135edec9%3A0x958e5b7a1264f78!2zw4d1YnVrLCBBbmthcmEsIFTDvHJraXll!5e0!3m2!1sen!2sus!4v1689276197698!5m2!1sen!2sus',
    'elmadag' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24479.280558611237!2d33.217314847714036!3d39.921028677474055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081fd7732d0d0fd%3A0xfbea63d1f9e284db!2zRWxtYWRhxJ8sIEVkacSfZSwgRWxtYWRhxJ8vQW5rYXJhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sus!4v1689276257949!5m2!1sen!2sus',
    'etimesgut' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195995.83151957727!2d32.6400115!3d39.86449605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d3385207a0de51%3A0x940f5661caf9866c!2sEtimesgut%2FAnkara!5e0!3m2!1sde!2str!4v1690040478098!5m2!1sde!2str',
    'evren' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12398.620238906582!2d33.8066425!3d39.02318145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d5acdba7af6229%3A0x2ab1cc83ca253afa!2zRXZyZW4sIMOHYXRhbHDEsW5hciwgRXZyZW4vQW5rYXJh!5e0!3m2!1sde!2str!4v1690040507241!5m2!1sde!2str',
    'golbasi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d403802.8865648166!2d37.662278!3d37.74994595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15325fb4112822d7%3A0xe880637d4bc30063!2zR8O2bGJhxZ_EsS9BZMSxeWFtYW4!5e0!3m2!1sde!2str!4v1690041871420!5m2!1sde!2str',
    'gudul' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12187.435514970055!2d32.248690550000006!3d40.212202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d2d3412ae082d9%3A0x4836ba08b9f4831c!2zR8O8ZMO8bCwgQW5rYXJh!5e0!3m2!1sde!2str!4v1690040551516!5m2!1sde!2str',
    'haymana' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24652.07734888905!2d32.50382989999999!3d39.435210999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d3afa6e92cdf53%3A0x9b8a78c8ef38a6ad!2sHaymana%2C%20Ankara!5e0!3m2!1sde!2str!4v1690040574165!5m2!1sde!2str',
    'kahramankazan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24377.853419063966!2d32.684275!3d40.20390915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4082704548b3b4f1%3A0x493a67efad88713e!2sKahramankazan%2C%20Kazan%2FAnkara!5e0!3m2!1sde!2str!4v1690040598952!5m2!1sde!2str',
    'kalecik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24414.901794211048!2d33.4181665!3d40.100773499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081f3921c105a69%3A0x1ceafd6d0f58b026!2zS2FsZWNpaywgR8O8bcO8xZ9wxLFuYXIsIEthbGVjaWsvQW5rYXJh!5e0!3m2!1sde!2str!4v1690040620213!5m2!1sde!2str',
    'kecioren' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195360.11123048965!2d32.820312!3d40.08652505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4082097d856a2c3f%3A0x8d22ac4346722e44!2zS2XDp2nDtnJlbi9BbmthcmE!5e0!3m2!1sde!2str!4v1690040642771!5m2!1sde!2str',
    'kizilcahamam' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195360.11123048965!2d32.820312!3d40.08652505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4082f429e02b0dbb%3A0x4b74c1a9b5fc7e0f!2zS8SxesSxbGNhaGFtYW0sIEFua2FyYQ!5e0!3m2!1sde!2str!4v1690040662529!5m2!1sde!2str',
    'mamak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195879.85841893038!2d33.021730899999994!3d39.905077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d356ce9eccabc1%3A0x6e2745fc8b863ee!2sMamak%2FAnkara!5e0!3m2!1sde!2str!4v1690040685158!5m2!1sde!2str',
    'nallihan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24385.407632165043!2d31.345397500000004!3d40.1828975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cd69f7c90803dd%3A0xa98e0fbf29470b9f!2sNall%C4%B1han%2C%20Ankara!5e0!3m2!1sde!2str!4v1690040705804!5m2!1sde!2str',
    'polatli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24385.407632165043!2d31.345397500000004!3d40.1828975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d2460323fd13bb%3A0x62418f0362a06c9!2zUG9sYXRsxLEvQW5rYXJh!5e0!3m2!1sde!2str!4v1690040728504!5m2!1sde!2str',
    'pursaklar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48875.59883599153!2d32.902066050000016!3d40.0369205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4082086d29b99d0f%3A0xae9925dae6fd007a!2sPursaklar%2C%20Ankara!5e0!3m2!1sde!2str!4v1690040749815!5m2!1sde!2str',
    'sincan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d391854.4459219075!2d32.419931950000006!3d39.8885075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d321c3ddf5d875%3A0x729c8e57c6f2eede!2sSincan%2FAnkara!5e0!3m2!1sde!2str!4v1690040775654!5m2!1sde!2str',
    'sereflikochisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49654.51681754593!2d33.546208!3d38.93752255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d447107fcb9abb%3A0x1c1e3235d499a76c!2zxZ5lcmVmbGlrb8OnaGlzYXIsIEFua2FyYQ!5e0!3m2!1sde!2str!4v1690040797247!5m2!1sde!2str',
    'yenimahalle' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195585.29383138273!2d32.7051605!3d40.00799599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d339af184d2c35%3A0x68c6ca9b5d4e578f!2sYenimahalle%2FAnkara!5e0!3m2!1sde!2str!4v1690040821495!5m2!1sde!2str',
    'adana' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203937.51624864695!2d35.12325628907128!3d36.99730107501209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f38a79c7193%3A0xd61674d8580bea06!2zQWRhbmEsIFJlxZ9hdGJleSwgU2V5aGFuL0FkYW5hLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sus!4v1689276435836!5m2!1sen!2sus',
    'ceyhan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50961.77606474086!2d35.82054594999998!3d37.03099954999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1528c956c922f25d%3A0x716aaba3c519823e!2sCeyhan%2C%20Adana!5e0!3m2!1sde!2str!4v1690038203077!5m2!1sde!2str',
    'cukurova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203659.5308823564!2d35.1707944!3d37.10082849999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152863b5148e5cbf%3A0x73bafc7589a6d67e!2zw4d1a3Vyb3ZhL0FkYW5h!5e0!3m2!1sde!2str!4v1690038232396!5m2!1sde!2str',
    'kozan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50677.02196867443!2d35.8066075!3d37.4533105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152931738f52ec63%3A0x56915c23a90be186!2sKozan%2C%20Adana!5e0!3m2!1sde!2str!4v1690038256463!5m2!1sde!2str',
    'pozanti' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12673.605729751507!2d34.87079595!3d37.427620499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152847f150c4bf97%3A0x40c8d2868c5cdd10!2zUG96YW50xLEsIEFkYW5h!5e0!3m2!1sde!2str!4v1690038303294!5m2!1sde!2str',
    'saricam' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12673.605729751507!2d34.87079595!3d37.427620499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1528ec81592352c1%3A0x2034446690a9d6e0!2zU2FyxLHDp2FtL0FkYW5h!5e0!3m2!1sde!2str!4v1690038323811!5m2!1sde!2str',
    'yuregir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d408460.21397980186!2d35.43295305000001!3d36.88806544999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1528917167cf42d7%3A0x60ae84008b6746fe!2zWcO8cmXEn2lyL0FkYW5h!5e0!3m2!1sde!2str!4v1690038346237!5m2!1sde!2str',
    'adiyaman' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50463.456736484!2d38.234714292168974!3d37.767394328410845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15331388daa5b1ab%3A0xdb1596e4c5f547e!2zQWTEsXlhbWFuLCBBZMSxeWFtYW4gTWVya2V6L0FkxLF5YW1hbiwgVMO8cmtpeWU!5e0!3m2!1sen!2sus!4v1689276503754!5m2!1sen!2sus',
    'kahta' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25226.37221545836!2d38.624540999999994!3d37.783089999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15335f3291eda00d%3A0x81f488f23c40e2f6!2zS8OiaHRhLCBBZMSxeWFtYW4!5e0!3m2!1sde!2str!4v1690041901100!5m2!1sde!2str',
    'besni' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25256.01212620255!2d37.86610544999999!3d37.69616345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153256364e28cb13%3A0x50034e02aee8c0f3!2sBesni%2C%20Ad%C4%B1yaman!5e0!3m2!1sde!2str!4v1690041936008!5m2!1sde!2str',
    'samsat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12648.017367429844!2d38.481472499999995!3d37.57851545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15337081aab8c757%3A0xe1216c61bc70bc46!2sSamsat%2C%20Ad%C4%B1yaman!5e0!3m2!1sde!2str!4v1690041958710!5m2!1sde!2str',
    'afyon' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99566.85953341449!2d30.53082928141299!3d38.753052175425445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cf3d7e15ecd85b%3A0xf0c901fb9ada4b16!2sAfyonkarahisar%2C%20Afyonkarahisar%20Merkez%2FAfyonkarahisar%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689276555388!5m2!1sen!2sus',
    'bolvadin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24904.888877522444!2d31.054505550000005!3d38.71525795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cfae7661726e91%3A0x6f292afbc7572d5a!2sBolvadin%2C%20Afyonkarahisar!5e0!3m2!1str!2str!4v1690834618844!5m2!1str!2str',
    'dinar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25128.397993700968!2d30.160881049999997!3d38.069222499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5df5878fe2d7b%3A0xfbcd438722492be2!2sDinar%2C%20Afyonkarahisar!5e0!3m2!1str!2str!4v1690834656241!5m2!1str!2str',
    'sandikli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24994.899907023293!2d30.26845245!3d38.45619195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cf5691f8eb05db%3A0xacbfe8bbf486ca89!2zU2FuZMSxa2zEsSwgQWZ5b25rYXJhaGlzYXI!5e0!3m2!1str!2str!4v1690834680432!5m2!1str!2str',
    'dazkiri' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201420.85732277355!2d29.7999875!3d37.925736949999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c6602f5100f2c1%3A0xe03229df8da3981d!2zRGF6a8SxcsSxL0FmeW9ua2FyYWhpc2Fy!5e0!3m2!1str!2str!4v1690834704097!5m2!1str!2str',
    'emirdag' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201420.85732277355!2d29.7999875!3d37.925736949999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ce3e1fa14129af%3A0x6308f7505eaafd2!2sEmirda%C4%9F%2FAfyonkarahisar!5e0!3m2!1str!2str!4v1690834726752!5m2!1str!2str',
    'erenler' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12089.997883504178!2d30.40396326138105!3d40.7510379922004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccb36b6023a2db%3A0xeaedc7b2c6408ef0!2sErenler%2C%2054200%20Erenler%2FSakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042132791!5m2!1sen!2sua',
    'sinanpasa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12447.398129835141!2d30.24157595!3d38.74421495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cf35dc887bad6d%3A0x325473d82936d526!2sSinanpa%C5%9Fa%2C%20Afyonkarahisar!5e0!3m2!1str!2str!4v1690834769880!5m2!1str!2str',
    'agri' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d788424.7082642262!2d42.716540357277786!3d39.47420780175776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406c83d3b7fa8bc1%3A0x557945c7c73cae16!2zQcSfcsSxLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sus!4v1689276624073!5m2!1sen!2sus',
    'dogubayazit' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49219.24130149514!2d44.0714329!3d39.5550395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4014b73d69e6a97b%3A0xe421c20ded4c1655!2zRG_En3ViYXlhesSxdCwgQcSfcsSx!5e0!3m2!1str!2str!4v1690834811971!5m2!1str!2str',
    'hamur' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197046.59856723264!2d43.080075!3d39.495231499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406c958973f01827%3A0x38fee3e17d75bddd!2zSGFtdXIvQcSfcsSx!5e0!3m2!1str!2str!4v1690834831170!5m2!1str!2str',
    'diyadin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24613.552367758173!2d43.6718735!3d39.5439555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406b543c22285b4d%3A0x568b96bfd2e9457f!2zRGl5YWRpbiwgQcSfcsSx!5e0!3m2!1str!2str!4v1690834849942!5m2!1str!2str',
    'patnos' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49447.08404779592!2d42.857839350000006!3d39.232819899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406cd873a31c5221%3A0xf93b57359ad344bb!2zUGF0bm9zLCBBxJ9yxLE!5e0!3m2!1str!2str!4v1690834870304!5m2!1str!2str',
    'tutak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12306.779296182329!2d42.76878645!3d39.54393794999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406cf3a9edf3d0d7%3A0xdf7c2ee765490b47!2zVHV0YWssIEHEn3LEsQ!5e0!3m2!1str!2str!4v1690834890248!5m2!1str!2str',
    'taslicay' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12290.563007282233!2d43.3762005!3d39.635292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406b5fef2389737b%3A0xcfc104a58708fc8d!2zVGHFn2zEscOnYXksIEHEn3LEsQ!5e0!3m2!1str!2str!4v1690834916185!5m2!1str!2str',
    'amasya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24214.440915595485!2d35.80148940029672!3d40.656226169695415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40876e4f7cbd9773%3A0x1916fc24a6992dcf!2sAmasya%2C%20Amasya%20District%2FAmasya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689276649473!5m2!1sen!2sus',
    'merzifon' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386387.01798898383!2d35.430826450000005!3d40.83568205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087031be7aee11f%3A0xb4998053fcdcbe22!2sMerzifon%2FAmasya!5e0!3m2!1str!2str!4v1690835064158!5m2!1str!2str',
    'suluova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386387.01798898383!2d35.430826450000005!3d40.83568205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408708c874565d53%3A0xfca6a52c1788b2d!2sSuluova%2C%20Amasya!5e0!3m2!1str!2str!4v1690835084006!5m2!1str!2str',
    'tasova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24176.737169152137!2d36.32804255!3d40.759998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087877a9a710eed%3A0x6e0a5f29818e0948!2zVGHFn292YSwgQW1hc3lh!5e0!3m2!1str!2str!4v1690835105881!5m2!1str!2str',
    'goynucek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12154.855165342638!2d35.52482145!3d40.393035499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40874dff343afc45%3A0xf26864dec681677a!2zR8O2eW7DvGNlaywgQW1hc3lh!5e0!3m2!1str!2str!4v1690835128101!5m2!1str!2str',
    'gumushacikoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12067.200294646242!2d35.215113450000004!3d40.876261500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4086e4e9a3593631%3A0xe04196c25e66c9!2zR8O8bcO8xZ9oYWPEsWvDtnksIEFtYXN5YQ!5e0!3m2!1str!2str!4v1690835147924!5m2!1str!2str',
    'antalya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102101.88545492038!2d30.635703634420373!3d36.89790910003106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39aaeddadadc1%3A0x95c69f73f9e32e33!2sAntalya%2C%20T%C3%BCrkei!5e0!3m2!1sde!2slu!4v1689218035068!5m2!1sde!2slu',
    'akseki' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12738.16107730229!2d31.7930876!3d37.04460649999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14db37dead3093d1%3A0xda12aa7015fe8f98!2sAkseki%2C%20Antalya!5e0!3m2!1str!2str!4v1690835209481!5m2!1str!2str',
    'alanya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51286.84061903998!2d32.012651999999996!3d36.543803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dca27b822cd5fb%3A0xd160c1c8b3dc170b!2sAlanya%2C%20Antalya!5e0!3m2!1str!2str!4v1690835234547!5m2!1str!2str',
    'elmali' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25580.57003573943!2d29.9235655!3d36.732857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c171225ac28bf7%3A0x8c1b001ac3278669!2sElmal%C4%B1%2C%20Antalya!5e0!3m2!1str!2str!4v1690835253091!5m2!1str!2str',
    'finike' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25722.827377213085!2d30.15675945!3d36.303735499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c18a8ee0729cf9%3A0xa3021a429cb6cbd3!2sFinike%2C%20Antalya!5e0!3m2!1str!2str!4v1690835271900!5m2!1str!2str',
    'gazipasa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25731.427177699086!2d32.3110525!3d36.277654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dc8ad7a66ba183%3A0xd1f77b55e57c0cad!2sGazipa%C5%9Fa%2C%20Antalya!5e0!3m2!1str!2str!4v1690835291571!5m2!1str!2str',
    'gundogmus' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12777.305806533368!2d31.999271049999997!3d36.81069649999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14db67f42d9d8f39%3A0x350089a6e47bbfd!2zR8O8bmRvxJ9tdcWfLCBBbnRhbHlh!5e0!3m2!1str!2str!4v1690835312127!5m2!1str!2str',
    'ibradi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6364.812206900225!2d31.598355100000003!3d37.0954495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c4b57a23e02f8d%3A0xd6d63932be893381!2zxLBicmFkxLEsIEFudGFseWE!5e0!3m2!1str!2str!4v1690835332751!5m2!1str!2str',
    'demre' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25741.82657617352!2d29.988178!3d36.24609305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c1f2125d67bfbd%3A0xda7c5f586d1b7586!2sDemre%2C%20Antalya!5e0!3m2!1str!2str!4v1690835354038!5m2!1str!2str',
    'kas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12878.35933631906!2d29.649745599999996!3d36.200855950000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c1da54a506cf4d%3A0xcfbf502fb3cb4db3!2zS2HFnywgQW5kaWZsaSwgMDc1ODAgS2HFny9BbnRhbHlh!5e0!3m2!1str!2str!4v1690835374667!5m2!1str!2str',
    'kemer' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202924.36901721798!2d29.909965055977697!3d37.3734341568502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c6a8bd28d1aef5%3A0x95f0903151189a28!2sKemer%2FBurdur%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255278417!5m2!1sen!2sua',
    'korkuteli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25466.943927820605!2d30.203469449999996!3d37.0725415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3fd03a5b42a4b%3A0xf763870e637b45e1!2sKorkuteli%2C%20Antalya!5e0!3m2!1str!2str!4v1690835426572!5m2!1str!2str',
    'kumluca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51416.4240200922!2d30.276305049999994!3d36.348023999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c225a3f6457a2d%3A0x342331e90662e19f!2sKumluca%2C%20Antalya!5e0!3m2!1str!2str!4v1690835446487!5m2!1str!2str',
    'manavgat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51125.63562420867!2d31.448661!3d36.7861045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3577c5458f7a9%3A0x6dd8245f304b741!2sManavgat%2C%2007600%20Manavgat%2FAntalya!5e0!3m2!1str!2str!4v1690835469371!5m2!1str!2str',
    'serik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51034.960785303294!2d31.10316395!3d36.92179405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c36299ffdc2973%3A0x8c2250677132027b!2sSerik%2C%20Antalya!5e0!3m2!1str!2str!4v1690835492389!5m2!1str!2str',
    'muratpasa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102115.03610658793!2d30.762834100000003!3d36.88807845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c38525f97ecb77%3A0x963703579cf5fc2c!2sMuratpa%C5%9Fa%2FAntalya!5e0!3m2!1str!2str!4v1690835512827!5m2!1str!2str',
    'konyaalti' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102115.03610658793!2d30.762834100000003!3d36.88807845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3eb3ac320c357%3A0xedd0acf5da12a492!2sKonyaalt%C4%B1%2FAntalya!5e0!3m2!1str!2str!4v1690835533840!5m2!1str!2str',
    'aksu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12609.51825603575!2d31.050171208965534!3d37.804577551642204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c50dfb3e5221d1%3A0x2bd2a0dbf4ebf3e4!2sAksu%2C%20Isparta%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259352732!5m2!1sen!2sua',
    'dosemealti' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25511.81531458276!2d30.83305104999999!3d36.93871889999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c38bc0b6e22963%3A0x4ee8ad23655497fe!2zRMO2xZ9lbWVhbHTEsSwgQW50YWx5YQ!5e0!3m2!1str!2str!4v1690835576678!5m2!1str!2str',
    'kepez' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101950.19506741098!2d30.606096450000003!3d37.01114195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3886efe30cc6b%3A0x1416060af6289804!2sKepez%2FAntalya!5e0!3m2!1str!2str!4v1690835599423!5m2!1str!2str',
    'artvin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24023.453495523536!2d41.7974804521591!3d41.17965716489163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4068762d8682fb25%3A0x250e3ff1de1e064c!2sArtvin%2C%20Artvin%20Merkez%2FArtvin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689276676974!5m2!1sen!2sus',
    'ardanuc' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23941.574347589725!2d41.412205922286795!3d41.402390663036684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40686bc6938c5f6d%3A0x1ec715a8174df2b3!2zQXJkYW51w6cvQXJ0dmlu!5e0!3m2!1sde!2str!4v1689858871262!5m2!1sde!2str',
    'arhavi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192460.0500918101!2d41.98346541995701!3d41.086732637859754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4067b75371661589%3A0xd4aee3a7fd4818da!2sArhavi%2C%20Artvin!5e0!3m2!1sde!2str!4v1689858936170!5m2!1sde!2str',
    'borcka' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23956.857844310278!2d41.66029092215008!3d41.36089011337454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4067e9e0621df725%3A0xaf1f0490752ad91b!2zQm9yw6drYSwgQXJ0dmlu!5e0!3m2!1sde!2str!4v1689858959731!5m2!1sde!2str',
    'hopa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23941.574347589725!2d41.412205922286795!3d41.402390663036684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4067bebe37ee62bb%3A0x993e7e6ecbefce9d!2sHopa%2C%2008600%20Hopa%2FArtvin!5e0!3m2!1sde!2str!4v1689858833909!5m2!1sde!2str',
    'kemalpasa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25004.3711472137!2d27.39636925312543!3d38.42884649694772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b971b007347697%3A0xa12214c2ee4c3bee!2zS2VtYWxwYcWfYSwgxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259795579!5m2!1sen!2sua',
    'murgul' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23912.367175387997!2d41.51371287254799!3d41.481604662402496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4067c556e4fa1e3d%3A0xef63e71f114a8861!2sMurgul%2FArtvin!5e0!3m2!1sde!2str!4v1689859004328!5m2!1sde!2str',
    'savsat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191992.2825921932!2d41.4106375050807!3d41.24618449990269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40681a23237f07b5%3A0xf4a1ee6eda03a99a!2zxZ5hdsWfYXQsIFllbmlrw7Z5LCDFnmF2xZ9hdC9BcnR2aW4!5e0!3m2!1sde!2str!4v1689859024928!5m2!1sde!2str',
    'yusufeli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24158.166920414435!2d41.513747170349646!3d40.81102871821446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406896e15a938c9b%3A0x34ae33b0ff3acdc!2sYusufeli%2C%20Merkez%2C%20Yusufeli%2FArtvin!5e0!3m2!1sde!2str!4v1689859045212!5m2!1sde!2str',
    'aydin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50416.76206038025!2d27.806216843086116!3d37.835770824015896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b92b6627dced2f%3A0xcca12f1bcb3b322e!2zQXlkxLFuLCBFZmVsZXIvQXlkxLFuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sus!4v1689276707291!5m2!1sen!2sus',
    'bozdogan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12632.297785014738!2d28.31113155!3d37.67095845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bf4a8fddfe215f%3A0x1a3aa4a18778871a!2zQm96ZG_En2FuLCBBeWTEsW4!5e0!3m2!1str!2str!4v1690843443559!5m2!1str!2str',
    'buharkent' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25161.757369987!2d28.739675999999996!3d37.972002499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c7614278df9971%3A0x2c85d3124f163daa!2sBuharkent%2C%20Ayd%C4%B1n!5e0!3m2!1str!2str!4v1690843560472!5m2!1str!2str',
    'cine' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25284.47004659162!2d28.06210845!3d37.612542499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bf2f7e3ee814c9%3A0xb5e120e8e86487ad!2zw4dpbmUsIEF5ZMSxbg!5e0!3m2!1str!2str!4v1690843704984!5m2!1str!2str',
    'didim' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50731.854211460886!2d27.268914549999998!3d37.3723075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14be86d2ad80ec37%3A0x330796f2c071da8d!2zRGlkaW0sIEF5ZMSxbg!5e0!3m2!1str!2str!4v1690843725378!5m2!1str!2str',
    'germencik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25196.568944273662!2d27.59789505!3d37.87032445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14becb25d4c09f15%3A0xf98f49472e220b59!2sGermencik%2C%20Ayd%C4%B1n!5e0!3m2!1str!2str!4v1690843746193!5m2!1str!2str',
    'incirliova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12601.45004123714!2d27.724949000000002!3d37.851807449999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b932b49d31cc6b%3A0xca756428cbab9d5!2zxLBuY2lybGlvdmEsIEF5ZMSxbg!5e0!3m2!1str!2str!4v1690843767609!5m2!1str!2str',
    'karacasu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12622.50328101119!2d28.60423105!3d37.72845995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b8a917a7bd1a4f%3A0xde9048dc5ac79328!2sKaracasu%2C%20Ayd%C4%B1n!5e0!3m2!1str!2str!4v1690843786861!5m2!1str!2str',
    'karpuzlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6325.6010250619665!2d27.834252!3d37.559763499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bedc282951887d%3A0x8492129cc5b0eaab!2sKarpuzlu%2C%20Ayd%C4%B1n!5e0!3m2!1str!2str!4v1690843806867!5m2!1str!2str',
    'kocarli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12617.01548119314!2d27.704691049999997!3d37.7606451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bece69b4c7065d%3A0x74c8e302475ecb5e!2zS2_Dp2FybMSxLCBBeWTEsW4!5e0!3m2!1str!2str!4v1690843826633!5m2!1str!2str',
    'kosk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12601.29073431751!2d28.05331645!3d37.8527395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b8d16360b94b6b%3A0xad39ed3cd05ec650!2zS8O2xZ9rLCBBeWTEsW4!5e0!3m2!1str!2str!4v1690843847340!5m2!1str!2str',
    'kusadasi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50403.13746901175!2d27.26081305!3d37.855701950000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bea92b956a5427%3A0xd89b725d100f2ef4!2zS3XFn2FkYXPEsSwgQXlkxLFu!5e0!3m2!1str!2str!4v1690843868193!5m2!1str!2str',
    'kuyucak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12590.78866163676!2d28.4628085!3d37.91414054999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b8bc9535920c3b%3A0x3ed60896bdcb9e8f!2zS3V5dWNhaywgQXlkxLFu!5e0!3m2!1str!2str!4v1690844565841!5m2!1str!2str',
    'nazilli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12590.78866163676!2d28.4628085!3d37.91414054999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b8b8eb92e2f661%3A0x7ab49f06aabe2341!2zTmF6aWxsaSwgQXlkxLFu!5e0!3m2!1str!2str!4v1690844585136!5m2!1str!2str',
    'soke' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25236.768723441477!2d27.4133995!3d37.752618999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bebaf40fdd4975%3A0x1c1fc285c347bc5f!2zU8O2a2UsIEF5ZMSxbg!5e0!3m2!1str!2str!4v1690844603965!5m2!1str!2str',
    'sultanhisa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12594.983294298892!2d28.151202999999995!3d37.8896265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b8cf82f27b1c67%3A0xdd5afd752abd25ae!2sSultanhisar%2C%2009470%20Sultanhisar%2FAyd%C4%B1n!5e0!3m2!1str!2str!4v1690844626707!5m2!1str!2str',
    'yenipazar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6097.020612159319!2d30.51991805!3d40.17545545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc8ad1ced44f01%3A0xbad2cdd682ff90c3!2sYenipazar%2C%20Bilecik!5e0!3m2!1str!2str!4v1702803168796!5m2!1str!2str',
    'balikesir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49153.35031403051!2d27.8485528178966!3d39.64781517251516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b7003b8bbb36d7%3A0xea6e0949f8f4ea6a!2zQmFsxLFrZXNpciwgVMO8cmtpeWU!5e0!3m2!1sen!2sus!4v1689276734158!5m2!1sen!2sus',
    'altieylul' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393738.2236636082!2d27.873438499999992!3d39.557806549999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b706ff4302d78f%3A0x5dfdf3b41e9e5676!2zQWx0xLFleWzDvGwvQmFsxLFrZXNpcg!5e0!3m2!1str!2str!4v1702802666346!5m2!1str!2str',
    'karesi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196211.90320523598!2d27.808163999999994!3d39.78879695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b6fbc75313747d%3A0x2b0a561006e4dca6!2sKaresi%2FBal%C4%B1kesir!5e0!3m2!1str!2str!4v1702802746955!5m2!1str!2str',
    'ayvalik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49375.98412680431!2d26.708720449999998!3d39.333608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ba7677119d3691%3A0x136a47873966c6ac!2zQXl2YWzEsWssIEJhbMSxa2VzaXI!5e0!3m2!1str!2str!4v1702802785908!5m2!1str!2str',
    'balya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6135.108153933067!2d27.57932655!3d39.749666500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b6e025d66210e1%3A0x775d7107030d901e!2sBalya%2C%20Bal%C4%B1kesir!5e0!3m2!1str!2str!4v1702802820214!5m2!1str!2str',
    'bandirma' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48658.48397171987!2d27.966231899999997!3d40.33890194999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5d377a8bfb0f1%3A0xbd33d2bd7058850e!2zQmFuZMSxcm1hLCBCYWzEsWtlc2ly!5e0!3m2!1str!2str!4v1702802870690!5m2!1str!2str',
    'bigadic' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24664.070210409885!2d28.1368154!3d39.401307499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b7bb3f0d43dad7%3A0xb09c58cfa54f903e!2zQmlnYWRpw6csIEJhbMSxa2VzaXI!5e0!3m2!1str!2str!4v1702802902359!5m2!1str!2str',
    'bartin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47715.22706927057!2d32.2969173731771!3d41.629771644864576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409b72335ea8fb4d%3A0x7820a074d3b17daf!2zQmFydMSxbiwgQmFydMSxbiBNZXJrZXovQmFydMSxbg!5e0!3m2!1sde!2str!4v1689857272864!5m2!1sde!2str',
    'amasra' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11907.66764963713!2d32.38735199999999!3d41.743885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409b0be44ab0f0b7%3A0x8d97128b9a1b4cb2!2zQW1hc3JhLCBCYXJ0xLFu!5e0!3m2!1str!2str!4v1690835849166!5m2!1str!2str',
    'kurucasile' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11889.239319536298!2d32.724001!3d41.843157549999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409b1cfc90365717%3A0x13ee0912341a0c72!2zS3VydWNhxZ9pbGUsIEJhcnTEsW4!5e0!3m2!1str!2str!4v1690835872257!5m2!1str!2str',
    'ulus' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d382235.00191181095!2d32.66263445!3d41.543029500000024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409b4131a6880343%3A0x5ad81149638e6c47!2zVWx1cy9CYXJ0xLFu!5e0!3m2!1str!2str!4v1690835896795!5m2!1str!2str',
    'batman' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50375.905495358216!2d41.090537375234675!3d37.89551232023781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400b46fc6e630ad3%3A0x8fba52e2fe61162e!2sBatman%2C%20Batman%20Merkez%2FBatman!5e0!3m2!1sde!2str!4v1689857319581!5m2!1sde!2str',
    'besiri' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12589.922474081248!2d41.29335345!3d37.919200999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400b431e1baf7579%3A0xd75d132e406e7b67!2zQmXFn2lyaSwgQmF0bWFu!5e0!3m2!1str!2str!4v1690835947661!5m2!1str!2str',
    'gercus' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12589.922474081248!2d41.29335345!3d37.919200999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400b084d42fcdaab%3A0xb24e7f85672957b2!2zR2VyY8O8xZ8vQmF0bWFu!5e0!3m2!1str!2str!4v1690835968347!5m2!1str!2str',
    'hasankeyif' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d404410.45337975083!2d41.386323499999996!3d37.63846650000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400b0c853d00283f%3A0x5b676a7c895c6c87!2sHasankeyf%2C%20Batman!5e0!3m2!1str!2str!4v1690835990686!5m2!1str!2str',
    'kozluk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25090.752263123428!2d41.4964215!3d38.178681999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400cb05b706e3d55%3A0xd8c32a81633815db!2sKozluk%2C%20Batman!5e0!3m2!1str!2str!4v1690836012595!5m2!1str!2str',
    'sason' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12519.083594061442!2d41.4174299!3d38.331135849999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40734a74c19c301b%3A0x797d9c519e69bc22!2sSason%2C%20Batman!5e0!3m2!1str!2str!4v1690836031871!5m2!1str!2str',
    'bayburt' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48715.98548908643!2d40.185153405148924!3d40.25910714485085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406f87a875e9ce79%3A0xd8ef32e664935a3f!2sBayburt%2C%20Bayburt%20Merkez%2FBayburt!5e0!3m2!1sde!2str!4v1689857350125!5m2!1sde!2str',
    'aydintepe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12154.994955826496!2d40.1422992634255!3d40.39226104309312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4065786883dac493%3A0xbd69624d323faa75!2sAyd%C4%B1ntepe%2C%20Bayburt!5e0!3m2!1sde!2str!4v1689859114773!5m2!1sde!2str',
    'demirozu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12196.113491293516!2d39.87975226324227!3d40.163921993698466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40655e605ee91d43%3A0x90c57159367aef65!2zRGVtaXLDtnrDvCwgQmF5YnVydA!5e0!3m2!1sde!2str!4v1689859134355!5m2!1sde!2str',
    'bilecik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48784.50376117476!2d29.93347540391441!3d40.16385269894755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb8ff9d112b87f%3A0xbc0204b016c9231f!2sBilecik%2C%20Bilecik%20Merkez%2FBilecik!5e0!3m2!1sde!2str!4v1689857381670!5m2!1sde!2str',
    'bozuyuk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48971.751774849494!2d30.057139049999996!3d39.90257654999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cbf14e2a716c0b%3A0xd0712f7959a335f5!2zQm96w7x5w7xrLCBCaWxlY2lr!5e0!3m2!1str!2str!4v1702802941138!5m2!1str!2str',
    'golpazari' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12174.842133041418!2d30.311857049999997!3d40.28217994999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc85df687a8641%3A0xa02aaeb2764d8fd5!2zR8O2bHBhemFyxLEsIEJpbGVjaWs!5e0!3m2!1str!2str!4v1702802994973!5m2!1str!2str',
    'inhisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6108.126805193835!2d30.385524450000002!3d40.051686000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc6577e45ee47d%3A0x61aeca78528ab1a!2s%C4%B0nhisar%2C%20Bilecik!5e0!3m2!1str!2str!4v1702803036289!5m2!1str!2str',
    'osmaneli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12161.309992503751!2d30.016330999999997!3d40.35726209999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb799b997b1f9f%3A0x2a460438c878f763!2sOsmaneli%2C%20Bilecik!5e0!3m2!1str!2str!4v1702803068877!5m2!1str!2str',
    'pazaryeri' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12226.321045283747!2d29.905150900000013!3d39.9954845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cbecf4a7b143eb%3A0x6c3529ddd5915039!2sPazaryeri%2C%20Bilecik!5e0!3m2!1str!2str!4v1702803106723!5m2!1str!2str',
    'sogut' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24443.77388079662!2d30.181090500000003!3d40.020246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc75dd6aa499cd%3A0x35222eb78de06f27!2zU8O2xJ_DvHQsIEJpbGVjaWs!5e0!3m2!1str!2str!4v1702803138964!5m2!1str!2str',
    'bingol' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24846.272461374338!2d40.480247864194595!3d38.883182140500104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4073cf9389c1ea9d%3A0x14f2c982b0b5f7cf!2zQmluZ8O2bCwgQmluZ8O2bCBNZXJrZXovQmluZ8O2bA!5e0!3m2!1sde!2str!4v1689857404009!5m2!1sde!2str',
    'adakli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12361.879514483464!2d40.48005145!3d39.232204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40718e2f6ac8d1db%3A0xe1fa4bede8d62af8!2zQWRha2zEsSwgQmluZ8O2bA!5e0!3m2!1str!2str!4v1702803210196!5m2!1str!2str',
    'genc' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12445.98553679697!2d40.557133900000004!3d38.752317500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4073bf3e4db1b919%3A0xd1ddeba9ee04694a!2zR2Vuw6csIEJpbmfDtmw!5e0!3m2!1str!2str!4v1702803241273!5m2!1str!2str',
    'karliova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12350.467052589687!2d41.0095405!3d39.29694095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407203705598f857%3A0xd03fdce8ad852b8e!2zS2FybMSxb3ZhLCBCaW5nw7Zs!5e0!3m2!1str!2str!4v1702803269700!5m2!1str!2str',
    'kigi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197671.60181715226!2d40.29333355!3d39.274215500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40719792d8ad23bd%3A0x45b5d3ad474c3fd8!2zS2nEn8SxL0JpbmfDtmw!5e0!3m2!1str!2str!4v1702803303300!5m2!1str!2str',
    'solhan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24818.29080796513!2d41.044349999999994!3d38.963129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407245dea4fe2e55%3A0x5fa51491251c72ba!2zU29saGFuLCBCaW5nw7Zs!5e0!3m2!1str!2str!4v1702803334535!5m2!1str!2str',
    'yayladere' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197853.52532409315!2d40.083931099999994!3d39.209687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4071a06f78373aeb%3A0xa244dfec417a7489!2sYayladere%2FBing%C3%B6l!5e0!3m2!1str!2str!4v1702803362712!5m2!1str!2str',
    'yedisu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197853.52532409315!2d40.083931099999994!3d39.209687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4071c216469a0953%3A0xaa0a7941fbe2be62!2zWWVkaXN1L0JpbmfDtmw!5e0!3m2!1str!2str!4v1702803390070!5m2!1str!2str',
    'bitlis' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50025.60311791953!2d42.07171993154885!3d38.4044922890757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400d240db840094d%3A0xfd60b10f9b0fe4bf!2sBitlis%2C%20Bitlis%20Merkez%2FBitlis!5e0!3m2!1sde!2str!4v1689857427521!5m2!1sde!2str',
    'adilcevaz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24872.266604529825!2d42.732438804358246!3d38.80878969152331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4012a5443d67de35%3A0x24c5c92fe0f1c39!2sAdilcevaz%2C%20Bitlis%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717254851450!5m2!1sen!2sua',
    'ahlat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199022.60228833513!2d42.19290541173304!3d38.792865753345176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400d54c8d823f075%3A0x5cdc0317c4369e3a!2sAhlat%2FBitlis%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717254866392!5m2!1sen!2sua',
    'guroymak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24954.456839656017!2d42.01016030359123!3d38.57277519485548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400d33167fc09575%3A0xa9eaa8c3d19dc219!2zR8O8cm95bWFrLCBCaXRsaXMsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717254886535!5m2!1sen!2sua',
    'hizan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12537.617054758564!2d42.40884425929986!3d38.22372555000712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400d01a5c22496ad%3A0xba0f7a8a59a07b54!2sHizan%2C%20Bitlis%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717254901076!5m2!1sen!2sua',
    'mutki' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400040.7923361492!2d41.41850171226542!3d38.434107190411574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400cd45620220871%3A0x25f51e89eadfa967!2sMutki%2FBitlis%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717254915600!5m2!1sen!2sua',
    'tatvan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49956.83131503045!2d42.2501357942075!3d38.50374628325033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400d3ecb3edb0c6d%3A0x435784d9e044079b!2sTatvan%2C%20Bitlis%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717254929591!5m2!1sen!2sua',
    'bolu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48371.119168210054!2d31.57377091136213!3d40.735735675566055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d3f16dc8406d1%3A0x83cc363ab54b82e9!2sBolu%2C%20Bolu%20Merkez%2FBolu!5e0!3m2!1sde!2str!4v1689857451855!5m2!1sde!2str',
    'dortdivan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12095.644946062266!2d32.05260781135479!3d40.71997049227486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4082cd65525262eb%3A0xce0b39f98447da49!2zRMO2cnRkaXZhbiwgQm9sdSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717254989461!5m2!1sen!2sua',
    'gerede' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24164.276098141847!2d32.18005191096456!3d40.794246618371155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4082d5a54363094f%3A0xed5da141bf6ed4c1!2sGerede%2C%20Bolu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255033335!5m2!1sen!2sua',
    'goynuk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12153.117827730304!2d30.775826761087604!3d40.40265954306604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccddceb603f4ab%3A0xef7cc67adc538268!2zR8O2eW7DvGssIEJvbHUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717255048376!5m2!1sen!2sua',
    'kibriscik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194261.2670943272!2d31.73560063441249!3d40.46791301278748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4082af44ac23aa7f%3A0x75799ee829b6ca7!2zS8SxYnLEsXNjxLFrL0JvbHUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717255064269!5m2!1sen!2sua',
    'mengen' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24112.48165012787!2d32.0533644114478!3d40.936347667050306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409cd736ac5f405d%3A0x2e46c664dd2516a1!2sMengen%2C%20Bolu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255077493!5m2!1sen!2sua',
    'mudurnu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12141.74830699976!2d31.201905261140435!3d40.465594592904644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cd342d677c1f7b%3A0xa0192478bd111cf0!2sMudurnu%2C%20Bolu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255092054!5m2!1sen!2sua',
    'seben' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6075.804890126474!2d31.566744094617626!3d40.41101188576172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cd54e7ee0928d1%3A0x24cabd5043c7eb6a!2zU2ViZW4sIEJvbHUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717255106524!5m2!1sen!2sua',
    'yenicaga' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6043.184337554008!2d32.028015694693394!3d40.77099388553897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d2ce2b8b16cc5%3A0xf20a7dd0f4a05d3e!2zWWVuacOnYcSfYSwgQm9sdSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717255122671!5m2!1sen!2sua',
    'burdur' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50487.21129514587!2d30.241219873228268!3d37.732569330693316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c42c1038052bdd%3A0x7f33fbee17399f8b!2sBurdur%2C%20Burdur%20Merkez%2FBurdur!5e0!3m2!1sde!2str!4v1689857476824!5m2!1sde!2str',
    'aglasun' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202264.37982000317!2d30.44440510771918!3d37.61672634625246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c44c009017cfc3%3A0xc18bb0ce04c35c04!2zQcSfbGFzdW4vQnVyZHVyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717255161400!5m2!1sen!2sua',
    'altinyayla' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6177.429052458253!2d36.74675564442313!3d39.27204338658563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4078df409b7d0ddb%3A0xc8fb1d5a8f566347!2zQWx0xLFueWF5bGEsIFNpdmFzLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821964826!5m2!1sen!2sua',
    'bucak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25336.910693153004!2d30.55404695002187!3d37.458034062245936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c4412465fcd33b%3A0x3663edef3f8ef7c7!2sBucak%2C%20Burdur%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255198597!5m2!1sen!2sua',
    'cavdir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12719.579263172329!2d29.678382158453722!3d37.15520050436484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c13a1fdabadf67%3A0x6a4dfa463970fa41!2zw4dhdmTEsXIsIEJ1cmR1ciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717255212367!5m2!1sen!2sua',
    'celtikci' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12656.09149939065!2d30.474971708748946!3d37.5309580527614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c439002608ec05%3A0x541fbdd5fd3299fc!2zw4dlbHRpa8OnaSwgQnVyZHVyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717255225906!5m2!1sen!2sua',
    'golhisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25442.071448686478!2d29.492920449040376!3d37.146542217590394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c12155c83d487d%3A0xfcffc401cf601580!2zR8O2bGhpc2FyLCBCdXJkdXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717255238236!5m2!1sen!2sua',
    'karamanli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25363.81496275723!2d29.805148399770797!3d37.37855331358958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c6b5d8edfce5fb%3A0xe047853f18ed977!2zS2FyYW1hbmzEsSwgQnVyZHVyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717255253129!5m2!1sen!2sua',
    'tefenni' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12693.457942188255!2d29.765694808575194!3d37.31019310369414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c6cab21e35daf5%3A0x81bfb5e4f5a5ece2!2sTefenni%2C%20Burdur%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255292214!5m2!1sen!2sua',
    'yesilova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12660.400354321479!2d29.741598758728916!3d37.505557452867386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c6c7a86dcbc379%3A0xb1ba002d5dff9ea6!2zWWXFn2lsb3ZhLCBCdXJkdXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717255305532!5m2!1sen!2sua',
    'bursa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194972.0364669182!2d28.867479521582627!3d40.22156112665968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca1582d8d45695%3A0x61a00555fc973392!2zQnVyc2EsIFTDvHJrZWk!5e0!3m2!1sde!2slu!4v1689218062768!5m2!1sde!2slu',
    'buyukorhan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12266.378059003098!2d28.87390626056097!3d39.77121159480711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c9e8c61f91c163%3A0xe3c9b0b36ef190a7!2zQsO8ecO8a29yaGFuLCBCdXJzYSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717255365719!5m2!1sen!2sua',
    'gemlik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24294.914166156577!2d29.142862909745677!3d40.434004271921516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca5b98fcc5620d%3A0xcef633735140b77d!2sGemlik%2C%20Bursa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255382650!5m2!1sen!2sua',
    'gursu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24375.18423230234!2d29.166884908996707!3d40.21133117426067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca386101e16875%3A0xa53ece4b14796dde!2zR8O8cnN1LCBCdXJzYSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717255396720!5m2!1sen!2sua',
    'harmancik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196480.4295245072!2d28.949967810773522!3d39.69455305915482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c99414210abfef%3A0x961cbb336ffd783c!2zSGFybWFuY8Sxay9CdXJzYSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717255410283!5m2!1sen!2sua',
    'inegol' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48832.99769502285!2d29.44928686532776!3d40.09632265188741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cbc961d96a58f3%3A0x489c28e5e40d3937!2zxLBuZWfDtmwsIEJ1cnNhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717255424747!5m2!1sen!2sua',
    'iznik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48592.38130857722!2d29.673542869848823!3d40.430471187670896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb0bc05d7864f5%3A0x17b677c58432bec8!2zxLB6bmlrLCBCdXJzYSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717255438548!5m2!1sen!2sua',
    'karacabey' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24374.64239892704!2d28.341906809001742!3d40.21283767424447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5e13542fc902b%3A0xb8cd61dab1850ba1!2sKaracabey%2C%20Bursa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255454962!5m2!1sen!2sua',
    'keles' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6120.517587488121!2d29.227162244513906!3d39.91322438609967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c988009f0b5093%3A0x763006a717e91538!2sKeles%2C%20Bursa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255467426!5m2!1sen!2sua',
    'mudanya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48639.181503298576!2d28.85821786896948!3d40.36565864035066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca6de9379bbbb5%3A0xaf4e4db3f7acd277!2sMudanya%2C%20Bursa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255482335!5m2!1sen!2sua',
    'mustafakemalpasa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24437.284560983153!2d28.382988358417258!3d40.03835717615387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b60ebf7cb65307%3A0x4672ba2dc707d31a!2sMustafakemalpa%C5%9Fa%2C%20Bursa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255498092!5m2!1sen!2sua',
    'nilufer' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195085.50095516388!2d28.671393719932226!3d40.1821185547811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca05620c05be45%3A0xb41d1ba82a41bf94!2zTmlsw7xmZXIvQnVyc2EsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717255514392!5m2!1sen!2sua',
    'orhaneli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12242.623015089055!2d28.977046310671444!3d39.90433904442163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c9f388973ab6f3%3A0xf2827ccdee17d836!2sOrhaneli%2C%20Bursa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255528212!5m2!1sen!2sua',
    'orhangazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24274.2014155205!2d29.28813540993892!3d40.49129767133751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caf8a407790a17%3A0x3d91896364bbec6e!2sOrhangazi%2C%20Bursa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255543917!5m2!1sen!2sua',
    'osmangazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d390230.5491329593!2d28.765046530042362!3d40.17176331428381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca3c330cd4513b%3A0x67ea9d59607ca3a!2sOsmangazi%2FBursa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717255558366!5m2!1sen!2sua',
    'yenisehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102176.85051981792!2d34.52552605!3d36.84183949999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1527f597c18ea053%3A0x34bcb2ee264984e2!2zWWVuacWfZWhpci9NZXJzaW4sIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685921137!5m2!1sen!2snl',
    'yildirim' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195139.17367414277!2d28.97854636573288!3d40.16344961772755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca3eb5cd09a047%3A0x2d892c3369ff951!2zWcSxbGTEsXLEsW0vQnVyc2EsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717255589908!5m2!1sen!2sua',
    'canakkale' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48808.42641216781!2d26.385893353483375!3d40.13055110039881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b1a9d8214a2f3f%3A0x8cebeb3703e22f7f!2zw4dhbmFra2FsZSwgw4dhbmFra2FsZSBNZXJrZXovw4dhbmFra2FsZQ!5e0!3m2!1sde!2str!4v1689857497409!5m2!1sde!2str',
    'ayvacik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191729.93072628224!2d35.95378292344443!3d41.33539340149455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087f6b67daa09af%3A0x1d11ad138d27791b!2zQXl2YWPEsWsvU2Ftc3VuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1716081563641!5m2!1sen!2sua',
    'bayramic' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12259.876020562024!2d26.598907260591222!3d39.80768704470053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0f0278f7a70e3%3A0x945771c4e3746d7d!2zQmF5cmFtacOnLCDDh2FuYWtrYWxlLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717255644437!5m2!1sen!2sua',
    'biga' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24369.891419088613!2d27.22237035904609!3d40.22604517410271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b6b3e8ed742f0b%3A0x5db6d4ca26019f8f!2zQmlnYSwgw4dhbmFra2FsZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717255657371!5m2!1sen!2sua',
    'bozcaada' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6127.54024623275!2d26.062441644497575!3d39.83457138615619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b01557449518e5%3A0xbc7c6034bce70bb3!2zQm96Y2FhZGEsIMOHYW5ha2thbGUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717255669642!5m2!1sen!2sua',
    'can' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24439.807334199162!2d27.03731840839372!3d40.031317126232345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b12e23a5087c89%3A0x44da8d0731570735!2zw4dhbiwgw4dhbmFra2FsZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717255697262!5m2!1sen!2sua',
    'eceabat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24386.412751733897!2d26.34067885889193!3d40.180101124597556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b1a8ee52f4c941%3A0xf0d38dfb1120794f!2zRWNlYWJhdCwgw4dhbmFra2FsZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717255712324!5m2!1sen!2sua',
    'ezine' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24528.542820378363!2d26.31677585756573!3d39.78303262906986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b05e6686956a13%3A0x7cd3294984fd62dc!2zRXppbmUsIMOHYW5ha2thbGUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717255725314!5m2!1sen!2sua',
    'gelibolu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24301.938975653105!2d26.65162880968012!3d40.4145577221214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b16f12f03017dd%3A0xfb06cb866a7369d7!2zR2VsaWJvbHUsIMOHYW5ha2thbGUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717255738819!5m2!1sen!2sua',
    'gokceada' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12189.979852265325!2d25.898387160916183!3d40.19805154360593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b1ccfc636f57bf%3A0x54386839adc761c3!2zR8O2a8OnZWFkYSwgw4dhbmFra2FsZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717255754318!5m2!1sen!2sua',
    'lapseki' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12164.114429438167!2d26.668670311036436!3d40.341711393224415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b16c027d0bff13%3A0x6fe94fd0d6443a98!2sLapseki%2C%2017800%20Lapseki%2F%C3%87anakkale%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717256229995!5m2!1sen!2sua',
    'yenice' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24012.08186262892!2d32.28743881238453!3d41.21065016462822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409cba5e8623c75d%3A0xade73e9a18e4d19b!2zWWVuaWNlLCBLYXJhYsO8aywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260220543!5m2!1sen!2sua',
    'cankiri' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48464.338997825274!2d33.573388459682704!3d40.60735618056112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4083c36f2a9f52bf%3A0xf5f91d66cd94dd3a!2zw4dhbmvEsXLEsSwgw4dhbmvEsXLEsSBNZXJrZXovw4dhbmvEsXLEsQ!5e0!3m2!1sde!2str!4v1689857518837!5m2!1sde!2str',
    'atkaracalar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24158.64662232354!2d33.05785536101709!3d40.80971116822522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40830b74d9207617%3A0x8f64a7210d7d17bb!2zQXRrYXJhY2FsYXIsIMOHYW5rxLFyxLEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256280070!5m2!1sen!2sua',
    'bayramoren' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96368.10094090957!2d33.09884447499591!3d40.99235916275919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40837aea47b7aa51%3A0x481cb7009790d4af!2zQmF5cmFtw7ZyZW4vw4dhbmvEsXLEsSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256321198!5m2!1sen!2sua',
    'cerkes' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96368.10094090957!2d33.09884447499591!3d40.99235916275919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408311db3d2c9687%3A0xfcd135860303805b!2zw4dlcmtlxZ8sIMOHYW5rxLFyxLEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256333593!5m2!1sen!2sua',
    'eldivan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12130.536287977346!2d33.48517831119255!3d40.527578542747875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4083cf03b7f3529f%3A0x4f8962ffde933776!2zRWxkaXZhbiwgw4dhbmvEsXLEsSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256363618!5m2!1sen!2sua',
    'ilgaz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24115.960268895895!2d33.60502996141536!3d40.92681661713748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408388ef01a502af%3A0xfc72a054649e32ec!2zSWxnYXosIMOHYW5rxLFyxLEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256377862!5m2!1sen!2sua',
    'kizilirmak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6081.618943636298!2d33.981814094604005!3d40.34657238580363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081715fc0a2c31d%3A0x7318bbeb3700e864!2zS8SxesSxbMSxcm1haywgw4dhbmvEsXLEsSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256390647!5m2!1sen!2sua',
    'korgun' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12093.57011037621!2d33.502271361364436!3d40.73138754224746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408395a5ef5a404b%3A0xbc189563ec8b00f5!2zS29yZ3VuLCDDh2Fua8SxcsSxLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256403586!5m2!1sen!2sua',
    'kursunlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12073.891513428547!2d33.24738726145594!3d40.83954054199127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40839e50b9e53389%3A0x5a6a122afb30d3a2!2zS3VyxZ91bmx1LCDDh2Fua8SxcsSxLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256419312!5m2!1sen!2sua',
    'orta' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12112.548729368078!2d33.09465076127621!3d40.6268565425012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4083ae860a0758f9%3A0xcd7eab2ae31e3902!2zT3J0YSwgw4dhbmvEsXLEsSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256432864!5m2!1sen!2sua',
    'sabanozu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12139.141201047914!2d33.26581776115257!3d40.48001459286798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40823537fb51b5af%3A0xf7a8716618ed18f6!2zxZ5hYmFuw7Z6w7wsIMOHYW5rxLFyxLEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256445578!5m2!1sen!2sua',
    'yaprakli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12088.596068960673!2d33.769862311387584!3d40.75874709218202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4083ee139f4b0c1d%3A0x308705b82cafdd15!2zWWFwcmFrbMSxLCDDh2Fua8SxcsSxLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256457854!5m2!1sen!2sua',
    'corum' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97033.26262794847!2d34.859502736149594!3d40.53519373228124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40872a9f1a35ab71%3A0xa34943cf02a0f8d5!2zw4dvcnVtLCDDh29ydW0gTWVya2V6L8OHb3J1bSwgVMO8cmtlaQ!5e0!3m2!1sde!2slu!4v1689217999617!5m2!1sde!2slu',
    'alaca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24389.95995307378!2d34.847637549999995!3d40.170231050000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4080ec43b1d7dbf9%3A0xc5d09fcce84ea4ef!2zQWxhY2EsIMOHb3J1bQ!5e0!3m2!1str!2str!4v1690836100012!5m2!1str!2str',
    'bayat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12110.026926141632!2d34.260687399999995!3d40.640758999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40815028d4e8d039%3A0x934c6ab747dbc11a!2zQmF5YXQsIMOHb3J1bQ!5e0!3m2!1str!2str!4v1690836119089!5m2!1str!2str',
    'bogazkale' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12220.699310905247!2d34.609954949999995!3d40.02687595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40805f482674ab61%3A0x932b31e6e745d730!2zQm_En2F6a2FsZSwgw4dvcnVt!5e0!3m2!1str!2str!4v1690836141341!5m2!1str!2str',
    'dodurga' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12070.556914036715!2d34.815066949999995!3d40.857844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4086bf906eee8bb5%3A0xda8c12362aa77454!2zRG9kdXJnYSwgw4dvcnVt!5e0!3m2!1str!2str!4v1690836163628!5m2!1str!2str',
    'iskilip' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24187.75491206239!2d34.47299545!3d40.729696499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4086b3adeded8391%3A0xb2be07cfec1f4fc8!2zxLBza2lsaXAsIDE5NDAwIMSwc2tpbGlwL8OHb3J1bQ!5e0!3m2!1str!2str!4v1690836184526!5m2!1str!2str',
    'kargi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12019.262918417768!2d34.486324950000004!3d41.138548449999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4084259a998e06cf%3A0x5772f92d3efdc5bf!2zS2FyZ8SxLCDDh29ydW0!5e0!3m2!1str!2str!4v1690836204149!5m2!1str!2str',
    'lacin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12085.84349876914!2d34.889016999999996!3d40.773880999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4086c47a5f77af69%3A0x792f1e19790aa200!2zTGHDp2luLCDDh29ydW0!5e0!3m2!1str!2str!4v1690836224251!5m2!1str!2str',
    'mecitozu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12131.53942461837!2d35.30065755!3d40.52203605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087312bc306b53b%3A0xfbe1b96bbf991f1b!2zTWVjaXTDtnrDvCwgw4dvcnVt!5e0!3m2!1str!2str!4v1690836244374!5m2!1str!2str',
    'oguzlar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12089.243004935115!2d34.704750000000004!3d40.75518949999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4086c810bff4922f%3A0x877b7cbe0cb7cc0b!2zT8SfdXpsYXIsIMOHb3J1bQ!5e0!3m2!1str!2str!4v1690836266492!5m2!1str!2str',
    'ortakoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194769.90855698843!2d35.2360815!3d40.29174549999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4080b74e639f13b7%3A0xddc522ea4200e3b8!2zT3J0YWvDtnkvw4dvcnVt!5e0!3m2!1str!2str!4v1690836288521!5m2!1str!2str',
    'osmancik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194769.90855698843!2d35.2360815!3d40.29174549999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4086852dc0bd4395%3A0xd82a19b1d52cb32!2zT3NtYW5jxLFrL8OHb3J1bQ!5e0!3m2!1str!2str!4v1690836308763!5m2!1str!2str',
    'sungurlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48783.271823874245!2d34.3880724!3d40.165566999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408101cc033e564d%3A0xac0dd3a959473ab8!2sSungurlu%2C%20%C3%87orum!5e0!3m2!1str!2str!4v1690836344583!5m2!1str!2str',
    'ugurludag' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12145.281965934568!2d34.450547!3d40.446043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40813c5815da5b6b%3A0xc6daa547f77fd24b!2zVcSfdXJsdWRhxJ8sIMOHb3J1bQ!5e0!3m2!1str!2str!4v1690836371672!5m2!1str!2str',
    'diyarbakir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100714.50072574562!2d40.08027691495796!3d37.922763722791764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40751fa80abac46b%3A0x53070c279310852c!2sDiyarbak%C4%B1r!5e0!3m2!1sde!2str!4v1689857541804!5m2!1sde!2str',
    'baglar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201728.6526008521!2d39.86603964971207!3d37.81323014180488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4075163e8c7d9db9%3A0x7c35d5fe59996244!2zQmHEn2xhci9EaXlhcmJha8SxciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256510636!5m2!1sen!2sua',
    'bismil' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25202.971439097193!2d40.64570435127196!3d37.85159870579562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400b2cc84e33a5f3%3A0xc7e33e7a5dc6cf58!2zQmlzbWlsLCBEaXlhcmJha8SxciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256525797!5m2!1sen!2sua',
    'cermik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12552.639719011366!2d39.45220425923!3d38.13647405033956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4075b7d80294ae97%3A0x802677f73bb29b25!2zw4dlcm1paywgRGl5YXJiYWvEsXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256542571!5m2!1sen!2sua',
    'cinar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12623.540181873104!2d40.40357030890033!3d37.722376051974166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40752d59bdafc62d%3A0x1c0b7487e2e01fed!2zw4fEsW5hciwgRGl5YXJiYWvEsXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256555776!5m2!1sen!2sua',
    'cungus' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6269.84422945574!2d39.284308644167304!3d38.21170488751368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4075d1cd502bc6f7%3A0x397f633996af6fe0!2zw4fDvG5nw7zFnywgRGl5YXJiYWvEsXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256569280!5m2!1sen!2sua',
    'dicle' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12512.903736251592!2d40.06439470941474!3d38.366894499470654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40746ed4da4e2957%3A0x467753e07871fecd!2zRGljbGUsIERpeWFyYmFrxLFyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256586108!5m2!1sen!2sua',
    'egil' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6265.773341128541!2d40.07829069417676!3d38.258934387469054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40745c2b1fe8de87%3A0x6afdef6d5e4f2701!2zRcSfaWwsIERpeWFyYmFrxLFyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256597896!5m2!1sen!2sua',
    'ergani' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25060.227104125483!2d39.73936290260416!3d38.267242699351094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074488e4882f605%3A0xf57d4d68dcf6a0a!2zRXJnYW5pLCBEaXlhcmJha8SxciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256609988!5m2!1sen!2sua',
    'hani' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12505.819400685197!2d40.3870322094477!3d38.40785209931924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40747ec1a0247f9f%3A0x1e483447ce106740!2zSGFuaSwgRGl5YXJiYWvEsXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256623957!5m2!1sen!2sua',
    'hazro' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12532.46021501896!2d40.77094025932382!3d38.253637549894094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40749f6e2609f7c7%3A0x1f31a231d5789e52!2zSGF6cm8sIERpeWFyYmFrxLFyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256639323!5m2!1sen!2sua',
    'kayapinar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201222.68232057604!2d39.83787873936696!3d37.998025004468275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4075031a1c2413eb%3A0x9177de37a8a967ce!2zS2F5YXDEsW5hci9EaXlhcmJha8SxciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256652847!5m2!1sen!2sua',
    'kocakoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6263.101397450075!2d40.496147694183016!3d38.28990683743989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074859f90de16af%3A0xc4998250f6ebcbf9!2zS29jYWvDtnksIERpeWFyYmFrxLFyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256665882!5m2!1sen!2sua',
    'kulp' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6244.997224474418!2d41.0062701942249!3d38.49920988724672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40736d2c2ad48563%3A0x62aa78f85ccb9093!2zS3VscCwgRGl5YXJiYWvEsXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256678538!5m2!1sen!2sua',
    'lice' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12497.015213171357!2d40.64263435948865!3d38.45870149913259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407378e54460839f%3A0xb828b613e648b7ec!2zTGljZSwgRGl5YXJiYWvEsXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256690790!5m2!1sen!2sua',
    'silvan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25102.57016626506!2d40.99231695220899!3d38.14434870121714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074a94f5326358b%3A0xc7decadbdb47f5cd!2zU2lsdmFuLCBEaXlhcmJha8SxciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256703876!5m2!1sen!2sua',
    'sur' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402219.1388348906!2d40.11798625249011!3d38.03923276802283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074c2617873b7c7%3A0x987d7b1cdf6bf304!2zU3VyL0RpeWFyYmFrxLFyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256716758!5m2!1sen!2sua',
    'duzce' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48285.67419836617!2d31.11139891290143!3d40.85311517112772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409da01b6536d421%3A0xe1d0a622568cf8d7!2zRMO8emNlLCBEw7x6Y2UgTWVya2V6L0TDvHpjZQ!5e0!3m2!1sde!2str!4v1689857563381!5m2!1sde!2str',
    'akcakoca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48118.965609841835!2d31.10351032874316!3d41.08133366283736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409db3d59a97f919%3A0x5b9f88736721eb16!2zQWvDp2Frb2NhLCBEw7x6Y2UsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256768156!5m2!1sen!2sua',
    'cumayeri' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24134.339480678173!2d30.925309411243873!3d40.87642911760177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d99d2e5af6fa5%3A0x5107f7750a8a01e9!2zQ3VtYXllcmksIETDvHpjZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256780485!5m2!1sen!2sua',
    'cilimli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24128.695368767432!2d31.023835361296538!3d40.89190816745853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409da26e62010d8f%3A0xd665a099f89b7620!2zw4dpbGltbGksIDgxNzUwIMOHaWxpbWxpL0TDvHpjZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256794657!5m2!1sen!2sua',
    'golyaka' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24170.258349231455!2d30.963535860908735!3d40.77780766852686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d9c93e9cbb221%3A0x7f04005a1c653384!2zR8O2bHlha2EsIETDvHpjZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256806996!5m2!1sen!2sua',
    'gumusova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12071.904133201337!2d30.928814261465153!3d40.85044999196581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d998c8c7956b3%3A0xdd7aca4232ecd007!2zR8O8bcO8xZ9vdmEsIETDvHpjZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256818013!5m2!1sen!2sua',
    'kaynasli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24171.702052830973!2d31.299091460895283!3d40.773839618564544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d728f5e1ea57f%3A0xca3bbb42e6d929a3!2zS2F5bmHFn2zEsSwgRMO8emNlLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256829998!5m2!1sen!2sua',
    'yigilca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12051.485588046922!2d31.436843311560082!3d40.96239604170824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d04307d50fb0d%3A0xd90e551a1f4eec7e!2zWcSxxJ_EsWxjYSwgRMO8emNlLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256845184!5m2!1sen!2sua',
    'edirne' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47686.278347005325!2d26.532124823698528!3d41.66886819368524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b32f77a26304e1%3A0xa0cfc0ca431c30bc!2sEdirne%2C%20Edirne%20Merkez%2FEdirne!5e0!3m2!1sde!2str!4v1689857592254!5m2!1sde!2str',
    'enez' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6047.383226522007!2d26.077510694683706!3d40.72480483556641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b18a813d211341%3A0x8e8d2aede261a33b!2sEnez%2C%20Edirne%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717256914606!5m2!1sen!2sua',
    'havsa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23885.64661855035!2d26.79780046356412!3d41.553966261833814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b34712ca84ff29%3A0xf60f66b243517a0a!2sHavsa%2C%20Edirne%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717256928288!5m2!1sen!2sua',
    'ipsala' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24119.964522982194!2d26.358210911378002!3d40.91584311723811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b235024a686961%3A0xa71d37c46ba68a4!2zxLBwc2FsYSwgRWRpcm5lLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717256939906!5m2!1sen!2sua',
    'kesan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48280.33099569351!2d26.59647572571162!3d40.86044612084134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b3c64a2c74ea07%3A0xcf3913086bf7c46a!2zS2XFn2FuLCBFZGlybmUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256952028!5m2!1sen!2sua',
    'lalapasa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190145.2025476064!2d26.61123460620039!3d41.8709421895316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a765b95b591e1b%3A0x121c86772a11c3f2!2zTGFsYXBhxZ9hL0VkaXJuZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256964250!5m2!1sen!2sua',
    'meric' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192178.282081998!2d26.28193739730182!3d41.18284203356159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b3ab41c5ea493f%3A0x252ca3b01cf15d1a!2zTWVyacOnL0VkaXJuZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717256976263!5m2!1sen!2sua',
    'suloglu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11903.390392921872!2d26.89400531224861!3d41.76694354006318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a75eda366cb029%3A0x94c09feda55b7ef0!2zU8O8bG_En2x1LCBFZGlybmUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717256988711!5m2!1sen!2sua',
    'uzunkopru' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d383998.48388589226!2d26.38423820564401!3d41.24381591897604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b30bf2d3a03c87%3A0x4a67287c12a35991!2zVXp1bmvDtnByw7wvRWRpcm5lLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257004170!5m2!1sen!2sua',
    'elazig' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49845.02318423031!2d39.15695233480354!3d38.66465232402599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076c06c76eaf697%3A0x12dab4118a3d2f39!2zRWzDonrEscSfLCBFbMOiesSxxJ8gTWVya2V6L0VsYXrEscSf!5e0!3m2!1sde!2str!4v1689857614457!5m2!1sde!2str',
    'agin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198588.78322166865!2d38.5017993957087!3d38.947976617139446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4077394e8327e61d%3A0xbe02777bac53730c!2zQcSfxLFuL0VsYXrEscSfLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257040005!5m2!1sen!2sua',
    'alacakaya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199884.38459158276!2d39.69351874422852!3d38.483176535436165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407411714a9ca485%3A0x914363a3558ffd19!2zQWxhY2FrYXlhL0VsYXrEscSfLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257053245!5m2!1sen!2sua',
    'aricak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3119.6827796359194!2d40.132606575732325!3d38.56412192179714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40740a8515bc05ed%3A0x318967a31d4f9a65!2zQXLEsWNhaywgRWxhesSxxJ8sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717257066678!5m2!1sen!2sua',
    'baskil' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6238.847082046956!2d38.81900109423915!3d38.570093387182794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076f739fa18c731%3A0xd5307304bd4cd6fb!2zQmFza2lsLCBFbGF6xLHEnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257079356!5m2!1sen!2sua',
    'karakocan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12410.908204070194!2d40.02980525988899!3d38.95306354739177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40716649e0cc0bb3%3A0x1c752b6a312949c0!2zS2FyYWtvw6dhbiwgRWxhesSxxJ8sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717257091030!5m2!1sen!2sua',
    'keban' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12438.512617215374!2d38.72874225976066!3d38.79515799793317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40771ed76297992f%3A0x2537192a40c59238!2zS2ViYW4sIEVsYXrEscSfLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257104224!5m2!1sen!2sua',
    'kovancilar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12451.939280523273!2d39.85437075969822!3d38.71815749820218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4071559cb58a23f7%3A0x37b6dc4f443a0c9f!2zS292YW5jxLFsYXIsIEVsYXrEscSfLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257115979!5m2!1sen!2sua',
    'maden' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12508.02802570784!2d39.66441880943741!3d38.39508704936634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40743b7e13bfdd01%3A0xa103ad02dca2f57a!2zTWFkZW4sIEVsYXrEscSfLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257130684!5m2!1sen!2sua',
    'palu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6228.256963774502!2d39.92139209426403!3d38.69189288707426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4073fe93325d4b57%3A0x7df92da7c5c0a65!2zUGFsdSwgRWxhesSxxJ8sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717257142788!5m2!1sen!2sua',
    'sivrice' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12498.217557549497!2d39.29224325948306!3d38.451760599157964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076834750f6c6df%3A0xd142bba40239e21d!2zU2l2cmljZSwgRWxhesSxxJ8sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717257154694!5m2!1sen!2sua',
    'erzincan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49082.71700612581!2d39.462708848541126!3d39.74706721782128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40700cc900531deb%3A0x1fb8de6e1302e7a9!2sErzincan%2C%20Erzincan%20Merkez%2FErzincan!5e0!3m2!1sde!2str!4v1689857635322!5m2!1sde!2str',
    'cayirli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12259.95448366621!2d40.02963731059087!3d39.80724704470181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4070204406edda81%3A0x3d26c94b2f1c0022!2zw4dhecSxcmzEsSwgRXJ6aW5jYW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717257262935!5m2!1sen!2sua',
    'ilic' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12322.019845926308!2d38.55304276030231!3d39.4579195957531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407a0d9a8a0c3c3f%3A0x92540c9c2a3165a6!2zxLBsacOnLCBFcnppbmNhbiwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257275325!5m2!1sen!2sua',
    'kemah' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6148.38917501844!2d39.03256314444924!3d39.60029883632977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407a7feb3a38dfa5%3A0x28470ee5f152ec70!2sKemah%2C%20Erzincan%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257288435!5m2!1sen!2sua',
    'kemaliye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12356.815854908587!2d38.487695210140494!3d39.26093854637569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407a007950dd1c53%3A0x41effcb25d45c00c!2sKemaliye%2C%20Erzincan%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257298936!5m2!1sen!2sua',
    'otlukbeli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6115.0808340451695!2d40.01902709452664!3d39.97402688605656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406fe56b031d27b1%3A0xc98ea5aa13fb4350!2sOtlukbeli%2C%20Erzincan%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257309801!5m2!1sen!2sua',
    'refahiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12243.362755242035!2d38.76296171066801!3d39.90019899443348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407aee4a51bd56f7%3A0xdfbaeaa225f56bd6!2sRefahiye%2C%20Erzincan%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257322780!5m2!1sen!2sua',
    'tercan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12264.937913926047!2d40.37898571056768!3d39.77929299478345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406fd15efa25c969%3A0x5f7f2ea162cfce04!2sTercan%2C%20Erzincan%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257338782!5m2!1sen!2sua',
    'uzumlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24557.56246353736!2d39.67013485729496!3d39.70155418003089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4070146e4ed2e941%3A0xea9d55f44c1e53bc!2zw5x6w7xtbMO8LCBFcnppbmNhbiwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257350482!5m2!1sen!2sua',
    'erzurum' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48965.09267459613!2d41.22231690066056!3d39.91189271017282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406e5f28a5eb94f1%3A0x10e3fd56abbfb86!2sErzurum!5e0!3m2!1sde!2str!4v1689857655079!5m2!1sde!2str',
    'askale' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12239.253025719901!2d40.680626760687105!3d39.92319509436782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406fb44335f8a287%3A0x4d69b41ba344ba23!2zQcWfa2FsZSwgRXJ6dXJ1bSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257392412!5m2!1sen!2sua',
    'aziziye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d390825.5899485757!2d40.617689182031654!3d40.06816385467012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406faa63537d9d47%3A0x2a6663ea42045cde!2sAziziye%2FErzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257409586!5m2!1sen!2sua',
    'cat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393537.1079838461!2d40.60130473522158!3d39.59322271406902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406e19e8f7c3fb25%3A0x59ab0a20f2bb96a5!2zw4dhdC9Fcnp1cnVtLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257430115!5m2!1sen!2sua',
    'hinis' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24677.914317416333!2d41.6819010061719!3d39.36214018419245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406d947404aa49c3%3A0x48cc26b6f3afe805!2zSMSxbsSxcywgRXJ6dXJ1bSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257441629!5m2!1sen!2sua',
    'horasan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24438.028346299605!2d42.138262858410314!3d40.03628167617699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406ea8436eaaa8a7%3A0x7e7803ec1106a0d7!2sHorasan%2C%20Erzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257457567!5m2!1sen!2sua',
    'ispir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6068.967487465182!2d40.99659869463345!3d40.48668483571348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406f442fcf7ee82d%3A0xa33cf0ce9ff9e138!2zxLBzcGlyLCBFcnp1cnVtLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257472186!5m2!1sen!2sua',
    'karacoban' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12341.021690529273!2d42.08750471021393!3d39.35045204609013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406da6e03dcd67e5%3A0x70abad7af9071942!2zS2FyYcOnb2JhbiwgRXJ6dXJ1bSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257510356!5m2!1sen!2sua',
    'karayazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6139.240293462314!2d42.138901594470475!3d39.703243836252604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406c3778d1073c57%3A0xc2453accdf883145!2zS2FyYXlhesSxLCBFcnp1cnVtLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257532403!5m2!1sen!2sua',
    'koprukoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12230.749897374848!2d41.856635260726655!3d39.97073959423304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406e9862dbd5a1c9%3A0x8b48d006573f8d9!2zS8O2cHLDvGvDtnksIEVyenVydW0sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717257546924!5m2!1sen!2sua',
    'narman' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12163.396818913818!2d41.86131021103979!3d40.345691043214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4069327d0f81c717%3A0x20bdd8d0bd43248c!2sNarman%2C%20Erzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257565499!5m2!1sen!2sua',
    'oltu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24255.477105752398!2d41.96965181011364!3d40.543033170816464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406921c9ba4f7f15%3A0x7cb9287b3ac4839e!2sOltu%2C%20Erzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257577654!5m2!1sen!2sua',
    'olur' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193181.75510061273!2d41.945211368841676!3d40.839715230451866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406857f7799f4a59%3A0xf22292c6e17c7a31!2sOlur%2FErzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257592393!5m2!1sen!2sua',
    'palandoken' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d392141.4284961494!2d40.86067831524355!3d39.83827502085861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406e5c4ce697a8e3%3A0x8df7029114bd0d1e!2zUGFsYW5kw7ZrZW4vRXJ6dXJ1bSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257603910!5m2!1sen!2sua',
    'pasinler' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24459.396282062673!2d41.65470690821093!3d39.9766171268457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406e914404996b1d%3A0x2fc15adada987fcb!2sPasinler%2C%20Erzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257618371!5m2!1sen!2sua',
    'pazaryolu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d388776.8860989274!2d40.351583469415985!3d40.42392538303927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406f66f79c9ec533%3A0xf638a21a50c27c2c!2sPazaryolu%2FErzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257643396!5m2!1sen!2sua',
    'senkaya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24246.493711717703!2d42.32564396019746!3d40.567835020568786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406911c5a07af455%3A0xc5557760c52d8841!2zxZ5lbmtheWEsIEVyenVydW0sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717257656464!5m2!1sen!2sua',
    'tekman' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12288.890229227534!2d41.49652826045635!3d39.64470554518257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406dd877dc8e74f3%3A0x6cd6045451b4cabd!2sTekman%2C%20Erzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257670165!5m2!1sen!2sua',
    'tortum' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12172.132933705841!2d41.5328452109992!3d40.29722104334132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406ed77030a413b1%3A0x56a76090ab0b3479!2sTortum%2C%20Erzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257682154!5m2!1sen!2sua',
    'uzundere' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12129.936432365494!2d41.539645761195366!3d40.53089254273956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4068ce10289124e9%3A0x905cb8c589e3728!2sUzundere%2C%20Erzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257693451!5m2!1sen!2sua',
    'yakutiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12129.936432365494!2d41.539645761195366!3d40.53089254273956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406eefe4699690d3%3A0x89902f2131a70b92!2sYakutiye%2FErzurum%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717257707469!5m2!1sen!2sua',
    'eskisehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98139.43127263564!2d30.46241324214758!3d39.765313866387785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc3e08220c0e5f%3A0xbc89395938049a08!2zRXNracWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2sus!4v1689276930796!5m2!1sen!2sus',
    'alpu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12266.434206424234!2d30.950058260560716!3d39.77089649480805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cdb5b34fd3295b%3A0xe65c86570bfd66af!2zQWxwdSwgRXNracWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257743125!5m2!1sen!2sua',
    'beylikova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12280.029961099412!2d31.18901071049753!3d39.694535545033624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cdbefd6e1a9c9d%3A0x378c2de87249c11c!2zQmV5bGlrb3ZhLCBFc2tpxZ9laGlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257754752!5m2!1sen!2sua',
    'cifteler' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24673.043370862302!2d31.018996856217345!3d39.37592463401846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ce786718397ff9%3A0x76a8a7491bac0c37!2zw4dpZnRlbGVyLCBFc2tpxZ9laGlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257768344!5m2!1sen!2sua',
    'gunyuzu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6167.401791052383!2d31.806299694404878!3d39.385646436495335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d20e02adf57193%3A0x92bf5a633e9f0bc1!2zR8O8bnnDvHrDvCwgRXNracWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257781615!5m2!1sen!2sua',
    'han' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12374.68346723718!2d30.852440260057442!3d39.15946704670482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ce8ac6ced88703%3A0x72109a2c2654cdfa!2zSGFuLCBFc2tpxZ9laGlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257798542!5m2!1sen!2sua',
    'inonu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196291.08389827242!2d29.966523525592983!3d39.76102650885132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cbf895eb374c6f%3A0x1a97790e850728bd!2zxLBuw7Zuw7wvRXNracWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257812076!5m2!1sen!2sua',
    'mahmudiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24630.045639131593!2d30.96443345661855!3d39.49743058250307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cdd157c0d0ee63%3A0xf253247889c5328e!2zTWFobXVkaXllLCBFc2tpxZ9laGlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257824296!5m2!1sen!2sua',
    'mihaliccik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12249.622358061284!2d31.485179760638903!3d39.865151994534074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cd7881529320fd%3A0x1967b7e64b265994!2zTWloYWzEsWPDp8SxaywgRXNracWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257835867!5m2!1sen!2sua',
    'odunpazari' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393308.718755023!2d30.239586722868015!3d39.63340963984966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc223e9bc14ba3%3A0xf45f6ee23835953c!2zT2R1bnBhemFyxLEvRXNracWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257848887!5m2!1sen!2sua',
    'saricakaya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6109.373846621779!2d30.61534714453975!3d40.037768886011705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc5c07bff0f259%3A0x95f913b472d1b5cf!2zU2FyxLFjYWtheWEsIEVza2nFn2VoaXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717257872446!5m2!1sen!2sua',
    'seyitgazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6161.968561657995!2d30.688710094417527!3d39.44708728644739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ce9cc73302fe15%3A0xdd0d7941b3246484!2zU2V5aXRnYXppLCBFc2tpxZ9laGlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257885864!5m2!1sen!2sua',
    'sivrihisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12324.402502075!2d31.525105310291224!3d39.44445759579496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cdf12c9657a6d9%3A0xf55660c312ebb2b4!2zU2l2cmloaXNhciwgRXNracWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717257896220!5m2!1sen!2sua',
    'tepebasi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d392236.05937670416!2d30.246881399650015!3d39.82169957005386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc3f743f0e32c9%3A0xb17551cc7fba1b3e!2zVGVwZWJhxZ_EsS9Fc2tpxZ9laGlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717257912291!5m2!1sen!2sua',
    'gaziantep' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101886.30830921752!2d37.29773587208459!3d37.0587429542969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e6b4f7f18c2f%3A0xc02e8b35116baad0!2sGaziantep!5e0!3m2!1sde!2str!4v1689857959954!5m2!1sde!2str',
    'araban' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12673.736230833529!2d37.675888708666925!3d37.42684960319799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15323ef3606c5e97%3A0xced4a1374bb9a5ad!2sAraban%2C%20Gaziantep%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258587280!5m2!1sen!2sua',
    'islahiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25483.77401207785!2d36.61479779865114!3d37.022396719779195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152e55be988cc1b9%3A0xffd7d120ecfa5bc8!2zxLBzbGFoaXllLCBHYXppYW50ZXAsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717258598856!5m2!1sen!2sua',
    'karkamis' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6386.648817321126!2d37.99183664389609!3d36.83470593894896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153175e9eee31aa5%3A0xe417b8d0b8579e3e!2zS2Fya2FtxLHFnywgR2F6aWFudGVwLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717258610908!5m2!1sen!2sua',
    'nizip' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25488.780172229228!2d37.77174339860445!3d37.00746977004463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15318feeddefcf41%3A0xb298e263d2c6ce3!2sNizip%2C%20Gaziantep%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258624300!5m2!1sen!2sua',
    'nurdagi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25430.41161041907!2d36.71626184914921!3d37.18118921698549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152e5cf531e33f41%3A0xa0648350f5a3c08d!2zTnVyZGHEn8SxLCBHYXppYW50ZXAsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717258637495!5m2!1sen!2sua',
    'oguzeli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12751.854251432664!2d37.50276725830365!3d36.962927055215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e9cd8f93242f%3A0xc17fb55e1894fa76!2zT8SfdXplbGksIEdhemlhbnRlcCwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717258649320!5m2!1sen!2sua',
    'sahinbey' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12751.854251432664!2d37.50276725830365!3d36.962927055215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152e26387cf374fd%3A0x40c043edb6ff2fec!2zxZ5haGluYmV5L0dhemlhbnRlcCwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717258662090!5m2!1sen!2sua',
    'sehitkamil' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d408237.16271346866!2d36.9306508075138!3d36.92973502729902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531fd1f1915103f%3A0x6c571e492123af24!2zxZ5laGl0a2FtaWwvR2F6aWFudGVwLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717258675676!5m2!1sen!2sua',
    'yavuzeli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d406948.94038411323!2d37.01129487062767!3d37.169611940178974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15321942331d6b19%3A0xad53a99500c9e7f5!2sYavuzeli%2C%20Gaziantep%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258687586!5m2!1sen!2sua',
    'giresun' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48248.38260103614!2d38.338034313573225!3d40.904257169232416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40636c6b991a79b7%3A0x2409f2df5be31b5f!2sGiresun%2C%20Giresun%20Merkez%2FGiresun!5e0!3m2!1sde!2str!4v1689857997542!5m2!1sde!2str',
    'alucra' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d389103.43658672547!2d38.46996996565095!3d40.36739353261381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4064ccfb12fe8e59%3A0xa38a047cf9ce0c10!2sAlucra%2FGiresun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258729979!5m2!1sen!2sua',
    'bulancak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24113.263125058565!2d38.19546586144051!3d40.93420666706989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4063146cd676e727%3A0x68c25c0f3a092ec9!2sBulancak%2C%20Giresun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258742404!5m2!1sen!2sua',
    'camoluk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195197.24044275057!2d38.57510716118963!3d40.143244181795446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407b2711cf2357df%3A0x4c2a34593b523370!2zw4dhbW9sdWsvR2lyZXN1biwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717258759743!5m2!1sen!2sua',
    'dereli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12091.888743438803!2d38.44329581137226!3d40.740637542225265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40635c2a702c721d%3A0x2f57dc81aa160770!2sDereli%2C%20Giresun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258776541!5m2!1sen!2sua',
    'dogankent' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96690.00969407379!2d38.8647204127369!3d40.77163964544879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406485866f3a9e43%3A0xc92e2a0fd1e17c34!2zRG_En2Fua2VudC9HaXJlc3VuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717258789170!5m2!1sen!2sua',
    'espiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12054.59221040516!2d38.699180661545654!3d40.94538004174694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406379a925e3fbff%3A0x711f8ac7102cb202!2sEspiye%2C%20Giresun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258802357!5m2!1sen!2sua',
    'eynesil' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48139.6134331021!2d39.091943328355256!3d41.053124163835285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406475e307da11a1%3A0xcda9f49329ef4ce2!2sEynesil%2C%20Giresun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258820576!5m2!1sen!2sua',
    'gorele' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48139.6134331021!2d39.091943328355256!3d41.053124163835285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406387d50648453d%3A0xa665af74018acbcb!2zR8O2cmVsZSwgR2lyZXN1biwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717258833546!5m2!1sen!2sua',
    'guce' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12063.329729393592!2d38.79215976150503!3d40.89749049185673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40637e6b43042079%3A0x7374643ae26c49!2zR8O8Y2UsIEdpcmVzdW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717258846056!5m2!1sen!2sua',
    'kesap' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12060.728560347246!2d38.50142881151712!3d40.91175209182391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406371d5c6ee50ef%3A0x4e5e08c5a757f95b!2zS2XFn2FwLCBHaXJlc3VuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717258858824!5m2!1sen!2sua',
    'piraziz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12053.371030787512!2d38.111429211551346!3d40.95206954173172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4063161562c3cbe3%3A0x69eee7cf53021e40!2sPiraziz%2C%20Giresun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258872028!5m2!1sen!2sua',
    'sebinkarahisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12173.13629902723!2d38.40839371099452!3d40.29165104335605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407b479f1b6a28c1%3A0x2dc05992f2e08c05!2s%C5%9Eebinkarahisar%2C%20Giresun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258885072!5m2!1sen!2sua',
    'tirebolu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24086.276959969087!2d38.82542031169232!3d41.00808711640059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406383a11c3a32f3%3A0x65d620ccf21d381!2sTirebolu%2C%20Giresun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717258899234!5m2!1sen!2sua',
    'yaglidere' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12069.481028580214!2d38.61486466147642!3d40.86374804193486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406364b179ba78d5%3A0x822e662bced3e3c5!2zWWHEn2zEsWRlcmUsIEdpcmVzdW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717258913396!5m2!1sen!2sua',
    'gumushane' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24289.708239626332!2d39.46909036917311!3d40.44841067177565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40651be0ce04d859%3A0x43d3110073f991d8!2zR8O8bcO8xZ9oYW5lLCBHw7xtw7zFn2hhbmUgTWVya2V6L0fDvG3DvMWfaGFuZQ!5e0!3m2!1sde!2str!4v1689858042610!5m2!1sde!2str',
    'kelkit' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24403.66849772736!2d39.41619895873091!3d40.13206812511994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40654bb476b20c6b%3A0x1c3195d1e3f3dae2!2zS2Vsa2l0LCBHw7xtw7zFn2hhbmUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717258951287!5m2!1sen!2sua',
    'kose' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12187.518229596617!2d39.642197860927645!3d40.21174204356908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406544034f18b4e1%3A0x6982f3053c1230cd!2zS8O2c2UsIEfDvG3DvMWfaGFuZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717258963852!5m2!1sen!2sua',
    'kurtun' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387543.8100601747!2d38.6598121223959!3d40.63680588615399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4064ec95cb886789%3A0x2f599c0a82f7869e!2zS8O8cnTDvG4vR8O8bcO8xZ9oYW5lLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717258979012!5m2!1sen!2sua',
    'siran' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d390213.40151547367!2d38.763963732866564!3d40.174745506015284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407ad28a32dc92fb%3A0x5e6640ed98ed625e!2zxZ5pcmFuL0fDvG3DvMWfaGFuZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717258991534!5m2!1sen!2sua',
    'torul' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12124.544690426192!2d39.28416286122044!3d40.56067004266503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4064e45d23768713%3A0xca21abc4a5dd432d!2zVG9ydWwsIEfDvG3DvMWfaGFuZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259004213!5m2!1sen!2sua',
    'hakkari' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25297.47490670392!2d43.71419246015795!3d37.57427616030733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400f0039a10488d9%3A0x6d7bc10a04218e15!2zSGFra2FyaSwgSGFra8OicmkgTWVya2V6L0hha2vDonJp!5e0!3m2!1sde!2str!4v1689858064998!5m2!1sde!2str',
    'cukurca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12704.147333472714!2d43.6024083085255!3d37.24683355396676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400f38f14c8da441%3A0xb66a500b878d6cd0!2zw4d1a3VyY2EsIEhha2thcmksIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259035028!5m2!1sen!2sua',
    'derecik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12704.147333472714!2d43.6024083085255!3d37.24683355396676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40059031168e00a7%3A0xa4aee5e08023649a!2sDerecik%2FHakkari%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259049168!5m2!1sen!2sua',
    'semdinli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25385.55009710795!2d44.542944399567915!3d37.314237714686925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40057bbe03be78d3%3A0xcd463bcec2d35e6b!2zxZ5lbWRpbmxpLCBIYWtrYXJpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259060440!5m2!1sen!2sua',
    'yuksekova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25299.585490169375!2d44.25929895037023!3d37.56806271040859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400fbe0bc297143b%3A0xb9a7af995fa7a162!2zWcO8a3Nla292YSwgSGFra2FyaSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259072287!5m2!1sen!2sua',
    'hatay' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d821918.5040911608!2d35.5793012440125!3d36.418408543956055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1525f31774ce652b%3A0x9be32962060d1ed3!2sHatay!5e0!3m2!1sde!2str!4v1716986317664!5m2!1sde!2str',
    'altinozu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12891.630438298875!2d36.241951307653686!3d36.12010855917745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1525c744676c4941%3A0x7a05dbb8eaf3cdd8!2zQWx0xLFuw7Z6w7wsIEhhdGF5LCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259111257!5m2!1sen!2sua',
    'antakya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d205825.698564908!2d36.046926778412015!3d36.287405920427894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1525c1b7154f0ccb%3A0xc6304a8f4e7a5920!2sAntakya%2FHatay%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259125783!5m2!1sen!2sua',
    'arsuz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d205825.698564908!2d36.046926778412015!3d36.287405920427894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1525e3c8e3ac261f%3A0xeb30ae4ba4c9d0d9!2zQXJzdXovSGF0YXksIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259139667!5m2!1sen!2sua',
    'belen' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25656.201122662344!2d36.163499397041754!3d36.50525522925609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1525f43675caf9df%3A0xb5e85acf9f658166!2sBelen%2C%2031350%20Belen%2FHatay%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259154519!5m2!1sen!2sua',
    'defne' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103089.82066064261!2d36.02611866879187!3d36.15300077469497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1525c51934693495%3A0x87ed8f8d9a945bbf!2zRGVmbmUvSGF0YXksIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259168151!5m2!1sen!2sua',
    'dortyol' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25546.92228385641!2d36.20251794806175!3d36.833726773169616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152f3f078f32e5fd%3A0xf6413fee371d9a26!2zRMO2cnR5b2wsIEhhdGF5LCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259180791!5m2!1sen!2sua',
    'erzin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25506.521112648465!2d36.17843389843883!3d36.95452972098989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152f3cc3033a3ba3%3A0xa750fd9da90e0953!2sErzin%2C%20Hatay%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259193764!5m2!1sen!2sua',
    'hassa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25558.02981956959!2d36.496980897958075!3d36.80045467377553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152f0eadce72913f%3A0xa6de3867683dbe1a!2sHassa%2C%20Hatay%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259206744!5m2!1sen!2sua',
    'iskenderun' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102517.51403483021!2d36.07625469062434!3d36.58611369180526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152f592d49f10bcd%3A0x71627fb2e950ada4!2zxLBza2VuZGVydW4sIEhhdGF5LCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259220214!5m2!1sen!2sua',
    'kirikhan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102517.51403483021!2d36.07625469062434!3d36.58611369180526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152f622500de3f97%3A0x6539a588cae12231!2zS8SxcsSxa2hhbiwgSGF0YXksIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259236252!5m2!1sen!2sua',
    'kumlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12851.856630742765!2d36.44434825783864!3d36.36164705800268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1525860cfa860149%3A0xc30506bd279b10bb!2sKumlu%2C%20Hatay%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259252463!5m2!1sen!2sua',
    'payas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25569.1963768898!2d36.19419644785387!3d36.76697972438754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152f419e26911a6d%3A0x8f037edb04231c4!2sPayas%2C%20Hatay%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259266014!5m2!1sen!2sua',
    'reyhanli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25736.918385552297!2d36.54749689628832!3d36.26099178393321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152582d835510a29%3A0xf06caf44dba8b49f!2zUmV5aGFubMSxLCBIYXRheSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259282594!5m2!1sen!2sua',
    'samandag' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51590.890321523206!2d35.92819821348667!3d36.08298894952553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1525d6a47a2890ad%3A0x8ad66bfc29e4b6e8!2zU2FtYW5kYcSfLCBIYXRheSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259296875!5m2!1sen!2sua',
    'yayladagi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51590.890321523206!2d35.92819821348667!3d36.08298894952553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15242dd97bb20a21%3A0xc71cc60b2e967bf!2zWWF5bGFkYcSfxLEsIEhhdGF5LCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259311421!5m2!1sen!2sua',
    'igdir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48961.34946487362!2d43.99557735072802!3d39.91712870993381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406b20d99e2b09f5%3A0x9016d4e8530b3034!2zScSfZMSxciwgScSfZMSxciBNZXJrZXovScSfZMSxcg!5e0!3m2!1sde!2str!4v1689858088183!5m2!1sde!2str',
    'aralik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24495.272196725124!2d44.49332646733443!3d39.87627567798987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40152d6f1aae02a3%3A0x39ac0f6ec3c1ea92!2zQXJhbMSxaywgScSfZMSxcg!5e0!3m2!1sde!2str!4v1689859231102!5m2!1sde!2str',
    'karakoyunlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12230.17488181872!2d44.16527971309045!3d39.97395304422418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406adbff768883bf%3A0xa5fd623de70e3c86!2zS2FyYWtveXVubHUsIEnEn2TEsXI!5e0!3m2!1sde!2str!4v1689859251625!5m2!1sde!2str',
    'tuzluca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24435.47968663697!2d43.63640701786927!3d40.043393226099475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406b06ac912b783f%3A0x25c21d0c6df38234!2zVHV6bHVjYSwgScSfZMSxcg!5e0!3m2!1sde!2str!4v1689859272439!5m2!1sde!2str',
    'isparta' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50447.93506692352!2d30.50863624247384!3d37.79013487694466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5b5df2a75a3bf%3A0x7ccba328f3ebe248!2sIsparta%2C%20Isparta%20Merkez%2FIsparta%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689276962230!5m2!1sen!2sus',
    'atabey' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25169.129160230044!2d30.620369401587812!3d37.95049020422801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5bc4a09df7f1b%3A0xa5800e70f462d366!2sAtabey%2C%20Isparta%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259364552!5m2!1sen!2sua',
    'egirdir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25194.234643694246!2d30.815141951353468!3d37.87714975538854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5a1221d6bf1a7%3A0xaa7438e9a4b2b961!2zRcSfaXJkaXIsIElzcGFydGEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259379986!5m2!1sen!2sua',
    'gelendost' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12556.038316422046!2d31.002455259214155!3d38.116711550415424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c57c73e2c1937f%3A0xfd319220f40ba4bb!2sGelendost%2C%20Isparta%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259392382!5m2!1sen!2sua',
    'gonen' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12582.940976771439!2d30.502919209089082!3d37.95996745102481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5c0b1e3717abf%3A0xb37840bf9f480789!2zR8O2bmVuLCAzMjA5MCBHw7ZuZW4vSXNwYXJ0YSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259407251!5m2!1sen!2sua',
    'keciborlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25173.67883767268!2d30.281383851545346!3d37.93720820443731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5da8f1b70e565%3A0x6dbccaa0dc38b7f!2zS2XDp2lib3JsdSwgSXNwYXJ0YSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259422109!5m2!1sen!2sua',
    'senirkent' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12557.50547260791!2d30.53935375920736!3d38.108177500448264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5935d4e4ec46b%3A0x1b971d4c3b7b1915!2sSenirkent%2C%20Isparta%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259436600!5m2!1sen!2sua',
    'sutculer' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12662.10779790028!2d30.971056208720984!3d37.49548805290949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c4fbe7442f2297%3A0xebba173abe4ae0d4!2zU8O8dMOnw7xsZXIsIElzcGFydGEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259448821!5m2!1sen!2sua',
    'sarkikaraagac' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25124.409314058572!2d31.349769902005146!3d38.08083270219456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c558a539a2ba6d%3A0xbb596b4b130a4ae5!2zxZ5hcmtpa2FyYWHEn2HDpywgSXNwYXJ0YSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259462681!5m2!1sen!2sua',
    'uluborlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25124.68796624897!2d30.42854700200256!3d38.080021702207105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5ea36499eefd3%3A0x449e070e67b47319!2sUluborlu%2C%20Isparta%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259474116!5m2!1sen!2sua',
    'yalvac' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25051.060729719535!2d31.156747352689706!3d38.293802648952166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cf8df96078aa27%3A0xbf6d584af6c268cd!2zWWFsdmHDpywgSXNwYXJ0YSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259486890!5m2!1sen!2sua',
    'yenisarbademli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12625.757897698906!2d31.379361708890006!3d37.709361052027056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c53964eeddafef%3A0xd4d3a3cf28073ef7!2sYeni%C5%9Farbademli%2C%20Isparta%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259497119!5m2!1sen!2sua',
    'istanbul' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385399.3520580233!2d28.682530376083754!3d41.00485194432002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2sIstanbul%2C%20T%C3%BCrkei!5e0!3m2!1sde!2slu!4v1689217923516!5m2!1sde!2slu',
    'adalar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96552.03216719792!2d29.05870045!3d40.86636545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac1836fcd740b%3A0x53b57c91c4d72968!2sAdalar%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1690844860266!5m2!1str!2str',
    'arnavutkoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96552.03216719792!2d29.05870045!3d40.86636545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5556a24fb404f%3A0x10bb1345eb3aa4ce!2zQXJuYXZ1dGvDtnkvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1690844882105!5m2!1str!2str',
    'atasehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12046.998379290078!2d29.131915699999997!3d40.986963700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac8a7d44b6587%3A0x208a1d8ff0bf7e10!2zQXRhxZ9laGlyLCBBdGHFn2VoaXIgQXRhdMO8cmssIDM0NzU4IER1ZHVsbHUgT3NiL0F0YcWfZWhpci_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1690844904556!5m2!1str!2str',
    'avcilar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96320.71800781657!2d28.720197049999996!3d41.024765050000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa727fbb7a5af%3A0x36e1fd9eda6fa4da!2zQXZjxLFsYXIvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1690844969713!5m2!1str!2str',
    'bagcilar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48145.65502163363!2d28.84032855!3d41.044867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa53c38a5db77%3A0xe1b6d8f8973f9ff0!2zQmHEn2PEsWxhci_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1690845042636!5m2!1str!2str',
    'bahcelievler' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48145.65502163363!2d28.84032855!3d41.044867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa4af25e14c1d%3A0x75e589dbfab0084f!2zQmFow6dlbGlldmxlciwgxZ5pcmluZXZsZXIsIDM0MTAwIEJhaMOnZWxpZXZsZXIvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1690845065836!5m2!1str!2str',
    'bakirkoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12045.073377645036!2d28.850555999999997!3d40.99749944999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa36a68702603%3A0xa5a84a3001d2f4ce!2zQmFrxLFya8O2eS_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1690845088500!5m2!1str!2str',
    'basaksehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48192.4792078288!2d28.834884999999993!3d40.980825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa89b54c41035%3A0xeff6c78561c3946a!2zQmHFn2FrxZ9laGlyL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1690845109287!5m2!1str!2str',
    'bayrampasa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96205.296535907!2d28.731643000000002!3d41.103615500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba81ed5c68f9%3A0xfbbec749f5fd7e0c!2zQmF5cmFtcGHFn2EvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1690845130008!5m2!1str!2str',
    'besiktas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48126.00543012342!2d29.022332049999985!3d41.0717175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab63f6f8193f1%3A0x36c864a929a1018c!2zQmXFn2lrdGHFny_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1690845151861!5m2!1str!2str',
    'beykoz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192308.84292933668!2d29.214581550000002!3d41.138331449999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409fd869ad5badbb%3A0xb7727b8d46d97252!2sBeykoz%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845277532!5m2!1str!2str',
    'beylikduzu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192308.84292933668!2d29.214581550000002!3d41.138331449999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b55fc19deb0b3b%3A0xdf4ea093f30983c6!2zQmV5bGlrZMO8esO8L8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1690845299069!5m2!1str!2str',
    'beyoglu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24073.492905134084!2d28.967379549999997!3d41.043048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab75ad870363d%3A0x25bc05b50533efb0!2zQmV5b8SfbHUvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1690845322509!5m2!1str!2str',
    'buyukcekmece' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96320.63112659178!2d28.512083!3d41.02482445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b55d6a48506053%3A0x85e041bc6563ae!2zQsO8ecO8a8OnZWttZWNlLCDEsHN0YW5idWw!5e0!3m2!1str!2str!4v1690845343274!5m2!1str!2str',
    'catalca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96320.63112659178!2d28.512083!3d41.02482445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5453ec13a5ca5%3A0xbf8d4d9384d2cd81!2zw4dhdGFsY2EsIMSwc3RhbmJ1bA!5e0!3m2!1str!2str!4v1690845362418!5m2!1str!2str',
    'cekmekoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96250.39016865472!2d29.26975195!3d41.0728245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cad2e51ddddf97%3A0xee27abe63246e12a!2zw4dla21la8O2eS_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1690845382028!5m2!1str!2str',
    'esenler' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96245.28768361309!2d28.857109949999998!3d41.07630955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caafe253f39f9b%3A0x349572fb9a436310!2sEsenler%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845402193!5m2!1str!2str',
    'esenyurt' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96245.28768361309!2d28.857109949999998!3d41.07630955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b558b1fceb5dad%3A0x614634ee1252675e!2sEsenyurt%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845422248!5m2!1str!2str',
    'eyupsultan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96284.0959346634!2d28.661225549999997!3d41.049797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab264ecd61265%3A0x9b084a042b7d4607!2zRXnDvHBzdWx0YW4vxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1690845495349!5m2!1str!2str',
    'fatih' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192226.17794410695!2d28.87339505!3d41.16651805000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab989e5fae399%3A0x34f0847eed8b22e0!2zRmF0aWgvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1690845515989!5m2!1str!2str',
    'gaziosmanpasa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48168.0411446999!2d28.953621450000014!3d41.0142595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab0f5fd9bb39f%3A0x50b8a2bd49d5a424!2zR2F6aW9zbWFucGHFn2EvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1690845535151!5m2!1str!2str',
    'gungoren' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24062.197118568834!2d28.906766499999986!3d41.0739185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb20f3ffc1b9%3A0xcdd353af1e8894b8!2zR8O8bmfDtnJlbi_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1690845555699!5m2!1str!2str',
    'kadikoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24081.93367859751!2d28.87965795000001!3d41.01996755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac790b17ba89d%3A0xd2d24ea0437a7ee2!2zS2FkxLFrw7Z5L8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1690845575569!5m2!1str!2str',
    'kagithane' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48192.25415825653!2d29.06305300000001!3d40.981133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab6ea321836e1%3A0xbf71b4bd7c23d138!2zS8OixJ_EsXRoYW5lL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1690845596275!5m2!1str!2str',
    'kartal' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48236.45296222827!2d29.196744000000002!3d40.920606449999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac4f1dd92e915%3A0x7bf91a7dd7b26dcc!2sKartal%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845640177!5m2!1str!2str',
    'kucukcekmece' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48163.3456412784!2d28.7753465!3d41.020680999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa4102814e62d%3A0xf17358ce73944614!2zS8O8w6fDvGvDp2VrbWVjZS_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1690845664666!5m2!1str!2str',
    'maltepe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48219.43704057233!2d29.155543550000004!3d40.94391705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac4336e39827f%3A0x608e0ae971e8ddc2!2sMaltepe%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845686959!5m2!1str!2str',
    'pendik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48219.43704057233!2d29.155543550000004!3d40.94391705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cad70fd26705e3%3A0xcbd4c281a7b18cea!2sPendik%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845707533!5m2!1str!2str',
    'sancaktepe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96357.83204744698!2d29.273629049999982!3d40.999384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cad1a690e688d1%3A0x51bd54f901bc3c9c!2sSancaktepe%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845730141!5m2!1str!2str',
    'sariyer' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96105.32405235794!2d29.02429749999998!3d41.17181154999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409fe02232a852d7%3A0x3a86cad07b1a4ec4!2zU2FyxLF5ZXIvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1690845755887!5m2!1str!2str',
    'silivri' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192503.35251398027!2d28.200803!3d41.07194605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b53fdbc4bfe901%3A0x6f637ffe39da55b6!2sSilivri%2C%20%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845775109!5m2!1str!2str',
    'sultanbeyli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48201.60784897064!2d29.2783145!3d40.96833004999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cad05ff4c5d567%3A0xb011010aa2dc68c0!2sSultanbeyli%2C%20%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845796399!5m2!1str!2str',
    'sultangazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48090.177519927536!2d28.873547050000003!3d41.120638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab1ef321b9cf5%3A0xe86773f1959d7cfc!2sSultangazi%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845816744!5m2!1str!2str',
    'sile' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48056.565424600776!2d29.59771845!3d41.1664895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409e326728811181%3A0x8c46d42b62837f50!2zxZ5pbGUsIMSwc3RhbmJ1bA!5e0!3m2!1str!2str!4v1690845839000!5m2!1str!2str',
    'sisli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24066.38189871996!2d28.988858000000004!3d41.06248405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab685c86f5979%3A0x2519479e0fb398da!2zxZ5pxZ9saS_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1690845859927!5m2!1str!2str',
    'tuzla' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96515.06624679272!2d29.35669!3d40.891712949999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cad9a716174373%3A0x1df73419f1930424!2zVHV6bGEvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1690845880434!5m2!1str!2str',
    'umraniye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12038.523963649934!2d29.101360000000007!3d41.03332845000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac8f76d1706ed%3A0xd630fb5e3d1e2cf8!2zw5xtcmFuaXllLCBFbG1hbMSxa2VudCwgMzQ3NjQgw5xtcmFuaXllL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1690845900650!5m2!1str!2str',
    'uskudar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48152.69140962616!2d29.047729500000013!3d41.035248499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac826d524c9f1%3A0xc14f7612337b7f38!2zw5xza8O8ZGFyL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1690845921168!5m2!1str!2str',
    'zeytinburnu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12046.327737648855!2d28.896140000000013!3d40.99063445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb77a464c6d3%3A0xcff981f89f4c03d0!2sZeytinburnu%2C%20S%C3%BCmer%2C%2034025%20Zeytinburnu%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1690845942677!5m2!1str!2str',
    'izmir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200066.22997116554!2d26.914906655576907!3d38.41755964599469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd862a762cacd%3A0x628cbba1a59ce8fe!2zSXptaXIsIFTDvHJrZWk!5e0!3m2!1sde!2slu!4v1689218086786!5m2!1sde!2slu',
    'aliaga' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198982.92137814127!2d26.865440364840907!3d38.80707524072629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ba259c9b90eabb%3A0x7910193dab414d7b!2zQWxpYcSfYS_EsHptaXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259551421!5m2!1sen!2sua',
    'balcova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198982.92137814127!2d26.865440364840907!3d38.80707524072629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbdc3f593e08ab%3A0xe0c497f92491cc5c!2zQmFsw6dvdmEvxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259564752!5m2!1sen!2sua',
    'bayindir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12538.379989534622!2d27.634295209296305!3d38.21929850002388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9168111cf802d%3A0xc461eaf4af61e16b!2zQmF5xLFuZMSxciwgxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259584502!5m2!1sen!2sua',
    'bayrakli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49974.5111314635!2d27.116318343875175!3d38.478250784734946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd7f2197a1ea5%3A0x24d3bea0fd83e28!2zQmF5cmFrbMSxL8Swem1pciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259596386!5m2!1sen!2sua',
    'bergama' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24765.427627555495!2d27.153939855355244!3d39.113790187398976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9f87a217c77d7%3A0x682b18b696cbe377!2zQmVyZ2FtYSwgxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259609212!5m2!1sen!2sua',
    'beydag' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12560.894284771006!2d28.203243259191638!3d38.088459500524266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b8ebd6bc84f49b%3A0xb471eb7b6bb61f8c!2zQmV5ZGHEnywgxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259626492!5m2!1sen!2sua',
    'bornova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199925.4645765501!2d27.086297741010277!3d38.46836154926937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b97c847c2ade23%3A0xc9ef319820d8565c!2zQm9ybm92YS_EsHptaXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259641595!5m2!1sen!2sua',
    'buca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100140.83290808734!2d27.17253288125359!3d38.339699170304925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b96156867558c7%3A0xd2c0cf1972fe1f25!2zQnVjYS_EsHptaXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259656053!5m2!1sen!2sua',
    'cesme' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200365.91953968603!2d26.22589180650247!3d38.30921269981839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bb78505a996411%3A0x74bd9e2ae90154c7!2zw4dlxZ9tZS_EsHptaXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259672958!5m2!1sen!2sua',
    'cigli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200365.91953968603!2d26.22589180650247!3d38.30921269981839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbc53c2533dfdb%3A0x73b8a6786a94168f!2zw4dpxJ9saS_EsHptaXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259688116!5m2!1sen!2sua',
    'dikili' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49553.18462213653!2d26.847422401794002!3d39.082011251114494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ba14017f6946bd%3A0x7af495ca8d0aab1d!2zRGlraWxpLCDEsHptaXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259701154!5m2!1sen!2sua',
    'foca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49833.890476308785!2d26.708071396518246!3d38.68064277310687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbb45318275d29%3A0x4dd9595920779464!2zRm_Dp2EsIMSwem1pciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259719213!5m2!1sen!2sua',
    'gaziemir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100175.21606045192!2d27.06920532994289!3d38.31481822624329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbdfe83b08bd8f%3A0xf8881ad570ba143f!2zMzU0MTAgR2F6aWVtaXIvxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259733764!5m2!1sen!2sua',
    'guzelbahce' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100175.21606045192!2d27.06920532994289!3d38.31481822624329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbe982fe5e7e77%3A0xbd168bab5a54c85a!2zR8O8emVsYmFow6dlL8Swem1pciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259747239!5m2!1sen!2sua',
    'karabaglar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100146.44487714389!2d26.799430281039662!3d38.33563907127245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbdd90b68f66c1%3A0x9ba9144f9143566e!2zS2FyYWJhxJ9sYXIvxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259758857!5m2!1sen!2sua',
    'karaburun' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24929.99492066085!2d26.490576903819502!3d38.643146193849134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bba8ad8c90572b%3A0x3c8f61d9c79483da!2zS2FyYWJ1cnVuLCDEsHptaXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259771196!5m2!1sen!2sua',
    'karsiyaka' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99914.41474420023!2d27.04349738988441!3d38.5032041318221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd6118e58a90d%3A0x73d8c794b58655c2!2zS2FyxZ_EsXlha2EvxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259782302!5m2!1sen!2sua',
    'kinik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24774.112490607647!2d27.349068305274198!3d39.089071637725596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9e4bf7a1327f9%3A0x3786a38573271e68!2zS8SxbsSxaywgxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259806675!5m2!1sen!2sua',
    'kiraz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12536.711252045332!2d28.194633209304055!3d38.22898104998722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b8f229e68eaf1b%3A0x67fa5c131d2551c6!2zS2lyYXosIMSwem1pciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259816904!5m2!1sen!2sua',
    'konak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50013.54291351574!2d27.08796334314151!3d38.421913688035794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd8e2fece48eb%3A0xafa58b890c33632a!2zS29uYWsvxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259829071!5m2!1sen!2sua',
    'menederes' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25066.903478592605!2d27.115892452541843!3d38.24788779964278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbe1b3bb59dae7%3A0x4b8c16bb5aef045c!2sMenderes%2C%2035470%20Menderes%2F%C4%B0zmir%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717259845550!5m2!1sen!2sua',
    'menemen' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49894.57085253423!2d27.03615984537773!3d38.5934168280741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd3db472cf21b%3A0xf52da73b30199897!2zTWVuZW1lbiwgxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259857457!5m2!1sen!2sua',
    'narlidere' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50047.411518025074!2d26.93783634250492!3d38.372972290925965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbc2cc621d4ec1%3A0xb365aead0e03ddaf!2zTmFybMSxZGVyZS_EsHptaXIsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717259867983!5m2!1sen!2sua',
    'odemis' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25072.181214603315!2d27.95809290249258!3d38.232581699874046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b8e31e9f52dbb5%3A0x911fb0d321592a3e!2zw5ZkZW1pxZ8sIMSwem1pciwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259879586!5m2!1sen!2sua',
    'seferihisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200764.66977464248!2d26.718216675258514!3d38.16464883965504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbf3dff256182d%3A0xbe0f4959fc21ca1b!2zU2VmZXJpaGlzYXIvxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259896507!5m2!1sen!2sua',
    'selcuk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200764.66977464248!2d26.718216675258514!3d38.16464883965504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b94d51b653c083%3A0xea2aa23a402e7ff6!2zU2Vsw6d1aywgxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259908657!5m2!1sen!2sua',
    'tire' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12560.70474958732!2d27.724216259192488!3d38.089562550520014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9235352856755%3A0x3583ac13954af135!2zVGlyZSwgxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259922981!5m2!1sen!2sua',
    'torbali' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200721.86712777626!2d27.19991567861244!3d38.180188824482464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b943581dfca89f%3A0x6cda19212542af5d!2zVG9yYmFsxLEvxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259936043!5m2!1sen!2sua',
    'urla' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12519.862456221033!2d26.75412630938242!3d38.326627099620424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bb949e896c7bc9%3A0xad4e536a68f1c2b8!2zVXJsYSwgxLB6bWlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717259950516!5m2!1sen!2sua',
    'kahramanmaras' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101215.60396510249!2d36.829190846625686!3d37.55535536805337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152dddbc3d7a1a47%3A0x8e9bdcea1291516f!2sKahramanmara%C5%9F!5e0!3m2!1sde!2str!4v1689858110195!5m2!1sde!2str',
    'afsin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50134.25663211095!2d36.874089290872526!3d38.24723584844759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152d13006dc569f3%3A0xe4b5db7982b39990!2zQWbFn2luLCBLYWhyYW1hbm1hcmHFnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717259991386!5m2!1sen!2sua',
    'andirin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12648.365835020943!2d36.340355858784875!3d37.57646400257245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152e9bdf6fc45ad5%3A0x87f9185b5eeff063!2zQW5kxLFyxLFuLCBLYWhyYW1hbm1hcmHFnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260001178!5m2!1sen!2sua',
    'caglayancerit' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25239.04740023131!2d37.27707540093527!3d37.74593765749413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152d8821358a46a1%3A0x5007b2227b55f6d5!2zw4dhxJ9sYXlhbmNlcml0LCBLYWhyYW1hbm1hcmHFnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260012363!5m2!1sen!2sua',
    'dulkadiroglu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d404492.9360846589!2d36.758186876736595!3d37.62331047162474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152dee7c013905a3%3A0x92ec040851d16350!2zRHVsa2FkaXJvxJ9sdS9LYWhyYW1hbm1hcmHFnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260024390!5m2!1sen!2sua',
    'ekinozu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6282.847027192486!2d37.1833411941371!3d38.0605169376587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152d7b98d7e62da1%3A0x213de2fc820303fe!2zRWtpbsO2esO8LCBLYWhyYW1hbm1hcmHFnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260035977!5m2!1sen!2sua',
    'elbistan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50164.72445836011!2d37.1506238902998!3d38.203040801124324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152d66d1af8e85e1%3A0xff4e6a06cf065f63!2sElbistan%2C%20Kahramanmara%C5%9F%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260050663!5m2!1sen!2sua',
    'goksun' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25144.153689401806!2d36.473121301820896!3d38.02333160308704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152c4ef1eae0e6dd%3A0x36abc25214016d19!2zR8O2a3N1biwgS2FocmFtYW5tYXJhxZ8sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260063142!5m2!1sen!2sua',
    'nurhak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201227.78133679452!2d37.238479188967325!3d37.996166506328514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1532841b7d2c9d9b%3A0xd7d432065dce34c9!2zTnVyaGFrL0thaHJhbWFubWFyYcWfLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717260075525!5m2!1sen!2sua',
    'onikisubat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d404142.3545224296!2d36.433956884685756!3d37.687693251582445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152dcfebb03a2505%3A0x53208fd493362ca!2zT25pa2nFn3ViYXQvS2FocmFtYW5tYXJhxZ8sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260088452!5m2!1sen!2sua',
    'pazarcik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d404142.3545224296!2d36.433956884685756!3d37.687693251582445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1532081910e35477%3A0x1039632bca203c79!2zUGF6YXJjxLFrLCBLYWhyYW1hbm1hcmHFnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260100336!5m2!1sen!2sua',
    'turkoglu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25362.248722659773!2d36.833585399785406!3d37.383184263510906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152e7171162345f9%3A0x5415cab9b5fa20b5!2zVMO8cmtvxJ9sdSwgS2FocmFtYW5tYXJhxZ8sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260111999!5m2!1sen!2sua',
    'karabuk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48027.418309981316!2d32.60946251755369!3d41.206216208518384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40835335ca55f4a3%3A0x58c149eab8f0a954!2zS2FyYWLDvGssIEthcmFiw7xrIE1lcmtlei9LYXJhYsO8aw!5e0!3m2!1sde!2str!4v1689858533970!5m2!1sde!2str',
    'elfani' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11966.299545463615!2d32.94698576195614!3d41.42674604071459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4084b49e157b9c75%3A0x4803c9b9bf80936a!2zRWZsYW5pLCBDYW5kYXJvxJ91bGxhcsSxLCBFZmxhbmkvS2FyYWLDvGssIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260160529!5m2!1sen!2sua',
    'eskipazar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24108.705468097312!2d32.485943305914965!3d40.94669194026282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408330b72444330f%3A0x388889d30a709e0e!2zRXNraXBhemFyLCBLYXJhYsO8aywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260173441!5m2!1sen!2sua',
    'ovacik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d394861.3357235086!2d38.89199068622219!3d39.35953855502786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4070ed72ee5fa581%3A0xfcb44eebfbd8f399!2zT3ZhY8Sxay9UdW5jZWxpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820866046!5m2!1sen!2sua',
    'safranbolu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47988.44429796771!2d32.63873443119514!3d41.25928760670636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409caac51abbad83%3A0x6b7db3ac7a87e93d!2zU2FmcmFuYm9sdSwgS2FyYWLDvGssIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260204351!5m2!1sen!2sua',
    'karaman' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50862.10646426004!2d33.183862366469846!3d37.17928336792468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d98d6780ebefeb%3A0x31bde2e87bae26bc!2sKaraman%2C%20Karaman%20Merkez%2FKaraman!5e0!3m2!1sde!2str!4v1689858508330!5m2!1sde!2str',
    'ayranci' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d406325.2910072127!2d33.64219612377437!3d37.28526542747306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d829eb4fda09a9%3A0x5ba81a6b548f47b9!2zQXlyYW5jxLEvS2FyYW1hbiwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260257230!5m2!1sen!2sua',
    'basyayla' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6393.460957475442!2d32.67953269388038!3d36.75303993904234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14db95730ba0d661%3A0x27b8a9b404281af1!2zQmHFn3lheWxhLCBLYXJhbWFuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717260269164!5m2!1sen!2sua',
    'ermenek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12806.487146119709!2d32.886816658049604!3d36.635489556708876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dbe8a5c4443275%3A0xed209b281d3aecf0!2sErmenek%2C%20Karaman%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260280396!5m2!1sen!2sua',
    'kazimkarabekir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12806.487146119709!2d32.886816658049604!3d36.635489556708876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14da22e586afdad5%3A0xc9fd5a79749818cd!2zS2F6xLFta2FyYWJla2lyL0thcmFtYW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260295418!5m2!1sen!2sua',
    'sariveliler' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25594.929763329674!2d32.596102847613615!3d36.68973667580903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14db915af99ffd73%3A0x76afb682688d2d13!2zU2FyxLF2ZWxpbGVyLCBLYXJhbWFuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717260309377!5m2!1sen!2sua',
    'kars' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48472.07325453157!2d43.06058780954337!3d40.59668973098274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40698ed9cd732267%3A0x46d5117e984d216!2sKars%2C%20Kars%20Merkez%2FKars!5e0!3m2!1sde!2str!4v1689858489117!5m2!1sde!2str',
    'akyaka' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12091.432902373006!2d43.61271026137438!3d40.74314504221927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a017558f49493%3A0x424c1708e3706151!2sAkyaka%2C%20Kars%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260340623!5m2!1sen!2sua',
    'arpacay' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386062.1510354449!2d43.02453046621084!3d40.89138971612117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4069e1647cf1271b%3A0x3c0b4ebcb2b62d64!2zQXJwYcOnYXkvS2FycywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260358819!5m2!1sen!2sua',
    'digor' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386062.1510354449!2d43.02453046621084!3d40.89138971612117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a497f9fcf5b41%3A0xc7032e4eb6d2bd7!2zRGlnb3IvS2FycywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260373074!5m2!1sen!2sua',
    'kagizman' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d389444.1995857319!2d43.12267890954102!3d40.30833119083041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406bb8e8e3779b29%3A0x6ebe767dfa68b46a!2zS2HEn8Sxem1hbiwgS2FycywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260386657!5m2!1sen!2sua',
    'sarikamis' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24331.90638971756!2d42.564041459400514!3d40.33151267298448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406967304b851627%3A0x6e2460b2c28c567d!2zU2FyxLFrYW3EscWfLCBLYXJzLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717260400354!5m2!1sen!2sua',
    'selim' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24284.590398527263!2d42.767957859841985!3d40.46256917162944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406979797bbff2eb%3A0x838d715b5f6a68a3!2zU2VsaW0sIEthcnMsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260411507!5m2!1sen!2sua',
    'susuz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24169.788289644006!2d43.12340286091314!3d40.77909956851459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4069ec00cbf9651b%3A0xa000c80a51b1c7ed!2zU3VzdXosIEthcnMsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260423564!5m2!1sen!2sua',
    'kastamonu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47886.65335110639!2d33.7469699700893!3d41.397634152148875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4084fa1240163891%3A0xd819b0a02911d532!2sKastamonu%2C%20Kastamonu%20Merkez%2FKastamonu!5e0!3m2!1sde!2str!4v1689858467139!5m2!1sde!2str',
    'abana' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23728.73648848202!2d33.98342791502796!3d41.97683315875483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40855bbbb165fb71%3A0xb85ac8f1c90d193!2sAbana%2C%20Kastamonu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260460890!5m2!1sen!2sua',
    'agli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190652.52222645088!2d33.40471691655818!3d41.70010876860783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4085257ff738fc3d%3A0x526dbcc515524106!2zQcSfbMSxL0thc3RhbW9udSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260475682!5m2!1sen!2sua',
    'arac' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11999.757762541998!2d33.31966976180058!3d41.24487704108941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40849737e4cc87cb%3A0xf74af9d9ed9e24a6!2zQXJhw6csIEthc3RhbW9udSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260488370!5m2!1sen!2sua',
    'azdavay' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11927.055965790827!2d33.291495212138614!3d41.63923254030014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4084d446b2c8a1f9%3A0x467643d9d910eef7!2sAzdavay%2C%20Kastamonu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260502833!5m2!1sen!2sua',
    'bozkurt' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190157.3623313315!2d33.87467200525029!3d41.866854191374955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4085427b85a7ac65%3A0x151a80fd3b9525f3!2sBozkurt%2FKastamonu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260516174!5m2!1sen!2sua',
    'cide' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23760.625254996598!2d32.965661864730485!3d41.89117620934615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409add8bbe66d9ef%3A0x7c67121287a59979!2sCide%2C%20Kastamonu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260528689!5m2!1sen!2sua',
    'catalzeytin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190165.40501446722!2d34.025952454621844!3d41.86415014259558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40856f5a9295b1af%3A0x74c35d3da2f8df26!2zw4dhdGFsemV5dGluL0thc3RhbW9udSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260543364!5m2!1sen!2sua',
    'daday' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191318.9915010127!2d33.18666141447169!3d41.47481082929615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4084c468416346e3%3A0x67124d0eea3d4f80!2sDaday%2FKastamonu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260558261!5m2!1sen!2sua',
    'devrekani' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191318.9915010127!2d33.18666141447169!3d41.47481082929615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40851bf98d8b76d1%3A0x1c30313a2084806d!2sDevrekani%2C%20Kastamonu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260571001!5m2!1sen!2sua',
    'doganyurt' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94968.00906788088!2d33.36362557830173!3d41.94121704208677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409ac9c03460cb31%3A0x5ddd7c80f2f64aab!2zRG_En2FueXVydC9LYXN0YW1vbnUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260586687!5m2!1sen!2sua',
    'hanonu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11929.409348369292!2d34.452645212127656!3d41.6265150403242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40859886513fa263%3A0xd65ff966eae5f668!2zSGFuw7Zuw7wsIDM3NDUwIEhhbsO2bsO8L0thc3RhbW9udSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260600645!5m2!1sen!2sua',
    'ihsangazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192267.29688047039!2d33.38361984034273!3d41.15249955029363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40848891806cd8fb%3A0x5e71688a8217827b!2zxLBoc2FuZ2F6aS9LYXN0YW1vbnUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260614924!5m2!1sen!2sua',
    'inebolu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23729.854238997785!2d33.73348696501753!3d41.97383315877525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40854dcdcc83e2b1%3A0x238f6150a08ec2a0!2zxLBuZWJvbHUsIEthc3RhbW9udSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260627123!5m2!1sen!2sua',
    'kure' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5948.236555948681!2d33.70586304491357!3d41.80421238499954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408539ef1167f3ff%3A0x1c74d179ea1d98d6!2zS8O8cmUsIEthc3RhbW9udSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260639526!5m2!1sen!2sua',
    'pinarbasi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24902.154268440343!2d36.37236440407934!3d38.72310569271885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152cce5533f8a0b3%3A0x61ea3ac48b9a0745!2zUMSxbmFyYmHFn8SxLCBLYXlzZXJpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717260853670!5m2!1sen!2sua',
    'seydiler' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190830.71672666483!2d33.53491995263268!3d41.6399682974425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40852227f47fcf29%3A0x6685eb83b5fef23f!2sSeydiler%2FKastamonu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260667160!5m2!1sen!2sua',
    'senpazar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95134.27929903788!2d33.152078421972355!3d41.82945600462346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409ad0e5ad8fb5b7%3A0x24a4de6ebe1c93d7!2zxZ5lbnBhemFyL0thc3RhbW9udSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260683519!5m2!1sen!2sua',
    'taskopru' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11951.848607178948!2d34.20266221202336!3d41.50509499055881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4085a92717468033%3A0x701cbd19accb012c!2zVGHFn2vDtnByw7wsIEthc3RhbW9udSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260694992!5m2!1sen!2sua',
    'tosya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24083.51910558589!2d34.01707246171802!3d41.015631166332945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408412f641c520a3%3A0x578ff9193fdb2e43!2sTosya%2C%20Kastamonu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260707608!5m2!1sen!2sua',
    'kayseri' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199216.7333782407!2d35.30537677498713!3d38.723285314605086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b0e1d3fa4a74f%3A0x84bd8c4d5a4c2da7!2sKayseri%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689276991330!5m2!1sen!2sus',
    'akkisla' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12402.707821002397!2d36.15811230992713!3d38.999868547233895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4078af595197900d%3A0xac03110f7a18429c!2zQWtrxLHFn2xhLCBLYXlzZXJpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717260743179!5m2!1sen!2sua',
    'bunyan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12429.122302479214!2d35.847974759804316!3d38.84893404774726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b59a5b35d6b63%3A0x36976e704c02fc0f!2zQsO8bnlhbiwgS2F5c2VyaSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260755863!5m2!1sen!2sua',
    'develi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25018.614970063827!2d35.464551902992504!3d38.38769059755434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152bbc8d28ea0fb3%3A0xcfbd87fa44196d89!2sDeveli%2C%20Kayseri%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260766979!5m2!1sen!2sua',
    'felahiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12387.045978200755!2d35.55683130999995!3d39.089130096936266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b4a802e0c6af7%3A0x3925e6d278f4d74!2sFelahiye%2C%20Kayseri%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260780486!5m2!1sen!2sua',
    'hacilar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12464.658546720642!2d35.44073275963909!3d38.64509459846041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b0ecb4793d2b7%3A0x3b87b2d9f465efaf!2zSGFjxLFsYXIsIEtheXNlcmksIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260791418!5m2!1sen!2sua',
    'incesu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12468.616799058495!2d35.17075515962069!3d38.62233354854148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a54e944452167%3A0xe60a819f80249e6f!2zxLBuY2VzdSwgS2F5c2VyaSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717260805008!5m2!1sen!2sua',
    'kocasinan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d397486.525684594!2d35.02399208387262!3d38.8928025260836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b180fb3ff2917%3A0x4b0f86186db900eb!2sKocasinan%2FKayseri%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260818194!5m2!1sen!2sua',
    'melikgazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d397486.525684594!2d35.02399208387262!3d38.8928025260836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b132775bc4a2d%3A0x62fb4863a20c844d!2sMelikgazi%2FKayseri%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260830769!5m2!1sen!2sua',
    'ozvatan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12383.3484325636!2d35.689227260017155!3d39.11017854686671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407f58c2c7f03d61%3A0xa09e7105e1700174!2zw5Z6dmF0YW4sIEtheXNlcmksIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260843221!5m2!1sen!2sua',
    'sarioglan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12389.265288686642!2d35.95623370998964!3d39.076491996978135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407f530b44baab05%3A0x32dfee57cdda53ba!2zU2FyxLFvxJ9sYW4sIEtheXNlcmksIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260866034!5m2!1sen!2sua',
    'sariz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12493.249808975075!2d36.48627875950615!3d38.48043159905322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152ce71556e9a999%3A0xf80771ad12b0b08c!2zU2FyxLF6LCBLYXlzZXJpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717260879050!5m2!1sen!2sua',
    'talas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49824.39424145579!2d35.51748184669672!3d38.69427827233644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b6d59c1b5b34f%3A0xbbda4a5de343c491!2sTalas%2C%20Kayseri%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260889606!5m2!1sen!2sua',
    'tomarza' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400163.0439726968!2d35.54854159207968!3d38.41203737347848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152c806e63fbc8fd%3A0x22814c9e18462ade!2sTomarza%2FKayseri%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717260902346!5m2!1sen!2sua',
    'yahyali' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50228.68906978369!2d35.31752438909745!3d38.110115806808345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152bd0d247874ddd%3A0xf16ed0617ebd6bec!2zWWFoeWFsxLEsIEtheXNlcmksIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260914193!5m2!1sen!2sua',
    'yesilhisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25032.373392120884!2d35.0650409028641!3d38.347901748144345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a371e5063b881%3A0x831b7c0639b65036!2zWWXFn2lsaGlzYXIsIEtheXNlcmksIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717260926169!5m2!1sen!2sua',
    'kirikkale' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49015.08344755802!2d33.481807899759794!3d39.84191071339077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081df188742e1bb%3A0x4f1a4dd9f400e5bc!2zS8SxcsSxa2thbGUsIEvEsXLEsWtrYWxlIE1lcmtlei9LxLFyxLFra2FsZQ!5e0!3m2!1sde!2str!4v1689858447168!5m2!1sde!2str',
    'bahsili' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24520.2326568459!2d33.46432144999999!3d39.806339449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d4b587960f4101%3A0xc225106917e989df!2zQmFoxZ9pbGksIEvEsXLEsWtrYWxlLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135358274!5m2!1sen!2snl',
    'baliseyh' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12240.833118333963!2d33.720189!3d39.914354949999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081c4d920e7d61d%3A0x530b3d5d14e34278!2zQmFsxLHFn2V5aCwgS8SxcsSxa2thbGUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720135372363!5m2!1sen!2snl',
    'celebi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6160.568035006712!2d33.52472395!3d39.46291195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d4ebe111280041%3A0xa2405cf77a19f5c1!2zw4dlbGViaSwgS8SxcsSxa2thbGUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720135385462!5m2!1sen!2snl',
    'delice' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12235.177843202564!2d34.031219949999986!3d39.94598700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081b57c6fc47e03%3A0x2fe1b8ae496765f5!2zRGVsaWNlLCBLxLFyxLFra2FsZSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135403020!5m2!1sen!2snl',
    'karakecili' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12297.821000920609!2d33.3817875!3d39.594426049999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d4be445039fb01%3A0xa9ec6658e3217dda!2zS2FyYWtlw6dpbGksIEvEsXLEsWtrYWxlLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135415297!5m2!1sen!2snl',
    'keskin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24566.767335604036!2d33.6134635!3d39.6756805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d4cfd4bd0942eb%3A0xdaeeeedd86a3dbf9!2zS2Vza2luLCBLxLFyxLFra2FsZSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135427649!5m2!1sen!2snl',
    'sulakyurt' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12196.538179445311!2d33.7178695!3d40.161558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081912820de029d%3A0x461c5fa916d3b878!2zU3VsYWt5dXJ0LCBLxLFyxLFra2FsZSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135439672!5m2!1sen!2snl',
    'yahsihan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12252.490576091881!2d33.457952399999996!3d39.849084500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081dffa4b4425c1%3A0xde5f3275ed4faf46!2zWWFoxZ9paGFuLCBLxLFyxLFra2FsZSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135454933!5m2!1sen!2snl',
    'kirsehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99022.40560410233!2d34.08729602684183!3d39.1417414406613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d572c090d21383%3A0x6dd29199261c3d06!2zS8SxcsWfZWhpciwgS8SxcsWfZWhpciBNZXJrZXovS8SxcsWfZWhpcg!5e0!3m2!1sde!2str!4v1689858427024!5m2!1sde!2str',
    'akcakent' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12292.44338672042!2d34.0978735!3d39.624707949999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d534cde8676379%3A0x847298d14788eade!2zQWvDp2FrZW50LCBLxLFyxZ9laGlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135491838!5m2!1sen!2snl',
    'akpinar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12324.086097858268!2d33.9634985!3d39.446245499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d523565eb5bda5%3A0x2c04ae4ca00b5c7f!2zQWtwxLFuYXIsIEvEsXLFn2VoaXIsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720135503926!5m2!1sen!2snl',
    'boztepe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24710.710220229033!2d34.2649624!3d39.2692245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d569e87e6b5c7b%3A0x80d40b5b43c77a80!2zQm96dGVwZSwgS8SxcsWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135516339!5m2!1sen!2snl',
    'cicekdagi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393645.7182594153!2d34.33234944999999!3d39.574099900000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40801d2641378cc1%3A0x88761f44fcb1bda2!2zw4dpw6dla2RhxJ_EsS9LxLFyxZ9laGlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135531573!5m2!1sen!2snl',
    'kaman' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d395067.70947971963!2d33.724989499999985!3d39.3230155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d4e4ac8426955f%3A0x4813d46fab361be9!2zS2FtYW4vS8SxcsWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135546939!5m2!1sen!2snl',
    'mucur' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d396379.2871182329!2d34.45702545!3d39.09023045000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d5631da6cd3651%3A0x6a8b1a7230402fce!2zTXVjdXIvS8SxcsWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135566866!5m2!1sen!2snl',
    'kilis' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25585.00094287581!2d37.105279957585324!3d36.71955622526042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152fce009b798821%3A0x500f79bfea2e2526!2sKilis%2C%20Kilis%20Merkez%2FKilis!5e0!3m2!1sde!2str!4v1689858405400!5m2!1sde!2str',
    'elbeyli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6399.980417439224!2d37.4665905!3d36.67473645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531d2aadb0f6399%3A0x384d901ea79f4e5a!2sElbeyli%2C%20Kilis!5e0!3m2!1str!2str!4v1690836453239!5m2!1str!2str',
    'musabeyli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6382.402122517584!2d36.918924000000004!3d36.885538049999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152e4adbb44ae025%3A0xabf16438c7b93e4e!2sMusabeyli%2C%20Kilis!5e0!3m2!1str!2str!4v1690836472029!5m2!1str!2str',
    'polateli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.057582904371!2d37.14359255!3d36.84109695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152e2d96ed6fb021%3A0x10a34ca8320aebd3!2sPolateli%2C%20Kilis!5e0!3m2!1str!2str!4v1690836493866!5m2!1str!2str',
    'kocaeli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48345.39263609819!2d29.893301461825562!3d40.77110667421567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb4f66644bfb9d%3A0x82690ee7586b7eb9!2zxLB6bWl0LCBLb2NhZWxp!5e0!3m2!1sde!2str!4v1689858386927!5m2!1sde!2str',
    'basiskele' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193729.1741095592!2d29.952451050000004!3d40.651526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb42e3bf1a1185%3A0x26aa1c0f34a00590!2zQmHFn2lza2VsZS9Lb2NhZWxpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135613513!5m2!1sen!2snl',
    'cayirova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48303.69239483588!2d29.386746549999998!3d40.82838595000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cadf3c4d8b30af%3A0xb1f86a9e4ff1aebc!2zw4dhecSxcm92YSwgS29jYWVsaSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135627840!5m2!1sen!2snl',
    'darica' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48339.579867466324!2d29.380047050000012!3d40.77909505000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cadfcfb53e833b%3A0x5b1ea08c8beca026!2zRGFyxLFjYS9Lb2NhZWxpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135645756!5m2!1sen!2snl',
    'derince' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48350.98541984267!2d29.82850305!3d40.7634194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb47ae91250443%3A0x85f5a9986bc889d2!2sDerince%2C%20Kocaeli%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720135658433!5m2!1sen!2snl',
    'dilovasi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12083.295786283303!2d29.54422755!3d40.78788444999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb23950c69df8f%3A0x3a1c6a70631616ff!2zRGlsb3Zhc8SxLCBLb2NhZWxpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135673371!5m2!1sen!2snl',
    'gebze' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48321.079287661916!2d29.42243655!3d40.80451145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cad8ae0d8aa779%3A0xc50b56d262cb7062!2sGebze%2C%20Kocaeli%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720135685797!5m2!1sen!2snl',
    'golcuk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96864.39695914421!2d29.793516949999994!3d40.65165695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb40bfd8e9bf7b%3A0xb66f495fd1cdbf1b!2zR8O2bGPDvGsvS29jYWVsaSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135699463!5m2!1sen!2snl',
    'izmit' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96690.77461179392!2d29.93450104999998!3d40.77111400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb4f66644bfb9d%3A0x82690ee7586b7eb9!2zxLB6bWl0LCBLb2NhZWxpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135712964!5m2!1sen!2snl',
    'kandira' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24062.31827142302!2d30.15082255!3d41.0735875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409e120282be196d%3A0x1f8a17edacc56d61!2zS2FuZMSxcmEsIEtvY2FlbGksIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720135733588!5m2!1sen!2snl',
    'karamursel' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48407.77631426223!2d29.591912999999998!3d40.685292499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb1826765283a1%3A0xe3dafa5220f1ea52!2zS2FyYW3DvHJzZWwsIEtvY2FlbGksIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720135746448!5m2!1sen!2snl',
    'kartepe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48364.175399150015!2d30.032693450000004!3d40.74528505000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb509aa64c1233%3A0x72649c34bfcb0a2e!2sKartepe%2C%20Kocaeli%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720135761365!5m2!1sen!2snl',
    'korfez' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48353.04951611768!2d29.75985145!3d40.76058199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb397cc65877dd%3A0x6bea1d6d12dcde8!2zS8O2cmZleiwgS29jYWVsaSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135773236!5m2!1sen!2snl',
    'konya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201550.47902162478!2d32.34167203426616!3d37.8783916242543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d08568d615f745%3A0x240dd0fc08060967!2zS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2sus!4v1689277018047!5m2!1sen!2sus',
    'ahirli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203114.31746251296!2d32.11417905!3d37.3031625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dae20028de49e7%3A0x479acceea93e0621!2zQWjEsXJsxLEvS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720869976288!5m2!1sen!2snl',
    'akoren' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12669.255924101379!2d32.368653949999995!3d37.45330795000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14da5f90ec7be12f%3A0xa51de96df90ffbb9!2zQWvDtnJlbiwgS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720869989810!5m2!1sen!2snl',
    'aksehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50056.97129559835!2d31.42372695!3d38.359148499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cfe8406e8e2c25%3A0xedfde7ec7d2b1d12!2zQWvFn2VoaXIsIEtvbnlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720870003260!5m2!1sen!2snl',
    'altinekin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12523.034212752256!2d32.86642905!3d38.3082615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d1267174228505%3A0x2fa09a2779be6bd!2zQWx0xLFuZWtpbiwgQWvDp2HFn2FyLCBBbHTEsW5la2luL0tvbnlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720870016185!5m2!1sen!2snl',
    'beysehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25261.109810218102!2d31.728244500000002!3d37.68119599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dab604762c398f%3A0xf9f310ea1be63238!2zQmV5xZ9laGlyLCBLb255YSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720870032066!5m2!1sen!2snl',
    'bozkir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25427.15206768867!2d32.244200549999995!3d37.19086995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14db023ee90d800b%3A0xb6d0060670ea4e92!2zQm96a8SxciwgS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720870044752!5m2!1sen!2snl',
    'cihanbeyli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49853.368383949935!2d32.91756895!3d38.652662049999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d14f95161b688b%3A0x3e4966c37e72e259!2sCihanbeyli%2C%20Konya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720870060151!5m2!1sen!2snl',
    'celtik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24798.672021378483!2d31.789320399999994!3d39.0191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d1fab522af9fbb%3A0xa419167b50c9dabc!2zw4dlbHRpaywgS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720870096539!5m2!1sen!2snl',
    'cumra' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25298.766119437252!2d32.77356255!3d37.570475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14da0c0b758d5693%3A0x60d48ebcfb6f997!2zw4d1bXJhLCBLb255YSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720870114191!5m2!1sen!2snl',
    'derbent' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12573.406133536177!2d32.0133179!3d38.015583449999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d072e733ccb9b9%3A0x382de7f03efdabfe!2sDerbent%2C%20Konya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720870126028!5m2!1sen!2snl',
    'derebucak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202892.13194744138!2d31.5263789!3d37.3853491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c52a12a5c139d3%3A0x45bf7be2825018b1!2sDerebucak%2FKonya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720870137998!5m2!1sen!2snl',
    'doganhisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12550.450593072854!2d31.671420499999996!3d38.149199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d0032a266e7f81%3A0x3b62f5506178c7ac!2zRG_En2FuaGlzYXIsIEtvbnlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720870155000!5m2!1sen!2snl',
    'emirgazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25185.19879358639!2d33.83696355!3d37.90356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d7aae38327de55%3A0x4833cf47936b6393!2sEmirgazi%2C%20Konya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720870171573!5m2!1sen!2snl',
    'eregli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50639.89596991974!2d34.0488005!3d37.5080715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d7969735298845%3A0xa13eca4044ee4c9d!2zRXJlxJ9saSwgS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720870188479!5m2!1sen!2snl',
    'guneysinir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203388.67084433438!2d32.72183355!3d37.20146495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14da48244e39bae5%3A0xeeef8739d24b908d!2zR8O8bmV5c8SxbsSxci9Lb255YSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720870201708!5m2!1sen!2snl',
    'hadim' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203388.67084433438!2d32.72183355!3d37.20146495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dba4dcf618f745%3A0xd51595f32a9e2ff7!2zSGFkaW0vS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720870213731!5m2!1sen!2snl',
    'halkapinar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202899.1660382037!2d34.31998449999999!3d37.38274954999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d7eef05c4b68ed%3A0xe119a588275fe69e!2zSGFsa2FwxLFuYXIvS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720870227648!5m2!1sen!2snl',
    'huyuk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12584.103990117497!2d31.5967029!3d37.95317895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c55490ebc18255%3A0x10735c8cec0f79a7!2zSMO8ecO8aywgS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720870244644!5m2!1sen!2snl',
    'ilgin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400851.6966087016!2d31.890584450000013!3d38.2875155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d03eab6c83a353%3A0xef3ebad5e3e51763!2zSWxnxLFuL0tvbnlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720870259708!5m2!1sen!2snl',
    'kadinhani' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400851.6966087016!2d31.890584450000013!3d38.2875155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d05b0eaefb3ddf%3A0xbd62d0a813a19b2e!2zS2FkxLFuaGFuxLEsIDQyODAwIEthZMSxbmhhbsSxL0tvbnlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720870272043!5m2!1sen!2snl',
    'karapinar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50499.86015737494!2d33.545857000000005!3d37.714014500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d76ccb5539e10b%3A0x2d4b3fb609af6eff!2zS2FyYXDEsW5hciwgS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720870299340!5m2!1sen!2snl',
    'karatay' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402666.0602218626!2d32.96121505000003!3d37.957788000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d0c91bed3eada9%3A0x2fa1c7b7ab1e77d4!2sKaratay%2FKonya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720870286634!5m2!1sen!2snl',
    'kulu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49544.128113701!2d33.07126605!3d39.094902999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d38aa39085d9cb%3A0x4deb2876ac778fca!2zS3VsdSwgS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720870313740!5m2!1sen!2snl',
    'meram' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d399805.0309600329!2d32.44785705000002!3d38.47663845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14da868bc0ee6b75%3A0x3483bb6ac47eede!2zTWVyYW0vS29ueWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720870339170!5m2!1sen!2snl',
    'sarayonu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d399805.0309600329!2d32.44785705000002!3d38.47663845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d1044b82d5a839%3A0x1e407c8c0b4cf20!2zU2FyYXnDtm7DvC9Lb255YSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720870325621!5m2!1sen!2snl',
    'selcuklu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d401941.61750549026!2d32.5308125!3d38.0897325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d0edf71b511581%3A0x35c05809f6f0a52d!2zU2Vsw6d1a2x1L0tvbnlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720870363698!5m2!1sen!2snl',
    'seydisehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d404076.6727937987!2d32.335874!3d37.69974500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dada30938392f1%3A0x16279db151d73160!2zU2V5ZGnFn2VoaXIsIEtvbnlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720870349292!5m2!1sen!2snl',
    'taskent' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6378.998989849028!2d32.49315704999998!3d36.92622955000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dba48a9b7875f7%3A0x95cea0acb9113841!2zVGHFn2tlbnQsIEtvbnlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720870380446!5m2!1sen!2snl',
    'tuzlukcu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24989.288485024234!2d31.6269549!3d38.472385550000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d0281ca5206c25%3A0x1a1fa42a3556fd86!2zVHV6bHVrw6d1LCBLb255YSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720870393648!5m2!1sen!2snl',
    'yalihuyuk' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12696.513111124823!2d32.0924795!3d37.29209350000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dae3d57559510d%3A0xc6b76705e4d13251!2zWWFsxLFow7x5w7xrLCBLb255YSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720870406561!5m2!1sen!2snl',
    'yunak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24871.525767348157!2d31.735661899999997!3d38.81091155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d1dbf413963e59%3A0x6c7a9dfe0abe4fd0!2sYunak%2C%20Konya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720870417047!5m2!1sen!2snl',
    'kutahya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49317.70421762581!2d29.945841394306722!3d39.41606193390889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c948171562e423%3A0x7357c4e7ede1b93c!2zS8O8dGFoeWEsIEvDvHRhaHlhIE1lcmtlei9Lw7x0YWh5YQ!5e0!3m2!1sde!2str!4v1689858365528!5m2!1sde!2str',
    'altintas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12392.175102292416!2d30.108142999999995!3d39.05991655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c8d5810ad17519%3A0xf9304abd50995578!2zQWx0xLFudGHFnywgS8O8dGFoeWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720869768537!5m2!1sen!2snl',
    'aslanapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12364.653331065922!2d29.871184049999997!3d39.21645605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c923fa89addf7d%3A0x38eadb858ace2ce2!2zQXNsYW5hcGEsIEvDvHRhaHlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720869780885!5m2!1sen!2snl',
    'cavdarhisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12368.172303023448!2d29.615238950000002!3d39.19646995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c8e2a5d14bb581%3A0xb77c6a19fee2bbec!2zw4dhdmRhcmhpc2FyLCBLw7x0YWh5YSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720869792540!5m2!1sen!2snl',
    'domanic' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12261.322495555916!2d29.61108355!3d39.79957494999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c962ae4e1f109f%3A0xc17b8f57839a4973!2zRG9tYW5pw6csIEvDvHRhaHlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720869805668!5m2!1sen!2snl',
    'ement' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12342.627227596953!2d29.254582550000002!3d39.341360449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c9ada03a78ad91%3A0x4d3cfc87153e4c3b!2zRW1ldCwgNDM3MDAgRW1ldC9Lw7x0YWh5YSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720869833892!5m2!1sen!2snl',
    'gediz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24810.106485759774!2d29.388626499999997!3d38.9864865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c85fbb63eb1cbb%3A0x1f71e56bda012cea!2zR2VkaXosIEvDvHRhaHlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720869845863!5m2!1sen!2snl',
    'hisarcik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12358.763722079302!2d29.228669449999995!3d39.24988715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c8520c7078c811%3A0xb28e2ae5870f04e7!2zSGlzYXJjxLFrLCBLw7x0YWh5YSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720869857436!5m2!1sen!2snl',
    'pazarlar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12403.235702738793!2d29.121059049999996!3d38.996857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c86a332e74f44f%3A0xb455c0602a6e132c!2zUGF6YXJsYXIsIEvDvHRhaHlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720869868135!5m2!1sen!2snl',
    'simav' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24773.244016004257!2d28.984531049999998!3d39.091544049999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c83e159418bfd1%3A0xa395399cbc26895d!2zU2ltYXYsIEvDvHRhaHlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720869889928!5m2!1sen!2snl',
    'saphane' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12398.410999536465!2d29.221084949999998!3d39.0243745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c842c9cb570b11%3A0x865d731d9f79abba!2zxZ5hcGhhbmUsIEvDvHRhaHlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720869903723!5m2!1sen!2snl',
    'tavsanli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49221.47448694714!2d29.49829405!3d39.55189195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c974ba85218cf3%3A0x36f33dac87f431f5!2zVGF2xZ9hbmzEsSwgS8O8dGFoeWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720869923913!5m2!1sen!2snl',
    'malatya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100122.61165639808!2d38.19355653660818!3d38.35287921727625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407636e4923c4bad%3A0xa053ec48de5f481b!2sMalatya!5e0!3m2!1sde!2str!4v1689858343415!5m2!1sde!2str',
    'akcadag' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25033.191071531648!2d37.974372!3d38.345535950000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4077d16b6f262ec1%3A0x1f4848bfc10fd988!2zQWvDp2FkYcSfLCBNYWxhdHlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720869557931!5m2!1sen!2snl',
    'arapgir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24791.54925635937!2d38.489129!3d39.039404049999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4077451d34aeada7%3A0x47c75b8285d8a37c!2sArapgir%2C%20Malatya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720869570271!5m2!1sen!2snl',
    'arguvan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12440.578886098945!2d38.26310205!3d38.78331655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407774ca011e4873%3A0x70c237880db736a9!2sArguvan%2C%20Malatya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720869598559!5m2!1sen!2snl',
    'battalgazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25009.586398575793!2d38.3678365!3d38.41378194999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40764a4a84a4a587%3A0x2731faec7339aa3!2sBattalgazi%2C%20Malatya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720869583688!5m2!1sen!2snl',
    'darende' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49921.19394931408!2d37.49981945!3d38.555094499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4077fa2164bfa7e3%3A0x744e1e0359935675!2sDarende%2C%20Malatya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720869610308!5m2!1sen!2snl',
    'dogansehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12560.17575168926!2d37.8825584!3d38.09264104999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1532dbcee1a452eb%3A0x1c583ba9367d8fde!2zRG_En2FuxZ9laGlyLCBNYWxhdHlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720869629483!5m2!1sen!2snl',
    'doganyol' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6261.127034585922!2d39.0356671!3d38.3127795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40767bd34dc0e45d%3A0x3a744ce4d614864f!2zRG_En2FueW9sLCBNYWxhdHlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720869642667!5m2!1sen!2snl',
    'hekimhan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12434.666397259954!2d37.931878000000005!3d38.81719195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4077822a3850b701%3A0x5b102bf457992322!2sHekimhan%2C%20Malatya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720869655183!5m2!1sen!2snl',
    'kale' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200192.2199294297!2d38.80078845!3d38.37204195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40766861496a0351%3A0xb2c72175067dfa88!2sKale%2FMalatya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720869668770!5m2!1sen!2snl',
    'kuluncak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12423.601343834514!2d37.6656845!3d38.88052199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40782dc498904e67%3A0x5be88240da9dea2e!2sKuluncak%2C%20Malatya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720869680663!5m2!1sen!2snl',
    'puturge' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12542.50697117789!2d38.8702066!3d38.1953435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407674ac7b23005d%3A0x9fc8e87bb1716bfe!2zUMO8dMO8cmdlLCBNYWxhdHlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720869693519!5m2!1sen!2snl',
    'yazihan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12473.179439373203!2d38.182337499999996!3d38.59608305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4077bb2f14cd09c9%3A0x6bb6a2677abc386f!2zWWF6xLFoYW4sIE1hbGF0eWEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720869720508!5m2!1sen!2snl',
    'yesilyurt' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12224.567392155239!2d36.2210024!3d40.005279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407e7ea6d03559df%3A0x18761853a6dc717!2sYe%C5%9Filyurt%2C%20Tokat!5e0!3m2!1str!2str!4v1690846215535!5m2!1str!2str',
    'manisa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99746.99538326802!2d27.311255178177735!3d38.623727603939614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b99c89950e89d5%3A0x88eb6a1c97102924!2sManisa%2C%20Yunusemre%2FManisa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689277049931!5m2!1sen!2sus',
    'ahmetli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12486.950356013898!2d27.93160145!3d38.5167625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b85339b490a67b%3A0xc59e390ac49b942c!2sAhmetli%2C%20Manisa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686122448!5m2!1sen!2snl',
    'akhisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49664.09134737169!2d27.820818050000003!3d38.923846999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9d204dcf18c4d%3A0x4cad81cdf80f483b!2sAkhisar%2C%20Manisa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686134462!5m2!1sen!2snl',
    'alasehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25029.252764320812!2d28.52771945!3d38.356929550000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b87b62ed809b01%3A0x3c60f52c4fb37d00!2zQWxhxZ9laGlyLCBNYW5pc2EsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720686146715!5m2!1sen!2snl',
    'demirci' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24789.757204471847!2d28.65692755!3d39.04451105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b7e26278e17061%3A0x4f0316d38d238b35!2sDemirci%2C%2045900%20Demirci%2FManisa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686158672!5m2!1sen!2snl',
    'golmarmara' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24906.377276475716!2d27.911971!3d38.710986000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9b54a089b6811%3A0x3f27d6d2c790df4e!2zR8O2bG1hcm1hcmEsIE1hbmlzYSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720686171699!5m2!1sen!2snl',
    'gordes' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12414.683760193255!2d28.28916!3d38.93149805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b82019d66448bf%3A0x99fc171744f21217!2zR8O2cmRlcywgTWFuaXNhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720686193109!5m2!1sen!2snl',
    'kirkagac' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24767.56610363058!2d27.677084049999998!3d39.10770495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9d89fc6befd99%3A0x23c215280da2c7e1!2zS8SxcmthxJ9hw6csIE1hbmlzYSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720686182092!5m2!1sen!2snl',
    'kula' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24963.923956611565!2d28.637742399999997!3d38.545511499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b80acaafb8a00d%3A0x8dd58404292522c3!2sKula%2C%20Manisa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686207102!5m2!1sen!2snl',
    'salihli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49968.726630032324!2d28.13936145!3d38.486594000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b85a582c507119%3A0xe33e87bea754060b!2sSalihli%2C%20Manisa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686222624!5m2!1sen!2snl',
    'sarigol' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25070.117120780105!2d28.69284805!3d38.23856845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c78015e3ad9107%3A0xf000ce1dce5f7b4e!2zU2FyxLFnw7ZsLCBNYW5pc2EsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720686234719!5m2!1sen!2snl',
    'saruhanli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24900.02251118382!2d27.563550999999997!3d38.72922245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9bd92ae3b7de1%3A0x355f7e8496c36f6b!2zU2FydWhhbmzEsSwgTWFuaXNhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720686248658!5m2!1sen!2snl',
    'selendi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24894.501666908265!2d28.865981549999997!3d38.74505990000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c7e331b0779b09%3A0xf5fd806961b9e30!2sSelendi%2C%20Manisa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686261232!5m2!1sen!2snl',
    'soma' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49481.09826984194!2d27.602112899999998!3d39.184526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b760e0d9cc1bbf%3A0xc1ec9713b81e114!2sSoma%2C%20Manisa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686273459!5m2!1sen!2snl',
    'sehzadeler' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d398313.4876674404!2d27.295776049999997!3d38.744797999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b99902791c6239%3A0x46bd7be5c47146a8!2zxZ5laHphZGVsZXIvTWFuaXNhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720686315142!5m2!1sen!2snl',
    'turgutlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49480.685065874306!2d27.608791967322542!3d39.18511297272616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9a7bd7c6104a9%3A0x5dab35ef99b66f28!2sTurgutlu%2C%20Manisa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686288943!5m2!1sen!2snl',
    'yunusemre' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49480.685065874306!2d27.608791967322542!3d39.18511297272616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b985ee26241237%3A0x9888a197a0f7a41f!2sYunusemre%2FManisa%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686300820!5m2!1sen!2snl',
    'mardin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25383.418082649354!2d40.708125909389!3d37.320550664580516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400a88c38aaf0afd%3A0x47df20fc47b0f841!2sMardin%2C%20Artuklu%2FMardin!5e0!3m2!1sde!2str!4v1689858322631!5m2!1sde!2str',
    'artuklu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d406051.4905331411!2d40.7897975!3d37.33594395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400a8bd600ba6cb1%3A0x7d477690bdb33185!2sArtuklu%2FMardin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720685968153!5m2!1sen!2snl',
    'dargecit' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d406051.4905331411!2d40.7897975!3d37.33594395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400bbea537c8e083%3A0x1f0ab29cb07fc142!2zRGFyZ2XDp2l0LCBNYXJkaW4sIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685983330!5m2!1sen!2snl',
    'derik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25369.63442088495!2d40.26386005!3d37.361342449999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400aa0c1e2ec2615%3A0x7e5a415c34b8cd40!2sDerik%2C%20Mardin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720685998254!5m2!1sen!2snl',
    'kiziltepe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50844.75693118209!2d40.60157350000001!3d37.205043499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x154ad4e66bc538d7%3A0xdd7a45bdb9d0b69f!2zS8SxesSxbHRlcGUsIE1hcmRpbiwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720686007316!5m2!1sen!2snl',
    'miizidagi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12665.306408785502!2d40.484910500000005!3d37.4766185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400abe9acf332deb%3A0x37dfa1010e29ffa3!2zTWF6xLFkYcSfxLEsIE1hcmRpbiwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720686031825!5m2!1sen!2snl',
    'midyat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50696.57616203194!2d41.342185!3d37.424440499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400a4d914f96266d%3A0x4fa56e4c1761cd29!2sMidyat%2C%20Mardin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686019531!5m2!1sen!2snl',
    'nusaybin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25463.189430315!2d41.22290895!3d37.08372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400a0fd73be6e3cb%3A0xc5ee4463c0aa8867!2sNusaybin%2C%20Mardin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686043522!5m2!1sen!2snl',
    'omerli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25355.61466685604!2d40.94903704999998!3d37.40279395000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400af5b816ba7a0f%3A0xea756246ba08c2a5!2zw5ZtZXJsaSwgTWFyZGluLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720686069449!5m2!1sen!2snl',
    'savur' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12655.270264542998!2d40.8877255!3d37.535797550000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400ae59ef8785d17%3A0xb2ac137074c029c2!2sSavur%2C%20Mardin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720686085774!5m2!1sen!2snl',
    'yesilli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203067.94237298766!2d40.87004245000001!3d37.32032945000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400a8a13b62b6d0b%3A0xe8908cb6489fc569!2zWWXFn2lsbGkvTWFyZGluLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720686056461!5m2!1sen!2snl',
    'mersin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204618.5836284336!2d34.36409645538082!3d36.74260152179456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1527f4a4c0be6e9f%3A0x4dbef2b1f81e7d77!2sMersin%2C%20Akdeniz%2FMersin!5e0!3m2!1sde!2str!4v1689858302420!5m2!1sde!2str',
    'akdeniz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25548.25451479144!2d34.820507000000006!3d36.8297375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1527e89240943219%3A0xe44a2013b081700e!2sAkdeniz%2C%2033115%20Akdeniz%2FMersin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720685780489!5m2!1sen!2snl',
    'anamur' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51600.03708619157!2d32.839998!3d36.06904755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dc3db2292a43e7%3A0xb097b35eb7eb2884!2sAnamur%2C%20Mersin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720685792495!5m2!1sen!2snl',
    'aydincik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24404.64501487634!2d35.250450741646716!3d40.129348469582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4080a1f4f0a958f3%3A0xea658a4fc52e9739!2zQXlkxLFuY8SxaywgWW96Z2F0LCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715819911774!5m2!1sen!2sua',
    'bozyazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51575.660340225455!2d32.97913945!3d36.106192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dc1927a17fc313%3A0x2df31e1a2288e5e8!2zQm96eWF6xLEsIE1lcnNpbiwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685815347!5m2!1sen!2snl',
    'camliyayla' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50873.76971014301!2d34.60203255!3d37.16195749999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152804733698330f%3A0x1d7c84d58437acfc!2zw4dhbWzEsXlheWxhLCBNZXJzaW4sIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685826387!5m2!1sen!2snl',
    'erdemli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d409012.2158756314!2d34.13144205000002!3d36.78476850000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d8426c936bb057%3A0x5d750691c81b321d!2sErdemli%2FMersin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720685840365!5m2!1sen!2snl',
    'gulnar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25711.650875037296!2d33.401695450000005!3d36.3376075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d949a38277b387%3A0x61ac6764586ebaf!2zR8O8bG5hciwgMzM3MDAgR8O8bG5hci9NZXJzaW4sIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685856042!5m2!1sen!2snl',
    'mezitli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204372.70067306812!2d34.365111!3d36.83472895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d80cb812b2c87d%3A0x54d76ae032f8c30!2sMezitli%2FMersin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720685872469!5m2!1sen!2snl',
    'mut' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204372.70067306812!2d34.365111!3d36.83472895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d96cd32535d5af%3A0x2bad39eea0841b8!2zTXV0LCBNZXJzaW4sIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685885549!5m2!1sen!2snl',
    'silifke' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51396.678409118605!2d33.931256999999995!3d36.377914950000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d8dd803117ff13%3A0x640f53d4646d3662!2sSilifke%2C%20Mersin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720685897357!5m2!1sen!2snl',
    'tarsus' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51034.21657264063!2d34.8969815!3d36.92290595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1527de5d1a44b753%3A0xfcba86596ef20940!2sTarsus%2C%20Mersin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720685909437!5m2!1sen!2snl',
    'toroslar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d407910.22242156096!2d34.34920999999998!3d36.99074000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d8019a6d88ed45%3A0x40069d9be578f85c!2sToroslar%2FMersin%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720685933470!5m2!1sen!2snl',
    'mugla' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25420.66240490288!2d28.343697388532274!3d37.210137616480246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bf7209b16cf6bf%3A0xfba529d61c7ac1c1!2zTXXEn2xhLCA0ODAwMCBNZW50ZcWfZS9NdcSfbGEsIFTDvHJraXll!5e0!3m2!1sen!2sus!4v1689277073532!5m2!1sen!2sus',
    'bodrum' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50958.561173303184!2d27.412773899999998!3d37.03579044999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14be6c4faeb0d669%3A0x51a6e218f706590a!2zQm9kcnVtLCBNdcSfbGEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685586239!5m2!1sen!2snl',
    'dalaman' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51130.242609694564!2d28.808922000000003!3d36.77919895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c07089a08968a5%3A0xae8122b3e307ec49!2zRGFsYW1hbiwgTXXEn2xhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685598726!5m2!1sen!2snl',
    'datca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d409302.4584432646!2d27.70251145!3d36.73035495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14be253d5f29b769%3A0x6fba74f01397d62c!2zRGF0w6dhL011xJ9sYSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685614358!5m2!1sen!2snl',
    'fethiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51215.08927016764!2d29.121869999999998!3d36.651819950000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c0439b0db6b13b%3A0x87150704244f70d7!2zRmV0aGl5ZSwgTXXEn2xhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685625531!5m2!1sen!2snl',
    'kavaklidere' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6335.266447825785!2d28.363997499999996!3d37.445768449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bf413418b8b395%3A0xf541341d537a6dd6!2zS2F2YWtsxLFkZXJlLCBNdcSfbGEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685638891!5m2!1sen!2snl',
    'koycegiz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25500.901523182067!2d28.691243999999998!3d36.971305949999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c07f03a8552df9%3A0xc30e4727cddb5c5e!2zS8O2eWNlxJ9peiwgTXXEn2xhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685652103!5m2!1sen!2snl',
    'marmaris' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25542.126264942468!2d28.2614455!3d36.848085049999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bfbdbff1961523%3A0xdf8e730ed1eeb2be!2zTWFybWFyaXMsIE11xJ9sYSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685664309!5m2!1sen!2snl',
    'mentese' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d406480.35018004646!2d28.425658999999996!3d37.25653895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bf6ede76a3b3e7%3A0xec5ea29d23ec46d2!2zTWVudGXFn2UvTXXEn2xhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685678124!5m2!1sen!2snl',
    'milas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50774.62669173459!2d27.780101500000008!3d37.309016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14befa4a47c5a25b%3A0xcc63f19e9e810b80!2zTWlsYXMsIE11xJ9sYSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685692010!5m2!1sen!2snl',
    'ortaca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51094.217456952414!2d28.7512035!3d36.8331685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c07bd60b717f59%3A0x94eba6dbb3963dd7!2zT3J0YWNhLCBNdcSfbGEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685704909!5m2!1sen!2snl',
    'seydikemer' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d409788.3530368801!2d29.44480054999999!3d36.639105950000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c1ad143a98c5df%3A0xb7071e27e15eb75b!2zU2V5ZGlrZW1lci9NdcSfbGEsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685716895!5m2!1sen!2snl',
    'ula' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d409788.3530368801!2d29.44480054999999!3d36.639105950000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bf76c729e3d3cd%3A0x72955adea9011867!2zVWxhLCA0ODY0MCBVbGEvTXXEn2xhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685728151!5m2!1sen!2snl',
    'yatagan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25376.20788146431!2d28.14065945!3d37.3418935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bf10c60842ae99%3A0x8d67ad0238737145!2zWWF0YcSfYW4sIE11xJ9sYSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685740345!5m2!1sen!2snl',
    'mus' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49784.960906890235!2d41.46526593588604!3d38.7508567191706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4072e5f14470dde1%3A0xb124c9666a09660f!2zTXXFnywgTXXFnyBNZXJrZXovTXXFnw!5e0!3m2!1sde!2str!4v1689858278842!5m2!1sde!2str',
    'bulanik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24772.545858760303!2d42.271196450000005!3d39.0935315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406d698f772a8f2d%3A0x575a2bc954267668!2zQnVsYW7EsWssIE11xZ8sIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720135823502!5m2!1sen!2snl',
    'haskoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24915.98419316893!2d41.68593405000001!3d38.68340299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4072c3473cd2fdcb%3A0x38b8f8623f80092c!2zSGFza8O2eSwgTXXFnywgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135833969!5m2!1sen!2snl',
    'korkut' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24897.98134738054!2d41.7854395!3d38.7350785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4072c0e21067fa07%3A0xe2dbedcb3b7aa63!2zS29ya3V0LCBNdcWfLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135846002!5m2!1sen!2snl',
    'malazgirt' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24755.862815312998!2d42.53637555!3d39.14099804999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406d3c1853f01f7b%3A0xb10ec634ea1a3dc!2zTWFsYXpnaXJ0LCBNdcWfLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135857165!5m2!1sen!2snl',
    'varto' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24744.49220810395!2d41.454037!3d39.173322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407276c19adc5b51%3A0xf8c936e7384e6cfa!2zVmFydG8sIE11xZ8sIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720135870298!5m2!1sen!2snl',
    'nevsehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49867.21553030693!2d34.66756583440356!3d38.632759725838866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a6e4566fe8181%3A0x59d53f1bc98af56c!2zTmV2xZ9laGlyLCBOZXbFn2VoaXIgTWVya2V6L05ldsWfZWhpcg!5e0!3m2!1sde!2str!4v1689858255021!5m2!1sde!2str',
    'acigol' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24962.188670089996!2d34.507872!3d38.55051005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d5f58a7e7c1b41%3A0x53f9156068b663c!2zQWPEsWfDtmwsIE5ldsWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685445928!5m2!1sen!2snl',
    'avanos' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24905.44126617903!2d34.8446954!3d38.71367255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a60b2a2803d65%3A0x54d4f071e88dc217!2zQXZhbm9zLCBOZXbFn2VoaXIsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685460892!5m2!1sen!2snl',
    'derinkuyu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200120.0640060859!2d34.695045449999995!3d38.39811605000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a104b04e40da7%3A0x427faac61a9dcdba!2zRGVyaW5rdXl1L05ldsWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685474597!5m2!1sen!2snl',
    'gulsehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200120.0640060859!2d34.695045449999995!3d38.39811605000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a7a47b3d651a7%3A0xa51b8be8a30047e7!2zR8O8bMWfZWhpciwgTmV2xZ9laGlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685488425!5m2!1sen!2snl',
    'hacibektas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24825.517226517622!2d34.564039!3d38.9424955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a8173fea21ec5%3A0xf37ec66c5e9e909d!2zSGFjxLFiZWt0YcWfLCBOZXbFn2VoaXIsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685499699!5m2!1sen!2snl',
    'kozakli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24732.673179958572!2d34.851735999999995!3d39.206897000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152ab81019b35ad3%3A0x8213edab28d12704!2zS296YWtsxLEsIE5ldsWfZWhpciwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685510490!5m2!1sen!2snl',
    'urgup' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24932.042118452362!2d34.92301440000001!3d38.63726105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a5cdebd7780a9%3A0x608e4e814b813413!2zw5xyZ8O8cCwgTmV2xZ9laGlyLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685526823!5m2!1sen!2snl',
    'nigde' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50323.098067014784!2d34.63849582618657!3d37.97261031537161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1529e7e65b22ed61%3A0xe646b6c110f0ab6f!2zTmnEn2RlLCBOacSfZGUgTWVya2V6L05pxJ9kZQ!5e0!3m2!1sde!2str!4v1689858233601!5m2!1sde!2str',
    'altunhisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12577.007342625091!2d34.367703!3d37.99458599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d6237494a1bbad%3A0x33ff3bd0f823aa57!2zQWx0dW5oaXNhciwgTmnEn2RlLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685358235!5m2!1sen!2snl',
    'bor' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50381.82885340795!2d34.558118500000006!3d37.886855999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1529d9119afe155f%3A0x27e4c55d2d834a95!2zQm9yLCBOacSfZGUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685369341!5m2!1sen!2snl',
    'camardi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12604.31187841682!2d34.98623405!3d37.8350605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1529bd983cddddbb%3A0x6486d86153762e29!2zw4dhbWFyZMSxLCBOacSfZGUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685382347!5m2!1sen!2snl',
    'ciftlik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12545.539683842346!2d34.48670755!3d38.177732049999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d602b87afdf863%3A0x99ebdfa2cd7ec5bf!2zw4dpZnRsaWssIE5pxJ9kZSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685395433!5m2!1sen!2snl',
    'ulukisla' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25305.11466401378!2d34.47685!3d37.55178095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d7d81546001e29%3A0x6cfe3bba4b013d0c!2zVWx1a8SxxZ9sYSwgTmnEn2RlLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685408100!5m2!1sen!2snl',
    'ordu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1548420.0831302358!2d34.89784711464294!3d40.71233712888126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4062bbbf7ddbf153%3A0xbf0679643b74af29!2zT3JkdSwgVMO8cmtpeWU!5e0!3m2!1sen!2sus!4v1689277140183!5m2!1sen!2sus',
    'akkus' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12082.153712108227!2d37.01782745!3d40.794160549999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407d38d64dae8f81%3A0x962c22f522eb48c2!2zQWtrdcWfLCBPcmR1LCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685041136!5m2!1sen!2snl',
    'altinordu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96366.38944081198!2d37.906176!3d40.993530050000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406321e8831051d5%3A0xef59fbaab5f13cdd!2zT3JkdSwgQWx0xLFub3JkdS9PcmR1LCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685066082!5m2!1sen!2snl',
    'aybasti' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24204.309078555456!2d37.386962!3d40.68413345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407cd85f0241da9d%3A0xba921dca3b5ea997!2zQXliYXN0xLEsIE9yZHUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685076932!5m2!1sen!2snl',
    'camas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12062.012429571065!2d37.52633295!3d40.904713449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4062d3fcd98cdf9d%3A0xae42a98bc4e45e13!2zw4dhbWHFnywgT3JkdSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685088094!5m2!1sen!2snl',
    'catalpinar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12067.10577912913!2d37.4497245!3d40.876780000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4062d31b8f2c4e8f%3A0x94e4d768c8ec7f11!2zw4dhdGFscMSxbmFyLCBPcmR1LCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685106470!5m2!1sen!2snl',
    'caybasi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96393.55287512015!2d37.0383109!3d40.9749435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407d4cf7de397be9%3A0xfe2e1b9996c14f38!2zw4dheWJhxZ_EsS9PcmR1LCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685123843!5m2!1sen!2snl',
    'fatsa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48142.37064126916!2d37.471638899999995!3d41.049356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4062c4365dd7440b%3A0x86dd5d8475d77172!2zRmF0c2EsIE9yZHUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685136445!5m2!1sen!2snl',
    'golkoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24202.360075193188!2d37.617575050000006!3d40.689499999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407cd1c6f0f0ac8f%3A0x7c8e19c59b9980de!2zR8O2bGvDtnksIE9yZHUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685153722!5m2!1sen!2snl',
    'gulyali' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24202.360075193188!2d37.617575050000006!3d40.689499999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40633d5ac484ec4f%3A0x2a04d76679d41755!2zR8O8bHlhbMSxL09yZHUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685166327!5m2!1sen!2snl',
    'gurgentepe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12083.176419466894!2d37.60696395000001!3d40.78854044999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407cd4d0603968c7%3A0x90bb215311787f6f!2zR8O8cmdlbnRlcGUsIE9yZHUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685181857!5m2!1sen!2snl',
    'ikizce' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24071.26834825352!2d37.068909!3d41.04912905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4062b20c968cf133%3A0x4a9aecff9c165cab!2zxLBraXpjZSwgT3JkdSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685198402!5m2!1sen!2snl',
    'kabaduz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12069.928705525072!2d37.887707500000005!3d40.861291449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40632540da0bc83f%3A0x3c98369721200565!2zS2FiYWTDvHosIDUyMDIwIEthYmFkw7x6L09yZHUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685209010!5m2!1sen!2snl',
    'kabatas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12089.810236991507!2d37.44700355!3d40.75207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407d29dc1fe93f19%3A0x3d3466382d98eb41!2zS2FiYXRhxZ8sIE1lcmtleiwgS2FiYXRhxZ8vT3JkdSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720685220020!5m2!1sen!2snl',
    'korgan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24153.33961503981!2d37.343713949999994!3d40.82428545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407d260039d12acd%3A0x2bb274c0e9c8bdb0!2zS29yZ2FuL09yZHUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685240617!5m2!1sen!2snl',
    'kumru' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193478.68839819374!2d37.304852!3d40.7377259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407d33bc6b3d239b%3A0x4605a3c6b7f49c01!2zS3VtcnUsIE9yZHUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685270247!5m2!1sen!2snl',
    'mesudiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d388152.7699591227!2d37.794749550000006!3d40.53178955000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407cb99b60385991%3A0xac2d983a807e20dd!2sMesudiye%2FOrdu%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720685284928!5m2!1sen!2snl',
    'persembe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d388152.7699591227!2d37.794749550000006!3d40.53178955000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4062e73f2ad8bc87%3A0xcca3cc5f52620bb0!2zUGVyxZ9lbWJlLCBPcmR1LCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720685295679!5m2!1sen!2snl',
    'ulubey' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400346.62109755346!2d28.94869073344356!3d38.378876449286366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c7c9ca5fd3aa41%3A0xcdbc50fc149cf6f9!2zVWx1YmV5L1XFn2FrLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820755048!5m2!1sen!2sua',
    'unye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193264.530772672!2d37.75300650000001!3d40.81130495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4062b9632347f70d%3A0xb7899dd351be0e8c!2zw5xueWUsIE9yZHUsIFTDvHJraXll!5e0!3m2!1sen!2snl!4v1720685322234!5m2!1sen!2snl',
    'osmaniye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50931.90509755277!2d36.207937415211475!3d37.07549347520561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152f21ccb453a189%3A0x2abadcd26e05d60c!2sOsmaniye%2C%20Osmaniye%20Merkez%2FOsmaniye!5e0!3m2!1sde!2str!4v1689858133953!5m2!1sde!2str',
    'bahce' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25423.587055366363!2d36.576109450000004!3d37.20145545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152ef66dcb0d0f79%3A0x434ee14066c6184e!2zQmFow6dlLCBPc21hbml5ZSwgVMO8cmtpeWU!5e0!3m2!1sen!2snl!4v1720135915730!5m2!1sen!2snl',
    'duzici' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25423.587055366363!2d36.576109450000004!3d37.20145545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152ef187e54baf27%3A0x2e0fc5923f21fced!2zRMO8emnDp2ksIE9zbWFuaXllLCBUw7xya2l5ZQ!5e0!3m2!1sen!2snl!4v1720135926057!5m2!1sen!2snl',
    'hasanbeyli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25446.811443492308!2d36.55575495!3d37.13244950000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152ef9b9af9fae6f%3A0x64d096cdf8bc48cc!2sHasanbeyli%2C%20Osmaniye%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720135938814!5m2!1sen!2snl',
    'kadirli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50733.80592154646!2d36.097347449999994!3d37.369421499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152ec58a2abe6fb9%3A0x504041087f998080!2sKadirli%2C%20Osmaniye%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720135951449!5m2!1sen!2snl',
    'sumbas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50733.80592154646!2d36.097347449999994!3d37.369421499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152ec90e89c992ab%3A0xd95e759176991d87!2sSumbas%2C%20Osmaniye%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720135963507!5m2!1sen!2snl',
    'toprakkale' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50943.66004552746!2d36.16164740000001!3d37.0579895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152f242414eaead9%3A0xdaf9bc5ece9caba4!2sToprakkale%2C%20Osmaniye%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2snl!4v1720135974389!5m2!1sen!2snl',
    'rize' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48155.46494376916!2d40.50540983748685!3d41.03145666459214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40667ac3f7b24237%3A0x15900b899fb9b54!2sRize%2C%20Rize%20Merkez%2FRize%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689277179084!5m2!1sen!2sus',
    'ardesen' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48043.24251721219!2d40.9396098301657!3d41.184652159243264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40664f41eebe996b%3A0xd5c7197136955093!2zQXJkZcWfZW4sIFJpemUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717042437000!5m2!1sen!2sua',
    'camlihemsin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385913.37566248485!2d40.69489744068752!3d40.916880606079374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40661a3491c93983%3A0x8c32d59b267b9dcb!2zw4dhbWzEsWhlbcWfaW4vUml6ZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717042454434!5m2!1sen!2sua',
    'cayeli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48123.08300375316!2d40.69670992866581!3d41.07570966303575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406668688312f46d%3A0x6786dd3a25285075!2zw4dheWVsaSwgUml6ZSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717042470796!5m2!1sen!2sua',
    'derepazan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12040.683741129553!2d40.417607361610294!3d41.02151609157504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40667bf5cc83c9f5%3A0x8eeedeb317610cb5!2zRGVyZXBhemFyxLEsIFJpemUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717042493346!5m2!1sen!2sua',
    'findikli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23989.978967434377!2d41.128397962590746!3d41.27083616411925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4067b3522755fb55%3A0x7a1ef06f8b2e36d1!2zRsSxbmTEsWtsxLEsIFJpemUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717042508440!5m2!1sen!2sua',
    'guneysu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12047.990655196236!2d40.603987761576356!3d40.98153199166494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4066719c4aa2c345%3A0xdf3ca70715e568a8!2zR8O8bmV5c3UsIFJpemUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717042528640!5m2!1sen!2sua',
    'hemsin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192741.3820978238!2d40.732377303276444!3d40.99058714180562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4066148be6e85053%3A0xdde6f01f79856fd3!2zSGVtxZ9pbi9SaXplLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717042548105!5m2!1sen!2sua',
    'ikizdere' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192741.3820978238!2d40.732377303276444!3d40.99058714180562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4065e6da1987fe01%3A0xeb858e67dc0b47c4!2zxLBraXpkZXJlLCBSaXplLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717042562798!5m2!1sen!2sua',
    'iyidere' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48174.72475632461!2d40.331476327695654!3d41.00511766554982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40667ec0012fc9cf%3A0x9090d10493a5d803!2zxLB5aWRlcmUsIFJpemUsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717042576038!5m2!1sen!2sua',
    'kalkandere' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12058.241260788966!2d40.434337861528704!3d40.92538554179263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406677e6f12214ad%3A0xf55b54e4edaf9a54!2sKalkandere%2C%20Rize%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042591811!5m2!1sen!2sua',
    'pazar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24350.87677631982!2d36.29310995!3d40.278869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407dc3e74933c881%3A0x9c03655ab21d9265!2sPazar%2C%20Tokat!5e0!3m2!1str!2str!4v1690846140902!5m2!1str!2str',
    'sakarya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d774039.7429885879!2d29.222030148621215!3d40.72698094427669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccb5169652181b%3A0xeba807a5c78d9201!2sSakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689277267952!5m2!1sen!2sus',
    'adapazari' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12083.119366280149!2d30.395654261413043!3d40.788853992110504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409df633dbfb5ae7%3A0x9dab4f3c21ca722a!2zQWRhcGF6YXLEsSwgS2FyYW9zbWFuLCA1NDEwMCBBZGFwYXphcsSxL1Nha2FyeWEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717042077769!5m2!1sen!2sua',
    'akyazi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48418.11073045969!2d30.58370792312308!3d40.671062178050754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cccc9cd3951259%3A0xfbf218428fdf7214!2zQWt5YXrEsSwgU2FrYXJ5YSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1717042097511!5m2!1sen!2sua',
    'arifiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96827.7290807403!2d30.271746407491936!3d40.67690961001241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccb1984ba6eecb%3A0x80fe50e654d54f0!2sArifiye%2FSakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042117882!5m2!1sen!2sua',
    'ferizli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12055.41971513635!2d30.477791261541793!3d40.940846541757274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409de59e5a6f9417%3A0xe07335fe6204e6cd!2sFerizli%2C%20Sakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042149227!5m2!1sen!2sua',
    'geyve' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24267.52311486892!2d30.271457410001258!3d40.50975617115092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc98810287aac7%3A0x9c5e059830547dc9!2sGeyve%2C%20Sakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042162241!5m2!1sen!2sua',
    'hendek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48327.96474413619!2d30.692262924816728!3d40.795053623294486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d8e1302209831%3A0xa364e1f493354341!2sHendek%2C%20Sakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042175005!5m2!1sen!2sua',
    'karapurcek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12109.177849623868!2d30.52547931129187!3d40.64543899245567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccc9c34abf7db1%3A0x555d3f5febf5c060!2zS2FyYXDDvHLDp2VrLCBTYWthcnlhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1717042194642!5m2!1sen!2sua',
    'karasu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48103.408820858225!2d30.654229379035417!3d41.102577162090576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409ddad62ec03b6f%3A0x7a3f164055dabb5f!2sKarasu%2C%20Sakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042255575!5m2!1sen!2sua',
    'kaynarca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12038.514246066601!2d30.290291761620413!3d41.03338159154854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409e0bd3d85a7c03%3A0x67bf096174d676e1!2sKaynarca%2C%20Sakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042271758!5m2!1sen!2sua',
    'kocaali' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48134.81400794638!2d30.84418842844542!3d41.05968266360262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409dc706fa54e381%3A0x442571bc2aef2db8!2sKocaali%2C%20Sakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042286903!5m2!1sen!2sua',
    'pamukova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12133.761653032703!2d30.154813711177578!3d40.509755642792726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc9e2e893c6e3b%3A0xc92a1dac12820f8c!2sPamukova%2C%20Sakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042302267!5m2!1sen!2sua',
    'sapanca' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48403.895557168966!2d30.201224873390153!3d40.69063517729081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccaf3818a3c281%3A0xa16aa914be62c628!2sSapanca%2C%20Sakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042318982!5m2!1sen!2sua',
    'serdivan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96674.75462152447!2d30.217355513317862!3d40.782121643857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccad1b5f163f3d%3A0xfde55d9e67a6865c!2sSerdivan%2FSakarya%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1717042335001!5m2!1sen!2sua',
    'sogutlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12062.078702240044!2d30.466370261510864!3d40.90435009184094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409dfaaa857bbb09%3A0xf4bb96701104f2d1!2zU8O2xJ_DvHRsw7wsIFNha2FyeWEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717042350481!5m2!1sen!2sua',
    'tarakli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12154.348471785792!2d30.48365126108187!3d40.395842543083624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc948d7638bc4d%3A0xa3ee35bab184331!2zVGFyYWtsxLEsIFNha2FyeWEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1717042363355!5m2!1sen!2sua',
    'samsun' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95929.61900695629!2d36.23129733003826!3d41.29144412112714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408877e97607d663%3A0xb939cc265fdeb52!2sSamsun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689277496457!5m2!1sen!2sus',
    'alacam' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23865.729072327686!2d35.593902414389156!3d41.60783771141941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4088af4c43b4f8b7%3A0x9794460a89d0e3d1!2zQWxhw6dhbSwgU2Ftc3VuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1716081513842!5m2!1sen!2sua',
    'asarcik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12037.883665896326!2d36.21464305735255!3d41.03682985940288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087ea5df91da49b%3A0x290ae7ab7d95a4bb!2zQXNhcmPEsWssIFNhbXN1biwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1716081528714!5m2!1sen!2sua',
    'atakum' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191729.93072628224!2d35.95378292344443!3d41.33539340149455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087d585f71e481b%3A0x7f460c55a509e5ea!2sAtakum%2FSamsun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1716081547538!5m2!1sen!2sua',
    'bafra' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23881.85898433308!2d35.88500691423909!3d41.56421516175459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4088984b9dfe0e95%3A0xdd34bf6997b023ed!2sBafra%2C%20Samsun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1716081577550!5m2!1sen!2sua',
    'canik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192227.27204776573!2d36.13748648467198!3d41.16614509281136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087dc5b47f93d01%3A0x8a9549e3d103e042!2sCanik%2FSamsun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1716081593729!5m2!1sen!2sua',
    'carsamba' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24017.791305930023!2d36.69979186297453!3d41.1950916647612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408806048db6f09b%3A0xb303a72f38b5db44!2zw4dhcsWfYW1iYSwgU2Ftc3VuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1716081609313!5m2!1sen!2sua',
    'havza' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24098.881483316665!2d35.66707496222014!3d40.97359316671167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087ac06295e9431%3A0x4c69d94000e84666!2sHavza%2C%20Samsun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1716081629285!5m2!1sen!2sua',
    'ilkadim' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192037.44558305803!2d36.07729094947136!3d41.23081150743687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087d991e2dffa15%3A0x22b074fd4a8d34be!2zxLBsa2FkxLFtL1NhbXN1biwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1716081643489!5m2!1sen!2sua',
    'kavak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24062.19852196465!2d36.00971381256143!3d41.0739146658147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087c79e69ea8233%3A0x1fc91408a4e875fd!2sKavak%2C%20Samsun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1716081659071!5m2!1sen!2sua',
    'ladik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24120.392565092337!2d35.85599380955026!3d40.914669941312546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087a39154b7327f%3A0x7474f456a6f207fc!2sLadik%2C%20Samsun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1716081674935!5m2!1sen!2sua',
    'ondokuzmayis' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23905.775842775463!2d36.056986914016605!3d41.49946416225995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4088850b9a728a9b%3A0x350ffceb2bbe4b6e!2zMTkgTWF5xLFzLCBPbmRva3V6bWF5xLFzL1NhbXN1biwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1716081688074!5m2!1sen!2sua',
    'salipazari' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12029.73437770953!2d36.81647926182234!3d41.08137204144218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407d5556705cce65%3A0x48c796e93a137311!2zU2FsxLFwYXphcsSxLCBTYW1zdW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1716081707115!5m2!1sen!2sua',
    'tekkekoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48007.924886375615!2d36.408397933400906!3d41.232767657602984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087e00889b53a79%3A0xb7dafb839f5b34c!2zVGVra2Vrw7Z5LCBTYW1zdW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1716081721650!5m2!1sen!2sua',
    'terme' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24013.994504104638!2d36.95611736300987!3d41.205438664672755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40881d3ebb9469e3%3A0x29c6074fb64e3d9e!2sTerme%2C%20Samsun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1716081735927!5m2!1sen!2sua',
    'vezirkopru' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12018.717082154857!2d35.45277571187337!3d41.14152704131065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4086451bc8bbbb89%3A0x43dc92df107bb003!2zVmV6aXJrw7ZwcsO8LCBTYW1zdW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1716081749797!5m2!1sen!2sua',
    'yakakent' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191009.7997656712!2d35.27632502957615!3d41.57945632703733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408601f1a606a413%3A0xdcd0e266ac0b77c1!2sYakakent%2FSamsun%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1716081765359!5m2!1sen!2sua',
    'siirt' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25176.019945306136!2d41.91278736124459!3d37.93037220454688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400c87a8e2f5874b%3A0xb0d8eff09827222!2sSiirt%2C%20Siirt%20Merkez%2FSiirt!5e0!3m2!1sde!2str!4v1689858207062!5m2!1sde!2str',
    'baykan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6274.026088037637!2d41.780406094199726!3d38.16313638756008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400cbfedde8c73d3%3A0x2ea0be86534607a3!2sBaykan%2C%20Siirt%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1716081378095!5m2!1sen!2sua',
    'eruh' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d403895.04106699396!2d41.89214169876172!3d37.73305501319441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400b8a1f86aaa699%3A0x64c20453612a260c!2zRXJ1aC9TaWlydCwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1716081398030!5m2!1sen!2sua',
    'kurtalan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25176.321975514405!2d41.67519745219495!3d37.92949020455923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400c82bab1b0026d%3A0x47c69f6de4803f53!2sKurtalan%2C%20Siirt%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1716081413818!5m2!1sen!2sua',
    'pervari' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6293.819791039912!2d42.54283309415376!3d37.93253538778392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400c4742078e43bd%3A0x4c3d49f33d86ef56!2zUGVydmFyaSwgQXlkxLFuLCBQZXJ2YXJpL1NpaXJ0LCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1716081429665!5m2!1sen!2sua',
    'sirvan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6293.819791039912!2d42.54283309415376!3d37.93253538778392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400cf6613f30f9df%3A0x10fe28bf95ec324!2zxZ5pcnZhbi9TaWlydCwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1716081445911!5m2!1sen!2sua',
    'tillo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100682.95365521681!2d41.97285682137425!3d37.945792716877115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400c6241ff4c6fdd%3A0x64a22efac750b296!2zQXlkxLFubGFyL1NpaXJ0LCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1716081467443!5m2!1sen!2sua',
    'sinop' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47429.67113109525!2d35.08870592832029!3d42.01412813386578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408f12de6b86738d%3A0xcfa12eddefc640fb!2sSinop%2C%20Sinop%20Merkez%2FSinop!5e0!3m2!1sde!2str!4v1689858177761!5m2!1sde!2str',
    'ayancik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190253.66509791807!2d34.399344088502495!3d41.83446665612218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408581e865312d8f%3A0x5691726b2be594ad!2zQXlhbmPEsWsvU2lub3AsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715822188341!5m2!1sen!2sua',
    'boyabat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190253.66509791807!2d34.399344088502495!3d41.83446665612218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4085c3aee43faa2b%3A0xe0d48b05ece24414!2sBoyabat%2C%20Sinop%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715822203829!5m2!1sen!2sua',
    'dikmen' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191008.91245205406!2d35.094036529645294!3d41.57975632688958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4085fe708f1f4bf7%3A0x90b9c548a9921089!2sDikmen%2FSinop%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715822219465!5m2!1sen!2sua',
    'duragan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191008.91245205406!2d35.094036529645294!3d41.57975632688958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4085e0118cd0d001%3A0xd1aaf722c494f37b!2zRHVyYcSfYW4sIFNpbm9wLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715822238289!5m2!1sen!2sua',
    'erfelek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190205.0715022743!2d34.709402542289034!3d41.85081169869027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408f63424a3952df%3A0x6b92463ac99a2f66!2sErfelek%2FSinop%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715822253773!5m2!1sen!2sua',
    'gerze' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23793.783281836408!2d35.16654491505841!3d41.80195820997961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408f5c8173679a99%3A0xccc59576238501dc!2sGerze%2C%20Sinop%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715822267133!5m2!1sen!2sua',
    'sarayduzu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191829.56023740646!2d34.61276346567778!3d41.30153446943471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4085d6dc4b47bb35%3A0x9a2a4b5231e26a21!2zU2FyYXlkw7x6w7wvU2lub3AsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715822281319!5m2!1sen!2sua',
    'turkeli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11870.24246758925!2d34.32947131256165!3d41.9452920397476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408562415b37ded5%3A0xedb6ac81079ad053!2zVMO8cmtlbGksIFNpbm9wLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715822296052!5m2!1sen!2sua',
    'sivas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49081.77520257864!2d36.95470984855811!3d39.74838921775896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407eab6a6050ec65%3A0x83f714044652ea9b!2sSivas%2C%20Sivas%20Merkez%2FSivas!5e0!3m2!1sde!2str!4v1689858157010!5m2!1sde!2str',
    'akincilar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12210.579728095561!2d38.33652781098393!3d40.083331593918835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407b1056e03dd85d%3A0x4e9fa346c43ff3ec!2zQWvEsW5jxLFsYXIsIFNpdmFzLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821952006!5m2!1sen!2sua',
    'divrigi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24674.88950168185!2d38.093691456861!3d39.370700684084476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4079f5557068f637%3A0x38437711d5cafee!2zRGl2cmnEn2ksIFNpdmFzLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821980571!5m2!1sen!2sua',
    'gemerek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12370.441746456658!2d36.062073310242795!3d39.18357604662612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407f4be9b8e3a2db%3A0xb79f65ac0e7606cc!2sGemerek%2C%20Sivas%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715822009652!5m2!1sen!2sua',
    'golova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6107.211227335404!2d38.60179219458575!3d40.061901385995256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407b1fada4cf25dd%3A0xd87287cd406edbe6!2zR8O2bG92YSwgU2l2YXMsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715822022412!5m2!1sen!2sua',
    'hafik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12251.101438659834!2d37.379178710796104!3d39.85686699455799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407bf110be42d99f%3A0x7d635baabefcb529!2sHafik%2C%20Sivas%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715822036805!5m2!1sen!2sua',
    'imranli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6124.0721051643395!2d38.10716664454667!3d39.87343033612804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407baf72bd6fe483%3A0x4bf67d91e4cf341b!2zxLBtcmFubMSxLCBTaXZhcywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715822050651!5m2!1sen!2sua',
    'kangal' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12361.804810761974!2d37.38027881028285!3d39.232628046466985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4079a7a3974d0af9%3A0xcbd59f25b986f268!2sKangal%2C%20Sivas%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715822064815!5m2!1sen!2sua',
    'koyulhisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12172.164369427783!2d37.81838176116204!3d40.29704654334183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407c9c34e4e946d9%3A0x15783fbd46c47c4b!2sKoyulhisar%2C%20Sivas%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715822076037!5m2!1sen!2sua',
    'susehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24391.347116608216!2d38.06705285949916!3d40.166370724746486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407b6e0d259b7e9d%3A0x76dac9f83d867c28!2zU3XFn2VocmksIFNpdmFzLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715822093207!5m2!1sen!2sua',
    'sarkisla' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24681.867248309154!2d36.385660406796056!3d39.350950684334094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407f2b5ca93d5361%3A0x128410976ecee5aa!2zxZ5hcmvEscWfbGEsIFNpdmFzLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715822105012!5m2!1sen!2sua',
    'ulas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12324.46011315005!2d37.029574260456!3d39.44413204579599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40793f0273b571fb%3A0x270de3d9a95bad03!2zVWxhxZ8sIFNpdmFzLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715822118599!5m2!1sen!2sua',
    'yildizeli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12248.727189063095!2d36.58956326080712!3d39.87016554451965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407e992a55f2ad37%3A0x780ae39220dcf0aa!2zWcSxbGTEsXplbGksIFNpdmFzLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715822130689!5m2!1sen!2sua',
    'zara' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24488.98370147154!2d37.72673830859075!3d39.89387917778627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407b96805b458897%3A0x9365a5fd668c9e39!2zWmFyYSwgU2l2YXMsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715822147181!5m2!1sen!2sua',
    'sanliurfa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101740.60469463872!2d38.74342402741629!3d37.16710902383524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153471ebdc619091%3A0x8e788516b709466c!2zxZ5hbmzEsXVyZmE!5e0!3m2!1sde!2str!4v1689857907923!5m2!1sde!2str',
    'akcakale' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405472.6370424867!2d42.66967443864676!3d37.44289269117433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15341fd35b0248bb%3A0x9d4bca87d8a721c0!2zQWvDp2FrYWxlLCDFnmFubMSxdXJmYSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821727276!5m2!1sen!2sua',
    'birecik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25482.57494922463!2d37.95262889934486!3d37.02597121971583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153181df8eb75b25%3A0xf33e785ebbae0f5d!2zQmlyZWNpaywgxZ5hbmzEsXVyZmEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821741537!5m2!1sen!2sua',
    'ceylanpinar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25482.57494922463!2d37.95262889934486!3d37.02597121971583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153578baddc6cf81%3A0x2f508994d0b3c65d!2zQ2V5bGFucMSxbmFyL8WeYW5sxLF1cmZhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821755411!5m2!1sen!2sua',
    'eyyubiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101740.6046947749!2d38.743423881157824!3d37.167109023733985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153471ebdc619091%3A0x8e788516b709466c!2zxZ5hbmzEsXVyZmEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821792018!5m2!1sen!2sua',
    'halfeti' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6352.161981521006!2d37.86421919401887!3d37.245785838493525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15322e3f4302c2b7%3A0x29136a08e71575c0!2zSGFsZmV0aSwgxZ5hbmzEsXVyZmEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821806697!5m2!1sen!2sua',
    'haliliye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6352.161981521006!2d37.86421919401887!3d37.245785838493525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1534f7c4c4b58c1b%3A0xfd9ed670ee1e6fca!2zSGFsaWxpeWUvxZ5hbmzEsXVyZmEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821821168!5m2!1sen!2sua',
    'harran' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12767.89927592892!2d39.018845308400046!3d36.867021555646566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15343dad4905e597%3A0x6a17c99b458fad05!2zSGFycmFuLCDFnmFubMSxdXJmYSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821836109!5m2!1sen!2sua',
    'hilvan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12647.23888849345!2d38.947682808959456!3d37.58309805254501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1534bfda6a35074b%3A0x1c54c030f71279e6!2zSGlsdmFuLCDFnmFubMSxdXJmYSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821849191!5m2!1sen!2sua',
    'karakopru' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12647.23888849345!2d38.947682808959456!3d37.58309805254501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1534790a5ceae453%3A0x1d9abba231b33e14!2zS2FyYWvDtnByw7wvxZ5hbmzEsXVyZmEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821866804!5m2!1sen!2sua',
    'siverek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d406354.5684231033!2d38.379775693187625!3d37.27984290182855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40758047b940eb6b%3A0x94975df9d638b939!2zU2l2ZXJlaywgNjM2MDAgU2l2ZXJlay_FnmFubMSxdXJmYSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821879683!5m2!1sen!2sua',
    'suruc' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25496.58415175636!2d38.40640284921445!3d36.98419022045966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1533e38c66464709%3A0x8d19cc7a139ca4ed!2zU3VydcOnLCDFnmFubMSxdXJmYSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821894479!5m2!1sen!2sua',
    'virasehir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25411.935481555745!2d39.74522090000226!3d37.23603421603343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153569bc7eaaa4a1%3A0xe450f9e87ca8b771!2zVmlyYW7Fn2VoaXIsIMWeYW5sxLF1cmZhLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821909971!5m2!1sen!2sua',
    'sirnak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25315.203540172333!2d42.435785959999336!3d37.52205671117532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40095432a08a30f5%3A0xa7cc750d3927015!2zxZ7EsXJuYWssIMWexLFybmFrIE1lcmtlei_FnsSxcm5haw!5e0!3m2!1sde!2str!4v1689857887285!5m2!1sde!2str',
    'beytussebap' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6324.729285490922!2d43.162816144082306!3d37.570030388150485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400eea65b8cbe45f%3A0x2b7b065957c70c20!2zQmV5dMO8xZ_Fn2ViYXAsIMWexLFybmFrLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821601113!5m2!1sen!2sua',
    'cizre' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25379.691421329626!2d42.16519600030235!3d37.3315832143902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40096401b82f5eaf%3A0xb0bde53725aeb8d8!2zQ2l6cmUsIMWexLFybmFrLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821615551!5m2!1sen!2sua',
    'guclukonak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6333.169734648446!2d41.90871709406254!3d37.47052243825411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400bc3a28bd51063%3A0x700ac5b2646c7f4c!2zR8O8w6dsw7xrb25haywgxZ7EsXJuYWssIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821634536!5m2!1sen!2sua',
    'idil' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25375.804186723286!2d41.86647485033854!3d37.343088164193674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400bd139f236aa35%3A0x31ed0d3a912a079f!2zxLBkaWwsIMWexLFybmFrLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821659703!5m2!1sen!2sua',
    'silopi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25408.57480205037!2d42.44347140003355!3d37.24600271586108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4009152a725c1153%3A0x83a7c2f2b1be81b4!2zU2lsb3BpLCDFnsSxcm5haywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821672534!5m2!1sen!2sua',
    'uludere' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405472.6370424867!2d42.66967443864676!3d37.44289269117433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400ecc15f28b82ed%3A0x12cf424691ecb5fd!2zVWx1ZGVyZS_FnsSxcm5haywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821688010!5m2!1sen!2sua',
    'tekirdag' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96415.70890703301!2d27.475629622115832!3d40.959778117581116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b4601d4c18e4e5%3A0xc572e1c0c57cb1b!2zVGVraXJkYcSfLCBTw7xsZXltYW5wYcWfYS9UZWtpcmRhxJ8!5e0!3m2!1sde!2str!4v1689857857681!5m2!1sde!2str',
    'cerezkoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23983.66156449663!2d27.977055413292053!3d41.288025163975504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5278f6fa3be55%3A0x70963dfacba272b0!2zw4dlcmtlemvDtnksIFRla2lyZGHEnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821352346!5m2!1sen!2sua',
    'corlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48056.962111231136!2d27.764310882482324!3d41.165948609887735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b4dd92e238353d%3A0x522f14d777b250a6!2zw4dvcmx1LCBUZWtpcmRhxJ8sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821366986!5m2!1sen!2sua',
    'ergene' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191848.4302128557!2d27.60104901420674!3d41.29511897285245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b4db6e2d87a51d%3A0x92ac61f2d19949f2!2zRXJnZW5lL1Rla2lyZGHEnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821389740!5m2!1sen!2sua',
    'hayrabolu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24011.41113407834!2d27.085133963033904!3d41.21247761461273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b37cc0ae7d95c3%3A0xe731f851c0f9d45b!2zSGF5cmFib2x1LCBUZWtpcmRhxJ8sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821403087!5m2!1sen!2sua',
    'kapakli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24011.41113407834!2d27.085133963033904!3d41.21247761461273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b52840ebeb0b2f%3A0x545a2e4f2d832d17!2zS2FwYWtsxLEvVGVraXJkYcSfLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821416024!5m2!1sen!2sua',
    'malkara' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191723.02958707677!2d27.77580202398237!3d41.337737900258425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b393e5bedb6e3d%3A0x7945e151336700ed!2zTWFsa2FyYSwgVGVraXJkYcSfLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821429683!5m2!1sen!2sua',
    'muratli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24026.41552239155!2d27.48007741289431!3d41.17158111496303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b4925015bc7c41%3A0xbada54bcd963853f!2zTXVyYXRsxLEsIFRla2lyZGHEnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821475853!5m2!1sen!2sua',
    'saray' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12463.490757872994!2d44.16360470981142!3d38.65180754843658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4013ccf1f350f299%3A0x44d02ee5e0446541!2zU2FyYXksIFZhbiwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715820613294!5m2!1sen!2sua',
    'suleymanpasa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96415.70890717731!2d27.47562948351358!3d40.959778117482436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b4601d4c18e4e5%3A0xc572e1c0c57cb1b!2zVGVraXJkYcSfLCBTw7xsZXltYW5wYcWfYS9UZWtpcmRhxJ8sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821513304!5m2!1sen!2sua',
    'sarkoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48458.831554988006!2d27.073776374953898!3d40.614950180249174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b3f9cd8ddedc45%3A0xea4f0fd0dc16c58f!2zxZ5hcmvDtnksIFRla2lyZGHEnywgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821530336!5m2!1sen!2sua',
    'tokat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48676.876652176004!2d36.49024095585355!3d40.31339269255226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407db64b082d54f1%3A0xfcd494e5051ec25a!2sTokat%2C%20Tokat%20Merkez%2FTokat!5e0!3m2!1sde!2str!4v1689857837837!5m2!1sde!2str',
    'almus' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12157.620483909752!2d36.90324255!3d40.377713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407c54bafcf1f7d5%3A0x1c4ab6e2ba8f7f33!2sAlmus%2C%20Tokat!5e0!3m2!1str!2str!4v1690846038606!5m2!1str!2str',
    'artova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12204.892373410423!2d36.2985529!3d40.11503149999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407dd6c552b954b5%3A0xbd28d4419087be87!2sArtova%2C%2060670%20Artova%2FTokat!5e0!3m2!1str!2str!4v1690846057724!5m2!1str!2str',
    'basciftlik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12127.379992181171!2d37.16839505!3d40.545013499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407ce26edd93a067%3A0x5914062b120085fe!2zQmHFn8OnaWZ0bGlrLCBUb2thdA!5e0!3m2!1str!2str!4v1690846080364!5m2!1str!2str',
    'erbaa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24205.02573527485!2d36.56438695!3d40.682159999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407d711a01489e47%3A0x50490f2b6e07a26!2sErbaa%2C%20Tokat!5e0!3m2!1str!2str!4v1690846100869!5m2!1str!2str',
    'niksar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48477.86229277829!2d36.9414435!3d40.58870445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407d1ab91ddb8c95%3A0x3ec6b394fa23e1ff!2sNiksar%2C%20Tokat!5e0!3m2!1str!2str!4v1690846120130!5m2!1str!2str',
    'resadiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12154.989819356912!2d37.3369595!3d40.392289500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407cf22b2d2c08ad%3A0x307bdc4c2174090f!2sRe%C5%9Fadiye%2C%20Tokat!5e0!3m2!1str!2str!4v1690846160340!5m2!1str!2str',
    'sulusaray' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12226.696536103946!2d36.086226599999996!3d39.99338705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407e7ac3ea45616f%3A0xc89599aa3e4897be!2sSulusaray%2C%20Gaziosmanpa%C5%9Fa%2C%20Sulusaray%2FTokat!5e0!3m2!1str!2str!4v1690846178884!5m2!1str!2str',
    'turhal' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48618.9603763723!2d36.076144049999996!3d40.393673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407ded8d5f53fe01%3A0xcdd20d054dada621!2sTurhal%2C%20Tokat!5e0!3m2!1str!2str!4v1690846197947!5m2!1str!2str',
    'zile' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24343.38456014504!2d35.890526400000006!3d40.299667050000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407dfb0dc0f97df1%3A0xc6dd3047d107f037!2sZile%2C%20Tokat!5e0!3m2!1str!2str!4v1690846235701!5m2!1str!2str',
    'trabzon' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48183.630264921725!2d39.69006028693399!3d40.99293411597378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40643c066bf2ec89%3A0xc4390aca748c2b71!2sTrabzon%2C%20Ortahisar%2FTrabzon%2C%20T%C3%BCrkei!5e0!3m2!1sde!2slu!4v1689218111069!5m2!1sde!2slu',
    'akcaabat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48166.8334785324!2d39.55013933042414!3d41.015911165163445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406415c932248b01%3A0x164e572f7a2039fd!2zQWvDp2FhYmF0LCBUcmFiem9uLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820966552!5m2!1sen!2sua',
    'arakli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24116.136352792135!2d40.04459936205963!3d40.926334117142034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40642d5d98632357%3A0x471f50d60740b5b6!2zQXJha2zEsSwgVHJhYnpvbiwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715820981398!5m2!1sen!2sua',
    'arsin' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12053.11406834276!2d39.92390576171392!3d40.953477041728526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406431b46a12de93%3A0xa7baa2543ab1b94f!2sArsin%2C%20Trabzon%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715820998199!5m2!1sen!2sua',
    'besikduzu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12034.86569602011!2d39.223021311798526!3d41.053330041504196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406474650ddbcc23%3A0xa65252d4c6f9b7e1!2zQmXFn2lrZMO8esO8LCBUcmFiem9uLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821011693!5m2!1sen!2sua',
    'carsibasi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12028.562949236486!2d39.37647981182774!3d41.08777154142809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40640daa9d3089c1%3A0x1b0a34e3ef3c9cd3!2zw4dhcsWfxLFiYcWfxLEsIFRyYWJ6b24sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821024674!5m2!1sen!2sua',
    'caykara' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193723.10357425504!2d40.12021236802646!3d40.65361684433515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406595370edc2b53%3A0x6f6a5db771145ab1!2zw4dheWthcmEvVHJhYnpvbiwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821041343!5m2!1sen!2sua',
    'dernekpazari' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96688.11710281705!2d40.18061247316883!3d40.772940195258435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4065c4132249677b%3A0xa27f541ed8a530cb!2zRGVybmVrcGF6YXLEsS9UcmFiem9uLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821057905!5m2!1sen!2sua',
    'duzkoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96688.11710281705!2d40.18061247316883!3d40.772940195258435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406442a561c76ff3%3A0x8fd86f093cf8cbf0!2zRMO8emvDtnksIFRyYWJ6b24sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821073607!5m2!1sen!2sua',
    'hayrat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6032.399324831773!2d40.36295114475863!3d40.889434935469495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4065d9e9210fe201%3A0xfb19a26c3b52b73a!2sHayrat%2C%20Trabzon%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715821088681!5m2!1sen!2sua',
    'koprubasi' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193578.8482967164!2d39.94730582927759!3d40.70327586347811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4065b85634e3cfc3%3A0xf9f36a77b7b8c3cb!2zS8O2cHLDvGJhxZ_EsS9UcmFiem9uLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715821104128!5m2!1sen!2sua',
    'macka' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193404.0192969707!2d39.39132479291273!3d40.763392726593985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406450f2a47b2df9%3A0xa18507f191d86094!2zTWHDp2thL1RyYWJ6b24sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821119846!5m2!1sen!2sua',
    'of' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12054.378180409483!2d40.25899971170804!3d40.94655254174428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4065d42e2cb3ab75%3A0x2fd95ef843d6fbf6!2zT2YsIFRyYWJ6b24sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821160999!5m2!1sen!2sua',
    'ortahisar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193022.88895333582!2d39.56023142263532!3d40.8941956981249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406447f78082c27d%3A0x34cc63b2db74a10!2sOrtahisar%2FTrabzon%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715821186156!5m2!1sen!2sua',
    'surmene' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24124.162119044187!2d40.10705441198493!3d40.90433716734402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4065d2bd07723929%3A0x55385ccee176eed9!2zU8O8cm1lbmUsIFRyYWJ6b24sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821208749!5m2!1sen!2sua',
    'salpazari' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193095.65799469835!2d39.02247786696063!3d40.869248212902285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4064639b05446c89%3A0xf65f656e936140c8!2zxZ5hbHBhemFyxLEvVHJhYnpvbiwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715821234908!5m2!1sen!2sua',
    'tonya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6032.658140400435!2d39.285394144758015!3d40.88659593547105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4064667bb764f987%3A0xcf184fcb76066833!2sTonya%2C%20Trabzon%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715821250795!5m2!1sen!2sua',
    'vakfikebir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24072.115919534135!2d39.265413462469134!3d41.046812216054796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40647375cfdc4ef1%3A0x4e6b7b362530272a!2zVmFrZsSxa2ViaXIsIFRyYWJ6b24sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715821270338!5m2!1sen!2sua',
    'yomra' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24102.530159734186!2d39.830385412186196!3d40.963603616802224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4064308f9dbc5981%3A0xee330b1193a5b2d7!2sYomra%2C%20Trabzon%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715821284467!5m2!1sen!2sua',
    'tunceli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49545.24364990311!2d39.49350644020626!3d39.09331525052915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4071221b165ec817%3A0xfda882d6b65ada8c!2sTunceli%2C%20Tunceli%20Merkez%2FTunceli!5e0!3m2!1sde!2str!4v1689857804006!5m2!1sde!2str',
    'cemisgezek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6195.972467692255!2d38.909132694380354!3d39.061227886757926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4077334cdc081b61%3A0xe8775e4c963afe2a!2zw4dlbWnFn2dlemVrLCBUdW5jZWxpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820800699!5m2!1sen!2sua',
    'hozat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12384.358787906061!2d39.212397160178305!3d39.104427996885704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4070da14515c12f1%3A0x797ecf015484ff36!2sHozat%2C%20Tunceli%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715820816495!5m2!1sen!2sua',
    'mazgrit' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6199.613739681014!2d39.602356044371916!3d39.01971888679242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40713c7d58a47863%3A0xf1b01e0cd20c798f!2sMazgirt%2C%20Tunceli%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715820831748!5m2!1sen!2sua',
    'nazimiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197841.5387545322!2d39.70305394662573!3d39.21394139155996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407108b673d7aa95%3A0xeb4d8b2f7a3ed4cc!2zTmF6xLFtaXllL1R1bmNlbGksIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820849298!5m2!1sen!2sua',
    'pertek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24853.310211107608!2d39.303548905200806!3d38.86305269077468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076cd08bba971c7%3A0xc17bd6b10109de0b!2sPertek%2C%20Tunceli%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715820881869!5m2!1sen!2sua',
    'pulumur' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d394311.2732622548!2d39.69969682668246!3d39.4567476932366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4071b4a065b26b97%3A0x7dbb1e967ec3dc8!2zUMO8bMO8bcO8ci9UdW5jZWxpLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820899374!5m2!1sen!2sua',
    'usak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49841.87061815008!2d29.36500038486035!3d38.669181073769266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c87fd9700e8031%3A0xe9e1c5b72df9bba3!2zVcWfYWssIFXFn2FrIE1lcmtlei9VxZ9haw!5e0!3m2!1sde!2str!4v1689857783829!5m2!1sde!2str',
    'banaz' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24896.48457061763!2d29.738801854799043!3d38.73937224249077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c89667d405f1ff%3A0x8f3963cc351b466!2zQmFuYXosIFXFn2FrLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820676929!5m2!1sen!2sua',
    'esma' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25014.275829417573!2d28.929100303244347!3d38.40023199908729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c7946b71757637%3A0xb7b3fcf24ae46c68!2zRcWfbWUsIFXFn2FrLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820711281!5m2!1sen!2sua',
    'karahalli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6260.469756951798!2d29.527731144231144!3d38.32039138741152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c63615bfff56a1%3A0x546b86faa0cb9075!2zS2FyYWhhbGzEsSwgVcWfYWssIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820725980!5m2!1sen!2sua',
    'sivasli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24980.651503798206!2d29.66243890401584!3d38.49729914594709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c626a76830bb9d%3A0x9e72a7aab729fee7!2zU2l2YXNsxLEsIFXFn2FrLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820738736!5m2!1sen!2sua',
    'van' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99914.87254124647!2d43.276152971495826!3d38.50287413178088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40127078fe8f307d%3A0x8c905e2790e2dabb!2zVmFuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sus!4v1689277559092!5m2!1sen!2sus',
    'bahcesaray' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200910.14467239805!2d42.64357030692086!3d38.111792391575605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400db69abf04a015%3A0x5602601bf2357dd3!2zQmFow6dlc2FyYXkvVmFuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820422279!5m2!1sen!2sua',
    'basakale' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25137.428087621254!2d44.00039580255691!3d38.04292670278221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400e2028821e2ab1%3A0xfe75d01a2cd44156!2zQmHFn2thbGUsIFZhbiwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715820447100!5m2!1sen!2sua',
    'caldiran' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d396215.96853813453!2d43.65523691339222!3d39.119280348603745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x401371d75802ef23%3A0xf8ecc0a2899afea9!2zw4dhbGTEsXJhbi9WYW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820462506!5m2!1sen!2sua',
    'catak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25148.14898926669!2d43.03995680245715!3d38.0116872032688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400dd1b8b48ba1bd%3A0xf75ac5ffaf0a832!2zw4dhdGFrLCBWYW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820478362!5m2!1sen!2sua',
    'edremit' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50015.94779164817!2d43.23163379577563!3d38.41844028824114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400d882147f2c963%3A0x2f8cd9db42cb7862!2sEdremit%2C%20Van%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715820493195!5m2!1sen!2sua',
    'ercis' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49590.32222567348!2d43.32295535375254!3d39.02910925393279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x401320faf4737e6d%3A0x58273bfc6d6db28c!2zRXJjacWfLCBWYW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820513394!5m2!1sen!2sua',
    'gevas' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25048.74203263818!2d43.08215690338223!3d38.30051869885165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400d917c951c52c3%3A0x1d82903b8118ec22!2zR2V2YcWfLCBWYW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820528272!5m2!1sen!2sua',
    'gulpinar' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25040.73915105582!2d43.37468495345668!3d38.32369119850517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400df5a61f72c8f9%3A0x56b2eb64e77ec568!2zR8O8cnDEsW5hciwgVmFuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820554232!5m2!1sen!2sua',
    'ipekyolu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d399095.5310985383!2d43.257733939462064!3d38.604393059185554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x401242c70538b065%3A0x589a917c6dccb6e7!2zxLBwZWt5b2x1L1ZhbiwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715820571315!5m2!1sen!2sua',
    'muradiye' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24809.85023262802!2d43.7449139056052!3d38.98721763908575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40130fa0049e1067%3A0xe9cd44132d09191e!2sMuradiye%2C%20Van%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715820586761!5m2!1sen!2sua',
    'ozalp' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24926.807282125606!2d43.959157854516874!3d38.65230829371902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40123585c396c2cf%3A0xa60913663760cf0b!2zw5Z6YWxwLCBWYW4sIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820599996!5m2!1sen!2sua',
    'tusba' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99914.8725410724!2d43.27615315057261!3d38.502874131906346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40127078fe8f307d%3A0x8c905e2790e2dabb!2zVmFuLCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820629664!5m2!1sen!2sua',
    'yalova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48438.049107262734!2d29.224988410156346!3d40.64359572913621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cafacc286b4cb1%3A0xb60ab599f8c5d1d0!2sYalova%2C%20Yalova%20Merkez%2FYalova!5e0!3m2!1sde!2str!4v1689857727814!5m2!1sde!2str',
    'altinova' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48404.44943953292!2d29.46775742597271!3d40.689872677321276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb1ed789b5efe9%3A0x48bb2f35869c165b!2zQWx0xLFub3ZhLCBZYWxvdmEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820307146!5m2!1sen!2sua',
    'armutlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48532.6048950074!2d28.783870623571772!3d40.5131292843085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca7b1977d97b19%3A0x31a8bfd73f33b377!2sArmutlu%2C%20Yalova%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715820323323!5m2!1sen!2sua',
    'cinarcik' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48438.24904116574!2d29.068397925339507!3d40.6433202291346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caf3bdf7ef0f3b%3A0xadceacbd1d22451d!2zw4fEsW5hcmPEsWssIFlhbG92YSwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715820340556!5m2!1sen!2sua',
    'ciftlikkoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48421.460129166444!2d29.304210875654046!3d40.66644922823126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cae252428823a7%3A0x6a3e105ce7fd3366!2zw4dpZnRsaWtrw7Z5LCBZYWxvdmEsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820358486!5m2!1sen!2sua',
    'termal' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48421.460129166444!2d29.304210875654046!3d40.66644922823126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caf6d2afc1241f%3A0xc2119c4325deab2b!2sTermal%2C%20Yalova%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715820374271!5m2!1sen!2sua',
    'yozgat' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49034.13560269733!2d34.770958320237284!3d39.81521266460185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408070bcab35d055%3A0x2d85441338972669!2sYozgat%2C%20Yozgat%20Merkez%2FYozgat%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689277584942!5m2!1sen!2sus',
    'akdagmadeni' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24571.233107063916!2d35.86010640782547!3d39.663122730489384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407eff20aaf989eb%3A0x832c82ea2f57d7bc!2zQWtkYcSfbWFkZW5pLCBZb3pnYXQsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715819823117!5m2!1sen!2sua',
    'bogazliyan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24738.91210286237!2d35.22680185626529!3d39.18917673641135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b2a45a3a681f1%3A0x40a45f323a86633a!2zQm_En2F6bMSxeWFuLCBZb3pnYXQsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715819929496!5m2!1sen!2sua',
    'candir' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12359.772533023837!2d35.50739776029226!3d39.24416254642975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407f64ef0b897aad%3A0xd50d451c6ad7c38d!2zw4dhbmTEsXIsIFlvemdhdCwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715820042905!5m2!1sen!2sua',
    'cayiralan' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24697.679437802515!2d35.621762306648925!3d39.306164684903386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407f6e90e1cdcf33%3A0xc1871bca779f1932!2zw4dhecSxcmFsYW4sIFlvemdhdCwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715820059314!5m2!1sen!2sua',
    'cekerek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24428.364703810184!2d35.48092690915476!3d40.06324067587753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407e18e74492ad4b%3A0x2609d0391492e3ac!2zw4dla2VyZWssIFlvemdhdCwgVMO8cmtpeWU!5e0!3m2!1sen!2sua!4v1715820075870!5m2!1sen!2sua',
    'kadisehri' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195565.09642999808!2d35.62237767432236!3d40.01504477246656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407e6b5e49ede3d9%3A0x4e95a72ad8fc249a!2zS2FkxLHFn2VocmkvWW96Z2F0LCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820093990!5m2!1sen!2sua',
    'saraykent' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24562.899147863765!2d35.487564457903!3d39.68655518020951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407fb3a8bcd391b7%3A0x912f083c9966da7b!2sSaraykent%2C%20Yozgat%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715820111357!5m2!1sen!2sua',
    'sarikaya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49266.65767307903!2d35.33504435981791!3d39.48816373030936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407fa27d1f86ebc5%3A0xe57b8d4cb34b7895!2zU2FyxLFrYXlhLCBZb3pnYXQsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820127356!5m2!1sen!2sua',
    'sorgun' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24518.03284334977!2d35.161793858320486!3d39.812507178725994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407fd2581e0f9df5%3A0xbc6e6a6c2ff3f02b!2sSorgun%2C%20Yozgat%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sua!4v1715820148897!5m2!1sen!2sua',
    'sefaatli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24628.662243974446!2d34.73699545729112!3d39.501334682455045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407ffa6c86597557%3A0xcc490bf498b7f185!2zxZ5lZmFhdGxpLCBZb3pnYXQsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820165700!5m2!1sen!2sua',
    'yenifakili' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12365.252079178495!2d34.99025281026688!3d39.21305604653031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152acfaa2a2d726d%3A0xe866b5849da8ce2d!2zWWVuaWZha8SxbMSxLCBZb3pnYXQsIFTDvHJraXll!5e0!3m2!1sen!2sua!4v1715820181579!5m2!1sen!2sua',
    'yerkoy' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49154.93803025225!2d34.43069131191139!3d39.64558177263798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4080054e2056b395%3A0xcb0cb718263188a1!2zWWVya8O2eSwgWW96Z2F0LCBUw7xya2l5ZQ!5e0!3m2!1sen!2sua!4v1715820196300!5m2!1sen!2sua',
    'zonguldak' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47841.40062633892!2d31.75896089365137!3d41.459016650148214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409c7c43e91296e7%3A0x24080dea6d843794!2sZonguldak%2C%20Zonguldak%20Merkez%2FZonguldak%2C%20T%C3%BCrkiye!5e0!3m2!1sen!2sus!4v1689277612909!5m2!1sen!2sus',
    'alapli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12011.857081477105!2d31.39314195!3d41.17894649999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409c5110eec554f9%3A0xd5ec43b7f30703cb!2sAlapl%C4%B1%2C%20Zonguldak!5e0!3m2!1sde!2str!4v1690042052682!5m2!1sde!2str',
    'caycuma' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47860.435249561306!2d32.076249999999995!3d41.43320645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409c8306a9d8f2eb%3A0x1058295fbf10c777!2s%C3%87aycuma%2C%20Zonguldak!5e0!3m2!1sde!2str!4v1690042126259!5m2!1sde!2str',
    'devrek' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24008.482708197123!2d31.961122!3d41.22045555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409c933a593bd1bf%3A0x2e5e650a323acfa0!2sDevrek%2C%20Zonguldak!5e0!3m2!1sde!2str!4v1690042155025!5m2!1sde!2str',
    'gokcebey' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23976.4606311059!2d32.135825000000004!3d41.307611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409c99e78698827d%3A0x60afebb9724e4838!2zR8O2a8OnZWJleSwgWm9uZ3VsZGFr!5e0!3m2!1sde!2str!4v1690042177174!5m2!1sde!2str',
    'karadeniz_eregli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95950.93770689073!2d31.45966605!3d41.276944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409c5b4bd4fe9d53%3A0x7e80faebdf433d1f!2sKaradeniz%20Ere%C4%9Fli%2C%20Ere%C4%9Fli%2FZonguldak!5e0!3m2!1sde!2str!4v1690042200669!5m2!1sde!2str',
    'kilimli' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23909.944237029384!2d31.866962!3d41.48817045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409c7eefb1558f51%3A0xeaa2154b87c8b15a!2zS2lsaW1saSwgSGFjxLFvxJ9sdSwgNjcxNTAgw4dhdGFsYcSfesSxL0tpbGltbGkvWm9uZ3VsZGFr!5e0!3m2!1sde!2str!4v1690042225354!5m2!1sde!2str',
    'kozlu' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23928.13722691235!2d31.753981!3d41.43884945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409c7b5e3a358ba9%3A0x36c7413b99611ff0!2sKozlu%2C%20G%C3%BCney%2C%2067600%20Kozlu%2FZonguldak!5e0!3m2!1sde!2str!4v1690042248796!5m2!1sde!2str',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/var/www/html/storage/logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'mailhog',
        'port' => '1025',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => NULL,
      'name' => 'Example',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/var/www/html/resources/views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'database',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'localhost:4002',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'token_prefix' => '',
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
    'districtful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'localhost',
    ),
  ),
  'session' => 
  array (
    'driver' => 'database',
    'lifetime' => '15',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/var/www/html/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/var/www/html/resources/views',
    ),
    'compiled' => '/var/www/html/storage/framework/views',
  ),
  'x' => 
  array (
    'force_https' => false,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);

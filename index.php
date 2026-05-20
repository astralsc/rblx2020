<?php
include __DIR__ . '/config/db.php';
$user = null;
if (isset($_COOKIE['_ROBLOSECURITY'])) {
    $token = $_COOKIE['_ROBLOSECURITY'];

    $stmt = $DBReq->prepare("
        SELECT 
            id,
            username,
            displayname,
            isbanned,
            robux,
            tickets,
            roblosecurity,
            theme
        FROM accounts
        WHERE roblosecurity = ?
        LIMIT 1
    ");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    if ($user) {
        header("Location: /home");
        exit();
    }
}
?>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head data-machine-id="WEB1383">
    <!-- MachineID: WEB1383 -->
    <title>Roblox</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Roblox Corporation"/>
<meta name="description" content="Roblox is a global platform that brings people together through play."/>
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
<meta name="apple-itunes-app" content="app-id=431946152"/>

    <meta name="google-site-verification" content="BfkEEZ1dsSAEJIS1yV2prCFgO8zboMYioG1c9VITB5Y"/>



<script type="application/ld+json">
    {
    "@context" : "https://web.archive.org/web/20200123025244/http://schema.org",
    "@type" : "Organization",
    "name" : "Roblox",
    "url" : "https://web.archive.org/web/20200123025244/https://www.roblox.com/",
    "logo": "https://web.archive.org/web/20200123025244/https://images.rbxcdn.com/c69b74f49e785df33b732273fad9dbe0.png",
    "sameAs" : [
    "https://web.archive.org/web/20200123025244/https://www.facebook.com/ROBLOX/",
    "https://web.archive.org/web/20200123025244/https://twitter.com/roblox",
    "https://web.archive.org/web/20200123025244/https://www.linkedin.com/company/147977",
    "https://web.archive.org/web/20200123025244/https://www.instagram.com/roblox/",
    "https://web.archive.org/web/20200123025244/https://www.youtube.com/user/roblox",
    "https://web.archive.org/web/20200123025244/https://plus.google.com/+roblox",
    "https://web.archive.org/web/20200123025244/https://www.twitch.tv/roblox"
    ]
    }
</script>    <meta property="og:site_name" content="ROBLOX"/>
    <meta property="og:title" content="Roblox"/>
    <meta property="og:type" content="website"/>
        <meta property="og:url" content="http://localhost/"/>
    <meta property="og:description" content="Roblox is ushering in the next generation of entertainment. Imagine, create, and play together with millions of players across an infinite variety of immersive, user-generated 3D worlds."/>
            <meta property="og:image" content="http://localhost/images.rbxcdn.com/6c27cb9db1779888868bf7d87e6d3709.jpg"/>
    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ROBLOX">
    <meta name="twitter:title" content="Roblox">
    <meta name="twitter:description" content="Roblox is ushering in the next generation of entertainment. Imagine, create, and play together with millions of players across an infinite variety of immersive, user-generated 3D worlds.">
    <meta name="twitter:creator">
            <meta name="twitter:image1" content="http://localhost/images.rbxcdn.com/6c27cb9db1779888868bf7d87e6d3709.jpg"/>
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="ROBLOX Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone">
    <meta name="twitter:app:name:ipad" content="ROBLOX Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad">
    <meta name="twitter:app:name:googleplay" content="ROBLOX">
    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
    <meta name="twitter:app:url:googleplay"/>

<meta name="locale-data" data-language-code="en_us" data-language-name="English"/><meta name="device-meta" data-device-type="computer" data-is-in-app="false" data-is-desktop="true" data-is-phone="false" data-is-tablet="false" data-is-console="false" data-is-android-app="false" data-is-ios-app="false" data-is-uwp-app="false" data-is-xbox-app="false" data-is-amazon-app="false" data-is-win32-app="false" data-is-studio="false" data-is-game-client-browser="false" data-is-ios-device="false" data-is-android-device="false" data-app-type="unknown"/>

<meta name="page-meta" data-internal-page-name="Landing"/>
    

<script type="text/javascript">
    var Roblox = Roblox || {};

    Roblox.BundleVerifierConstants = {
        isMetricsApiEnabled: true,
        eventStreamUrl: "http://localhost/ecsv2.roblox.com/pe?t=diagnostic",
        deviceType: "Computer",
        cdnLoggingEnabled: JSON.parse("true")
    };
</script>        <script type="text/javascript">
            var Roblox = Roblox || {};

Roblox.BundleDetector = (function () {
    var isMetricsApiEnabled = Roblox.BundleVerifierConstants && Roblox.BundleVerifierConstants.isMetricsApiEnabled;

    var loadStates = {
        loadSuccess: "loadSuccess",
        loadFailure: "loadFailure",
        executionFailure: "executionFailure"
    };

    var bundleContentTypes = {
        javascript: "javascript",
        css: "css"
    };

    var ephemeralCounterNames = {
        cdnPrefix: "CDNBundleError_",
        unknown: "CDNBundleError_unknown",
        cssError: "CssBundleError",
        jsError: "JavascriptBundleError",
        jsFileError: "JsFileExecutionError",
        resourceError: "ResourcePerformance_Error",
        resourceLoaded: "ResourcePerformance_Loaded"
    };

    return {
        jsBundlesLoaded: {},
        bundlesReported: {},

        counterNames: ephemeralCounterNames,
        loadStates: loadStates,
        bundleContentTypes: bundleContentTypes,

        timing: undefined,

        setTiming: function (windowTiming) {
            this.timing = windowTiming;
        },

        getLoadTime: function () {
            if (this.timing && this.timing.domComplete) {
                return this.getCurrentTime() - this.timing.domComplete;
            }
        },

        getCurrentTime: function () {
            return new Date().getTime();
        },

        getCdnProviderName: function (bundleUrl, callBack) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', bundleUrl, true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        try {
                            var headerValue = xhr.getResponseHeader("rbx-cdn-provider");
                            if (headerValue) {
                                callBack(headerValue);
                            } else {
                                callBack();
                            }
                        } catch (e) {
                            callBack();
                        }
                    }
                };

                xhr.onerror = function () {
                    callBack();
                };

                xhr.send();
            } else {
                callBack();
            }
        },

        getCdnProviderAndReportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType) {
            this.getCdnProviderName(bundleUrl, function (cdnProviderName) {
                Roblox.BundleDetector.reportMetrics(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName);
            });
        },

        reportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName) {
            if (!isMetricsApiEnabled
                || !bundleUrl
                || !loadState
                || !loadStates.hasOwnProperty(loadState)
                || !bundleContentType
                || !bundleContentTypes.hasOwnProperty(bundleContentType)) {
                return;
            }

            var xhr = new XMLHttpRequest();
            var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "http://localhost/metrics.roblox.com";

            xhr.open("POST", metricsApiUrl + "/v1/bundle-metrics/report", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.withCredentials = true;
            xhr.send(JSON.stringify({
                bundleUrl: bundleUrl,
                bundleName: bundleName || "",
                bundleContentType: bundleContentType,
                loadState: loadState,
                cdnProviderName: cdnProviderName,
                loadTimeInMilliseconds: this.getLoadTime() || 0
            }));
        },

        logToEphemeralStatistics: function (sequenceName, value) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            sequenceName += "_" + deviceType;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-stats?name=' + sequenceName + "&value=" + value, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEphemeralCounter: function (ephemeralCounterName) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ephemeralCounterName += "_" + deviceType;
            //log to ephemeral counters - taken from eventTracker.js
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-event?name=' + ephemeralCounterName, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEventStream: function (failedBundle, ctx, cdnProvider, status) {
            var esUrl = Roblox.BundleVerifierConstants.eventStreamUrl,
                currentPageUrl = encodeURIComponent(window.location.href);

            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ctx += "_" + deviceType;
            //try and grab performance data.
            //Note that this is the performance of the xmlhttprequest rather than the original resource load.
            var duration = 0;
            if (window.performance) {
                var perfTiming = window.performance.getEntriesByName(failedBundle);
                if (perfTiming.length > 0) {
                    var data = perfTiming[0];
                    duration = data.duration || 0;
                }
            }
            //log to event stream (diagnostic)
            var params = "&evt=webBundleError&url=" + currentPageUrl +
                "&ctx=" + ctx + "&fileSourceUrl=" + encodeURIComponent(failedBundle) +
                "&cdnName=" + (cdnProvider || "unknown") +
                "&statusCode=" + (status || "unknown") +
                "&loadDuration=" + Math.floor(duration);
            var img = new Image();
            img.src = esUrl + params;
        },

        getCdnInfo: function (failedBundle, ctx, fileType) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                var counter = this.counterNames;
                xhr.open('GET', failedBundle, true);
                var cdnProvider;

                //succesful request
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        cdnProvider = xhr.getResponseHeader("rbx-cdn-provider");
                        if (cdnProvider && cdnProvider.length > 0) {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.cdnPrefix + cdnProvider + "_" + fileType);
                        }
                        else {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                        }
                    }
                    else if (xhr.readyState === xhr.DONE) {
                        // append status to cdn provider so we know its not related to network error. 
                        Roblox.BundleDetector.logToEventStream(failedBundle, ctx, cdnProvider, xhr.status);
                    }
                };

                //attach to possible things that can go wrong with the request.
                //additionally a network error will trigger this callback
                xhr.onerror = function () {
                    Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                    Roblox.BundleDetector.logToEventStream(failedBundle, ctx, counter.unknown);
                };

                xhr.send();
            }
            else {
                this.logToEventStream(failedBundle, ctx);
            }
        },

        reportResourceError: function (resourceName) {
            var ephemeralCounterName = this.counterNames.resourceError + "_" + resourceName;
            this.logToEphemeralCounter(ephemeralCounterName);
        },

        reportResourceLoaded: function (resourceName) {
            var loadTimeInMs = this.getLoadTime();
            if (loadTimeInMs) {
                var sequenceName = this.counterNames.resourceLoaded + "_" + resourceName;
                this.logToEphemeralStatistics(sequenceName, loadTimeInMs);
            }
        },

        reportBundleError: function (bundleTag) {
            var ephemeralCounterName, failedBundle, ctx, contentType;
            if (bundleTag.rel && bundleTag.rel === "stylesheet") {
                ephemeralCounterName = this.counterNames.cssError;
                failedBundle = bundleTag.href;
                ctx = "css";
                contentType = bundleContentTypes.css;
            } else {
                ephemeralCounterName = this.counterNames.jsError;
                failedBundle = bundleTag.src;
                ctx = "js";
                contentType = bundleContentTypes.javascript;
            }

            //mark that we logged this bundle
            this.bundlesReported[failedBundle] = true;

            //e.g. javascriptBundleError_Computer
            this.logToEphemeralCounter(ephemeralCounterName);
            //this will also log to event stream
            this.getCdnInfo(failedBundle, ctx, ctx);

            var bundleName;
            if (bundleTag.dataset) {
                bundleName = bundleTag.dataset.bundlename;
            }
            else {
                bundleName = bundleTag.getAttribute('data-bundlename');
            }

            this.getCdnProviderAndReportMetrics(failedBundle, bundleName, loadStates.loadFailure, contentType);
        },

        bundleDetected: function (bundleName) {
            this.jsBundlesLoaded[bundleName] = true;
        },

        verifyBundles: function (document) {
            var ephemeralCounterName = this.counterNames.jsFileError,
                eventContext = ephemeralCounterName;
            //grab all roblox script tags in the page. 
            var scripts = (document && document.scripts) || window.document.scripts;
            var errorsList = [];
            var bundleName;
            var monitor;
            for (var i = 0; i < scripts.length; i++) {
                var item = scripts[i];

                if (item.dataset) {
                    bundleName = item.dataset.bundlename;
                    monitor = item.dataset.monitor;
                }
                else {
                    bundleName = item.getAttribute('data-bundlename');
                    monitor = item.getAttribute('data-monitor');
                }

                if (item.src && monitor && bundleName) {
                    if (!Roblox.BundleDetector.jsBundlesLoaded.hasOwnProperty(bundleName)) {
                        errorsList.push(item);
                    }
                }
            }
            if (errorsList.length > 0) {
                for (var j = 0; j < errorsList.length; j++) {
                    var script = errorsList[j];
                    if (!this.bundlesReported[script.src]) {
                        //log the counter only if the file is actually corrupted, not just due to failure to load
                        //e.g. JsFileExecutionError_Computer
                        this.logToEphemeralCounter(ephemeralCounterName);
                        this.getCdnInfo(script.src, eventContext, 'js');

                        if (script.dataset) {
                            bundleName = script.dataset.bundlename;
                        }
                        else {
                            bundleName = script.getAttribute('data-bundlename');
                        }

                        this.getCdnProviderAndReportMetrics(script.src, bundleName, loadStates.executionFailure, bundleContentTypes.javascript);
                    }
                }
            }
        }
    };
})();

window.addEventListener("load", function (evt) {
    Roblox.BundleDetector.verifyBundles();
});

Roblox.BundleDetector.setTiming(window.performance.timing);
            //# sourceURL=somename.js
        </script>
    
<link href="http://localhost/images.rbxcdn.com/23421382939a9f4ae8bbe60dbe2a3e7e.ico.gzip" rel="icon"/>


    <link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" data-bundlename="Thumbnails" href="https://localhost/static.rbxcdn.com/css/72cd3aca154fd66b2ada809c31d17a2ee0cf653f89ccbbffe4e44025a4afd35e.css/fetch"/>

<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" data-bundlename="StyleGuide" href="http://localhost/static.rbxcdn.com/css/b5bb43dc638fec383967b9213abd937583decaf992ca9f8a5c089dc7ac8d04eb.css/fetch"/>

<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" data-bundlename="Footer" href="http://localhost/static.rbxcdn.com/css/55b250e8473888792f885d898973a13692fb22157baf61aaffa62ce4545f3408.css/fetch"/>



    <link rel="canonical" href="https://web.archive.org/web/20200123025244/https://www.roblox.com/"/>
    

    
<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="http://localhost/static.rbxcdn.com/css/page___c9e032a4e921419962d7000da9e16b0b_m.css/fetch"/>



<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" data-bundlename="Landing" href="http://localhost/static.rbxcdn.com/css/c6afae024d091c4372c70a9a3a6e5a6f59c6cf0b3675b5de13512955505e33a0.css/fetch"/>

<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" data-bundlename="Captcha" href="http://localhost/static.rbxcdn.com/css/df710cd4fb61f284f8136087b47232d5d41ecc3a9250be03c78421340fa692f4.css/fetch"/>

    
<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" data-bundlename="RobuxIcon" href="http://localhost/static.rbxcdn.com/css/af4a705d9238d48149768cbd4724797649ca06ff6dbf0b05feab30c7825997be.css/fetch"/>


    





<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.EnvironmentUrls = Roblox.EnvironmentUrls || {};
    Roblox.EnvironmentUrls = {"abtestingApiSite":"https://web.archive.org/web/20200123025244/https://abtesting.roblox.com","accountInformationApi":"https://web.archive.org/web/20200123025244/https://accountinformation.roblox.com","accountSettingsApi":"https://web.archive.org/web/20200123025244/https://accountsettings.roblox.com","adsApi":"https://web.archive.org/web/20200123025244/https://ads.roblox.com","apiGatewayUrl":"https://web.archive.org/web/20200123025244/https://apis.roblox.com","apiProxyUrl":"https://web.archive.org/web/20200123025244/https://api.roblox.com","assetDeliveryApi":"https://web.archive.org/web/20200123025244/https://assetdelivery.roblox.com","authApi":"http://localhost","authAppSite":"https://web.archive.org/web/20200123025244/https://authsite.roblox.com","avatarApi":"https://web.archive.org/web/20200123025244/https://avatar.roblox.com","badgesApi":"https://web.archive.org/web/20200123025244/https://badges.roblox.com","billingApi":"https://web.archive.org/web/20200123025244/https://billing.roblox.com","captchaApi":"https://web.archive.org/web/20200123025244/https://captcha.roblox.com","catalogApi":"https://web.archive.org/web/20200123025244/https://catalog.roblox.com","chatApi":"https://web.archive.org/web/20200123025244/https://chat.roblox.com","contactsApi":"https://web.archive.org/web/20200123025244/contacts.roblox.com","developApi":"https://web.archive.org/web/20200123025244/https://develop.roblox.com","domain":"roblox.com","economyApi":"https://web.archive.org/web/20200123025244/https://economy.roblox.com","engagementPayoutsApi":"https://web.archive.org/web/20200123025244/https://engagementpayouts.roblox.com","followingsApi":"https://web.archive.org/web/20200123025244/https://followings.roblox.com","friendsApi":"https://web.archive.org/web/20200123025244/https://friends.roblox.com","friendsAppSite":"https://web.archive.org/web/20200123025244/https://friendsite.roblox.com","gamesApi":"https://web.archive.org/web/20200123025244/https://games.roblox.com","gameInternationalizationApi":"https://web.archive.org/web/20200123025244/https://gameinternationalization.roblox.com","groupsApi":"https://web.archive.org/web/20200123025244/https://groups.roblox.com","inventoryApi":"https://web.archive.org/web/20200123025244/https://inventory.roblox.com","itemConfigurationApi":"https://web.archive.org/web/20200123025244/https://itemconfiguration.roblox.com","localeApi":"https://web.archive.org/web/20200123025244/https://locale.roblox.com","localizationTablesApi":"https://web.archive.org/web/20200123025244/https://localizationtables.roblox.com","metricsApi":"https://web.archive.org/web/20200123025244/https://metrics.roblox.com","midasApi":"https://web.archive.org/web/20200123025244/https://midas.roblox.com","notificationApi":"https://web.archive.org/web/20200123025244/https://notifications.roblox.com","premiumFeaturesApi":"https://web.archive.org/web/20200123025244/https://premiumfeatures.roblox.com","presenceApi":"https://web.archive.org/web/20200123025244/https://presence.roblox.com","publishApi":"https://web.archive.org/web/20200123025244/https://publish.roblox.com","screenTimeApi":"https://web.archive.org/web/20200123025244/https://apis.rcs.roblox.com/screen-time-api","thumbnailsApi":"https://web.archive.org/web/20200123025244/https://thumbnails.roblox.com","tradesApi":"https://web.archive.org/web/20200123025244/https://trades.roblox.com","translationRolesApi":"https://web.archive.org/web/20200123025244/https://translationroles.roblox.com","universalAppConfigurationApi":"https://web.archive.org/web/20200123025244/https://apis.roblox.com/universal-app-configuration","usersApi":"https://web.archive.org/web/20200123025244/https://users.roblox.com","voiceApi":"https://web.archive.org/web/20200123025244/https://voice.roblox.com","websiteUrl":"https://web.archive.org/web/20200123025244/https://www.roblox.com","privateMessagesApi":"https://web.archive.org/web/20200123025244/https://privatemessages.roblox.com"};

    // please keep the list in alphabetical order
    var additionalUrls = {
        amazonStoreLink: "https://web.archive.org/web/20200123025244/https://www.amazon.com/Roblox-Corporation/dp/B00NUF4YOA",
        appProtocolUrl: "robloxmobile://",
        appStoreLink: "https://web.archive.org/web/20200123025244/https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        googlePlayStoreLink: "https://web.archive.org/web/20200123025244/https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",
        iosAppStoreLink: "https://web.archive.org/web/20200123025244/https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        windowsStoreLink: "https://web.archive.org/web/20200123025244/https://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",
        xboxStoreLink: "https://web.archive.org/web/20200123025244/https://www.microsoft.com/en-us/p/roblox/bq1tn1t79v9k",
        amazonWebStoreLink: "https://web.archive.org/web/20200123025244/https://www.amazon.com/roblox?&amp;_encoding=UTF8&amp;tag=r05d13-20&amp;linkCode=ur2&amp;linkId=4ba2e1ad82f781c8e8cc98329b1066d0&amp;camp=1789&amp;creative=9325"
    }

    for (var urlName in additionalUrls) {
        Roblox.EnvironmentUrls[urlName] = additionalUrls[urlName];
    }
</script>



<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.GaEventSettings = {
        gaDFPPreRollEnabled: "false" === "true",
        gaLaunchAttemptAndLaunchSuccessEnabled: "false" === "true",
        gaPerformanceEventEnabled: "false" === "true"
    };
</script>



    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="headerinit" type="text/javascript" src="http://localhost/js.rbxcdn.com/799efe9bfd5be7618e023fc94f1b1b84.js"></script>



    

    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
    //Set if it browser's do not track flag is enabled
    var Roblox = Roblox || {};
    (function() {
        var dnt = navigator.doNotTrack || window.doNotTrack || navigator.msDoNotTrack;
        if (typeof window.external !== "undefined" &&
            typeof window.external.msTrackingProtectionEnabled !== "undefined") {
            dnt = dnt || window.external.msTrackingProtectionEnabled();
        }
        Roblox.browserDoNotTrack = dnt == "1" || dnt == "yes" || dnt === true;
    })();
</script>


    <script type="text/javascript">

        var _gaq = _gaq || [];

                window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
            _gaq.push(['b._setSampleRate', '10']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', 'roblox.com']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
                _gaq.push(['b._setPageGroup', 1, 'Landing']);
                
                    var eventsArr = ['b._setCustomVar', 2, 'FirstTimeVisitor', 'true', 3];
                    _gaq.push(eventsArr);
                    $(function() {
                        if(GoogleAnalyticsEvents) {
                            GoogleAnalyticsEvents.Log(eventsArr);
                        }
                    });
                
            _gaq.push(['b._trackPageview']);

        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setSampleRate', '1']);
                    _gaq.push(['c._setDomainName', 'roblox.com']);
                    _gaq.push(['c._setPageGroup', 1, 'Landing']);

        (function () {
            if (!Roblox.browserDoNotTrack) {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://web.archive.org/web/20200123025244/https://ssl' : 'https://web.archive.org/web/20200123025244/http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            }
        })();
    </script>
    
            <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("http://localhost/ecsv2.roblox.com/www/e.png",
                    "http://localhost/ecsv2.roblox.com/www/e.png",
                    "http://localhost/ecsv2.roblox.com/pe?t=studio",
                    "http://localhost/ecsv2.roblox.com/pe?t=diagnostic");
            }
        </script>



<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script>        <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/asset/'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/game/';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/game/edit.ashx';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'http://localhost/assetgame.roblox.com/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = '/login/default.aspx';
Roblox.Endpoints.Urls['/my/avatar'] = 'https://web.archive.org/web/20200123025244/http://localhost/my/avatar';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/my/money.aspx';
Roblox.Endpoints.Urls['/navigation/userdata'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/navigation/userdata';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/chat/chat';
Roblox.Endpoints.Urls['/chat/data'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/chat/data';
Roblox.Endpoints.Urls['/presence/users'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/presence/users';
Roblox.Endpoints.Urls['/presence/user'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/presence/user';
Roblox.Endpoints.Urls['/friends/list'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/friends/list';
Roblox.Endpoints.Urls['/navigation/getcount'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/navigation/getCount';
Roblox.Endpoints.Urls['/regex/email'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/regex/email';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://web.archive.org/web/20200123025244/https://search.roblox.com/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://web.archive.org/web/20200123025244/https://search.roblox.com/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://web.archive.org/web/20200123025244/https://search.roblox.com/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://web.archive.org/web/20200123025244/https://search.roblox.com/catalog/lists.aspx';
Roblox.Endpoints.Urls['/catalog/items'] = 'https://web.archive.org/web/20200123025244/https://search.roblox.com/catalog/items';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://web.archive.org/web/20200123025244/https://assetgame.roblox.com/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/bust-thumbnail/json';
Roblox.Endpoints.Urls['/group-thumbnails'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/group-thumbnails';
Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/groups/getprimarygroupinfo.ashx';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/service-workers/push-notifications';
Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/notification-stream/notification-stream-data';
Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/api/friends/acceptfriendrequest';
Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/api/friends/declinefriendrequest';
Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://web.archive.org/web/20200123025244/https://www.roblox.com/authentication/is-logged-in';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
</script>

    <script>
    Roblox = Roblox || {};
    Roblox.AbuseReportPVMeta = {
        desktopEnabled: false,
        phoneEnabled: false,
        inAppEnabled: false
    };
</script>

</head>
<body id="rbx-body" class="rbx-body    gotham-font" data-performance-relative-value="0.005" data-internal-page-name="Landing" data-send-event-percentage="0">
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9-]{2,}\.)*(((m|de|www|web|api|blog|wiki|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com)|help\.roblox\.com(?![A-Za-z0-9\/.]*\/attachments\/))(?!\/[A-Za-z0-9-+&amp;@#\/=~_|!:,.;]*%)((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(?=\s|\b))" data-regex-flags="gm" data-as-http-regex="(([^.]help|polls)\.roblox\.com)"></div>

<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500" data-ga-logging-percent="10">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0" data-http-retry-max-times="1">
</div>
    
    
        <script src="https://web.archive.org/web/20200123025244js_/https://roblox-api.arkoselabs.com/fc/api/?onload=reportFunCaptchaLoaded" async onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportResourceError('funcaptcha')"></script>
<script type="text/javascript">
    var Roblox = Roblox || {};
    $(function () {
        var funCaptcha = Roblox.FunCaptcha;
        if (funCaptcha) {
            var captchaTypes = [{"Type":"Signup","PublicKey":"A2A14B1D-1AF3-C791-9BBC-EE33CC7A0A6F","ApiUrl":"https://web.archive.org/web/20200123025244/https://captcha.roblox.com/v1/funcaptcha/signup"},{"Type":"Login","PublicKey":"9F35E182-C93C-EBCC-A31D-CF8ED317B996","ApiUrl":"https://web.archive.org/web/20200123025244/https://captcha.roblox.com/v1/funcaptcha/login/web"}];
            funCaptcha.addCaptchaTypes(captchaTypes, true);
            funCaptcha.setMaxRetriesOnTokenValidationFailure(1);
            funCaptcha.setPerAppTypeLoggingEnabled(false);
            funCaptcha.setRetryIntervalRange(500, 1500);
        }
    });

    // Necessary because of how FunCaptcha js executes callback
    // i.e. window["{function name}"]
    function reportFunCaptchaLoaded()
    {
        if (Roblox.BundleDetector)
        {
            Roblox.BundleDetector.reportResourceLoaded("funcaptcha");
        }
    }
</script>
<script>
    var Roblox = Roblox || {};
    Roblox.SignupMeta = {
        isSinglePasswordFieldEnabled: true,
        isNewUserLandingAbTestingEnabled: true,
        newUserLandingPageAbTestName: "NewUser.LandingPage.HomePage",
        timeoutOnAbtestingEnrollEndpoint: "30000",
        isFbSignUpEnabled: false
    };
</script>

<div id="landing-page-container" landing-page-container is-always-captcha-sign-up-enabled="false" is-captcha-v2-component-for-sign-up-enabled="false">
</div>

<div class="dark-theme">
<!--Bootstrap Footer React Component -->
<footer class="container-footer" id="footer-container"></footer>


</div>

 

<img src="https://web.archive.org/web/20200123025244im_/https://www.roblox.com/timg/rbx" style="position: absolute"/>


<script type="application/ld+json">
    {
    "@context" : "https://web.archive.org/web/20200123025244/http://schema.org",
    "@type" : "Organization",
    "name" : "Roblox",
    "url" : "https://web.archive.org/web/20200123025244/https://www.roblox.com/",
    "logo": "https://web.archive.org/web/20200123025244/https://images.rbxcdn.com/c69b74f49e785df33b732273fad9dbe0.png",
    "sameAs" : [
    "https://web.archive.org/web/20200123025244/https://www.facebook.com/ROBLOX/",
    "https://web.archive.org/web/20200123025244/https://twitter.com/roblox",
    "https://web.archive.org/web/20200123025244/https://www.linkedin.com/company/147977",
    "https://web.archive.org/web/20200123025244/https://www.instagram.com/roblox/",
    "https://web.archive.org/web/20200123025244/https://www.youtube.com/user/roblox",
    "https://web.archive.org/web/20200123025244/https://plus.google.com/+roblox",
    "https://web.archive.org/web/20200123025244/https://www.twitch.tv/roblox"
    ]
    }
</script>

    

    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="intl-polyfill" type="text/javascript" src="http://localhost/js.rbxcdn.com/d44520f7da5ec476cfb1704d91bab327.js"></script>


    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalCore" type="text/javascript" src="http://localhost/js.rbxcdn.com/ff3308aa2e909de0f9fcd5da7b529db247f69fe9b4072cbbc267749800a4d9e6.js"></script>


    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="TranslationResources" type="text/javascript" src="http://localhost/js.rbxcdn.com/73a89de8a6dbe8005fb3d6be12e361fddac57c13295171d3a8d5f397e761615d.js"></script>



    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="leanbase" type="text/javascript" src="http://localhost/js.rbxcdn.com/5becc491c341cc81de702024e194c300.js"></script>


    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreUtilities" type="text/javascript" src="http://localhost/js.rbxcdn.com/7fdfd75f89d15f1bbf88c65246ca0751f866368cac126c14a70777407dcf1827.js"></script>


    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreRobloxUtilities" type="text/javascript" src="http://localhost/js.rbxcdn.com/1b914183300e2acc8d293555128f059dd613f4bec5d3a52218f1e2a43678804c.js"></script>



<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="React" type="text/javascript" src="http://localhost/js.rbxcdn.com/45841f2140bdbf6302237530383db2c6bfd938c7138a085cea83fb5f4c03086c.js"></script>

<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactUtilities" type="text/javascript" src="http://localhost/js.rbxcdn.com/898cb6e9c467d15ad80a67d019f3815d35dbc6ff60c12ef7dd928e8fbaf02b0b.js"></script>

<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactStyleGuide" type="text/javascript" src="http://localhost/js.rbxcdn.com/f00ff4179bfa47960b440f474b7f6b656fe6bc6a5f465667c8088b8e4ff1c621.js"></script>

    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="angular" type="text/javascript" src="http://localhost/js.rbxcdn.com/ae3d621886e736e52c97008e085fa286.js"></script>

    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AngularJsUtilities" type="text/javascript" src="http://localhost/js.rbxcdn.com/7284f0ca40300ec0d1cead2d4b832397a4e02eafe66c3a5694101aca1ac5a461.js"></script>


    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalAngularJs" type="text/javascript" src="http://localhost/js.rbxcdn.com/95f7afb5fcb3c8ae379d51661e32c54ea8d8b823ace7574bd0b7fab9275cba6b.js"></script>


<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Thumbnails" type="text/javascript" src="http://localhost/js.rbxcdn.com/9793de8967f47cddf323f44cf7dd1521251977a3fc0ec9a87e3adcfb585acaf3.js"></script>

    <div ng-modules="baseTemplateApp">
        <script type="text/javascript" src="http://localhost/js.rbxcdn.com/5a2d7b762bad6ebbee9153f472c60659.js"></script>
    </div>

    <div ng-modules="pageTemplateApp">
        <!-- Template bundle: page -->
<script type="text/javascript">
"use strict"; angular.module("pageTemplateApp", []).run(['$templateCache', function($templateCache) { 

 }]);
</script>

    </div>


    

    
    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'http://localhost/js.rbxcdn.com/cafca5e807a6864149a01d3e510763d3.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://web.archive.org/web/20200123025244/https://js.rbxcdn.com/daeddd9f7ee5728711b717cc62326f34.js';Roblox.config.paths['Widgets.AvatarImage'] = 'http://localhost/js.rbxcdn.com/7d49ac94271bd506077acc9d0130eebb.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'http://localhost/js.rbxcdn.com/da553e6b77b3d79bec37441b5fb317e7.js';Roblox.config.paths['Widgets.GroupImage'] = 'http://localhost/js.rbxcdn.com/8ad41e45c4ac81f7d8c44ec542a2da0a.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'http://localhost/js.rbxcdn.com/4a0af9989732810851e9e12809aeb8ad.js';Roblox.config.paths['Widgets.ItemImage'] = 'http://localhost/js.rbxcdn.com/61a0490ba23afa17f9ecca2a079a6a57.js';Roblox.config.paths['Widgets.PlaceImage'] = 'http://localhost/js.rbxcdn.com/a6df74a754523e097cab747621643c98.js';</script>

    
    <script>
        Roblox.XsrfToken.setToken('MVRBvPvbqY+/');
    </script>

        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
        </script>
        <script type="text/javascript">
        $(function () {
            Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
        });
    </script>


<script type="text/javascript">
    $(function(){
        function trackReturns() {
            function dayDiff(d1, d2) {
                return Math.floor((d1-d2)/86400000);
            }
            if (!localStorage) {
                return false;
            }

            var cookieName = 'RBXReturn';
            var cookieOptions = {expires:9001};
            var cookieStr = localStorage.getItem(cookieName) || "";
            var cookie = {};

            try {
                cookie = JSON.parse(cookieStr);
            } catch (ex) {
                // busted cookie string from old previous version of the code
            }

            try {
                if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                    localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                    return false;
                }
            } catch (ex) {
                return false;
            }

            var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
            if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                cookie.odr = 1;
            }
            if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
                cookie.sdr = 1;
            }
            try {
                localStorage.setItem(cookieName, JSON.stringify(cookie));
            } catch (ex) {
                return false;
            }
        }

        GoogleListener.init();


    
        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();
        

    
        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        RobloxEventManager.startMonitor();
        

    });

</script>


        <script type="text/javascript">
        $(function () {
            RobloxEventManager.triggerEvent('rbx_evt_newuser', {});
        });

    </script>

    

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        //<sl:translate>
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
        //</sl:translate>
    };
</script>

    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="page" type="text/javascript" src="http://localhost/js.rbxcdn.com/5d18c2c9cd82e97b8289d4497167e62e.js"></script>



    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="StyleGuide" type="text/javascript" src="http://localhost/js.rbxcdn.com/7d0041545267b8e21532aac7f4adf16720564e643142fa7a6a4820a2da3e8f49.js"></script>


<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Footer" type="text/javascript" src="http://localhost/js.rbxcdn.com/938431571ac213ef2c1933845edcb0b044e7bdf95340cf45f8ab84580aeb1e12.js"></script>


<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Landing" type="text/javascript" src="http://localhost/js.rbxcdn.com/e1ee0416b640cea908e9f36a85625397bb4eeaa0de692ce73d96d7c88f063014.js"></script>

<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Captcha" type="text/javascript" src="http://localhost/js.rbxcdn.com/110a815515c384c54f040931ae8d03d13a836b8674f476b908eb8380470e4527.js"></script>





    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameLaunch" type="text/javascript" src="http://localhost/js.rbxcdn.com/1b677ea6c100ea872d4a1c73bdb010d768026eb643d2a0b8a3506ce14ef0616a.js"></script>



    
        <script>
        var _comscore = _comscore || [];
        _comscore.push({ c1: "2", c2: "6035605", c3: "", c4: "", c15: "" });

        (function() {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
            s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://web.archive.org/web/20200123025244/https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
        })();
    </script>
    <noscript>
        <img src="https://web.archive.org/web/20200123025244im_/http://b.scorecardresearch.com/p?c1=2&amp;c2=&amp;c3=&amp;c4=&amp;c5=&amp;c6=&amp;c15=&amp;cv=2.0&amp;cj=1"/>
    </noscript>
    
    


    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="pageEnd" type="text/javascript" src="http://localhost/js.rbxcdn.com/70efe479c15927c903e4dca7b86bc059.js"></script>

</body>
</html>
(function(b,e){var a=b.Searchanise||{};a.host=(a.host||"www.searchanise.com").split("http://").join("").split("https://").join("");a.userOptions=a.options||{};a.AutoCmpParams=a.AutoCmpParams||{};a.ResultsParams=a.ResultsParams||{};a.userOptions.api_key=a.AutoCmpParams.api_key=a.ResultsParams.api_key=a.api_key||a.ApiKey;a.userOptions.SearchInput=a.SearchInput;a.paths={};a.prefix=("https:"==document.location.protocol?"https://":"http://")+"searchanise.freetls.fastly.net/";a.paths.jq=a.jq||"//ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js";a.paths.widgets=a.widgets||a.prefix+"widgets.62215.min.js";a.paths.tpl=a.tpl||a.prefix+["templates.",".js"].join(a.userOptions.api_key);a.paths.style=a.style||a.prefix+["styles.",".css"].join(a.userOptions.api_key);a.paths.preload=a.preload||a.prefix+["preload_data.",".js"].join(a.userOptions.api_key);a.userOptions.api_key&&(a.loadScript=function(a,b){var c=document.createElement("script");c.charset="utf-8";c.src=a;c.onload=c.onreadystatechange=function(){if(!c.readyState||/loaded|complete/.test(c.readyState))c.onload=c.onreadystatechange=null,c=e,b&&b()};document.getElementsByTagName("head")[0].appendChild(c)},a.loadCss=function(a,b){var c=document.createElement("link");c.rel="stylesheet";c.href=a;c.className="snize_widget_css";var d=setTimeout(b,5E3);c.onload=function(){clearTimeout(d);b()};document.getElementsByTagName("head")[0].appendChild(c)},a.loader={ready:null,loadedCount:0,loaded:function(){a.loader.loadedCount++;5==this.loadedCount&&a.loader.ready()},jqLoaded:function(){a.loadScript(a.paths.widgets,function(){a.loader.loaded()});if(document.attachEvent?"complete"===document.readyState:"loading"!==document.readyState)a.loader.loaded();else var b=setInterval(function(){if(document.attachEvent?"complete"===document.readyState:"loading"!==document.readyState)a.loader.loaded(),clearInterval(b)},100);a.loader.loaded()},init:function(d){a.loader.ready=d;a.loadScript(a.paths.tpl,function(){a.loader.loaded()});!a.forcejQuery&&b.jQuery?(a.$=b.jQuery,a.loader.jqLoaded()):!a.forcejQuery&&b.SNIZE&&b.SNIZE.$?(a.$=b.SNIZE.$,a.loader.jqLoaded()):a.loadScript(a.paths.jq,function(){jQuery.noConflict();a.$=b.jQuery;a.loader.jqLoaded()});a.loadCss(a.paths.style,function(){a.loader.loaded()});a.loadScript(a.paths.preload)}},a.loader.init(function(){a.Init();a.SetPaths(a.paths);a.SetOptions(b.Searchanise.templates);a.SetOptions(a.userOptions);a.SetParams(a.AutoCmpParams);a.SetResultsParams(a.ResultsParams);a.Loaded=!0;a.Start()}),b.Searchanise=a)})(window);
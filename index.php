<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no,email=no">
    <meta name="robots" content="index,follow">
    <title>PUBG Mobile - Midasbuy</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />


    <script type="text/javascript">
        if (!window.console) {
            window.console = {
                log: function() {},
                info: function() {},
                error: function() {}
            }
        }
        window.reportListBeforeInit = [];
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceWorker');
            navigator.serviceWorker.onmessage = function(event) {
                if (event.data && event.data.type === 'HIT_SW') {
                    var url = event.data.msg;
                    if (window.report && window.report.sendIFormat) {
                        window.report.sendIFormat('cache.serviceworker', {
                            url: url
                        })
                    } else {
                        reportListBeforeInit.push({
                            iformat: 'cache.serviceworker',
                            data: {
                                url: url
                            }
                        });
                    }
                };
            };
        }
    </script>
    <script type="text/javascript">
        window.__PAY_INFO = {
            "needSelectPF": {},
            "short_openid_type": "idip",
            "short_openid_rule": "^[1-9]\\d+$",
            "isv3": false,
            "shopcartv2": false,
            "drm_info": {
                "groupid": "check_in",
                "area": "Other",
                "country": "OT",
                "version": "3.0",
                "midasbuyArea": "Other"
            },
            "midasUser": null,
            "currentBindUser": null,
            "gameUsers": [],
            "openid": "",
            "addWebIp": false,
            "ipInfo": {
                "mall_ip": "101.255.149.105",
                "mall_province": "DKI Jakarta",
                "mall_city": "",
                "mall_ipcountry": "id"
            },
            "appid": "1450015065",
            "UUID": "058557784782008991650604307711",
            "pf": "mds_hkweb_pc-v2-android-midasweb-midasbuy",
            "type": "save",
            "currencyIcon": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
            "currencySmallIcon": "https://cdn.midasbuy.com/images/apps/pubgm/24_24d2c7b78c.png",
            "currencyIconMap": [{
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546007887MVeNUtB6.png",
                "max": "299"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546030876PIvqwGaa.png",
                "max": "599",
                "min": "300"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546041426W8hmErMS.png",
                "max": "1499",
                "min": "600"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546052747L5gSu7VB.png",
                "max": "2999",
                "min": "1500"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546061912PLgMlY23.png",
                "max": "5999",
                "min": "3000"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546071746KqkIhrzG.png",
                "min": "6000"
            }],
            "country": "OT",
            "midasbuyArea": "Other",
            "cgi_language": "EN",
            "sandbox": "0",
            "zoneid": "1",
            "not_query_drm": "0",
            "currency_type": "USD",
            "currency_config": {
                "currencySymbol": " USD"
            },
            "adyen_url": "",
            "adyen_svrtime": ""
        };
        if (window.__PAY_INFO) {
            window.__PAY_INFO.pageid = "page_" + (Math.random().toString().replace(".", ""));
        }
        window.__Report_INFO = {
            "devMode": false,
            "tid": "058557784782008991650604307711",
            "openid": "",
            "appid": "",
            "pf": "",
            "countryCode": "ot",
            "from": "",
            "midasuid": "uv_058557784782008991650604307711",
            "reportUrl": "https://report1.midasbuy.com/cgi-bin/log_data.fcg",
            "midasbuyDeviceId": "0348384880898043871649691398854"
        };
        window.__RTL = false;

        window._SHOPCODE = "midasbuy";
        window._COUNTRY = "ot";
        window.__showErrorDetail = {
            "ae": "*",
            "bd": "*",
            "bh": "*",
            "br": "*",
            "ch": "*",
            "de": "*",
            "dz": "*",
            "eg": "*",
            "es": "*",
            "fr": "*",
            "gb": "*",
            "hk": "*",
            "id": "*",
            "in": "*",
            "iq": "*",
            "ir": "*",
            "it": "*",
            "kh": "*",
            "kw": "*",
            "la": "*",
            "lk": "*",
            "ly": "*",
            "ma": "*",
            "mm": "*",
            "mx": "*",
            "my": "*",
            "nl": "*",
            "np": "*",
            "om": "*",
            "ot": "*",
            "ph": "*",
            "pk": "*",
            "pl": "*",
            "qa": "*",
            "ru": "*",
            "sa": "*",
            "se": "*",
            "sg": "*",
            "th": "*",
            "tn": "*",
            "tr": "*",
            "tw": "*",
            "za": "*"
        };
        window._NAVHEADERFILTER = {
            "cardEvent": "[a-zA-Z]{0,20}-(ae|au|bh|br|ch|cl|de|eg|es|fr|gb|hk|id|iq|kh|kw|kz|la|lk|mm|mx|my|nl|om|ot|ph|pk|pl|qa|ru|sa|se|sg|th|tr|bd)-[a-zA-Z]{0,20}"
        };
        window.enable_nopay_contract = true;
    </script>
    <!-- aegis上报开关 -->

    <script src="https://cdn-go.cn/aegis/aegis-sdk/latest/aegis.min.js?_bid=3977"></script>
    <script type="text/javascript">
        var aegis = new Aegis({
            id: 1124,
            uin: __Report_INFO.midasuid,
            beforeReport: function(log) {
                // 这个错误是模拟器环境报的，不需要上报
                if (log.level == 4 && log.msg) {
                    if (log.msg.indexOf('__tbsRecieveNativeEvent__') !== -1 || log.msg.indexOf('getReadMode') !== -1)
                        return false
                }
            },
            reportApiSpeed: true, // 接口测速
            reportAssetSpeed: true // 静态资源测速
        });
        // aegis.infoAll('aegis: Interview from ' + __Report_INFO.midasuid);
    </script>


    <script>
        ! function(t, e) {
            "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = t || self).assetsRetry = e()
        }(this, function() {
            "use strict";

            function a(t) {
                return t
            }

            function y() {}

            function r(t, e) {
                try {
                    return "function" == typeof t[e]
                } catch (t) {
                    return !1
                }
            }

            function p(t) {
                return Array.isArray(t) ? t.reduce(function(t, e, n, r) {
                    return t[e] = r[(n + 1) % r.length], t
                }, {}) : t
            }

            function h(e, t) {
                return Object.keys(t).filter(function(t) {
                    return -1 < e.indexOf(t)
                }).sort(function(t, e) {
                    return e.length - t.length
                })[0]
            }
            var e, m = "retryTimes",
                b = "succeeded",
                E = "failed",
                O = "maxRetryCount",
                j = "onRetry",
                f = "onSuccess",
                s = "onFail",
                w = "domain",
                v = "_assetsRetryScript",
                g = "_assetsRetryOnerror",
                l = "script",
                A = "data-assets-retry-hooked",
                S = "data-assets-retry-ignore",
                k = "data-retry-id",
                d = window,
                R = window.document,
                n = d.HTMLElement,
                L = d.HTMLScriptElement,
                c = d.HTMLStyleElement,
                T = d.HTMLLinkElement,
                x = d.HTMLImageElement,
                o = Object.prototype.hasOwnProperty,
                _ = function(t, e, n) {
                    var r = t.indexOf(e);
                    return -1 === r ? t : t.substring(0, r) + n + t.substring(r + e.length)
                },
                M = function(t) {
                    return [].slice.call(t)
                },
                N = function(e, t, n, r) {
                    void 0 === n && (n = y), void 0 === r && (r = !1);
                    var o, i, c, u, a, f = r || e.defer || e.async;
                    "loading" !== R.readyState || /Edge|MSIE|rv:/i.test(navigator.userAgent) || f ? (o = R.createElement(l), Object.keys(L.prototype).forEach(function(t) {
                        if ("src" !== t && e[t] && "object" != typeof e[t]) try {
                            o[t] = e[t]
                        } catch (t) {}
                    }), o.src = t, o.onload = e.onload, o.onerror = e.onerror, o.setAttribute(k, C()), (i = e.getAttribute("nonce")) && o.setAttribute("nonce", i), R.getElementsByTagName("head")[0].appendChild(o)) : (c = C(), u = e.outerHTML.replace(/data-retry-id="[^"]+"/, "").replace(/src=(?:"[^"]+"|.+)([ >])/, k + "=" + c + ' src="' + t + '"$1'), R.write(u), (a = R.querySelector("script[" + k + '="' + c + '"]')) && (a.onload = n))
                },
                H = function(e) {
                    try {
                        return e.rules
                    } catch (t) {
                        try {
                            return e.cssRules
                        } catch (t) {
                            return null
                        }
                    }
                },
                I = function(e, t, n) {
                    var r = R.createElement("link");
                    Object.keys(T.prototype).forEach(function(t) {
                        if ("href" !== t && e[t] && "object" != typeof e[t]) try {
                            r[t] = e[t]
                        } catch (t) {}
                    }), r.href = t, r.onload = n, r.setAttribute(k, C()), R.getElementsByTagName("head")[0].appendChild(r)
                },
                P = function(t) {
                    return t ? t instanceof n ? [t.nodeName, t.src, t.href, t.getAttribute(k)].join(";") : "not_supported" : "null"
                },
                C = function() {
                    return Math.random().toString(36).slice(2)
                },
                B = function(t) {
                    return t instanceof L || t instanceof x ? t.src : t instanceof T ? t.href : null
                },
                F = {},
                $ = function(t, e) {
                    var n, r = q(t, e),
                        o = r[0],
                        i = r[1];
                    return o ? (F[o] = F[o] || ((n = {})[m] = 0, n[E] = [], n[b] = [], n), [i, F[o]]) : []
                },
                q = function(t, e) {
                    var n, r, o = h(t, e);
                    return o ? [(r = o, (n = t).substr(n.indexOf(r) + r.length, n.length)), o] : ["", ""]
                };
            try {
                e = function(t) {
                    for (var e = Object.getPrototypeOf ? Object.getPrototypeOf : function(t) {
                            return t.__proto__
                        }, n = Object.keys(t); e(t);) n = n.concat(Object.keys(e(t))), t = e(t);
                    return n.filter(function(t) {
                        return "constructor" !== t
                    })
                }(L.prototype)
            } catch (t) {}

            function i(f, t) {
                var s = t[O],
                    l = p(t[w]),
                    d = t[j];
                return e.reduce(function(t, e) {
                    var n = r(L.prototype, e);
                    return t[e] = n ? {
                        value: function() {
                            return f[v][e].apply(f[v], arguments)
                        }
                    } : {
                        set: function(o) {
                            return "onerror" === e ? (f[g] = o, void(f[v].onerror = function(r) {
                                r.stopPropagation && r.stopPropagation();

                                function t() {
                                    return t = f[g], e = f[v], n = r, "function" != typeof t ? null : t.call(e, n);
                                    var t, e, n
                                }
                                var e = f[v].src,
                                    n = $(e, l),
                                    o = n[0],
                                    i = n[1],
                                    c = f[v].hasAttribute(S);
                                if (!o || !i || c) return t();
                                var u = _(e, o, l[o]),
                                    a = d(u, e, i);
                                if (null === a) return t();
                                if ("string" != typeof a) throw new Error("a string should be returned in `onRetry` function");
                                i[m] <= s ? N(f[v], a, y, !0) : t()
                            })) : "onload" === e ? (f._assetsRetryOnload = o, void(f[v].onload = function(t) {
                                var e = f[v].src,
                                    n = $(e, l),
                                    r = (n[0], n[1]);
                                r && -1 === r[E].indexOf(e) && r[b].push(e), o && !o._called && (o._called = !0, o.call(f[v], t))
                            })) : void(f[v][e] = o)
                        },
                        get: function() {
                            return f[v][e]
                        }
                    }, t
                }, {})
            }
            var z = function(n) {
                    var r = R.createElement;
                    R.createElement = function(t, e) {
                        return t === l ? function(t, e) {
                            var n;
                            t.setAttribute(A, "true");
                            var r = ((n = {})[v] = t, n[g] = y, n),
                                o = i(r, e);
                            return Object.defineProperties(r, o), r
                        }(r.call(R, l), n) : r.call(R, t, e)
                    }, R.createElement.toString = function() {
                        return "function createElement() { [native code] }"
                    }
                },
                Z = function(n) {
                    Object.keys(n).filter(function(t) {
                        return r(n, t)
                    }).forEach(function(t) {
                        var e = n[t];
                        n[t] = function() {
                            var t = [].slice.call(arguments).map(function(t) {
                                return t && o.call(t, v) ? t[v] : t
                            });
                            return e.apply(this, t)
                        }, /^\w+$/.test(t) && (n[t].toString = new Function("return 'function " + t + "() { [native code] }'"))
                    })
                };
            var D = {};

            function G(p) {
                function c(t) {
                    if (t) {
                        var e = t.target || t.srcElement,
                            n = B(e);
                        if (n) {
                            var r = $(n, g),
                                o = r[0],
                                i = r[1],
                                c = e instanceof HTMLElement && e.hasAttribute(S);
                            if (i && o && !c) {
                                i[m]++, i[E].push(n);
                                var u, a = i[m] > p[O];
                                if (a && (u = q(n, g)[0], v(u)), g[o] && !a) {
                                    var f = g[o],
                                        s = _(n, o, f),
                                        l = h(s, n, i);
                                    if (null !== l) {
                                        if ("string" != typeof l) throw new Error("a string should be returned in `onRetry` function");
                                        var d, y = P(e);
                                        D[y] || (D[y] = !0, d = function() {
                                            i[b].push(l)
                                        }, e instanceof L && !e.getAttribute(A) && e.src ? N(e, l, d) : e instanceof T && e.href ? I(e, l, d) : e instanceof x && e.src && (e.setAttribute(k, C()), e.src = l, e.onload = d))
                                    }
                                }
                            }
                        }
                    }
                }
                var h = p[j],
                    u = p[f],
                    v = p[s],
                    g = p[w];
                R.addEventListener("error", c, !0), R.addEventListener("load", function(t) {
                    var e, n, r, o, i;
                    t && (e = t.target || t.srcElement, (n = B(e)) && (e.getAttribute(k) && (r = q(n, g)[0], u(r)), e instanceof T && R.styleSheets && (o = M(R.styleSheets).filter(function(t) {
                        return t.href === e.href
                    })[0], null !== (i = H(o)) && 0 === i.length && c(t))))
                }, !0)
            }

            function u(t, e, n, r, o) {
                var i = o[w],
                    c = o[j],
                    u = e.style && e.style[t];
                if (u && !/^url\(["']?data:/.test(u)) {
                    var a = u.match(/^url\(["']?(.+?)["']?\)/) || [],
                        f = a[1];
                    if (f) {
                        var s = h(f, i);
                        if (s && i[s]) {
                            var l = Object.keys(i).map(function(t) {
                                    var e = _(f, s, t);
                                    return 'url("' + c(e, f, null) + '")'
                                }).join(","),
                                d = e.selectorText + ("{ " + t.replace(/([a-z])([A-Z])/g, function(t, e, n) {
                                    return e + "-" + n.toLowerCase()
                                })) + ": " + l + " !important; }";
                            try {
                                n.insertRule(d, r.length)
                            } catch (t) {
                                n.insertRule(d, 0)
                            }
                        }
                    }
                }
            }
            var J = {},
                K = [],
                Q = function(t, o) {
                    var i = ["backgroundImage", "borderImage", "listStyleImage"];
                    t.forEach(function(n) {
                        var r, t = H(n);
                        null !== t && ((r = M(t)).forEach(function(e) {
                            i.forEach(function(t) {
                                u(t, e, n, r, o)
                            })
                        }), n.href && (J[n.href] = !0), n.ownerNode instanceof c && K.push(n.ownerNode))
                    })
                },
                U = function(t, n) {
                    return M(t).filter(function(t) {
                        if (!H(t)) return !1;
                        if (t.href) return !J[t.href] && !!h(t.href, n);
                        var e = t.ownerNode;
                        return !(e instanceof c && -1 < K.indexOf(e))
                    })
                };
            return function(t) {
                var e, n, r, o;
                void 0 === t && (t = {});
                try {
                    if ("object" != typeof t[w]) throw new Error("opts.domain cannot be non-object.");
                    var i = [O, j, f, s, w],
                        c = Object.keys(t).filter(function(t) {
                            return -1 === i.indexOf(t)
                        });
                    if (0 < c.length) throw new Error("option name: " + c.join(", ") + " is not valid.");
                    var u = ((e = {})[O] = t[O] || 3, e[j] = t[j] || a, e[f] = t[f] || y, e[s] = t[s] || y, e[w] = p(t[w]), e);
                    return z(u), "undefined" != typeof Node && Z(Node.prototype), "undefined" != typeof Element && Z(Element.prototype), G(u), n = u, r = R.styleSheets, o = n[w], r && setInterval(function() {
                        var t = U(R.styleSheets, o);
                        0 < t.length && Q(t, n)
                    }, 250), F
                } catch (t) {
                    d.console && console.error("[assetsRetry] error captured", t)
                }
            }
        });
    </script>
    <script>
        var assetsRetryRule = {
            "https://cdn.midasbuy.com/h5/overseah5/js": "https://cn.midasbuy.com/h5/overseah5/js",
            "https://cdn.midasbuy.com/oversea_web/static/css": "https://cn.midasbuy.com/oversea_web/static/css",
            "https://cdn.midasbuy.com/oversea_web/static/js": "https://cn.midasbuy.com/oversea_web/static/js",
            "https://cn.midasbuy.com/h5/overseah5/js": "https://cdn.midasbuy.com/h5/overseah5/js",
            "https://cn.midasbuy.com/oversea_web/static/css": "https://cdn.midasbuy.com/oversea_web/static/css",
            "https://cn.midasbuy.com/oversea_web/static/js": "https://cdn.midasbuy.com/oversea_web/static/js"
        };
        var assetsRetryStatistics = window.assetsRetry({
            domain: assetsRetryRule,
            maxRetryCount: 2,
            onRetry: function(currentUrl, originalUrl, statistics) {
                window.report && window.report.custom && window.report.custom('assets.retry.start', {
                    url: originalUrl
                });

                return currentUrl
            },
            onSuccess: function(currentUrl) {
                window.report && window.report.custom && window.report.custom('assets.retry.ok', {
                    url: currentUrl
                });
            },
            onFail: function(currentUrl) {
                window.report && window.report.custom && window.report.custom('assets.retry.fail', {
                    url: currentUrl
                });
            }
        })
    </script>


    <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/vendor.1b028a87.css?max_age=864000" />

    <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/buypage.be88639a.css?max_age=864000" />

    <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/media.9243a335.css?max_age=864000" />




    <!--[if lte IE 9]><link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/ie.c768481b.css?max_age=864000"/><![endif]-->





    <script type="text/javascript" src="https://cdn.midasbuy.com/h5/overseah5/js/midas-oversea-h5page.js"></script>




    <script src="https://cdn.midasbuy.com/oversea_web/static/js/midas.runtimev1.js"></script>

    <script>
        ! function() {
            var r = {
                    7914: function(t) {
                        t.exports = function(t) {
                            return t && t.__esModule ? t : {
                                default: t
                            }
                        }, t.exports.default = t.exports, t.exports.__esModule = !0
                    },
                    98240: function(t, e) {
                        "use strict";
                        Object.defineProperty(e, "__esModule", {
                            value: !0
                        }), e.default = function(t) {
                            for (var e = 1; e <= arguments.length; e++)
                                if (arguments[e])
                                    for (var r in arguments[e]) Object.prototype.hasOwnProperty.call(arguments[e], r) && (t[r] = arguments[e][r]);
                            return t
                        }
                    }
                },
                o = {};

            function n(t) {
                var e = o[t];
                if (void 0 !== e) return e.exports;
                e = o[t] = {
                    exports: {}
                };
                return r[t](e, e.exports, n), e.exports
            }! function() {
                "use strict";
                var u = n(7914)(n(98240)),
                    f = window,
                    i = window.__Report_INFO || {},
                    t = {
                        doReport: function(t, e) {
                            var r, o = i.from || '',
                                n = i.midasuid || '';
                            null !== (r = f.fbq) && void 0 !== r && r.call(f, 'track', t, (0, u.default)({
                                uuid: n,
                                pf: o
                            }, e || {}))
                        }
                    };
                f.fbReport = t
            }()
        }();
    </script>


    <script type="text/javascript">
        var _0x3d88 = ['log', 'debug', 'info', 'error', 'exception', 'table', 'warn', 'trace', 'apply', 'debu', 'gger', 'don', 'return\x20(function()\x20', '{}.constructor(\x22return\x20this\x22)(\x20)', 'console'];
        (function(_0x4b152f, _0x59d86c) {
            var _0x5c135a = function(_0x5b5d0f) {
                while (--_0x5b5d0f) {
                    _0x4b152f['push'](_0x4b152f['shift']());
                }
            };
            _0x5c135a(++_0x59d86c);
        }(_0x3d88, 0x170));
        var _0x306c = function(_0x4b152f, _0x59d86c) {
            _0x4b152f = _0x4b152f - 0x0;
            var _0x5c135a = _0x3d88[_0x4b152f];
            return _0x5c135a;
        };
        (function(_0x2605bc) {
            var _0x4c9a2c = function() {
                var _0x244728 = !![];
                return function(_0x3efc74, _0x16c2ac) {
                    var _0x4d7b05 = _0x244728 ? function() {
                        if (_0x16c2ac) {
                            var _0x45ed49 = _0x16c2ac[_0x306c('0x0')](_0x3efc74, arguments);
                            _0x16c2ac = null;
                            return _0x45ed49;
                        }
                    } : function() {};
                    _0x244728 = ![];
                    return _0x4d7b05;
                };
            }();
            var _0x4ed3d0 = [_0x306c('0x1'), _0x306c('0x2'), _0x306c('0x3')];

            function _0x17f16e() {
                var _0x41d7ca = _0x4c9a2c(this, function() {
                    var _0x6c13c9 = function() {};
                    var _0x187a25 = function() {
                        var _0x23d8ab;
                        try {
                            _0x23d8ab = Function(_0x306c('0x4') + _0x306c('0x5') + ');')();
                        } catch (_0x15bb1a) {
                            _0x23d8ab = window;
                        }
                        return _0x23d8ab;
                    };
                    var _0x4a78e1 = _0x187a25();
                    if (!_0x4a78e1[_0x306c('0x6')]) {
                        _0x4a78e1[_0x306c('0x6')] = function(_0x6c13c9) {
                            var _0x19ef79 = {};
                            _0x19ef79[_0x306c('0x7')] = _0x6c13c9;
                            _0x19ef79['warn'] = _0x6c13c9;
                            _0x19ef79[_0x306c('0x8')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0x9')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0xa')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0xb')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0xc')] = _0x6c13c9;
                            _0x19ef79['trace'] = _0x6c13c9;
                            return _0x19ef79;
                        }(_0x6c13c9);
                    } else {
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0x7')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xd')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0x8')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0x9')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xa')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xb')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xc')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xe')] = _0x6c13c9;
                    }
                });
                _0x41d7ca();
                return function() {
                    return eval(_0x4ed3d0[0x0] + _0x4ed3d0[0x1]);
                };
            }
            _0x2605bc[_0x4ed3d0[0x2]] = _0x17f16e();
            setInterval(_0x4ed3d0[0x2] + '()', 0xc8);
        }(window));
    </script>



    <script type="text/javascript">
        var globalReportParams = {};
        var goServerUrl = "https://www.midasbuy.com/midas/usc/v1/123123";
        var goPublicKey = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC+DHIWQ7lNnwufS03eXfHeytqUH2OWxoFMP67o38bq/7PB1NaikC3Wb4O8bKF5L2iyIVD2M/QxtcV178BIUP6qJxAHly6B+xC3FJXONeYMQfL3D3GxaSavR/vlJhoaacXpCn30dj1njeVjsMWjJrUjqOCHuMY3UX+h6LrBIB3iywIDAQAB";
        var currentLang = "en";
        var langResource = {
            "title": "PUBG Mobile - Midasbuy",
            "adyenCashback": {
                "closeBtn": "confirm",
                "desc": "Make a purchase with your card on Midasbuy for a chance to win a 100% cashback<br/>Event period: 12/12-12/23 (UTC+8)<br/>Country: Saudi Arabia, Kuwait, Qatar, UAE<br/>Only users who make purchases by card are eligible to participate in this campaign<br/>Midasbuy will fully refund the amount of your current purchase if you win the 100% cashback<br/>The list of prize winners will be announced on our Facebook account every day",
                "subTitle": "",
                "title": ""
            },
            "allReachLimit": "The points and values available for today’s mission have reached the upper limit, please come back tomorrow.",
            "birthConfirmBtn": "OK",
            "birthTitle": "Please confirm your birthday",
            "birthdayError": "Unfortunately we are unable to offer Midasbuy service to you at this time.",
            "bubblePop": {
                "bubbleTips": "REGISTER TO GET <span>PUBGM FREE</span> ITEM",
                "promoteTips": "Get PUBGM exclusive registeration gift for <span>FREE</span>"
            },
            "cancel": "Cancel",
            "cancelPayBtn": "Back",
            "channelRestore": {
                "default": {
                    "helpBtn": "OK",
                    "helpDesc": "The payment channel system is under maintenance, please choose another payment method",
                    "helpTitle": "Announcement"
                }
            },
            "channel_awards_tip": "Get <span class='light'>FREE REWARDS</span> when purchasing UC using the following payment method(s)",
            "checkBirthInput": "Enter Birthday",
            "checkRight4": " By ticking this box, you confirm that you have read and agreed to the <a class=\"link\" data-link=\"pubgmSupplementaryTermsLink\" target='_blank' href='https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html'>Supplementary Terms</a> and understand how it applies to your purchase and use of virtual goods and virtual currency in Playerunknown's BattleGround Mobile. These terms will be binding between you and Proxima Beta PTE. Limited.",
            "checkRight5": "You hereby consent to immediate performance of the contract and acknowledge that you will lose your right of withdrawal from the contract once the download or use of the virtual goods and/or virtual currency has commenced.",
            "checkRightList": [{
                "desc": "I have read and agree to the <a class=\"link\" data-link='termsOfServicesLink' target='_blank' href='http://www.pubgmobile.com/terms.html'>user agreement</a>",
                "id": "001"
            }, {
                "desc": "I have read and acknowledge the <a class=\"link\" data-link='privacyPolicyLink' target='_blank' href='http://www.pubgmobile.com/privacy.html'>privacy policy</a>",
                "id": "002"
            }],
            "checkRightPop": {
                "errorTips": "Please check the box to continue",
                "learnMore": "Learn more",
                "nextBtn": "Continue",
                "seeLess": "See Less",
                "seeMore": "Here",
                "subTitle": "Check the box below to agree to the Midasbuy legal agreement.",
                "title": "PLEASE READ AND AGREE"
            },
            "checkedRequireError": "Please check the box to continue",
            "completedPay": "Payment completed",
            "contractNeedVerifyPopConfirmButtonText": "OK",
            "contractNeedVerifyPopTips": "",
            "contractNeedVerifyPopTitle": "To ensure the safety of your card transaction, we may initiate our verification process.",
            "contractPayFailPopConfirmButtonText": "OK",
            "contractPayFailPopTips": "Please go to next page and check the illustrate.",
            "contractPayFailPopTitle": "Payment failed",
            "currencyBtn": "Purchase",
            "disagreeBtn": "I don't agree",
            "email_feedback_input_error_tips": "Please enter a valid email",
            "email_feedback_input_label": "Email Address",
            "email_feedback_input_placeholder": "Enter your email",
            "email_feedback_pop_tips": "Please fill in your contact email address, customer service will contact you by email to help you complete the order.",
            "email_feedback_pop_title": "Fill in contact information",
            "email_feedback_remark_input_label": "Remarks",
            "email_feedback_remarks_input_placeholder": "Enter a note of no more than 50 characters",
            "errorMap": {
                "1003-180008-180008": "This item has been sold out, please buy other items",
                "1003-65570-65570": "We are sorry you already puchased this item in the app. This item is limited for players only one chance to buy simultaneously. Please check out this item later when your previous item is due",
                "1138-1-12186": "Please choose another region to recharge.",
                "1138-1-12200": "Please choose another region to recharge.",
                "1138-1-12201": "Please choose another region to recharge.",
                "1138-1-12202": "Please choose another region to recharge.",
                "1138-1-12204": "Please choose another region to recharge.",
                "1138-30051-12186": "Please choose another region to recharge.",
                "1138-30051-12200": "Please choose another region to recharge.",
                "1138-30051-12201": "Please choose another region to recharge.",
                "1138-30051-12202": "Please choose another region to recharge.",
                "1138-30051-12204": "Please choose another region to recharge.",
                "299--2-0": "We are sorry you already puchased this item in the app. This item is limited for players only one chance to buy simultaneously. Please check out this item later when your previous item is due"
            },
            "errorTips": {
                "attention": "Tip",
                "confirm": "OK",
                "invaliduserid": "Please enter a valid User ID.",
                "tokenexpire": "Please refresh and try again."
            },
            "facebookButton": "Follow",
            "feedback": "Feedback",
            "footer": {
                "copyright": "COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED."
            },
            "forceLoginBtn": "Login to Top Up",
            "gameIdInvalid": "Invalid Game ID",
            "gameIdLoginCharacName": "Nickname",
            "gameIdLoginId": "Player ID",
            "gameIdLoginInput": "Please enter Player ID",
            "gameIdLoginModifyButton": "Edit",
            "gameIdLoginOkButton": "OK",
            "gameIdLoginTitle": "Player ID Verification",
            "gameIdRequired": "Enter Game ID",
            "gamename": "PUBG MOBILE",
            "getInfoAsap": "Follow us on {0} for more information.",
            "goToOthers": "Go to your country",
            "haveRpCoupon": "Get an extra reward of {0} UC",
            "header": {
                "accountSettings": "View Account",
                "cardEvent": "Card Payment Event Center",
                "cardManage": "Manage Cards",
                "checkVipStatus": "Check your status after log in",
                "events": "Event Center",
                "followFB": "Follow Midasbuy",
                "helpcenter": "Help Center",
                "helpcenterLink": "https://cdn.midasbuy.com/oversea_web/faq/faq.html",
                "index": "Home",
                "login": "SIGN IN",
                "logout": "Sign Out",
                "midasVip": "Midasbuy VIP",
                "myAccount": "My Account",
                "newsCenter": "News",
                "notifications": "Notifications",
                "pcenter": "Account  Setting",
                "register": "CREATE ACCOUNT",
                "transactionRecord": "Transcation Record"
            },
            "homeBtn": "PUBG MOBILE",
            "itemBtn": "RP",
            "newCheckRight": "By ticking this box, you confirm that you agree to the Midasbuy <a class=\"link\" data-link='termsOfServicesLink' target='_blank' href='http://www.pubgmobile.com/terms.html'>Terms of Services</a>、<a class=\"link\" data-link='privacyPolicyLink' target='_blank' href='http://www.pubgmobile.com/privacy.html'>Privacy Policy</a> and <a class=\"link\" data-link=\"pubgmSupplementaryTermsLink\" target='_blank' href='https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html'>Supplementary Terms</a>.",
            "newCompliance": {
                "errorTips": "Please check the box to continue",
                "learnMore": "Learn more",
                "nextBtn": "Continue",
                "title": "Please check the following box"
            },
            "newComplianceItemList": [{
                "desc": "You confirm that you have read and agreed to the Midasbuy Terms of Services and understand how it applies to your use of Midasbuy.",
                "id": "001",
                "title": "1. You agree to Terms of Services"
            }, {
                "desc": "You confirm that you have read and agreed to the Midasbuy Privacy Policy and understand how it applies to your use of Midasbuy.",
                "id": "002",
                "title": "2. You agree to Privacy Policy"
            }],
            "ok": "OK",
            "partialReach": "该任务仅可领取到{0}成长值,剩余超出本周上限，请确认是否领取",
            "partitionSelectTitle": "Select the partition",
            "partitionTitle": "Partition",
            "pay_too_frequent_tips": "Payment has been timed out. Please try again later or use another card. If you see this message repeatedly, you can contact customer service to get help completing the order.",
            "pleasePayASAP": "Please complete the payment soon",
            "promotionsBtn": "Promotions",
            "reachLimitTips": "",
            "recommend": "Recommend",
            "redeemBtn": "Redeem",
            "retry": "Retry",
            "rpCoupon": "UP TO {0}UC BONUS",
            "send": "Submit",
            "shopBtn": "Shop",
            "sorry": "Sorry",
            "subBtn": "SUBSCRIPTION",
            "subscribeBtn": "subscribe",
            "subscribeCard": {
                "btn": "Subscribe",
                "desc": "I’d like to receive news and special offers from Midasbuy",
                "emailInputTips": "Enter your email",
                "errorTips": "please enter your valid email",
                "processDesc": "Processing…",
                "subTitle": "SUBSCRIBE TO LATEST NEWS",
                "subWithLoginBtn": "Go to subscribe",
                "successDesc": "Subscribe Successfully!",
                "title": "SUBSCRIBE TO LATEST NEWS"
            },
            "success": "Success",
            "taxesBoxConfig": {
                "totalDesc": "Price includes taxes"
            },
            "useUserId": "USE",
            "xianyici": "One Purchase Only",
            "cantFindId": "Couldn't find your Player ID?",
            "checkRight1": "By ticking this box, you confirm that you have read and agreed to the Midasbuy <a class=\"link\" data-link='termsOfServicesLink' target='_blank' href='http://www.pubgmobile.com/terms.html'>Terms of Services</a> and understand how it applies to your use of Midasbuy.",
            "checkRight2": "By ticking this box, you confirm that you have read and agreed to the Midasbuy <a class=\"link\" data-link='privacyPolicyLink' target='_blank' href='http://www.pubgmobile.com/privacy.html'>Privacy Policy</a>  and understand how it applies to your use of Midasbuy.",
            "checkRight3": "By ticking this box, you agree to transfer your data outside of the European Economic Area. Midasbuy is a product offered by HIGH MORALE DEVELOPMENTS LTD. , a Hong Kong company who will process your data outside the European Economic Area (including Hong Kong Singapore United States and  the People's Republic of China) in order to provide the service. Please note that there are risks in such a transfer including your data being subject to differing legal regimes which may not afford it the same level of protection as that available in the country in which you are located. For more information please see our <a class=\"link\" data-link='privacyPolicyLink' target='_blank' href='http://www.pubgmobile.com/privacy.html'>Privacy Policy</a>.",
            "choosePayAmount": "Select Product",
            "choosePayMethod": "Payment Method",
            "clausePopTitle": "Please check the following box to continue.",
            "enterBirthday": "Enter birthday",
            "enterBirthdayTitle": "Please confirm your birthday",
            "extraPoints": "Extra Points",
            "findIdButton": "OK",
            "findIdGuide1": "1. Enter the game",
            "findIdGuide2": "2. Find your player ID",
            "findIdTitle": "Couldn't find your Player ID?",
            "iknow": "OK",
            "landingPopModal": {
                "cancelBtn": "Choose other payment method",
                "confirmBtn": "Pay by card",
                "desc": "We recommend you to use Midasbuy offical card payment to enjoy safe and convenient service. You can also enjoy more benefits by using card payment.",
                "title": "RECOMMEND YOU TO PAY BY CARD"
            },
            "otherPayMethod": "Other Payment Method",
            "partitionRequired": "Please select your partition",
            "payButton": "Pay now",
            "paymentFailButton": "Back",
            "paymentFailTitle": "Payment failed.",
            "pfDefaultSelect": "Choose",
            "pfRequired": "Please select your mobile phone system",
            "platForm": "System",
            "platformTips": "Currently only supports top-up service for wecomics Android users",
            "queryingNoRes": "Payment result not found",
            "queryingNoResTips": "There might be some lag. If the payment has been completed, please check the game later.",
            "queryingPay": "Query has been made. Please wait",
            "regionTitle": "Region",
            "taxLabel": "Tax Included",
            "taxesBoxPop": {
                "discount": "Discount",
                "earnPoints": "Earn Points",
                "earnValues": "Earn Value",
                "origiPrice": "Original Price",
                "summaryTitle": "PRICE SUMMARY",
                "taxes": "Taxes",
                "tips": " ",
                "total": "Total"
            },
            "totalPrice": "Total:",
            "vipPopContent": "Finish this Payment to become VIP",
            "vipPromotionMessage": "You can become Midasbuy VIP immediatly after finishing this payment.",
            "wxQrCodeGuide1": "Tap to save QR code to album.",
            "wxQrCodeGuide2": "Scan the QR code with WeChat to complete payment.",
            "wxQrCodeOtherChoice": "You can also recharge from your computer.",
            "wxQrCodeOtherLink": "www.midasbuy.com/hk/pubgm",
            "wxQrCodeTitle": "Please scan the QR code with WeChat to complete payment."
        };
        var footerLan = {
            "advanceDeclare": "By using the website, you are agreeing to our <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>.",
            "cookieCloseBtn": "Save and close",
            "cookieConfirmTitle": "COOKIES CONFIRM",
            "cookieOff": "OFF",
            "cookieOn": "ON",
            "cookieP1": "We use cookies that are necessary to provide the service and also other cookies, including third-party cookies for performance and analysis.<br>For more information on our cookie policy, please click <a target='_blank' href='https://cdn.midasbuy.com/oversea_web/static/cookie.html'>here</a>.",
            "cookieP2": "These cookies are necessary to provide you with the service and to use some of its features, such as to facilitate transactions.",
            "cookieP3": "These cookies are used to measure and analyse how the service is accessed, used, or is performing in order to provide you with a better   user experience and to maintain, operate and continually improve the service.",
            "cookieP4": "These cookies allow the website to remember the settings you have made in the past.",
            "cookiePolicy": "Cookie Policy",
            "cookieT": "YOUR COOKIE PREFERENCES",
            "cookieT2": "Necessary Cookies",
            "cookieT3": "Performance / Analytics Cookies",
            "cookieT4": "Functionality Cookies",
            "copyright": "COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED.",
            "countDownWord": "Closing in",
            "cstips": "For customer service, please contact us via email help@midasbuy.com or Facebook inbox.",
            "cstips1": "For customer service ",
            "cstips2": "Please send email to help@midasbuy.com",
            "facebook": "Facebook",
            "feedback": "Feedback",
            "followFB": "Follow Midasbuy",
            "followUs": "Follow us on",
            "nonEeaAcceptBtn": "Accept All Cookies",
            "nonEeaCookieP1": "By using the website, you are agreeing to our <a class='link' target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>.",
            "nonEeaCookieP2": "To provide our services to you, we use cookies on your device in accordance with our <a class='link' target='_blank' href='https://cdn.midasbuy.com/oversea_web/static/cookie.html'>Cookies Policy</a>. You can change your cookie settings by clicking on the ",
            "nonEeaRejectBtn": "Reject Non-Essential Cookies",
            "privacystatement": "Privacy Policy",
            "subscribeEmailPop": {
                "address": "Your Email address",
                "btn": "Subscribe now",
                "desc": "I‘d like to receive news and special offers from Midasbuy! Please send me exclusive deals and updates.",
                "errorTip": "invalid email",
                "title": "SUBSCRIBE TO LATEST NEWS"
            },
            "termofcookie": "Cookies Preference Centre",
            "termofservice": "Terms of Service"
        };
        var showWelcomeBack = 1
        // 获取红点变量 需要考虑控制台还没配置变量的情况 在header.ts中的红点逻辑需要做相应的控制
        var redPointConfigs = {
            "cardevent": {
                "beforeElement": true,
                "show": true,
                "show2Unlogin": true,
                "version": "Tue, 19 Aug 2020 10:57:00 GMT+0800"
            },
            "showRedPoint2Unlogin": false,
            "vipCenter": {
                "beforeElement": true,
                "show": true,
                "show2Unlogin": true,
                "version": "Tue, 19 Aug 2020 10:57:00 GMT+0800"
            }
        }
        var user = null
        var fbPixelId = "4122111147803299"
        var jumpHomePage = true;
        var bubblePopConfig = {
            "bubbleShow": false,
            "href": "https://www.midasbuy.com/midasbuy/{0}/event/register/pubgm?lan=en&from=__mds_buy_bubble",
            "promoteShow": false,
            "repalce": false
        }
        var vipcenterConfig = {
            "directLinks": {
                "earnValuesLink": "./shop/pubgm",
                "goToPurchaseLink": "./buy/pubgm"
            },
            "goToPurchaseLink": "/buy/pubgm",
            "helpcenterLink": "https://cdn.midasbuy.com/oversea_web/faq/vipfaq.html",
            "historyRange": "January 2019 - February 2021",
            "luckyDraw": {
                "eventLink": "/event/viplottery/mds",
                "eventValid": 1,
                "images": {
                    "frontBgImage": "https://cdn.midasbuy.com/images/drawbox.png",
                    "giftItems": ["https://cdn.midasbuy.com/images/price1.png", "https://cdn.midasbuy.com/images/price2.png", "https://cdn.midasbuy.com/images/price3.png"],
                    "mobileBgImage": "https://cdn.midasbuy.com/oversea_web/static/images/vip/pointdraw-b8661b4902.png",
                    "pcBgImage": "https://cdn.midasbuy.com/oversea_web/static/images/vip/pointdraw-b8661b4902.png"
                },
                "spend": "100"
            },
            "messageConfig": {
                "desc": "You have Loyalty Points that you can receive (For global users except for Vietnam and Taiwan（China） and China Mainland).",
                "href": "./verifyplayer/pubgm",
                "needOpen": true,
                "needScroll": false
            },
            "noLimitGroupid": ["TASK210609113039834"],
            "notQueryLimit": 0,
            "showCurrent": true,
            "showHistorical": true,
            "showLuckyDraw": 1,
            "showVipEntrance": 1,
            "showVipFAQ": 1,
            "taskCenter": {
                "allow_channel": "os_credit_card:*",
                "appid": "1450027575",
                "checkin": "sign",
                "defaultChannel": "os_credit_card",
                "goPurcharseLink": "/buy/pubgm?from=taskcenter",
                "groupIds": ["TASK210408103117306", "TASK210609113039834"],
                "groupid": "TASK210408103117306",
                "notVipTaskIds": ["fbb619c35073eb49"],
                "socialMediaCompConfig": {
                    "facebook": {
                        "fbSocial": {
                            "degradeGuideImg": "https://cdn.midasbuy.com/oversea_web/static/images/vip/followfacebookGuide.png",
                            "height": "600",
                            "href": "https://www.facebook.com/midasbuy",
                            "mobileWidth": "312",
                            "pcWidth": "312"
                        },
                        "isPopup": true
                    },
                    "instagram": {
                        "guideImg": "https://cdn.midasbuy.com/oversea_web/static/images/vip/followInstagramGuide.png",
                        "jumpLink": "https://www.instagram.com/midasbuy_top_up"
                    }
                },
                "taskList": {
                    "086d229ade43d008": {
                        "allowOnlyFbUserJoin": true,
                        "isNotVipTask": false,
                        "isSeparateStepTask": true,
                        "isVipTask": true,
                        "socialMediaType": "instagram"
                    },
                    "4c1a92fbce48be46": {
                        "isNotVipTask": false,
                        "isVipTask": true,
                        "transMapLanKey": "checkinweek"
                    },
                    "5318596c5bbad655": {
                        "allowOnlyFbUserJoin": true,
                        "isNotVipTask": false,
                        "isSeparateStepTask": true,
                        "isVipTask": true,
                        "socialMediaType": "facebook"
                    },
                    "fbb619c35073eb49": {
                        "defaultChannel": "os_credit_card",
                        "hash": "cardmanage",
                        "isNotVipTask": true,
                        "isVipTask": true,
                        "joinTaskLink": "/usercenter",
                        "transMapLanKey": "bindCard"
                    }
                },
                "transMapLanKey": {
                    "0be7d83bb624df3e": "checkinday",
                    "4c1a92fbce48be46": "checkinweek",
                    "fbb619c35073eb49": "bindCard"
                }
            },
            "toastTimeout": 2000,
            "verifyPageCounter": 60,
            "weeklyPrivilegeTask": ["849868cb29107b45", "17d2c5e4e9906683", "7268968b9e5ad2b1", "e18e3f1b7533eb19", "13b465aa42314a4e", "f0f8a49c4b43c7de", "e5fcf6527c5ee731", "562c5f009c1c0a73"]
        };
        var fbAppid = "855538431298982";
        var loginKey = "WwwaKu5kbLeEHYvUO8C71ObfsBpP6ypf";
        var enabledLoginSig = true;
        var __CookieCategory = {
            "analy": ["_ga"],
            "fn": ["landing_pop"]
        };
    </script>


    <script type="text/javascript">
        var sdk_rules = [{
            rule: "^https:\\/\\/nearme\\.atlas\\.com\\/\\?.*",
            type: "url",
            url: "https://{env}.api.unipay.qq.com/h5/overseah5/views/oppo/result.html"
        }, {
            rule: "^gojek:.*",
            type: "scheme"
        }, {
            rule: "^intent:.*",
            type: "intent"
        }, {
            rule: "^weixin:.*",
            type: "scheme"
        }, {
            rule: "^shopeeid:.*",
            type: "scheme"
        }];
    </script>



    <style type="text/css">
        input::-ms-clear {
            display: none;
        }

        .footer ul {
            margin-right: 15px;
        }

        .clause-box-pop {
            display: none;
        }

        [v-cloak] {
            display: none !important;
        }
		@font-face {
			font-family:dinm;
			src:url(font/DINMITTELSCHRIFTSTD.eot);
			src:url(font/DINMITTELSCHRIFTSTD.eot?#iefix) format('embedded-opentype'),url(font/DINMITTELSCHRIFTSTD.woff) format('woff'),url(font/DINMITTELSCHRIFTSTD.ttf) format('truetype'),url(font/DINMITTELSCHRIFTSTD.svg#webfont34M5alKg) format('svg');
    </style>
    <script>

    </script>
    <script>
        jQuery.fn.placeholder = function() {
            var b = document.createElement("input"),
                c = "placeholder" in b;
            if (!c) {
                var a = jQuery(this);
                a.each(function() {
                    var f = jQuery(this),
                        k = f.attr("placeholder"),
                        h = 0,
                        d = f.outerHeight(),
                        g = f.outerWidth(),
                        j = jQuery('<span class="phTips">' + k + "</span>");
                    try {
                        h = f.css("padding-left").match(/\d*/i)[0] * 1
                    } catch (i) {
                        h = 5
                    }
                    j.css({
                        "margin-left": -(g - h),
                        "height": d,
                        "line-height": d + "px",
                        "position": "absolute",
                        "color": "#cecfc9",
                        "font-size": "12px"
                    });
                    j.click(function() {
                        f.focus()
                    });
                    if (f.val() != "") {
                        j.css({
                            display: "none"
                        })
                    } else {
                        j.css({
                            display: "inline"
                        })
                    }
                    j.insertAfter(f);
                    f.keydown(function(l) {
                        j.css({
                            display: "none"
                        })
                    });
                    f.keyup(function(l) {
                        if (jQuery(this).val() != "") {
                            j.css({
                                display: "none"
                            })
                        } else {
                            j.css({
                                display: "inline"
                            })
                        }
                    })
                })
            }
            return this
        };
    </script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
    </script>
    <script type="text/javascript">
        var loadJS = function(d, s, id, src, callback) {
            if (!src) {
                return;
            }
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = src;
            js.onload = function() {
                callback && callback.onload && callback.onload(id);
            };
            js.onerror = function() {
                callback && callback.onerror && callback.onerror(id);
            }
            fjs.parentNode.insertBefore(js, fjs);
        };
        // scrollFun 不能被去掉或注释，注释了会导致 交易记录在移动端展示不全       
        function scrollFun() {
            var wInnerH = $(window).height(); // 设备窗口的高度（不会变）
            var bScrollH = $(document).height(); // 滚动条总高度
            var footerH = $('.have-pay-sec .footer').outerHeight();
            var footerHeight = $('.footer').outerHeight();
            var headerHeight = $('.header-box').outerHeight();
            if (wInnerH === bScrollH) {
                $('.pay-sec').addClass('pay-sec-flex');
                $('.pay-sec').show();
                $('.have-pay-sec .footer').show();
                $('.record .form-box-wrap-1 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.record .form-box-wrap-2 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                if (
                    wInnerH -
                    ($('.special-box').offset() ? $('.special-box').offset().top : 0) -
                    $('.special-box').outerHeight() >
                    footerHeight + 16
                ) {
                    $('.special-foot .footer').show();
                } else {
                    $('.wrap').removeClass('special-foot');
                }
            } else {
                // $('.record-detailt-pop .detailt-box').css('max-height', (wInnerH - headerHeight - 74) + 'px');
                $('.record .form-box-wrap-1 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.record .form-box-wrap-2 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.wrap').removeClass('special-foot');
            }
        }
        $(function() {
            setTimeout(function() {
                scrollFun();
            }, 0);
            window.addEventListener('resize', function() {
                scrollFun();
            });
            window.loadImages && window.loadImages();
        });
    </script>
    <script type="text/javascript">
        ! function() {
            "use strict";
            var r = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
            window.btoa || (window.btoa = function(t) {
                for (var o, e, n = String(t), a = 0, i = r, c = ""; n.charAt(0 | a) || (i = "=", a % 1); c += i.charAt(63 & o >> 8 - a % 1 * 8)) {
                    if ((e = n.charCodeAt(a += .75)) > 255) throw new Error("'btoa' failed: The string to be encoded contains characters outside of the Latin1 range.");
                    o = o << 8 | e
                }
                return c
            }), window.atob || (window.atob = function(t) {
                var o = String(t).replace(/[=]+$/, "");
                if (o.length % 4 == 1) throw new Error("'atob' failed: The string to be decoded is not correctly encoded.");
                for (var e, n, a = 0, i = 0, c = ""; n = o.charAt(i++); ~n && (e = a % 4 ? 64 * e + n : n, a++ % 4) ? c += String.fromCharCode(255 & e >> (-2 * a & 6)) : 0) n = r.indexOf(n);
                return c
            })
        }();
    </script>
    <script type="text/javascript" src="https://cdn.midasbuy.com/js/x-midas/kEc9hjFh5DQJbz_iPEWrfFxadMVk4PbLDS-5P8jE73pfdUuDwNGKNVZjdEztcHdofAVaHXo6zRGXgLwuvsK_afAEj6w_mKyiUmq-7AesIRU~.js?max_age=31536000"></script>



    <script>
        var landingPopConfigs = [{
            "title": "*",
            "url": "https://cdn.midasbuy.com/images/427ebce5-9195-4b6f-8d87-0e6b652e92e35deaa95e.png",
            "href": "https://www.midasbuy.com/apps/activity/views/oneDollarDraw?appid=1450015065&eventid=v202203&from=__mds_buy_banner.landingPop",
            "start": "2022-04-12 15:00:00+0800",
            "end": "2022-04-25 15:36:23+0800",
            "cookiename": "landing_pop",
            "popat": ["shop", "buy", "redeem", "homepage", "promotions"],
            "ip_country": ["kz"],
            "target": "_blank",
            "times": 86400000
        }];
    </script>


    <script>
        var WebsiteHosts = ["pay.gpubgm.com", "www.midasbuy.com", "pay.pubgm.zing.vn", "nap.codm.360mobi.vn", "sandbox.midasbuy.com", "pay.kingdomcraftgame.com", "127.0.0.1", "localhost"];
    </script>


    <script>
        var throttle = function(func, wait, options) {
            var context, args, result;
            var timeout = null;
            var previous = 0;
            if (!options) {
                options = {}
            }
            var later = function() {
                previous = options.leading === false ? 0 : +new Date();
                timeout = null;
                result = func.apply(context, args);
                if (!timeout) {
                    context = args = null
                }
            };
            return function() {
                var now = +new Date();
                if (!previous && options.leading === false) {
                    previous = now
                }
                var remaining = wait - (now - previous);
                context = this;
                args = arguments;
                if (remaining <= 0 || remaining > wait) {
                    if (timeout) {
                        clearTimeout(timeout);
                        timeout = null
                    }
                    previous = now;
                    result = func.apply(context, args);
                    if (!timeout) {
                        context = args = null
                    }
                } else {
                    if (!timeout && options.trailing !== false) {
                        timeout = setTimeout(later, remaining)
                    }
                }
                return result
            }
        };
    </script>
</head>

<body>
    <input type="hidden" id="xMidasToken" value="04dc923aec471fd5e253d026b840faf9ee3d1040ebd9a8a18dac7a302886d4ca732516c2abf8bba41a611a1a7d7a9939">
    <input type="hidden" id="xMidasVersion" value="1.0.1">
    <div class="wrap game-ticket game-wrap game_list have-pay-sec game-ticket-new ">
        <script type="text/javascript">
            var GAME_INFO = {
                "offer_name": "PUBG Mobile",
                "unit": "UnknownCash",
                "rate": "10",
                "count": "0",
                "country_code": "",
                "currency_type": "",
                "channel": [{
                    "id": "os_credit_card",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": "0"
                }, {
                    "id": "mol",
                    "name": "",
                    "key": "poSZb92qoFgpqavNyD6oifsRhbhNGz7C",
                    "appcode": "SRAHw9dTRiMSTvYq1g6RLIVuNwNqg27f",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": "0"
                }, {
                    "id": "midas_redeem",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": "0"
                }, {
                    "id": "redeem",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": "0"
                }, {
                    "id": "mol_zgoldcard",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": "0"
                }, {
                    "id": "mol_razerzvault",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": "0"
                }, {
                    "id": "os_credit_card_adyen",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": "0"
                }],
                "productid_list": [{
                    "id": "os_credit_card",
                    "productid_info": [{
                        "name": "30 Unknown Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_30",
                        "price": "49",
                        "num": "30",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "60 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_60",
                        "price": "99",
                        "num": "60",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "180 Unknown Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_180",
                        "price": "299",
                        "num": "180",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "300 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_300",
                        "price": "499",
                        "num": "300",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "600 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_600",
                        "price": "999",
                        "num": "600",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "900 Unknown Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_900",
                        "price": "1499",
                        "num": "900",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "1500 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_1500",
                        "price": "2499",
                        "num": "1500",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "3000 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_3000",
                        "price": "4999",
                        "num": "3000",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "6000 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_6000",
                        "price": "9999",
                        "num": "6000",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "7800 Unknown Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_7800",
                        "price": "12999",
                        "num": "7800",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "12000 Unknown Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_12000",
                        "price": "19999",
                        "num": "12000",
                        "currency_type": "USD",
                        "country": "OT"
                    }]
                }, {
                    "id": "mol_zgoldcard",
                    "productid_info": [{
                        "name": "60 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_60",
                        "price": "100",
                        "num": "60",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "120 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_120",
                        "price": "200",
                        "num": "120",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "300 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_300",
                        "price": "500",
                        "num": "300",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "600 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_600",
                        "price": "1000",
                        "num": "600",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "1200 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_1200",
                        "price": "2000",
                        "num": "1200",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "1500 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_1500",
                        "price": "2500",
                        "num": "1500",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "3000 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_3000",
                        "price": "5000",
                        "num": "3000",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "6000 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_6000",
                        "price": "10000",
                        "num": "6000",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "12000 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_12000",
                        "price": "20000",
                        "num": "12000",
                        "currency_type": "USD",
                        "country": "OT"
                    }]
                }, {
                    "id": "mol_razerzvault",
                    "productid_info": [{
                        "name": "30 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_30",
                        "price": "49",
                        "num": "30",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "60 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_60",
                        "price": "99",
                        "num": "60",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "180 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_180",
                        "price": "299",
                        "num": "180",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "600 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_600",
                        "price": "999",
                        "num": "600",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "900 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_900",
                        "price": "1499",
                        "num": "900",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "1500 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_1500",
                        "price": "2499",
                        "num": "1500",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "3000 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_3000",
                        "price": "4999",
                        "num": "3000",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "6000 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_6000",
                        "price": "9999",
                        "num": "6000",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "7800 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_7800",
                        "price": "12999",
                        "num": "7800",
                        "currency_type": "USD",
                        "country": "OT"
                    }]
                }],
                "mol_pin_show_info": [],
                "pmwall_card": {},
                "appmode": 0,
                "max_num": 0,
                "productid": "",
                "goodsname": "",
                "goodsdes": "",
                "unit_price": "",
                "pmwall_cc": "",
                "short_openid": "",
                "charac_name": "",
                "logic_world_list": "",
                "mycard_info": {},
                "openid": "",
                "adyen_svrtime": "",
                "adyen_url": "",
                "pass_is_buy": "",
                "last_login_time": "",
                "vgameappid": "",
                "region": "",
                "is_bluehole_user": "",
                "register_country": ""
            };
            var MP_INFO = {
                "buycurrency": {
                    "uptopresent_ot": {
                        "rule_item": [{
                            "present_item": [{
                                "num": "60",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "3",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "120",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "8",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "300",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "40",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "600",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "90",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1200",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "260",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1500",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "375",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "3000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "1000",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "6000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "2400",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "12000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "4800",
                                "send_ext": "",
                                "product_item": []
                            }],
                            "allow_channel": "mol:1003",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2020-01-14 17:00:00",
                            "end_time": "2022-07-17 23:59:59",
                            "rank_type": "range",
                            "is_limit": "no",
                            "desc": ""
                        }, {
                            "present_item": [{
                                "num": "30",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "2",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "60",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "3",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "180",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "18",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "600",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "90",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1500",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "375",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "3000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "1000",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "6000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "2400",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "7800",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "3120",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "900",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "180",
                                "send_ext": "",
                                "product_item": []
                            }],
                            "allow_channel": "mol:27,mol:1001",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2020-01-14 17:00:00",
                            "end_time": "2022-07-17 23:59:59",
                            "rank_type": "range",
                            "is_limit": "no",
                            "desc": ""
                        }, {
                            "present_item": [{
                                "num": "30",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "2",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "60",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "3",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "180",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "18",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "300",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "40",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "600",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "90",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1500",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "375",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "3000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "1000",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "6000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "2400",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "7800",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "3120",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "12000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "4800",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "900",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "180",
                                "send_ext": "",
                                "product_item": []
                            }],
                            "allow_channel": "os_adyen:4,os_credit_card",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2020-01-14 17:00:00",
                            "end_time": "2022-07-17 23:59:59",
                            "rank_type": "range",
                            "is_limit": "no",
                            "desc": ""
                        }],
                        "title": "",
                        "rule_id": "utp200102220832287"
                    },
                    "uptopresent15": {
                        "rule_item": [{
                            "present_item": [{
                                "num": "60",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "1"
                                }]
                            }, {
                                "num": "120",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "2"
                                }]
                            }, {
                                "num": "180",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "3"
                                }]
                            }, {
                                "num": "240",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "4"
                                }]
                            }, {
                                "num": "300",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "5"
                                }]
                            }, {
                                "num": "360",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "6"
                                }]
                            }, {
                                "num": "420",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "7"
                                }]
                            }, {
                                "num": "480",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "8"
                                }]
                            }, {
                                "num": "540",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "9"
                                }]
                            }, {
                                "num": "600",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "10"
                                }]
                            }, {
                                "num": "660",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "11"
                                }]
                            }, {
                                "num": "720",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "12"
                                }]
                            }, {
                                "num": "780",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "13"
                                }]
                            }, {
                                "num": "840",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "14"
                                }]
                            }, {
                                "num": "900",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "15"
                                }]
                            }, {
                                "num": "960",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "16"
                                }]
                            }, {
                                "num": "1020",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "17"
                                }]
                            }, {
                                "num": "1140",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "19"
                                }]
                            }, {
                                "num": "1200",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "20"
                                }]
                            }, {
                                "num": "1260",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "21"
                                }]
                            }, {
                                "num": "1380",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "23"
                                }]
                            }, {
                                "num": "1500",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "25"
                                }]
                            }, {
                                "num": "1620",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "27"
                                }]
                            }, {
                                "num": "1740",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "29"
                                }]
                            }, {
                                "num": "1860",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "31"
                                }]
                            }, {
                                "num": "1980",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "33"
                                }]
                            }, {
                                "num": "2100",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "35"
                                }]
                            }, {
                                "num": "2220",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "37"
                                }]
                            }, {
                                "num": "2340",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "39"
                                }]
                            }, {
                                "num": "2460",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "41"
                                }]
                            }, {
                                "num": "2580",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "43"
                                }]
                            }, {
                                "num": "2700",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "45"
                                }]
                            }, {
                                "num": "2820",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "47"
                                }]
                            }, {
                                "num": "2940",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "49"
                                }]
                            }, {
                                "num": "3000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "50"
                                }]
                            }, {
                                "num": "3060",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "51"
                                }]
                            }, {
                                "num": "3180",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "43"
                                }]
                            }, {
                                "num": "3300",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "55"
                                }]
                            }, {
                                "num": "3420",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "57"
                                }]
                            }, {
                                "num": "3540",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "59"
                                }]
                            }, {
                                "num": "3660",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "61"
                                }]
                            }, {
                                "num": "3780",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "63"
                                }]
                            }, {
                                "num": "3900",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "65"
                                }]
                            }, {
                                "num": "4020",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "67"
                                }]
                            }, {
                                "num": "4140",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "69"
                                }]
                            }, {
                                "num": "4260",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "71"
                                }]
                            }, {
                                "num": "4380",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "73"
                                }]
                            }, {
                                "num": "4500",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "75"
                                }]
                            }, {
                                "num": "4620",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "77"
                                }]
                            }, {
                                "num": "4740",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "79"
                                }]
                            }, {
                                "num": "4860",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "81"
                                }]
                            }, {
                                "num": "4980",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "83"
                                }]
                            }, {
                                "num": "5100",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "85"
                                }]
                            }, {
                                "num": "5220",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "87"
                                }]
                            }, {
                                "num": "5340",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "89"
                                }]
                            }, {
                                "num": "5460",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "91"
                                }]
                            }, {
                                "num": "5580",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "93"
                                }]
                            }, {
                                "num": "5700",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "95"
                                }]
                            }, {
                                "num": "5820",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "97"
                                }]
                            }, {
                                "num": "5940",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "99"
                                }]
                            }, {
                                "num": "6000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "100"
                                }]
                            }],
                            "allow_channel": "mol:27,mol:1001,wechat,mol:1003,os_upoint,os_codapay:3,os_codapay:6,os_codapay:4,os_codapay:8,os_codapay:31,os_codapay:30,os_unipin:2,os_unipin:3,os_unipin:12,os_unipin:11,os_codapay:54,os_codapay:59,os_unipin:6,os_codapay:48,os_codapay:58,mol:12,os_unipin:1,os_codapay:56,os_codapay:55,os_codapay:51,os_unipin:15,os_unipin:14,os_codapay:45,os_codapay:46,os_codapay:15,os_codapay:11,os_codapay:12,boku:15,boku:14,os_codapay:13,os_codapay:57,boku:2,os_codapay:38,os_codapay:52,os_mol_tha:4,os_codapay:18,os_mol_tha:5,os_codapay:10,os_mol_tha:3,os_mol_tha:6,os_codapay:36,os_codapay:49,os_codapay:53,os_adyen_local_pay:8,os_adyen_local_pay:5,os_skrill:2,os_skrill:3,os_skrill:8,os_skrill:4,os_adyen_local_pay:9,os_ebanx:2,os_ebanx:18,os_ebanx:5,os_ebanx:21,os_ebanx:6,mol:110,os_ebanx:19,mol:108,os_codapay:110,os_ebanx:23,mol:158,os_ebanx:22,mol:195,os_ebanx:20,os_ebanx:17,os_ebanx:16,mol:107,mol:113,mol:114,os_ebanx:30",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2022-04-12 15:00:00",
                            "end_time": "2022-04-25 23:55:59",
                            "rank_type": "range",
                            "is_limit": "no",
                            "desc": ""
                        }, {
                            "present_item": [{
                                "num": "60",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "1"
                                }]
                            }, {
                                "num": "120",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "2"
                                }]
                            }, {
                                "num": "180",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "3"
                                }]
                            }, {
                                "num": "240",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "4"
                                }]
                            }, {
                                "num": "300",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "5"
                                }]
                            }, {
                                "num": "540",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "9"
                                }]
                            }, {
                                "num": "600",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "11"
                                }]
                            }, {
                                "num": "1200",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "21"
                                }]
                            }, {
                                "num": "1380",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "24"
                                }]
                            }, {
                                "num": "1500",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "26"
                                }]
                            }, {
                                "num": "2400",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "40"
                                }]
                            }, {
                                "num": "2460",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "41"
                                }]
                            }, {
                                "num": "2700",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "45"
                                }]
                            }, {
                                "num": "3000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "50"
                                }]
                            }, {
                                "num": "4980",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "83"
                                }]
                            }, {
                                "num": "5400",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "90"
                                }]
                            }, {
                                "num": "6000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "100"
                                }]
                            }, {
                                "num": "7500",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "125"
                                }]
                            }, {
                                "num": "7800",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "130"
                                }]
                            }, {
                                "num": "10800",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "180"
                                }]
                            }, {
                                "num": "12000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "0",
                                "send_ext": "",
                                "product_item": [{
                                    "id": "LUCK2203230406320502",
                                    "name": "Lottery",
                                    "url": "https://cdn.midasbuy.com/images/f82ba35a-b95f-42ae-8f4a-8522abaaad419c627639.png",
                                    "num": "200"
                                }]
                            }],
                            "allow_channel": "os_credit_card,os_adyen:4",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2022-04-12 15:00:00",
                            "end_time": "2022-04-25 23:55:59",
                            "rank_type": "range",
                            "is_limit": "no",
                            "desc": ""
                        }],
                        "title": "",
                        "rule_id": "utp220324150607744"
                    },
                    "uptopresent19": {
                        "rule_item": [{
                            "present_item": [{
                                "num": "60",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "10",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "300",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "10",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "600",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "10",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1500",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "10",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1501",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "0",
                                "send_ext": "",
                                "product_item": []
                            }],
                            "allow_channel": "os_credit_card,os_adyen_local_pay",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2022-04-18 00:00:00",
                            "end_time": "2022-04-30 23:59:59",
                            "rank_type": "range",
                            "is_limit": "no",
                            "desc": ""
                        }],
                        "title": "",
                        "rule_id": "utp220418193303704"
                    },
                    "ruleset_id": "DRM220418000000000988",
                    "mall_url": "",
                    "result_url": "",
                    "title": "",
                    "title_url": ""
                }
            };
            var CHANNEL_INFO = {
                "codapay_kh_dcb": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/oversea_web/static/images/channels/paybyMobile.jpg",
                    "icon_pc": "https://cdn.midasbuy.com/images/6ccfe06cc59956768bd3a7be8b0a4eed52ee26b.png",
                    "name": "Pay By Mobile",
                    "pm": "os_codapay:27",
                    "subchannel": "dcb"
                },
                "codapay_kh_wing": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/oversea_web/static/images/channels/mo_cnl_wing_logo.jpg",
                    "icon_pc": "https://cdn.midasbuy.com/oversea_web/static/images/channels/pc_cnl_wing_logo.jpg",
                    "icon_pc_2": "https://cdn.midasbuy.com/oversea_web/static/images/channels/pc_cnl_wing_logo@2x.jpg",
                    "name": "WING",
                    "pm": "os_codapay:28",
                    "subchannel": "wing"
                },
                "midas_redeem": {
                    "currencyType": ["INR", "IDR", "USD", "TRY", "IQD", "KWD", "SAR", "BHD", "QAR", "AED", "OMR", "EGP", "LYD", "TND", "DZD", "MAD", "LAK", "MYR", "MMK", "PHP", "SGD", "THB"],
                    "icon_h5": "https://cdn.midasbuy.com/images/midas_redeeme1abadee.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/midas_redeeme1abadee.png",
                    "name": "Voucher Code",
                    "pm": "redeem"
                },
                "mol_fpx": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND"],
                    "icon_h5": "https://cdn.midasbuy.com/images/fpx8b531c57.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/fpx8b531c57.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/images/fpx8b531c57.png",
                    "name": "FPX",
                    "pm": "mol:12",
                    "subchannel": "mol_fpx"
                },
                "mol_gamesultan": {
                    "channel": "mol_global",
                    "currencyType": ["TRY", "EUR", "USD"],
                    "icon_h5": "",
                    "icon_pc": "",
                    "icon_pc_2": "",
                    "name": "gamesultan",
                    "pm": "mol:9",
                    "subchannel": "mol_gamesultan"
                },
                "mol_maybank2u": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND"],
                    "icon_h5": "https://cdn.midasbuy.com/images/maybank2uc01d11c4.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/maybank2uc01d11c4.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/images/maybank2uc01d11c4.png",
                    "name": "maybank2u",
                    "pm": "mol:13",
                    "subchannel": "mol_maybank2u"
                },
                "mol_molpaycreditcard": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND"],
                    "icon_h5": "",
                    "icon_pc": "",
                    "icon_pc_2": "",
                    "name": "molpaycreditcard",
                    "pm": "mol:10",
                    "subchannel": "mol_molpaycreditcard"
                },
                "mol_paypal": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND"],
                    "icon_h5": "",
                    "icon_pc": "",
                    "icon_pc_2": "",
                    "name": "paypal",
                    "pm": "mol:11",
                    "subchannel": "mol_paypal"
                },
                "mol_razerzvault": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "EUR", "HKD", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND", "TRY", "MMK", "MXN", "JPY"],
                    "icon_h5": "https://cdn.midasbuy.com/oversea_web/static/images/channels/razergold_logo.png",
                    "icon_pc": "https://cdn.midasbuy.com/oversea_web/static/images/channels/razergold_logo.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/oversea_web/static/images/channels/razergold_logo.png",
                    "name": "Razer Gold ",
                    "pm": "mol:27",
                    "restoration": {
                        "endTime": "Thu Nov 19 2020 12:00:00 GMT+0800",
                        "startTime": "Thu Nov 05 2020 12:00:00 GMT+0800"
                    },
                    "subchannel": "mol_razerzvault"
                },
                "mol_rixty": {
                    "channel": "mol_global",
                    "currencyType": ["BRL", "USD"],
                    "icon_h5": "",
                    "icon_pc": "",
                    "icon_pc_2": "",
                    "name": "rixty",
                    "pm": "mol:1002",
                    "subchannel": "mol_rixty"
                },
                "mol_zgoldcard": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "EUR", "HKD", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND", "MXN", "TRY", "MMK", "HKD"],
                    "icon_h5": "https://cdn.midasbuy.com/oversea_web/static/images/channels/razergold_logo.png",
                    "icon_pc": "https://cdn.midasbuy.com/oversea_web/static/images/channels/razergold_logo.png",
                    "name": "Razer Gold Pin",
                    "pm": "mol:1003",
                    "subchannel": "mol_zgoldcard",
                    "type": "cashcard"
                },
                "mol_zgoldewallet": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "EUR", "HKD", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "MXN", "VND"],
                    "icon_h5": "https://cdn.midasbuy.com/oversea_web/static/images/channels/mo_cnl_zgold_molpoints.png",
                    "icon_pc": "https://cdn.midasbuy.com/oversea_web/static/images/channels/pc_cnl_zgold_molpoints.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/oversea_web/static/images/channels/pc_cnl_zgold_molpoints@2x.png",
                    "name": "e-Wallet",
                    "pm": "mol:1001",
                    "subchannel": "mol_zgoldewallet"
                },
                "os_boacompra": {
                    "channel": "boacompra",
                    "currencyType": ["BRL", "TRY", "MXN", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "name": "Boacompra",
                    "pm": "os_boacompra",
                    "subchannel": ""
                },
                "os_boacompra_card": {
                    "channel": "boacompra",
                    "currencyType": ["BRL", "MXN", "TRY", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "imgs": ["https://midas.gtimg.cn/boacompra/credit_card/visa.png", "https://midas.gtimg.cn/boacompra/credit_card/mastercard.png", "https://midas.gtimg.cn/boacompra/credit_card/americanexpress.png", "https://midas.gtimg.cn/boacompra/credit_card/visaelectron.png", "https://midas.gtimg.cn/boacompra/credit_card/diners.png", "https://midas.gtimg.cn/boacompra/credit_card/hipercard.png", "https://midas.gtimg.cn/boacompra/credit_card/aura.png", "https://midas.gtimg.cn/boacompra/credit_card/elocard.png", "https://midas.gtimg.cn/boacompra/credit_card/personal.png", {
                        "mx": ["https://midas.gtimg.cn/store_config/1599471336824UvemwojK.png", "https://midas.gtimg.cn/store_config/1599471350879ezAGOlbO.png", "https://midas.gtimg.cn/store_config/1599471367380rtokLPZy.png"],
                        "tr": ["https://midas.gtimg.cn/boacompra/credit_card/visa.png", "https://midas.gtimg.cn/boacompra/credit_card/mastercard.png", "https://midas.gtimg.cn/boacompra/credit_card/visaelectron.png", "https://midas.gtimg.cn/boacompra/credit_card/maestro.png"]
                    }],
                    "name": "Card",
                    "payParams": {
                        "channel": "boacompra",
                        "payment_group": "card",
                        "subchannel": "card"
                    },
                    "pm": "os_boacompra"
                },
                "os_boacompra_cash": {
                    "channel": "boacompra",
                    "currencyType": ["BRL", "MXN", "TRY", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "imgs": [{
                        "br": ["https://midas.gtimg.cn/boacompra/cash/boleto.png"],
                        "mx": ["https://midas.gtimg.cn/store_config/1599469782213uvTvpgio.png", "https://midas.gtimg.cn/store_config/1599469829601bNmlIQU.png", "https://midas.gtimg.cn/store_config/1599469846005mxPrxulJ.png"]
                    }],
                    "name": "Cash",
                    "payParams": {
                        "channel": "boacompra",
                        "payment_group": "cash",
                        "subchannel": "cash"
                    },
                    "pm": "os_boacompra"
                },
                "os_boacompra_transfer": {
                    "channel": "boacompra",
                    "currencyType": ["BRL", "MXN", "TRY", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "imgs": ["/https:/midas.gtimg.cn/boacompra/bank_transfer/bancodobrasil.png", "https://midas.gtimg.cn/boacompra/bank_transfer/itau.png", "https://midas.gtimg.cn/boacompra/bank_transfer/banrisul.png", "https://midas.gtimg.cn/boacompra/bank_transfer/santander.png", "https://midas.gtimg.cn/boacompra/bank_transfer/bradesco.png", "https://midas.gtimg.cn/boacompra/bank_transfer/caixa.png", {
                        "br": ["https://midas.gtimg.cn/store_config/1599470452089hr67AhtV.png", "https://midas.gtimg.cn/store_config/1599470491830w6ybRbBL.png", "https://midas.gtimg.cn/store_config/1599470517784l4C7bG3R.png", "https://midas.gtimg.cn/store_config/1599470538002ErB0xqb3.png"],
                        "mx": ["https://midas.gtimg.cn/store_config/1599470891891WVjmmVZv.png", "https://midas.gtimg.cn/store_config/1599470910934LpErPYzr.jpg", "https://midas.gtimg.cn/store_config/1599470959778qwiV6VWR.png", "https://midas.gtimg.cn/store_config/1599470985697qvSbBE7g.jpg", "https://midas.gtimg.cn/store_config/1599471060834hyELBEj.jpg", "https://midas.gtimg.cn/store_config/1599471079298iOYylAlq.png", "https://midas.gtimg.cn/store_config/1599471095318MZm94mDE.png"],
                        "tr": ["https://midas.gtimg.cn/boacompra/bank_transfer/isbank.png", "https://midas.gtimg.cn/boacompra/bank_transfer/granti.png", "https://midas.gtimg.cn/boacompra/bank_transfer/akbank.png", "https://midas.gtimg.cn/boacompra/bank_transfer/yapikredi.png", "https://midas.gtimg.cn/boacompra/bank_transfer/denizbank.png", "https://midas.gtimg.cn/boacompra/bank_transfer/ptt.png", "https://midas.gtimg.cn/boacompra/bank_transfer/kuveytturk.png", "https://midas.gtimg.cn/boacompra/bank_transfer/vakifbank.png", "https://midas.gtimg.cn/boacompra/bank_transfer/ziraatbankasi.png", "https://midas.gtimg.cn/boacompra/bank_transfer/teconomibank.png"]
                    }],
                    "name": "Transfer",
                    "payParams": {
                        "channel": "boacompra",
                        "payment_group": "transfer",
                        "subchannel": "transfer"
                    },
                    "pm": "os_boacompra"
                },
                "os_boacompra_wallet": {
                    "channel": "boacompra",
                    "currencyType": ["BRL", "MXN", "TRY", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "imgs": ["https://midas.gtimg.cn/boacompra/online_wallet/gold.png", "https://midas.gtimg.cn/boacompra/online_wallet/pagseguro.png", "https://midas.gtimg.cn/boacompra/online_wallet/paypal.png", {
                        "br": ["https://midas.gtimg.cn/store_config/1599471567752tfaaKPWp.png", "https://midas.gtimg.cn/store_config/1599471586017hznUaVqi.png"],
                        "mx": ["https://midas.gtimg.cn/store_config/1599471586017hznUaVqi.png"]
                    }],
                    "name": "Wallet",
                    "payParams": {
                        "channel": "boacompra",
                        "payment_group": "online wallet",
                        "subchannel": "wallet"
                    },
                    "pm": "os_boacompra"
                },
                "os_gash_card": {
                    "channel": "gash",
                    "currencyType": ["TWD", "MOP", "USD", "HKD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/56750cc0e.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/56750cc0e.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/images/56750cc0e.png",
                    "name": "GASH 點數卡",
                    "payParams": {
                        "channel": "gash",
                        "newtab": 1,
                        "subchannel": "card"
                    },
                    "pm": "os_gash:1",
                    "subchannel": "card",
                    "type": "cashcard"
                },
                "os_paypal": {
                    "currencyType": ["AUD", "BRL", "CAD", "CZK", "DKK", "EUR", "HKD", "HUF", "INR", "ILS", "JPY", "MYR", "MXN", "TWD", "NZD", "NOK", "PHP", "PLN", "GBP", "RUB", "SGD", "SEK", "CHF", "THB", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/oversea_web/static/images/channels/logo_paypal.png",
                    "icon_pc": "https://cdn.midasbuy.com/oversea_web/static/images/channels/logo_paypal.png",
                    "name": "PayPal",
                    "payParams": {
                        "channel": "paypal_new",
                        "newtab": 1
                    },
                    "pm": "os_paypal"
                },
                "os_skrill": {
                    "currencyType": ["EUR", "USD", "GBP", "SEK", "AED", "SAR", "KWD", "RUB", "TRY"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_skrill-h542ac8ffc.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_skrill-h542ac8ffc.png",
                    "name": "Skrill",
                    "payParams": {
                        "channel": "skrill",
                        "isv3": 1,
                        "newtab": 1
                    },
                    "pm": "os_skrill"
                },
                "paypal": {
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/paypal5088bda5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/paypal5088bda5.png",
                    "name": "Paypal",
                    "pm": "paypal:1"
                },
                "wechat": {
                    "H5_frameHeight": "200",
                    "channel": "",
                    "cssObj": {
                        "height": 200,
                        "width": 200
                    },
                    "currencyType": ["CNY", "HKD", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/oversea_web/static/images/channels/wechat.png",
                    "icon_pc": "https://cdn.midasbuy.com/oversea_web/static/images/channels/wechat.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/oversea_web/static/images/channels/wechat.png",
                    "isWechat": 1,
                    "name": "微信支付",
                    "payParams": {
                        "channel": "wechat",
                        "h5_newtab": 0,
                        "pc_newtab": 0,
                        "subchannel": ""
                    },
                    "pm": "wechat",
                    "supportJsApi": 1
                },
                "os_credit_card": {
                    "channel": "creditcard",
                    "currencyType": ["ARS", "PEN", "SEK", "EUR", "PLN", "THB", "EGP", "MMK", "INR", "HKD", "BRL", "IDR", "USD", "PKR", "LAK", "TWD", "TRY", "IQD", "PHP", "MYR", "SGD", "ILS", "SAR", "AED", "KWD", "AUD", "RUB", "CHF", "GBP", "QAR", "BHD", "MXN", "ZAR", "CLP", "OMR", "LKR", "KZT", "NZD", "BDT", "MOP", "JPY", "KRW"],
                    "icon_h5": "https://cdn.midasbuy.com/oversea_web/static/images/channels/1591583418114fLuXpvL7.png",
                    "icon_pc": "https://cdn.midasbuy.com/oversea_web/static/images/channels/1591583418114fLuXpvL7.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/oversea_web/static/images/channels/1591583418114fLuXpvL7.png",
                    "imgs": ["https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_visa.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_master.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_amex.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_unionpay.png", "/https:/cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_diners.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_discover.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_jcb.png", {
                        "fr": ["https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_visa.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_master.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_cb.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_amex.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_unionpay.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_diners.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_discover.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_jcb.png"],
                        "tr": ["https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_visa.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_master.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_troy.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_amex.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_unionpay.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_diners.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_discover.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_jcb.png"]
                    }],
                    "name": "Credit / Debit / Prepaid Card",
                    "payParams": {
                        "action": "pay",
                        "needAvs": false,
                        "need_translate_keys": ["cgi_extend", "drm_info"],
                        "query_drm": 1,
                        "theme": "normal",
                        "use_json": "1"
                    },
                    "pm": "os_credit_card:1",
                    "subchannel": "",
                    "extraInfo": {
                        "condition": "unlogin-corner",
                        "desc": "Recommend"
                    }
                },
                "codapay_kh_pipay": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/Pi-Paya6a8bb3c.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/Pi-Paya6a8bb3c.png",
                    "name": "Pi Pay",
                    "pm": "os_codapay:48",
                    "subchannel": "pipay"
                },
                "mol_paysafecard": {
                    "channel": "mol_global",
                    "currencyType": ["MXN", "USD", "CAD"],
                    "icon_h5": "",
                    "icon_pc": "https://cdn.midasbuy.com/images/2104x2104_107_meitu_122f24ecd9.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/images/2104x2104_107_meitu_122f24ecd9.png",
                    "name": "Paysafecard",
                    "pm": "mol:107",
                    "subchannel": "mol_paysafecard"
                },
                "os_redeem_code": {
                    "currencyType": ["*"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_redeem_codef338c51c.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_redeem_codef338c51c.png",
                    "name": "Redeem Code",
                    "pm": "os_redeem_code"
                },
                "codapay_kh_wingmoney": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/codapay_kh_wingmoney72d3429a.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/codapay_kh_wingmoney72d3429a.png",
                    "name": "Wing Money",
                    "pm": "os_codapay:91",
                    "subchannel": "wingmoney"
                },
                "codapay_kh_paygo": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/codapay_kh_paygo7f6310e1.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/codapay_kh_paygo7f6310e1.png",
                    "name": "PayGo",
                    "pm": "os_codapay:92",
                    "subchannel": "paygo"
                },
                "codapay_kh_cellcard": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/codapay_kh_cellcardfedf0b3a.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/codapay_kh_cellcardfedf0b3a.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/images/codapay_kh_cellcardfedf0b3a.png",
                    "name": "Cellcard",
                    "pm": "os_codapay:93",
                    "subchannel": "cellcard"
                },
                "codapay_kh_metfone": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/codapay_kh_metfonef599d129.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/codapay_kh_metfonef599d129.png",
                    "name": "Metfone",
                    "pm": "os_codapay:94",
                    "subchannel": "metfone"
                },
                "mol_paygo": {
                    "channel": "mol_global",
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/paygoe8b7e0c4.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/paygoe8b7e0c4.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/images/paygoe8b7e0c4.png",
                    "name": "PayGo",
                    "pm": "mol:168",
                    "subchannel": "mol_paygo"
                },
                "codapay_kh_smart": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/codapay_kh_smartc959b0ab.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/codapay_kh_smartc959b0ab.png",
                    "name": "Smart",
                    "pm": "os_codapay:90",
                    "subchannel": "smart"
                },
                "os_gash_paypal": {
                    "channel": "gash",
                    "currencyType": ["HKD", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/oversea_web/static/images/channels/logo_paypal.png",
                    "icon_pc": "https://cdn.midasbuy.com/oversea_web/static/images/channels/logo_paypal.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/oversea_web/static/images/channels/logo_paypal.png",
                    "name": "PayPal",
                    "payParams": {
                        "channel": "gash",
                        "newtab": 1,
                        "subchannel": "paypal"
                    },
                    "pm": "os_gash:18",
                    "subchannel": "paypal"
                }
            };
            var CHANNEL_FILTER = {
                "os_credit_card": {
                    "midasbuy-hk-pubgm": "1"
                },
                "os_upoint": {
                    "[a-z]{2,10}-[a-z]{2,10}-[a-z]{2,10}": "0.8"
                }
            };
            var GAME_CONFIG = {
                "AMSInitConfig": {
                    "initParams": {
                        "sAMSAppId": "IEG-AMS-11576",
                        "sAMSVersion": "2.0",
                        "sCloudApiName": "ams.gameattr.sidip",
                        "sServiceType": "pubgmobile"
                    },
                    "url": "https://mrms.igamecj.com/main/do"
                },
                "allowCountry": ["ps", "ot", "id", "th", "ph", "my", "mm", "kh", "la", "hk", "sg", "ru", "tr", "gr", "ua", "br", "eg", "sa", "kw", "qa", "ae", "iq", "dz", "bh", "ly", "ma", "se", "nl", "om", "tn", "za", "pk", "bd", "pl", "au", "gb", "fr", "it", "de", "ch", "es", "mx", "lk", "kz", "nz", "fi", "no", "dk", "cl", "us", "qt", "at"],
                "appKey": "iAB7crB9faSd9TPNgCsSlhbltWaY8z8P",
                "appid": "1450015065",
                "appkey": "iAB7crB9faSd9TPNgCsSlhbltWaY8z8P",
                "appkey_sandbox": "ElJpeCnJuZHsXnf9rTqerPuPTxJG4vin",
                "basicCardPid": "1603135",
                "cacheCharac": false,
                "drm_group_map": {
                    "GOODS201230150621400": {
                        "buyType": "bg",
                        "country": ["id", "my", "th", "ph"],
                        "end": "2022-8-31 12:00:00"
                    },
                    "IN_BD": {
                        "country": ["in", "bd", "pk"],
                        "end": "2020-02-16 23:59:59"
                    },
                    "mena_invite": {
                        "country": ["iq", "eg"],
                        "end": "2020-01-20 23:59:59"
                    },
                    "sea_invite": {
                        "country": ["id", "my", "th", "mm", "sg", "la", "ph", "kh", "hk"],
                        "end": "2020-02-16 23:59:59"
                    },
                    "tr_limit": {
                        "country": ["tr1"],
                        "end": "2020-11-26 15:59:59",
                        "start": "2019-09-27 00:00:00"
                    }
                },
                "drm_info": {
                    "groupid": "check_in"
                },
                "fb_tdk": {
                    "group1": {
                        "countrys": ["id", "my", "th", "mm", "sg", "la", "ph", "kh"],
                        "fb_desc": "Invite friends to make a purchase on Midasbuy  and Both of you will be rewarded!",
                        "fb_image": "https://cdn.midasbuy.com/events/invite/pubgm/group1/images/invite_500_300.png",
                        "fb_sitename": "MidasBuy Top-Up Center",
                        "fb_title": "Rebate Fever of PUBG Mobile !",
                        "pop_ad_image_path": "https://cdn.midasbuy.com/oversea_web/static/images/ads/images"
                    },
                    "group2": {
                        "countrys": ["in"],
                        "fb_desc": "Invite friends to make a purchase on Midasbuy  and Both of you will be rewarded!",
                        "fb_image": "https://cdn.midasbuy.com/events/invite/pubgm/group2/images/invite_500_300.png",
                        "fb_sitename": "MidasBuy Top-Up Center",
                        "fb_title": "Rebate Fever of PUBG Mobile !",
                        "pop_ad_image_path": "https://cdn.midasbuy.com/events/invite/pubgm/group2/images"
                    },
                    "group3": {
                        "countrys": ["br"],
                        "fb_desc": "Invite friends to make a purchase on Midasbuy  and Both of you will be rewarded!",
                        "fb_image": "https://cdn.midasbuy.com/events/invite/pubgm/group5/images/invite_500_300.jpg",
                        "fb_sitename": "MidasBuy Top-Up Center",
                        "fb_title": "Rebate Fever of PUBG Mobile !",
                        "pop_ad_image_path": "https://cdn.midasbuy.com/events/invite/pubgm/group5/images"
                    }
                },
                "fbappid": "",
                "gameId": "1320",
                "gameShortUrl": "pubgm",
                "homepageSocialConfig": {
                    "href": "https://www.facebook.com/groups/814628952229951",
                    "image": "https://cdn.midasbuy.com/images/s23_1005x2709bd8ce1e.jpg"
                },
                "images": {
                    "contract_ad_image": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-icon.png",
                    "contract_fail": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-fail-icon.png",
                    "contract_loading": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/save-card-loading-dian.png",
                    "contract_success": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-suc-icon.png",
                    "currency": "https://cdn.midasbuy.com/images/item-179be42ef.png",
                    "currencyIcon": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
                    "currencyIconInShop": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
                    "currencyIconMap": [{
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546007887MVeNUtB6.png",
                        "max": "299"
                    }, {
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546030876PIvqwGaa.png",
                        "max": "599",
                        "min": "300"
                    }, {
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546041426W8hmErMS.png",
                        "max": "1499",
                        "min": "600"
                    }, {
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546052747L5gSu7VB.png",
                        "max": "2999",
                        "min": "1500"
                    }, {
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546061912PLgMlY23.png",
                        "max": "5999",
                        "min": "3000"
                    }, {
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546071746KqkIhrzG.png",
                        "min": "6000"
                    }],
                    "currencySmallIcon": "https://cdn.midasbuy.com/images/apps/pubgm/24_24d2c7b78c.png",
                    "download": "https://cdn.midasbuy.com/images/gamedownload6d44292c.png",
                    "gameLogo": "https://cdn.midasbuy.com/images/apps/pubgm/PUBGM_LOGO.png",
                    "guideImg": {
                        "p01": "https://cdn.midasbuy.com/images/apps/pubgm/guide001.png",
                        "p02": "https://cdn.midasbuy.com/images/apps/pubgm/guide002.png",
                        "p03": ""
                    },
                    "indexPageImg": "https://cdn.midasbuy.com/images/5c53a457-3eb8-42ea-98be-e5547bf2cfec18df8b80.png",
                    "item": "https://cdn.midasbuy.com/images/%E7%B2%BE%E8%8B%B1%E5%8D%A1_%EF%BC%88128x128%EF%BC%893b99bb47.png",
                    "promotions": "https://cdn.midasbuy.com/images/%E7%A9%BA%E6%8A%95%E7%AE%B1fca9cbf0.png",
                    "redeem": "https://cdn.midasbuy.com/images/item-25a68966f.png",
                    "resellerImg": {
                        "tr": "https://cdn.midasbuy.com/images/apps/pubgm/1596080058217RiIQzc9r.png"
                    },
                    "resultBgImg": "https://cdn.midasbuy.com/images/apps/pubgm/PUBGM_bachground.png",
                    "subscribe": ""
                },
                "indexPage": {
                    "default": "homepage"
                },
                "invited_country": ["hk", "id", "kh", "la", "mm", "my", "ph", "sg", "th", "tr", "gb", "fr", "de", "pk"],
                "isGame": 1,
                "isHot": 1,
                "isPubg": 1,
                "jifen_appkey": "BeXQExMrfxM4qcbeCEPeuNeVRPjJtRIZ",
                "jifen_appkey_sandbox": "VkCZ9gD1Bb78Ffj1UDhQwGvgGeNpykSx",
                "links": {
                    "downloadlink": "https://www.pubgmobile.com/",
                    "facebookLink": "https://www.facebook.com/midasbuy",
                    "feedback": "mailto:help@midasbuy.com",
                    "gamelogoLink": "https://www.pubgmobile.com",
                    "officialwebsite": "https://www.pubgmobile.com/",
                    "privacystatement": "http://www.pubgmobile.com/privacy.html",
                    "supplementaryTerms": "https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html",
                    "termofservice": "http://www.pubgmobile.com/terms.html"
                },
                "msdkUrl": "http://srvapi.itop.qq.com:6516/v1.0/user/getOpenidByBusiness",
                "name": "PUBG_全球版",
                "needActiveData": 1,
                "noShowPriceProductIdArray": ["Weekly_special_gift_package", "Wild_Ambition_package", "Daily_discount_package1", "Daily_discount_package2", "Daily_discount_package3", "Daily_discount_package4", "Daily_discount_package5", "Daily_discount_package6"],
                "offerid_jifen": "1450018035",
                "pf": "xxx-v2-android-midasweb",
                "pf_jifen": "xxx-v2-android-midasweb",
                "plusCardPid": "1603136",
                "previewCountry": [],
                "productNotInShop": ["Enraged_Unicorn_cover", "Enraged_Unicorn_Set", "Lobster_Set", "Lobster_Cover", "Adorable_Panda_Suit", "Summer_Festival_Bandana", "Summer_Festival_Set", "Forest_Warrior_Set", "Ski_Patrol_Set", "Goth_Punk_Set", "Seeing_Red_Set", "Red_Menace_Outfit", "Lethal_Butterflies_Set", "Cobalt_Storm_Backpack", "Desert_Range_Set", "Scarlet_Beast_Parachute", "Yeti_Pan", "Yeti_Parachute", "Bling_Glasses", "Ice_Hockey_Crowbar", "Desert_Troops_Mask", "Desert_Troops_Baseball_Cap", "Barmaid_Top", "Barmaid_Skirt", "Psycho_Jester_Top", "Psycho_Jester_Pants", "Psycho_Jester_Boots", "Elite_Operative_Sunglasses", "15DAYS_Jungle_M416", "30DAYS_Neon_Destroyer_AUG", "30DAYS_Lightning_AWM", "30DAYS_PCircus_M249", "30DAYS_The_Skulls_UMP45", "30DAYS_Neon_Destroyer_M16A4", "30DAYS_Drifte_UZI", "15DAYS_Tidal_Wave_SCAR_L", "30DAYS_White_Rabbit_P18C", "30DAYS_Space_Travel_S686", "30DAYS_Neon_AWM", "Corn_Suit", "Corn_Cover"],
                "redeemTip": {
                    "in": "3. By clicking “OK”, you agree to be bound by <a target=\"blank\" href=\"//www.pubgmobile.com/gamecredits/terms.html\">“PUBG Mobile Game Credit Cards (India)-Terms and Condition.”</a>"
                },
                "redeemlogin": "*",
                "risk_control_error_code_array": {
                    "area_block_err_code": ["12217", "12200", "12201", "12202", "12204", "12186", "12200", "12201", "12202", "12204"],
                    "only_tips_block_err_code": ["12184"],
                    "pay_too_frequent_err_code": ["12168", "12209", "12162", "12164"]
                },
                "seasonBasicCardPid": "1603135",
                "seasonCardPid": ["1603135", "1603136"],
                "seasonCardStartTime": "2020-01-10-02-00-00",
                "seasonPlusCardPid": "1603136",
                "sellCurrency": ["ps", "fi", "ot", "id", "th", "ph", "my", "mm", "kh", "la", "hk", "sg", "tw", "in", "ru", "tr", "br", "eg", "sa", "kw", "qa", "ae", "iq", "dz", "bh", "ma", "se", "ua", "gr", "nl", "om", "tn", "za", "pk", "bd", "pl", "ly", "au", "kz", "mx", "lk", "gb", "nz", "fr", "de", "it", "es", "ch", "no", "dk", "us", "qt", "at", "cl"],
                "sellGoods": ["ps", "ot", "kz", "id", "hk", "kh", "au", "pk", "ph", "mm", "my", "la", "sg", "lk", "th", "tw", "eg", "bh", "bd", "om", "kw", "iq", "ae", "sa", "qa", "fi", "no", "nl", "pl", "ru", "ch", "se", "tr", "gb", "br", "dk", "de", "mx", "fr", "it", "qt", "ps", "cl"],
                "sellRedeem": ["ot", "id", "ph", "in", "tr", "sa", "kw", "qa", "ae", "iq", "dz", "bh", "ly", "ma", "om", "kh", "tn", "th", "za", "my", "tw", "hk", "mm", "my", "sg", "th", "pk", "bd", "qt", "la", "cl"],
                "short_openid_rule": "^[1-9]\\d+$",
                "short_openid_type": "idip",
                "showPromotions": "*",
                "skey": "7f4b0c0e0c95d89636a71b2afeefd39a",
                "status": 1,
                "supplementaryTermsCountryList": ["GB", "UK", "DE", "FR", "ES", "IT", "CH", "SE", "NZ", "PL", "DK", "NO", "FI", "GR", "PT", "AT"],
                "template": "v2",
                "titleName": "PUBG Mobile",
                "type": "save",
                "zoneid": "1",
                "zoneid_jifen": "1",
                "zoneid_partition_map": {
                    "1": {
                        "area": "1",
                        "partition": "1",
                        "platid": "1"
                    }
                }
            };
            var MarketCyclicGiftList = [];
            var isMarketCyclicByBusiness = false;
            window.risk_control_error_code_array = {
                "area_block_err_code": ["12217", "12200", "12201", "12202", "12204", "12186", "12200", "12201", "12202", "12204"],
                "only_tips_block_err_code": ["12184"],
                "pay_too_frequent_err_code": ["12168", "12209", "12162", "12164"]
            };
            window.noComplianceCountryList = ["VN", "VNG"];
            window.complianceWithBirthCountryList = ["AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE", "GB", "IS", "LI", "NO", "CH", "IN", "KR", "RU", "TR", "US", "OT"];
            window.complianceWithDataCountryList = ["AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE", "GB", "IS", "LI", "NO", "CH", "OT"];
            window.buylimits = {
                "group1": {
                    "country": ["in", "tr"],
                    "minage": 18
                },
                "group2": {
                    "country": "*",
                    "minage": 18
                }
            };
            window.needActiveData = 1;
            window.defaultShowNum = 6;
            window.showRedeemChannel = 'false' === 'true';
            window.forceLoginData = {};
            window.needSupplementaryTerms = 'false' === 'true';
            window.agreementArray = ["By ticking this box, you confirm that you have read and agreed to the Midasbuy <a class=\"link\" data-link='termsOfServicesLink' target='_blank' href='http://www.pubgmobile.com/terms.html'>Terms of Services</a> and understand how it applies to your use of Midasbuy.", "By ticking this box, you confirm that you have read and agreed to the Midasbuy <a class=\"link\" data-link='privacyPolicyLink' target='_blank' href='http://www.pubgmobile.com/privacy.html'>Privacy Policy</a>  and understand how it applies to your use of Midasbuy.", "By ticking this box, you agree to transfer your data outside of the European Economic Area. Midasbuy is a product offered by HIGH MORALE DEVELOPMENTS LTD. , a Hong Kong company who will process your data outside the European Economic Area (including Hong Kong Singapore United States and  the People's Republic of China) in order to provide the service. Please note that there are risks in such a transfer including your data being subject to differing legal regimes which may not afford it the same level of protection as that available in the country in which you are located. For more information please see our <a class=\"link\" data-link='privacyPolicyLink' target='_blank' href='http://www.pubgmobile.com/privacy.html'>Privacy Policy</a>.", " By ticking this box, you confirm that you have read and agreed to the <a class=\"link\" data-link=\"pubgmSupplementaryTermsLink\" target='_blank' href='https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html'>Supplementary Terms</a> and understand how it applies to your purchase and use of virtual goods and virtual currency in Playerunknown's BattleGround Mobile. These terms will be binding between you and Proxima Beta PTE. Limited.", "You hereby consent to immediate performance of the contract and acknowledge that you will lose your right of withdrawal from the contract once the download or use of the virtual goods and/or virtual currency has commenced.", "By ticking this box, you confirm that you agree to the Midasbuy <a class=\"link\" data-link='termsOfServicesLink' target='_blank' href='http://www.pubgmobile.com/terms.html'>Terms of Services</a>、<a class=\"link\" data-link='privacyPolicyLink' target='_blank' href='http://www.pubgmobile.com/privacy.html'>Privacy Policy</a> and <a class=\"link\" data-link=\"pubgmSupplementaryTermsLink\" target='_blank' href='https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html'>Supplementary Terms</a>."];
            window.reglimits = {
                "group1": {
                    "country": ["in", "tr"],
                    "minage": 18
                },
                "group2": {
                    "country": "*",
                    "minage": 18
                }
            };
            window.channelRestore = {
                "default": {
                    "helpBtn": "OK",
                    "helpDesc": "The payment channel system is under maintenance, please choose another payment method",
                    "helpTitle": "Announcement"
                }
            };
            window.images = {
                "contract_ad_image": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-icon.png",
                "contract_fail": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-fail-icon.png",
                "contract_loading": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/save-card-loading-dian.png",
                "contract_success": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-suc-icon.png",
                "currency": "https://cdn.midasbuy.com/images/item-179be42ef.png",
                "currencyIcon": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
                "currencyIconInShop": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
                "currencyIconMap": [{
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546007887MVeNUtB6.png",
                    "max": "299"
                }, {
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546030876PIvqwGaa.png",
                    "max": "599",
                    "min": "300"
                }, {
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546041426W8hmErMS.png",
                    "max": "1499",
                    "min": "600"
                }, {
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546052747L5gSu7VB.png",
                    "max": "2999",
                    "min": "1500"
                }, {
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546061912PLgMlY23.png",
                    "max": "5999",
                    "min": "3000"
                }, {
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546071746KqkIhrzG.png",
                    "min": "6000"
                }],
                "currencySmallIcon": "https://cdn.midasbuy.com/images/apps/pubgm/24_24d2c7b78c.png",
                "download": "https://cdn.midasbuy.com/images/gamedownload6d44292c.png",
                "gameLogo": "https://cdn.midasbuy.com/images/apps/pubgm/PUBGM_LOGO.png",
                "guideImg": {
                    "p01": "https://cdn.midasbuy.com/images/apps/pubgm/guide001.png",
                    "p02": "https://cdn.midasbuy.com/images/apps/pubgm/guide002.png",
                    "p03": ""
                },
                "indexPageImg": "https://cdn.midasbuy.com/images/5c53a457-3eb8-42ea-98be-e5547bf2cfec18df8b80.png",
                "item": "https://cdn.midasbuy.com/images/5ce19d42-d79e-4201-8f77-650070819ce660c2f38b.png",
                "promotions": "https://cdn.midasbuy.com/images/%E7%A9%BA%E6%8A%95%E7%AE%B1fca9cbf0.png",
                "receiveItemsGuideImg": ["https://cdn.midasbuy.com/images/123456e556e51e.png", "https://cdn.midasbuy.com/images/23456fed9016a.png"],
                "redeem": "https://cdn.midasbuy.com/images/item-25a68966f.png",
                "resellerImg": {
                    "tr": "https://cdn.midasbuy.com/images/apps/pubgm/1596080058217RiIQzc9r.png"
                },
                "resultBgImg": "https://cdn.midasbuy.com/images/apps/pubgm/PUBGM_bachground.png",
                "rpCouponImages": "https://cdn.midasbuy.com/oversea_web/static/images/codmicon/coupon-2.png",
                "subscribe": ""
            };
            window.pfLimit = "";
        </script>
        <style>
            /* 强制登录按钮样式 */
            .forcelogin-btn {
                line-height: 1;
                font-size: 14px;
                color: #fff;
                text-align: center;
                background: #3A7BFC;
                cursor: pointer;
                padding: 16px 20px;
            }

            .fade-enter-active,
            .fade-leave-active {
                transition: opacity .5s;
            }

            .fade-enter,
            .fade-leave-to {
                opacity: 0;
            }

            /* 使用vue 的 transition 需要用到 v-show 所以就将display:none 覆盖 使用v-show来控制 */
            .pay-type-box .choose-pay-box {
                display: block;
            }

            /* mobile使用淡出效果 */
            @media screen and (max-width: 768px) {

                .fade-select-enter-to,
                .fade-select-leave {
                    opacity: 1;
                }

                .fade-select-enter-active,
                .fade-select-leave-active {
                    transition: opacity .5s;
                }

                .fade-select-enter,
                .fade-select-leave-to

                /* .fade-leave-active below version 2.1.8 */
                    {
                    opacity: 0;
                }

                .forcelogin-btn {
                    width: 100%;
                }
            }

            /* pc使用slide toggle效果 */
            @media screen and (min-width: 769px) {

                .fade-select-enter-to,
                .fade-select-leave {
                    /* 这个高度需要注意跟重构那边同步 */
                    max-height: 184px;
                    overflow: hidden;
                }

                .fade-select-enter-active,
                .fade-select-leave-active {
                    transition: max-height .5s;
                }

                .fade-select-enter,
                .fade-select-leave-to

                /* .fade-leave-active below version 2.1.8 */
                    {
                    max-height: 0;
                    overflow: hidden;
                }
            }

            .toast-bg {
                z-index: 999999998;
                position: fixed;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                opacity: 0.8;
                background: #131A3C;
            }
        </style>
        <div id="app" style="display: none">
            <nav-header :header-box="false"></nav-header>




            <div class="banner-wrap">


                <div id="swiper" class="swiper-container" style="height: auto;overflow: visible;">
                    <div class="swiper-wrapper swiper-wrapper1" id="swiper-wrapper">
                        <div class="swiper-slide" style="background: url(https://cdn.midasbuy.com/images/1920x240_0296a5c827.jpg) no-repeat center;background-size: cover;">
                            <a class="banner-link">
                                <div class="img-box">
                                    <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://cdn.midasbuy.com/images/1920x240_0296a5c827.jpg" alt="img" cr="banner" width="auto" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 去掉蒙层 -->

                <div class="nav-box">
                    <div class="main" data-tab="tab-list">
                        <ul>

                            <li class="list" cr="game_zone">
                                <a>PUBG Mobile</a>
                            </li>


                            <li class="list tab-count" :class="{ active: currentHightLight === 'currency'}">
                                <a>Purchase</a>
                            </li>


                            <li class="list tab-count" :class="{ active: currentHightLight === 'redeem'}">
                                <a>Redeem</a>
                            </li>


                            <li class="list tab-count" :class="{ active: currentHightLight === 'items'}">
                                <a>Shop</a>
                            </li>



                            <li class="list tab-count ">
                                <a>Promotions</a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

            <script type="application/javascript">
                function setNavPosition() {
                    $('.banner-wrap .nav-box li').each(function() {
                        if ($(this).hasClass('active')) {
                            var index = $('.banner-wrap .nav-box li').index(this);
                            var homeElementWidth = $('.banner-wrap .nav-box li').get(0).getBoundingClientRect().width;
                            var windowWidth = window.innerWidth;
                            var outerWidth = $(this).outerWidth(true);
                            // 中间值
                            var left = (windowWidth - outerWidth) / 2 - 20;
                            var offsetleft = $('.banner-wrap .nav-box li').get(index).offsetLeft;
                            var target = left - offsetleft;
                            if (target > 0) {
                                $('.banner-wrap .nav-box .main').get(0).scrollLeft = 0;
                                return;
                            }
                            $('.banner-wrap .nav-box .main').get(0).scrollLeft = 200;
                        }
                    })
                }
                $(function() {
                    setNavPosition();
                });
            </script>

            <div class="content">
                <div class="x-main">



                    <message v-bind:is-notification="0" v-bind:is-rtl="0" notify-title="一元抽奖三期-斋月" text="RECHARGE ONE DOLLAR ON MIDASBUY TO GET PERMANENT ITEM!!" color="orange" prop-img="https://cdn.midasbuy.com/images/WEP_QBZ_int_019a60920a3.png" market-href="https://www.midasbuy.com/apps/activity/views/oneDollarDraw?appid=1450015065&amp;eventid=v202203&amp;from=__mds_buy_banner.topupmessage" scroll-time="" @show="showMessageBox">
                        <template #more>more</template>
                    </message>

                    <message-box ref="messageBox" title="一元抽奖三期-斋月" desc="RECHARGE ONE DOLLAR ON MIDASBUY TO GET PERMANENT ITEM!!" btn="Understand" @ok="closeMessageBox"></message-box>


                    <div class="section tab-nav-box sub-game-account sub-id g-clr">
					<ul>
					<li class="active">Player ID Verification<em class="help-icon"></em></li>
					</ul>
					<div class="tab-box">
					<div class="box id-box active">
					<form action="home.php" method="post">
					<div class="n-box">
					<div class="input-box have-select-input-box">
					<input type="number" name="playid" maxlength="20" placeholder="Please enter Player ID" class="input" required>
					</div>
					<button type="submit" class="btn">OK</button>
					</div>
					</form>
					<p class="auxiliary-tips">Currently only supports top-up service for wecomics Android users</p>
					</div>
					</div>
					</div>
					
                    <div class="pay-type-box payment g-clr">
                        <div class="title g-clr">
                            <p>Payment Method</p>
                        </div>

                        <tabv2 ref="tab" :tabs_data="tabsData" v-on:active="onTabActive" :select_tab="selectTab" :lan="lanRes.midascoinChannel" :defaultshownum="defaultShowNum" @hideallchilds="hideAllChilds" payment_tip="" select_text="Choose" select_title="Choose The Bank" :showall="showAll" :show-help-pop.sync="showHelpPop" :channel-help.sync="channelHelp"></tabv2>
                        <div class="other-paymen-box" v-show="tabsData.length > defaultShowNum">
                            <p class="other-payment" @click="toggleShow" :class="{active: showAll}">Other Payment Method</p>
                        </div>
                    </div>
                    <div class="section game-pay-section">
                        <div class="title g-clr">
                            <p>Select Product</p>
                        </div>
                        <div :class="vipClass" class="section vip-market-message g-clr" style="display:block">
                            <div class="mess">
                                <em class="icon"></em>
                                <div ref="vipMsgBoxRef" class="auto-roll-box">
                                    <div :class="['auto-roll', { play: scrollVipMsg } ]">
                                        <p ref="vipMsgRef">{{ lanRes.vipPromotionMessage }}</p>
                                        <p v-if="scrollVipMsg">{{ lanRes.vipPromotionMessage }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <listv2 v-bind:datas="currentList" :selected-product="selectProduct" v-on:active="onSelectProduct" ref="productlist"></listv2>
                    </div>
                </div>
                <div ref="taxbg" class="taxes-bg" :style="{display: showTaxBg ? 'block' : 'none'}"></div>
                <div class="clause-bg" style="display: none;"></div>
                <div class="pay-sec">
                    <div class="id-mess" v-if="userInfo">
                        <div class="x-main">
                            <p> {{ getPayUserMsg }} </p>
                        </div>
                    </div>
                    <div class="x-main">
                        <taxes-pop :lanres="lanRes" :current_product="currentProduct" :pay_available="!isEditStatus" :is_show.sync="showTaxesPop" @handle_pay="pay"></taxes-pop>
                        <div class="right">
                            <div class="model-bubble" :style="{ display: showVipPop ? 'block' : 'none' }"> {{ lanRes.vipPopContent }} </div>
                            <div class="pay-id-mess pc-show-mod" v-if="userInfo">
                                <p> {{ getPayUserMsg }} </p>
                            </div>
                            <div class="pay-mess" @click.stop="queryShowTaxPop">
                                <div class="t">
                                    <p class="label">Total:&nbsp;</p>
                                    <p class="total">{{currentProduct.fprice}}</p>
                                </div>
                                <div class="b">
                                    <p class="label taxes-label" @mouseenter.stop.prevent="queryShowTaxPop($event)" @mouseleave.stop.prevent="labelMouseLeave">
                                        <span class="taxes">Price includes taxes</span>
                                    </p>
                                </div>
                            </div>
                            <div class="pay-btn" @click="onClickPayBtn" :class="{ disable: isEditStatus || lockPayBtn }">
                                Pay now
                                <div class="vip-label" v-if="user">
                                    <img :src="vipIconSrc" alt="img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <help-pop :helpPopContent="getHelpPopContent" :showHelpPop.sync="showHelpPop"></help-pop>
            <div class="pop-mode-box" v-bind:style="{display:showErrorBox?'block':'none'}" style="display: none">
                <div class="pop-mode pay-fail-pop show">
                    <div class="mess">
                        <p>{{ payErrorInfo ? payErrorInfo : 'Payment failed.' }}</p>
                    </div>
                    <div class="btn-wrap">
                        <div class="btn btn-l" cr="error_back" @click="showErrorBox=!showErrorBox">Back</div>
                    </div>
                </div>
            </div>
            <rchannel-box ref="rchannelPop" v-on:clickbtn="onClickRchannelPop" v-bind:lansres="lansres" v-bind:clist="recommendChannels"></rchannel-box>
            <wechat-pop ref="wechatPop" :show.sync="showWechatPop" :channel="activeTab" :css="cssObj"></wechat-pop>
            <iframe-pop ref="iframePop" :show.sync="showIframePop" :channel="activeTab" :css="cssObj"></iframe-pop>
            <alertbox ref="alertbox" title="Tip" desc="Please refresh and try again." btn="OK" v-on:ok="refreshPage"></alertbox>
            <pop-mode ref="popMode" v-model="popModeOption"></pop-mode>
            <toast ref="toast" v-model="toastOption"></toast>
            <pop-input :option="popInputOption"></pop-input>

            <div class="pop-mode-box" style=" display: none; " v-bind:style="{display:showResPop?'block':'none'}">
                <div class="pop-mode" style="display:none;" :style="{ display: resQueryPop ? 'block' : 'none' }">
                    <div class="mess">
                        <p class="warn-icon">Please complete the payment soon</p>
                    </div>
                    <div class="btn-wrap btn-wraps">
                        <div class="btn cancel-btn" @click="cancel">Back</div>
                        <div class="btn comfirm-btn" @click="queryRes(0)"> Payment completed</div>
                    </div>
                </div>
                <div class="pop-mode" style="display:none;" :style="{display: noResFound ? 'block': 'none'}">
                    <div class="mess have-desc">
                        <p class="warn-icon"> Payment result not found</p>
                    </div>
                    <div class="desc min-desc">
                        <p> There might be some lag. If the payment has been completed, please check the game later.</p>
                    </div>
                    <div class="btn-wrap">
                        <div class="btn" @click="iknow">OK</div>
                    </div>
                </div>

            </div>
            <!-- 协议弹窗 -->
            <compliance-clause-pop report_prefix="payment_" :lanres="lansres" :show.sync="showClausePop" :checked-clause.sync="checkedAgreement" :confirm-clause-handler="handleConfirmPurchase"></compliance-clause-pop>
            <!-- 生日弹窗 -->
            <birthday-pop report_prefix="payment_" :lan="lansres" :show_birthday_pop.sync="showBirthdayPop" @handle_next_step="handleNextStep"></birthday-pop>
            <!-- 用户id填写指引弹窗 -->
            <found-id-pop :title="lanRes.findIdTitle" :guide-list="findIdGuideList" :btn-text="lanRes.findIdButton" :show.sync="showFindOpenid"></found-id-pop>
            <footer-comp></footer-comp>
            <!-- 使用签约支付相关弹窗 -->
            <pay-with-contract-pop @pay="pay" @pop="showContractPayRedirectPop"></pay-with-contract-pop>
            <pat-face-pop-modal ref="patFacePopModal" :lan="lansres.landingPopModal"></pat-face-pop-modal>
        </div>
		
<div class="found-id-pop" style="display: none;">
<div class="pop-boxs" style="display: block;">
<p class="title">Couldn't find your Player ID?</p>
<div class="close-btn"></div> <!--- close-btn --->
<div class="list-box">
<div class="list"><p class="label">1. Enter the game</p> <img src="https://cdn.midasbuy.com/images/apps/pubgm/guide001.png" alt="img"></div> <!--- list --->
<div class="list"><p class="label">2. Find your player ID</p> <img src="https://cdn.midasbuy.com/images/apps/pubgm/guide002.png" alt="img"></div> <!--- list --->
</div> <!--- list-box --->
<div class="btn-wrap">
<div class="btn">OK</div>
</div> <!--- btn-wrap --->
</div> <!--- pop-boxs --->
</div> <!--- found-id-pop --->

        <script>
            window.tfp = function() {}
        </script>
        <script>
            loadJS(document, 'script', 'kepler', 'https://kepler.captcha.qcloud.com/tencent-kepler.js?appId=9865970', {
                onload: function() {
                    window.TencentKepler && window.TencentKepler.predict && window.TencentKepler.predict(function(WebTicket) {
                        window.___Kepler_WebTicket = WebTicket;
                    });
                }
            });
        </script>
        <script>
            window._SERVER_DATA = {};
            window.useNodeVipcenter = 1;
            window.__NavState = {
                bubblePopConfig: {
                    "bubbleShow": false,
                    "href": "https://www.midasbuy.com/midasbuy/{0}/event/register/pubgm?lan=en&from=__mds_buy_bubble",
                    "promoteShow": false,
                    "repalce": false
                },
                blockLogin: 0,
                blockcountry: 0,
                latestRelease: {},
                countryInfo: {
                    "area": "Others",
                    "cgi_language": "en",
                    "cname": "其他",
                    "currency_config": {
                        "currencySymbol": " USD"
                    },
                    "currency_type": "USD",
                    "flag": "https://cdn.midasbuy.com/images/30ee99398.png",
                    "iso": {
                        "language": "en",
                        "region": "ot"
                    },
                    "lang": ["en"],
                    "links": {
                        "cookiePolicy": "https://cdn.midasbuy.com/oversea_web/static/cookie.html",
                        "feedback": "mailto:help@midasbuy.com",
                        "game_fb": "https://www.facebook.com/midasbuy",
                        "media_fb": "https://www.facebook.com/midasbuy",
                        "privacystatement": "https://www.midasbuy.com/oversea_web/static/privacy.html",
                        "termofservice": "https://www.midasbuy.com/oversea_web/static/terms.html"
                    },
                    "midasbuyArea": "Other",
                    "name": "Others",
                    "status": "1"
                },
                showRecordEntrance: true,
                showFBLike: false,
                links: {
                    "downloadlink": "https://www.pubgmobile.com/",
                    "facebookLink": "https://www.facebook.com/midasbuy",
                    "feedback": "mailto:help@midasbuy.com",
                    "gamelogoLink": "https://www.pubgmobile.com",
                    "officialwebsite": "https://www.pubgmobile.com/",
                    "privacystatement": "http://www.pubgmobile.com/privacy.html",
                    "supplementaryTerms": "https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html",
                    "termofservice": "http://www.pubgmobile.com/terms.html"
                },
                lanRes: {
                    "accountSettings": "View Account",
                    "cardEvent": "Card Payment Event Center",
                    "cardManage": "Manage Cards",
                    "checkVipStatus": "Check your status after log in",
                    "events": "Event Center",
                    "followFB": "Follow Midasbuy",
                    "helpcenter": "Help Center",
                    "helpcenterLink": "https://cdn.midasbuy.com/oversea_web/faq/faq.html",
                    "index": "Home",
                    "login": "SIGN IN",
                    "logout": "Sign Out",
                    "midasVip": "Midasbuy VIP",
                    "myAccount": "My Account",
                    "newsCenter": "News",
                    "notifications": "Notifications",
                    "pcenter": "Account  Setting",
                    "register": "CREATE ACCOUNT",
                    "transactionRecord": "Transcation Record"
                },
                appDownloadConfig: {
                    "enable": true,
                    "gradually": "*",
                    "qrCode": "https://cdn.midasbuy.com/app/apk/Midasbuy_1.1.3.44_release_production-signed.png",
                    "url": "https://cdn.midasbuy.com/app/apk/Midasbuy_1.1.3.44_release_production-signed.apk"
                },
                showHomeEntry: true,
                sellRedeem: true,
                sellCurrency: true,
                sellSubscribe: false,
                sellGoods: true,
                showPromotions: true,
                titleName: "PUBG Mobile"
            }
            window.__CommonState = {
                enabled: {
                    "facebook_attention": true
                },
                rtl: 0,
                country: "ot",
                // 转化成大写
                ipCountry: "id".toUpperCase(),
                loginConfig: {
                    "bindOpenidReferrerRegExpList": ["/login-demo", "/apps/activity/"],
                    "enabledSig": true,
                    "sandboxSigKey": "9ch8L1CpTRZgi6W0ym9Yvuz53c48QRVj",
                    "sigKey": "WwwaKu5kbLeEHYvUO8C71ObfsBpP6ypf",
                    "stepConfirmList": ["KR"]
                }
            };
            window.__FooterState = {
                links: {
                    "downloadlink": "https://www.pubgmobile.com/",
                    "facebookLink": "https://www.facebook.com/midasbuy",
                    "feedback": "mailto:help@midasbuy.com",
                    "gamelogoLink": "https://www.pubgmobile.com",
                    "officialwebsite": "https://www.pubgmobile.com/",
                    "privacystatement": "http://www.pubgmobile.com/privacy.html",
                    "supplementaryTerms": "https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html",
                    "termofservice": "http://www.pubgmobile.com/terms.html"
                },
                lanRes: {
                    "advanceDeclare": "By using the website, you are agreeing to our <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>.",
                    "cookieCloseBtn": "Save and close",
                    "cookieConfirmTitle": "COOKIES CONFIRM",
                    "cookieOff": "OFF",
                    "cookieOn": "ON",
                    "cookieP1": "We use cookies that are necessary to provide the service and also other cookies, including third-party cookies for performance and analysis.<br>For more information on our cookie policy, please click <a target='_blank' href='https://cdn.midasbuy.com/oversea_web/static/cookie.html'>here</a>.",
                    "cookieP2": "These cookies are necessary to provide you with the service and to use some of its features, such as to facilitate transactions.",
                    "cookieP3": "These cookies are used to measure and analyse how the service is accessed, used, or is performing in order to provide you with a better   user experience and to maintain, operate and continually improve the service.",
                    "cookieP4": "These cookies allow the website to remember the settings you have made in the past.",
                    "cookiePolicy": "Cookie Policy",
                    "cookieT": "YOUR COOKIE PREFERENCES",
                    "cookieT2": "Necessary Cookies",
                    "cookieT3": "Performance / Analytics Cookies",
                    "cookieT4": "Functionality Cookies",
                    "copyright": "COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED.",
                    "countDownWord": "Closing in",
                    "cstips": "For customer service, please contact us via email help@midasbuy.com or Facebook inbox.",
                    "cstips1": "For customer service ",
                    "cstips2": "Please send email to help@midasbuy.com",
                    "facebook": "Facebook",
                    "feedback": "Feedback",
                    "followFB": "Follow Midasbuy",
                    "followUs": "Follow us on",
                    "nonEeaAcceptBtn": "Accept All Cookies",
                    "nonEeaCookieP1": "By using the website, you are agreeing to our <a class='link' target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>.",
                    "nonEeaCookieP2": "To provide our services to you, we use cookies on your device in accordance with our <a class='link' target='_blank' href='https://cdn.midasbuy.com/oversea_web/static/cookie.html'>Cookies Policy</a>. You can change your cookie settings by clicking on the ",
                    "nonEeaRejectBtn": "Reject Non-Essential Cookies",
                    "privacystatement": "Privacy Policy",
                    "subscribeEmailPop": {
                        "address": "Your Email address",
                        "btn": "Subscribe now",
                        "desc": "I‘d like to receive news and special offers from Midasbuy! Please send me exclusive deals and updates.",
                        "errorTip": "invalid email",
                        "title": "SUBSCRIBE TO LATEST NEWS"
                    },
                    "termofcookie": "Cookies Preference Centre",
                    "termofservice": "Terms of Service"
                },
                footerConfig: {
                    "bottomSocial": ["/([a-z]{3,10})/([a-z]{2})/homepage", "(com|vn)/([a-z]{3,10})/([a-z]{2})/?$", "/([a-z]{3,10})/([a-z]{2})/regionselect", "/([a-z]{3,10})/([a-z]{2})/news"],
                    "customerChatId": "327214881318350",
                    "disableFbFeedback": true,
                    "disableFeedBack": false,
                    "fbLanMap": {
                        "ar": "ar_AR",
                        "de": "de_DE",
                        "en": "en_US",
                        "es": "es_ES",
                        "fr": "fr_FR",
                        "hk": "zh_HK",
                        "id": "id_ID",
                        "pu": "pt_PT",
                        "ru": "ru_RU",
                        "th": "th_TH",
                        "tr": "tr_TR",
                        "tw": "zh_TW",
                        "vn": "vi_VN"
                    },
                    "openFbMessenger": true,
                    "socialConfigList": [{
                        "href": "https://www.facebook.com/midasbuy/",
                        "image": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-fb-new.png",
                        "name": "facebook"
                    }, {
                        "href": "https://www.instagram.com/midasbuy_top_up/",
                        "image": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-ins-new.png",
                        "name": "ins"
                    }, {
                        "href": "https://twitter.com/Midasbuyglobal",
                        "image": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-twitter-new.png",
                        "name": "twitter"
                    }, {
                        "href": "https://www.youtube.com/channel/UCVP9bUAXwBkYHcLHBA71zng",
                        "image": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-youtube-new.png",
                        "name": "youtube"
                    }]
                },
                defaultDisableGaCountryList: [],
                gtagConfig: {
                    "ga": "UA-21773189-2",
                    "gtm": "GTM-NSB6GPJ"
                },
                cookieControlCountryType: "nonEeaLowRiskCountry",
                nonEeaLowRiskCookiePopCountSeconds: 10,
            }
        </script>

        <script>
            var devMode = false
            // 自动上报的开关、版本等配置
            var reportConfig = {
                "pageConfig": {
                    "buy": "/([a-z]{3,10})/([a-z]{2})/buy",
                    "home": "/([a-z]{3,10})/([a-z]{2})/?$",
                    "homepage": "/([a-z]{3,10})/([a-z]{2})/homepage",
                    "news": "/([a-z]{3,10})/([a-z]{2})/news",
                    "propOrder": "/([a-z]{3,10})/([a-z]{2})/props_order",
                    "propShop": "/([a-z]{3,10})/([a-z]{2})/shop",
                    "redeem": "/([a-z]{3,10})/([a-z]{2})/redeem",
                    "regionSelect": "/regionselect",
                    "result": "/([a-z]{3,10})/([a-z]{2})/result"
                },
                "show": true,
                "version": "2.0.2"
            }
            // dom上报配置
            var autoReportConfig = {
                "click": {
                    "#cookie-agreement-pop > div.close-btn": [{
                        "action": ["ck"],
                        "format": "cookie_preference_close",
                        "page": "*"
                    }],
                    "#vue-footer > div.eea-pop > div > div.btn-box > div.btn.cancel-btn": [{
                        "action": ["ck"],
                        "format": "cookie_preference_close",
                        "page": "*"
                    }],
                    "#vue-footer > div.eea-pop > div > div.btn-box > div.btn.comfirm-btn": [{
                        "action": ["ck"],
                        "format": "cookie_preference_close",
                        "page": "*"
                    }],
                    "#vue-footer > div.eea-pop > div > div.close-btn": [{
                        "action": ["ck"],
                        "format": "cookie_preference_close",
                        "page": "*"
                    }],
                    "div.content > div > div.news-content-component > div.section.new-game-reservation-section:not(.promotions-section) > div.list-box > div.list": [{
                        "format": "newgame",
                        "page": ["news", "home"]
                    }],
                    "div.content > div > div.news-content-component > div.section.new-season-event-section > div.list-box > div.list": [{
                        "format": "newseason",
                        "page": ["news", "home"]
                    }],
                    "div.content > div > div.news-content-component > div.section.promotions-section > div.list-box > div.list": [{
                        "format": "promotions",
                        "page": ["news", "home"]
                    }]
                },
                "view": {
                    "#cookie-agreement-pop": [{
                        "action": ["view", "setPage"],
                        "format": "cookie_preference",
                        "page": "*"
                    }],
                    "#vue-footer > div.eea-pop": [{
                        "action": ["view", "setPage"],
                        "format": "cookie_preference",
                        "page": "*"
                    }]
                }
            }
        </script>
        <!-- 埋点上报sdk -->

        <script src="https://cdn.midasbuy.com/oversea_web/static/js/auto-report2.0.2.umd.js"></script>


        <!-- 提出login本身加载loginSdk -->

        <script src="https://cdn.midasbuy.com/oversea_web/static/js/loginSdk1.3.0.6329c5e4.js"></script>


        <script src="https://cdn.midasbuy.com/oversea_web/static/js/footer.00bc1ea5.js"></script>
        <script src="https://cdn.midasbuy.com/oversea_web/static/js/polyfills.e6e1e47d.js"></script>
        <script src="https://cdn.midasbuy.com/oversea_web/static/js/buypage.147cd0df.js"></script>
    </div>
    <script>
        //监听滚动停止
        var scrollT1 = 0;
        var scrollT2 = 0;
        var scrollTimer = null;
        var setPosition = function(isBottom) {
            if (isBottom) {
                if (setPosition.isBottom) {
                    return;
                }

                $('.pay-sec,.wrap').addClass('pay-sec-flex');
                $('.pay-sec').show();
                $('.footer').addClass('show').show();
                setPosition.isBottom = 1;

            } else {
                // if(!setPosition.isBottom){ return; }
                $('.pay-sec,.wrap').removeClass('pay-sec-flex');
                $('.footer').removeClass('show');
                setPosition.isBottom = 0;
            }
        }
        window.showClauseBg = function() {
            $('.clause-bg').show();
            $('.clause-box-pop').show();
        }
        window.hideClauseBg = function() {
            $('.clause-box-pop').hide();
            setTimeout(function() {
                $('.clause-bg').fadeOut();
            }, 100)
        }
        window.showBirthBox = function() {
            $('#birthBox').show();
            $('body').css({
                'overflow': 'hidden'
            });
        };

        window.hideBirthBox = function() {
            $('#birthBox').hide();
            $('body').css({
                'overflow': 'auto'
            });
        };

        function isScrollEnd() {
            scrollT2 = $(document).scrollTop();
            if (scrollT2 == scrollT1) {
                $('.follow').removeClass('scrollStar')
                clearTimeout(scrollTimer)
            }
        }
        $(function() {
            if ($(window).innerHeight() > $(document).height()) {
                setPosition(1);
            } else {
                $(window).on("scroll", throttle(function() {
                    var docHeight = $(document).height();
                    if ($('.wrap').hasClass('pay-sec-flex')) {
                        if ($(window).width() <= 768) {
                            docHeight = docHeight * 1 - 120;
                        } else {
                            docHeight = docHeight * 1 - 180;
                        }
                    }
                    var isBottom = Math.ceil($(window).scrollTop() + window.innerHeight) >= docHeight;
                    setPosition(isBottom);
                    // 移动端FB点赞处理
                    clearTimeout(scrollTimer)
                    $('.follow').addClass('scrollStar')
                    scrollTimer = setTimeout(isScrollEnd, 100)
                    scrollT1 = $(document).scrollTop()
                }, 200));
            }


            $('.clause-bg,.clause-box-pop .close').on('click', function() {
                window.hideClauseBg();
            });
        });
    </script>

<script>
(self.webpackChunk = self.webpackChunk || []).push([
    [3913], {
        14355: function(t, e) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = function(t, e) {
                var n = Object.prototype.toString.call(e).slice(8, -1);
                return null != e && n === t
            }
        },
        16957: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var i = n(32522),
                o = n(70106),
                r = n(39672),
                a = n(72226);
            e.default = function(t, e) {
                if (!a.default(t)) return e;
                var n = r.default(t);
                return 0 === n.length ? e : (e = o.default(n, e), t = i.default(t), e += /(\?|&)$/.test(e) ? '' + t : /\?/.test(e) ? '&' + t : '?' + t)
            }
        },
        39672: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var i = n(51422),
                o = n(72226);
            e.default = function(t) {
                if (!o.default(t)) return [];
                var n = [];
                return i.default(t, function(t, e) {
                    n.push(e)
                }), n
            }
        },
        75810: function(t, e) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var n = {
                get: function(t) {
                    t = document.cookie.match(new RegExp('(?:^|;\\s)' + t + '=(.*?)(?:;\\s|$)'));
                    return t ? t[1] : ''
                },
                set: function(t, e, n) {
                    void 0 === n && (n = {});
                    var i = new Date,
                        o = '*' === n.domain ? '' : n.domain || 'pay.qq.com',
                        r = n.path || '/',
                        a = n.time || 31536e7;
                    i.setTime(i.getTime() + a);
                    r = t + "=" + e + "; path=" + r;
                    o && (r += "; domain=" + o), n.ignoreTime || (r += "; expires=" + i.toUTCString()), document.cookie = r
                },
                del: function(t, e) {
                    (e = void 0 === e ? {} : e).time = -new Date, n.set(t, '', e)
                }
            };
            e.default = n
        },
        70106: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var i = n(51422);
            e.default = function(t, e) {
                return void 0 === e && (e = location.href), t instanceof Array || (t = [t]), e = e.replace(/[\r\n]/g, ''), i.default(t, function(t) {
                    e = (e = e.replace(new RegExp('(?:&' + t + '=[^&]*)', 'g'), '')).replace(new RegExp('(?:\\?' + t + '=[^&]*&?)', 'g'), '?')
                }), e
            }
        },
        51422: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var a = n(44953);
            e.default = function(t, e) {
                var n = 0;
                if (a.default(t))
                    for (var i = t.length, o = t[0]; n < i && !1 !== e.call(o, o, n, t); o = t[++n]);
                else
                    for (var r in t)
                        if (!1 === e.call(t[r], t[r], r, t)) break;
                return t
            }
        },
        37196: function(t, e) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var n = {};
            e.default = function(t, e, o) {
                return void 0 === t && (t = location.href), void 0 === e && (e = '&'), void 0 === o && (o = '='), t = t.replace(/.+?\?/, '').replace(/#.*/, ''), e = t.split(e), n[t] || (n[t] = e.reduce(function(e, t) {
                    var n = t.indexOf(o);
                    if (-1 < n) {
                        var i = t.substr(0, n);
                        if (i) {
                            n = t.substr(n + 1);
                            try {
                                e[i] = decodeURIComponent(n)
                            } catch (t) {
                                e[i] = n
                            }
                        }
                    }
                    return e
                }, {})), n[t]
            }
        },
        44953: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var i = n(14355);
            e.default = function(t) {
                return i.default('Array', t)
            }
        },
        72226: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var i = n(14355);
            e.default = function(t) {
                return i.default('Object', t) && null !== t
            }
        },
        9411: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var r = n(51422),
                a = n(72226);
            e.default = function(n, i) {
                if (!a.default(n)) return n;
                var o = {};
                return r.default(n, function(t, e) {
                    o[e] = i(t, e, n)
                }), o
            }
        },
        32522: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var a = n(72226);
            e.default = function(t, e) {
                if (void 0 === e && (e = !1), !a.default(t)) return '';
                var n, i, o, r = [];
                for (n in t) Object.prototype.hasOwnProperty.call(t, n) && void 0 !== t[n] && null !== t[n] && (i = e ? encodeURIComponent(n) : n, o = e ? encodeURIComponent(t[n]) : t[n], r.push(i + "=" + o));
                return r.join('&')
            }
        },
        77804: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(72410), n(23938), n(92571), n(83352), n(61013), n(95374), n(55849), n(63238), n(40895), n(52077), n(911), n(52327), n(72264), n(98010), n(48410);
            var o = i(n(77413)),
                r = i(n(45681)),
                a = i(n(63762)),
                s = function(t, e, n) {
                    if (n || 2 === arguments.length)
                        for (var i, o = 0, r = e.length; o < r; o++) !i && o in e || ((i = i || Array.prototype.slice.call(e, 0, o))[o] = e[o]);
                    return t.concat(i || Array.prototype.slice.call(e))
                },
                c = window.report,
                r = {
                    components: {
                        PlatSelect: o.default,
                        PartitionSelect: r.default
                    },
                    props: {
                        store: Object,
                        user: {
                            type: Object,
                            validator: function(t) {
                                return null === t || t.charac_name && t.userid
                            }
                        },
                        dlist: {
                            validator: function(t) {
                                return null === t || Array.isArray(t)
                            }
                        },
                        platforms: {
                            type: Object,
                            default: function() {
                                return {}
                            }
                        },
                        enableAutoSetScrollTop: Boolean,
                        lanres: {
                            type: Object,
                            default: function() {
                                return {}
                            }
                        },
                        showfindopenid: {
                            type: Boolean,
                            default: !0
                        },
                        showRoleSuggestion: {
                            type: Boolean,
                            default: !0
                        },
                        showEdit: {
                            type: Boolean,
                            default: !0
                        },
                        autoLoginSelected: {
                            type: Boolean,
                            default: !0
                        },
                        lightInput: {
                            type: Boolean,
                            default: !1
                        },
                        showSubmitBtn: {
                            type: Boolean,
                            default: !0
                        },
                        forceLogin: {
                            type: Boolean,
                            default: !1
                        }
                    },
                    data: function() {
                        var t, e, n;
                        return {
                            shortId: "",
                            errorTxt: "",
                            showDropDown: !1,
                            loading: !1,
                            dropDownLists: this.dlist || [],
                            selectType: "default",
                            plats: Object.keys((null === (t = this.platforms) || void 0 === t ? void 0 : t.data) || {}),
                            userInfo: null !== (t = this.user) && void 0 !== t && t.bindUserFromUrl || null !== (e = this.user) && void 0 !== e && e.logged ? this.user : null,
                            selectedInfo: {},
                            showDefaultRole: !(null !== (e = this.user) && void 0 !== e && e.bindUserFromUrl) || (null === (n = this.user) || void 0 === n ? void 0 : n.logged),
                            showModify: !!this.showEdit && !1 !== (null === (n = this.user) || void 0 === n ? void 0 : n.modify)
                        }
                    },
                    computed: {
                        roleSuggestionInfo: function() {
                            var t = this.showDefaultRole,
                                e = this.dlist,
                                n = this.showRoleSuggestion;
                            return t && e && e.length && n && (null === (n = this.user) || void 0 === n || !n.logged) ? e[0] || [] : null
                        },
                        showPartitionSelect: function() {
                            var t;
                            return "partition" === this.selectType && 0 < (null === (t = this.platforms.config) || void 0 === t ? void 0 : t.column)
                        },
                        limitSystem: function() {
                            var t = this.platforms;
                            return 1 === this.plats.length && t.config.limit
                        },
                        infoList: function() {
                            var t = this,
                                e = t.lanres,
                                n = t.selectedInfo,
                                i = t.userInfo,
                                o = t.selectType,
                                t = t.platforms.config,
                                t = (null == t ? void 0 : t.showList) || [],
                                r = "partition" === o;
                            return s([{
                                class: "name",
                                title: e.gameIdLoginCharacName,
                                val: i.charac_name,
                                show: !0
                            }, {
                                class: "id",
                                title: e.gameIdLoginId,
                                val: i.userid,
                                show: !0
                            }, {
                                class: "type",
                                title: e.platForm,
                                val: n.name,
                                show: "system" === o
                            }], t.map(function(t) {
                                return {
                                    class: "type",
                                    title: e[t + "Title"],
                                    val: n[t],
                                    show: r
                                }
                            }), !0)
                        },
                        modify: function() {
                            return !!this.userInfo && !1 !== this.userInfo.modify
                        },
                        activeSelectStatus: function() {
                            return this.dropDownLists.length && this.showDropDown
                        },
                        isDisable: function() {
                            var t = this.selectType,
                                e = this.selectedInfo;
                            return "partition" === t && !e.name
                        }
                    },
                    mounted: function() {
                        var t = this.userInfo;
                        this.selectType = this.getSelectType(), this.fillSelectedInfo(), this.$emit("edit", t), t && this.$emit("login", {
                            openid: t.openid,
                            userid: t.shortId || t.userid,
                            charac_name: (0, a.default)(t.charac_name)
                        })
                    },
                    watch: {
                        userInfo: function(t) {
                            this.$emit("edit", t)
                        },
                        shortId: function(t, e) {
                            t !== e && this.errorTxt.length && this.resetErrorStatus()
                        },
                        showDropDown: function(t) {
                            t && (this.showDefaultRole = !1)
                        }
                    },
                    methods: {
                        mergePartition: function() {
                            var e = this.platforms || {},
                                n = [];
                            return Object.keys(e).forEach(function(t) {
                                t = (null === (t = e[t]) || void 0 === t ? void 0 : t.partition) || [];
                                n = n.concat(t)
                            }), n
                        },
                        findPartition: function(t, e) {
                            var n = e.toString();
                            return this.store._getMutipZoneidCharac() && (n = n.replace(/_(.*)/g, '')), t.find(function(t) {
                                return t.zoneid === n
                            })
                        },
                        getPartitionByZoneid: function(o) {
                            var r = this;
                            if (!o) return {};
                            var a, t = this.platforms,
                                e = t.data,
                                n = t.config,
                                t = n.dataLayers,
                                s = void 0 === t ? 2 : t,
                                n = n.columnType,
                                c = void 0 === n ? [] : n;
                            return Object.keys(e).some(function(n) {
                                var i = e[n] || {};
                                if (3 === s) return Object.keys(i).some(function(t) {
                                    var e = (null === (e = i[t]) || void 0 === e ? void 0 : e.partition) || [];
                                    return !!(a = r.findPartition(e, o)) && (a[c[0]] = n, a[c[1]] = t, a[c[2]] = a.name, !0)
                                });
                                var t = (null === i ? void 0 : i.partition) || [];
                                return !!(a = r.findPartition(t, o)) && (a[c[0]] = n, a[c[1]] = a.name, !0)
                            }), a || {}
                        },
                        getSystemByZoneid: function(e) {
                            if (!e) return {};
                            var n, i = this.platforms.data;
                            return Object.keys(i).some(function(t) {
                                t = i[t];
                                return t.zoneid === e.toString() && (n = t, !0)
                            }), n
                        },
                        fillSelectedInfo: function() {
                            var t = this.userInfo,
                                e = this.platforms.config;
                            e && (e = e.selectedZoneid, t && (e = t.zoneid), "partition" === this.selectType ? this.selectPartition(e) : "system" === this.selectType && this.selectPlatform(e))
                        },
                        getSelectType: function() {
                            var t = this.platforms,
                                e = t.data,
                                t = t.config;
                            return e && "object" == typeof e && t.type || "default"
                        },
                        toggleDropDown: function() {
                            this.showDropDown = !this.showDropDown
                        },
                        showFoundOpenidPop: function() {
                            this.$emit("show_find_openid_pop")
                        },
                        resetErrorStatus: function() {
                            this.errorTxt = ""
                        },
                        setShortId: function(t) {
                            this.shortId = t
                        },
                        setErrorStatus: function(t) {
                            "string" == typeof t && (this.errorTxt = t)
                        },
                        untypeItem: function(e) {
                            var t = this;
                            this.dropDownLists = this.dropDownLists.filter(function(t) {
                                return t.userid !== e.userid
                            }), this.store.unbindUser(e), this.shortId === e.userid && this.$nextTick(function() {
                                t.shortId = ""
                            })
                        },
                        selectPlatform: function(t) {
                            this.selectedInfo = Object.assign({}, this.getSystemByZoneid(t)), this.setPlatformInfo()
                        },
                        selectPartition: function(t) {
                            this.selectedInfo = Object.assign({}, this.getPartitionByZoneid(t)), this.setPlatformInfo()
                        },
                        setPlatformInfo: function() {
                            this.store.setPF(this.selectedInfo), this.resetErrorStatus(), this.shortId && this.getGameInfo()
                        },
                        clearInput: function() {
                            this.shortId = "", this.resetErrorStatus(), this.$refs.inputbox.focus()
                        },
                        getElementOffsetTop: function(t) {
                            return 0 === t.offsetTop && t.offsetParent ? this.getElementOffsetTop(t.offsetParent) : 0 < t.offsetTop ? t.offsetTop : 0
                        },
                        adaptAndroidInput: function() {
                            this.enableAutoSetScrollTop && /android/.test(navigator.userAgent.toLowerCase()) && this.$refs.bindInputBox.scrollIntoView()
                        },
                        clickInput: function() {
                            this.adaptAndroidInput()
                        },
                        focusInput: function() {
                            this.showDropDown = !0, this.adaptAndroidInput(), this.resetErrorStatus()
                        },
                        keydown: function() {
                            this.getGameInfo()
                        },
                        blurInput: function() {
                            this.showDropDown = !1
                        },
                        onInput: function(t) {
                            this.$emit("input", t.target.value), this.shortId !== t.target.value && this.store.cancelReq()
                        },
                        selectItem: function(t) {
                            var e = this;
                            this.shortId = t.userid, this.showDropDown = !1, this.showDefaultRole = !1, this.autoLoginSelected && this.$nextTick(function() {
                                switch (e.shortId = t.userid, e.selectType) {
                                    case "partition":
                                        e.selectPartition(t.zoneid);
                                        break;
                                    case "system":
                                        e.selectPlatform(t.zoneid);
                                        break;
                                    default:
                                        e.getGameInfo()
                                }
                            })
                        },
                        changeOpenid: function() {
                            c.click("playerid_change"), window.fbReport.doReport("ChangePlayerID"), this.userInfo = null, this.resetErrorStatus(), this.store.setOpenid({
                                openid: null
                            }), this.store._getMutipZoneidCharac() && this.store.setPF(this.selectedInfo)
                        },
                        getGameInfo: function() {
                            if (c.click("playerid_confirm", {
                                    playerid: this.shortId
                                }), window.fbReport.doReport("ConfirmPlayerID"), !this.isDisable) {
                                var t = this.plats,
                                    e = this.selectType,
                                    n = this.selectedInfo,
                                    i = this.lanres,
                                    r = this;
                                if (t.length) {
                                    if ("system" === e && !n.zoneid) return void(this.errorTxt = i.pfRequired);
                                    if ("partition" === e && !n.zoneid) return void(this.errorTxt = i.partitionRequired)
                                }
                                this.shortId ? (this.showDropDown = !1, this.loading = !0, n = {
                                    shortId: this.shortId,
                                    area_id: null == n ? void 0 : n.area_id,
                                    zone_id: null == n ? void 0 : n.zone_id,
                                    plat_id: null == n ? void 0 : n.plat_id
                                }, this.store.getCharac(n).then(function(t) {
                                    var e = t.zoneid,
                                        n = t.openid,
                                        i = t.charac_name,
                                        o = t.register_country;
                                    r.loading = !1, r.userInfo = {
                                        zoneid: e,
                                        openid: n,
                                        userid: r.shortId,
                                        charac_name: (0, a.default)(i)
                                    }, r.dropDownLists.filter(function(t) {
                                        return t.userid === r.shortId
                                    }).length || r.dropDownLists.unshift({
                                        zoneid: e,
                                        openid: n,
                                        userid: r.shortId,
                                        charac_name: (0, a.default)(i)
                                    }), r.$emit("login", {
                                        openid: n,
                                        userid: r.shortId,
                                        charac_name: (0, a.default)(i),
                                        region: t.region,
                                        register_country: o
                                    })
                                }).catch(function(t) {
                                    r.loading = !1, r.errorTxt = (window.langResource.idInvalid || window.langResource.gameIdInvalid || "invalid player id") + ("(" + (t.err_code || t.ret || "")) + ")"
                                })) : this.errorTxt = i.idRequired || "Player ID is required"
                            }
                        }
                    }
                };
            e.Z = r
        },
        99460: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(95623), n(61514);
            var o = i(n(5409)),
                n = i(n(26467)),
                r = window.report,
                n = {
                    components: {
                        CheckBox: o.default
                    },
                    mixins: [n.default],
                    props: {
                        lanres: {
                            type: Object,
                            default: function() {
                                return {}
                            }
                        },
                        confirmClauseHandler: {
                            type: Function,
                            default: function() {}
                        },
                        hideClose: {
                            type: String,
                            default: ""
                        },
                        closePop: {
                            type: Function,
                            default: function() {}
                        }
                    },
                    data: function() {
                        var t;
                        return {
                            checkRightPopLan: (null === (t = this.lanres) || void 0 === t ? void 0 : t.checkRightPop) || {},
                            checkedErrorShow: !1
                        }
                    },
                    methods: {
                        submitLogin: function() {
                            if (r.click("confirm"), this.checked.includes(!1)) return this.$emit("update:checkedClause", !1), void(this.checkedErrorShow = !0);
                            this.confirmClauseHandler()
                        }
                    }
                };
            e.Z = n
        },
        66526: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(15610), n(17460), n(5769), n(63238), n(14078);
            n = {
                props: {
                    lanres: {
                        type: Object,
                        default: function() {
                            return {}
                        }
                    },
                    processType: {
                        type: String,
                        default: "email"
                    },
                    thirdPartyLogin: {
                        type: Function,
                        default: function() {}
                    },
                    facebookLogin: {
                        type: Function,
                        default: function() {}
                    },
                    closePop: {
                        type: Function,
                        default: function() {}
                    },
                    pageConfig: {
                        type: Object,
                        default: function() {
                            return {}
                        }
                    },
                    confirmStepClauseHandler: {
                        type: Function,
                        default: function() {}
                    },
                    cancelClauseHandler: {
                        type: Function,
                        default: function() {}
                    },
                    backHandler: {
                        type: Function,
                        default: function() {}
                    }
                },
                data: function() {
                    var t;
                    return {
                        currentStep: 1,
                        stepArr: Array.from(new Array(null === (t = this.lanres.newComplianceItemList) || void 0 === t ? void 0 : t.length).keys())
                    }
                },
                computed: {
                    currentClause: function() {
                        return this.lanres.newComplianceItemList[this.currentStep - 1] || {}
                    }
                },
                methods: {
                    close: function() {
                        this.currentStep = 1, this.closePop()
                    },
                    back: function() {
                        1 === this.currentStep ? this.backHandler() : (--this.currentStep, this.scrollToTop())
                    },
                    disagree: function() {
                        this.currentStep = 1, this.cancelClauseHandler()
                    },
                    agree: function() {
                        var t = this.lanres.newComplianceItemList.length;
                        this.currentStep === t ? this.confirmStepClauseHandler() : (this.currentStep += 1, this.scrollToTop())
                    },
                    scrollToTop: function() {
                        var t = this.$refs.formBoxRef;
                        t && (t.scrollTop = 0)
                    }
                }
            };
            e.Z = n
        },
        30037: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(95623), n(61514);
            var o = i(n(71617)),
                n = i(n(51673)),
                r = window.report,
                n = {
                    components: {
                        ClauseCompliance: o.default,
                        ClauseComplianceStepConfirm: n.default
                    },
                    props: {
                        lanres: {
                            type: Object,
                            default: function() {
                                return {}
                            }
                        },
                        checkedClause: {
                            type: Boolean,
                            default: !1
                        },
                        show: {
                            type: Boolean,
                            default: !1
                        },
                        report_prefix: {
                            type: String,
                            default: ""
                        },
                        confirmClauseHandler: {
                            type: Function,
                            default: function() {}
                        }
                    },
                    data: function() {
                        var t, e, n;
                        return {
                            showModule: "clause-compliance",
                            checkRightPopLan: (null === (t = this.lanres) || void 0 === t ? void 0 : t.checkRightPop) || {},
                            isStepConfirm: (e = window.__CommonState, n = e.loginConfig, e = e.ipCountry, !!((n = n.stepConfirmList) && n.length && e) && !("*" !== n && !n.includes(null == e ? void 0 : e.toUpperCase())))
                        }
                    },
                    methods: {
                        closePop: function() {
                            this.showModule = "clause-compliance", this.$emit("update:show", !1)
                        },
                        backHandler: function() {
                            this.showModule = "clause-compliance"
                        },
                        agreeClauseHandler: function() {
                            this.isStepConfirm ? (this.$emit("update:checkedClause", !1), this.showModule = "clause-compliance-step-confirm") : (this.$emit("update:checkedClause", !0), this.confirmClauseHandler())
                        },
                        agreeStepClauseHandler: function() {
                            r.click("confirm"), this.$emit("update:checkedClause", !0), this.confirmClauseHandler()
                        }
                    }
                };
            e.Z = n
        },
        37594: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(83352), n(92571), n(48410), n(95374), n(55849), n(5769), n(41940), n(61013);
            var i = n(54626),
                n = {
                    props: {
                        platforms: {
                            type: Object,
                            default: function() {
                                return {}
                            }
                        },
                        selectPartition: {
                            type: Function,
                            default: function() {}
                        },
                        selectedInfo: {
                            type: Object,
                            default: function() {
                                return {}
                            }
                        },
                        lanres: {
                            type: Object,
                            default: function() {
                                return {}
                            }
                        }
                    },
                    data: function() {
                        return {
                            selectedPlat: "",
                            selectedGroup: "",
                            plats: [],
                            groupList: [],
                            partitionList: [],
                            showPartitionList: !1
                        }
                    },
                    computed: {
                        selected: function() {
                            return this.selectedInfo.name
                        },
                        columnClass: function() {
                            return "row-" + ["one", "two", "three"][this.showColumnNum - 1]
                        },
                        showColumnNum: function() {
                            return this.platforms.config.column || 1
                        },
                        serialNumberSize: function() {
                            var t;
                            return (null === (t = this.platforms.config) || void 0 === t ? void 0 : t.serialNumberSize) || 10
                        }
                    },
                    created: function() {
                        this.assignDataToThis()
                    },
                    methods: {
                        processData: function(t) {
                            var e = (t = void 0 === t ? {} : t).platName,
                                n = t.groupName,
                                i = this.getFormatPlatform(),
                                o = Object.keys(i || {}),
                                r = e || this.selectedPlat || o[0],
                                t = Object.keys(i[r] || {}),
                                e = n || this.selectedGroup || t[0],
                                n = i[r][e];
                            return n || (e = t[0], n = i[r][e]), {
                                selectedPlat: r,
                                selectedGroup: e,
                                plats: o,
                                groupList: t,
                                partitionList: n
                            }
                        },
                        assignDataToThis: function(t) {
                            Object.assign(this, this.processData(t))
                        },
                        fillFormatPlatform: function(t) {
                            var e = this.platforms.config || {},
                                n = e.dataLayers,
                                n = void 0 === n ? 2 : n,
                                e = e.disableSerialNumber;
                            void 0 !== e && e || (n += 1);
                            var i = {};
                            switch (n) {
                                case 1:
                                    i.default = {
                                        default: t
                                    };
                                    break;
                                case 3:
                                    i = t;
                                    break;
                                default:
                                    i.default = t
                            }
                            return i
                        },
                        getFormatPlatform: function() {
                            var e = this,
                                t = this.platforms,
                                i = t.data,
                                o = t.config,
                                r = {},
                                t = o.dataLayers,
                                a = void 0 === t ? 2 : t;
                            return Object.keys(i).forEach(function(n) {
                                var t;
                                a <= 2 ? (t = (null === (t = i[n]) || void 0 === t ? void 0 : t.partition) || [], r[n] = o.disableSerialNumber ? t : e.generatePartionGroup(t)) : (r[n] = {}, (Object.keys(i[n]) || []).forEach(function(t) {
                                    var e = (null === (e = i[n][t]) || void 0 === e ? void 0 : e.partition) || [];
                                    r[n][t] = e
                                }))
                            }), this.fillFormatPlatform(r)
                        },
                        generatePartionGroup: function(t) {
                            var n = this.serialNumberSize,
                                t = (0, i.chunk)(t, n);
                            return Object.fromEntries(t.map(function(t, e) {
                                return [n * e + 1 + "-" + (n * e + t.length), t]
                            }))
                        },
                        togglePartitionList: function() {
                            this.showPartitionList = !this.showPartitionList
                        },
                        selectPlatHandler: function(t) {
                            this.assignDataToThis({
                                platName: t
                            })
                        },
                        selectGroupHandler: function(t) {
                            this.assignDataToThis({
                                groupName: t
                            })
                        },
                        selectPartitionHandler: function(t) {
                            this.togglePartitionList(), this.selectPartition(t.zoneid)
                        }
                    }
                };
            e.Z = n
        },
        13352: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(83352), n(92571);
            n = {
                props: {
                    platforms: {
                        type: Object,
                        default: function() {
                            return {}
                        }
                    },
                    pfDefaultSelect: {
                        type: String,
                        default: "Choose"
                    },
                    selectPlatform: {
                        type: Function,
                        default: function() {}
                    },
                    selectedInfo: {
                        type: Object,
                        default: function() {
                            return {}
                        }
                    },
                    lightInput: {
                        type: Boolean,
                        default: !1
                    }
                },
                data: function() {
                    return {
                        selected: this.selectedInfo.name || "",
                        showPlatSelect: !1
                    }
                },
                computed: {
                    systemList: function() {
                        return Object.keys(this.platforms.data || {})
                    }
                },
                methods: {
                    toggleSelect: function() {
                        this.showPlatSelect = !this.showPlatSelect
                    },
                    selectSystem: function(t) {
                        var e = this.platforms.data;
                        this.selected = t, this.toggleSelect(), this.selectPlatform(e[t].zoneid)
                    }
                }
            };
            e.Z = n
        },
        46212: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(52077), n(911);
            var o = i(n(3401)),
                r = i(n(11385)),
                a = i(n(86166)),
                s = window.report,
                n = {
                    props: {
                        lan: {
                            type: Object,
                            default: function() {
                                return {}
                            }
                        },
                        show_birthday_pop: {
                            type: Boolean,
                            default: !1
                        },
                        report_prefix: {
                            type: String,
                            default: ''
                        }
                    },
                    data: function() {
                        return {
                            datePicker: null,
                            birthdayError: "",
                            showErrorTips: !1,
                            isShow: !1
                        }
                    },
                    mounted: function() {
                        this.getDatePickerBody()
                    },
                    methods: {
                        toggleDatePicker: function() {
                            this.isShow = 1 === this.datePicker.isShow, this.isShow ? this.datePicker.hide() : this.datePicker.show()
                        },
                        getDatePickerBody: function() {
                            var e = this;
                            this.datePicker = new o.default({
                                el: "#birthdayLine",
                                droplistinbody: !1,
                                day: "1990-01-01",
                                pick: function(t) {
                                    t = t.getFullYear() + "-" + (t.getMonth() + 1) + "-" + t.getDate();
                                    (0, r.default)("#birthdayDateInput").css("color", "#fff").html(t), e.showErrorTips = !1
                                }
                            })
                        },
                        closeBirthdayPop: function() {
                            this.$emit("update:show_birthday_pop", !1)
                        },
                        confirmBirthday: function() {
                            var t = (0, r.default)("#birthdayDateInput").text(),
                                e = window.__Report_INFO.countryCode.toUpperCase(),
                                t = (0, a.default)(e, t);
                            t.ret ? (s.click(this.report_prefix + "confirm_birthday_confirm"), this.closeBirthdayPop(), this.$emit("handle_next_step")) : (s.view(s.page + "_" + this.report_prefix + "confirm_birthday_aprevent"), this.birthdayError = this.getReglimitDesc(t), this.showErrorTips = !0)
                        },
                        getReglimitDesc: function(t) {
                            return (this.lan.birthdayError || "").replace("{}", t.minage)
                        }
                    }
                };
            e.Z = n
        },
        42940: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(48410), n(82759), n(52077), n(40895), n(26252), n(911), n(92571), n(95374), n(55849), n(72482), n(25613);
            var o = i(n(5777)),
                c = i(n(29287)),
                r = i(n(50707)),
                a = i(n(81233)),
                s = i(n(37196)),
                n = i(n(37996)),
                l = function() {
                    return (l = Object.assign || function(t) {
                        for (var e, n = 1, i = arguments.length; n < i; n++)
                            for (var o in e = arguments[n]) Object.prototype.hasOwnProperty.call(e, o) && (t[o] = e[o]);
                        return t
                    }).apply(this, arguments)
                },
                u = window.report,
                n = {
                    name: 'NavHeader',
                    mixins: [n.default],
                    props: {
                        notFixed: {
                            type: Boolean,
                            default: !1
                        },
                        headerBox: {
                            type: Boolean,
                            default: !0
                        },
                        userInfo: Object
                    },
                    data: function() {
                        return l(l(l({
                            showMultistageNavBox: !1,
                            showDropList: !1,
                            showMenuSideBar: !1,
                            headerMenu: !0,
                            router: o.default
                        }, window.__CommonState), window.__NavState), {
                            isMobile: (0, a.default)(),
                            isCardEventPage: /cardpaymentevents/.test(location.href),
                            clickAction: 'login'
                        })
                    },
                    created: function() {
                        var t = window._SERVER_DATA.isNoSupportCountry;
                        this.isNoSupportCountry = t, this.usercenterUrl = location.origin + "/" + window._SHOPCODE + "/" + window._COUNTRY + "/usercenter"
                    },
                    computed: {
                        user: function() {
                            return this.userInfo || window.user
                        },
                        transitionName: function() {
                            return this.isMobile ? '' : 'slide'
                        },
                        isFbUser: function() {
                            var t;
                            return 'facebook' === (null === (t = this.user) || void 0 === t ? void 0 : t.providerType)
                        },
                        avatarUrl: function() {
                            return this.isFbUser ? this.user.avatarUrl : 'https://cdn.midasbuy.com/images/new-user-icon723b1902.png'
                        }
                    },
                    mounted: function() {
                        var t = this;
                        this.user ? this.handleLoginRedPoint() : this.handleUnloginRedPoint(), document.addEventListener('scroll', function() {
                            200 < document.documentElement.scrollTop && t.bubblePopConfig.bubbleShow && (t.bubblePopConfig.bubbleShow = !1)
                        }), d()
                    },
                    methods: {
                        customLoginCallback: function() {
                            switch (this.clickAction) {
                                case 'linkToRecord':
                                    o.default.usercenter(null, 'transactionPage');
                                    break;
                                case 'linkPayMethod':
                                    o.default.usercenter(null, 'cardmanage');
                                    break;
                                case 'linkToAccountSetting':
                                    o.default.usercenter();
                                    break;
                                default:
                                    location.reload()
                            }
                        },
                        isNavTabActiveInPage: function(t) {
                            return new RegExp("/" + t, 'g').test(location.href)
                        },
                        navHeaderItemFilter: function(t) {
                            var e, n, i;
                            try {
                                if (!window._NAVHEADERFILTER || null === (e = window._NAVHEADERFILTER) || void 0 === e || !e[t]) return !0;
                                var o = new RegExp(null === (n = window._NAVHEADERFILTER) || void 0 === n ? void 0 : n[t]),
                                    r = (window._SHOPCODE || '') + "-" + (window._COUNTRY || '') + "-" + ((null === (i = null === window || void 0 === window ? void 0 : window.GAME_CONFIG) || void 0 === i ? void 0 : i.gameShortUrl) || '');
                                return o.test(r)
                            } catch (t) {
                                return !0
                            }
                        },
                        mouseOverlatestRelease: function() {
                            this.headerMenu = !0, this.showMultistageNavBox = !0
                        },
                        mouseLeavelatestRelease: function() {
                            var t = this;
                            this.user && this.handleLoginRedPoint(), setTimeout(function() {
                                t.headerMenu || (t.showMultistageNavBox = !1)
                            }, 1500), this.headerMenu = !1
                        },
                        linkToRecord: function() {
                            this.handleRedPointClick('transactionRecord'), this.user ? (this.showDropList = !1, o.default.usercenter(null, 'transactionPage')) : this.goMidasLogin('linkToRecord')
                        },
                        linkPayMethod: function() {
                            this.user ? (this.showDropList = !1, o.default.usercenter(null, 'cardmanage')) : (this.usercenterUrl, this.goMidasLogin('linkPayMethod'))
                        },
                        linkToAccountSetting: function() {
                            this.handleRedPointClick('accountSettings'), this.user ? o.default.usercenter() : this.goMidasLogin('linkToAccountSetting')
                        },
                        goMidasLogin: function(t, e) {
                            var n;
                            void 0 === t && (t = 'login');
                            var i = window.midasLogin;
                            this.showDropList = !1, this.clickAction = t, i ? 'reg' === e ? null !== (n = i.login) && void 0 !== n && n.call(i, {
                                hash: '#sign-up'
                            }) : null !== (n = i.login) && void 0 !== n && n.call(i, {
                                hash: '#login'
                            }) : this.goToLogin(e)
                        },
                        goToLogin: function(t) {
                            o.default.login({
                                redirect: location.href,
                                isNoSupportCountry: this.isNoSupportCountry
                            }, t)
                        },
                        goToCountryList: function() {
                            var t = (0, s.default)();
                            o.default.regionselect(t)
                        },
                        goToHome: function() {
                            var t = (0, s.default)();
                            o.default.home(t)
                        },
                        goCardEvent: function() {
                            var t = (0, s.default)();
                            o.default.cardevent(t)
                        },
                        goToNewsCenter: function() {
                            var t = (0, s.default)();
                            o.default.newsCenter(t)
                        },
                        goToVipCenter: function() {
                            var t = 'vip_for_login';
                            this.user && (t = this.user.vip_level ? 'vip' : 'vip_notvip'), u.click(t), this.handleRedPointClick('vipCenter'), o.default.vipcenter()
                        },
                        goHelpCenter: function() {
                            var t = (0, s.default)();
                            o.default.helpcenter(t)
                        },
                        logOut: function() {
                            var t = window.goServerUrl;
                            return $.ajax({
                                url: t + "/logout",
                                type: 'POST',
                                data: JSON.stringify({
                                    endpoint_type: 'browser'
                                }),
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function() {
                                    location.reload()
                                }
                            })
                        },
                        linkToActivity: function() {
                            var t = this.bubblePopConfig,
                                e = t.href,
                                t = t.replace;
                            o.default.linkToActivity(e, t, this.isNoSupportCountry)
                        },
                        handleLoginRedPoint: function() {
                            var r, a = this,
                                s = window.redPointConfigs,
                                t = Object.keys(s);
                            t.length && (r = (0, c.default)('RED_POINT') || {}, t.forEach(function(t) {
                                var e, n, i, o = s[t];
                                'object' == typeof o && null !== o && (i = a.user.uid, e = r[i + t], n = o.show, i = o.version, o = o.beforeElement, i = new Date(i).getTime(), a.handleRedPointShow(t, e && i && e < i || n && !e, o))
                            }))
                        },
                        handleUnloginRedPoint: function() {
                            var t, e, i, o = this,
                                r = window.redPointConfigs;
                            r && (t = r.showRedPoint2Unlogin, e = Object.keys(r), i = !1, e.forEach(function(t) {
                                var e, n = r[t];
                                'object' == typeof n && null !== n && (e = n.show2Unlogin, n = n.beforeElement, 'boolean' == typeof e && (i = !0, o.handleRedPointShow(t, e, n)))
                            }), i || t && this.handleRedPointShow('showRedPoint2Unlogin', !!t, !1))
                        },
                        handleRedPointShow: function(t, e, n) {
                            t = this.$refs[t];
                            t && (n = n ? 'imp' : 'message', e ? t.classList.add(n) : t.classList.remove(n))
                        },
                        handleRedPointClick: function(t) {
                            var e, n;
                            this.user && (e = this.user.uid, (n = (0, c.default)('RED_POINT') || {})[e + t] = Date.now(), (0, r.default)('RED_POINT', n))
                        },
                        clickLoginUser: function() {
                            this.showDropList = !this.showDropList, this.handleRedPointClick('loginedUser')
                        }
                    }
                };
            e.Z = n;
            var d = function() {
                $('body').off('click').on('click', function(t) {
                    for (var e, n = $(t.target || t.srcElement), i = (i = n.attr('cr')) || n.parent().attr('cr'), o = 20; 0 < o && n[0] !== $('body')[0] && !i;) --o, n = n.parent(), i = i || n.attr('cr');
                    i && (e = void 0, 1 < (t = i.split('.')).length ? (e = t.pop(), i = t.join('.'), u.click(i, {
                        value: e
                    })) : u.click(i))
                })
            }
        },
        52922: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(48410), n(63238), n(61418), n(25901), n(92189), n(91047), n(5769), n(17460), n(14078), n(32081), n(40895), n(52077), n(72482), n(52327), n(95623), n(61514), n(95374), n(55849), n(92571), n(98010), n(25613), n(61013), n(95289), n(27471), n(23938), n(83352), n(69217), n(911), n(82759), n(43512), n(76056);

            function d(t) {
                var e = t ? 1e3 * parseInt(t, 10) : null,
                    n = new Date;

                function i(t) {
                    return t.length < 2 ? "0" + t : t
                }
                e && n.setTime(e);
                var o = (n.getUTCMonth() + 1).toString(),
                    r = n.getUTCDate().toString(),
                    a = n.getUTCHours().toString(),
                    t = n.getUTCMinutes().toString(),
                    e = n.getUTCSeconds().toString(),
                    n = n.getUTCFullYear() + "-";
                return n += (o = i(o)) + "-" + (r = i(r)) + "T" + (a = i(a)) + ":" + (t = i(t)) + ":" + (e = i(e)) + "Z"
            }

            function c() {
                return (new Date).getTime()
            }
            var f = i(n(82322)),
                p = i(n(55862)),
                l = i(n(11385)),
                o = i(n(37196)),
                h = i(n(32522)),
                v = i(n(50707)),
                r = i(n(29287)),
                a = i(n(35629)),
                g = i(n(9869)),
                s = i(n(63762)),
                u = i(n(69437)),
                m = n(69903),
                _ = i(n(57319)),
                y = n(14197),
                w = i(n(36576)),
                b = function() {
                    return (b = Object.assign || function(t) {
                        for (var e, n = 1, i = arguments.length; n < i; n++)
                            for (var o in e = arguments[n]) Object.prototype.hasOwnProperty.call(e, o) && (t[o] = e[o]);
                        return t
                    }).apply(this, arguments)
                },
                C = function(t, a, s, c) {
                    return new(s = s || Promise)(function(n, e) {
                        function i(t) {
                            try {
                                r(c.next(t))
                            } catch (t) {
                                e(t)
                            }
                        }

                        function o(t) {
                            try {
                                r(c.throw(t))
                            } catch (t) {
                                e(t)
                            }
                        }

                        function r(t) {
                            var e;
                            t.done ? n(t.value) : ((e = t.value) instanceof s ? e : new s(function(t) {
                                t(e)
                            })).then(i, o)
                        }
                        r((c = c.apply(t, a || [])).next())
                    })
                },
                k = function(n, i) {
                    var o, r, a, s = {
                            label: 0,
                            sent: function() {
                                if (1 & a[0]) throw a[1];
                                return a[1]
                            },
                            trys: [],
                            ops: []
                        },
                        t = {
                            next: e(0),
                            throw: e(1),
                            return: e(2)
                        };
                    return "function" == typeof Symbol && (t[Symbol.iterator] = function() {
                        return this
                    }), t;

                    function e(e) {
                        return function(t) {
                            return function(e) {
                                if (o) throw new TypeError("Generator is already executing.");
                                for (; s;) try {
                                    if (o = 1, r && (a = 2 & e[0] ? r.return : e[0] ? r.throw || ((a = r.return) && a.call(r), 0) : r.next) && !(a = a.call(r, e[1])).done) return a;
                                    switch (r = 0, (e = a ? [2 & e[0], a.value] : e)[0]) {
                                        case 0:
                                        case 1:
                                            a = e;
                                            break;
                                        case 4:
                                            return s.label++, {
                                                value: e[1],
                                                done: !1
                                            };
                                        case 5:
                                            s.label++, r = e[1], e = [0];
                                            continue;
                                        case 7:
                                            e = s.ops.pop(), s.trys.pop();
                                            continue;
                                        default:
                                            if (!(a = 0 < (a = s.trys).length && a[a.length - 1]) && (6 === e[0] || 2 === e[0])) {
                                                s = 0;
                                                continue
                                            }
                                            if (3 === e[0] && (!a || e[1] > a[0] && e[1] < a[3])) {
                                                s.label = e[1];
                                                break
                                            }
                                            if (6 === e[0] && s.label < a[1]) {
                                                s.label = a[1], a = e;
                                                break
                                            }
                                            if (a && s.label < a[2]) {
                                                s.label = a[2], s.ops.push(e);
                                                break
                                            }
                                            a[2] && s.ops.pop(), s.trys.pop();
                                            continue
                                    }
                                    e = i.call(n, s)
                                } catch (t) {
                                    e = [6, t], r = 0
                                } finally {
                                    o = a = 0
                                }
                                if (5 & e[0]) throw e[1];
                                return {
                                    value: e[0] ? e[1] : void 0,
                                    done: !0
                                }
                            }([e, t])
                        }
                    }
                },
                S = window.CHANNEL_INFO,
                P = window.__PAY_INFO,
                x = window.__Report_INFO || {},
                I = /MicroMessenger/i.test(navigator.userAgent.toLowerCase()),
                T = '/interface/getCharac',
                R = '/interface/getTrans',
                O = '/interface/getDrmInfo',
                M = '/interface/unbindUser',
                D = '/interface/getPayRes',
                L = '/interface/getBuyStatus',
                E = '/interface/queryDrmLimitNoLogin',
                N = '/interface/getProcess',
                B = '/interface/queryVipScore',
                j = '/interface/sendInvoiceEmail',
                A = '/interface/invoice/v1/email/insert',
                $ = '/interface/invoice/v1/query',
                U = '/interface/getTask',
                n = (window, F.prototype.__init = function() {
                    var t, e, n = this.getBindUser();
                    null != n && n.pf ? (t = null == P ? void 0 : P.pf.split('midasweb'), e = n.pf, 1 < t.length && (e += t[1]), this.pfinfo.pf = e) : this.pfinfo.pf = null == P ? void 0 : P.pf, null != n && n.zoneid ? this.pfinfo.zoneid = n.zoneid : this.pfinfo.zoneid = null == P ? void 0 : P.zoneid;
                    var i = window.tfp,
                        o = this;
                    o._reportNet('getFingerPrint.start', {});
                    var r = +new Date;
                    i && i('getToken', function(t) {
                        i.app.getFingerPrint(t, function(t) {
                            o.fingerprint = t.fp;
                            t = +new Date;
                            o._reportNet('getFingerPrint.success', {
                                times: t - r
                            })
                        })
                    }), (0, m.xMidasInit)()
                }, F.prototype.checkMidasApi = function() {
                    return !!window.midas || (this._tokenExpireCallback(), this._reportErr('api.notload', {}), !1)
                }, F.prototype.getMsgUrl = function() {
                    return location.protocol + "//" + location.hostname + ":" + location.port + "/oversea_web/static/receiveMsg.html?buy_type_key=" + this.getStorageKey()
                }, F.prototype.getCountry = function() {
                    return this.payInfo.country
                }, F.prototype.getNeedSelectPF = function() {
                    var t = this.payInfo.needSelectPF;
                    if (t) {
                        var i = t.data,
                            e = t.config;
                        if ('partition' === (null == e ? void 0 : e.type) && e.groups) {
                            var n = null === (o = this.getCountry()) || void 0 === o ? void 0 : o.toLowerCase();
                            if (!n) return t;
                            var o = e.groups.find(function(t) {
                                return '*' === t.country || t.country === n || t.country.includes(n)
                            });
                            if (!o) return t;
                            var r = o.zoneid,
                                o = o.selectedZoneid;
                            'string' == typeof r && (r = [r]), o && r.includes(o) && (e.selectedZoneid = o);
                            var a = {};
                            Object.keys(i).forEach(function(n) {
                                a[n] = {};
                                var t = i[n].partition;
                                t ? a[n].partition = t.filter(function(t) {
                                    return r.includes(t.zoneid)
                                }) : Object.keys(i[n]).forEach(function(t) {
                                    a[n][t] = {};
                                    var e = i[n][t].partition;
                                    a[n][t].partition = e.filter(function(t) {
                                        return r.includes(t.zoneid)
                                    })
                                })
                            }), t.data = a
                        }
                        return t
                    }
                }, F.prototype.getActiveData = function() {
                    return this.activeData || this.getLocalActiveData()
                }, F.prototype.getLocalActiveData = function() {
                    var t = (0, r.default)("ACTIVEDATA_" + P.openid);
                    return t ? t.data : ''
                }, F.prototype.saveLocalActiveData = function(t, e) {
                    return (0, v.default)("ACTIVEDATA_" + t, {
                        data: e
                    })
                }, F.prototype.fetchActiveData = function() {
                    var e, t, n = this;
                    window.needActiveData && (this.activeData = '', e = P.openid, t = P.appid, t = l.default.extend(this._getInterfaceParams(), {
                        openid: e,
                        offerid: t
                    }), this._sendReq('/interface/getUserActive', t, 'get').then(function(t) {
                        t && 0 === t.ret && (n.activeData = t.data || '', n.saveLocalActiveData(e, t.data))
                    }).catch(function(t) {}))
                }, F.prototype.setPF = function(t) {
                    var e = t.pf,
                        n = void 0 === e ? 'android' : e,
                        e = t.zoneid,
                        t = P.pf.split('-');
                    t[2] && (t[2] = n), this.pfinfo.pf = t.join('-'), this._getMutipZoneidCharac() && this.browserParams.zoneid && (e = this.browserParams.zoneid), this.pfinfo.zoneid = e
                }, F.prototype.getCurrentChannel = function() {
                    return this.channelInfo.currentChannel
                }, F.prototype.setCurrentChannel = function(t) {
                    this.channelInfo.currentChannel = t
                }, F.prototype.getPayInfo = function() {
                    return this.payInfo
                }, F.prototype.getChannelInfo = function() {
                    var t = this.channelInfo;
                    return I ? t.wechat && (t.wechat.supportJsApi ? t.adyen_wechat && delete t.adyen_wechat : delete t.wechat) : t.adyen_wechat && delete t.adyen_wechat, t
                }, F.prototype.getBrowserParams = function() {
                    return this.browserParams
                }, F.prototype.onDataChange = function(t) {
                    this._dataChangeCallback = t
                }, F.prototype.onTokenExpire = function(t) {
                    this._tokenExpireCallback = t
                }, F.prototype.handleRedeemChannel = function(t, e) {
                    t.push({
                        id: 'os_redeem_code',
                        productid_info: []
                    }), e.push('os_redeem_code')
                }, F.prototype.getChannelData = function(i) {
                    var n = this,
                        t = window.GAME_INFO,
                        e = t.productid_list,
                        o = [],
                        r = t.channel,
                        a = r.map(function(t) {
                            return t.id
                        }),
                        s = this,
                        c = this.getChannelInfo();
                    window.showRedeemChannel && this.handleRedeemChannel(e, a);
                    var l = this.getCountry();
                    return (e = e.filter(function(t) {
                        var e;
                        return !t.productid_info || Array.isArray(t.productid_info) && 0 === t.productid_info.length ? (null !== (e = null === window || void 0 === window ? void 0 : window.report) && void 0 !== e && e.custom('empty_product_in_channel', {
                            id: t.id
                        }), !1) : 'UNIMONTH' !== n.getBuyType() || !n.browserParams.pid || !!t.productid_info.find(function(t) {
                            return t.productid.endsWith(n.browserParams.pid)
                        })
                    })).forEach(function(t) {
                        var e, n = a.indexOf(t.id);
                        c[t.id] && -1 !== n ? ((e = c[t.id]).id = t.id, e.src = e.icon || e.icon_pc || e.icon_h5 || '', e.is_show_tax = null === (n = r[n]) || void 0 === n ? void 0 : n.is_show_tax, Array.isArray(e.imgs) && ((n = e.imgs.filter(function(t) {
                            return 'object' == typeof t && Array.isArray(t[l.toLocaleLowerCase()])
                        })).length ? e.imgs = n[0][l.toLocaleLowerCase()] : e.imgs = e.imgs.filter(function(t) {
                            return 'string' == typeof t
                        })), e.showtips = !1, e.productDatas = s._processDrm(t.productid_info, t.id), 'v2' === i && e.group && 'string' == typeof e.group && c[e.group] && ((t = c[e.group]).src = t.icon || t.icon_pc || t.icon_h5 || '', -1 === o.indexOf(t) && (t.id = e.group, o.push(t))), o.push(e)) : null === console || console
                    }), this.needShowChannelLable(o), o = this.processChannelState(o)
                }, F.prototype.processChannelState = function(t) {
                    var i = new Date,
                        o = [],
                        r = [];
                    return t.forEach(function(t) {
                        var e = t.restoration;
                        if ('object' == typeof e && null !== e) {
                            var n = e.startTime,
                                e = e.endTime;
                            if (n && e && new Date(n) < i && i < new Date(e)) return t.disable = !0, r.push(t)
                        }
                        o.push(t)
                    }), o.concat(r)
                }, F.prototype.needShowChannelLable = function(t) {
                    var e = window.MP_INFO,
                        o = JSON.stringify(e);
                    t.forEach(function(t) {
                        if (t.showlabel = !0, t.label && t.label_rule_id && t.label_rule_id.length) {
                            for (var e = t.label_rule_id, n = !1, i = 0; i < e.length; i++)
                                if (e[i] && -1 !== o.indexOf(e[i])) {
                                    n = !0;
                                    break
                                } t.showlabel = n
                        }
                    })
                }, F.prototype._processDrm = function(t, c) {
                    var e = window.MP_INFO,
                        l = [],
                        u = 0,
                        n = this.getCountry().toLowerCase();
                    return null != e && e.buycurrency && (_.default.setInfo(e), u = 1), (t = t.filter(function(t) {
                        return (t.country || '').toLowerCase() === n
                    })).forEach(function(t) {
                        var e, n = JSON.parse(JSON.stringify(t));
                        n.fprice = (0, f.default)(n.price, n.currency_type), n.fOriginPrice = n.original_price && (0, f.default)(n.original_price, n.currency_type), n.tax_info_list = (o = n.tax_info_list, e = n.currency_type, Array.isArray(o) && o.length ? o = o.map(function(t) {
                            return t.fTaxAmount = (0, f.default)(t.tax_amount, e), t
                        }) : []), n.proxy_tax_info_list = n.proxy_tax_info_list || [], n.gift = [], n.id = n.productid;
                        var i, o, r, a, s, t = P.currencyIcon;
                        Array.isArray(P.currencyIconMap) && (i = n.num, t = (o = null == (o = P.currencyIconMap.find(function(t) {
                            return t.min && t.max ? +i >= +t.min && +i <= +t.max : t.min && !t.max ? +i >= +t.min : t.max && !t.min ? +i <= +t.max : void 0
                        })) ? void 0 : o.icon) || t), n.icon = t, n.growth = 0, n.point = 0, n.smallicon = P.currencySmallIcon, 1 !== u || (t = _.default.getSendCount(parseInt(n.num, 10), c)) && (n.send = t.__sendNum, r = [], a = [], s = [], t.product_item.forEach(function(t) {
                            var e, n = /\*\d+/.test(t.name);
                            n && 1 < t.num && null !== (e = window.report) && void 0 !== e && e.custom('name_contains_num', {
                                name: t.name,
                                num: t.num
                            });
                            n = !n && 1 < t.num ? t.name + " * " + t.num : t.name;
                            r.push(n), a.push(t.id + "*" + t.num), t.url && s.push(t.url)
                        }), n.gift_icon = s, n.gift = r, n._sendproducts = t.product_item, n.monitor_gifts = a, n.mktips = window.langResource[t.send_ext] || t.send_ext), l.push(n)
                    }), l.sort(function(t, e) {
                        return t.price - e.price
                    })
                }, F.prototype.setOpenid = function(t) {
                    P.openid = t.openid, P.userid = t.userid
                }, F.prototype.getUserId = function() {
                    return P.userid
                }, F.prototype.getAppId = function() {
                    return P.appid
                }, F.prototype.getOpenId = function() {
                    return P.openid
                }, F.prototype.getCharacName = function() {
                    var t;
                    return (P.charac_name ? (0, s.default)(P.charac_name) : null != (t = this.getBindUser()) && t.charac_name ? t.charac_name : '').replace(/>/g, '&gt;')
                }, F.prototype.setCharacName = function(t) {
                    P.charac_name = t.charac_name
                }, F.prototype.getProductItem = function() {
                    return this.product_item
                }, F.prototype.setProductItem = function(t) {
                    this.product_item = t;
                    var e = this.browserParams,
                        n = this._getInterfaceParams(),
                        i = this.getUserId(),
                        o = this.getCurrentChannel(),
                        r = (null == o ? void 0 : o.mainChannel) || (null === (r = null === (r = null == o ? void 0 : o.pm) || void 0 === r ? void 0 : r.split(':')) || void 0 === r ? void 0 : r[0]),
                        e = l.default.extend({
                            appid: n.appid,
                            country: n.country.toLowerCase(),
                            name: t.name,
                            num: t.num,
                            buy_type_key: this.getStorageKey()
                        }, e);
                    this.browserParams.redirecturl && (t.redirecturl = this.browserParams.redirecturl), (0, v.default)(this.getStorageKey(), l.default.extend({
                        buyType: this.getBuyType(),
                        rediretParams: e,
                        saveTime: (new Date).getTime(),
                        userid: i,
                        payChannel: r,
                        provideUin: this.getOpenId()
                    }, t))
                }, F.prototype.updateStorageInfo = function(t) {
                    var e = this.getStorageKey(),
                        n = (0, r.default)(e);
                    n && (t = l.default.extend(n, t, {
                        saveTime: (new Date).getTime()
                    }), (0, v.default)(e, t))
                }, F.prototype.getStorageKey = function() {
                    var t = this.getPayInfo().pageid;
                    return g.default.CURRENT_BUY_ITEM + "_" + this.getBuyType() + "_" + t
                }, F.prototype.getBuyType = function() {
                    return ''
                }, F.prototype.getOrderProduct = function() {
                    return ''
                }, F.prototype.getSessionId = function() {
                    return 'hy_gameid'
                }, F.prototype.getFingerprint = function() {
                    return this.fingerprint
                }, F.prototype.getPublicParams = function(e) {
                    var t = P,
                        n = this.getStorageKey(),
                        i = (0, p.default)(),
                        o = location.protocol + "//" + location.hostname + ":" + location.port + "/callback/",
                        r = {};
                    r.appid = t.appid, r.openid = this.getOpenId(), r.sandbox = t.sandbox, r.pf = this._getPf();
                    var a = x.adspf;
                    a && (r.adspf = a);
                    var s = this.browserParams.aid;
                    s && (r.aid = s);
                    var c = t.drm_info,
                        l = this.getProductItem(),
                        u = !1;
                    null != l && l.channel && 'BG' === this.getBuyType() && e && l.channel.forEach(function(t) {
                        t.targetChannel === e.id && (u = !t.matchedRule || t.used_quota >= t.uin_quota)
                    }), u && (c = Object.assign(c, {
                        group_id: void 0
                    })), r.drm_info = encodeURIComponent((0, h.default)(c, !0)), r.usePC = this.browserParams.usePC, r.pfkey = t.pfkey, r.currency_type = P.currency_type, r.country = P.country, r.session_id = this.getSessionId(), r.zoneid = this._getZoneid(), t.isv3 && (r.provide_type = 'uni_pdt', r.product_num = '1', r.buytype = 'xx', r.p_type = this.getBuyType().toLowerCase(), r.___forcetype = 1), r.productid = null == l ? void 0 : l.productid, r.ca = null == l ? void 0 : l.price, r.pendingUrl = o + "pending?buy_type_key=" + n, r.successUrl = o + "success?buy_type_key=" + n, r.failUrl = o + "fail?buy_type_key=" + n, r.msgUrl = this.getMsgUrl(), r.version = 'midasbuy_v2', r.localKey = n, i && (r.sessionToken = i), r.libtoken = t.adyen_url;
                    s = null !== (a = t.midasUser) && void 0 !== a && a.avatarUrl ? encodeURIComponent(t.midasUser.avatarUrl) : '', c = this.getCharacName(), o = {};
                    null != e && e.gray && (o.gray = e.gray), null !== (n = t.drm_info) && void 0 !== n && n.task_token && (o.NickImg = encodeURIComponent("name=" + c + "&avater=" + s)), o.muid = window.muid, this.getFingerprint() && (o.risk_device_finger = this.getFingerprint());
                    i = l || {}, a = i.num, n = i.send, s = i.monitor_gifts, l = i.price, s = {
                        ca: void 0 === l ? 0 : l,
                        currency_type: i.currency_type,
                        productid: i.productid,
                        num: (void 0 === a ? 0 : a) || 1,
                        send: void 0 === n ? 0 : n,
                        gift: null != s && s.length ? s.join(',') : ''
                    };
                    Object.assign(o, s), P.addWebIp && P.ipInfo && Object.assign(o, P.ipInfo);
                    s = this.getActiveData();
                    return s && s.length < 600 && Object.assign(o, {
                        comm_data: s
                    }), r.cgi_extend = (0, h.default)(o, !0), r.cgi_extend = r.cgi_extend.replace(/[!'()]/g, ''), 300 < r.cgi_extend.length && (o.NickImg = encodeURIComponent("name=" + c + "&avater="), r.cgi_extend = (0, h.default)(o, !0), r.cgi_extend = r.cgi_extend.replace(/[!'()]/g, '')), r.serverTime = d(t.adyen_svrtime), (0, v.default)(g.default.CURRENT_LOCATION, {
                        url: location.href
                    }), r
                }, F.prototype.getBindUser = function() {
                    var t = JSON.parse(JSON.stringify((null == P ? void 0 : P.currentBindUser) || null));
                    if (this.isMidasLogin() || t) return null != t && t.charac_name && (t.charac_name = (0, s.default)(t.charac_name)), t;
                    if (!P.notStorageUserInfo) {
                        t = this.getLoginRecord(P.appid);
                        return t && (P.openid = t.openid, P.userid = t.userid, P.charac_name = t.charac_name, P.zoneid = t.zoneid || P.zoneid), t
                    }
                }, F.prototype.getGameUsers = function() {
                    var t, o = this,
                        e = [];
                    return this.isMidasLogin() ? (null != (t = JSON.parse(JSON.stringify(P.gameUsers || window.gameUsers || {}))) && t.length && t.forEach(function(t) {
                            t.charac_name = (0, s.default)(t.charac_name)
                        }), e = t) : P.notStorageUserInfo || (e = (t = this.getLoginRecord(P.appid)) ? [t] : []),
                        function(t, e) {
                            if (void 0 === e && (e = []), !t) return e;
                            var n = t.data,
                                t = t.config;
                            if ('partition' !== (null == t ? void 0 : t.type) || !n) return e;
                            var i = [];
                            return (0, w.default)(n, function(t, e) {
                                'partition' === t && Array.isArray(e) && i.push.apply(i, e)
                            }), e.filter(function(t) {
                                var e = t.zoneid.toString();
                                return o.payInfo.mutipZoneidCharac && (e = e.replace(/_(.*)/g, '')), i.find(function(t) {
                                    return t.zoneid === e
                                })
                            })
                        }(this.getNeedSelectPF(), e)
                }, F.prototype._getShopCode = function() {
                    return window._SHOPCODE
                }, F.prototype._getInterfaceParams = function() {
                    (t = {}).muid = window.muid, this.getFingerprint() && (t.risk_device_finger = this.getFingerprint());
                    var t = (0, h.default)(t, !0);
                    return {
                        appid: P.appid,
                        currency_type: P.currency_type,
                        country: (P.country || '').toUpperCase(),
                        midasbuyArea: P.midasbuyArea || '',
                        sc: this.browserParams.sc || '',
                        from: this.browserParams.from || '',
                        task_token: this.browserParams.task_token || '',
                        pf: this._getPf(),
                        zoneid: this._getZoneid(),
                        _id: Math.random(),
                        drm_info: (0, h.default)(this._getDrmInfo(), !0),
                        shopcode: this._getShopCode(),
                        cgi_extend: t,
                        buyType: this.getBuyType().toLowerCase(),
                        shortId: P.userid
                    }
                }, F.prototype._getPf = function() {
                    return this.pfinfo.pf
                }, F.prototype._getDrmInfo = function() {
                    return this.payInfo.drm_info
                }, F.prototype._getZoneid = function() {
                    return this.pfinfo.zoneid
                }, F.prototype._getMutipZoneidCharac = function() {
                    return this.payInfo.mutipZoneidCharac
                }, F.prototype.getCharac = function(t) {
                    var o = this,
                        r = t.shortId,
                        e = t.area_id,
                        n = t.zone_id,
                        t = t.plat_id;
                    if (P.short_openid_rule && !new RegExp(P.short_openid_rule).test(r)) return Promise.reject({
                        ret: 'wrong format'
                    });
                    var a = l.default.extend(this._getInterfaceParams(), {
                            openid: r,
                            area_id: e,
                            zone_id: n,
                            plat_id: t
                        }),
                        s = this;
                    return new Promise(function(n, i) {
                        s._sendReq(T, a, 'get').then(function(t) {
                            var e;
                            t && 0 === t.ret ? ('normal' === P.short_openid_type && (t.info.openid = r), e = t.info.zoneid || s._getZoneid(), s.saveLoginRecord(P.appid, {
                                zoneid: e,
                                userid: r,
                                openid: t.info.openid,
                                charac_name: t.info.charac_name,
                                pf: s._getPf().split('midasweb')[0] + "midasweb"
                            }), o.pfinfo.zoneid = e, P.zoneid = e, n(b(b({}, t.info), {
                                zoneid: e
                            }))) : i(t)
                        }).catch(function(t) {
                            i(t)
                        })
                    })
                }, F.prototype.getUidByOpenid = function(t) {
                    var i = this;
                    return new Promise(function(e, n) {
                        i._sendReq('/interface/getUidByOpenid', t, 'get').then(function(t) {
                            (0 === t.ret ? e : n)(t)
                        }).catch(function(t) {
                            n(t)
                        })
                    })
                }, F.prototype.cancelReq = function() {
                    this.characReq && this.characReq.abort()
                }, F.prototype.getTrans = function() {
                    var t = this._getInterfaceParams(),
                        i = this;
                    return new Promise(function(e, n) {
                        i._sendReq(R, t, 'get').then(function(t) {
                            0 === t.ret ? e(t.data) : n(t)
                        }).catch(function(t) {
                            n(t)
                        })
                    })
                }, F.prototype.getRecommendChannel = function(t) {
                    var n = t ? t.map(function(t) {
                            return t.id
                        }) : [],
                        e = window.GAME_INFO || window.PRODUCT_INFO,
                        i = window.recommendChannelConfigs,
                        o = this.channelInfo,
                        t = i && i.recommend_channel || [];
                    return (t = null !== (i = null == e ? void 0 : e.recommend_channel) && void 0 !== i && i.length ? e.recommend_channel : t).map(function(t) {
                        var e = o[t];
                        return e && (e.id = t), e
                    }).filter(function(t) {
                        var e = void 0 !== t;
                        return e = e && n.length ? -1 !== n.indexOf(t.id) : e
                    })
                }, F.prototype.getPopCount = function() {
                    var t = window.GAME_INFO || window.PRODUCT_INFO,
                        e = window.recommendChannelConfigs;
                    if (null != e && e.start && e.end) {
                        var n = (new Date).getTime();
                        if (n < e.start || n > e.end) return 0
                    }
                    return null != t && t.max_pop_count ? t.max_pop_count : e ? e.max_pop_count : 0
                }, F.prototype.getCurrentPopCount = function() {
                    var t = this.getOpenId(),
                        e = this.getPayInfo().appid + "_" + t + "_popcount",
                        n = (0, r.default)(e),
                        i = window.recommendChannelConfigs;
                    if (null != i && i.start && i.end) {
                        t = (new Date).getTime();
                        if (t < i.start || t > i.end) return (0, v.default)(e, null), 0
                    }
                    return (null == n ? void 0 : n.count) || 0
                }, F.prototype.setCurrentPopCount = function(t) {
                    var e = this.getOpenId(),
                        n = this.getPayInfo().appid;
                    (0, v.default)(n + "_" + e + "_popcount", {
                        count: t
                    })
                }, F.prototype._changeGameData = function(t) {
                    var e = l.default.extend(this._getInterfaceParams(), {
                        openid: t.openid
                    });
                    this.setOpenid(t), this.setCharacName(t);
                    var n = this;
                    this._sendReq(O, e, 'get').then(function(t) {
                        0 === t.ret && (window.GAME_INFO = t.info, window.MP_INFO = t.mp_info, n._dataChangeCallback())
                    })
                }, F.prototype.getDrmInfoByUserInfo = function(t) {
                    this._changeGameData(t)
                }, F.prototype._reportNet = function(t, e) {
                    var n = window.report;
                    null != n && n.network && n.network(t, e)
                }, F.prototype._reportErr = function(t, e) {
                    var n = window.report;
                    null != n && n.error && n.error(t, e)
                }, F.prototype._sendReq = function(o, r, t) {
                    var e, a = this,
                        s = o.replace('/interface/', '');
                    return x.devMode && null !== (e = console.debug) && void 0 !== e && e.call(console, "real url before x-midas encryption: https://" + location.host + o + "?" + (0, h.default)(r)), new Promise(function(e, n) {
                        a._reportNet(s + ".start", {});
                        var i = c();
                        a.characReq = l.default.ajax({
                            method: 'post' === t ? 'POST' : 'GET',
                            data: (0, m.xMidasEncrypt)(r),
                            url: o
                        }).done(function(t) {
                            return a._reportNet(s + ".success", {
                                times: c() - i,
                                ret: t.ret
                            }), -1 !== [6, 7, 8].indexOf(t.ret) ? (a._reportErr('tokenerror', {
                                interface: o,
                                ret: t.ret,
                                params: JSON.stringify(r)
                            }), a._tokenExpireCallback()) : (a.characReq = void 0, void e(t))
                        }).fail(function(t, e) {
                            a._reportNet(s + ".fail", {
                                times: c() - i,
                                ret: -9999
                            }), a.characReq = void 0, n({
                                ret: -9999,
                                statusCode: e
                            })
                        })
                    })
                }, F.prototype.unbindUser = function(t) {
                    var e = this.getPublicParams(),
                        n = this.getLoginRecord(e.appid);
                    n && n.userid === t.userid && (0, v.default)(this.loginRecordKey(e.appid), null), this.isMidasLogin() && (t = {
                        appid: e.appid,
                        userid: t.userid,
                        openid: t.openid,
                        r: Math.random()
                    }, this._sendReq(M, t, 'GET').then(function() {}))
                }, F.prototype.sendInvoiceEmail = function(t) {
                    return this._sendReq(j, t, 'post')
                }, F.prototype.queryInvoiceInfo = function(t) {
                    return this._sendReq($, t, 'post')
                }, F.prototype.saveEmailInfo = function(t) {
                    return this._sendReq(A, t, 'post')
                }, F.prototype.setBuyType = function(t) {}, F.prototype.getPayRes = function(t) {
                    var e = this.getPublicParams(),
                        t = {
                            appid: e.appid,
                            pf: e.pf,
                            openid: e.openid,
                            r: Math.random(),
                            portal_serial_no: t
                        };
                    return this._sendReq(D, t, 'GET')
                }, F.prototype.getBuyStatus = function(t) {
                    t = {
                        openid: t,
                        appid: P.appid
                    };
                    return this._sendReq(L, t, 'GET')
                }, F.prototype.queryDrmLimitNoLogin = function(t) {
                    return this._sendReq(E, t, 'GET')
                }, F.prototype.isMidasLogin = function() {
                    return (null == P ? void 0 : P.midasUser) || null !== window.user
                }, F.prototype.getMidasBuyUserInfo = function() {
                    return (null == P ? void 0 : P.midasUser) || window.user
                }, F.prototype.getComplianceKey = function() {
                    return "compliance_v2_" + P.openid + "_" + P.country
                }, F.prototype.getComplianceRecord = function() {
                    return (0, r.default)(this.getComplianceKey())
                }, F.prototype.saveComplianceRecord = function() {
                    return (0, v.default)(this.getComplianceKey(), !0)
                }, F.prototype.loginRecordKey = function(t) {
                    return (P.storageUserInfoKey || '') + "loginrecord_" + t
                }, F.prototype.saveLoginRecord = function(t, e) {
                    return (0, v.default)(this.loginRecordKey(t), e)
                }, F.prototype.getLoginRecord = function(t) {
                    var e, n = (0, r.default)(this.loginRecordKey(t));
                    for (e in n) n[e] = decodeURIComponent(n[e]);
                    return n
                }, F.prototype.getVipScore = function() {
                    var s;
                    return C(this, void 0, void 0, function() {
                        var e, n, i, o, r, a;
                        return k(this, function(t) {
                            switch (t.label) {
                                case 0:
                                    return 'VN' === this.getCountry() ? [2] : null !== (s = window.vipcenterConfig) && void 0 !== s && s.showCurrent || this.isMidasLogin() ? (e = this.getProductItem(), o = this.getCurrentChannel(), r = o.mainChannel || o.pm.split(':')[0], n = parseFloat((+(null == e ? void 0 : e.price) / 100).toFixed(2)), i = "" + n + (null == e ? void 0 : e.currency_type) + r, o = this.getProductScore(i), r = JSON.stringify([{
                                        score_source: 'amt:payChannel',
                                        source_quantity: n,
                                        source_value: (null == e ? void 0 : e.currency_type) + ":" + r
                                    }]), o ? [2, o] : [4, (0, y.addRCParamsGo)({
                                        source: r
                                    })]) : [3, 3];
                                case 1:
                                    return a = t.sent(), [4, (0, u.default)(this._sendReq(B, a, 'post'))];
                                case 2:
                                    if (a = t.sent(), a[0], (a = a[1]) && 0 === a.ret) return this.setProductScore(i, a.data), [2, a.data];
                                    t.label = 3;
                                case 3:
                                    return [2]
                            }
                        })
                    })
                }, F.prototype.isItemTakeEffect = function(t) {
                    var e = t.begin_time.replace(/-/g, '/'),
                        t = t.end_time.replace(/-/g, '/'),
                        e = new Date(e).getTime() || 0,
                        t = new Date(t).getTime() || 0;
                    return Date.now() > e && Date.now() < t
                }, F.prototype.getTaskProcess = function(t, e, n) {
                    t = b(b({}, this._getInterfaceParams()), {
                        taskid: e,
                        groupid: t,
                        openid: window.muid
                    });
                    return n && (t.appid = n), this._sendReq(N, t, 'get')
                }, F.prototype.getTaskDetail = function(t, e) {
                    t = b(b({}, this._getInterfaceParams()), {
                        groupid: t,
                        openid: window.muid || this.getOpenId()
                    });
                    return e && (t.appid = e), this._sendReq(U, t, 'get')
                }, F.prototype.getPageType = function() {
                    return location.pathname.split('/')[3]
                }, F.prototype.getBindUserEmail = function() {
                    var t, e = this.getLoginRecord(P.appid);
                    return (null === (t = null == P ? void 0 : P.midasUser) || void 0 === t ? void 0 : t.email) || (null == e ? void 0 : e.email) || P.email
                }, F.prototype.setUserEmail = function(t) {
                    this.payInfo.email = t
                }, F.prototype.getProductScore = function(t) {
                    return this._scoreCache[t] || null
                }, F.prototype.setProductScore = function(t, e) {
                    this._scoreCache[t] = e
                }, F.prototype.isVerifiedUser = function(t) {
                    var e = this.isMidasLogin(),
                        n = this.getBindUser(),
                        e = e && n && '' !== n.verifytype,
                        t = !t || n && n.verifytype === t;
                    return e && t
                }, F.prototype.getParamsFromPayInfo = function(t) {
                    return void 0 !== this.payInfo[t] ? this.payInfo[t] : null
                }, F);

            function F() {
                this.browserParams = {}, this.channelInfo = S, this.pfinfo = {
                    pf: '',
                    zoneid: ''
                }, this.payInfo = P, this.buytype = '', this.fingerprint = '', this.activeData = '', this._scoreCache = {}, this._dataChangeCallback = function() {}, this._tokenExpireCallback = function() {}, this.product_item = null, this.browserParams = (0, o.default)(), (0, a.default)(g.default.CURRENT_BUY_ITEM, 36e5), this.__init()
            }
            e.default = n
        },
        37996: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0;
            var o = i(n(82979)),
                r = window._COUNTRY;
            e.default = {
                data: function() {
                    return {
                        country: r
                    }
                },
                created: function() {
                    this.initHandler(), this.initMidasLogin()
                },
                methods: {
                    initHandler: function() {
                        var t = window.midasLogin;
                        null != t && t.on('loginSuccess', this.loginSuccessHandle)
                    },
                    initMidasLogin: function() {
                        var t = window.midasLogin,
                            e = window._SERVER_DATA.isNoSupportCountry ? 'ot' : this.country;
                        null != t && t.init({
                            country: e,
                            hash: '#login',
                            host: location.hostname,
                            preload: !0
                        })
                    },
                    loginSuccessHandle: function(t) {
                        t = t.action;
                        'loginSuccess' === t ? (0, o.default)({
                            msg: 'Login success!'
                        }) : 'facebookLoginSuccess' === t ? (0, o.default)({
                            msg: 'Facebook login success!'
                        }) : 'resetSuccess' === t ? (0, o.default)({
                            msg: 'Password reset success!'
                        }) : 'registerSuccess' === t ? (0, o.default)({
                            msg: 'Register success'
                        }) : (0, o.default)({
                            msg: 'Login success'
                        }), 'function' == typeof this.customLoginCallback ? this.customLoginCallback() : location.reload()
                    }
                }
            }
        },
        26467: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(53984), n(83611), n(27471);
            var i = window.report;
            e.default = {
                data: function() {
                    var t = (null === (t = this.lanres) || void 0 === t ? void 0 : t.checkRightList) || [];
                    return {
                        checked: new Array(t.length).fill(!1),
                        checkedErrorShow: !1,
                        checkRightOptions: t
                    }
                },
                methods: {
                    toggleCheckedCallback: function(t, e) {
                        this.$set(this.checked, t, e)
                    },
                    handleCheckRight: function(t, e) {
                        void 0 === t && (t = 'facebook');
                        var n = e.target.dataset.link,
                            n = ['termsOfServicesLink', 'privacyPolicyLink', 'pubgmSupplementaryTermsLink'].indexOf(n); - 1 !== n && (e.stopPropagation(), i.click('facebook' === t ? n + 1 + "_URL" : "terms_" + (n + 1) + "_URL"))
                    }
                }
            }
        },
        54019: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(63238), n(61418), n(25901), n(92189), n(91047), n(5769), n(17460), n(14078), n(27471), n(52327), n(95163), n(73902), n(48410), n(95374), n(55849), n(71444), n(32081), n(8269), n(52077), n(911), n(43512), n(76056);
            var p = i(n(37196)),
                u = i(n(81233)),
                o = n(14197),
                r = function(t, a, s, c) {
                    return new(s = s || Promise)(function(n, e) {
                        function i(t) {
                            try {
                                r(c.next(t))
                            } catch (t) {
                                e(t)
                            }
                        }

                        function o(t) {
                            try {
                                r(c.throw(t))
                            } catch (t) {
                                e(t)
                            }
                        }

                        function r(t) {
                            var e;
                            t.done ? n(t.value) : ((e = t.value) instanceof s ? e : new s(function(t) {
                                t(e)
                            })).then(i, o)
                        }
                        r((c = c.apply(t, a || [])).next())
                    })
                },
                h = function(n, i) {
                    var o, r, a, s = {
                            label: 0,
                            sent: function() {
                                if (1 & a[0]) throw a[1];
                                return a[1]
                            },
                            trys: [],
                            ops: []
                        },
                        t = {
                            next: e(0),
                            throw: e(1),
                            return: e(2)
                        };
                    return "function" == typeof Symbol && (t[Symbol.iterator] = function() {
                        return this
                    }), t;

                    function e(e) {
                        return function(t) {
                            return function(e) {
                                if (o) throw new TypeError("Generator is already executing.");
                                for (; s;) try {
                                    if (o = 1, r && (a = 2 & e[0] ? r.return : e[0] ? r.throw || ((a = r.return) && a.call(r), 0) : r.next) && !(a = a.call(r, e[1])).done) return a;
                                    switch (r = 0, (e = a ? [2 & e[0], a.value] : e)[0]) {
                                        case 0:
                                        case 1:
                                            a = e;
                                            break;
                                        case 4:
                                            return s.label++, {
                                                value: e[1],
                                                done: !1
                                            };
                                        case 5:
                                            s.label++, r = e[1], e = [0];
                                            continue;
                                        case 7:
                                            e = s.ops.pop(), s.trys.pop();
                                            continue;
                                        default:
                                            if (!(a = 0 < (a = s.trys).length && a[a.length - 1]) && (6 === e[0] || 2 === e[0])) {
                                                s = 0;
                                                continue
                                            }
                                            if (3 === e[0] && (!a || e[1] > a[0] && e[1] < a[3])) {
                                                s.label = e[1];
                                                break
                                            }
                                            if (6 === e[0] && s.label < a[1]) {
                                                s.label = a[1], a = e;
                                                break
                                            }
                                            if (a && s.label < a[2]) {
                                                s.label = a[2], s.ops.push(e);
                                                break
                                            }
                                            a[2] && s.ops.pop(), s.trys.pop();
                                            continue
                                    }
                                    e = i.call(n, s)
                                } catch (t) {
                                    e = [6, t], r = 0
                                } finally {
                                    o = a = 0
                                }
                                if (5 & e[0]) throw e[1];
                                return {
                                    value: e[0] ? e[1] : void 0,
                                    done: !0
                                }
                            }([e, t])
                        }
                    }
                },
                d = window,
                a = d.user,
                n = {
                    data: function() {
                        return {
                            taskAllowChannel: '',
                            selectTab: null,
                            taskCenter: null,
                            from: '',
                            vipClass: null != a && a.vip_level ? "vip-" + (null == a ? void 0 : a.vip_level) + "-label" : '',
                            user: a,
                            level: (null == a ? void 0 : a.vip_level) || 0,
                            quotaMap: {
                                task_product: {},
                                amt: {}
                            },
                            reachedLimit: !1,
                            showTaxesPop: !1,
                            reachLimitTips: ''
                        }
                    },
                    computed: {
                        growth: function() {
                            var t;
                            return (null === (t = this.user) || void 0 === t ? void 0 : t.growth) || 0
                        },
                        point: function() {
                            var t;
                            return (null === (t = this.user) || void 0 === t ? void 0 : t.point) || 0
                        },
                        vipLevel: function() {
                            var t;
                            return (null === (t = this.user) || void 0 === t ? void 0 : t.vip_level) || 0
                        },
                        vipIconSrc: function() {
                            return "https://cdn.midasbuy.com/oversea_web/static/images/vip/vip-icon/vip" + this.vipLevel + "-btn-label.png"
                        }
                    },
                    mounted: function() {
                        var t, e = this,
                            n = this.getStore();
                        null !== (t = d.vipcenterConfig) && void 0 !== t && t.showVipEntrance && this.checkTaskInfo(n), document.body.addEventListener('click', function(t) {
                            t.target === e.$refs.taxbg && (e.showTaxesPop = !1)
                        })
                    },
                    methods: {
                        labelMouseLeave: function() {
                            this.showTaxesPop = !1, this.getStore().cancelReq()
                        },
                        checkTaskInfo: function(u) {
                            var d, f;
                            return r(this, void 0, void 0, function() {
                                var e, n, i, o, r, a, s, c, l;
                                return h(this, function(t) {
                                    switch (t.label) {
                                        case 0:
                                            return (e = this.getStore().getPayInfo().appid, this.taskCenter = (null === (d = window.vipcenterConfig) || void 0 === d ? void 0 : d.taskCenter) || {}, r = this.taskCenter, n = r.groupid, r = r.taskList, i = (0, p.default)().from, (this.from = i) && r) ? (l = r[i], l = '*' === (null == l ? void 0 : l.filterAppid) || Array.isArray(null == l ? void 0 : l.filterAppid) && -1 !== (null == l ? void 0 : l.filterAppid.indexOf(e)), r[i] && (o = r[i].defaultChannel) && (r = this.tabsData.find(function(t) {
                                                return t.id === o
                                            }), this.selectTab = r), u.isMidasLogin() && l && n ? ((a = this.taskHandleHooks()).beforGetTask(), [4, u.getTaskDetail(n, this.taskCenter.appid)]) : [3, 3]) : [2];
                                        case 1:
                                            return c = t.sent(), s = null === (f = null === (f = null === (f = null === (f = c) || void 0 === f ? void 0 : f.task_detail) || void 0 === f ? void 0 : f.buytask) || void 0 === f ? void 0 : f.task) || void 0 === f ? void 0 : f.rule_item, [4, u.getTaskProcess(n, i, this.taskCenter.appid)];
                                        case 2:
                                            l = t.sent(), c = null === (f = null === (f = l) || void 0 === f ? void 0 : f.task_progress_detail) || void 0 === f ? void 0 : f.task_info, l = null == s ? void 0 : s.find(function(t) {
                                                return t.task_id === i
                                            }), a.afterGetTask(l), null != c && c.total_score && Number(null == c ? void 0 : c.total_score) >= Number(null == l ? void 0 : l.present_item[0].num) && a.achieveScore(l), t.label = 3;
                                        case 3:
                                            return [2]
                                    }
                                })
                            })
                        },
                        taskHandleHooks: function() {
                            function n() {}
                            var t = null === (e = this.taskCenter.taskList[this.from]) || void 0 === e ? void 0 : e.type,
                                e = ['beforGetTask', 'afterGetTask', 'achieveScore'].reduce(function(t, e) {
                                    return t[e] = n, t
                                }, {}),
                                t = t && 'cardPay' === t ? {
                                    afterGetTask: function(t) {},
                                    achieveScore: function(t) {}
                                } : {};
                            return Object.assign(e, t)
                        },
                        queryUserLimit: function(c) {
                            var l;
                            return r(this, void 0, void 0, function() {
                                var e, i, o, n, r, a, s;
                                return h(this, function(t) {
                                    switch (t.label) {
                                        case 0:
                                            if (null !== (l = d.vipcenterConfig) && void 0 !== l && l.notQueryLimit || !c.isMidasLogin()) return [2];
                                            t.label = 1;
                                        case 1:
                                            return t.trys.push([1, 3, , 4]), [4, c._sendReq('/interface/queryUserLimit', {}, 'get')];
                                        case 2:
                                            return e = t.sent(), [3, 4];
                                        case 3:
                                            return t.sent(), [3, 4];
                                        case 4:
                                            if (0 !== (null == e ? void 0 : e.ret)) return [2];
                                            for (r in i = e.data.user_limit_map, o = {}, n = function(t) {
                                                    var t = i[t],
                                                        n = [];
                                                    Object.values(t.cycLe_quota).forEach(function(t) {
                                                        var e = t.used_quota,
                                                            t = t.total_quota; - 1 < t && e <= t && n.push(parseInt(t, 10) - parseInt(e, 10))
                                                    }), o[t.score_source] || (o[t.score_source] = {}), o[t.score_source][t.score_type] = Math.min.apply(Math, n)
                                                }, i) n(r);
                                            return this.quotaMap = o, s = o.task_product, a = s.growth, s = s.point, this.reachedLimit = 0 === a && 0 === s, [2, o]
                                    }
                                })
                            })
                        },
                        getStore: function() {
                            return this.gameStore || this.goodsStore || this.vipStore || this.store
                        },
                        queryShowTaxPop: function(c) {
                            var l;
                            return r(this, void 0, void 0, function() {
                                var e, n, i, o, r, a, s;
                                return h(this, function(t) {
                                    switch (t.label) {
                                        case 0:
                                            return (this.lanRes = Object.assign({}, this.lanRes, {
                                                reachLimitTips: ''
                                            }), e = this.getStore(), (0, u.default)() && 'mouseenter' === c.type) ? [2] : (this.showTaxesPop = !0, [4, this.queryUserLimit(e)]);
                                        case 1:
                                            return n = t.sent(), [4, e.getVipScore()];
                                        case 2:
                                            return (o = t.sent()) && (s = o.growth, r = o.point, i = {
                                                growth: s,
                                                point: r
                                            }, n && (a = parseInt(null === (l = null == n ? void 0 : n.amt) || void 0 === l ? void 0 : l.growth, 10), o = s && a < s ? a : 1 / 0, r = 0 === a, s = window.langResource, a = s.partialReach, s = s.allReachLimit, this.reachLimitTips = r ? s : Number.isFinite(o) ? a.replace('{0}', "" + (Number.isFinite(o) ? o : '')) : '', this.lanRes = Object.assign({}, this.lanRes, {
                                                reachLimitTips: this.reachLimitTips
                                            }), Object.assign(i, {
                                                reachedLimit: r,
                                                canObtainGrowth: o
                                            })), this.currentProduct = Object.assign({}, this.currentProduct, i), e.setProductItem(this.currentProduct)), [2]
                                    }
                                })
                            })
                        },
                        getQueryVipScoreParams: function(n) {
                            return r(this, void 0, void 0, function() {
                                var e;
                                return h(this, function(t) {
                                    switch (t.label) {
                                        case 0:
                                            return e = Number(n.price), e = parseFloat((e / 100).toFixed(2)), e = JSON.stringify([{
                                                score_source: 'amt:payChannel',
                                                source_quantity: e,
                                                source_value: (null == n ? void 0 : n.currency_type) + ":" + n.payChannel
                                            }]), [4, (0, o.addRCParamsGo)({
                                                source: e
                                            })];
                                        case 1:
                                            return [2, t.sent()]
                                    }
                                })
                            })
                        }
                    }
                };
            e.default = n
        },
        14197: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.addRCParamsGo = function(n) {
                return n.browser_info = function() {
                    var t = s.default.get('UUID') || window.__Report_INFO.tid || '',
                        e = navigator.platform.toLowerCase(),
                        n = !!window.navigator.cookieEnabled,
                        i = navigator.userAgent,
                        o = s.default.get('device_id') || '',
                        r = window.fingerprint || '';
                    return [t, e, n, '', i, o, window.currentLang || 'en', r].map(function(t) {
                        return (0, a.default)(t)
                    }).join(',')
                }(), new Promise(function(e, t) {
                    window.___Kepler_WebTicket ? (n.rc_extra = (0, a.default)("KeplerTicket=" + (0, a.default)(window.___Kepler_WebTicket)), e(n)) : window.TencentKepler ? (window.TencentKepler.predict(function(t) {
                        n.rc_extra = (0, a.default)("KeplerTicket=" + (0, a.default)(t)), e(n)
                    }), null != r && r.custom('async.kepler', {})) : e(n)
                })
            }, e.addRCParamsOrder = function(i, o) {
                return new Promise(function(e, t) {
                    var n;
                    window.___Kepler_WebTicket ? (n = "KeplerTicket=" + (0, a.default)(window.___Kepler_WebTicket), i[o] = i[o] || '', i[o] += i[o] ? "&" + n : n, e(i)) : window.TencentKepler ? (window.TencentKepler.predict(function(t) {
                        t = "KeplerTicket=" + (0, a.default)(t);
                        i[o] = i[o] || '', i[o] += i[o] ? "&" + t : t, e(i)
                    }), null != r && r.custom('async.kepler', {})) : e(i)
                })
            }, n(25613), n(61013), n(63238), n(61418);
            var a = i(n(66533)),
                s = i(n(75810)),
                r = window.report
        },
        89934: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(48410), n(95374), n(55849);
            var o = i(n(37196)),
                r = function() {
                    return (r = Object.assign || function(t) {
                        for (var e, n = 1, i = arguments.length; n < i; n++)
                            for (var o in e = arguments[n]) Object.prototype.hasOwnProperty.call(e, o) && (t[o] = e[o]);
                        return t
                    }).apply(this, arguments)
                },
                a = window.report,
                s = window.fbReport,
                c = window.reportConfig,
                l = window.__PAY_INFO,
                u = window.user,
                i = window._SHOPCODE,
                d = window.globalReportParams,
                f = window.autoReport,
                p = window.autoReportConfig,
                n = c || {},
                c = n.show,
                h = void 0 !== c && c,
                v = n.pageConfig,
                o = (0, o.default)();

            function g(t) {
                var e = t.action,
                    n = t.format,
                    i = t.params,
                    t = t.reportTo,
                    o = {};
                i.forEach(function(t) {
                    var e = d[t];
                    null != e && (o[t] = e)
                }), 'midasbuy' === t ? a && 'function' == typeof a[e] && a[e](n, o) : 'facebook' === t && s && s.doReport(e, o)
            }
            Object.assign(window.globalReportParams || {}, r(r(r(r(r({}, l || {}), u || {}), o), {
                shopcode: i && i.toLowerCase() || ''
            }), d)), e.default = function() {
                h && f && (f.init({
                    report: g,
                    pages: v,
                    config: p
                }), f.observe())
            }
        },
        69437: function(t, e) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0;
            e.default = function(t) {
                return t.then(function(t) {
                    return [null, t]
                }).catch(function(t) {
                    return [t, null]
                })
            }
        },
        86166: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(52077), n(72482), n(27471);
            var o = window;
            n = function(n, t) {
                n = n.toLowerCase();
                var e = o.buylimits || o.reglimits || {},
                    i = null,
                    t = function(t) {
                        var e = t.split('-'),
                            n = +e[0],
                            i = +e[1],
                            o = +e[2],
                            r = new Date,
                            t = r.getFullYear(),
                            e = r.getMonth() + 1,
                            r = r.getDate(),
                            n = t - n;
                        0 < n && (o = r - o, ((i = e - i) < 0 || 0 == i && o < 0) && (n -= 1));
                        return n
                    }(t);
                return $.each(e, function(t, e) {
                    return e.country instanceof Array && -1 !== e.country.indexOf(n) ? (i = e, !1) : void('*' === e.country && (i = e))
                }), {
                    ret: !i || t >= i.minage,
                    minage: i ? i.minage : ''
                }
            };
            e.default = n
        },
        35629: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(95374), n(27471);
            var r = i(n(29287)),
                n = function(i, o) {
                    for (var t = localStorage.length, e = [], n = 0; n < t; n++) e.push(localStorage.key(n));
                    e.forEach(function(t) {
                        var e, n;
                        t && -1 !== t.indexOf(i) && (e = (0, r.default)(t), n = (new Date).getTime(), null != e && e.saveTime && e.saveTime + o < n && localStorage.removeItem(t))
                    })
                };
            e.default = n
        },
        49112: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0;
            var o = i(n(27693)),
                n = i(n(87815));
            o.default.extend(n.default), window.dayjs = o.default;
            o = o.default;
            e.default = o
        },
        36576: function(t, e, n) {
            "use strict";

            function o(t, e) {
                var n, i;
                'object' == typeof t && null !== t && (n = t, i = e, Object.keys(n).forEach(function(t) {
                    i.call(n, t, n[t]), o(n[t], i)
                }))
            }
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(95374), n(55849), n(92571), e.default = o
        },
        32349: function(t, e) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.isDomInViewPort = function(t) {
                if (!t) return !1;
                var e = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                return (t.getBoundingClientRect() && t.getBoundingClientRect().top) <= e
            }
        },
        11384: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(63238), n(61418), n(61013), n(92571), n(48410), n(5769), n(17460), n(14078), n(73902), n(95374), n(55849), n(52327), n(52077), n(72482), n(27471), n(95163), n(32081), n(911), n(98010), n(40895), n(25613);
            var o = i(n(65776)),
                n = (r.prototype.mapDrmRules = function(r) {
                    var a = this;
                    return new Promise(function(e, t) {
                        var n = r.mpInfo,
                            i = r.productList,
                            o = Object.keys(n).map(a.mapRuleNameToHandler).map(function(t) {
                                var e = Object.assign({}, r, {
                                    productList: i,
                                    rule: n[t.ruleName]
                                });
                                return t.handler(e)
                            });
                        o.length || e(i), Promise.all(o).then(function(t) {
                            t = t.reduce(function(n, t) {
                                return t.map(function(t, e) {
                                    return Object.assign(n[e] || {}, t)
                                })
                            }, []);
                            e(t)
                        }).catch(function(t) {
                            e(r.productList)
                        })
                    })
                }, r.prototype.mapBuyGoodsRule = function(i) {
                    var r = this,
                        o = i.productList,
                        a = i.rule,
                        s = i.ignoreAllowChannel,
                        c = i.drmInfo;
                    return a ? new Promise(function(e, t) {
                        var n = o.map(function(i) {
                            if (i.matchedRule) return i;
                            var o;
                            if (a.goods.rule_item.forEach(function(t) {
                                    var e = t.product_id.split(',').find(function(t) {
                                            return t === i.productid
                                        }),
                                        n = i.targetChannel,
                                        n = s || -1 < t.allow_channel.indexOf(n) || '*' === t.allow_channel;
                                    r.isRuleItemTakeEffect(t) && n && e && (o = t)
                                }), o) {
                                var t = /FIXED:(\d+)/.exec(o.discount),
                                    e = Number(o.discount),
                                    n = i.price;
                                return t ? n = "" + parseInt(t[0].replace('FIXED:', ''), 10) : e && (n = "" + Math.floor(parseInt(i.price, 10) * e / 100)), Object.assign(i, {
                                    matchedRule: o,
                                    show_price: i.noShowPrice ? void 0 : i.price,
                                    original_price: i.price,
                                    price: n
                                })
                            }
                            return i
                        });
                        r.requestDrmLimit(Object.assign({}, i, {
                            drmInfo: c,
                            productList: n,
                            buyType: 'buygoods'
                        })).then(function(t) {
                            return e(t)
                        }).catch(function(t) {
                            e(n)
                        })
                    }) : Promise.resolve(o)
                }, r.prototype.emptyRuleHandler = function(t) {
                    t = t.productList;
                    return Promise.resolve(t)
                }, r.prototype.mapRuleNameToHandler = function(t) {
                    switch (t) {
                        case 'buy_goods':
                        case 'buygoods':
                            return {
                                ruleName: t, handler: this.mapBuyGoodsRule.bind(this)
                            };
                        default:
                            return {
                                ruleName: t, handler: this.emptyRuleHandler.bind(this)
                            }
                    }
                }, r.prototype.requestDrmLimit = function(t) {
                    var r = this,
                        a = t.productList,
                        e = t.buyType,
                        n = a.length ? a.filter(function(t) {
                            return !!t.matchedRule
                        }) : [];
                    if (!n.length) return Promise.resolve(a);
                    var i = this.store.getPayInfo(),
                        t = "fakeid_" + Math.random().toString().replace('.', ''),
                        o = Object.assign({}, this.store._getInterfaceParams(), {
                            openid: i.openid || t,
                            pf: i.pf,
                            drmInfo: Object.keys(i.drm_info).reduce(function(t, e, n) {
                                return 0 === n ? "" + t + e + "=" + i.drm_info[e] : t + "&" + e + "=" + i.drm_info[e]
                            }, ''),
                            characName: i.charac_name,
                            groupId: i.drm_info.group_id,
                            productList: n.reduce(function(t, e) {
                                return t.indexOf(e.productid) < 0 && t.push(e.productid), t
                            }, []).join(','),
                            buyType: e
                        });
                    return new Promise(function(e) {
                        r.store.queryDrmLimitNoLogin(o).then(function(t) {
                            try {
                                return t.info.limit_info.resop_mpinfo.detail.forEach(function(t) {
                                    for (var e, n = 0; n < a.length; n += 1) {
                                        var i = a[n].productid === t.product_id,
                                            o = r.getQuotaInfo(t);
                                        i && null !== (e = (a[n].quotaInfo = o).runOutInfo) && void 0 !== e && e.isRunOut && a[n].original_price && (a[n].price = a[n].original_price, a[n].show_price = void 0)
                                    }
                                }), e(a)
                            } catch (t) {
                                return e(a)
                            }
                        }).catch(function() {
                            return e(a)
                        })
                    })
                }, r.prototype.isRuleItemTakeEffect = function(t) {
                    var e = t.begin_time.replace(/-/g, '/'),
                        t = t.end_time.replace(/-/g, '/'),
                        e = new Date(e).getTime() || 0,
                        t = new Date(t).getTime() || 0;
                    return Date.now() > e && Date.now() < t
                }, r.prototype.getQuotaInfo = function(t) {
                    return (0, o.default)(t)
                }, r);

            function r(t) {
                this.store = t, this.mapRuleNameToHandler = this.mapRuleNameToHandler.bind(this)
            }
            e.default = n
        },
        65776: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(98010), e.default = function(t) {
                for (var e = {
                        totalQuotaInfo: void 0,
                        uinQuotaInfo: void 0,
                        runOutInfo: void 0
                    }, n = {
                        runOutLimitType: 'total',
                        isRunOut: -1 < t.total_quota && t.total_used_quota >= t.total_quota,
                        used_quota: t.total_used_quota,
                        total_quota: t.total_quota
                    }, i = {
                        runOutLimitType: 'total',
                        runOutCycleType: 'month',
                        isRunOut: -1 < t.month_total_quota && t.month_total_used_quota >= t.month_total_quota,
                        used_quota: t.month_total_used_quota,
                        total_quota: t.month_total_quota
                    }, o = {
                        runOutLimitType: 'total',
                        runOutCycleType: 'week',
                        isRunOut: -1 < t.week_total_quota && t.week_total_used_quota >= t.week_total_quota,
                        used_quota: t.week_total_used_quota,
                        total_quota: t.week_total_quota
                    }, r = {
                        runOutLimitType: 'total',
                        runOutCycleType: 'day',
                        isRunOut: -1 < t.day_total_quota && t.day_total_used_quota >= t.day_total_quota,
                        used_quota: t.day_total_used_quota,
                        total_quota: t.day_total_quota
                    }, a = {
                        runOutLimitType: 'uin',
                        isRunOut: -1 < t.uin_quota && t.used_quota >= t.uin_quota,
                        used_quota: t.used_quota,
                        total_quota: t.uin_quota
                    }, s = {
                        runOutLimitType: 'uin',
                        runOutCycleType: 'month',
                        isRunOut: -1 < t.month_uin_quota && t.month_used_quota >= t.month_uin_quota,
                        used_quota: t.month_used_quota,
                        total_quota: t.month_uin_quota
                    }, c = {
                        runOutLimitType: 'uin',
                        runOutCycleType: 'week',
                        isRunOut: -1 < t.week_uin_quota && t.week_uin_used_quota >= t.week_uin_quota,
                        used_quota: t.week_uin_used_quota,
                        total_quota: t.week_uin_quota
                    }, t = {
                        runOutLimitType: 'uin',
                        runOutCycleType: 'day',
                        isRunOut: -1 < t.day_uin_quota && t.day_uin_used_quota >= t.day_uin_quota,
                        used_quota: t.day_uin_used_quota,
                        total_quota: t.day_uin_quota
                    }, l = [n, a, i, o, r, t, c, s], u = 0; u < l.length; u += 1)
                    if (!0 === l[u].isRunOut) {
                        e.runOutInfo = l[u];
                        break
                    } for (var d = [n, i, o, r].filter(function(t) {
                        return -1 < t.total_quota
                    }), u = 0; u < d.length; u += 1)
                    if (!1 === d[u].isRunOut) {
                        e.totalQuotaInfo = d[u];
                        break
                    } e.totalQuotaInfo || (e.totalQuotaInfo = d[0]);
                for (var f = [t, c, s, a].filter(function(t) {
                        return -1 < t.total_quota
                    }), u = 0; u < f.length; u += 1)
                    if (!1 === f[u].isRunOut) {
                        e.uinQuotaInfo = f[u];
                        break
                    } return e.uinQuotaInfo || (e.uinQuotaInfo = f[0]), e
            }
        },
        66533: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(52077), n(911), n(63238), n(40895);
            e.default = function(t) {
                return encodeURIComponent(t).replace(/[!'()*]/g, function(t) {
                    return "%" + t.charCodeAt(0).toString(16)
                })
            }
        },
        82322: function(t, e, n) {
            "use strict";

            function c(t) {
                return t.replace('.', '#').replace(/,/g, '.').replace('#', ',')
            }
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(32081), n(63238), n(40895), n(52077), n(72482), n(911);
            n = function(t, e, n) {
                var i = (r = t, r = parseInt(r, 10), (r /= 100).toString()),
                    o = function(t) {
                        for (var e = (t = String(t).split('.'))[0], t = 1 < t.length ? "." + t[1] : '', n = /(\d+)(\d{3})/; n.test(e);) e = e.replace(n, '$1,$2');
                        return e + t
                    }(i);
                if (a = n || window.__PAY_INFO.currency_config) {
                    var t = a.decimalPoint || '.',
                        r = a.thousandPoint || ',',
                        n = a.currencySymbol || e,
                        a = a.leftSymbol || !1,
                        t = o.replace('.', 'd').replace(/,/g, r).replace('d', t);
                    return a ? t = n + t : t += n, t
                }
                var s = i + " " + e;
                switch (e) {
                    case 'IDR':
                        s = "Rp " + c(o);
                        break;
                    case 'THB':
                        s = "à¸¿" + o;
                        break;
                    case 'PHP':
                        s = "â‚±" + o;
                        break;
                    case 'VND':
                        s = c(o) + "â‚«";
                        break;
                    case 'MYR':
                        s = "RM" + o
                }
                return s
            };
            e.default = n
        },
        55862: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(52077), n(1203);
            e.default = function() {
                var t = document.cookie.match(/UUID=([^;]*);?/);
                return t ? t[1] : null
            }
        },
        29287: function(t, e) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0;

            function n(t) {
                var e = null === (e = window.localStorage) || void 0 === e ? void 0 : e.getItem(t),
                    t = null;
                if (e) try {
                    t = JSON.parse(e)
                } catch (t) {}
                return t
            }
            e.default = n
        },
        6394: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(63238), n(40895), n(61418), n(95163), n(95374), n(55849), n(92571), n(26252);
            var o = i(n(92232)),
                r = i(n(64958)),
                a = i(n(26880)),
                s = i(n(81233)),
                c = n(58094),
                l = i(n(34023)),
                u = i(n(11385)),
                d = (0, i(n(37196)).default)(),
                n = "-----BEGIN PUBLIC KEY-----\n" + window.goPublicKey + "\n-----END PUBLIC KEY-----",
                f = new a.default;
            f.setPublicKey(n);
            var n = window,
                p = n.loginKey,
                h = n.enabledLoginSig;
            r.default.interceptors.request.use(function(t) {
                var e, n;
                return h && (e = t.data, n = Math.floor(Date.now() / 1e3), t.headers.Csrftokentime = n, n = "" + JSON.stringify(e) + p + n, n = (0, o.default)(n).toString(), t.headers.Csrftokenv2 = n), t
            }, function(t) {
                return Promise.reject(t)
            }), r.default.interceptors.response.use(function(t) {
                var e = t.data;
                return 1e3 === e.ret && (d.hidePop || (0, l.default)({
                    title: 'System is busy',
                    desc: 'Please refresh page and try again.'
                })), 0 === e.ret && (t.config.url, JSON.parse(t.config.data), t.data), t
            }, function(t) {
                return t.config && t.config.url, d.hidePop || (0, l.default)({
                    title: 'System busy',
                    desc: 'please try again later.'
                }), Promise.resolve({
                    data: {
                        ret: 9999
                    }
                })
            });
            var v = (0, s.default)(!0),
                g = window.goServerUrl,
                s = {
                    directLogin: function(t) {
                        var e = u.default.extend({}, t);
                        return (0, c.genRecaptchaToken)('direct_login').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/directLogin", e)
                        })
                    },
                    login: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', e.password = f.encrypt(e.password), (0, c.genRecaptchaToken)('login_emailLogin').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/login", e)
                        })
                    },
                    bind: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', (0, c.genRecaptchaToken)('login_bind').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/bind", e)
                        })
                    },
                    thirdPartyLogin: function(t, e) {
                        void 0 === e && (e = 'open');
                        var n = u.default.extend({}, t);
                        'string' == typeof n.keyVersion && (n.keyVersion = Number(n.keyVersion));
                        var i = g + "/thirdLogin?";
                        Object.keys(n).forEach(function(t) {
                            i += t + "=" + encodeURIComponent(n[t]) + "&"
                        }), 'open' === e ? window.open(i) : location.href = i
                    },
                    thirdPartyActive: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', (0, c.genRecaptchaToken)('register_thirdPartyActive').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/thirdActive", e)
                        })
                    },
                    checkUsername: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', (0, c.genRecaptchaToken)('register_checkUsername').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/usernameverify", e)
                        })
                    },
                    registerSend: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', e.action = 'register', e.password = f.encrypt(e.password), (0, c.genRecaptchaToken)('register_sendCode').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/register", e)
                        })
                    },
                    registerResend: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', e.action = 'resend', (0, c.genRecaptchaToken)('register_resendCode').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/register", e)
                        })
                    },
                    registerActive: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', e.action = 'active', e.activecode = f.encrypt(e.activecode), (0, c.genRecaptchaToken)('register_submitCode').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/register", e)
                        })
                    },
                    emailLogin: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', e.password = f.encrypt(e.password), (0, c.genRecaptchaToken)('login_emailLogin').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/emaillogin", e)
                        })
                    },
                    facebookLogin: function(t) {
                        var e = u.default.extend({}, t);
                        'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion));
                        var n, i = g + "/facebooklogin?";
                        for (n in e) i += n + "=" + encodeURIComponent(e[n]) + "&";
                        window.open(i)
                    },
                    logout: function() {
                        return r.default.post(g + "/logout", {
                            endpoint_type: 'browser'
                        }).then(function(t) {
                            location.reload()
                        })
                    },
                    resetCheckUsername: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', e.action = 'checkusername', (0, c.genRecaptchaToken)('resetpw_sendCode').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/resetpsw", e)
                        })
                    },
                    resetResend: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', e.action = 'resend', (0, c.genRecaptchaToken)('resetpw_sendCode').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/resetpsw", e)
                        })
                    },
                    resetSubmitPassword: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', e.action = 'submitpassword', e.password = f.encrypt(e.password), e.activecode = f.encrypt(e.activecode), (0, c.genRecaptchaToken)('resetpw_submitCode').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/resetpsw", e)
                        })
                    },
                    modifyPassword: function(t) {
                        var e = u.default.extend({}, t);
                        return 'string' == typeof e.keyVersion && (e.keyVersion = Number(e.keyVersion)), e.endpoint_type = v ? 'h5' : 'pc', e.oldpassword = f.encrypt(e.oldpassword), e.newpassword = f.encrypt(e.newpassword), (0, c.genRecaptchaToken)('modifypw_').then(function(t) {
                            return t && (e.recaptchatoken = t), r.default.post(g + "/modifypsw", e)
                        })
                    },
                    verifyInit: function(t, n) {
                        'function' == typeof window.capDestroy && window.capDestroy();
                        var e = document.getElementById('capScript');
                        e && document.body.removeChild(e);
                        e = document.createElement('script');
                        e.id = 'capScript', e.src = t, e.onload = function() {
                            var t = setInterval(function() {
                                void 0 !== window.TCapMsg && void 0 !== window.AqSCode && (clearInterval(t), window.capInit(document.getElementById('TCaptcha'), {
                                    callback: e,
                                    type: 'popup',
                                    pos: 'fixed',
                                    lang: 1033
                                }))
                            }, 200);

                            function e(t) {
                                0 === t.ret && 'function' == typeof n && n(t.ticket)
                            }
                        }, document.body.appendChild(e)
                    }
                };
            e.default = s
        },
        81233: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = function(t) {
                var e = (0, o.default)().usePC,
                    n = /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent);
                return !(!t && '1' === e) && n
            };
            var o = i(n(37196))
        },
        54626: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.chunk = function(t, e) {
                e = Math.max(e || 1, 0);
                var n = null === t ? 0 : t.length;
                if (!n || e < 1) return [];
                var i = 0,
                    o = 0,
                    r = new Array(Math.ceil(n / e));
                for (; i < n;) r[o++] = t.slice(i, i += e);
                return r
            }, n(72410)
        },
        45812: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(72264), n(95374), n(55849), n(52077), n(72482);
            var s, c = i(n(75810));
            (n = s = s || {}).necessary = "necessary", n.fn = "fn", n.analy = "analy";
            var l = function(t) {
                    void 0 === t && (t = '|');
                    var e = t.split('|'),
                        t = e[0],
                        t = void 0 === t ? 0 : t,
                        e = e[1];
                    return {
                        fn: !!+t,
                        analy: !!+(void 0 === e ? 0 : e)
                    }
                }(c.default.get('cookie_control')) || {
                    fn: !1,
                    analy: !1
                },
                n = {
                    set: function(t, e, n) {
                        var i, o, r, a, a = (i = t, r = window.__CookieCategory || {
                            fn: [],
                            analy: []
                        }, a = s.necessary, null !== (o = r.fn) && void 0 !== o && o.some(function(t) {
                            return t === i
                        }) ? a = s.fn : null !== (r = r.analy) && void 0 !== r && r.some(function(t) {
                            return t === i
                        }) && (a = s.analy), a);
                        if (a === s.fn && null !== l && l.fn || a === s.analy && null !== l && l.analy || a === s.necessary) return c.default.set(t, e, n)
                    },
                    get: c.default.get,
                    del: c.default.del,
                    deleteCategory: function(t) {
                        var e, n, i = window.__CookieCategory || {
                            fn: [],
                            analy: []
                        };
                        t === s.fn && null !== (e = i.fn) && void 0 !== e && e.forEach(function(t) {
                            c.default.del(t, {
                                domain: (null === location || void 0 === location ? void 0 : location.hostname) || 'www.midasbuy.com'
                            })
                        }), t === s.analy && null !== (n = i.analy) && void 0 !== n && n.forEach(function(t) {
                            c.default.del(t, {
                                domain: (null === location || void 0 === location ? void 0 : location.hostname) || 'www.midasbuy.com'
                            })
                        })
                    }
                };
            e.default = n
        },
        34023: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(26252);
            var o = i(n(11385));
            n = function(t) {
                var e, n = "<div class=\"pop-box show\" id=\"pop-box\" tabindex=\"-1\">\n        <div class=\"pop pop-one show\">\n            <p class=\"title\">" + ('string' == typeof t ? t : t.title) + "</p>\n            " + (t.desc ? "<p class=\"desc\">" + t.desc + ('number' == typeof t.count ? "<span id=\"popCount\">" + t.count + "</span>" : '') + (t.desc2 || '') + "</p>" : '') + "\n            <div class=\"btn-box\">\n                <div class=\"btn next-btn\" id=\"popNextBtn\" tabindex=\"0\">" + (t.next || 'OK') + "</div>\n                " + (t.cancel ? "<div class=\"btn cancel-btn\" id=\"popCancelBtn\">" + t.cancel + "</div>" : '') + "\n            </div>\n        </div>\n    </div>";
                t.row && (n = "<div class=\"pop-mode-box\" id=\"pop-box\">\n            <div class=\"pop-mode\">\n                <div class=\"mess have-desc\">\n                    <p>" + t.title + "</p>\n                </div>\n                " + (t.desc ? "<div class=\"desc max-desc\"><p>" + t.desc + "</p></div>" : '') + "\n                <div class=\"btn-wrap btn-wraps\">\n                    " + (t.cancel ? "<div class=\"btn cancel-btn\" id=\"popCancelBtn\">" + t.cancel + "</div>" : '') + "\n                    " + (t.confirm ? "<div class=\"btn comfirm-btn\" id=\"popNextBtn\">" + t.confirm + "</div>" : '') + "\n                </div>\n                <div class=\"btn-box\">\n                    <div class=\"btn next-btn\" id=\"popNextBtn\" tabindex=\"0\">" + (t.next || 'OK') + "</div>\n                    \n                </div>\n            </div>\n        </div>"), (0, o.default)('#pop-box').remove(), (0, o.default)('body').append((0, o.default)(n)), (0, o.default)('#popNextBtn').focus(), (0, o.default)('.pop-box .pop .btn-box .btn, .pop-mode-box .pop-mode .btn, #popCancelBtn').on('click', function() {
                    (0, o.default)('.pop-box, .pop-mode-box').hide()
                }), 'function' == typeof t.callback && (0, o.default)('#popNextBtn').click(t.callback), 'function' == typeof t.cancelCallback && (0, o.default)('#popCancelBtn').click(t.cancelCallback), 'number' == typeof t.count && (e = setInterval(function() {
                    var t = (0, o.default)('#popCount').text();
                    1 < t ? (0, o.default)('#popCount').text(t - 1) : clearInterval(e)
                }, 1e3))
            };
            e.default = n
        },
        63762: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(52077), n(911);
            e.default = function(t) {
                var e = t;
                try {
                    e = decodeURIComponent(t)
                } catch (t) {}
                return e.replace(/>/g, '&gt;')
            }
        },
        50707: function(t, e) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0;
            e.default = function(t, e) {
                var n, i;
                if (null === e) null !== (n = window.localStorage) && void 0 !== n && n.removeItem(t);
                else {
                    'object' == typeof e && e && !e.saveTime && (e.saveTime = (new Date).getTime());
                    try {
                        var o = JSON.stringify(e);
                        null !== (i = window.localStorage) && void 0 !== i && i.setItem(t, o)
                    } catch (t) {}
                }
            }
        },
        4826: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = function(t) {
                r && ((t = t || {}).action = 'response', t = "oversea://jsbridge?" + (t = (0, o.default)(t, !0)), alert(t))
            };
            var e = i(n(37196)),
                o = i(n(32522)),
                r = '1' === (0, e.default)().midas_sdk
        },
        73537: function(t, e, n) {
            "use strict";
            var i = n(7914)(n(4826));
            (n = window.sdk_rules) && (0, i.default)({
                intercept: JSON.stringify(n)
            })
        },
        9869: function(t, e) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0;
            e.default = {
                CURRENT_BUY_ITEM: 'CURRENT_BUY_ITEM',
                CURRENT_LOCATION: 'CURRENT_LOCATION',
                VIP_PAT_RESULT: 'HAS_PAT_VIP_RESULT',
                VIP_PAT_CENTER: 'HAS_PAT_VIP_CENTER',
                SCORE_RECEIVE: 'SCORE_RECEIVE',
                LOGINFROM: 'LOGINFROM'
            }
        },
        82979: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(26252);
            var o = i(n(11385));
            e.default = function(t) {
                var e = t.hasToastBg,
                    n = e ? "<div id=\"toast-box\" class=\"pop-toast\">" + (t.msg || '') + "</div><div class=\"toast-bg\"></div>" : "<div id=\"toast-box\" class=\"pop-toast\">" + (t.msg || '') + "</div>";
                (0, o.default)('#toast-box').remove(), e && (0, o.default)('.toast-bg').remove(), (0, o.default)('body').append((0, o.default)(n)), (0, o.default)('#toast-box').fadeIn(500), e && (0, o.default)('.toast-bg').fadeIn(500), setTimeout(function() {
                    (0, o.default)('#toast-box').fadeOut(500), e && (0, o.default)('.toast-bg').fadeOut(500), t.callback && 'function' == typeof t.callback && t.callback()
                }, t.timeout || 2e3)
            }
        },
        69903: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.xMidasEncrypt = function(e) {
                var t = JSON.stringify((0, r.default)(e, function(t) {
                        return void 0 !== t && 'object' != typeof t ? String(t) : t
                    })),
                    n = document.getElementById('xMidasToken').value;
                if (!n) return e;
                var i = document.getElementById('xMidasVersion').value,
                    o = a(function() {
                        try {
                            return window.xMidas({
                                d: t
                            })
                        } catch (t) {
                            return e
                        }
                    });
                return o.result ? (s('xmidas.encrypt', {
                    times: o.times
                }), {
                    encrypt_msg: function(t) {
                        return btoa(String.fromCharCode.apply(String, t.match(/../g).map(function(t) {
                            return parseInt(t, 16)
                        })))
                    }(o.result),
                    ctoken_ver: i,
                    ctoken: n
                }) : (s('xmidas.error', {
                    times: o.times
                }), e)
            }, e.xMidasInit = function() {
                var t;
                if (null === (t = document.getElementById('xMidasToken')) || void 0 === t || !t.value) return s('xmidas.no.token');
                try {
                    var e = a(function() {
                            return window.xMidas()
                        }),
                        n = e.result || [];
                    s('xmidas.init', {
                        times: e.times
                    }), 0 < n.length && s('xmidas.init.result', {
                        result: n.join(',')
                    })
                } catch (t) {}
            }, n(61013), n(52077), n(1203), n(32081), n(25613);
            var r = i(n(9411));

            function a(t) {
                var e = Date.now(),
                    t = t();
                return {
                    times: Date.now() - e,
                    result: t
                }
            }
            var s = function(t, e) {
                var n;
                return (n = window.report) && 'function' == typeof n.custom ? n.custom(t, e) : 'function' == typeof n ? n("midasbuy.custom." + t, e) : void 0
            }
        },
        66495: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(95163);
            n = {
                props: {
                    label: {
                        type: String,
                        default: ""
                    },
                    lanres: {
                        type: Object,
                        default: function() {
                            return {}
                        }
                    },
                    handleCheckRight: {
                        type: Function,
                        default: function() {}
                    },
                    toggleCheckedCallback: {
                        type: Function,
                        default: function() {}
                    },
                    checkedErrorShow: {
                        type: Boolean,
                        default: !1
                    },
                    tabIndex: {
                        type: String,
                        default: "0"
                    },
                    index: {
                        type: Number,
                        default: 0
                    }
                },
                data: function() {
                    return {
                        checked: !1,
                        checkedErrorMsg: this.lanres.checkedRequireError,
                        showMore: !1
                    }
                },
                methods: {
                    toggleChecked: function() {
                        report.click("confirm_terms");
                        var t = !this.checked;
                        this.checked = t, this.toggleCheckedCallback(this.index, t)
                    },
                    handleClickLabel: function(t) {
                        var e = t.target,
                            n = void 0 === e ? {} : e;
                        null != (e = n.classList) && null != e.contains && e.contains("here") ? (this.showMore = !0, t.stopPropagation()) : null != (n = n.classList) && null != n.contains && n.contains("see-less") ? (this.showMore = !1, t.stopPropagation()) : this.handleCheckRight("register", t)
                    }
                }
            };
            e.Z = n
        },
        58700: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(95163), n(32081), n(26252), n(52077), n(1203), n(27471), n(52327);
            var a = i(n(65311)),
                s = i(n(81233)),
                n = {
                    name: 'message',
                    props: {
                        notifyTitle: {
                            type: String,
                            default: 'Notification'
                        },
                        text: {
                            type: String,
                            default: ''
                        },
                        isNotification: {
                            type: Number,
                            default: 1
                        },
                        propImg: {
                            type: String,
                            default: ''
                        },
                        marketHref: {
                            type: String,
                            default: '#'
                        },
                        color: {
                            type: String,
                            default: 'orange'
                        },
                        isRtl: {
                            type: Number,
                            default: 0
                        },
                        scrollTime: {
                            type: String
                        },
                        needScroll: {
                            type: Boolean,
                            default: !0
                        },
                        needOpen: {
                            type: Boolean,
                            default: !1
                        },
                        bubble: {
                            type: String,
                            default: ''
                        }
                    },
                    data: function() {
                        return {
                            visible: !0,
                            allowMore: !1,
                            time: this.scrollTime
                        }
                    },
                    computed: {
                        modColorClass: function() {
                            return "mod-" + (this.color || 'orange')
                        }
                    },
                    mounted: function() {
                        var t = this;
                        this.scrollTime || (this.time = String(Math.max(parseInt(this.text.length) / 6, 5))), this.$nextTick(function() {
                            t.handleMessage()
                        }), this.bubble && setTimeout(function() {
                            (0, a.default)('.model-bubble').fadeOut()
                        }, 5e3)
                    },
                    methods: {
                        handleMessage: function() {
                            1 === this.isNotification ? this.handleNotifyMessage() : 0 === this.isNotification && this.handleMarketMessage(this.isRtl, 1e3 * parseInt(this.time))
                        },
                        handleNotifyMessage: function() {
                            function t() {
                                var t = (0, a.default)('.notification-message .mess').width();
                                e.allowMore = t < n
                            }
                            var e = this,
                                n = 0,
                                i = navigator.userAgent,
                                n = i.toLowerCase().match(/rv:([\d.]+)\) like gecko/) || -1 < i.indexOf("compatible") && -1 < i.indexOf("MSIE") ? this.getTextWidth((0, a.default)('.notification-message .mess span')[0].innerText) : (0, a.default)('.notification-message .mess span')[0].offsetWidth;
                            t(), (0, a.default)(window).on('resize', t)
                        },
                        getTextWidth: function(t) {
                            var e, n = document.createElement('span');
                            return n.innerText = t, n.className = 'getTextWidth', document.querySelector('.content').appendChild(n), e = document.querySelector('.getTextWidth').offsetWidth, document.querySelector('.getTextWidth').removeNode(this), e
                        },
                        handleMarketMessage: function(t, e) {
                            var n = (0, a.default)('.market-message .dowebok');
                            n.css({
                                overflow: 'hidden',
                                width: '100%'
                            }), n.wrapInner('<span>'), n.find('span').css({
                                fontWeight: '600'
                            });

                            function i() {
                                0 === t ? ((0, a.default)(this).css('margin-left', o + 'px'), (0, a.default)(this).animate({
                                    'margin-left': '-' + r + 'px'
                                }, e, 'linear', i)) : 1 === t && ((0, a.default)(this).css('margin-right', o + 'px'), (0, a.default)(this).animate({
                                    'margin-right': '-' + r + 'px'
                                }, e, 'linear', i))
                            }
                            var o = n[0].offsetWidth,
                                r = (0, a.default)('.market-message .dowebok span')[0].offsetWidth;
                            (this.needScroll || (0, s.default)(!0)) && i.call(n.find('span'))
                        },
                        closeMessage: function() {
                            this.visible = !1, this.$emit('close')
                        },
                        showMoreText: function() {
                            this.$emit('show')
                        },
                        jumpToEvent: function() {
                            if (this.marketHref) {
                                if (this.needOpen) return window.open(this.marketHref);
                                window.location.href = this.marketHref
                            }
                        }
                    }
                };
            e.Z = n
        },
        11841: function(t, e) {
            "use strict";
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0;
            var n = {
                name: 'MessageBox',
                props: {
                    title: {
                        type: String,
                        default: 'Notification'
                    },
                    desc: {
                        type: String,
                        default: ''
                    },
                    btn: {
                        type: String,
                        default: 'Understand'
                    }
                },
                data: function() {
                    return {
                        showBox: !1
                    }
                },
                methods: {
                    closeMore: function() {
                        this.$emit('ok')
                    },
                    show: function() {
                        this.showBox = !0
                    },
                    hide: function() {
                        this.showBox = !1
                    }
                }
            };
            e.Z = n
        },
        68880: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(95374), n(55849), n(25613), n(73902), n(82759), n(52077), n(40895);
            n = {
                name: "popMode",
                props: {
                    option: {
                        show: Boolean,
                        title: String,
                        tips: String,
                        cancelButtonText: String,
                        confirmButtonText: String,
                        confirmFunc: Function,
                        cancelFunc: Function,
                        formatPrefix: String,
                        layout: {
                            type: String,
                            default: 'column'
                        }
                    }
                },
                model: {
                    prop: 'option',
                    event: 'popModelChange'
                },
                data: function() {
                    var e = {};
                    this.option.input_option && this.option.input_option.forEach(function(t) {
                        e[t.label] = ''
                    });
                    var n = {};
                    return this.option.input_option && this.option.input_option.forEach(function(t) {
                        n[t.label] = !0
                    }), {
                        value_map: e,
                        validated_map: n
                    }
                },
                computed: {
                    _style: function() {
                        return this.option.show ? {
                            display: 'block'
                        } : {
                            display: 'none'
                        }
                    },
                    title_icon_class: function() {
                        return 'warn' !== this.option.icon_type ? 'not-icon' : 'warn-icon'
                    },
                    desc_class: function() {
                        var t = ['desc'];
                        return this.option.input_option && (t.push('credit-card'), t.push('have-input-desc')), 20 < this.option.tips.length && t.push('text-left'), t.join(' ')
                    }
                },
                methods: {
                    shouldShowErrorTips: function(t) {
                        return 'boolean' == typeof this.validated_map[t] && !this.validated_map[t]
                    },
                    confirm: function() {
                        var i = this;
                        if ((window.report.action(String(this.option.formatPrefix) + "_pop_mode_confirm"), this.option.input_option && this.option.input_option.length) && !this.option.input_option.reduce(function(t, e) {
                                if (e.regexp) {
                                    var n = new RegExp(e.regexp).test(i.value_map[e.label]);
                                    return i.$set(i.validated_map, e.label, n), n && t
                                }
                                return t && !0
                            }, !0)) return;
                        'function' == typeof this.option.confirmFunc && this.option.confirmFunc({
                            value_map: this.value_map
                        })
                    },
                    cancel: function() {
                        window.report.action(String(this.option.formatPrefix) + "_pop_mode_cancel"), 'function' == typeof this.option.cancelFunc && this.option.cancelFunc()
                    }
                }
            };
            e.Z = n
        },
        57268: function(t, e, n) {
            "use strict";
            n(92571), n(25901), n(98010), n(20252), n(95374), n(55849), n(14009);
            var i = n(7914);
            Object.defineProperty(e, "X", {
                value: !0
            }), e.Z = void 0, n(72264), n(82759), n(52077), n(40895), n(26252), n(95623), n(61514), n(72482);
            var o = i(n(65526)),
                r = n(32349),
                a = i(n(89934)),
                s = i(n(45812));

            function c(e, t) {
                var n, i = Object.keys(e);
                return Object.getOwnPropertySymbols && (n = Object.getOwnPropertySymbols(e), t && (n = n.filter(function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                })), i.push.apply(i, n)), i
            }

            function l(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = null != arguments[t] ? arguments[t] : {};
                    t % 2 ? c(Object(n), !0).forEach(function(t) {
                        (0, o.default)(e, t, n[t])
                    }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : c(Object(n)).forEach(function(t) {
                        Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                    })
                }
                return e
            }
            var u = 1,
                d = -1,
                f = 0,
                p = "eeaCountry",
                h = "nonEeaHighRiskCountry",
                v = "NON_EEA_COUNTRY_REJECT",
                n = {
                    name: "FooterComp",
                    data: function() {
                        var t;
                        return l(l(l({
                            defaultAdvanceDeclare: "By using the website, you are agreeing to our <a target=\"_blank\" href=\"https://www.midasbuy.com/oversea_web/static/privacy.html\">Privacy Policy</a>.",
                            defaultNonEeaCookieP1: "By using the website, you are agreeing to our <a class=\"link\" target=\"_blank\" href=\"https://www.midasbuy.com/oversea_web/static/privacy.html\">Privacy Policy</a>.",
                            defaultNonEeaCookieP2: "To provide our services to you, we use cookies on your device in accordance with our <a class=\"link\" target=\"_blank\" href=\"https://www.midasbuy.com/oversea_web/static/cookie.html\">Cookies Policy</a>. You can change your cookie settings by clicking on the ",
                            defaultCookieP0: "We use cookies that are necessary to provide the service and also other cookies, including third-party cookies for performance and analysis.<br>For more information on our cookie policy, please click <a target=\"_blank\" href=\"https://www.midasbuy.com/oversea_web/static/cookie.html\">here</a>.",
                            showEeaCookiePreferCentre: !1
                        }, window.__CommonState), window.__FooterState), {}, {
                            showBottomSocial: !0,
                            fbMessagerLoaded: !1,
                            showNonEeaCookiePreference: !1,
                            cookieControlState: this.deConstructCookieControl(s.default.get('cookie_control')) || {
                                fn: !1,
                                analy: !1
                            },
                            countDownNum: ~~(null == (t = window.__FooterState) ? void 0 : t.nonEeaLowRiskCookiePopCountSeconds) || 10
                        })
                    },
                    created: function() {
                        window.localStorage && window.localStorage.getItem(this.gaKey());
                        this.toggleGa(this.cookieControlState.analy), this.showBottomSocial = this.isPageShowBottomSocial() && this.socialConfigList, this.showBottomSocial && this.onScroll(), this.cookieControlCountryType = this.cookieControlCountryType || 'nonEeaLowRiskCountry', this.syncRejectLocalStorageState(), this.handleCookiePreferencePopup()
                    },
                    mounted: function() {
                        (0, a.default)()
                    },
                    computed: {
                        fnWord: function() {
                            return this.cookieControlState.fn ? this.lanRes.cookieOn || "ON" : this.lanRes.cookieOff || "OFF"
                        },
                        analyWord: function() {
                            return this.cookieControlState.analy ? this.lanRes.cookieOn || "ON" : this.lanRes.cookieOff || "OFF"
                        },
                        socialConfigList: function() {
                            return this.footerConfig.socialConfigList
                        },
                        showFbMessagerBtn: function() {
                            var t = this.footerConfig,
                                e = t.disableFbFeedback,
                                t = t.openFbMessenger;
                            return !e && (!t || this.fbMessagerLoaded)
                        }
                    },
                    methods: {
                        isPageShowBottomSocial: function() {
                            var t = this.footerConfig.bottomSocial,
                                t = void 0 === t ? [] : t;
                            if ("*" === t) return !0;
                            var e = location.href;
                            return !(!Array.isArray(t) || !t.length) && t.some(function(t) {
                                return new RegExp(t).test(e)
                            })
                        },
                        showMessengerPlugin: function() {
                            FB.CustomerChat && FB.CustomerChat.show(!0)
                        },
                        clickFbFeedback: function() {
                            this.footerConfig.openFbMessenger ? this.showMessengerPlugin() : window.open(this.links.facebookLink)
                        },
                        closeBottomSocial: function() {
                            this.showBottomSocial = !1
                        },
                        checkBottomSocialShow: function() {
                            var t = this.$refs.footerSocial;
                            (0, r.isDomInViewPort)(t) && (this.showBottomSocial = !1)
                        },
                        onScroll: function() {
                            var t = this;
                            $(document).on('scroll', function() {
                                window.requestAnimationFrame(t.checkBottomSocialShow)
                            })
                        },
                        analyCookieSwitchBtnClick: function() {
                            this.cookieControlState.analy = !this.cookieControlState.analy, window.localStorage && window.localStorage.setItem(this.gaKey(), this.cookieControlState.analy), this.toggleGa(this.cookieControlState.analy), this.cookieControlState.analy || s.default.deleteCategory('analy')
                        },
                        fnCookieSwitchBtnClick: function() {
                            this.cookieControlState.fn = !this.cookieControlState.fn, this.cookieControlState.fn || s.default.deleteCategory('fn')
                        },
                        toggleGa: function(t) {
                            var e = this.gtagConfig.ga;
                            e && (window["ga-disable-" + e] = !t)
                        },
                        gaKey: function() {
                            return "GASETTING_" + (void 0 !== window.muid ? muid : "unlogged")
                        },
                        syncRejectLocalStorageState: function() {
                            var t, e;
                            this.cookieControlState.fn && this.cookieControlState.analy ? null != (t = window.localStorage) && t.setItem(v, d) : this.cookieControlState.fn || this.cookieControlState.analy ? this.cookieControlState.fn && this.cookieControlState.analy || null != (e = window.localStorage) && e.setItem(v, f) : null != (e = window.localStorage) && e.setItem(v, u)
                        },
                        handleCookiePreferencePopup: function() {
                            switch (this.cookieControlCountryType) {
                                case p:
                                    this.eeaPop();
                                    break;
                                case h:
                                    this.nonEeaHighRiskPop();
                                    break;
                                default:
                                    this.nonEeaLowRiskPop()
                            }
                        },
                        eeaPop: function() {
                            this.cookieControlState.fn && this.cookieControlState.analy ? this.showEeaCookiePreferCentre = !1 : this.showEeaCookiePreferCentre = !0
                        },
                        nonEeaLowRiskPop: function() {
                            this.showEeaCookiePreferCentre = !1;
                            var n, t = null == (t = window.localStorage) ? void 0 : t.getItem(v);
                            ~~t === f || ~~t === u ? (this.showNonEeaCookiePreference = !0, n = this, function t() {
                                var e = setTimeout(function() {
                                    ~~n.countDownNum <= 0 ? (n.closeLowRiskPop(), clearTimeout(e)) : (--n.countDownNum, t())
                                }, 1e3)
                            }()) : this.showNonEeaCookiePreference = !1
                        },
                        closeLowRiskPop: function() {
                            var t;
                            this.showEeaCookiePreferCentre || this.showNonEeaCookiePreference && (this.showNonEeaCookiePreference = !1, null != (t = window.localStorage) && t.setItem(v, d), this.cookieControlState = {
                                fn: !0,
                                analy: !0
                            }, this.setCookieControl())
                        },
                        nonEeaHighRiskPop: function() {
                            var t = null == (t = window.localStorage) ? void 0 : t.getItem(v);
                            this.showNonEeaCookiePreference = ~~t === f || ~~t === u
                        },
                        modifyCookieControl: function() {
                            this.showEeaCookiePreferCentre = !1, this.cookieControlCountryType.includes('nonEea') && (this.showNonEeaCookiePreference = !1), this.setCookieControl()
                        },
                        deConstructCookieControl: function(t) {
                            var e = (t = void 0 === t ? '|' : t).split('|'),
                                t = e[0],
                                e = e[1];
                            return {
                                fn: !!+(void 0 === t ? 0 : t),
                                analy: !!+(void 0 === e ? 0 : e)
                            }
                        },
                        chooseEssentialCookies: function(t) {
                            var e;
                            this.showNonEeaCookiePreference = !1, null != (e = window.localStorage) && e.setItem(v, t), t === d ? this.cookieControlState = {
                                fn: !0,
                                analy: !0
                            } : t === u && (this.cookieControlState = {
                                fn: !1,
                                analy: !1
                            }), this.setCookieControl()
                        },
                        setCookieControl: function() {
                            var t = ~~this.cookieControlState.fn + "|" + ~~this.cookieControlState.analy;
                            s.default.set('cookie_control', t, {
                                domain: '*',
                                time: 31536e6
                            })
                        }
                    }
                };
            e.Z = n
        },
        3401: function(t, e, n) {
            "use strict";
            n(52077), n(72482), n(32081), n(52327), n(911), n(63238), n(40895), n(81048);
            var a = {
                    WEEKTABLE: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                    MONTHTABLE: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    getCurrentDay: function() {
                        var t = new Date;
                        return [t.getFullYear(), t.getMonth() + 1, t.getDate()]
                    },
                    fixedYM: function(t, e) {
                        return 0 == +e && (t = +t - 1, e = 12), 13 == +e && (t = +t + 1, e = 1), [t, e]
                    },
                    getMonthDays: function(t, e) {
                        e = this.fixedYM(t, e);
                        return new Date(e[0], e[1], 0).getDate()
                    },
                    getWeekday: function(t, e, n) {
                        e = this.fixedYM(t, e);
                        return new Date(e[0], e[1] - 1, n).getDay()
                    },
                    getMonthDaysArray: function(t, e) {
                        for (var n = [], i = this.getMonthDays(t, e), o = this.getMonthDays(t, e - 1), r = this.getWeekday(t, e, 1), a = this.getWeekday(t, e, i), s = 0; s < r; s++) n.push({
                            dayNum: o - r + s + 1,
                            weekDay: this.WEEKTABLE[s]
                        });
                        for (var c = 1; c <= i; c++) n.push({
                            dayNum: c,
                            weekDay: this.WEEKTABLE[(r + c - 1) % 7],
                            isThisMonth: !0
                        });
                        for (var l = 1; l <= 6 - a; l++) n.push({
                            dayNum: l,
                            weekDay: this.WEEKTABLE[(r + i + l - 1) % 7]
                        });
                        return n
                    }
                },
                n = function(t) {
                    this.opts = t || {
                        el: '',
                        day: '',
                        droplistinbody: !1,
                        pick: function() {}
                    }, this.init()
                };
            n.prototype = {
                init: function() {
                    var t, e = new Date;
                    !this.opts.day || 3 === (t = this.opts.day.split('-')).length && (e = new Date(parseInt(t[0], 10), parseInt(t[1], 10) - 1, parseInt(t[2], 10))), !this.opts.selectedDay || 3 === (t = this.opts.selectedDay.split('-')).length && (this.selectedDay = new Date(parseInt(t[0], 10), parseInt(t[1], 10) - 1, parseInt(t[2], 10))), this.currentDay = e, this.$el = $(this.opts.el), this.buildTem(), this.bindEvent()
                },
                fixYM: function(t, e) {
                    return 11 < e && (e = 0, t += 1), e < 0 && (e = 11, --t), [t, e]
                },
                addMonth: function() {
                    var t = this.currentDay.getFullYear(),
                        e = this.currentDay.getMonth() + 1,
                        e = this.fixYM(t, e);
                    this.currentDay.setFullYear(e[0]), this.currentDay.setMonth(e[1]), this.updateTem()
                },
                subMonth: function() {
                    var t = this.currentDay.getFullYear(),
                        e = this.currentDay.getMonth() - 1,
                        e = this.fixYM(t, e);
                    this.currentDay.setFullYear(e[0]), this.currentDay.setMonth(e[1]), this.updateTem()
                },
                addYear: function() {
                    var t = this.currentDay.getFullYear() + 1;
                    this.currentDay.setFullYear(t), this.updateTem()
                },
                subYear: function() {
                    var t = this.currentDay.getFullYear() - 1;
                    this.currentDay.setFullYear(t), this.updateTem()
                },
                _getWeekStr: function(t) {
                    for (var e = '', n = 0; n < t.length; n++) e += "<div class=\"td\">" + t[n] + "</div>";
                    return e
                },
                _getDayStr: function(t) {
                    for (var e = '', n = 0; n < t.length; n++) {
                        var i = t[n].isThisMonth && !this.isFutureDate(t[n].dayNum) ? '' : 'light';
                        e += "<li class=\"" + (t[n].selected ? 'selected' : i) + "\"><span>" + t[n].dayNum + "</span></li>"
                    }
                    return e
                },
                getDta: function() {
                    var t = this.currentDay.getFullYear(),
                        e = this.currentDay.getMonth() + 1,
                        n = this.selectedDay && this.selectedDay.getFullYear(),
                        i = this.selectedDay && this.selectedDay.getMonth() + 1,
                        o = this.selectedDay && this.selectedDay.getDate(),
                        r = a.getMonthDaysArray(t, e);
                    return n === t && i === e && (r.find(function(t) {
                        return t.dayNum === o
                    }).selected = !0), {
                        year: t,
                        month: e,
                        monthstr: a.MONTHTABLE[this.currentDay.getMonth()],
                        weekstr: this._getWeekStr(a.WEEKTABLE),
                        dayStr: this._getDayStr(r)
                    }
                },
                isLastestYear: function() {
                    var t = new Date;
                    return this.currentDay.getFullYear() === t.getFullYear()
                },
                isFutureDate: function(t) {
                    var e = new Date;
                    return this.isLastestYear() && this.isLastestMonth() && t > e.getDate()
                },
                isLastestMonth: function() {
                    var t = new Date;
                    return this.isLastestYear() && this.currentDay.getMonth() === t.getMonth()
                },
                _innerTem: function() {
                    var t = this.getDta();
                    return " <div class=\"title\">\n                        <div class=\"pre-year\" style=\"cursor: pointer;\"></div>\n                        <div class=\"pre-month\" style=\"cursor: pointer;\"></div>\n                        <div class=\"next-month\" style=\"cursor: pointer;" + (this.isLastestMonth() && 'opacity: .2;') + "\"></div>\n                        <div class=\"next-year\" style=\"cursor: pointer;" + (this.isLastestYear() && 'opacity: .2;') + "\"></div>\n                        <p>" + t.monthstr + "  " + t.year + "</p>\n                   </div>\n        <div class=\"th\"> " + t.weekstr + " </div>\n        <div class=\"bd\">\n            <ul> " + t.dayStr + " </ul>\n        </div>"
                },
                updateTem: function() {
                    var t = this.currentDay.getFullYear(),
                        e = this.currentDay.getMonth(),
                        n = this.currentDay.getDate(),
                        i = new Date,
                        o = i.getFullYear(),
                        r = i.getMonth(),
                        a = i.getDate(),
                        s = t,
                        c = e,
                        i = n;
                    o < t ? (s = o, c = r, i = a) : t === o && (r < e ? (c = r, i = a) : e === r && a <= n && (i = a)), this.currentDay.setFullYear(s), this.currentDay.setMonth(c), this.currentDay.setDate(i), this.$cal.html(this._innerTem())
                },
                buildTem: function() {
                    var t = this._innerTem();
                    this.caid = Math.random().toString().replace('.', '');
                    t = "<div class=\"time-picker-box\" tabindex=\"-1\" style=\"display:none;outline:0;\" id=\"" + this.caid + "\">" + t + "</div>";
                    this.opts.droplistinbody ? $('body').after(t) : this.$el.append(t), this.$cal = $("#" + this.caid)
                },
                bindEvent: function() {
                    var e = !1,
                        n = this;
                    this.$cal.off().on('mouseenter', function() {
                        e = !0
                    }).on('mouseleave', function() {
                        e = !1
                    }).on('click', function(t) {
                        t.stopPropagation();
                        var e = $(t.target);
                        if (e.hasClass('pre-month')) t.preventDefault(), n.subMonth();
                        else if (e.hasClass('next-month')) {
                            if (t.preventDefault(), n.isLastestMonth()) return !1;
                            n.addMonth()
                        } else if (e.hasClass('next-year')) {
                            if (t.preventDefault(), n.isLastestYear()) return !1;
                            n.addYear()
                        } else e.hasClass('pre-year') && (t.preventDefault(), n.subYear())
                    }).on('click', 'li', function(t) {
                        t.stopPropagation(), $(this).hasClass('light') || (t = $(this).find('span').html(), n.selectDay(t))
                    }).on('blur', function(t) {
                        e || (n.hide(), $('#rightCheckbox1').focus())
                    }), $(window).on('resize', function() {
                        n.resize()
                    })
                },
                selectDay: function(t) {
                    this.currentDay.setDate(t), this.selectedDay = new Date(this.currentDay), this.updateTem(), this.hide(), this.opts.pick(this.currentDay)
                },
                setValue: function() {},
                getValue: function() {},
                resize: function() {
                    this.opts.droplistinbody && this.isShow && this.setPosition()
                },
                setPosition: function() {
                    var t, e, n, i;
                    this.opts.droplistinbody && (n = (t = this.$el.get(0).getBoundingClientRect()).top, i = t.left, this.opts.fixed && (n = (e = this.$el.offset()).top, i = e.left), this.$cal.css({
                        top: n + t.height + 1,
                        left: i,
                        right: 'auto'
                    }))
                },
                hide: function() {
                    this.opts.beforeHide && 'function' == typeof this.opts.beforeHide && this.opts.beforeHide(), this.$cal.hide(), this.isShow = 0
                },
                show: function() {
                    this.setPosition(), this.$cal.show().focus(), this.isShow = 1
                }
            }, t.exports = n
        },
        57319: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(69217), n(32081), n(52077), n(72482), n(27471), n(23938), n(911), n(95374), n(55849);
            var d = i(n(11385)),
                c = window.CHANNEL_INFO || {},
                l = {
                    findNum: function(t, e) {
                        for (var n = null, i = 0; i < e.length; i++)
                            if (e[i].num == t + '') {
                                n = e[i];
                                break
                            } return n
                    },
                    findRange: function(t, e) {
                        e.sort(function(t, e) {
                            return parseInt(t.num) - parseInt(e.num)
                        });
                        var n = null,
                            i = 0,
                            o = e.length;
                        if (t >= parseInt(e[o - 1].num)) return e[o - 1];
                        if (t < parseInt(e[i].num)) return n;
                        for (i = 0; i < o; i++)
                            if (parseInt(e[i].num) <= t && i + 1 < o && parseInt(e[i + 1].num) > t) {
                                n = e[i];
                                break
                            } return n
                    },
                    mergeDiff: function(t, e) {
                        for (var n = 1, i = 0; i < e.length; i++) l.findNum(e[i].num, t) || (n = 0, t.push(e[i]));
                        return n ? t : t.sort(function(t, e) {
                            return parseInt(t.num) - parseInt(e.num)
                        })
                    }
                },
                n = {
                    setInfo: function(t) {
                        if (this.info = t, this.uptopresentKeys = [], this.info && this.info.buycurrency)
                            for (var e in this.info.buycurrency) /uptopresent/.test(e) && this.uptopresentKeys.push(e)
                    },
                    _filterByChannel: function(r, t, a) {
                        var e, n, i = this.info.buycurrency,
                            s = r.split(':')[0],
                            c = [],
                            l = [],
                            u = [];
                        for (e in i) e == t && (n = i[e].rule_item, d.default.each(n, function(t, n) {
                            if (n.is_limit || !a) {
                                for (var e = n.allow_channel.split(','), i = 1, o = 0; o < e.length; o++) - 1 == e[o].indexOf(':') && (e[o] += ':*');
                                for (o = 0; o < e.length; o++)
                                    if (e[o] === r) {
                                        c.push(n), i = 0;
                                        break
                                    } i && d.default.each(e, function(t, e) {
                                    e = e.split(':');
                                    if (e[0] == s && '*' == e[1]) return l.push(n), i = 0, !1
                                }), i && d.default.each(e, function(t, e) {
                                    e = e.split(':');
                                    if ('*' == e[0] && '*' == e[1]) return u.push(n), i = 0, !1
                                })
                            }
                        }));
                        return c.length ? c : l.length ? l : u.length ? u : []
                    },
                    _getFirstsaveInfo: function(t, e) {
                        var n, e = e[0];
                        return 'range' == e.rank_type ? (n = l.findRange(t, e.present_item)) && (n.__sendNum = n.send_type + '' == '2' ? parseInt(n.send_num) : Math.ceil(parseInt(n.send_rate) * parseInt(t) / 100)) : (n = l.findNum(t, e.present_item)) && (n.__sendNum = n.send_type + '' == '2' ? parseInt(n.send_num) : Math.ceil(parseInt(n.send_rate) * parseInt(t) / 100)), n
                    },
                    _getUptopresentInfo: function(t, e) {
                        var n, i, o = [],
                            r = [];
                        for (s = 0; s < e.length; s++)(n = e[s].is_limit) && ('no' != n ? o : r).push(e[s]);
                        if (o.length) {
                            for (var a = [], s = 0; s < o.length; s++) n = o[s].rank_type, o[s].present_item = l.mergeDiff(o[s].present_item, r[0].present_item), 'range' == n ? (i = l.findRange(t, o[s].present_item)) && (i.__sendNum = i.send_type + '' == '2' ? parseInt(i.send_num) : Math.ceil(parseInt(i.send_rate) * parseInt(t) / 100), i.is_limit = o[s].is_limit, a.push(i)) : (i = l.findNum(t, o[s].present_item)) && (i.__sendNum = i.send_type + '' == '2' ? parseInt(i.send_num) : Math.ceil(parseInt(i.send_rate) * parseInt(t) / 100), i.is_limit = o[s].is_limit, a.push(i));
                            return a.length ? a : null
                        }
                        var c = e[0];
                        return 'range' == c.rank_type ? (i = l.findRange(t, c.present_item)) && (i.__sendNum = i.send_type + '' == '2' ? parseInt(i.send_num) : Math.ceil(parseInt(i.send_rate) * parseInt(t) / 100)) : (i = l.findNum(t, c.present_item)) && (i.__sendNum = i.send_type + '' == '2' ? parseInt(i.send_num) : Math.ceil(parseInt(i.send_rate) * parseInt(t) / 100)), i
                    },
                    _mergeDrmInfo: function(t, e) {
                        var n;
                        if (t && (n = d.default.extend(!0, {}, t)), e)
                            if (e instanceof Array)
                                for (var i = 0; i < e.length; i++) {
                                    var o = e[i];
                                    n ? (n.product_item = n.product_item.concat(o.product_item), n.__sendNum += o.__sendNum, o.send_ext && (n.send_ext = o.send_ext)) : n = o
                                } else n ? (n.product_item = n.product_item.concat(e.product_item), n.__sendNum += e.__sendNum, e.send_ext && (n.send_ext = e.send_ext)) : n = e;
                        return n && n.send_ext && (n.send_ext = n.send_ext.replace('é™1æ¬¡', window.langResource.xianyici || 'One time offer'), n.send_ext = n.send_ext.replace('ä»»1æ¬¡', window.langResource.renyici || 'One time offer'), window.langResource[n.send_ext] && (n.send_ext = window.langResource[n.send_ext])), n
                    },
                    _mergeUptopresentInfo: function(t) {
                        for (var e, n = t.length, i = 0; i < n; i++) {
                            var o = t[i];
                            if (o)
                                if ((o = JSON.parse(JSON.stringify(o))) instanceof Array)
                                    for (var r = 0; r < o.length; r++) {
                                        var a = o[r];
                                        e ? (e.product_item = e.product_item.concat(a.product_item), e.__sendNum += a.__sendNum, a.send_ext && (e.send_ext = a.send_ext)) : e = a
                                    } else e ? (e.product_item = e.product_item.concat(o.product_item), e.__sendNum += o.__sendNum, o.send_ext && (e.send_ext = o.send_ext)) : e = o
                        }
                        if (e && e.product_item && e.product_item.length) {
                            var s = {};
                            e.product_item.forEach(function(t) {
                                var e;
                                t && (s[t.id] ? (e = parseInt(s[t.id].num) + parseInt(t.num), s[t.id].num = e) : s[t.id] = JSON.parse(JSON.stringify(t)))
                            });
                            var c, l = [];
                            for (c in s) s.hasOwnProperty(c) && l.push(s[c]);
                            e.product_item = l
                        }
                        return e
                    },
                    getSendCount: function(t, e) {
                        e = c[e] ? c[e].pm : e;
                        var n, i, o = this._filterByChannel(e, 'firstsave'),
                            r = [];
                        if (0 < this.uptopresentKeys.length)
                            for (var a = 0; a < this.uptopresentKeys.length; a++) {
                                var s = this.uptopresentKeys[a],
                                    s = this._filterByChannel(e, s, 1);
                                s.length && (s = this._getUptopresentInfo(t, s), r.push(s))
                            }
                        return o.length && (n = this._getFirstsaveInfo(t, o)), r.length && (i = this._mergeUptopresentInfo(r)), this._mergeDrmInfo(n, i)
                    },
                    getMarketingTips: function() {
                        var t = this.info.buycurrency,
                            e = '';
                        return t.title ? e = t.title : t.uptopresent && t.uptopresent.title ? e = t.uptopresent.title : t.firstsave && t.firstsave.title && (e = t.firstsave.title), e
                    }
                };
            e.default = n
        },
        58094: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.genRecaptchaToken = function(t) {
                return window.recaptcha ? grecaptcha.execute('6LcAUpwUAAAAAJ-7GZIdH17deUDVcKGxDQ1WUeOS', {
                    action: t
                }) : Promise.resolve('')
            }, e.loadRecaptchaSdk = function(t) {
                {
                    var e;
                    window.recaptcha ? ((e = document.createElement('script')).src = 'https://www.google.com/recaptcha/api.js?render=6LcAUpwUAAAAAJ-7GZIdH17deUDVcKGxDQ1WUeOS', e.onload = function() {
                        grecaptcha.ready(function() {
                            t()
                        })
                    }, document.body.appendChild(e)) : t()
                }
            }, n(63238), n(61418)
        },
        5777: function(t, e, n) {
            "use strict";
            var i = n(7914);
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = void 0, n(52077), n(911), n(27471), n(72482);

            function o() {
                var t = location.pathname,
                    e = window._SHOPCODE ? "/" + window._SHOPCODE : '';
                return t.replace(e, '')
            }
            var r = i(n(32522)),
                a = i(n(37196)),
                s = i(n(16957)),
                c = i(n(70106)),
                l = i(n(11385));

            function u(t, e, n, i, o) {
                -1 === t.indexOf('/login') && e && delete e.redirect;
                e = l.default.isEmptyObject(e) ? '' : "?" + (0, r.default)(e, !0);
                (0, a.default)().buy_type_key && !/apps\/vip/.test(t) && (i = !(e = ''));
                n = (t = !o && window._SHOPCODE ? "/" + window._SHOPCODE + t : t) + e + ('string' == typeof n ? "#" + n : '');
                i ? location.replace(location.origin + n) : location.href = location.origin + n
            }
            window.location.origin || (window.location.origin = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ":" + window.location.port : ''));
            n = {
                jump: u,
                getShortUrl: function() {
                    var t = o().split('/');
                    return 3 < t.length ? "/" + t[3] : ''
                },
                getCountry: function() {
                    var t = o().substr(0, 4),
                        t = /\/(\w{2})[\/#\?]|\/(\w{2})$/.exec(t);
                    return t ? t[1] || t[2] : 'ot'
                },
                from: function(t, e) {
                    var n, i, o = (0, a.default)();
                    o.redirect && (n = o.redirect, (i = document.createElement('a')).setAttribute('href', n), -1 !== (window.WebsiteHosts || [location.hostname]).indexOf(i.hostname)) ? location.href = o.redirect : this.home(t, e)
                },
                home: function(t, e) {
                    u("/" + this.getCountry(), t, e)
                },
                login: function(t, e) {
                    var n = (0, c.default)('redirect', decodeURIComponent(t.redirect));
                    t.isNoSupportCountry ? (t.redirect = n.replace("/" + this.getCountry(), '/ot'), delete t.isNoSupportCountry, u('/ot/login', t, e)) : (t.redirect = n, u("/" + this.getCountry() + "/login", t, e))
                },
                usercenter: function(t, e, n) {
                    u("/" + this.getCountry() + "/usercenter", t, e, n)
                },
                vipintroduce: function(t, e) {
                    u("/" + this.getCountry() + "/vipintroduce", t, e)
                },
                cardevent: function(t, e) {
                    u("/" + this.getCountry() + "/cardpaymentevents", t, e)
                },
                newsCenter: function(t, e) {
                    u("/" + this.getCountry() + "/news", t, e)
                },
                forget: function(t, e) {
                    u("/" + this.getCountry() + "/forget", t, e)
                },
                regionselect: function(t, e) {
                    u("/" + this.getCountry() + "/regionselect" + this.getShortUrl(), t, e)
                },
                modify: function(t, e) {
                    u("/" + this.getCountry() + "/modify", t, e)
                },
                currency: function(t, e) {
                    u("/" + this.getCountry() + "/buy" + this.getShortUrl(), t, e)
                },
                items: function(t, e) {
                    u("/" + this.getCountry() + "/items" + this.getShortUrl(), t, e)
                },
                redeem: function(t, e) {
                    u("/" + this.getCountry() + "/redeem" + this.getShortUrl(), t, e)
                },
                shop: function(t, e) {
                    u("/" + this.getCountry() + "/shop" + this.getShortUrl(), t, e)
                },
                homepage: function(t, e) {
                    u("/" + this.getCountry() + "/homepage" + this.getShortUrl(), t, e)
                },
                sub: function(t, e) {
                    u("/" + this.getCountry() + "/sub" + this.getShortUrl(), t, e)
                },
                promotions: function(t, e) {
                    u("/" + this.getCountry() + "/promotions" + this.getShortUrl(), t, e)
                },
                country: function(t, e, n) {
                    u("/" + t, e, n)
                },
                proporder: function(t, e, n) {
                    e.pid = t, u("/" + this.getCountry() + "/props_order" + this.getShortUrl(), e, n)
                },
                suborder: function(t, e, n) {
                    e.pid = t, u("/" + this.getCountry() + "/sub_order" + this.getShortUrl(), e, n)
                },
                result: function(t) {
                    (t = t || {}).gameShortUrl = this.getShortUrl().replace('/', ''), u("/" + this.getCountry() + "/result", t, null)
                },
                transcation: function(t, e, n) {
                    u("/" + this.getCountry() + "/transcation", e, n, t)
                },
                vipcenter: function(t, e, n, i) {
                    var o = "/" + this.getCountry() + "/vipcenter";
                    window.useNodeVipcenter && (o = "/apps/vip/" + this.getCountry() + "/home", i = 1), u(o, t, e, n, i)
                },
                helpcenter: function(t, e) {
                    u("/" + this.getCountry() + "/helpcenter", t, e)
                },
                vipprivilege: function(t, e) {
                    u("/" + this.getCountry() + "/vipprivilege", t, e)
                },
                linkto: function(t, e) {
                    var n = (0, a.default)(),
                        t = n.from ? (0, s.default)({
                            from: n.from
                        }, t) : t;
                    e ? location.replace(t) : location.href = t
                },
                linkToActivity: function(t, e, n) {
                    var i = (0, a.default)(),
                        o = this.getCountry();
                    n && (o = 'ot'), t = t && t.replace('{0}', o);
                    t = i.from ? (0, s.default)({
                        from: i.from
                    }, t) : t;
                    e ? location.replace(t) : location.href = t
                },
                verifyPlayer: function(t, e) {
                    u("/" + this.getCountry() + "/verifyplayer/pubgm", t, e)
                }
            };
            e.default = n
        },
        52148: function(t, e, n) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            }), e.default = function(t, e, n) {
                var i = t.data('rule');
                if (!i) return !0;
                var o = {},
                    i = i.split(';').filter(function(t) {
                        return t.length
                    }).map(function(t) {
                        var e = t.split(':'),
                            t = e[0],
                            e = e[1];
                        return o[t] = e, t
                    }),
                    r = t.val(),
                    a = '',
                    i = i.every(function(t) {
                        var e = s[t].test(r);
                        return a = o[t], e
                    });
                e && (n = n || e.next('.error-tips'), i ? (e.removeClass('error'), n.text(a).hide()) : (e.addClass('error'), n.text(a).show()));
                return i
            }, e.ruleMap = void 0, n(61013), n(98010), n(52077), n(72482), n(86e3);
            var s = {
                required: /.+/,
                numeric: /^[0-9]*$/,
                email: /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/,
                password: /^(?=.*\d)(?=.*[A-Za-z]).{6,20}$/
            };
            e.ruleMap = s
        },
        58112: function(t, e, h) {
            t.exports = (t = function(l) {
                var i;
                if ('undefined' != typeof window && window.crypto && (i = window.crypto), 'undefined' != typeof self && self.crypto && (i = self.crypto), !(i = !(i = !(i = 'undefined' != typeof globalThis && globalThis.crypto ? globalThis.crypto : i) && 'undefined' != typeof window && window.msCrypto ? window.msCrypto : i) && void 0 !== h.g && h.g.crypto ? h.g.crypto : i)) try {
                    i = h(40429)
                } catch (t) {}
                var n = Object.create || function(t) {
                    return e.prototype = t, t = new e, e.prototype = null, t
                };

                function e() {}
                var t = {},
                    o = t.lib = {},
                    r = o.Base = {
                        extend: function(t) {
                            var e = n(this);
                            return t && e.mixIn(t), e.hasOwnProperty('init') && this.init !== e.init || (e.init = function() {
                                e.$super.init.apply(this, arguments)
                            }), (e.init.prototype = e).$super = this, e
                        },
                        create: function() {
                            var t = this.extend();
                            return t.init.apply(t, arguments), t
                        },
                        init: function() {},
                        mixIn: function(t) {
                            for (var e in t) t.hasOwnProperty(e) && (this[e] = t[e]);
                            t.hasOwnProperty('toString') && (this.toString = t.toString)
                        },
                        clone: function() {
                            return this.init.prototype.extend(this)
                        }
                    },
                    u = o.WordArray = r.extend({
                        init: function(t, e) {
                            t = this.words = t || [], this.sigBytes = null != e ? e : 4 * t.length
                        },
                        toString: function(t) {
                            return (t || s).stringify(this)
                        },
                        concat: function(t) {
                            var e = this.words,
                                n = t.words,
                                i = this.sigBytes,
                                o = t.sigBytes;
                            if (this.clamp(), i % 4)
                                for (var r = 0; r < o; r++) {
                                    var a = n[r >>> 2] >>> 24 - r % 4 * 8 & 255;
                                    e[i + r >>> 2] |= a << 24 - (i + r) % 4 * 8
                                } else
                                    for (var s = 0; s < o; s += 4) e[i + s >>> 2] = n[s >>> 2];
                            return this.sigBytes += o, this
                        },
                        clamp: function() {
                            var t = this.words,
                                e = this.sigBytes;
                            t[e >>> 2] &= 4294967295 << 32 - e % 4 * 8, t.length = l.ceil(e / 4)
                        },
                        clone: function() {
                            var t = r.clone.call(this);
                            return t.words = this.words.slice(0), t
                        },
                        random: function(t) {
                            for (var e = [], n = 0; n < t; n += 4) e.push(function() {
                                if (i) {
                                    if ('function' == typeof i.getRandomValues) try {
                                        return i.getRandomValues(new Uint32Array(1))[0]
                                    } catch (t) {}
                                    if ('function' == typeof i.randomBytes) try {
                                        return i.randomBytes(4).readInt32LE()
                                    } catch (t) {}
                                }
                                throw new Error('Native crypto module could not be used to get secure random number.')
                            }());
                            return new u.init(e, t)
                        }
                    }),
                    a = t.enc = {},
                    s = a.Hex = {
                        stringify: function(t) {
                            for (var e = t.words, n = t.sigBytes, i = [], o = 0; o < n; o++) {
                                var r = e[o >>> 2] >>> 24 - o % 4 * 8 & 255;
                                i.push((r >>> 4).toString(16)), i.push((15 & r).toString(16))
                            }
                            return i.join('')
                        },
                        parse: function(t) {
                            for (var e = t.length, n = [], i = 0; i < e; i += 2) n[i >>> 3] |= parseInt(t.substr(i, 2), 16) << 24 - i % 8 * 4;
                            return new u.init(n, e / 2)
                        }
                    },
                    c = a.Latin1 = {
                        stringify: function(t) {
                            for (var e = t.words, n = t.sigBytes, i = [], o = 0; o < n; o++) {
                                var r = e[o >>> 2] >>> 24 - o % 4 * 8 & 255;
                                i.push(String.fromCharCode(r))
                            }
                            return i.join('')
                        },
                        parse: function(t) {
                            for (var e = t.length, n = [], i = 0; i < e; i++) n[i >>> 2] |= (255 & t.charCodeAt(i)) << 24 - i % 4 * 8;
                            return new u.init(n, e)
                        }
                    },
                    d = a.Utf8 = {
                        stringify: function(t) {
                            try {
                                return decodeURIComponent(escape(c.stringify(t)))
                            } catch (t) {
                                throw new Error('Malformed UTF-8 data')
                            }
                        },
                        parse: function(t) {
                            return c.parse(unescape(encodeURIComponent(t)))
                        }
                    },
                    f = o.BufferedBlockAlgorithm = r.extend({
                        reset: function() {
                            this._data = new u.init, this._nDataBytes = 0
                        },
                        _append: function(t) {
                            'string' == typeof t && (t = d.parse(t)), this._data.concat(t), this._nDataBytes += t.sigBytes
                        },
                        _process: function(t) {
                            var e, n = this._data,
                                i = n.words,
                                o = n.sigBytes,
                                r = this.blockSize,
                                a = o / (4 * r),
                                s = (a = t ? l.ceil(a) : l.max((0 | a) - this._minBufferSize, 0)) * r,
                                o = l.min(4 * s, o);
                            if (s) {
                                for (var c = 0; c < s; c += r) this._doProcessBlock(i, c);
                                e = i.splice(0, s), n.sigBytes -= o
                            }
                            return new u.init(e, o)
                        },
                        clone: function() {
                            var t = r.clone.call(this);
                            return t._data = this._data.clone(), t
                        },
                        _minBufferSize: 0
                    }),
                    p = (o.Hasher = f.extend({
                        cfg: r.extend(),
                        init: function(t) {
                            this.cfg = this.cfg.extend(t), this.reset()
                        },
                        reset: function() {
                            f.reset.call(this), this._doReset()
                        },
                        update: function(t) {
                            return this._append(t), this._process(), this
                        },
                        finalize: function(t) {
                            return t && this._append(t), this._doFinalize()
                        },
                        blockSize: 16,
                        _createHelper: function(n) {
                            return function(t, e) {
                                return new n.init(e).finalize(t)
                            }
                        },
                        _createHmacHelper: function(n) {
                            return function(t, e) {
                                return new p.HMAC.init(n, e).finalize(t)
                            }
                        }
                    }), t.algo = {});
                return t
            }(Math), t)
        },
        92232: function(t, e, n) {
            var a;
            t.exports = (a = n(58112), function(o) {
                var t = a,
                    e = t.lib,
                    n = e.WordArray,
                    i = e.Hasher,
                    e = t.algo,
                    r = [],
                    h = [];
                ! function() {
                    function t(t) {
                        return 4294967296 * (t - (0 | t)) | 0
                    }
                    for (var e = 2, n = 0; n < 64;) ! function(t) {
                        for (var e = o.sqrt(t), n = 2; n <= e; n++)
                            if (!(t % n)) return;
                        return 1
                    }(e) || (n < 8 && (r[n] = t(o.pow(e, .5))), h[n] = t(o.pow(e, 1 / 3)), n++), e++
                }();
                var v = [],
                    e = e.SHA256 = i.extend({
                        _doReset: function() {
                            this._hash = new n.init(r.slice(0))
                        },
                        _doProcessBlock: function(t, e) {
                            for (var n = this._hash.words, i = n[0], o = n[1], r = n[2], a = n[3], s = n[4], c = n[5], l = n[6], u = n[7], d = 0; d < 64; d++) {
                                d < 16 ? v[d] = 0 | t[e + d] : (f = v[d - 15], p = v[d - 2], v[d] = ((f << 25 | f >>> 7) ^ (f << 14 | f >>> 18) ^ f >>> 3) + v[d - 7] + ((p << 15 | p >>> 17) ^ (p << 13 | p >>> 19) ^ p >>> 10) + v[d - 16]);
                                var f = i & o ^ i & r ^ o & r,
                                    p = u + ((s << 26 | s >>> 6) ^ (s << 21 | s >>> 11) ^ (s << 7 | s >>> 25)) + (s & c ^ ~s & l) + h[d] + v[d],
                                    u = l,
                                    l = c,
                                    c = s,
                                    s = a + p | 0,
                                    a = r,
                                    r = o,
                                    o = i,
                                    i = p + (((i << 30 | i >>> 2) ^ (i << 19 | i >>> 13) ^ (i << 10 | i >>> 22)) + f) | 0
                            }
                            n[0] = n[0] + i | 0, n[1] = n[1] + o | 0, n[2] = n[2] + r | 0, n[3] = n[3] + a | 0, n[4] = n[4] + s | 0, n[5] = n[5] + c | 0, n[6] = n[6] + l | 0, n[7] = n[7] + u | 0
                        },
                        _doFinalize: function() {
                            var t = this._data,
                                e = t.words,
                                n = 8 * this._nDataBytes,
                                i = 8 * t.sigBytes;
                            return e[i >>> 5] |= 128 << 24 - i % 32, e[14 + (64 + i >>> 9 << 4)] = o.floor(n / 4294967296), e[15 + (64 + i >>> 9 << 4)] = n, t.sigBytes = 4 * e.length, this._process(), this._hash
                        },
                        clone: function() {
                            var t = i.clone.call(this);
                            return t._hash = this._hash.clone(), t
                        }
                    });
                t.SHA256 = i._createHelper(e), t.HmacSHA256 = i._createHmacHelper(e)
            }(Math), a.SHA256)
        },
        27693: function(t) {
            t.exports = function() {
                "use strict";
                var l = 1e3,
                    u = 6e4,
                    d = 36e5,
                    c = "millisecond",
                    p = "second",
                    h = "minute",
                    v = "hour",
                    g = "day",
                    m = "week",
                    _ = "month",
                    f = "quarter",
                    y = "year",
                    w = "date",
                    b = "Invalid Date",
                    a = /^(\d{4})[-/]?(\d{1,2})?[-/]?(\d{0,2})[Tt\s]*(\d{1,2})?:?(\d{1,2})?:?(\d{1,2})?[.:]?(\d+)?$/,
                    C = /\[([^\]]+)]|Y{1,4}|M{1,4}|D{1,2}|d{1,4}|H{1,2}|h{1,2}|a|A|m{1,2}|s{1,2}|Z{1,2}|SSS/g,
                    t = {
                        name: "en",
                        weekdays: "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),
                        months: "January_February_March_April_May_June_July_August_September_October_November_December".split("_")
                    },
                    r = function(t, e, n) {
                        var i = String(t);
                        return !i || i.length >= e ? t : "" + Array(e + 1 - i.length).join(n) + t
                    },
                    e = {
                        s: r,
                        z: function(t) {
                            var e = -t.utcOffset(),
                                n = Math.abs(e),
                                i = Math.floor(n / 60),
                                o = n % 60;
                            return (e <= 0 ? "+" : "-") + r(i, 2, "0") + ":" + r(o, 2, "0")
                        },
                        m: function t(e, n) {
                            if (e.date() < n.date()) return -t(n, e);
                            var i = 12 * (n.year() - e.year()) + (n.month() - e.month()),
                                o = e.clone().add(i, _),
                                r = n - o < 0,
                                a = e.clone().add(i + (r ? -1 : 1), _);
                            return +(-(i + (n - o) / (r ? o - a : a - o)) || 0)
                        },
                        a: function(t) {
                            return t < 0 ? Math.ceil(t) || 0 : Math.floor(t)
                        },
                        p: function(t) {
                            return {
                                M: _,
                                y: y,
                                w: m,
                                d: g,
                                D: w,
                                h: v,
                                m: h,
                                s: p,
                                ms: c,
                                Q: f
                            } [t] || String(t || "").toLowerCase().replace(/s$/, "")
                        },
                        u: function(t) {
                            return void 0 === t
                        }
                    },
                    s = "en",
                    k = {};
                k[s] = t;
                var i = function(t) {
                        return t instanceof x
                    },
                    o = function(t, e, n) {
                        var i;
                        if (!t) return s;
                        if ("string" == typeof t) k[t] && (i = t), e && (k[t] = e, i = t);
                        else {
                            var o = t.name;
                            k[o] = t, i = o
                        }
                        return !n && i && (s = i), i || !n && s
                    },
                    S = function(t, e) {
                        if (i(t)) return t.clone();
                        var n = "object" == typeof e ? e : {};
                        return n.date = t, n.args = arguments, new x(n)
                    },
                    P = e;
                P.l = o, P.i = i, P.w = function(t, e) {
                    return S(t, {
                        locale: e.$L,
                        utc: e.$u,
                        x: e.$x,
                        $offset: e.$offset
                    })
                };
                var x = function() {
                        function t(t) {
                            this.$L = o(t.locale, null, !0), this.parse(t)
                        }
                        var e = t.prototype;
                        return e.parse = function(t) {
                            this.$d = function(t) {
                                var e = t.date,
                                    n = t.utc;
                                if (null === e) return new Date(NaN);
                                if (P.u(e)) return new Date;
                                if (e instanceof Date) return new Date(e);
                                if ("string" == typeof e && !/Z$/i.test(e)) {
                                    var i = e.match(a);
                                    if (i) {
                                        var o = i[2] - 1 || 0,
                                            r = (i[7] || "0").substring(0, 3);
                                        return n ? new Date(Date.UTC(i[1], o, i[3] || 1, i[4] || 0, i[5] || 0, i[6] || 0, r)) : new Date(i[1], o, i[3] || 1, i[4] || 0, i[5] || 0, i[6] || 0, r)
                                    }
                                }
                                return new Date(e)
                            }(t), this.$x = t.x || {}, this.init()
                        }, e.init = function() {
                            var t = this.$d;
                            this.$y = t.getFullYear(), this.$M = t.getMonth(), this.$D = t.getDate(), this.$W = t.getDay(), this.$H = t.getHours(), this.$m = t.getMinutes(), this.$s = t.getSeconds(), this.$ms = t.getMilliseconds()
                        }, e.$utils = function() {
                            return P
                        }, e.isValid = function() {
                            return !(this.$d.toString() === b)
                        }, e.isSame = function(t, e) {
                            var n = S(t);
                            return this.startOf(e) <= n && n <= this.endOf(e)
                        }, e.isAfter = function(t, e) {
                            return S(t) < this.startOf(e)
                        }, e.isBefore = function(t, e) {
                            return this.endOf(e) < S(t)
                        }, e.$g = function(t, e, n) {
                            return P.u(t) ? this[e] : this.set(n, t)
                        }, e.unix = function() {
                            return Math.floor(this.valueOf() / 1e3)
                        }, e.valueOf = function() {
                            return this.$d.getTime()
                        }, e.startOf = function(t, e) {
                            var i = this,
                                o = !!P.u(e) || e,
                                n = P.p(t),
                                r = function(t, e) {
                                    var n = P.w(i.$u ? Date.UTC(i.$y, e, t) : new Date(i.$y, e, t), i);
                                    return o ? n : n.endOf(g)
                                },
                                a = function(t, e) {
                                    return P.w(i.toDate()[t].apply(i.toDate("s"), (o ? [0, 0, 0, 0] : [23, 59, 59, 999]).slice(e)), i)
                                },
                                s = this.$W,
                                c = this.$M,
                                l = this.$D,
                                u = "set" + (this.$u ? "UTC" : "");
                            switch (n) {
                                case y:
                                    return o ? r(1, 0) : r(31, 11);
                                case _:
                                    return o ? r(1, c) : r(0, c + 1);
                                case m:
                                    var d = this.$locale().weekStart || 0,
                                        f = (s < d ? s + 7 : s) - d;
                                    return r(o ? l - f : l + (6 - f), c);
                                case g:
                                case w:
                                    return a(u + "Hours", 0);
                                case v:
                                    return a(u + "Minutes", 1);
                                case h:
                                    return a(u + "Seconds", 2);
                                case p:
                                    return a(u + "Milliseconds", 3);
                                default:
                                    return this.clone()
                            }
                        }, e.endOf = function(t) {
                            return this.startOf(t, !1)
                        }, e.$set = function(t, e) {
                            var n, i = P.p(t),
                                o = "set" + (this.$u ? "UTC" : ""),
                                r = (n = {}, n[g] = o + "Date", n[w] = o + "Date", n[_] = o + "Month", n[y] = o + "FullYear", n[v] = o + "Hours", n[h] = o + "Minutes", n[p] = o + "Seconds", n[c] = o + "Milliseconds", n)[i],
                                a = i === g ? this.$D + (e - this.$W) : e;
                            if (i === _ || i === y) {
                                var s = this.clone().set(w, 1);
                                s.$d[r](a), s.init(), this.$d = s.set(w, Math.min(this.$D, s.daysInMonth())).$d
                            } else r && this.$d[r](a);
                            return this.init(), this
                        }, e.set = function(t, e) {
                            return this.clone().$set(t, e)
                        }, e.get = function(t) {
                            return this[P.p(t)]()
                        }, e.add = function(n, t) {
                            var e, i = this;
                            n = Number(n);
                            var o = P.p(t),
                                r = function(t) {
                                    var e = S(i);
                                    return P.w(e.date(e.date() + Math.round(t * n)), i)
                                };
                            if (o === _) return this.set(_, this.$M + n);
                            if (o === y) return this.set(y, this.$y + n);
                            if (o === g) return r(1);
                            if (o === m) return r(7);
                            var a = (e = {}, e[h] = u, e[v] = d, e[p] = l, e)[o] || 1,
                                s = this.$d.getTime() + n * a;
                            return P.w(s, this)
                        }, e.subtract = function(t, e) {
                            return this.add(-1 * t, e)
                        }, e.format = function(t) {
                            var o = this,
                                e = this.$locale();
                            if (!this.isValid()) return e.invalidDate || b;
                            var r = t || "YYYY-MM-DDTHH:mm:ssZ",
                                n = P.z(this),
                                i = this.$H,
                                a = this.$m,
                                s = this.$M,
                                c = e.weekdays,
                                l = e.months,
                                u = function(t, e, n, i) {
                                    return t && (t[e] || t(o, r)) || n[e].substr(0, i)
                                },
                                d = function(t) {
                                    return P.s(i % 12 || 12, t, "0")
                                },
                                f = e.meridiem || function(t, e, n) {
                                    var i = t < 12 ? "AM" : "PM";
                                    return n ? i.toLowerCase() : i
                                },
                                p = {
                                    YY: String(this.$y).slice(-2),
                                    YYYY: this.$y,
                                    M: s + 1,
                                    MM: P.s(s + 1, 2, "0"),
                                    MMM: u(e.monthsShort, s, l, 3),
                                    MMMM: u(l, s),
                                    D: this.$D,
                                    DD: P.s(this.$D, 2, "0"),
                                    d: String(this.$W),
                                    dd: u(e.weekdaysMin, this.$W, c, 2),
                                    ddd: u(e.weekdaysShort, this.$W, c, 3),
                                    dddd: c[this.$W],
                                    H: String(i),
                                    HH: P.s(i, 2, "0"),
                                    h: d(1),
                                    hh: d(2),
                                    a: f(i, a, !0),
                                    A: f(i, a, !1),
                                    m: String(a),
                                    mm: P.s(a, 2, "0"),
                                    s: String(this.$s),
                                    ss: P.s(this.$s, 2, "0"),
                                    SSS: P.s(this.$ms, 3, "0"),
                                    Z: n
                                };
                            return r.replace(C, function(t, e) {
                                return e || p[t] || n.replace(":", "")
                            })
                        }, e.utcOffset = function() {
                            return 15 * -Math.round(this.$d.getTimezoneOffset() / 15)
                        }, e.diff = function(t, e, n) {
                            var i, o = P.p(e),
                                r = S(t),
                                a = (r.utcOffset() - this.utcOffset()) * u,
                                s = this - r,
                                c = P.m(this, r);
                            return c = (i = {}, i[y] = c / 12, i[_] = c, i[f] = c / 3, i[m] = (s - a) / 6048e5, i[g] = (s - a) / 864e5, i[v] = s / d, i[h] = s / u, i[p] = s / l, i)[o] || s, n ? c : P.a(c)
                        }, e.daysInMonth = function() {
                            return this.endOf(_).$D
                        }, e.$locale = function() {
                            return k[this.$L]
                        }, e.locale = function(t, e) {
                            if (!t) return this.$L;
                            var n = this.clone(),
                                i = o(t, e, !0);
                            return i && (n.$L = i), n
                        }, e.clone = function() {
                            return P.w(this.$d, this)
                        }, e.toDate = function() {
                            return new Date(this.valueOf())
                        }, e.toJSON = function() {
                            return this.isValid() ? this.toISOString() : null
                        }, e.toISOString = function() {
                            return this.$d.toISOString()
                        }, e.toString = function() {
                            return this.$d.toUTCString()
                        }, t
                    }(),
                    n = x.prototype;
                return S.prototype = n, [
                    ["$ms", c],
                    ["$s", p],
                    ["$m", h],
                    ["$H", v],
                    ["$W", g],
                    ["$M", _],
                    ["$y", y],
                    ["$D", w]
                ].forEach(function(e) {
                    n[e[1]] = function(t) {
                        return this.$g(t, e[0], e[1])
                    }
                }), S.extend = function(t, e) {
                    return t.$i || (t(e, x, S), t.$i = !0), S
                }, S.locale = o, S.isDayjs = i, S.unix = function(t) {
                    return S(1e3 * t)
                }, S.en = k[s], S.Ls = k, S.p = {}, S
            }()
        },
        87815: function(t) {
            t.exports = function() {
                "use strict";
                return function(g, t, m) {
                    g = g || {};
                    var o = t.prototype,
                        _ = {
                            future: "in %s",
                            past: "%s ago",
                            s: "a few seconds",
                            m: "a minute",
                            mm: "%d minutes",
                            h: "an hour",
                            hh: "%d hours",
                            d: "a day",
                            dd: "%d days",
                            M: "a month",
                            MM: "%d months",
                            y: "a year",
                            yy: "%d years"
                        };

                    function n(t, e, n, i) {
                        return o.fromToBase(t, e, n, i)
                    }
                    m.en.relativeTime = _, o.fromToBase = function(t, e, n, i, o) {
                        for (var r, a, s, c = n.$locale().relativeTime || _, l = g.thresholds || [{
                                l: "s",
                                r: 44,
                                d: "second"
                            }, {
                                l: "m",
                                r: 89
                            }, {
                                l: "mm",
                                r: 44,
                                d: "minute"
                            }, {
                                l: "h",
                                r: 89
                            }, {
                                l: "hh",
                                r: 21,
                                d: "hour"
                            }, {
                                l: "d",
                                r: 35
                            }, {
                                l: "dd",
                                r: 25,
                                d: "day"
                            }, {
                                l: "M",
                                r: 45
                            }, {
                                l: "MM",
                                r: 10,
                                d: "month"
                            }, {
                                l: "y",
                                r: 17
                            }, {
                                l: "yy",
                                d: "year"
                            }], u = l.length, d = 0; d < u; d += 1) {
                            var f = l[d];
                            f.d && (r = i ? m(t).diff(n, f.d, !0) : n.diff(t, f.d, !0));
                            var p = (g.rounding || Math.round)(Math.abs(r));
                            if (s = r > 0, p <= f.r || !f.r) {
                                p <= 1 && d > 0 && (f = l[d - 1]);
                                var h = c[f.l];
                                o && (p = o("" + p)), a = "string" == typeof h ? h.replace("%d", p) : h(p, e, f.l, s);
                                break
                            }
                        }
                        if (e) return a;
                        var v = s ? c.future : c.past;
                        return "function" == typeof v ? v(a) : v.replace("%s", a)
                    }, o.to = function(t, e) {
                        return n(t, e, this, !0)
                    }, o.from = function(t, e) {
                        return n(t, e, this)
                    };
                    var e = function(t) {
                        return t.$u ? m.utc() : m()
                    };
                    o.toNow = function(t) {
                        return this.to(e(this), t)
                    }, o.fromNow = function(t) {
                        return this.from(e(this), t)
                    }
                }
            }()
        },
        65601: function(t, e, n) {
            "use strict";
            n.r(e)
        },
        51439: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(77804),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var n = this,
                        t = n.$createElement,
                        i = n._self._c || t;
                    return i('div', {
                        ref: "bindInputBox",
                        staticClass: "section tab-nav-box sub-game-account sub-id g-clr"
                    }, [n.showfindopenid ? i('ul', [i('li', {
                        staticClass: "active"
                    }, [n._v("\n            " + n._s(n.lanres.gameIdLoginTitle) + "\n            "), i('em', {
                        staticClass: "help-icon",
                        on: {
                            click: n.showFoundOpenidPop
                        }
                    })])]) : n._e(), n._v(" "), n.forceLogin ? n._t("forceLogin") : [i('div', {
                        staticClass: "tab-box"
                    }, [i('div', {
                        class: ['box id-box active', {
                            'have-zIndex-select': 'partition' === n.selectType
                        }]
                    }, [n.userInfo ? i('div', {
                        staticClass: "y-box"
                    }, [i('div', {
                        staticClass: "mess"
                    }, [n._l(n.infoList, function(t) {
                        return [t.show ? i('div', {
                            key: t.title,
                            class: t.class
                        }, [i('span', {
                            staticClass: "label"
                        }, [n._v("\n                                    " + n._s(t.title) + ":\n                                ")]), n._v(" "), i('p', {
                            staticClass: "val"
                        }, [n._v(n._s(t.val))])]) : n._e()]
                    })], 2), n._v(" "), n.showModify ? [i('div', {
                        staticClass: "link-mod-a"
                    }, [i('a', {
                        on: {
                            click: n.changeOpenid
                        }
                    }, [n._v("\n                                " + n._s(n.lanres.gameIdLoginModifyButton) + "\n                            ")])])] : n._e()], 2) : [n.showPartitionSelect ? [i('partition-select', {
                        ref: "partitionSelectRef",
                        attrs: {
                            platforms: n.platforms,
                            selectPartition: n.selectPartition,
                            selectedInfo: n.selectedInfo,
                            lanres: n.lanres
                        }
                    }), n._v(" "), i('div', {
                        staticClass: "box-line"
                    })] : n._e(), n._v(" "), i('div', {
                        staticClass: "n-box"
                    }, ['system' === n.selectType ? i('plat-select', {
                        ref: "platSelectRef",
                        attrs: {
                            platforms: n.platforms,
                            selectPlatform: n.selectPlatform,
                            selectedInfo: n.selectedInfo,
                            pfDefaultSelect: n.lanres.pfDefaultSelect,
                            lightInput: n.lightInput
                        }
                    }) : n._e(), n._v(" "), i('div', {
                        class: ['input-box', 'have-select-input-box', {
                            light: n.lightInput,
                            error: n.errorTxt
                        }]
                    }, [i('input', {
                        directives: [{
                            name: "model",
                            rawName: "v-model.trim",
                            value: n.shortId,
                            expression: "shortId",
                            modifiers: {
                                trim: !0
                            }
                        }],
                        ref: "inputbox",
                        staticClass: "input",
                        attrs: {
                            type: "text",
                            maxlength: "20",
                            placeholder: n.lanres.gameIdLoginInput
                        },
                        domProps: {
                            value: n.shortId
                        },
                        on: {
                            click: n.clickInput,
                            blur: [n.blurInput, function(t) {
                                return n.$forceUpdate()
                            }],
                            focus: n.focusInput,
                            keydown: function(t) {
                                return !t.type.indexOf('key') && n._k(t.keyCode, "enter", 13, t.key, "Enter") ? null : n.keydown.apply(null, arguments)
                            },
                            input: [function(t) {
                                t.target.composing || (n.shortId = t.target.value.trim())
                            }, n.onInput]
                        }
                    }), n._v(" "), i('em', {
                        class: {
                            active: n.showDropDown
                        },
                        style: {
                            display: n.dropDownLists.length ? 'block' : 'none'
                        },
                        on: {
                            mousedown: function(t) {
                                return t.stopPropagation(), n.toggleDropDown.apply(null, arguments)
                            }
                        }
                    }), n._v(" "), n.errorTxt ? i('i', {
                        staticClass: "error-close",
                        on: {
                            click: n.clearInput
                        }
                    }) : n._e(), n._v(" "), i('div', {
                        staticClass: "select-input",
                        style: {
                            display: n.activeSelectStatus ? 'block' : ''
                        }
                    }, n._l(n.dropDownLists, function(e) {
                        return i('div', {
                            key: "" + e.userid,
                            staticClass: "li",
                            on: {
                                mousedown: function(t) {
                                    return n.selectItem(e)
                                }
                            }
                        }, [n._v("\n                                    " + n._s(e.userid) + " (" + n._s(e.charac_name) + ")"), i('i', {
                            staticClass: "untying-icon",
                            on: {
                                mousedown: function(t) {
                                    return t.stopPropagation(), n.untypeItem(e)
                                }
                            }
                        })])
                    }), 0)]), n._v(" "), n.showSubmitBtn ? [n.loading ? i('div', {
                        staticClass: "btn loading-btn"
                    }, [n._m(0)]) : i('div', {
                        class: ['btn', {
                            disable: n.isDisable
                        }],
                        on: {
                            click: n.getGameInfo
                        }
                    }, [n._v("\n                                " + n._s(n.lanres.gameIdLoginOkButton) + "\n                            ")])] : n._e()], 2)], n._v(" "), n.errorTxt ? i('p', {
                        staticClass: "error-tips show"
                    }, [n._v("\n                    " + n._s(n.errorTxt) + "â€Ž\n                ")]) : n._e(), n._v(" "), i('p', {
                        class: ['auxiliary-tips', {
                            show: n.limitSystem && !n.userInfo
                        }]
                    }, [n._v("\n                    " + n._s(n.lanres.platformTips) + "\n                ")]), n._v(" "), n.roleSuggestionInfo ? i('div', {
                        staticClass: "role-suggestion-box",
                        on: {
                            click: function(t) {
                                return n.selectItem(n.roleSuggestionInfo)
                            }
                        }
                    }, [i('div', {
                        staticClass: "mess"
                    }, [i('div', {
                        staticClass: "name"
                    }, [n._v("\n                            " + n._s(n.lanres.gameIdLoginCharacName) + ":\n                            " + n._s(n.roleSuggestionInfo.charac_name) + "\n                        ")]), n._v(" "), i('div', {
                        staticClass: "id"
                    }, [n._v("\n                            " + n._s(n.lanres.gameIdLoginId) + ":\n                            " + n._s(n.roleSuggestionInfo.userid) + "\n                        ")])]), n._v(" "), i('div', {
                        staticClass: "use"
                    }, [i('a', [n._v(" " + n._s(n.lanres.useUserId) + " ")])])]) : n._e()], 2)])]], 2)
                }, [function() {
                    var t = this.$createElement,
                        t = this._self._c || t;
                    return t('div', {
                        staticClass: "mid"
                    }, [t('img', {
                        attrs: {
                            src: "https://cdn.midasbuy.com/oversea_web/static/images/btn_loading_icon-2a2c3cd5b5.png",
                            alt: "img"
                        }
                    })])
                }], !1, null, null, null).exports
        },
        5409: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(66495),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var t = this,
                        e = t.$createElement,
                        e = t._self._c || e;
                    return e('div', {
                        staticClass: "login-agreement-box g-clr",
                        on: {
                            click: t.toggleChecked
                        }
                    }, [e('div', {
                        class: ['check-box', {
                            checked: t.checked
                        }],
                        attrs: {
                            tabindex: t.tabIndex
                        }
                    }), t._v(" "), e('div', {
                        class: ['text', {
                            'open-all': t.showMore
                        }],
                        domProps: {
                            innerHTML: t._s(t.label)
                        },
                        on: {
                            click: t.handleClickLabel
                        }
                    }), t._v(" "), e('p', {
                        class: ['error-tips', {
                            show: t.checkedErrorShow && !t.checked
                        }]
                    }, [t._v("\n        " + t._s(t.checkedErrorMsg) + "\n    ")])])
                }, [], !1, null, null, null).exports
        },
        71617: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(99460),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var n = this,
                        t = n.$createElement,
                        i = n._self._c || t;
                    return i('div', {
                        staticClass: "account-mod-box following-agreement-box",
                        staticStyle: {
                            display: "block"
                        }
                    }, [i('div', {
                        staticClass: "title"
                    }, [i('p', [n._v(n._s(n.checkRightPopLan.title))])]), n._v(" "), n.hideClose ? n._e() : i('div', {
                        staticClass: "close-btn",
                        on: {
                            click: n.closePop
                        }
                    }), n._v(" "), i('div', {
                        staticClass: "form-box"
                    }, [i('p', {
                        staticClass: "x-title"
                    }, [n._v("\n            " + n._s(n.checkRightPopLan.subTitle) + "\n        ")]), n._v(" "), i('div', {
                        staticClass: "text-box"
                    }, [i('div', {
                        staticClass: "item-ul"
                    }, n._l(n.checkRightOptions, function(t, e) {
                        return i('check-box', {
                            key: t.id,
                            attrs: {
                                label: t.desc,
                                index: e,
                                lanres: n.lanres,
                                checkedErrorShow: n.checkedErrorShow,
                                toggleCheckedCallback: n.toggleCheckedCallback,
                                handleCheckRight: n.handleCheckRight
                            }
                        })
                    }), 1)])]), n._v(" "), i('div', {
                        staticClass: "bottom-fixed none-border"
                    }, [i('div', {
                        staticClass: "btn-box"
                    }, [i('div', {
                        staticClass: "btn sign-in-btn",
                        on: {
                            click: n.submitLogin
                        }
                    }, [n._v("\n                " + n._s(n.checkRightPopLan.nextBtn) + "\n            ")])])])])
                }, [], !1, null, null, null).exports
        },
        51673: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(66526),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var e = this,
                        t = e.$createElement,
                        n = e._self._c || t;
                    return n('div', {
                        staticClass: "account-mod-box following-agreement-box",
                        staticStyle: {
                            display: "block"
                        }
                    }, [n('div', {
                        staticClass: "title"
                    }, [n('p', [e._v(e._s(e.lanres.legalAgreement))])]), e._v(" "), e.pageConfig.hideClose ? e._e() : n('div', {
                        staticClass: "close-btn",
                        on: {
                            click: e.close
                        }
                    }), e._v(" "), n('div', {
                        staticClass: "back-icon-mod",
                        on: {
                            click: e.back
                        }
                    }), e._v(" "), n('div', {
                        ref: "formBoxRef",
                        staticClass: "form-box"
                    }, [n('p', {
                        staticClass: "x-title"
                    }, [e._v(e._s(e.currentClause.title))]), e._v(" "), n('div', {
                        staticClass: "text-box"
                    }, [e.currentClause.desc ? n('div', {
                        staticClass: "item-ul",
                        domProps: {
                            innerHTML: e._s(e.currentClause.desc)
                        }
                    }) : e._e()])]), e._v(" "), n('div', {
                        staticClass: "bottom-fixed"
                    }, [n('div', {
                        staticClass: "step-model-box"
                    }, [n('ul', e._l(e.stepArr, function(t) {
                        return n('li', {
                            key: t,
                            class: {
                                active: t + 1 === e.currentStep
                            }
                        })
                    }), 0)]), e._v(" "), n('div', {
                        staticClass: "btn-box"
                    }, [n('div', {
                        staticClass: "btn cancel-btn",
                        on: {
                            click: e.disagree
                        }
                    }, [e._v(" " + e._s(e.lanres.disagreeBtn) + " ")]), e._v(" "), n('div', {
                        staticClass: "btn sign-in-btn",
                        on: {
                            click: e.agree
                        }
                    }, [e._v(e._s(e.lanres.agreeBtn))])])])])
                }, [], !1, null, null, null).exports
        },
        45906: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(30037),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var t = this,
                        e = t.$createElement,
                        e = t._self._c || e;
                    return e('div', {
                        staticClass: "pop-mode-box",
                        style: {
                            display: t.show ? 'block' : 'none'
                        },
                        attrs: {
                            id: "pop-box"
                        }
                    }, [e('div', {
                        staticClass: "pop-mode have-form-pop pop-login-mode",
                        staticStyle: {
                            display: "block"
                        }
                    }, [e(t.showModule, t._g({
                        tag: "component",
                        attrs: {
                            lanres: t.lanres,
                            closePop: t.closePop,
                            confirmClauseHandler: t.agreeClauseHandler,
                            confirmStepClauseHandler: t.agreeStepClauseHandler,
                            cancelClauseHandler: t.closePop,
                            backHandler: t.backHandler
                        }
                    }, t.$listeners))], 1)])
                }, [], !1, null, null, null).exports
        },
        95590: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(58700),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var t = this,
                        e = t.$createElement,
                        e = t._self._c || e;
                    return e('div', [1 === t.isNotification && t.visible ? e('div', {
                        staticClass: "notification-message",
                        class: [t.modColorClass]
                    }, [e('p', {
                        staticClass: "mess"
                    }, [e('span', {
                        staticStyle: {
                            "font-weight": "100"
                        }
                    }, [e('span', {
                        staticClass: "icon iconfont iconicon-message"
                    }), t._v(" "), e('span', [t._v(t._s(t.notifyTitle || 'Notification'))]), t._v("\n                : " + t._s(t.text) + "\n            ")])]), t._v(" "), e('div', {
                        staticClass: "block"
                    }, [t.allowMore ? e('p', {
                        staticClass: "more",
                        on: {
                            click: t.showMoreText
                        }
                    }, [t._t("more")], 2) : t._e(), t._v(" "), e('div', {
                        staticClass: "close icon iconfont iconicon-close",
                        on: {
                            click: t.closeMessage
                        }
                    })])]) : t._e(), t._v(" "), 0 === t.isNotification ? e('div', {
                        staticClass: "market-message",
                        class: [t.modColorClass],
                        staticStyle: {
                            cursor: "pointer"
                        },
                        on: {
                            click: t.jumpToEvent
                        }
                    }, [e('div', {
                        staticClass: "mess"
                    }, [e('div', {
                        staticClass: "dowebok",
                        staticStyle: {
                            "white-space": "nowrap"
                        }
                    }, [t._v(t._s(t.text))])]), t._v(" "), t._t("popcontent"), t._v(" "), t.bubble ? [e('div', {
                        staticClass: "arrow"
                    }), t._v(" "), e('div', {
                        staticClass: "model-bubble"
                    }, [t._v(t._s(t.bubble))])] : t._e(), t._v(" "), e('img', {
                        attrs: {
                            src: t.propImg
                        }
                    })], 2) : t._e()])
                }, [], !1, null, null, null).exports
        },
        49757: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(11841),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var t = this,
                        e = t.$createElement,
                        e = t._self._c || e;
                    return e('div', {
                        staticClass: "pop-mode-box",
                        style: {
                            display: t.showBox ? 'block' : 'none'
                        },
                        attrs: {
                            id: "pop-box"
                        }
                    }, [e('div', {
                        staticClass: "pop-mode notification-message-pop show"
                    }, [e('div', {
                        staticClass: "mess have-desc"
                    }, [e('p', [t._v(t._s(t.title || 'Notification'))])]), t._v(" "), e('div', {
                        staticClass: "desc max-desc",
                        staticStyle: {
                            "word-wrap": "break-word"
                        }
                    }, [e('p', [t._v(t._s(t.desc))])]), t._v(" "), e('div', {
                        staticClass: "btn-wrap"
                    }, [e('div', {
                        staticClass: "btn",
                        on: {
                            click: t.closeMore
                        }
                    }, [t._v(t._s(t.btn))])])])])
                }, [], !1, null, null, null).exports
        },
        45681: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(37594),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var n = this,
                        t = n.$createElement,
                        i = n._self._c || t;
                    return i('div', {
                        staticClass: "box select-box"
                    }, [i('div', {
                        class: ['select-input-box', n.columnClass],
                        style: {
                            display: n.showPartitionList ? 'block' : 'none'
                        }
                    }, [i('div', {
                        staticClass: "select-bg"
                    }), n._v(" "), i('div', {
                        staticClass: "select-min-box"
                    }, [i('div', {
                        staticClass: "min-title"
                    }, [i('p', [n._v(n._s(n.lanres.partitionSelectTitle))]), n._v(" "), i('em', {
                        staticClass: "close",
                        on: {
                            click: n.togglePartitionList
                        }
                    })]), n._v(" "), i('div', {
                        staticClass: "block"
                    }, [2 < n.showColumnNum ? i('div', {
                        staticClass: "row row-equipment"
                    }, n._l(n.plats, function(e) {
                        return i('div', {
                            key: e,
                            class: ['li', {
                                active: n.selectedPlat === e
                            }],
                            on: {
                                click: function(t) {
                                    return n.selectPlatHandler(e)
                                }
                            }
                        }, [n._v("\n                        " + n._s(e) + "\n                    ")])
                    }), 0) : n._e(), n._v(" "), 1 < n.showColumnNum ? i('div', {
                        staticClass: "row row-serial-number"
                    }, n._l(n.groupList, function(e) {
                        return i('div', {
                            key: e,
                            class: ['li', {
                                active: e === n.selectedGroup
                            }],
                            on: {
                                click: function(t) {
                                    return n.selectGroupHandler(e)
                                }
                            }
                        }, [n._v("\n                        " + n._s(e) + "\n                    ")])
                    }), 0) : n._e(), n._v(" "), i('div', {
                        staticClass: "row row-serial-area"
                    }, n._l(n.partitionList, function(e) {
                        return i('div', {
                            key: e.zoneid,
                            class: ['li', {
                                active: e.name === n.selected
                            }],
                            on: {
                                click: function(t) {
                                    return n.selectPartitionHandler(e)
                                }
                            }
                        }, [n._v("\n                        " + n._s(e.name) + "\n                    ")])
                    }), 0)])])]), n._v(" "), i('div', {
                        staticClass: "input-box have-select-input-box",
                        on: {
                            click: n.togglePartitionList
                        }
                    }, [i('input', {
                        staticClass: "input",
                        attrs: {
                            type: "text",
                            readonly: "true",
                            placeholder: n.lanres.partitionSelectTitle
                        },
                        domProps: {
                            value: n.selected
                        }
                    }), n._v(" "), i('em', {
                        class: {
                            active: n.showPartitionList
                        }
                    }), n._v(" "), i('i', {
                        staticClass: "error-close"
                    })])])
                }, [], !1, null, null, null).exports
        },
        77413: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(13352),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var n = this,
                        t = n.$createElement,
                        i = n._self._c || t;
                    return i('div', {
                        class: ['select-type', {
                            active: n.showPlatSelect,
                            light: n.lightInput
                        }]
                    }, [i('p', {
                        on: {
                            click: n.toggleSelect
                        }
                    }, [n._v(n._s(n.selected || n.pfDefaultSelect))]), n._v(" "), i('div', {
                        staticClass: "select-item",
                        style: {
                            display: n.showPlatSelect ? 'block' : 'none'
                        }
                    }, n._l(n.systemList, function(e) {
                        return i('div', {
                            key: e,
                            staticClass: "item",
                            class: {
                                active: e === n.selected
                            },
                            on: {
                                click: function(t) {
                                    return n.selectSystem(e)
                                }
                            }
                        }, [n._v("\n            " + n._s(e) + "\n        ")])
                    }), 0)])
                }, [], !1, null, null, null).exports
        },
        67843: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(46212),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var t = this,
                        e = t.$createElement,
                        e = t._self._c || e;
                    return e('div', {
                        staticClass: "pop-mode-box birthday-pop",
                        style: {
                            display: t.show_birthday_pop ? 'block' : 'none'
                        },
                        attrs: {
                            id: "birthday-pop"
                        }
                    }, [e('div', {
                        staticClass: "pop-mode have-form-pop",
                        staticStyle: {
                            display: "block"
                        }
                    }, [e('div', {
                        staticClass: "close",
                        on: {
                            click: t.closeBirthdayPop
                        }
                    }), t._v(" "), e('div', {
                        staticClass: "mess"
                    }, [e('p', [t._v(t._s(t.lan.birthTitle))])]), t._v(" "), e('div', {
                        staticClass: "form-box"
                    }, [e('div', {
                        staticClass: "input data-input",
                        attrs: {
                            id: "birthdayLine"
                        },
                        on: {
                            mousedown: function(t) {
                                t.preventDefault()
                            },
                            click: t.toggleDatePicker
                        }
                    }, [e('p', {
                        attrs: {
                            id: "birthdayDateInput"
                        }
                    }, [t._v(t._s(t.lan.checkBirthInput))]), t._v(" "), e('div', {
                        staticClass: "date x-btn"
                    }), t._v(" "), e('div', {
                        staticClass: "time-picker-box",
                        staticStyle: {
                            display: "none",
                            outline: "0"
                        },
                        attrs: {
                            tabindex: "-1"
                        }
                    })]), t._v(" "), e('p', {
                        staticClass: "error-tips",
                        style: {
                            display: t.showErrorTips ? 'block' : 'none'
                        }
                    }, [t._v("\n                " + t._s(t.birthdayError) + "\n            ")])]), t._v(" "), e('div', {
                        staticClass: "btn-wrap"
                    }, [e('div', {
                        staticClass: "btn next-step-btn",
                        on: {
                            click: t.confirmBirthday
                        }
                    }, [t._v("\n                " + t._s(t.lan.birthConfirmBtn) + "\n            ")])])])])
                }, [], !1, null, null, null).exports
        },
        98785: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(68880),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var r = this,
                        t = r.$createElement,
                        e = r._self._c || t;
                    return e('div', {
                        staticClass: "pop-mode-box",
                        staticStyle: {
                            display: "none"
                        },
                        style: r._style
                    }, [e('div', {
                        staticClass: "pop-mode pop-default-mode",
                        class: {
                            'btn-row-pop': 'row' === r.option.layout
                        },
                        style: r._style
                    }, [r.option.title ? e('div', {
                        staticClass: "mess"
                    }, [e('p', {
                        class: r.title_icon_class
                    }, [r._v(r._s(r.option.title))])]) : r._e(), r._v(" "), r.option.showCloseIcon ? e('div', {
                        staticClass: "close-btn",
                        on: {
                            click: r.cancel
                        }
                    }) : r._e(), r._v(" "), 'string' == typeof r.option.tips ? e('div', {
                        class: r.desc_class
                    }, [e('div', {
                        staticClass: "div"
                    }, [r._v(r._s(r.option.tips))]), r._v(" "), r.option.input_option ? e('div', {
                        staticClass: "list-box"
                    }, [e('div', {
                        staticClass: "list"
                    }, r._l(r.option.input_option, function(o, t) {
                        return e('div', {
                            key: o.label,
                            staticClass: "row",
                            style: 1 < r.option.input_option.length && 0 !== t ? 'margin-top:12px;' : ''
                        }, [e('p', {
                            staticClass: "label"
                        }, [r._v(r._s(o.label))]), r._v(" "), e('div', {
                            staticClass: "input-box"
                        }, ['checkbox' === (o.type || 'text') ? e('input', {
                            directives: [{
                                name: "model",
                                rawName: "v-model",
                                value: r.value_map[o.label],
                                expression: "value_map[input_option.label]"
                            }],
                            staticClass: "card-number",
                            attrs: {
                                required: "",
                                placeholder: o.placeholder,
                                type: "checkbox"
                            },
                            domProps: {
                                checked: Array.isArray(r.value_map[o.label]) ? -1 < r._i(r.value_map[o.label], null) : r.value_map[o.label]
                            },
                            on: {
                                change: function(t) {
                                    var e = r.value_map[o.label],
                                        n = t.target,
                                        i = !!n.checked;
                                    Array.isArray(e) ? (t = r._i(e, null), n.checked ? t < 0 && r.$set(r.value_map, o.label, e.concat([null])) : -1 < t && r.$set(r.value_map, o.label, e.slice(0, t).concat(e.slice(t + 1)))) : r.$set(r.value_map, o.label, i)
                                }
                            }
                        }) : 'radio' === (o.type || 'text') ? e('input', {
                            directives: [{
                                name: "model",
                                rawName: "v-model",
                                value: r.value_map[o.label],
                                expression: "value_map[input_option.label]"
                            }],
                            staticClass: "card-number",
                            attrs: {
                                required: "",
                                placeholder: o.placeholder,
                                type: "radio"
                            },
                            domProps: {
                                checked: r._q(r.value_map[o.label], null)
                            },
                            on: {
                                change: function(t) {
                                    return r.$set(r.value_map, o.label, null)
                                }
                            }
                        }) : e('input', {
                            directives: [{
                                name: "model",
                                rawName: "v-model",
                                value: r.value_map[o.label],
                                expression: "value_map[input_option.label]"
                            }],
                            staticClass: "card-number",
                            attrs: {
                                required: "",
                                placeholder: o.placeholder,
                                type: o.type || 'text'
                            },
                            domProps: {
                                value: r.value_map[o.label]
                            },
                            on: {
                                input: function(t) {
                                    t.target.composing || r.$set(r.value_map, o.label, t.target.value)
                                }
                            }
                        })]), r._v(" "), e('p', {
                            staticClass: "error-tips",
                            class: {
                                show: r.shouldShowErrorTips(o.label)
                            }
                        }, [r._v(r._s(o.error_tips))])])
                    }), 0)]) : r._e()]) : r._e(), r._v(" "), 'string' == typeof r.option.vhtmltips ? e('div', {
                        staticClass: "desc min-desc"
                    }, [e('p', {
                        domProps: {
                            innerHTML: r._s(r.option.vhtmltips)
                        }
                    })]) : r._e(), r._v(" "), r.option.cancelButtonText && r.option.confirmButtonText ? [e('div', {
                        staticClass: "btn-wrap btn-wraps"
                    }, [e('div', {
                        staticClass: "btn cancel-btn",
                        on: {
                            click: r.cancel
                        }
                    }, [r._v(r._s(r.option.cancelButtonText))]), r._v(" "), e('div', {
                        staticClass: "btn comfirm-btn",
                        on: {
                            click: r.confirm
                        }
                    }, [r._v(r._s(r.option.confirmButtonText))])])] : r.option.cancelButtonText ? [e('div', {
                        staticClass: "btn-wrap"
                    }, [e('div', {
                        staticClass: "btn",
                        on: {
                            click: r.cancel
                        }
                    }, [r._v(r._s(r.option.cancelButtonText))])])] : r.option.confirmButtonText ? [e('div', {
                        staticClass: "btn-wrap"
                    }, [e('div', {
                        staticClass: "btn",
                        on: {
                            click: r.confirm
                        }
                    }, [r._v(r._s(r.option.confirmButtonText))])])] : r._e()], 2)])
                }, [], !1, null, null, null).exports
        },
        97547: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(57268),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var e = this,
                        t = e.$createElement,
                        n = e._self._c || t;
                    return n('div', {
                        attrs: {
                            id: "vue-footer"
                        }
                    }, [e.showBottomSocial ? n('div', {
                        staticClass: "set-bottom-footer"
                    }, [n('div', {
                        staticClass: "main"
                    }, [n('div', {
                        staticClass: "con-int"
                    }, [n('p', {
                        staticClass: "label"
                    }, [e._v(e._s(e.lanRes.followUs))]), e._v(" "), n('div', {
                        staticClass: "p-box g-clr"
                    }, [n('div', {
                        staticClass: "box"
                    }, e._l(e.socialConfigList, function(t) {
                        return n('div', {
                            key: t.name,
                            staticClass: "on-list"
                        }, [n('a', {
                            attrs: {
                                target: "_blank",
                                href: t.href
                            }
                        }, [n('img', {
                            staticClass: "default",
                            attrs: {
                                src: t.image,
                                alt: "img"
                            }
                        })])])
                    }), 0)])]), e._v(" "), n('div', {
                        staticClass: "close",
                        on: {
                            click: e.closeBottomSocial
                        }
                    })])]) : e._e(), e._v(" "), n('div', {
                        staticClass: "footer"
                    }, [n('div', {
                        staticClass: "main"
                    }, [n('div', {
                        staticClass: "t"
                    }, [n('div', {
                        staticClass: "left"
                    }, [e.socialConfigList ? [n('p', {
                        staticClass: "label"
                    }, [e._v(e._s(e.lanRes.followUs))]), e._v(" "), n('div', {
                        ref: "footerSocial",
                        staticClass: "p-box g-clr"
                    }, [n('div', {
                        staticClass: "box"
                    }, e._l(e.socialConfigList, function(t) {
                        return n('div', {
                            key: t.name,
                            staticClass: "on-list"
                        }, [n('a', {
                            attrs: {
                                target: "_blank",
                                href: t.href
                            }
                        }, [n('img', {
                            staticClass: "default",
                            attrs: {
                                src: t.image,
                                alt: "img"
                            }
                        })])])
                    }), 0)])] : e._e()], 2), e._v(" "), n('div', {
                        staticClass: "right"
                    }, [n('p', {
                        staticClass: "label"
                    }, [e._v("\n                        " + e._s(e.lanRes.contact) + "\n                    ")]), e._v(" "), n('div', {
                        staticClass: "p-box g-clr"
                    }, [n('div', {
                        staticClass: "box"
                    }, [n('p', {
                        staticClass: "p"
                    }, [e._v("\n                                " + e._s(e.lanRes.cstips) + "\n                            ")])]), e._v(" "), e.footerConfig.disableFeedBack ? e._e() : n('a', {
                        staticClass: "contact-btn email",
                        attrs: {
                            href: e.links.feedback,
                            cr: "feedback"
                        }
                    }, [n('span', [e._v(" " + e._s(e.lanRes.feedback))])]), e._v(" "), e.showFbMessagerBtn ? n('a', {
                        staticClass: "contact-btn facebook",
                        attrs: {
                            href: "javascript:void(0)",
                            cr: "facebook"
                        },
                        on: {
                            click: e.clickFbFeedback
                        }
                    }, [n('span', [e._v(" " + e._s(e.lanRes.facebook) + " ")])]) : e._e()])])]), e._v(" "), n('div', {
                        staticClass: "b"
                    }, [n('ul', {
                        staticClass: "link"
                    }, [n('li', [n('a', {
                        staticClass: "cookie-agreement",
                        attrs: {
                            href: "javascript:;",
                            id: "cookieBtn"
                        },
                        on: {
                            click: function(t) {
                                e.showEeaCookiePreferCentre = !0
                            }
                        }
                    }, [e._v("\n                            " + e._s(e.lanRes.termofcookie) + "\n                        ")])]), e._v(" "), n('li', [n('a', {
                        attrs: {
                            href: e.links ? e.links.termofservice : '#',
                            target: "_blank"
                        }
                    }, [e._v("\n                            " + e._s(e.lanRes.termofservice) + "\n                        ")])]), e._v(" "), n('li', [n('a', {
                        attrs: {
                            href: e.links ? e.links.privacystatement : '#',
                            target: "_blank"
                        }
                    }, [e._v("\n                            " + e._s(e.lanRes.privacystatement) + "\n                        ")])]), e._v(" "), e.links && e.links.cookiePolicy ? n('li', [n('a', {
                        attrs: {
                            href: e.links.cookiePolicy,
                            target: "_blank"
                        }
                    }, [e._v("\n                            " + e._s(e.lanRes.cookiePolicy) + "\n                        ")])]) : e._e()]), e._v(" "), n('p', {
                        staticClass: "copying"
                    }, [e._v("\n                    " + e._s(e.links.copyright || e.lanRes.copyright) + "\n                ")])])])]), e._v(" "), n('div', {
                        staticClass: "record-detailt-pop cookie-agreement-pop",
                        class: {
                            show: e.showEeaCookiePreferCentre
                        },
                        attrs: {
                            id: "cookie-agreement-pop"
                        }
                    }, [n('div', {
                        staticClass: "close-btn",
                        staticStyle: {
                            "z-index": "1"
                        },
                        on: {
                            click: e.modifyCookieControl
                        }
                    }), e._v(" "), n('div', {
                        staticClass: "pop-title clear-border"
                    }, [n('p', [e._v(e._s(e.lanRes.cookieT || "Your Cookie Preference"))])]), e._v(" "), n('div', {
                        staticClass: "detailt-box"
                    }, [n('span', {
                        staticClass: "txt-one",
                        domProps: {
                            innerHTML: e._s(e.lanRes.advanceDeclare || e.defaultAdvanceDeclare)
                        }
                    }), e._v(" "), n('p', {
                        staticClass: "txt-one",
                        domProps: {
                            innerHTML: e._s(e.lanRes.cookieP1 || e.defaultCookieP0)
                        }
                    }), e._v(" "), n('div', {
                        staticClass: "block"
                    }, [n('div', {
                        staticClass: "block-title"
                    }, [n('p', [e._v(e._s(e.lanRes.cookieT2 || "Necessary Cookies"))])]), e._v(" "), n('p', {
                        staticClass: "block-desc"
                    }, [e._v("\n                    " + e._s(e.lanRes.cookieP2 || "These cookies are necessary to provide you with the service and to use some of its features, such as to facilitate transactions.") + "\n                ")])]), e._v(" "), n('div', {
                        staticClass: "block"
                    }, [n('div', {
                        staticClass: "block-title"
                    }, [n('p', [e._v(e._s(e.lanRes.cookieT4 || "Analytics Cookies"))]), e._v(" "), n('div', {
                        staticClass: "switch-box",
                        class: {
                            open: e.cookieControlState.fn
                        }
                    }, [n('span', {
                        attrs: {
                            id: "gaStatus"
                        }
                    }, [e._v(e._s(e.fnWord))]), e._v(" "), n('div', {
                        staticClass: "switch-btn",
                        attrs: {
                            id: "cookieSwitchBtn"
                        },
                        on: {
                            click: e.fnCookieSwitchBtnClick
                        }
                    }, [n('em')])])]), e._v(" "), n('p', {
                        staticClass: "block-desc"
                    }, [e._v("\n                    " + e._s(e.lanRes.cookieP4 || "These cookies allow the website to remember the settings you have made in the past.") + "\n                ")])]), e._v(" "), n('div', {
                        staticClass: "block"
                    }, [n('div', {
                        staticClass: "block-title"
                    }, [n('p', [e._v(e._s(e.lanRes.cookieT3 || "Analytics Cookies"))]), e._v(" "), n('div', {
                        staticClass: "switch-box",
                        class: {
                            open: e.cookieControlState.analy
                        }
                    }, [n('span', {
                        attrs: {
                            id: "gaStatus"
                        }
                    }, [e._v(e._s(e.analyWord))]), e._v(" "), n('div', {
                        staticClass: "switch-btn",
                        attrs: {
                            id: "cookieSwitchBtn"
                        },
                        on: {
                            click: e.analyCookieSwitchBtnClick
                        }
                    }, [n('em')])])]), e._v(" "), n('p', {
                        staticClass: "block-desc"
                    }, [e._v("\n                    " + e._s(e.lanRes.cookieP3 || "These cookies are used to measure and analyse how the service is accessed, used, or is performing in order to provide you with a better user experience and to maintain, operate and continually improve the service.") + "\n                ")])])])]), e._v(" "), n('transition', {
                        attrs: {
                            name: "fade"
                        }
                    }, [n('div', {
                        directives: [{
                            name: "show",
                            rawName: "v-show",
                            value: e.showNonEeaCookiePreference,
                            expression: "showNonEeaCookiePreference"
                        }],
                        staticClass: "eea-pop"
                    }, [n('div', {
                        staticClass: "pop-content"
                    }, [n('div', {
                        directives: [{
                            name: "show",
                            rawName: "v-show",
                            value: e.cookieControlCountryType.includes('LowRisk'),
                            expression: "cookieControlCountryType.includes('LowRisk')"
                        }],
                        staticClass: "close-btn",
                        on: {
                            click: e.closeLowRiskPop
                        }
                    }), e._v(" "), n('p', {
                        staticClass: "label"
                    }, [e._v(e._s(e.lanRes.cookieConfirmTitle))]), e._v(" "), n('div', {
                        staticClass: "desc"
                    }, [n('p', {
                        domProps: {
                            innerHTML: e._s(e.lanRes.nonEeaCookieP1 || e.defaultNonEeaCookieP1)
                        }
                    }), e._v(" "), n('p', {
                        staticStyle: {
                            display: "inline"
                        },
                        domProps: {
                            innerHTML: e._s(e.lanRes.nonEeaCookieP2 || e.defaultNonEeaCookieP2)
                        }
                    }), e._v(" "), n('span', {
                        staticClass: "link",
                        on: {
                            click: function(t) {
                                e.showEeaCookiePreferCentre = !0
                            }
                        }
                    }, [e._v(e._s(e.lanRes.termofcookie || 'Cookies Preference Centre'))]), e._v(".\n                ")]), e._v(" "), n('div', {
                        staticClass: "btn-box",
                        style: {
                            display: e.cookieControlCountryType.includes('HighRisk') ? 'block' : 'none'
                        }
                    }, [n('div', {
                        staticClass: "btn comfirm-btn",
                        on: {
                            click: function(t) {
                                return e.chooseEssentialCookies(-1)
                            }
                        }
                    }, [e._v(e._s(e.lanRes.nonEeaAcceptBtn || 'Accept All Cookies'))]), e._v(" "), n('div', {
                        staticClass: "btn cancel-btn",
                        on: {
                            click: function(t) {
                                return e.chooseEssentialCookies(1)
                            }
                        }
                    }, [e._v(e._s(e.lanRes.nonEeaRejectBtn || 'Reject Non-Essential Cookies'))])]), e._v(" "), n('p', {
                        staticClass: "count-down",
                        style: {
                            display: e.cookieControlCountryType.includes('LowRisk') ? 'block' : 'none'
                        }
                    }, [e._v(e._s(e.lanRes.countDownWord) + " " + e._s(e.countDownNum) + " s...")])])])]), e._v(" "), n('div', {
                        staticClass: "fb-customerchat",
                        attrs: {
                            id: "fb-customer-chat",
                            page_id: e.footerConfig.customerChatId,
                            attribution: "biz_inbox"
                        }
                    })], 1)
                }, [], !1, null, "fde9f1e6", null).exports
        },
        24284: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, {
                __esModule: function() {
                    return i.X
                },
                default: function() {
                    return o
                }
            });
            var i = n(42940),
                e = i.Z,
                o = (0, n(40810).Z)(e, function() {
                    var e = this,
                        t = e.$createElement,
                        n = e._self._c || t;
                    return n('div', [e.isMobile && e.showFBLike && (e.links.facebookLink || e.links.game_fb || e.links.media_fb) ? n('div', {
                        staticClass: "follow"
                    }, [n('div', {
                        staticClass: "fb-like",
                        attrs: {
                            "data-href": e.links.facebookLink || e.links.game_fb || e.links.media_fb,
                            "data-layout": "button_count",
                            "data-action": "like",
                            "data-size": "large",
                            "data-share": "false"
                        }
                    })]) : e._e(), e._v(" "), e.headerBox ? n('div', {
                        staticClass: "header-box g-clr"
                    }) : e._e(), e._v(" "), n('div', {
                        staticClass: "header",
                        class: {
                            'not-fixed-header': e.notFixed,
                            zIndexMax: e.showDropList
                        }
                    }, [n('div', {
                        staticClass: "main g-clr"
                    }, [e.blockLogin ? e._e() : n('div', {
                        staticClass: "menu-more",
                        class: {
                            active: e.showMenuSideBar
                        },
                        on: {
                            click: function(t) {
                                e.showMenuSideBar = !0
                            }
                        }
                    }, [e._m(0)]), e._v(" "), e._m(1), e._v(" "), e.blockLogin ? e._e() : n('div', {
                        staticClass: "menu max1440"
                    }, [n('a', {
                        staticClass: "navIndexButton",
                        class: {
                            active: !e.isCardEventPage && !e.isNavTabActiveInPage('news')
                        },
                        attrs: {
                            href: "javascript:void(0)",
                            cr: "homepage"
                        },
                        on: {
                            click: e.goToHome
                        }
                    }, [e._v(e._s(e.lanRes.index))]), e._v(" "), e.latestRelease[e.country] && e.latestRelease[e.country].length ? n('div', {
                        ref: "latestRelease",
                        staticClass: "multistage-nav",
                        on: {
                            mouseover: e.mouseOverlatestRelease,
                            mouseleave: e.mouseLeavelatestRelease
                        }
                    }, [n('span', [e._v("Latest Release")]), e._v(" "), n('div', {
                        staticClass: "multistage-nav-box",
                        style: {
                            display: e.showMultistageNavBox ? 'block' : 'none'
                        }
                    }, e._l(e.latestRelease[e.country], function(t) {
                        return n('div', {
                            key: t.href,
                            staticClass: "li",
                            on: {
                                click: function(t) {
                                    return e.handleRedPointClick('latestRelease')
                                }
                            }
                        }, [n('a', {
                            staticClass: "navItem",
                            attrs: {
                                href: t.href
                            }
                        }, [n('div', {
                            staticClass: "logo-box"
                        }, [n('img', {
                            attrs: {
                                src: t.img,
                                alt: "img"
                            }
                        })]), e._v(" "), n('p', [e._v(e._s(t.desc))])])])
                    }), 0)]) : e._e(), e._v(" "), e.navHeaderItemFilter('cardEvent') ? n('a', {
                        ref: "cardevent",
                        class: {
                            active: e.isCardEventPage
                        },
                        attrs: {
                            href: "javascript:void(0)",
                            cr: "cardevent"
                        },
                        on: {
                            click: e.goCardEvent
                        }
                    }, [e._v(e._s(e.lanRes.cardEvent))]) : e._e(), e._v(" "), n('a', {
                        ref: "newsCenter",
                        class: {
                            active: e.isNavTabActiveInPage('news')
                        },
                        attrs: {
                            href: "javascript:void(0)",
                            cr: "newsmain"
                        },
                        on: {
                            click: e.goToNewsCenter
                        }
                    }, [e._v(e._s(e.lanRes.newsCenter))]), e._v(" "), n('a', {
                        attrs: {
                            cr: "QA",
                            href: "javascript:void(0)"
                        },
                        on: {
                            click: e.goHelpCenter
                        }
                    }, [e._v(e._s(e.lanRes.helpcenter))])]), e._v(" "), e.blockLogin ? e._e() : n('div', {
                        staticClass: "menu min1440"
                    }, [e.latestRelease[e.country] && e.latestRelease[e.country].length ? n('div', {
                        staticClass: "multistage-nav",
                        on: {
                            mouseover: e.mouseOverlatestRelease,
                            mouseleave: e.mouseLeavelatestRelease
                        }
                    }, [n('span', [e._v(e._s(e.lanRes.index))]), e._v(" "), n('div', {
                        staticClass: "multistage-nav-box",
                        style: {
                            display: e.showMultistageNavBox ? 'block' : 'none'
                        }
                    }, [n('div', {
                        staticClass: "li active navIndexButton",
                        attrs: {
                            cr: "homepage"
                        },
                        on: {
                            click: e.goToHome
                        }
                    }, [n('a', {
                        attrs: {
                            href: "javascript:void(0)"
                        }
                    }, [n('p', {
                        attrs: {
                            cr: "homepage"
                        }
                    }, [e._v(e._s(e.lanRes.index))])])]), e._v(" "), e._l(e.latestRelease[e.country], function(t) {
                        return n('div', {
                            key: t.href,
                            staticClass: "li",
                            on: {
                                click: function(t) {
                                    return e.handleRedPointClick('latestRelease')
                                }
                            }
                        }, [n('a', {
                            staticClass: "navItem",
                            attrs: {
                                href: t.href
                            }
                        }, [n('div', {
                            staticClass: "logo-box"
                        }, [n('img', {
                            attrs: {
                                src: t.img,
                                alt: "img"
                            }
                        })]), e._v(" "), n('p', [e._v(e._s(t.desc))])])])
                    }), e._v(" "), n('div', {
                        staticClass: "li"
                    }, [n('a', {
                        attrs: {
                            target: "_blank",
                            cr: "QA",
                            href: "javascript:void(0)"
                        },
                        on: {
                            click: e.goHelpCenter
                        }
                    }, [n('p', [e._v(e._s(e.lanRes.helpcenter))])])])], 2)]) : e._e()]), e._v(" "), n('div', {
                        staticClass: "log"
                    }, [e.blockLogin ? e._e() : [n('div', {
                        ref: "loginedUser",
                        staticClass: "logined",
                        class: {
                            act: e.showDropList
                        },
                        attrs: {
                            id: "loginedUser",
                            cr: "login_control_logged"
                        },
                        on: {
                            click: e.clickLoginUser
                        }
                    }, [n('img', {
                        staticClass: "user-pic",
                        style: {
                            display: e.isFbUser ? 'block' : 'none'
                        },
                        attrs: {
                            src: e.avatarUrl,
                            alt: "avator"
                        }
                    }), e._v(" "), e.isFbUser ? e._e() : [e.user ? n('p', {
                        staticClass: "user-email",
                        class: "vip-" + e.user.vip_level,
                        staticStyle: {
                            "background-image": "none"
                        }
                    }, [e._v(e._s(e.user.email))]) : n('p', {
                        staticClass: "user-email",
                        staticStyle: {
                            "background-image": "none"
                        }
                    }, [e._v(e._s(e.lanRes.myAccount))])]], 2)], e._v(" "), e.user ? e._e() : n('transition', {
                        attrs: {
                            name: "fade"
                        }
                    }, [e.bubblePopConfig.bubbleShow ? n('a', {
                        staticClass: "register-tips",
                        attrs: {
                            href: "javascript:void(0)",
                            cr: "login_control_bubble"
                        },
                        on: {
                            click: e.linkToActivity
                        }
                    }, [n('p', {
                        domProps: {
                            innerHTML: e._s(e.lanRes.bubblePop && e.lanRes.bubblePop.bubbleTips || 'REGISTER TO GET <span>FREE</span> ITEM')
                        }
                    })]) : e._e()]), e._v(" "), !e.blockcountry && e.countryInfo ? n('div', {
                        staticClass: "luanch"
                    }, [n('div', {
                        staticClass: "country",
                        attrs: {
                            cr: "regional_select",
                            id: "country_select"
                        },
                        on: {
                            click: e.goToCountryList
                        }
                    }, [n('img', {
                        staticClass: "country-icon",
                        attrs: {
                            cr: "regional_select",
                            src: e.countryInfo.flag,
                            alt: "flag"
                        }
                    })])]) : e._e(), e._v(" "), e.appDownloadConfig && e.appDownloadConfig.enable ? n('div', {
                        staticClass: "down-app pc-show"
                    }, [n('p', {
                        staticClass: "label"
                    }, [e._v("App")]), e._v(" "), n('div', {
                        staticClass: "down-app-code"
                    }, [e._m(2), e._v(" "), n('img', {
                        attrs: {
                            src: e.appDownloadConfig.qrCode,
                            alt: "img"
                        }
                    })])]) : e._e(), e._v(" "), !e.isMobile && e.showFBLike && (e.links.facebookLink || e.links.game_fb || e.links.media_fb) ? n('div', {
                        staticClass: "facebook facebook-btn pc-show"
                    }, [n('div', {
                        staticClass: "fb-like",
                        attrs: {
                            "data-href": e.links.facebookLink || e.links.game_fb || e.links.media_fb,
                            "data-layout": "button_count",
                            "data-action": "like",
                            "data-size": "large",
                            "data-share": "false"
                        }
                    })]) : e._e()], 2), e._v(" "), n('transition', {
                        attrs: {
                            name: e.transitionName
                        }
                    }, [n('div', {
                        directives: [{
                            name: "show",
                            rawName: "v-show",
                            value: e.showDropList,
                            expression: "showDropList"
                        }],
                        staticClass: "user-mess-box vip-mess-box",
                        class: {
                            'not-vip-mess-box': e.user && !e.user.vip_level,
                            'mobile-show': e.showDropList
                        }
                    }, [n('div', {
                        staticClass: "san"
                    }), e._v(" "), n('div', {
                        staticClass: "head-box"
                    }, [n('img', {
                        staticClass: "top-logo",
                        attrs: {
                            src: "https://cdn.midasbuy.com/oversea_web/static/images/pc-logo.png",
                            alt: "img"
                        }
                    }), e._v(" "), n('img', {
                        staticClass: "close-btn",
                        attrs: {
                            src: "https://cdn.midasbuy.com/oversea_web/static/images/big-new-close-icon.png",
                            alt: "img"
                        },
                        on: {
                            click: function(t) {
                                e.showDropList = !1
                            }
                        }
                    })]), e._v(" "), n('ul', [e.user ? [e.user ? n('li', {
                        staticClass: "user-coins-mess",
                        class: "vip-" + e.user.vip_level,
                        attrs: {
                            id: "headerVipcenterButton"
                        },
                        on: {
                            click: e.goToVipCenter
                        }
                    }, [n('p', {
                        staticClass: "label"
                    }, [e._v(e._s(e.lanRes.myAccount))]), e._v(" "), n('p', {
                        staticClass: "user-ms"
                    }, [e._v(e._s(e.user.userName))]), e._v(" "), n('div', {
                        staticClass: "vip-icon"
                    }), e._v(" "), n('div', {
                        ref: "vipCenter",
                        staticClass: "go"
                    })]) : e._e()] : [n('li', {
                        staticClass: "user-not-login"
                    }, [n('p', {
                        staticClass: "label"
                    }, [e._v(e._s(e.lanRes.moreSuvice))]), e._v(" "), n('div', {
                        staticClass: "btn-box"
                    }, [n('div', {
                        staticClass: "log-in headerLoginButton",
                        attrs: {
                            cr: "login"
                        },
                        on: {
                            click: function(t) {
                                return e.goMidasLogin('login', 'login')
                            }
                        }
                    }, [e._v(e._s(e.lanRes.login))]), e._v(" "), n('div', {
                        staticClass: "register headerLoginButton",
                        attrs: {
                            cr: "register_for_login"
                        },
                        on: {
                            click: function(t) {
                                return e.goMidasLogin('register', 'reg')
                            }
                        }
                    }, [e._v(e._s(e.lanRes.register))]), e._v(" "), e.bubblePopConfig.promoteShow ? n('p', {
                        staticClass: "exclusive-regist",
                        attrs: {
                            cr: "login_control_promote"
                        }
                    }, [n('a', {
                        staticClass: "user-box-tips",
                        attrs: {
                            href: "javascript:void(0)"
                        },
                        on: {
                            click: e.linkToActivity
                        }
                    }, [e._v("\n                                            Get exclusive registeration gift for "), n('span', [e._v("FREE")])])]) : e._e()])]), e._v(" "), n('li', {
                        staticClass: "link check-status vipLoginButton",
                        attrs: {
                            cr: "vipintroduce_login"
                        },
                        on: {
                            click: function() {
                                return e.router.vipintroduce()
                            }
                        }
                    }, [n('div', {
                        ref: "vipIntroduce",
                        staticClass: "title"
                    }, [e._v(e._s(e.lanRes.midasVip))]), e._v(" "), n('div', {
                        staticClass: "novip-icon"
                    }, [e._v(e._s(e.lanRes.checkVipStatus))])])], e._v(" "), n('li', {
                        staticClass: "link"
                    }, [n('a', {
                        attrs: {
                            href: "javascript:void(0)",
                            cr: e.user ? 'account' : 'account_for_login',
                            id: "headerUsercenterButton"
                        },
                        on: {
                            click: e.linkToAccountSetting
                        }
                    }, [n('p', {
                        ref: "accountSettings",
                        staticClass: "login-account-settings"
                    }, [e._v(e._s(e.lanRes.accountSettings))])])]), e._v(" "), n('li', {
                        staticClass: "link",
                        on: {
                            click: e.linkPayMethod
                        }
                    }, [n('a', {
                        attrs: {
                            href: "javascript:void(0)",
                            cr: e.user ? 'pay_method' : 'pay_method_for_login',
                            id: "headerPayMethodButton"
                        }
                    }, [n('p', [e._v(e._s(e.lanRes.cardManage))])])]), e._v(" "), e.showRecordEntrance ? n('li', {
                        staticClass: "link",
                        attrs: {
                            cr: e.user ? 'transaction_record' : 'transaction_record_for_login'
                        },
                        on: {
                            click: e.linkToRecord
                        }
                    }, [n('a', {
                        attrs: {
                            href: "javascript:void(0)",
                            id: "headerTransactionButton"
                        }
                    }, [n('p', {
                        ref: "transactionRecord",
                        staticClass: "login-transaction-record"
                    }, [e._v(e._s(e.lanRes.transactionRecord))])])]) : e._e(), e._v(" "), e.user ? n('li', {
                        staticClass: "link"
                    }, [n('a', {
                        attrs: {
                            href: "javascript:void(0)",
                            id: "headerLogoutButton"
                        },
                        on: {
                            click: e.logOut
                        }
                    }, [n('p', [e._v(e._s(e.lanRes.logout))])])]) : e._e(), e._v(" "), n('img', {
                        staticClass: "user-mess-box-logo",
                        attrs: {
                            src: "https://cdn.midasbuy.com/oversea_web/static/images/pc-logo.png",
                            alt: "img"
                        }
                    })], 2)])]), e._v(" "), n('div', {
                        staticClass: "menu-nav-box",
                        class: {
                            'show active': e.showMenuSideBar
                        }
                    }, [n('div', {
                        staticClass: "head-box"
                    }, [n('img', {
                        staticClass: "close-btn",
                        attrs: {
                            src: "https://cdn.midasbuy.com/oversea_web/static/images/big-new-close-icon.png",
                            alt: "img"
                        },
                        on: {
                            click: function(t) {
                                e.showMenuSideBar = !1
                            }
                        }
                    }), e._v(" "), n('img', {
                        staticClass: "top-logo",
                        attrs: {
                            src: "https://cdn.midasbuy.com/oversea_web/static/images/pc-logo.png",
                            alt: "img"
                        }
                    })]), e._v(" "), n('ul', [n('li', {
                        staticClass: "acitve navIndexButton",
                        on: {
                            click: e.goToHome
                        }
                    }, [n('a', {
                        attrs: {
                            href: "javascript:void(0)",
                            cr: "homepage"
                        }
                    }, [e._v(e._s(e.lanRes.index))])]), e._v(" "), n('li', {
                        staticClass: "acitve navIndexButton",
                        on: {
                            click: e.goCardEvent
                        }
                    }, [e.navHeaderItemFilter('cardEvent') ? n('a', {
                        ref: "cardevent",
                        attrs: {
                            href: "javascript:void(0)",
                            cr: "cardevent"
                        }
                    }, [e._v(e._s(e.lanRes.cardEvent))]) : e._e()]), e._v(" "), n('li', {
                        staticClass: "acitve navIndexButton",
                        on: {
                            click: e.goToNewsCenter
                        }
                    }, [n('a', {
                        ref: "newsCenter",
                        attrs: {
                            href: "javascript:void(0)",
                            cr: "newsmain"
                        }
                    }, [e._v(e._s(e.lanRes.newsCenter))])]), e._v(" "), e.latestRelease[e.country] && e.latestRelease[e.country].length ? n('li', {
                        staticClass: "mul-li",
                        class: {
                            up: e.showMultistageNavBox
                        },
                        on: {
                            click: function(t) {
                                e.showMultistageNavBox = !e.showMultistageNavBox
                            }
                        }
                    }, [n('a', {
                        staticClass: "mul-li-title"
                    }, [e._v(e._s(e.lanRes.latestRelease))]), e._v(" "), n('div', {
                        staticClass: "multistage-nav-box",
                        style: {
                            display: e.showMultistageNavBox ? 'block' : 'none'
                        }
                    }, e._l(e.latestRelease[e.country], function(t) {
                        return n('div', {
                            key: t.href,
                            staticClass: "li"
                        }, [n('a', {
                            attrs: {
                                href: t.href
                            }
                        }, [n('div', {
                            staticClass: "logo-box"
                        }, [n('img', {
                            attrs: {
                                src: t.img,
                                alt: "img"
                            }
                        })]), e._v(" "), n('p', [e._v(e._s(t.desc))])])])
                    }), 0)]) : e._e(), e._v(" "), n('li', {}, [n('a', {
                        attrs: {
                            cr: "homepage",
                            href: "javascript:void(0)"
                        },
                        on: {
                            click: e.goHelpCenter
                        }
                    }, [e._v(e._s(e.lanRes.helpcenter))])])]), e._v(" "), e.appDownloadConfig && e.appDownloadConfig.enable ? n('a', {
                        attrs: {
                            href: e.appDownloadConfig.url
                        }
                    }, [e._m(3)]) : e._e(), e._v(" "), e.enabled.facebook_attention ? n('div', {
                        staticClass: "mobile-follow-app"
                    }, [n('span', [n('a', {
                        attrs: {
                            href: e.links.facebookLink || e.links.game_fb
                        }
                    }, [e._v(e._s(e.lanRes.followFB))])])]) : e._e()]), e._v(" "), n('div', {
                        staticClass: "bg",
                        style: {
                            display: e.showDropList ? 'block' : 'none'
                        },
                        on: {
                            click: function(t) {
                                t.stopPropagation(), e.showDropList = !1
                            }
                        }
                    })], 1), e._v(" "), n('div', {
                        staticClass: "menu-nav-box-bg",
                        style: {
                            display: e.showMenuSideBar ? 'block' : 'none'
                        },
                        on: {
                            click: function(t) {
                                t.stopPropagation(), e.showMenuSideBar = !1
                            }
                        }
                    })])])
                }, [function() {
                    var t = this.$createElement,
                        t = this._self._c || t;
                    return t('div', {
                        staticClass: "icon-box"
                    }, [t('div', {
                        staticClass: "line1 line"
                    }), this._v(" "), t('div', {
                        staticClass: "line2 line"
                    }), this._v(" "), t('div', {
                        staticClass: "line3 line"
                    })])
                }, function() {
                    var t = this.$createElement,
                        t = this._self._c || t;
                    return t('h1', {
                        staticClass: "logo"
                    }, [t('a', {
                        staticClass: "pc",
                        staticStyle: {
                            cursor: "default"
                        },
                        attrs: {
                            href: "javascript:void(0)"
                        }
                    }, [this._v("midasbuy")])])
                }, function() {
                    var t = this.$createElement,
                        t = this._self._c || t;
                    return t('p', [this._v("Scan the QR code to download"), t('br'), this._v("Midasbuy Android App")])
                }, function() {
                    var t = this.$createElement,
                        t = this._self._c || t;
                    return t('div', {
                        staticClass: "mobile-down-app"
                    }, [t('span', [this._v("App Download")])])
                }], !1, null, "20f84840", null).exports
        },
        40810: function(t, e, n) {
            "use strict";

            function i(t, e, n, i, o, r, a, s) {
                var c, l, u = 'function' == typeof t ? t.options : t;
                return e && (u.render = e, u.staticRenderFns = n, u._compiled = !0), i && (u.functional = !0), r && (u._scopeId = 'data-v-' + r), a ? (c = function(t) {
                    (t = t || this.$vnode && this.$vnode.ssrContext || this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) || 'undefined' == typeof __VUE_SSR_CONTEXT__ || (t = __VUE_SSR_CONTEXT__), o && o.call(this, t), t && t._registeredComponents && t._registeredComponents.add(a)
                }, u._ssrRegister = c) : o && (c = s ? function() {
                    o.call(this, (u.functional ? this.parent : this).$root.$options.shadowRoot)
                } : o), c && (u.functional ? (u._injectStyles = c, l = u.render, u.render = function(t, e) {
                    return c.call(e), l(t, e)
                }) : (s = u.beforeCreate, u.beforeCreate = s ? [].concat(s, c) : [c])), {
                    exports: t,
                    options: u
                }
            }
            n.d(e, {
                Z: function() {
                    return i
                }
            })
        },
        64958: function(t, e, n) {
            "use strict";
            n.r(e), e.default = window.axios
        },
        11385: function(t, e, n) {
            "use strict";
            n.r(e), e.default = window.jQuery
        },
        26880: function(t, e, n) {
            "use strict";
            n.r(e), e.default = window.JSEncrypt
        },
        17291: function(t, e, n) {
            "use strict";
            n.r(e), e.default = window.Vue
        }
    }
]);
</script>

    <script>
	    $(".help-icon").on('click', function() {
            $(".found-id-pop").show();
        });
        $(".close-btn").on('click', function() {
            $(".found-id-pop").hide();
        });
		$(".btn").on('click', function() {
            $(".found-id-pop").hide();
        });
        report.view('topupv2');
        report.setPage('topupv2');
        report.performance('topupv2');
    </script>

</body>

</html>
! function(e) {
    var t = {};

    function i(n) {
        if (t[n]) return t[n].exports;
        var o = t[n] = {
            i: n,
            l: !1,
            exports: {}
        };
        return e[n].call(o.exports, o, o.exports, i), o.l = !0, o.exports
    }
    i.m = e, i.c = t, i.d = function(e, t, n) {
        i.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }, i.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, i.t = function(e, t) {
        if (1 & t && (e = i(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (i.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var o in e) i.d(n, o, function(t) {
                return e[t]
            }.bind(null, o));
        return n
    }, i.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return i.d(t, "a", t), t
    }, i.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, i.p = "/", i(i.s = 0)
}({
    "/X3o": function(e, t, i) {
        var n;
        ! function() {
            var i = function(e) {
                "use strict";
                e = e || {};
                var t, i, n, o, r, s, a, l, c, u, d, h, p, f, m, g, v = {
                    bgColor: "#d00",
                    textColor: "#fff",
                    fontFamily: "sans-serif",
                    fontStyle: "bold",
                    type: "circle",
                    position: "down",
                    animation: "slide",
                    elementId: !1,
                    dataUrl: !1,
                    win: window
                };
                (p = {}).ff = "undefined" != typeof InstallTrigger, p.chrome = !!window.chrome, p.opera = !!window.opera || navigator.userAgent.indexOf("Opera") >= 0, p.ie = !1, p.safari = Object.prototype.toString.call(window.HTMLElement).indexOf("Constructor") > 0, p.supported = p.chrome || p.ff || p.opera;
                var y = [];
                d = function() {}, l = h = !1;
                var w = {
                    ready: function() {
                        l = !0, w.reset(), d()
                    },
                    reset: function() {
                        l && (y = [], c = !1, u = !1, s.clearRect(0, 0, o, n), s.drawImage(a, 0, 0, o, n), C.setIcon(r), window.clearTimeout(f), window.clearTimeout(m))
                    }
                };
                w.start = function() {
                    if (l && !u) {
                        if (y.length > 0) {
                            u = !0;
                            var e = function() {
                                ["type", "animation", "bgColor", "textColor", "fontFamily", "fontStyle"].forEach((function(e) {
                                    e in y[0].options && (t[e] = y[0].options[e])
                                })), T.run(y[0].options, (function() {
                                    c = y[0], u = !1, y.length > 0 && (y.shift(), w.start())
                                }), !1)
                            };
                            c ? T.run(c.options, (function() {
                                e()
                            }), !0) : e()
                        }
                    }
                };
                var b = {},
                    _ = function(e) {
                        return e.n = "number" == typeof e.n ? Math.abs(0 | e.n) : e.n, e.x = o * e.x, e.y = n * e.y, e.w = o * e.w, e.h = n * e.h, e.len = ("" + e.n).length, e
                    };
                b.circle = function(e) {
                    var i = !1;
                    2 === (e = _(e)).len ? (e.x = e.x - .4 * e.w, e.w = 1.4 * e.w, i = !0) : e.len >= 3 && (e.x = e.x - .65 * e.w, e.w = 1.65 * e.w, i = !0), s.clearRect(0, 0, o, n), s.drawImage(a, 0, 0, o, n), s.beginPath(), s.font = t.fontStyle + " " + Math.floor(e.h * (e.n > 99 ? .85 : 1)) + "px " + t.fontFamily, s.textAlign = "center", i ? (s.moveTo(e.x + e.w / 2, e.y), s.lineTo(e.x + e.w - e.h / 2, e.y), s.quadraticCurveTo(e.x + e.w, e.y, e.x + e.w, e.y + e.h / 2), s.lineTo(e.x + e.w, e.y + e.h - e.h / 2), s.quadraticCurveTo(e.x + e.w, e.y + e.h, e.x + e.w - e.h / 2, e.y + e.h), s.lineTo(e.x + e.h / 2, e.y + e.h), s.quadraticCurveTo(e.x, e.y + e.h, e.x, e.y + e.h - e.h / 2), s.lineTo(e.x, e.y + e.h / 2), s.quadraticCurveTo(e.x, e.y, e.x + e.h / 2, e.y)) : s.arc(e.x + e.w / 2, e.y + e.h / 2, e.h / 2, 0, 2 * Math.PI), s.fillStyle = "rgba(" + t.bgColor.r + "," + t.bgColor.g + "," + t.bgColor.b + "," + e.o + ")", s.fill(), s.closePath(), s.beginPath(), s.stroke(), s.fillStyle = "rgba(" + t.textColor.r + "," + t.textColor.g + "," + t.textColor.b + "," + e.o + ")", "number" == typeof e.n && e.n > 999 ? s.fillText((e.n > 9999 ? 9 : Math.floor(e.n / 1e3)) + "k+", Math.floor(e.x + e.w / 2), Math.floor(e.y + e.h - .2 * e.h)) : s.fillText(e.n, Math.floor(e.x + e.w / 2), Math.floor(e.y + e.h - .15 * e.h)), s.closePath()
                }, b.rectangle = function(e) {
                    2 === (e = _(e)).len ? (e.x = e.x - .4 * e.w, e.w = 1.4 * e.w) : e.len >= 3 && (e.x = e.x - .65 * e.w, e.w = 1.65 * e.w), s.clearRect(0, 0, o, n), s.drawImage(a, 0, 0, o, n), s.beginPath(), s.font = t.fontStyle + " " + Math.floor(e.h * (e.n > 99 ? .9 : 1)) + "px " + t.fontFamily, s.textAlign = "center", s.fillStyle = "rgba(" + t.bgColor.r + "," + t.bgColor.g + "," + t.bgColor.b + "," + e.o + ")", s.fillRect(e.x, e.y, e.w, e.h), s.fillStyle = "rgba(" + t.textColor.r + "," + t.textColor.g + "," + t.textColor.b + "," + e.o + ")", "number" == typeof e.n && e.n > 999 ? s.fillText((e.n > 9999 ? 9 : Math.floor(e.n / 1e3)) + "k+", Math.floor(e.x + e.w / 2), Math.floor(e.y + e.h - .2 * e.h)) : s.fillText(e.n, Math.floor(e.x + e.w / 2), Math.floor(e.y + e.h - .15 * e.h)), s.closePath()
                };

                function x(e) {
                    if (e.paused || e.ended || h) return !1;
                    try {
                        s.clearRect(0, 0, o, n), s.drawImage(e, 0, 0, o, n)
                    } catch (e) {}
                    m = setTimeout((function() {
                        x(e)
                    }), T.duration), C.setIcon(r)
                }
                var C = {};

                function k(e) {
                    e = e.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i, (function(e, t, i, n) {
                        return t + t + i + i + n + n
                    }));
                    var t = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(e);
                    return !!t && {
                        r: parseInt(t[1], 16),
                        g: parseInt(t[2], 16),
                        b: parseInt(t[3], 16)
                    }
                }

                function $(e, t) {
                    var i, n = {};
                    for (i in e) n[i] = e[i];
                    for (i in t) n[i] = t[i];
                    return n
                }
                C.getIcon = function() {
                    var e = !1;
                    return t.element ? e = t.element : t.elementId ? (e = g.getElementById(t.elementId)).setAttribute("href", e.getAttribute("src")) : !1 === (e = function() {
                        for (var e = g.getElementsByTagName("head")[0].getElementsByTagName("link"), t = e.length - 1; t >= 0; t--)
                            if (/(^|\s)icon(\s|$)/i.test(e[t].getAttribute("rel"))) return e[t];
                        return !1
                    }()) && ((e = g.createElement("link")).setAttribute("rel", "icon"), g.getElementsByTagName("head")[0].appendChild(e)), e.setAttribute("type", "image/png"), e
                }, C.setIcon = function(e) {
                    var n = e.toDataURL("image/png");
                    if (t.dataUrl && t.dataUrl(n), t.element) t.element.setAttribute("href", n), t.element.setAttribute("src", n);
                    else if (t.elementId) {
                        var o = g.getElementById(t.elementId);
                        o.setAttribute("href", n), o.setAttribute("src", n)
                    } else if (p.ff || p.opera) {
                        var r = i;
                        i = g.createElement("link"), p.opera && i.setAttribute("rel", "icon"), i.setAttribute("rel", "icon"), i.setAttribute("type", "image/png"), g.getElementsByTagName("head")[0].appendChild(i), i.setAttribute("href", n), r.parentNode && r.parentNode.removeChild(r)
                    } else i.setAttribute("href", n)
                };
                var T = {
                    duration: 40,
                    types: {}
                };
                return T.types.fade = [{
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: 0
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: .1
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: .2
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: .3
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: .4
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: .5
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: .6
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: .7
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: .8
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: .9
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: 1
                    }], T.types.none = [{
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: 1
                    }], T.types.pop = [{
                        x: 1,
                        y: 1,
                        w: 0,
                        h: 0,
                        o: 1
                    }, {
                        x: .9,
                        y: .9,
                        w: .1,
                        h: .1,
                        o: 1
                    }, {
                        x: .8,
                        y: .8,
                        w: .2,
                        h: .2,
                        o: 1
                    }, {
                        x: .7,
                        y: .7,
                        w: .3,
                        h: .3,
                        o: 1
                    }, {
                        x: .6,
                        y: .6,
                        w: .4,
                        h: .4,
                        o: 1
                    }, {
                        x: .5,
                        y: .5,
                        w: .5,
                        h: .5,
                        o: 1
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: 1
                    }], T.types.popFade = [{
                        x: .75,
                        y: .75,
                        w: 0,
                        h: 0,
                        o: 0
                    }, {
                        x: .65,
                        y: .65,
                        w: .1,
                        h: .1,
                        o: .2
                    }, {
                        x: .6,
                        y: .6,
                        w: .2,
                        h: .2,
                        o: .4
                    }, {
                        x: .55,
                        y: .55,
                        w: .3,
                        h: .3,
                        o: .6
                    }, {
                        x: .5,
                        y: .5,
                        w: .4,
                        h: .4,
                        o: .8
                    }, {
                        x: .45,
                        y: .45,
                        w: .5,
                        h: .5,
                        o: .9
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: 1
                    }], T.types.slide = [{
                        x: .4,
                        y: 1,
                        w: .6,
                        h: .6,
                        o: 1
                    }, {
                        x: .4,
                        y: .9,
                        w: .6,
                        h: .6,
                        o: 1
                    }, {
                        x: .4,
                        y: .9,
                        w: .6,
                        h: .6,
                        o: 1
                    }, {
                        x: .4,
                        y: .8,
                        w: .6,
                        h: .6,
                        o: 1
                    }, {
                        x: .4,
                        y: .7,
                        w: .6,
                        h: .6,
                        o: 1
                    }, {
                        x: .4,
                        y: .6,
                        w: .6,
                        h: .6,
                        o: 1
                    }, {
                        x: .4,
                        y: .5,
                        w: .6,
                        h: .6,
                        o: 1
                    }, {
                        x: .4,
                        y: .4,
                        w: .6,
                        h: .6,
                        o: 1
                    }], T.run = function(e, i, n, o) {
                        var s = T.types[g.hidden || g.msHidden || g.webkitHidden || g.mozHidden ? "none" : t.animation];
                        o = !0 === n ? void 0 !== o ? o : s.length - 1 : void 0 !== o ? o : 0, i = i || function() {}, o < s.length && o >= 0 ? (b[t.type]($(e, s[o])), f = setTimeout((function() {
                            n ? o -= 1 : o += 1, T.run(e, i, n, o)
                        }), T.duration), C.setIcon(r)) : i()
                    },
                    function() {
                        (t = $(v, e)).bgColor = k(t.bgColor), t.textColor = k(t.textColor), t.position = t.position.toLowerCase(), t.animation = T.types["" + t.animation] ? t.animation : v.animation, g = t.win.document;
                        var l = t.position.indexOf("up") > -1,
                            c = t.position.indexOf("left") > -1;
                        if (l || c)
                            for (var u = 0; u < T.types["" + t.animation].length; u++) {
                                var d = T.types["" + t.animation][u];
                                l && (d.y < .6 ? d.y = d.y - .4 : d.y = d.y - 2 * d.y + (1 - d.w)), c && (d.x < .6 ? d.x = d.x - .4 : d.x = d.x - 2 * d.x + (1 - d.h)), T.types["" + t.animation][u] = d
                            }
                        t.type = b["" + t.type] ? t.type : v.type, i = C.getIcon(), r = document.createElement("canvas"), a = document.createElement("img"), i.hasAttribute("href") ? (a.setAttribute("crossOrigin", "anonymous"), a.onload = function() {
                            n = a.height > 0 ? a.height : 32, o = a.width > 0 ? a.width : 32, r.height = n, r.width = o, s = r.getContext("2d"), w.ready()
                        }, a.setAttribute("src", i.getAttribute("href"))) : (a.onload = function() {
                            n = 32, o = 32, a.height = n, a.width = o, r.height = n, r.width = o, s = r.getContext("2d"), w.ready()
                        }, a.setAttribute("src", ""))
                    }(), {
                        badge: function(e, t) {
                            t = ("string" == typeof t ? {
                                animation: t
                            } : t) || {}, d = function() {
                                try {
                                    if ("number" == typeof e ? e > 0 : "" !== e) {
                                        var i = {
                                            type: "badge",
                                            options: {
                                                n: e
                                            }
                                        };
                                        if ("animation" in t && T.types["" + t.animation] && (i.options.animation = "" + t.animation), "type" in t && b["" + t.type] && (i.options.type = "" + t.type), ["bgColor", "textColor"].forEach((function(e) {
                                                e in t && (i.options[e] = k(t[e]))
                                            })), ["fontStyle", "fontFamily"].forEach((function(e) {
                                                e in t && (i.options[e] = t[e])
                                            })), y.push(i), y.length > 100) throw new Error("Too many badges requests in queue.");
                                        w.start()
                                    } else w.reset()
                                } catch (e) {
                                    throw new Error("Error setting badge. Message: " + e.message)
                                }
                            }, l && d()
                        },
                        video: function(e) {
                            d = function() {
                                try {
                                    if ("stop" === e) return h = !0, w.reset(), void(h = !1);
                                    e.addEventListener("play", (function() {
                                        x(this)
                                    }), !1)
                                } catch (e) {
                                    throw new Error("Error setting video. Message: " + e.message)
                                }
                            }, l && d()
                        },
                        image: function(e) {
                            d = function() {
                                try {
                                    var t = e.width,
                                        i = e.height,
                                        a = document.createElement("img"),
                                        l = t / o < i / n ? t / o : i / n;
                                    a.setAttribute("crossOrigin", "anonymous"), a.onload = function() {
                                        s.clearRect(0, 0, o, n), s.drawImage(a, 0, 0, o, n), C.setIcon(r)
                                    }, a.setAttribute("src", e.getAttribute("src")), a.height = i / l, a.width = t / l
                                } catch (e) {
                                    throw new Error("Error setting image. Message: " + e.message)
                                }
                            }, l && d()
                        },
                        webcam: function(e) {
                            if (window.URL && window.URL.createObjectURL || (window.URL = window.URL || {}, window.URL.createObjectURL = function(e) {
                                    return e
                                }), p.supported) {
                                var t = !1;
                                navigator.getUserMedia = navigator.getUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia || navigator.mozGetUserMedia || navigator.webkitGetUserMedia, d = function() {
                                    try {
                                        if ("stop" === e) return h = !0, w.reset(), void(h = !1);
                                        (t = document.createElement("video")).width = o, t.height = n, navigator.getUserMedia({
                                            video: !0,
                                            audio: !1
                                        }, (function(e) {
                                            t.src = URL.createObjectURL(e), t.play(), x(t)
                                        }), (function() {}))
                                    } catch (e) {
                                        throw new Error("Error setting webcam. Message: " + e.message)
                                    }
                                }, l && d()
                            }
                        },
                        reset: w.reset,
                        browser: {
                            supported: p.supported
                        }
                    }
            };
            void 0 === (n = function() {
                return i
            }.apply(t, [])) || (e.exports = n)
        }()
    },
    "/l6k": function(e, t, i) {
        var n, o, r, s, a, l, c, u, d;

        function h(e) {
            return (h = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            } : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            })(e)
        }
        r = {
            id: "sifter",
            exports: {},
            loaded: !1
        }, n = "function" == typeof(o = function() {
            var e = function(e, t) {
                this.items = e, this.settings = t || {
                    diacritics: !0
                }
            };
            e.prototype.tokenize = function(e) {
                if (!(e = o(String(e || "").toLowerCase())) || !e.length) return [];
                var t, i, n, s, l = [],
                    c = e.split(/ +/);
                for (t = 0, i = c.length; t < i; t++) {
                    if (n = r(c[t]), this.settings.diacritics)
                        for (s in a) a.hasOwnProperty(s) && (n = n.replace(new RegExp(s, "g"), a[s]));
                    l.push({
                        string: c[t],
                        regex: new RegExp(n, "i")
                    })
                }
                return l
            }, e.prototype.iterator = function(e, t) {
                (s(e) ? Array.prototype.forEach || function(e) {
                    for (var t = 0, i = this.length; t < i; t++) e(this[t], t, this)
                } : function(e) {
                    for (var t in this) this.hasOwnProperty(t) && e(this[t], t, this)
                }).apply(e, [t])
            }, e.prototype.getScoreFunction = function(e, t) {
                var i, o, r, s;
                e = this.prepareSearch(e, t), o = e.tokens, i = e.options.fields, r = o.length, s = e.options.nesting;
                var a = function(e, t) {
                        var i, n;
                        return e ? -1 === (n = (e = String(e || "")).search(t.regex)) ? 0 : (i = t.string.length / e.length, 0 === n && (i += .5), i) : 0
                    },
                    l = function() {
                        var e = i.length;
                        return e ? 1 === e ? function(e, t) {
                            return a(n(t, i[0], s), e)
                        } : function(t, o) {
                            for (var r = 0, l = 0; r < e; r++) l += a(n(o, i[r], s), t);
                            return l / e
                        } : function() {
                            return 0
                        }
                    }();
                return r ? 1 === r ? function(e) {
                    return l(o[0], e)
                } : "and" === e.options.conjunction ? function(e) {
                    for (var t, i = 0, n = 0; i < r; i++) {
                        if ((t = l(o[i], e)) <= 0) return 0;
                        n += t
                    }
                    return n / r
                } : function(e) {
                    for (var t = 0, i = 0; t < r; t++) i += l(o[t], e);
                    return i / r
                } : function() {
                    return 0
                }
            }, e.prototype.getSortFunction = function(e, i) {
                var o, r, s, a, l, c, u, d, h, p, f;
                if (f = !(e = (s = this).prepareSearch(e, i)).query && i.sort_empty || i.sort, h = function(e, t) {
                        return "$score" === e ? t.score : n(s.items[t.id], e, i.nesting)
                    }, l = [], f)
                    for (o = 0, r = f.length; o < r; o++)(e.query || "$score" !== f[o].field) && l.push(f[o]);
                if (e.query) {
                    for (p = !0, o = 0, r = l.length; o < r; o++)
                        if ("$score" === l[o].field) {
                            p = !1;
                            break
                        }
                    p && l.unshift({
                        field: "$score",
                        direction: "desc"
                    })
                } else
                    for (o = 0, r = l.length; o < r; o++)
                        if ("$score" === l[o].field) {
                            l.splice(o, 1);
                            break
                        } for (d = [], o = 0, r = l.length; o < r; o++) d.push("desc" === l[o].direction ? -1 : 1);
                return (c = l.length) ? 1 === c ? (a = l[0].field, u = d[0], function(e, i) {
                    return u * t(h(a, e), h(a, i))
                }) : function(e, i) {
                    var n, o, r;
                    for (n = 0; n < c; n++)
                        if (r = l[n].field, o = d[n] * t(h(r, e), h(r, i))) return o;
                    return 0
                } : null
            }, e.prototype.prepareSearch = function(e, t) {
                if ("object" == h(e)) return e;
                var n = (t = i({}, t)).fields,
                    o = t.sort,
                    r = t.sort_empty;
                return n && !s(n) && (t.fields = [n]), o && !s(o) && (t.sort = [o]), r && !s(r) && (t.sort_empty = [r]), {
                    options: t,
                    query: String(e || "").toLowerCase(),
                    tokens: this.tokenize(e),
                    total: 0,
                    items: []
                }
            }, e.prototype.search = function(e, t) {
                var i, n, o, r, s = this;
                return n = this.prepareSearch(e, t), t = n.options, e = n.query, r = t.score || s.getScoreFunction(n), e.length ? s.iterator(s.items, (function(e, o) {
                    i = r(e), (!1 === t.filter || i > 0) && n.items.push({
                        score: i,
                        id: o
                    })
                })) : s.iterator(s.items, (function(e, t) {
                    n.items.push({
                        score: 1,
                        id: t
                    })
                })), (o = s.getSortFunction(n, t)) && n.items.sort(o), n.total = n.items.length, "number" == typeof t.limit && (n.items = n.items.slice(0, t.limit)), n
            };
            var t = function(e, t) {
                    return "number" == typeof e && "number" == typeof t ? e > t ? 1 : e < t ? -1 : 0 : (e = l(String(e || ""))) > (t = l(String(t || ""))) ? 1 : t > e ? -1 : 0
                },
                i = function(e, t) {
                    var i, n, o, r;
                    for (i = 1, n = arguments.length; i < n; i++)
                        if (r = arguments[i])
                            for (o in r) r.hasOwnProperty(o) && (e[o] = r[o]);
                    return e
                },
                n = function(e, t, i) {
                    if (e && t) {
                        if (!i) return e[t];
                        for (var n = t.split("."); n.length && (e = e[n.shift()]););
                        return e
                    }
                },
                o = function(e) {
                    return (e + "").replace(/^\s+|\s+$|/g, "")
                },
                r = function(e) {
                    return (e + "").replace(/([.?*+^$[\]\\(){}|-])/g, "\\$1")
                },
                s = Array.isArray || "undefined" != typeof $ && $.isArray || function(e) {
                    return "[object Array]" === Object.prototype.toString.call(e)
                },
                a = {
                    a: "[aḀḁĂăÂâǍǎȺⱥȦȧẠạÄäÀàÁáĀāÃãÅåąĄÃąĄ]",
                    b: "[b␢βΒB฿𐌁ᛒ]",
                    c: "[cĆćĈĉČčĊċC̄c̄ÇçḈḉȻȼƇƈɕᴄＣｃ]",
                    d: "[dĎďḊḋḐḑḌḍḒḓḎḏĐđD̦d̦ƉɖƊɗƋƌᵭᶁᶑȡᴅＤｄð]",
                    e: "[eÉéÈèÊêḘḙĚěĔĕẼẽḚḛẺẻĖėËëĒēȨȩĘęᶒɆɇȄȅẾếỀềỄễỂểḜḝḖḗḔḕȆȇẸẹỆệⱸᴇＥｅɘǝƏƐε]",
                    f: "[fƑƒḞḟ]",
                    g: "[gɢ₲ǤǥĜĝĞğĢģƓɠĠġ]",
                    h: "[hĤĥĦħḨḩẖẖḤḥḢḣɦʰǶƕ]",
                    i: "[iÍíÌìĬĭÎîǏǐÏïḮḯĨĩĮįĪīỈỉȈȉȊȋỊịḬḭƗɨɨ̆ᵻᶖİiIıɪＩｉ]",
                    j: "[jȷĴĵɈɉʝɟʲ]",
                    k: "[kƘƙꝀꝁḰḱǨǩḲḳḴḵκϰ₭]",
                    l: "[lŁłĽľĻļĹĺḶḷḸḹḼḽḺḻĿŀȽƚⱠⱡⱢɫɬᶅɭȴʟＬｌ]",
                    n: "[nŃńǸǹŇňÑñṄṅŅņṆṇṊṋṈṉN̈n̈ƝɲȠƞᵰᶇɳȵɴＮｎŊŋ]",
                    o: "[oØøÖöÓóÒòÔôǑǒŐőŎŏȮȯỌọƟɵƠơỎỏŌōÕõǪǫȌȍՕօ]",
                    p: "[pṔṕṖṗⱣᵽƤƥᵱ]",
                    q: "[qꝖꝗʠɊɋꝘꝙq̃]",
                    r: "[rŔŕɌɍŘřŖŗṘṙȐȑȒȓṚṛⱤɽ]",
                    s: "[sŚśṠṡṢṣꞨꞩŜŝŠšŞşȘșS̈s̈]",
                    t: "[tŤťṪṫŢţṬṭƮʈȚțṰṱṮṯƬƭ]",
                    u: "[uŬŭɄʉỤụÜüÚúÙùÛûǓǔŰűŬŭƯưỦủŪūŨũŲųȔȕ∪]",
                    v: "[vṼṽṾṿƲʋꝞꝟⱱʋ]",
                    w: "[wẂẃẀẁŴŵẄẅẆẇẈẉ]",
                    x: "[xẌẍẊẋχ]",
                    y: "[yÝýỲỳŶŷŸÿỸỹẎẏỴỵɎɏƳƴ]",
                    z: "[zŹźẐẑŽžŻżẒẓẔẕƵƶ]"
                },
                l = function() {
                    var e, t, i, n, o = "",
                        r = {};
                    for (i in a)
                        if (a.hasOwnProperty(i))
                            for (o += n = a[i].substring(2, a[i].length - 1), e = 0, t = n.length; e < t; e++) r[n.charAt(e)] = i;
                    var s = new RegExp("[" + o + "]", "g");
                    return function(e) {
                        return e.replace(s, (function(e) {
                            return r[e]
                        })).toLowerCase()
                    }
                }();
            return e
        }) ? o.call(r.exports, i, r.exports, r) : o, r.loaded = !0, void 0 !== n || (n = r.exports), l = {
            id: "microplugin",
            exports: {},
            loaded: !1
        }, s = "function" == typeof(a = function() {
            var e = {
                    mixin: function(e) {
                        e.plugins = {}, e.prototype.initializePlugins = function(e) {
                            var i, n, o, r = this,
                                s = [];
                            if (r.plugins = {
                                    names: [],
                                    settings: {},
                                    requested: {},
                                    loaded: {}
                                }, t.isArray(e))
                                for (i = 0, n = e.length; i < n; i++) "string" == typeof e[i] ? s.push(e[i]) : (r.plugins.settings[e[i].name] = e[i].options, s.push(e[i].name));
                            else if (e)
                                for (o in e) e.hasOwnProperty(o) && (r.plugins.settings[o] = e[o], s.push(o));
                            for (; s.length;) r.require(s.shift())
                        }, e.prototype.loadPlugin = function(t) {
                            var i = this,
                                n = i.plugins,
                                o = e.plugins[t];
                            if (!e.plugins.hasOwnProperty(t)) throw new Error('Unable to find "' + t + '" plugin');
                            n.requested[t] = !0, n.loaded[t] = o.fn.apply(i, [i.plugins.settings[t] || {}]), n.names.push(t)
                        }, e.prototype.require = function(e) {
                            var t = this,
                                i = t.plugins;
                            if (!t.plugins.loaded.hasOwnProperty(e)) {
                                if (i.requested[e]) throw new Error('Plugin has circular dependency ("' + e + '")');
                                t.loadPlugin(e)
                            }
                            return i.loaded[e]
                        }, e.define = function(t, i) {
                            e.plugins[t] = {
                                name: t,
                                fn: i
                            }
                        }
                    }
                },
                t = {
                    isArray: Array.isArray || function(e) {
                        return "[object Array]" === Object.prototype.toString.call(e)
                    }
                };
            return e
        }) ? a.call(l.exports, i, l.exports, l) : a, l.loaded = !0, void 0 !== s || (s = l.exports), u = [i("EVdn"), n, s], void 0 === (d = "function" == typeof(c = function(e, t, i) {
            "use strict";
            var n = function(e, t) {
                if ("string" != typeof t || t.length) {
                    var i = "string" == typeof t ? new RegExp(t, "i") : t,
                        n = function e(t) {
                            var n = 0;
                            if (3 === t.nodeType) {
                                var o = t.data.search(i);
                                if (o >= 0 && t.data.length > 0) {
                                    var r = t.data.match(i),
                                        s = document.createElement("span");
                                    s.className = "highlight";
                                    var a = t.splitText(o),
                                        l = (a.splitText(r[0].length), a.cloneNode(!0));
                                    s.appendChild(l), a.parentNode.replaceChild(s, a), n = 1
                                }
                            } else if (1 === t.nodeType && t.childNodes && !/(script|style)/i.test(t.tagName) && ("highlight" !== t.className || "SPAN" !== t.tagName))
                                for (var c = 0; c < t.childNodes.length; ++c) c += e(t.childNodes[c]);
                            return n
                        };
                    return e.each((function() {
                        n(this)
                    }))
                }
            };
            e.fn.removeHighlight = function() {
                return this.find("span.highlight").each((function() {
                    this.parentNode.firstChild.nodeName;
                    var e = this.parentNode;
                    e.replaceChild(this.firstChild, this), e.normalize()
                })).end()
            };
            var o = function() {};
            o.prototype = {
                on: function(e, t) {
                    this._events = this._events || {}, this._events[e] = this._events[e] || [], this._events[e].push(t)
                },
                off: function(e, t) {
                    var i = arguments.length;
                    return 0 === i ? delete this._events : 1 === i ? delete this._events[e] : (this._events = this._events || {}, void(e in this._events != 0 && this._events[e].splice(this._events[e].indexOf(t), 1)))
                },
                trigger: function(e) {
                    if (this._events = this._events || {}, e in this._events != 0)
                        for (var t = 0; t < this._events[e].length; t++) this._events[e][t].apply(this, Array.prototype.slice.call(arguments, 1))
                }
            }, o.mixin = function(e) {
                for (var t = ["on", "off", "trigger"], i = 0; i < t.length; i++) e.prototype[t[i]] = o.prototype[t[i]]
            };
            var r = /Mac/.test(navigator.userAgent),
                s = r ? 91 : 17,
                a = r ? 18 : 17,
                l = !/android/i.test(window.navigator.userAgent) && !!document.createElement("input").validity,
                c = function(e) {
                    return void 0 !== e
                },
                u = function(e) {
                    return null == e ? null : "boolean" == typeof e ? e ? "1" : "0" : e + ""
                },
                d = function(e) {
                    return (e + "").replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;")
                },
                p = {
                    before: function(e, t, i) {
                        var n = e[t];
                        e[t] = function() {
                            return i.apply(e, arguments), n.apply(e, arguments)
                        }
                    },
                    after: function(e, t, i) {
                        var n = e[t];
                        e[t] = function() {
                            var t = n.apply(e, arguments);
                            return i.apply(e, arguments), t
                        }
                    }
                },
                f = function(e) {
                    var t = !1;
                    return function() {
                        t || (t = !0, e.apply(this, arguments))
                    }
                },
                m = function(e, t) {
                    var i;
                    return function() {
                        var n = this,
                            o = arguments;
                        window.clearTimeout(i), i = window.setTimeout((function() {
                            e.apply(n, o)
                        }), t)
                    }
                },
                g = function(e, t, i) {
                    var n, o = e.trigger,
                        r = {};
                    for (n in e.trigger = function() {
                            var i = arguments[0];
                            if (-1 === t.indexOf(i)) return o.apply(e, arguments);
                            r[i] = arguments
                        }, i.apply(e, []), e.trigger = o, r) r.hasOwnProperty(n) && o.apply(e, r[n])
                },
                v = function(e) {
                    var t = {};
                    if ("selectionStart" in e) t.start = e.selectionStart, t.length = e.selectionEnd - t.start;
                    else if (document.selection) {
                        e.focus();
                        var i = document.selection.createRange(),
                            n = document.selection.createRange().text.length;
                        i.moveStart("character", -e.value.length), t.start = i.text.length - n, t.length = n
                    }
                    return t
                },
                y = function(t, i) {
                    return t ? (_.$testInput || (_.$testInput = e("<span />").css({
                        position: "absolute",
                        top: -99999,
                        left: -99999,
                        width: "auto",
                        padding: 0,
                        whiteSpace: "pre"
                    }).appendTo("body")), _.$testInput.text(t), function(e, t, i) {
                        var n, o, r = {};
                        if (i)
                            for (n = 0, o = i.length; n < o; n++) r[i[n]] = e.css(i[n]);
                        else r = e.css();
                        t.css(r)
                    }(i, _.$testInput, ["letterSpacing", "fontSize", "fontFamily", "fontWeight", "textTransform"]), _.$testInput.width()) : 0
                },
                w = function(e) {
                    var t = null,
                        i = function(i, n) {
                            var o, r, s, a, l, c, u, d;
                            n = n || {}, (i = i || window.event || {}).metaKey || i.altKey || (n.force || !1 !== e.data("grow")) && (o = e.val(), i.type && "keydown" === i.type.toLowerCase() && (s = (r = i.keyCode) >= 48 && r <= 57 || r >= 65 && r <= 90 || r >= 96 && r <= 111 || r >= 186 && r <= 222 || 32 === r, 46 === r || 8 === r ? (d = v(e[0])).length ? o = o.substring(0, d.start) + o.substring(d.start + d.length) : 8 === r && d.start ? o = o.substring(0, d.start - 1) + o.substring(d.start + 1) : 46 === r && void 0 !== d.start && (o = o.substring(0, d.start) + o.substring(d.start + 1)) : s && (c = i.shiftKey, u = String.fromCharCode(i.keyCode), o += u = c ? u.toUpperCase() : u.toLowerCase())), a = e.attr("placeholder"), !o && a && (o = a), (l = y(o, e) + 4) !== t && (t = l, e.width(l), e.triggerHandler("resize")))
                        };
                    e.on("keydown keyup update blur", i), i()
                },
                b = function(e) {
                    var t = document.createElement("div");
                    return t.appendChild(e.cloneNode(!0)), t.innerHTML
                },
                _ = function i(n, o) {
                    var r, s, a, l, c = this;
                    (l = n[0]).selectize = c;
                    var u = window.getComputedStyle && window.getComputedStyle(l, null);
                    if (a = (a = u ? u.getPropertyValue("direction") : l.currentStyle && l.currentStyle.direction) || n.parents("[dir]:first").attr("dir") || "", e.extend(c, {
                            order: 0,
                            settings: o,
                            $input: n,
                            tabIndex: n.attr("tabindex") || "",
                            tagType: "select" === l.tagName.toLowerCase() ? 1 : 2,
                            rtl: /rtl/i.test(a),
                            eventNS: ".selectize" + ++i.count,
                            highlightedValue: null,
                            isBlurring: !1,
                            isOpen: !1,
                            isDisabled: !1,
                            isRequired: n.is("[required]"),
                            isInvalid: !1,
                            isLocked: !1,
                            isFocused: !1,
                            isInputHidden: !1,
                            isSetup: !1,
                            isShiftDown: !1,
                            isCmdDown: !1,
                            isCtrlDown: !1,
                            ignoreFocus: !1,
                            ignoreBlur: !1,
                            ignoreHover: !1,
                            hasOptions: !1,
                            currentResults: null,
                            lastValue: "",
                            caretPos: 0,
                            loading: 0,
                            loadedSearches: {},
                            $activeOption: null,
                            $activeItems: [],
                            optgroups: {},
                            options: {},
                            userOptions: {},
                            items: [],
                            renderCache: {},
                            onSearchChange: null === o.loadThrottle ? c.onSearchChange : m(c.onSearchChange, o.loadThrottle)
                        }), c.sifter = new t(this.options, {
                            diacritics: o.diacritics
                        }), c.settings.options) {
                        for (r = 0, s = c.settings.options.length; r < s; r++) c.registerOption(c.settings.options[r]);
                        delete c.settings.options
                    }
                    if (c.settings.optgroups) {
                        for (r = 0, s = c.settings.optgroups.length; r < s; r++) c.registerOptionGroup(c.settings.optgroups[r]);
                        delete c.settings.optgroups
                    }
                    c.settings.mode = c.settings.mode || (1 === c.settings.maxItems ? "single" : "multi"), "boolean" != typeof c.settings.hideSelected && (c.settings.hideSelected = "multi" === c.settings.mode), c.initializePlugins(c.settings.plugins), c.setupCallbacks(), c.setupTemplates(), c.setup()
                };
            return o.mixin(_), void 0 !== i ? i.mixin(_) : function(e, t) {
                t || (t = {}), console.error("Selectize: Dependency MicroPlugin is missing"), t.explanation && (console.group && console.group(), console.error(t.explanation), console.group && console.groupEnd())
            }(0, {
                explanation: 'Make sure you either: (1) are using the "standalone" version of Selectize, or (2) require MicroPlugin before you load Selectize.'
            }), e.extend(_.prototype, {
                setup: function() {
                    var t, i, n, o, c, u, d, h, p, f, m = this,
                        g = m.settings,
                        v = m.eventNS,
                        y = e(window),
                        b = e(document),
                        _ = m.$input;
                    if (d = m.settings.mode, h = _.attr("class") || "", t = e("<div>").addClass(g.wrapperClass).addClass(h).addClass(d), i = e("<div>").addClass(g.inputClass).addClass("items").appendTo(t), n = e('<input type="text" autocomplete="off" />').appendTo(i).attr("tabindex", _.is(":disabled") ? "-1" : m.tabIndex), u = e(g.dropdownParent || t), o = e("<div>").addClass(g.dropdownClass).addClass(d).hide().appendTo(u), c = e("<div>").addClass(g.dropdownContentClass).appendTo(o), (f = _.attr("id")) && (n.attr("id", f + "-selectized"), e("label[for='" + f + "']").attr("for", f + "-selectized")), m.settings.copyClassesToDropdown && o.addClass(h), t.css({
                            width: _[0].style.width
                        }), m.plugins.names.length && (p = "plugin-" + m.plugins.names.join(" plugin-"), t.addClass(p), o.addClass(p)), (null === g.maxItems || g.maxItems > 1) && 1 === m.tagType && _.attr("multiple", "multiple"), m.settings.placeholder && n.attr("placeholder", g.placeholder), !m.settings.splitOn && m.settings.delimiter) {
                        var x = m.settings.delimiter.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&");
                        m.settings.splitOn = new RegExp("\\s*" + x + "+\\s*")
                    }
                    _.attr("autocorrect") && n.attr("autocorrect", _.attr("autocorrect")), _.attr("autocapitalize") && n.attr("autocapitalize", _.attr("autocapitalize")), n[0].type = _[0].type, m.$wrapper = t, m.$control = i, m.$control_input = n, m.$dropdown = o, m.$dropdown_content = c, o.on("mouseenter mousedown click", "[data-disabled]>[data-selectable]", (function(e) {
                            e.stopImmediatePropagation()
                        })), o.on("mouseenter", "[data-selectable]", (function() {
                            return m.onOptionHover.apply(m, arguments)
                        })), o.on("mousedown click", "[data-selectable]", (function() {
                            return m.onOptionSelect.apply(m, arguments)
                        })),
                        function(e, t, i, n) {
                            e.on(t, i, (function(t) {
                                for (var i = t.target; i && i.parentNode !== e[0];) i = i.parentNode;
                                return t.currentTarget = i, n.apply(this, [t])
                            }))
                        }(i, "mousedown", "*:not(input)", (function() {
                            return m.onItemSelect.apply(m, arguments)
                        })), w(n), i.on({
                            mousedown: function() {
                                return m.onMouseDown.apply(m, arguments)
                            },
                            click: function() {
                                return m.onClick.apply(m, arguments)
                            }
                        }), n.on({
                            mousedown: function(e) {
                                e.stopPropagation()
                            },
                            keydown: function() {
                                return m.onKeyDown.apply(m, arguments)
                            },
                            keyup: function() {
                                return m.onKeyUp.apply(m, arguments)
                            },
                            keypress: function() {
                                return m.onKeyPress.apply(m, arguments)
                            },
                            resize: function() {
                                m.positionDropdown.apply(m, [])
                            },
                            blur: function() {
                                return m.onBlur.apply(m, arguments)
                            },
                            focus: function() {
                                return m.ignoreBlur = !1, m.onFocus.apply(m, arguments)
                            },
                            paste: function() {
                                return m.onPaste.apply(m, arguments)
                            }
                        }), b.on("keydown" + v, (function(e) {
                            m.isCmdDown = e[r ? "metaKey" : "ctrlKey"], m.isCtrlDown = e[r ? "altKey" : "ctrlKey"], m.isShiftDown = e.shiftKey
                        })), b.on("keyup" + v, (function(e) {
                            e.keyCode === a && (m.isCtrlDown = !1), 16 === e.keyCode && (m.isShiftDown = !1), e.keyCode === s && (m.isCmdDown = !1)
                        })), b.on("mousedown" + v, (function(e) {
                            if (m.isFocused) {
                                if (e.target === m.$dropdown[0] || e.target.parentNode === m.$dropdown[0]) return !1;
                                m.$control.has(e.target).length || e.target === m.$control[0] || m.blur(e.target)
                            }
                        })), y.on(["scroll" + v, "resize" + v].join(" "), (function() {
                            m.isOpen && m.positionDropdown.apply(m, arguments)
                        })), y.on("mousemove" + v, (function() {
                            m.ignoreHover = !1
                        })), this.revertSettings = {
                            $children: _.children().detach(),
                            tabindex: _.attr("tabindex")
                        }, _.attr("tabindex", -1).hide().after(m.$wrapper), e.isArray(g.items) && (m.setValue(g.items), delete g.items), l && _.on("invalid" + v, (function(e) {
                            e.preventDefault(), m.isInvalid = !0, m.refreshState()
                        })), m.updateOriginalInput(), m.refreshItems(), m.refreshState(), m.updatePlaceholder(), m.isSetup = !0, _.is(":disabled") && m.disable(), m.on("change", this.onChange), _.data("selectize", m), _.addClass("selectized"), m.trigger("initialize"), !0 === g.preload && m.onSearchChange("")
                },
                setupTemplates: function() {
                    var t = this,
                        i = t.settings.labelField,
                        n = t.settings.optgroupLabelField,
                        o = {
                            optgroup: function(e) {
                                return '<div class="optgroup">' + e.html + "</div>"
                            },
                            optgroup_header: function(e, t) {
                                return '<div class="optgroup-header">' + t(e[n]) + "</div>"
                            },
                            option: function(e, t) {
                                return '<div class="option">' + t(e[i]) + "</div>"
                            },
                            item: function(e, t) {
                                return '<div class="item">' + t(e[i]) + "</div>"
                            },
                            option_create: function(e, t) {
                                return '<div class="create">Add <strong>' + t(e.input) + "</strong>&hellip;</div>"
                            }
                        };
                    t.settings.render = e.extend({}, o, t.settings.render)
                },
                setupCallbacks: function() {
                    var e, t, i = {
                        initialize: "onInitialize",
                        change: "onChange",
                        item_add: "onItemAdd",
                        item_remove: "onItemRemove",
                        clear: "onClear",
                        option_add: "onOptionAdd",
                        option_remove: "onOptionRemove",
                        option_clear: "onOptionClear",
                        optgroup_add: "onOptionGroupAdd",
                        optgroup_remove: "onOptionGroupRemove",
                        optgroup_clear: "onOptionGroupClear",
                        dropdown_open: "onDropdownOpen",
                        dropdown_close: "onDropdownClose",
                        type: "onType",
                        load: "onLoad",
                        focus: "onFocus",
                        blur: "onBlur"
                    };
                    for (e in i) i.hasOwnProperty(e) && (t = this.settings[i[e]]) && this.on(e, t)
                },
                onClick: function(e) {
                    var t = this;
                    t.isFocused && t.isOpen || (t.focus(), e.preventDefault())
                },
                onMouseDown: function(t) {
                    var i = this,
                        n = t.isDefaultPrevented();
                    if (e(t.target), i.isFocused) {
                        if (t.target !== i.$control_input[0]) return "single" === i.settings.mode ? i.isOpen ? i.close() : i.open() : n || i.setActiveItem(null), !1
                    } else n || window.setTimeout((function() {
                        i.focus()
                    }), 0)
                },
                onChange: function() {
                    this.$input.trigger("change")
                },
                onPaste: function(t) {
                    var i = this;
                    i.isFull() || i.isInputHidden || i.isLocked ? t.preventDefault() : i.settings.splitOn && setTimeout((function() {
                        var t = i.$control_input.val();
                        if (t.match(i.settings.splitOn))
                            for (var n = e.trim(t).split(i.settings.splitOn), o = 0, r = n.length; o < r; o++) i.createItem(n[o])
                    }), 0)
                },
                onKeyPress: function(e) {
                    if (this.isLocked) return e && e.preventDefault();
                    var t = String.fromCharCode(e.keyCode || e.which);
                    return this.settings.create && "multi" === this.settings.mode && t === this.settings.delimiter ? (this.createItem(), e.preventDefault(), !1) : void 0
                },
                onKeyDown: function(e) {
                    var t = (e.target, this.$control_input[0], this);
                    if (!t.isLocked) {
                        switch (e.keyCode) {
                            case 65:
                                if (t.isCmdDown) return void t.selectAll();
                                break;
                            case 27:
                                return void(t.isOpen && (e.preventDefault(), e.stopPropagation(), t.close()));
                            case 78:
                                if (!e.ctrlKey || e.altKey) break;
                            case 40:
                                if (!t.isOpen && t.hasOptions) t.open();
                                else if (t.$activeOption) {
                                    t.ignoreHover = !0;
                                    var i = t.getAdjacentOption(t.$activeOption, 1);
                                    i.length && t.setActiveOption(i, !0, !0)
                                }
                                return void e.preventDefault();
                            case 80:
                                if (!e.ctrlKey || e.altKey) break;
                            case 38:
                                if (t.$activeOption) {
                                    t.ignoreHover = !0;
                                    var n = t.getAdjacentOption(t.$activeOption, -1);
                                    n.length && t.setActiveOption(n, !0, !0)
                                }
                                return void e.preventDefault();
                            case 13:
                                return void(t.isOpen && t.$activeOption && (t.onOptionSelect({
                                    currentTarget: t.$activeOption
                                }), e.preventDefault()));
                            case 37:
                                return void t.advanceSelection(-1, e);
                            case 39:
                                return void t.advanceSelection(1, e);
                            case 9:
                                return t.settings.selectOnTab && t.isOpen && t.$activeOption && (t.onOptionSelect({
                                    currentTarget: t.$activeOption
                                }), t.isFull() || e.preventDefault()), void(t.settings.create && t.createItem() && e.preventDefault());
                            case 8:
                            case 46:
                                return void t.deleteSelection(e)
                        }
                        return !t.isFull() && !t.isInputHidden || (r ? e.metaKey : e.ctrlKey) ? void 0 : void e.preventDefault()
                    }
                    9 !== e.keyCode && e.preventDefault()
                },
                onKeyUp: function(e) {
                    var t = this;
                    if (t.isLocked) return e && e.preventDefault();
                    var i = t.$control_input.val() || "";
                    t.lastValue !== i && (t.lastValue = i, t.onSearchChange(i), t.refreshOptions(), t.trigger("type", i))
                },
                onSearchChange: function(e) {
                    var t = this,
                        i = t.settings.load;
                    i && (t.loadedSearches.hasOwnProperty(e) || (t.loadedSearches[e] = !0, t.load((function(n) {
                        i.apply(t, [e, n])
                    }))))
                },
                onFocus: function(e) {
                    var t = this,
                        i = t.isFocused;
                    if (t.isDisabled) return t.blur(), e && e.preventDefault(), !1;
                    t.ignoreFocus || (t.isFocused = !0, "focus" === t.settings.preload && t.onSearchChange(""), i || t.trigger("focus"), t.$activeItems.length || (t.showInput(), t.setActiveItem(null), t.refreshOptions(!!t.settings.openOnFocus)), t.refreshState())
                },
                onBlur: function(e, t) {
                    var i = this;
                    if (i.isFocused && (i.isFocused = !1, !i.ignoreFocus)) {
                        if (!i.ignoreBlur && document.activeElement === i.$dropdown_content[0]) return i.ignoreBlur = !0, void i.onFocus(e);
                        var n = function() {
                            i.close(), i.setTextboxValue(""), i.setActiveItem(null), i.setActiveOption(null), i.setCaret(i.items.length), i.refreshState(), t && t.focus && t.focus(), i.isBlurring = !1, i.ignoreFocus = !1, i.trigger("blur")
                        };
                        i.isBlurring = !0, i.ignoreFocus = !0, i.settings.create && i.settings.createOnBlur ? i.createItem(null, !1, n) : n()
                    }
                },
                onOptionHover: function(e) {
                    this.ignoreHover || this.setActiveOption(e.currentTarget, !1)
                },
                onOptionSelect: function(t) {
                    var i, n, o = this;
                    t.preventDefault && (t.preventDefault(), t.stopPropagation()), (n = e(t.currentTarget)).hasClass("create") ? o.createItem(null, (function() {
                        o.settings.closeAfterSelect && o.close()
                    })) : void 0 !== (i = n.attr("data-value")) && (o.lastQuery = null, o.setTextboxValue(""), o.addItem(i), o.settings.closeAfterSelect ? o.close() : !o.settings.hideSelected && t.type && /mouse/.test(t.type) && o.setActiveOption(o.getOption(i)))
                },
                onItemSelect: function(e) {
                    var t = this;
                    t.isLocked || "multi" === t.settings.mode && (e.preventDefault(), t.setActiveItem(e.currentTarget, e))
                },
                load: function(e) {
                    var t = this,
                        i = t.$wrapper.addClass(t.settings.loadingClass);
                    t.loading++, e.apply(t, [function(e) {
                        t.loading = Math.max(t.loading - 1, 0), e && e.length && (t.addOption(e), t.refreshOptions(t.isFocused && !t.isInputHidden)), t.loading || i.removeClass(t.settings.loadingClass), t.trigger("load", e)
                    }])
                },
                setTextboxValue: function(e) {
                    var t = this.$control_input;
                    t.val() !== e && (t.val(e).triggerHandler("update"), this.lastValue = e)
                },
                getValue: function() {
                    return 1 === this.tagType && this.$input.attr("multiple") ? this.items : this.items.join(this.settings.delimiter)
                },
                setValue: function(e, t) {
                    g(this, t ? [] : ["change"], (function() {
                        this.clear(t), this.addItems(e, t)
                    }))
                },
                setActiveItem: function(t, i) {
                    var n, o, r, s, a, l, c, u, d = this;
                    if ("single" !== d.settings.mode) {
                        if (!(t = e(t)).length) return e(d.$activeItems).removeClass("active"), d.$activeItems = [], void(d.isFocused && d.showInput());
                        if ("mousedown" === (n = i && i.type.toLowerCase()) && d.isShiftDown && d.$activeItems.length) {
                            for (u = d.$control.children(".active:last"), (s = Array.prototype.indexOf.apply(d.$control[0].childNodes, [u[0]])) > (a = Array.prototype.indexOf.apply(d.$control[0].childNodes, [t[0]])) && (c = s, s = a, a = c), o = s; o <= a; o++) l = d.$control[0].childNodes[o], -1 === d.$activeItems.indexOf(l) && (e(l).addClass("active"), d.$activeItems.push(l));
                            i.preventDefault()
                        } else "mousedown" === n && d.isCtrlDown || "keydown" === n && this.isShiftDown ? t.hasClass("active") ? (r = d.$activeItems.indexOf(t[0]), d.$activeItems.splice(r, 1), t.removeClass("active")) : d.$activeItems.push(t.addClass("active")[0]) : (e(d.$activeItems).removeClass("active"), d.$activeItems = [t.addClass("active")[0]]);
                        d.hideInput(), this.isFocused || d.focus()
                    }
                },
                setActiveOption: function(t, i, n) {
                    var o, r, s, a, l, u = this;
                    u.$activeOption && u.$activeOption.removeClass("active"), u.$activeOption = null, (t = e(t)).length && (u.$activeOption = t.addClass("active"), !i && c(i) || (o = u.$dropdown_content.height(), r = u.$activeOption.outerHeight(!0), i = u.$dropdown_content.scrollTop() || 0, a = s = u.$activeOption.offset().top - u.$dropdown_content.offset().top + i, l = s - o + r, s + r > o + i ? u.$dropdown_content.stop().animate({
                        scrollTop: l
                    }, n ? u.settings.scrollDuration : 0) : s < i && u.$dropdown_content.stop().animate({
                        scrollTop: a
                    }, n ? u.settings.scrollDuration : 0)))
                },
                selectAll: function() {
                    var e = this;
                    "single" !== e.settings.mode && (e.$activeItems = Array.prototype.slice.apply(e.$control.children(":not(input)").addClass("active")), e.$activeItems.length && (e.hideInput(), e.close()), e.focus())
                },
                hideInput: function() {
                    var e = this;
                    e.setTextboxValue(""), e.$control_input.css({
                        opacity: 0,
                        position: "absolute",
                        left: e.rtl ? 1e4 : -1e4
                    }), e.isInputHidden = !0
                },
                showInput: function() {
                    this.$control_input.css({
                        opacity: 1,
                        position: "relative",
                        left: 0
                    }), this.isInputHidden = !1
                },
                focus: function() {
                    var e = this;
                    e.isDisabled || (e.ignoreFocus = !0, e.$control_input[0].focus(), window.setTimeout((function() {
                        e.ignoreFocus = !1, e.onFocus()
                    }), 0))
                },
                blur: function(e) {
                    this.$control_input[0].blur(), this.onBlur(null, e)
                },
                getScoreFunction: function(e) {
                    return this.sifter.getScoreFunction(e, this.getSearchOptions())
                },
                getSearchOptions: function() {
                    var e = this.settings,
                        t = e.sortField;
                    return "string" == typeof t && (t = [{
                        field: t
                    }]), {
                        fields: e.searchField,
                        conjunction: e.searchConjunction,
                        sort: t,
                        nesting: e.nesting
                    }
                },
                search: function(t) {
                    var i, n, o, r = this,
                        s = r.settings,
                        a = this.getSearchOptions();
                    if (s.score && "function" != typeof(o = r.settings.score.apply(this, [t]))) throw new Error('Selectize "score" setting must be a function that returns a function');
                    if (t !== r.lastQuery ? (r.lastQuery = t, n = r.sifter.search(t, e.extend(a, {
                            score: o
                        })), r.currentResults = n) : n = e.extend(!0, {}, r.currentResults), s.hideSelected)
                        for (i = n.items.length - 1; i >= 0; i--) - 1 !== r.items.indexOf(u(n.items[i].id)) && n.items.splice(i, 1);
                    return n
                },
                refreshOptions: function(t) {
                    var i, o, r, s, a, l, c, d, h, p, f, m, g, v, y, w;
                    void 0 === t && (t = !0);
                    var _ = this,
                        x = e.trim(_.$control_input.val()),
                        C = _.search(x),
                        k = _.$dropdown_content,
                        $ = _.$activeOption && u(_.$activeOption.attr("data-value"));
                    for (s = C.items.length, "number" == typeof _.settings.maxOptions && (s = Math.min(s, _.settings.maxOptions)), a = {}, l = [], i = 0; i < s; i++)
                        for (c = _.options[C.items[i].id], d = _.render("option", c), h = c[_.settings.optgroupField] || "", o = 0, r = (p = e.isArray(h) ? h : [h]) && p.length; o < r; o++) h = p[o], _.optgroups.hasOwnProperty(h) || (h = ""), a.hasOwnProperty(h) || (a[h] = document.createDocumentFragment(), l.push(h)), a[h].appendChild(d);
                    for (this.settings.lockOptgroupOrder && l.sort((function(e, t) {
                            return (_.optgroups[e].$order || 0) - (_.optgroups[t].$order || 0)
                        })), f = document.createDocumentFragment(), i = 0, s = l.length; i < s; i++) h = l[i], _.optgroups.hasOwnProperty(h) && a[h].childNodes.length ? ((m = document.createDocumentFragment()).appendChild(_.render("optgroup_header", _.optgroups[h])), m.appendChild(a[h]), f.appendChild(_.render("optgroup", e.extend({}, _.optgroups[h], {
                        html: b(m),
                        dom: m
                    })))) : f.appendChild(a[h]);
                    if (k.html(f), _.settings.highlight && (k.removeHighlight(), C.query.length && C.tokens.length))
                        for (i = 0, s = C.tokens.length; i < s; i++) n(k, C.tokens[i].regex);
                    if (!_.settings.hideSelected)
                        for (i = 0, s = _.items.length; i < s; i++) _.getOption(_.items[i]).addClass("selected");
                    (g = _.canCreate(x)) && (k.prepend(_.render("option_create", {
                        input: x
                    })), w = e(k[0].childNodes[0])), _.hasOptions = C.items.length > 0 || g, _.hasOptions ? (C.items.length > 0 ? ((y = $ && _.getOption($)) && y.length ? v = y : "single" === _.settings.mode && _.items.length && (v = _.getOption(_.items[0])), v && v.length || (v = w && !_.settings.addPrecedence ? _.getAdjacentOption(w, 1) : k.find("[data-selectable]:first"))) : v = w, _.setActiveOption(v), t && !_.isOpen && _.open()) : (_.setActiveOption(null), t && _.isOpen && _.close())
                },
                addOption: function(t) {
                    var i, n, o, r = this;
                    if (e.isArray(t))
                        for (i = 0, n = t.length; i < n; i++) r.addOption(t[i]);
                    else(o = r.registerOption(t)) && (r.userOptions[o] = !0, r.lastQuery = null, r.trigger("option_add", o, t))
                },
                registerOption: function(e) {
                    var t = u(e[this.settings.valueField]);
                    return null != t && !this.options.hasOwnProperty(t) && (e.$order = e.$order || ++this.order, this.options[t] = e, t)
                },
                registerOptionGroup: function(e) {
                    var t = u(e[this.settings.optgroupValueField]);
                    return !!t && (e.$order = e.$order || ++this.order, this.optgroups[t] = e, t)
                },
                addOptionGroup: function(e, t) {
                    t[this.settings.optgroupValueField] = e, (e = this.registerOptionGroup(t)) && this.trigger("optgroup_add", e, t)
                },
                removeOptionGroup: function(e) {
                    this.optgroups.hasOwnProperty(e) && (delete this.optgroups[e], this.renderCache = {}, this.trigger("optgroup_remove", e))
                },
                clearOptionGroups: function() {
                    this.optgroups = {}, this.renderCache = {}, this.trigger("optgroup_clear")
                },
                updateOption: function(t, i) {
                    var n, o, r, s, a, l, c, d = this;
                    if (t = u(t), r = u(i[d.settings.valueField]), null !== t && d.options.hasOwnProperty(t)) {
                        if ("string" != typeof r) throw new Error("Value must be set in option data");
                        c = d.options[t].$order, r !== t && (delete d.options[t], -1 !== (s = d.items.indexOf(t)) && d.items.splice(s, 1, r)), i.$order = i.$order || c, d.options[r] = i, a = d.renderCache.item, l = d.renderCache.option, a && (delete a[t], delete a[r]), l && (delete l[t], delete l[r]), -1 !== d.items.indexOf(r) && (n = d.getItem(t), o = e(d.render("item", i)), n.hasClass("active") && o.addClass("active"), n.replaceWith(o)), d.lastQuery = null, d.isOpen && d.refreshOptions(!1)
                    }
                },
                removeOption: function(e, t) {
                    var i = this;
                    e = u(e);
                    var n = i.renderCache.item,
                        o = i.renderCache.option;
                    n && delete n[e], o && delete o[e], delete i.userOptions[e], delete i.options[e], i.lastQuery = null, i.trigger("option_remove", e), i.removeItem(e, t)
                },
                clearOptions: function() {
                    var t = this;
                    t.loadedSearches = {}, t.userOptions = {}, t.renderCache = {};
                    var i = t.options;
                    e.each(t.options, (function(e, n) {
                        -1 == t.items.indexOf(e) && delete i[e]
                    })), t.options = t.sifter.items = i, t.lastQuery = null, t.trigger("option_clear")
                },
                getOption: function(e) {
                    return this.getElementWithValue(e, this.$dropdown_content.find("[data-selectable]"))
                },
                getAdjacentOption: function(t, i) {
                    var n = this.$dropdown.find("[data-selectable]"),
                        o = n.index(t) + i;
                    return o >= 0 && o < n.length ? n.eq(o) : e()
                },
                getElementWithValue: function(t, i) {
                    if (void 0 !== (t = u(t)) && null !== t)
                        for (var n = 0, o = i.length; n < o; n++)
                            if (i[n].getAttribute("data-value") === t) return e(i[n]);
                    return e()
                },
                getItem: function(e) {
                    return this.getElementWithValue(e, this.$control.children())
                },
                addItems: function(t, i) {
                    this.buffer = document.createDocumentFragment();
                    for (var n = this.$control[0].childNodes, o = 0; o < n.length; o++) this.buffer.appendChild(n[o]);
                    for (var r = e.isArray(t) ? t : [t], s = (o = 0, r.length); o < s; o++) this.isPending = o < s - 1, this.addItem(r[o], i);
                    var a = this.$control[0];
                    a.insertBefore(this.buffer, a.firstChild), this.buffer = null
                },
                addItem: function(t, i) {
                    g(this, i ? [] : ["change"], (function() {
                        var n, o, r, s, a, l = this,
                            c = l.settings.mode;
                        t = u(t), -1 === l.items.indexOf(t) ? l.options.hasOwnProperty(t) && ("single" === c && l.clear(i), "multi" === c && l.isFull() || (n = e(l.render("item", l.options[t])), a = l.isFull(), l.items.splice(l.caretPos, 0, t), l.insertAtCaret(n), (!l.isPending || !a && l.isFull()) && l.refreshState(), l.isSetup && (r = l.$dropdown_content.find("[data-selectable]"), l.isPending || (o = l.getOption(t), s = l.getAdjacentOption(o, 1).attr("data-value"), l.refreshOptions(l.isFocused && "single" !== c), s && l.setActiveOption(l.getOption(s))), !r.length || l.isFull() ? l.close() : l.isPending || l.positionDropdown(), l.updatePlaceholder(), l.trigger("item_add", t, n), l.isPending || l.updateOriginalInput({
                            silent: i
                        })))) : "single" === c && l.close()
                    }))
                },
                removeItem: function(t, i) {
                    var n, o, r, s = this;
                    n = t instanceof e ? t : s.getItem(t), t = u(n.attr("data-value")), -1 !== (o = s.items.indexOf(t)) && (n.remove(), n.hasClass("active") && (r = s.$activeItems.indexOf(n[0]), s.$activeItems.splice(r, 1)), s.items.splice(o, 1), s.lastQuery = null, !s.settings.persist && s.userOptions.hasOwnProperty(t) && s.removeOption(t, i), o < s.caretPos && s.setCaret(s.caretPos - 1), s.refreshState(), s.updatePlaceholder(), s.updateOriginalInput({
                        silent: i
                    }), s.positionDropdown(), s.trigger("item_remove", t, n))
                },
                createItem: function(t, i) {
                    var n = this,
                        o = n.caretPos;
                    t = t || e.trim(n.$control_input.val() || "");
                    var r = arguments[arguments.length - 1];
                    if ("function" != typeof r && (r = function() {}), "boolean" != typeof i && (i = !0), !n.canCreate(t)) return r(), !1;
                    n.lock();
                    var s = "function" == typeof n.settings.create ? this.settings.create : function(e) {
                            var t = {};
                            return t[n.settings.labelField] = e, t[n.settings.valueField] = e, t
                        },
                        a = f((function(e) {
                            if (n.unlock(), !e || "object" != h(e)) return r();
                            var t = u(e[n.settings.valueField]);
                            if ("string" != typeof t) return r();
                            n.setTextboxValue(""), n.addOption(e), n.setCaret(o), n.addItem(t), n.refreshOptions(i && "single" !== n.settings.mode), r(e)
                        })),
                        l = s.apply(this, [t, a]);
                    return void 0 !== l && a(l), !0
                },
                refreshItems: function() {
                    this.lastQuery = null, this.isSetup && this.addItem(this.items), this.refreshState(), this.updateOriginalInput()
                },
                refreshState: function() {
                    this.refreshValidityState(), this.refreshClasses()
                },
                refreshValidityState: function() {
                    if (!this.isRequired) return !1;
                    var e = !this.items.length;
                    this.isInvalid = e, this.$control_input.prop("required", e), this.$input.prop("required", !e)
                },
                refreshClasses: function() {
                    var t = this,
                        i = t.isFull(),
                        n = t.isLocked;
                    t.$wrapper.toggleClass("rtl", t.rtl), t.$control.toggleClass("focus", t.isFocused).toggleClass("disabled", t.isDisabled).toggleClass("required", t.isRequired).toggleClass("invalid", t.isInvalid).toggleClass("locked", n).toggleClass("full", i).toggleClass("not-full", !i).toggleClass("input-active", t.isFocused && !t.isInputHidden).toggleClass("dropdown-active", t.isOpen).toggleClass("has-options", !e.isEmptyObject(t.options)).toggleClass("has-items", t.items.length > 0), t.$control_input.data("grow", !i && !n)
                },
                isFull: function() {
                    return null !== this.settings.maxItems && this.items.length >= this.settings.maxItems
                },
                updateOriginalInput: function(e) {
                    var t, i, n, o, r = this;
                    if (e = e || {}, 1 === r.tagType) {
                        for (n = [], t = 0, i = r.items.length; t < i; t++) o = r.options[r.items[t]][r.settings.labelField] || "", n.push('<option value="' + d(r.items[t]) + '" selected="selected">' + d(o) + "</option>");
                        n.length || this.$input.attr("multiple") || n.push('<option value="" selected="selected"></option>'), r.$input.html(n.join(""))
                    } else r.$input.val(r.getValue()), r.$input.attr("value", r.$input.val());
                    r.isSetup && (e.silent || r.trigger("change", r.$input.val()))
                },
                updatePlaceholder: function() {
                    if (this.settings.placeholder) {
                        var e = this.$control_input;
                        this.items.length ? e.removeAttr("placeholder") : e.attr("placeholder", this.settings.placeholder), e.triggerHandler("update", {
                            force: !0
                        })
                    }
                },
                open: function() {
                    var e = this;
                    e.isLocked || e.isOpen || "multi" === e.settings.mode && e.isFull() || (e.focus(), e.isOpen = !0, e.refreshState(), e.$dropdown.css({
                        visibility: "hidden",
                        display: "block"
                    }), e.positionDropdown(), e.$dropdown.css({
                        visibility: "visible"
                    }), e.trigger("dropdown_open", e.$dropdown))
                },
                close: function() {
                    var e = this,
                        t = e.isOpen;
                    "single" === e.settings.mode && e.items.length && (e.hideInput(), e.isBlurring || e.$control_input.blur()), e.isOpen = !1, e.$dropdown.hide(), e.setActiveOption(null), e.refreshState(), t && e.trigger("dropdown_close", e.$dropdown)
                },
                positionDropdown: function() {
                    var e = this.$control,
                        t = "body" === this.settings.dropdownParent ? e.offset() : e.position();
                    t.top += e.outerHeight(!0), this.$dropdown.css({
                        width: e[0].getBoundingClientRect().width,
                        top: t.top,
                        left: t.left
                    })
                },
                clear: function(e) {
                    var t = this;
                    t.items.length && (t.$control.children(":not(input)").remove(), t.items = [], t.lastQuery = null, t.setCaret(0), t.setActiveItem(null), t.updatePlaceholder(), t.updateOriginalInput({
                        silent: e
                    }), t.refreshState(), t.showInput(), t.trigger("clear"))
                },
                insertAtCaret: function(e) {
                    var t = Math.min(this.caretPos, this.items.length),
                        i = e[0],
                        n = this.buffer || this.$control[0];
                    0 === t ? n.insertBefore(i, n.firstChild) : n.insertBefore(i, n.childNodes[t]), this.setCaret(t + 1)
                },
                deleteSelection: function(t) {
                    var i, n, o, r, s, a, l, c, u, d = this;
                    if (o = t && 8 === t.keyCode ? -1 : 1, r = v(d.$control_input[0]), d.$activeOption && !d.settings.hideSelected && (l = d.getAdjacentOption(d.$activeOption, -1).attr("data-value")), s = [], d.$activeItems.length) {
                        for (u = d.$control.children(".active:" + (o > 0 ? "last" : "first")), a = d.$control.children(":not(input)").index(u), o > 0 && a++, i = 0, n = d.$activeItems.length; i < n; i++) s.push(e(d.$activeItems[i]).attr("data-value"));
                        t && (t.preventDefault(), t.stopPropagation())
                    } else(d.isFocused || "single" === d.settings.mode) && d.items.length && (o < 0 && 0 === r.start && 0 === r.length ? s.push(d.items[d.caretPos - 1]) : o > 0 && r.start === d.$control_input.val().length && s.push(d.items[d.caretPos]));
                    if (!s.length || "function" == typeof d.settings.onDelete && !1 === d.settings.onDelete.apply(d, [s])) return !1;
                    for (void 0 !== a && d.setCaret(a); s.length;) d.removeItem(s.pop());
                    return d.showInput(), d.positionDropdown(), d.refreshOptions(!0), l && (c = d.getOption(l)).length && d.setActiveOption(c), !0
                },
                advanceSelection: function(e, t) {
                    var i, n, o, r, s, a = this;
                    0 !== e && (a.rtl && (e *= -1), i = e > 0 ? "last" : "first", n = v(a.$control_input[0]), a.isFocused && !a.isInputHidden ? (r = a.$control_input.val().length, (e < 0 ? 0 === n.start && 0 === n.length : n.start === r) && !r && a.advanceCaret(e, t)) : (s = a.$control.children(".active:" + i)).length && (o = a.$control.children(":not(input)").index(s), a.setActiveItem(null), a.setCaret(e > 0 ? o + 1 : o)))
                },
                advanceCaret: function(e, t) {
                    var i, n, o = this;
                    0 !== e && (i = e > 0 ? "next" : "prev", o.isShiftDown ? (n = o.$control_input[i]()).length && (o.hideInput(), o.setActiveItem(n), t && t.preventDefault()) : o.setCaret(o.caretPos + e))
                },
                setCaret: function(t) {
                    var i, n, o, r, s = this;
                    if (t = "single" === s.settings.mode ? s.items.length : Math.max(0, Math.min(s.items.length, t)), !s.isPending)
                        for (i = 0, n = (o = s.$control.children(":not(input)")).length; i < n; i++) r = e(o[i]).detach(), i < t ? s.$control_input.before(r) : s.$control.append(r);
                    s.caretPos = t
                },
                lock: function() {
                    this.close(), this.isLocked = !0, this.refreshState()
                },
                unlock: function() {
                    this.isLocked = !1, this.refreshState()
                },
                disable: function() {
                    var e = this;
                    e.$input.prop("disabled", !0), e.$control_input.prop("disabled", !0).prop("tabindex", -1), e.isDisabled = !0, e.lock()
                },
                enable: function() {
                    var e = this;
                    e.$input.prop("disabled", !1), e.$control_input.prop("disabled", !1).prop("tabindex", e.tabIndex), e.isDisabled = !1, e.unlock()
                },
                destroy: function() {
                    var t = this,
                        i = t.eventNS,
                        n = t.revertSettings;
                    t.trigger("destroy"), t.off(), t.$wrapper.remove(), t.$dropdown.remove(), t.$input.html("").append(n.$children).removeAttr("tabindex").removeClass("selectized").attr({
                        tabindex: n.tabindex
                    }).show(), t.$control_input.removeData("grow"), t.$input.removeData("selectize"), 0 == --_.count && _.$testInput && (_.$testInput.remove(), _.$testInput = void 0), e(window).off(i), e(document).off(i), e(document.body).off(i), delete t.$input[0].selectize
                },
                render: function(t, i) {
                    var n, o, r = "",
                        s = !1,
                        a = this;
                    return "option" !== t && "item" !== t || (s = !!(n = u(i[a.settings.valueField]))), s && (c(a.renderCache[t]) || (a.renderCache[t] = {}), a.renderCache[t].hasOwnProperty(n)) ? a.renderCache[t][n] : (r = e(a.settings.render[t].apply(this, [i, d])), "option" === t || "option_create" === t ? i[a.settings.disabledField] || r.attr("data-selectable", "") : "optgroup" === t && (o = i[a.settings.optgroupValueField] || "", r.attr("data-group", o), i[a.settings.disabledField] && r.attr("data-disabled", "")), "option" !== t && "item" !== t || r.attr("data-value", n || ""), s && (a.renderCache[t][n] = r[0]), r[0])
                },
                clearCache: function(e) {
                    void 0 === e ? this.renderCache = {} : delete this.renderCache[e]
                },
                canCreate: function(e) {
                    var t = this;
                    if (!t.settings.create) return !1;
                    var i = t.settings.createFilter;
                    return e.length && ("function" != typeof i || i.apply(t, [e])) && ("string" != typeof i || new RegExp(i).test(e)) && (!(i instanceof RegExp) || i.test(e))
                }
            }), _.count = 0, _.defaults = {
                options: [],
                optgroups: [],
                plugins: [],
                delimiter: ",",
                splitOn: null,
                persist: !0,
                diacritics: !0,
                create: !1,
                createOnBlur: !1,
                createFilter: null,
                highlight: !0,
                openOnFocus: !0,
                maxOptions: 1e3,
                maxItems: null,
                hideSelected: null,
                addPrecedence: !1,
                selectOnTab: !1,
                preload: !1,
                allowEmptyOption: !1,
                closeAfterSelect: !1,
                scrollDuration: 60,
                loadThrottle: 300,
                loadingClass: "loading",
                dataAttr: "data-data",
                optgroupField: "optgroup",
                valueField: "value",
                labelField: "text",
                disabledField: "disabled",
                optgroupLabelField: "label",
                optgroupValueField: "value",
                lockOptgroupOrder: !1,
                sortField: "$order",
                searchField: ["text"],
                searchConjunction: "and",
                mode: null,
                wrapperClass: "selectize-control",
                inputClass: "selectize-input",
                dropdownClass: "selectize-dropdown",
                dropdownContentClass: "selectize-dropdown-content",
                dropdownParent: null,
                copyClassesToDropdown: !0,
                render: {}
            }, e.fn.selectize = function(t) {
                var i = e.fn.selectize.defaults,
                    n = e.extend({}, i, t),
                    o = n.dataAttr,
                    r = n.labelField,
                    s = n.valueField,
                    a = n.disabledField,
                    l = n.optgroupField,
                    c = n.optgroupLabelField,
                    d = n.optgroupValueField,
                    h = function(t, i) {
                        var a, l, c, u, d = t.attr(o);
                        if (d)
                            for (i.options = JSON.parse(d), a = 0, l = i.options.length; a < l; a++) i.items.push(i.options[a][s]);
                        else {
                            var h = e.trim(t.val() || "");
                            if (!n.allowEmptyOption && !h.length) return;
                            for (a = 0, l = (c = h.split(n.delimiter)).length; a < l; a++)(u = {})[r] = c[a], u[s] = c[a], i.options.push(u);
                            i.items = c
                        }
                    },
                    p = function(t, i) {
                        var h, p, f, m, g = i.options,
                            v = {},
                            y = function(e) {
                                var t = o && e.attr(o);
                                return "string" == typeof t && t.length ? JSON.parse(t) : null
                            },
                            w = function(t, o) {
                                t = e(t);
                                var c = u(t.val());
                                if (c || n.allowEmptyOption)
                                    if (v.hasOwnProperty(c)) {
                                        if (o) {
                                            var d = v[c][l];
                                            d ? e.isArray(d) ? d.push(o) : v[c][l] = [d, o] : v[c][l] = o
                                        }
                                    } else {
                                        var h = y(t) || {};
                                        h[r] = h[r] || t.text(), h[s] = h[s] || c, h[a] = h[a] || t.prop("disabled"), h[l] = h[l] || o, v[c] = h, g.push(h), t.is(":selected") && i.items.push(c)
                                    }
                            };
                        for (i.maxItems = t.attr("multiple") ? null : 1, h = 0, p = (m = t.children()).length; h < p; h++) "optgroup" === (f = m[h].tagName.toLowerCase()) ? function(t) {
                            var n, o, r, s, l;
                            for ((r = (t = e(t)).attr("label")) && ((s = y(t) || {})[c] = r, s[d] = r, s[a] = t.prop("disabled"), i.optgroups.push(s)), n = 0, o = (l = e("option", t)).length; n < o; n++) w(l[n], r)
                        }(m[h]) : "option" === f && w(m[h])
                    };
                return this.each((function() {
                    if (!this.selectize) {
                        var o = e(this),
                            r = this.tagName.toLowerCase(),
                            s = o.attr("placeholder") || o.attr("data-placeholder");
                        s || n.allowEmptyOption || (s = o.children('option[value=""]').text());
                        var a = {
                            placeholder: s,
                            options: [],
                            optgroups: [],
                            items: []
                        };
                        "select" === r ? p(o, a) : h(o, a), new _(o, e.extend(!0, {}, i, a, t))
                    }
                }))
            }, e.fn.selectize.defaults = _.defaults, e.fn.selectize.support = {
                validity: l
            }, _.define("drag_drop", (function(t) {
                if (!e.fn.sortable) throw new Error('The "drag_drop" plugin requires jQuery UI "sortable".');
                if ("multi" === this.settings.mode) {
                    var i = this;
                    i.lock = function() {
                        var e = i.lock;
                        return function() {
                            var t = i.$control.data("sortable");
                            return t && t.disable(), e.apply(i, arguments)
                        }
                    }(), i.unlock = function() {
                        var e = i.unlock;
                        return function() {
                            var t = i.$control.data("sortable");
                            return t && t.enable(), e.apply(i, arguments)
                        }
                    }(), i.setup = function() {
                        var t = i.setup;
                        return function() {
                            t.apply(this, arguments);
                            var n = i.$control.sortable({
                                items: "[data-value]",
                                forcePlaceholderSize: !0,
                                disabled: i.isLocked,
                                start: function(e, t) {
                                    t.placeholder.css("width", t.helper.css("width")), n.css({
                                        overflow: "visible"
                                    })
                                },
                                stop: function() {
                                    n.css({
                                        overflow: "hidden"
                                    });
                                    var t = i.$activeItems ? i.$activeItems.slice() : null,
                                        o = [];
                                    n.children("[data-value]").each((function() {
                                        o.push(e(this).attr("data-value"))
                                    })), i.setValue(o), i.setActiveItem(t)
                                }
                            })
                        }
                    }()
                }
            })), _.define("dropdown_header", (function(t) {
                var i = this;
                t = e.extend({
                    title: "Untitled",
                    headerClass: "selectize-dropdown-header",
                    titleRowClass: "selectize-dropdown-header-title",
                    labelClass: "selectize-dropdown-header-label",
                    closeClass: "selectize-dropdown-header-close",
                    html: function(e) {
                        return '<div class="' + e.headerClass + '"><div class="' + e.titleRowClass + '"><span class="' + e.labelClass + '">' + e.title + '</span><a href="javascript:void(0)" class="' + e.closeClass + '">&times;</a></div></div>'
                    }
                }, t), i.setup = function() {
                    var n = i.setup;
                    return function() {
                        n.apply(i, arguments), i.$dropdown_header = e(t.html(t)), i.$dropdown.prepend(i.$dropdown_header)
                    }
                }()
            })), _.define("optgroup_columns", (function(t) {
                var i = this;
                t = e.extend({
                    equalizeWidth: !0,
                    equalizeHeight: !0
                }, t), this.getAdjacentOption = function(t, i) {
                    var n = t.closest("[data-group]").find("[data-selectable]"),
                        o = n.index(t) + i;
                    return o >= 0 && o < n.length ? n.eq(o) : e()
                }, this.onKeyDown = function() {
                    var e = i.onKeyDown;
                    return function(t) {
                        var n, o, r, s;
                        return !this.isOpen || 37 !== t.keyCode && 39 !== t.keyCode ? e.apply(this, arguments) : (i.ignoreHover = !0, n = (s = this.$activeOption.closest("[data-group]")).find("[data-selectable]").index(this.$activeOption), void((o = (r = (s = 37 === t.keyCode ? s.prev("[data-group]") : s.next("[data-group]")).find("[data-selectable]")).eq(Math.min(r.length - 1, n))).length && this.setActiveOption(o)))
                    }
                }();
                var n = function() {
                    var n, o, r, s, a, l, c;
                    if ((o = (c = e("[data-group]", i.$dropdown_content)).length) && i.$dropdown_content.width()) {
                        if (t.equalizeHeight) {
                            for (r = 0, n = 0; n < o; n++) r = Math.max(r, c.eq(n).height());
                            c.css({
                                height: r
                            })
                        }
                        t.equalizeWidth && (l = i.$dropdown_content.innerWidth() - function e() {
                            var t, i = e.width,
                                n = document;
                            return void 0 === i && ((t = n.createElement("div")).innerHTML = '<div style="width:50px;height:50px;position:absolute;left:-50px;top:-50px;overflow:auto;"><div style="width:1px;height:100px;"></div></div>', t = t.firstChild, n.body.appendChild(t), i = e.width = t.offsetWidth - t.clientWidth, n.body.removeChild(t)), i
                        }(), s = Math.round(l / o), c.css({
                            width: s
                        }), o > 1 && (a = l - s * (o - 1), c.eq(o - 1).css({
                            width: a
                        })))
                    }
                };
                (t.equalizeHeight || t.equalizeWidth) && (p.after(this, "positionDropdown", n), p.after(this, "refreshOptions", n))
            })), _.define("remove_button", (function(t) {
                t = e.extend({
                    label: "&times;",
                    title: "Remove",
                    className: "remove",
                    append: !0
                }, t), "single" !== this.settings.mode ? function(t, i) {
                    var n = t,
                        o = '<a href="javascript:void(0)" class="' + i.className + '" tabindex="-1" title="' + d(i.title) + '">' + i.label + "</a>",
                        r = function(e, t) {
                            var i = e.search(/(<\/[^>]+>\s*)$/);
                            return e.substring(0, i) + t + e.substring(i)
                        };
                    t.setup = function() {
                        var s = n.setup;
                        return function() {
                            if (i.append) {
                                var a = n.settings.render.item;
                                n.settings.render.item = function(e) {
                                    return r(a.apply(t, arguments), o)
                                }
                            }
                            s.apply(t, arguments), t.$control.on("click", "." + i.className, (function(t) {
                                if (t.preventDefault(), !n.isLocked) {
                                    var i = e(t.currentTarget).parent();
                                    n.setActiveItem(i), n.deleteSelection() && n.setCaret(n.items.length)
                                }
                            }))
                        }
                    }()
                }(this, t) : function(t, i) {
                    i.className = "remove-single";
                    var n = t,
                        o = '<a href="javascript:void(0)" class="' + i.className + '" tabindex="-1" title="' + d(i.title) + '">' + i.label + "</a>",
                        r = function(t, i) {
                            return e("<span>").append(t).append(i)
                        };
                    t.setup = function() {
                        var s = n.setup;
                        return function() {
                            if (i.append) {
                                var a = e(n.$input.context).attr("id"),
                                    l = (e("#" + a), n.settings.render.item);
                                n.settings.render.item = function(e) {
                                    return r(l.apply(t, arguments), o)
                                }
                            }
                            s.apply(t, arguments), t.$control.on("click", "." + i.className, (function(e) {
                                e.preventDefault(), n.isLocked || n.clear()
                            }))
                        }
                    }()
                }(this, t)
            })), _.define("restore_on_backspace", (function(e) {
                var t = this;
                e.text = e.text || function(e) {
                    return e[this.settings.labelField]
                }, this.onKeyDown = function() {
                    var i = t.onKeyDown;
                    return function(t) {
                        var n, o;
                        return 8 === t.keyCode && "" === this.$control_input.val() && !this.$activeItems.length && (n = this.caretPos - 1) >= 0 && n < this.items.length ? (o = this.options[this.items[n]], this.deleteSelection(t) && (this.setTextboxValue(e.text.apply(this, [o])), this.refreshOptions(!0)), void t.preventDefault()) : i.apply(this, arguments)
                    }
                }()
            })), _
        }) ? c.apply(t, u) : c) || (e.exports = d)
    },
    0: function(e, t, i) {
        i("bUC5"), i("EmvQ"), i("YAxq"), i("/l6k"), i("GK92"), i("eBwQ"), i("ZH0Z"), i("APzL"), i("KBC4"), i("BtCW"), i("zq5x"), i("jsrK"), e.exports = i("WiRR")
    },
    "8L3F": function(e, t, i) {
        "use strict";
        i.r(t),
            function(e) {
                var i = "undefined" != typeof window && "undefined" != typeof document && "undefined" != typeof navigator,
                    n = function() {
                        for (var e = ["Edge", "Trident", "Firefox"], t = 0; t < e.length; t += 1)
                            if (i && navigator.userAgent.indexOf(e[t]) >= 0) return 1;
                        return 0
                    }();
                var o = i && window.Promise ? function(e) {
                    var t = !1;
                    return function() {
                        t || (t = !0, window.Promise.resolve().then((function() {
                            t = !1, e()
                        })))
                    }
                } : function(e) {
                    var t = !1;
                    return function() {
                        t || (t = !0, setTimeout((function() {
                            t = !1, e()
                        }), n))
                    }
                };

                function r(e) {
                    return e && "[object Function]" === {}.toString.call(e)
                }

                function s(e, t) {
                    if (1 !== e.nodeType) return [];
                    var i = e.ownerDocument.defaultView.getComputedStyle(e, null);
                    return t ? i[t] : i
                }

                function a(e) {
                    return "HTML" === e.nodeName ? e : e.parentNode || e.host
                }

                function l(e) {
                    if (!e) return document.body;
                    switch (e.nodeName) {
                        case "HTML":
                        case "BODY":
                            return e.ownerDocument.body;
                        case "#document":
                            return e.body
                    }
                    var t = s(e),
                        i = t.overflow,
                        n = t.overflowX,
                        o = t.overflowY;
                    return /(auto|scroll|overlay)/.test(i + o + n) ? e : l(a(e))
                }

                function c(e) {
                    return e && e.referenceNode ? e.referenceNode : e
                }
                var u = i && !(!window.MSInputMethodContext || !document.documentMode),
                    d = i && /MSIE 10/.test(navigator.userAgent);

                function h(e) {
                    return 11 === e ? u : 10 === e ? d : u || d
                }

                function p(e) {
                    if (!e) return document.documentElement;
                    for (var t = h(10) ? document.body : null, i = e.offsetParent || null; i === t && e.nextElementSibling;) i = (e = e.nextElementSibling).offsetParent;
                    var n = i && i.nodeName;
                    return n && "BODY" !== n && "HTML" !== n ? -1 !== ["TH", "TD", "TABLE"].indexOf(i.nodeName) && "static" === s(i, "position") ? p(i) : i : e ? e.ownerDocument.documentElement : document.documentElement
                }

                function f(e) {
                    return null !== e.parentNode ? f(e.parentNode) : e
                }

                function m(e, t) {
                    if (!(e && e.nodeType && t && t.nodeType)) return document.documentElement;
                    var i = e.compareDocumentPosition(t) & Node.DOCUMENT_POSITION_FOLLOWING,
                        n = i ? e : t,
                        o = i ? t : e,
                        r = document.createRange();
                    r.setStart(n, 0), r.setEnd(o, 0);
                    var s, a, l = r.commonAncestorContainer;
                    if (e !== l && t !== l || n.contains(o)) return "BODY" === (a = (s = l).nodeName) || "HTML" !== a && p(s.firstElementChild) !== s ? p(l) : l;
                    var c = f(e);
                    return c.host ? m(c.host, t) : m(e, f(t).host)
                }

                function g(e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "top",
                        i = "top" === t ? "scrollTop" : "scrollLeft",
                        n = e.nodeName;
                    if ("BODY" === n || "HTML" === n) {
                        var o = e.ownerDocument.documentElement,
                            r = e.ownerDocument.scrollingElement || o;
                        return r[i]
                    }
                    return e[i]
                }

                function v(e, t) {
                    var i = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                        n = g(t, "top"),
                        o = g(t, "left"),
                        r = i ? -1 : 1;
                    return e.top += n * r, e.bottom += n * r, e.left += o * r, e.right += o * r, e
                }

                function y(e, t) {
                    var i = "x" === t ? "Left" : "Top",
                        n = "Left" === i ? "Right" : "Bottom";
                    return parseFloat(e["border" + i + "Width"]) + parseFloat(e["border" + n + "Width"])
                }

                function w(e, t, i, n) {
                    return Math.max(t["offset" + e], t["scroll" + e], i["client" + e], i["offset" + e], i["scroll" + e], h(10) ? parseInt(i["offset" + e]) + parseInt(n["margin" + ("Height" === e ? "Top" : "Left")]) + parseInt(n["margin" + ("Height" === e ? "Bottom" : "Right")]) : 0)
                }

                function b(e) {
                    var t = e.body,
                        i = e.documentElement,
                        n = h(10) && getComputedStyle(i);
                    return {
                        height: w("Height", t, i, n),
                        width: w("Width", t, i, n)
                    }
                }
                var _ = function(e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    },
                    x = function() {
                        function e(e, t) {
                            for (var i = 0; i < t.length; i++) {
                                var n = t[i];
                                n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                            }
                        }
                        return function(t, i, n) {
                            return i && e(t.prototype, i), n && e(t, n), t
                        }
                    }(),
                    C = function(e, t, i) {
                        return t in e ? Object.defineProperty(e, t, {
                            value: i,
                            enumerable: !0,
                            configurable: !0,
                            writable: !0
                        }) : e[t] = i, e
                    },
                    k = Object.assign || function(e) {
                        for (var t = 1; t < arguments.length; t++) {
                            var i = arguments[t];
                            for (var n in i) Object.prototype.hasOwnProperty.call(i, n) && (e[n] = i[n])
                        }
                        return e
                    };

                function $(e) {
                    return k({}, e, {
                        right: e.left + e.width,
                        bottom: e.top + e.height
                    })
                }

                function T(e) {
                    var t = {};
                    try {
                        if (h(10)) {
                            t = e.getBoundingClientRect();
                            var i = g(e, "top"),
                                n = g(e, "left");
                            t.top += i, t.left += n, t.bottom += i, t.right += n
                        } else t = e.getBoundingClientRect()
                    } catch (e) {}
                    var o = {
                            left: t.left,
                            top: t.top,
                            width: t.right - t.left,
                            height: t.bottom - t.top
                        },
                        r = "HTML" === e.nodeName ? b(e.ownerDocument) : {},
                        a = r.width || e.clientWidth || o.width,
                        l = r.height || e.clientHeight || o.height,
                        c = e.offsetWidth - a,
                        u = e.offsetHeight - l;
                    if (c || u) {
                        var d = s(e);
                        c -= y(d, "x"), u -= y(d, "y"), o.width -= c, o.height -= u
                    }
                    return $(o)
                }

                function E(e, t) {
                    var i = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                        n = h(10),
                        o = "HTML" === t.nodeName,
                        r = T(e),
                        a = T(t),
                        c = l(e),
                        u = s(t),
                        d = parseFloat(u.borderTopWidth),
                        p = parseFloat(u.borderLeftWidth);
                    i && o && (a.top = Math.max(a.top, 0), a.left = Math.max(a.left, 0));
                    var f = $({
                        top: r.top - a.top - d,
                        left: r.left - a.left - p,
                        width: r.width,
                        height: r.height
                    });
                    if (f.marginTop = 0, f.marginLeft = 0, !n && o) {
                        var m = parseFloat(u.marginTop),
                            g = parseFloat(u.marginLeft);
                        f.top -= d - m, f.bottom -= d - m, f.left -= p - g, f.right -= p - g, f.marginTop = m, f.marginLeft = g
                    }
                    return (n && !i ? t.contains(c) : t === c && "BODY" !== c.nodeName) && (f = v(f, t)), f
                }

                function S(e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                        i = e.ownerDocument.documentElement,
                        n = E(e, i),
                        o = Math.max(i.clientWidth, window.innerWidth || 0),
                        r = Math.max(i.clientHeight, window.innerHeight || 0),
                        s = t ? 0 : g(i),
                        a = t ? 0 : g(i, "left"),
                        l = {
                            top: s - n.top + n.marginTop,
                            left: a - n.left + n.marginLeft,
                            width: o,
                            height: r
                        };
                    return $(l)
                }

                function A(e) {
                    var t = e.nodeName;
                    if ("BODY" === t || "HTML" === t) return !1;
                    if ("fixed" === s(e, "position")) return !0;
                    var i = a(e);
                    return !!i && A(i)
                }

                function D(e) {
                    if (!e || !e.parentElement || h()) return document.documentElement;
                    for (var t = e.parentElement; t && "none" === s(t, "transform");) t = t.parentElement;
                    return t || document.documentElement
                }

                function O(e, t, i, n) {
                    var o = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
                        r = {
                            top: 0,
                            left: 0
                        },
                        s = o ? D(e) : m(e, c(t));
                    if ("viewport" === n) r = S(s, o);
                    else {
                        var u = void 0;
                        "scrollParent" === n ? "BODY" === (u = l(a(t))).nodeName && (u = e.ownerDocument.documentElement) : u = "window" === n ? e.ownerDocument.documentElement : n;
                        var d = E(u, s, o);
                        if ("HTML" !== u.nodeName || A(s)) r = d;
                        else {
                            var h = b(e.ownerDocument),
                                p = h.height,
                                f = h.width;
                            r.top += d.top - d.marginTop, r.bottom = p + d.top, r.left += d.left - d.marginLeft, r.right = f + d.left
                        }
                    }
                    var g = "number" == typeof(i = i || 0);
                    return r.left += g ? i : i.left || 0, r.top += g ? i : i.top || 0, r.right -= g ? i : i.right || 0, r.bottom -= g ? i : i.bottom || 0, r
                }

                function I(e) {
                    return e.width * e.height
                }

                function L(e, t, i, n, o) {
                    var r = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0;
                    if (-1 === e.indexOf("auto")) return e;
                    var s = O(i, n, r, o),
                        a = {
                            top: {
                                width: s.width,
                                height: t.top - s.top
                            },
                            right: {
                                width: s.right - t.right,
                                height: s.height
                            },
                            bottom: {
                                width: s.width,
                                height: s.bottom - t.bottom
                            },
                            left: {
                                width: t.left - s.left,
                                height: s.height
                            }
                        },
                        l = Object.keys(a).map((function(e) {
                            return k({
                                key: e
                            }, a[e], {
                                area: I(a[e])
                            })
                        })).sort((function(e, t) {
                            return t.area - e.area
                        })),
                        c = l.filter((function(e) {
                            var t = e.width,
                                n = e.height;
                            return t >= i.clientWidth && n >= i.clientHeight
                        })),
                        u = c.length > 0 ? c[0].key : l[0].key,
                        d = e.split("-")[1];
                    return u + (d ? "-" + d : "")
                }

                function P(e, t, i) {
                    var n = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null,
                        o = n ? D(t) : m(t, c(i));
                    return E(i, o, n)
                }

                function z(e) {
                    var t = e.ownerDocument.defaultView.getComputedStyle(e),
                        i = parseFloat(t.marginTop || 0) + parseFloat(t.marginBottom || 0),
                        n = parseFloat(t.marginLeft || 0) + parseFloat(t.marginRight || 0);
                    return {
                        width: e.offsetWidth + n,
                        height: e.offsetHeight + i
                    }
                }

                function F(e) {
                    var t = {
                        left: "right",
                        right: "left",
                        bottom: "top",
                        top: "bottom"
                    };
                    return e.replace(/left|right|bottom|top/g, (function(e) {
                        return t[e]
                    }))
                }

                function M(e, t, i) {
                    i = i.split("-")[0];
                    var n = z(e),
                        o = {
                            width: n.width,
                            height: n.height
                        },
                        r = -1 !== ["right", "left"].indexOf(i),
                        s = r ? "top" : "left",
                        a = r ? "left" : "top",
                        l = r ? "height" : "width",
                        c = r ? "width" : "height";
                    return o[s] = t[s] + t[l] / 2 - n[l] / 2, o[a] = i === a ? t[a] - n[c] : t[F(a)], o
                }

                function N(e, t) {
                    return Array.prototype.find ? e.find(t) : e.filter(t)[0]
                }

                function j(e, t, i) {
                    return (void 0 === i ? e : e.slice(0, function(e, t, i) {
                        if (Array.prototype.findIndex) return e.findIndex((function(e) {
                            return e[t] === i
                        }));
                        var n = N(e, (function(e) {
                            return e[t] === i
                        }));
                        return e.indexOf(n)
                    }(e, "name", i))).forEach((function(e) {
                        e.function && console.warn("`modifier.function` is deprecated, use `modifier.fn`!");
                        var i = e.function || e.fn;
                        e.enabled && r(i) && (t.offsets.popper = $(t.offsets.popper), t.offsets.reference = $(t.offsets.reference), t = i(t, e))
                    })), t
                }

                function R() {
                    if (!this.state.isDestroyed) {
                        var e = {
                            instance: this,
                            styles: {},
                            arrowStyles: {},
                            attributes: {},
                            flipped: !1,
                            offsets: {}
                        };
                        e.offsets.reference = P(this.state, this.popper, this.reference, this.options.positionFixed), e.placement = L(this.options.placement, e.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), e.originalPlacement = e.placement, e.positionFixed = this.options.positionFixed, e.offsets.popper = M(this.popper, e.offsets.reference, e.placement), e.offsets.popper.position = this.options.positionFixed ? "fixed" : "absolute", e = j(this.modifiers, e), this.state.isCreated ? this.options.onUpdate(e) : (this.state.isCreated = !0, this.options.onCreate(e))
                    }
                }

                function H(e, t) {
                    return e.some((function(e) {
                        var i = e.name;
                        return e.enabled && i === t
                    }))
                }

                function B(e) {
                    for (var t = [!1, "ms", "Webkit", "Moz", "O"], i = e.charAt(0).toUpperCase() + e.slice(1), n = 0; n < t.length; n++) {
                        var o = t[n],
                            r = o ? "" + o + i : e;
                        if (void 0 !== document.body.style[r]) return r
                    }
                    return null
                }

                function q() {
                    return this.state.isDestroyed = !0, H(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.position = "", this.popper.style.top = "", this.popper.style.left = "", this.popper.style.right = "", this.popper.style.bottom = "", this.popper.style.willChange = "", this.popper.style[B("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this
                }

                function W(e) {
                    var t = e.ownerDocument;
                    return t ? t.defaultView : window
                }

                function U(e, t, i, n) {
                    i.updateBound = n, W(e).addEventListener("resize", i.updateBound, {
                        passive: !0
                    });
                    var o = l(e);
                    return function e(t, i, n, o) {
                        var r = "BODY" === t.nodeName,
                            s = r ? t.ownerDocument.defaultView : t;
                        s.addEventListener(i, n, {
                            passive: !0
                        }), r || e(l(s.parentNode), i, n, o), o.push(s)
                    }(o, "scroll", i.updateBound, i.scrollParents), i.scrollElement = o, i.eventsEnabled = !0, i
                }

                function V() {
                    this.state.eventsEnabled || (this.state = U(this.reference, this.options, this.state, this.scheduleUpdate))
                }

                function K() {
                    var e, t;
                    this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = (e = this.reference, t = this.state, W(e).removeEventListener("resize", t.updateBound), t.scrollParents.forEach((function(e) {
                        e.removeEventListener("scroll", t.updateBound)
                    })), t.updateBound = null, t.scrollParents = [], t.scrollElement = null, t.eventsEnabled = !1, t))
                }

                function Y(e) {
                    return "" !== e && !isNaN(parseFloat(e)) && isFinite(e)
                }

                function Q(e, t) {
                    Object.keys(t).forEach((function(i) {
                        var n = ""; - 1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(i) && Y(t[i]) && (n = "px"), e.style[i] = t[i] + n
                    }))
                }
                var X = i && /Firefox/i.test(navigator.userAgent);

                function G(e, t, i) {
                    var n = N(e, (function(e) {
                            return e.name === t
                        })),
                        o = !!n && e.some((function(e) {
                            return e.name === i && e.enabled && e.order < n.order
                        }));
                    if (!o) {
                        var r = "`" + t + "`",
                            s = "`" + i + "`";
                        console.warn(s + " modifier is required by " + r + " modifier in order to work, be sure to include it before " + r + "!")
                    }
                    return o
                }
                var Z = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
                    J = Z.slice(3);

                function ee(e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                        i = J.indexOf(e),
                        n = J.slice(i + 1).concat(J.slice(0, i));
                    return t ? n.reverse() : n
                }
                var te = "flip",
                    ie = "clockwise",
                    ne = "counterclockwise";

                function oe(e, t, i, n) {
                    var o = [0, 0],
                        r = -1 !== ["right", "left"].indexOf(n),
                        s = e.split(/(\+|\-)/).map((function(e) {
                            return e.trim()
                        })),
                        a = s.indexOf(N(s, (function(e) {
                            return -1 !== e.search(/,|\s/)
                        })));
                    s[a] && -1 === s[a].indexOf(",") && console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");
                    var l = /\s*,\s*|\s+/,
                        c = -1 !== a ? [s.slice(0, a).concat([s[a].split(l)[0]]), [s[a].split(l)[1]].concat(s.slice(a + 1))] : [s];
                    return (c = c.map((function(e, n) {
                        var o = (1 === n ? !r : r) ? "height" : "width",
                            s = !1;
                        return e.reduce((function(e, t) {
                            return "" === e[e.length - 1] && -1 !== ["+", "-"].indexOf(t) ? (e[e.length - 1] = t, s = !0, e) : s ? (e[e.length - 1] += t, s = !1, e) : e.concat(t)
                        }), []).map((function(e) {
                            return function(e, t, i, n) {
                                var o = e.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
                                    r = +o[1],
                                    s = o[2];
                                if (!r) return e;
                                if (0 === s.indexOf("%")) {
                                    var a = void 0;
                                    switch (s) {
                                        case "%p":
                                            a = i;
                                            break;
                                        case "%":
                                        case "%r":
                                        default:
                                            a = n
                                    }
                                    return $(a)[t] / 100 * r
                                }
                                if ("vh" === s || "vw" === s) {
                                    return ("vh" === s ? Math.max(document.documentElement.clientHeight, window.innerHeight || 0) : Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) / 100 * r
                                }
                                return r
                            }(e, o, t, i)
                        }))
                    }))).forEach((function(e, t) {
                        e.forEach((function(i, n) {
                            Y(i) && (o[t] += i * ("-" === e[n - 1] ? -1 : 1))
                        }))
                    })), o
                }
                var re = {
                        placement: "bottom",
                        positionFixed: !1,
                        eventsEnabled: !0,
                        removeOnDestroy: !1,
                        onCreate: function() {},
                        onUpdate: function() {},
                        modifiers: {
                            shift: {
                                order: 100,
                                enabled: !0,
                                fn: function(e) {
                                    var t = e.placement,
                                        i = t.split("-")[0],
                                        n = t.split("-")[1];
                                    if (n) {
                                        var o = e.offsets,
                                            r = o.reference,
                                            s = o.popper,
                                            a = -1 !== ["bottom", "top"].indexOf(i),
                                            l = a ? "left" : "top",
                                            c = a ? "width" : "height",
                                            u = {
                                                start: C({}, l, r[l]),
                                                end: C({}, l, r[l] + r[c] - s[c])
                                            };
                                        e.offsets.popper = k({}, s, u[n])
                                    }
                                    return e
                                }
                            },
                            offset: {
                                order: 200,
                                enabled: !0,
                                fn: function(e, t) {
                                    var i = t.offset,
                                        n = e.placement,
                                        o = e.offsets,
                                        r = o.popper,
                                        s = o.reference,
                                        a = n.split("-")[0],
                                        l = void 0;
                                    return l = Y(+i) ? [+i, 0] : oe(i, r, s, a), "left" === a ? (r.top += l[0], r.left -= l[1]) : "right" === a ? (r.top += l[0], r.left += l[1]) : "top" === a ? (r.left += l[0], r.top -= l[1]) : "bottom" === a && (r.left += l[0], r.top += l[1]), e.popper = r, e
                                },
                                offset: 0
                            },
                            preventOverflow: {
                                order: 300,
                                enabled: !0,
                                fn: function(e, t) {
                                    var i = t.boundariesElement || p(e.instance.popper);
                                    e.instance.reference === i && (i = p(i));
                                    var n = B("transform"),
                                        o = e.instance.popper.style,
                                        r = o.top,
                                        s = o.left,
                                        a = o[n];
                                    o.top = "", o.left = "", o[n] = "";
                                    var l = O(e.instance.popper, e.instance.reference, t.padding, i, e.positionFixed);
                                    o.top = r, o.left = s, o[n] = a, t.boundaries = l;
                                    var c = t.priority,
                                        u = e.offsets.popper,
                                        d = {
                                            primary: function(e) {
                                                var i = u[e];
                                                return u[e] < l[e] && !t.escapeWithReference && (i = Math.max(u[e], l[e])), C({}, e, i)
                                            },
                                            secondary: function(e) {
                                                var i = "right" === e ? "left" : "top",
                                                    n = u[i];
                                                return u[e] > l[e] && !t.escapeWithReference && (n = Math.min(u[i], l[e] - ("right" === e ? u.width : u.height))), C({}, i, n)
                                            }
                                        };
                                    return c.forEach((function(e) {
                                        var t = -1 !== ["left", "top"].indexOf(e) ? "primary" : "secondary";
                                        u = k({}, u, d[t](e))
                                    })), e.offsets.popper = u, e
                                },
                                priority: ["left", "right", "top", "bottom"],
                                padding: 5,
                                boundariesElement: "scrollParent"
                            },
                            keepTogether: {
                                order: 400,
                                enabled: !0,
                                fn: function(e) {
                                    var t = e.offsets,
                                        i = t.popper,
                                        n = t.reference,
                                        o = e.placement.split("-")[0],
                                        r = Math.floor,
                                        s = -1 !== ["top", "bottom"].indexOf(o),
                                        a = s ? "right" : "bottom",
                                        l = s ? "left" : "top",
                                        c = s ? "width" : "height";
                                    return i[a] < r(n[l]) && (e.offsets.popper[l] = r(n[l]) - i[c]), i[l] > r(n[a]) && (e.offsets.popper[l] = r(n[a])), e
                                }
                            },
                            arrow: {
                                order: 500,
                                enabled: !0,
                                fn: function(e, t) {
                                    var i;
                                    if (!G(e.instance.modifiers, "arrow", "keepTogether")) return e;
                                    var n = t.element;
                                    if ("string" == typeof n) {
                                        if (!(n = e.instance.popper.querySelector(n))) return e
                                    } else if (!e.instance.popper.contains(n)) return console.warn("WARNING: `arrow.element` must be child of its popper element!"), e;
                                    var o = e.placement.split("-")[0],
                                        r = e.offsets,
                                        a = r.popper,
                                        l = r.reference,
                                        c = -1 !== ["left", "right"].indexOf(o),
                                        u = c ? "height" : "width",
                                        d = c ? "Top" : "Left",
                                        h = d.toLowerCase(),
                                        p = c ? "left" : "top",
                                        f = c ? "bottom" : "right",
                                        m = z(n)[u];
                                    l[f] - m < a[h] && (e.offsets.popper[h] -= a[h] - (l[f] - m)), l[h] + m > a[f] && (e.offsets.popper[h] += l[h] + m - a[f]), e.offsets.popper = $(e.offsets.popper);
                                    var g = l[h] + l[u] / 2 - m / 2,
                                        v = s(e.instance.popper),
                                        y = parseFloat(v["margin" + d]),
                                        w = parseFloat(v["border" + d + "Width"]),
                                        b = g - e.offsets.popper[h] - y - w;
                                    return b = Math.max(Math.min(a[u] - m, b), 0), e.arrowElement = n, e.offsets.arrow = (C(i = {}, h, Math.round(b)), C(i, p, ""), i), e
                                },
                                element: "[x-arrow]"
                            },
                            flip: {
                                order: 600,
                                enabled: !0,
                                fn: function(e, t) {
                                    if (H(e.instance.modifiers, "inner")) return e;
                                    if (e.flipped && e.placement === e.originalPlacement) return e;
                                    var i = O(e.instance.popper, e.instance.reference, t.padding, t.boundariesElement, e.positionFixed),
                                        n = e.placement.split("-")[0],
                                        o = F(n),
                                        r = e.placement.split("-")[1] || "",
                                        s = [];
                                    switch (t.behavior) {
                                        case te:
                                            s = [n, o];
                                            break;
                                        case ie:
                                            s = ee(n);
                                            break;
                                        case ne:
                                            s = ee(n, !0);
                                            break;
                                        default:
                                            s = t.behavior
                                    }
                                    return s.forEach((function(a, l) {
                                        if (n !== a || s.length === l + 1) return e;
                                        n = e.placement.split("-")[0], o = F(n);
                                        var c = e.offsets.popper,
                                            u = e.offsets.reference,
                                            d = Math.floor,
                                            h = "left" === n && d(c.right) > d(u.left) || "right" === n && d(c.left) < d(u.right) || "top" === n && d(c.bottom) > d(u.top) || "bottom" === n && d(c.top) < d(u.bottom),
                                            p = d(c.left) < d(i.left),
                                            f = d(c.right) > d(i.right),
                                            m = d(c.top) < d(i.top),
                                            g = d(c.bottom) > d(i.bottom),
                                            v = "left" === n && p || "right" === n && f || "top" === n && m || "bottom" === n && g,
                                            y = -1 !== ["top", "bottom"].indexOf(n),
                                            w = !!t.flipVariations && (y && "start" === r && p || y && "end" === r && f || !y && "start" === r && m || !y && "end" === r && g),
                                            b = !!t.flipVariationsByContent && (y && "start" === r && f || y && "end" === r && p || !y && "start" === r && g || !y && "end" === r && m),
                                            _ = w || b;
                                        (h || v || _) && (e.flipped = !0, (h || v) && (n = s[l + 1]), _ && (r = function(e) {
                                            return "end" === e ? "start" : "start" === e ? "end" : e
                                        }(r)), e.placement = n + (r ? "-" + r : ""), e.offsets.popper = k({}, e.offsets.popper, M(e.instance.popper, e.offsets.reference, e.placement)), e = j(e.instance.modifiers, e, "flip"))
                                    })), e
                                },
                                behavior: "flip",
                                padding: 5,
                                boundariesElement: "viewport",
                                flipVariations: !1,
                                flipVariationsByContent: !1
                            },
                            inner: {
                                order: 700,
                                enabled: !1,
                                fn: function(e) {
                                    var t = e.placement,
                                        i = t.split("-")[0],
                                        n = e.offsets,
                                        o = n.popper,
                                        r = n.reference,
                                        s = -1 !== ["left", "right"].indexOf(i),
                                        a = -1 === ["top", "left"].indexOf(i);
                                    return o[s ? "left" : "top"] = r[i] - (a ? o[s ? "width" : "height"] : 0), e.placement = F(t), e.offsets.popper = $(o), e
                                }
                            },
                            hide: {
                                order: 800,
                                enabled: !0,
                                fn: function(e) {
                                    if (!G(e.instance.modifiers, "hide", "preventOverflow")) return e;
                                    var t = e.offsets.reference,
                                        i = N(e.instance.modifiers, (function(e) {
                                            return "preventOverflow" === e.name
                                        })).boundaries;
                                    if (t.bottom < i.top || t.left > i.right || t.top > i.bottom || t.right < i.left) {
                                        if (!0 === e.hide) return e;
                                        e.hide = !0, e.attributes["x-out-of-boundaries"] = ""
                                    } else {
                                        if (!1 === e.hide) return e;
                                        e.hide = !1, e.attributes["x-out-of-boundaries"] = !1
                                    }
                                    return e
                                }
                            },
                            computeStyle: {
                                order: 850,
                                enabled: !0,
                                fn: function(e, t) {
                                    var i = t.x,
                                        n = t.y,
                                        o = e.offsets.popper,
                                        r = N(e.instance.modifiers, (function(e) {
                                            return "applyStyle" === e.name
                                        })).gpuAcceleration;
                                    void 0 !== r && console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");
                                    var s = void 0 !== r ? r : t.gpuAcceleration,
                                        a = p(e.instance.popper),
                                        l = T(a),
                                        c = {
                                            position: o.position
                                        },
                                        u = function(e, t) {
                                            var i = e.offsets,
                                                n = i.popper,
                                                o = i.reference,
                                                r = Math.round,
                                                s = Math.floor,
                                                a = function(e) {
                                                    return e
                                                },
                                                l = r(o.width),
                                                c = r(n.width),
                                                u = -1 !== ["left", "right"].indexOf(e.placement),
                                                d = -1 !== e.placement.indexOf("-"),
                                                h = t ? u || d || l % 2 == c % 2 ? r : s : a,
                                                p = t ? r : a;
                                            return {
                                                left: h(l % 2 == 1 && c % 2 == 1 && !d && t ? n.left - 1 : n.left),
                                                top: p(n.top),
                                                bottom: p(n.bottom),
                                                right: h(n.right)
                                            }
                                        }(e, window.devicePixelRatio < 2 || !X),
                                        d = "bottom" === i ? "top" : "bottom",
                                        h = "right" === n ? "left" : "right",
                                        f = B("transform"),
                                        m = void 0,
                                        g = void 0;
                                    if (g = "bottom" === d ? "HTML" === a.nodeName ? -a.clientHeight + u.bottom : -l.height + u.bottom : u.top, m = "right" === h ? "HTML" === a.nodeName ? -a.clientWidth + u.right : -l.width + u.right : u.left, s && f) c[f] = "translate3d(" + m + "px, " + g + "px, 0)", c[d] = 0, c[h] = 0, c.willChange = "transform";
                                    else {
                                        var v = "bottom" === d ? -1 : 1,
                                            y = "right" === h ? -1 : 1;
                                        c[d] = g * v, c[h] = m * y, c.willChange = d + ", " + h
                                    }
                                    var w = {
                                        "x-placement": e.placement
                                    };
                                    return e.attributes = k({}, w, e.attributes), e.styles = k({}, c, e.styles), e.arrowStyles = k({}, e.offsets.arrow, e.arrowStyles), e
                                },
                                gpuAcceleration: !0,
                                x: "bottom",
                                y: "right"
                            },
                            applyStyle: {
                                order: 900,
                                enabled: !0,
                                fn: function(e) {
                                    var t, i;
                                    return Q(e.instance.popper, e.styles), t = e.instance.popper, i = e.attributes, Object.keys(i).forEach((function(e) {
                                        !1 !== i[e] ? t.setAttribute(e, i[e]) : t.removeAttribute(e)
                                    })), e.arrowElement && Object.keys(e.arrowStyles).length && Q(e.arrowElement, e.arrowStyles), e
                                },
                                onLoad: function(e, t, i, n, o) {
                                    var r = P(o, t, e, i.positionFixed),
                                        s = L(i.placement, r, t, e, i.modifiers.flip.boundariesElement, i.modifiers.flip.padding);
                                    return t.setAttribute("x-placement", s), Q(t, {
                                        position: i.positionFixed ? "fixed" : "absolute"
                                    }), i
                                },
                                gpuAcceleration: void 0
                            }
                        }
                    },
                    se = function() {
                        function e(t, i) {
                            var n = this,
                                s = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                            _(this, e), this.scheduleUpdate = function() {
                                return requestAnimationFrame(n.update)
                            }, this.update = o(this.update.bind(this)), this.options = k({}, e.Defaults, s), this.state = {
                                isDestroyed: !1,
                                isCreated: !1,
                                scrollParents: []
                            }, this.reference = t && t.jquery ? t[0] : t, this.popper = i && i.jquery ? i[0] : i, this.options.modifiers = {}, Object.keys(k({}, e.Defaults.modifiers, s.modifiers)).forEach((function(t) {
                                n.options.modifiers[t] = k({}, e.Defaults.modifiers[t] || {}, s.modifiers ? s.modifiers[t] : {})
                            })), this.modifiers = Object.keys(this.options.modifiers).map((function(e) {
                                return k({
                                    name: e
                                }, n.options.modifiers[e])
                            })).sort((function(e, t) {
                                return e.order - t.order
                            })), this.modifiers.forEach((function(e) {
                                e.enabled && r(e.onLoad) && e.onLoad(n.reference, n.popper, n.options, e, n.state)
                            })), this.update();
                            var a = this.options.eventsEnabled;
                            a && this.enableEventListeners(), this.state.eventsEnabled = a
                        }
                        return x(e, [{
                            key: "update",
                            value: function() {
                                return R.call(this)
                            }
                        }, {
                            key: "destroy",
                            value: function() {
                                return q.call(this)
                            }
                        }, {
                            key: "enableEventListeners",
                            value: function() {
                                return V.call(this)
                            }
                        }, {
                            key: "disableEventListeners",
                            value: function() {
                                return K.call(this)
                            }
                        }]), e
                    }();
                se.Utils = ("undefined" != typeof window ? window : e).PopperUtils, se.placements = Z, se.Defaults = re, t.default = se
            }.call(this, i("yLpj"))
    },
    "9Wh1": function(e, t, i) {
        "use strict";
        i.r(t);
        var n = i("EVdn"),
            o = i.n(n),
            r = i("PSD3"),
            s = i.n(r),
            a = (i("hp4Z"), i("/X3o")),
            l = i.n(a),
            c = i("hUol"),
            u = i.n(c);
        window.$ = window.jQuery = o.a, window.Swal = s.a, window.Favico = l.a, window.toastr = u.a
    },
    APzL: function(e, t) {
        function i(e) {
            return (i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            } : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            })(e)
        }
        var n;
        $.extend($.fn, {
            validate: function(e) {
                if (this.length) {
                    var t = $.data(this[0], "validator");
                    return t || (this.attr("novalidate", "novalidate"), t = new $.validator(e, this[0]), $.data(this[0], "validator", t), t.settings.onsubmit && (this.on("click.validate", ":submit", (function(e) {
                        t.submitButton = e.currentTarget, $(this).hasClass("cancel") && (t.cancelSubmit = !0), void 0 !== $(this).attr("formnovalidate") && (t.cancelSubmit = !0)
                    })), this.on("submit.validate", (function(e) {
                        function i() {
                            var i, n;
                            return t.submitButton && (t.settings.submitHandler || t.formSubmitted) && (i = $("<input type='hidden'/>").attr("name", t.submitButton.name).val($(t.submitButton).val()).appendTo(t.currentForm)), !(t.settings.submitHandler && !t.settings.debug) || (n = t.settings.submitHandler.call(t, t.currentForm, e), i && i.remove(), void 0 !== n && n)
                        }
                        return t.settings.debug && e.preventDefault(), t.cancelSubmit ? (t.cancelSubmit = !1, i()) : t.form() ? t.pendingRequest ? (t.formSubmitted = !0, !1) : i() : (t.focusInvalid(), !1)
                    }))), t)
                }
                e && e.debug && window.console && console.warn("Nothing selected, can't validate, returning nothing.")
            },
            valid: function() {
                var e, t, i;
                return $(this[0]).is("form") ? e = this.validate().form() : (i = [], e = !0, t = $(this[0].form).validate(), this.each((function() {
                    e = t.element(this) && e, e || (i = i.concat(t.errorList))
                })), t.errorList = i), e
            },
            rules: function(e, t) {
                var i, n, o, r, s, a, l = this[0],
                    c = void 0 !== this.attr("contenteditable") && "false" !== this.attr("contenteditable");
                if (null != l && (!l.form && c && (l.form = this.closest("form")[0], l.name = this.attr("name")), null != l.form)) {
                    if (e) switch (n = (i = $.data(l.form, "validator").settings).rules, o = $.validator.staticRules(l), e) {
                        case "add":
                            $.extend(o, $.validator.normalizeRule(t)), delete o.messages, n[l.name] = o, t.messages && (i.messages[l.name] = $.extend(i.messages[l.name], t.messages));
                            break;
                        case "remove":
                            return t ? (a = {}, $.each(t.split(/\s/), (function(e, t) {
                                a[t] = o[t], delete o[t]
                            })), a) : (delete n[l.name], o)
                    }
                    return (r = $.validator.normalizeRules($.extend({}, $.validator.classRules(l), $.validator.attributeRules(l), $.validator.dataRules(l), $.validator.staticRules(l)), l)).required && (s = r.required, delete r.required, r = $.extend({
                        required: s
                    }, r)), r.remote && (s = r.remote, delete r.remote, r = $.extend(r, {
                        remote: s
                    })), r
                }
            }
        }), $.extend($.expr.pseudos || $.expr[":"], {
            blank: function(e) {
                return !$.trim("" + $(e).val())
            },
            filled: function(e) {
                var t = $(e).val();
                return null !== t && !!$.trim("" + t)
            },
            unchecked: function(e) {
                return !$(e).prop("checked")
            }
        }), $.validator = function(e, t) {
            this.settings = $.extend(!0, {}, $.validator.defaults, e), this.currentForm = t, this.init()
        }, $.validator.format = function(e, t) {
            return 1 === arguments.length ? function() {
                var t = $.makeArray(arguments);
                return t.unshift(e), $.validator.format.apply(this, t)
            } : (void 0 === t || (arguments.length > 2 && t.constructor !== Array && (t = $.makeArray(arguments).slice(1)), t.constructor !== Array && (t = [t]), $.each(t, (function(t, i) {
                e = e.replace(new RegExp("\\{" + t + "\\}", "g"), (function() {
                    return i
                }))
            }))), e)
        }, $.extend($.validator, {
            defaults: {
                messages: {},
                groups: {},
                rules: {},
                errorClass: "error",
                pendingClass: "pending",
                validClass: "valid",
                errorElement: "label",
                focusCleanup: !1,
                focusInvalid: !0,
                errorContainer: $([]),
                errorLabelContainer: $([]),
                onsubmit: !0,
                ignore: ":hidden",
                ignoreTitle: !1,
                onfocusin: function(e) {
                    this.lastActive = e, this.settings.focusCleanup && (this.settings.unhighlight && this.settings.unhighlight.call(this, e, this.settings.errorClass, this.settings.validClass), this.hideThese(this.errorsFor(e)))
                },
                onfocusout: function(e) {
                    this.checkable(e) || !(e.name in this.submitted) && this.optional(e) || this.element(e)
                },
                onkeyup: function(e, t) {
                    9 === t.which && "" === this.elementValue(e) || -1 !== $.inArray(t.keyCode, [16, 17, 18, 20, 35, 36, 37, 38, 39, 40, 45, 144, 225]) || (e.name in this.submitted || e.name in this.invalid) && this.element(e)
                },
                onclick: function(e) {
                    e.name in this.submitted ? this.element(e) : e.parentNode.name in this.submitted && this.element(e.parentNode)
                },
                highlight: function(e, t, i) {
                    "radio" === e.type ? this.findByName(e.name).addClass(t).removeClass(i) : $(e).addClass(t).removeClass(i)
                },
                unhighlight: function(e, t, i) {
                    "radio" === e.type ? this.findByName(e.name).removeClass(t).addClass(i) : $(e).removeClass(t).addClass(i)
                }
            },
            setDefaults: function(e) {
                $.extend($.validator.defaults, e)
            },
            messages: {
                required: "This field is required.",
                remote: "Please fix this field.",
                email: "Please enter a valid email address.",
                url: "Please enter a valid URL.",
                date: "Please enter a valid date.",
                dateISO: "Please enter a valid date (ISO).",
                number: "Please enter a valid number.",
                digits: "Please enter only digits.",
                equalTo: "Please enter the same value again.",
                maxlength: $.validator.format("Please enter no more than {0} characters."),
                minlength: $.validator.format("Please enter at least {0} characters."),
                rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
                range: $.validator.format("Please enter a value between {0} and {1}."),
                max: $.validator.format("Please enter a value less than or equal to {0}."),
                min: $.validator.format("Please enter a value greater than or equal to {0}."),
                step: $.validator.format("Please enter a multiple of {0}.")
            },
            autoCreateRanges: !1,
            prototype: {
                init: function() {
                    this.labelContainer = $(this.settings.errorLabelContainer), this.errorContext = this.labelContainer.length && this.labelContainer || $(this.currentForm), this.containers = $(this.settings.errorContainer).add(this.settings.errorLabelContainer), this.submitted = {}, this.valueCache = {}, this.pendingRequest = 0, this.pending = {}, this.invalid = {}, this.reset();
                    var e, t = this.currentForm,
                        i = this.groups = {};

                    function n(e) {
                        var i = void 0 !== $(this).attr("contenteditable") && "false" !== $(this).attr("contenteditable");
                        if (!this.form && i && (this.form = $(this).closest("form")[0], this.name = $(this).attr("name")), t === this.form) {
                            var n = $.data(this.form, "validator"),
                                o = "on" + e.type.replace(/^validate/, ""),
                                r = n.settings;
                            r[o] && !$(this).is(r.ignore) && r[o].call(n, this, e)
                        }
                    }
                    $.each(this.settings.groups, (function(e, t) {
                        "string" == typeof t && (t = t.split(/\s/)), $.each(t, (function(t, n) {
                            i[n] = e
                        }))
                    })), e = this.settings.rules, $.each(e, (function(t, i) {
                        e[t] = $.validator.normalizeRule(i)
                    })), $(this.currentForm).on("focusin.validate focusout.validate keyup.validate", ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable], [type='button']", n).on("click.validate", "select, option, [type='radio'], [type='checkbox']", n), this.settings.invalidHandler && $(this.currentForm).on("invalid-form.validate", this.settings.invalidHandler)
                },
                form: function() {
                    return this.checkForm(), $.extend(this.submitted, this.errorMap), this.invalid = $.extend({}, this.errorMap), this.valid() || $(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid()
                },
                checkForm: function() {
                    this.prepareForm();
                    for (var e = 0, t = this.currentElements = this.elements(); t[e]; e++) this.check(t[e]);
                    return this.valid()
                },
                element: function(e) {
                    var t, i, n = this.clean(e),
                        o = this.validationTargetFor(n),
                        r = this,
                        s = !0;
                    return void 0 === o ? delete this.invalid[n.name] : (this.prepareElement(o), this.currentElements = $(o), (i = this.groups[o.name]) && $.each(this.groups, (function(e, t) {
                        t === i && e !== o.name && (n = r.validationTargetFor(r.clean(r.findByName(e)))) && n.name in r.invalid && (r.currentElements.push(n), s = r.check(n) && s)
                    })), t = !1 !== this.check(o), s = s && t, this.invalid[o.name] = !t, this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), $(e).attr("aria-invalid", !t)), s
                },
                showErrors: function(e) {
                    if (e) {
                        var t = this;
                        $.extend(this.errorMap, e), this.errorList = $.map(this.errorMap, (function(e, i) {
                            return {
                                message: e,
                                element: t.findByName(i)[0]
                            }
                        })), this.successList = $.grep(this.successList, (function(t) {
                            return !(t.name in e)
                        }))
                    }
                    this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors()
                },
                resetForm: function() {
                    $.fn.resetForm && $(this.currentForm).resetForm(), this.invalid = {}, this.submitted = {}, this.prepareForm(), this.hideErrors();
                    var e = this.elements().removeData("previousValue").removeAttr("aria-invalid");
                    this.resetElements(e)
                },
                resetElements: function(e) {
                    var t;
                    if (this.settings.unhighlight)
                        for (t = 0; e[t]; t++) this.settings.unhighlight.call(this, e[t], this.settings.errorClass, ""), this.findByName(e[t].name).removeClass(this.settings.validClass);
                    else e.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)
                },
                numberOfInvalids: function() {
                    return this.objectLength(this.invalid)
                },
                objectLength: function(e) {
                    var t, i = 0;
                    for (t in e) void 0 !== e[t] && null !== e[t] && !1 !== e[t] && i++;
                    return i
                },
                hideErrors: function() {
                    this.hideThese(this.toHide)
                },
                hideThese: function(e) {
                    e.not(this.containers).text(""), this.addWrapper(e).hide()
                },
                valid: function() {
                    return 0 === this.size()
                },
                size: function() {
                    return this.errorList.length
                },
                focusInvalid: function() {
                    if (this.settings.focusInvalid) try {
                        $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").trigger("focus").trigger("focusin")
                    } catch (e) {}
                },
                findLastActive: function() {
                    var e = this.lastActive;
                    return e && 1 === $.grep(this.errorList, (function(t) {
                        return t.element.name === e.name
                    })).length && e
                },
                elements: function() {
                    var e = this,
                        t = {};
                    return $(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter((function() {
                        var i = this.name || $(this).attr("name"),
                            n = void 0 !== $(this).attr("contenteditable") && "false" !== $(this).attr("contenteditable");
                        return !i && e.settings.debug && window.console && console.error("%o has no name assigned", this), n && (this.form = $(this).closest("form")[0], this.name = i), this.form === e.currentForm && (!(i in t || !e.objectLength($(this).rules())) && (t[i] = !0, !0))
                    }))
                },
                clean: function(e) {
                    return $(e)[0]
                },
                errors: function() {
                    var e = this.settings.errorClass.split(" ").join(".");
                    return $(this.settings.errorElement + "." + e, this.errorContext)
                },
                resetInternals: function() {
                    this.successList = [], this.errorList = [], this.errorMap = {}, this.toShow = $([]), this.toHide = $([])
                },
                reset: function() {
                    this.resetInternals(), this.currentElements = $([])
                },
                prepareForm: function() {
                    this.reset(), this.toHide = this.errors().add(this.containers)
                },
                prepareElement: function(e) {
                    this.reset(), this.toHide = this.errorsFor(e)
                },
                elementValue: function(e) {
                    var t, i, n = $(e),
                        o = e.type,
                        r = void 0 !== n.attr("contenteditable") && "false" !== n.attr("contenteditable");
                    return "radio" === o || "checkbox" === o ? this.findByName(e.name).filter(":checked").val() : "number" === o && void 0 !== e.validity ? e.validity.badInput ? "NaN" : n.val() : (t = r ? n.text() : n.val(), "file" === o ? "C:\\fakepath\\" === t.substr(0, 12) ? t.substr(12) : (i = t.lastIndexOf("/")) >= 0 || (i = t.lastIndexOf("\\")) >= 0 ? t.substr(i + 1) : t : "string" == typeof t ? t.replace(/\r/g, "") : t)
                },
                check: function(e) {
                    e = this.validationTargetFor(this.clean(e));
                    var t, i, n, o, r = $(e).rules(),
                        s = $.map(r, (function(e, t) {
                            return t
                        })).length,
                        a = !1,
                        l = this.elementValue(e);
                    for (i in "function" == typeof r.normalizer ? o = r.normalizer : "function" == typeof this.settings.normalizer && (o = this.settings.normalizer), o && (l = o.call(e, l), delete r.normalizer), r) {
                        n = {
                            method: i,
                            parameters: r[i]
                        };
                        try {
                            if ("dependency-mismatch" === (t = $.validator.methods[i].call(this, l, e, n.parameters)) && 1 === s) {
                                a = !0;
                                continue
                            }
                            if (a = !1, "pending" === t) return void(this.toHide = this.toHide.not(this.errorsFor(e)));
                            if (!t) return this.formatAndAdd(e, n), !1
                        } catch (t) {
                            throw this.settings.debug && window.console && console.log("Exception occurred when checking element " + e.id + ", check the '" + n.method + "' method.", t), t instanceof TypeError && (t.message += ".  Exception occurred when checking element " + e.id + ", check the '" + n.method + "' method."), t
                        }
                    }
                    if (!a) return this.objectLength(r) && this.successList.push(e), !0
                },
                customDataMessage: function(e, t) {
                    return $(e).data("msg" + t.charAt(0).toUpperCase() + t.substring(1).toLowerCase()) || $(e).data("msg")
                },
                customMessage: function(e, t) {
                    var i = this.settings.messages[e];
                    return i && (i.constructor === String ? i : i[t])
                },
                findDefined: function() {
                    for (var e = 0; e < arguments.length; e++)
                        if (void 0 !== arguments[e]) return arguments[e]
                },
                defaultMessage: function(e, t) {
                    "string" == typeof t && (t = {
                        method: t
                    });
                    var i = this.findDefined(this.customMessage(e.name, t.method), this.customDataMessage(e, t.method), !this.settings.ignoreTitle && e.title || void 0, $.validator.messages[t.method], "<strong>Warning: No message defined for " + e.name + "</strong>"),
                        n = /\$?\{(\d+)\}/g;
                    return "function" == typeof i ? i = i.call(this, t.parameters, e) : n.test(i) && (i = $.validator.format(i.replace(n, "{$1}"), t.parameters)), i
                },
                formatAndAdd: function(e, t) {
                    var i = this.defaultMessage(e, t);
                    this.errorList.push({
                        message: i,
                        element: e,
                        method: t.method
                    }), this.errorMap[e.name] = i, this.submitted[e.name] = i
                },
                addWrapper: function(e) {
                    return this.settings.wrapper && (e = e.add(e.parent(this.settings.wrapper))), e
                },
                defaultShowErrors: function() {
                    var e, t, i;
                    for (e = 0; this.errorList[e]; e++) i = this.errorList[e], this.settings.highlight && this.settings.highlight.call(this, i.element, this.settings.errorClass, this.settings.validClass), this.showLabel(i.element, i.message);
                    if (this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success)
                        for (e = 0; this.successList[e]; e++) this.showLabel(this.successList[e]);
                    if (this.settings.unhighlight)
                        for (e = 0, t = this.validElements(); t[e]; e++) this.settings.unhighlight.call(this, t[e], this.settings.errorClass, this.settings.validClass);
                    this.toHide = this.toHide.not(this.toShow), this.hideErrors(), this.addWrapper(this.toShow).show()
                },
                validElements: function() {
                    return this.currentElements.not(this.invalidElements())
                },
                invalidElements: function() {
                    return $(this.errorList).map((function() {
                        return this.element
                    }))
                },
                showLabel: function(e, t) {
                    var i, n, o, r, s = this.errorsFor(e),
                        a = this.idOrName(e),
                        l = $(e).attr("aria-describedby");
                    s.length ? (s.removeClass(this.settings.validClass).addClass(this.settings.errorClass), s.html(t)) : (i = s = $("<" + this.settings.errorElement + ">").attr("id", a + "-error").addClass(this.settings.errorClass).html(t || ""), this.settings.wrapper && (i = s.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()), this.labelContainer.length ? this.labelContainer.append(i) : this.settings.errorPlacement ? this.settings.errorPlacement.call(this, i, $(e)) : i.insertAfter(e), s.is("label") ? s.attr("for", a) : 0 === s.parents("label[for='" + this.escapeCssMeta(a) + "']").length && (o = s.attr("id"), l ? l.match(new RegExp("\\b" + this.escapeCssMeta(o) + "\\b")) || (l += " " + o) : l = o, $(e).attr("aria-describedby", l), (n = this.groups[e.name]) && (r = this, $.each(r.groups, (function(e, t) {
                        t === n && $("[name='" + r.escapeCssMeta(e) + "']", r.currentForm).attr("aria-describedby", s.attr("id"))
                    }))))), !t && this.settings.success && (s.text(""), "string" == typeof this.settings.success ? s.addClass(this.settings.success) : this.settings.success(s, e)), this.toShow = this.toShow.add(s)
                },
                errorsFor: function(e) {
                    var t = this.escapeCssMeta(this.idOrName(e)),
                        i = $(e).attr("aria-describedby"),
                        n = "label[for='" + t + "'], label[for='" + t + "'] *";
                    return i && (n = n + ", #" + this.escapeCssMeta(i).replace(/\s+/g, ", #")), this.errors().filter(n)
                },
                escapeCssMeta: function(e) {
                    return e.replace(/([\\!"#$%&'()*+,./:;<=>?@\[\]^`{|}~])/g, "\\$1")
                },
                idOrName: function(e) {
                    return this.groups[e.name] || (this.checkable(e) ? e.name : e.id || e.name)
                },
                validationTargetFor: function(e) {
                    return this.checkable(e) && (e = this.findByName(e.name)), $(e).not(this.settings.ignore)[0]
                },
                checkable: function(e) {
                    return /radio|checkbox/i.test(e.type)
                },
                findByName: function(e) {
                    return $(this.currentForm).find("[name='" + this.escapeCssMeta(e) + "']")
                },
                getLength: function(e, t) {
                    switch (t.nodeName.toLowerCase()) {
                        case "select":
                            return $("option:selected", t).length;
                        case "input":
                            if (this.checkable(t)) return this.findByName(t.name).filter(":checked").length
                    }
                    return e.length
                },
                depend: function(e, t) {
                    return !this.dependTypes[i(e)] || this.dependTypes[i(e)](e, t)
                },
                dependTypes: {
                    boolean: function(e) {
                        return e
                    },
                    string: function(e, t) {
                        return !!$(e, t.form).length
                    },
                    function: function(e, t) {
                        return e(t)
                    }
                },
                optional: function(e) {
                    var t = this.elementValue(e);
                    return !$.validator.methods.required.call(this, t, e) && "dependency-mismatch"
                },
                startRequest: function(e) {
                    this.pending[e.name] || (this.pendingRequest++, $(e).addClass(this.settings.pendingClass), this.pending[e.name] = !0)
                },
                stopRequest: function(e, t) {
                    this.pendingRequest--, this.pendingRequest < 0 && (this.pendingRequest = 0), delete this.pending[e.name], $(e).removeClass(this.settings.pendingClass), t && 0 === this.pendingRequest && this.formSubmitted && this.form() ? ($(this.currentForm).submit(), this.submitButton && $("input:hidden[name='" + this.submitButton.name + "']", this.currentForm).remove(), this.formSubmitted = !1) : !t && 0 === this.pendingRequest && this.formSubmitted && ($(this.currentForm).triggerHandler("invalid-form", [this]), this.formSubmitted = !1)
                },
                previousValue: function(e, t) {
                    return t = "string" == typeof t && t || "remote", $.data(e, "previousValue") || $.data(e, "previousValue", {
                        old: null,
                        valid: !0,
                        message: this.defaultMessage(e, {
                            method: t
                        })
                    })
                },
                destroy: function() {
                    this.resetForm(), $(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur").find(".validate-lessThan-blur").off(".validate-lessThan").removeClass("validate-lessThan-blur").find(".validate-lessThanEqual-blur").off(".validate-lessThanEqual").removeClass("validate-lessThanEqual-blur").find(".validate-greaterThanEqual-blur").off(".validate-greaterThanEqual").removeClass("validate-greaterThanEqual-blur").find(".validate-greaterThan-blur").off(".validate-greaterThan").removeClass("validate-greaterThan-blur")
                }
            },
            classRuleSettings: {
                required: {
                    required: !0
                },
                email: {
                    email: !0
                },
                url: {
                    url: !0
                },
                date: {
                    date: !0
                },
                dateISO: {
                    dateISO: !0
                },
                number: {
                    number: !0
                },
                digits: {
                    digits: !0
                },
                creditcard: {
                    creditcard: !0
                }
            },
            addClassRules: function(e, t) {
                e.constructor === String ? this.classRuleSettings[e] = t : $.extend(this.classRuleSettings, e)
            },
            classRules: function(e) {
                var t = {},
                    i = $(e).attr("class");
                return i && $.each(i.split(" "), (function() {
                    this in $.validator.classRuleSettings && $.extend(t, $.validator.classRuleSettings[this])
                })), t
            },
            normalizeAttributeRule: function(e, t, i, n) {
                /min|max|step/.test(i) && (null === t || /number|range|text/.test(t)) && (n = Number(n), isNaN(n) && (n = void 0)), n || 0 === n ? e[i] = n : t === i && "range" !== t && (e[i] = !0)
            },
            attributeRules: function(e) {
                var t, i, n = {},
                    o = $(e),
                    r = e.getAttribute("type");
                for (t in $.validator.methods) "required" === t ? ("" === (i = e.getAttribute(t)) && (i = !0), i = !!i) : i = o.attr(t), this.normalizeAttributeRule(n, r, t, i);
                return n.maxlength && /-1|2147483647|524288/.test(n.maxlength) && delete n.maxlength, n
            },
            dataRules: function(e) {
                var t, i, n = {},
                    o = $(e),
                    r = e.getAttribute("type");
                for (t in $.validator.methods) "" === (i = o.data("rule" + t.charAt(0).toUpperCase() + t.substring(1).toLowerCase())) && (i = !0), this.normalizeAttributeRule(n, r, t, i);
                return n
            },
            staticRules: function(e) {
                var t = {},
                    i = $.data(e.form, "validator");
                return i.settings.rules && (t = $.validator.normalizeRule(i.settings.rules[e.name]) || {}), t
            },
            normalizeRules: function(e, t) {
                return $.each(e, (function(n, o) {
                    if (!1 !== o) {
                        if (o.param || o.depends) {
                            var r = !0;
                            switch (i(o.depends)) {
                                case "string":
                                    r = !!$(o.depends, t.form).length;
                                    break;
                                case "function":
                                    r = o.depends.call(t, t)
                            }
                            r ? e[n] = void 0 === o.param || o.param : ($.data(t.form, "validator").resetElements($(t)), delete e[n])
                        }
                    } else delete e[n]
                })), $.each(e, (function(i, n) {
                    e[i] = $.isFunction(n) && "normalizer" !== i ? n(t) : n
                })), $.each(["minlength", "maxlength"], (function() {
                    e[this] && (e[this] = Number(e[this]))
                })), $.each(["rangelength", "range"], (function() {
                    var t;
                    e[this] && ($.isArray(e[this]) ? e[this] = [Number(e[this][0]), Number(e[this][1])] : "string" == typeof e[this] && (t = e[this].replace(/[\[\]]/g, "").split(/[\s,]+/), e[this] = [Number(t[0]), Number(t[1])]))
                })), $.validator.autoCreateRanges && (null != e.min && null != e.max && (e.range = [e.min, e.max], delete e.min, delete e.max), null != e.minlength && null != e.maxlength && (e.rangelength = [e.minlength, e.maxlength], delete e.minlength, delete e.maxlength)), e
            },
            normalizeRule: function(e) {
                if ("string" == typeof e) {
                    var t = {};
                    $.each(e.split(/\s/), (function() {
                        t[this] = !0
                    })), e = t
                }
                return e
            },
            addMethod: function(e, t, i) {
                $.validator.methods[e] = t, $.validator.messages[e] = void 0 !== i ? i : $.validator.messages[e], t.length < 3 && $.validator.addClassRules(e, $.validator.normalizeRule(e))
            },
            methods: {
                required: function(e, t, i) {
                    if (!this.depend(i, t)) return "dependency-mismatch";
                    if ("select" === t.nodeName.toLowerCase()) {
                        var n = $(t).val();
                        return n && n.length > 0
                    }
                    return this.checkable(t) ? this.getLength(e, t) > 0 : null != e && e.length > 0
                },
                email: function(e, t) {
                    return this.optional(t) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(e)
                },
                url: function(e, t) {
                    return this.optional(t) || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(e)
                },
                date: (n = !1, function(e, t) {
                    return n || (n = !0, this.settings.debug && window.console && console.warn("The `date` method is deprecated and will be removed in version '2.0.0'.\nPlease don't use it, since it relies on the Date constructor, which\nbehaves very differently across browsers and locales. Use `dateISO`\ninstead or one of the locale specific methods in `localizations/`\nand `additional-methods.js`.")), this.optional(t) || !/Invalid|NaN/.test(new Date(e).toString())
                }),
                dateISO: function(e, t) {
                    return this.optional(t) || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(e)
                },
                number: function(e, t) {
                    return this.optional(t) || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(e)
                },
                digits: function(e, t) {
                    return this.optional(t) || /^\d+$/.test(e)
                },
                minlength: function(e, t, i) {
                    var n = $.isArray(e) ? e.length : this.getLength(e, t);
                    return this.optional(t) || n >= i
                },
                maxlength: function(e, t, i) {
                    var n = $.isArray(e) ? e.length : this.getLength(e, t);
                    return this.optional(t) || n <= i
                },
                rangelength: function(e, t, i) {
                    var n = $.isArray(e) ? e.length : this.getLength(e, t);
                    return this.optional(t) || n >= i[0] && n <= i[1]
                },
                min: function(e, t, i) {
                    return this.optional(t) || e >= i
                },
                max: function(e, t, i) {
                    return this.optional(t) || e <= i
                },
                range: function(e, t, i) {
                    return this.optional(t) || e >= i[0] && e <= i[1]
                },
                step: function(e, t, i) {
                    var n, o = $(t).attr("type"),
                        r = "Step attribute on input type " + o + " is not supported.",
                        s = new RegExp("\\b" + o + "\\b"),
                        a = function(e) {
                            var t = ("" + e).match(/(?:\.(\d+))?$/);
                            return t && t[1] ? t[1].length : 0
                        },
                        l = function(e) {
                            return Math.round(e * Math.pow(10, n))
                        },
                        c = !0;
                    if (o && !s.test(["text", "number", "range"].join())) throw new Error(r);
                    return n = a(i), (a(e) > n || l(e) % l(i) != 0) && (c = !1), this.optional(t) || c
                },
                equalTo: function(e, t, i) {
                    var n = $(i);
                    return this.settings.onfocusout && n.not(".validate-equalTo-blur").length && n.addClass("validate-equalTo-blur").on("blur.validate-equalTo", (function() {
                        $(t).valid()
                    })), e === n.val()
                },
                remote: function(e, t, i, n) {
                    if (this.optional(t)) return "dependency-mismatch";
                    n = "string" == typeof n && n || "remote";
                    var o, r, s, a = this.previousValue(t, n);
                    return this.settings.messages[t.name] || (this.settings.messages[t.name] = {}), a.originalMessage = a.originalMessage || this.settings.messages[t.name][n], this.settings.messages[t.name][n] = a.message, i = "string" == typeof i && {
                        url: i
                    } || i, s = $.param($.extend({
                        data: e
                    }, i.data)), a.old === s ? a.valid : (a.old = s, o = this, this.startRequest(t), (r = {})[t.name] = e, $.ajax($.extend(!0, {
                        mode: "abort",
                        port: "validate" + t.name,
                        dataType: "json",
                        data: r,
                        context: o.currentForm,
                        success: function(i) {
                            var r, s, l, c = !0 === i || "true" === i;
                            o.settings.messages[t.name][n] = a.originalMessage, c ? (l = o.formSubmitted, o.resetInternals(), o.toHide = o.errorsFor(t), o.formSubmitted = l, o.successList.push(t), o.invalid[t.name] = !1, o.showErrors()) : (r = {}, s = i || o.defaultMessage(t, {
                                method: n,
                                parameters: e
                            }), r[t.name] = a.message = s, o.invalid[t.name] = !0, o.showErrors(r)), a.valid = c, o.stopRequest(t, c)
                        }
                    }, i)), "pending")
                }
            }
        })
    },
    B9Yq: function(e, t) {
        e.exports = function() {
            throw new Error("define cannot be used indirect")
        }
    },
    BtCW: function(e, t) {
        function i(e) {
            return (i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            } : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            })(e)
        }
        var n, o, r;
        ! function(e, t, n, o) {
            function r(t, i) {
                this.settings = null, this.options = e.extend({}, r.Defaults, i), this.$element = e(t), this._handlers = {}, this._plugins = {}, this._supress = {}, this._current = null, this._speed = null, this._coordinates = [], this._breakpoint = null, this._width = null, this._items = [], this._clones = [], this._mergers = [], this._widths = [], this._invalidated = {}, this._pipe = [], this._drag = {
                    time: null,
                    target: null,
                    pointer: null,
                    stage: {
                        start: null,
                        current: null
                    },
                    direction: null
                }, this._states = {
                    current: {},
                    tags: {
                        initializing: ["busy"],
                        animating: ["busy"],
                        dragging: ["interacting"]
                    }
                }, e.each(["onResize", "onThrottledResize"], e.proxy((function(t, i) {
                    this._handlers[i] = e.proxy(this[i], this)
                }), this)), e.each(r.Plugins, e.proxy((function(e, t) {
                    this._plugins[e.charAt(0).toLowerCase() + e.slice(1)] = new t(this)
                }), this)), e.each(r.Workers, e.proxy((function(t, i) {
                    this._pipe.push({
                        filter: i.filter,
                        run: e.proxy(i.run, this)
                    })
                }), this)), this.setup(), this.initialize()
            }
            r.Defaults = {
                items: 3,
                loop: !1,
                center: !1,
                rewind: !1,
                checkVisibility: !0,
                mouseDrag: !0,
                touchDrag: !0,
                pullDrag: !0,
                freeDrag: !1,
                margin: 0,
                stagePadding: 0,
                merge: !1,
                mergeFit: !0,
                autoWidth: !1,
                startPosition: 0,
                rtl: !1,
                smartSpeed: 250,
                fluidSpeed: !1,
                dragEndSpeed: !1,
                responsive: {},
                responsiveRefreshRate: 200,
                responsiveBaseElement: t,
                fallbackEasing: "swing",
                slideTransition: "",
                info: !1,
                nestedItemSelector: !1,
                itemElement: "div",
                stageElement: "div",
                refreshClass: "owl-refresh",
                loadedClass: "owl-loaded",
                loadingClass: "owl-loading",
                rtlClass: "owl-rtl",
                responsiveClass: "owl-responsive",
                dragClass: "owl-drag",
                itemClass: "owl-item",
                stageClass: "owl-stage",
                stageOuterClass: "owl-stage-outer",
                grabClass: "owl-grab"
            }, r.Width = {
                Default: "default",
                Inner: "inner",
                Outer: "outer"
            }, r.Type = {
                Event: "event",
                State: "state"
            }, r.Plugins = {}, r.Workers = [{
                filter: ["width", "settings"],
                run: function() {
                    this._width = this.$element.width()
                }
            }, {
                filter: ["width", "items", "settings"],
                run: function(e) {
                    e.current = this._items && this._items[this.relative(this._current)]
                }
            }, {
                filter: ["items", "settings"],
                run: function() {
                    this.$stage.children(".cloned").remove()
                }
            }, {
                filter: ["width", "items", "settings"],
                run: function(e) {
                    var t = this.settings.margin || "",
                        i = !this.settings.autoWidth,
                        n = this.settings.rtl,
                        o = {
                            width: "auto",
                            "margin-left": n ? t : "",
                            "margin-right": n ? "" : t
                        };
                    !i && this.$stage.children().css(o), e.css = o
                }
            }, {
                filter: ["width", "items", "settings"],
                run: function(e) {
                    var t = (this.width() / this.settings.items).toFixed(3) - this.settings.margin,
                        i = null,
                        n = this._items.length,
                        o = !this.settings.autoWidth,
                        r = [];
                    for (e.items = {
                            merge: !1,
                            width: t
                        }; n--;) i = this._mergers[n], i = this.settings.mergeFit && Math.min(i, this.settings.items) || i, e.items.merge = i > 1 || e.items.merge, r[n] = o ? t * i : this._items[n].width();
                    this._widths = r
                }
            }, {
                filter: ["items", "settings"],
                run: function() {
                    var t = [],
                        i = this._items,
                        n = this.settings,
                        o = Math.max(2 * n.items, 4),
                        r = 2 * Math.ceil(i.length / 2),
                        s = n.loop && i.length ? n.rewind ? o : Math.max(o, r) : 0,
                        a = "",
                        l = "";
                    for (s /= 2; s > 0;) t.push(this.normalize(t.length / 2, !0)), a += i[t[t.length - 1]][0].outerHTML, t.push(this.normalize(i.length - 1 - (t.length - 1) / 2, !0)), l = i[t[t.length - 1]][0].outerHTML + l, s -= 1;
                    this._clones = t, e(a).addClass("cloned").appendTo(this.$stage), e(l).addClass("cloned").prependTo(this.$stage)
                }
            }, {
                filter: ["width", "items", "settings"],
                run: function() {
                    for (var e = this.settings.rtl ? 1 : -1, t = this._clones.length + this._items.length, i = -1, n = 0, o = 0, r = []; ++i < t;) n = r[i - 1] || 0, o = this._widths[this.relative(i)] + this.settings.margin, r.push(n + o * e);
                    this._coordinates = r
                }
            }, {
                filter: ["width", "items", "settings"],
                run: function() {
                    var e = this.settings.stagePadding,
                        t = this._coordinates,
                        i = {
                            width: Math.ceil(Math.abs(t[t.length - 1])) + 2 * e,
                            "padding-left": e || "",
                            "padding-right": e || ""
                        };
                    this.$stage.css(i)
                }
            }, {
                filter: ["width", "items", "settings"],
                run: function(e) {
                    var t = this._coordinates.length,
                        i = !this.settings.autoWidth,
                        n = this.$stage.children();
                    if (i && e.items.merge)
                        for (; t--;) e.css.width = this._widths[this.relative(t)], n.eq(t).css(e.css);
                    else i && (e.css.width = e.items.width, n.css(e.css))
                }
            }, {
                filter: ["items"],
                run: function() {
                    this._coordinates.length < 1 && this.$stage.removeAttr("style")
                }
            }, {
                filter: ["width", "items", "settings"],
                run: function(e) {
                    e.current = e.current ? this.$stage.children().index(e.current) : 0, e.current = Math.max(this.minimum(), Math.min(this.maximum(), e.current)), this.reset(e.current)
                }
            }, {
                filter: ["position"],
                run: function() {
                    this.animate(this.coordinates(this._current))
                }
            }, {
                filter: ["width", "position", "items", "settings"],
                run: function() {
                    var e, t, i, n, o = this.settings.rtl ? 1 : -1,
                        r = 2 * this.settings.stagePadding,
                        s = this.coordinates(this.current()) + r,
                        a = s + this.width() * o,
                        l = [];
                    for (i = 0, n = this._coordinates.length; i < n; i++) e = this._coordinates[i - 1] || 0, t = Math.abs(this._coordinates[i]) + r * o, (this.op(e, "<=", s) && this.op(e, ">", a) || this.op(t, "<", s) && this.op(t, ">", a)) && l.push(i);
                    this.$stage.children(".active").removeClass("active"), this.$stage.children(":eq(" + l.join("), :eq(") + ")").addClass("active"), this.$stage.children(".center").removeClass("center"), this.settings.center && this.$stage.children().eq(this.current()).addClass("center")
                }
            }], r.prototype.initializeStage = function() {
                this.$stage = this.$element.find("." + this.settings.stageClass), this.$stage.length || (this.$element.addClass(this.options.loadingClass), this.$stage = e("<" + this.settings.stageElement + ">", {
                    class: this.settings.stageClass
                }).wrap(e("<div/>", {
                    class: this.settings.stageOuterClass
                })), this.$element.append(this.$stage.parent()))
            }, r.prototype.initializeItems = function() {
                var t = this.$element.find(".owl-item");
                if (t.length) return this._items = t.get().map((function(t) {
                    return e(t)
                })), this._mergers = this._items.map((function() {
                    return 1
                })), void this.refresh();
                this.replace(this.$element.children().not(this.$stage.parent())), this.isVisible() ? this.refresh() : this.invalidate("width"), this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass)
            }, r.prototype.initialize = function() {
                var e, t, i;
                (this.enter("initializing"), this.trigger("initialize"), this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl), this.settings.autoWidth && !this.is("pre-loading")) && (e = this.$element.find("img"), t = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : o, i = this.$element.children(t).width(), e.length && i <= 0 && this.preloadAutoWidthImages(e));
                this.initializeStage(), this.initializeItems(), this.registerEventHandlers(), this.leave("initializing"), this.trigger("initialized")
            }, r.prototype.isVisible = function() {
                return !this.settings.checkVisibility || this.$element.is(":visible")
            }, r.prototype.setup = function() {
                var t = this.viewport(),
                    i = this.options.responsive,
                    n = -1,
                    o = null;
                i ? (e.each(i, (function(e) {
                    e <= t && e > n && (n = Number(e))
                })), "function" == typeof(o = e.extend({}, this.options, i[n])).stagePadding && (o.stagePadding = o.stagePadding()), delete o.responsive, o.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(new RegExp("(" + this.options.responsiveClass + "-)\\S+\\s", "g"), "$1" + n))) : o = e.extend({}, this.options), this.trigger("change", {
                    property: {
                        name: "settings",
                        value: o
                    }
                }), this._breakpoint = n, this.settings = o, this.invalidate("settings"), this.trigger("changed", {
                    property: {
                        name: "settings",
                        value: this.settings
                    }
                })
            }, r.prototype.optionsLogic = function() {
                this.settings.autoWidth && (this.settings.stagePadding = !1, this.settings.merge = !1)
            }, r.prototype.prepare = function(t) {
                var i = this.trigger("prepare", {
                    content: t
                });
                return i.data || (i.data = e("<" + this.settings.itemElement + "/>").addClass(this.options.itemClass).append(t)), this.trigger("prepared", {
                    content: i.data
                }), i.data
            }, r.prototype.update = function() {
                for (var t = 0, i = this._pipe.length, n = e.proxy((function(e) {
                        return this[e]
                    }), this._invalidated), o = {}; t < i;)(this._invalidated.all || e.grep(this._pipe[t].filter, n).length > 0) && this._pipe[t].run(o), t++;
                this._invalidated = {}, !this.is("valid") && this.enter("valid")
            }, r.prototype.width = function(e) {
                switch (e = e || r.Width.Default) {
                    case r.Width.Inner:
                    case r.Width.Outer:
                        return this._width;
                    default:
                        return this._width - 2 * this.settings.stagePadding + this.settings.margin
                }
            }, r.prototype.refresh = function() {
                this.enter("refreshing"), this.trigger("refresh"), this.setup(), this.optionsLogic(), this.$element.addClass(this.options.refreshClass), this.update(), this.$element.removeClass(this.options.refreshClass), this.leave("refreshing"), this.trigger("refreshed")
            }, r.prototype.onThrottledResize = function() {
                t.clearTimeout(this.resizeTimer), this.resizeTimer = t.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate)
            }, r.prototype.onResize = function() {
                return !!this._items.length && this._width !== this.$element.width() && !!this.isVisible() && (this.enter("resizing"), this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"), !1) : (this.invalidate("width"), this.refresh(), this.leave("resizing"), void this.trigger("resized")))
            }, r.prototype.registerEventHandlers = function() {
                e.support.transition && this.$stage.on(e.support.transition.end + ".owl.core", e.proxy(this.onTransitionEnd, this)), !1 !== this.settings.responsive && this.on(t, "resize", this._handlers.onThrottledResize), this.settings.mouseDrag && (this.$element.addClass(this.options.dragClass), this.$stage.on("mousedown.owl.core", e.proxy(this.onDragStart, this)), this.$stage.on("dragstart.owl.core selectstart.owl.core", (function() {
                    return !1
                }))), this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", e.proxy(this.onDragStart, this)), this.$stage.on("touchcancel.owl.core", e.proxy(this.onDragEnd, this)))
            }, r.prototype.onDragStart = function(t) {
                var i = null;
                3 !== t.which && (e.support.transform ? i = {
                    x: (i = this.$stage.css("transform").replace(/.*\(|\)| /g, "").split(","))[16 === i.length ? 12 : 4],
                    y: i[16 === i.length ? 13 : 5]
                } : (i = this.$stage.position(), i = {
                    x: this.settings.rtl ? i.left + this.$stage.width() - this.width() + this.settings.margin : i.left,
                    y: i.top
                }), this.is("animating") && (e.support.transform ? this.animate(i.x) : this.$stage.stop(), this.invalidate("position")), this.$element.toggleClass(this.options.grabClass, "mousedown" === t.type), this.speed(0), this._drag.time = (new Date).getTime(), this._drag.target = e(t.target), this._drag.stage.start = i, this._drag.stage.current = i, this._drag.pointer = this.pointer(t), e(n).on("mouseup.owl.core touchend.owl.core", e.proxy(this.onDragEnd, this)), e(n).one("mousemove.owl.core touchmove.owl.core", e.proxy((function(t) {
                    var i = this.difference(this._drag.pointer, this.pointer(t));
                    e(n).on("mousemove.owl.core touchmove.owl.core", e.proxy(this.onDragMove, this)), Math.abs(i.x) < Math.abs(i.y) && this.is("valid") || (t.preventDefault(), this.enter("dragging"), this.trigger("drag"))
                }), this)))
            }, r.prototype.onDragMove = function(e) {
                var t = null,
                    i = null,
                    n = null,
                    o = this.difference(this._drag.pointer, this.pointer(e)),
                    r = this.difference(this._drag.stage.start, o);
                this.is("dragging") && (e.preventDefault(), this.settings.loop ? (t = this.coordinates(this.minimum()), i = this.coordinates(this.maximum() + 1) - t, r.x = ((r.x - t) % i + i) % i + t) : (t = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum()), i = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum()), n = this.settings.pullDrag ? -1 * o.x / 5 : 0, r.x = Math.max(Math.min(r.x, t + n), i + n)), this._drag.stage.current = r, this.animate(r.x))
            }, r.prototype.onDragEnd = function(t) {
                var i = this.difference(this._drag.pointer, this.pointer(t)),
                    o = this._drag.stage.current,
                    r = i.x > 0 ^ this.settings.rtl ? "left" : "right";
                e(n).off(".owl.core"), this.$element.removeClass(this.options.grabClass), (0 !== i.x && this.is("dragging") || !this.is("valid")) && (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed), this.current(this.closest(o.x, 0 !== i.x ? r : this._drag.direction)), this.invalidate("position"), this.update(), this._drag.direction = r, (Math.abs(i.x) > 3 || (new Date).getTime() - this._drag.time > 300) && this._drag.target.one("click.owl.core", (function() {
                    return !1
                }))), this.is("dragging") && (this.leave("dragging"), this.trigger("dragged"))
            }, r.prototype.closest = function(t, i) {
                var n = -1,
                    r = this.width(),
                    s = this.coordinates();
                return this.settings.freeDrag || e.each(s, e.proxy((function(e, a) {
                    return "left" === i && t > a - 30 && t < a + 30 ? n = e : "right" === i && t > a - r - 30 && t < a - r + 30 ? n = e + 1 : this.op(t, "<", a) && this.op(t, ">", s[e + 1] !== o ? s[e + 1] : a - r) && (n = "left" === i ? e + 1 : e), -1 === n
                }), this)), this.settings.loop || (this.op(t, ">", s[this.minimum()]) ? n = t = this.minimum() : this.op(t, "<", s[this.maximum()]) && (n = t = this.maximum())), n
            }, r.prototype.animate = function(t) {
                var i = this.speed() > 0;
                this.is("animating") && this.onTransitionEnd(), i && (this.enter("animating"), this.trigger("translate")), e.support.transform3d && e.support.transition ? this.$stage.css({
                    transform: "translate3d(" + t + "px,0px,0px)",
                    transition: this.speed() / 1e3 + "s" + (this.settings.slideTransition ? " " + this.settings.slideTransition : "")
                }) : i ? this.$stage.animate({
                    left: t + "px"
                }, this.speed(), this.settings.fallbackEasing, e.proxy(this.onTransitionEnd, this)) : this.$stage.css({
                    left: t + "px"
                })
            }, r.prototype.is = function(e) {
                return this._states.current[e] && this._states.current[e] > 0
            }, r.prototype.current = function(e) {
                if (e === o) return this._current;
                if (0 === this._items.length) return o;
                if (e = this.normalize(e), this._current !== e) {
                    var t = this.trigger("change", {
                        property: {
                            name: "position",
                            value: e
                        }
                    });
                    t.data !== o && (e = this.normalize(t.data)), this._current = e, this.invalidate("position"), this.trigger("changed", {
                        property: {
                            name: "position",
                            value: this._current
                        }
                    })
                }
                return this._current
            }, r.prototype.invalidate = function(t) {
                return "string" === e.type(t) && (this._invalidated[t] = !0, this.is("valid") && this.leave("valid")), e.map(this._invalidated, (function(e, t) {
                    return t
                }))
            }, r.prototype.reset = function(e) {
                (e = this.normalize(e)) !== o && (this._speed = 0, this._current = e, this.suppress(["translate", "translated"]), this.animate(this.coordinates(e)), this.release(["translate", "translated"]))
            }, r.prototype.normalize = function(e, t) {
                var i = this._items.length,
                    n = t ? 0 : this._clones.length;
                return !this.isNumeric(e) || i < 1 ? e = o : (e < 0 || e >= i + n) && (e = ((e - n / 2) % i + i) % i + n / 2), e
            }, r.prototype.relative = function(e) {
                return e -= this._clones.length / 2, this.normalize(e, !0)
            }, r.prototype.maximum = function(e) {
                var t, i, n, o = this.settings,
                    r = this._coordinates.length;
                if (o.loop) r = this._clones.length / 2 + this._items.length - 1;
                else if (o.autoWidth || o.merge) {
                    if (t = this._items.length)
                        for (i = this._items[--t].width(), n = this.$element.width(); t-- && !((i += this._items[t].width() + this.settings.margin) > n););
                    r = t + 1
                } else r = o.center ? this._items.length - 1 : this._items.length - o.items;
                return e && (r -= this._clones.length / 2), Math.max(r, 0)
            }, r.prototype.minimum = function(e) {
                return e ? 0 : this._clones.length / 2
            }, r.prototype.items = function(e) {
                return e === o ? this._items.slice() : (e = this.normalize(e, !0), this._items[e])
            }, r.prototype.mergers = function(e) {
                return e === o ? this._mergers.slice() : (e = this.normalize(e, !0), this._mergers[e])
            }, r.prototype.clones = function(t) {
                var i = this._clones.length / 2,
                    n = i + this._items.length,
                    r = function(e) {
                        return e % 2 == 0 ? n + e / 2 : i - (e + 1) / 2
                    };
                return t === o ? e.map(this._clones, (function(e, t) {
                    return r(t)
                })) : e.map(this._clones, (function(e, i) {
                    return e === t ? r(i) : null
                }))
            }, r.prototype.speed = function(e) {
                return e !== o && (this._speed = e), this._speed
            }, r.prototype.coordinates = function(t) {
                var i, n = 1,
                    r = t - 1;
                return t === o ? e.map(this._coordinates, e.proxy((function(e, t) {
                    return this.coordinates(t)
                }), this)) : (this.settings.center ? (this.settings.rtl && (n = -1, r = t + 1), i = this._coordinates[t], i += (this.width() - i + (this._coordinates[r] || 0)) / 2 * n) : i = this._coordinates[r] || 0, i = Math.ceil(i))
            }, r.prototype.duration = function(e, t, i) {
                return 0 === i ? 0 : Math.min(Math.max(Math.abs(t - e), 1), 6) * Math.abs(i || this.settings.smartSpeed)
            }, r.prototype.to = function(e, t) {
                var i = this.current(),
                    n = null,
                    o = e - this.relative(i),
                    r = (o > 0) - (o < 0),
                    s = this._items.length,
                    a = this.minimum(),
                    l = this.maximum();
                this.settings.loop ? (!this.settings.rewind && Math.abs(o) > s / 2 && (o += -1 * r * s), (n = (((e = i + o) - a) % s + s) % s + a) !== e && n - o <= l && n - o > 0 && (i = n - o, e = n, this.reset(i))) : this.settings.rewind ? e = (e % (l += 1) + l) % l : e = Math.max(a, Math.min(l, e)), this.speed(this.duration(i, e, t)), this.current(e), this.isVisible() && this.update()
            }, r.prototype.next = function(e) {
                e = e || !1, this.to(this.relative(this.current()) + 1, e)
            }, r.prototype.prev = function(e) {
                e = e || !1, this.to(this.relative(this.current()) - 1, e)
            }, r.prototype.onTransitionEnd = function(e) {
                if (e !== o && (e.stopPropagation(), (e.target || e.srcElement || e.originalTarget) !== this.$stage.get(0))) return !1;
                this.leave("animating"), this.trigger("translated")
            }, r.prototype.viewport = function() {
                var i;
                return this.options.responsiveBaseElement !== t ? i = e(this.options.responsiveBaseElement).width() : t.innerWidth ? i = t.innerWidth : n.documentElement && n.documentElement.clientWidth ? i = n.documentElement.clientWidth : console.warn("Can not detect viewport width."), i
            }, r.prototype.replace = function(t) {
                this.$stage.empty(), this._items = [], t && (t = t instanceof jQuery ? t : e(t)), this.settings.nestedItemSelector && (t = t.find("." + this.settings.nestedItemSelector)), t.filter((function() {
                    return 1 === this.nodeType
                })).each(e.proxy((function(e, t) {
                    t = this.prepare(t), this.$stage.append(t), this._items.push(t), this._mergers.push(1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)
                }), this)), this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0), this.invalidate("items")
            }, r.prototype.add = function(t, i) {
                var n = this.relative(this._current);
                i = i === o ? this._items.length : this.normalize(i, !0), t = t instanceof jQuery ? t : e(t), this.trigger("add", {
                    content: t,
                    position: i
                }), t = this.prepare(t), 0 === this._items.length || i === this._items.length ? (0 === this._items.length && this.$stage.append(t), 0 !== this._items.length && this._items[i - 1].after(t), this._items.push(t), this._mergers.push(1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)) : (this._items[i].before(t), this._items.splice(i, 0, t), this._mergers.splice(i, 0, 1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)), this._items[n] && this.reset(this._items[n].index()), this.invalidate("items"), this.trigger("added", {
                    content: t,
                    position: i
                })
            }, r.prototype.remove = function(e) {
                (e = this.normalize(e, !0)) !== o && (this.trigger("remove", {
                    content: this._items[e],
                    position: e
                }), this._items[e].remove(), this._items.splice(e, 1), this._mergers.splice(e, 1), this.invalidate("items"), this.trigger("removed", {
                    content: null,
                    position: e
                }))
            }, r.prototype.preloadAutoWidthImages = function(t) {
                t.each(e.proxy((function(t, i) {
                    this.enter("pre-loading"), i = e(i), e(new Image).one("load", e.proxy((function(e) {
                        i.attr("src", e.target.src), i.css("opacity", 1), this.leave("pre-loading"), !this.is("pre-loading") && !this.is("initializing") && this.refresh()
                    }), this)).attr("src", i.attr("src") || i.attr("data-src") || i.attr("data-src-retina"))
                }), this))
            }, r.prototype.destroy = function() {
                for (var i in this.$element.off(".owl.core"), this.$stage.off(".owl.core"), e(n).off(".owl.core"), !1 !== this.settings.responsive && (t.clearTimeout(this.resizeTimer), this.off(t, "resize", this._handlers.onThrottledResize)), this._plugins) this._plugins[i].destroy();
                this.$stage.children(".cloned").remove(), this.$stage.unwrap(), this.$stage.children().contents().unwrap(), this.$stage.children().unwrap(), this.$stage.remove(), this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class", this.$element.attr("class").replace(new RegExp(this.options.responsiveClass + "-\\S+\\s", "g"), "")).removeData("owl.carousel")
            }, r.prototype.op = function(e, t, i) {
                var n = this.settings.rtl;
                switch (t) {
                    case "<":
                        return n ? e > i : e < i;
                    case ">":
                        return n ? e < i : e > i;
                    case ">=":
                        return n ? e <= i : e >= i;
                    case "<=":
                        return n ? e >= i : e <= i
                }
            }, r.prototype.on = function(e, t, i, n) {
                e.addEventListener ? e.addEventListener(t, i, n) : e.attachEvent && e.attachEvent("on" + t, i)
            }, r.prototype.off = function(e, t, i, n) {
                e.removeEventListener ? e.removeEventListener(t, i, n) : e.detachEvent && e.detachEvent("on" + t, i)
            }, r.prototype.trigger = function(t, i, n, o, s) {
                var a = {
                        item: {
                            count: this._items.length,
                            index: this.current()
                        }
                    },
                    l = e.camelCase(e.grep(["on", t, n], (function(e) {
                        return e
                    })).join("-").toLowerCase()),
                    c = e.Event([t, "owl", n || "carousel"].join(".").toLowerCase(), e.extend({
                        relatedTarget: this
                    }, a, i));
                return this._supress[t] || (e.each(this._plugins, (function(e, t) {
                    t.onTrigger && t.onTrigger(c)
                })), this.register({
                    type: r.Type.Event,
                    name: t
                }), this.$element.trigger(c), this.settings && "function" == typeof this.settings[l] && this.settings[l].call(this, c)), c
            }, r.prototype.enter = function(t) {
                e.each([t].concat(this._states.tags[t] || []), e.proxy((function(e, t) {
                    this._states.current[t] === o && (this._states.current[t] = 0), this._states.current[t]++
                }), this))
            }, r.prototype.leave = function(t) {
                e.each([t].concat(this._states.tags[t] || []), e.proxy((function(e, t) {
                    this._states.current[t]--
                }), this))
            }, r.prototype.register = function(t) {
                if (t.type === r.Type.Event) {
                    if (e.event.special[t.name] || (e.event.special[t.name] = {}), !e.event.special[t.name].owl) {
                        var i = e.event.special[t.name]._default;
                        e.event.special[t.name]._default = function(e) {
                            return !i || !i.apply || e.namespace && -1 !== e.namespace.indexOf("owl") ? e.namespace && e.namespace.indexOf("owl") > -1 : i.apply(this, arguments)
                        }, e.event.special[t.name].owl = !0
                    }
                } else t.type === r.Type.State && (this._states.tags[t.name] ? this._states.tags[t.name] = this._states.tags[t.name].concat(t.tags) : this._states.tags[t.name] = t.tags, this._states.tags[t.name] = e.grep(this._states.tags[t.name], e.proxy((function(i, n) {
                    return e.inArray(i, this._states.tags[t.name]) === n
                }), this)))
            }, r.prototype.suppress = function(t) {
                e.each(t, e.proxy((function(e, t) {
                    this._supress[t] = !0
                }), this))
            }, r.prototype.release = function(t) {
                e.each(t, e.proxy((function(e, t) {
                    delete this._supress[t]
                }), this))
            }, r.prototype.pointer = function(e) {
                var i = {
                    x: null,
                    y: null
                };
                return (e = (e = e.originalEvent || e || t.event).touches && e.touches.length ? e.touches[0] : e.changedTouches && e.changedTouches.length ? e.changedTouches[0] : e).pageX ? (i.x = e.pageX, i.y = e.pageY) : (i.x = e.clientX, i.y = e.clientY), i
            }, r.prototype.isNumeric = function(e) {
                return !isNaN(parseFloat(e))
            }, r.prototype.difference = function(e, t) {
                return {
                    x: e.x - t.x,
                    y: e.y - t.y
                }
            }, e.fn.owlCarousel = function(t) {
                var n = Array.prototype.slice.call(arguments, 1);
                return this.each((function() {
                    var o = e(this),
                        s = o.data("owl.carousel");
                    s || (s = new r(this, "object" == i(t) && t), o.data("owl.carousel", s), e.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], (function(t, i) {
                        s.register({
                            type: r.Type.Event,
                            name: i
                        }), s.$element.on(i + ".owl.carousel.core", e.proxy((function(e) {
                            e.namespace && e.relatedTarget !== this && (this.suppress([i]), s[i].apply(this, [].slice.call(arguments, 1)), this.release([i]))
                        }), s))
                    }))), "string" == typeof t && "_" !== t.charAt(0) && s[t].apply(s, n)
                }))
            }, e.fn.owlCarousel.Constructor = r
        }(window.Zepto || window.jQuery, window, document), n = window.Zepto || window.jQuery, o = window, document, (r = function e(t) {
                this._core = t, this._interval = null, this._visible = null, this._handlers = {
                    "initialized.owl.carousel": n.proxy((function(e) {
                        e.namespace && this._core.settings.autoRefresh && this.watch()
                    }), this)
                }, this._core.options = n.extend({}, e.Defaults, this._core.options), this._core.$element.on(this._handlers)
            }).Defaults = {
                autoRefresh: !0,
                autoRefreshInterval: 500
            }, r.prototype.watch = function() {
                this._interval || (this._visible = this._core.isVisible(), this._interval = o.setInterval(n.proxy(this.refresh, this), this._core.settings.autoRefreshInterval))
            }, r.prototype.refresh = function() {
                this._core.isVisible() !== this._visible && (this._visible = !this._visible, this._core.$element.toggleClass("owl-hidden", !this._visible), this._visible && this._core.invalidate("width") && this._core.refresh())
            }, r.prototype.destroy = function() {
                var e, t;
                for (e in o.clearInterval(this._interval), this._handlers) this._core.$element.off(e, this._handlers[e]);
                for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
            }, n.fn.owlCarousel.Constructor.Plugins.AutoRefresh = r,
            function(e, t, i, n) {
                var o = function t(i) {
                    this._core = i, this._loaded = [], this._handlers = {
                        "initialized.owl.carousel change.owl.carousel resized.owl.carousel": e.proxy((function(t) {
                            if (t.namespace && this._core.settings && this._core.settings.lazyLoad && (t.property && "position" == t.property.name || "initialized" == t.type)) {
                                var i = this._core.settings,
                                    n = i.center && Math.ceil(i.items / 2) || i.items,
                                    o = i.center && -1 * n || 0,
                                    r = (t.property && void 0 !== t.property.value ? t.property.value : this._core.current()) + o,
                                    s = this._core.clones().length,
                                    a = e.proxy((function(e, t) {
                                        this.load(t)
                                    }), this);
                                for (i.lazyLoadEager > 0 && (n += i.lazyLoadEager, i.loop && (r -= i.lazyLoadEager, n++)); o++ < n;) this.load(s / 2 + this._core.relative(r)), s && e.each(this._core.clones(this._core.relative(r)), a), r++
                            }
                        }), this)
                    }, this._core.options = e.extend({}, t.Defaults, this._core.options), this._core.$element.on(this._handlers)
                };
                o.Defaults = {
                    lazyLoad: !1,
                    lazyLoadEager: 0
                }, o.prototype.load = function(i) {
                    var n = this._core.$stage.children().eq(i),
                        o = n && n.find(".owl-lazy");
                    !o || e.inArray(n.get(0), this._loaded) > -1 || (o.each(e.proxy((function(i, n) {
                        var o, r = e(n),
                            s = t.devicePixelRatio > 1 && r.attr("data-src-retina") || r.attr("data-src") || r.attr("data-srcset");
                        this._core.trigger("load", {
                            element: r,
                            url: s
                        }, "lazy"), r.is("img") ? r.one("load.owl.lazy", e.proxy((function() {
                            r.css("opacity", 1), this._core.trigger("loaded", {
                                element: r,
                                url: s
                            }, "lazy")
                        }), this)).attr("src", s) : r.is("source") ? r.one("load.owl.lazy", e.proxy((function() {
                            this._core.trigger("loaded", {
                                element: r,
                                url: s
                            }, "lazy")
                        }), this)).attr("srcset", s) : ((o = new Image).onload = e.proxy((function() {
                            r.css({
                                "background-image": 'url("' + s + '")',
                                opacity: "1"
                            }), this._core.trigger("loaded", {
                                element: r,
                                url: s
                            }, "lazy")
                        }), this), o.src = s)
                    }), this)), this._loaded.push(n.get(0)))
                }, o.prototype.destroy = function() {
                    var e, t;
                    for (e in this.handlers) this._core.$element.off(e, this.handlers[e]);
                    for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
                }, e.fn.owlCarousel.Constructor.Plugins.Lazy = o
            }(window.Zepto || window.jQuery, window, document),
            function(e, t, i, n) {
                var o = function i(n) {
                    this._core = n, this._previousHeight = null, this._handlers = {
                        "initialized.owl.carousel refreshed.owl.carousel": e.proxy((function(e) {
                            e.namespace && this._core.settings.autoHeight && this.update()
                        }), this),
                        "changed.owl.carousel": e.proxy((function(e) {
                            e.namespace && this._core.settings.autoHeight && "position" === e.property.name && this.update()
                        }), this),
                        "loaded.owl.lazy": e.proxy((function(e) {
                            e.namespace && this._core.settings.autoHeight && e.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update()
                        }), this)
                    }, this._core.options = e.extend({}, i.Defaults, this._core.options), this._core.$element.on(this._handlers), this._intervalId = null;
                    var o = this;
                    e(t).on("load", (function() {
                        o._core.settings.autoHeight && o.update()
                    })), e(t).resize((function() {
                        o._core.settings.autoHeight && (null != o._intervalId && clearTimeout(o._intervalId), o._intervalId = setTimeout((function() {
                            o.update()
                        }), 250))
                    }))
                };
                o.Defaults = {
                    autoHeight: !1,
                    autoHeightClass: "owl-height"
                }, o.prototype.update = function() {
                    var t = this._core._current,
                        i = t + this._core.settings.items,
                        n = this._core.settings.lazyLoad,
                        o = this._core.$stage.children().toArray().slice(t, i),
                        r = [],
                        s = 0;
                    e.each(o, (function(t, i) {
                        r.push(e(i).height())
                    })), (s = Math.max.apply(null, r)) <= 1 && n && this._previousHeight && (s = this._previousHeight), this._previousHeight = s, this._core.$stage.parent().height(s).addClass(this._core.settings.autoHeightClass)
                }, o.prototype.destroy = function() {
                    var e, t;
                    for (e in this._handlers) this._core.$element.off(e, this._handlers[e]);
                    for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
                }, e.fn.owlCarousel.Constructor.Plugins.AutoHeight = o
            }(window.Zepto || window.jQuery, window, document),
            function(e, t, i, n) {
                var o = function t(i) {
                    this._core = i, this._videos = {}, this._playing = null, this._handlers = {
                        "initialized.owl.carousel": e.proxy((function(e) {
                            e.namespace && this._core.register({
                                type: "state",
                                name: "playing",
                                tags: ["interacting"]
                            })
                        }), this),
                        "resize.owl.carousel": e.proxy((function(e) {
                            e.namespace && this._core.settings.video && this.isInFullScreen() && e.preventDefault()
                        }), this),
                        "refreshed.owl.carousel": e.proxy((function(e) {
                            e.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove()
                        }), this),
                        "changed.owl.carousel": e.proxy((function(e) {
                            e.namespace && "position" === e.property.name && this._playing && this.stop()
                        }), this),
                        "prepared.owl.carousel": e.proxy((function(t) {
                            if (t.namespace) {
                                var i = e(t.content).find(".owl-video");
                                i.length && (i.css("display", "none"), this.fetch(i, e(t.content)))
                            }
                        }), this)
                    }, this._core.options = e.extend({}, t.Defaults, this._core.options), this._core.$element.on(this._handlers), this._core.$element.on("click.owl.video", ".owl-video-play-icon", e.proxy((function(e) {
                        this.play(e)
                    }), this))
                };
                o.Defaults = {
                    video: !1,
                    videoHeight: !1,
                    videoWidth: !1
                }, o.prototype.fetch = function(e, t) {
                    var i = e.attr("data-vimeo-id") ? "vimeo" : e.attr("data-vzaar-id") ? "vzaar" : "youtube",
                        n = e.attr("data-vimeo-id") || e.attr("data-youtube-id") || e.attr("data-vzaar-id"),
                        o = e.attr("data-width") || this._core.settings.videoWidth,
                        r = e.attr("data-height") || this._core.settings.videoHeight,
                        s = e.attr("href");
                    if (!s) throw new Error("Missing video URL.");
                    if ((n = s.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com|be\-nocookie\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/))[3].indexOf("youtu") > -1) i = "youtube";
                    else if (n[3].indexOf("vimeo") > -1) i = "vimeo";
                    else {
                        if (!(n[3].indexOf("vzaar") > -1)) throw new Error("Video URL not supported.");
                        i = "vzaar"
                    }
                    n = n[6], this._videos[s] = {
                        type: i,
                        id: n,
                        width: o,
                        height: r
                    }, t.attr("data-video", s), this.thumbnail(e, this._videos[s])
                }, o.prototype.thumbnail = function(t, i) {
                    var n, o, r = i.width && i.height ? "width:" + i.width + "px;height:" + i.height + "px;" : "",
                        s = t.find("img"),
                        a = "src",
                        l = "",
                        c = this._core.settings,
                        u = function(i) {
                            '<div class="owl-video-play-icon"></div>',
                            n = c.lazyLoad ? e("<div/>", {
                                class: "owl-video-tn " + l,
                                srcType: i
                            }) : e("<div/>", {
                                class: "owl-video-tn",
                                style: "opacity:1;background-image:url(" + i + ")"
                            }),
                            t.after(n),
                            t.after('<div class="owl-video-play-icon"></div>')
                        };
                    if (t.wrap(e("<div/>", {
                            class: "owl-video-wrapper",
                            style: r
                        })), this._core.settings.lazyLoad && (a = "data-src", l = "owl-lazy"), s.length) return u(s.attr(a)), s.remove(), !1;
                    "youtube" === i.type ? (o = "//img.youtube.com/vi/" + i.id + "/hqdefault.jpg", u(o)) : "vimeo" === i.type ? e.ajax({
                        type: "GET",
                        url: "//vimeo.com/api/v2/video/" + i.id + ".json",
                        jsonp: "callback",
                        dataType: "jsonp",
                        success: function(e) {
                            o = e[0].thumbnail_large, u(o)
                        }
                    }) : "vzaar" === i.type && e.ajax({
                        type: "GET",
                        url: "//vzaar.com/api/videos/" + i.id + ".json",
                        jsonp: "callback",
                        dataType: "jsonp",
                        success: function(e) {
                            o = e.framegrab_url, u(o)
                        }
                    })
                }, o.prototype.stop = function() {
                    this._core.trigger("stop", null, "video"), this._playing.find(".owl-video-frame").remove(), this._playing.removeClass("owl-video-playing"), this._playing = null, this._core.leave("playing"), this._core.trigger("stopped", null, "video")
                }, o.prototype.play = function(t) {
                    var i, n = e(t.target).closest("." + this._core.settings.itemClass),
                        o = this._videos[n.attr("data-video")],
                        r = o.width || "100%",
                        s = o.height || this._core.$stage.height();
                    this._playing || (this._core.enter("playing"), this._core.trigger("play", null, "video"), n = this._core.items(this._core.relative(n.index())), this._core.reset(n.index()), (i = e('<iframe frameborder="0" allowfullscreen mozallowfullscreen webkitAllowFullScreen ></iframe>')).attr("height", s), i.attr("width", r), "youtube" === o.type ? i.attr("src", "//www.youtube.com/embed/" + o.id + "?autoplay=1&rel=0&v=" + o.id) : "vimeo" === o.type ? i.attr("src", "//player.vimeo.com/video/" + o.id + "?autoplay=1") : "vzaar" === o.type && i.attr("src", "//view.vzaar.com/" + o.id + "/player?autoplay=true"), e(i).wrap('<div class="owl-video-frame" />').insertAfter(n.find(".owl-video")), this._playing = n.addClass("owl-video-playing"))
                }, o.prototype.isInFullScreen = function() {
                    var t = i.fullscreenElement || i.mozFullScreenElement || i.webkitFullscreenElement;
                    return t && e(t).parent().hasClass("owl-video-frame")
                }, o.prototype.destroy = function() {
                    var e, t;
                    for (e in this._core.$element.off("click.owl.video"), this._handlers) this._core.$element.off(e, this._handlers[e]);
                    for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
                }, e.fn.owlCarousel.Constructor.Plugins.Video = o
            }(window.Zepto || window.jQuery, window, document),
            function(e, t, i, n) {
                var o = function t(i) {
                    this.core = i, this.core.options = e.extend({}, t.Defaults, this.core.options), this.swapping = !0, this.previous = n, this.next = n, this.handlers = {
                        "change.owl.carousel": e.proxy((function(e) {
                            e.namespace && "position" == e.property.name && (this.previous = this.core.current(), this.next = e.property.value)
                        }), this),
                        "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": e.proxy((function(e) {
                            e.namespace && (this.swapping = "translated" == e.type)
                        }), this),
                        "translate.owl.carousel": e.proxy((function(e) {
                            e.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap()
                        }), this)
                    }, this.core.$element.on(this.handlers)
                };
                o.Defaults = {
                    animateOut: !1,
                    animateIn: !1
                }, o.prototype.swap = function() {
                    if (1 === this.core.settings.items && e.support.animation && e.support.transition) {
                        this.core.speed(0);
                        var t, i = e.proxy(this.clear, this),
                            n = this.core.$stage.children().eq(this.previous),
                            o = this.core.$stage.children().eq(this.next),
                            r = this.core.settings.animateIn,
                            s = this.core.settings.animateOut;
                        this.core.current() !== this.previous && (s && (t = this.core.coordinates(this.previous) - this.core.coordinates(this.next), n.one(e.support.animation.end, i).css({
                            left: t + "px"
                        }).addClass("animated owl-animated-out").addClass(s)), r && o.one(e.support.animation.end, i).addClass("animated owl-animated-in").addClass(r))
                    }
                }, o.prototype.clear = function(t) {
                    e(t.target).css({
                        left: ""
                    }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut), this.core.onTransitionEnd()
                }, o.prototype.destroy = function() {
                    var e, t;
                    for (e in this.handlers) this.core.$element.off(e, this.handlers[e]);
                    for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
                }, e.fn.owlCarousel.Constructor.Plugins.Animate = o
            }(window.Zepto || window.jQuery, window, document),
            function(e, t, i, n) {
                var o = function t(i) {
                    this._core = i, this._call = null, this._time = 0, this._timeout = 0, this._paused = !0, this._handlers = {
                        "changed.owl.carousel": e.proxy((function(e) {
                            e.namespace && "settings" === e.property.name ? this._core.settings.autoplay ? this.play() : this.stop() : e.namespace && "position" === e.property.name && this._paused && (this._time = 0)
                        }), this),
                        "initialized.owl.carousel": e.proxy((function(e) {
                            e.namespace && this._core.settings.autoplay && this.play()
                        }), this),
                        "play.owl.autoplay": e.proxy((function(e, t, i) {
                            e.namespace && this.play(t, i)
                        }), this),
                        "stop.owl.autoplay": e.proxy((function(e) {
                            e.namespace && this.stop()
                        }), this),
                        "mouseover.owl.autoplay": e.proxy((function() {
                            this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
                        }), this),
                        "mouseleave.owl.autoplay": e.proxy((function() {
                            this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play()
                        }), this),
                        "touchstart.owl.core": e.proxy((function() {
                            this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
                        }), this),
                        "touchend.owl.core": e.proxy((function() {
                            this._core.settings.autoplayHoverPause && this.play()
                        }), this)
                    }, this._core.$element.on(this._handlers), this._core.options = e.extend({}, t.Defaults, this._core.options)
                };
                o.Defaults = {
                    autoplay: !1,
                    autoplayTimeout: 5e3,
                    autoplayHoverPause: !1,
                    autoplaySpeed: !1
                }, o.prototype._next = function(n) {
                    this._call = t.setTimeout(e.proxy(this._next, this, n), this._timeout * (Math.round(this.read() / this._timeout) + 1) - this.read()), this._core.is("interacting") || i.hidden || this._core.next(n || this._core.settings.autoplaySpeed)
                }, o.prototype.read = function() {
                    return (new Date).getTime() - this._time
                }, o.prototype.play = function(i, n) {
                    var o;
                    this._core.is("rotating") || this._core.enter("rotating"), i = i || this._core.settings.autoplayTimeout, o = Math.min(this._time % (this._timeout || i), i), this._paused ? (this._time = this.read(), this._paused = !1) : t.clearTimeout(this._call), this._time += this.read() % i - o, this._timeout = i, this._call = t.setTimeout(e.proxy(this._next, this, n), i - o)
                }, o.prototype.stop = function() {
                    this._core.is("rotating") && (this._time = 0, this._paused = !0, t.clearTimeout(this._call), this._core.leave("rotating"))
                }, o.prototype.pause = function() {
                    this._core.is("rotating") && !this._paused && (this._time = this.read(), this._paused = !0, t.clearTimeout(this._call))
                }, o.prototype.destroy = function() {
                    var e, t;
                    for (e in this.stop(), this._handlers) this._core.$element.off(e, this._handlers[e]);
                    for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
                }, e.fn.owlCarousel.Constructor.Plugins.autoplay = o
            }(window.Zepto || window.jQuery, window, document),
            function(e, t, i, n) {
                "use strict";
                var o = function t(i) {
                    this._core = i, this._initialized = !1, this._pages = [], this._controls = {}, this._templates = [], this.$element = this._core.$element, this._overrides = {
                        next: this._core.next,
                        prev: this._core.prev,
                        to: this._core.to
                    }, this._handlers = {
                        "prepared.owl.carousel": e.proxy((function(t) {
                            t.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + e(t.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "</div>")
                        }), this),
                        "added.owl.carousel": e.proxy((function(e) {
                            e.namespace && this._core.settings.dotsData && this._templates.splice(e.position, 0, this._templates.pop())
                        }), this),
                        "remove.owl.carousel": e.proxy((function(e) {
                            e.namespace && this._core.settings.dotsData && this._templates.splice(e.position, 1)
                        }), this),
                        "changed.owl.carousel": e.proxy((function(e) {
                            e.namespace && "position" == e.property.name && this.draw()
                        }), this),
                        "initialized.owl.carousel": e.proxy((function(e) {
                            e.namespace && !this._initialized && (this._core.trigger("initialize", null, "navigation"), this.initialize(), this.update(), this.draw(), this._initialized = !0, this._core.trigger("initialized", null, "navigation"))
                        }), this),
                        "refreshed.owl.carousel": e.proxy((function(e) {
                            e.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation"))
                        }), this)
                    }, this._core.options = e.extend({}, t.Defaults, this._core.options), this.$element.on(this._handlers)
                };
                o.Defaults = {
                    nav: !1,
                    navText: ['<span aria-label="Previous">&#x2039;</span>', '<span aria-label="Next">&#x203a;</span>'],
                    navSpeed: !1,
                    navElement: 'button type="button" role="presentation"',
                    navContainer: !1,
                    navContainerClass: "owl-nav",
                    navClass: ["owl-prev", "owl-next"],
                    slideBy: 1,
                    dotClass: "owl-dot",
                    dotsClass: "owl-dots",
                    dots: !0,
                    dotsEach: !1,
                    dotsData: !1,
                    dotsSpeed: !1,
                    dotsContainer: !1
                }, o.prototype.initialize = function() {
                    var t, i = this._core.settings;
                    for (t in this._controls.$relative = (i.navContainer ? e(i.navContainer) : e("<div>").addClass(i.navContainerClass).appendTo(this.$element)).addClass("disabled"), this._controls.$previous = e("<" + i.navElement + ">").addClass(i.navClass[0]).html(i.navText[0]).prependTo(this._controls.$relative).on("click", e.proxy((function(e) {
                            this.prev(i.navSpeed)
                        }), this)), this._controls.$next = e("<" + i.navElement + ">").addClass(i.navClass[1]).html(i.navText[1]).appendTo(this._controls.$relative).on("click", e.proxy((function(e) {
                            this.next(i.navSpeed)
                        }), this)), i.dotsData || (this._templates = [e('<button role="button">').addClass(i.dotClass).append(e("<span>")).prop("outerHTML")]), this._controls.$absolute = (i.dotsContainer ? e(i.dotsContainer) : e("<div>").addClass(i.dotsClass).appendTo(this.$element)).addClass("disabled"), this._controls.$absolute.on("click", "button", e.proxy((function(t) {
                            var n = e(t.target).parent().is(this._controls.$absolute) ? e(t.target).index() : e(t.target).parent().index();
                            t.preventDefault(), this.to(n, i.dotsSpeed)
                        }), this)), this._overrides) this._core[t] = e.proxy(this[t], this)
                }, o.prototype.destroy = function() {
                    var e, t, i, n, o;
                    for (e in o = this._core.settings, this._handlers) this.$element.off(e, this._handlers[e]);
                    for (t in this._controls) "$relative" === t && o.navContainer ? this._controls[t].html("") : this._controls[t].remove();
                    for (n in this.overides) this._core[n] = this._overrides[n];
                    for (i in Object.getOwnPropertyNames(this)) "function" != typeof this[i] && (this[i] = null)
                }, o.prototype.update = function() {
                    var e, t, i = this._core.clones().length / 2,
                        n = i + this._core.items().length,
                        o = this._core.maximum(!0),
                        r = this._core.settings,
                        s = r.center || r.autoWidth || r.dotsData ? 1 : r.dotsEach || r.items;
                    if ("page" !== r.slideBy && (r.slideBy = Math.min(r.slideBy, r.items)), r.dots || "page" == r.slideBy)
                        for (this._pages = [], e = i, t = 0, 0; e < n; e++) {
                            if (t >= s || 0 === t) {
                                if (this._pages.push({
                                        start: Math.min(o, e - i),
                                        end: e - i + s - 1
                                    }), Math.min(o, e - i) === o) break;
                                t = 0
                            }
                            t += this._core.mergers(this._core.relative(e))
                        }
                }, o.prototype.draw = function() {
                    var t, i = this._core.settings,
                        n = this._core.items().length <= i.items,
                        o = this._core.relative(this._core.current()),
                        r = i.loop || i.rewind;
                    this._controls.$relative.toggleClass("disabled", !i.nav || n), i.nav && (this._controls.$previous.toggleClass("disabled", !r && o <= this._core.minimum(!0)), this._controls.$next.toggleClass("disabled", !r && o >= this._core.maximum(!0))), this._controls.$absolute.toggleClass("disabled", !i.dots || n), i.dots && (t = this._pages.length - this._controls.$absolute.children().length, i.dotsData && 0 !== t ? this._controls.$absolute.html(this._templates.join("")) : t > 0 ? this._controls.$absolute.append(new Array(t + 1).join(this._templates[0])) : t < 0 && this._controls.$absolute.children().slice(t).remove(), this._controls.$absolute.find(".active").removeClass("active"), this._controls.$absolute.children().eq(e.inArray(this.current(), this._pages)).addClass("active"))
                }, o.prototype.onTrigger = function(t) {
                    var i = this._core.settings;
                    t.page = {
                        index: e.inArray(this.current(), this._pages),
                        count: this._pages.length,
                        size: i && (i.center || i.autoWidth || i.dotsData ? 1 : i.dotsEach || i.items)
                    }
                }, o.prototype.current = function() {
                    var t = this._core.relative(this._core.current());
                    return e.grep(this._pages, e.proxy((function(e, i) {
                        return e.start <= t && e.end >= t
                    }), this)).pop()
                }, o.prototype.getPosition = function(t) {
                    var i, n, o = this._core.settings;
                    return "page" == o.slideBy ? (i = e.inArray(this.current(), this._pages), n = this._pages.length, t ? ++i : --i, i = this._pages[(i % n + n) % n].start) : (i = this._core.relative(this._core.current()), n = this._core.items().length, t ? i += o.slideBy : i -= o.slideBy), i
                }, o.prototype.next = function(t) {
                    e.proxy(this._overrides.to, this._core)(this.getPosition(!0), t)
                }, o.prototype.prev = function(t) {
                    e.proxy(this._overrides.to, this._core)(this.getPosition(!1), t)
                }, o.prototype.to = function(t, i, n) {
                    var o;
                    !n && this._pages.length ? (o = this._pages.length, e.proxy(this._overrides.to, this._core)(this._pages[(t % o + o) % o].start, i)) : e.proxy(this._overrides.to, this._core)(t, i)
                }, e.fn.owlCarousel.Constructor.Plugins.Navigation = o
            }(window.Zepto || window.jQuery, window, document),
            function(e, t, i, n) {
                "use strict";
                var o = function i(n) {
                    this._core = n, this._hashes = {}, this.$element = this._core.$element, this._handlers = {
                        "initialized.owl.carousel": e.proxy((function(i) {
                            i.namespace && "URLHash" === this._core.settings.startPosition && e(t).trigger("hashchange.owl.navigation")
                        }), this),
                        "prepared.owl.carousel": e.proxy((function(t) {
                            if (t.namespace) {
                                var i = e(t.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                                if (!i) return;
                                this._hashes[i] = t.content
                            }
                        }), this),
                        "changed.owl.carousel": e.proxy((function(i) {
                            if (i.namespace && "position" === i.property.name) {
                                var n = this._core.items(this._core.relative(this._core.current())),
                                    o = e.map(this._hashes, (function(e, t) {
                                        return e === n ? t : null
                                    })).join();
                                if (!o || t.location.hash.slice(1) === o) return;
                                t.location.hash = o
                            }
                        }), this)
                    }, this._core.options = e.extend({}, i.Defaults, this._core.options), this.$element.on(this._handlers), e(t).on("hashchange.owl.navigation", e.proxy((function(e) {
                        var i = t.location.hash.substring(1),
                            n = this._core.$stage.children(),
                            o = this._hashes[i] && n.index(this._hashes[i]);
                        void 0 !== o && o !== this._core.current() && this._core.to(this._core.relative(o), !1, !0)
                    }), this))
                };
                o.Defaults = {
                    URLhashListener: !1
                }, o.prototype.destroy = function() {
                    var i, n;
                    for (i in e(t).off("hashchange.owl.navigation"), this._handlers) this._core.$element.off(i, this._handlers[i]);
                    for (n in Object.getOwnPropertyNames(this)) "function" != typeof this[n] && (this[n] = null)
                }, e.fn.owlCarousel.Constructor.Plugins.Hash = o
            }(window.Zepto || window.jQuery, window, document),
            function(e, t, i, n) {
                function o(t, i) {
                    var n = !1,
                        o = t.charAt(0).toUpperCase() + t.slice(1);
                    return e.each((t + " " + a.join(o + " ") + o).split(" "), (function(e, t) {
                        if (void 0 !== s[t]) return n = !i || t, !1
                    })), n
                }

                function r(e) {
                    return o(e, !0)
                }
                var s = e("<support>").get(0).style,
                    a = "Webkit Moz O ms".split(" "),
                    l = {
                        transition: {
                            end: {
                                WebkitTransition: "webkitTransitionEnd",
                                MozTransition: "transitionend",
                                OTransition: "oTransitionEnd",
                                transition: "transitionend"
                            }
                        },
                        animation: {
                            end: {
                                WebkitAnimation: "webkitAnimationEnd",
                                MozAnimation: "animationend",
                                OAnimation: "oAnimationEnd",
                                animation: "animationend"
                            }
                        }
                    },
                    c = function() {
                        return !!o("transform")
                    },
                    u = function() {
                        return !!o("perspective")
                    },
                    d = function() {
                        return !!o("animation")
                    };
                (function() {
                    return !!o("transition")
                })() && (e.support.transition = new String(r("transition")), e.support.transition.end = l.transition.end[e.support.transition]), d() && (e.support.animation = new String(r("animation")), e.support.animation.end = l.animation.end[e.support.animation]), c() && (e.support.transform = new String(r("transform")), e.support.transform3d = u())
            }(window.Zepto || window.jQuery, window, document)
    },
    EVdn: function(e, t, i) {
        var n;
        ! function(t, i) {
            "use strict";
            "object" == typeof e.exports ? e.exports = t.document ? i(t, !0) : function(e) {
                if (!e.document) throw new Error("jQuery requires a window with a document");
                return i(e)
            } : i(t)
        }("undefined" != typeof window ? window : this, (function(i, o) {
            "use strict";
            var r = [],
                s = i.document,
                a = Object.getPrototypeOf,
                l = r.slice,
                c = r.concat,
                u = r.push,
                d = r.indexOf,
                h = {},
                p = h.toString,
                f = h.hasOwnProperty,
                m = f.toString,
                g = m.call(Object),
                v = {},
                y = function(e) {
                    return "function" == typeof e && "number" != typeof e.nodeType
                },
                w = function(e) {
                    return null != e && e === e.window
                },
                b = {
                    type: !0,
                    src: !0,
                    noModule: !0
                };

            function _(e, t, i) {
                var n, o = (t = t || s).createElement("script");
                if (o.text = e, i)
                    for (n in b) i[n] && (o[n] = i[n]);
                t.head.appendChild(o).parentNode.removeChild(o)
            }

            function x(e) {
                return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? h[p.call(e)] || "object" : typeof e
            }
            var C = function(e, t) {
                    return new C.fn.init(e, t)
                },
                k = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

            function $(e) {
                var t = !!e && "length" in e && e.length,
                    i = x(e);
                return !y(e) && !w(e) && ("array" === i || 0 === t || "number" == typeof t && t > 0 && t - 1 in e)
            }
            C.fn = C.prototype = {
                jquery: "3.3.1",
                constructor: C,
                length: 0,
                toArray: function() {
                    return l.call(this)
                },
                get: function(e) {
                    return null == e ? l.call(this) : e < 0 ? this[e + this.length] : this[e]
                },
                pushStack: function(e) {
                    var t = C.merge(this.constructor(), e);
                    return t.prevObject = this, t
                },
                each: function(e) {
                    return C.each(this, e)
                },
                map: function(e) {
                    return this.pushStack(C.map(this, (function(t, i) {
                        return e.call(t, i, t)
                    })))
                },
                slice: function() {
                    return this.pushStack(l.apply(this, arguments))
                },
                first: function() {
                    return this.eq(0)
                },
                last: function() {
                    return this.eq(-1)
                },
                eq: function(e) {
                    var t = this.length,
                        i = +e + (e < 0 ? t : 0);
                    return this.pushStack(i >= 0 && i < t ? [this[i]] : [])
                },
                end: function() {
                    return this.prevObject || this.constructor()
                },
                push: u,
                sort: r.sort,
                splice: r.splice
            }, C.extend = C.fn.extend = function() {
                var e, t, i, n, o, r, s = arguments[0] || {},
                    a = 1,
                    l = arguments.length,
                    c = !1;
                for ("boolean" == typeof s && (c = s, s = arguments[a] || {}, a++), "object" == typeof s || y(s) || (s = {}), a === l && (s = this, a--); a < l; a++)
                    if (null != (e = arguments[a]))
                        for (t in e) i = s[t], s !== (n = e[t]) && (c && n && (C.isPlainObject(n) || (o = Array.isArray(n))) ? (o ? (o = !1, r = i && Array.isArray(i) ? i : []) : r = i && C.isPlainObject(i) ? i : {}, s[t] = C.extend(c, r, n)) : void 0 !== n && (s[t] = n));
                return s
            }, C.extend({
                expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""),
                isReady: !0,
                error: function(e) {
                    throw new Error(e)
                },
                noop: function() {},
                isPlainObject: function(e) {
                    var t, i;
                    return !(!e || "[object Object]" !== p.call(e)) && (!(t = a(e)) || "function" == typeof(i = f.call(t, "constructor") && t.constructor) && m.call(i) === g)
                },
                isEmptyObject: function(e) {
                    var t;
                    for (t in e) return !1;
                    return !0
                },
                globalEval: function(e) {
                    _(e)
                },
                each: function(e, t) {
                    var i, n = 0;
                    if ($(e))
                        for (i = e.length; n < i && !1 !== t.call(e[n], n, e[n]); n++);
                    else
                        for (n in e)
                            if (!1 === t.call(e[n], n, e[n])) break;
                    return e
                },
                trim: function(e) {
                    return null == e ? "" : (e + "").replace(k, "")
                },
                makeArray: function(e, t) {
                    var i = t || [];
                    return null != e && ($(Object(e)) ? C.merge(i, "string" == typeof e ? [e] : e) : u.call(i, e)), i
                },
                inArray: function(e, t, i) {
                    return null == t ? -1 : d.call(t, e, i)
                },
                merge: function(e, t) {
                    for (var i = +t.length, n = 0, o = e.length; n < i; n++) e[o++] = t[n];
                    return e.length = o, e
                },
                grep: function(e, t, i) {
                    for (var n = [], o = 0, r = e.length, s = !i; o < r; o++) !t(e[o], o) !== s && n.push(e[o]);
                    return n
                },
                map: function(e, t, i) {
                    var n, o, r = 0,
                        s = [];
                    if ($(e))
                        for (n = e.length; r < n; r++) null != (o = t(e[r], r, i)) && s.push(o);
                    else
                        for (r in e) null != (o = t(e[r], r, i)) && s.push(o);
                    return c.apply([], s)
                },
                guid: 1,
                support: v
            }), "function" == typeof Symbol && (C.fn[Symbol.iterator] = r[Symbol.iterator]), C.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), (function(e, t) {
                h["[object " + t + "]"] = t.toLowerCase()
            }));
            var T = function(e) {
                var t, i, n, o, r, s, a, l, c, u, d, h, p, f, m, g, v, y, w, b = "sizzle" + 1 * new Date,
                    _ = e.document,
                    x = 0,
                    C = 0,
                    k = se(),
                    $ = se(),
                    T = se(),
                    E = function(e, t) {
                        return e === t && (d = !0), 0
                    },
                    S = {}.hasOwnProperty,
                    A = [],
                    D = A.pop,
                    O = A.push,
                    I = A.push,
                    L = A.slice,
                    P = function(e, t) {
                        for (var i = 0, n = e.length; i < n; i++)
                            if (e[i] === t) return i;
                        return -1
                    },
                    z = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                    F = "[\\x20\\t\\r\\n\\f]",
                    M = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
                    N = "\\[" + F + "*(" + M + ")(?:" + F + "*([*^$|!~]?=)" + F + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + M + "))|)" + F + "*\\]",
                    j = ":(" + M + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + N + ")*)|.*)\\)|)",
                    R = new RegExp(F + "+", "g"),
                    H = new RegExp("^" + F + "+|((?:^|[^\\\\])(?:\\\\.)*)" + F + "+$", "g"),
                    B = new RegExp("^" + F + "*," + F + "*"),
                    q = new RegExp("^" + F + "*([>+~]|" + F + ")" + F + "*"),
                    W = new RegExp("=" + F + "*([^\\]'\"]*?)" + F + "*\\]", "g"),
                    U = new RegExp(j),
                    V = new RegExp("^" + M + "$"),
                    K = {
                        ID: new RegExp("^#(" + M + ")"),
                        CLASS: new RegExp("^\\.(" + M + ")"),
                        TAG: new RegExp("^(" + M + "|[*])"),
                        ATTR: new RegExp("^" + N),
                        PSEUDO: new RegExp("^" + j),
                        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + F + "*(even|odd|(([+-]|)(\\d*)n|)" + F + "*(?:([+-]|)" + F + "*(\\d+)|))" + F + "*\\)|)", "i"),
                        bool: new RegExp("^(?:" + z + ")$", "i"),
                        needsContext: new RegExp("^" + F + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + F + "*((?:-\\d)?\\d*)" + F + "*\\)|)(?=[^-]|$)", "i")
                    },
                    Y = /^(?:input|select|textarea|button)$/i,
                    Q = /^h\d$/i,
                    X = /^[^{]+\{\s*\[native \w/,
                    G = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                    Z = /[+~]/,
                    J = new RegExp("\\\\([\\da-f]{1,6}" + F + "?|(" + F + ")|.)", "ig"),
                    ee = function(e, t, i) {
                        var n = "0x" + t - 65536;
                        return n != n || i ? t : n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320)
                    },
                    te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
                    ie = function(e, t) {
                        return t ? "\0" === e ? "�" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
                    },
                    ne = function() {
                        h()
                    },
                    oe = ye((function(e) {
                        return !0 === e.disabled && ("form" in e || "label" in e)
                    }), {
                        dir: "parentNode",
                        next: "legend"
                    });
                try {
                    I.apply(A = L.call(_.childNodes), _.childNodes), A[_.childNodes.length].nodeType
                } catch (e) {
                    I = {
                        apply: A.length ? function(e, t) {
                            O.apply(e, L.call(t))
                        } : function(e, t) {
                            for (var i = e.length, n = 0; e[i++] = t[n++];);
                            e.length = i - 1
                        }
                    }
                }

                function re(e, t, n, o) {
                    var r, a, c, u, d, f, v, y = t && t.ownerDocument,
                        x = t ? t.nodeType : 9;
                    if (n = n || [], "string" != typeof e || !e || 1 !== x && 9 !== x && 11 !== x) return n;
                    if (!o && ((t ? t.ownerDocument || t : _) !== p && h(t), t = t || p, m)) {
                        if (11 !== x && (d = G.exec(e)))
                            if (r = d[1]) {
                                if (9 === x) {
                                    if (!(c = t.getElementById(r))) return n;
                                    if (c.id === r) return n.push(c), n
                                } else if (y && (c = y.getElementById(r)) && w(t, c) && c.id === r) return n.push(c), n
                            } else {
                                if (d[2]) return I.apply(n, t.getElementsByTagName(e)), n;
                                if ((r = d[3]) && i.getElementsByClassName && t.getElementsByClassName) return I.apply(n, t.getElementsByClassName(r)), n
                            }
                        if (i.qsa && !T[e + " "] && (!g || !g.test(e))) {
                            if (1 !== x) y = t, v = e;
                            else if ("object" !== t.nodeName.toLowerCase()) {
                                for ((u = t.getAttribute("id")) ? u = u.replace(te, ie) : t.setAttribute("id", u = b), a = (f = s(e)).length; a--;) f[a] = "#" + u + " " + ve(f[a]);
                                v = f.join(","), y = Z.test(e) && me(t.parentNode) || t
                            }
                            if (v) try {
                                return I.apply(n, y.querySelectorAll(v)), n
                            } catch (e) {} finally {
                                u === b && t.removeAttribute("id")
                            }
                        }
                    }
                    return l(e.replace(H, "$1"), t, n, o)
                }

                function se() {
                    var e = [];
                    return function t(i, o) {
                        return e.push(i + " ") > n.cacheLength && delete t[e.shift()], t[i + " "] = o
                    }
                }

                function ae(e) {
                    return e[b] = !0, e
                }

                function le(e) {
                    var t = p.createElement("fieldset");
                    try {
                        return !!e(t)
                    } catch (e) {
                        return !1
                    } finally {
                        t.parentNode && t.parentNode.removeChild(t), t = null
                    }
                }

                function ce(e, t) {
                    for (var i = e.split("|"), o = i.length; o--;) n.attrHandle[i[o]] = t
                }

                function ue(e, t) {
                    var i = t && e,
                        n = i && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
                    if (n) return n;
                    if (i)
                        for (; i = i.nextSibling;)
                            if (i === t) return -1;
                    return e ? 1 : -1
                }

                function de(e) {
                    return function(t) {
                        return "input" === t.nodeName.toLowerCase() && t.type === e
                    }
                }

                function he(e) {
                    return function(t) {
                        var i = t.nodeName.toLowerCase();
                        return ("input" === i || "button" === i) && t.type === e
                    }
                }

                function pe(e) {
                    return function(t) {
                        return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && oe(t) === e : t.disabled === e : "label" in t && t.disabled === e
                    }
                }

                function fe(e) {
                    return ae((function(t) {
                        return t = +t, ae((function(i, n) {
                            for (var o, r = e([], i.length, t), s = r.length; s--;) i[o = r[s]] && (i[o] = !(n[o] = i[o]))
                        }))
                    }))
                }

                function me(e) {
                    return e && void 0 !== e.getElementsByTagName && e
                }
                for (t in i = re.support = {}, r = re.isXML = function(e) {
                        var t = e && (e.ownerDocument || e).documentElement;
                        return !!t && "HTML" !== t.nodeName
                    }, h = re.setDocument = function(e) {
                        var t, o, s = e ? e.ownerDocument || e : _;
                        return s !== p && 9 === s.nodeType && s.documentElement ? (f = (p = s).documentElement, m = !r(p), _ !== p && (o = p.defaultView) && o.top !== o && (o.addEventListener ? o.addEventListener("unload", ne, !1) : o.attachEvent && o.attachEvent("onunload", ne)), i.attributes = le((function(e) {
                            return e.className = "i", !e.getAttribute("className")
                        })), i.getElementsByTagName = le((function(e) {
                            return e.appendChild(p.createComment("")), !e.getElementsByTagName("*").length
                        })), i.getElementsByClassName = X.test(p.getElementsByClassName), i.getById = le((function(e) {
                            return f.appendChild(e).id = b, !p.getElementsByName || !p.getElementsByName(b).length
                        })), i.getById ? (n.filter.ID = function(e) {
                            var t = e.replace(J, ee);
                            return function(e) {
                                return e.getAttribute("id") === t
                            }
                        }, n.find.ID = function(e, t) {
                            if (void 0 !== t.getElementById && m) {
                                var i = t.getElementById(e);
                                return i ? [i] : []
                            }
                        }) : (n.filter.ID = function(e) {
                            var t = e.replace(J, ee);
                            return function(e) {
                                var i = void 0 !== e.getAttributeNode && e.getAttributeNode("id");
                                return i && i.value === t
                            }
                        }, n.find.ID = function(e, t) {
                            if (void 0 !== t.getElementById && m) {
                                var i, n, o, r = t.getElementById(e);
                                if (r) {
                                    if ((i = r.getAttributeNode("id")) && i.value === e) return [r];
                                    for (o = t.getElementsByName(e), n = 0; r = o[n++];)
                                        if ((i = r.getAttributeNode("id")) && i.value === e) return [r]
                                }
                                return []
                            }
                        }), n.find.TAG = i.getElementsByTagName ? function(e, t) {
                            return void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e) : i.qsa ? t.querySelectorAll(e) : void 0
                        } : function(e, t) {
                            var i, n = [],
                                o = 0,
                                r = t.getElementsByTagName(e);
                            if ("*" === e) {
                                for (; i = r[o++];) 1 === i.nodeType && n.push(i);
                                return n
                            }
                            return r
                        }, n.find.CLASS = i.getElementsByClassName && function(e, t) {
                            if (void 0 !== t.getElementsByClassName && m) return t.getElementsByClassName(e)
                        }, v = [], g = [], (i.qsa = X.test(p.querySelectorAll)) && (le((function(e) {
                            f.appendChild(e).innerHTML = "<a id='" + b + "'></a><select id='" + b + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && g.push("[*^$]=" + F + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || g.push("\\[" + F + "*(?:value|" + z + ")"), e.querySelectorAll("[id~=" + b + "-]").length || g.push("~="), e.querySelectorAll(":checked").length || g.push(":checked"), e.querySelectorAll("a#" + b + "+*").length || g.push(".#.+[+~]")
                        })), le((function(e) {
                            e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                            var t = p.createElement("input");
                            t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && g.push("name" + F + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && g.push(":enabled", ":disabled"), f.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && g.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), g.push(",.*:")
                        }))), (i.matchesSelector = X.test(y = f.matches || f.webkitMatchesSelector || f.mozMatchesSelector || f.oMatchesSelector || f.msMatchesSelector)) && le((function(e) {
                            i.disconnectedMatch = y.call(e, "*"), y.call(e, "[s!='']:x"), v.push("!=", j)
                        })), g = g.length && new RegExp(g.join("|")), v = v.length && new RegExp(v.join("|")), t = X.test(f.compareDocumentPosition), w = t || X.test(f.contains) ? function(e, t) {
                            var i = 9 === e.nodeType ? e.documentElement : e,
                                n = t && t.parentNode;
                            return e === n || !(!n || 1 !== n.nodeType || !(i.contains ? i.contains(n) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(n)))
                        } : function(e, t) {
                            if (t)
                                for (; t = t.parentNode;)
                                    if (t === e) return !0;
                            return !1
                        }, E = t ? function(e, t) {
                            if (e === t) return d = !0, 0;
                            var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
                            return n || (1 & (n = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !i.sortDetached && t.compareDocumentPosition(e) === n ? e === p || e.ownerDocument === _ && w(_, e) ? -1 : t === p || t.ownerDocument === _ && w(_, t) ? 1 : u ? P(u, e) - P(u, t) : 0 : 4 & n ? -1 : 1)
                        } : function(e, t) {
                            if (e === t) return d = !0, 0;
                            var i, n = 0,
                                o = e.parentNode,
                                r = t.parentNode,
                                s = [e],
                                a = [t];
                            if (!o || !r) return e === p ? -1 : t === p ? 1 : o ? -1 : r ? 1 : u ? P(u, e) - P(u, t) : 0;
                            if (o === r) return ue(e, t);
                            for (i = e; i = i.parentNode;) s.unshift(i);
                            for (i = t; i = i.parentNode;) a.unshift(i);
                            for (; s[n] === a[n];) n++;
                            return n ? ue(s[n], a[n]) : s[n] === _ ? -1 : a[n] === _ ? 1 : 0
                        }, p) : p
                    }, re.matches = function(e, t) {
                        return re(e, null, null, t)
                    }, re.matchesSelector = function(e, t) {
                        if ((e.ownerDocument || e) !== p && h(e), t = t.replace(W, "='$1']"), i.matchesSelector && m && !T[t + " "] && (!v || !v.test(t)) && (!g || !g.test(t))) try {
                            var n = y.call(e, t);
                            if (n || i.disconnectedMatch || e.document && 11 !== e.document.nodeType) return n
                        } catch (e) {}
                        return re(t, p, null, [e]).length > 0
                    }, re.contains = function(e, t) {
                        return (e.ownerDocument || e) !== p && h(e), w(e, t)
                    }, re.attr = function(e, t) {
                        (e.ownerDocument || e) !== p && h(e);
                        var o = n.attrHandle[t.toLowerCase()],
                            r = o && S.call(n.attrHandle, t.toLowerCase()) ? o(e, t, !m) : void 0;
                        return void 0 !== r ? r : i.attributes || !m ? e.getAttribute(t) : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
                    }, re.escape = function(e) {
                        return (e + "").replace(te, ie)
                    }, re.error = function(e) {
                        throw new Error("Syntax error, unrecognized expression: " + e)
                    }, re.uniqueSort = function(e) {
                        var t, n = [],
                            o = 0,
                            r = 0;
                        if (d = !i.detectDuplicates, u = !i.sortStable && e.slice(0), e.sort(E), d) {
                            for (; t = e[r++];) t === e[r] && (o = n.push(r));
                            for (; o--;) e.splice(n[o], 1)
                        }
                        return u = null, e
                    }, o = re.getText = function(e) {
                        var t, i = "",
                            n = 0,
                            r = e.nodeType;
                        if (r) {
                            if (1 === r || 9 === r || 11 === r) {
                                if ("string" == typeof e.textContent) return e.textContent;
                                for (e = e.firstChild; e; e = e.nextSibling) i += o(e)
                            } else if (3 === r || 4 === r) return e.nodeValue
                        } else
                            for (; t = e[n++];) i += o(t);
                        return i
                    }, (n = re.selectors = {
                        cacheLength: 50,
                        createPseudo: ae,
                        match: K,
                        attrHandle: {},
                        find: {},
                        relative: {
                            ">": {
                                dir: "parentNode",
                                first: !0
                            },
                            " ": {
                                dir: "parentNode"
                            },
                            "+": {
                                dir: "previousSibling",
                                first: !0
                            },
                            "~": {
                                dir: "previousSibling"
                            }
                        },
                        preFilter: {
                            ATTR: function(e) {
                                return e[1] = e[1].replace(J, ee), e[3] = (e[3] || e[4] || e[5] || "").replace(J, ee), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                            },
                            CHILD: function(e) {
                                return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || re.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && re.error(e[0]), e
                            },
                            PSEUDO: function(e) {
                                var t, i = !e[6] && e[2];
                                return K.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : i && U.test(i) && (t = s(i, !0)) && (t = i.indexOf(")", i.length - t) - i.length) && (e[0] = e[0].slice(0, t), e[2] = i.slice(0, t)), e.slice(0, 3))
                            }
                        },
                        filter: {
                            TAG: function(e) {
                                var t = e.replace(J, ee).toLowerCase();
                                return "*" === e ? function() {
                                    return !0
                                } : function(e) {
                                    return e.nodeName && e.nodeName.toLowerCase() === t
                                }
                            },
                            CLASS: function(e) {
                                var t = k[e + " "];
                                return t || (t = new RegExp("(^|" + F + ")" + e + "(" + F + "|$)")) && k(e, (function(e) {
                                    return t.test("string" == typeof e.className && e.className || void 0 !== e.getAttribute && e.getAttribute("class") || "")
                                }))
                            },
                            ATTR: function(e, t, i) {
                                return function(n) {
                                    var o = re.attr(n, e);
                                    return null == o ? "!=" === t : !t || (o += "", "=" === t ? o === i : "!=" === t ? o !== i : "^=" === t ? i && 0 === o.indexOf(i) : "*=" === t ? i && o.indexOf(i) > -1 : "$=" === t ? i && o.slice(-i.length) === i : "~=" === t ? (" " + o.replace(R, " ") + " ").indexOf(i) > -1 : "|=" === t && (o === i || o.slice(0, i.length + 1) === i + "-"))
                                }
                            },
                            CHILD: function(e, t, i, n, o) {
                                var r = "nth" !== e.slice(0, 3),
                                    s = "last" !== e.slice(-4),
                                    a = "of-type" === t;
                                return 1 === n && 0 === o ? function(e) {
                                    return !!e.parentNode
                                } : function(t, i, l) {
                                    var c, u, d, h, p, f, m = r !== s ? "nextSibling" : "previousSibling",
                                        g = t.parentNode,
                                        v = a && t.nodeName.toLowerCase(),
                                        y = !l && !a,
                                        w = !1;
                                    if (g) {
                                        if (r) {
                                            for (; m;) {
                                                for (h = t; h = h[m];)
                                                    if (a ? h.nodeName.toLowerCase() === v : 1 === h.nodeType) return !1;
                                                f = m = "only" === e && !f && "nextSibling"
                                            }
                                            return !0
                                        }
                                        if (f = [s ? g.firstChild : g.lastChild], s && y) {
                                            for (w = (p = (c = (u = (d = (h = g)[b] || (h[b] = {}))[h.uniqueID] || (d[h.uniqueID] = {}))[e] || [])[0] === x && c[1]) && c[2], h = p && g.childNodes[p]; h = ++p && h && h[m] || (w = p = 0) || f.pop();)
                                                if (1 === h.nodeType && ++w && h === t) {
                                                    u[e] = [x, p, w];
                                                    break
                                                }
                                        } else if (y && (w = p = (c = (u = (d = (h = t)[b] || (h[b] = {}))[h.uniqueID] || (d[h.uniqueID] = {}))[e] || [])[0] === x && c[1]), !1 === w)
                                            for (;
                                                (h = ++p && h && h[m] || (w = p = 0) || f.pop()) && ((a ? h.nodeName.toLowerCase() !== v : 1 !== h.nodeType) || !++w || (y && ((u = (d = h[b] || (h[b] = {}))[h.uniqueID] || (d[h.uniqueID] = {}))[e] = [x, w]), h !== t)););
                                        return (w -= o) === n || w % n == 0 && w / n >= 0
                                    }
                                }
                            },
                            PSEUDO: function(e, t) {
                                var i, o = n.pseudos[e] || n.setFilters[e.toLowerCase()] || re.error("unsupported pseudo: " + e);
                                return o[b] ? o(t) : o.length > 1 ? (i = [e, e, "", t], n.setFilters.hasOwnProperty(e.toLowerCase()) ? ae((function(e, i) {
                                    for (var n, r = o(e, t), s = r.length; s--;) e[n = P(e, r[s])] = !(i[n] = r[s])
                                })) : function(e) {
                                    return o(e, 0, i)
                                }) : o
                            }
                        },
                        pseudos: {
                            not: ae((function(e) {
                                var t = [],
                                    i = [],
                                    n = a(e.replace(H, "$1"));
                                return n[b] ? ae((function(e, t, i, o) {
                                    for (var r, s = n(e, null, o, []), a = e.length; a--;)(r = s[a]) && (e[a] = !(t[a] = r))
                                })) : function(e, o, r) {
                                    return t[0] = e, n(t, null, r, i), t[0] = null, !i.pop()
                                }
                            })),
                            has: ae((function(e) {
                                return function(t) {
                                    return re(e, t).length > 0
                                }
                            })),
                            contains: ae((function(e) {
                                return e = e.replace(J, ee),
                                    function(t) {
                                        return (t.textContent || t.innerText || o(t)).indexOf(e) > -1
                                    }
                            })),
                            lang: ae((function(e) {
                                return V.test(e || "") || re.error("unsupported lang: " + e), e = e.replace(J, ee).toLowerCase(),
                                    function(t) {
                                        var i;
                                        do {
                                            if (i = m ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (i = i.toLowerCase()) === e || 0 === i.indexOf(e + "-")
                                        } while ((t = t.parentNode) && 1 === t.nodeType);
                                        return !1
                                    }
                            })),
                            target: function(t) {
                                var i = e.location && e.location.hash;
                                return i && i.slice(1) === t.id
                            },
                            root: function(e) {
                                return e === f
                            },
                            focus: function(e) {
                                return e === p.activeElement && (!p.hasFocus || p.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                            },
                            enabled: pe(!1),
                            disabled: pe(!0),
                            checked: function(e) {
                                var t = e.nodeName.toLowerCase();
                                return "input" === t && !!e.checked || "option" === t && !!e.selected
                            },
                            selected: function(e) {
                                return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
                            },
                            empty: function(e) {
                                for (e = e.firstChild; e; e = e.nextSibling)
                                    if (e.nodeType < 6) return !1;
                                return !0
                            },
                            parent: function(e) {
                                return !n.pseudos.empty(e)
                            },
                            header: function(e) {
                                return Q.test(e.nodeName)
                            },
                            input: function(e) {
                                return Y.test(e.nodeName)
                            },
                            button: function(e) {
                                var t = e.nodeName.toLowerCase();
                                return "input" === t && "button" === e.type || "button" === t
                            },
                            text: function(e) {
                                var t;
                                return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                            },
                            first: fe((function() {
                                return [0]
                            })),
                            last: fe((function(e, t) {
                                return [t - 1]
                            })),
                            eq: fe((function(e, t, i) {
                                return [i < 0 ? i + t : i]
                            })),
                            even: fe((function(e, t) {
                                for (var i = 0; i < t; i += 2) e.push(i);
                                return e
                            })),
                            odd: fe((function(e, t) {
                                for (var i = 1; i < t; i += 2) e.push(i);
                                return e
                            })),
                            lt: fe((function(e, t, i) {
                                for (var n = i < 0 ? i + t : i; --n >= 0;) e.push(n);
                                return e
                            })),
                            gt: fe((function(e, t, i) {
                                for (var n = i < 0 ? i + t : i; ++n < t;) e.push(n);
                                return e
                            }))
                        }
                    }).pseudos.nth = n.pseudos.eq, {
                        radio: !0,
                        checkbox: !0,
                        file: !0,
                        password: !0,
                        image: !0
                    }) n.pseudos[t] = de(t);
                for (t in {
                        submit: !0,
                        reset: !0
                    }) n.pseudos[t] = he(t);

                function ge() {}

                function ve(e) {
                    for (var t = 0, i = e.length, n = ""; t < i; t++) n += e[t].value;
                    return n
                }

                function ye(e, t, i) {
                    var n = t.dir,
                        o = t.next,
                        r = o || n,
                        s = i && "parentNode" === r,
                        a = C++;
                    return t.first ? function(t, i, o) {
                        for (; t = t[n];)
                            if (1 === t.nodeType || s) return e(t, i, o);
                        return !1
                    } : function(t, i, l) {
                        var c, u, d, h = [x, a];
                        if (l) {
                            for (; t = t[n];)
                                if ((1 === t.nodeType || s) && e(t, i, l)) return !0
                        } else
                            for (; t = t[n];)
                                if (1 === t.nodeType || s)
                                    if (u = (d = t[b] || (t[b] = {}))[t.uniqueID] || (d[t.uniqueID] = {}), o && o === t.nodeName.toLowerCase()) t = t[n] || t;
                                    else {
                                        if ((c = u[r]) && c[0] === x && c[1] === a) return h[2] = c[2];
                                        if (u[r] = h, h[2] = e(t, i, l)) return !0
                                    } return !1
                    }
                }

                function we(e) {
                    return e.length > 1 ? function(t, i, n) {
                        for (var o = e.length; o--;)
                            if (!e[o](t, i, n)) return !1;
                        return !0
                    } : e[0]
                }

                function be(e, t, i, n, o) {
                    for (var r, s = [], a = 0, l = e.length, c = null != t; a < l; a++)(r = e[a]) && (i && !i(r, n, o) || (s.push(r), c && t.push(a)));
                    return s
                }

                function _e(e, t, i, n, o, r) {
                    return n && !n[b] && (n = _e(n)), o && !o[b] && (o = _e(o, r)), ae((function(r, s, a, l) {
                        var c, u, d, h = [],
                            p = [],
                            f = s.length,
                            m = r || function(e, t, i) {
                                for (var n = 0, o = t.length; n < o; n++) re(e, t[n], i);
                                return i
                            }(t || "*", a.nodeType ? [a] : a, []),
                            g = !e || !r && t ? m : be(m, h, e, a, l),
                            v = i ? o || (r ? e : f || n) ? [] : s : g;
                        if (i && i(g, v, a, l), n)
                            for (c = be(v, p), n(c, [], a, l), u = c.length; u--;)(d = c[u]) && (v[p[u]] = !(g[p[u]] = d));
                        if (r) {
                            if (o || e) {
                                if (o) {
                                    for (c = [], u = v.length; u--;)(d = v[u]) && c.push(g[u] = d);
                                    o(null, v = [], c, l)
                                }
                                for (u = v.length; u--;)(d = v[u]) && (c = o ? P(r, d) : h[u]) > -1 && (r[c] = !(s[c] = d))
                            }
                        } else v = be(v === s ? v.splice(f, v.length) : v), o ? o(null, s, v, l) : I.apply(s, v)
                    }))
                }

                function xe(e) {
                    for (var t, i, o, r = e.length, s = n.relative[e[0].type], a = s || n.relative[" "], l = s ? 1 : 0, u = ye((function(e) {
                            return e === t
                        }), a, !0), d = ye((function(e) {
                            return P(t, e) > -1
                        }), a, !0), h = [function(e, i, n) {
                            var o = !s && (n || i !== c) || ((t = i).nodeType ? u(e, i, n) : d(e, i, n));
                            return t = null, o
                        }]; l < r; l++)
                        if (i = n.relative[e[l].type]) h = [ye(we(h), i)];
                        else {
                            if ((i = n.filter[e[l].type].apply(null, e[l].matches))[b]) {
                                for (o = ++l; o < r && !n.relative[e[o].type]; o++);
                                return _e(l > 1 && we(h), l > 1 && ve(e.slice(0, l - 1).concat({
                                    value: " " === e[l - 2].type ? "*" : ""
                                })).replace(H, "$1"), i, l < o && xe(e.slice(l, o)), o < r && xe(e = e.slice(o)), o < r && ve(e))
                            }
                            h.push(i)
                        }
                    return we(h)
                }
                return ge.prototype = n.filters = n.pseudos, n.setFilters = new ge, s = re.tokenize = function(e, t) {
                    var i, o, r, s, a, l, c, u = $[e + " "];
                    if (u) return t ? 0 : u.slice(0);
                    for (a = e, l = [], c = n.preFilter; a;) {
                        for (s in i && !(o = B.exec(a)) || (o && (a = a.slice(o[0].length) || a), l.push(r = [])), i = !1, (o = q.exec(a)) && (i = o.shift(), r.push({
                                value: i,
                                type: o[0].replace(H, " ")
                            }), a = a.slice(i.length)), n.filter) !(o = K[s].exec(a)) || c[s] && !(o = c[s](o)) || (i = o.shift(), r.push({
                            value: i,
                            type: s,
                            matches: o
                        }), a = a.slice(i.length));
                        if (!i) break
                    }
                    return t ? a.length : a ? re.error(e) : $(e, l).slice(0)
                }, a = re.compile = function(e, t) {
                    var i, o = [],
                        r = [],
                        a = T[e + " "];
                    if (!a) {
                        for (t || (t = s(e)), i = t.length; i--;)(a = xe(t[i]))[b] ? o.push(a) : r.push(a);
                        (a = T(e, function(e, t) {
                            var i = t.length > 0,
                                o = e.length > 0,
                                r = function(r, s, a, l, u) {
                                    var d, f, g, v = 0,
                                        y = "0",
                                        w = r && [],
                                        b = [],
                                        _ = c,
                                        C = r || o && n.find.TAG("*", u),
                                        k = x += null == _ ? 1 : Math.random() || .1,
                                        $ = C.length;
                                    for (u && (c = s === p || s || u); y !== $ && null != (d = C[y]); y++) {
                                        if (o && d) {
                                            for (f = 0, s || d.ownerDocument === p || (h(d), a = !m); g = e[f++];)
                                                if (g(d, s || p, a)) {
                                                    l.push(d);
                                                    break
                                                }
                                            u && (x = k)
                                        }
                                        i && ((d = !g && d) && v--, r && w.push(d))
                                    }
                                    if (v += y, i && y !== v) {
                                        for (f = 0; g = t[f++];) g(w, b, s, a);
                                        if (r) {
                                            if (v > 0)
                                                for (; y--;) w[y] || b[y] || (b[y] = D.call(l));
                                            b = be(b)
                                        }
                                        I.apply(l, b), u && !r && b.length > 0 && v + t.length > 1 && re.uniqueSort(l)
                                    }
                                    return u && (x = k, c = _), w
                                };
                            return i ? ae(r) : r
                        }(r, o))).selector = e
                    }
                    return a
                }, l = re.select = function(e, t, i, o) {
                    var r, l, c, u, d, h = "function" == typeof e && e,
                        p = !o && s(e = h.selector || e);
                    if (i = i || [], 1 === p.length) {
                        if ((l = p[0] = p[0].slice(0)).length > 2 && "ID" === (c = l[0]).type && 9 === t.nodeType && m && n.relative[l[1].type]) {
                            if (!(t = (n.find.ID(c.matches[0].replace(J, ee), t) || [])[0])) return i;
                            h && (t = t.parentNode), e = e.slice(l.shift().value.length)
                        }
                        for (r = K.needsContext.test(e) ? 0 : l.length; r-- && (c = l[r], !n.relative[u = c.type]);)
                            if ((d = n.find[u]) && (o = d(c.matches[0].replace(J, ee), Z.test(l[0].type) && me(t.parentNode) || t))) {
                                if (l.splice(r, 1), !(e = o.length && ve(l))) return I.apply(i, o), i;
                                break
                            }
                    }
                    return (h || a(e, p))(o, t, !m, i, !t || Z.test(e) && me(t.parentNode) || t), i
                }, i.sortStable = b.split("").sort(E).join("") === b, i.detectDuplicates = !!d, h(), i.sortDetached = le((function(e) {
                    return 1 & e.compareDocumentPosition(p.createElement("fieldset"))
                })), le((function(e) {
                    return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
                })) || ce("type|href|height|width", (function(e, t, i) {
                    if (!i) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
                })), i.attributes && le((function(e) {
                    return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
                })) || ce("value", (function(e, t, i) {
                    if (!i && "input" === e.nodeName.toLowerCase()) return e.defaultValue
                })), le((function(e) {
                    return null == e.getAttribute("disabled")
                })) || ce(z, (function(e, t, i) {
                    var n;
                    if (!i) return !0 === e[t] ? t.toLowerCase() : (n = e.getAttributeNode(t)) && n.specified ? n.value : null
                })), re
            }(i);
            C.find = T, C.expr = T.selectors, C.expr[":"] = C.expr.pseudos, C.uniqueSort = C.unique = T.uniqueSort, C.text = T.getText, C.isXMLDoc = T.isXML, C.contains = T.contains, C.escapeSelector = T.escape;
            var E = function(e, t, i) {
                    for (var n = [], o = void 0 !== i;
                        (e = e[t]) && 9 !== e.nodeType;)
                        if (1 === e.nodeType) {
                            if (o && C(e).is(i)) break;
                            n.push(e)
                        }
                    return n
                },
                S = function(e, t) {
                    for (var i = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && i.push(e);
                    return i
                },
                A = C.expr.match.needsContext;

            function D(e, t) {
                return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
            }
            var O = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

            function I(e, t, i) {
                return y(t) ? C.grep(e, (function(e, n) {
                    return !!t.call(e, n, e) !== i
                })) : t.nodeType ? C.grep(e, (function(e) {
                    return e === t !== i
                })) : "string" != typeof t ? C.grep(e, (function(e) {
                    return d.call(t, e) > -1 !== i
                })) : C.filter(t, e, i)
            }
            C.filter = function(e, t, i) {
                var n = t[0];
                return i && (e = ":not(" + e + ")"), 1 === t.length && 1 === n.nodeType ? C.find.matchesSelector(n, e) ? [n] : [] : C.find.matches(e, C.grep(t, (function(e) {
                    return 1 === e.nodeType
                })))
            }, C.fn.extend({
                find: function(e) {
                    var t, i, n = this.length,
                        o = this;
                    if ("string" != typeof e) return this.pushStack(C(e).filter((function() {
                        for (t = 0; t < n; t++)
                            if (C.contains(o[t], this)) return !0
                    })));
                    for (i = this.pushStack([]), t = 0; t < n; t++) C.find(e, o[t], i);
                    return n > 1 ? C.uniqueSort(i) : i
                },
                filter: function(e) {
                    return this.pushStack(I(this, e || [], !1))
                },
                not: function(e) {
                    return this.pushStack(I(this, e || [], !0))
                },
                is: function(e) {
                    return !!I(this, "string" == typeof e && A.test(e) ? C(e) : e || [], !1).length
                }
            });
            var L, P = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
            (C.fn.init = function(e, t, i) {
                var n, o;
                if (!e) return this;
                if (i = i || L, "string" == typeof e) {
                    if (!(n = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : P.exec(e)) || !n[1] && t) return !t || t.jquery ? (t || i).find(e) : this.constructor(t).find(e);
                    if (n[1]) {
                        if (t = t instanceof C ? t[0] : t, C.merge(this, C.parseHTML(n[1], t && t.nodeType ? t.ownerDocument || t : s, !0)), O.test(n[1]) && C.isPlainObject(t))
                            for (n in t) y(this[n]) ? this[n](t[n]) : this.attr(n, t[n]);
                        return this
                    }
                    return (o = s.getElementById(n[2])) && (this[0] = o, this.length = 1), this
                }
                return e.nodeType ? (this[0] = e, this.length = 1, this) : y(e) ? void 0 !== i.ready ? i.ready(e) : e(C) : C.makeArray(e, this)
            }).prototype = C.fn, L = C(s);
            var z = /^(?:parents|prev(?:Until|All))/,
                F = {
                    children: !0,
                    contents: !0,
                    next: !0,
                    prev: !0
                };

            function M(e, t) {
                for (;
                    (e = e[t]) && 1 !== e.nodeType;);
                return e
            }
            C.fn.extend({
                has: function(e) {
                    var t = C(e, this),
                        i = t.length;
                    return this.filter((function() {
                        for (var e = 0; e < i; e++)
                            if (C.contains(this, t[e])) return !0
                    }))
                },
                closest: function(e, t) {
                    var i, n = 0,
                        o = this.length,
                        r = [],
                        s = "string" != typeof e && C(e);
                    if (!A.test(e))
                        for (; n < o; n++)
                            for (i = this[n]; i && i !== t; i = i.parentNode)
                                if (i.nodeType < 11 && (s ? s.index(i) > -1 : 1 === i.nodeType && C.find.matchesSelector(i, e))) {
                                    r.push(i);
                                    break
                                }
                    return this.pushStack(r.length > 1 ? C.uniqueSort(r) : r)
                },
                index: function(e) {
                    return e ? "string" == typeof e ? d.call(C(e), this[0]) : d.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
                },
                add: function(e, t) {
                    return this.pushStack(C.uniqueSort(C.merge(this.get(), C(e, t))))
                },
                addBack: function(e) {
                    return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
                }
            }), C.each({
                parent: function(e) {
                    var t = e.parentNode;
                    return t && 11 !== t.nodeType ? t : null
                },
                parents: function(e) {
                    return E(e, "parentNode")
                },
                parentsUntil: function(e, t, i) {
                    return E(e, "parentNode", i)
                },
                next: function(e) {
                    return M(e, "nextSibling")
                },
                prev: function(e) {
                    return M(e, "previousSibling")
                },
                nextAll: function(e) {
                    return E(e, "nextSibling")
                },
                prevAll: function(e) {
                    return E(e, "previousSibling")
                },
                nextUntil: function(e, t, i) {
                    return E(e, "nextSibling", i)
                },
                prevUntil: function(e, t, i) {
                    return E(e, "previousSibling", i)
                },
                siblings: function(e) {
                    return S((e.parentNode || {}).firstChild, e)
                },
                children: function(e) {
                    return S(e.firstChild)
                },
                contents: function(e) {
                    return D(e, "iframe") ? e.contentDocument : (D(e, "template") && (e = e.content || e), C.merge([], e.childNodes))
                }
            }, (function(e, t) {
                C.fn[e] = function(i, n) {
                    var o = C.map(this, t, i);
                    return "Until" !== e.slice(-5) && (n = i), n && "string" == typeof n && (o = C.filter(n, o)), this.length > 1 && (F[e] || C.uniqueSort(o), z.test(e) && o.reverse()), this.pushStack(o)
                }
            }));
            var N = /[^\x20\t\r\n\f]+/g;

            function j(e) {
                return e
            }

            function R(e) {
                throw e
            }

            function H(e, t, i, n) {
                var o;
                try {
                    e && y(o = e.promise) ? o.call(e).done(t).fail(i) : e && y(o = e.then) ? o.call(e, t, i) : t.apply(void 0, [e].slice(n))
                } catch (e) {
                    i.apply(void 0, [e])
                }
            }
            C.Callbacks = function(e) {
                e = "string" == typeof e ? function(e) {
                    var t = {};
                    return C.each(e.match(N) || [], (function(e, i) {
                        t[i] = !0
                    })), t
                }(e) : C.extend({}, e);
                var t, i, n, o, r = [],
                    s = [],
                    a = -1,
                    l = function() {
                        for (o = o || e.once, n = t = !0; s.length; a = -1)
                            for (i = s.shift(); ++a < r.length;) !1 === r[a].apply(i[0], i[1]) && e.stopOnFalse && (a = r.length, i = !1);
                        e.memory || (i = !1), t = !1, o && (r = i ? [] : "")
                    },
                    c = {
                        add: function() {
                            return r && (i && !t && (a = r.length - 1, s.push(i)), function t(i) {
                                C.each(i, (function(i, n) {
                                    y(n) ? e.unique && c.has(n) || r.push(n) : n && n.length && "string" !== x(n) && t(n)
                                }))
                            }(arguments), i && !t && l()), this
                        },
                        remove: function() {
                            return C.each(arguments, (function(e, t) {
                                for (var i;
                                    (i = C.inArray(t, r, i)) > -1;) r.splice(i, 1), i <= a && a--
                            })), this
                        },
                        has: function(e) {
                            return e ? C.inArray(e, r) > -1 : r.length > 0
                        },
                        empty: function() {
                            return r && (r = []), this
                        },
                        disable: function() {
                            return o = s = [], r = i = "", this
                        },
                        disabled: function() {
                            return !r
                        },
                        lock: function() {
                            return o = s = [], i || t || (r = i = ""), this
                        },
                        locked: function() {
                            return !!o
                        },
                        fireWith: function(e, i) {
                            return o || (i = [e, (i = i || []).slice ? i.slice() : i], s.push(i), t || l()), this
                        },
                        fire: function() {
                            return c.fireWith(this, arguments), this
                        },
                        fired: function() {
                            return !!n
                        }
                    };
                return c
            }, C.extend({
                Deferred: function(e) {
                    var t = [
                            ["notify", "progress", C.Callbacks("memory"), C.Callbacks("memory"), 2],
                            ["resolve", "done", C.Callbacks("once memory"), C.Callbacks("once memory"), 0, "resolved"],
                            ["reject", "fail", C.Callbacks("once memory"), C.Callbacks("once memory"), 1, "rejected"]
                        ],
                        n = "pending",
                        o = {
                            state: function() {
                                return n
                            },
                            always: function() {
                                return r.done(arguments).fail(arguments), this
                            },
                            catch: function(e) {
                                return o.then(null, e)
                            },
                            pipe: function() {
                                var e = arguments;
                                return C.Deferred((function(i) {
                                    C.each(t, (function(t, n) {
                                        var o = y(e[n[4]]) && e[n[4]];
                                        r[n[1]]((function() {
                                            var e = o && o.apply(this, arguments);
                                            e && y(e.promise) ? e.promise().progress(i.notify).done(i.resolve).fail(i.reject) : i[n[0] + "With"](this, o ? [e] : arguments)
                                        }))
                                    })), e = null
                                })).promise()
                            },
                            then: function(e, n, o) {
                                var r = 0;

                                function s(e, t, n, o) {
                                    return function() {
                                        var a = this,
                                            l = arguments,
                                            c = function() {
                                                var i, c;
                                                if (!(e < r)) {
                                                    if ((i = n.apply(a, l)) === t.promise()) throw new TypeError("Thenable self-resolution");
                                                    c = i && ("object" == typeof i || "function" == typeof i) && i.then, y(c) ? o ? c.call(i, s(r, t, j, o), s(r, t, R, o)) : (r++, c.call(i, s(r, t, j, o), s(r, t, R, o), s(r, t, j, t.notifyWith))) : (n !== j && (a = void 0, l = [i]), (o || t.resolveWith)(a, l))
                                                }
                                            },
                                            u = o ? c : function() {
                                                try {
                                                    c()
                                                } catch (i) {
                                                    C.Deferred.exceptionHook && C.Deferred.exceptionHook(i, u.stackTrace), e + 1 >= r && (n !== R && (a = void 0, l = [i]), t.rejectWith(a, l))
                                                }
                                            };
                                        e ? u() : (C.Deferred.getStackHook && (u.stackTrace = C.Deferred.getStackHook()), i.setTimeout(u))
                                    }
                                }
                                return C.Deferred((function(i) {
                                    t[0][3].add(s(0, i, y(o) ? o : j, i.notifyWith)), t[1][3].add(s(0, i, y(e) ? e : j)), t[2][3].add(s(0, i, y(n) ? n : R))
                                })).promise()
                            },
                            promise: function(e) {
                                return null != e ? C.extend(e, o) : o
                            }
                        },
                        r = {};
                    return C.each(t, (function(e, i) {
                        var s = i[2],
                            a = i[5];
                        o[i[1]] = s.add, a && s.add((function() {
                            n = a
                        }), t[3 - e][2].disable, t[3 - e][3].disable, t[0][2].lock, t[0][3].lock), s.add(i[3].fire), r[i[0]] = function() {
                            return r[i[0] + "With"](this === r ? void 0 : this, arguments), this
                        }, r[i[0] + "With"] = s.fireWith
                    })), o.promise(r), e && e.call(r, r), r
                },
                when: function(e) {
                    var t = arguments.length,
                        i = t,
                        n = Array(i),
                        o = l.call(arguments),
                        r = C.Deferred(),
                        s = function(e) {
                            return function(i) {
                                n[e] = this, o[e] = arguments.length > 1 ? l.call(arguments) : i, --t || r.resolveWith(n, o)
                            }
                        };
                    if (t <= 1 && (H(e, r.done(s(i)).resolve, r.reject, !t), "pending" === r.state() || y(o[i] && o[i].then))) return r.then();
                    for (; i--;) H(o[i], s(i), r.reject);
                    return r.promise()
                }
            });
            var B = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
            C.Deferred.exceptionHook = function(e, t) {
                i.console && i.console.warn && e && B.test(e.name) && i.console.warn("jQuery.Deferred exception: " + e.message, e.stack, t)
            }, C.readyException = function(e) {
                i.setTimeout((function() {
                    throw e
                }))
            };
            var q = C.Deferred();

            function W() {
                s.removeEventListener("DOMContentLoaded", W), i.removeEventListener("load", W), C.ready()
            }
            C.fn.ready = function(e) {
                return q.then(e).catch((function(e) {
                    C.readyException(e)
                })), this
            }, C.extend({
                isReady: !1,
                readyWait: 1,
                ready: function(e) {
                    (!0 === e ? --C.readyWait : C.isReady) || (C.isReady = !0, !0 !== e && --C.readyWait > 0 || q.resolveWith(s, [C]))
                }
            }), C.ready.then = q.then, "complete" === s.readyState || "loading" !== s.readyState && !s.documentElement.doScroll ? i.setTimeout(C.ready) : (s.addEventListener("DOMContentLoaded", W), i.addEventListener("load", W));
            var U = function(e, t, i, n, o, r, s) {
                    var a = 0,
                        l = e.length,
                        c = null == i;
                    if ("object" === x(i))
                        for (a in o = !0, i) U(e, t, a, i[a], !0, r, s);
                    else if (void 0 !== n && (o = !0, y(n) || (s = !0), c && (s ? (t.call(e, n), t = null) : (c = t, t = function(e, t, i) {
                            return c.call(C(e), i)
                        })), t))
                        for (; a < l; a++) t(e[a], i, s ? n : n.call(e[a], a, t(e[a], i)));
                    return o ? e : c ? t.call(e) : l ? t(e[0], i) : r
                },
                V = /^-ms-/,
                K = /-([a-z])/g;

            function Y(e, t) {
                return t.toUpperCase()
            }

            function Q(e) {
                return e.replace(V, "ms-").replace(K, Y)
            }
            var X = function(e) {
                return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
            };

            function G() {
                this.expando = C.expando + G.uid++
            }
            G.uid = 1, G.prototype = {
                cache: function(e) {
                    var t = e[this.expando];
                    return t || (t = {}, X(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                        value: t,
                        configurable: !0
                    }))), t
                },
                set: function(e, t, i) {
                    var n, o = this.cache(e);
                    if ("string" == typeof t) o[Q(t)] = i;
                    else
                        for (n in t) o[Q(n)] = t[n];
                    return o
                },
                get: function(e, t) {
                    return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][Q(t)]
                },
                access: function(e, t, i) {
                    return void 0 === t || t && "string" == typeof t && void 0 === i ? this.get(e, t) : (this.set(e, t, i), void 0 !== i ? i : t)
                },
                remove: function(e, t) {
                    var i, n = e[this.expando];
                    if (void 0 !== n) {
                        if (void 0 !== t) {
                            i = (t = Array.isArray(t) ? t.map(Q) : (t = Q(t)) in n ? [t] : t.match(N) || []).length;
                            for (; i--;) delete n[t[i]]
                        }(void 0 === t || C.isEmptyObject(n)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
                    }
                },
                hasData: function(e) {
                    var t = e[this.expando];
                    return void 0 !== t && !C.isEmptyObject(t)
                }
            };
            var Z = new G,
                J = new G,
                ee = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
                te = /[A-Z]/g;

            function ie(e, t, i) {
                var n;
                if (void 0 === i && 1 === e.nodeType)
                    if (n = "data-" + t.replace(te, "-$&").toLowerCase(), "string" == typeof(i = e.getAttribute(n))) {
                        try {
                            i = function(e) {
                                return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : ee.test(e) ? JSON.parse(e) : e)
                            }(i)
                        } catch (e) {}
                        J.set(e, t, i)
                    } else i = void 0;
                return i
            }
            C.extend({
                hasData: function(e) {
                    return J.hasData(e) || Z.hasData(e)
                },
                data: function(e, t, i) {
                    return J.access(e, t, i)
                },
                removeData: function(e, t) {
                    J.remove(e, t)
                },
                _data: function(e, t, i) {
                    return Z.access(e, t, i)
                },
                _removeData: function(e, t) {
                    Z.remove(e, t)
                }
            }), C.fn.extend({
                data: function(e, t) {
                    var i, n, o, r = this[0],
                        s = r && r.attributes;
                    if (void 0 === e) {
                        if (this.length && (o = J.get(r), 1 === r.nodeType && !Z.get(r, "hasDataAttrs"))) {
                            for (i = s.length; i--;) s[i] && 0 === (n = s[i].name).indexOf("data-") && (n = Q(n.slice(5)), ie(r, n, o[n]));
                            Z.set(r, "hasDataAttrs", !0)
                        }
                        return o
                    }
                    return "object" == typeof e ? this.each((function() {
                        J.set(this, e)
                    })) : U(this, (function(t) {
                        var i;
                        if (r && void 0 === t) return void 0 !== (i = J.get(r, e)) || void 0 !== (i = ie(r, e)) ? i : void 0;
                        this.each((function() {
                            J.set(this, e, t)
                        }))
                    }), null, t, arguments.length > 1, null, !0)
                },
                removeData: function(e) {
                    return this.each((function() {
                        J.remove(this, e)
                    }))
                }
            }), C.extend({
                queue: function(e, t, i) {
                    var n;
                    if (e) return t = (t || "fx") + "queue", n = Z.get(e, t), i && (!n || Array.isArray(i) ? n = Z.access(e, t, C.makeArray(i)) : n.push(i)), n || []
                },
                dequeue: function(e, t) {
                    t = t || "fx";
                    var i = C.queue(e, t),
                        n = i.length,
                        o = i.shift(),
                        r = C._queueHooks(e, t);
                    "inprogress" === o && (o = i.shift(), n--), o && ("fx" === t && i.unshift("inprogress"), delete r.stop, o.call(e, (function() {
                        C.dequeue(e, t)
                    }), r)), !n && r && r.empty.fire()
                },
                _queueHooks: function(e, t) {
                    var i = t + "queueHooks";
                    return Z.get(e, i) || Z.access(e, i, {
                        empty: C.Callbacks("once memory").add((function() {
                            Z.remove(e, [t + "queue", i])
                        }))
                    })
                }
            }), C.fn.extend({
                queue: function(e, t) {
                    var i = 2;
                    return "string" != typeof e && (t = e, e = "fx", i--), arguments.length < i ? C.queue(this[0], e) : void 0 === t ? this : this.each((function() {
                        var i = C.queue(this, e, t);
                        C._queueHooks(this, e), "fx" === e && "inprogress" !== i[0] && C.dequeue(this, e)
                    }))
                },
                dequeue: function(e) {
                    return this.each((function() {
                        C.dequeue(this, e)
                    }))
                },
                clearQueue: function(e) {
                    return this.queue(e || "fx", [])
                },
                promise: function(e, t) {
                    var i, n = 1,
                        o = C.Deferred(),
                        r = this,
                        s = this.length,
                        a = function() {
                            --n || o.resolveWith(r, [r])
                        };
                    for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; s--;)(i = Z.get(r[s], e + "queueHooks")) && i.empty && (n++, i.empty.add(a));
                    return a(), o.promise(t)
                }
            });
            var ne = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
                oe = new RegExp("^(?:([+-])=|)(" + ne + ")([a-z%]*)$", "i"),
                re = ["Top", "Right", "Bottom", "Left"],
                se = function(e, t) {
                    return "none" === (e = t || e).style.display || "" === e.style.display && C.contains(e.ownerDocument, e) && "none" === C.css(e, "display")
                },
                ae = function(e, t, i, n) {
                    var o, r, s = {};
                    for (r in t) s[r] = e.style[r], e.style[r] = t[r];
                    for (r in o = i.apply(e, n || []), t) e.style[r] = s[r];
                    return o
                };

            function le(e, t, i, n) {
                var o, r, s = 20,
                    a = n ? function() {
                        return n.cur()
                    } : function() {
                        return C.css(e, t, "")
                    },
                    l = a(),
                    c = i && i[3] || (C.cssNumber[t] ? "" : "px"),
                    u = (C.cssNumber[t] || "px" !== c && +l) && oe.exec(C.css(e, t));
                if (u && u[3] !== c) {
                    for (l /= 2, c = c || u[3], u = +l || 1; s--;) C.style(e, t, u + c), (1 - r) * (1 - (r = a() / l || .5)) <= 0 && (s = 0), u /= r;
                    u *= 2, C.style(e, t, u + c), i = i || []
                }
                return i && (u = +u || +l || 0, o = i[1] ? u + (i[1] + 1) * i[2] : +i[2], n && (n.unit = c, n.start = u, n.end = o)), o
            }
            var ce = {};

            function ue(e) {
                var t, i = e.ownerDocument,
                    n = e.nodeName,
                    o = ce[n];
                return o || (t = i.body.appendChild(i.createElement(n)), o = C.css(t, "display"), t.parentNode.removeChild(t), "none" === o && (o = "block"), ce[n] = o, o)
            }

            function de(e, t) {
                for (var i, n, o = [], r = 0, s = e.length; r < s; r++)(n = e[r]).style && (i = n.style.display, t ? ("none" === i && (o[r] = Z.get(n, "display") || null, o[r] || (n.style.display = "")), "" === n.style.display && se(n) && (o[r] = ue(n))) : "none" !== i && (o[r] = "none", Z.set(n, "display", i)));
                for (r = 0; r < s; r++) null != o[r] && (e[r].style.display = o[r]);
                return e
            }
            C.fn.extend({
                show: function() {
                    return de(this, !0)
                },
                hide: function() {
                    return de(this)
                },
                toggle: function(e) {
                    return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each((function() {
                        se(this) ? C(this).show() : C(this).hide()
                    }))
                }
            });
            var he = /^(?:checkbox|radio)$/i,
                pe = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
                fe = /^$|^module$|\/(?:java|ecma)script/i,
                me = {
                    option: [1, "<select multiple='multiple'>", "</select>"],
                    thead: [1, "<table>", "</table>"],
                    col: [2, "<table><colgroup>", "</colgroup></table>"],
                    tr: [2, "<table><tbody>", "</tbody></table>"],
                    td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                    _default: [0, "", ""]
                };

            function ge(e, t) {
                var i;
                return i = void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t || "*") : void 0 !== e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && D(e, t) ? C.merge([e], i) : i
            }

            function ve(e, t) {
                for (var i = 0, n = e.length; i < n; i++) Z.set(e[i], "globalEval", !t || Z.get(t[i], "globalEval"))
            }
            me.optgroup = me.option, me.tbody = me.tfoot = me.colgroup = me.caption = me.thead, me.th = me.td;
            var ye, we, be = /<|&#?\w+;/;

            function _e(e, t, i, n, o) {
                for (var r, s, a, l, c, u, d = t.createDocumentFragment(), h = [], p = 0, f = e.length; p < f; p++)
                    if ((r = e[p]) || 0 === r)
                        if ("object" === x(r)) C.merge(h, r.nodeType ? [r] : r);
                        else if (be.test(r)) {
                    for (s = s || d.appendChild(t.createElement("div")), a = (pe.exec(r) || ["", ""])[1].toLowerCase(), l = me[a] || me._default, s.innerHTML = l[1] + C.htmlPrefilter(r) + l[2], u = l[0]; u--;) s = s.lastChild;
                    C.merge(h, s.childNodes), (s = d.firstChild).textContent = ""
                } else h.push(t.createTextNode(r));
                for (d.textContent = "", p = 0; r = h[p++];)
                    if (n && C.inArray(r, n) > -1) o && o.push(r);
                    else if (c = C.contains(r.ownerDocument, r), s = ge(d.appendChild(r), "script"), c && ve(s), i)
                    for (u = 0; r = s[u++];) fe.test(r.type || "") && i.push(r);
                return d
            }
            ye = s.createDocumentFragment().appendChild(s.createElement("div")), (we = s.createElement("input")).setAttribute("type", "radio"), we.setAttribute("checked", "checked"), we.setAttribute("name", "t"), ye.appendChild(we), v.checkClone = ye.cloneNode(!0).cloneNode(!0).lastChild.checked, ye.innerHTML = "<textarea>x</textarea>", v.noCloneChecked = !!ye.cloneNode(!0).lastChild.defaultValue;
            var xe = s.documentElement,
                Ce = /^key/,
                ke = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
                $e = /^([^.]*)(?:\.(.+)|)/;

            function Te() {
                return !0
            }

            function Ee() {
                return !1
            }

            function Se() {
                try {
                    return s.activeElement
                } catch (e) {}
            }

            function Ae(e, t, i, n, o, r) {
                var s, a;
                if ("object" == typeof t) {
                    for (a in "string" != typeof i && (n = n || i, i = void 0), t) Ae(e, a, i, n, t[a], r);
                    return e
                }
                if (null == n && null == o ? (o = i, n = i = void 0) : null == o && ("string" == typeof i ? (o = n, n = void 0) : (o = n, n = i, i = void 0)), !1 === o) o = Ee;
                else if (!o) return e;
                return 1 === r && (s = o, (o = function(e) {
                    return C().off(e), s.apply(this, arguments)
                }).guid = s.guid || (s.guid = C.guid++)), e.each((function() {
                    C.event.add(this, t, o, n, i)
                }))
            }
            C.event = {
                global: {},
                add: function(e, t, i, n, o) {
                    var r, s, a, l, c, u, d, h, p, f, m, g = Z.get(e);
                    if (g)
                        for (i.handler && (i = (r = i).handler, o = r.selector), o && C.find.matchesSelector(xe, o), i.guid || (i.guid = C.guid++), (l = g.events) || (l = g.events = {}), (s = g.handle) || (s = g.handle = function(t) {
                                return void 0 !== C && C.event.triggered !== t.type ? C.event.dispatch.apply(e, arguments) : void 0
                            }), c = (t = (t || "").match(N) || [""]).length; c--;) p = m = (a = $e.exec(t[c]) || [])[1], f = (a[2] || "").split(".").sort(), p && (d = C.event.special[p] || {}, p = (o ? d.delegateType : d.bindType) || p, d = C.event.special[p] || {}, u = C.extend({
                            type: p,
                            origType: m,
                            data: n,
                            handler: i,
                            guid: i.guid,
                            selector: o,
                            needsContext: o && C.expr.match.needsContext.test(o),
                            namespace: f.join(".")
                        }, r), (h = l[p]) || ((h = l[p] = []).delegateCount = 0, d.setup && !1 !== d.setup.call(e, n, f, s) || e.addEventListener && e.addEventListener(p, s)), d.add && (d.add.call(e, u), u.handler.guid || (u.handler.guid = i.guid)), o ? h.splice(h.delegateCount++, 0, u) : h.push(u), C.event.global[p] = !0)
                },
                remove: function(e, t, i, n, o) {
                    var r, s, a, l, c, u, d, h, p, f, m, g = Z.hasData(e) && Z.get(e);
                    if (g && (l = g.events)) {
                        for (c = (t = (t || "").match(N) || [""]).length; c--;)
                            if (p = m = (a = $e.exec(t[c]) || [])[1], f = (a[2] || "").split(".").sort(), p) {
                                for (d = C.event.special[p] || {}, h = l[p = (n ? d.delegateType : d.bindType) || p] || [], a = a[2] && new RegExp("(^|\\.)" + f.join("\\.(?:.*\\.|)") + "(\\.|$)"), s = r = h.length; r--;) u = h[r], !o && m !== u.origType || i && i.guid !== u.guid || a && !a.test(u.namespace) || n && n !== u.selector && ("**" !== n || !u.selector) || (h.splice(r, 1), u.selector && h.delegateCount--, d.remove && d.remove.call(e, u));
                                s && !h.length && (d.teardown && !1 !== d.teardown.call(e, f, g.handle) || C.removeEvent(e, p, g.handle), delete l[p])
                            } else
                                for (p in l) C.event.remove(e, p + t[c], i, n, !0);
                        C.isEmptyObject(l) && Z.remove(e, "handle events")
                    }
                },
                dispatch: function(e) {
                    var t, i, n, o, r, s, a = C.event.fix(e),
                        l = new Array(arguments.length),
                        c = (Z.get(this, "events") || {})[a.type] || [],
                        u = C.event.special[a.type] || {};
                    for (l[0] = a, t = 1; t < arguments.length; t++) l[t] = arguments[t];
                    if (a.delegateTarget = this, !u.preDispatch || !1 !== u.preDispatch.call(this, a)) {
                        for (s = C.event.handlers.call(this, a, c), t = 0;
                            (o = s[t++]) && !a.isPropagationStopped();)
                            for (a.currentTarget = o.elem, i = 0;
                                (r = o.handlers[i++]) && !a.isImmediatePropagationStopped();) a.rnamespace && !a.rnamespace.test(r.namespace) || (a.handleObj = r, a.data = r.data, void 0 !== (n = ((C.event.special[r.origType] || {}).handle || r.handler).apply(o.elem, l)) && !1 === (a.result = n) && (a.preventDefault(), a.stopPropagation()));
                        return u.postDispatch && u.postDispatch.call(this, a), a.result
                    }
                },
                handlers: function(e, t) {
                    var i, n, o, r, s, a = [],
                        l = t.delegateCount,
                        c = e.target;
                    if (l && c.nodeType && !("click" === e.type && e.button >= 1))
                        for (; c !== this; c = c.parentNode || this)
                            if (1 === c.nodeType && ("click" !== e.type || !0 !== c.disabled)) {
                                for (r = [], s = {}, i = 0; i < l; i++) void 0 === s[o = (n = t[i]).selector + " "] && (s[o] = n.needsContext ? C(o, this).index(c) > -1 : C.find(o, this, null, [c]).length), s[o] && r.push(n);
                                r.length && a.push({
                                    elem: c,
                                    handlers: r
                                })
                            }
                    return c = this, l < t.length && a.push({
                        elem: c,
                        handlers: t.slice(l)
                    }), a
                },
                addProp: function(e, t) {
                    Object.defineProperty(C.Event.prototype, e, {
                        enumerable: !0,
                        configurable: !0,
                        get: y(t) ? function() {
                            if (this.originalEvent) return t(this.originalEvent)
                        } : function() {
                            if (this.originalEvent) return this.originalEvent[e]
                        },
                        set: function(t) {
                            Object.defineProperty(this, e, {
                                enumerable: !0,
                                configurable: !0,
                                writable: !0,
                                value: t
                            })
                        }
                    })
                },
                fix: function(e) {
                    return e[C.expando] ? e : new C.Event(e)
                },
                special: {
                    load: {
                        noBubble: !0
                    },
                    focus: {
                        trigger: function() {
                            if (this !== Se() && this.focus) return this.focus(), !1
                        },
                        delegateType: "focusin"
                    },
                    blur: {
                        trigger: function() {
                            if (this === Se() && this.blur) return this.blur(), !1
                        },
                        delegateType: "focusout"
                    },
                    click: {
                        trigger: function() {
                            if ("checkbox" === this.type && this.click && D(this, "input")) return this.click(), !1
                        },
                        _default: function(e) {
                            return D(e.target, "a")
                        }
                    },
                    beforeunload: {
                        postDispatch: function(e) {
                            void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                        }
                    }
                }
            }, C.removeEvent = function(e, t, i) {
                e.removeEventListener && e.removeEventListener(t, i)
            }, C.Event = function(e, t) {
                if (!(this instanceof C.Event)) return new C.Event(e, t);
                e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Te : Ee, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && C.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[C.expando] = !0
            }, C.Event.prototype = {
                constructor: C.Event,
                isDefaultPrevented: Ee,
                isPropagationStopped: Ee,
                isImmediatePropagationStopped: Ee,
                isSimulated: !1,
                preventDefault: function() {
                    var e = this.originalEvent;
                    this.isDefaultPrevented = Te, e && !this.isSimulated && e.preventDefault()
                },
                stopPropagation: function() {
                    var e = this.originalEvent;
                    this.isPropagationStopped = Te, e && !this.isSimulated && e.stopPropagation()
                },
                stopImmediatePropagation: function() {
                    var e = this.originalEvent;
                    this.isImmediatePropagationStopped = Te, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
                }
            }, C.each({
                altKey: !0,
                bubbles: !0,
                cancelable: !0,
                changedTouches: !0,
                ctrlKey: !0,
                detail: !0,
                eventPhase: !0,
                metaKey: !0,
                pageX: !0,
                pageY: !0,
                shiftKey: !0,
                view: !0,
                char: !0,
                charCode: !0,
                key: !0,
                keyCode: !0,
                button: !0,
                buttons: !0,
                clientX: !0,
                clientY: !0,
                offsetX: !0,
                offsetY: !0,
                pointerId: !0,
                pointerType: !0,
                screenX: !0,
                screenY: !0,
                targetTouches: !0,
                toElement: !0,
                touches: !0,
                which: function(e) {
                    var t = e.button;
                    return null == e.which && Ce.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && ke.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
                }
            }, C.event.addProp), C.each({
                mouseenter: "mouseover",
                mouseleave: "mouseout",
                pointerenter: "pointerover",
                pointerleave: "pointerout"
            }, (function(e, t) {
                C.event.special[e] = {
                    delegateType: t,
                    bindType: t,
                    handle: function(e) {
                        var i, n = this,
                            o = e.relatedTarget,
                            r = e.handleObj;
                        return o && (o === n || C.contains(n, o)) || (e.type = r.origType, i = r.handler.apply(this, arguments), e.type = t), i
                    }
                }
            })), C.fn.extend({
                on: function(e, t, i, n) {
                    return Ae(this, e, t, i, n)
                },
                one: function(e, t, i, n) {
                    return Ae(this, e, t, i, n, 1)
                },
                off: function(e, t, i) {
                    var n, o;
                    if (e && e.preventDefault && e.handleObj) return n = e.handleObj, C(e.delegateTarget).off(n.namespace ? n.origType + "." + n.namespace : n.origType, n.selector, n.handler), this;
                    if ("object" == typeof e) {
                        for (o in e) this.off(o, t, e[o]);
                        return this
                    }
                    return !1 !== t && "function" != typeof t || (i = t, t = void 0), !1 === i && (i = Ee), this.each((function() {
                        C.event.remove(this, e, i, t)
                    }))
                }
            });
            var De = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
                Oe = /<script|<style|<link/i,
                Ie = /checked\s*(?:[^=]|=\s*.checked.)/i,
                Le = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

            function Pe(e, t) {
                return D(e, "table") && D(11 !== t.nodeType ? t : t.firstChild, "tr") && C(e).children("tbody")[0] || e
            }

            function ze(e) {
                return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
            }

            function Fe(e) {
                return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
            }

            function Me(e, t) {
                var i, n, o, r, s, a, l, c;
                if (1 === t.nodeType) {
                    if (Z.hasData(e) && (r = Z.access(e), s = Z.set(t, r), c = r.events))
                        for (o in delete s.handle, s.events = {}, c)
                            for (i = 0, n = c[o].length; i < n; i++) C.event.add(t, o, c[o][i]);
                    J.hasData(e) && (a = J.access(e), l = C.extend({}, a), J.set(t, l))
                }
            }

            function Ne(e, t) {
                var i = t.nodeName.toLowerCase();
                "input" === i && he.test(e.type) ? t.checked = e.checked : "input" !== i && "textarea" !== i || (t.defaultValue = e.defaultValue)
            }

            function je(e, t, i, n) {
                t = c.apply([], t);
                var o, r, s, a, l, u, d = 0,
                    h = e.length,
                    p = h - 1,
                    f = t[0],
                    m = y(f);
                if (m || h > 1 && "string" == typeof f && !v.checkClone && Ie.test(f)) return e.each((function(o) {
                    var r = e.eq(o);
                    m && (t[0] = f.call(this, o, r.html())), je(r, t, i, n)
                }));
                if (h && (r = (o = _e(t, e[0].ownerDocument, !1, e, n)).firstChild, 1 === o.childNodes.length && (o = r), r || n)) {
                    for (a = (s = C.map(ge(o, "script"), ze)).length; d < h; d++) l = o, d !== p && (l = C.clone(l, !0, !0), a && C.merge(s, ge(l, "script"))), i.call(e[d], l, d);
                    if (a)
                        for (u = s[s.length - 1].ownerDocument, C.map(s, Fe), d = 0; d < a; d++) l = s[d], fe.test(l.type || "") && !Z.access(l, "globalEval") && C.contains(u, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? C._evalUrl && C._evalUrl(l.src) : _(l.textContent.replace(Le, ""), u, l))
                }
                return e
            }

            function Re(e, t, i) {
                for (var n, o = t ? C.filter(t, e) : e, r = 0; null != (n = o[r]); r++) i || 1 !== n.nodeType || C.cleanData(ge(n)), n.parentNode && (i && C.contains(n.ownerDocument, n) && ve(ge(n, "script")), n.parentNode.removeChild(n));
                return e
            }
            C.extend({
                htmlPrefilter: function(e) {
                    return e.replace(De, "<$1></$2>")
                },
                clone: function(e, t, i) {
                    var n, o, r, s, a = e.cloneNode(!0),
                        l = C.contains(e.ownerDocument, e);
                    if (!(v.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || C.isXMLDoc(e)))
                        for (s = ge(a), n = 0, o = (r = ge(e)).length; n < o; n++) Ne(r[n], s[n]);
                    if (t)
                        if (i)
                            for (r = r || ge(e), s = s || ge(a), n = 0, o = r.length; n < o; n++) Me(r[n], s[n]);
                        else Me(e, a);
                    return (s = ge(a, "script")).length > 0 && ve(s, !l && ge(e, "script")), a
                },
                cleanData: function(e) {
                    for (var t, i, n, o = C.event.special, r = 0; void 0 !== (i = e[r]); r++)
                        if (X(i)) {
                            if (t = i[Z.expando]) {
                                if (t.events)
                                    for (n in t.events) o[n] ? C.event.remove(i, n) : C.removeEvent(i, n, t.handle);
                                i[Z.expando] = void 0
                            }
                            i[J.expando] && (i[J.expando] = void 0)
                        }
                }
            }), C.fn.extend({
                detach: function(e) {
                    return Re(this, e, !0)
                },
                remove: function(e) {
                    return Re(this, e)
                },
                text: function(e) {
                    return U(this, (function(e) {
                        return void 0 === e ? C.text(this) : this.empty().each((function() {
                            1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                        }))
                    }), null, e, arguments.length)
                },
                append: function() {
                    return je(this, arguments, (function(e) {
                        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Pe(this, e).appendChild(e)
                    }))
                },
                prepend: function() {
                    return je(this, arguments, (function(e) {
                        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                            var t = Pe(this, e);
                            t.insertBefore(e, t.firstChild)
                        }
                    }))
                },
                before: function() {
                    return je(this, arguments, (function(e) {
                        this.parentNode && this.parentNode.insertBefore(e, this)
                    }))
                },
                after: function() {
                    return je(this, arguments, (function(e) {
                        this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                    }))
                },
                empty: function() {
                    for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (C.cleanData(ge(e, !1)), e.textContent = "");
                    return this
                },
                clone: function(e, t) {
                    return e = null != e && e, t = null == t ? e : t, this.map((function() {
                        return C.clone(this, e, t)
                    }))
                },
                html: function(e) {
                    return U(this, (function(e) {
                        var t = this[0] || {},
                            i = 0,
                            n = this.length;
                        if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                        if ("string" == typeof e && !Oe.test(e) && !me[(pe.exec(e) || ["", ""])[1].toLowerCase()]) {
                            e = C.htmlPrefilter(e);
                            try {
                                for (; i < n; i++) 1 === (t = this[i] || {}).nodeType && (C.cleanData(ge(t, !1)), t.innerHTML = e);
                                t = 0
                            } catch (e) {}
                        }
                        t && this.empty().append(e)
                    }), null, e, arguments.length)
                },
                replaceWith: function() {
                    var e = [];
                    return je(this, arguments, (function(t) {
                        var i = this.parentNode;
                        C.inArray(this, e) < 0 && (C.cleanData(ge(this)), i && i.replaceChild(t, this))
                    }), e)
                }
            }), C.each({
                appendTo: "append",
                prependTo: "prepend",
                insertBefore: "before",
                insertAfter: "after",
                replaceAll: "replaceWith"
            }, (function(e, t) {
                C.fn[e] = function(e) {
                    for (var i, n = [], o = C(e), r = o.length - 1, s = 0; s <= r; s++) i = s === r ? this : this.clone(!0), C(o[s])[t](i), u.apply(n, i.get());
                    return this.pushStack(n)
                }
            }));
            var He = new RegExp("^(" + ne + ")(?!px)[a-z%]+$", "i"),
                Be = function(e) {
                    var t = e.ownerDocument.defaultView;
                    return t && t.opener || (t = i), t.getComputedStyle(e)
                },
                qe = new RegExp(re.join("|"), "i");

            function We(e, t, i) {
                var n, o, r, s, a = e.style;
                return (i = i || Be(e)) && ("" !== (s = i.getPropertyValue(t) || i[t]) || C.contains(e.ownerDocument, e) || (s = C.style(e, t)), !v.pixelBoxStyles() && He.test(s) && qe.test(t) && (n = a.width, o = a.minWidth, r = a.maxWidth, a.minWidth = a.maxWidth = a.width = s, s = i.width, a.width = n, a.minWidth = o, a.maxWidth = r)), void 0 !== s ? s + "" : s
            }

            function Ue(e, t) {
                return {
                    get: function() {
                        if (!e()) return (this.get = t).apply(this, arguments);
                        delete this.get
                    }
                }
            }! function() {
                function e() {
                    if (u) {
                        c.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", u.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", xe.appendChild(c).appendChild(u);
                        var e = i.getComputedStyle(u);
                        n = "1%" !== e.top, l = 12 === t(e.marginLeft), u.style.right = "60%", a = 36 === t(e.right), o = 36 === t(e.width), u.style.position = "absolute", r = 36 === u.offsetWidth || "absolute", xe.removeChild(c), u = null
                    }
                }

                function t(e) {
                    return Math.round(parseFloat(e))
                }
                var n, o, r, a, l, c = s.createElement("div"),
                    u = s.createElement("div");
                u.style && (u.style.backgroundClip = "content-box", u.cloneNode(!0).style.backgroundClip = "", v.clearCloneStyle = "content-box" === u.style.backgroundClip, C.extend(v, {
                    boxSizingReliable: function() {
                        return e(), o
                    },
                    pixelBoxStyles: function() {
                        return e(), a
                    },
                    pixelPosition: function() {
                        return e(), n
                    },
                    reliableMarginLeft: function() {
                        return e(), l
                    },
                    scrollboxSize: function() {
                        return e(), r
                    }
                }))
            }();
            var Ve = /^(none|table(?!-c[ea]).+)/,
                Ke = /^--/,
                Ye = {
                    position: "absolute",
                    visibility: "hidden",
                    display: "block"
                },
                Qe = {
                    letterSpacing: "0",
                    fontWeight: "400"
                },
                Xe = ["Webkit", "Moz", "ms"],
                Ge = s.createElement("div").style;

            function Ze(e) {
                var t = C.cssProps[e];
                return t || (t = C.cssProps[e] = function(e) {
                    if (e in Ge) return e;
                    for (var t = e[0].toUpperCase() + e.slice(1), i = Xe.length; i--;)
                        if ((e = Xe[i] + t) in Ge) return e
                }(e) || e), t
            }

            function Je(e, t, i) {
                var n = oe.exec(t);
                return n ? Math.max(0, n[2] - (i || 0)) + (n[3] || "px") : t
            }

            function et(e, t, i, n, o, r) {
                var s = "width" === t ? 1 : 0,
                    a = 0,
                    l = 0;
                if (i === (n ? "border" : "content")) return 0;
                for (; s < 4; s += 2) "margin" === i && (l += C.css(e, i + re[s], !0, o)), n ? ("content" === i && (l -= C.css(e, "padding" + re[s], !0, o)), "margin" !== i && (l -= C.css(e, "border" + re[s] + "Width", !0, o))) : (l += C.css(e, "padding" + re[s], !0, o), "padding" !== i ? l += C.css(e, "border" + re[s] + "Width", !0, o) : a += C.css(e, "border" + re[s] + "Width", !0, o));
                return !n && r >= 0 && (l += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - r - l - a - .5))), l
            }

            function tt(e, t, i) {
                var n = Be(e),
                    o = We(e, t, n),
                    r = "border-box" === C.css(e, "boxSizing", !1, n),
                    s = r;
                if (He.test(o)) {
                    if (!i) return o;
                    o = "auto"
                }
                return s = s && (v.boxSizingReliable() || o === e.style[t]), ("auto" === o || !parseFloat(o) && "inline" === C.css(e, "display", !1, n)) && (o = e["offset" + t[0].toUpperCase() + t.slice(1)], s = !0), (o = parseFloat(o) || 0) + et(e, t, i || (r ? "border" : "content"), s, n, o) + "px"
            }

            function it(e, t, i, n, o) {
                return new it.prototype.init(e, t, i, n, o)
            }
            C.extend({
                cssHooks: {
                    opacity: {
                        get: function(e, t) {
                            if (t) {
                                var i = We(e, "opacity");
                                return "" === i ? "1" : i
                            }
                        }
                    }
                },
                cssNumber: {
                    animationIterationCount: !0,
                    columnCount: !0,
                    fillOpacity: !0,
                    flexGrow: !0,
                    flexShrink: !0,
                    fontWeight: !0,
                    lineHeight: !0,
                    opacity: !0,
                    order: !0,
                    orphans: !0,
                    widows: !0,
                    zIndex: !0,
                    zoom: !0
                },
                cssProps: {},
                style: function(e, t, i, n) {
                    if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                        var o, r, s, a = Q(t),
                            l = Ke.test(t),
                            c = e.style;
                        if (l || (t = Ze(a)), s = C.cssHooks[t] || C.cssHooks[a], void 0 === i) return s && "get" in s && void 0 !== (o = s.get(e, !1, n)) ? o : c[t];
                        "string" === (r = typeof i) && (o = oe.exec(i)) && o[1] && (i = le(e, t, o), r = "number"), null != i && i == i && ("number" === r && (i += o && o[3] || (C.cssNumber[a] ? "" : "px")), v.clearCloneStyle || "" !== i || 0 !== t.indexOf("background") || (c[t] = "inherit"), s && "set" in s && void 0 === (i = s.set(e, i, n)) || (l ? c.setProperty(t, i) : c[t] = i))
                    }
                },
                css: function(e, t, i, n) {
                    var o, r, s, a = Q(t);
                    return Ke.test(t) || (t = Ze(a)), (s = C.cssHooks[t] || C.cssHooks[a]) && "get" in s && (o = s.get(e, !0, i)), void 0 === o && (o = We(e, t, n)), "normal" === o && t in Qe && (o = Qe[t]), "" === i || i ? (r = parseFloat(o), !0 === i || isFinite(r) ? r || 0 : o) : o
                }
            }), C.each(["height", "width"], (function(e, t) {
                C.cssHooks[t] = {
                    get: function(e, i, n) {
                        if (i) return !Ve.test(C.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? tt(e, t, n) : ae(e, Ye, (function() {
                            return tt(e, t, n)
                        }))
                    },
                    set: function(e, i, n) {
                        var o, r = Be(e),
                            s = "border-box" === C.css(e, "boxSizing", !1, r),
                            a = n && et(e, t, n, s, r);
                        return s && v.scrollboxSize() === r.position && (a -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(r[t]) - et(e, t, "border", !1, r) - .5)), a && (o = oe.exec(i)) && "px" !== (o[3] || "px") && (e.style[t] = i, i = C.css(e, t)), Je(0, i, a)
                    }
                }
            })), C.cssHooks.marginLeft = Ue(v.reliableMarginLeft, (function(e, t) {
                if (t) return (parseFloat(We(e, "marginLeft")) || e.getBoundingClientRect().left - ae(e, {
                    marginLeft: 0
                }, (function() {
                    return e.getBoundingClientRect().left
                }))) + "px"
            })), C.each({
                margin: "",
                padding: "",
                border: "Width"
            }, (function(e, t) {
                C.cssHooks[e + t] = {
                    expand: function(i) {
                        for (var n = 0, o = {}, r = "string" == typeof i ? i.split(" ") : [i]; n < 4; n++) o[e + re[n] + t] = r[n] || r[n - 2] || r[0];
                        return o
                    }
                }, "margin" !== e && (C.cssHooks[e + t].set = Je)
            })), C.fn.extend({
                css: function(e, t) {
                    return U(this, (function(e, t, i) {
                        var n, o, r = {},
                            s = 0;
                        if (Array.isArray(t)) {
                            for (n = Be(e), o = t.length; s < o; s++) r[t[s]] = C.css(e, t[s], !1, n);
                            return r
                        }
                        return void 0 !== i ? C.style(e, t, i) : C.css(e, t)
                    }), e, t, arguments.length > 1)
                }
            }), C.Tween = it, it.prototype = {
                constructor: it,
                init: function(e, t, i, n, o, r) {
                    this.elem = e, this.prop = i, this.easing = o || C.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = n, this.unit = r || (C.cssNumber[i] ? "" : "px")
                },
                cur: function() {
                    var e = it.propHooks[this.prop];
                    return e && e.get ? e.get(this) : it.propHooks._default.get(this)
                },
                run: function(e) {
                    var t, i = it.propHooks[this.prop];
                    return this.options.duration ? this.pos = t = C.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), i && i.set ? i.set(this) : it.propHooks._default.set(this), this
                }
            }, it.prototype.init.prototype = it.prototype, it.propHooks = {
                _default: {
                    get: function(e) {
                        var t;
                        return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = C.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
                    },
                    set: function(e) {
                        C.fx.step[e.prop] ? C.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[C.cssProps[e.prop]] && !C.cssHooks[e.prop] ? e.elem[e.prop] = e.now : C.style(e.elem, e.prop, e.now + e.unit)
                    }
                }
            }, it.propHooks.scrollTop = it.propHooks.scrollLeft = {
                set: function(e) {
                    e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
                }
            }, C.easing = {
                linear: function(e) {
                    return e
                },
                swing: function(e) {
                    return .5 - Math.cos(e * Math.PI) / 2
                },
                _default: "swing"
            }, C.fx = it.prototype.init, C.fx.step = {};
            var nt, ot, rt = /^(?:toggle|show|hide)$/,
                st = /queueHooks$/;

            function at() {
                ot && (!1 === s.hidden && i.requestAnimationFrame ? i.requestAnimationFrame(at) : i.setTimeout(at, C.fx.interval), C.fx.tick())
            }

            function lt() {
                return i.setTimeout((function() {
                    nt = void 0
                })), nt = Date.now()
            }

            function ct(e, t) {
                var i, n = 0,
                    o = {
                        height: e
                    };
                for (t = t ? 1 : 0; n < 4; n += 2 - t) o["margin" + (i = re[n])] = o["padding" + i] = e;
                return t && (o.opacity = o.width = e), o
            }

            function ut(e, t, i) {
                for (var n, o = (dt.tweeners[t] || []).concat(dt.tweeners["*"]), r = 0, s = o.length; r < s; r++)
                    if (n = o[r].call(i, t, e)) return n
            }

            function dt(e, t, i) {
                var n, o, r = 0,
                    s = dt.prefilters.length,
                    a = C.Deferred().always((function() {
                        delete l.elem
                    })),
                    l = function() {
                        if (o) return !1;
                        for (var t = nt || lt(), i = Math.max(0, c.startTime + c.duration - t), n = 1 - (i / c.duration || 0), r = 0, s = c.tweens.length; r < s; r++) c.tweens[r].run(n);
                        return a.notifyWith(e, [c, n, i]), n < 1 && s ? i : (s || a.notifyWith(e, [c, 1, 0]), a.resolveWith(e, [c]), !1)
                    },
                    c = a.promise({
                        elem: e,
                        props: C.extend({}, t),
                        opts: C.extend(!0, {
                            specialEasing: {},
                            easing: C.easing._default
                        }, i),
                        originalProperties: t,
                        originalOptions: i,
                        startTime: nt || lt(),
                        duration: i.duration,
                        tweens: [],
                        createTween: function(t, i) {
                            var n = C.Tween(e, c.opts, t, i, c.opts.specialEasing[t] || c.opts.easing);
                            return c.tweens.push(n), n
                        },
                        stop: function(t) {
                            var i = 0,
                                n = t ? c.tweens.length : 0;
                            if (o) return this;
                            for (o = !0; i < n; i++) c.tweens[i].run(1);
                            return t ? (a.notifyWith(e, [c, 1, 0]), a.resolveWith(e, [c, t])) : a.rejectWith(e, [c, t]), this
                        }
                    }),
                    u = c.props;
                for (! function(e, t) {
                        var i, n, o, r, s;
                        for (i in e)
                            if (o = t[n = Q(i)], r = e[i], Array.isArray(r) && (o = r[1], r = e[i] = r[0]), i !== n && (e[n] = r, delete e[i]), (s = C.cssHooks[n]) && "expand" in s)
                                for (i in r = s.expand(r), delete e[n], r) i in e || (e[i] = r[i], t[i] = o);
                            else t[n] = o
                    }(u, c.opts.specialEasing); r < s; r++)
                    if (n = dt.prefilters[r].call(c, e, u, c.opts)) return y(n.stop) && (C._queueHooks(c.elem, c.opts.queue).stop = n.stop.bind(n)), n;
                return C.map(u, ut, c), y(c.opts.start) && c.opts.start.call(e, c), c.progress(c.opts.progress).done(c.opts.done, c.opts.complete).fail(c.opts.fail).always(c.opts.always), C.fx.timer(C.extend(l, {
                    elem: e,
                    anim: c,
                    queue: c.opts.queue
                })), c
            }
            C.Animation = C.extend(dt, {
                    tweeners: {
                        "*": [function(e, t) {
                            var i = this.createTween(e, t);
                            return le(i.elem, e, oe.exec(t), i), i
                        }]
                    },
                    tweener: function(e, t) {
                        y(e) ? (t = e, e = ["*"]) : e = e.match(N);
                        for (var i, n = 0, o = e.length; n < o; n++) i = e[n], dt.tweeners[i] = dt.tweeners[i] || [], dt.tweeners[i].unshift(t)
                    },
                    prefilters: [function(e, t, i) {
                        var n, o, r, s, a, l, c, u, d = "width" in t || "height" in t,
                            h = this,
                            p = {},
                            f = e.style,
                            m = e.nodeType && se(e),
                            g = Z.get(e, "fxshow");
                        for (n in i.queue || (null == (s = C._queueHooks(e, "fx")).unqueued && (s.unqueued = 0, a = s.empty.fire, s.empty.fire = function() {
                                s.unqueued || a()
                            }), s.unqueued++, h.always((function() {
                                h.always((function() {
                                    s.unqueued--, C.queue(e, "fx").length || s.empty.fire()
                                }))
                            }))), t)
                            if (o = t[n], rt.test(o)) {
                                if (delete t[n], r = r || "toggle" === o, o === (m ? "hide" : "show")) {
                                    if ("show" !== o || !g || void 0 === g[n]) continue;
                                    m = !0
                                }
                                p[n] = g && g[n] || C.style(e, n)
                            }
                        if ((l = !C.isEmptyObject(t)) || !C.isEmptyObject(p))
                            for (n in d && 1 === e.nodeType && (i.overflow = [f.overflow, f.overflowX, f.overflowY], null == (c = g && g.display) && (c = Z.get(e, "display")), "none" === (u = C.css(e, "display")) && (c ? u = c : (de([e], !0), c = e.style.display || c, u = C.css(e, "display"), de([e]))), ("inline" === u || "inline-block" === u && null != c) && "none" === C.css(e, "float") && (l || (h.done((function() {
                                    f.display = c
                                })), null == c && (u = f.display, c = "none" === u ? "" : u)), f.display = "inline-block")), i.overflow && (f.overflow = "hidden", h.always((function() {
                                    f.overflow = i.overflow[0], f.overflowX = i.overflow[1], f.overflowY = i.overflow[2]
                                }))), l = !1, p) l || (g ? "hidden" in g && (m = g.hidden) : g = Z.access(e, "fxshow", {
                                display: c
                            }), r && (g.hidden = !m), m && de([e], !0), h.done((function() {
                                for (n in m || de([e]), Z.remove(e, "fxshow"), p) C.style(e, n, p[n])
                            }))), l = ut(m ? g[n] : 0, n, h), n in g || (g[n] = l.start, m && (l.end = l.start, l.start = 0))
                    }],
                    prefilter: function(e, t) {
                        t ? dt.prefilters.unshift(e) : dt.prefilters.push(e)
                    }
                }), C.speed = function(e, t, i) {
                    var n = e && "object" == typeof e ? C.extend({}, e) : {
                        complete: i || !i && t || y(e) && e,
                        duration: e,
                        easing: i && t || t && !y(t) && t
                    };
                    return C.fx.off ? n.duration = 0 : "number" != typeof n.duration && (n.duration in C.fx.speeds ? n.duration = C.fx.speeds[n.duration] : n.duration = C.fx.speeds._default), null != n.queue && !0 !== n.queue || (n.queue = "fx"), n.old = n.complete, n.complete = function() {
                        y(n.old) && n.old.call(this), n.queue && C.dequeue(this, n.queue)
                    }, n
                }, C.fn.extend({
                    fadeTo: function(e, t, i, n) {
                        return this.filter(se).css("opacity", 0).show().end().animate({
                            opacity: t
                        }, e, i, n)
                    },
                    animate: function(e, t, i, n) {
                        var o = C.isEmptyObject(e),
                            r = C.speed(t, i, n),
                            s = function() {
                                var t = dt(this, C.extend({}, e), r);
                                (o || Z.get(this, "finish")) && t.stop(!0)
                            };
                        return s.finish = s, o || !1 === r.queue ? this.each(s) : this.queue(r.queue, s)
                    },
                    stop: function(e, t, i) {
                        var n = function(e) {
                            var t = e.stop;
                            delete e.stop, t(i)
                        };
                        return "string" != typeof e && (i = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each((function() {
                            var t = !0,
                                o = null != e && e + "queueHooks",
                                r = C.timers,
                                s = Z.get(this);
                            if (o) s[o] && s[o].stop && n(s[o]);
                            else
                                for (o in s) s[o] && s[o].stop && st.test(o) && n(s[o]);
                            for (o = r.length; o--;) r[o].elem !== this || null != e && r[o].queue !== e || (r[o].anim.stop(i), t = !1, r.splice(o, 1));
                            !t && i || C.dequeue(this, e)
                        }))
                    },
                    finish: function(e) {
                        return !1 !== e && (e = e || "fx"), this.each((function() {
                            var t, i = Z.get(this),
                                n = i[e + "queue"],
                                o = i[e + "queueHooks"],
                                r = C.timers,
                                s = n ? n.length : 0;
                            for (i.finish = !0, C.queue(this, e, []), o && o.stop && o.stop.call(this, !0), t = r.length; t--;) r[t].elem === this && r[t].queue === e && (r[t].anim.stop(!0), r.splice(t, 1));
                            for (t = 0; t < s; t++) n[t] && n[t].finish && n[t].finish.call(this);
                            delete i.finish
                        }))
                    }
                }), C.each(["toggle", "show", "hide"], (function(e, t) {
                    var i = C.fn[t];
                    C.fn[t] = function(e, n, o) {
                        return null == e || "boolean" == typeof e ? i.apply(this, arguments) : this.animate(ct(t, !0), e, n, o)
                    }
                })), C.each({
                    slideDown: ct("show"),
                    slideUp: ct("hide"),
                    slideToggle: ct("toggle"),
                    fadeIn: {
                        opacity: "show"
                    },
                    fadeOut: {
                        opacity: "hide"
                    },
                    fadeToggle: {
                        opacity: "toggle"
                    }
                }, (function(e, t) {
                    C.fn[e] = function(e, i, n) {
                        return this.animate(t, e, i, n)
                    }
                })), C.timers = [], C.fx.tick = function() {
                    var e, t = 0,
                        i = C.timers;
                    for (nt = Date.now(); t < i.length; t++)(e = i[t])() || i[t] !== e || i.splice(t--, 1);
                    i.length || C.fx.stop(), nt = void 0
                }, C.fx.timer = function(e) {
                    C.timers.push(e), C.fx.start()
                }, C.fx.interval = 13, C.fx.start = function() {
                    ot || (ot = !0, at())
                }, C.fx.stop = function() {
                    ot = null
                }, C.fx.speeds = {
                    slow: 600,
                    fast: 200,
                    _default: 400
                }, C.fn.delay = function(e, t) {
                    return e = C.fx && C.fx.speeds[e] || e, t = t || "fx", this.queue(t, (function(t, n) {
                        var o = i.setTimeout(t, e);
                        n.stop = function() {
                            i.clearTimeout(o)
                        }
                    }))
                },
                function() {
                    var e = s.createElement("input"),
                        t = s.createElement("select").appendChild(s.createElement("option"));
                    e.type = "checkbox", v.checkOn = "" !== e.value, v.optSelected = t.selected, (e = s.createElement("input")).value = "t", e.type = "radio", v.radioValue = "t" === e.value
                }();
            var ht, pt = C.expr.attrHandle;
            C.fn.extend({
                attr: function(e, t) {
                    return U(this, C.attr, e, t, arguments.length > 1)
                },
                removeAttr: function(e) {
                    return this.each((function() {
                        C.removeAttr(this, e)
                    }))
                }
            }), C.extend({
                attr: function(e, t, i) {
                    var n, o, r = e.nodeType;
                    if (3 !== r && 8 !== r && 2 !== r) return void 0 === e.getAttribute ? C.prop(e, t, i) : (1 === r && C.isXMLDoc(e) || (o = C.attrHooks[t.toLowerCase()] || (C.expr.match.bool.test(t) ? ht : void 0)), void 0 !== i ? null === i ? void C.removeAttr(e, t) : o && "set" in o && void 0 !== (n = o.set(e, i, t)) ? n : (e.setAttribute(t, i + ""), i) : o && "get" in o && null !== (n = o.get(e, t)) ? n : null == (n = C.find.attr(e, t)) ? void 0 : n)
                },
                attrHooks: {
                    type: {
                        set: function(e, t) {
                            if (!v.radioValue && "radio" === t && D(e, "input")) {
                                var i = e.value;
                                return e.setAttribute("type", t), i && (e.value = i), t
                            }
                        }
                    }
                },
                removeAttr: function(e, t) {
                    var i, n = 0,
                        o = t && t.match(N);
                    if (o && 1 === e.nodeType)
                        for (; i = o[n++];) e.removeAttribute(i)
                }
            }), ht = {
                set: function(e, t, i) {
                    return !1 === t ? C.removeAttr(e, i) : e.setAttribute(i, i), i
                }
            }, C.each(C.expr.match.bool.source.match(/\w+/g), (function(e, t) {
                var i = pt[t] || C.find.attr;
                pt[t] = function(e, t, n) {
                    var o, r, s = t.toLowerCase();
                    return n || (r = pt[s], pt[s] = o, o = null != i(e, t, n) ? s : null, pt[s] = r), o
                }
            }));
            var ft = /^(?:input|select|textarea|button)$/i,
                mt = /^(?:a|area)$/i;

            function gt(e) {
                return (e.match(N) || []).join(" ")
            }

            function vt(e) {
                return e.getAttribute && e.getAttribute("class") || ""
            }

            function yt(e) {
                return Array.isArray(e) ? e : "string" == typeof e && e.match(N) || []
            }
            C.fn.extend({
                prop: function(e, t) {
                    return U(this, C.prop, e, t, arguments.length > 1)
                },
                removeProp: function(e) {
                    return this.each((function() {
                        delete this[C.propFix[e] || e]
                    }))
                }
            }), C.extend({
                prop: function(e, t, i) {
                    var n, o, r = e.nodeType;
                    if (3 !== r && 8 !== r && 2 !== r) return 1 === r && C.isXMLDoc(e) || (t = C.propFix[t] || t, o = C.propHooks[t]), void 0 !== i ? o && "set" in o && void 0 !== (n = o.set(e, i, t)) ? n : e[t] = i : o && "get" in o && null !== (n = o.get(e, t)) ? n : e[t]
                },
                propHooks: {
                    tabIndex: {
                        get: function(e) {
                            var t = C.find.attr(e, "tabindex");
                            return t ? parseInt(t, 10) : ft.test(e.nodeName) || mt.test(e.nodeName) && e.href ? 0 : -1
                        }
                    }
                },
                propFix: {
                    for: "htmlFor",
                    class: "className"
                }
            }), v.optSelected || (C.propHooks.selected = {
                get: function(e) {
                    var t = e.parentNode;
                    return t && t.parentNode && t.parentNode.selectedIndex, null
                },
                set: function(e) {
                    var t = e.parentNode;
                    t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
                }
            }), C.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], (function() {
                C.propFix[this.toLowerCase()] = this
            })), C.fn.extend({
                addClass: function(e) {
                    var t, i, n, o, r, s, a, l = 0;
                    if (y(e)) return this.each((function(t) {
                        C(this).addClass(e.call(this, t, vt(this)))
                    }));
                    if ((t = yt(e)).length)
                        for (; i = this[l++];)
                            if (o = vt(i), n = 1 === i.nodeType && " " + gt(o) + " ") {
                                for (s = 0; r = t[s++];) n.indexOf(" " + r + " ") < 0 && (n += r + " ");
                                o !== (a = gt(n)) && i.setAttribute("class", a)
                            }
                    return this
                },
                removeClass: function(e) {
                    var t, i, n, o, r, s, a, l = 0;
                    if (y(e)) return this.each((function(t) {
                        C(this).removeClass(e.call(this, t, vt(this)))
                    }));
                    if (!arguments.length) return this.attr("class", "");
                    if ((t = yt(e)).length)
                        for (; i = this[l++];)
                            if (o = vt(i), n = 1 === i.nodeType && " " + gt(o) + " ") {
                                for (s = 0; r = t[s++];)
                                    for (; n.indexOf(" " + r + " ") > -1;) n = n.replace(" " + r + " ", " ");
                                o !== (a = gt(n)) && i.setAttribute("class", a)
                            }
                    return this
                },
                toggleClass: function(e, t) {
                    var i = typeof e,
                        n = "string" === i || Array.isArray(e);
                    return "boolean" == typeof t && n ? t ? this.addClass(e) : this.removeClass(e) : y(e) ? this.each((function(i) {
                        C(this).toggleClass(e.call(this, i, vt(this), t), t)
                    })) : this.each((function() {
                        var t, o, r, s;
                        if (n)
                            for (o = 0, r = C(this), s = yt(e); t = s[o++];) r.hasClass(t) ? r.removeClass(t) : r.addClass(t);
                        else void 0 !== e && "boolean" !== i || ((t = vt(this)) && Z.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : Z.get(this, "__className__") || ""))
                    }))
                },
                hasClass: function(e) {
                    var t, i, n = 0;
                    for (t = " " + e + " "; i = this[n++];)
                        if (1 === i.nodeType && (" " + gt(vt(i)) + " ").indexOf(t) > -1) return !0;
                    return !1
                }
            });
            var wt = /\r/g;
            C.fn.extend({
                val: function(e) {
                    var t, i, n, o = this[0];
                    return arguments.length ? (n = y(e), this.each((function(i) {
                        var o;
                        1 === this.nodeType && (null == (o = n ? e.call(this, i, C(this).val()) : e) ? o = "" : "number" == typeof o ? o += "" : Array.isArray(o) && (o = C.map(o, (function(e) {
                            return null == e ? "" : e + ""
                        }))), (t = C.valHooks[this.type] || C.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, o, "value") || (this.value = o))
                    }))) : o ? (t = C.valHooks[o.type] || C.valHooks[o.nodeName.toLowerCase()]) && "get" in t && void 0 !== (i = t.get(o, "value")) ? i : "string" == typeof(i = o.value) ? i.replace(wt, "") : null == i ? "" : i : void 0
                }
            }), C.extend({
                valHooks: {
                    option: {
                        get: function(e) {
                            var t = C.find.attr(e, "value");
                            return null != t ? t : gt(C.text(e))
                        }
                    },
                    select: {
                        get: function(e) {
                            var t, i, n, o = e.options,
                                r = e.selectedIndex,
                                s = "select-one" === e.type,
                                a = s ? null : [],
                                l = s ? r + 1 : o.length;
                            for (n = r < 0 ? l : s ? r : 0; n < l; n++)
                                if (((i = o[n]).selected || n === r) && !i.disabled && (!i.parentNode.disabled || !D(i.parentNode, "optgroup"))) {
                                    if (t = C(i).val(), s) return t;
                                    a.push(t)
                                }
                            return a
                        },
                        set: function(e, t) {
                            for (var i, n, o = e.options, r = C.makeArray(t), s = o.length; s--;)((n = o[s]).selected = C.inArray(C.valHooks.option.get(n), r) > -1) && (i = !0);
                            return i || (e.selectedIndex = -1), r
                        }
                    }
                }
            }), C.each(["radio", "checkbox"], (function() {
                C.valHooks[this] = {
                    set: function(e, t) {
                        if (Array.isArray(t)) return e.checked = C.inArray(C(e).val(), t) > -1
                    }
                }, v.checkOn || (C.valHooks[this].get = function(e) {
                    return null === e.getAttribute("value") ? "on" : e.value
                })
            })), v.focusin = "onfocusin" in i;
            var bt = /^(?:focusinfocus|focusoutblur)$/,
                _t = function(e) {
                    e.stopPropagation()
                };
            C.extend(C.event, {
                trigger: function(e, t, n, o) {
                    var r, a, l, c, u, d, h, p, m = [n || s],
                        g = f.call(e, "type") ? e.type : e,
                        v = f.call(e, "namespace") ? e.namespace.split(".") : [];
                    if (a = p = l = n = n || s, 3 !== n.nodeType && 8 !== n.nodeType && !bt.test(g + C.event.triggered) && (g.indexOf(".") > -1 && (v = g.split("."), g = v.shift(), v.sort()), u = g.indexOf(":") < 0 && "on" + g, (e = e[C.expando] ? e : new C.Event(g, "object" == typeof e && e)).isTrigger = o ? 2 : 3, e.namespace = v.join("."), e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + v.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = n), t = null == t ? [e] : C.makeArray(t, [e]), h = C.event.special[g] || {}, o || !h.trigger || !1 !== h.trigger.apply(n, t))) {
                        if (!o && !h.noBubble && !w(n)) {
                            for (c = h.delegateType || g, bt.test(c + g) || (a = a.parentNode); a; a = a.parentNode) m.push(a), l = a;
                            l === (n.ownerDocument || s) && m.push(l.defaultView || l.parentWindow || i)
                        }
                        for (r = 0;
                            (a = m[r++]) && !e.isPropagationStopped();) p = a, e.type = r > 1 ? c : h.bindType || g, (d = (Z.get(a, "events") || {})[e.type] && Z.get(a, "handle")) && d.apply(a, t), (d = u && a[u]) && d.apply && X(a) && (e.result = d.apply(a, t), !1 === e.result && e.preventDefault());
                        return e.type = g, o || e.isDefaultPrevented() || h._default && !1 !== h._default.apply(m.pop(), t) || !X(n) || u && y(n[g]) && !w(n) && ((l = n[u]) && (n[u] = null), C.event.triggered = g, e.isPropagationStopped() && p.addEventListener(g, _t), n[g](), e.isPropagationStopped() && p.removeEventListener(g, _t), C.event.triggered = void 0, l && (n[u] = l)), e.result
                    }
                },
                simulate: function(e, t, i) {
                    var n = C.extend(new C.Event, i, {
                        type: e,
                        isSimulated: !0
                    });
                    C.event.trigger(n, null, t)
                }
            }), C.fn.extend({
                trigger: function(e, t) {
                    return this.each((function() {
                        C.event.trigger(e, t, this)
                    }))
                },
                triggerHandler: function(e, t) {
                    var i = this[0];
                    if (i) return C.event.trigger(e, t, i, !0)
                }
            }), v.focusin || C.each({
                focus: "focusin",
                blur: "focusout"
            }, (function(e, t) {
                var i = function(e) {
                    C.event.simulate(t, e.target, C.event.fix(e))
                };
                C.event.special[t] = {
                    setup: function() {
                        var n = this.ownerDocument || this,
                            o = Z.access(n, t);
                        o || n.addEventListener(e, i, !0), Z.access(n, t, (o || 0) + 1)
                    },
                    teardown: function() {
                        var n = this.ownerDocument || this,
                            o = Z.access(n, t) - 1;
                        o ? Z.access(n, t, o) : (n.removeEventListener(e, i, !0), Z.remove(n, t))
                    }
                }
            }));
            var xt = i.location,
                Ct = Date.now(),
                kt = /\?/;
            C.parseXML = function(e) {
                var t;
                if (!e || "string" != typeof e) return null;
                try {
                    t = (new i.DOMParser).parseFromString(e, "text/xml")
                } catch (e) {
                    t = void 0
                }
                return t && !t.getElementsByTagName("parsererror").length || C.error("Invalid XML: " + e), t
            };
            var $t = /\[\]$/,
                Tt = /\r?\n/g,
                Et = /^(?:submit|button|image|reset|file)$/i,
                St = /^(?:input|select|textarea|keygen)/i;

            function At(e, t, i, n) {
                var o;
                if (Array.isArray(t)) C.each(t, (function(t, o) {
                    i || $t.test(e) ? n(e, o) : At(e + "[" + ("object" == typeof o && null != o ? t : "") + "]", o, i, n)
                }));
                else if (i || "object" !== x(t)) n(e, t);
                else
                    for (o in t) At(e + "[" + o + "]", t[o], i, n)
            }
            C.param = function(e, t) {
                var i, n = [],
                    o = function(e, t) {
                        var i = y(t) ? t() : t;
                        n[n.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == i ? "" : i)
                    };
                if (Array.isArray(e) || e.jquery && !C.isPlainObject(e)) C.each(e, (function() {
                    o(this.name, this.value)
                }));
                else
                    for (i in e) At(i, e[i], t, o);
                return n.join("&")
            }, C.fn.extend({
                serialize: function() {
                    return C.param(this.serializeArray())
                },
                serializeArray: function() {
                    return this.map((function() {
                        var e = C.prop(this, "elements");
                        return e ? C.makeArray(e) : this
                    })).filter((function() {
                        var e = this.type;
                        return this.name && !C(this).is(":disabled") && St.test(this.nodeName) && !Et.test(e) && (this.checked || !he.test(e))
                    })).map((function(e, t) {
                        var i = C(this).val();
                        return null == i ? null : Array.isArray(i) ? C.map(i, (function(e) {
                            return {
                                name: t.name,
                                value: e.replace(Tt, "\r\n")
                            }
                        })) : {
                            name: t.name,
                            value: i.replace(Tt, "\r\n")
                        }
                    })).get()
                }
            });
            var Dt = /%20/g,
                Ot = /#.*$/,
                It = /([?&])_=[^&]*/,
                Lt = /^(.*?):[ \t]*([^\r\n]*)$/gm,
                Pt = /^(?:GET|HEAD)$/,
                zt = /^\/\//,
                Ft = {},
                Mt = {},
                Nt = "*/".concat("*"),
                jt = s.createElement("a");

            function Rt(e) {
                return function(t, i) {
                    "string" != typeof t && (i = t, t = "*");
                    var n, o = 0,
                        r = t.toLowerCase().match(N) || [];
                    if (y(i))
                        for (; n = r[o++];) "+" === n[0] ? (n = n.slice(1) || "*", (e[n] = e[n] || []).unshift(i)) : (e[n] = e[n] || []).push(i)
                }
            }

            function Ht(e, t, i, n) {
                var o = {},
                    r = e === Mt;

                function s(a) {
                    var l;
                    return o[a] = !0, C.each(e[a] || [], (function(e, a) {
                        var c = a(t, i, n);
                        return "string" != typeof c || r || o[c] ? r ? !(l = c) : void 0 : (t.dataTypes.unshift(c), s(c), !1)
                    })), l
                }
                return s(t.dataTypes[0]) || !o["*"] && s("*")
            }

            function Bt(e, t) {
                var i, n, o = C.ajaxSettings.flatOptions || {};
                for (i in t) void 0 !== t[i] && ((o[i] ? e : n || (n = {}))[i] = t[i]);
                return n && C.extend(!0, e, n), e
            }
            jt.href = xt.href, C.extend({
                active: 0,
                lastModified: {},
                etag: {},
                ajaxSettings: {
                    url: xt.href,
                    type: "GET",
                    isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(xt.protocol),
                    global: !0,
                    processData: !0,
                    async: !0,
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    accepts: {
                        "*": Nt,
                        text: "text/plain",
                        html: "text/html",
                        xml: "application/xml, text/xml",
                        json: "application/json, text/javascript"
                    },
                    contents: {
                        xml: /\bxml\b/,
                        html: /\bhtml/,
                        json: /\bjson\b/
                    },
                    responseFields: {
                        xml: "responseXML",
                        text: "responseText",
                        json: "responseJSON"
                    },
                    converters: {
                        "* text": String,
                        "text html": !0,
                        "text json": JSON.parse,
                        "text xml": C.parseXML
                    },
                    flatOptions: {
                        url: !0,
                        context: !0
                    }
                },
                ajaxSetup: function(e, t) {
                    return t ? Bt(Bt(e, C.ajaxSettings), t) : Bt(C.ajaxSettings, e)
                },
                ajaxPrefilter: Rt(Ft),
                ajaxTransport: Rt(Mt),
                ajax: function(e, t) {
                    "object" == typeof e && (t = e, e = void 0), t = t || {};
                    var n, o, r, a, l, c, u, d, h, p, f = C.ajaxSetup({}, t),
                        m = f.context || f,
                        g = f.context && (m.nodeType || m.jquery) ? C(m) : C.event,
                        v = C.Deferred(),
                        y = C.Callbacks("once memory"),
                        w = f.statusCode || {},
                        b = {},
                        _ = {},
                        x = "canceled",
                        k = {
                            readyState: 0,
                            getResponseHeader: function(e) {
                                var t;
                                if (u) {
                                    if (!a)
                                        for (a = {}; t = Lt.exec(r);) a[t[1].toLowerCase()] = t[2];
                                    t = a[e.toLowerCase()]
                                }
                                return null == t ? null : t
                            },
                            getAllResponseHeaders: function() {
                                return u ? r : null
                            },
                            setRequestHeader: function(e, t) {
                                return null == u && (e = _[e.toLowerCase()] = _[e.toLowerCase()] || e, b[e] = t), this
                            },
                            overrideMimeType: function(e) {
                                return null == u && (f.mimeType = e), this
                            },
                            statusCode: function(e) {
                                var t;
                                if (e)
                                    if (u) k.always(e[k.status]);
                                    else
                                        for (t in e) w[t] = [w[t], e[t]];
                                return this
                            },
                            abort: function(e) {
                                var t = e || x;
                                return n && n.abort(t), $(0, t), this
                            }
                        };
                    if (v.promise(k), f.url = ((e || f.url || xt.href) + "").replace(zt, xt.protocol + "//"), f.type = t.method || t.type || f.method || f.type, f.dataTypes = (f.dataType || "*").toLowerCase().match(N) || [""], null == f.crossDomain) {
                        c = s.createElement("a");
                        try {
                            c.href = f.url, c.href = c.href, f.crossDomain = jt.protocol + "//" + jt.host != c.protocol + "//" + c.host
                        } catch (e) {
                            f.crossDomain = !0
                        }
                    }
                    if (f.data && f.processData && "string" != typeof f.data && (f.data = C.param(f.data, f.traditional)), Ht(Ft, f, t, k), u) return k;
                    for (h in (d = C.event && f.global) && 0 == C.active++ && C.event.trigger("ajaxStart"), f.type = f.type.toUpperCase(), f.hasContent = !Pt.test(f.type), o = f.url.replace(Ot, ""), f.hasContent ? f.data && f.processData && 0 === (f.contentType || "").indexOf("application/x-www-form-urlencoded") && (f.data = f.data.replace(Dt, "+")) : (p = f.url.slice(o.length), f.data && (f.processData || "string" == typeof f.data) && (o += (kt.test(o) ? "&" : "?") + f.data, delete f.data), !1 === f.cache && (o = o.replace(It, "$1"), p = (kt.test(o) ? "&" : "?") + "_=" + Ct++ + p), f.url = o + p), f.ifModified && (C.lastModified[o] && k.setRequestHeader("If-Modified-Since", C.lastModified[o]), C.etag[o] && k.setRequestHeader("If-None-Match", C.etag[o])), (f.data && f.hasContent && !1 !== f.contentType || t.contentType) && k.setRequestHeader("Content-Type", f.contentType), k.setRequestHeader("Accept", f.dataTypes[0] && f.accepts[f.dataTypes[0]] ? f.accepts[f.dataTypes[0]] + ("*" !== f.dataTypes[0] ? ", " + Nt + "; q=0.01" : "") : f.accepts["*"]), f.headers) k.setRequestHeader(h, f.headers[h]);
                    if (f.beforeSend && (!1 === f.beforeSend.call(m, k, f) || u)) return k.abort();
                    if (x = "abort", y.add(f.complete), k.done(f.success), k.fail(f.error), n = Ht(Mt, f, t, k)) {
                        if (k.readyState = 1, d && g.trigger("ajaxSend", [k, f]), u) return k;
                        f.async && f.timeout > 0 && (l = i.setTimeout((function() {
                            k.abort("timeout")
                        }), f.timeout));
                        try {
                            u = !1, n.send(b, $)
                        } catch (e) {
                            if (u) throw e;
                            $(-1, e)
                        }
                    } else $(-1, "No Transport");

                    function $(e, t, s, a) {
                        var c, h, p, b, _, x = t;
                        u || (u = !0, l && i.clearTimeout(l), n = void 0, r = a || "", k.readyState = e > 0 ? 4 : 0, c = e >= 200 && e < 300 || 304 === e, s && (b = function(e, t, i) {
                            for (var n, o, r, s, a = e.contents, l = e.dataTypes;
                                "*" === l[0];) l.shift(), void 0 === n && (n = e.mimeType || t.getResponseHeader("Content-Type"));
                            if (n)
                                for (o in a)
                                    if (a[o] && a[o].test(n)) {
                                        l.unshift(o);
                                        break
                                    }
                            if (l[0] in i) r = l[0];
                            else {
                                for (o in i) {
                                    if (!l[0] || e.converters[o + " " + l[0]]) {
                                        r = o;
                                        break
                                    }
                                    s || (s = o)
                                }
                                r = r || s
                            }
                            if (r) return r !== l[0] && l.unshift(r), i[r]
                        }(f, k, s)), b = function(e, t, i, n) {
                            var o, r, s, a, l, c = {},
                                u = e.dataTypes.slice();
                            if (u[1])
                                for (s in e.converters) c[s.toLowerCase()] = e.converters[s];
                            for (r = u.shift(); r;)
                                if (e.responseFields[r] && (i[e.responseFields[r]] = t), !l && n && e.dataFilter && (t = e.dataFilter(t, e.dataType)), l = r, r = u.shift())
                                    if ("*" === r) r = l;
                                    else if ("*" !== l && l !== r) {
                                if (!(s = c[l + " " + r] || c["* " + r]))
                                    for (o in c)
                                        if ((a = o.split(" "))[1] === r && (s = c[l + " " + a[0]] || c["* " + a[0]])) {
                                            !0 === s ? s = c[o] : !0 !== c[o] && (r = a[0], u.unshift(a[1]));
                                            break
                                        }
                                if (!0 !== s)
                                    if (s && e.throws) t = s(t);
                                    else try {
                                        t = s(t)
                                    } catch (e) {
                                        return {
                                            state: "parsererror",
                                            error: s ? e : "No conversion from " + l + " to " + r
                                        }
                                    }
                            }
                            return {
                                state: "success",
                                data: t
                            }
                        }(f, b, k, c), c ? (f.ifModified && ((_ = k.getResponseHeader("Last-Modified")) && (C.lastModified[o] = _), (_ = k.getResponseHeader("etag")) && (C.etag[o] = _)), 204 === e || "HEAD" === f.type ? x = "nocontent" : 304 === e ? x = "notmodified" : (x = b.state, h = b.data, c = !(p = b.error))) : (p = x, !e && x || (x = "error", e < 0 && (e = 0))), k.status = e, k.statusText = (t || x) + "", c ? v.resolveWith(m, [h, x, k]) : v.rejectWith(m, [k, x, p]), k.statusCode(w), w = void 0, d && g.trigger(c ? "ajaxSuccess" : "ajaxError", [k, f, c ? h : p]), y.fireWith(m, [k, x]), d && (g.trigger("ajaxComplete", [k, f]), --C.active || C.event.trigger("ajaxStop")))
                    }
                    return k
                },
                getJSON: function(e, t, i) {
                    return C.get(e, t, i, "json")
                },
                getScript: function(e, t) {
                    return C.get(e, void 0, t, "script")
                }
            }), C.each(["get", "post"], (function(e, t) {
                C[t] = function(e, i, n, o) {
                    return y(i) && (o = o || n, n = i, i = void 0), C.ajax(C.extend({
                        url: e,
                        type: t,
                        dataType: o,
                        data: i,
                        success: n
                    }, C.isPlainObject(e) && e))
                }
            })), C._evalUrl = function(e) {
                return C.ajax({
                    url: e,
                    type: "GET",
                    dataType: "script",
                    cache: !0,
                    async: !1,
                    global: !1,
                    throws: !0
                })
            }, C.fn.extend({
                wrapAll: function(e) {
                    var t;
                    return this[0] && (y(e) && (e = e.call(this[0])), t = C(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map((function() {
                        for (var e = this; e.firstElementChild;) e = e.firstElementChild;
                        return e
                    })).append(this)), this
                },
                wrapInner: function(e) {
                    return y(e) ? this.each((function(t) {
                        C(this).wrapInner(e.call(this, t))
                    })) : this.each((function() {
                        var t = C(this),
                            i = t.contents();
                        i.length ? i.wrapAll(e) : t.append(e)
                    }))
                },
                wrap: function(e) {
                    var t = y(e);
                    return this.each((function(i) {
                        C(this).wrapAll(t ? e.call(this, i) : e)
                    }))
                },
                unwrap: function(e) {
                    return this.parent(e).not("body").each((function() {
                        C(this).replaceWith(this.childNodes)
                    })), this
                }
            }), C.expr.pseudos.hidden = function(e) {
                return !C.expr.pseudos.visible(e)
            }, C.expr.pseudos.visible = function(e) {
                return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
            }, C.ajaxSettings.xhr = function() {
                try {
                    return new i.XMLHttpRequest
                } catch (e) {}
            };
            var qt = {
                    0: 200,
                    1223: 204
                },
                Wt = C.ajaxSettings.xhr();
            v.cors = !!Wt && "withCredentials" in Wt, v.ajax = Wt = !!Wt, C.ajaxTransport((function(e) {
                var t, n;
                if (v.cors || Wt && !e.crossDomain) return {
                    send: function(o, r) {
                        var s, a = e.xhr();
                        if (a.open(e.type, e.url, e.async, e.username, e.password), e.xhrFields)
                            for (s in e.xhrFields) a[s] = e.xhrFields[s];
                        for (s in e.mimeType && a.overrideMimeType && a.overrideMimeType(e.mimeType), e.crossDomain || o["X-Requested-With"] || (o["X-Requested-With"] = "XMLHttpRequest"), o) a.setRequestHeader(s, o[s]);
                        t = function(e) {
                            return function() {
                                t && (t = n = a.onload = a.onerror = a.onabort = a.ontimeout = a.onreadystatechange = null, "abort" === e ? a.abort() : "error" === e ? "number" != typeof a.status ? r(0, "error") : r(a.status, a.statusText) : r(qt[a.status] || a.status, a.statusText, "text" !== (a.responseType || "text") || "string" != typeof a.responseText ? {
                                    binary: a.response
                                } : {
                                    text: a.responseText
                                }, a.getAllResponseHeaders()))
                            }
                        }, a.onload = t(), n = a.onerror = a.ontimeout = t("error"), void 0 !== a.onabort ? a.onabort = n : a.onreadystatechange = function() {
                            4 === a.readyState && i.setTimeout((function() {
                                t && n()
                            }))
                        }, t = t("abort");
                        try {
                            a.send(e.hasContent && e.data || null)
                        } catch (e) {
                            if (t) throw e
                        }
                    },
                    abort: function() {
                        t && t()
                    }
                }
            })), C.ajaxPrefilter((function(e) {
                e.crossDomain && (e.contents.script = !1)
            })), C.ajaxSetup({
                accepts: {
                    script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
                },
                contents: {
                    script: /\b(?:java|ecma)script\b/
                },
                converters: {
                    "text script": function(e) {
                        return C.globalEval(e), e
                    }
                }
            }), C.ajaxPrefilter("script", (function(e) {
                void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
            })), C.ajaxTransport("script", (function(e) {
                var t, i;
                if (e.crossDomain) return {
                    send: function(n, o) {
                        t = C("<script>").prop({
                            charset: e.scriptCharset,
                            src: e.url
                        }).on("load error", i = function(e) {
                            t.remove(), i = null, e && o("error" === e.type ? 404 : 200, e.type)
                        }), s.head.appendChild(t[0])
                    },
                    abort: function() {
                        i && i()
                    }
                }
            }));
            var Ut, Vt = [],
                Kt = /(=)\?(?=&|$)|\?\?/;
            C.ajaxSetup({
                jsonp: "callback",
                jsonpCallback: function() {
                    var e = Vt.pop() || C.expando + "_" + Ct++;
                    return this[e] = !0, e
                }
            }), C.ajaxPrefilter("json jsonp", (function(e, t, n) {
                var o, r, s, a = !1 !== e.jsonp && (Kt.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && Kt.test(e.data) && "data");
                if (a || "jsonp" === e.dataTypes[0]) return o = e.jsonpCallback = y(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback, a ? e[a] = e[a].replace(Kt, "$1" + o) : !1 !== e.jsonp && (e.url += (kt.test(e.url) ? "&" : "?") + e.jsonp + "=" + o), e.converters["script json"] = function() {
                    return s || C.error(o + " was not called"), s[0]
                }, e.dataTypes[0] = "json", r = i[o], i[o] = function() {
                    s = arguments
                }, n.always((function() {
                    void 0 === r ? C(i).removeProp(o) : i[o] = r, e[o] && (e.jsonpCallback = t.jsonpCallback, Vt.push(o)), s && y(r) && r(s[0]), s = r = void 0
                })), "script"
            })), v.createHTMLDocument = ((Ut = s.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Ut.childNodes.length), C.parseHTML = function(e, t, i) {
                return "string" != typeof e ? [] : ("boolean" == typeof t && (i = t, t = !1), t || (v.createHTMLDocument ? ((n = (t = s.implementation.createHTMLDocument("")).createElement("base")).href = s.location.href, t.head.appendChild(n)) : t = s), r = !i && [], (o = O.exec(e)) ? [t.createElement(o[1])] : (o = _e([e], t, r), r && r.length && C(r).remove(), C.merge([], o.childNodes)));
                var n, o, r
            }, C.fn.load = function(e, t, i) {
                var n, o, r, s = this,
                    a = e.indexOf(" ");
                return a > -1 && (n = gt(e.slice(a)), e = e.slice(0, a)), y(t) ? (i = t, t = void 0) : t && "object" == typeof t && (o = "POST"), s.length > 0 && C.ajax({
                    url: e,
                    type: o || "GET",
                    dataType: "html",
                    data: t
                }).done((function(e) {
                    r = arguments, s.html(n ? C("<div>").append(C.parseHTML(e)).find(n) : e)
                })).always(i && function(e, t) {
                    s.each((function() {
                        i.apply(this, r || [e.responseText, t, e])
                    }))
                }), this
            }, C.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], (function(e, t) {
                C.fn[t] = function(e) {
                    return this.on(t, e)
                }
            })), C.expr.pseudos.animated = function(e) {
                return C.grep(C.timers, (function(t) {
                    return e === t.elem
                })).length
            }, C.offset = {
                setOffset: function(e, t, i) {
                    var n, o, r, s, a, l, c = C.css(e, "position"),
                        u = C(e),
                        d = {};
                    "static" === c && (e.style.position = "relative"), a = u.offset(), r = C.css(e, "top"), l = C.css(e, "left"), ("absolute" === c || "fixed" === c) && (r + l).indexOf("auto") > -1 ? (s = (n = u.position()).top, o = n.left) : (s = parseFloat(r) || 0, o = parseFloat(l) || 0), y(t) && (t = t.call(e, i, C.extend({}, a))), null != t.top && (d.top = t.top - a.top + s), null != t.left && (d.left = t.left - a.left + o), "using" in t ? t.using.call(e, d) : u.css(d)
                }
            }, C.fn.extend({
                offset: function(e) {
                    if (arguments.length) return void 0 === e ? this : this.each((function(t) {
                        C.offset.setOffset(this, e, t)
                    }));
                    var t, i, n = this[0];
                    return n ? n.getClientRects().length ? (t = n.getBoundingClientRect(), i = n.ownerDocument.defaultView, {
                        top: t.top + i.pageYOffset,
                        left: t.left + i.pageXOffset
                    }) : {
                        top: 0,
                        left: 0
                    } : void 0
                },
                position: function() {
                    if (this[0]) {
                        var e, t, i, n = this[0],
                            o = {
                                top: 0,
                                left: 0
                            };
                        if ("fixed" === C.css(n, "position")) t = n.getBoundingClientRect();
                        else {
                            for (t = this.offset(), i = n.ownerDocument, e = n.offsetParent || i.documentElement; e && (e === i.body || e === i.documentElement) && "static" === C.css(e, "position");) e = e.parentNode;
                            e && e !== n && 1 === e.nodeType && ((o = C(e).offset()).top += C.css(e, "borderTopWidth", !0), o.left += C.css(e, "borderLeftWidth", !0))
                        }
                        return {
                            top: t.top - o.top - C.css(n, "marginTop", !0),
                            left: t.left - o.left - C.css(n, "marginLeft", !0)
                        }
                    }
                },
                offsetParent: function() {
                    return this.map((function() {
                        for (var e = this.offsetParent; e && "static" === C.css(e, "position");) e = e.offsetParent;
                        return e || xe
                    }))
                }
            }), C.each({
                scrollLeft: "pageXOffset",
                scrollTop: "pageYOffset"
            }, (function(e, t) {
                var i = "pageYOffset" === t;
                C.fn[e] = function(n) {
                    return U(this, (function(e, n, o) {
                        var r;
                        if (w(e) ? r = e : 9 === e.nodeType && (r = e.defaultView), void 0 === o) return r ? r[t] : e[n];
                        r ? r.scrollTo(i ? r.pageXOffset : o, i ? o : r.pageYOffset) : e[n] = o
                    }), e, n, arguments.length)
                }
            })), C.each(["top", "left"], (function(e, t) {
                C.cssHooks[t] = Ue(v.pixelPosition, (function(e, i) {
                    if (i) return i = We(e, t), He.test(i) ? C(e).position()[t] + "px" : i
                }))
            })), C.each({
                Height: "height",
                Width: "width"
            }, (function(e, t) {
                C.each({
                    padding: "inner" + e,
                    content: t,
                    "": "outer" + e
                }, (function(i, n) {
                    C.fn[n] = function(o, r) {
                        var s = arguments.length && (i || "boolean" != typeof o),
                            a = i || (!0 === o || !0 === r ? "margin" : "border");
                        return U(this, (function(t, i, o) {
                            var r;
                            return w(t) ? 0 === n.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (r = t.documentElement, Math.max(t.body["scroll" + e], r["scroll" + e], t.body["offset" + e], r["offset" + e], r["client" + e])) : void 0 === o ? C.css(t, i, a) : C.style(t, i, o, a)
                        }), t, s ? o : void 0, s)
                    }
                }))
            })), C.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), (function(e, t) {
                C.fn[t] = function(e, i) {
                    return arguments.length > 0 ? this.on(t, null, e, i) : this.trigger(t)
                }
            })), C.fn.extend({
                hover: function(e, t) {
                    return this.mouseenter(e).mouseleave(t || e)
                }
            }), C.fn.extend({
                bind: function(e, t, i) {
                    return this.on(e, null, t, i)
                },
                unbind: function(e, t) {
                    return this.off(e, null, t)
                },
                delegate: function(e, t, i, n) {
                    return this.on(t, e, i, n)
                },
                undelegate: function(e, t, i) {
                    return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", i)
                }
            }), C.proxy = function(e, t) {
                var i, n, o;
                if ("string" == typeof t && (i = e[t], t = e, e = i), y(e)) return n = l.call(arguments, 2), (o = function() {
                    return e.apply(t || this, n.concat(l.call(arguments)))
                }).guid = e.guid = e.guid || C.guid++, o
            }, C.holdReady = function(e) {
                e ? C.readyWait++ : C.ready(!0)
            }, C.isArray = Array.isArray, C.parseJSON = JSON.parse, C.nodeName = D, C.isFunction = y, C.isWindow = w, C.camelCase = Q, C.type = x, C.now = Date.now, C.isNumeric = function(e) {
                var t = C.type(e);
                return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
            }, void 0 === (n = function() {
                return C
            }.apply(t, [])) || (e.exports = n);
            var Yt = i.jQuery,
                Qt = i.$;
            return C.noConflict = function(e) {
                return i.$ === C && (i.$ = Qt), e && i.jQuery === C && (i.jQuery = Yt), C
            }, o || (i.jQuery = i.$ = C), C
        }))
    },
    EmvQ: function(e, t) {
        var i, n, o, r, s, a, l, c, u, d, h, p, f, m, g, v;
        i = window, n = document, o = jQuery, s = o("html"), a = o(i), l = o(n), c = o.fancybox = function() {
            c.open.apply(this, arguments)
        }, u = navigator.userAgent.match(/msie/i), d = null, h = n.createTouch !== r, p = function(e) {
            return e && e.hasOwnProperty && e instanceof o
        }, f = function(e) {
            return e && "string" === o.type(e)
        }, m = function(e) {
            return f(e) && 0 < e.indexOf("%")
        }, g = function(e, t) {
            var i = parseInt(e, 10) || 0;
            return t && m(e) && (i *= c.getViewport()[t] / 100), Math.ceil(i)
        }, v = function(e, t) {
            return g(e, t) + "px"
        }, o.extend(c, {
            version: "2.1.7",
            defaults: {
                padding: 15,
                margin: 20,
                width: 800,
                height: 600,
                minWidth: 100,
                minHeight: 100,
                maxWidth: 9999,
                maxHeight: 9999,
                pixelRatio: 1,
                autoSize: !0,
                autoHeight: !1,
                autoWidth: !1,
                autoResize: !0,
                autoCenter: !h,
                fitToView: !0,
                aspectRatio: !1,
                topRatio: .5,
                leftRatio: .5,
                scrolling: "auto",
                wrapCSS: "",
                arrows: !0,
                closeBtn: !0,
                closeClick: !1,
                nextClick: !1,
                mouseWheel: !0,
                autoPlay: !1,
                playSpeed: 3e3,
                preload: 3,
                modal: !1,
                loop: !0,
                ajax: {
                    dataType: "html",
                    headers: {
                        "X-fancyBox": !0
                    }
                },
                iframe: {
                    scrolling: "auto",
                    preload: !0
                },
                swf: {
                    wmode: "transparent",
                    allowfullscreen: "true",
                    allowscriptaccess: "always"
                },
                keys: {
                    next: {
                        13: "left",
                        34: "up",
                        39: "left",
                        40: "up"
                    },
                    prev: {
                        8: "right",
                        33: "down",
                        37: "right",
                        38: "down"
                    },
                    close: [27],
                    play: [32],
                    toggle: [70]
                },
                direction: {
                    next: "left",
                    prev: "right"
                },
                scrollOutside: !0,
                index: 0,
                type: null,
                href: null,
                content: null,
                title: null,
                tpl: {
                    wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
                    image: '<img class="fancybox-image" src="{href}" alt="" />',
                    iframe: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' + (u ? ' allowtransparency="true"' : "") + "></iframe>",
                    error: '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
                    closeBtn: '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
                    next: '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
                    prev: '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>',
                    loading: '<div id="fancybox-loading"><div></div></div>'
                },
                openEffect: "fade",
                openSpeed: 250,
                openEasing: "swing",
                openOpacity: !0,
                openMethod: "zoomIn",
                closeEffect: "fade",
                closeSpeed: 250,
                closeEasing: "swing",
                closeOpacity: !0,
                closeMethod: "zoomOut",
                nextEffect: "elastic",
                nextSpeed: 250,
                nextEasing: "swing",
                nextMethod: "changeIn",
                prevEffect: "elastic",
                prevSpeed: 250,
                prevEasing: "swing",
                prevMethod: "changeOut",
                helpers: {
                    overlay: !0,
                    title: !0
                },
                onCancel: o.noop,
                beforeLoad: o.noop,
                afterLoad: o.noop,
                beforeShow: o.noop,
                afterShow: o.noop,
                beforeChange: o.noop,
                beforeClose: o.noop,
                afterClose: o.noop
            },
            group: {},
            opts: {},
            previous: null,
            coming: null,
            current: null,
            isActive: !1,
            isOpen: !1,
            isOpened: !1,
            wrap: null,
            skin: null,
            outer: null,
            inner: null,
            player: {
                timer: null,
                isActive: !1
            },
            ajaxLoad: null,
            imgPreload: null,
            transitions: {},
            helpers: {},
            open: function(e, t) {
                if (e && (o.isPlainObject(t) || (t = {}), !1 !== c.close(!0))) return o.isArray(e) || (e = p(e) ? o(e).get() : [e]), o.each(e, (function(i, n) {
                    var s, a, l, u, d, h = {};
                    "object" === o.type(n) && (n.nodeType && (n = o(n)), p(n) ? (h = {
                        href: n.data("fancybox-href") || n.attr("href"),
                        title: o("<div/>").text(n.data("fancybox-title") || n.attr("title") || "").html(),
                        isDom: !0,
                        element: n
                    }, o.metadata && o.extend(!0, h, n.metadata())) : h = n), s = t.href || h.href || (f(n) ? n : null), a = t.title !== r ? t.title : h.title || "", !(u = (l = t.content || h.content) ? "html" : t.type || h.type) && h.isDom && ((u = n.data("fancybox-type")) || (u = (u = n.prop("class").match(/fancybox\.(\w+)/)) ? u[1] : null)), f(s) && (u || (c.isImage(s) ? u = "image" : c.isSWF(s) ? u = "swf" : "#" === s.charAt(0) ? u = "inline" : f(n) && (u = "html", l = n)), "ajax" === u && (d = s.split(/\s+/, 2), s = d.shift(), d = d.shift())), l || ("inline" === u ? s ? l = o(f(s) ? s.replace(/.*(?=#[^\s]+$)/, "") : s) : h.isDom && (l = n) : "html" === u ? l = s : u || s || !h.isDom || (u = "inline", l = n)), o.extend(h, {
                        href: s,
                        type: u,
                        content: l,
                        title: a,
                        selector: d
                    }), e[i] = h
                })), c.opts = o.extend(!0, {}, c.defaults, t), t.keys !== r && (c.opts.keys = !!t.keys && o.extend({}, c.defaults.keys, t.keys)), c.group = e, c._start(c.opts.index)
            },
            cancel: function() {
                var e = c.coming;
                e && !1 === c.trigger("onCancel") || (c.hideLoading(), e && (c.ajaxLoad && c.ajaxLoad.abort(), c.ajaxLoad = null, c.imgPreload && (c.imgPreload.onload = c.imgPreload.onerror = null), e.wrap && e.wrap.stop(!0, !0).trigger("onReset").remove(), c.coming = null, c.current || c._afterZoomOut(e)))
            },
            close: function(e) {
                c.cancel(), !1 !== c.trigger("beforeClose") && (c.unbindEvents(), c.isActive && (c.isOpen && !0 !== e ? (c.isOpen = c.isOpened = !1, c.isClosing = !0, o(".fancybox-item, .fancybox-nav").remove(), c.wrap.stop(!0, !0).removeClass("fancybox-opened"), c.transitions[c.current.closeMethod]()) : (o(".fancybox-wrap").stop(!0).trigger("onReset").remove(), c._afterZoomOut())))
            },
            play: function(e) {
                var t = function() {
                        clearTimeout(c.player.timer)
                    },
                    i = function() {
                        t(), c.current && c.player.isActive && (c.player.timer = setTimeout(c.next, c.current.playSpeed))
                    },
                    n = function() {
                        t(), l.unbind(".player"), c.player.isActive = !1, c.trigger("onPlayEnd")
                    };
                !0 === e || !c.player.isActive && !1 !== e ? c.current && (c.current.loop || c.current.index < c.group.length - 1) && (c.player.isActive = !0, l.bind({
                    "onCancel.player beforeClose.player": n,
                    "onUpdate.player": i,
                    "beforeLoad.player": t
                }), i(), c.trigger("onPlayStart")) : n()
            },
            next: function(e) {
                var t = c.current;
                t && (f(e) || (e = t.direction.next), c.jumpto(t.index + 1, e, "next"))
            },
            prev: function(e) {
                var t = c.current;
                t && (f(e) || (e = t.direction.prev), c.jumpto(t.index - 1, e, "prev"))
            },
            jumpto: function(e, t, i) {
                var n = c.current;
                n && (e = g(e), c.direction = t || n.direction[e >= n.index ? "next" : "prev"], c.router = i || "jumpto", n.loop && (0 > e && (e = n.group.length + e % n.group.length), e %= n.group.length), n.group[e] !== r && (c.cancel(), c._start(e)))
            },
            reposition: function(e, t) {
                var i, n = c.current,
                    r = n ? n.wrap : null;
                r && (i = c._getPosition(t), e && "scroll" === e.type ? (delete i.position, r.stop(!0, !0).animate(i, 200)) : (r.css(i), n.pos = o.extend({}, n.dim, i)))
            },
            update: function(e) {
                var t = e && e.originalEvent && e.originalEvent.type,
                    i = !t || "orientationchange" === t;
                i && (clearTimeout(d), d = null), c.isOpen && !d && (d = setTimeout((function() {
                    var n = c.current;
                    n && !c.isClosing && (c.wrap.removeClass("fancybox-tmp"), (i || "load" === t || "resize" === t && n.autoResize) && c._setDimension(), "scroll" === t && n.canShrink || c.reposition(e), c.trigger("onUpdate"), d = null)
                }), i && !h ? 0 : 300))
            },
            toggle: function(e) {
                c.isOpen && (c.current.fitToView = "boolean" === o.type(e) ? e : !c.current.fitToView, h && (c.wrap.removeAttr("style").addClass("fancybox-tmp"), c.trigger("onUpdate")), c.update())
            },
            hideLoading: function() {
                l.unbind(".loading"), o("#fancybox-loading").remove()
            },
            showLoading: function() {
                var e, t;
                c.hideLoading(), e = o(c.opts.tpl.loading).click(c.cancel).appendTo("body"), l.bind("keydown.loading", (function(e) {
                    27 === (e.which || e.keyCode) && (e.preventDefault(), c.cancel())
                })), c.defaults.fixed || (t = c.getViewport(), e.css({
                    position: "absolute",
                    top: .5 * t.h + t.y,
                    left: .5 * t.w + t.x
                })), c.trigger("onLoading")
            },
            getViewport: function() {
                var e = c.current && c.current.locked || !1,
                    t = {
                        x: a.scrollLeft(),
                        y: a.scrollTop()
                    };
                return e && e.length ? (t.w = e[0].clientWidth, t.h = e[0].clientHeight) : (t.w = h && i.innerWidth ? i.innerWidth : a.width(), t.h = h && i.innerHeight ? i.innerHeight : a.height()), t
            },
            unbindEvents: function() {
                c.wrap && p(c.wrap) && c.wrap.unbind(".fb"), l.unbind(".fb"), a.unbind(".fb")
            },
            bindEvents: function() {
                var e, t = c.current;
                t && (a.bind("orientationchange.fb" + (h ? "" : " resize.fb") + (t.autoCenter && !t.locked ? " scroll.fb" : ""), c.update), (e = t.keys) && l.bind("keydown.fb", (function(i) {
                    var n = i.which || i.keyCode,
                        s = i.target || i.srcElement;
                    if (27 === n && c.coming) return !1;
                    i.ctrlKey || i.altKey || i.shiftKey || i.metaKey || s && (s.type || o(s).is("[contenteditable]")) || o.each(e, (function(e, s) {
                        return 1 < t.group.length && s[n] !== r ? (c[e](s[n]), i.preventDefault(), !1) : -1 < o.inArray(n, s) ? (c[e](), i.preventDefault(), !1) : void 0
                    }))
                })), o.fn.mousewheel && t.mouseWheel && c.wrap.bind("mousewheel.fb", (function(e, i, n, r) {
                    for (var s = o(e.target || null), a = !1; s.length && !(a || s.is(".fancybox-skin") || s.is(".fancybox-wrap"));) a = (a = s[0]) && !(a.style.overflow && "hidden" === a.style.overflow) && (a.clientWidth && a.scrollWidth > a.clientWidth || a.clientHeight && a.scrollHeight > a.clientHeight), s = o(s).parent();
                    0 !== i && !a && 1 < c.group.length && !t.canShrink && (0 < r || 0 < n ? c.prev(0 < r ? "down" : "left") : (0 > r || 0 > n) && c.next(0 > r ? "up" : "right"), e.preventDefault())
                })))
            },
            trigger: function(e, t) {
                var i, n = t || c.coming || c.current;
                if (n) {
                    if (o.isFunction(n[e]) && (i = n[e].apply(n, Array.prototype.slice.call(arguments, 1))), !1 === i) return !1;
                    n.helpers && o.each(n.helpers, (function(t, i) {
                        i && c.helpers[t] && o.isFunction(c.helpers[t][e]) && c.helpers[t][e](o.extend(!0, {}, c.helpers[t].defaults, i), n)
                    }))
                }
                l.trigger(e)
            },
            isImage: function(e) {
                return f(e) && e.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)
            },
            isSWF: function(e) {
                return f(e) && e.match(/\.(swf)((\?|#).*)?$/i)
            },
            _start: function(e) {
                var t, i, n = {};
                if (e = g(e), !(t = c.group[e] || null)) return !1;
                if (t = (n = o.extend(!0, {}, c.opts, t)).margin, i = n.padding, "number" === o.type(t) && (n.margin = [t, t, t, t]), "number" === o.type(i) && (n.padding = [i, i, i, i]), n.modal && o.extend(!0, n, {
                        closeBtn: !1,
                        closeClick: !1,
                        nextClick: !1,
                        arrows: !1,
                        mouseWheel: !1,
                        keys: null,
                        helpers: {
                            overlay: {
                                closeClick: !1
                            }
                        }
                    }), n.autoSize && (n.autoWidth = n.autoHeight = !0), "auto" === n.width && (n.autoWidth = !0), "auto" === n.height && (n.autoHeight = !0), n.group = c.group, n.index = e, c.coming = n, !1 === c.trigger("beforeLoad")) c.coming = null;
                else {
                    if (i = n.type, t = n.href, !i) return c.coming = null, !(!c.current || !c.router || "jumpto" === c.router) && (c.current.index = e, c[c.router](c.direction));
                    if (c.isActive = !0, "image" !== i && "swf" !== i || (n.autoHeight = n.autoWidth = !1, n.scrolling = "visible"), "image" === i && (n.aspectRatio = !0), "iframe" === i && h && (n.scrolling = "scroll"), n.wrap = o(n.tpl.wrap).addClass("fancybox-" + (h ? "mobile" : "desktop") + " fancybox-type-" + i + " fancybox-tmp " + n.wrapCSS).appendTo(n.parent || "body"), o.extend(n, {
                            skin: o(".fancybox-skin", n.wrap),
                            outer: o(".fancybox-outer", n.wrap),
                            inner: o(".fancybox-inner", n.wrap)
                        }), o.each(["Top", "Right", "Bottom", "Left"], (function(e, t) {
                            n.skin.css("padding" + t, v(n.padding[e]))
                        })), c.trigger("onReady"), "inline" === i || "html" === i) {
                        if (!n.content || !n.content.length) return c._error("content")
                    } else if (!t) return c._error("href");
                    "image" === i ? c._loadImage() : "ajax" === i ? c._loadAjax() : "iframe" === i ? c._loadIframe() : c._afterLoad()
                }
            },
            _error: function(e) {
                o.extend(c.coming, {
                    type: "html",
                    autoWidth: !0,
                    autoHeight: !0,
                    minWidth: 0,
                    minHeight: 0,
                    scrolling: "no",
                    hasError: e,
                    content: c.coming.tpl.error
                }), c._afterLoad()
            },
            _loadImage: function() {
                var e = c.imgPreload = new Image;
                e.onload = function() {
                    this.onload = this.onerror = null, c.coming.width = this.width / c.opts.pixelRatio, c.coming.height = this.height / c.opts.pixelRatio, c._afterLoad()
                }, e.onerror = function() {
                    this.onload = this.onerror = null, c._error("image")
                }, e.src = c.coming.href, !0 !== e.complete && c.showLoading()
            },
            _loadAjax: function() {
                var e = c.coming;
                c.showLoading(), c.ajaxLoad = o.ajax(o.extend({}, e.ajax, {
                    url: e.href,
                    error: function(e, t) {
                        c.coming && "abort" !== t ? c._error("ajax", e) : c.hideLoading()
                    },
                    success: function(t, i) {
                        "success" === i && (e.content = t, c._afterLoad())
                    }
                }))
            },
            _loadIframe: function() {
                var e = c.coming,
                    t = o(e.tpl.iframe.replace(/\{rnd\}/g, (new Date).getTime())).attr("scrolling", h ? "auto" : e.iframe.scrolling).attr("src", e.href);
                o(e.wrap).bind("onReset", (function() {
                    try {
                        o(this).find("iframe").hide().attr("src", "//about:blank").end().empty()
                    } catch (e) {}
                })), e.iframe.preload && (c.showLoading(), t.one("load", (function() {
                    o(this).data("ready", 1), h || o(this).bind("load.fb", c.update), o(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show(), c._afterLoad()
                }))), e.content = t.appendTo(e.inner), e.iframe.preload || c._afterLoad()
            },
            _preloadImages: function() {
                var e, t, i = c.group,
                    n = c.current,
                    o = i.length,
                    r = n.preload ? Math.min(n.preload, o - 1) : 0;
                for (t = 1; t <= r; t += 1) "image" === (e = i[(n.index + t) % o]).type && e.href && ((new Image).src = e.href)
            },
            _afterLoad: function() {
                var e, t, i, n, r, s = c.coming,
                    a = c.current;
                if (c.hideLoading(), s && !1 !== c.isActive)
                    if (!1 === c.trigger("afterLoad", s, a)) s.wrap.stop(!0).trigger("onReset").remove(), c.coming = null;
                    else {
                        switch (a && (c.trigger("beforeChange", a), a.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove()), c.unbindEvents(), e = s.content, t = s.type, i = s.scrolling, o.extend(c, {
                            wrap: s.wrap,
                            skin: s.skin,
                            outer: s.outer,
                            inner: s.inner,
                            current: s,
                            previous: a
                        }), n = s.href, t) {
                            case "inline":
                            case "ajax":
                            case "html":
                                s.selector ? e = o("<div>").html(e).find(s.selector) : p(e) && (e.data("fancybox-placeholder") || e.data("fancybox-placeholder", o('<div class="fancybox-placeholder"></div>').insertAfter(e).hide()), e = e.show().detach(), s.wrap.bind("onReset", (function() {
                                    o(this).find(e).length && e.hide().replaceAll(e.data("fancybox-placeholder")).data("fancybox-placeholder", !1)
                                })));
                                break;
                            case "image":
                                e = s.tpl.image.replace(/\{href\}/g, n);
                                break;
                            case "swf":
                                e = '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' + n + '"></param>', r = "", o.each(s.swf, (function(t, i) {
                                    e += '<param name="' + t + '" value="' + i + '"></param>', r += " " + t + '="' + i + '"'
                                })), e += '<embed src="' + n + '" type="application/x-shockwave-flash" width="100%" height="100%"' + r + "></embed></object>"
                        }
                        p(e) && e.parent().is(s.inner) || s.inner.append(e), c.trigger("beforeShow"), s.inner.css("overflow", "yes" === i ? "scroll" : "no" === i ? "hidden" : i), c._setDimension(), c.reposition(), c.isOpen = !1, c.coming = null, c.bindEvents(), c.isOpened ? a.prevMethod && c.transitions[a.prevMethod]() : o(".fancybox-wrap").not(s.wrap).stop(!0).trigger("onReset").remove(), c.transitions[c.isOpened ? s.nextMethod : s.openMethod](), c._preloadImages()
                    }
            },
            _setDimension: function() {
                var e, t = c.getViewport(),
                    i = 0,
                    n = c.wrap,
                    r = c.skin,
                    s = c.inner,
                    a = c.current;
                e = a.width;
                var l, u, d, h, p, f, y, w, b, _ = a.height,
                    x = a.minWidth,
                    C = a.minHeight,
                    k = a.maxWidth,
                    $ = a.maxHeight,
                    T = a.scrolling,
                    E = a.scrollOutside ? a.scrollbarWidth : 0,
                    S = a.margin,
                    A = g(S[1] + S[3]),
                    D = g(S[0] + S[2]);
                if (n.add(r).add(s).width("auto").height("auto").removeClass("fancybox-tmp"), u = A + (S = g(r.outerWidth(!0) - r.width())), d = D + (l = g(r.outerHeight(!0) - r.height())), h = m(e) ? (t.w - u) * g(e) / 100 : e, p = m(_) ? (t.h - d) * g(_) / 100 : _, "iframe" === a.type) {
                    if (b = a.content, a.autoHeight && b && 1 === b.data("ready")) try {
                        b[0].contentWindow.document.location && (s.width(h).height(9999), f = b.contents().find("body"), E && f.css("overflow-x", "hidden"), p = f.outerHeight(!0))
                    } catch (e) {}
                } else(a.autoWidth || a.autoHeight) && (s.addClass("fancybox-tmp"), a.autoWidth || s.width(h), a.autoHeight || s.height(p), a.autoWidth && (h = s.width()), a.autoHeight && (p = s.height()), s.removeClass("fancybox-tmp"));
                if (e = g(h), _ = g(p), w = h / p, x = g(m(x) ? g(x, "w") - u : x), k = g(m(k) ? g(k, "w") - u : k), C = g(m(C) ? g(C, "h") - d : C), f = k, y = $ = g(m($) ? g($, "h") - d : $), a.fitToView && (k = Math.min(t.w - u, k), $ = Math.min(t.h - d, $)), u = t.w - A, D = t.h - D, a.aspectRatio ? (e > k && (_ = g((e = k) / w)), _ > $ && (e = g((_ = $) * w)), e < x && (_ = g((e = x) / w)), _ < C && (e = g((_ = C) * w))) : (e = Math.max(x, Math.min(e, k)), a.autoHeight && "iframe" !== a.type && (s.width(e), _ = s.height()), _ = Math.max(C, Math.min(_, $))), a.fitToView)
                    if (s.width(e).height(_), n.width(e + S), t = n.width(), A = n.height(), a.aspectRatio)
                        for (;
                            (t > u || A > D) && e > x && _ > C && !(19 < i++);) _ = Math.max(C, Math.min($, _ - 10)), (e = g(_ * w)) < x && (_ = g((e = x) / w)), e > k && (_ = g((e = k) / w)), s.width(e).height(_), n.width(e + S), t = n.width(), A = n.height();
                    else e = Math.max(x, Math.min(e, e - (t - u))), _ = Math.max(C, Math.min(_, _ - (A - D)));
                E && "auto" === T && _ < p && e + S + E < u && (e += E), s.width(e).height(_), n.width(e + S), t = n.width(), A = n.height(), i = (t > u || A > D) && e > x && _ > C, e = a.aspectRatio ? e < f && _ < y && e < h && _ < p : (e < f || _ < y) && (e < h || _ < p), o.extend(a, {
                    dim: {
                        width: v(t),
                        height: v(A)
                    },
                    origWidth: h,
                    origHeight: p,
                    canShrink: i,
                    canExpand: e,
                    wPadding: S,
                    hPadding: l,
                    wrapSpace: A - r.outerHeight(!0),
                    skinSpace: r.height() - _
                }), !b && a.autoHeight && _ > C && _ < $ && !e && s.height("auto")
            },
            _getPosition: function(e) {
                var t = c.current,
                    i = c.getViewport(),
                    n = t.margin,
                    o = c.wrap.width() + n[1] + n[3],
                    r = c.wrap.height() + n[0] + n[2];
                return n = {
                    position: "absolute",
                    top: n[0],
                    left: n[3]
                }, t.autoCenter && t.fixed && !e && r <= i.h && o <= i.w ? n.position = "fixed" : t.locked || (n.top += i.y, n.left += i.x), n.top = v(Math.max(n.top, n.top + (i.h - r) * t.topRatio)), n.left = v(Math.max(n.left, n.left + (i.w - o) * t.leftRatio)), n
            },
            _afterZoomIn: function() {
                var e = c.current;
                e && (c.isOpen = c.isOpened = !0, c.wrap.css("overflow", "visible").addClass("fancybox-opened").hide().show(0), c.update(), (e.closeClick || e.nextClick && 1 < c.group.length) && c.inner.css("cursor", "pointer").bind("click.fb", (function(t) {
                    o(t.target).is("a") || o(t.target).parent().is("a") || (t.preventDefault(), c[e.closeClick ? "close" : "next"]())
                })), e.closeBtn && o(e.tpl.closeBtn).appendTo(c.skin).bind("click.fb", (function(e) {
                    e.preventDefault(), c.close()
                })), e.arrows && 1 < c.group.length && ((e.loop || 0 < e.index) && o(e.tpl.prev).appendTo(c.outer).bind("click.fb", c.prev), (e.loop || e.index < c.group.length - 1) && o(e.tpl.next).appendTo(c.outer).bind("click.fb", c.next)), c.trigger("afterShow"), e.loop || e.index !== e.group.length - 1 ? c.opts.autoPlay && !c.player.isActive && (c.opts.autoPlay = !1, c.play(!0)) : c.play(!1))
            },
            _afterZoomOut: function(e) {
                e = e || c.current, o(".fancybox-wrap").trigger("onReset").remove(), o.extend(c, {
                    group: {},
                    opts: {},
                    router: !1,
                    current: null,
                    isActive: !1,
                    isOpened: !1,
                    isOpen: !1,
                    isClosing: !1,
                    wrap: null,
                    skin: null,
                    outer: null,
                    inner: null
                }), c.trigger("afterClose", e)
            }
        }), c.transitions = {
            getOrigPosition: function() {
                var e = c.current,
                    t = e.element,
                    i = e.orig,
                    n = {},
                    o = 50,
                    r = 50,
                    s = e.hPadding,
                    a = e.wPadding,
                    l = c.getViewport();
                return !i && e.isDom && t.is(":visible") && ((i = t.find("img:first")).length || (i = t)), p(i) ? (n = i.offset(), i.is("img") && (o = i.outerWidth(), r = i.outerHeight())) : (n.top = l.y + (l.h - r) * e.topRatio, n.left = l.x + (l.w - o) * e.leftRatio), ("fixed" === c.wrap.css("position") || e.locked) && (n.top -= l.y, n.left -= l.x), {
                    top: v(n.top - s * e.topRatio),
                    left: v(n.left - a * e.leftRatio),
                    width: v(o + a),
                    height: v(r + s)
                }
            },
            step: function(e, t) {
                var i, n, o = t.prop,
                    r = (n = c.current).wrapSpace,
                    s = n.skinSpace;
                "width" !== o && "height" !== o || (i = t.end === t.start ? 1 : (e - t.start) / (t.end - t.start), c.isClosing && (i = 1 - i), n = e - (n = "width" === o ? n.wPadding : n.hPadding), c.skin[o](g("width" === o ? n : n - r * i)), c.inner[o](g("width" === o ? n : n - r * i - s * i)))
            },
            zoomIn: function() {
                var e = c.current,
                    t = e.pos,
                    i = e.openEffect,
                    n = "elastic" === i,
                    r = o.extend({
                        opacity: 1
                    }, t);
                delete r.position, n ? (t = this.getOrigPosition(), e.openOpacity && (t.opacity = .1)) : "fade" === i && (t.opacity = .1), c.wrap.css(t).animate(r, {
                    duration: "none" === i ? 0 : e.openSpeed,
                    easing: e.openEasing,
                    step: n ? this.step : null,
                    complete: c._afterZoomIn
                })
            },
            zoomOut: function() {
                var e = c.current,
                    t = e.closeEffect,
                    i = "elastic" === t,
                    n = {
                        opacity: .1
                    };
                i && (n = this.getOrigPosition(), e.closeOpacity && (n.opacity = .1)), c.wrap.animate(n, {
                    duration: "none" === t ? 0 : e.closeSpeed,
                    easing: e.closeEasing,
                    step: i ? this.step : null,
                    complete: c._afterZoomOut
                })
            },
            changeIn: function() {
                var e, t = c.current,
                    i = t.nextEffect,
                    n = t.pos,
                    o = {
                        opacity: 1
                    },
                    r = c.direction;
                n.opacity = .1, "elastic" === i && (e = "down" === r || "up" === r ? "top" : "left", "down" === r || "right" === r ? (n[e] = v(g(n[e]) - 200), o[e] = "+=200px") : (n[e] = v(g(n[e]) + 200), o[e] = "-=200px")), "none" === i ? c._afterZoomIn() : c.wrap.css(n).animate(o, {
                    duration: t.nextSpeed,
                    easing: t.nextEasing,
                    complete: c._afterZoomIn
                })
            },
            changeOut: function() {
                var e = c.previous,
                    t = e.prevEffect,
                    i = {
                        opacity: .1
                    },
                    n = c.direction;
                "elastic" === t && (i["down" === n || "up" === n ? "top" : "left"] = ("up" === n || "left" === n ? "-" : "+") + "=200px"), e.wrap.animate(i, {
                    duration: "none" === t ? 0 : e.prevSpeed,
                    easing: e.prevEasing,
                    complete: function() {
                        o(this).trigger("onReset").remove()
                    }
                })
            }
        }, c.helpers.overlay = {
            defaults: {
                closeClick: !0,
                speedOut: 200,
                showEarly: !0,
                css: {},
                locked: !h,
                fixed: !0
            },
            overlay: null,
            fixed: !1,
            el: o("html"),
            create: function(e) {
                var t;
                e = o.extend({}, this.defaults, e), this.overlay && this.close(), t = c.coming ? c.coming.parent : e.parent, this.overlay = o('<div class="fancybox-overlay"></div>').appendTo(t && t.length ? t : "body"), this.fixed = !1, e.fixed && c.defaults.fixed && (this.overlay.addClass("fancybox-overlay-fixed"), this.fixed = !0)
            },
            open: function(e) {
                var t = this;
                e = o.extend({}, this.defaults, e), this.overlay ? this.overlay.unbind(".overlay").width("auto").height("auto") : this.create(e), this.fixed || (a.bind("resize.overlay", o.proxy(this.update, this)), this.update()), e.closeClick && this.overlay.bind("click.overlay", (function(e) {
                    if (o(e.target).hasClass("fancybox-overlay")) return c.isActive ? c.close() : t.close(), !1
                })), this.overlay.css(e.css).show()
            },
            close: function() {
                a.unbind("resize.overlay"), this.el.hasClass("fancybox-lock") && (o(".fancybox-margin").removeClass("fancybox-margin"), this.el.removeClass("fancybox-lock"), a.scrollTop(this.scrollV).scrollLeft(this.scrollH)), o(".fancybox-overlay").remove().hide(), o.extend(this, {
                    overlay: null,
                    fixed: !1
                })
            },
            update: function() {
                var e, t = "100%";
                this.overlay.width(t).height("100%"), u ? (e = Math.max(n.documentElement.offsetWidth, n.body.offsetWidth), l.width() > e && (t = l.width())) : l.width() > a.width() && (t = l.width()), this.overlay.width(t).height(l.height())
            },
            onReady: function(e, t) {
                var i = this.overlay;
                o(".fancybox-overlay").stop(!0, !0), i || this.create(e), e.locked && this.fixed && t.fixed && (t.locked = this.overlay.append(t.wrap), t.fixed = !1), !0 === e.showEarly && this.beforeShow.apply(this, arguments)
            },
            beforeShow: function(e, t) {
                t.locked && !this.el.hasClass("fancybox-lock") && (!1 !== this.fixPosition && o("*:not(object)").filter((function() {
                    return "fixed" === o(this).css("position") && !o(this).hasClass("fancybox-overlay") && !o(this).hasClass("fancybox-wrap")
                })).addClass("fancybox-margin"), this.el.addClass("fancybox-margin"), this.scrollV = a.scrollTop(), this.scrollH = a.scrollLeft(), this.el.addClass("fancybox-lock"), a.scrollTop(this.scrollV).scrollLeft(this.scrollH)), this.open(e)
            },
            onUpdate: function() {
                this.fixed || this.update()
            },
            afterClose: function(e) {
                this.overlay && !c.coming && this.overlay.fadeOut(e.speedOut, o.proxy(this.close, this))
            }
        }, c.helpers.title = {
            defaults: {
                type: "float",
                position: "bottom"
            },
            beforeShow: function(e) {
                var t = c.current,
                    i = t.title,
                    n = e.type;
                if (o.isFunction(i) && (i = i.call(t.element, t)), f(i) && "" !== o.trim(i)) {
                    switch (t = o('<div class="fancybox-title fancybox-title-' + n + '-wrap">' + i + "</div>"), n) {
                        case "inside":
                            n = c.skin;
                            break;
                        case "outside":
                            n = c.wrap;
                            break;
                        case "over":
                            n = c.inner;
                            break;
                        default:
                            n = c.skin, t.appendTo("body"), u && t.width(t.width()), t.wrapInner('<span class="child"></span>'), c.current.margin[2] += Math.abs(g(t.css("margin-bottom")))
                    }
                    t["top" === e.position ? "prependTo" : "appendTo"](n)
                }
            }
        }, o.fn.fancybox = function(e) {
            var t, i = o(this),
                n = this.selector || "",
                r = function(r) {
                    var s, a, l = o(this).blur(),
                        u = t;
                    r.ctrlKey || r.altKey || r.shiftKey || r.metaKey || l.is(".fancybox-wrap") || (s = e.groupAttr || "data-fancybox-group", (a = l.attr(s)) || (s = "rel", a = l.get(0)[s]), a && "" !== a && "nofollow" !== a && (u = (l = (l = n.length ? o(n) : i).filter("[" + s + '="' + a + '"]')).index(this)), e.index = u, !1 !== c.open(l, e) && r.preventDefault())
                };
            return t = (e = e || {}).index || 0, n && !1 !== e.live ? l.undelegate(n, "click.fb-start").delegate(n + ":not('.fancybox-item, .fancybox-nav')", "click.fb-start", r) : i.unbind("click.fb-start").bind("click.fb-start", r), this.filter("[data-fancybox-start=1]").trigger("click"), this
        }, l.ready((function() {
            var e, t;
            o.scrollbarWidth === r && (o.scrollbarWidth = function() {
                var e = o('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),
                    t = (t = e.children()).innerWidth() - t.height(99).innerWidth();
                return e.remove(), t
            }), o.support.fixedPosition === r && (o.support.fixedPosition = function() {
                var e = o('<div style="position:fixed;top:20px;"></div>').appendTo("body"),
                    t = 20 === e[0].offsetTop || 15 === e[0].offsetTop;
                return e.remove(), t
            }()), o.extend(c.defaults, {
                scrollbarWidth: o.scrollbarWidth(),
                fixed: o.support.fixedPosition,
                parent: o("body")
            }), e = o(i).width(), s.addClass("fancybox-lock-test"), t = o(i).width(), s.removeClass("fancybox-lock-test"), o("<style type='text/css'>.fancybox-margin{margin-right:" + (t - e) + "px;}</style>").appendTo("head")
        }))
    },
    GK92: function(e, t, i) {
        var n, o, r;

        function s(e) {
            return (s = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            } : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            })(e)
        }! function(a, l) {
            "object" == s(t) && void 0 !== e ? l(t, i("EVdn"), i("8L3F")) : (o = [t, i("EVdn"), i("8L3F")], void 0 === (r = "function" == typeof(n = l) ? n.apply(t, o) : n) || (e.exports = r))
        }(0, (function(e, t, i) {
            "use strict";

            function n(e, t) {
                for (var i = 0; i < t.length; i++) {
                    var n = t[i];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }

            function o(e, t, i) {
                return t && n(e.prototype, t), i && n(e, i), e
            }

            function r(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var i = null != arguments[t] ? arguments[t] : {},
                        n = Object.keys(i);
                    "function" == typeof Object.getOwnPropertySymbols && (n = n.concat(Object.getOwnPropertySymbols(i).filter((function(e) {
                        return Object.getOwnPropertyDescriptor(i, e).enumerable
                    })))), n.forEach((function(t) {
                        var n, o, r;
                        n = e, r = i[o = t], o in n ? Object.defineProperty(n, o, {
                            value: r,
                            enumerable: !0,
                            configurable: !0,
                            writable: !0
                        }) : n[o] = r
                    }))
                }
                return e
            }
            t = t && t.hasOwnProperty("default") ? t.default : t, i = i && i.hasOwnProperty("default") ? i.default : i;
            var a = "transitionend";
            var l = {
                TRANSITION_END: "bsTransitionEnd",
                getUID: function(e) {
                    for (; e += ~~(1e6 * Math.random()), document.getElementById(e););
                    return e
                },
                getSelectorFromElement: function(e) {
                    var t = e.getAttribute("data-target");
                    if (!t || "#" === t) {
                        var i = e.getAttribute("href");
                        t = i && "#" !== i ? i.trim() : ""
                    }
                    try {
                        return document.querySelector(t) ? t : null
                    } catch (e) {
                        return null
                    }
                },
                getTransitionDurationFromElement: function(e) {
                    if (!e) return 0;
                    var i = t(e).css("transition-duration"),
                        n = t(e).css("transition-delay"),
                        o = parseFloat(i),
                        r = parseFloat(n);
                    return o || r ? (i = i.split(",")[0], n = n.split(",")[0], 1e3 * (parseFloat(i) + parseFloat(n))) : 0
                },
                reflow: function(e) {
                    return e.offsetHeight
                },
                triggerTransitionEnd: function(e) {
                    t(e).trigger(a)
                },
                supportsTransitionEnd: function() {
                    return Boolean(a)
                },
                isElement: function(e) {
                    return (e[0] || e).nodeType
                },
                typeCheckConfig: function(e, t, i) {
                    for (var n in i)
                        if (Object.prototype.hasOwnProperty.call(i, n)) {
                            var o = i[n],
                                r = t[n],
                                s = r && l.isElement(r) ? "element" : (a = r, {}.toString.call(a).match(/\s([a-z]+)/i)[1].toLowerCase());
                            if (!new RegExp(o).test(s)) throw new Error(e.toUpperCase() + ': Option "' + n + '" provided type "' + s + '" but expected type "' + o + '".')
                        }
                    var a
                },
                findShadowRoot: function(e) {
                    if (!document.documentElement.attachShadow) return null;
                    if ("function" != typeof e.getRootNode) return e instanceof ShadowRoot ? e : e.parentNode ? l.findShadowRoot(e.parentNode) : null;
                    var t = e.getRootNode();
                    return t instanceof ShadowRoot ? t : null
                }
            };
            t.fn.emulateTransitionEnd = function(e) {
                var i = this,
                    n = !1;
                return t(this).one(l.TRANSITION_END, (function() {
                    n = !0
                })), setTimeout((function() {
                    n || l.triggerTransitionEnd(i)
                }), e), this
            }, t.event.special[l.TRANSITION_END] = {
                bindType: a,
                delegateType: a,
                handle: function(e) {
                    if (t(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
                }
            };
            var c = "alert",
                u = "bs.alert",
                d = "." + u,
                h = t.fn[c],
                p = {
                    CLOSE: "close" + d,
                    CLOSED: "closed" + d,
                    CLICK_DATA_API: "click" + d + ".data-api"
                },
                f = function() {
                    function e(e) {
                        this._element = e
                    }
                    var i = e.prototype;
                    return i.close = function(e) {
                        var t = this._element;
                        e && (t = this._getRootElement(e)), this._triggerCloseEvent(t).isDefaultPrevented() || this._removeElement(t)
                    }, i.dispose = function() {
                        t.removeData(this._element, u), this._element = null
                    }, i._getRootElement = function(e) {
                        var i = l.getSelectorFromElement(e),
                            n = !1;
                        return i && (n = document.querySelector(i)), n || (n = t(e).closest(".alert")[0]), n
                    }, i._triggerCloseEvent = function(e) {
                        var i = t.Event(p.CLOSE);
                        return t(e).trigger(i), i
                    }, i._removeElement = function(e) {
                        var i = this;
                        if (t(e).removeClass("show"), t(e).hasClass("fade")) {
                            var n = l.getTransitionDurationFromElement(e);
                            t(e).one(l.TRANSITION_END, (function(t) {
                                return i._destroyElement(e, t)
                            })).emulateTransitionEnd(n)
                        } else this._destroyElement(e)
                    }, i._destroyElement = function(e) {
                        t(e).detach().trigger(p.CLOSED).remove()
                    }, e._jQueryInterface = function(i) {
                        return this.each((function() {
                            var n = t(this),
                                o = n.data(u);
                            o || (o = new e(this), n.data(u, o)), "close" === i && o[i](this)
                        }))
                    }, e._handleDismiss = function(e) {
                        return function(t) {
                            t && t.preventDefault(), e.close(this)
                        }
                    }, o(e, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }]), e
                }();
            t(document).on(p.CLICK_DATA_API, '[data-dismiss="alert"]', f._handleDismiss(new f)), t.fn[c] = f._jQueryInterface, t.fn[c].Constructor = f, t.fn[c].noConflict = function() {
                return t.fn[c] = h, f._jQueryInterface
            };
            var m = "button",
                g = "bs.button",
                v = "." + g,
                y = ".data-api",
                w = t.fn[m],
                b = "active",
                _ = '[data-toggle^="button"]',
                x = ".btn",
                C = {
                    CLICK_DATA_API: "click" + v + y,
                    FOCUS_BLUR_DATA_API: "focus" + v + y + " blur" + v + y
                },
                k = function() {
                    function e(e) {
                        this._element = e
                    }
                    var i = e.prototype;
                    return i.toggle = function() {
                        var e = !0,
                            i = !0,
                            n = t(this._element).closest('[data-toggle="buttons"]')[0];
                        if (n) {
                            var o = this._element.querySelector('input:not([type="hidden"])');
                            if (o) {
                                if ("radio" === o.type)
                                    if (o.checked && this._element.classList.contains(b)) e = !1;
                                    else {
                                        var r = n.querySelector(".active");
                                        r && t(r).removeClass(b)
                                    }
                                if (e) {
                                    if (o.hasAttribute("disabled") || n.hasAttribute("disabled") || o.classList.contains("disabled") || n.classList.contains("disabled")) return;
                                    o.checked = !this._element.classList.contains(b), t(o).trigger("change")
                                }
                                o.focus(), i = !1
                            }
                        }
                        i && this._element.setAttribute("aria-pressed", !this._element.classList.contains(b)), e && t(this._element).toggleClass(b)
                    }, i.dispose = function() {
                        t.removeData(this._element, g), this._element = null
                    }, e._jQueryInterface = function(i) {
                        return this.each((function() {
                            var n = t(this).data(g);
                            n || (n = new e(this), t(this).data(g, n)), "toggle" === i && n[i]()
                        }))
                    }, o(e, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }]), e
                }();
            t(document).on(C.CLICK_DATA_API, _, (function(e) {
                e.preventDefault();
                var i = e.target;
                t(i).hasClass("btn") || (i = t(i).closest(x)), k._jQueryInterface.call(t(i), "toggle")
            })).on(C.FOCUS_BLUR_DATA_API, _, (function(e) {
                var i = t(e.target).closest(x)[0];
                t(i).toggleClass("focus", /^focus(in)?$/.test(e.type))
            })), t.fn[m] = k._jQueryInterface, t.fn[m].Constructor = k, t.fn[m].noConflict = function() {
                return t.fn[m] = w, k._jQueryInterface
            };
            var $ = "carousel",
                T = "bs.carousel",
                E = "." + T,
                S = ".data-api",
                A = t.fn[$],
                D = {
                    interval: 5e3,
                    keyboard: !0,
                    slide: !1,
                    pause: "hover",
                    wrap: !0,
                    touch: !0
                },
                O = {
                    interval: "(number|boolean)",
                    keyboard: "boolean",
                    slide: "(boolean|string)",
                    pause: "(string|boolean)",
                    wrap: "boolean",
                    touch: "boolean"
                },
                I = "next",
                L = "prev",
                P = {
                    SLIDE: "slide" + E,
                    SLID: "slid" + E,
                    KEYDOWN: "keydown" + E,
                    MOUSEENTER: "mouseenter" + E,
                    MOUSELEAVE: "mouseleave" + E,
                    TOUCHSTART: "touchstart" + E,
                    TOUCHMOVE: "touchmove" + E,
                    TOUCHEND: "touchend" + E,
                    POINTERDOWN: "pointerdown" + E,
                    POINTERUP: "pointerup" + E,
                    DRAG_START: "dragstart" + E,
                    LOAD_DATA_API: "load" + E + S,
                    CLICK_DATA_API: "click" + E + S
                },
                z = "active",
                F = ".active.carousel-item",
                M = {
                    TOUCH: "touch",
                    PEN: "pen"
                },
                N = function() {
                    function e(e, t) {
                        this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(t), this._element = e, this._indicatorsElement = this._element.querySelector(".carousel-indicators"), this._touchSupported = "ontouchstart" in document.documentElement || 0 < navigator.maxTouchPoints, this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent), this._addEventListeners()
                    }
                    var i = e.prototype;
                    return i.next = function() {
                        this._isSliding || this._slide(I)
                    }, i.nextWhenVisible = function() {
                        !document.hidden && t(this._element).is(":visible") && "hidden" !== t(this._element).css("visibility") && this.next()
                    }, i.prev = function() {
                        this._isSliding || this._slide(L)
                    }, i.pause = function(e) {
                        e || (this._isPaused = !0), this._element.querySelector(".carousel-item-next, .carousel-item-prev") && (l.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
                    }, i.cycle = function(e) {
                        e || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
                    }, i.to = function(e) {
                        var i = this;
                        this._activeElement = this._element.querySelector(F);
                        var n = this._getItemIndex(this._activeElement);
                        if (!(e > this._items.length - 1 || e < 0))
                            if (this._isSliding) t(this._element).one(P.SLID, (function() {
                                return i.to(e)
                            }));
                            else {
                                if (n === e) return this.pause(), void this.cycle();
                                var o = n < e ? I : L;
                                this._slide(o, this._items[e])
                            }
                    }, i.dispose = function() {
                        t(this._element).off(E), t.removeData(this._element, T), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
                    }, i._getConfig = function(e) {
                        return e = r({}, D, e), l.typeCheckConfig($, e, O), e
                    }, i._handleSwipe = function() {
                        var e = Math.abs(this.touchDeltaX);
                        if (!(e <= 40)) {
                            var t = e / this.touchDeltaX;
                            0 < t && this.prev(), t < 0 && this.next()
                        }
                    }, i._addEventListeners = function() {
                        var e = this;
                        this._config.keyboard && t(this._element).on(P.KEYDOWN, (function(t) {
                            return e._keydown(t)
                        })), "hover" === this._config.pause && t(this._element).on(P.MOUSEENTER, (function(t) {
                            return e.pause(t)
                        })).on(P.MOUSELEAVE, (function(t) {
                            return e.cycle(t)
                        })), this._config.touch && this._addTouchEventListeners()
                    }, i._addTouchEventListeners = function() {
                        var e = this;
                        if (this._touchSupported) {
                            var i = function(t) {
                                    e._pointerEvent && M[t.originalEvent.pointerType.toUpperCase()] ? e.touchStartX = t.originalEvent.clientX : e._pointerEvent || (e.touchStartX = t.originalEvent.touches[0].clientX)
                                },
                                n = function(t) {
                                    e._pointerEvent && M[t.originalEvent.pointerType.toUpperCase()] && (e.touchDeltaX = t.originalEvent.clientX - e.touchStartX), e._handleSwipe(), "hover" === e._config.pause && (e.pause(), e.touchTimeout && clearTimeout(e.touchTimeout), e.touchTimeout = setTimeout((function(t) {
                                        return e.cycle(t)
                                    }), 500 + e._config.interval))
                                };
                            t(this._element.querySelectorAll(".carousel-item img")).on(P.DRAG_START, (function(e) {
                                return e.preventDefault()
                            })), this._pointerEvent ? (t(this._element).on(P.POINTERDOWN, (function(e) {
                                return i(e)
                            })), t(this._element).on(P.POINTERUP, (function(e) {
                                return n(e)
                            })), this._element.classList.add("pointer-event")) : (t(this._element).on(P.TOUCHSTART, (function(e) {
                                return i(e)
                            })), t(this._element).on(P.TOUCHMOVE, (function(t) {
                                var i;
                                (i = t).originalEvent.touches && 1 < i.originalEvent.touches.length ? e.touchDeltaX = 0 : e.touchDeltaX = i.originalEvent.touches[0].clientX - e.touchStartX
                            })), t(this._element).on(P.TOUCHEND, (function(e) {
                                return n(e)
                            })))
                        }
                    }, i._keydown = function(e) {
                        if (!/input|textarea/i.test(e.target.tagName)) switch (e.which) {
                            case 37:
                                e.preventDefault(), this.prev();
                                break;
                            case 39:
                                e.preventDefault(), this.next()
                        }
                    }, i._getItemIndex = function(e) {
                        return this._items = e && e.parentNode ? [].slice.call(e.parentNode.querySelectorAll(".carousel-item")) : [], this._items.indexOf(e)
                    }, i._getItemByDirection = function(e, t) {
                        var i = e === I,
                            n = e === L,
                            o = this._getItemIndex(t),
                            r = this._items.length - 1;
                        if ((n && 0 === o || i && o === r) && !this._config.wrap) return t;
                        var s = (o + (e === L ? -1 : 1)) % this._items.length;
                        return -1 === s ? this._items[this._items.length - 1] : this._items[s]
                    }, i._triggerSlideEvent = function(e, i) {
                        var n = this._getItemIndex(e),
                            o = this._getItemIndex(this._element.querySelector(F)),
                            r = t.Event(P.SLIDE, {
                                relatedTarget: e,
                                direction: i,
                                from: o,
                                to: n
                            });
                        return t(this._element).trigger(r), r
                    }, i._setActiveIndicatorElement = function(e) {
                        if (this._indicatorsElement) {
                            var i = [].slice.call(this._indicatorsElement.querySelectorAll(".active"));
                            t(i).removeClass(z);
                            var n = this._indicatorsElement.children[this._getItemIndex(e)];
                            n && t(n).addClass(z)
                        }
                    }, i._slide = function(e, i) {
                        var n, o, r, s = this,
                            a = this._element.querySelector(F),
                            c = this._getItemIndex(a),
                            u = i || a && this._getItemByDirection(e, a),
                            d = this._getItemIndex(u),
                            h = Boolean(this._interval);
                        if (r = e === I ? (n = "carousel-item-left", o = "carousel-item-next", "left") : (n = "carousel-item-right", o = "carousel-item-prev", "right"), u && t(u).hasClass(z)) this._isSliding = !1;
                        else if (!this._triggerSlideEvent(u, r).isDefaultPrevented() && a && u) {
                            this._isSliding = !0, h && this.pause(), this._setActiveIndicatorElement(u);
                            var p = t.Event(P.SLID, {
                                relatedTarget: u,
                                direction: r,
                                from: c,
                                to: d
                            });
                            if (t(this._element).hasClass("slide")) {
                                t(u).addClass(o), l.reflow(u), t(a).addClass(n), t(u).addClass(n);
                                var f = parseInt(u.getAttribute("data-interval"), 10);
                                this._config.interval = f ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, f) : this._config.defaultInterval || this._config.interval;
                                var m = l.getTransitionDurationFromElement(a);
                                t(a).one(l.TRANSITION_END, (function() {
                                    t(u).removeClass(n + " " + o).addClass(z), t(a).removeClass(z + " " + o + " " + n), s._isSliding = !1, setTimeout((function() {
                                        return t(s._element).trigger(p)
                                    }), 0)
                                })).emulateTransitionEnd(m)
                            } else t(a).removeClass(z), t(u).addClass(z), this._isSliding = !1, t(this._element).trigger(p);
                            h && this.cycle()
                        }
                    }, e._jQueryInterface = function(i) {
                        return this.each((function() {
                            var n = t(this).data(T),
                                o = r({}, D, t(this).data());
                            "object" == s(i) && (o = r({}, o, i));
                            var a = "string" == typeof i ? i : o.slide;
                            if (n || (n = new e(this, o), t(this).data(T, n)), "number" == typeof i) n.to(i);
                            else if ("string" == typeof a) {
                                if (void 0 === n[a]) throw new TypeError('No method named "' + a + '"');
                                n[a]()
                            } else o.interval && o.ride && (n.pause(), n.cycle())
                        }))
                    }, e._dataApiClickHandler = function(i) {
                        var n = l.getSelectorFromElement(this);
                        if (n) {
                            var o = t(n)[0];
                            if (o && t(o).hasClass("carousel")) {
                                var s = r({}, t(o).data(), t(this).data()),
                                    a = this.getAttribute("data-slide-to");
                                a && (s.interval = !1), e._jQueryInterface.call(t(o), s), a && t(o).data(T).to(a), i.preventDefault()
                            }
                        }
                    }, o(e, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return D
                        }
                    }]), e
                }();
            t(document).on(P.CLICK_DATA_API, "[data-slide], [data-slide-to]", N._dataApiClickHandler), t(window).on(P.LOAD_DATA_API, (function() {
                for (var e = [].slice.call(document.querySelectorAll('[data-ride="carousel"]')), i = 0, n = e.length; i < n; i++) {
                    var o = t(e[i]);
                    N._jQueryInterface.call(o, o.data())
                }
            })), t.fn[$] = N._jQueryInterface, t.fn[$].Constructor = N, t.fn[$].noConflict = function() {
                return t.fn[$] = A, N._jQueryInterface
            };
            var j = "collapse",
                R = "bs.collapse",
                H = "." + R,
                B = t.fn[j],
                q = {
                    toggle: !0,
                    parent: ""
                },
                W = {
                    toggle: "boolean",
                    parent: "(string|element)"
                },
                U = {
                    SHOW: "show" + H,
                    SHOWN: "shown" + H,
                    HIDE: "hide" + H,
                    HIDDEN: "hidden" + H,
                    CLICK_DATA_API: "click" + H + ".data-api"
                },
                V = "show",
                K = "collapse",
                Y = "collapsing",
                Q = "collapsed",
                X = '[data-toggle="collapse"]',
                G = function() {
                    function e(e, t) {
                        this._isTransitioning = !1, this._element = e, this._config = this._getConfig(t), this._triggerArray = [].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'));
                        for (var i = [].slice.call(document.querySelectorAll(X)), n = 0, o = i.length; n < o; n++) {
                            var r = i[n],
                                s = l.getSelectorFromElement(r),
                                a = [].slice.call(document.querySelectorAll(s)).filter((function(t) {
                                    return t === e
                                }));
                            null !== s && 0 < a.length && (this._selector = s, this._triggerArray.push(r))
                        }
                        this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
                    }
                    var i = e.prototype;
                    return i.toggle = function() {
                        t(this._element).hasClass(V) ? this.hide() : this.show()
                    }, i.show = function() {
                        var i, n, o = this;
                        if (!(this._isTransitioning || t(this._element).hasClass(V) || (this._parent && 0 === (i = [].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter((function(e) {
                                return "string" == typeof o._config.parent ? e.getAttribute("data-parent") === o._config.parent : e.classList.contains(K)
                            }))).length && (i = null), i && (n = t(i).not(this._selector).data(R)) && n._isTransitioning))) {
                            var r = t.Event(U.SHOW);
                            if (t(this._element).trigger(r), !r.isDefaultPrevented()) {
                                i && (e._jQueryInterface.call(t(i).not(this._selector), "hide"), n || t(i).data(R, null));
                                var s = this._getDimension();
                                t(this._element).removeClass(K).addClass(Y), this._element.style[s] = 0, this._triggerArray.length && t(this._triggerArray).removeClass(Q).attr("aria-expanded", !0), this.setTransitioning(!0);
                                var a = "scroll" + (s[0].toUpperCase() + s.slice(1)),
                                    c = l.getTransitionDurationFromElement(this._element);
                                t(this._element).one(l.TRANSITION_END, (function() {
                                    t(o._element).removeClass(Y).addClass(K).addClass(V), o._element.style[s] = "", o.setTransitioning(!1), t(o._element).trigger(U.SHOWN)
                                })).emulateTransitionEnd(c), this._element.style[s] = this._element[a] + "px"
                            }
                        }
                    }, i.hide = function() {
                        var e = this;
                        if (!this._isTransitioning && t(this._element).hasClass(V)) {
                            var i = t.Event(U.HIDE);
                            if (t(this._element).trigger(i), !i.isDefaultPrevented()) {
                                var n = this._getDimension();
                                this._element.style[n] = this._element.getBoundingClientRect()[n] + "px", l.reflow(this._element), t(this._element).addClass(Y).removeClass(K).removeClass(V);
                                var o = this._triggerArray.length;
                                if (0 < o)
                                    for (var r = 0; r < o; r++) {
                                        var s = this._triggerArray[r],
                                            a = l.getSelectorFromElement(s);
                                        null !== a && (t([].slice.call(document.querySelectorAll(a))).hasClass(V) || t(s).addClass(Q).attr("aria-expanded", !1))
                                    }
                                this.setTransitioning(!0), this._element.style[n] = "";
                                var c = l.getTransitionDurationFromElement(this._element);
                                t(this._element).one(l.TRANSITION_END, (function() {
                                    e.setTransitioning(!1), t(e._element).removeClass(Y).addClass(K).trigger(U.HIDDEN)
                                })).emulateTransitionEnd(c)
                            }
                        }
                    }, i.setTransitioning = function(e) {
                        this._isTransitioning = e
                    }, i.dispose = function() {
                        t.removeData(this._element, R), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
                    }, i._getConfig = function(e) {
                        return (e = r({}, q, e)).toggle = Boolean(e.toggle), l.typeCheckConfig(j, e, W), e
                    }, i._getDimension = function() {
                        return t(this._element).hasClass("width") ? "width" : "height"
                    }, i._getParent = function() {
                        var i, n = this;
                        l.isElement(this._config.parent) ? (i = this._config.parent, void 0 !== this._config.parent.jquery && (i = this._config.parent[0])) : i = document.querySelector(this._config.parent);
                        var o = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]',
                            r = [].slice.call(i.querySelectorAll(o));
                        return t(r).each((function(t, i) {
                            n._addAriaAndCollapsedClass(e._getTargetFromElement(i), [i])
                        })), i
                    }, i._addAriaAndCollapsedClass = function(e, i) {
                        var n = t(e).hasClass(V);
                        i.length && t(i).toggleClass(Q, !n).attr("aria-expanded", n)
                    }, e._getTargetFromElement = function(e) {
                        var t = l.getSelectorFromElement(e);
                        return t ? document.querySelector(t) : null
                    }, e._jQueryInterface = function(i) {
                        return this.each((function() {
                            var n = t(this),
                                o = n.data(R),
                                a = r({}, q, n.data(), "object" == s(i) && i ? i : {});
                            if (!o && a.toggle && /show|hide/.test(i) && (a.toggle = !1), o || (o = new e(this, a), n.data(R, o)), "string" == typeof i) {
                                if (void 0 === o[i]) throw new TypeError('No method named "' + i + '"');
                                o[i]()
                            }
                        }))
                    }, o(e, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return q
                        }
                    }]), e
                }();
            t(document).on(U.CLICK_DATA_API, X, (function(e) {
                "A" === e.currentTarget.tagName && e.preventDefault();
                var i = t(this),
                    n = l.getSelectorFromElement(this),
                    o = [].slice.call(document.querySelectorAll(n));
                t(o).each((function() {
                    var e = t(this),
                        n = e.data(R) ? "toggle" : i.data();
                    G._jQueryInterface.call(e, n)
                }))
            })), t.fn[j] = G._jQueryInterface, t.fn[j].Constructor = G, t.fn[j].noConflict = function() {
                return t.fn[j] = B, G._jQueryInterface
            };
            var Z = "dropdown",
                J = "bs.dropdown",
                ee = "." + J,
                te = ".data-api",
                ie = t.fn[Z],
                ne = new RegExp("38|40|27"),
                oe = {
                    HIDE: "hide" + ee,
                    HIDDEN: "hidden" + ee,
                    SHOW: "show" + ee,
                    SHOWN: "shown" + ee,
                    CLICK: "click" + ee,
                    CLICK_DATA_API: "click" + ee + te,
                    KEYDOWN_DATA_API: "keydown" + ee + te,
                    KEYUP_DATA_API: "keyup" + ee + te
                },
                re = "disabled",
                se = "show",
                ae = "dropdown-menu-right",
                le = '[data-toggle="dropdown"]',
                ce = ".dropdown-menu",
                ue = {
                    offset: 0,
                    flip: !0,
                    boundary: "scrollParent",
                    reference: "toggle",
                    display: "dynamic"
                },
                de = {
                    offset: "(number|string|function)",
                    flip: "boolean",
                    boundary: "(string|element)",
                    reference: "(string|element)",
                    display: "string"
                },
                he = function() {
                    function e(e, t) {
                        this._element = e, this._popper = null, this._config = this._getConfig(t), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners()
                    }
                    var n = e.prototype;
                    return n.toggle = function() {
                        if (!this._element.disabled && !t(this._element).hasClass(re)) {
                            var n = e._getParentFromElement(this._element),
                                o = t(this._menu).hasClass(se);
                            if (e._clearMenus(), !o) {
                                var r = {
                                        relatedTarget: this._element
                                    },
                                    s = t.Event(oe.SHOW, r);
                                if (t(n).trigger(s), !s.isDefaultPrevented()) {
                                    if (!this._inNavbar) {
                                        if (void 0 === i) throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org/)");
                                        var a = this._element;
                                        "parent" === this._config.reference ? a = n : l.isElement(this._config.reference) && (a = this._config.reference, void 0 !== this._config.reference.jquery && (a = this._config.reference[0])), "scrollParent" !== this._config.boundary && t(n).addClass("position-static"), this._popper = new i(a, this._menu, this._getPopperConfig())
                                    }
                                    "ontouchstart" in document.documentElement && 0 === t(n).closest(".navbar-nav").length && t(document.body).children().on("mouseover", null, t.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), t(this._menu).toggleClass(se), t(n).toggleClass(se).trigger(t.Event(oe.SHOWN, r))
                                }
                            }
                        }
                    }, n.show = function() {
                        if (!(this._element.disabled || t(this._element).hasClass(re) || t(this._menu).hasClass(se))) {
                            var i = {
                                    relatedTarget: this._element
                                },
                                n = t.Event(oe.SHOW, i),
                                o = e._getParentFromElement(this._element);
                            t(o).trigger(n), n.isDefaultPrevented() || (t(this._menu).toggleClass(se), t(o).toggleClass(se).trigger(t.Event(oe.SHOWN, i)))
                        }
                    }, n.hide = function() {
                        if (!this._element.disabled && !t(this._element).hasClass(re) && t(this._menu).hasClass(se)) {
                            var i = {
                                    relatedTarget: this._element
                                },
                                n = t.Event(oe.HIDE, i),
                                o = e._getParentFromElement(this._element);
                            t(o).trigger(n), n.isDefaultPrevented() || (t(this._menu).toggleClass(se), t(o).toggleClass(se).trigger(t.Event(oe.HIDDEN, i)))
                        }
                    }, n.dispose = function() {
                        t.removeData(this._element, J), t(this._element).off(ee), this._element = null, (this._menu = null) !== this._popper && (this._popper.destroy(), this._popper = null)
                    }, n.update = function() {
                        this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate()
                    }, n._addEventListeners = function() {
                        var e = this;
                        t(this._element).on(oe.CLICK, (function(t) {
                            t.preventDefault(), t.stopPropagation(), e.toggle()
                        }))
                    }, n._getConfig = function(e) {
                        return e = r({}, this.constructor.Default, t(this._element).data(), e), l.typeCheckConfig(Z, e, this.constructor.DefaultType), e
                    }, n._getMenuElement = function() {
                        if (!this._menu) {
                            var t = e._getParentFromElement(this._element);
                            t && (this._menu = t.querySelector(ce))
                        }
                        return this._menu
                    }, n._getPlacement = function() {
                        var e = t(this._element.parentNode),
                            i = "bottom-start";
                        return e.hasClass("dropup") ? (i = "top-start", t(this._menu).hasClass(ae) && (i = "top-end")) : e.hasClass("dropright") ? i = "right-start" : e.hasClass("dropleft") ? i = "left-start" : t(this._menu).hasClass(ae) && (i = "bottom-end"), i
                    }, n._detectNavbar = function() {
                        return 0 < t(this._element).closest(".navbar").length
                    }, n._getOffset = function() {
                        var e = this,
                            t = {};
                        return "function" == typeof this._config.offset ? t.fn = function(t) {
                            return t.offsets = r({}, t.offsets, e._config.offset(t.offsets, e._element) || {}), t
                        } : t.offset = this._config.offset, t
                    }, n._getPopperConfig = function() {
                        var e = {
                            placement: this._getPlacement(),
                            modifiers: {
                                offset: this._getOffset(),
                                flip: {
                                    enabled: this._config.flip
                                },
                                preventOverflow: {
                                    boundariesElement: this._config.boundary
                                }
                            }
                        };
                        return "static" === this._config.display && (e.modifiers.applyStyle = {
                            enabled: !1
                        }), e
                    }, e._jQueryInterface = function(i) {
                        return this.each((function() {
                            var n = t(this).data(J);
                            if (n || (n = new e(this, "object" == s(i) ? i : null), t(this).data(J, n)), "string" == typeof i) {
                                if (void 0 === n[i]) throw new TypeError('No method named "' + i + '"');
                                n[i]()
                            }
                        }))
                    }, e._clearMenus = function(i) {
                        if (!i || 3 !== i.which && ("keyup" !== i.type || 9 === i.which))
                            for (var n = [].slice.call(document.querySelectorAll(le)), o = 0, r = n.length; o < r; o++) {
                                var s = e._getParentFromElement(n[o]),
                                    a = t(n[o]).data(J),
                                    l = {
                                        relatedTarget: n[o]
                                    };
                                if (i && "click" === i.type && (l.clickEvent = i), a) {
                                    var c = a._menu;
                                    if (t(s).hasClass(se) && !(i && ("click" === i.type && /input|textarea/i.test(i.target.tagName) || "keyup" === i.type && 9 === i.which) && t.contains(s, i.target))) {
                                        var u = t.Event(oe.HIDE, l);
                                        t(s).trigger(u), u.isDefaultPrevented() || ("ontouchstart" in document.documentElement && t(document.body).children().off("mouseover", null, t.noop), n[o].setAttribute("aria-expanded", "false"), t(c).removeClass(se), t(s).removeClass(se).trigger(t.Event(oe.HIDDEN, l)))
                                    }
                                }
                            }
                    }, e._getParentFromElement = function(e) {
                        var t, i = l.getSelectorFromElement(e);
                        return i && (t = document.querySelector(i)), t || e.parentNode
                    }, e._dataApiKeydownHandler = function(i) {
                        if ((/input|textarea/i.test(i.target.tagName) ? !(32 === i.which || 27 !== i.which && (40 !== i.which && 38 !== i.which || t(i.target).closest(ce).length)) : ne.test(i.which)) && (i.preventDefault(), i.stopPropagation(), !this.disabled && !t(this).hasClass(re))) {
                            var n = e._getParentFromElement(this),
                                o = t(n).hasClass(se);
                            if (o && (!o || 27 !== i.which && 32 !== i.which)) {
                                var r = [].slice.call(n.querySelectorAll(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)"));
                                if (0 !== r.length) {
                                    var s = r.indexOf(i.target);
                                    38 === i.which && 0 < s && s--, 40 === i.which && s < r.length - 1 && s++, s < 0 && (s = 0), r[s].focus()
                                }
                            } else {
                                if (27 === i.which) {
                                    var a = n.querySelector(le);
                                    t(a).trigger("focus")
                                }
                                t(this).trigger("click")
                            }
                        }
                    }, o(e, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return ue
                        }
                    }, {
                        key: "DefaultType",
                        get: function() {
                            return de
                        }
                    }]), e
                }();
            t(document).on(oe.KEYDOWN_DATA_API, le, he._dataApiKeydownHandler).on(oe.KEYDOWN_DATA_API, ce, he._dataApiKeydownHandler).on(oe.CLICK_DATA_API + " " + oe.KEYUP_DATA_API, he._clearMenus).on(oe.CLICK_DATA_API, le, (function(e) {
                e.preventDefault(), e.stopPropagation(), he._jQueryInterface.call(t(this), "toggle")
            })).on(oe.CLICK_DATA_API, ".dropdown form", (function(e) {
                e.stopPropagation()
            })), t.fn[Z] = he._jQueryInterface, t.fn[Z].Constructor = he, t.fn[Z].noConflict = function() {
                return t.fn[Z] = ie, he._jQueryInterface
            };
            var pe = "modal",
                fe = "bs.modal",
                me = "." + fe,
                ge = t.fn[pe],
                ve = {
                    backdrop: !0,
                    keyboard: !0,
                    focus: !0,
                    show: !0
                },
                ye = {
                    backdrop: "(boolean|string)",
                    keyboard: "boolean",
                    focus: "boolean",
                    show: "boolean"
                },
                we = {
                    HIDE: "hide" + me,
                    HIDDEN: "hidden" + me,
                    SHOW: "show" + me,
                    SHOWN: "shown" + me,
                    FOCUSIN: "focusin" + me,
                    RESIZE: "resize" + me,
                    CLICK_DISMISS: "click.dismiss" + me,
                    KEYDOWN_DISMISS: "keydown.dismiss" + me,
                    MOUSEUP_DISMISS: "mouseup.dismiss" + me,
                    MOUSEDOWN_DISMISS: "mousedown.dismiss" + me,
                    CLICK_DATA_API: "click" + me + ".data-api"
                },
                be = "modal-open",
                _e = "fade",
                xe = "show",
                Ce = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
                ke = ".sticky-top",
                $e = function() {
                    function e(e, t) {
                        this._config = this._getConfig(t), this._element = e, this._dialog = e.querySelector(".modal-dialog"), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0
                    }
                    var i = e.prototype;
                    return i.toggle = function(e) {
                        return this._isShown ? this.hide() : this.show(e)
                    }, i.show = function(e) {
                        var i = this;
                        if (!this._isShown && !this._isTransitioning) {
                            t(this._element).hasClass(_e) && (this._isTransitioning = !0);
                            var n = t.Event(we.SHOW, {
                                relatedTarget: e
                            });
                            t(this._element).trigger(n), this._isShown || n.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), t(this._element).on(we.CLICK_DISMISS, '[data-dismiss="modal"]', (function(e) {
                                return i.hide(e)
                            })), t(this._dialog).on(we.MOUSEDOWN_DISMISS, (function() {
                                t(i._element).one(we.MOUSEUP_DISMISS, (function(e) {
                                    t(e.target).is(i._element) && (i._ignoreBackdropClick = !0)
                                }))
                            })), this._showBackdrop((function() {
                                return i._showElement(e)
                            })))
                        }
                    }, i.hide = function(e) {
                        var i = this;
                        if (e && e.preventDefault(), this._isShown && !this._isTransitioning) {
                            var n = t.Event(we.HIDE);
                            if (t(this._element).trigger(n), this._isShown && !n.isDefaultPrevented()) {
                                this._isShown = !1;
                                var o = t(this._element).hasClass(_e);
                                if (o && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), t(document).off(we.FOCUSIN), t(this._element).removeClass(xe), t(this._element).off(we.CLICK_DISMISS), t(this._dialog).off(we.MOUSEDOWN_DISMISS), o) {
                                    var r = l.getTransitionDurationFromElement(this._element);
                                    t(this._element).one(l.TRANSITION_END, (function(e) {
                                        return i._hideModal(e)
                                    })).emulateTransitionEnd(r)
                                } else this._hideModal()
                            }
                        }
                    }, i.dispose = function() {
                        [window, this._element, this._dialog].forEach((function(e) {
                            return t(e).off(me)
                        })), t(document).off(we.FOCUSIN), t.removeData(this._element, fe), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null
                    }, i.handleUpdate = function() {
                        this._adjustDialog()
                    }, i._getConfig = function(e) {
                        return e = r({}, ve, e), l.typeCheckConfig(pe, e, ye), e
                    }, i._showElement = function(e) {
                        var i = this,
                            n = t(this._element).hasClass(_e);
                        this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), t(this._dialog).hasClass("modal-dialog-scrollable") ? this._dialog.querySelector(".modal-body").scrollTop = 0 : this._element.scrollTop = 0, n && l.reflow(this._element), t(this._element).addClass(xe), this._config.focus && this._enforceFocus();
                        var o = t.Event(we.SHOWN, {
                                relatedTarget: e
                            }),
                            r = function() {
                                i._config.focus && i._element.focus(), i._isTransitioning = !1, t(i._element).trigger(o)
                            };
                        if (n) {
                            var s = l.getTransitionDurationFromElement(this._dialog);
                            t(this._dialog).one(l.TRANSITION_END, r).emulateTransitionEnd(s)
                        } else r()
                    }, i._enforceFocus = function() {
                        var e = this;
                        t(document).off(we.FOCUSIN).on(we.FOCUSIN, (function(i) {
                            document !== i.target && e._element !== i.target && 0 === t(e._element).has(i.target).length && e._element.focus()
                        }))
                    }, i._setEscapeEvent = function() {
                        var e = this;
                        this._isShown && this._config.keyboard ? t(this._element).on(we.KEYDOWN_DISMISS, (function(t) {
                            27 === t.which && (t.preventDefault(), e.hide())
                        })) : this._isShown || t(this._element).off(we.KEYDOWN_DISMISS)
                    }, i._setResizeEvent = function() {
                        var e = this;
                        this._isShown ? t(window).on(we.RESIZE, (function(t) {
                            return e.handleUpdate(t)
                        })) : t(window).off(we.RESIZE)
                    }, i._hideModal = function() {
                        var e = this;
                        this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._isTransitioning = !1, this._showBackdrop((function() {
                            t(document.body).removeClass(be), e._resetAdjustments(), e._resetScrollbar(), t(e._element).trigger(we.HIDDEN)
                        }))
                    }, i._removeBackdrop = function() {
                        this._backdrop && (t(this._backdrop).remove(), this._backdrop = null)
                    }, i._showBackdrop = function(e) {
                        var i = this,
                            n = t(this._element).hasClass(_e) ? _e : "";
                        if (this._isShown && this._config.backdrop) {
                            if (this._backdrop = document.createElement("div"), this._backdrop.className = "modal-backdrop", n && this._backdrop.classList.add(n), t(this._backdrop).appendTo(document.body), t(this._element).on(we.CLICK_DISMISS, (function(e) {
                                    i._ignoreBackdropClick ? i._ignoreBackdropClick = !1 : e.target === e.currentTarget && ("static" === i._config.backdrop ? i._element.focus() : i.hide())
                                })), n && l.reflow(this._backdrop), t(this._backdrop).addClass(xe), !e) return;
                            if (!n) return void e();
                            var o = l.getTransitionDurationFromElement(this._backdrop);
                            t(this._backdrop).one(l.TRANSITION_END, e).emulateTransitionEnd(o)
                        } else if (!this._isShown && this._backdrop) {
                            t(this._backdrop).removeClass(xe);
                            var r = function() {
                                i._removeBackdrop(), e && e()
                            };
                            if (t(this._element).hasClass(_e)) {
                                var s = l.getTransitionDurationFromElement(this._backdrop);
                                t(this._backdrop).one(l.TRANSITION_END, r).emulateTransitionEnd(s)
                            } else r()
                        } else e && e()
                    }, i._adjustDialog = function() {
                        var e = this._element.scrollHeight > document.documentElement.clientHeight;
                        !this._isBodyOverflowing && e && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !e && (this._element.style.paddingRight = this._scrollbarWidth + "px")
                    }, i._resetAdjustments = function() {
                        this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
                    }, i._checkScrollbar = function() {
                        var e = document.body.getBoundingClientRect();
                        this._isBodyOverflowing = e.left + e.right < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
                    }, i._setScrollbar = function() {
                        var e = this;
                        if (this._isBodyOverflowing) {
                            var i = [].slice.call(document.querySelectorAll(Ce)),
                                n = [].slice.call(document.querySelectorAll(ke));
                            t(i).each((function(i, n) {
                                var o = n.style.paddingRight,
                                    r = t(n).css("padding-right");
                                t(n).data("padding-right", o).css("padding-right", parseFloat(r) + e._scrollbarWidth + "px")
                            })), t(n).each((function(i, n) {
                                var o = n.style.marginRight,
                                    r = t(n).css("margin-right");
                                t(n).data("margin-right", o).css("margin-right", parseFloat(r) - e._scrollbarWidth + "px")
                            }));
                            var o = document.body.style.paddingRight,
                                r = t(document.body).css("padding-right");
                            t(document.body).data("padding-right", o).css("padding-right", parseFloat(r) + this._scrollbarWidth + "px")
                        }
                        t(document.body).addClass(be)
                    }, i._resetScrollbar = function() {
                        var e = [].slice.call(document.querySelectorAll(Ce));
                        t(e).each((function(e, i) {
                            var n = t(i).data("padding-right");
                            t(i).removeData("padding-right"), i.style.paddingRight = n || ""
                        }));
                        var i = [].slice.call(document.querySelectorAll("" + ke));
                        t(i).each((function(e, i) {
                            var n = t(i).data("margin-right");
                            void 0 !== n && t(i).css("margin-right", n).removeData("margin-right")
                        }));
                        var n = t(document.body).data("padding-right");
                        t(document.body).removeData("padding-right"), document.body.style.paddingRight = n || ""
                    }, i._getScrollbarWidth = function() {
                        var e = document.createElement("div");
                        e.className = "modal-scrollbar-measure", document.body.appendChild(e);
                        var t = e.getBoundingClientRect().width - e.clientWidth;
                        return document.body.removeChild(e), t
                    }, e._jQueryInterface = function(i, n) {
                        return this.each((function() {
                            var o = t(this).data(fe),
                                a = r({}, ve, t(this).data(), "object" == s(i) && i ? i : {});
                            if (o || (o = new e(this, a), t(this).data(fe, o)), "string" == typeof i) {
                                if (void 0 === o[i]) throw new TypeError('No method named "' + i + '"');
                                o[i](n)
                            } else a.show && o.show(n)
                        }))
                    }, o(e, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return ve
                        }
                    }]), e
                }();
            t(document).on(we.CLICK_DATA_API, '[data-toggle="modal"]', (function(e) {
                var i, n = this,
                    o = l.getSelectorFromElement(this);
                o && (i = document.querySelector(o));
                var s = t(i).data(fe) ? "toggle" : r({}, t(i).data(), t(this).data());
                "A" !== this.tagName && "AREA" !== this.tagName || e.preventDefault();
                var a = t(i).one(we.SHOW, (function(e) {
                    e.isDefaultPrevented() || a.one(we.HIDDEN, (function() {
                        t(n).is(":visible") && n.focus()
                    }))
                }));
                $e._jQueryInterface.call(t(i), s, this)
            })), t.fn[pe] = $e._jQueryInterface, t.fn[pe].Constructor = $e, t.fn[pe].noConflict = function() {
                return t.fn[pe] = ge, $e._jQueryInterface
            };
            var Te = ["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"],
                Ee = /^(?:(?:https?|mailto|ftp|tel|file):|[^&:/?#]*(?:[/?#]|$))/gi,
                Se = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[a-z0-9+/]+=*$/i;

            function Ae(e, t, i) {
                if (0 === e.length) return e;
                if (i && "function" == typeof i) return i(e);
                for (var n = (new window.DOMParser).parseFromString(e, "text/html"), o = Object.keys(t), r = [].slice.call(n.body.querySelectorAll("*")), s = function(e, i) {
                        var n = r[e],
                            s = n.nodeName.toLowerCase();
                        if (-1 === o.indexOf(n.nodeName.toLowerCase())) return n.parentNode.removeChild(n), "continue";
                        var a = [].slice.call(n.attributes),
                            l = [].concat(t["*"] || [], t[s] || []);
                        a.forEach((function(e) {
                            (function(e, t) {
                                var i = e.nodeName.toLowerCase();
                                if (-1 !== t.indexOf(i)) return -1 === Te.indexOf(i) || Boolean(e.nodeValue.match(Ee) || e.nodeValue.match(Se));
                                for (var n = t.filter((function(e) {
                                        return e instanceof RegExp
                                    })), o = 0, r = n.length; o < r; o++)
                                    if (i.match(n[o])) return !0;
                                return !1
                            })(e, l) || n.removeAttribute(e.nodeName)
                        }))
                    }, a = 0, l = r.length; a < l; a++) s(a);
                return n.body.innerHTML
            }
            var De = "tooltip",
                Oe = "bs.tooltip",
                Ie = "." + Oe,
                Le = t.fn[De],
                Pe = "bs-tooltip",
                ze = new RegExp("(^|\\s)" + Pe + "\\S+", "g"),
                Fe = ["sanitize", "whiteList", "sanitizeFn"],
                Me = {
                    animation: "boolean",
                    template: "string",
                    title: "(string|element|function)",
                    trigger: "string",
                    delay: "(number|object)",
                    html: "boolean",
                    selector: "(string|boolean)",
                    placement: "(string|function)",
                    offset: "(number|string|function)",
                    container: "(string|element|boolean)",
                    fallbackPlacement: "(string|array)",
                    boundary: "(string|element)",
                    sanitize: "boolean",
                    sanitizeFn: "(null|function)",
                    whiteList: "object"
                },
                Ne = {
                    AUTO: "auto",
                    TOP: "top",
                    RIGHT: "right",
                    BOTTOM: "bottom",
                    LEFT: "left"
                },
                je = {
                    animation: !0,
                    template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
                    trigger: "hover focus",
                    title: "",
                    delay: 0,
                    html: !1,
                    selector: !1,
                    placement: "top",
                    offset: 0,
                    container: !1,
                    fallbackPlacement: "flip",
                    boundary: "scrollParent",
                    sanitize: !0,
                    sanitizeFn: null,
                    whiteList: {
                        "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
                        a: ["target", "href", "title", "rel"],
                        area: [],
                        b: [],
                        br: [],
                        col: [],
                        code: [],
                        div: [],
                        em: [],
                        hr: [],
                        h1: [],
                        h2: [],
                        h3: [],
                        h4: [],
                        h5: [],
                        h6: [],
                        i: [],
                        img: ["src", "alt", "title", "width", "height"],
                        li: [],
                        ol: [],
                        p: [],
                        pre: [],
                        s: [],
                        small: [],
                        span: [],
                        sub: [],
                        sup: [],
                        strong: [],
                        u: [],
                        ul: []
                    }
                },
                Re = "show",
                He = {
                    HIDE: "hide" + Ie,
                    HIDDEN: "hidden" + Ie,
                    SHOW: "show" + Ie,
                    SHOWN: "shown" + Ie,
                    INSERTED: "inserted" + Ie,
                    CLICK: "click" + Ie,
                    FOCUSIN: "focusin" + Ie,
                    FOCUSOUT: "focusout" + Ie,
                    MOUSEENTER: "mouseenter" + Ie,
                    MOUSELEAVE: "mouseleave" + Ie
                },
                Be = "fade",
                qe = "show",
                We = "hover",
                Ue = "focus",
                Ve = function() {
                    function e(e, t) {
                        if (void 0 === i) throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org/)");
                        this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = e, this.config = this._getConfig(t), this.tip = null, this._setListeners()
                    }
                    var n = e.prototype;
                    return n.enable = function() {
                        this._isEnabled = !0
                    }, n.disable = function() {
                        this._isEnabled = !1
                    }, n.toggleEnabled = function() {
                        this._isEnabled = !this._isEnabled
                    }, n.toggle = function(e) {
                        if (this._isEnabled)
                            if (e) {
                                var i = this.constructor.DATA_KEY,
                                    n = t(e.currentTarget).data(i);
                                n || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(i, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n)
                            } else {
                                if (t(this.getTipElement()).hasClass(qe)) return void this._leave(null, this);
                                this._enter(null, this)
                            }
                    }, n.dispose = function() {
                        clearTimeout(this._timeout), t.removeData(this.element, this.constructor.DATA_KEY), t(this.element).off(this.constructor.EVENT_KEY), t(this.element).closest(".modal").off("hide.bs.modal"), this.tip && t(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, (this._activeTrigger = null) !== this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null
                    }, n.show = function() {
                        var e = this;
                        if ("none" === t(this.element).css("display")) throw new Error("Please use show on visible elements");
                        var n = t.Event(this.constructor.Event.SHOW);
                        if (this.isWithContent() && this._isEnabled) {
                            t(this.element).trigger(n);
                            var o = l.findShadowRoot(this.element),
                                r = t.contains(null !== o ? o : this.element.ownerDocument.documentElement, this.element);
                            if (n.isDefaultPrevented() || !r) return;
                            var s = this.getTipElement(),
                                a = l.getUID(this.constructor.NAME);
                            s.setAttribute("id", a), this.element.setAttribute("aria-describedby", a), this.setContent(), this.config.animation && t(s).addClass(Be);
                            var c = "function" == typeof this.config.placement ? this.config.placement.call(this, s, this.element) : this.config.placement,
                                u = this._getAttachment(c);
                            this.addAttachmentClass(u);
                            var d = this._getContainer();
                            t(s).data(this.constructor.DATA_KEY, this), t.contains(this.element.ownerDocument.documentElement, this.tip) || t(s).appendTo(d), t(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new i(this.element, s, {
                                placement: u,
                                modifiers: {
                                    offset: this._getOffset(),
                                    flip: {
                                        behavior: this.config.fallbackPlacement
                                    },
                                    arrow: {
                                        element: ".arrow"
                                    },
                                    preventOverflow: {
                                        boundariesElement: this.config.boundary
                                    }
                                },
                                onCreate: function(t) {
                                    t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t)
                                },
                                onUpdate: function(t) {
                                    return e._handlePopperPlacementChange(t)
                                }
                            }), t(s).addClass(qe), "ontouchstart" in document.documentElement && t(document.body).children().on("mouseover", null, t.noop);
                            var h = function() {
                                e.config.animation && e._fixTransition();
                                var i = e._hoverState;
                                e._hoverState = null, t(e.element).trigger(e.constructor.Event.SHOWN), "out" === i && e._leave(null, e)
                            };
                            if (t(this.tip).hasClass(Be)) {
                                var p = l.getTransitionDurationFromElement(this.tip);
                                t(this.tip).one(l.TRANSITION_END, h).emulateTransitionEnd(p)
                            } else h()
                        }
                    }, n.hide = function(e) {
                        var i = this,
                            n = this.getTipElement(),
                            o = t.Event(this.constructor.Event.HIDE),
                            r = function() {
                                i._hoverState !== Re && n.parentNode && n.parentNode.removeChild(n), i._cleanTipClass(), i.element.removeAttribute("aria-describedby"), t(i.element).trigger(i.constructor.Event.HIDDEN), null !== i._popper && i._popper.destroy(), e && e()
                            };
                        if (t(this.element).trigger(o), !o.isDefaultPrevented()) {
                            if (t(n).removeClass(qe), "ontouchstart" in document.documentElement && t(document.body).children().off("mouseover", null, t.noop), this._activeTrigger.click = !1, this._activeTrigger[Ue] = !1, this._activeTrigger[We] = !1, t(this.tip).hasClass(Be)) {
                                var s = l.getTransitionDurationFromElement(n);
                                t(n).one(l.TRANSITION_END, r).emulateTransitionEnd(s)
                            } else r();
                            this._hoverState = ""
                        }
                    }, n.update = function() {
                        null !== this._popper && this._popper.scheduleUpdate()
                    }, n.isWithContent = function() {
                        return Boolean(this.getTitle())
                    }, n.addAttachmentClass = function(e) {
                        t(this.getTipElement()).addClass(Pe + "-" + e)
                    }, n.getTipElement = function() {
                        return this.tip = this.tip || t(this.config.template)[0], this.tip
                    }, n.setContent = function() {
                        var e = this.getTipElement();
                        this.setElementContent(t(e.querySelectorAll(".tooltip-inner")), this.getTitle()), t(e).removeClass(Be + " " + qe)
                    }, n.setElementContent = function(e, i) {
                        "object" != s(i) || !i.nodeType && !i.jquery ? this.config.html ? (this.config.sanitize && (i = Ae(i, this.config.whiteList, this.config.sanitizeFn)), e.html(i)) : e.text(i) : this.config.html ? t(i).parent().is(e) || e.empty().append(i) : e.text(t(i).text())
                    }, n.getTitle = function() {
                        var e = this.element.getAttribute("data-original-title");
                        return e || (e = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), e
                    }, n._getOffset = function() {
                        var e = this,
                            t = {};
                        return "function" == typeof this.config.offset ? t.fn = function(t) {
                            return t.offsets = r({}, t.offsets, e.config.offset(t.offsets, e.element) || {}), t
                        } : t.offset = this.config.offset, t
                    }, n._getContainer = function() {
                        return !1 === this.config.container ? document.body : l.isElement(this.config.container) ? t(this.config.container) : t(document).find(this.config.container)
                    }, n._getAttachment = function(e) {
                        return Ne[e.toUpperCase()]
                    }, n._setListeners = function() {
                        var e = this;
                        this.config.trigger.split(" ").forEach((function(i) {
                            if ("click" === i) t(e.element).on(e.constructor.Event.CLICK, e.config.selector, (function(t) {
                                return e.toggle(t)
                            }));
                            else if ("manual" !== i) {
                                var n = i === We ? e.constructor.Event.MOUSEENTER : e.constructor.Event.FOCUSIN,
                                    o = i === We ? e.constructor.Event.MOUSELEAVE : e.constructor.Event.FOCUSOUT;
                                t(e.element).on(n, e.config.selector, (function(t) {
                                    return e._enter(t)
                                })).on(o, e.config.selector, (function(t) {
                                    return e._leave(t)
                                }))
                            }
                        })), t(this.element).closest(".modal").on("hide.bs.modal", (function() {
                            e.element && e.hide()
                        })), this.config.selector ? this.config = r({}, this.config, {
                            trigger: "manual",
                            selector: ""
                        }) : this._fixTitle()
                    }, n._fixTitle = function() {
                        var e = s(this.element.getAttribute("data-original-title"));
                        (this.element.getAttribute("title") || "string" !== e) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
                    }, n._enter = function(e, i) {
                        var n = this.constructor.DATA_KEY;
                        (i = i || t(e.currentTarget).data(n)) || (i = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(n, i)), e && (i._activeTrigger["focusin" === e.type ? Ue : We] = !0), t(i.getTipElement()).hasClass(qe) || i._hoverState === Re ? i._hoverState = Re : (clearTimeout(i._timeout), i._hoverState = Re, i.config.delay && i.config.delay.show ? i._timeout = setTimeout((function() {
                            i._hoverState === Re && i.show()
                        }), i.config.delay.show) : i.show())
                    }, n._leave = function(e, i) {
                        var n = this.constructor.DATA_KEY;
                        (i = i || t(e.currentTarget).data(n)) || (i = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(n, i)), e && (i._activeTrigger["focusout" === e.type ? Ue : We] = !1), i._isWithActiveTrigger() || (clearTimeout(i._timeout), i._hoverState = "out", i.config.delay && i.config.delay.hide ? i._timeout = setTimeout((function() {
                            "out" === i._hoverState && i.hide()
                        }), i.config.delay.hide) : i.hide())
                    }, n._isWithActiveTrigger = function() {
                        for (var e in this._activeTrigger)
                            if (this._activeTrigger[e]) return !0;
                        return !1
                    }, n._getConfig = function(e) {
                        var i = t(this.element).data();
                        return Object.keys(i).forEach((function(e) {
                            -1 !== Fe.indexOf(e) && delete i[e]
                        })), "number" == typeof(e = r({}, this.constructor.Default, i, "object" == s(e) && e ? e : {})).delay && (e.delay = {
                            show: e.delay,
                            hide: e.delay
                        }), "number" == typeof e.title && (e.title = e.title.toString()), "number" == typeof e.content && (e.content = e.content.toString()), l.typeCheckConfig(De, e, this.constructor.DefaultType), e.sanitize && (e.template = Ae(e.template, e.whiteList, e.sanitizeFn)), e
                    }, n._getDelegateConfig = function() {
                        var e = {};
                        if (this.config)
                            for (var t in this.config) this.constructor.Default[t] !== this.config[t] && (e[t] = this.config[t]);
                        return e
                    }, n._cleanTipClass = function() {
                        var e = t(this.getTipElement()),
                            i = e.attr("class").match(ze);
                        null !== i && i.length && e.removeClass(i.join(""))
                    }, n._handlePopperPlacementChange = function(e) {
                        var t = e.instance;
                        this.tip = t.popper, this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(e.placement))
                    }, n._fixTransition = function() {
                        var e = this.getTipElement(),
                            i = this.config.animation;
                        null === e.getAttribute("x-placement") && (t(e).removeClass(Be), this.config.animation = !1, this.hide(), this.show(), this.config.animation = i)
                    }, e._jQueryInterface = function(i) {
                        return this.each((function() {
                            var n = t(this).data(Oe),
                                o = "object" == s(i) && i;
                            if ((n || !/dispose|hide/.test(i)) && (n || (n = new e(this, o), t(this).data(Oe, n)), "string" == typeof i)) {
                                if (void 0 === n[i]) throw new TypeError('No method named "' + i + '"');
                                n[i]()
                            }
                        }))
                    }, o(e, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return je
                        }
                    }, {
                        key: "NAME",
                        get: function() {
                            return De
                        }
                    }, {
                        key: "DATA_KEY",
                        get: function() {
                            return Oe
                        }
                    }, {
                        key: "Event",
                        get: function() {
                            return He
                        }
                    }, {
                        key: "EVENT_KEY",
                        get: function() {
                            return Ie
                        }
                    }, {
                        key: "DefaultType",
                        get: function() {
                            return Me
                        }
                    }]), e
                }();
            t.fn[De] = Ve._jQueryInterface, t.fn[De].Constructor = Ve, t.fn[De].noConflict = function() {
                return t.fn[De] = Le, Ve._jQueryInterface
            };
            var Ke = "popover",
                Ye = "bs.popover",
                Qe = "." + Ye,
                Xe = t.fn[Ke],
                Ge = "bs-popover",
                Ze = new RegExp("(^|\\s)" + Ge + "\\S+", "g"),
                Je = r({}, Ve.Default, {
                    placement: "right",
                    trigger: "click",
                    content: "",
                    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
                }),
                et = r({}, Ve.DefaultType, {
                    content: "(string|element|function)"
                }),
                tt = {
                    HIDE: "hide" + Qe,
                    HIDDEN: "hidden" + Qe,
                    SHOW: "show" + Qe,
                    SHOWN: "shown" + Qe,
                    INSERTED: "inserted" + Qe,
                    CLICK: "click" + Qe,
                    FOCUSIN: "focusin" + Qe,
                    FOCUSOUT: "focusout" + Qe,
                    MOUSEENTER: "mouseenter" + Qe,
                    MOUSELEAVE: "mouseleave" + Qe
                },
                it = function(e) {
                    var i, n;

                    function r() {
                        return e.apply(this, arguments) || this
                    }
                    n = e, (i = r).prototype = Object.create(n.prototype), (i.prototype.constructor = i).__proto__ = n;
                    var a = r.prototype;
                    return a.isWithContent = function() {
                        return this.getTitle() || this._getContent()
                    }, a.addAttachmentClass = function(e) {
                        t(this.getTipElement()).addClass(Ge + "-" + e)
                    }, a.getTipElement = function() {
                        return this.tip = this.tip || t(this.config.template)[0], this.tip
                    }, a.setContent = function() {
                        var e = t(this.getTipElement());
                        this.setElementContent(e.find(".popover-header"), this.getTitle());
                        var i = this._getContent();
                        "function" == typeof i && (i = i.call(this.element)), this.setElementContent(e.find(".popover-body"), i), e.removeClass("fade show")
                    }, a._getContent = function() {
                        return this.element.getAttribute("data-content") || this.config.content
                    }, a._cleanTipClass = function() {
                        var e = t(this.getTipElement()),
                            i = e.attr("class").match(Ze);
                        null !== i && 0 < i.length && e.removeClass(i.join(""))
                    }, r._jQueryInterface = function(e) {
                        return this.each((function() {
                            var i = t(this).data(Ye),
                                n = "object" == s(e) ? e : null;
                            if ((i || !/dispose|hide/.test(e)) && (i || (i = new r(this, n), t(this).data(Ye, i)), "string" == typeof e)) {
                                if (void 0 === i[e]) throw new TypeError('No method named "' + e + '"');
                                i[e]()
                            }
                        }))
                    }, o(r, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return Je
                        }
                    }, {
                        key: "NAME",
                        get: function() {
                            return Ke
                        }
                    }, {
                        key: "DATA_KEY",
                        get: function() {
                            return Ye
                        }
                    }, {
                        key: "Event",
                        get: function() {
                            return tt
                        }
                    }, {
                        key: "EVENT_KEY",
                        get: function() {
                            return Qe
                        }
                    }, {
                        key: "DefaultType",
                        get: function() {
                            return et
                        }
                    }]), r
                }(Ve);
            t.fn[Ke] = it._jQueryInterface, t.fn[Ke].Constructor = it, t.fn[Ke].noConflict = function() {
                return t.fn[Ke] = Xe, it._jQueryInterface
            };
            var nt = "scrollspy",
                ot = "bs.scrollspy",
                rt = "." + ot,
                st = t.fn[nt],
                at = {
                    offset: 10,
                    method: "auto",
                    target: ""
                },
                lt = {
                    offset: "number",
                    method: "string",
                    target: "(string|element)"
                },
                ct = {
                    ACTIVATE: "activate" + rt,
                    SCROLL: "scroll" + rt,
                    LOAD_DATA_API: "load" + rt + ".data-api"
                },
                ut = "active",
                dt = ".nav, .list-group",
                ht = ".nav-link",
                pt = ".list-group-item",
                ft = "position",
                mt = function() {
                    function e(e, i) {
                        var n = this;
                        this._element = e, this._scrollElement = "BODY" === e.tagName ? window : e, this._config = this._getConfig(i), this._selector = this._config.target + " " + ht + "," + this._config.target + " " + pt + "," + this._config.target + " .dropdown-item", this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, t(this._scrollElement).on(ct.SCROLL, (function(e) {
                            return n._process(e)
                        })), this.refresh(), this._process()
                    }
                    var i = e.prototype;
                    return i.refresh = function() {
                        var e = this,
                            i = this._scrollElement === this._scrollElement.window ? "offset" : ft,
                            n = "auto" === this._config.method ? i : this._config.method,
                            o = n === ft ? this._getScrollTop() : 0;
                        this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), [].slice.call(document.querySelectorAll(this._selector)).map((function(e) {
                            var i, r = l.getSelectorFromElement(e);
                            if (r && (i = document.querySelector(r)), i) {
                                var s = i.getBoundingClientRect();
                                if (s.width || s.height) return [t(i)[n]().top + o, r]
                            }
                            return null
                        })).filter((function(e) {
                            return e
                        })).sort((function(e, t) {
                            return e[0] - t[0]
                        })).forEach((function(t) {
                            e._offsets.push(t[0]), e._targets.push(t[1])
                        }))
                    }, i.dispose = function() {
                        t.removeData(this._element, ot), t(this._scrollElement).off(rt), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
                    }, i._getConfig = function(e) {
                        if ("string" != typeof(e = r({}, at, "object" == s(e) && e ? e : {})).target) {
                            var i = t(e.target).attr("id");
                            i || (i = l.getUID(nt), t(e.target).attr("id", i)), e.target = "#" + i
                        }
                        return l.typeCheckConfig(nt, e, lt), e
                    }, i._getScrollTop = function() {
                        return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
                    }, i._getScrollHeight = function() {
                        return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
                    }, i._getOffsetHeight = function() {
                        return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
                    }, i._process = function() {
                        var e = this._getScrollTop() + this._config.offset,
                            t = this._getScrollHeight(),
                            i = this._config.offset + t - this._getOffsetHeight();
                        if (this._scrollHeight !== t && this.refresh(), i <= e) {
                            var n = this._targets[this._targets.length - 1];
                            this._activeTarget !== n && this._activate(n)
                        } else {
                            if (this._activeTarget && e < this._offsets[0] && 0 < this._offsets[0]) return this._activeTarget = null, void this._clear();
                            for (var o = this._offsets.length; o--;) this._activeTarget !== this._targets[o] && e >= this._offsets[o] && (void 0 === this._offsets[o + 1] || e < this._offsets[o + 1]) && this._activate(this._targets[o])
                        }
                    }, i._activate = function(e) {
                        this._activeTarget = e, this._clear();
                        var i = this._selector.split(",").map((function(t) {
                                return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]'
                            })),
                            n = t([].slice.call(document.querySelectorAll(i.join(","))));
                        n.hasClass("dropdown-item") ? (n.closest(".dropdown").find(".dropdown-toggle").addClass(ut), n.addClass(ut)) : (n.addClass(ut), n.parents(dt).prev(ht + ", " + pt).addClass(ut), n.parents(dt).prev(".nav-item").children(ht).addClass(ut)), t(this._scrollElement).trigger(ct.ACTIVATE, {
                            relatedTarget: e
                        })
                    }, i._clear = function() {
                        [].slice.call(document.querySelectorAll(this._selector)).filter((function(e) {
                            return e.classList.contains(ut)
                        })).forEach((function(e) {
                            return e.classList.remove(ut)
                        }))
                    }, e._jQueryInterface = function(i) {
                        return this.each((function() {
                            var n = t(this).data(ot);
                            if (n || (n = new e(this, "object" == s(i) && i), t(this).data(ot, n)), "string" == typeof i) {
                                if (void 0 === n[i]) throw new TypeError('No method named "' + i + '"');
                                n[i]()
                            }
                        }))
                    }, o(e, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return at
                        }
                    }]), e
                }();
            t(window).on(ct.LOAD_DATA_API, (function() {
                for (var e = [].slice.call(document.querySelectorAll('[data-spy="scroll"]')), i = e.length; i--;) {
                    var n = t(e[i]);
                    mt._jQueryInterface.call(n, n.data())
                }
            })), t.fn[nt] = mt._jQueryInterface, t.fn[nt].Constructor = mt, t.fn[nt].noConflict = function() {
                return t.fn[nt] = st, mt._jQueryInterface
            };
            var gt = "bs.tab",
                vt = "." + gt,
                yt = t.fn.tab,
                wt = {
                    HIDE: "hide" + vt,
                    HIDDEN: "hidden" + vt,
                    SHOW: "show" + vt,
                    SHOWN: "shown" + vt,
                    CLICK_DATA_API: "click" + vt + ".data-api"
                },
                bt = "active",
                _t = ".active",
                xt = "> li > .active",
                Ct = function() {
                    function e(e) {
                        this._element = e
                    }
                    var i = e.prototype;
                    return i.show = function() {
                        var e = this;
                        if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && t(this._element).hasClass(bt) || t(this._element).hasClass("disabled"))) {
                            var i, n, o = t(this._element).closest(".nav, .list-group")[0],
                                r = l.getSelectorFromElement(this._element);
                            if (o) {
                                var s = "UL" === o.nodeName || "OL" === o.nodeName ? xt : _t;
                                n = (n = t.makeArray(t(o).find(s)))[n.length - 1]
                            }
                            var a = t.Event(wt.HIDE, {
                                    relatedTarget: this._element
                                }),
                                c = t.Event(wt.SHOW, {
                                    relatedTarget: n
                                });
                            if (n && t(n).trigger(a), t(this._element).trigger(c), !c.isDefaultPrevented() && !a.isDefaultPrevented()) {
                                r && (i = document.querySelector(r)), this._activate(this._element, o);
                                var u = function() {
                                    var i = t.Event(wt.HIDDEN, {
                                            relatedTarget: e._element
                                        }),
                                        o = t.Event(wt.SHOWN, {
                                            relatedTarget: n
                                        });
                                    t(n).trigger(i), t(e._element).trigger(o)
                                };
                                i ? this._activate(i, i.parentNode, u) : u()
                            }
                        }
                    }, i.dispose = function() {
                        t.removeData(this._element, gt), this._element = null
                    }, i._activate = function(e, i, n) {
                        var o = this,
                            r = (!i || "UL" !== i.nodeName && "OL" !== i.nodeName ? t(i).children(_t) : t(i).find(xt))[0],
                            s = n && r && t(r).hasClass("fade"),
                            a = function() {
                                return o._transitionComplete(e, r, n)
                            };
                        if (r && s) {
                            var c = l.getTransitionDurationFromElement(r);
                            t(r).removeClass("show").one(l.TRANSITION_END, a).emulateTransitionEnd(c)
                        } else a()
                    }, i._transitionComplete = function(e, i, n) {
                        if (i) {
                            t(i).removeClass(bt);
                            var o = t(i.parentNode).find("> .dropdown-menu .active")[0];
                            o && t(o).removeClass(bt), "tab" === i.getAttribute("role") && i.setAttribute("aria-selected", !1)
                        }
                        if (t(e).addClass(bt), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !0), l.reflow(e), e.classList.contains("fade") && e.classList.add("show"), e.parentNode && t(e.parentNode).hasClass("dropdown-menu")) {
                            var r = t(e).closest(".dropdown")[0];
                            if (r) {
                                var s = [].slice.call(r.querySelectorAll(".dropdown-toggle"));
                                t(s).addClass(bt)
                            }
                            e.setAttribute("aria-expanded", !0)
                        }
                        n && n()
                    }, e._jQueryInterface = function(i) {
                        return this.each((function() {
                            var n = t(this),
                                o = n.data(gt);
                            if (o || (o = new e(this), n.data(gt, o)), "string" == typeof i) {
                                if (void 0 === o[i]) throw new TypeError('No method named "' + i + '"');
                                o[i]()
                            }
                        }))
                    }, o(e, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }]), e
                }();
            t(document).on(wt.CLICK_DATA_API, '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', (function(e) {
                e.preventDefault(), Ct._jQueryInterface.call(t(this), "show")
            })), t.fn.tab = Ct._jQueryInterface, t.fn.tab.Constructor = Ct, t.fn.tab.noConflict = function() {
                return t.fn.tab = yt, Ct._jQueryInterface
            };
            var kt = "toast",
                $t = "bs.toast",
                Tt = "." + $t,
                Et = t.fn[kt],
                St = {
                    CLICK_DISMISS: "click.dismiss" + Tt,
                    HIDE: "hide" + Tt,
                    HIDDEN: "hidden" + Tt,
                    SHOW: "show" + Tt,
                    SHOWN: "shown" + Tt
                },
                At = "show",
                Dt = "showing",
                Ot = {
                    animation: "boolean",
                    autohide: "boolean",
                    delay: "number"
                },
                It = {
                    animation: !0,
                    autohide: !0,
                    delay: 500
                },
                Lt = function() {
                    function e(e, t) {
                        this._element = e, this._config = this._getConfig(t), this._timeout = null, this._setListeners()
                    }
                    var i = e.prototype;
                    return i.show = function() {
                        var e = this;
                        t(this._element).trigger(St.SHOW), this._config.animation && this._element.classList.add("fade");
                        var i = function() {
                            e._element.classList.remove(Dt), e._element.classList.add(At), t(e._element).trigger(St.SHOWN), e._config.autohide && e.hide()
                        };
                        if (this._element.classList.remove("hide"), this._element.classList.add(Dt), this._config.animation) {
                            var n = l.getTransitionDurationFromElement(this._element);
                            t(this._element).one(l.TRANSITION_END, i).emulateTransitionEnd(n)
                        } else i()
                    }, i.hide = function(e) {
                        var i = this;
                        this._element.classList.contains(At) && (t(this._element).trigger(St.HIDE), e ? this._close() : this._timeout = setTimeout((function() {
                            i._close()
                        }), this._config.delay))
                    }, i.dispose = function() {
                        clearTimeout(this._timeout), this._timeout = null, this._element.classList.contains(At) && this._element.classList.remove(At), t(this._element).off(St.CLICK_DISMISS), t.removeData(this._element, $t), this._element = null, this._config = null
                    }, i._getConfig = function(e) {
                        return e = r({}, It, t(this._element).data(), "object" == s(e) && e ? e : {}), l.typeCheckConfig(kt, e, this.constructor.DefaultType), e
                    }, i._setListeners = function() {
                        var e = this;
                        t(this._element).on(St.CLICK_DISMISS, '[data-dismiss="toast"]', (function() {
                            return e.hide(!0)
                        }))
                    }, i._close = function() {
                        var e = this,
                            i = function() {
                                e._element.classList.add("hide"), t(e._element).trigger(St.HIDDEN)
                            };
                        if (this._element.classList.remove(At), this._config.animation) {
                            var n = l.getTransitionDurationFromElement(this._element);
                            t(this._element).one(l.TRANSITION_END, i).emulateTransitionEnd(n)
                        } else i()
                    }, e._jQueryInterface = function(i) {
                        return this.each((function() {
                            var n = t(this),
                                o = n.data($t);
                            if (o || (o = new e(this, "object" == s(i) && i), n.data($t, o)), "string" == typeof i) {
                                if (void 0 === o[i]) throw new TypeError('No method named "' + i + '"');
                                o[i](this)
                            }
                        }))
                    }, o(e, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.3.1"
                        }
                    }, {
                        key: "DefaultType",
                        get: function() {
                            return Ot
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return It
                        }
                    }]), e
                }();
            t.fn[kt] = Lt._jQueryInterface, t.fn[kt].Constructor = Lt, t.fn[kt].noConflict = function() {
                    return t.fn[kt] = Et, Lt._jQueryInterface
                },
                function() {
                    if (void 0 === t) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
                    var e = t.fn.jquery.split(" ")[0].split(".");
                    if (e[0] < 2 && e[1] < 9 || 1 === e[0] && 9 === e[1] && e[2] < 1 || 4 <= e[0]) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
                }(), e.Util = l, e.Alert = f, e.Button = k, e.Carousel = N, e.Collapse = G, e.Dropdown = he, e.Modal = $e, e.Popover = it, e.Scrollspy = mt, e.Tab = Ct, e.Toast = Lt, e.Tooltip = Ve, Object.defineProperty(e, "__esModule", {
                    value: !0
                })
        }))
    },
    KBC4: function(e, t, i) {
        var n, o;

        function r(e) {
            return (r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            } : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            })(e)
        }! function(s) {
            !jQuery && i("PDX0") ? (n = [i("EVdn")], void 0 === (o = function(e) {
                return s(e, document, window, navigator)
            }.apply(t, n)) || (e.exports = o)) : jQuery || "object" != r(t) ? s(jQuery, document, window, navigator) : s(i("EVdn"), document, window, navigator)
        }((function(e, t, i, n, o) {
            "use strict";
            var r, s, a = 0,
                l = (s = /msie\s\d+/i, 0 < (r = n.userAgent).search(s) && s.exec(r).toString().split(" ")[1] < 9 && (e("html").addClass("lt-ie9"), !0));
            Function.prototype.bind || (Function.prototype.bind = function(e) {
                var t = this,
                    i = [].slice;
                if ("function" != typeof t) throw new TypeError;
                var n = i.call(arguments, 1),
                    o = function o() {
                        if (this instanceof o) {
                            var r = function() {};
                            r.prototype = t.prototype;
                            var s = new r,
                                a = t.apply(s, n.concat(i.call(arguments)));
                            return Object(a) === a ? a : s
                        }
                        return t.apply(e, n.concat(i.call(arguments)))
                    };
                return o
            }), Array.prototype.indexOf || (Array.prototype.indexOf = function(e, t) {
                var i;
                if (null == this) throw new TypeError('"this" is null or not defined');
                var n = Object(this),
                    o = n.length >>> 0;
                if (0 === o) return -1;
                var r = +t || 0;
                if (Math.abs(r) === 1 / 0 && (r = 0), o <= r) return -1;
                for (i = Math.max(0 <= r ? r : o - Math.abs(r), 0); i < o;) {
                    if (i in n && n[i] === e) return i;
                    i++
                }
                return -1
            });
            var c = function(n, r, s) {
                this.VERSION = "2.3.0", this.input = n, this.plugin_count = s, this.current_plugin = 0, this.calc_count = 0, this.update_tm = 0, this.old_from = 0, this.old_to = 0, this.old_min_interval = null, this.raf_id = null, this.dragging = !1, this.force_redraw = !1, this.no_diapason = !1, this.has_tab_index = !0, this.is_key = !1, this.is_update = !1, this.is_start = !0, this.is_finish = !1, this.is_active = !1, this.is_resize = !1, this.is_click = !1, r = r || {}, this.$cache = {
                    win: e(i),
                    body: e(t.body),
                    input: e(n),
                    cont: null,
                    rs: null,
                    min: null,
                    max: null,
                    from: null,
                    to: null,
                    single: null,
                    bar: null,
                    line: null,
                    s_single: null,
                    s_from: null,
                    s_to: null,
                    shad_single: null,
                    shad_from: null,
                    shad_to: null,
                    edge: null,
                    grid: null,
                    grid_labels: []
                }, this.coords = {
                    x_gap: 0,
                    x_pointer: 0,
                    w_rs: 0,
                    w_rs_old: 0,
                    w_handle: 0,
                    p_gap: 0,
                    p_gap_left: 0,
                    p_gap_right: 0,
                    p_step: 0,
                    p_pointer: 0,
                    p_handle: 0,
                    p_single_fake: 0,
                    p_single_real: 0,
                    p_from_fake: 0,
                    p_from_real: 0,
                    p_to_fake: 0,
                    p_to_real: 0,
                    p_bar_x: 0,
                    p_bar_w: 0,
                    grid_gap: 0,
                    big_num: 0,
                    big: [],
                    big_w: [],
                    big_p: [],
                    big_x: []
                }, this.labels = {
                    w_min: 0,
                    w_max: 0,
                    w_from: 0,
                    w_to: 0,
                    w_single: 0,
                    p_min: 0,
                    p_max: 0,
                    p_from_fake: 0,
                    p_from_left: 0,
                    p_to_fake: 0,
                    p_to_left: 0,
                    p_single_fake: 0,
                    p_single_left: 0
                };
                var a, l, c, u = this.$cache.input,
                    d = u.prop("value");
                for (c in a = {
                        skin: "flat",
                        type: "single",
                        min: 10,
                        max: 100,
                        from: null,
                        to: null,
                        step: 1,
                        min_interval: 0,
                        max_interval: 0,
                        drag_interval: !1,
                        values: [],
                        p_values: [],
                        from_fixed: !1,
                        from_min: null,
                        from_max: null,
                        from_shadow: !1,
                        to_fixed: !1,
                        to_min: null,
                        to_max: null,
                        to_shadow: !1,
                        prettify_enabled: !0,
                        prettify_separator: " ",
                        prettify: null,
                        force_edges: !1,
                        keyboard: !0,
                        grid: !1,
                        grid_margin: !0,
                        grid_num: 4,
                        grid_snap: !1,
                        hide_min_max: !1,
                        hide_from_to: !1,
                        prefix: "",
                        postfix: "",
                        max_postfix: "",
                        decorate_both: !0,
                        values_separator: " — ",
                        input_values_separator: ";",
                        disable: !1,
                        block: !1,
                        extra_classes: "",
                        scope: null,
                        onStart: null,
                        onChange: null,
                        onFinish: null,
                        onUpdate: null
                    }, "INPUT" !== u[0].nodeName && console && console.warn && console.warn("Base element should be <input>!", u[0]), (l = {
                        skin: u.data("skin"),
                        type: u.data("type"),
                        min: u.data("min"),
                        max: u.data("max"),
                        from: u.data("from"),
                        to: u.data("to"),
                        step: u.data("step"),
                        min_interval: u.data("minInterval"),
                        max_interval: u.data("maxInterval"),
                        drag_interval: u.data("dragInterval"),
                        values: u.data("values"),
                        from_fixed: u.data("fromFixed"),
                        from_min: u.data("fromMin"),
                        from_max: u.data("fromMax"),
                        from_shadow: u.data("fromShadow"),
                        to_fixed: u.data("toFixed"),
                        to_min: u.data("toMin"),
                        to_max: u.data("toMax"),
                        to_shadow: u.data("toShadow"),
                        prettify_enabled: u.data("prettifyEnabled"),
                        prettify_separator: u.data("prettifySeparator"),
                        force_edges: u.data("forceEdges"),
                        keyboard: u.data("keyboard"),
                        grid: u.data("grid"),
                        grid_margin: u.data("gridMargin"),
                        grid_num: u.data("gridNum"),
                        grid_snap: u.data("gridSnap"),
                        hide_min_max: u.data("hideMinMax"),
                        hide_from_to: u.data("hideFromTo"),
                        prefix: u.data("prefix"),
                        postfix: u.data("postfix"),
                        max_postfix: u.data("maxPostfix"),
                        decorate_both: u.data("decorateBoth"),
                        values_separator: u.data("valuesSeparator"),
                        input_values_separator: u.data("inputValuesSeparator"),
                        disable: u.data("disable"),
                        block: u.data("block"),
                        extra_classes: u.data("extraClasses")
                    }).values = l.values && l.values.split(","), l) l.hasOwnProperty(c) && (l[c] !== o && "" !== l[c] || delete l[c]);
                d !== o && "" !== d && ((d = d.split(l.input_values_separator || r.input_values_separator || ";"))[0] && d[0] == +d[0] && (d[0] = +d[0]), d[1] && d[1] == +d[1] && (d[1] = +d[1]), r && r.values && r.values.length ? (a.from = d[0] && r.values.indexOf(d[0]), a.to = d[1] && r.values.indexOf(d[1])) : (a.from = d[0] && +d[0], a.to = d[1] && +d[1])), e.extend(a, r), e.extend(a, l), this.options = a, this.update_check = {}, this.validate(), this.result = {
                    input: this.$cache.input,
                    slider: null,
                    min: this.options.min,
                    max: this.options.max,
                    from: this.options.from,
                    from_percent: 0,
                    from_value: null,
                    to: this.options.to,
                    to_percent: 0,
                    to_value: null
                }, this.init()
            };
            c.prototype = {
                    init: function(e) {
                        this.no_diapason = !1, this.coords.p_step = this.convertToPercent(this.options.step, !0), this.target = "base", this.toggleInput(), this.append(), this.setMinMax(), e ? (this.force_redraw = !0, this.calc(!0), this.callOnUpdate()) : (this.force_redraw = !0, this.calc(!0), this.callOnStart()), this.updateScene()
                    },
                    append: function() {
                        var e = '<span class="irs irs--' + this.options.skin + " js-irs-" + this.plugin_count + " " + this.options.extra_classes + '"></span>';
                        this.$cache.input.before(e), this.$cache.input.prop("readonly", !0), this.$cache.cont = this.$cache.input.prev(), this.result.slider = this.$cache.cont, this.$cache.cont.html('<span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min">0</span><span class="irs-max">1</span><span class="irs-from">0</span><span class="irs-to">0</span><span class="irs-single">0</span></span><span class="irs-grid"></span>'), this.$cache.rs = this.$cache.cont.find(".irs"), this.$cache.min = this.$cache.cont.find(".irs-min"), this.$cache.max = this.$cache.cont.find(".irs-max"), this.$cache.from = this.$cache.cont.find(".irs-from"), this.$cache.to = this.$cache.cont.find(".irs-to"), this.$cache.single = this.$cache.cont.find(".irs-single"), this.$cache.line = this.$cache.cont.find(".irs-line"), this.$cache.grid = this.$cache.cont.find(".irs-grid"), "single" === this.options.type ? (this.$cache.cont.append('<span class="irs-bar irs-bar--single"></span><span class="irs-shadow shadow-single"></span><span class="irs-handle single"><i></i><i></i><i></i></span>'), this.$cache.bar = this.$cache.cont.find(".irs-bar"), this.$cache.edge = this.$cache.cont.find(".irs-bar-edge"), this.$cache.s_single = this.$cache.cont.find(".single"), this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.shad_single = this.$cache.cont.find(".shadow-single")) : (this.$cache.cont.append('<span class="irs-bar"></span><span class="irs-shadow shadow-from"></span><span class="irs-shadow shadow-to"></span><span class="irs-handle from"><i></i><i></i><i></i></span><span class="irs-handle to"><i></i><i></i><i></i></span>'), this.$cache.bar = this.$cache.cont.find(".irs-bar"), this.$cache.s_from = this.$cache.cont.find(".from"), this.$cache.s_to = this.$cache.cont.find(".to"), this.$cache.shad_from = this.$cache.cont.find(".shadow-from"), this.$cache.shad_to = this.$cache.cont.find(".shadow-to"), this.setTopHandler()), this.options.hide_from_to && (this.$cache.from[0].style.display = "none", this.$cache.to[0].style.display = "none", this.$cache.single[0].style.display = "none"), this.appendGrid(), this.options.disable ? (this.appendDisableMask(), this.$cache.input[0].disabled = !0) : (this.$cache.input[0].disabled = !1, this.removeDisableMask(), this.bindEvents()), this.options.disable || (this.options.block ? this.appendDisableMask() : this.removeDisableMask()), this.options.drag_interval && (this.$cache.bar[0].style.cursor = "ew-resize")
                    },
                    setTopHandler: function() {
                        var e = this.options.min,
                            t = this.options.max,
                            i = this.options.from,
                            n = this.options.to;
                        e < i && n === t ? this.$cache.s_from.addClass("type_last") : n < t && this.$cache.s_to.addClass("type_last")
                    },
                    changeLevel: function(e) {
                        switch (e) {
                            case "single":
                                this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_single_fake), this.$cache.s_single.addClass("state_hover");
                                break;
                            case "from":
                                this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_from_fake), this.$cache.s_from.addClass("state_hover"), this.$cache.s_from.addClass("type_last"), this.$cache.s_to.removeClass("type_last");
                                break;
                            case "to":
                                this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_to_fake), this.$cache.s_to.addClass("state_hover"), this.$cache.s_to.addClass("type_last"), this.$cache.s_from.removeClass("type_last");
                                break;
                            case "both":
                                this.coords.p_gap_left = this.toFixed(this.coords.p_pointer - this.coords.p_from_fake), this.coords.p_gap_right = this.toFixed(this.coords.p_to_fake - this.coords.p_pointer), this.$cache.s_to.removeClass("type_last"), this.$cache.s_from.removeClass("type_last")
                        }
                    },
                    appendDisableMask: function() {
                        this.$cache.cont.append('<span class="irs-disable-mask"></span>'), this.$cache.cont.addClass("irs-disabled")
                    },
                    removeDisableMask: function() {
                        this.$cache.cont.remove(".irs-disable-mask"), this.$cache.cont.removeClass("irs-disabled")
                    },
                    remove: function() {
                        this.$cache.cont.remove(), this.$cache.cont = null, this.$cache.line.off("keydown.irs_" + this.plugin_count), this.$cache.body.off("touchmove.irs_" + this.plugin_count), this.$cache.body.off("mousemove.irs_" + this.plugin_count), this.$cache.win.off("touchend.irs_" + this.plugin_count), this.$cache.win.off("mouseup.irs_" + this.plugin_count), l && (this.$cache.body.off("mouseup.irs_" + this.plugin_count), this.$cache.body.off("mouseleave.irs_" + this.plugin_count)), this.$cache.grid_labels = [], this.coords.big = [], this.coords.big_w = [], this.coords.big_p = [], this.coords.big_x = [], cancelAnimationFrame(this.raf_id)
                    },
                    bindEvents: function() {
                        this.no_diapason || (this.$cache.body.on("touchmove.irs_" + this.plugin_count, this.pointerMove.bind(this)), this.$cache.body.on("mousemove.irs_" + this.plugin_count, this.pointerMove.bind(this)), this.$cache.win.on("touchend.irs_" + this.plugin_count, this.pointerUp.bind(this)), this.$cache.win.on("mouseup.irs_" + this.plugin_count, this.pointerUp.bind(this)), this.$cache.line.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.line.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.line.on("focus.irs_" + this.plugin_count, this.pointerFocus.bind(this)), this.options.drag_interval && "double" === this.options.type ? (this.$cache.bar.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "both")), this.$cache.bar.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "both"))) : (this.$cache.bar.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.bar.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"))), "single" === this.options.type ? (this.$cache.single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.s_single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.shad_single.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.s_single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.edge.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_single.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"))) : (this.$cache.single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, null)), this.$cache.single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, null)), this.$cache.from.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.s_from.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.to.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.s_to.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.shad_from.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_to.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.from.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.s_from.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.to.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.s_to.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.shad_from.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_to.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"))), this.options.keyboard && this.$cache.line.on("keydown.irs_" + this.plugin_count, this.key.bind(this, "keyboard")), l && (this.$cache.body.on("mouseup.irs_" + this.plugin_count, this.pointerUp.bind(this)), this.$cache.body.on("mouseleave.irs_" + this.plugin_count, this.pointerUp.bind(this))))
                    },
                    pointerFocus: function(e) {
                        var t, i;
                        this.target || (t = (i = "single" === this.options.type ? this.$cache.single : this.$cache.from).offset().left, t += i.width() / 2 - 1, this.pointerClick("single", {
                            preventDefault: function() {},
                            pageX: t
                        }))
                    },
                    pointerMove: function(e) {
                        if (this.dragging) {
                            var t = e.pageX || e.originalEvent.touches && e.originalEvent.touches[0].pageX;
                            this.coords.x_pointer = t - this.coords.x_gap, this.calc()
                        }
                    },
                    pointerUp: function(t) {
                        this.current_plugin === this.plugin_count && this.is_active && (this.is_active = !1, this.$cache.cont.find(".state_hover").removeClass("state_hover"), this.force_redraw = !0, l && e("*").prop("unselectable", !1), this.updateScene(), this.restoreOriginalMinInterval(), (e.contains(this.$cache.cont[0], t.target) || this.dragging) && this.callOnFinish(), this.dragging = !1)
                    },
                    pointerDown: function(t, i) {
                        i.preventDefault();
                        var n = i.pageX || i.originalEvent.touches && i.originalEvent.touches[0].pageX;
                        2 !== i.button && ("both" === t && this.setTempMinInterval(), t || (t = this.target || "from"), this.current_plugin = this.plugin_count, this.target = t, this.is_active = !0, this.dragging = !0, this.coords.x_gap = this.$cache.rs.offset().left, this.coords.x_pointer = n - this.coords.x_gap, this.calcPointerPercent(), this.changeLevel(t), l && e("*").prop("unselectable", !0), this.$cache.line.trigger("focus"), this.updateScene())
                    },
                    pointerClick: function(e, t) {
                        t.preventDefault();
                        var i = t.pageX || t.originalEvent.touches && t.originalEvent.touches[0].pageX;
                        2 !== t.button && (this.current_plugin = this.plugin_count, this.target = e, this.is_click = !0, this.coords.x_gap = this.$cache.rs.offset().left, this.coords.x_pointer = +(i - this.coords.x_gap).toFixed(), this.force_redraw = !0, this.calc(), this.$cache.line.trigger("focus"))
                    },
                    key: function(e, t) {
                        if (!(this.current_plugin !== this.plugin_count || t.altKey || t.ctrlKey || t.shiftKey || t.metaKey)) {
                            switch (t.which) {
                                case 83:
                                case 65:
                                case 40:
                                case 37:
                                    t.preventDefault(), this.moveByKey(!1);
                                    break;
                                case 87:
                                case 68:
                                case 38:
                                case 39:
                                    t.preventDefault(), this.moveByKey(!0)
                            }
                            return !0
                        }
                    },
                    moveByKey: function(e) {
                        var t = this.coords.p_pointer,
                            i = (this.options.max - this.options.min) / 100;
                        i = this.options.step / i, e ? t += i : t -= i, this.coords.x_pointer = this.toFixed(this.coords.w_rs / 100 * t), this.is_key = !0, this.calc()
                    },
                    setMinMax: function() {
                        if (this.options) {
                            if (this.options.hide_min_max) return this.$cache.min[0].style.display = "none", void(this.$cache.max[0].style.display = "none");
                            if (this.options.values.length) this.$cache.min.html(this.decorate(this.options.p_values[this.options.min])), this.$cache.max.html(this.decorate(this.options.p_values[this.options.max]));
                            else {
                                var e = this._prettify(this.options.min),
                                    t = this._prettify(this.options.max);
                                this.result.min_pretty = e, this.result.max_pretty = t, this.$cache.min.html(this.decorate(e, this.options.min)), this.$cache.max.html(this.decorate(t, this.options.max))
                            }
                            this.labels.w_min = this.$cache.min.outerWidth(!1), this.labels.w_max = this.$cache.max.outerWidth(!1)
                        }
                    },
                    setTempMinInterval: function() {
                        var e = this.result.to - this.result.from;
                        null === this.old_min_interval && (this.old_min_interval = this.options.min_interval), this.options.min_interval = e
                    },
                    restoreOriginalMinInterval: function() {
                        null !== this.old_min_interval && (this.options.min_interval = this.old_min_interval, this.old_min_interval = null)
                    },
                    calc: function(e) {
                        if (this.options && (this.calc_count++, (10 === this.calc_count || e) && (this.calc_count = 0, this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.calcHandlePercent()), this.coords.w_rs)) {
                            this.calcPointerPercent();
                            var t = this.getHandleX();
                            switch ("both" === this.target && (this.coords.p_gap = 0, t = this.getHandleX()), "click" === this.target && (this.coords.p_gap = this.coords.p_handle / 2, t = this.getHandleX(), this.options.drag_interval ? this.target = "both_one" : this.target = this.chooseHandle(t)), this.target) {
                                case "base":
                                    var i = (this.options.max - this.options.min) / 100,
                                        n = (this.result.from - this.options.min) / i,
                                        o = (this.result.to - this.options.min) / i;
                                    this.coords.p_single_real = this.toFixed(n), this.coords.p_from_real = this.toFixed(n), this.coords.p_to_real = this.toFixed(o), this.coords.p_single_real = this.checkDiapason(this.coords.p_single_real, this.options.from_min, this.options.from_max), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_single_fake = this.convertToFakePercent(this.coords.p_single_real), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real), this.target = null;
                                    break;
                                case "single":
                                    if (this.options.from_fixed) break;
                                    this.coords.p_single_real = this.convertToRealPercent(t), this.coords.p_single_real = this.calcWithStep(this.coords.p_single_real), this.coords.p_single_real = this.checkDiapason(this.coords.p_single_real, this.options.from_min, this.options.from_max), this.coords.p_single_fake = this.convertToFakePercent(this.coords.p_single_real);
                                    break;
                                case "from":
                                    if (this.options.from_fixed) break;
                                    this.coords.p_from_real = this.convertToRealPercent(t), this.coords.p_from_real = this.calcWithStep(this.coords.p_from_real), this.coords.p_from_real > this.coords.p_to_real && (this.coords.p_from_real = this.coords.p_to_real), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_from_real = this.checkMinInterval(this.coords.p_from_real, this.coords.p_to_real, "from"), this.coords.p_from_real = this.checkMaxInterval(this.coords.p_from_real, this.coords.p_to_real, "from"), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real);
                                    break;
                                case "to":
                                    if (this.options.to_fixed) break;
                                    this.coords.p_to_real = this.convertToRealPercent(t), this.coords.p_to_real = this.calcWithStep(this.coords.p_to_real), this.coords.p_to_real < this.coords.p_from_real && (this.coords.p_to_real = this.coords.p_from_real), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_to_real = this.checkMinInterval(this.coords.p_to_real, this.coords.p_from_real, "to"), this.coords.p_to_real = this.checkMaxInterval(this.coords.p_to_real, this.coords.p_from_real, "to"), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real);
                                    break;
                                case "both":
                                    if (this.options.from_fixed || this.options.to_fixed) break;
                                    t = this.toFixed(t + .001 * this.coords.p_handle), this.coords.p_from_real = this.convertToRealPercent(t) - this.coords.p_gap_left, this.coords.p_from_real = this.calcWithStep(this.coords.p_from_real), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_from_real = this.checkMinInterval(this.coords.p_from_real, this.coords.p_to_real, "from"), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real), this.coords.p_to_real = this.convertToRealPercent(t) + this.coords.p_gap_right, this.coords.p_to_real = this.calcWithStep(this.coords.p_to_real), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_to_real = this.checkMinInterval(this.coords.p_to_real, this.coords.p_from_real, "to"), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real);
                                    break;
                                case "both_one":
                                    if (this.options.from_fixed || this.options.to_fixed) break;
                                    var r = this.convertToRealPercent(t),
                                        s = this.result.from_percent,
                                        a = this.result.to_percent - s,
                                        l = a / 2,
                                        c = r - l,
                                        u = r + l;
                                    c < 0 && (u = (c = 0) + a), 100 < u && (c = (u = 100) - a), this.coords.p_from_real = this.calcWithStep(c), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real), this.coords.p_to_real = this.calcWithStep(u), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real)
                            }
                            "single" === this.options.type ? (this.coords.p_bar_x = this.coords.p_handle / 2, this.coords.p_bar_w = this.coords.p_single_fake, this.result.from_percent = this.coords.p_single_real, this.result.from = this.convertToValue(this.coords.p_single_real), this.result.from_pretty = this._prettify(this.result.from), this.options.values.length && (this.result.from_value = this.options.values[this.result.from])) : (this.coords.p_bar_x = this.toFixed(this.coords.p_from_fake + this.coords.p_handle / 2), this.coords.p_bar_w = this.toFixed(this.coords.p_to_fake - this.coords.p_from_fake), this.result.from_percent = this.coords.p_from_real, this.result.from = this.convertToValue(this.coords.p_from_real), this.result.from_pretty = this._prettify(this.result.from), this.result.to_percent = this.coords.p_to_real, this.result.to = this.convertToValue(this.coords.p_to_real), this.result.to_pretty = this._prettify(this.result.to), this.options.values.length && (this.result.from_value = this.options.values[this.result.from], this.result.to_value = this.options.values[this.result.to])), this.calcMinMax(), this.calcLabels()
                        }
                    },
                    calcPointerPercent: function() {
                        this.coords.w_rs ? (this.coords.x_pointer < 0 || isNaN(this.coords.x_pointer) ? this.coords.x_pointer = 0 : this.coords.x_pointer > this.coords.w_rs && (this.coords.x_pointer = this.coords.w_rs), this.coords.p_pointer = this.toFixed(this.coords.x_pointer / this.coords.w_rs * 100)) : this.coords.p_pointer = 0
                    },
                    convertToRealPercent: function(e) {
                        return e / (100 - this.coords.p_handle) * 100
                    },
                    convertToFakePercent: function(e) {
                        return e / 100 * (100 - this.coords.p_handle)
                    },
                    getHandleX: function() {
                        var e = 100 - this.coords.p_handle,
                            t = this.toFixed(this.coords.p_pointer - this.coords.p_gap);
                        return t < 0 ? t = 0 : e < t && (t = e), t
                    },
                    calcHandlePercent: function() {
                        "single" === this.options.type ? this.coords.w_handle = this.$cache.s_single.outerWidth(!1) : this.coords.w_handle = this.$cache.s_from.outerWidth(!1), this.coords.p_handle = this.toFixed(this.coords.w_handle / this.coords.w_rs * 100)
                    },
                    chooseHandle: function(e) {
                        return "single" === this.options.type ? "single" : this.coords.p_from_real + (this.coords.p_to_real - this.coords.p_from_real) / 2 <= e ? this.options.to_fixed ? "from" : "to" : this.options.from_fixed ? "to" : "from"
                    },
                    calcMinMax: function() {
                        this.coords.w_rs && (this.labels.p_min = this.labels.w_min / this.coords.w_rs * 100, this.labels.p_max = this.labels.w_max / this.coords.w_rs * 100)
                    },
                    calcLabels: function() {
                        this.coords.w_rs && !this.options.hide_from_to && ("single" === this.options.type ? (this.labels.w_single = this.$cache.single.outerWidth(!1), this.labels.p_single_fake = this.labels.w_single / this.coords.w_rs * 100, this.labels.p_single_left = this.coords.p_single_fake + this.coords.p_handle / 2 - this.labels.p_single_fake / 2) : (this.labels.w_from = this.$cache.from.outerWidth(!1), this.labels.p_from_fake = this.labels.w_from / this.coords.w_rs * 100, this.labels.p_from_left = this.coords.p_from_fake + this.coords.p_handle / 2 - this.labels.p_from_fake / 2, this.labels.p_from_left = this.toFixed(this.labels.p_from_left), this.labels.p_from_left = this.checkEdges(this.labels.p_from_left, this.labels.p_from_fake), this.labels.w_to = this.$cache.to.outerWidth(!1), this.labels.p_to_fake = this.labels.w_to / this.coords.w_rs * 100, this.labels.p_to_left = this.coords.p_to_fake + this.coords.p_handle / 2 - this.labels.p_to_fake / 2, this.labels.p_to_left = this.toFixed(this.labels.p_to_left), this.labels.p_to_left = this.checkEdges(this.labels.p_to_left, this.labels.p_to_fake), this.labels.w_single = this.$cache.single.outerWidth(!1), this.labels.p_single_fake = this.labels.w_single / this.coords.w_rs * 100, this.labels.p_single_left = (this.labels.p_from_left + this.labels.p_to_left + this.labels.p_to_fake) / 2 - this.labels.p_single_fake / 2, this.labels.p_single_left = this.toFixed(this.labels.p_single_left)), this.labels.p_single_left = this.checkEdges(this.labels.p_single_left, this.labels.p_single_fake))
                    },
                    updateScene: function() {
                        this.raf_id && (cancelAnimationFrame(this.raf_id), this.raf_id = null), clearTimeout(this.update_tm), this.update_tm = null, this.options && (this.drawHandles(), this.is_active ? this.raf_id = requestAnimationFrame(this.updateScene.bind(this)) : this.update_tm = setTimeout(this.updateScene.bind(this), 300))
                    },
                    drawHandles: function() {
                        this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.coords.w_rs && (this.coords.w_rs !== this.coords.w_rs_old && (this.target = "base", this.is_resize = !0), (this.coords.w_rs !== this.coords.w_rs_old || this.force_redraw) && (this.setMinMax(), this.calc(!0), this.drawLabels(), this.options.grid && (this.calcGridMargin(), this.calcGridLabels()), this.force_redraw = !0, this.coords.w_rs_old = this.coords.w_rs, this.drawShadow()), this.coords.w_rs && (this.dragging || this.force_redraw || this.is_key) && ((this.old_from !== this.result.from || this.old_to !== this.result.to || this.force_redraw || this.is_key) && (this.drawLabels(), this.$cache.bar[0].style.left = this.coords.p_bar_x + "%", this.$cache.bar[0].style.width = this.coords.p_bar_w + "%", "single" === this.options.type ? (this.$cache.bar[0].style.left = 0, this.$cache.bar[0].style.width = this.coords.p_bar_w + this.coords.p_bar_x + "%", this.$cache.s_single[0].style.left = this.coords.p_single_fake + "%") : (this.$cache.s_from[0].style.left = this.coords.p_from_fake + "%", this.$cache.s_to[0].style.left = this.coords.p_to_fake + "%", (this.old_from !== this.result.from || this.force_redraw) && (this.$cache.from[0].style.left = this.labels.p_from_left + "%"), (this.old_to !== this.result.to || this.force_redraw) && (this.$cache.to[0].style.left = this.labels.p_to_left + "%")), this.$cache.single[0].style.left = this.labels.p_single_left + "%", this.writeToInput(), this.old_from === this.result.from && this.old_to === this.result.to || this.is_start || (this.$cache.input.trigger("change"), this.$cache.input.trigger("input")), this.old_from = this.result.from, this.old_to = this.result.to, this.is_resize || this.is_update || this.is_start || this.is_finish || this.callOnChange(), (this.is_key || this.is_click) && (this.is_key = !1, this.is_click = !1, this.callOnFinish()), this.is_update = !1, this.is_resize = !1, this.is_finish = !1), this.is_start = !1, this.is_key = !1, this.is_click = !1, this.force_redraw = !1))
                    },
                    drawLabels: function() {
                        if (this.options) {
                            var e, t, i, n, o, r = this.options.values.length,
                                s = this.options.p_values;
                            if (!this.options.hide_from_to)
                                if ("single" === this.options.type) e = r ? this.decorate(s[this.result.from]) : (n = this._prettify(this.result.from), this.decorate(n, this.result.from)), this.$cache.single.html(e), this.calcLabels(), this.labels.p_single_left < this.labels.p_min + 1 ? this.$cache.min[0].style.visibility = "hidden" : this.$cache.min[0].style.visibility = "visible", this.labels.p_single_left + this.labels.p_single_fake > 100 - this.labels.p_max - 1 ? this.$cache.max[0].style.visibility = "hidden" : this.$cache.max[0].style.visibility = "visible";
                                else {
                                    i = r ? (this.options.decorate_both ? (e = this.decorate(s[this.result.from]), e += this.options.values_separator, e += this.decorate(s[this.result.to])) : e = this.decorate(s[this.result.from] + this.options.values_separator + s[this.result.to]), t = this.decorate(s[this.result.from]), this.decorate(s[this.result.to])) : (n = this._prettify(this.result.from), o = this._prettify(this.result.to), this.options.decorate_both ? (e = this.decorate(n, this.result.from), e += this.options.values_separator, e += this.decorate(o, this.result.to)) : e = this.decorate(n + this.options.values_separator + o, this.result.to), t = this.decorate(n, this.result.from), this.decorate(o, this.result.to)), this.$cache.single.html(e), this.$cache.from.html(t), this.$cache.to.html(i), this.calcLabels();
                                    var a = Math.min(this.labels.p_single_left, this.labels.p_from_left),
                                        l = this.labels.p_single_left + this.labels.p_single_fake,
                                        c = this.labels.p_to_left + this.labels.p_to_fake,
                                        u = Math.max(l, c);
                                    this.labels.p_from_left + this.labels.p_from_fake >= this.labels.p_to_left ? (this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.single[0].style.visibility = "visible", u = this.result.from === this.result.to ? ("from" === this.target ? this.$cache.from[0].style.visibility = "visible" : "to" === this.target ? this.$cache.to[0].style.visibility = "visible" : this.target || (this.$cache.from[0].style.visibility = "visible"), this.$cache.single[0].style.visibility = "hidden", c) : (this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.single[0].style.visibility = "visible", Math.max(l, c))) : (this.$cache.from[0].style.visibility = "visible", this.$cache.to[0].style.visibility = "visible", this.$cache.single[0].style.visibility = "hidden"), a < this.labels.p_min + 1 ? this.$cache.min[0].style.visibility = "hidden" : this.$cache.min[0].style.visibility = "visible", u > 100 - this.labels.p_max - 1 ? this.$cache.max[0].style.visibility = "hidden" : this.$cache.max[0].style.visibility = "visible"
                                }
                        }
                    },
                    drawShadow: function() {
                        var e, t, i, n, o = this.options,
                            r = this.$cache,
                            s = "number" == typeof o.from_min && !isNaN(o.from_min),
                            a = "number" == typeof o.from_max && !isNaN(o.from_max),
                            l = "number" == typeof o.to_min && !isNaN(o.to_min),
                            c = "number" == typeof o.to_max && !isNaN(o.to_max);
                        "single" === o.type ? o.from_shadow && (s || a) ? (e = this.convertToPercent(s ? o.from_min : o.min), t = this.convertToPercent(a ? o.from_max : o.max) - e, e = this.toFixed(e - this.coords.p_handle / 100 * e), t = this.toFixed(t - this.coords.p_handle / 100 * t), e += this.coords.p_handle / 2, r.shad_single[0].style.display = "block", r.shad_single[0].style.left = e + "%", r.shad_single[0].style.width = t + "%") : r.shad_single[0].style.display = "none" : (o.from_shadow && (s || a) ? (e = this.convertToPercent(s ? o.from_min : o.min), t = this.convertToPercent(a ? o.from_max : o.max) - e, e = this.toFixed(e - this.coords.p_handle / 100 * e), t = this.toFixed(t - this.coords.p_handle / 100 * t), e += this.coords.p_handle / 2, r.shad_from[0].style.display = "block", r.shad_from[0].style.left = e + "%", r.shad_from[0].style.width = t + "%") : r.shad_from[0].style.display = "none", o.to_shadow && (l || c) ? (i = this.convertToPercent(l ? o.to_min : o.min), n = this.convertToPercent(c ? o.to_max : o.max) - i, i = this.toFixed(i - this.coords.p_handle / 100 * i), n = this.toFixed(n - this.coords.p_handle / 100 * n), i += this.coords.p_handle / 2, r.shad_to[0].style.display = "block", r.shad_to[0].style.left = i + "%", r.shad_to[0].style.width = n + "%") : r.shad_to[0].style.display = "none")
                    },
                    writeToInput: function() {
                        "single" === this.options.type ? (this.options.values.length ? this.$cache.input.prop("value", this.result.from_value) : this.$cache.input.prop("value", this.result.from), this.$cache.input.data("from", this.result.from)) : (this.options.values.length ? this.$cache.input.prop("value", this.result.from_value + this.options.input_values_separator + this.result.to_value) : this.$cache.input.prop("value", this.result.from + this.options.input_values_separator + this.result.to), this.$cache.input.data("from", this.result.from), this.$cache.input.data("to", this.result.to))
                    },
                    callOnStart: function() {
                        this.writeToInput(), this.options.onStart && "function" == typeof this.options.onStart && (this.options.scope ? this.options.onStart.call(this.options.scope, this.result) : this.options.onStart(this.result))
                    },
                    callOnChange: function() {
                        this.writeToInput(), this.options.onChange && "function" == typeof this.options.onChange && (this.options.scope ? this.options.onChange.call(this.options.scope, this.result) : this.options.onChange(this.result))
                    },
                    callOnFinish: function() {
                        this.writeToInput(), this.options.onFinish && "function" == typeof this.options.onFinish && (this.options.scope ? this.options.onFinish.call(this.options.scope, this.result) : this.options.onFinish(this.result))
                    },
                    callOnUpdate: function() {
                        this.writeToInput(), this.options.onUpdate && "function" == typeof this.options.onUpdate && (this.options.scope ? this.options.onUpdate.call(this.options.scope, this.result) : this.options.onUpdate(this.result))
                    },
                    toggleInput: function() {
                        this.$cache.input.toggleClass("irs-hidden-input"), this.has_tab_index ? this.$cache.input.prop("tabindex", -1) : this.$cache.input.removeProp("tabindex"), this.has_tab_index = !this.has_tab_index
                    },
                    convertToPercent: function(e, t) {
                        var i, n = this.options.max - this.options.min,
                            o = n / 100;
                        return n ? (i = (t ? e : e - this.options.min) / o, this.toFixed(i)) : (this.no_diapason = !0, 0)
                    },
                    convertToValue: function(e) {
                        var t, i, n = this.options.min,
                            o = this.options.max,
                            r = n.toString().split(".")[1],
                            s = o.toString().split(".")[1],
                            a = 0,
                            l = 0;
                        if (0 === e) return this.options.min;
                        if (100 === e) return this.options.max;
                        r && (a = t = r.length), s && (a = i = s.length), t && i && (a = i <= t ? t : i), n < 0 && (n = +(n + (l = Math.abs(n))).toFixed(a), o = +(o + l).toFixed(a));
                        var c, u = (o - n) / 100 * e + n,
                            d = this.options.step.toString().split(".")[1];
                        return u = d ? +u.toFixed(d.length) : (u /= this.options.step, +(u *= this.options.step).toFixed(0)), l && (u -= l), (c = d ? +u.toFixed(d.length) : this.toFixed(u)) < this.options.min ? c = this.options.min : c > this.options.max && (c = this.options.max), c
                    },
                    calcWithStep: function(e) {
                        var t = Math.round(e / this.coords.p_step) * this.coords.p_step;
                        return 100 < t && (t = 100), 100 === e && (t = 100), this.toFixed(t)
                    },
                    checkMinInterval: function(e, t, i) {
                        var n, o, r = this.options;
                        return r.min_interval ? (n = this.convertToValue(e), o = this.convertToValue(t), "from" === i ? o - n < r.min_interval && (n = o - r.min_interval) : n - o < r.min_interval && (n = o + r.min_interval), this.convertToPercent(n)) : e
                    },
                    checkMaxInterval: function(e, t, i) {
                        var n, o, r = this.options;
                        return r.max_interval ? (n = this.convertToValue(e), o = this.convertToValue(t), "from" === i ? o - n > r.max_interval && (n = o - r.max_interval) : n - o > r.max_interval && (n = o + r.max_interval), this.convertToPercent(n)) : e
                    },
                    checkDiapason: function(e, t, i) {
                        var n = this.convertToValue(e),
                            o = this.options;
                        return "number" != typeof t && (t = o.min), "number" != typeof i && (i = o.max), n < t && (n = t), i < n && (n = i), this.convertToPercent(n)
                    },
                    toFixed: function(e) {
                        return +(e = e.toFixed(20))
                    },
                    _prettify: function(e) {
                        return this.options.prettify_enabled ? this.options.prettify && "function" == typeof this.options.prettify ? this.options.prettify(e) : this.prettify(e) : e
                    },
                    prettify: function(e) {
                        return e.toString().replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + this.options.prettify_separator)
                    },
                    checkEdges: function(e, t) {
                        return this.options.force_edges && (e < 0 ? e = 0 : 100 - t < e && (e = 100 - t)), this.toFixed(e)
                    },
                    validate: function() {
                        var e, t, i = this.options,
                            n = this.result,
                            o = i.values,
                            r = o.length;
                        if ("string" == typeof i.min && (i.min = +i.min), "string" == typeof i.max && (i.max = +i.max), "string" == typeof i.from && (i.from = +i.from), "string" == typeof i.to && (i.to = +i.to), "string" == typeof i.step && (i.step = +i.step), "string" == typeof i.from_min && (i.from_min = +i.from_min), "string" == typeof i.from_max && (i.from_max = +i.from_max), "string" == typeof i.to_min && (i.to_min = +i.to_min), "string" == typeof i.to_max && (i.to_max = +i.to_max), "string" == typeof i.grid_num && (i.grid_num = +i.grid_num), i.max < i.min && (i.max = i.min), r)
                            for (i.p_values = [], i.min = 0, i.max = r - 1, i.step = 1, i.grid_num = i.max, i.grid_snap = !0, t = 0; t < r; t++) e = +o[t], e = isNaN(e) ? o[t] : (o[t] = e, this._prettify(e)), i.p_values.push(e);
                        ("number" != typeof i.from || isNaN(i.from)) && (i.from = i.min), ("number" != typeof i.to || isNaN(i.to)) && (i.to = i.max), "single" === i.type ? (i.from < i.min && (i.from = i.min), i.from > i.max && (i.from = i.max)) : (i.from < i.min && (i.from = i.min), i.from > i.max && (i.from = i.max), i.to < i.min && (i.to = i.min), i.to > i.max && (i.to = i.max), this.update_check.from && (this.update_check.from !== i.from && i.from > i.to && (i.from = i.to), this.update_check.to !== i.to && i.to < i.from && (i.to = i.from)), i.from > i.to && (i.from = i.to), i.to < i.from && (i.to = i.from)), ("number" != typeof i.step || isNaN(i.step) || !i.step || i.step < 0) && (i.step = 1), "number" == typeof i.from_min && i.from < i.from_min && (i.from = i.from_min), "number" == typeof i.from_max && i.from > i.from_max && (i.from = i.from_max), "number" == typeof i.to_min && i.to < i.to_min && (i.to = i.to_min), "number" == typeof i.to_max && i.from > i.to_max && (i.to = i.to_max), n && (n.min !== i.min && (n.min = i.min), n.max !== i.max && (n.max = i.max), (n.from < n.min || n.from > n.max) && (n.from = i.from), (n.to < n.min || n.to > n.max) && (n.to = i.to)), ("number" != typeof i.min_interval || isNaN(i.min_interval) || !i.min_interval || i.min_interval < 0) && (i.min_interval = 0), ("number" != typeof i.max_interval || isNaN(i.max_interval) || !i.max_interval || i.max_interval < 0) && (i.max_interval = 0), i.min_interval && i.min_interval > i.max - i.min && (i.min_interval = i.max - i.min), i.max_interval && i.max_interval > i.max - i.min && (i.max_interval = i.max - i.min)
                    },
                    decorate: function(e, t) {
                        var i = "",
                            n = this.options;
                        return n.prefix && (i += n.prefix), i += e, n.max_postfix && (n.values.length && e === n.p_values[n.max] || t === n.max) && (i += n.max_postfix, n.postfix && (i += " ")), n.postfix && (i += n.postfix), i
                    },
                    updateFrom: function() {
                        this.result.from = this.options.from, this.result.from_percent = this.convertToPercent(this.result.from), this.result.from_pretty = this._prettify(this.result.from), this.options.values && (this.result.from_value = this.options.values[this.result.from])
                    },
                    updateTo: function() {
                        this.result.to = this.options.to, this.result.to_percent = this.convertToPercent(this.result.to), this.result.to_pretty = this._prettify(this.result.to), this.options.values && (this.result.to_value = this.options.values[this.result.to])
                    },
                    updateResult: function() {
                        this.result.min = this.options.min, this.result.max = this.options.max, this.updateFrom(), this.updateTo()
                    },
                    appendGrid: function() {
                        if (this.options.grid) {
                            var e, t, i, n, o, r, s = this.options,
                                a = s.max - s.min,
                                l = s.grid_num,
                                c = 0,
                                u = 4,
                                d = "";
                            for (this.calcGridMargin(), s.grid_snap && (l = a / s.step), 50 < l && (l = 50), i = this.toFixed(100 / l), 4 < l && (u = 3), 7 < l && (u = 2), 14 < l && (u = 1), 28 < l && (u = 0), e = 0; e < l + 1; e++) {
                                for (n = u, 100 < (c = this.toFixed(i * e)) && (c = 100), o = ((this.coords.big[e] = c) - i * (e - 1)) / (n + 1), t = 1; t <= n && 0 !== c; t++) d += '<span class="irs-grid-pol small" style="left: ' + this.toFixed(c - o * t) + '%"></span>';
                                d += '<span class="irs-grid-pol" style="left: ' + c + '%"></span>', r = this.convertToValue(c), d += '<span class="irs-grid-text js-grid-text-' + e + '" style="left: ' + c + '%">' + (r = s.values.length ? s.p_values[r] : this._prettify(r)) + "</span>"
                            }
                            this.coords.big_num = Math.ceil(l + 1), this.$cache.cont.addClass("irs-with-grid"), this.$cache.grid.html(d), this.cacheGridLabels()
                        }
                    },
                    cacheGridLabels: function() {
                        var e, t, i = this.coords.big_num;
                        for (t = 0; t < i; t++) e = this.$cache.grid.find(".js-grid-text-" + t), this.$cache.grid_labels.push(e);
                        this.calcGridLabels()
                    },
                    calcGridLabels: function() {
                        var e, t, i = [],
                            n = [],
                            o = this.coords.big_num;
                        for (e = 0; e < o; e++) this.coords.big_w[e] = this.$cache.grid_labels[e].outerWidth(!1), this.coords.big_p[e] = this.toFixed(this.coords.big_w[e] / this.coords.w_rs * 100), this.coords.big_x[e] = this.toFixed(this.coords.big_p[e] / 2), i[e] = this.toFixed(this.coords.big[e] - this.coords.big_x[e]), n[e] = this.toFixed(i[e] + this.coords.big_p[e]);
                        for (this.options.force_edges && (i[0] < -this.coords.grid_gap && (i[0] = -this.coords.grid_gap, n[0] = this.toFixed(i[0] + this.coords.big_p[0]), this.coords.big_x[0] = this.coords.grid_gap), n[o - 1] > 100 + this.coords.grid_gap && (n[o - 1] = 100 + this.coords.grid_gap, i[o - 1] = this.toFixed(n[o - 1] - this.coords.big_p[o - 1]), this.coords.big_x[o - 1] = this.toFixed(this.coords.big_p[o - 1] - this.coords.grid_gap))), this.calcGridCollision(2, i, n), this.calcGridCollision(4, i, n), e = 0; e < o; e++) t = this.$cache.grid_labels[e][0], this.coords.big_x[e] !== Number.POSITIVE_INFINITY && (t.style.marginLeft = -this.coords.big_x[e] + "%")
                    },
                    calcGridCollision: function(e, t, i) {
                        var n, o, r, s = this.coords.big_num;
                        for (n = 0; n < s && !(s <= (o = n + e / 2)); n += e) r = this.$cache.grid_labels[o][0], i[n] <= t[o] ? r.style.visibility = "visible" : r.style.visibility = "hidden"
                    },
                    calcGridMargin: function() {
                        this.options.grid_margin && (this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.coords.w_rs && ("single" === this.options.type ? this.coords.w_handle = this.$cache.s_single.outerWidth(!1) : this.coords.w_handle = this.$cache.s_from.outerWidth(!1), this.coords.p_handle = this.toFixed(this.coords.w_handle / this.coords.w_rs * 100), this.coords.grid_gap = this.toFixed(this.coords.p_handle / 2 - .1), this.$cache.grid[0].style.width = this.toFixed(100 - this.coords.p_handle) + "%", this.$cache.grid[0].style.left = this.coords.grid_gap + "%"))
                    },
                    update: function(t) {
                        this.input && (this.is_update = !0, this.options.from = this.result.from, this.options.to = this.result.to, this.update_check.from = this.result.from, this.update_check.to = this.result.to, this.options = e.extend(this.options, t), this.validate(), this.updateResult(t), this.toggleInput(), this.remove(), this.init(!0))
                    },
                    reset: function() {
                        this.input && (this.updateResult(), this.update())
                    },
                    destroy: function() {
                        this.input && (this.toggleInput(), this.$cache.input.prop("readonly", !1), e.data(this.input, "ionRangeSlider", null), this.remove(), this.input = null, this.options = null)
                    }
                }, e.fn.ionRangeSlider = function(t) {
                    return this.each((function() {
                        e.data(this, "ionRangeSlider") || e.data(this, "ionRangeSlider", new c(this, t, a++))
                    }))
                },
                function() {
                    for (var e = 0, t = ["ms", "moz", "webkit", "o"], n = 0; n < t.length && !i.requestAnimationFrame; ++n) i.requestAnimationFrame = i[t[n] + "RequestAnimationFrame"], i.cancelAnimationFrame = i[t[n] + "CancelAnimationFrame"] || i[t[n] + "CancelRequestAnimationFrame"];
                    i.requestAnimationFrame || (i.requestAnimationFrame = function(t, n) {
                        var o = (new Date).getTime(),
                            r = Math.max(0, 16 - (o - e)),
                            s = i.setTimeout((function() {
                                t(o + r)
                            }), r);
                        return e = o + r, s
                    }), i.cancelAnimationFrame || (i.cancelAnimationFrame = function(e) {
                        clearTimeout(e)
                    })
                }()
        }))
    },
    PDX0: function(e, t) {
        (function(t) {
            e.exports = t
        }).call(this, {})
    },
    PSD3: function(e, t, i) {
        e.exports = function() {
            "use strict";
            const e = Object.freeze({
                    cancel: "cancel",
                    backdrop: "backdrop",
                    close: "close",
                    esc: "esc",
                    timer: "timer"
                }),
                t = e => e.charAt(0).toUpperCase() + e.slice(1),
                i = e => Array.prototype.slice.call(e),
                n = e => {
                    console.warn("".concat("SweetAlert2:", " ").concat("object" == typeof e ? e.join(" ") : e))
                },
                o = e => {
                    console.error("".concat("SweetAlert2:", " ").concat(e))
                },
                r = [],
                s = (e, t) => {
                    var i;
                    i = '"'.concat(e, '" is deprecated and will be removed in the next major release. Please use "').concat(t, '" instead.'), r.includes(i) || (r.push(i), n(i))
                },
                a = e => "function" == typeof e ? e() : e,
                l = e => e && "function" == typeof e.toPromise,
                c = e => l(e) ? e.toPromise() : Promise.resolve(e),
                u = e => e && Promise.resolve(e) === e,
                d = e => e instanceof Element || (e => "object" == typeof e && e.jquery)(e),
                h = e => {
                    const t = {};
                    for (const i in e) t[e[i]] = "swal2-" + e[i];
                    return t
                },
                p = h(["container", "shown", "height-auto", "iosfix", "popup", "modal", "no-backdrop", "no-transition", "toast", "toast-shown", "show", "hide", "close", "title", "html-container", "actions", "confirm", "deny", "cancel", "default-outline", "footer", "icon", "icon-content", "image", "input", "file", "range", "select", "radio", "checkbox", "label", "textarea", "inputerror", "input-label", "validation-message", "progress-steps", "active-progress-step", "progress-step", "progress-step-line", "loader", "loading", "styled", "top", "top-start", "top-end", "top-left", "top-right", "center", "center-start", "center-end", "center-left", "center-right", "bottom", "bottom-start", "bottom-end", "bottom-left", "bottom-right", "grow-row", "grow-column", "grow-fullscreen", "rtl", "timer-progress-bar", "timer-progress-bar-container", "scrollbar-measure", "icon-success", "icon-warning", "icon-info", "icon-question", "icon-error"]),
                f = h(["success", "warning", "info", "question", "error"]),
                m = () => document.body.querySelector(".".concat(p.container)),
                g = e => {
                    const t = m();
                    return t ? t.querySelector(e) : null
                },
                v = e => g(".".concat(e)),
                y = () => v(p.popup),
                w = () => v(p.icon),
                b = () => v(p.title),
                _ = () => v(p["html-container"]),
                x = () => v(p.image),
                C = () => v(p["progress-steps"]),
                k = () => v(p["validation-message"]),
                $ = () => g(".".concat(p.actions, " .").concat(p.confirm)),
                T = () => g(".".concat(p.actions, " .").concat(p.deny)),
                E = () => g(".".concat(p.loader)),
                S = () => g(".".concat(p.actions, " .").concat(p.cancel)),
                A = () => v(p.actions),
                D = () => v(p.footer),
                O = () => v(p["timer-progress-bar"]),
                I = () => v(p.close),
                L = () => {
                    const e = i(y().querySelectorAll('[tabindex]:not([tabindex="-1"]):not([tabindex="0"])')).sort((e, t) => (e = parseInt(e.getAttribute("tabindex"))) > (t = parseInt(t.getAttribute("tabindex"))) ? 1 : e < t ? -1 : 0),
                        t = i(y().querySelectorAll('\n  a[href],\n  area[href],\n  input:not([disabled]),\n  select:not([disabled]),\n  textarea:not([disabled]),\n  button:not([disabled]),\n  iframe,\n  object,\n  embed,\n  [tabindex="0"],\n  [contenteditable],\n  audio[controls],\n  video[controls],\n  summary\n')).filter(e => "-1" !== e.getAttribute("tabindex"));
                    return (e => {
                        const t = [];
                        for (let i = 0; i < e.length; i++) - 1 === t.indexOf(e[i]) && t.push(e[i]);
                        return t
                    })(e.concat(t)).filter(e => G(e))
                },
                P = () => !z() && !document.body.classList.contains(p["no-backdrop"]),
                z = () => document.body.classList.contains(p["toast-shown"]),
                F = {
                    previousBodyPadding: null
                },
                M = (e, t) => {
                    if (e.textContent = "", t) {
                        const n = (new DOMParser).parseFromString(t, "text/html");
                        i(n.querySelector("head").childNodes).forEach(t => {
                            e.appendChild(t)
                        }), i(n.querySelector("body").childNodes).forEach(t => {
                            e.appendChild(t)
                        })
                    }
                },
                N = (e, t) => {
                    if (!t) return !1;
                    const i = t.split(/\s+/);
                    for (let t = 0; t < i.length; t++)
                        if (!e.classList.contains(i[t])) return !1;
                    return !0
                },
                j = (e, t, o) => {
                    if (((e, t) => {
                            i(e.classList).forEach(i => {
                                Object.values(p).includes(i) || Object.values(f).includes(i) || Object.values(t.showClass).includes(i) || e.classList.remove(i)
                            })
                        })(e, t), t.customClass && t.customClass[o]) {
                        if ("string" != typeof t.customClass[o] && !t.customClass[o].forEach) return n("Invalid type of customClass.".concat(o, '! Expected string or iterable object, got "').concat(typeof t.customClass[o], '"'));
                        q(e, t.customClass[o])
                    }
                },
                R = (e, t) => {
                    if (!t) return null;
                    switch (t) {
                        case "select":
                        case "textarea":
                        case "file":
                            return U(e, p[t]);
                        case "checkbox":
                            return e.querySelector(".".concat(p.checkbox, " input"));
                        case "radio":
                            return e.querySelector(".".concat(p.radio, " input:checked")) || e.querySelector(".".concat(p.radio, " input:first-child"));
                        case "range":
                            return e.querySelector(".".concat(p.range, " input"));
                        default:
                            return U(e, p.input)
                    }
                },
                H = e => {
                    if (e.focus(), "file" !== e.type) {
                        const t = e.value;
                        e.value = "", e.value = t
                    }
                },
                B = (e, t, i) => {
                    e && t && ("string" == typeof t && (t = t.split(/\s+/).filter(Boolean)), t.forEach(t => {
                        e.forEach ? e.forEach(e => {
                            i ? e.classList.add(t) : e.classList.remove(t)
                        }) : i ? e.classList.add(t) : e.classList.remove(t)
                    }))
                },
                q = (e, t) => {
                    B(e, t, !0)
                },
                W = (e, t) => {
                    B(e, t, !1)
                },
                U = (e, t) => {
                    for (let i = 0; i < e.childNodes.length; i++)
                        if (N(e.childNodes[i], t)) return e.childNodes[i]
                },
                V = (e, t, i) => {
                    i === "".concat(parseInt(i)) && (i = parseInt(i)), i || 0 === parseInt(i) ? e.style[t] = "number" == typeof i ? "".concat(i, "px") : i : e.style.removeProperty(t)
                },
                K = (e, t = "flex") => {
                    e.style.display = t
                },
                Y = e => {
                    e.style.display = "none"
                },
                Q = (e, t, i, n) => {
                    const o = e.querySelector(t);
                    o && (o.style[i] = n)
                },
                X = (e, t, i) => {
                    t ? K(e, i) : Y(e)
                },
                G = e => !(!e || !(e.offsetWidth || e.offsetHeight || e.getClientRects().length)),
                Z = e => !!(e.scrollHeight > e.clientHeight),
                J = e => {
                    const t = window.getComputedStyle(e),
                        i = parseFloat(t.getPropertyValue("animation-duration") || "0"),
                        n = parseFloat(t.getPropertyValue("transition-duration") || "0");
                    return i > 0 || n > 0
                },
                ee = (e, t = !1) => {
                    const i = O();
                    G(i) && (t && (i.style.transition = "none", i.style.width = "100%"), setTimeout(() => {
                        i.style.transition = "width ".concat(e / 1e3, "s linear"), i.style.width = "0%"
                    }, 10))
                },
                te = () => "undefined" == typeof window || "undefined" == typeof document,
                ie = '\n <div aria-labelledby="'.concat(p.title, '" aria-describedby="').concat(p["html-container"], '" class="').concat(p.popup, '" tabindex="-1">\n   <button type="button" class="').concat(p.close, '"></button>\n   <ul class="').concat(p["progress-steps"], '"></ul>\n   <div class="').concat(p.icon, '"></div>\n   <img class="').concat(p.image, '" />\n   <h2 class="').concat(p.title, '" id="').concat(p.title, '"></h2>\n   <div class="').concat(p["html-container"], '"></div>\n   <input class="').concat(p.input, '" />\n   <input type="file" class="').concat(p.file, '" />\n   <div class="').concat(p.range, '">\n     <input type="range" />\n     <output></output>\n   </div>\n   <select class="').concat(p.select, '"></select>\n   <div class="').concat(p.radio, '"></div>\n   <label for="').concat(p.checkbox, '" class="').concat(p.checkbox, '">\n     <input type="checkbox" />\n     <span class="').concat(p.label, '"></span>\n   </label>\n   <textarea class="').concat(p.textarea, '"></textarea>\n   <div class="').concat(p["validation-message"], '" id="').concat(p["validation-message"], '"></div>\n   <div class="').concat(p.actions, '">\n     <div class="').concat(p.loader, '"></div>\n     <button type="button" class="').concat(p.confirm, '"></button>\n     <button type="button" class="').concat(p.deny, '"></button>\n     <button type="button" class="').concat(p.cancel, '"></button>\n   </div>\n   <div class="').concat(p.footer, '"></div>\n   <div class="').concat(p["timer-progress-bar-container"], '">\n     <div class="').concat(p["timer-progress-bar"], '"></div>\n   </div>\n </div>\n').replace(/(^|\n)\s*/g, ""),
                ne = () => {
                    fi.isVisible() && fi.resetValidationMessage()
                },
                oe = e => {
                    const t = (() => {
                        const e = m();
                        return !!e && (e.remove(), W([document.documentElement, document.body], [p["no-backdrop"], p["toast-shown"], p["has-column"]]), !0)
                    })();
                    if (te()) return void o("SweetAlert2 requires document to initialize");
                    const i = document.createElement("div");
                    i.className = p.container, t && q(i, p["no-transition"]), M(i, ie);
                    const n = "string" == typeof(r = e.target) ? document.querySelector(r) : r;
                    var r;
                    n.appendChild(i), (e => {
                        const t = y();
                        t.setAttribute("role", e.toast ? "alert" : "dialog"), t.setAttribute("aria-live", e.toast ? "polite" : "assertive"), e.toast || t.setAttribute("aria-modal", "true")
                    })(e), (e => {
                        "rtl" === window.getComputedStyle(e).direction && q(m(), p.rtl)
                    })(n), (() => {
                        const e = y(),
                            t = U(e, p.input),
                            i = U(e, p.file),
                            n = e.querySelector(".".concat(p.range, " input")),
                            o = e.querySelector(".".concat(p.range, " output")),
                            r = U(e, p.select),
                            s = e.querySelector(".".concat(p.checkbox, " input")),
                            a = U(e, p.textarea);
                        t.oninput = ne, i.onchange = ne, r.onchange = ne, s.onchange = ne, a.oninput = ne, n.oninput = () => {
                            ne(), o.value = n.value
                        }, n.onchange = () => {
                            ne(), n.nextSibling.value = n.value
                        }
                    })()
                },
                re = (e, t) => {
                    e instanceof HTMLElement ? t.appendChild(e) : "object" == typeof e ? se(e, t) : e && M(t, e)
                },
                se = (e, t) => {
                    e.jquery ? ae(t, e) : M(t, e.toString())
                },
                ae = (e, t) => {
                    if (e.textContent = "", 0 in t)
                        for (let i = 0; i in t; i++) e.appendChild(t[i].cloneNode(!0));
                    else e.appendChild(t.cloneNode(!0))
                },
                le = (() => {
                    if (te()) return !1;
                    const e = document.createElement("div"),
                        t = {
                            WebkitAnimation: "webkitAnimationEnd",
                            OAnimation: "oAnimationEnd oanimationend",
                            animation: "animationend"
                        };
                    for (const i in t)
                        if (Object.prototype.hasOwnProperty.call(t, i) && void 0 !== e.style[i]) return t[i];
                    return !1
                })(),
                ce = (e, t) => {
                    const i = A(),
                        n = E(),
                        o = $(),
                        r = T(),
                        s = S();
                    t.showConfirmButton || t.showDenyButton || t.showCancelButton || Y(i), j(i, t, "actions"), ue(o, "confirm", t), ue(r, "deny", t), ue(s, "cancel", t),
                        function(e, t, i, n) {
                            if (!n.buttonsStyling) return W([e, t, i], p.styled);
                            q([e, t, i], p.styled), n.confirmButtonColor && (e.style.backgroundColor = n.confirmButtonColor, q(e, p["default-outline"])), n.denyButtonColor && (t.style.backgroundColor = n.denyButtonColor, q(t, p["default-outline"])), n.cancelButtonColor && (i.style.backgroundColor = n.cancelButtonColor, q(i, p["default-outline"]))
                        }(o, r, s, t), t.reverseButtons && (i.insertBefore(s, n), i.insertBefore(r, n), i.insertBefore(o, n)), M(n, t.loaderHtml), j(n, t, "loader")
                };

            function ue(e, i, n) {
                X(e, n["show".concat(t(i), "Button")], "inline-block"), M(e, n["".concat(i, "ButtonText")]), e.setAttribute("aria-label", n["".concat(i, "ButtonAriaLabel")]), e.className = p[i], j(e, n, "".concat(i, "Button")), q(e, n["".concat(i, "ButtonClass")])
            }
            const de = (e, t) => {
                const i = m();
                i && (function(e, t) {
                    "string" == typeof t ? e.style.background = t : t || q([document.documentElement, document.body], p["no-backdrop"])
                }(i, t.backdrop), !t.backdrop && t.allowOutsideClick && n('"allowOutsideClick" parameter requires `backdrop` parameter to be set to `true`'), function(e, t) {
                    t in p ? q(e, p[t]) : (n('The "position" parameter is not valid, defaulting to "center"'), q(e, p.center))
                }(i, t.position), function(e, t) {
                    if (t && "string" == typeof t) {
                        const i = "grow-".concat(t);
                        i in p && q(e, p[i])
                    }
                }(i, t.grow), j(i, t, "container"))
            };
            var he = {
                promise: new WeakMap,
                innerParams: new WeakMap,
                domCache: new WeakMap
            };
            const pe = ["input", "file", "range", "select", "radio", "checkbox", "textarea"],
                fe = e => {
                    if (!be[e.input]) return o('Unexpected type of input! Expected "text", "email", "password", "number", "tel", "select", "radio", "checkbox", "textarea", "file" or "url", got "'.concat(e.input, '"'));
                    const t = we(e.input),
                        i = be[e.input](t, e);
                    K(i), setTimeout(() => {
                        H(i)
                    })
                },
                me = (e, t) => {
                    const i = R(y(), e);
                    if (i) {
                        (e => {
                            for (let t = 0; t < e.attributes.length; t++) {
                                const i = e.attributes[t].name;
                                ["type", "value", "style"].includes(i) || e.removeAttribute(i)
                            }
                        })(i);
                        for (const e in t) i.setAttribute(e, t[e])
                    }
                },
                ge = e => {
                    const t = we(e.input);
                    e.customClass && q(t, e.customClass.input)
                },
                ve = (e, t) => {
                    e.placeholder && !t.inputPlaceholder || (e.placeholder = t.inputPlaceholder)
                },
                ye = (e, t, i) => {
                    if (i.inputLabel) {
                        e.id = p.input;
                        const n = document.createElement("label"),
                            o = p["input-label"];
                        n.setAttribute("for", e.id), n.className = o, q(n, i.customClass.inputLabel), n.innerText = i.inputLabel, t.insertAdjacentElement("beforebegin", n)
                    }
                },
                we = e => {
                    const t = p[e] ? p[e] : p.input;
                    return U(y(), t)
                },
                be = {};
            be.text = be.email = be.password = be.number = be.tel = be.url = (e, t) => ("string" == typeof t.inputValue || "number" == typeof t.inputValue ? e.value = t.inputValue : u(t.inputValue) || n('Unexpected type of inputValue! Expected "string", "number" or "Promise", got "'.concat(typeof t.inputValue, '"')), ye(e, e, t), ve(e, t), e.type = t.input, e), be.file = (e, t) => (ye(e, e, t), ve(e, t), e), be.range = (e, t) => {
                const i = e.querySelector("input"),
                    n = e.querySelector("output");
                return i.value = t.inputValue, i.type = t.input, n.value = t.inputValue, ye(i, e, t), e
            }, be.select = (e, t) => {
                if (e.textContent = "", t.inputPlaceholder) {
                    const i = document.createElement("option");
                    M(i, t.inputPlaceholder), i.value = "", i.disabled = !0, i.selected = !0, e.appendChild(i)
                }
                return ye(e, e, t), e
            }, be.radio = e => (e.textContent = "", e), be.checkbox = (e, t) => {
                const i = R(y(), "checkbox");
                i.value = 1, i.id = p.checkbox, i.checked = Boolean(t.inputValue);
                const n = e.querySelector("span");
                return M(n, t.inputPlaceholder), e
            }, be.textarea = (e, t) => {
                if (e.value = t.inputValue, ve(e, t), ye(e, e, t), "MutationObserver" in window) {
                    const t = parseInt(window.getComputedStyle(y()).width);
                    new MutationObserver(() => {
                        const i = e.offsetWidth + (n = e, parseInt(window.getComputedStyle(n).marginLeft) + parseInt(window.getComputedStyle(n).marginRight));
                        var n;
                        y().style.width = i > t ? "".concat(i, "px") : null
                    }).observe(e, {
                        attributes: !0,
                        attributeFilter: ["style"]
                    })
                }
                return e
            };
            const _e = (e, t) => {
                    const i = _();
                    j(i, t, "htmlContainer"), t.html ? (re(t.html, i), K(i, "block")) : t.text ? (i.textContent = t.text, K(i, "block")) : Y(i), ((e, t) => {
                        const i = y(),
                            n = he.innerParams.get(e),
                            o = !n || t.input !== n.input;
                        pe.forEach(e => {
                            const n = p[e],
                                r = U(i, n);
                            me(e, t.inputAttributes), r.className = n, o && Y(r)
                        }), t.input && (o && fe(t), ge(t))
                    })(e, t)
                },
                xe = (e, t) => {
                    for (const i in f) t.icon !== i && W(e, f[i]);
                    q(e, f[t.icon]), $e(e, t), Ce(), j(e, t, "icon")
                },
                Ce = () => {
                    const e = y(),
                        t = window.getComputedStyle(e).getPropertyValue("background-color"),
                        i = e.querySelectorAll("[class^=swal2-success-circular-line], .swal2-success-fix");
                    for (let e = 0; e < i.length; e++) i[e].style.backgroundColor = t
                },
                ke = (e, t) => {
                    e.textContent = "", t.iconHtml ? M(e, Te(t.iconHtml)) : "success" === t.icon ? M(e, '\n      <div class="swal2-success-circular-line-left"></div>\n      <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>\n      <div class="swal2-success-ring"></div> <div class="swal2-success-fix"></div>\n      <div class="swal2-success-circular-line-right"></div>\n    ') : "error" === t.icon ? M(e, '\n      <span class="swal2-x-mark">\n        <span class="swal2-x-mark-line-left"></span>\n        <span class="swal2-x-mark-line-right"></span>\n      </span>\n    ') : M(e, Te({
                        question: "?",
                        warning: "!",
                        info: "i"
                    }[t.icon]))
                },
                $e = (e, t) => {
                    if (t.iconColor) {
                        e.style.color = t.iconColor, e.style.borderColor = t.iconColor;
                        for (const i of [".swal2-success-line-tip", ".swal2-success-line-long", ".swal2-x-mark-line-left", ".swal2-x-mark-line-right"]) Q(e, i, "backgroundColor", t.iconColor);
                        Q(e, ".swal2-success-ring", "borderColor", t.iconColor)
                    }
                },
                Te = e => '<div class="'.concat(p["icon-content"], '">').concat(e, "</div>"),
                Ee = (e, t) => {
                    const i = C();
                    if (!t.progressSteps || 0 === t.progressSteps.length) return Y(i);
                    K(i), i.textContent = "", t.currentProgressStep >= t.progressSteps.length && n("Invalid currentProgressStep parameter, it should be less than progressSteps.length (currentProgressStep like JS arrays starts from 0)"), t.progressSteps.forEach((e, n) => {
                        const o = (e => {
                            const t = document.createElement("li");
                            return q(t, p["progress-step"]), M(t, e), t
                        })(e);
                        if (i.appendChild(o), n === t.currentProgressStep && q(o, p["active-progress-step"]), n !== t.progressSteps.length - 1) {
                            const e = (e => {
                                const t = document.createElement("li");
                                return q(t, p["progress-step-line"]), e.progressStepsDistance && (t.style.width = e.progressStepsDistance), t
                            })(t);
                            i.appendChild(e)
                        }
                    })
                },
                Se = (e, t) => {
                    e.className = "".concat(p.popup, " ").concat(G(e) ? t.showClass.popup : ""), t.toast ? (q([document.documentElement, document.body], p["toast-shown"]), q(e, p.toast)) : q(e, p.modal), j(e, t, "popup"), "string" == typeof t.customClass && q(e, t.customClass), t.icon && q(e, p["icon-".concat(t.icon)])
                },
                Ae = (e, t) => {
                    ((e, t) => {
                        const i = m(),
                            n = y();
                        t.toast ? (V(i, "width", t.width), n.style.width = "100%", n.insertBefore(E(), w())) : V(n, "width", t.width), V(n, "padding", t.padding), t.background && (n.style.background = t.background), Y(k()), Se(n, t)
                    })(0, t), de(0, t), Ee(0, t), ((e, t) => {
                        const i = he.innerParams.get(e),
                            n = w();
                        i && t.icon === i.icon ? (ke(n, t), xe(n, t)) : t.icon || t.iconHtml ? t.icon && -1 === Object.keys(f).indexOf(t.icon) ? (o('Unknown icon! Expected "success", "error", "warning", "info" or "question", got "'.concat(t.icon, '"')), Y(n)) : (K(n), ke(n, t), xe(n, t), q(n, t.showClass.icon)) : Y(n)
                    })(e, t), ((e, t) => {
                        const i = x();
                        if (!t.imageUrl) return Y(i);
                        K(i, ""), i.setAttribute("src", t.imageUrl), i.setAttribute("alt", t.imageAlt), V(i, "width", t.imageWidth), V(i, "height", t.imageHeight), i.className = p.image, j(i, t, "image")
                    })(0, t), ((e, t) => {
                        const i = b();
                        X(i, t.title || t.titleText, "block"), t.title && re(t.title, i), t.titleText && (i.innerText = t.titleText), j(i, t, "title")
                    })(0, t), ((e, t) => {
                        const i = I();
                        M(i, t.closeButtonHtml), j(i, t, "closeButton"), X(i, t.showCloseButton), i.setAttribute("aria-label", t.closeButtonAriaLabel)
                    })(0, t), _e(e, t), ce(0, t), ((e, t) => {
                        const i = D();
                        X(i, t.footer), t.footer && re(t.footer, i), j(i, t, "footer")
                    })(0, t), "function" == typeof t.didRender && t.didRender(y())
                },
                De = () => $() && $().click(),
                Oe = e => {
                    let t = y();
                    t || fi.fire(), t = y();
                    const i = E();
                    z() ? Y(w()) : Ie(t, e), K(i), t.setAttribute("data-loading", !0), t.setAttribute("aria-busy", !0), t.focus()
                },
                Ie = (e, t) => {
                    const i = A(),
                        n = E();
                    !t && G($()) && (t = $()), K(i), t && (Y(t), n.setAttribute("data-button-to-replace", t.className)), n.parentNode.insertBefore(n, t), q([e, i], p.loading)
                },
                Le = {},
                Pe = e => new Promise(t => {
                    if (!e) return t();
                    const i = window.scrollX,
                        n = window.scrollY;
                    Le.restoreFocusTimeout = setTimeout(() => {
                        Le.previousActiveElement && Le.previousActiveElement.focus ? (Le.previousActiveElement.focus(), Le.previousActiveElement = null) : document.body && document.body.focus(), t()
                    }, 100), window.scrollTo(i, n)
                }),
                ze = () => {
                    if (Le.timeout) return (() => {
                        const e = O(),
                            t = parseInt(window.getComputedStyle(e).width);
                        e.style.removeProperty("transition"), e.style.width = "100%";
                        const i = parseInt(window.getComputedStyle(e).width),
                            n = parseInt(t / i * 100);
                        e.style.removeProperty("transition"), e.style.width = "".concat(n, "%")
                    })(), Le.timeout.stop()
                },
                Fe = () => {
                    if (Le.timeout) {
                        const e = Le.timeout.start();
                        return ee(e), e
                    }
                };
            let Me = !1;
            const Ne = {},
                je = e => {
                    for (let t = e.target; t && t !== document; t = t.parentNode)
                        for (const e in Ne) {
                            const i = t.getAttribute(e);
                            if (i) return void Ne[e].fire({
                                template: i
                            })
                        }
                },
                Re = {
                    title: "",
                    titleText: "",
                    text: "",
                    html: "",
                    footer: "",
                    icon: void 0,
                    iconColor: void 0,
                    iconHtml: void 0,
                    template: void 0,
                    toast: !1,
                    showClass: {
                        popup: "swal2-show",
                        backdrop: "swal2-backdrop-show",
                        icon: "swal2-icon-show"
                    },
                    hideClass: {
                        popup: "swal2-hide",
                        backdrop: "swal2-backdrop-hide",
                        icon: "swal2-icon-hide"
                    },
                    customClass: {},
                    target: "body",
                    backdrop: !0,
                    heightAuto: !0,
                    allowOutsideClick: !0,
                    allowEscapeKey: !0,
                    allowEnterKey: !0,
                    stopKeydownPropagation: !0,
                    keydownListenerCapture: !1,
                    showConfirmButton: !0,
                    showDenyButton: !1,
                    showCancelButton: !1,
                    preConfirm: void 0,
                    preDeny: void 0,
                    confirmButtonText: "OK",
                    confirmButtonAriaLabel: "",
                    confirmButtonColor: void 0,
                    denyButtonText: "No",
                    denyButtonAriaLabel: "",
                    denyButtonColor: void 0,
                    cancelButtonText: "Cancel",
                    cancelButtonAriaLabel: "",
                    cancelButtonColor: void 0,
                    buttonsStyling: !0,
                    reverseButtons: !1,
                    focusConfirm: !0,
                    focusDeny: !1,
                    focusCancel: !1,
                    returnFocus: !0,
                    showCloseButton: !1,
                    closeButtonHtml: "&times;",
                    closeButtonAriaLabel: "Close this dialog",
                    loaderHtml: "",
                    showLoaderOnConfirm: !1,
                    showLoaderOnDeny: !1,
                    imageUrl: void 0,
                    imageWidth: void 0,
                    imageHeight: void 0,
                    imageAlt: "",
                    timer: void 0,
                    timerProgressBar: !1,
                    width: void 0,
                    padding: void 0,
                    background: void 0,
                    input: void 0,
                    inputPlaceholder: "",
                    inputLabel: "",
                    inputValue: "",
                    inputOptions: {},
                    inputAutoTrim: !0,
                    inputAttributes: {},
                    inputValidator: void 0,
                    returnInputValueOnDeny: !1,
                    validationMessage: void 0,
                    grow: !1,
                    position: "center",
                    progressSteps: [],
                    currentProgressStep: void 0,
                    progressStepsDistance: void 0,
                    willOpen: void 0,
                    didOpen: void 0,
                    didRender: void 0,
                    willClose: void 0,
                    didClose: void 0,
                    didDestroy: void 0,
                    scrollbarPadding: !0
                },
                He = ["allowEscapeKey", "allowOutsideClick", "background", "buttonsStyling", "cancelButtonAriaLabel", "cancelButtonColor", "cancelButtonText", "closeButtonAriaLabel", "closeButtonHtml", "confirmButtonAriaLabel", "confirmButtonColor", "confirmButtonText", "currentProgressStep", "customClass", "denyButtonAriaLabel", "denyButtonColor", "denyButtonText", "didClose", "didDestroy", "footer", "hideClass", "html", "icon", "iconColor", "iconHtml", "imageAlt", "imageHeight", "imageUrl", "imageWidth", "progressSteps", "returnFocus", "reverseButtons", "showCancelButton", "showCloseButton", "showConfirmButton", "showDenyButton", "text", "title", "titleText", "willClose"],
                Be = {},
                qe = ["allowOutsideClick", "allowEnterKey", "backdrop", "focusConfirm", "focusDeny", "focusCancel", "returnFocus", "heightAuto", "keydownListenerCapture"],
                We = e => Object.prototype.hasOwnProperty.call(Re, e),
                Ue = e => Be[e],
                Ve = e => {
                    We(e) || n('Unknown parameter "'.concat(e, '"'))
                },
                Ke = e => {
                    qe.includes(e) && n('The parameter "'.concat(e, '" is incompatible with toasts'))
                },
                Ye = e => {
                    Ue(e) && s(e, Ue(e))
                };
            var Qe = Object.freeze({
                isValidParameter: We,
                isUpdatableParameter: e => -1 !== He.indexOf(e),
                isDeprecatedParameter: Ue,
                argsToParams: e => {
                    const t = {};
                    return "object" != typeof e[0] || d(e[0]) ? ["title", "html", "icon"].forEach((i, n) => {
                        const r = e[n];
                        "string" == typeof r || d(r) ? t[i] = r : void 0 !== r && o("Unexpected type of ".concat(i, '! Expected "string" or "Element", got ').concat(typeof r))
                    }) : Object.assign(t, e[0]), t
                },
                isVisible: () => G(y()),
                clickConfirm: De,
                clickDeny: () => T() && T().click(),
                clickCancel: () => S() && S().click(),
                getContainer: m,
                getPopup: y,
                getTitle: b,
                getHtmlContainer: _,
                getImage: x,
                getIcon: w,
                getInputLabel: () => v(p["input-label"]),
                getCloseButton: I,
                getActions: A,
                getConfirmButton: $,
                getDenyButton: T,
                getCancelButton: S,
                getLoader: E,
                getFooter: D,
                getTimerProgressBar: O,
                getFocusableElements: L,
                getValidationMessage: k,
                isLoading: () => y().hasAttribute("data-loading"),
                fire: function(...e) {
                    return new this(...e)
                },
                mixin: function(e) {
                    return class extends(this) {
                        _main(t, i) {
                            return super._main(t, Object.assign({}, e, i))
                        }
                    }
                },
                showLoading: Oe,
                enableLoading: Oe,
                getTimerLeft: () => Le.timeout && Le.timeout.getTimerLeft(),
                stopTimer: ze,
                resumeTimer: Fe,
                toggleTimer: () => {
                    const e = Le.timeout;
                    return e && (e.running ? ze() : Fe())
                },
                increaseTimer: e => {
                    if (Le.timeout) {
                        const t = Le.timeout.increase(e);
                        return ee(t, !0), t
                    }
                },
                isTimerRunning: () => Le.timeout && Le.timeout.isRunning(),
                bindClickHandler: function(e = "data-swal-template") {
                    Ne[e] = this, Me || (document.body.addEventListener("click", je), Me = !0)
                }
            });

            function Xe() {
                const e = he.innerParams.get(this);
                if (!e) return;
                const t = he.domCache.get(this);
                Y(t.loader), z() ? e.icon && K(w()) : Ge(t), W([t.popup, t.actions], p.loading), t.popup.removeAttribute("aria-busy"), t.popup.removeAttribute("data-loading"), t.confirmButton.disabled = !1, t.denyButton.disabled = !1, t.cancelButton.disabled = !1
            }
            const Ge = e => {
                    const t = e.popup.getElementsByClassName(e.loader.getAttribute("data-button-to-replace"));
                    t.length ? K(t[0], "inline-block") : G($()) || G(T()) || G(S()) || Y(e.actions)
                },
                Ze = () => {
                    null === F.previousBodyPadding && document.body.scrollHeight > window.innerHeight && (F.previousBodyPadding = parseInt(window.getComputedStyle(document.body).getPropertyValue("padding-right")), document.body.style.paddingRight = "".concat(F.previousBodyPadding + (() => {
                        const e = document.createElement("div");
                        e.className = p["scrollbar-measure"], document.body.appendChild(e);
                        const t = e.getBoundingClientRect().width - e.clientWidth;
                        return document.body.removeChild(e), t
                    })(), "px"))
                },
                Je = () => {
                    if (!navigator.userAgent.match(/(CriOS|FxiOS|EdgiOS|YaBrowser|UCBrowser)/i)) {
                        const e = 44;
                        y().scrollHeight > window.innerHeight - e && (m().style.paddingBottom = "".concat(e, "px"))
                    }
                },
                et = () => {
                    const e = m();
                    let t;
                    e.ontouchstart = e => {
                        t = tt(e)
                    }, e.ontouchmove = e => {
                        t && (e.preventDefault(), e.stopPropagation())
                    }
                },
                tt = e => {
                    const t = e.target,
                        i = m();
                    return !(it(e) || nt(e) || t !== i && (Z(i) || "INPUT" === t.tagName || "TEXTAREA" === t.tagName || Z(_()) && _().contains(t)))
                },
                it = e => e.touches && e.touches.length && "stylus" === e.touches[0].touchType,
                nt = e => e.touches && e.touches.length > 1;
            var ot = {
                swalPromiseResolve: new WeakMap
            };

            function rt(e, t, n, o) {
                z() ? ut(e, o) : (Pe(n).then(() => ut(e, o)), Le.keydownTarget.removeEventListener("keydown", Le.keydownHandler, {
                    capture: Le.keydownListenerCapture
                }), Le.keydownHandlerAdded = !1), /^((?!chrome|android).)*safari/i.test(navigator.userAgent) ? (t.setAttribute("style", "display:none !important"), t.removeAttribute("class"), t.innerHTML = "") : t.remove(), P() && (null !== F.previousBodyPadding && (document.body.style.paddingRight = "".concat(F.previousBodyPadding, "px"), F.previousBodyPadding = null), (() => {
                    if (N(document.body, p.iosfix)) {
                        const e = parseInt(document.body.style.top, 10);
                        W(document.body, p.iosfix), document.body.style.top = "", document.body.scrollTop = -1 * e
                    }
                })(), i(document.body.children).forEach(e => {
                    e.hasAttribute("data-previous-aria-hidden") ? (e.setAttribute("aria-hidden", e.getAttribute("data-previous-aria-hidden")), e.removeAttribute("data-previous-aria-hidden")) : e.removeAttribute("aria-hidden")
                })), W([document.documentElement, document.body], [p.shown, p["height-auto"], p["no-backdrop"], p["toast-shown"]])
            }

            function st(e) {
                const t = y();
                if (!t) return;
                e = at(e);
                const i = he.innerParams.get(this);
                if (!i || N(t, i.hideClass.popup)) return;
                const n = ot.swalPromiseResolve.get(this);
                W(t, i.showClass.popup), q(t, i.hideClass.popup);
                const o = m();
                W(o, i.showClass.backdrop), q(o, i.hideClass.backdrop), lt(this, t, i), n(e)
            }
            const at = e => void 0 === e ? {
                    isConfirmed: !1,
                    isDenied: !1,
                    isDismissed: !0
                } : Object.assign({
                    isConfirmed: !1,
                    isDenied: !1,
                    isDismissed: !1
                }, e),
                lt = (e, t, i) => {
                    const n = m(),
                        o = le && J(t);
                    "function" == typeof i.willClose && i.willClose(t), o ? ct(e, t, n, i.returnFocus, i.didClose) : rt(e, n, i.returnFocus, i.didClose)
                },
                ct = (e, t, i, n, o) => {
                    Le.swalCloseEventFinishedCallback = rt.bind(null, e, i, n, o), t.addEventListener(le, (function(e) {
                        e.target === t && (Le.swalCloseEventFinishedCallback(), delete Le.swalCloseEventFinishedCallback)
                    }))
                },
                ut = (e, t) => {
                    setTimeout(() => {
                        "function" == typeof t && t.bind(e.params)(), e._destroy()
                    })
                };

            function dt(e, t, i) {
                const n = he.domCache.get(e);
                t.forEach(e => {
                    n[e].disabled = i
                })
            }

            function ht(e, t) {
                if (!e) return !1;
                if ("radio" === e.type) {
                    const i = e.parentNode.parentNode.querySelectorAll("input");
                    for (let e = 0; e < i.length; e++) i[e].disabled = t
                } else e.disabled = t
            }
            class pt {
                constructor(e, t) {
                    this.callback = e, this.remaining = t, this.running = !1, this.start()
                }
                start() {
                    return this.running || (this.running = !0, this.started = new Date, this.id = setTimeout(this.callback, this.remaining)), this.remaining
                }
                stop() {
                    return this.running && (this.running = !1, clearTimeout(this.id), this.remaining -= new Date - this.started), this.remaining
                }
                increase(e) {
                    const t = this.running;
                    return t && this.stop(), this.remaining += e, t && this.start(), this.remaining
                }
                getTimerLeft() {
                    return this.running && (this.stop(), this.start()), this.remaining
                }
                isRunning() {
                    return this.running
                }
            }
            var ft = {
                email: (e, t) => /^[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9-]{2,24}$/.test(e) ? Promise.resolve() : Promise.resolve(t || "Invalid email address"),
                url: (e, t) => /^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\.[a-z]{2,63}\b([-a-zA-Z0-9@:%_+.~#?&/=]*)$/.test(e) ? Promise.resolve() : Promise.resolve(t || "Invalid URL")
            };

            function mt(e) {
                ! function(e) {
                    e.inputValidator || Object.keys(ft).forEach(t => {
                        e.input === t && (e.inputValidator = ft[t])
                    })
                }(e), e.showLoaderOnConfirm && !e.preConfirm && n("showLoaderOnConfirm is set to true, but preConfirm is not defined.\nshowLoaderOnConfirm should be used together with preConfirm, see usage example:\nhttps://sweetalert2.github.io/#ajax-request"),
                    function(e) {
                        (!e.target || "string" == typeof e.target && !document.querySelector(e.target) || "string" != typeof e.target && !e.target.appendChild) && (n('Target parameter is not valid, defaulting to "body"'), e.target = "body")
                    }(e), "string" == typeof e.title && (e.title = e.title.split("\n").join("<br />")), oe(e)
            }
            const gt = ["swal-title", "swal-html", "swal-footer"],
                vt = e => {
                    const t = {};
                    return i(e.querySelectorAll("swal-param")).forEach(e => {
                        kt(e, ["name", "value"]);
                        const i = e.getAttribute("name");
                        let n = e.getAttribute("value");
                        "boolean" == typeof Re[i] && "false" === n && (n = !1), "object" == typeof Re[i] && (n = JSON.parse(n)), t[i] = n
                    }), t
                },
                yt = e => {
                    const n = {};
                    return i(e.querySelectorAll("swal-button")).forEach(e => {
                        kt(e, ["type", "color", "aria-label"]);
                        const i = e.getAttribute("type");
                        n["".concat(i, "ButtonText")] = e.innerHTML, n["show".concat(t(i), "Button")] = !0, e.hasAttribute("color") && (n["".concat(i, "ButtonColor")] = e.getAttribute("color")), e.hasAttribute("aria-label") && (n["".concat(i, "ButtonAriaLabel")] = e.getAttribute("aria-label"))
                    }), n
                },
                wt = e => {
                    const t = {},
                        i = e.querySelector("swal-image");
                    return i && (kt(i, ["src", "width", "height", "alt"]), i.hasAttribute("src") && (t.imageUrl = i.getAttribute("src")), i.hasAttribute("width") && (t.imageWidth = i.getAttribute("width")), i.hasAttribute("height") && (t.imageHeight = i.getAttribute("height")), i.hasAttribute("alt") && (t.imageAlt = i.getAttribute("alt"))), t
                },
                bt = e => {
                    const t = {},
                        i = e.querySelector("swal-icon");
                    return i && (kt(i, ["type", "color"]), i.hasAttribute("type") && (t.icon = i.getAttribute("type")), i.hasAttribute("color") && (t.iconColor = i.getAttribute("color")), t.iconHtml = i.innerHTML), t
                },
                _t = e => {
                    const t = {},
                        n = e.querySelector("swal-input");
                    n && (kt(n, ["type", "label", "placeholder", "value"]), t.input = n.getAttribute("type") || "text", n.hasAttribute("label") && (t.inputLabel = n.getAttribute("label")), n.hasAttribute("placeholder") && (t.inputPlaceholder = n.getAttribute("placeholder")), n.hasAttribute("value") && (t.inputValue = n.getAttribute("value")));
                    const o = e.querySelectorAll("swal-input-option");
                    return o.length && (t.inputOptions = {}, i(o).forEach(e => {
                        kt(e, ["value"]);
                        const i = e.getAttribute("value"),
                            n = e.innerHTML;
                        t.inputOptions[i] = n
                    })), t
                },
                xt = (e, t) => {
                    const i = {};
                    for (const n in t) {
                        const o = t[n],
                            r = e.querySelector(o);
                        r && (kt(r, []), i[o.replace(/^swal-/, "")] = r.innerHTML.trim())
                    }
                    return i
                },
                Ct = e => {
                    const t = gt.concat(["swal-param", "swal-button", "swal-image", "swal-icon", "swal-input", "swal-input-option"]);
                    i(e.children).forEach(e => {
                        const i = e.tagName.toLowerCase(); - 1 === t.indexOf(i) && n("Unrecognized element <".concat(i, ">"))
                    })
                },
                kt = (e, t) => {
                    i(e.attributes).forEach(i => {
                        -1 === t.indexOf(i.name) && n(['Unrecognized attribute "'.concat(i.name, '" on <').concat(e.tagName.toLowerCase(), ">."), "".concat(t.length ? "Allowed attributes are: ".concat(t.join(", ")) : "To set the value, use HTML within the element.")])
                    })
                },
                $t = e => {
                    const t = m(),
                        n = y();
                    "function" == typeof e.willOpen && e.willOpen(n);
                    const o = window.getComputedStyle(document.body).overflowY;
                    At(t, n, e), setTimeout(() => {
                        Et(t, n)
                    }, 10), P() && (St(t, e.scrollbarPadding, o), i(document.body.children).forEach(e => {
                        e === m() || e.contains(m()) || (e.hasAttribute("aria-hidden") && e.setAttribute("data-previous-aria-hidden", e.getAttribute("aria-hidden")), e.setAttribute("aria-hidden", "true"))
                    })), z() || Le.previousActiveElement || (Le.previousActiveElement = document.activeElement), "function" == typeof e.didOpen && setTimeout(() => e.didOpen(n)), W(t, p["no-transition"])
                },
                Tt = e => {
                    const t = y();
                    if (e.target !== t) return;
                    const i = m();
                    t.removeEventListener(le, Tt), i.style.overflowY = "auto"
                },
                Et = (e, t) => {
                    le && J(t) ? (e.style.overflowY = "hidden", t.addEventListener(le, Tt)) : e.style.overflowY = "auto"
                },
                St = (e, t, i) => {
                    (() => {
                        if ((/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream || "MacIntel" === navigator.platform && navigator.maxTouchPoints > 1) && !N(document.body, p.iosfix)) {
                            const e = document.body.scrollTop;
                            document.body.style.top = "".concat(-1 * e, "px"), q(document.body, p.iosfix), et(), Je()
                        }
                    })(), t && "hidden" !== i && Ze(), setTimeout(() => {
                        e.scrollTop = 0
                    })
                },
                At = (e, t, i) => {
                    q(e, i.showClass.backdrop), t.style.setProperty("opacity", "0", "important"), K(t, "grid"), setTimeout(() => {
                        q(t, i.showClass.popup), t.style.removeProperty("opacity")
                    }, 10), q([document.documentElement, document.body], p.shown), i.heightAuto && i.backdrop && !i.toast && q([document.documentElement, document.body], p["height-auto"])
                },
                Dt = e => e.checked ? 1 : 0,
                Ot = e => e.checked ? e.value : null,
                It = e => e.files.length ? null !== e.getAttribute("multiple") ? e.files : e.files[0] : null,
                Lt = (e, t) => {
                    const i = y(),
                        n = e => zt[t.input](i, Ft(e), t);
                    l(t.inputOptions) || u(t.inputOptions) ? (Oe($()), c(t.inputOptions).then(t => {
                        e.hideLoading(), n(t)
                    })) : "object" == typeof t.inputOptions ? n(t.inputOptions) : o("Unexpected type of inputOptions! Expected object, Map or Promise, got ".concat(typeof t.inputOptions))
                },
                Pt = (e, t) => {
                    const i = e.getInput();
                    Y(i), c(t.inputValue).then(n => {
                        i.value = "number" === t.input ? parseFloat(n) || 0 : "".concat(n), K(i), i.focus(), e.hideLoading()
                    }).catch(t => {
                        o("Error in inputValue promise: ".concat(t)), i.value = "", K(i), i.focus(), e.hideLoading()
                    })
                },
                zt = {
                    select: (e, t, i) => {
                        const n = U(e, p.select),
                            o = (e, t, n) => {
                                const o = document.createElement("option");
                                o.value = n, M(o, t), o.selected = Mt(n, i.inputValue), e.appendChild(o)
                            };
                        t.forEach(e => {
                            const t = e[0],
                                i = e[1];
                            if (Array.isArray(i)) {
                                const e = document.createElement("optgroup");
                                e.label = t, e.disabled = !1, n.appendChild(e), i.forEach(t => o(e, t[1], t[0]))
                            } else o(n, i, t)
                        }), n.focus()
                    },
                    radio: (e, t, i) => {
                        const n = U(e, p.radio);
                        t.forEach(e => {
                            const t = e[0],
                                o = e[1],
                                r = document.createElement("input"),
                                s = document.createElement("label");
                            r.type = "radio", r.name = p.radio, r.value = t, Mt(t, i.inputValue) && (r.checked = !0);
                            const a = document.createElement("span");
                            M(a, o), a.className = p.label, s.appendChild(r), s.appendChild(a), n.appendChild(s)
                        });
                        const o = n.querySelectorAll("input");
                        o.length && o[0].focus()
                    }
                },
                Ft = e => {
                    const t = [];
                    return "undefined" != typeof Map && e instanceof Map ? e.forEach((e, i) => {
                        let n = e;
                        "object" == typeof n && (n = Ft(n)), t.push([i, n])
                    }) : Object.keys(e).forEach(i => {
                        let n = e[i];
                        "object" == typeof n && (n = Ft(n)), t.push([i, n])
                    }), t
                },
                Mt = (e, t) => t && t.toString() === e.toString(),
                Nt = (e, t, i) => {
                    const n = ((e, t) => {
                        const i = e.getInput();
                        if (!i) return null;
                        switch (t.input) {
                            case "checkbox":
                                return Dt(i);
                            case "radio":
                                return Ot(i);
                            case "file":
                                return It(i);
                            default:
                                return t.inputAutoTrim ? i.value.trim() : i.value
                        }
                    })(e, t);
                    t.inputValidator ? jt(e, t, n, i) : e.getInput().checkValidity() ? "deny" === i ? Rt(e, t, n) : Bt(e, t, n) : (e.enableButtons(), e.showValidationMessage(t.validationMessage))
                },
                jt = (e, t, i, n) => {
                    e.disableInput(), Promise.resolve().then(() => c(t.inputValidator(i, t.validationMessage))).then(o => {
                        e.enableButtons(), e.enableInput(), o ? e.showValidationMessage(o) : "deny" === n ? Rt(e, t, i) : Bt(e, t, i)
                    })
                },
                Rt = (e, t, i) => {
                    t.showLoaderOnDeny && Oe(T()), t.preDeny ? Promise.resolve().then(() => c(t.preDeny(i, t.validationMessage))).then(t => {
                        !1 === t ? e.hideLoading() : e.closePopup({
                            isDenied: !0,
                            value: void 0 === t ? i : t
                        })
                    }) : e.closePopup({
                        isDenied: !0,
                        value: i
                    })
                },
                Ht = (e, t) => {
                    e.closePopup({
                        isConfirmed: !0,
                        value: t
                    })
                },
                Bt = (e, t, i) => {
                    t.showLoaderOnConfirm && Oe(), t.preConfirm ? (e.resetValidationMessage(), Promise.resolve().then(() => c(t.preConfirm(i, t.validationMessage))).then(t => {
                        G(k()) || !1 === t ? e.hideLoading() : Ht(e, void 0 === t ? i : t)
                    })) : Ht(e, i)
                },
                qt = (e, t, i) => {
                    const n = L();
                    if (n.length) return (t += i) === n.length ? t = 0 : -1 === t && (t = n.length - 1), n[t].focus();
                    y().focus()
                },
                Wt = ["ArrowRight", "ArrowDown"],
                Ut = ["ArrowLeft", "ArrowUp"],
                Vt = (e, t, i) => {
                    const n = he.innerParams.get(e);
                    n && (n.stopKeydownPropagation && t.stopPropagation(), "Enter" === t.key ? Kt(e, t, n) : "Tab" === t.key ? Yt(t, n) : [...Wt, ...Ut].includes(t.key) ? Qt(t.key) : "Escape" === t.key && Xt(t, n, i))
                },
                Kt = (e, t, i) => {
                    if (!t.isComposing && t.target && e.getInput() && t.target.outerHTML === e.getInput().outerHTML) {
                        if (["textarea", "file"].includes(i.input)) return;
                        De(), t.preventDefault()
                    }
                },
                Yt = (e, t) => {
                    const i = e.target,
                        n = L();
                    let o = -1;
                    for (let e = 0; e < n.length; e++)
                        if (i === n[e]) {
                            o = e;
                            break
                        }
                    e.shiftKey ? qt(0, o, -1) : qt(0, o, 1), e.stopPropagation(), e.preventDefault()
                },
                Qt = e => {
                    if (![$(), T(), S()].includes(document.activeElement)) return;
                    const t = Wt.includes(e) ? "nextElementSibling" : "previousElementSibling",
                        i = document.activeElement[t];
                    i && i.focus()
                },
                Xt = (t, i, n) => {
                    a(i.allowEscapeKey) && (t.preventDefault(), n(e.esc))
                },
                Gt = (t, i, n) => {
                    i.popup.onclick = () => {
                        const i = he.innerParams.get(t);
                        i.showConfirmButton || i.showDenyButton || i.showCancelButton || i.showCloseButton || i.timer || i.input || n(e.close)
                    }
                };
            let Zt = !1;
            const Jt = e => {
                    e.popup.onmousedown = () => {
                        e.container.onmouseup = function(t) {
                            e.container.onmouseup = void 0, t.target === e.container && (Zt = !0)
                        }
                    }
                },
                ei = e => {
                    e.container.onmousedown = () => {
                        e.popup.onmouseup = function(t) {
                            e.popup.onmouseup = void 0, (t.target === e.popup || e.popup.contains(t.target)) && (Zt = !0)
                        }
                    }
                },
                ti = (t, i, n) => {
                    i.container.onclick = o => {
                        const r = he.innerParams.get(t);
                        Zt ? Zt = !1 : o.target === i.container && a(r.allowOutsideClick) && n(e.backdrop)
                    }
                },
                ii = (e, t) => {
                    const i = (e => {
                            const t = "string" == typeof e.template ? document.querySelector(e.template) : e.template;
                            if (!t) return {};
                            const i = t.content;
                            return Ct(i), Object.assign(vt(i), yt(i), wt(i), bt(i), _t(i), xt(i, gt))
                        })(e),
                        n = Object.assign({}, Re, t, i, e);
                    return n.showClass = Object.assign({}, Re.showClass, n.showClass), n.hideClass = Object.assign({}, Re.hideClass, n.hideClass), n
                },
                ni = (t, i, n) => new Promise(o => {
                    const r = e => {
                        t.closePopup({
                            isDismissed: !0,
                            dismiss: e
                        })
                    };
                    ot.swalPromiseResolve.set(t, o), i.confirmButton.onclick = () => ((e, t) => {
                        e.disableButtons(), t.input ? Nt(e, t, "confirm") : Bt(e, t, !0)
                    })(t, n), i.denyButton.onclick = () => ((e, t) => {
                        e.disableButtons(), t.returnInputValueOnDeny ? Nt(e, t, "deny") : Rt(e, t, !1)
                    })(t, n), i.cancelButton.onclick = () => ((t, i) => {
                        t.disableButtons(), i(e.cancel)
                    })(t, r), i.closeButton.onclick = () => r(e.close), ((e, t, i) => {
                        he.innerParams.get(e).toast ? Gt(e, t, i) : (Jt(t), ei(t), ti(e, t, i))
                    })(t, i, r), ((e, t, i, n) => {
                        t.keydownTarget && t.keydownHandlerAdded && (t.keydownTarget.removeEventListener("keydown", t.keydownHandler, {
                            capture: t.keydownListenerCapture
                        }), t.keydownHandlerAdded = !1), i.toast || (t.keydownHandler = t => Vt(e, t, n), t.keydownTarget = i.keydownListenerCapture ? window : y(), t.keydownListenerCapture = i.keydownListenerCapture, t.keydownTarget.addEventListener("keydown", t.keydownHandler, {
                            capture: t.keydownListenerCapture
                        }), t.keydownHandlerAdded = !0)
                    })(t, Le, n, r), ((e, t) => {
                        "select" === t.input || "radio" === t.input ? Lt(e, t) : ["text", "email", "number", "tel", "textarea"].includes(t.input) && (l(t.inputValue) || u(t.inputValue)) && (Oe($()), Pt(e, t))
                    })(t, n), $t(n), ri(Le, n, r), si(i, n), setTimeout(() => {
                        i.container.scrollTop = 0
                    })
                }),
                oi = e => {
                    const t = {
                        popup: y(),
                        container: m(),
                        actions: A(),
                        confirmButton: $(),
                        denyButton: T(),
                        cancelButton: S(),
                        loader: E(),
                        closeButton: I(),
                        validationMessage: k(),
                        progressSteps: C()
                    };
                    return he.domCache.set(e, t), t
                },
                ri = (e, t, i) => {
                    const n = O();
                    Y(n), t.timer && (e.timeout = new pt(() => {
                        i("timer"), delete e.timeout
                    }, t.timer), t.timerProgressBar && (K(n), setTimeout(() => {
                        e.timeout && e.timeout.running && ee(t.timer)
                    })))
                },
                si = (e, t) => {
                    if (!t.toast) return a(t.allowEnterKey) ? void(ai(e, t) || qt(0, -1, 1)) : li()
                },
                ai = (e, t) => t.focusDeny && G(e.denyButton) ? (e.denyButton.focus(), !0) : t.focusCancel && G(e.cancelButton) ? (e.cancelButton.focus(), !0) : !(!t.focusConfirm || !G(e.confirmButton) || (e.confirmButton.focus(), 0)),
                li = () => {
                    document.activeElement && "function" == typeof document.activeElement.blur && document.activeElement.blur()
                },
                ci = e => {
                    delete e.params, delete Le.keydownHandler, delete Le.keydownTarget, ui(he), ui(ot)
                },
                ui = e => {
                    for (const t in e) e[t] = new WeakMap
                };
            var di = Object.freeze({
                hideLoading: Xe,
                disableLoading: Xe,
                getInput: function(e) {
                    const t = he.innerParams.get(e || this),
                        i = he.domCache.get(e || this);
                    return i ? R(i.popup, t.input) : null
                },
                close: st,
                closePopup: st,
                closeModal: st,
                closeToast: st,
                enableButtons: function() {
                    dt(this, ["confirmButton", "denyButton", "cancelButton"], !1)
                },
                disableButtons: function() {
                    dt(this, ["confirmButton", "denyButton", "cancelButton"], !0)
                },
                enableInput: function() {
                    return ht(this.getInput(), !1)
                },
                disableInput: function() {
                    return ht(this.getInput(), !0)
                },
                showValidationMessage: function(e) {
                    const t = he.domCache.get(this),
                        i = he.innerParams.get(this);
                    M(t.validationMessage, e), t.validationMessage.className = p["validation-message"], i.customClass && i.customClass.validationMessage && q(t.validationMessage, i.customClass.validationMessage), K(t.validationMessage);
                    const n = this.getInput();
                    n && (n.setAttribute("aria-invalid", !0), n.setAttribute("aria-describedBy", p["validation-message"]), H(n), q(n, p.inputerror))
                },
                resetValidationMessage: function() {
                    const e = he.domCache.get(this);
                    e.validationMessage && Y(e.validationMessage);
                    const t = this.getInput();
                    t && (t.removeAttribute("aria-invalid"), t.removeAttribute("aria-describedBy"), W(t, p.inputerror))
                },
                getProgressSteps: function() {
                    return he.domCache.get(this).progressSteps
                },
                _main: function(e, t = {}) {
                    (e => {
                        for (const t in e) Ve(t), e.toast && Ke(t), Ye(t)
                    })(Object.assign({}, t, e)), Le.currentInstance && Le.currentInstance._destroy(), Le.currentInstance = this;
                    const i = ii(e, t);
                    mt(i), Object.freeze(i), Le.timeout && (Le.timeout.stop(), delete Le.timeout), clearTimeout(Le.restoreFocusTimeout);
                    const n = oi(this);
                    return Ae(this, i), he.innerParams.set(this, i), ni(this, n, i)
                },
                update: function(e) {
                    const t = y(),
                        i = he.innerParams.get(this);
                    if (!t || N(t, i.hideClass.popup)) return n("You're trying to update the closed or closing popup, that won't work. Use the update() method in preConfirm parameter or show a new popup.");
                    const o = {};
                    Object.keys(e).forEach(t => {
                        fi.isUpdatableParameter(t) ? o[t] = e[t] : n('Invalid parameter to update: "'.concat(t, '". Updatable params are listed here: https://github.com/sweetalert2/sweetalert2/blob/master/src/utils/params.js\n\nIf you think this parameter should be updatable, request it here: https://github.com/sweetalert2/sweetalert2/issues/new?template=02_feature_request.md'))
                    });
                    const r = Object.assign({}, i, o);
                    Ae(this, r), he.innerParams.set(this, r), Object.defineProperties(this, {
                        params: {
                            value: Object.assign({}, this.params, e),
                            writable: !1,
                            enumerable: !0
                        }
                    })
                },
                _destroy: function() {
                    const e = he.domCache.get(this),
                        t = he.innerParams.get(this);
                    t && (e.popup && Le.swalCloseEventFinishedCallback && (Le.swalCloseEventFinishedCallback(), delete Le.swalCloseEventFinishedCallback), Le.deferDisposalTimer && (clearTimeout(Le.deferDisposalTimer), delete Le.deferDisposalTimer), "function" == typeof t.didDestroy && t.didDestroy(), ci(this))
                }
            });
            let hi;
            class pi {
                constructor(...e) {
                    if ("undefined" == typeof window) return;
                    hi = this;
                    const t = Object.freeze(this.constructor.argsToParams(e));
                    Object.defineProperties(this, {
                        params: {
                            value: t,
                            writable: !1,
                            enumerable: !0,
                            configurable: !0
                        }
                    });
                    const i = this._main(this.params);
                    he.promise.set(this, i)
                }
                then(e) {
                    return he.promise.get(this).then(e)
                } finally(e) {
                    return he.promise.get(this).finally(e)
                }
            }
            Object.assign(pi.prototype, di), Object.assign(pi, Qe), Object.keys(di).forEach(e => {
                pi[e] = function(...t) {
                    if (hi) return hi[e](...t)
                }
            }), pi.DismissReason = e, pi.version = "11.0.14";
            const fi = pi;
            return fi.default = fi, fi
        }(), void 0 !== this && this.Sweetalert2 && (this.swal = this.sweetAlert = this.Swal = this.SweetAlert = this.Sweetalert2), "undefined" != typeof document && function(e, t) {
            var i = e.createElement("style");
            if (e.getElementsByTagName("head")[0].appendChild(i), i.styleSheet) i.styleSheet.disabled || (i.styleSheet.cssText = t);
            else try {
                i.innerHTML = t
            } catch (e) {
                i.innerText = t
            }
        }(document, '.swal2-popup.swal2-toast{box-sizing:border-box;grid-column:1/4!important;grid-row:1/4!important;grid-template-columns:1fr 99fr 1fr;padding:1em;overflow-y:hidden;background:#fff;box-shadow:0 0 .625em #d9d9d9}.swal2-popup.swal2-toast>*{grid-column:2}.swal2-popup.swal2-toast .swal2-title{margin:1em;padding:0;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-loading{justify-content:center}.swal2-popup.swal2-toast .swal2-input{height:2em;margin:.5em;font-size:1em}.swal2-popup.swal2-toast .swal2-validation-message{font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{grid-column:3/3;grid-row:1/99;align-self:center;width:.8em;height:.8em;margin:0;font-size:2em}.swal2-popup.swal2-toast .swal2-html-container{margin:1em;padding:0;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-html-container:empty{padding:0}.swal2-popup.swal2-toast .swal2-loader{grid-column:1;grid-row:1/99;align-self:center;width:2em;height:2em;margin:.25em}.swal2-popup.swal2-toast .swal2-icon{grid-column:1;grid-row:1/99;align-self:center;width:2em;min-width:2em;height:2em;margin:0 .5em 0 0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:700}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{justify-content:flex-start;height:auto;margin:0;margin-top:.3125em;padding:0}.swal2-popup.swal2-toast .swal2-styled{margin:.25em .5em;padding:.4em .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(100,150,200,.5)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.8em;left:-.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-toast-animate-success-line-tip .75s;animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-toast-animate-success-line-long .75s;animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:swal2-toast-show .5s;animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:swal2-toast-hide .1s forwards;animation:swal2-toast-hide .1s forwards}.swal2-container{display:grid;position:fixed;z-index:1060;top:0;right:0;bottom:0;left:0;box-sizing:border-box;grid-template-areas:"top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end" "gap gap gap";grid-template-rows:auto auto auto .625em;height:100%;padding:.625em .625em 0;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}.swal2-container::after{content:"";grid-column:1/4;grid-row:4;height:.625em}.swal2-container.swal2-backdrop-show,.swal2-container.swal2-noanimation{background:rgba(0,0,0,.4)}.swal2-container.swal2-backdrop-hide{background:0 0!important}.swal2-container.swal2-bottom-start,.swal2-container.swal2-center-start,.swal2-container.swal2-top-start{grid-template-columns:minmax(0,1fr) auto auto}.swal2-container.swal2-bottom,.swal2-container.swal2-center,.swal2-container.swal2-top{grid-template-columns:auto minmax(0,1fr) auto}.swal2-container.swal2-bottom-end,.swal2-container.swal2-center-end,.swal2-container.swal2-top-end{grid-template-columns:auto auto minmax(0,1fr)}.swal2-container.swal2-top-start>.swal2-popup{align-self:start}.swal2-container.swal2-top>.swal2-popup{grid-column:2;align-self:start;justify-self:center}.swal2-container.swal2-top-end>.swal2-popup,.swal2-container.swal2-top-right>.swal2-popup{grid-column:3;align-self:start;justify-self:end}.swal2-container.swal2-center-left>.swal2-popup,.swal2-container.swal2-center-start>.swal2-popup{grid-row:2;align-self:center}.swal2-container.swal2-center>.swal2-popup{grid-column:2;grid-row:2;align-self:center;justify-self:center}.swal2-container.swal2-center-end>.swal2-popup,.swal2-container.swal2-center-right>.swal2-popup{grid-column:3;grid-row:2;align-self:center;justify-self:end}.swal2-container.swal2-bottom-left>.swal2-popup,.swal2-container.swal2-bottom-start>.swal2-popup{grid-column:1;grid-row:3;align-self:end}.swal2-container.swal2-bottom>.swal2-popup{grid-column:2;grid-row:3;justify-self:center;align-self:end}.swal2-container.swal2-bottom-end>.swal2-popup,.swal2-container.swal2-bottom-right>.swal2-popup{grid-column:3;grid-row:3;align-self:end;justify-self:end}.swal2-container.swal2-grow-fullscreen>.swal2-popup,.swal2-container.swal2-grow-row>.swal2-popup{grid-column:1/4;width:100%}.swal2-container.swal2-grow-column>.swal2-popup,.swal2-container.swal2-grow-fullscreen>.swal2-popup{grid-row:1/4;align-self:stretch}.swal2-container.swal2-no-transition{transition:none!important}.swal2-popup{display:none;position:relative;box-sizing:border-box;width:32em;max-width:100%;padding:0 0 1.25em;border:none;border-radius:5px;background:#fff;font-family:inherit;font-size:1rem}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-title{position:relative;max-width:100%;margin:0;padding:.8em 1em 0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-actions{display:flex;z-index:1;box-sizing:border-box;flex-wrap:wrap;align-items:center;justify-content:center;width:100%;margin:1.25em auto 0;padding:0}.swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-loader{display:none;align-items:center;justify-content:center;width:2.2em;height:2.2em;margin:0 1.875em;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border-width:.25em;border-style:solid;border-radius:100%;border-color:#2778c4 transparent #2778c4 transparent}.swal2-styled{margin:.3125em;padding:.625em 1.1em;transition:box-shadow .1s;box-shadow:0 0 0 3px transparent;font-weight:500}.swal2-styled:not([disabled]){cursor:pointer}.swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#7367f0;color:#fff;font-size:1em}.swal2-styled.swal2-confirm:focus{box-shadow:0 0 0 3px rgba(115,103,240,.5)}.swal2-styled.swal2-deny{border:0;border-radius:.25em;background:initial;background-color:#ea5455;color:#fff;font-size:1em}.swal2-styled.swal2-deny:focus{box-shadow:0 0 0 3px rgba(234,84,85,.5)}.swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#6e7d88;color:#fff;font-size:1em}.swal2-styled.swal2-cancel:focus{box-shadow:0 0 0 3px rgba(110,125,136,.5)}.swal2-styled.swal2-default-outline:focus{box-shadow:0 0 0 3px rgba(100,150,200,.5)}.swal2-styled:focus{outline:0}.swal2-styled::-moz-focus-inner{border:0}.swal2-footer{justify-content:center;margin:1em 0 0;padding:1em 1em 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;grid-column:auto!important;height:.25em;overflow:hidden;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.swal2-timer-progress-bar{width:100%;height:.25em;background:rgba(0,0,0,.2)}.swal2-image{max-width:100%;margin:2em auto 1em}.swal2-close{z-index:2;align-items:center;justify-content:center;width:1.2em;height:1.2em;margin-top:0;margin-right:0;margin-bottom:-1.2em;padding:0;overflow:hidden;transition:color .1s,box-shadow .1s;border:none;border-radius:5px;background:0 0;color:#ccc;font-family:serif;font-family:monospace;font-size:2.5em;cursor:pointer;justify-self:end}.swal2-close:hover{transform:none;background:0 0;color:#f27474}.swal2-close:focus{outline:0;box-shadow:inset 0 0 0 3px rgba(100,150,200,.5)}.swal2-close::-moz-focus-inner{border:0}.swal2-html-container{z-index:1;justify-content:center;margin:0;padding:1em 1.6em .3em;color:#545454;font-size:1.125em;font-weight:400;line-height:normal;text-align:center;word-wrap:break-word;word-break:break-word}.swal2-checkbox,.swal2-file,.swal2-input,.swal2-radio,.swal2-select,.swal2-textarea{margin:1em 2em 0}.swal2-file,.swal2-input,.swal2-textarea{box-sizing:border-box;width:auto;transition:border-color .1s,box-shadow .1s;border:1px solid #d9d9d9;border-radius:.1875em;background:inherit;box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px transparent;color:inherit;font-size:1.125em}.swal2-file.swal2-inputerror,.swal2-input.swal2-inputerror,.swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-file:focus,.swal2-input:focus,.swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(100,150,200,.5)}.swal2-file::-moz-placeholder,.swal2-input::-moz-placeholder,.swal2-textarea::-moz-placeholder{color:#ccc}.swal2-file:-ms-input-placeholder,.swal2-input:-ms-input-placeholder,.swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-file::placeholder,.swal2-input::placeholder,.swal2-textarea::placeholder{color:#ccc}.swal2-range{margin:1em 2em 0;background:#fff}.swal2-range input{width:80%}.swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}.swal2-range input,.swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}.swal2-input{height:2.625em;padding:0 .75em}.swal2-input[type=number]{max-width:10em}.swal2-file{width:75%;margin-right:auto;margin-left:auto;background:inherit;font-size:1.125em}.swal2-textarea{height:6.75em;padding:.75em}.swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:inherit;color:inherit;font-size:1.125em}.swal2-checkbox,.swal2-radio{align-items:center;justify-content:center;background:#fff;color:inherit}.swal2-checkbox label,.swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-checkbox input,.swal2-radio input{flex-shrink:0;margin:0 .4em}.swal2-input-label{display:flex;justify-content:center;margin:1em auto 0}.swal2-validation-message{align-items:center;justify-content:center;margin:1em 0 0;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}.swal2-validation-message::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}.swal2-icon{position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:2.5em auto .6em;border:.25em solid transparent;border-radius:50%;border-color:#000;font-family:inherit;line-height:5em;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474;color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}.swal2-icon.swal2-error.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86;color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-.25em;left:-.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-progress-steps{flex-wrap:wrap;align-items:center;max-width:100%;margin:1.25em auto;padding:0;background:inherit;font-weight:600}.swal2-progress-steps li{display:inline-block;position:relative}.swal2-progress-steps .swal2-progress-step{z-index:20;flex-shrink:0;width:2em;height:2em;border-radius:2em;background:#2778c4;color:#fff;line-height:2em;text-align:center}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#2778c4}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}.swal2-progress-steps .swal2-progress-step-line{z-index:10;flex-shrink:0;width:2.5em;height:.4em;margin:0 -1px;background:#2778c4}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{margin-right:initial;margin-left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@-webkit-keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@-webkit-keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@-webkit-keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@-webkit-keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-container{background-color:transparent!important;pointer-events:none}body.swal2-no-backdrop .swal2-container .swal2-popup{pointer-events:all}body.swal2-no-backdrop .swal2-container .swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static!important}}body.swal2-toast-shown .swal2-container{box-sizing:border-box;width:360px;max-width:100%;background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}')
    },
    WiRR: function(e, t) {
        // if (1 == document.querySelector('meta[name="is_auth"]').getAttribute("content")) {
        //     var i = function() {
        //             return document.querySelector('meta[name="nafezly-title"]').getAttribute("content")
        //         },
        //         n = function() {
        //             $.ajax({
        //                 method: "GET",
        //                 url: "/notifications/get-ajax-notifications-interval",
        //                 success: function(e, t, n) {
        //                     var r;
        //                     o.badge(e.notifications.response.count_unseen_notifications + e.messages.response.count_unseen_messages), (r = e.notifications.response).count_unseen_notifications > 0 ? ($(".count_unseen_notifications").fadeIn(0), $(".count_unseen_notifications").text(r.count_unseen_notifications)) : $(".count_unseen_notifications").fadeOut(0), $(".notifications-notifications-area").empty(), $(".notifications-notifications-area").append(r.response), $(".notifications-notifications-area a").on("click", (function() {
        //                             window.location.href = $(this).attr("href")
        //                         })),
        //                         function(e) {
        //                             e.count_unseen_messages > 0 ? ($(".count_unseen_messages").fadeIn(0), $(".count_unseen_messages").text(e.count_unseen_messages)) : $(".count_unseen_messages").fadeOut(0), $(".notifications-messages-area").empty(), $(".notifications-messages-area").append(e.response), $(".notifications-messages-area a").on("click", (function() {
        //                                 window.location.href = $(this).attr("href")
        //                             }))
        //                         }(e.messages.response), e.alert && $("#notification_sound").trigger("play"), e.notifications.response.count_unseen_notifications + e.messages.response.count_unseen_messages > 0 ? $("title").text("(" + parseInt(e.notifications.response.count_unseen_notifications + e.messages.response.count_unseen_messages) + ")" + i()) : $("title").text(i())
        //                 }
        //             })
        //         };
        //     $(".report-nafezly").on("click", (function() {
        //         $("#hidden_report_type").val($(this).data("type")), $("#hidden_report_type_id").val($(this).data("type_id"))
        //     })), $(".post-nafezly-report").on("click", (function() {
        //         var e = $("#hidden_report_type").val(),
        //             t = $("#hidden_report_type_id").val(),
        //             i = $(".hidden_report_report_type:checked").val(),
        //             n = $("#hidden_report_reason").val(),
        //             o = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        //         $.ajax({
        //             method: "POST",
        //             url: "/report/create",
        //             data: {
        //                 type: e,
        //                 type_id: t,
        //                 report_type: i,
        //                 reason: n,
        //                 _token: o
        //             }
        //         }).done((function(e) {
        //             toastr.info(e.alert), $("#hidden_report_dismiss").click()
        //         }))
        //     })), $(".seen-notifications").on("click", (function() {
        //         $.ajax({
        //             method: "GET",
        //             url: "/notifications/seen_notifications",
        //             success: function(e, t, i) {
        //                 $(".count_unseen_notifications").text("0"), $(".count_unseen_notifications").fadeOut()
        //             }
        //         })
        //     }));
        //     var o = new Favico({
        //         bgColor: "#dc0000",
        //         textColor: "#fff",
        //         animation: "slide",
        //         fontStyle: "bold",
        //         fontFamily: "sans",
        //         type: "circle"
        //     });
        //     window.focused = 25e3, window.onfocus = function() {
        //             n(), "function" == typeof get_new_messages && get_new_messages(), window.focused = 25e3
        //         }, window.onblur = function() {
        //             window.focused = 25e4
        //         },
        //         function e() {
        //             setTimeout((function() {
        //                 "function" == typeof get_new_messages && get_new_messages(), n(), e()
        //             }), window.focused)
        //         }(), $(document).on("click", ".deal-rating-stars i", (function() {
        //             var e = $(this).parent().attr("id");
        //             $selected = $(this), console.log($selected.data("value")), $("#rate_" + e).val($selected.data("value")), $("#" + e + " i").each((function() {
        //                 $(this).data("value") > $selected.data("value") ? ($(this).removeClass("star-active fas"), $(this).addClass("star-disactive fal")) : ($(this).removeClass("star-disactive fal"), $(this).addClass("star-active fas"))
        //             }))
        //         }))
        // }
        $(document).on("click", ".rating-reply-btn", (function() {
            $("#rating_reply_to_" + $(this).data("reply_to")).slideToggle(), $("#reply-of-" + $(this).data("reply_to")).slideToggle()
        }))
    },
    YAxq: function(e, t) {
        ! function(e, t) {
            "use strict";

            function i(i, n, r, a, l) {
                function c() {
                    C = e.devicePixelRatio > 1, r = u(r), n.delay >= 0 && setTimeout((function() {
                        d(!0)
                    }), n.delay), (n.delay < 0 || n.combined) && (a.e = function(e, t) {
                        var o, r = 0;
                        return function(s, a) {
                            function l() {
                                r = +new Date, t.call(i, s)
                            }
                            var c = +new Date - r;
                            o && clearTimeout(o), c > e || !n.enableThrottle || a ? l() : o = setTimeout(l, e - c)
                        }
                    }(n.throttle, (function(e) {
                        "resize" === e.type && (_ = x = -1), d(e.all)
                    })), a.a = function(e) {
                        e = u(e), r.push.apply(r, e)
                    }, a.g = function() {
                        return r = o(r).filter((function() {
                            return !o(this).data(n.loadedName)
                        }))
                    }, a.f = function(e) {
                        for (var t = 0; t < e.length; t++) {
                            var i = r.filter((function() {
                                return this === e[t]
                            }));
                            i.length && d(!1, i)
                        }
                    }, d(), o(n.appendScroll).on("scroll." + l + " resize." + l, a.e))
                }

                function u(e) {
                    for (var r = n.defaultImage, s = n.placeholder, a = n.imageBase, l = n.srcsetAttribute, c = n.loaderAttribute, u = n._f || {}, d = 0, h = (e = o(e).filter((function() {
                            var e = o(this),
                                i = g(this);
                            return !e.data(n.handledName) && (e.attr(n.attribute) || e.attr(l) || e.attr(c) || u[i] !== t)
                        })).data("plugin_" + n.name, i)).length; d < h; d++) {
                        var p = o(e[d]),
                            f = g(e[d]),
                            m = p.attr(n.imageBaseAttribute) || a;
                        f === E && m && p.attr(l) && p.attr(l, v(p.attr(l), m)), u[f] === t || p.attr(c) || p.attr(c, u[f]), f === E && r && !p.attr(S) ? p.attr(S, r) : f === E || !s || p.css(O) && "none" !== p.css(O) || p.css(O, "url('" + s + "')")
                    }
                    return e
                }

                function d(e, t) {
                    if (r.length) {
                        for (var s = t || r, a = !1, l = n.imageBase || "", c = n.srcsetAttribute, u = n.handledName, d = 0; d < s.length; d++)
                            if (e || t || p(s[d])) {
                                var f = o(s[d]),
                                    m = g(s[d]),
                                    v = f.attr(n.attribute),
                                    y = f.attr(n.imageBaseAttribute) || l,
                                    w = f.attr(n.loaderAttribute);
                                f.data(u) || n.visibleOnly && !f.is(":visible") || !((v || f.attr(c)) && (m === E && (y + v !== f.attr(S) || f.attr(c) !== f.attr(A)) || m !== E && y + v !== f.css(O)) || w) || (a = !0, f.data(u, !0), h(f, m, y, w))
                            }
                        a && (r = o(r).filter((function() {
                            return !o(this).data(u)
                        })))
                    } else n.autoDestroy && i.destroy()
                }

                function h(e, t, i, r) {
                    ++b;
                    var s = function() {
                        w("onError", e), y(), s = o.noop
                    };
                    w("beforeLoad", e);
                    var a = n.attribute,
                        l = n.srcsetAttribute,
                        c = n.sizesAttribute,
                        u = n.retinaAttribute,
                        d = n.removeAttribute,
                        h = n.loadedName,
                        p = e.attr(u);
                    if (r) {
                        var f = function() {
                            d && e.removeAttr(n.loaderAttribute), e.data(h, !0), w(k, e), setTimeout(y, 1), f = o.noop
                        };
                        e.off(T).one(T, s).one($, f), w(r, e, (function(t) {
                            t ? (e.off($), f()) : (e.off(T), s())
                        })) || e.trigger(T)
                    } else {
                        var m = o(new Image);
                        m.one(T, s).one($, (function() {
                            e.hide(), t === E ? e.attr(D, m.attr(D)).attr(A, m.attr(A)).attr(S, m.attr(S)) : e.css(O, "url('" + m.attr(S) + "')"), e[n.effect](n.effectTime), d && (e.removeAttr(a + " " + l + " " + u + " " + n.imageBaseAttribute), c !== D && e.removeAttr(c)), e.data(h, !0), w(k, e), m.remove(), y()
                        }));
                        var g = (C && p ? p : e.attr(a)) || "";
                        m.attr(D, e.attr(c)).attr(A, e.attr(l)).attr(S, g ? i + g : null), m.complete && m.trigger($)
                    }
                }

                function p(e) {
                    var t = e.getBoundingClientRect(),
                        i = n.scrollDirection,
                        o = n.threshold,
                        r = m() + o > t.top && -o < t.bottom,
                        s = f() + o > t.left && -o < t.right;
                    return "vertical" === i ? r : ("horizontal" === i || r) && s
                }

                function f() {
                    return _ >= 0 ? _ : _ = o(e).width()
                }

                function m() {
                    return x >= 0 ? x : x = o(e).height()
                }

                function g(e) {
                    return e.tagName.toLowerCase()
                }

                function v(e, t) {
                    if (t) {
                        var i = e.split(",");
                        e = "";
                        for (var n = 0, o = i.length; n < o; n++) e += t + i[n].trim() + (n !== o - 1 ? "," : "")
                    }
                    return e
                }

                function y() {
                    --b, r.length || b || w("onFinishedAll")
                }

                function w(e, t, o) {
                    return !!(e = n[e]) && (e.apply(i, [].slice.call(arguments, 1)), !0)
                }
                var b = 0,
                    _ = -1,
                    x = -1,
                    C = !1,
                    k = "afterLoad",
                    $ = "load",
                    T = "error",
                    E = "img",
                    S = "src",
                    A = "srcset",
                    D = "sizes",
                    O = "background-image";
                "event" === n.bind || s ? c() : o(e).on($ + "." + l, c)
            }

            function n(n, s) {
                var a = this,
                    l = o.extend({}, a.config, s),
                    c = {},
                    u = l.name + "-" + ++r;
                return a.config = function(e, i) {
                    return i === t ? l[e] : (l[e] = i, a)
                }, a.addItems = function(e) {
                    return c.a && c.a("string" === o.type(e) ? o(e) : e), a
                }, a.getItems = function() {
                    return c.g ? c.g() : {}
                }, a.update = function(e) {
                    return c.e && c.e({}, !e), a
                }, a.force = function(e) {
                    return c.f && c.f("string" === o.type(e) ? o(e) : e), a
                }, a.loadAll = function() {
                    return c.e && c.e({
                        all: !0
                    }, !0), a
                }, a.destroy = function() {
                    return o(l.appendScroll).off("." + u, c.e), o(e).off("." + u), c = {}, t
                }, i(a, l, n, c, u), l.chainable ? n : a
            }
            var o = e.jQuery || e.Zepto,
                r = 0,
                s = !1;
            o.fn.Lazy = o.fn.lazy = function(e) {
                return new n(this, e)
            }, o.Lazy = o.lazy = function(e, i, r) {
                if (o.isFunction(i) && (r = i, i = []), o.isFunction(r)) {
                    e = o.isArray(e) ? e : [e], i = o.isArray(i) ? i : [i];
                    for (var s = n.prototype.config, a = s._f || (s._f = {}), l = 0, c = e.length; l < c; l++)(s[e[l]] === t || o.isFunction(s[e[l]])) && (s[e[l]] = r);
                    for (var u = 0, d = i.length; u < d; u++) a[i[u]] = e[0]
                }
            }, n.prototype.config = {
                name: "lazy",
                chainable: !0,
                autoDestroy: !0,
                bind: "load",
                threshold: 500,
                visibleOnly: !1,
                appendScroll: e,
                scrollDirection: "both",
                imageBase: null,
                defaultImage: "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==",
                placeholder: null,
                delay: -1,
                combined: !1,
                attribute: "data-src",
                srcsetAttribute: "data-srcset",
                sizesAttribute: "data-sizes",
                retinaAttribute: "data-retina",
                loaderAttribute: "data-loader",
                imageBaseAttribute: "data-imagebase",
                removeAttribute: !0,
                handledName: "handled",
                loadedName: "loaded",
                effect: "show",
                effectTime: 0,
                enableThrottle: !0,
                throttle: 250,
                beforeLoad: t,
                afterLoad: t,
                onError: t,
                onFinishedAll: t
            }, o(e).on("load", (function() {
                s = !0
            }))
        }(window)
    },
    ZH0Z: function(module, exports, __webpack_require__) {
        var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;

        function _typeof(e) {
            return (_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            } : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            })(e)
        }! function(e) {
            "use strict";
            __WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__("EVdn")], void 0 === (__WEBPACK_AMD_DEFINE_RESULT__ = "function" == typeof(__WEBPACK_AMD_DEFINE_FACTORY__ = e) ? __WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__) : __WEBPACK_AMD_DEFINE_FACTORY__) || (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)
        }((function($) {
            "use strict";
            $.fn.fileuploader = function(q) {
                return this.each((function(t, r) {
                    var s = $(r),
                        p = null,
                        o = null,
                        l = null,
                        sl = [],
                        n = $.extend(!0, {}, $.fn.fileuploader.defaults, q),
                        f = {
                            init: function() {
                                return s.closest(".fileuploader").length || s.wrap('<div class="fileuploader"></div>'), p = s.closest(".fileuploader"), f.set("language"), f.set("attrOpts"), f.isSupported() ? (!n.beforeRender || !$.isFunction(n.beforeRender) || !1 !== n.beforeRender(p, s)) && (f.redesign(), n.files && f.files.append(n.files), f.rendered = !0, n.afterRender && $.isFunction(n.afterRender) && n.afterRender(l, p, o, s), f.disabled || f.bindUnbindEvents(!0), s.closest("form").on("reset", f.reset), void(f._itFl.length || f.reset())) : (n.onSupportError && $.isFunction(n.onSupportError) && n.onSupportError(p, s), !1)
                            },
                            bindUnbindEvents: function(e) {
                                e && f.bindUnbindEvents(!1), s[e ? "on" : "off"]("focus blur change", f.onEvent), n.changeInput && o !== s && o[e ? "on" : "off"]("click", f.clickHandler), n.dragDrop && n.dragDrop.container.length && (n.dragDrop.container[e ? "on" : "off"]("drag dragstart dragend dragover dragenter dragleave drop", (function(e) {
                                    e.preventDefault()
                                })), n.dragDrop.container[e ? "on" : "off"]("drop", f.dragDrop.onDrop), n.dragDrop.container[e ? "on" : "off"]("dragover", f.dragDrop.onDragEnter), n.dragDrop.container[e ? "on" : "off"]("dragleave", f.dragDrop.onDragLeave)), f.isUploadMode() && n.clipboardPaste && $(window)[e ? "on" : "off"]("paste", f.clipboard.paste), n.sorter && n.thumbnails && n.thumbnails._selectors.sorter && f.sorter[e ? "init" : "destroy"]()
                            },
                            redesign: function() {
                                if (o = s, n.theme && p.addClass("fileuploader-theme-" + n.theme), n.changeInput) {
                                    switch (_typeof(n.changeInput).toLowerCase()) {
                                        case "boolean":
                                            o = $('<div class="fileuploader-input"><div class="fileuploader-input-caption"><span>' + f._assets.textParse(n.captions.feedback) + '</span></div><button type="button" class="fileuploader-input-button"><span>' + f._assets.textParse(n.captions.button) + "</span></button></div>");
                                            break;
                                        case "string":
                                            " " != n.changeInput && (o = $(f._assets.textParse(n.changeInput, n)));
                                            break;
                                        case "object":
                                            o = $(n.changeInput);
                                            break;
                                        case "function":
                                            o = $(n.changeInput(s, p, n, f._assets.textParse))
                                    }
                                    s.after(o), s.css({
                                        position: "absolute",
                                        "z-index": "-9999",
                                        height: "0",
                                        width: "0",
                                        padding: "0",
                                        margin: "0",
                                        "line-height": "0",
                                        outline: "0",
                                        border: "0",
                                        opacity: "0"
                                    })
                                }
                                n.thumbnails && f.thumbnails.create(), n.dragDrop && (n.dragDrop = "object" != _typeof(n.dragDrop) ? {
                                    container: null
                                } : n.dragDrop, n.dragDrop.container = n.dragDrop.container ? $(n.dragDrop.container) : o)
                            },
                            clickHandler: function(e) {
                                e.preventDefault(), f.clipboard._timer ? f.clipboard.clean() : s.click()
                            },
                            onEvent: function(e) {
                                switch (e.type) {
                                    case "focus":
                                        p && p.addClass("fileuploader-focused");
                                        break;
                                    case "blur":
                                        p && p.removeClass("fileuploader-focused");
                                        break;
                                    case "change":
                                        f.onChange.call(this)
                                }
                                n.listeners && $.isFunction(n.listeners[e.type]) && n.listeners[e.type].call(s, p)
                            },
                            set: function(e, t) {
                                switch (e) {
                                    case "attrOpts":
                                        for (var i = ["limit", "maxSize", "fileMaxSize", "extensions", "changeInput", "theme", "addMore", "listInput", "files"], r = 0; r < i.length; r++) {
                                            var a = "data-fileuploader-" + i[r];
                                            if (f._assets.hasAttr(a)) switch (i[r]) {
                                                case "changeInput":
                                                case "addMore":
                                                case "listInput":
                                                    n[i[r]] = -1 < ["true", "false"].indexOf(s.attr(a)) ? "true" == s.attr(a) : s.attr(a);
                                                    break;
                                                case "extensions":
                                                    n[i[r]] = s.attr(a).replace(/ /g, "").split(",");
                                                    break;
                                                case "files":
                                                    n[i[r]] = JSON.parse(s.attr(a));
                                                    break;
                                                default:
                                                    n[i[r]] = s.attr(a)
                                            }
                                            s.removeAttr(a)
                                        }
                                        null == s.attr("disabled") && null == s.attr("readonly") && 0 !== n.limit || (f.disabled = !0), (!n.limit || n.limit && 2 <= n.limit) && (s.attr("multiple", "multiple"), n.inputNameBrackets && "[]" != s.attr("name").slice(-2) && s.attr("name", s.attr("name") + "[]")), !0 === n.listInput && (n.listInput = $('<input type="hidden" name="fileuploader-list-' + s.attr("name").replace("[]", "").split("[").pop().replace("]", "") + '">').insertBefore(s)), "string" == typeof n.listInput && 0 == $(n.listInput).length && (n.listInput = $('<input type="hidden" name="' + n.listInput + '">').insertBefore(s)), f.set("disabled", f.disabled), !n.fileMaxSize && n.maxSize && (n.fileMaxSize = n.maxSize);
                                        break;
                                    case "language":
                                        var l = $.fn.fileuploader.languages;
                                        "string" == typeof n.captions && (n.captions in l ? n.captions = l[n.captions] : n.captions = $.extend(!0, {}, $.fn.fileuploader.defaults.captions));
                                        break;
                                    case "disabled":
                                        f.disabled = t, p[f.disabled ? "addClass" : "removeClass"]("fileuploader-disabled"), s[f.disabled ? "attr" : "removeAttr"]("disabled", "disabled"), f.rendered && f.bindUnbindEvents(!t);
                                        break;
                                    case "feedback":
                                        t = t || f._assets.textParse(0 < f._itFl.length ? n.captions.feedback2 : n.captions.feedback, {
                                            length: f._itFl.length
                                        }), $(!o.is(":file")) && o.find(".fileuploader-input-caption span").html(t);
                                        break;
                                    case "input":
                                        var c = f._assets.copyAllAttributes($('<input type="file">'), s, !0);
                                        f.bindUnbindEvents(!1), s.after(s = c).remove(), f.bindUnbindEvents(!0);
                                        break;
                                    case "prevInput":
                                        0 < sl.length && (f.bindUnbindEvents(!1), sl[t].remove(), sl.splice(t, 1), s = sl[sl.length - 1], f.bindUnbindEvents(!0));
                                        break;
                                    case "nextInput":
                                        c = f._assets.copyAllAttributes($('<input type="file">'), s), f.bindUnbindEvents(!1), 0 < sl.length && 0 == sl[sl.length - 1].get(0).files.length ? s = sl[sl.length - 1] : (-1 == sl.indexOf(s) && sl.push(s), sl.push(c), s.after(s = c)), f.bindUnbindEvents(!0);
                                        break;
                                    case "listInput":
                                        n.listInput && n.listInput.val(f.files.list(!0, null, !1, t))
                                }
                            },
                            onChange: function(e, t) {
                                var i = s.get(0).files;
                                if (t) {
                                    if (!t.length) return f.set("input", ""), f.files.clear(), !1;
                                    i = t
                                }
                                if (f.clipboard._timer && f.clipboard.clean(), !f.isDefaultMode() || (f.reset(), 0 != i.length)) {
                                    if (n.beforeSelect && $.isFunction(n.beforeSelect) && 0 == n.beforeSelect(i, l, p, o, s)) return !1;
                                    for (var r = 0, a = 0; a < i.length; a++) {
                                        var c = i[a],
                                            u = f._itFl[f.files.add(c, "choosed")],
                                            d = f.files.check(u, i, 0 == a);
                                        if (!0 === d) n.thumbnails && f.thumbnails.item(u), f.isUploadMode() && f.upload.prepare(u), n.onSelect && $.isFunction(n.onSelect) && n.onSelect(u, l, p, o, s), r++;
                                        else if (f.files.remove(u, !0), d[2] || (f.isDefaultMode() && (f.set("input", ""), f.reset(), d[3] = !0), d[1] && f._assets.dialogs.alert(d[1], u, l, p, o, s)), d[3]) break
                                    }
                                    f.isUploadMode() && 0 < r && f.set("input", ""), f.set("feedback", null), f.isAddMoreMode() && 0 < r && f.set("nextInput"), f.set("listInput", null), n.afterSelect && $.isFunction(n.afterSelect) && n.afterSelect(l, p, o, s)
                                }
                            },
                            thumbnails: {
                                create: function() {
                                    null != n.thumbnails.beforeShow && $.isFunction(n.thumbnails.beforeShow) && n.thumbnails.beforeShow(p, o, s);
                                    var e = $(f._assets.textParse(n.thumbnails.box)).appendTo(n.thumbnails.boxAppendTo ? n.thumbnails.boxAppendTo : p);
                                    l = e.is(n.thumbnails._selectors.list) ? e : e.find(n.thumbnails._selectors.list), n.thumbnails._selectors.popup_open && l.on("click", n.thumbnails._selectors.popup_open, (function(e) {
                                        e.preventDefault();
                                        var t = $(this).closest(n.thumbnails._selectors.item),
                                            i = f.files.find(t);
                                        i && i.popup && i.html.hasClass("file-has-popup") && f.thumbnails.popup(i)
                                    })), f.isUploadMode() && n.thumbnails._selectors.start && l.on("click", n.thumbnails._selectors.start, (function(e) {
                                        if (e.preventDefault(), f.locked) return !1;
                                        var t = $(this).closest(n.thumbnails._selectors.item),
                                            i = f.files.find(t);
                                        i && f.upload.send(i, !0)
                                    })), f.isUploadMode() && n.thumbnails._selectors.retry && l.on("click", n.thumbnails._selectors.retry, (function(e) {
                                        if (e.preventDefault(), f.locked) return !1;
                                        var t = $(this).closest(n.thumbnails._selectors.item),
                                            i = f.files.find(t);
                                        i && f.upload.retry(i)
                                    })), n.thumbnails._selectors.rotate && l.on("click", n.thumbnails._selectors.rotate, (function(e) {
                                        if (e.preventDefault(), f.locked) return !1;
                                        var t = $(this).closest(n.thumbnails._selectors.item),
                                            i = f.files.find(t);
                                        i && i.editor && (i.editor.rotate(), i.editor.save())
                                    })), n.thumbnails._selectors.remove && l.on("click", n.thumbnails._selectors.remove, (function(e) {
                                        if (e.preventDefault(), f.locked) return !1;

                                        function t(e) {
                                            f.files.remove(o)
                                        }
                                        var i = $(this).closest(n.thumbnails._selectors.item),
                                            o = f.files.find(i);
                                        o && (o.upload && "successful" != o.upload.status ? f.upload.cancel(o) : n.thumbnails.removeConfirmation && !o.choosed ? f._assets.dialogs.confirm(f._assets.textParse(n.captions.removeConfirmation, o), t) : t())
                                    }))
                                },
                                clear: function() {
                                    l && l.html("")
                                },
                                item: function(e, t) {
                                    e.icon = f.thumbnails.generateFileIcon(e.format, e.extension), e.image = '<div class="fileuploader-item-image"></div>', e.progressBar = f.isUploadMode() ? '<div class="fileuploader-progressbar"><div class="bar"></div></div>' : "", e.html = $(f._assets.textParse(e.appended && n.thumbnails.item2 ? n.thumbnails.item2 : n.thumbnails.item, e)), e.progressBar = e.html.find(".fileuploader-progressbar"), e.html.addClass("file-type-" + (e.format ? e.format : "no") + " file-ext-" + (e.extension ? e.extension : "no")), t ? t.replaceWith(e.html) : e.html[n.thumbnails.itemPrepend ? "prependTo" : "appendTo"](l), n.thumbnails.popup && !1 !== e.data.popup && (e.html.addClass("file-has-popup"), e.popup = {
                                        open: function() {
                                            f.thumbnails.popup(e)
                                        }
                                    }), f.thumbnails.renderThumbnail(e), e.renderThumbnail = function(t) {
                                        t && e.popup && e.popup.close && (e.popup.close(), e.popup = {
                                            open: e.popup.open
                                        }), f.thumbnails.renderThumbnail(e, !0, t)
                                    }, null != n.thumbnails.onItemShow && $.isFunction(n.thumbnails.onItemShow) && n.thumbnails.onItemShow(e, l, p, o, s)
                                },
                                generateFileIcon: function(e, t) {
                                    var i = '<div style="${style}" class="fileuploader-item-icon${class}"><i>' + (t || "") + "</i></div>",
                                        n = f._assets.textToColor(t);
                                    return n && (f._assets.isBrightColor(n) && (i = i.replace("${class}", " is-bright-color")), i = i.replace("${style}", "background-color: " + n)), i.replace("${style}", "").replace("${class}", "")
                                },
                                renderThumbnail: function(e, t, i) {
                                    function r(t) {
                                        var i = $(t);
                                        c.removeClass("fileuploader-no-thumbnail fileuploader-loading").html(i), e.html.hasClass("file-will-popup") && e.html.removeClass("file-will-popup").addClass("file-has-popup"), i.is("img") && i.attr("draggable", "false").on("load error", (function(e) {
                                            "error" == e.type && d()
                                        })), null != n.thumbnails.onImageLoaded && $.isFunction(n.thumbnails.onImageLoaded) && n.thumbnails.onImageLoaded(e, l, p, o, s)
                                    }

                                    function a() {
                                        var t = 0;
                                        if (e && -1 < f._pfrL.indexOf(e))
                                            for (f._pfrL.splice(f._pfrL.indexOf(e), 1); t < f._pfrL.length;) {
                                                if (-1 < f._itFl.indexOf(f._pfrL[t])) {
                                                    setTimeout((function() {
                                                        f.thumbnails.renderThumbnail(f._pfrL[t], !0)
                                                    }), "image" == e.format && 1.8 < e.size / 1e6 ? 200 : 0);
                                                    break
                                                }
                                                f._pfrL.splice(t, 1), t++
                                            }
                                    }
                                    var c = e.html.find(".fileuploader-item-image"),
                                        u = e.data && (e.data.readerSkip || !1 === e.data.thumbnail),
                                        d = function() {
                                            c.addClass("fileuploader-no-thumbnail"), c.removeClass("fileuploader-loading").html(e.icon), e.html.hasClass("file-will-popup") && e.html.removeClass("file-will-popup").addClass("file-has-popup"), null != n.thumbnails.onImageLoaded && $.isFunction(n.thumbnails.onImageLoaded) && n.thumbnails.onImageLoaded(e, l, p, o, s)
                                        };
                                    if (c.length) {
                                        if (e.image = c.html("").addClass("fileuploader-loading"), (-1 < ["image", "video", "audio", "astext"].indexOf(e.format) || e.data.thumbnail) && f.isFileReaderSupported() && !u && (e.appended || n.thumbnails.startImageRenderer || t)) {
                                            if (e.html.hasClass("file-has-popup") && e.html.removeClass("file-has-popup").addClass("file-will-popup"), n.thumbnails.synchronImages && (-1 != f._pfrL.indexOf(e) || t || f._pfrL.push(e), 1 < f._pfrL.length && !t)) return;
                                            var h = function(t, i) {
                                                function o() {
                                                    var e;
                                                    n.thumbnails.canvasImage ? (e = document.createElement("canvas"), f.editor.resize(this, e, n.thumbnails.canvasImage.width ? n.thumbnails.canvasImage.width : c.width(), n.thumbnails.canvasImage.height ? n.thumbnails.canvasImage.height : c.height(), !1, !0), f._assets.isBlankCanvas(e) ? d() : r(e)) : r(this), a()
                                                }

                                                function s() {
                                                    h = null, d(), a()
                                                }
                                                var l = t && t.nodeName && "img" == t.nodeName.toLowerCase(),
                                                    u = l ? t.src : t,
                                                    h = null;
                                                return t ? i && "image" == e.format && e.reader.node ? o.call(e.reader.node) : l ? o.call(t) : ((h = new Image).onload = o, h.onerror = s, e.data && e.data.readerCrossOrigin && h.setAttribute("crossOrigin", e.data.readerCrossOrigin), void(h.src = u)) : s()
                                            };
                                            return "string" == typeof i || "object" == _typeof(i) ? h(i) : f.files.read(e, (function() {
                                                h(e.reader.frame || (e.reader.node && "img" == e.reader.node.nodeName.toLowerCase() ? e.reader.src : null), !0)
                                            }), null, i, !0)
                                        }
                                        d()
                                    } else a()
                                },
                                popup: function(e, t) {
                                    var i, r, a;
                                    !f.locked && n.thumbnails.popup && n.thumbnails._selectors.popup && (i = $(n.thumbnails.popup.container), r = i.find(".fileuploader-popup"), a = function() {
                                        function a(t) {
                                            var i = t.which || t.keyCode;
                                            27 == i && e.popup && e.popup.close && e.popup.close(), 37 != i && 39 != i || !n.thumbnails.popup.arrows || e.popup.move(37 == i ? "prev" : "next")
                                        }
                                        var c = e.popup.html || $(f._assets.textParse(n.thumbnails.popup.template, e)),
                                            u = e.popup.html !== c;
                                        r.removeClass("loading"), r.children(n.thumbnails._selectors.popup).length && ($.each(f._itFl, (function(i, n) {
                                            n != e && n.popup && n.popup.close && n.popup.close(t)
                                        })), r.find(n.thumbnails._selectors.popup).remove()), c.show().appendTo(r), e.popup.html = c, e.popup.isOpened = !0, e.popup.move = function(t) {
                                            var i = f._itFl.indexOf(e),
                                                o = null,
                                                r = !1;
                                            if ("prev" == (t = n.thumbnails.itemPrepend ? "prev" == t ? "next" : "prev" : t))
                                                for (var s = i; 0 <= s; s--) {
                                                    if ((a = f._itFl[s]) != e && a.popup && a.html.hasClass("file-has-popup")) {
                                                        o = a;
                                                        break
                                                    }
                                                    0 != s || o || r || !n.thumbnails.popup.loop || (s = f._itFl.length, r = !0)
                                                } else {
                                                    var a;
                                                    for (s = i; s < f._itFl.length; s++) {
                                                        if ((a = f._itFl[s]) != e && a.popup && a.html.hasClass("file-has-popup")) {
                                                            o = a;
                                                            break
                                                        }
                                                        s + 1 != f._itFl.length || o || r || !n.thumbnails.popup.loop || (s = -1, r = !0)
                                                    }
                                                }
                                            o && f.thumbnails.popup(o, !0)
                                        }, e.popup.close = function(t) {
                                            e.popup.node && e.popup.node.pause && e.popup.node.pause(), $(window).off("keyup", a), i.css({
                                                overflow: "",
                                                width: ""
                                            }), e.popup.editor && e.popup.editor.cropper && e.popup.editor.cropper.hide(), e.popup.zoomer && e.popup.zoomer.hide(), e.popup.isOpened = !1, e.popup.html && n.thumbnails.popup.onHide && $.isFunction(n.thumbnails.popup.onHide) ? n.thumbnails.popup.onHide(e, l, p, o, s) : e.popup.html && e.popup.html.remove(), t || r.fadeOut(400, (function() {
                                                r.remove()
                                            })), delete e.popup.close
                                        }, e.popup.node ? (u && c.html(c.html().replace(/\$\{reader\.node\}/, '<div class="reader-node"></div>')).find(".reader-node").html(e.popup.node), e.popup.node.controls = !0, e.popup.node.currentTime = 0, e.popup.node.play && e.popup.node.play()) : u && c.find(".fileuploader-popup-node").html('<div class="reader-node"><div class="fileuploader-popup-file-icon file-type-' + e.format + " file-ext-" + e.extension + '">' + e.icon + "</div></div>"), $(window).on("keyup", a), i.css({
                                            overflow: "hidden",
                                            width: i.innerWidth()
                                        }), e.popup.html.find('[data-action="prev"], [data-action="next"]').removeAttr("style"), e.popup.html[1 != f._itFl.length && n.thumbnails.popup.arrows ? "addClass" : "removeClass"]("fileuploader-popup-has-arrows"), n.thumbnails.popup.loop || (0 == f._itFl.indexOf(e) && e.popup.html.find('[data-action="prev"]').hide(), f._itFl.indexOf(e) == f._itFl.length - 1 && e.popup.html.find('[data-action="next"]').hide()), u && e.popup.zoomer && (e.popup.zoomer = null), f.editor.zoomer(e), e.editor && (e.popup.editor || (e.popup.editor = {}), f.editor.rotate(e, e.editor.rotation || 0, !0), e.popup.editor && e.popup.editor.cropper && (e.popup.editor.cropper.hide(!0), setTimeout((function() {
                                            f.editor.crop(e, e.editor.crop ? $.extend({}, e.editor.crop) : e.popup.editor.cropper.setDefaultData())
                                        }), 100))), e.popup.html.on("click", '[data-action="prev"]', (function(t) {
                                            e.popup.move("prev")
                                        })).on("click", '[data-action="next"]', (function(t) {
                                            e.popup.move("next")
                                        })).on("click", '[data-action="crop"]', (function(t) {
                                            e.editor && e.editor.cropper()
                                        })).on("click", '[data-action="rotate-cw"]', (function(t) {
                                            e.editor && e.editor.rotate()
                                        })).on("click", '[data-action="zoom-in"]', (function(t) {
                                            e.popup.zoomer && e.popup.zoomer.zoomIn()
                                        })).on("click", '[data-action="zoom-out"]', (function(t) {
                                            e.popup.zoomer && e.popup.zoomer.zoomOut()
                                        })), n.thumbnails.popup.onShow && $.isFunction(n.thumbnails.popup.onShow) && n.thumbnails.popup.onShow(e, l, p, o, s)
                                    }, 0 == r.length && (r = $('<div class="fileuploader-popup"></div>').appendTo(i)), r.fadeIn(400).addClass("loading").find(n.thumbnails._selectors.popup).fadeOut(150), (-1 < ["image", "video", "audio", "astext"].indexOf(e.format) || -1 < ["application/pdf"].indexOf(e.type)) && !e.popup.html ? f.files.read(e, (function() {
                                        e.reader.node && (e.popup.node = e.reader.node), "image" == e.format && e.reader.node ? (e.popup.node = e.reader.node.cloneNode(), e.popup.node.complete ? a() : (e.popup.node.src = "", e.popup.node.onload = e.popup.node.onerror = a, e.popup.node.src = e.reader.node.src)) : a()
                                    })) : a())
                                }
                            },
                            editor: {
                                rotate: function(e, t, i) {
                                    if (!(e.popup && e.popup.html && $("html").find(e.popup.html).length)) {
                                        var n = e.editor.rotation || 0,
                                            o = t || n + 90;
                                        return 360 <= o && (o = 0), e.popup.editor && (e.popup.editor.rotation = o), e.editor.rotation = o
                                    }
                                    if (e.popup.node) {
                                        if (e.popup.editor.isAnimating) return;
                                        e.popup.editor.isAnimating = !0;
                                        var r = e.popup.html.find(".fileuploader-popup-node").find(".reader-node"),
                                            s = r.find("> img"),
                                            a = {
                                                rotation: n = e.popup.editor.rotation || 0,
                                                scale: e.popup.editor.scale || 1
                                            };
                                        e.popup.editor.cropper && e.popup.editor.cropper.$template.hide(), e.popup.editor.rotation = i ? t : n + 90, e.popup.editor.scale = (r.height() / s[-1 < [90, 270].indexOf(e.popup.editor.rotation) ? "width" : "height"]()).toFixed(3), s.height() * e.popup.editor.scale > r.width() && -1 < [90, 270].indexOf(e.popup.editor.rotation) && (e.popup.editor.scale = r.height() / s.width()), 1 < e.popup.editor.scale && (e.popup.editor.scale = 1), $(a).stop().animate({
                                            rotation: e.popup.editor.rotation,
                                            scale: e.popup.editor.scale
                                        }, {
                                            duration: i ? 2 : 300,
                                            easing: "swing",
                                            step: function(e, t) {
                                                var i, n, o, r = s.css("-webkit-transform") || s.css("-moz-transform") || s.css("transform") || "none",
                                                    a = 0,
                                                    l = 1,
                                                    c = t.prop;
                                                "none" !== r && (n = (i = r.split("(")[1].split(")")[0].split(","))[0], o = i[1], a = "rotation" == c ? e : Math.round(Math.atan2(o, n) * (180 / Math.PI)), l = "scale" == c ? e : Math.round(10 * Math.sqrt(n * n + o * o)) / 10), s.css({
                                                    "-webkit-transform": "rotate(" + a + "deg) scale(" + l + ")",
                                                    "-moz-transform": "rotate(" + a + "deg) scale(" + l + ")",
                                                    transform: "rotate(" + a + "deg) scale(" + l + ")"
                                                })
                                            },
                                            always: function() {
                                                delete e.popup.editor.isAnimating, e.popup.editor.cropper && !i && (e.popup.editor.cropper.setDefaultData(), e.popup.editor.cropper.init("rotation"))
                                            }
                                        }), 360 <= e.popup.editor.rotation && (e.popup.editor.rotation = 0), e.popup.editor.rotation != e.editor.rotation && (e.popup.editor.hasChanges = !0)
                                    }
                                },
                                crop: function(e, t) {
                                    var i, o, r;
                                    if (!(e.popup && e.popup.html && $("html").find(e.popup.html).length)) return e.editor.crop = t || e.editor.crop;
                                    e.popup.node && (e.popup.editor.cropper ? (t && (e.popup.editor.cropper.crop = t), e.popup.editor.cropper.init(t)) : (i = e.popup.html.find(".fileuploader-popup-node .reader-node > img"), r = (o = $('<div class="fileuploader-cropper"><div class="fileuploader-cropper-area"><div class="point point-a"></div><div class="point point-b"></div><div class="point point-c"></div><div class="point point-d"></div><div class="point point-e"></div><div class="point point-f"></div><div class="point point-g"></div><div class="point point-h"></div><div class="area-move"></div><div class="area-image"></div><div class="area-info"></div></div></div>')).find(".fileuploader-cropper-area"), e.popup.editor.cropper = {
                                        $imageEl: i,
                                        $template: o,
                                        $editor: r,
                                        isCropping: !1,
                                        crop: t || null,
                                        init: function(t) {
                                            var i = e.popup.editor.cropper,
                                                r = i.$imageEl.position(),
                                                s = i.$imageEl[0].getBoundingClientRect().width,
                                                a = i.$imageEl[0].getBoundingClientRect().height,
                                                l = e.popup.editor.rotation && -1 < [90, 270].indexOf(e.popup.editor.rotation) ? e.popup.editor.scale : 1;
                                            if (i.hide(), i.crop || i.setDefaultData(), 0 == s || 0 == a) return i.hide(!0);
                                            i.isCropping || (i.$imageEl.clone().appendTo(i.$template.find(".area-image")), i.$imageEl.parent().append(o)), i.$template.hide().css({
                                                left: r.left,
                                                top: r.top,
                                                width: s,
                                                height: a
                                            }).fadeIn(150), i.$editor.hide(), clearTimeout(i._editorAnimationTimeout), i._editorAnimationTimeout = setTimeout((function() {
                                                var o, r;
                                                delete i._editorAnimationTimeout, i.$editor.fadeIn(250), e.editor.crop && $.isPlainObject(t) && (i.resize(), i.crop.left = i.crop.left * i.crop.cfWidth * l, i.crop.width = i.crop.width * i.crop.cfWidth * l, i.crop.top = i.crop.top * i.crop.cfHeight * l, i.crop.height = i.crop.height * i.crop.cfHeight * l), n.editor.cropper && (n.editor.cropper.maxWidth || n.editor.cropper.maxHeight) && (n.editor.cropper.maxWidth && (i.crop.width = Math.min(n.editor.cropper.maxWidth * i.crop.cfWidth, i.crop.width)), n.editor.cropper.maxHeight && (i.crop.height = Math.min(n.editor.cropper.maxHeight * i.crop.cfHeight, i.crop.height)), e.editor.crop && "rotation" != t || "resize" == t || (i.crop.left = (i.$template.width() - i.crop.width) / 2, i.crop.top = (i.$template.height() - i.crop.height) / 2)), e.editor.crop && "rotation" != t || !n.editor.cropper || !n.editor.cropper.ratio || "resize" == t || (o = n.editor.cropper.ratio, (r = f._assets.ratioToPx(i.crop.width, i.crop.height, o)) && (i.crop.width = Math.min(i.crop.width, r[0]), i.crop.left = (i.$template.width() - i.crop.width) / 2, i.crop.height = Math.min(i.crop.height, r[1]), i.crop.top = (i.$template.height() - i.crop.height) / 2)), i.drawPlaceHolder(i.crop)
                                            }), 400), n.editor.cropper && n.editor.cropper.showGrid && i.$editor.addClass("has-grid"), i.$imageEl.attr("draggable", "false"), i.$template.on("mousedown touchstart", i.mousedown), $(window).on("resize", i.resize), i.isCropping = !0, e.popup.editor.hasChanges = !0
                                        },
                                        setDefaultData: function() {
                                            var t = e.popup.editor.cropper,
                                                i = t.$imageEl.get(0).getBoundingClientRect(),
                                                n = i.width,
                                                o = i.height,
                                                r = e.popup.editor.rotation && -1 < [90, 270].indexOf(e.popup.editor.rotation),
                                                s = e.popup.editor.scale || 1;
                                            return t.crop = {
                                                left: 0,
                                                top: 0,
                                                width: r ? o * s : n,
                                                height: r ? n * s : o,
                                                cfWidth: n / e.reader.width,
                                                cfHeight: o / e.reader.height
                                            }, null
                                        },
                                        hide: function(t) {
                                            var i = e.popup.editor.cropper;
                                            t && (i.$template.hide(), i.$editor.hide()), i.$imageEl.attr("draggable", ""), i.$template.off("mousedown touchstart", i.mousedown), $(window).off("resize", i.resize)
                                        },
                                        resize: function(t) {
                                            var i = e.popup.editor.cropper,
                                                n = i.$imageEl;
                                            0 < n.width() && (t ? (i.$template.hide(), clearTimeout(i._resizeTimeout), i._resizeTimeout = setTimeout((function() {
                                                delete i._resizeTimeout;
                                                var t = n.width() / e.reader.width,
                                                    o = n.height() / e.reader.height;
                                                i.crop.left = i.crop.left / i.crop.cfWidth * t, i.crop.width = i.crop.width / i.crop.cfWidth * t, i.crop.top = i.crop.top / i.crop.cfHeight * o, i.crop.height = i.crop.height / i.crop.cfHeight * o, i.crop.cfWidth = t, i.crop.cfHeight = o, i.init("resize")
                                            }), 500)) : (i.crop.cfWidth = n.width() / e.reader.width, i.crop.cfHeight = n.height() / e.reader.height))
                                        },
                                        drawPlaceHolder: function(t) {
                                            var i = e.popup.editor.cropper,
                                                n = e.popup.editor.rotation || 0,
                                                o = e.popup.editor.scale || 1,
                                                r = [0, 0];
                                            t && (t = $.extend({}, t), n && (r = [180 == n || 270 == n ? -100 : 0, 90 == n || 180 == n ? -100 : 0]), i.$editor.css(t), i.setAreaInfo(), i.$editor.find(".area-image img").removeAttr("style").css({
                                                width: i.$imageEl.width(),
                                                height: i.$imageEl.height(),
                                                left: -1 * i.$editor.position().left,
                                                top: -1 * i.$editor.position().top,
                                                "-webkit-transform": "rotate(" + n + "deg) scale(" + o + ") translateX(" + r[0] + "%) translateY(" + r[1] + "%)",
                                                "-moz-transform": "rotate(" + n + "deg) scale(" + o + ") translateX(" + r[0] + "%) translateY(" + r[1] + "%)",
                                                transform: "rotate(" + n + "deg) scale(" + o + ") translateX(" + r[0] + "%) translateY(" + r[1] + "%)"
                                            }))
                                        },
                                        setAreaInfo: function(t) {
                                            var i = e.popup.editor.cropper,
                                                n = e.popup.editor.scale || 1;
                                            i.$editor.find(".area-info").html((i.isResizing || "size" == t ? ["W: " + Math.round(i.crop.width / i.crop.cfWidth / n) + "px", " ", "H: " + Math.round(i.crop.height / i.crop.cfHeight / n) + "px"] : ["X: " + Math.round(i.crop.left / i.crop.cfWidth / n) + "px", " ", "Y: " + Math.round(i.crop.top / i.crop.cfHeight / n) + "px"]).join(""))
                                        },
                                        mousedown: function(t) {
                                            function i() {
                                                s.pointData = {
                                                    el: r,
                                                    x: a.x,
                                                    y: a.y,
                                                    xEditor: a.x - s.crop.left,
                                                    yEditor: a.y - s.crop.top,
                                                    left: s.crop.left,
                                                    top: s.crop.top,
                                                    width: s.crop.width,
                                                    height: s.crop.height
                                                }, (s.isMoving || s.isResizing) && (s.setAreaInfo("size"), s.$editor.addClass("moving show-info"), $("body").css({
                                                    "-webkit-user-select": "none",
                                                    "-moz-user-select": "none",
                                                    "-ms-user-select": "none",
                                                    "user-select": "none"
                                                }), $(document).on("mousemove touchmove", s.mousemove))
                                            }
                                            var o = t.originalEvent.touches && t.originalEvent.touches[0] ? "touchstart" : "mousedown",
                                                r = $(t.target),
                                                s = e.popup.editor.cropper,
                                                a = {
                                                    x: ("mousedown" == o ? t.pageX : t.originalEvent.touches[0].pageX) - s.$template.offset().left,
                                                    y: ("mousedown" == o ? t.pageY : t.originalEvent.touches[0].pageY) - s.$template.offset().top
                                                };
                                            if (3 == t.which) return !0;
                                            e.popup.zoomer && e.popup.zoomer.hasSpacePressed || (s.isMoving = r.is(".area-move"), s.isResizing = r.is(".point"), "mousedown" == o && i(), "touchstart" == o && 1 == t.originalEvent.touches.length && ((s.isMoving || s.isResizing) && t.preventDefault(), s.isTouchLongPress = !0, setTimeout((function() {
                                                s.isTouchLongPress && (delete s.isTouchLongPress, i())
                                            }), n.thumbnails.touchDelay ? n.thumbnails.touchDelay : 0)), $(document).on("mouseup touchend", s.mouseup))
                                        },
                                        mousemove: function(t) {
                                            var i, o, r, s, a, l, c, u, d, h, p, m, g, v = t.originalEvent.touches && t.originalEvent.touches[0] ? "touchstart" : "mousedown",
                                                y = ($(t.target), e.popup.editor.cropper),
                                                w = {
                                                    x: ("mousedown" == v ? t.pageX : t.originalEvent.touches[0].pageX) - y.$template.offset().left,
                                                    y: ("mousedown" == v ? t.pageY : t.originalEvent.touches[0].pageY) - y.$template.offset().top
                                                };
                                            if (t.originalEvent.touches && 1 != t.originalEvent.touches.length) return y.mouseup(t);
                                            y.isMoving && (i = w.x - y.pointData.xEditor, o = w.y - y.pointData.yEditor, i + y.crop.width > y.$template.width() && (i = y.$template.width() - y.crop.width), i < 0 && (i = 0), o + y.crop.height > y.$template.height() && (o = y.$template.height() - y.crop.height), o < 0 && (o = 0), y.crop.left = i, y.crop.top = o), y.isResizing && (r = y.pointData.el.attr("class").substr("point point-".length), s = y.crop.left + y.crop.width, a = y.crop.top + y.crop.height, l = (n.editor.cropper && n.editor.cropper.minWidth || 0) * y.crop.cfWidth, c = (n.editor.cropper && n.editor.cropper.minHeight || 0) * y.crop.cfHeight, u = (n.editor.cropper && n.editor.cropper.maxWidth) * y.crop.cfWidth, d = (n.editor.cropper && n.editor.cropper.maxHeight) * y.crop.cfHeight, h = n.editor.cropper ? n.editor.cropper.ratio : null, l > y.$template.width() && (l = y.$template.width()), c > y.$template.height() && (c = y.$template.height()), u > y.$template.width() && (u = y.$template.width()), d > y.$template.height() && (d = y.$template.height()), "a" != r && "b" != r && "c" != r || p || (y.crop.top = w.y, y.crop.top < 0 && (y.crop.top = 0), y.crop.height = a - y.crop.top, y.crop.top > y.crop.top + y.crop.height && (y.crop.top = a, y.crop.height = 0), y.crop.height < c && (y.crop.top = a - c, y.crop.height = c), y.crop.height > d && (y.crop.top = a - d, y.crop.height = d), (p = h ? f._assets.ratioToPx(y.crop.width, y.crop.height, h) : null) && (y.crop.width = p[0], "a" != r && "b" != r || (y.crop.left = Math.max(0, y.pointData.left + (y.pointData.width - y.crop.width) / ("b" == r ? 2 : 1))), y.crop.left + y.crop.width > y.$template.width() && (m = y.$template.width() - y.crop.left, y.crop.width = m, y.crop.height = m / p[2] * p[3], y.crop.top = a - y.crop.height))), "e" != r && "f" != r && "g" != r || p || (y.crop.height = w.y - y.crop.top, y.crop.height + y.crop.top > y.$template.height() && (y.crop.height = y.$template.height() - y.crop.top), y.crop.height < c && (y.crop.height = c), y.crop.height > d && (y.crop.height = d), (p = h ? f._assets.ratioToPx(y.crop.width, y.crop.height, h) : null) && (y.crop.width = p[0], "f" != r && "g" != r || (y.crop.left = Math.max(0, y.pointData.left + (y.pointData.width - y.crop.width) / ("f" == r ? 2 : 1))), y.crop.left + y.crop.width > y.$template.width() && (m = y.$template.width() - y.crop.left, y.crop.width = m, y.crop.height = m / p[2] * p[3]))), "c" != r && "d" != r && "e" != r || p || (y.crop.width = w.x - y.crop.left, y.crop.width + y.crop.left > y.$template.width() && (y.crop.width = y.$template.width() - y.crop.left), y.crop.width < l && (y.crop.width = l), y.crop.width > u && (y.crop.width = u), (p = h ? f._assets.ratioToPx(y.crop.width, y.crop.height, h) : null) && (y.crop.height = p[1], "c" != r && "d" != r || (y.crop.top = Math.max(0, y.pointData.top + (y.pointData.height - y.crop.height) / ("d" == r ? 2 : 1))), y.crop.top + y.crop.height > y.$template.height() && (g = y.$template.height() - y.crop.top, y.crop.height = g, y.crop.width = g / p[3] * p[2]))), "a" != r && "g" != r && "h" != r || p || (y.crop.left = w.x, y.crop.left > y.$template.width() && (y.crop.left = y.$template.width()), y.crop.left < 0 && (y.crop.left = 0), y.crop.width = s - y.crop.left, y.crop.left > y.crop.left + y.crop.width && (y.crop.left = s, y.crop.width = 0), y.crop.width < l && (y.crop.left = s - l, y.crop.width = l), y.crop.width > u && (y.crop.left = s - u, y.crop.width = u), (p = h ? f._assets.ratioToPx(y.crop.width, y.crop.height, h) : null) && (y.crop.height = p[1], "a" != r && "h" != r || (y.crop.top = Math.max(0, y.pointData.top + (y.pointData.height - y.crop.height) / ("h" == r ? 2 : 1))), y.crop.top + y.crop.height > y.$template.height() && (g = y.$template.height() - y.crop.top, y.crop.height = g, y.crop.width = g / p[3] * p[2], y.crop.left = s - y.crop.width)))), y.drawPlaceHolder(y.crop)
                                        },
                                        mouseup: function(t) {
                                            var i = e.popup.editor.cropper;
                                            0 != i.$editor.width() && 0 != i.$editor.height() || i.init(i.setDefaultData()), delete i.isTouchLongPress, delete i.isMoving, delete i.isResizing, i.$editor.removeClass("moving show-info"), $("body").css({
                                                "-webkit-user-select": "",
                                                "-moz-user-select": "",
                                                "-ms-user-select": "",
                                                "user-select": ""
                                            }), $(document).off("mousemove touchmove", i.mousemove), $(document).off("mouseup touchend", i.mouseup)
                                        }
                                    }, e.popup.editor.cropper.init()))
                                },
                                resize: function(e, t, i, n, o, r) {
                                    var s = t.getContext("2d"),
                                        a = (i = !i && n ? n * e.width / e.height : i, n = !n && i ? i * e.height / e.width : n, e.width / e.height),
                                        l = 1 <= a ? i : n * a,
                                        c = a < 1 ? n : i / a;
                                    r && l < i && (c *= i / l, l = i), r && c < n && (l *= n / c, c = n);
                                    var u = Math.min(Math.ceil(Math.log(e.width / l) / Math.log(2)), 12);
                                    if (t.width = l, t.height = c, e.width < t.width || e.height < t.height || u < 2) {
                                        r || (t.width = Math.min(e.width, t.width), t.height = Math.min(e.height, t.height));
                                        var d = e.width < t.width ? (t.width - e.width) / 2 : 0,
                                            h = e.height < t.height ? (t.height - e.height) / 2 : 0;
                                        o || (s.fillStyle = "#fff", s.fillRect(0, 0, t.width, t.height)), s.drawImage(e, d, h, Math.min(e.width, t.width), Math.min(e.height, t.height))
                                    } else {
                                        var p = document.createElement("canvas"),
                                            f = p.getContext("2d"),
                                            m = 2;
                                        for (p.width = e.width / m, p.height = e.height / m, f.fillStyle = "#fff", f.fillRect(0, 0, p.width, p.height), f.imageSmoothingEnabled = !1, f.imageSmoothingQuality = "high", f.drawImage(e, 0, 0, p.width, p.height); 2 < u;) {
                                            var g = m + 2,
                                                v = e.width / m,
                                                y = e.height / m;
                                            v > p.width && (v = p.width), y > p.height && (y = p.height), f.imageSmoothingEnabled = !0, f.drawImage(p, 0, 0, v, y, 0, 0, e.width / g, e.height / g), m = g, u--
                                        }
                                        v = e.width / m, y = e.height / m, v > p.width && (v = p.width), y > p.height && (y = p.height), s.drawImage(p, 0, 0, v, y, 0, 0, l, c), p = f = null
                                    }
                                    s = null
                                },
                                zoomer: function(e) {
                                    var t, i, o, r;
                                    e.popup && e.popup.html && $("html").find(e.popup.html).length && (e.popup.zoomer || (t = e.popup.html, i = t.find(".fileuploader-popup-node"), o = i.find(".reader-node"), r = o.find("> img").attr("draggable", "false").attr("ondragstart", "return false;"), e.popup.zoomer = {
                                        html: t.find(".fileuploader-popup-zoomer"),
                                        isActive: "image" == e.format && e.popup.node && n.thumbnails.popup.zoomer,
                                        scale: 100,
                                        zoom: 100,
                                        init: function() {
                                            var e = this;
                                            if (!e.isActive || f._assets.isIE() || f._assets.isMobile()) return e.html.hide() && i.addClass("has-node-centered");
                                            e.hide(), e.resize(), $(window).on("resize", e.resize), $(window).on("keyup keydown", e.keyPress), e.html.find("input").on("input change", e.range), o.on("mousedown touchstart", e.mousedown), i.on("mousewheel DOMMouseScroll", e.scroll)
                                        },
                                        hide: function() {
                                            var e = this;
                                            $(window).off("resize", e.resize), $(window).off("keyup keydown", e.keyPress), e.html.find("input").off("input change", e.range), o.off("mousedown", e.mousedown), i.off("mousewheel DOMMouseScroll", e.scroll)
                                        },
                                        center: function(e) {
                                            var t = this,
                                                n = 0,
                                                r = 0;
                                            r = e ? (n = t.left, r = t.top, n -= (i.width() / 2 - t.left) * (o.width() / e[0] - 1), r -= (i.height() / 2 - t.top) * (o.height() / e[1] - 1), o.width() <= i.width() && (n = Math.round((i.width() - o.width()) / 2)), o.height() <= i.height() && (r = Math.round((i.height() - o.height()) / 2)), o.width() > i.width() && (0 < n ? n = 0 : n + o.width() < i.width() && (n = i.width() - o.width())), o.height() > i.height() && (0 < r ? r = 0 : r + o.height() < i.height() && (r = i.height() - o.height())), Math.min(r, 0)) : (n = Math.round((i.width() - o.width()) / 2), Math.round((i.height() - o.height()) / 2));
                                            o.css({
                                                left: (t.left = n) + "px",
                                                top: (t.top = r) + "px",
                                                width: o.width(),
                                                height: o.height()
                                            })
                                        },
                                        resize: function() {
                                            var t = e.popup.zoomer;
                                            i.removeClass("is-zoomed"), o.removeAttr("style"), t.scale = t.getImageScale(), t.updateView()
                                        },
                                        range: function(t) {
                                            var i = e.popup.zoomer,
                                                n = $(this),
                                                o = parseFloat(n.val());
                                            if (100 <= i.scale) return t.preventDefault(), void n.val(i.scale);
                                            o < i.scale && (t.preventDefault(), o = i.scale, n.val(o)), i.updateView(o, !0)
                                        },
                                        scroll: function(t) {
                                            var i = e.popup.zoomer,
                                                n = -100;
                                            t.originalEvent && (t.originalEvent.wheelDelta && (n = t.originalEvent.wheelDelta / -40), t.originalEvent.deltaY && (n = t.originalEvent.deltaY), t.originalEvent.detail && (n = t.originalEvent.detail)), i[n < 0 ? "zoomIn" : "zoomOut"](3)
                                        },
                                        keyPress: function(t) {
                                            var i = e.popup.zoomer,
                                                n = t.type;
                                            32 == (t.keyCode || t.which) && (i.hasSpacePressed = "keydown" == n, i.hasSpacePressed && i.isZoomed() ? o.addClass("is-amoving") : o.removeClass("is-amoving"))
                                        },
                                        mousedown: function(t) {
                                            function i() {
                                                s.pointData = {
                                                    x: c.x,
                                                    y: c.y,
                                                    xTarget: c.x - s.left,
                                                    yTarget: c.y - s.top
                                                }, $("body").css({
                                                    "-webkit-user-select": "none",
                                                    "-moz-user-select": "none",
                                                    "-ms-user-select": "none",
                                                    "user-select": "none"
                                                }), o.addClass("is-moving"), $(document).on("mousemove", s.mousemove)
                                            }
                                            var s = e.popup.zoomer,
                                                a = $(t.target),
                                                l = t.originalEvent.touches && t.originalEvent.touches[0] ? "touchstart" : "mousedown",
                                                c = {
                                                    x: "mousedown" == l ? t.pageX : t.originalEvent.touches[0].pageX,
                                                    y: "mousedown" == l ? t.pageY : t.originalEvent.touches[0].pageY
                                                };
                                            1 == t.which && 100 != s.scale && s.zoom != s.scale && (s.hasSpacePressed || a[0] == r[0] || a.is(".fileuploader-cropper")) && ("mousedown" == l && i(), "touchstart" == l && (s.isTouchLongPress = !0, setTimeout((function() {
                                                s.isTouchLongPress && (delete s.isTouchLongPress, i())
                                            }), n.thumbnails.touchDelay ? n.thumbnails.touchDelay : 0)), $(document).on("mouseup touchend", s.mouseup))
                                        },
                                        mousemove: function(t) {
                                            var n = e.popup.zoomer,
                                                r = t.originalEvent.touches && t.originalEvent.touches[0] ? "touchstart" : "mousedown",
                                                s = "mousedown" == r ? t.pageX : t.originalEvent.touches[0].pageX,
                                                a = "mousedown" == r ? t.pageY : t.originalEvent.touches[0].pageY,
                                                l = s - n.pointData.xTarget,
                                                c = a - n.pointData.yTarget;
                                            0 < c && (c = 0), c < i.height() - o.height() && (c = i.height() - o.height()), o.height() < i.height() && (c = i.height() / 2 - o.height() / 2), o.width() > i.width() ? (0 < l && (l = 0), l < i.width() - o.width() && (l = i.width() - o.width())) : l = i.width() / 2 - o.width() / 2, o.css({
                                                left: (n.left = l) + "px",
                                                top: (n.top = c) + "px"
                                            })
                                        },
                                        mouseup: function(t) {
                                            var i = e.popup.zoomer;
                                            delete i.pointData, $("body").css({
                                                "-webkit-user-select": "",
                                                "-moz-user-select": "",
                                                "-ms-user-select": "",
                                                "user-select": ""
                                            }), o.removeClass("is-moving"), $(document).off("mousemove", i.mousemove), $(document).off("mouseup", i.mouseup)
                                        },
                                        zoomIn: function(t) {
                                            var i = e.popup.zoomer,
                                                n = t || 20;
                                            100 <= i.zoom || (i.zoom = Math.min(100, i.zoom + n), i.updateView(i.zoom))
                                        },
                                        zoomOut: function(t) {
                                            var i = e.popup.zoomer,
                                                n = t || 20;
                                            i.zoom <= i.scale || (i.zoom = Math.max(i.scale, i.zoom - n), i.updateView(i.zoom))
                                        },
                                        updateView: function(t, n) {
                                            var r = this,
                                                s = r.getImageSize().width / 100 * t,
                                                a = r.getImageSize().height / 100 * t,
                                                l = o.width(),
                                                c = o.height(),
                                                u = t && t != r.scale;
                                            if (!r.isActive) return r.center();
                                            u ? (i.addClass("is-zoomed"), o.addClass("is-movable").css({
                                                width: s + "px",
                                                height: a + "px",
                                                maxWidth: "none",
                                                maxHeight: "none"
                                            })) : (i.removeClass("is-zoomed"), o.removeClass("is-movable is-amoving").removeAttr("style")), r.zoom = t || r.scale, r.center(u ? [l, c, r.left, r.top] : null), r.html.find("span").html(r.zoom + "%"), n || r.html.find("input").val(r.zoom), t && e.popup.editor && e.popup.editor.cropper && e.popup.editor.cropper.resize(!0)
                                        },
                                        isZoomed: function() {
                                            return this.zoom > this.scale
                                        },
                                        getImageSize: function() {
                                            return {
                                                width: r.prop("naturalWidth"),
                                                height: r.prop("naturalHeight")
                                            }
                                        },
                                        getImageScale: function() {
                                            return Math.round(100 / (r.prop("naturalWidth") / r.width()))
                                        }
                                    }), e.popup.zoomer.init())
                                },
                                save: function(e, t, i, r, a) {
                                    function c() {
                                        if (e.reader.node) {
                                            var c, u, d, h, m = document.createElement("canvas"),
                                                g = m.getContext("2d"),
                                                v = [0, 180],
                                                y = i || e.type || "image/jpeg",
                                                w = n.editor.quality || 90,
                                                b = function(i, c) {
                                                    var u = i;
                                                    t && (u ? u = f._assets.dataURItoBlob(u, y) : console.error("Error: Failed to execute 'toDataURL' on 'HTMLCanvasElement': Tainted canvases may not be exported.")), !a && u && f.thumbnails.renderThumbnail(e, !0, c || i), r && r(u, e, l, p, o, s), null != n.editor.onSave && "function" == typeof n.editor.onSave && n.editor.onSave(u, e, l, p, o, s), f.set("listInput", null)
                                                };
                                            try {
                                                m.width = e.reader.width, m.height = e.reader.height, g.drawImage(this, 0, 0, e.reader.width, e.reader.height), void 0 !== e.editor.rotation && (e.editor.rotation = e.editor.rotation || 0, m.width = -1 < v.indexOf(e.editor.rotation) ? e.reader.width : e.reader.height, m.height = -1 < v.indexOf(e.editor.rotation) ? e.reader.height : e.reader.width, c = e.editor.rotation * Math.PI / 180, u = .5 * m.width, d = .5 * m.height, g.clearRect(0, 0, m.width, m.height), g.translate(u, d), g.rotate(c), g.translate(.5 * -e.reader.width, .5 * -e.reader.height), g.drawImage(this, 0, 0), g.setTransform(1, 0, 0, 1, 0, 0)), e.editor.crop && (h = g.getImageData(e.editor.crop.left, e.editor.crop.top, e.editor.crop.width, e.editor.crop.height), m.width = e.editor.crop.width, m.height = e.editor.crop.height, g.putImageData(h, 0, 0));
                                                var _, x = m.toDataURL(y, w / 100);
                                                n.editor.maxWidth || n.editor.maxHeight ? ((_ = new Image).src = x, _.onload = function() {
                                                    var e = document.createElement("canvas");
                                                    f.editor.resize(_, e, n.editor.maxWidth, n.editor.maxHeight, !0, !1), x = e.toDataURL(y, w / 100), m = g = e = null, b(x, _)
                                                }) : (m = g = null, b(x))
                                            } catch (c) {
                                                e.popup.editor = null, m = g = null, b(null)
                                            }
                                        }
                                    }
                                    var u = e.popup && e.popup.html && $("html").find(e.popup.html).length,
                                        d = new Image;
                                    if (u) {
                                        if (!e.popup.editor.hasChanges) return;
                                        var h = e.popup.editor.scale || 1;
                                        e.editor.rotation = e.popup.editor.rotation || 0, e.popup.editor.cropper && (e.editor.crop = e.popup.editor.cropper.crop, e.editor.crop.width = e.editor.crop.width / e.popup.editor.cropper.crop.cfWidth / h, e.editor.crop.left = e.editor.crop.left / e.popup.editor.cropper.crop.cfWidth / h, e.editor.crop.height = e.editor.crop.height / e.popup.editor.cropper.crop.cfHeight / h, e.editor.crop.top = e.editor.crop.top / e.popup.editor.cropper.crop.cfHeight / h)
                                    }
                                    f._assets.isMobile() ? (d.onload = c, d.src = e.reader.src) : e.popup.node ? c.call(e.popup.node) : e.reader.node ? c.call(e.reader.node) : e.reader.read(e, (function() {
                                        c.call(e.reader.node)
                                    }))
                                }
                            },
                            sorter: {
                                init: function() {
                                    p.on("mousedown touchstart", n.thumbnails._selectors.sorter, f.sorter.mousedown)
                                },
                                destroy: function() {
                                    p.off("mousedown touchstart", n.thumbnails._selectors.sorter, f.sorter.mousedown)
                                },
                                findItemAtPos: function(e) {
                                    var t = f.sorter.sort,
                                        i = t.items.not(t.item.html),
                                        n = null;
                                    return i.each((function(t, i) {
                                        var o = $(i);
                                        if (e.x > o.offset().left && e.x < o.offset().left + o.outerWidth() && e.y > o.offset().top && e.y < o.offset().top + o.outerHeight()) return n = o, !1
                                    })), n
                                },
                                mousedown: function(e) {
                                    function t() {
                                        f.sorter.sort = {
                                            el: o,
                                            item: s,
                                            items: l.find(n.thumbnails._selectors.item),
                                            x: a.x,
                                            y: a.y,
                                            xItem: a.x - r.offset().left,
                                            yItem: a.y - r.offset().top,
                                            left: r.position().left,
                                            top: r.position().top,
                                            width: r.outerWidth(),
                                            height: r.outerHeight(),
                                            placeholder: n.sorter.placeholder ? $(n.sorter.placeholder) : $(s.html.get(0).cloneNode()).addClass("fileuploader-sorter-placeholder")
                                        }, $("body").css({
                                            "-webkit-user-select": "none",
                                            "-moz-user-select": "none",
                                            "-ms-user-select": "none",
                                            "user-select": "none"
                                        }), $(document).on("mousemove touchmove", f.sorter.mousemove)
                                    }
                                    var i = e.originalEvent.touches && e.originalEvent.touches[0] ? "touchstart" : "mousedown",
                                        o = $(e.target),
                                        r = o.closest(n.thumbnails._selectors.item),
                                        s = f.files.find(r),
                                        a = {
                                            x: "mousedown" != i && r.length ? e.originalEvent.touches[0].pageX : e.pageX,
                                            y: "mousedown" != i && r.length ? e.originalEvent.touches[0].pageY : e.pageY
                                        };
                                    return f.sorter.sort && f.sorter.mouseup(), 3 == e.which || !s || !(!n.sorter.selectorExclude || !o.is(n.sorter.selectorExclude) && !o.closest(n.sorter.selectorExclude).length) || (e.preventDefault(), "mousedown" == i && t(), "touchstart" == i && (f.sorter.isTouchLongPress = !0, setTimeout((function() {
                                        f.sorter.isTouchLongPress && (delete f.sorter.isTouchLongPress, t())
                                    }), n.thumbnails.touchDelay ? n.thumbnails.touchDelay : 0)), void $(document).on("mouseup touchend", f.sorter.mouseup))
                                },
                                mousemove: function(e) {
                                    var t = e.originalEvent.touches && e.originalEvent.touches[0] ? "touchstart" : "mousedown",
                                        i = f.sorter.sort,
                                        o = i.item,
                                        r = l.find(n.thumbnails._selectors.item),
                                        s = $(n.sorter.scrollContainer || window),
                                        a = $(document).scrollLeft(),
                                        c = $(document).scrollTop(),
                                        u = s.scrollLeft(),
                                        d = s.scrollTop(),
                                        h = {
                                            x: "mousedown" == t ? e.clientX : e.originalEvent.touches[0].clientX,
                                            y: "mousedown" == t ? e.clientY : e.originalEvent.touches[0].clientY
                                        },
                                        p = h.x - i.xItem,
                                        m = h.y - i.yItem,
                                        g = h.x - (s.prop("offsetLeft") || 0),
                                        v = h.y - (s.prop("offsetTop") || 0);
                                    p + i.xItem > s.width() && (p = s.width() - i.xItem), p + i.xItem < 0 && (p = 0 - i.xItem), m + i.yItem > s.height() && (m = s.height() - i.yItem), m + i.yItem < 0 && (m = 0 - i.yItem), v <= 0 && s.scrollTop(d - 10), v > s.height() && s.scrollTop(d + 10), g < 0 && s.scrollLeft(u - 10), g > s.width() && s.scrollLeft(u + 10), o.html.addClass("sorting").css({
                                        position: "fixed",
                                        left: p,
                                        top: m,
                                        width: f.sorter.sort.width,
                                        height: f.sorter.sort.height
                                    }), l.find(i.placeholder).length || o.html.after(i.placeholder), i.placeholder.css({
                                        width: f.sorter.sort.width,
                                        height: f.sorter.sort.height
                                    });
                                    var y = f.sorter.findItemAtPos({
                                        x: p + i.xItem + a,
                                        y: m + i.yItem + c
                                    });
                                    if (y) {
                                        var w = i.placeholder.offset().left != y.offset().left,
                                            b = i.placeholder.offset().top != y.offset().top;
                                        if (f.sorter.sort.lastHover && f.sorter.sort.lastHover.el == y[0]) {
                                            if (b && "before" == f.sorter.sort.lastHover.direction && h.y < f.sorter.sort.lastHover.y) return;
                                            if (b && "after" == f.sorter.sort.lastHover.direction && h.y > f.sorter.sort.lastHover.y) return;
                                            if (w && "before" == f.sorter.sort.lastHover.direction && h.x < f.sorter.sort.lastHover.x) return;
                                            if (w && "after" == f.sorter.sort.lastHover.direction && h.x > f.sorter.sort.lastHover.x) return
                                        }
                                        var _ = r.index(o.html),
                                            x = r.index(y) < _ ? "before" : "after";
                                        y[x](i.placeholder), y[x](o.html), f.sorter.sort.lastHover = {
                                            el: y[0],
                                            x: h.x,
                                            y: h.y,
                                            direction: x
                                        }
                                    }
                                },
                                mouseup: function() {
                                    var e = f.sorter.sort,
                                        t = e.item;
                                    $("body").css({
                                        "-webkit-user-select": "",
                                        "-moz-user-select": "",
                                        "-ms-user-select": "",
                                        "user-select": ""
                                    }), t.html.removeClass("sorting").css({
                                        position: "",
                                        left: "",
                                        top: "",
                                        width: "",
                                        height: ""
                                    }), $(document).off("mousemove touchmove", f.sorter.mousemove), $(document).off("mouseup touchend", f.sorter.mouseup), e.placeholder.remove(), delete f.sorter.sort, f.sorter.save()
                                },
                                save: function(e) {
                                    var t, i = 0,
                                        r = [],
                                        a = [],
                                        c = e ? f._itFl : n.thumbnails.itemPrepend ? l.children().get().reverse() : l.children();
                                    $.each(c, (function(e, n) {
                                        var o = n.file ? n : f.files.find($(n));
                                        if (o) {
                                            if (o.upload && !o.uploaded) return;
                                            f.rendered && o.index != i && (f._itSl && f._itSl.indexOf(o.id), 1) && (t = !0), o.index = i, r.push(o), a.push(o.id), i++
                                        }
                                    })), f._itSl && f._itSl.length != a.length && (t = !0), f._itSl = a, t && r.length == f._itFl.length && (f._itFl = r), e || f.set("listInput", "ignoreSorter"), t && null != n.sorter.onSort && "function" == typeof n.sorter.onSort && n.sorter.onSort(r, l, p, o, s)
                                }
                            },
                            upload: {
                                prepare: function(e, t) {
                                    e.upload = {
                                        url: n.upload.url,
                                        data: $.extend({}, n.upload.data),
                                        formData: new FormData,
                                        type: n.upload.type || "POST",
                                        enctype: n.upload.enctype || "multipart/form-data",
                                        cache: !1,
                                        contentType: !1,
                                        processData: !1,
                                        chunk: e.upload ? e.upload.chunk : null,
                                        status: null,
                                        send: function() {
                                            f.upload.send(e, !0)
                                        },
                                        cancel: function(t) {
                                            f.upload.cancel(e, t)
                                        }
                                    }, e.upload.formData.append(s.attr("name"), e.file, !!e.name && e.name), (n.upload.start || t) && f.upload.send(e, t)
                                },
                                send: function(e, t) {
                                    if (e.upload) {
                                        var i, r, a, c, u = function(t) {
                                                e.html && e.html.removeClass("upload-pending upload-loading upload-cancelled upload-failed upload-successful").addClass("upload-" + (t || e.upload.status))
                                            },
                                            d = function() {
                                                var t = 0;
                                                if (0 < f._pfuL.length)
                                                    for (-1 < f._pfuL.indexOf(e) && f._pfuL.splice(f._pfuL.indexOf(e), 1); t < f._pfuL.length;) {
                                                        if (-1 < f._itFl.indexOf(f._pfuL[t]) && f._pfuL[t].upload && !f._pfuL[t].upload.$ajax) {
                                                            f.upload.send(f._pfuL[t], !0);
                                                            break
                                                        }
                                                        f._pfuL.splice(t, 1), t++
                                                    }
                                            };
                                        if (n.upload.synchron && !e.upload.chunk)
                                            if (e.upload.status = "pending", e.html && u(), t) - 1 < f._pfuL.indexOf(e) && f._pfuL.splice(f._pfuL.indexOf(e), 1);
                                            else if (-1 == f._pfuL.indexOf(e) && f._pfuL.push(e), 1 < f._pfuL.length) return;
                                        if (n.upload.chunk && e.file.slice && (i = f._assets.toBytes(n.upload.chunk), 1 < (r = Math.ceil(e.size / i, i)) && !e.upload.chunk && (e.upload.chunk = {
                                                name: e.name,
                                                size: e.file.size,
                                                type: e.file.type,
                                                chunkSize: i,
                                                temp_name: e.name,
                                                loaded: 0,
                                                total: r,
                                                i: -1
                                            }), e.upload.chunk && (e.upload.chunk.i++, delete e.upload.chunk.isFirst, delete e.upload.chunk.isLast, 0 == e.upload.chunk.i && (e.upload.chunk.isFirst = !0), e.upload.chunk.i == e.upload.chunk.total - 1 && (e.upload.chunk.isLast = !0), e.upload.chunk.i <= e.upload.chunk.total - 1 ? (a = e.upload.chunk.i * e.upload.chunk.chunkSize, c = e.file.slice(a, a + e.upload.chunk.chunkSize), e.upload.formData = new FormData, e.upload.formData.append(s.attr("name"), c), e.upload.data._chunkedd = JSON.stringify(e.upload.chunk)) : delete e.upload.chunk)), n.upload.beforeSend && $.isFunction(n.upload.beforeSend) && !1 === n.upload.beforeSend(e, l, p, o, s)) return delete e.upload.chunk, u(), void d();
                                        if (p.addClass("fileuploader-is-uploading"), e.upload.$ajax && e.upload.$ajax.abort(), delete e.upload.$ajax, delete e.upload.send, e.upload.status = "loading", e.html && (n.thumbnails._selectors.start && e.html.find(n.thumbnails._selectors.start).remove(), u()), e.upload.data)
                                            for (var h in e.upload.data) e.upload.data.hasOwnProperty(h) && e.upload.formData.append(h, e.upload.data[h]);
                                        e.upload.data = e.upload.formData, e.upload.xhrStartedAt = e.upload.chunk && e.upload.chunk.xhrStartedAt ? e.upload.chunk.xhrStartedAt : new Date, e.upload.xhr = function() {
                                            var t = $.ajaxSettings.xhr();
                                            return t.upload && t.upload.addEventListener("progress", (function(t) {
                                                e.upload.$ajax && (e.upload.$ajax.total = e.upload.chunk ? e.upload.chunk.size : t.total), f.upload.progressHandling(t, e, e.upload.xhrStartedAt)
                                            }), !1), t
                                        }, e.upload.complete = function(t, i) {
                                            if (e.upload.chunk && !e.upload.chunk.isLast && "success" == i) return f.upload.prepare(e, !0);
                                            d(), delete e.upload.xhrStartedAt;
                                            var r = !0;
                                            $.each(f._itFl, (function(e, t) {
                                                t.upload && t.upload.$ajax && (r = !1)
                                            })), r && (p.removeClass("fileuploader-is-uploading"), null != n.upload.onComplete && "function" == typeof n.upload.onComplete && n.upload.onComplete(l, p, o, s, t, i))
                                        }, e.upload.success = function(t, i, r) {
                                            if (!e.upload.chunk || e.upload.chunk.isLast) delete e.upload.chunk, f.upload.progressHandling(null, e, e.upload.xhrStartedAt, !0), e.uploaded = !0, delete e.upload, e.upload = {
                                                status: "successful",
                                                resend: function() {
                                                    f.upload.retry(e)
                                                }
                                            }, e.html && u(), null != n.upload.onSuccess && $.isFunction(n.upload.onSuccess) && n.upload.onSuccess(t, e, l, p, o, s, i, r), f.set("listInput", null);
                                            else try {
                                                var a = JSON.parse(t);
                                                e.upload.chunk.temp_name = a.fileuploader.temp_name
                                            } catch (t) {}
                                        }, e.upload.error = function(t, i, r) {
                                            e.upload.chunk && (e.upload.chunk.i = Math.max(-1, e.upload.chunk.i - 1)), e.uploaded = !1, e.upload.status = "cancelled" == e.upload.status ? e.upload.status : "failed", e.upload.retry = function() {
                                                f.upload.retry(e)
                                            }, delete e.upload.$ajax, e.html && u(), null != n.upload.onError && $.isFunction(n.upload.onError) && n.upload.onError(e, l, p, o, s, t, i, r)
                                        }, e.upload.$ajax = $.ajax(e.upload)
                                    }
                                },
                                cancel: function(e, t) {
                                    e && e.upload && (e.upload.status = "cancelled", delete e.upload.chunk, e.upload.$ajax && e.upload.$ajax.abort(), delete e.upload.$ajax, t || f.files.remove(e))
                                },
                                retry: function(e) {
                                    e && e.upload && (e.html && n.thumbnails._selectors.retry && e.html.find(n.thumbnails._selectors.retry).remove(), f.upload.prepare(e, !0))
                                },
                                progressHandling: function(e, t, i, r) {
                                    var a, c, u, d, h, m, g, v, y, w;
                                    !e && r && t.upload.$ajax && (e = {
                                        total: t.upload.$ajax.total || t.size,
                                        loaded: t.upload.$ajax.total || t.size,
                                        lengthComputable: !0
                                    }), e.lengthComputable && (a = new Date, c = e.loaded + (t.upload.chunk ? t.upload.chunk.loaded : 0), u = t.upload.chunk ? t.upload.chunk.size : e.total, d = Math.round(100 * c / u), h = t.upload.chunk && t.upload.chunk.xhrStartedAt ? t.upload.chunk.xhrStartedAt : i, g = (m = (a.getTime() - h.getTime()) / 1e3) ? c / m : 0, v = Math.max(0, u - c), y = Math.max(0, m ? v / g : 0), w = {
                                        loaded: c,
                                        loadedInFormat: f._assets.bytesToText(c),
                                        total: u,
                                        totalInFormat: f._assets.bytesToText(u),
                                        percentage: d,
                                        secondsElapsed: m,
                                        secondsElapsedInFormat: f._assets.secondsToText(m, !0),
                                        bytesPerSecond: g,
                                        bytesPerSecondInFormat: f._assets.bytesToText(g) + "/s",
                                        remainingBytes: v,
                                        remainingBytesInFormat: f._assets.bytesToText(v),
                                        secondsRemaining: y,
                                        secondsRemainingInFormat: f._assets.secondsToText(y, !0)
                                    }, t.upload.chunk && (t.upload.chunk.isFirst && (t.upload.chunk.xhrStartedAt = i), e.loaded != e.total || t.upload.chunk.isLast || (t.upload.chunk.loaded += Math.max(e.total, t.upload.chunk.total / t.upload.chunk.chunkSize))), 99 < w.percentage && !r && (w.percentage = 99), n.upload.onProgress && $.isFunction(n.upload.onProgress) && n.upload.onProgress(w, t, l, p, o, s))
                                }
                            },
                            dragDrop: {
                                onDragEnter: function(e) {
                                    clearTimeout(f.dragDrop._timer), n.dragDrop.container.addClass("fileuploader-dragging"), f.set("feedback", f._assets.textParse(n.captions.drop)), null != n.dragDrop.onDragEnter && $.isFunction(n.dragDrop.onDragEnter) && n.dragDrop.onDragEnter(e, l, p, o, s)
                                },
                                onDragLeave: function(e) {
                                    clearTimeout(f.dragDrop._timer), f.dragDrop._timer = setTimeout((function(e) {
                                        return !!f.dragDrop._dragLeaveCheck(e) && (n.dragDrop.container.removeClass("fileuploader-dragging"), f.set("feedback", null), void(null != n.dragDrop.onDragLeave && $.isFunction(n.dragDrop.onDragLeave) && n.dragDrop.onDragLeave(e, l, p, o, s)))
                                    }), 100, e)
                                },
                                onDrop: function(e) {
                                    clearTimeout(f.dragDrop._timer), n.dragDrop.container.removeClass("fileuploader-dragging"), f.set("feedback", null), e && e.originalEvent && e.originalEvent.dataTransfer && e.originalEvent.dataTransfer.files && e.originalEvent.dataTransfer.files.length && (f.isUploadMode() ? f.onChange(e, e.originalEvent.dataTransfer.files) : s.prop("files", e.originalEvent.dataTransfer.files).trigger("change")), null != n.dragDrop.onDrop && $.isFunction(n.dragDrop.onDrop) && n.dragDrop.onDrop(e, l, p, o, s)
                                },
                                _dragLeaveCheck: function(e) {
                                    var t = $(e.currentTarget);
                                    return !(!t.is(n.dragDrop.container) && n.dragDrop.container.find(t).length)
                                }
                            },
                            clipboard: {
                                paste: function(e) {
                                    if (f._assets.isIntoView(o) && e.originalEvent.clipboardData && e.originalEvent.clipboardData.items && e.originalEvent.clipboardData.items.length) {
                                        var t = e.originalEvent.clipboardData.items;
                                        f.clipboard.clean();
                                        for (var i, r, s = 0; s < t.length; s++) - 1 === t[s].type.indexOf("image") && -1 === t[s].type.indexOf("text/uri-list") || (i = t[s].getAsFile(), r = 1 < n.clipboardPaste ? n.clipboardPaste : 2e3, i && (i._name = f._assets.generateFileName(-1 != i.type.indexOf("/") ? i.type.split("/")[1].toString().toLowerCase() : "png", "Clipboard "), f.set("feedback", f._assets.textParse(n.captions.paste, {
                                            ms: r / 1e3
                                        })), f.clipboard._timer = setTimeout((function() {
                                            f.set("feedback", null), f.onChange(e, [i])
                                        }), r - 2)))
                                    }
                                },
                                clean: function() {
                                    f.clipboard._timer && (clearTimeout(f.clipboard._timer), delete f.clipboard._timer, f.set("feedback", null))
                                }
                            },
                            files: {
                                add: function(e, t) {
                                    var i, o, r = e._name || e.name,
                                        a = e.size,
                                        l = f._assets.bytesToText(a),
                                        c = e.type,
                                        u = c ? c.split("/", 1).toString().toLowerCase() : "",
                                        d = -1 != r.indexOf(".") ? r.split(".").pop().toLowerCase() : "",
                                        h = r.substr(0, r.length - (-1 != r.indexOf(".") ? d.length + 1 : d.length)),
                                        p = e.data || {};
                                    return (p = {
                                        name: r,
                                        title: h,
                                        size: a,
                                        size2: l,
                                        type: c,
                                        format: u,
                                        extension: d,
                                        data: p,
                                        file: e.file || e,
                                        reader: {
                                            read: function(e, t, i) {
                                                return f.files.read(o, e, t, i)
                                            }
                                        },
                                        id: "updated" == t ? e.id : Date.now(),
                                        input: "choosed" == t ? s : null,
                                        html: null,
                                        choosed: "choosed" == t,
                                        appended: "appended" == t || "updated" == t,
                                        uploaded: "uploaded" == t
                                    }).data.listProps || (p.data.listProps = {}), !p.data.url && p.appended && (p.data.url = p.file), "updated" != t ? (f._itFl.push(p), i = f._itFl.length - 1, o = f._itFl[i]) : (i = f._itFl.indexOf(e), f._itFl[i] = o = p), o.remove = function() {
                                        f.files.remove(o)
                                    }, n.editor && "image" == u && (o.editor = {
                                        rotate: !1 !== n.editor.rotation ? function(e) {
                                            f.editor.rotate(o, e)
                                        } : null,
                                        cropper: !1 !== n.editor.cropper ? function(e) {
                                            f.editor.crop(o, e)
                                        } : null,
                                        save: function(e, t, i, n) {
                                            f.editor.save(o, t, i, e, n)
                                        }
                                    }), e.local && (o.local = e.local), i
                                },
                                read: function(e, t, i, r, a) {
                                    if (f.isFileReaderSupported() && !e.data.readerSkip) {
                                        var c = new FileReader,
                                            u = window.URL || window.webkitURL,
                                            d = a && e.data.thumbnail,
                                            h = "string" != typeof e.file,
                                            m = function() {
                                                var t = e.reader._callbacks || [];
                                                e.reader._timer && (clearTimeout(e.reader._timer), delete e.reader._timer), delete e.reader._callbacks, delete e.reader._FileReader;
                                                for (var i = 0; i < t.length; i++) $.isFunction(t[i]) && t[i](e, l, p, o, s);
                                                n.onFileRead && $.isFunction(n.onFileRead) && n.onFileRead(e, l, p, o, s)
                                            };
                                        if ((e.reader.src || e.reader._FileReader) && !r || (e.reader = {
                                                _FileReader: c,
                                                _callbacks: [],
                                                read: e.reader.read
                                            }), e.reader.src && !r) return t && $.isFunction(t) ? t(e, l, p, o, s) : null;
                                        if (t && e.reader._callbacks && (e.reader._callbacks.push(t), 1 < e.reader._callbacks.length)) return;
                                        if ("astext" == e.format) c.onload = function(t) {
                                            var i = document.createElement("div");
                                            e.reader.node = i, e.reader.src = t.target.result, e.reader.length = t.target.result.length, i.innerHTML = e.reader.src.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;"), m()
                                        }, c.onerror = function() {
                                            m(), e.reader = {
                                                read: e.reader.read
                                            }
                                        }, h ? c.readAsText(e.file) : $.ajax({
                                            url: e.file,
                                            success: function(e) {
                                                c.onload({
                                                    target: {
                                                        result: e
                                                    }
                                                })
                                            },
                                            error: function() {
                                                c.onerror()
                                            }
                                        });
                                        else if ("image" == e.format || d) {
                                            if (c.onload = function(t) {
                                                    function i() {
                                                        e.data && e.data.readerCrossOrigin && o.setAttribute("crossOrigin", e.data.readerCrossOrigin), o.src = t.target.result + (!e.data.readerForce && !r || h || d || -1 != t.target.result.indexOf("data:image") ? "" : (-1 == t.target.result.indexOf("?") ? "?" : "&") + "d=" + Date.now()), o.onload = function() {
                                                            if (e.reader.exifOrientation) {
                                                                var t = document.createElement("canvas"),
                                                                    i = t.getContext("2d"),
                                                                    n = o,
                                                                    r = Math.abs(e.reader.exifOrientation),
                                                                    s = e.reader.exifOrientation < 0 ? e.reader.exifOrientation : 0,
                                                                    a = [0, 180];
                                                                1 == r && (r = 0), t.width = n.naturalWidth, t.height = n.naturalHeight, i.drawImage(n, 0, 0), t.width = -1 < a.indexOf(r) ? n.naturalWidth : n.naturalHeight, t.height = -1 < a.indexOf(r) ? n.naturalHeight : n.naturalWidth;
                                                                var l = r * Math.PI / 180,
                                                                    c = .5 * t.width,
                                                                    h = .5 * t.height;
                                                                return i.clearRect(0, 0, t.width, t.height), i.translate(c, h), i.rotate(l), i.translate(.5 * -n.naturalWidth, .5 * -n.naturalHeight), s && (-1 < [-1, -180].indexOf(s) ? (i.translate(t.width, 0), i.scale(-1, 1)) : -1 < [-90, -270].indexOf(s) && (i.translate(0, t.width), i.scale(1, -1))), i.drawImage(n, 0, 0), i.setTransform(1, 0, 0, 1, 0, 0), o.src = t.toDataURL(e.type, 1), void delete e.reader.exifOrientation
                                                            }
                                                            e.reader.node = o, e.reader.src = o.src, e.reader.width = o.width, e.reader.height = o.height, e.reader.ratio = f._assets.pxToRatio(e.reader.width, e.reader.height), v && u.revokeObjectURL(v), m(), d && (e.reader = {
                                                                read: e.reader.read
                                                            })
                                                        }, o.onerror = function() {
                                                            m(), e.reader = {
                                                                read: e.reader.read
                                                            }
                                                        }
                                                    }
                                                    var o = new Image;
                                                    n.thumbnails.exif && e.choosed ? f._assets.getExifOrientation(e.file, (function(t) {
                                                        var n;
                                                        t && ("Chrome" == (n = f._assets.getDevice.init()).browser.name && 81 <= n.browser.version || "Safari" == n.browser.name && 13.4 <= n.os.version ? delete e.reader.exifOrientation : e.reader.exifOrientation = t), i()
                                                    })) : i()
                                                }, c.onerror = function() {
                                                    m(), e.reader = {
                                                        read: e.reader.read
                                                    }
                                                }, !d && e.size > f._assets.toBytes(n.reader.maxSize)) return c.onerror();
                                            h ? n.thumbnails.useObjectUrl && n.thumbnails.canvasImage && u ? c.onload({
                                                target: {
                                                    result: v = u.createObjectURL(e.file)
                                                }
                                            }) : c.readAsDataURL(e.file) : c.onload({
                                                target: {
                                                    result: d ? e.data.thumbnail : e.file
                                                }
                                            })
                                        } else if ("video" == e.format || "audio" == e.format) {
                                            var g, v, y = (g = document.createElement(e.format)).canPlayType(e.type);
                                            if (c.onerror = function() {
                                                    e.reader.node = null, m(), e.reader = {
                                                        read: e.reader.read
                                                    }
                                                }, u && "" !== y) {
                                                if (a && !n.thumbnails.videoThumbnail) return e.reader.node = g, m(), void(e.reader = {
                                                    read: e.reader.read
                                                });
                                                v = h ? u.createObjectURL(e.file) : e.file, g.onloadedmetadata = function() {
                                                    e.reader.node = g, e.reader.src = g.src, e.reader.duration = g.duration, e.reader.duration2 = f._assets.secondsToText(g.duration), "video" == e.format && (e.reader.width = g.videoWidth, e.reader.height = g.videoHeight, e.reader.ratio = f._assets.pxToRatio(e.reader.width, e.reader.height))
                                                }, g.onerror = function() {
                                                    m(), e.reader = {
                                                        read: e.reader.read
                                                    }
                                                }, g.onloadeddata = function() {
                                                    "video" == e.format ? setTimeout((function() {
                                                        var t = document.createElement("canvas"),
                                                            i = t.getContext("2d");
                                                        t.width = g.videoWidth, t.height = g.videoHeight, i.drawImage(g, 0, 0, t.width, t.height), e.reader.frame = f._assets.isBlankCanvas(t) ? null : t.toDataURL(), t = i = null, m()
                                                    }), 300) : m()
                                                }, setTimeout((function() {
                                                    e.data && e.data.readerCrossOrigin && g.setAttribute("crossOrigin", e.data.readerCrossOrigin), g.src = v + "#t=1"
                                                }), 100)
                                            } else c.onerror()
                                        } else "application/pdf" == e.type && n.thumbnails.pdf && !i ? (g = document.createElement("iframe"), v = h ? u.createObjectURL(e.file) : e.file, (n.thumbnails.pdf.viewer || f._assets.hasPlugin("pdf")) && (g.src = (n.thumbnails.pdf.viewer || "") + v, e.reader.node = g, e.reader.src = v), m()) : (c.onload = function(t) {
                                            e.reader.src = t.target.result, e.reader.length = t.target.result.length, m()
                                        }, c.onerror = function(t) {
                                            m(), e.reader = {
                                                read: e.reader.read
                                            }
                                        }, h ? c[i || "readAsBinaryString"](e.file) : m());
                                        e.reader._timer = setTimeout(c.onerror, a ? n.reader.thumbnailTimeout : n.reader.timeout)
                                    } else t && t(e, l, p, o, s);
                                    return null
                                },
                                list: function(e, t, i, r) {
                                    var a = [];
                                    return !n.sorter || i || r && "ignoreSorter" == r || f.sorter.save(!0), $.each(f._itFl, (function(i, n) {
                                        var o = n;
                                        if (o.upload && !o.uploaded) return !0;
                                        if ((t || e) && (o = (o.choosed && !o.uploaded ? "0:/" : "") + (t && null !== f.files.getItemAttr(n, t) ? f.files.getItemAttr(o, t) : o.local || o["string" == typeof o.file ? "file" : "name"])), e && (o = {
                                                file: o
                                            }, n.editor && (n.editor.crop || n.editor.rotation) && (o.editor = {}, n.editor.rotation && (o.editor.rotation = n.editor.rotation), n.editor.crop && (o.editor.crop = n.editor.crop)), void 0 !== n.index && (o.index = n.index), n.data && n.data.listProps))
                                            for (var r in n.data.listProps) o[r] = n.data.listProps[r];
                                        a.push(o)
                                    })), a = n.onListInput && $.isFunction(n.onListInput) ? n.onListInput(a, f._itFl, n.listInput, l, p, o, s) : a, e ? JSON.stringify(a) : a
                                },
                                check: function(e, t, i) {
                                    var r = ["warning", null, !1, !1];
                                    if (null != n.limit && i && t.length + f._itFl.length - 1 > n.limit) return r[1] = f._assets.textParse(n.captions.errors.filesLimit), r[3] = !0, r;
                                    if (null != n.maxSize && i) {
                                        var a = 0;
                                        if ($.each(f._itFl, (function(e, t) {
                                                a += t.size
                                            })), a -= e.size, $.each(t, (function(e, t) {
                                                a += t.size
                                            })), a > f._assets.toBytes(n.maxSize)) return r[1] = f._assets.textParse(n.captions.errors.filesSizeAll), r[3] = !0, r
                                    }
                                    return null != n.onFilesCheck && $.isFunction(n.onFilesCheck) && i && !1 === n.onFilesCheck(t, n, l, p, o, s) ? (r[3] = !0, r) : null == n.extensions || -1 != $.inArray(e.extension, n.extensions) || n.extensions.filter((function(t) {
                                        return e.type.length && (-1 < t.indexOf(e.type) || -1 < t.indexOf(e.format + "/*"))
                                    })).length ? null != n.disallowedExtensions && (-1 < $.inArray(e.extension, n.disallowedExtensions) || n.disallowedExtensions.filter((function(t) {
                                        return !e.type.length || -1 < t.indexOf(e.type) || -1 < t.indexOf(e.format + "/*")
                                    })).length) ? (r[1] = f._assets.textParse(n.captions.errors.filesType, e), r) : null != n.fileMaxSize && e.size > f._assets.toBytes(n.fileMaxSize) ? (r[1] = f._assets.textParse(n.captions.errors.fileSize, e), r) : 0 == e.size && "" == e.type ? (r[1] = f._assets.textParse(n.captions.errors.remoteFile, e), r) : 4096 != e.size && 64 != e.size || "" != e.type ? !(!n.skipFileNameCheck && (a = !1, $.each(f._itFl, (function(i, o) {
                                        if (o != e && 1 == o.choosed && o.file && o.name == e.name) return a = !0, o.file.size != e.size || o.file.type != e.type || e.file.lastModified && o.file.lastModified && o.file.lastModified != e.file.lastModified || !(1 < t.length) ? (r[1] = f._assets.textParse(n.captions.errors.fileName, e), r[2] = !1) : r[2] = !0, !1
                                    })), a)) || r : (r[1] = f._assets.textParse(n.captions.errors.folderUpload, e), r) : (r[1] = f._assets.textParse(n.captions.errors.filesType, e), r)
                                },
                                append: function(e) {
                                    if ((e = $.isArray(e) ? e : [e]).length) {
                                        for (var t, i = 0; i < e.length; i++) f._assets.keyCompare(e[i], ["name", "file", "size", "type"]) && (t = f._itFl[f.files.add(e[i], "appended")], n.thumbnails && f.thumbnails.item(t));
                                        return f.set("feedback", null), f.set("listInput", null), n.afterSelect && $.isFunction(n.afterSelect) && n.afterSelect(l, p, o, s), 1 != e.length || t
                                    }
                                },
                                update: function(e, t) {
                                    var i, o; - 1 == f._itFl.indexOf(e) || e.upload && e.upload.$ajax || (i = e, o = f.files.add($.extend(e, t), "updated"), (e = f._itFl[o]).popup && e.popup.close && e.popup.close(), n.thumbnails && i.html && f.thumbnails.item(e, i.html), f.set("listInput", null))
                                },
                                find: function(e) {
                                    var t = null;
                                    return $.each(f._itFl, (function(i, n) {
                                        if (n.html && n.html.is(e)) return t = n, !1
                                    })), t
                                },
                                remove: function(e, t) {
                                    var i;
                                    !t && n.onRemove && $.isFunction(n.onRemove) && !1 === n.onRemove(e, l, p, o, s) || (e.html && (n.thumbnails.onItemRemove && $.isFunction(n.thumbnails.onItemRemove) && !t ? n.thumbnails.onItemRemove(e.html, l, p, o, s) : e.html.remove()), e.upload && e.upload.$ajax && e.upload.cancel && e.upload.cancel(!0), e.popup && e.popup.close && (e.popup.node = null, e.popup.close()), e.reader.src && (e.reader.node = null, URL.revokeObjectURL(e.reader.src)), e.input && (i = !0, $.each(f._itFl, (function(n, o) {
                                        if (e != o && (e.input == o.input || t && 1 < e.input.get(0).files.length)) return i = !1
                                    })), i && (f.isAddMoreMode() && 1 < sl.length ? (f.set("nextInput"), sl.splice(sl.indexOf(e.input), 1), e.input.remove()) : f.set("input", ""))), -1 < f._pfrL.indexOf(e) && f._pfrL.splice(f._pfrL.indexOf(e), 1), -1 < f._pfuL.indexOf(e) && f._pfuL.splice(f._pfuL.indexOf(e), 1), -1 < f._itFl.indexOf(e) && f._itFl.splice(f._itFl.indexOf(e), 1), e = null, 0 == f._itFl.length && f.reset(), f.set("feedback", null), f.set("listInput", null))
                                },
                                getItemAttr: function(e, t) {
                                    var i = null;
                                    return e && (void 0 !== e[t] ? i = e[t] : e.data && void 0 !== e.data[t] && (i = e.data[t])), i
                                },
                                clear: function(e) {
                                    for (var t = 0; t < f._itFl.length;) {
                                        var i = f._itFl[t];
                                        e || !i.appended ? (i.html && i.html && f._itFl[t].html.remove(), i.upload && i.upload.$ajax && f.upload.cancel(i), f._itFl.splice(t, 1)) : t++
                                    }
                                    f.set("feedback", null), f.set("listInput", null), 0 == f._itFl.length && n.onEmpty && $.isFunction(n.onEmpty) && n.onEmpty(l, p, o, s)
                                }
                            },
                            reset: function(e) {
                                e && (f.clipboard._timer && f.clipboard.clean(), $.each(sl, (function(e, t) {
                                    t.is(s) || t.remove()
                                })), sl = [], f.set("input", "")), f._itRl = [], f._pfuL = [], f._pfrL = [], f.files.clear(e)
                            },
                            destroy: function() {
                                f.reset(!0), f.bindUnbindEvents(!1), s.closest("form").off("reset", f.reset), s.removeAttr("style"), p.before(s), delete s.get(0).FileUploader, p.remove(), p = o = l = null
                            },
                            _assets: {
                                toBytes: function(e) {
                                    return 1048576 * parseInt(e)
                                },
                                bytesToText: function(e) {
                                    if (0 == e) return "0 Byte";
                                    var t = Math.floor(Math.log(e) / Math.log(1024)),
                                        i = e / Math.pow(1024, t),
                                        n = !1;
                                    return 1e3 < i && t < 8 && (t += 1, i = e / Math.pow(1024, t), n = !0), i.toPrecision(n ? 2 : 3) + " " + ["Bytes", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"][t]
                                },
                                escape: function(e) {
                                    return ("" + e).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;")
                                },
                                secondsToText: function(e, t) {
                                    e = parseInt(Math.round(e), 10);
                                    var i = Math.floor(e / 3600),
                                        n = Math.floor((e - 3600 * i) / 60),
                                        o = "";
                                    return (0 < i || !t) && (o += (i < 10 ? "0" : "") + i + (t ? "h " : ":")), (0 < n || !t) && (o += (n < 10 && !t ? "0" : "") + n + (t ? "m " : ":")), o + ((e = e - 3600 * i - 60 * n) < 10 && !t ? "0" : "") + e + (t ? "s" : "")
                                },
                                pxToRatio: function(e, t) {
                                    var i = function e(t, i) {
                                        return 0 == i ? t : e(i, t % i)
                                    }(e, t);
                                    return [e / i, t / i]
                                },
                                ratioToPx: function(e, t, i) {
                                    return (i = (i + "").split(":")).length < 2 ? null : [t / i[1] * i[0], e / i[0] * i[1], i[0], i[1]]
                                },
                                hasAttr: function(e, t) {
                                    var i = (t = t || s).attr(e);
                                    return !(!i || void 0 === i)
                                },
                                copyAllAttributes: function(e, t) {
                                    return $.each(t.get(0).attributes, (function() {
                                        "required" != this.name && "type" != this.name && "id" != this.name && e.attr(this.name, this.value)
                                    })), t.get(0).FileUploader && (e.get(0).FileUploader = t.get(0).FileUploader), e
                                },
                                isIntoView: function(e) {
                                    var t = $(window).scrollTop(),
                                        i = t + window.innerHeight,
                                        n = e.offset().top,
                                        o = n + e.outerHeight();
                                    return t < n && o < i
                                },
                                isBlankCanvas: function(e) {
                                    var t = document.createElement("canvas"),
                                        i = !1;
                                    t.width = e.width, t.height = e.height;
                                    try {
                                        i = e.toDataURL() == t.toDataURL()
                                    } catch (e) {}
                                    return t = null, i
                                },
                                generateFileName: function(e, t) {
                                    function i(e) {
                                        return e < 10 && (e = "0" + e), e
                                    }
                                    var n = new Date;
                                    e = e ? "." + e : "";
                                    return (t = t || "") + n.getFullYear() + "-" + i(n.getMonth() + 1) + "-" + i(n.getDate()) + " " + i(n.getHours()) + "-" + i(n.getMinutes()) + "-" + i(n.getSeconds()) + e
                                },
                                arrayBufferToBase64: function(e) {
                                    for (var t = "", i = new Uint8Array(e), n = 0; n < i.byteLength; n++) t += String.fromCharCode(i[n]);
                                    return window.btoa(t)
                                },
                                dataURItoBlob: function(e, t) {
                                    for (var i = atob(e.split(",")[1]), n = e.split(",")[0].split(":")[1].split(";")[0], o = new ArrayBuffer(i.length), r = new Uint8Array(o), s = 0; s < i.length; s++) r[s] = i.charCodeAt(s);
                                    var a = new DataView(o);
                                    return new Blob([a.buffer], {
                                        type: t || n
                                    })
                                },
                                getExifOrientation: function(e, t) {
                                    var i = new FileReader,
                                        n = {
                                            1: 0,
                                            2: -1,
                                            3: 180,
                                            4: -180,
                                            5: -90,
                                            6: 90,
                                            7: -270,
                                            8: 270
                                        };
                                    i.onload = function(e) {
                                        var i = new DataView(e.target.result),
                                            o = 1;
                                        if (i.byteLength && 65496 == i.getUint16(0, !1))
                                            for (var r = i.byteLength, s = 2; s < r && !(i.getUint16(s + 2, !1) <= 8);) {
                                                var a = i.getUint16(s, !1);
                                                if (s += 2, 65505 == a) {
                                                    if (1165519206 != i.getUint32(s += 2, !1)) break;
                                                    var l, c = 18761 == i.getUint16(s += 6, !1);
                                                    s += i.getUint32(s + 4, c), l = i.getUint16(s, c), s += 2;
                                                    for (var u = 0; u < l; u++)
                                                        if (274 == i.getUint16(s + 12 * u, c)) {
                                                            o = i.getUint16(s + 12 * u + 8, c), r = 0;
                                                            break
                                                        }
                                                } else {
                                                    if (65280 != (65280 & a)) break;
                                                    s += i.getUint16(s, !1)
                                                }
                                            }
                                        t && t(n[o] || 0)
                                    }, i.onerror = function() {
                                        t && t("")
                                    }, i.readAsArrayBuffer(e)
                                },
                                textParse: function textParse(text, opts, noOptions) {
                                    switch (opts = noOptions ? opts || {} : $.extend({}, {
                                        limit: n.limit,
                                        maxSize: n.maxSize,
                                        fileMaxSize: n.fileMaxSize,
                                        extensions: n.extensions ? n.extensions.join(", ") : null,
                                        captions: n.captions
                                    }, opts), _typeof(text)) {
                                        case "string":
                                            for (var key in opts) - 1 < ["name", "file", "type", "size"].indexOf(key) && (opts[key] = f._assets.escape(opts[key]));
                                            text = text.replace(/\$\{(.*?)\}/g, (function(match, a) {
                                                var a = a.replace(/ /g, ""),
                                                    r = void 0 !== opts[a] && null != opts[a] ? opts[a] : "";
                                                if (-1 < ["reader.node"].indexOf(a)) return match;
                                                if (-1 < a.indexOf(".") || -1 < a.indexOf("[]")) {
                                                    var x = a.substr(0, -1 < a.indexOf(".") ? a.indexOf(".") : -1 < a.indexOf("[") ? a.indexOf("[") : a.length),
                                                        y = a.substring(x.length);
                                                    if (opts[x]) try {
                                                        r = eval('opts["' + x + '"]' + y)
                                                    } catch (e) {
                                                        r = ""
                                                    }
                                                }
                                                return r = $.isFunction(r) ? f._assets.textParse(r) : r, r || ""
                                            }));
                                            break;
                                        case "function":
                                            text = f._assets.textParse(text(opts, l, p, o, s, f._assets.textParse), opts, noOptions)
                                    }
                                    return opts = null, text
                                },
                                textToColor: function(e) {
                                    if (!e || 0 == e.length) return !1;
                                    for (var t = 0, i = 0; t < e.length; i = e.charCodeAt(t++) + ((i << 5) - i));
                                    t = 0;
                                    for (var n = "#"; t < 3; n += ("00" + (i >> 2 * t++ & 255).toString(16)).slice(-2));
                                    return n
                                },
                                isBrightColor: function(e) {
                                    var t, i, n;
                                    return 194 < ((n = (t = e) && t.constructor == Array && 3 == t.length ? t : (i = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(t)) ? [parseInt(i[1]), parseInt(i[2]), parseInt(i[3])] : (i = /rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(t)) ? [2.55 * parseFloat(i[1]), 2.55 * parseFloat(i[2]), 2.55 * parseFloat(i[3])] : (i = /#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(t)) ? [parseInt(i[1], 16), parseInt(i[2], 16), parseInt(i[3], 16)] : (i = /#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(t)) ? [parseInt(i[1] + i[1], 16), parseInt(i[2] + i[2], 16), parseInt(i[3] + i[3], 16)] : "undefined" != typeof colors ? colors[$.trim(t).toLowerCase()] : null) ? .2126 * n[0] + .7152 * n[1] + .0722 * n[2] : null)
                                },
                                keyCompare: function(e, t) {
                                    for (var i = 0; i < t.length; i++)
                                        if (!$.isPlainObject(e) || !e.hasOwnProperty(t[i])) throw new Error('Could not find valid *strict* attribute "' + t[i] + '" in ' + JSON.stringify(e, null, 4));
                                    return !0
                                },
                                dialogs: {
                                    alert: n.dialogs.alert,
                                    confirm: n.dialogs.confirm
                                },
                                hasPlugin: function(e) {
                                    if (navigator.plugins && navigator.plugins.length)
                                        for (var t in navigator.plugins)
                                            if (navigator.plugins[t].name && -1 < navigator.plugins[t].name.toLowerCase().indexOf(e)) return !0;
                                    return !1
                                },
                                isIE: function() {
                                    return -1 < navigator.userAgent.indexOf("MSIE ") || -1 < navigator.userAgent.indexOf("Trident/") || -1 < navigator.userAgent.indexOf("Edge")
                                },
                                isMobile: function() {
                                    return void 0 !== window.orientation || -1 !== navigator.userAgent.indexOf("IEMobile")
                                },
                                getDevice: {
                                    options: [],
                                    header: [navigator.platform, navigator.userAgent, navigator.appVersion, navigator.vendor, window.opera],
                                    dataos: [{
                                        name: "Windows Phone",
                                        value: "Windows Phone",
                                        version: "OS"
                                    }, {
                                        name: "Windows",
                                        value: "Win",
                                        version: "NT"
                                    }, {
                                        name: "iPhone",
                                        value: "iPhone",
                                        version: "OS"
                                    }, {
                                        name: "iPad",
                                        value: "iPad",
                                        version: "OS"
                                    }, {
                                        name: "Kindle",
                                        value: "Silk",
                                        version: "Silk"
                                    }, {
                                        name: "Android",
                                        value: "Android",
                                        version: "Android"
                                    }, {
                                        name: "PlayBook",
                                        value: "PlayBook",
                                        version: "OS"
                                    }, {
                                        name: "BlackBerry",
                                        value: "BlackBerry",
                                        version: "/"
                                    }, {
                                        name: "Macintosh",
                                        value: "Mac",
                                        version: "OS X"
                                    }, {
                                        name: "Linux",
                                        value: "Linux",
                                        version: "rv"
                                    }, {
                                        name: "Palm",
                                        value: "Palm",
                                        version: "PalmOS"
                                    }],
                                    databrowser: [{
                                        name: "Chrome",
                                        value: "Chrome",
                                        version: "Chrome"
                                    }, {
                                        name: "Firefox",
                                        value: "Firefox",
                                        version: "Firefox"
                                    }, {
                                        name: "Safari",
                                        value: "Safari",
                                        version: "Version"
                                    }, {
                                        name: "Internet Explorer",
                                        value: "MSIE",
                                        version: "MSIE"
                                    }, {
                                        name: "Opera",
                                        value: "Opera",
                                        version: "Opera"
                                    }, {
                                        name: "BlackBerry",
                                        value: "CLDC",
                                        version: "CLDC"
                                    }, {
                                        name: "Mozilla",
                                        value: "Mozilla",
                                        version: "Mozilla"
                                    }],
                                    init: function() {
                                        var e = this.header.join(" ");
                                        return {
                                            os: this.matchItem(e, this.dataos),
                                            browser: this.matchItem(e, this.databrowser)
                                        }
                                    },
                                    matchItem: function(e, t) {
                                        var i, n, o, r = 0,
                                            s = 0;
                                        for (r = 0; r < t.length; r += 1)
                                            if (new RegExp(t[r].value, "i").test(e)) {
                                                if (i = new RegExp(t[r].version + "[- /:;]([\\d._]+)", "i"), o = "", (n = e.match(i)) && n[1] && (n = n[1]), n)
                                                    for (n = n.split(/[._]+/), s = 0; s < n.length; s += 1) o += 0 === s ? n[s] + "." : n[s];
                                                else o = "0";
                                                return {
                                                    name: t[r].name,
                                                    version: parseFloat(o)
                                                }
                                            }
                                        return {
                                            name: "unknown",
                                            version: 0
                                        }
                                    }
                                }
                            },
                            isSupported: function() {
                                return s && s.get(0).files
                            },
                            isFileReaderSupported: function() {
                                return window.File && window.FileList && window.FileReader
                            },
                            isDefaultMode: function() {
                                return !(n.upload || n.addMore && 1 != n.limit)
                            },
                            isAddMoreMode: function() {
                                return !n.upload && n.addMore && 1 != n.limit
                            },
                            isUploadMode: function() {
                                return n.upload
                            },
                            _itFl: [],
                            _pfuL: [],
                            _pfrL: [],
                            disabled: !1,
                            locked: !1,
                            rendered: !1
                        };
                    return n.enableApi && (s.get(0).FileUploader = {
                        open: function() {
                            s.trigger("click")
                        },
                        getOptions: function() {
                            return n
                        },
                        getParentEl: function() {
                            return p
                        },
                        getInputEl: function() {
                            return s
                        },
                        getNewInputEl: function() {
                            return o
                        },
                        getListEl: function() {
                            return l
                        },
                        getListInputEl: function() {
                            return n.listInput
                        },
                        getFiles: function() {
                            return f._itFl
                        },
                        getChoosedFiles: function() {
                            return f._itFl.filter((function(e) {
                                return e.choosed
                            }))
                        },
                        getAppendedFiles: function() {
                            return f._itFl.filter((function(e) {
                                return e.appended
                            }))
                        },
                        getUploadedFiles: function() {
                            return f._itFl.filter((function(e) {
                                return e.uploaded
                            }))
                        },
                        getFileList: function(e, t) {
                            return f.files.list(e, t, !0)
                        },
                        updateFileList: function() {
                            return f.set("listInput", null), !0
                        },
                        setOption: function(e, t) {
                            return n[e] = t, !0
                        },
                        findFile: function(e) {
                            return f.files.find(e)
                        },
                        add: function(e, t, i) {
                            return !!f.isUploadMode() && ((o = e instanceof Blob ? e : (n = /data:[a-z]+\/[a-z]+\;base64\,/.test(e) ? e : "data:" + t + ";base64," + btoa(e), f._assets.dataURItoBlob(n, t)))._name = i || f._assets.generateFileName(-1 != o.type.indexOf("/") ? o.type.split("/")[1].toString().toLowerCase() : "File "), f.onChange(null, [o]), !0);
                            var n, o
                        },
                        append: function(e) {
                            return f.files.append(e)
                        },
                        update: function(e, t) {
                            return f.files.update(e, t)
                        },
                        remove: function(e) {
                            return e = e.jquery ? f.files.find(e) : e, -1 < f._itFl.indexOf(e) && (f.files.remove(e), !0)
                        },
                        uploadStart: function() {
                            var e = this.getChoosedFiles() || [];
                            if (f.isUploadMode() && 0 < e.length && !e[0].uploaded)
                                for (var t = 0; t < e.length; t++) f.upload.send(e[t])
                        },
                        reset: function() {
                            return f.reset(!0), !0
                        },
                        disable: function(e) {
                            return f.set("disabled", !0), e && (f.locked = !0), !0
                        },
                        enable: function() {
                            return f.set("disabled", !1), !(f.locked = !1)
                        },
                        destroy: function() {
                            return f.destroy(), !0
                        },
                        isEmpty: function() {
                            return 0 == f._itFl.length
                        },
                        isDisabled: function() {
                            return f.disabled
                        },
                        isRendered: function() {
                            return f.rendered
                        },
                        assets: f._assets,
                        getPluginMode: function() {
                            return f.isDefaultMode() ? "default" : f.isAddMoreMode() ? "addMore" : f.isUploadMode() ? "upload" : void 0
                        }
                    }), f.init(), this
                }))
            }, $.fileuploader = {
                getInstance: function(e) {
                    var t = e.prop ? e : $(e);
                    return t.length ? t.get(0).FileUploader : null
                }
            }, $.fn.fileuploader.languages = {
                cz: {
                    button: function(e) {
                        return "Procházet " + (1 == e.limit ? "soubor" : "soubory")
                    },
                    feedback: function(e) {
                        return "Vyberte " + (1 == e.limit ? "soubor" : "soubory") + ", který chcete nahrát"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? "vybráno souborů" : "vybrán soubor")
                    },
                    confirm: "Potvrdit",
                    cancel: "Zrušeni",
                    name: "Jméno",
                    type: "Format",
                    size: "Velikost",
                    dimensions: "Rozměry",
                    duration: "Trvání",
                    crop: "Oříznout",
                    rotate: "Otočit",
                    sort: "Roztřídit",
                    open: "Otevřít",
                    download: "Stáhnout",
                    remove: "Odstranit",
                    drop: "Pro nahrání přetahněte soubor sem",
                    paste: '<div class="fileuploader-pending-loader"></div> Vkládání souboru, klikněte zde pro zrušeni',
                    removeConfirmation: "Jste si jisti, že chcete odstranit tento soubor?",
                    errors: {
                        filesLimit: function(e) {
                            return "Pouze ${limit} " + (1 == e.limit ? "soubor může být nahrán" : "soubory mohou byt nahrané") + "."
                        },
                        filesType: "Pouze ${extensions} soubory mohou byt nahrané.",
                        fileSize: "${name} příliš velký! Prosím, vyberte soubor do velikosti ${fileMaxSize} MB.",
                        filesSizeAll: "Vybraný soubor je příliš velký! Prosím, vyberte soubor do velikosti ${maxSize} MB.",
                        fileName: "Soubor s tímto názvem  ${name} byl už vybran.",
                        remoteFile: "Vzdálené soubory nejsou povoleny.",
                        folderUpload: "Složky nejsou povolené."
                    }
                },
                de: {
                    button: function(e) {
                        return (1 == e.limit ? "Datei" : "Dateien") + " durchsuchen"
                    },
                    feedback: function(e) {
                        return (1 == e.limit ? "Datei" : "Dateien") + " zum Hochladen auswählen"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 == e.length ? "Datei" : "Dateien") + " ausgewählt"
                    },
                    confirm: "Speichern",
                    cancel: "Schließen",
                    name: "Name",
                    type: "Typ",
                    size: "Größe",
                    dimensions: "Format",
                    duration: "Länge",
                    crop: "Crop",
                    rotate: "Rotieren",
                    sort: "Sortieren",
                    open: "Öffnen",
                    download: "Herunterladen",
                    remove: "Löschen",
                    drop: "Die Dateien hierher ziehen, um sie hochzuladen",
                    paste: '<div class="fileuploader-pending-loader"></div> Eine Datei wird eingefügt. Klicken Sie hier zum abzubrechen',
                    removeConfirmation: "Möchten Sie diese Datei wirklich löschen?",
                    errors: {
                        filesLimit: function(e) {
                            return "Nur ${limit} " + (1 == e.limit ? "Datei darf" : "Dateien dürfen") + " hochgeladen werden."
                        },
                        filesType: "Nur ${extensions} Dateien dürfen hochgeladen werden.",
                        fileSize: "${name} ist zu groß! Bitte wählen Sie eine Datei bis zu ${fileMaxSize} MB.",
                        filesSizeAll: "Die ausgewählten Dateien sind zu groß! Bitte wählen Sie Dateien bis zu ${maxSize} MB.",
                        fileName: "Eine Datei mit demselben Namen ${name} ist bereits ausgewählt.",
                        remoteFile: "Remote-Dateien sind nicht zulässig.",
                        folderUpload: "Ordner sind nicht erlaubt."
                    }
                },
                dk: {
                    button: function(e) {
                        return "Gennemse " + (1 == e.limit ? "fil" : "filer")
                    },
                    feedback: function(e) {
                        return "Vælg " + (1 == e.limit ? "fil" : "filer") + " til upload"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 == e.length ? "fil" : "filer") + " er valgt"
                    },
                    confirm: "Bekræft",
                    cancel: "Fortrydl",
                    name: "Navn",
                    type: "Type",
                    size: "Størrelse",
                    dimensions: "Dimensioner",
                    duration: "Varighed’",
                    crop: "Tilpas",
                    rotate: "Rotér",
                    sort: "Sorter",
                    open: "Åben",
                    download: "Hent",
                    remove: "Slet",
                    drop: "Drop filer her til upload",
                    paste: "Overfør fil, klik her for at afbryde",
                    removeConfirmation: "Er du sikker på, du ønsker at slette denne fil?",
                    errors: {
                        filesLimit: function(e) {
                            return "Du kan kun uploade ${limit} " + (1 == e.limit ? "fil" : "filer") + " ad gangen."
                        },
                        filesType: "Det er kun tilladt at uploade ${extensions} filer.",
                        fileSize: "${name} er for stor! Vælg venligst en fil på højst ${fileMaxSize} MB.",
                        filesSizeAll: "De valgte filer er for store! Vælg venligst filer op til ${maxSize} MB ialt.",
                        fileName: "Du har allerede valgt en fil med navnet ${name}.",
                        remoteFile: "Fremmede filer er ikke tilladt.",
                        folderUpload: "Mapper er ikke tilladt."
                    }
                },
                en: {
                    button: function(e) {
                        return "Browse " + (1 == e.limit ? "file" : "files")
                    },
                    feedback: function(e) {
                        return "Choose " + (1 == e.limit ? "file" : "files") + " to upload"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? " files were" : " file was") + " chosen"
                    },
                    confirm: "Confirm",
                    cancel: "Cancel",
                    name: "Name",
                    type: "Type",
                    size: "Size",
                    dimensions: "Dimensions",
                    duration: "Duration",
                    crop: "Crop",
                    rotate: "Rotate",
                    sort: "Sort",
                    open: "Open",
                    download: "Download",
                    remove: "Delete",
                    drop: "Drop the files here to upload",
                    paste: '<div class="fileuploader-pending-loader"></div> Pasting a file, click here to cancel',
                    removeConfirmation: "Are you sure you want to delete this file?",
                    errors: {
                        filesLimit: function(e) {
                            return "Only ${limit} " + (1 == e.limit ? "file" : "files") + " can be uploaded."
                        },
                        filesType: "Only ${extensions} files are allowed to be uploaded.",
                        fileSize: "${name} is too large! Please choose a file up to ${fileMaxSize} MB.",
                        filesSizeAll: "The chosen files are too large! Please select files up to ${maxSize} MB.",
                        fileName: "A file with the same name ${name} is already selected.",
                        remoteFile: "Remote files are not allowed.",
                        folderUpload: "Folders are not allowed."
                    }
                },
                es: {
                    button: function(e) {
                        return "Examinar " + (1 == e.limit ? "archivo" : "archivos")
                    },
                    feedback: function(e) {
                        return "Selecciona " + (e.limit, "archivos para subir")
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? "archivos seleccionados" : "archivo seleccionado")
                    },
                    confirm: "Guardar",
                    cancel: "Anular",
                    name: "Nombre",
                    type: "Tipo",
                    size: "Tamaño",
                    dimensions: "Dimensiones",
                    duration: "Duracion",
                    crop: "Corta",
                    rotate: "Rotar",
                    sort: "Ordenar",
                    open: "Abierto",
                    download: "Descargar",
                    remove: "Eliminar",
                    drop: "Suelta los archivos aquí para subirlos",
                    paste: '<div class="fileuploader-pending-loader"></div> Pegar un archivo, haga clic aquí para cancelar',
                    removeConfirmation: "¿Estás seguro de que deseas eliminar este archivo?",
                    errors: {
                        filesLimit: function(e) {
                            return "Solo se pueden seleccionar ${limit} " + (1 == e.limit ? "archivo" : "archivos") + "."
                        },
                        filesType: "Solo se pueden seleccionar archivos ${extensions}.",
                        fileSize: "${name} es demasiado grande! Por favor, seleccione un archivo hasta ${fileMaxSize} MB.",
                        filesSizeAll: "¡Los archivos seleccionados son demasiado grandes! Por favor seleccione archivos de hasta ${maxSize} MB.",
                        fileName: "Un archivo con el mismo nombre ${name} ya está seleccionado.",
                        remoteFile: "Los archivos remotos no están permitidos.",
                        folderUpload: "No se permiten carpetas."
                    }
                },
                fr: {
                    button: function(e) {
                        return "Parcourir " + (1 == e.limit ? "le fichier" : "les fichiers")
                    },
                    feedback: function(e) {
                        return "Choisir " + (1 == e.limit ? "le fichier " : "les fichiers") + " à télécharger"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? "fichiers ont été choisis" : "fichier a été choisi")
                    },
                    confirm: "Confirmer",
                    cancel: "Annuler",
                    name: "Nom",
                    type: "Type",
                    size: "Taille",
                    dimensions: "Dimensions",
                    duration: "Durée",
                    crop: "Recadrer",
                    rotate: "Pivoter",
                    sort: "Trier",
                    download: "Télécharger",
                    remove: "Supprimer",
                    drop: "Déposez les fichiers ici pour les télécharger",
                    paste: '<div class="fileuploader-pending-loader"></div> Collant un fichier, cliquez ici pour annuler.',
                    removeConfirmation: "Êtes-vous sûr de vouloir supprimer ce fichier ?",
                    errors: {
                        filesLimit: "Seuls les fichiers ${limit} peuvent être téléchargés.",
                        filesType: "Seuls les fichiers ${extensions} peuvent être téléchargés.",
                        fileSize: "${name} est trop lourd, la limite est de ${fileMaxSize} MB.",
                        filesSizeAll: "Les fichiers que vous avez choisis sont trop lourd, la limite totale est de ${maxSize} MB.",
                        fileName: "Le fichier portant le nom ${name} est déjà sélectionné.",
                        folderUpload: "Vous n'êtes pas autorisé à télécharger des dossiers."
                    }
                },
                it: {
                    button: function(e) {
                        return "Sfoglia" + (1 == e.limit ? "il file" : "i file")
                    },
                    feedback: function(e) {
                        return "Seleziona " + (1 == e.limit ? "file" : "i file") + " per caricare"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? "i file sono scelti" : "il file è scelto")
                    },
                    confirm: "Conferma",
                    cancel: "Cancella",
                    name: "Nome",
                    type: "Tipo file",
                    size: "Dimensione file",
                    dimensions: "Dimensioni",
                    duration: "Durata",
                    crop: "Taglia",
                    rotate: "Ruota",
                    sort: "Ordina",
                    open: "Apri",
                    download: "Scarica",
                    remove: "Elimina",
                    drop: "Posiziona il file qui per caricare",
                    paste: '<div class="fileuploader-pending-loader"></div> Incolla file, clicca qui per cancellare',
                    removeConfirmation: "Sei sicuro di voler eliminare il file?",
                    errors: {
                        filesLimit: "Solo ${limit} file possono essere caricati.",
                        filesType: "Solo ${extensions} file possono essere caricati.",
                        fileSize: "${name} è troppo grande! Scegli un file fino a ${fileMaxSize} MB.",
                        filesSizeAll: "I file selezioni sono troppo grandi! Scegli un file fino a ${maxSize} MB.",
                        fileName: "Un file con lo stesso nome ${name} è già selezionato.",
                        remoteFile: "I file remoti non sono consentiti.",
                        folderUpload: "Le cartelle non sono consentite."
                    }
                },
                lv: {
                    button: function(e) {
                        return "Izvēlieties " + (1 == e.limit ? "fails" : "faili")
                    },
                    feedback: function(e) {
                        return "Izvēliejaties " + (1 == e.limit ? "fails" : "faili") + " lejupielādēt"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? "failus izvelēts" : "fails izvēlēts")
                    },
                    confirm: "Saglabāt",
                    cancel: "Atcelt",
                    name: "Vārds",
                    type: "Formāts",
                    size: "Izmērs",
                    dimensions: "Izmēri",
                    duration: "Ilgums",
                    crop: "Nogriezt",
                    rotate: "Pagriezt",
                    sort: "Kārtot",
                    open: "Atvērt",
                    download: "Lejupielādēt",
                    remove: "Dzēst",
                    drop: "Lai augšupielādētu, velciet failus šeit",
                    paste: '<div class="fileuploader-pending-loader"></div> Ievietojiet failu, noklikšķiniet šeit, lai atceltu',
                    removeConfirmation: "Vai tiešām vēlaties izdzēst šo failu?",
                    errors: {
                        filesLimit: function(e) {
                            return "Tikai ${limit} " + (1 == e.limit ? "failu var augšupielādēt" : "failus var augšupielādēt") + "."
                        },
                        filesType: "Tikai ${extensions} failus var augšupielādēt.",
                        fileSize: "${name} ir par lielu! Lūdzu, atlasiet failu līdz ${fileMaxSize} MB.",
                        filesSizeAll: "Atlasītie faili ir pārāk lieli! Lūdzu, atlasiet failus līdz ${maxSize} MB.",
                        fileName: "Fails ar tādu pašu nosaukumu ${name} jau ir atlasīts.",
                        remoteFile: "Attālie faili nav atļauti.",
                        folderUpload: "Mapes nav atļautas."
                    }
                },
                nl: {
                    button: function(e) {
                        return (1 == e.limit ? "Bestand" : "Bestanden") + " kiezen"
                    },
                    feedback: function(e) {
                        return "Kies " + (1 == e.limit ? "een bestand" : "bestanden") + " om te uploaden"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? "bestanden" : "bestand") + " gekozen"
                    },
                    confirm: "Opslaan",
                    cancel: "Annuleren",
                    name: "Naam",
                    type: "Type",
                    size: "Grootte",
                    dimensions: "Afmetingen",
                    duration: "Duur",
                    crop: "Uitsnijden",
                    rotate: "Draaien",
                    sort: "Sorteren",
                    open: "Open",
                    download: " Downloaden",
                    remove: "Verwijderen",
                    drop: "Laat de bestanden hier vallen om te uploaden",
                    paste: '<div class="fileuploader-pending-loader"></div> Een bestand wordt geplakt, klik hier om te annuleren',
                    removeConfirmation: "Weet u zeker dat u dit bestand wilt verwijderen?",
                    errors: {
                        filesLimit: function(e) {
                            return "Er " + (1 == e.limit ? "mag" : "mogen") + " slechts ${limit} " + (1 == e.limit ? "bestand" : "bestanden") + " worden geüpload."
                        },
                        filesType: "Alleen ${extensions} mogen worden geüpload.",
                        fileSize: "${name} is te groot! Kies een bestand tot ${fileMaxSize} MB.",
                        filesSizeAll: "De gekozen bestanden zijn te groot! Kies bestanden tot ${maxSize} MB.",
                        fileName: "Een bestand met dezelfde naam ${name} is al gekozen.",
                        remoteFile: "Externe bestanden zijn niet toegestaan.",
                        folderUpload: "Mappen zijn niet toegestaan."
                    }
                },
                pl: {
                    button: function(e) {
                        return "Wybierz " + (1 == e.limit ? "plik" : "pliki")
                    },
                    feedback: function(e) {
                        return "Wybierz " + (1 == e.limit ? "plik" : "pliki") + " do przesłania"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? "pliki zostały wybrane" : "plik został wybrany")
                    },
                    confirm: "Potwierdź",
                    cancel: "Anuluj",
                    name: "Nazwa",
                    type: "Typ",
                    size: "Rozmiar",
                    dimensions: "Wymiary",
                    duration: "Czas trwania",
                    crop: "Przytnij",
                    rotate: "Obróć",
                    sort: "Sortuj",
                    open: "Otwórz",
                    download: "Pobierz",
                    remove: "Usuń",
                    drop: "Upuść pliki tutaj do przesłania",
                    paste: '<div class="fileuploader-pending-loader"></div> Wklejając plik, kliknij tutaj, aby anulować',
                    removeConfirmation: "Czy jesteś pewien, że chcesz usunąć ten plik?",
                    errors: {
                        filesLimit: function(e) {
                            return "Tylko ${limit} " + (1 == e.limit ? "plik" : "pliki") + " można wybrać."
                        },
                        filesType: "Tylko pliki ${extensions} mogą zostać pobrane.",
                        fileSize: "Plik ${name} jest za duży! Proszę wybrać plik do ${fileMaxSize} MB.",
                        filesSizeAll: "Wybrane pliki są za duże! Proszę wybrać pliki do  ${maxSize} MB.",
                        fileName: ", Plik o tej samej nazwie ${name} już został wybrany.",
                        remoteFile: "Zdalne pliki nie są dozwolone.",
                        folderUpload: "Foldery nie są dozwolone."
                    }
                },
                pt: {
                    button: function(e) {
                        return "Escolher " + (1 == e.limit ? "arquivo" : "arquivos")
                    },
                    feedback: function(e) {
                        return "Escolha " + (1 == e.limit ? "arquivo" : "arquivos") + " a carregar"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? "arquivos foram escolhidos" : "arquivo foi escolhido")
                    },
                    confirm: "Confirmar",
                    cancel: "Cancelar",
                    name: "Nome",
                    type: "Tipo",
                    size: "Tamanho",
                    dimensions: "Dimensões",
                    duration: "Duração",
                    crop: "Recorte",
                    rotate: "Girar",
                    sort: "Ordenar",
                    open: "Abrir",
                    download: "Baixar",
                    remove: "Excluir",
                    drop: "Solte os arquivos aqui para fazer o upload",
                    paste: '<div class="fileuploader-pending-loader"></div> Colando um arquivo, clique aqui para cancelar',
                    removeConfirmation: "Tem certeza de que deseja excluir este arquivo?",
                    errors: {
                        filesLimit: function(e) {
                            return "Apenas ${limit} " + (1 == e.limit ? "arquivo a ser carregado" : "arquivos a serem carregados") + "."
                        },
                        filesType: "Somente arquivos ${extensions} podem ser carregados.",
                        fileSize: "${name} é muito grande! Selecione um arquivo de até ${fileMaxSize} MB.",
                        filesSizeAll: "Os arquivos selecionados são muito grandes! Selecione arquivos de até ${maxSize} MB.",
                        fileName: "Um arquivo com o mesmo nome ${name} já está selecionado.",
                        remoteFile: "Arquivos remotos não são permitidos.",
                        folderUpload: "Pastas não são permitidas."
                    }
                },
                ro: {
                    button: function(e) {
                        return "Atașează " + (1 == e.limit ? "fișier" : "fișiere")
                    },
                    feedback: function(e) {
                        return "Selectează " + (1 == e.limit ? "fișier" : "fișiere") + " pentru încărcare"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? " fișiere" : " fișier") + " selectate"
                    },
                    confirm: "Confirmă",
                    cancel: "Anulează",
                    name: "Nume",
                    type: "Tip",
                    size: "Mărimea",
                    dimensions: "Dimensiunea",
                    duration: "Durata",
                    crop: "Crop",
                    rotate: "Rotire",
                    sort: "Sortare",
                    open: "Deschide",
                    download: "Download",
                    remove: "Șterge",
                    drop: "Aruncați fișierele aici pentru a le încărca",
                    paste: '<div class="fileuploader-pending-loader"></div> Se atașează fișier, faceți click aici pentru anulare',
                    removeConfirmation: "Sigur doriți să ștergeți acest fișier?",
                    errors: {
                        filesLimit: function(e) {
                            return "Doar ${limit} " + (1 == e.limit ? "fișier poate fi selectat" : "fișiere pot fi selectat") + "."
                        },
                        filesType: "Doar fișierele ${extensions} pot fi încărcate.",
                        fileSize: "${name} este prea mare! Vă rugăm să selectați un fișier până la ${fileMaxSize} MB.",
                        filesSizeAll: "Fișierele selectate sunt prea mari! Vă rugăm să selectați fișiere până la ${maxSize} MB.",
                        fileName: "Fișierul cu același numele ${nume} a fost deja selectat.",
                        remoteFile: "Fișierele remote nu sunt permise.",
                        folderUpload: "Folderele nu sunt permise."
                    }
                },
                ru: {
                    button: function(e) {
                        return "Выбрать " + (1 == e.limit ? "файл" : "файлы")
                    },
                    feedback: function(e) {
                        return "Выберите " + (1 == e.limit ? "файл" : "файлы") + " для загрузки"
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? "файлов выбрано" : "файл выбран")
                    },
                    confirm: "Сохранить",
                    cancel: "Отмена",
                    name: "Имя",
                    type: "Формат",
                    size: "Размер",
                    dimensions: "Размеры",
                    duration: "Длительность",
                    crop: "Обрезать",
                    rotate: "Повернуть",
                    sort: "Сортировть",
                    open: "Открыть",
                    download: "Скачать",
                    remove: "Удалить",
                    drop: "Перетащите файлы сюда для загрузки",
                    paste: '<div class="fileuploader-pending-loader"></div> Вставка файла, нажмите здесь, чтобы отменить',
                    removeConfirmation: "Вы уверены, что хотите удалить этот файл?",
                    errors: {
                        filesLimit: function(e) {
                            return "Только ${limit} " + (1 == e.limit ? "файл может быть загружен" : "файлов могут быть загружены") + "."
                        },
                        filesType: "Только ${extensions} файлы могут быть загружены.",
                        fileSize: "${name} слишком большой! Пожалуйста, выберите файл до ${fileMaxSize} МБ.",
                        filesSizeAll: "Выбранные файлы слишком большие! Пожалуйста, выберите файлы до ${maxSize} МБ.",
                        fileName: "Файл с таким именем ${name} уже выбран.",
                        remoteFile: "Удаленные файлы не допускаются.",
                        folderUpload: "Папки не допускаются."
                    }
                },
                tr: {
                    button: function(e) {
                        return (1 == e.limit ? "Dosya" : "Dosyaları") + " seç"
                    },
                    feedback: function(e) {
                        return "Yüklemek istediğiniz " + (1 == e.limit ? "dosyayı" : "dosyaları") + " seçin."
                    },
                    feedback2: function(e) {
                        return e.length + " " + (1 < e.length ? "dosyalar" : "dosya") + " seçildi."
                    },
                    confirm: "Onayla",
                    cancel: "İptal",
                    name: "İsim",
                    type: "Tip",
                    size: "Boyut",
                    dimensions: "Boyutlar",
                    duration: "Süre",
                    crop: "Kırp",
                    rotate: "Döndür",
                    sort: "Sırala",
                    open: "Aç",
                    download: "İndir",
                    remove: "Sil",
                    drop: "Yüklemek için dosyaları buraya bırakın",
                    paste: '<div class="fileuploader-pending-loader"></div> Bir dosyayı yapıştırmak veya iptal etmek için buraya tıklayın',
                    removeConfirmation: "Bu dosyayı silmek istediğinizden emin misiniz?",
                    errors: {
                        filesLimit: function(e) {
                            return "Sadece ${limit} " + (1 == e.limit ? "dosya" : "dosyalar") + " yüklenmesine izin verilir."
                        },
                        filesType: "Sadece ${extensions} dosyaların yüklenmesine izin verilir.",
                        fileSize: "${name} çok büyük! Lütfen ${fileMaxSize} MB'a kadar bir dosya seçin.",
                        filesSizeAll: "Seçilen dosyalar çok büyük! Lütfen ${maxSize} MB'a kadar dosyaları seçin",
                        fileName: "Aynı ada sahip bir dosya ${name} zaten seçilmiştir.",
                        remoteFile: "Uzak dosyalara izin verilmez.",
                        folderUpload: "Klasörlere izin verilmez."
                    }
                }
            }, $.fn.fileuploader.defaults = {
                limit: null,
                maxSize: null,
                fileMaxSize: null,
                extensions: null,
                disallowedExtensions: null,
                changeInput: !0,
                inputNameBrackets: !0,
                theme: "default",
                thumbnails: {
                    box: '<div class="fileuploader-items"><ul class="fileuploader-items-list"></ul></div>',
                    boxAppendTo: null,
                    item: '<li class="fileuploader-item"><div class="columns"><div class="column-thumbnail">${image}<span class="fileuploader-action-popup"></span></div><div class="column-title"><div title="${name}">${name}</div><span>${size2}</span></div><div class="column-actions"><button type="button" class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i class="fileuploader-icon-remove"></i></a></div></div><div class="progress-bar2">${progressBar}<span></span></div></li>',
                    item2: '<li class="fileuploader-item"><div class="columns"><div class="column-thumbnail">${image}<span class="fileuploader-action-popup"></span></div><div class="column-title"><a href="${file}" target="_blank"><div title="${name}">${name}</div><span>${size2}</span></a></div><div class="column-actions"><a href="${data.url}" class="fileuploader-action fileuploader-action-download" title="${captions.download}" download><i class="fileuploader-icon-download"></i></a><button type="button" class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i class="fileuploader-icon-remove"></i></a></div></div></li>',
                    popup: {
                        container: "body",
                        loop: !0,
                        arrows: !0,
                        zoomer: !0,
                        template: function(e) {
                            return '<div class="fileuploader-popup-preview"><button type="button" class="fileuploader-popup-move" data-action="prev"><i class="fileuploader-icon-arrow-left"></i></button><div class="fileuploader-popup-node node-${format}">${reader.node}</div><div class="fileuploader-popup-content"><div class="fileuploader-popup-footer"><ul class="fileuploader-popup-tools">' + ("image" == e.format && e.reader.node && e.editor ? (e.editor.cropper ? '<li><button type="button" data-action="crop"><i class="fileuploader-icon-crop"></i> ${captions.crop}</button></li>' : "") + (e.editor.rotate ? '<li><button type="button" data-action="rotate-cw"><i class="fileuploader-icon-rotate"></i> ${captions.rotate}</button></li>' : "") : "") + ("image" == e.format ? '<li class="fileuploader-popup-zoomer"><button type="button" data-action="zoom-out">&minus;</button><input type="range" min="0" max="100"><button type="button" data-action="zoom-in">&plus;</button><span></span> </li>' : "") + (e.data.url ? '<li><a href="' + e.data.url + '" data-action="open" target="_blank"><i class="fileuploader-icon-external"></i> ${captions.open}</a></li>' : "") + '<li><button type="button" data-action="remove"><i class="fileuploader-icon-trash"></i> ${captions.remove}</button></li></ul></div><div class="fileuploader-popup-header"><ul class="fileuploader-popup-meta"><li><span>${captions.name}:</span><h5>${name}</h5></li><li><span>${captions.type}:</span><h5>${extension.toUpperCase()}</h5></li><li><span>${captions.size}:</span><h5>${size2}</h5></li>' + (e.reader && e.reader.width ? "<li><span>${captions.dimensions}:</span><h5>${reader.width}x${reader.height}px</h5></li>" : "") + (e.reader && e.reader.duration ? "<li><span>${captions.duration}:</span><h5>${reader.duration2}</h5></li>" : "") + '</ul><div class="fileuploader-popup-info"></div><ul class="fileuploader-popup-buttons"><li><button type="button" class="fileuploader-popup-button" data-action="cancel">${captions.cancel}</a></li>' + (e.editor ? '<li><button type="button" class="fileuploader-popup-button button-success" data-action="save">${captions.confirm}</button></li>' : "") + '</ul></div></div><button type="button" class="fileuploader-popup-move" data-action="next"><i class="fileuploader-icon-arrow-right"></i></button></div>'
                        },
                        onShow: function(e) {
                            e.popup.html.on("click", '[data-action="remove"]', (function(t) {
                                e.popup.close(), e.remove()
                            })).on("click", '[data-action="cancel"]', (function(t) {
                                e.popup.close()
                            })).on("click", '[data-action="save"]', (function(t) {
                                e.editor && e.editor.save(), e.popup.close && e.popup.close()
                            }))
                        },
                        onHide: null
                    },
                    itemPrepend: !1,
                    removeConfirmation: !0,
                    startImageRenderer: !0,
                    synchronImages: !0,
                    useObjectUrl: !1,
                    canvasImage: !0,
                    videoThumbnail: !0,
                    pdf: !0,
                    exif: !0,
                    touchDelay: 0,
                    _selectors: {
                        list: ".fileuploader-items-list",
                        item: ".fileuploader-item",
                        start: ".fileuploader-action-start",
                        retry: ".fileuploader-action-retry",
                        remove: ".fileuploader-action-remove",
                        sorter: ".fileuploader-action-sort",
                        rotate: ".fileuploader-action-rotate",
                        popup: ".fileuploader-popup-preview",
                        popup_open: ".fileuploader-action-popup"
                    },
                    beforeShow: null,
                    onItemShow: null,
                    onItemRemove: function(e) {
                        e.children().animate({
                            opacity: 0
                        }, 200, (function() {
                            setTimeout((function() {
                                e.slideUp(200, (function() {
                                    e.remove()
                                }))
                            }), 100)
                        }))
                    },
                    onImageLoaded: null
                },
                editor: !1,
                sorter: !1,
                reader: {
                    thumbnailTimeout: 5e3,
                    timeout: 12e3,
                    maxSize: 20
                },
                files: null,
                upload: null,
                dragDrop: !0,
                addMore: !1,
                skipFileNameCheck: !1,
                clipboardPaste: !0,
                listInput: !0,
                enableApi: !1,
                listeners: null,
                onSupportError: null,
                beforeRender: null,
                afterRender: null,
                beforeSelect: null,
                onFilesCheck: null,
                onFileRead: null,
                onSelect: null,
                afterSelect: null,
                onListInput: null,
                onRemove: null,
                onEmpty: null,
                dialogs: {
                    alert: function(e) {
                        function t(t) {
                            return e.apply(this, arguments)
                        }
                        return t.toString = function() {
                            return e.toString()
                        }, t
                    }((function(e) {
                        return alert(e)
                    })),
                    confirm: function(e) {
                        function t(t, i) {
                            return e.apply(this, arguments)
                        }
                        return t.toString = function() {
                            return e.toString()
                        }, t
                    }((function(e, t) {
                        confirm(e) && t()
                    }))
                },
                captions: $.fn.fileuploader.languages.en
            }
        }))
    },
    bUC5: function(e, t, i) {
        i("9Wh1")
    },
    eBwQ: function(e, t, i) {
        var n, o;
        o = function(e) {
            "use strict";

            function t(e) {
                if (e.paused || e.ended || m) return !1;
                try {
                    c.clearRect(0, 0, a, s), c.drawImage(e, 0, 0, a, s)
                } catch (e) {}
                y = setTimeout((function() {
                    t(e)
                }), T.duration), $.setIcon(l)
            }

            function i(e) {
                e = e.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i, (function(e, t, i, n) {
                    return t + t + i + i + n + n
                }));
                var t = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(e);
                return !!t && {
                    r: parseInt(t[1], 16),
                    g: parseInt(t[2], 16),
                    b: parseInt(t[3], 16)
                }
            }

            function n(e, t) {
                var i, n = {};
                for (i in e) n[i] = e[i];
                for (i in t) n[i] = t[i];
                return n
            }
            e = e || {};
            var o, r, s, a, l, c, u, d, h, p, f, m, g, v, y, w, b = {
                bgColor: "#d00",
                textColor: "#fff",
                fontFamily: "sans-serif",
                fontStyle: "bold",
                type: "circle",
                position: "down",
                animation: "slide",
                elementId: !1,
                dataUrl: !1,
                win: window
            };
            (g = {}).ff = "undefined" != typeof InstallTrigger, g.chrome = !!window.chrome, g.opera = !!window.opera || navigator.userAgent.indexOf("Opera") >= 0, g.ie = !1, g.safari = Object.prototype.toString.call(window.HTMLElement).indexOf("Constructor") > 0, g.supported = g.chrome || g.ff || g.opera;
            var _ = [];
            f = function() {}, d = m = !1;
            var x = {
                    ready: function() {
                        d = !0, x.reset(), f()
                    },
                    reset: function() {
                        d && (_ = [], h = !1, p = !1, c.clearRect(0, 0, a, s), c.drawImage(u, 0, 0, a, s), $.setIcon(l), window.clearTimeout(v), window.clearTimeout(y))
                    },
                    start: function() {
                        if (d && !p && _.length > 0) {
                            p = !0;
                            var e = function() {
                                ["type", "animation", "bgColor", "textColor", "fontFamily", "fontStyle"].forEach((function(e) {
                                    e in _[0].options && (o[e] = _[0].options[e])
                                })), T.run(_[0].options, (function() {
                                    h = _[0], p = !1, _.length > 0 && (_.shift(), x.start())
                                }), !1)
                            };
                            h ? T.run(h.options, (function() {
                                e()
                            }), !0) : e()
                        }
                    }
                },
                C = {},
                k = function(e) {
                    return e.n = "number" == typeof e.n ? Math.abs(0 | e.n) : e.n, e.x = a * e.x, e.y = s * e.y, e.w = a * e.w, e.h = s * e.h, e.len = ("" + e.n).length, e
                };
            C.circle = function(e) {
                var t = !1;
                2 === (e = k(e)).len ? (e.x = e.x - .4 * e.w, e.w = 1.4 * e.w, t = !0) : e.len >= 3 && (e.x = e.x - .65 * e.w, e.w = 1.65 * e.w, t = !0), c.clearRect(0, 0, a, s), c.drawImage(u, 0, 0, a, s), c.beginPath(), c.font = o.fontStyle + " " + Math.floor(e.h * (e.n > 99 ? .85 : 1)) + "px " + o.fontFamily, c.textAlign = "center", t ? (c.moveTo(e.x + e.w / 2, e.y), c.lineTo(e.x + e.w - e.h / 2, e.y), c.quadraticCurveTo(e.x + e.w, e.y, e.x + e.w, e.y + e.h / 2), c.lineTo(e.x + e.w, e.y + e.h - e.h / 2), c.quadraticCurveTo(e.x + e.w, e.y + e.h, e.x + e.w - e.h / 2, e.y + e.h), c.lineTo(e.x + e.h / 2, e.y + e.h), c.quadraticCurveTo(e.x, e.y + e.h, e.x, e.y + e.h - e.h / 2), c.lineTo(e.x, e.y + e.h / 2), c.quadraticCurveTo(e.x, e.y, e.x + e.h / 2, e.y)) : c.arc(e.x + e.w / 2, e.y + e.h / 2, e.h / 2, 0, 2 * Math.PI), c.fillStyle = "rgba(" + o.bgColor.r + "," + o.bgColor.g + "," + o.bgColor.b + "," + e.o + ")", c.fill(), c.closePath(), c.beginPath(), c.stroke(), c.fillStyle = "rgba(" + o.textColor.r + "," + o.textColor.g + "," + o.textColor.b + "," + e.o + ")", "number" == typeof e.n && e.n > 999 ? c.fillText((e.n > 9999 ? 9 : Math.floor(e.n / 1e3)) + "k+", Math.floor(e.x + e.w / 2), Math.floor(e.y + e.h - .2 * e.h)) : c.fillText(e.n, Math.floor(e.x + e.w / 2), Math.floor(e.y + e.h - .15 * e.h)), c.closePath()
            }, C.rectangle = function(e) {
                2 === (e = k(e)).len ? (e.x = e.x - .4 * e.w, e.w = 1.4 * e.w) : e.len >= 3 && (e.x = e.x - .65 * e.w, e.w = 1.65 * e.w), c.clearRect(0, 0, a, s), c.drawImage(u, 0, 0, a, s), c.beginPath(), c.font = o.fontStyle + " " + Math.floor(e.h * (e.n > 99 ? .9 : 1)) + "px " + o.fontFamily, c.textAlign = "center", c.fillStyle = "rgba(" + o.bgColor.r + "," + o.bgColor.g + "," + o.bgColor.b + "," + e.o + ")", c.fillRect(e.x, e.y, e.w, e.h), c.fillStyle = "rgba(" + o.textColor.r + "," + o.textColor.g + "," + o.textColor.b + "," + e.o + ")", "number" == typeof e.n && e.n > 999 ? c.fillText((e.n > 9999 ? 9 : Math.floor(e.n / 1e3)) + "k+", Math.floor(e.x + e.w / 2), Math.floor(e.y + e.h - .2 * e.h)) : c.fillText(e.n, Math.floor(e.x + e.w / 2), Math.floor(e.y + e.h - .15 * e.h)), c.closePath()
            };
            var $ = {
                    getIcon: function() {
                        var e = !1;
                        return o.element ? e = o.element : o.elementId ? (e = w.getElementById(o.elementId)).setAttribute("href", e.getAttribute("src")) : !1 === (e = function() {
                            for (var e = w.getElementsByTagName("head")[0].getElementsByTagName("link"), t = e.length, i = t - 1; i >= 0; i--)
                                if (/(^|\s)icon(\s|$)/i.test(e[i].getAttribute("rel"))) return e[i];
                            return !1
                        }()) && ((e = w.createElement("link")).setAttribute("rel", "icon"), w.getElementsByTagName("head")[0].appendChild(e)), e.setAttribute("type", "image/png"), e
                    },
                    setIcon: function(e) {
                        var t = e.toDataURL("image/png");
                        if (o.dataUrl && o.dataUrl(t), o.element) o.element.setAttribute("href", t), o.element.setAttribute("src", t);
                        else if (o.elementId) {
                            var i = w.getElementById(o.elementId);
                            i.setAttribute("href", t), i.setAttribute("src", t)
                        } else if (g.ff || g.opera) {
                            var n = r;
                            r = w.createElement("link"), g.opera && r.setAttribute("rel", "icon"), r.setAttribute("rel", "icon"), r.setAttribute("type", "image/png"), w.getElementsByTagName("head")[0].appendChild(r), r.setAttribute("href", t), n.parentNode && n.parentNode.removeChild(n)
                        } else r.setAttribute("href", t)
                    }
                },
                T = {
                    duration: 40,
                    types: {}
                };
            return T.types.fade = [{
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: 0
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: .1
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: .2
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: .3
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: .4
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: .5
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: .6
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: .7
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: .8
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: .9
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: 1
                }], T.types.none = [{
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: 1
                }], T.types.pop = [{
                    x: 1,
                    y: 1,
                    w: 0,
                    h: 0,
                    o: 1
                }, {
                    x: .9,
                    y: .9,
                    w: .1,
                    h: .1,
                    o: 1
                }, {
                    x: .8,
                    y: .8,
                    w: .2,
                    h: .2,
                    o: 1
                }, {
                    x: .7,
                    y: .7,
                    w: .3,
                    h: .3,
                    o: 1
                }, {
                    x: .6,
                    y: .6,
                    w: .4,
                    h: .4,
                    o: 1
                }, {
                    x: .5,
                    y: .5,
                    w: .5,
                    h: .5,
                    o: 1
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: 1
                }], T.types.popFade = [{
                    x: .75,
                    y: .75,
                    w: 0,
                    h: 0,
                    o: 0
                }, {
                    x: .65,
                    y: .65,
                    w: .1,
                    h: .1,
                    o: .2
                }, {
                    x: .6,
                    y: .6,
                    w: .2,
                    h: .2,
                    o: .4
                }, {
                    x: .55,
                    y: .55,
                    w: .3,
                    h: .3,
                    o: .6
                }, {
                    x: .5,
                    y: .5,
                    w: .4,
                    h: .4,
                    o: .8
                }, {
                    x: .45,
                    y: .45,
                    w: .5,
                    h: .5,
                    o: .9
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: 1
                }], T.types.slide = [{
                    x: .4,
                    y: 1,
                    w: .6,
                    h: .6,
                    o: 1
                }, {
                    x: .4,
                    y: .9,
                    w: .6,
                    h: .6,
                    o: 1
                }, {
                    x: .4,
                    y: .9,
                    w: .6,
                    h: .6,
                    o: 1
                }, {
                    x: .4,
                    y: .8,
                    w: .6,
                    h: .6,
                    o: 1
                }, {
                    x: .4,
                    y: .7,
                    w: .6,
                    h: .6,
                    o: 1
                }, {
                    x: .4,
                    y: .6,
                    w: .6,
                    h: .6,
                    o: 1
                }, {
                    x: .4,
                    y: .5,
                    w: .6,
                    h: .6,
                    o: 1
                }, {
                    x: .4,
                    y: .4,
                    w: .6,
                    h: .6,
                    o: 1
                }], T.run = function(e, t, i, r) {
                    var s = T.types[w.hidden || w.msHidden || w.webkitHidden || w.mozHidden ? "none" : o.animation];
                    return r = !0 === i ? void 0 !== r ? r : s.length - 1 : void 0 !== r ? r : 0, t = t || function() {}, r < s.length && r >= 0 ? (C[o.type](n(e, s[r])), v = setTimeout((function() {
                        i ? r -= 1 : r += 1, T.run(e, t, i, r)
                    }), T.duration), void $.setIcon(l)) : void t()
                },
                function() {
                    (o = n(b, e)).bgColor = i(o.bgColor), o.textColor = i(o.textColor), o.position = o.position.toLowerCase(), o.animation = T.types["" + o.animation] ? o.animation : b.animation, w = o.win.document;
                    var t = o.position.indexOf("up") > -1,
                        d = o.position.indexOf("left") > -1;
                    if (t || d)
                        for (var h = 0; h < T.types["" + o.animation].length; h++) {
                            var p = T.types["" + o.animation][h];
                            t && (p.y = p.y < .6 ? p.y - .4 : p.y - 2 * p.y + (1 - p.w)), d && (p.x = p.x < .6 ? p.x - .4 : p.x - 2 * p.x + (1 - p.h)), T.types["" + o.animation][h] = p
                        }
                    o.type = C["" + o.type] ? o.type : b.type, r = $.getIcon(), l = document.createElement("canvas"), u = document.createElement("img"), r.hasAttribute("href") ? (u.setAttribute("crossOrigin", "anonymous"), u.onload = function() {
                        s = u.height > 0 ? u.height : 32, a = u.width > 0 ? u.width : 32, l.height = s, l.width = a, c = l.getContext("2d"), x.ready()
                    }, u.setAttribute("src", r.getAttribute("href"))) : (u.onload = function() {
                        s = 32, a = 32, u.height = s, u.width = a, l.height = s, l.width = a, c = l.getContext("2d"), x.ready()
                    }, u.setAttribute("src", ""))
                }(), {
                    badge: function(e, t) {
                        t = ("string" == typeof t ? {
                            animation: t
                        } : t) || {}, f = function() {
                            try {
                                if ("number" == typeof e ? e > 0 : "" !== e) {
                                    var n = {
                                        type: "badge",
                                        options: {
                                            n: e
                                        }
                                    };
                                    if ("animation" in t && T.types["" + t.animation] && (n.options.animation = "" + t.animation), "type" in t && C["" + t.type] && (n.options.type = "" + t.type), ["bgColor", "textColor"].forEach((function(e) {
                                            e in t && (n.options[e] = i(t[e]))
                                        })), ["fontStyle", "fontFamily"].forEach((function(e) {
                                            e in t && (n.options[e] = t[e])
                                        })), _.push(n), _.length > 100) throw new Error("Too many badges requests in queue.");
                                    x.start()
                                } else x.reset()
                            } catch (e) {
                                throw new Error("Error setting badge. Message: " + e.message)
                            }
                        }, d && f()
                    },
                    video: function(e) {
                        f = function() {
                            try {
                                if ("stop" === e) return m = !0, x.reset(), void(m = !1);
                                e.addEventListener("play", (function() {
                                    t(this)
                                }), !1)
                            } catch (e) {
                                throw new Error("Error setting video. Message: " + e.message)
                            }
                        }, d && f()
                    },
                    image: function(e) {
                        f = function() {
                            try {
                                var t = e.width,
                                    i = e.height,
                                    n = document.createElement("img"),
                                    o = i / s > t / a ? t / a : i / s;
                                n.setAttribute("crossOrigin", "anonymous"), n.onload = function() {
                                    c.clearRect(0, 0, a, s), c.drawImage(n, 0, 0, a, s), $.setIcon(l)
                                }, n.setAttribute("src", e.getAttribute("src")), n.height = i / o, n.width = t / o
                            } catch (e) {
                                throw new Error("Error setting image. Message: " + e.message)
                            }
                        }, d && f()
                    },
                    webcam: function(e) {
                        if (window.URL && window.URL.createObjectURL || (window.URL = window.URL || {}, window.URL.createObjectURL = function(e) {
                                return e
                            }), g.supported) {
                            var i = !1;
                            navigator.getUserMedia = navigator.getUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia || navigator.mozGetUserMedia || navigator.webkitGetUserMedia, f = function() {
                                try {
                                    if ("stop" === e) return m = !0, x.reset(), void(m = !1);
                                    (i = document.createElement("video")).width = a, i.height = s, navigator.getUserMedia({
                                        video: !0,
                                        audio: !1
                                    }, (function(e) {
                                        i.src = URL.createObjectURL(e), i.play(), t(i)
                                    }), (function() {}))
                                } catch (e) {
                                    throw new Error("Error setting webcam. Message: " + e.message)
                                }
                            }, d && f()
                        }
                    },
                    reset: x.reset,
                    browser: {
                        supported: g.supported
                    }
                }
        }, void 0 === (n = function() {
            return o
        }.apply(t, [])) || (e.exports = n)
    },
    hUol: function(e, t, i) {
        var n, o;
        i("B9Yq"), n = [i("EVdn")], void 0 === (o = function(e) {
            return function() {
                var t, i, n, o = 0,
                    r = "error",
                    s = "info",
                    a = "success",
                    l = "warning",
                    c = {
                        clear: function(i, n) {
                            var o = f();
                            t || u(o), d(i, o, n) || function(i) {
                                for (var n = t.children(), o = n.length - 1; o >= 0; o--) d(e(n[o]), i)
                            }(o)
                        },
                        remove: function(i) {
                            var n = f();
                            t || u(n), i && 0 === e(":focus", i).length ? m(i) : t.children().length && t.remove()
                        },
                        error: function(e, t, i) {
                            return p({
                                type: r,
                                iconClass: f().iconClasses.error,
                                message: e,
                                optionsOverride: i,
                                title: t
                            })
                        },
                        getContainer: u,
                        info: function(e, t, i) {
                            return p({
                                type: s,
                                iconClass: f().iconClasses.info,
                                message: e,
                                optionsOverride: i,
                                title: t
                            })
                        },
                        options: {},
                        subscribe: function(e) {
                            i = e
                        },
                        success: function(e, t, i) {
                            return p({
                                type: a,
                                iconClass: f().iconClasses.success,
                                message: e,
                                optionsOverride: i,
                                title: t
                            })
                        },
                        version: "2.1.4",
                        warning: function(e, t, i) {
                            return p({
                                type: l,
                                iconClass: f().iconClasses.warning,
                                message: e,
                                optionsOverride: i,
                                title: t
                            })
                        }
                    };
                return c;

                function u(i, n) {
                    return i || (i = f()), (t = e("#" + i.containerId)).length || n && (t = function(i) {
                        return (t = e("<div/>").attr("id", i.containerId).addClass(i.positionClass)).appendTo(e(i.target)), t
                    }(i)), t
                }

                function d(t, i, n) {
                    var o = !(!n || !n.force) && n.force;
                    return !(!t || !o && 0 !== e(":focus", t).length || (t[i.hideMethod]({
                        duration: i.hideDuration,
                        easing: i.hideEasing,
                        complete: function() {
                            m(t)
                        }
                    }), 0))
                }

                function h(e) {
                    i && i(e)
                }

                function p(i) {
                    var r = f(),
                        s = i.iconClass || r.iconClass;
                    if (void 0 !== i.optionsOverride && (r = e.extend(r, i.optionsOverride), s = i.optionsOverride.iconClass || s), ! function(e, t) {
                            if (e.preventDuplicates) {
                                if (t.message === n) return !0;
                                n = t.message
                            }
                            return !1
                        }(r, i)) {
                        o++, t = u(r, !0);
                        var a = null,
                            l = e("<div/>"),
                            c = e("<div/>"),
                            d = e("<div/>"),
                            p = e("<div/>"),
                            g = e(r.closeHtml),
                            v = {
                                intervalId: null,
                                hideEta: null,
                                maxHideTime: null
                            },
                            y = {
                                toastId: o,
                                state: "visible",
                                startTime: new Date,
                                options: r,
                                map: i
                            };
                        return i.iconClass && l.addClass(r.toastClass).addClass(s),
                            function() {
                                if (i.title) {
                                    var e = i.title;
                                    r.escapeHtml && (e = w(i.title)), c.append(e).addClass(r.titleClass), l.append(c)
                                }
                            }(),
                            function() {
                                if (i.message) {
                                    var e = i.message;
                                    r.escapeHtml && (e = w(i.message)), d.append(e).addClass(r.messageClass), l.append(d)
                                }
                            }(), r.closeButton && (g.addClass(r.closeClass).attr("role", "button"), l.prepend(g)), r.progressBar && (p.addClass(r.progressClass), l.prepend(p)), r.rtl && l.addClass("rtl"), r.newestOnTop ? t.prepend(l) : t.append(l),
                            function() {
                                var e = "";
                                switch (i.iconClass) {
                                    case "toast-success":
                                    case "toast-info":
                                        e = "polite";
                                        break;
                                    default:
                                        e = "assertive"
                                }
                                l.attr("aria-live", e)
                            }(), l.hide(), l[r.showMethod]({
                                duration: r.showDuration,
                                easing: r.showEasing,
                                complete: r.onShown
                            }), r.timeOut > 0 && (a = setTimeout(b, r.timeOut), v.maxHideTime = parseFloat(r.timeOut), v.hideEta = (new Date).getTime() + v.maxHideTime, r.progressBar && (v.intervalId = setInterval(C, 10))), r.closeOnHover && l.hover(x, _), !r.onclick && r.tapToDismiss && l.click(b), r.closeButton && g && g.click((function(e) {
                                e.stopPropagation ? e.stopPropagation() : void 0 !== e.cancelBubble && !0 !== e.cancelBubble && (e.cancelBubble = !0), r.onCloseClick && r.onCloseClick(e), b(!0)
                            })), r.onclick && l.click((function(e) {
                                r.onclick(e), b()
                            })), h(y), r.debug && console && console.log(y), l
                    }

                    function w(e) {
                        return null == e && (e = ""), e.replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/</g, "&lt;").replace(/>/g, "&gt;")
                    }

                    function b(t) {
                        var i = t && !1 !== r.closeMethod ? r.closeMethod : r.hideMethod,
                            n = t && !1 !== r.closeDuration ? r.closeDuration : r.hideDuration,
                            o = t && !1 !== r.closeEasing ? r.closeEasing : r.hideEasing;
                        if (!e(":focus", l).length || t) return clearTimeout(v.intervalId), l[i]({
                            duration: n,
                            easing: o,
                            complete: function() {
                                m(l), clearTimeout(a), r.onHidden && "hidden" !== y.state && r.onHidden(), y.state = "hidden", y.endTime = new Date, h(y)
                            }
                        })
                    }

                    function _() {
                        (r.timeOut > 0 || r.extendedTimeOut > 0) && (a = setTimeout(b, r.extendedTimeOut), v.maxHideTime = parseFloat(r.extendedTimeOut), v.hideEta = (new Date).getTime() + v.maxHideTime)
                    }

                    function x() {
                        clearTimeout(a), v.hideEta = 0, l.stop(!0, !0)[r.showMethod]({
                            duration: r.showDuration,
                            easing: r.showEasing
                        })
                    }

                    function C() {
                        var e = (v.hideEta - (new Date).getTime()) / v.maxHideTime * 100;
                        p.width(e + "%")
                    }
                }

                function f() {
                    return e.extend({}, {
                        tapToDismiss: !0,
                        toastClass: "toast",
                        containerId: "toast-container",
                        debug: !1,
                        showMethod: "fadeIn",
                        showDuration: 300,
                        showEasing: "swing",
                        onShown: void 0,
                        hideMethod: "fadeOut",
                        hideDuration: 1e3,
                        hideEasing: "swing",
                        onHidden: void 0,
                        closeMethod: !1,
                        closeDuration: !1,
                        closeEasing: !1,
                        closeOnHover: !0,
                        extendedTimeOut: 1e3,
                        iconClasses: {
                            error: "toast-error",
                            info: "toast-info",
                            success: "toast-success",
                            warning: "toast-warning"
                        },
                        iconClass: "toast-info",
                        positionClass: "toast-top-right",
                        timeOut: 5e3,
                        titleClass: "toast-title",
                        messageClass: "toast-message",
                        escapeHtml: !1,
                        target: "body",
                        closeHtml: '<button type="button">&times;</button>',
                        closeClass: "toast-close-button",
                        newestOnTop: !0,
                        preventDuplicates: !1,
                        progressBar: !1,
                        progressClass: "toast-progress",
                        rtl: !1
                    }, c.options)
                }

                function m(e) {
                    t || (t = u()), e.is(":visible") || (e.remove(), e = null, 0 === t.children().length && (t.remove(), n = void 0))
                }
            }()
        }.apply(t, n)) || (e.exports = o)
    },
    hp4Z: function(e, t, i) {
        var n, o, r, s, a;
        "undefined" != typeof self && self, e.exports = (n = 0, o = document, s = function(e) {
            var t = document.getElementById(e);
            return !!t && (t.className = t.className.replace(" shown", ""), setTimeout((function() {
                t.parentNode.removeChild(t)
            }), 600), !0)
        }, a = (r = function(e, t) {
            var i = o.createElement(e);
            for (var n in t) i.setAttribute(n, t[n]);
            return i
        })("div", {
            class: "notifier-container",
            id: "notifier-container"
        }), o.body.appendChild(a), {
            show: function(e, t, i, a, l) {
                "number" != typeof l && (l = 0);
                var c = "notifier-" + n,
                    u = o.querySelector(".notifier-container"),
                    d = r("div", {
                        class: "notifier " + i
                    }),
                    h = r("h2", {
                        class: "notifier-title"
                    }),
                    p = r("div", {
                        class: "notifier-body"
                    }),
                    f = r("div", {
                        class: "notifier-img"
                    }),
                    m = r("img", {
                        class: "img",
                        src: a
                    }),
                    g = r("button", {
                        class: "notifier-close",
                        type: "button"
                    });
                return h.innerHTML = e, p.innerHTML = t, g.innerHTML = "&times;", a.length > 0 && f.appendChild(m), d.appendChild(g), d.appendChild(f), d.appendChild(h), d.appendChild(p), u.appendChild(d), f.style.height = f.parentNode.offsetHeight + "px" || !1, setTimeout((function() {
                    d.className += " shown", d.setAttribute("id", c)
                }), 100), l > 0 && setTimeout((function() {
                    s(c)
                }), l), g.addEventListener("click", (function() {
                    s(c)
                })), n += 1, c
            },
            hide: s
        })
    },
    jsrK: function(e, t) {
        $("#nav-services").on("click", (function() {
            $("#services-nav-cats-container").slideToggle("fast")
        })), $("a.thumbnail-nafezly").on("click", (function(e) {
            e.preventDefault()
        })), $("#nafezly-navbar a").click((function() {
            window.location = $(this).attr("href")
        })), $(".help-boat-nav-icon").on("click", (function() {
            $(this).toggleClass("active"), $(".help-boat-nav").slideToggle()
        })), $(".change-mood").on("click", (function() {
            $("body").hasClass("night") ? (localStorage.setItem("mood", "day"), $.ajax({
                method: "GET",
                url: "/mood/day"
            }), $("body").removeClass("night")) : (localStorage.setItem("mood", "night"), $("body").addClass("night"), $.ajax({
                method: "GET",
                url: "/mood/night"
            }))
        })), $(document).on("click", ".love-favourite-area", (function() {
            var e = $(this).data("id");
            if ($("#love_id_" + e).toggleClass("added"), $(this).hasClass("added")) {
                $("#icon_" + e).removeClass("fal"), $("#icon_" + e).addClass("fas");
                var t = parseInt($("#counter_" + e).text());
                isNaN(parseInt(t)) ? $("#counter_" + e).text(1) : $("#counter_" + e).text(parseInt(t) + 1)
            } else {
                $("#icon_" + e).removeClass("fas"), $("#icon_" + e).addClass("fal");
                t = $("#counter_" + e).text();
                isNaN(parseInt(t)) || (0 == parseInt(t) - 1 ? $("#counter_" + e).text("") : $("#counter_" + e).text(parseInt(t) - 1))
            }
            $.ajax({
                method: "POST",
                url: "/make/love",
                data: {
                    type: $(this).data("type"),
                    type_id: $(this).data("type_id"),
                    _token: document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                error: function(e) {
                    window.location.href = "/login"
                }
            })
        })), $(".main-cat").on("change", (function() {
            if ($(this).find(".main-cat-input").prop("checked")) var e = !0;
            else e = !1;
            var t = $(this).find(".main-cat-input").val();
            $('input[data-parent="' + t + '"]').prop("checked", e)
        })), $((function() {
            $(document).on("click", ".search-response-container .pagination a", (function(e) {
                e.preventDefault();
                var t = $(this).attr("href");
                window.history.pushState("", "", t),
                    function(e) {
                        $(".search-response-container").css("opacity", .3), $.ajax({
                            url: e
                        }).done((function(e) {
                            $(".search-response-container").empty().append(e), $(".search-response-container").css("opacity", 1)
                        })), window.scrollTo({
                            top: 0,
                            behavior: "smooth"
                        }), $(window).scroll((function() {
                            $.each($("img"), (function() {
                                if ($(this).attr("data-src") && $(this).offset().top < $(window).scrollTop() + $(window).height() + 100) {
                                    var e = $(this).data("src");
                                    $(this).attr("src", e), $(this).removeAttr("data-src")
                                }
                            }))
                        }))
                    }(t)
            }))
        })), $(".validate-form").validate({}), document.addEventListener("DOMContentLoaded", (function(e) {
            $.extend($.validator.messages, {
                required: "برجاء ملئ هذا الحقل",
                remote: "يرجى تصحيح هذا الحقل للمتابعة",
                email: "رجاء إدخال عنوان بريد إلكتروني صحيح",
                url: "رجاء إدخال عنوان موقع إلكتروني صحيح",
                date: "رجاء إدخال تاريخ صحيح",
                dateISO: "رجاء إدخال تاريخ صحيح (ISO)",
                number: "رجاء إدخال عدد بطريقة صحيحة",
                digits: "رجاء إدخال أرقام فقط",
                creditcard: "رجاء إدخال رقم بطاقة ائتمان صحيح",
                equalTo: "رجاء إدخال نفس القيمة",
                extension: "رجاء إدخال ملف بامتداد موافق عليه",
                maxlength: $.validator.format("الحد الأقصى لعدد الحروف هو {0}"),
                minlength: $.validator.format("الحد الأدنى لعدد الحروف هو {0}"),
                rangelength: $.validator.format("عدد الحروف يجب أن يكون بين {0} و {1}"),
                range: $.validator.format("رجاء إدخال عدد قيمته بين {0} و {1}"),
                max: $.validator.format("رجاء إدخال عدد أقل من أو يساوي {0}"),
                min: $.validator.format("رجاء إدخال عدد أكبر من أو يساوي {0}")
            })
        }))
    },
    yLpj: function(e, t) {
        var i;
        i = function() {
            return this
        }();
        try {
            i = i || new Function("return this")()
        } catch (e) {
            "object" == typeof window && (i = window)
        }
        e.exports = i
    },
    zq5x: function(e, t) {
        $(".copy-referral-btn").click((function() {
            $("#referral-input").val($(this).data("url"));
            var e = document.getElementById("referral-input");
            e.select(), e.setSelectionRange(0, 99999), document.execCommand("copy"), Swal.fire({
                title: "تم نسخ الرابط بنجاح",
                icon: "success",
                confirmButtonText: "حسناً"
            }).then((function(e) {}))
        })), $(".show-sub > *").on("click", (function(e) {
            "a" == e.target.localName || "img" == e.target.localName || e.target.classList.contains("not-open-details") || $(this).find(".project_show").slideToggle(300)
        })), $(".remove-portfolio-click").on("click", (function() {
            var e = this;
            Swal.fire({
                title: "هل انت متأكد من حذف العمل ؟",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "حذف",
                cancelButtonText: "إلغاء"
            }).then((function(t) {
                t.value && ($("#remove-portfolio-form").attr("action", $(e).data("remove_url")), $("#remove-portfolio-form").submit())
            }))
        })), $(".lazy").Lazy({
            scrollDirection: "vertical",
            effect: "fadeIn",
            visibleOnly: !0,
            onError: function(e) {
                console.log("error loading " + e.data("src"))
            }
        }), $(document).on("click", ".notifyjs-container", (function(e) {
            $(this).fadeOut("fast")
        })), $('a[href="' + window.location.href.split("?")[0] + '"] div,a[href="' + window.location.href.split("?")[0] + '"],a[href="' + window.location.href + '"] div,a[href="' + window.location.href + '"]').addClass("active"), $(".loading-img").fadeOut(), $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        }), $(".dropdown-menu a").on("click", (function() {
            window.location.href = $(this).attr("href")
        })), $(".logout-nafezly").on("click", (function() {
            $("#logout-form").submit()
        })), $(".nafez-navbar,.main-content-dark-layer,.close-nafez-navbar").on("click", (function() {
            $(".main-content-dark-layer").fadeToggle(), $(".nafez-navbar-menu").toggleClass("open"), $("#main-content-container").toggleClass("open"), $("#nafezly-navbar").toggleClass("open")
        })), $(".remove-service-click").on("click", (function() {
            var e = $(this);
            Swal.fire({
                title: "هل انت متأكد من حذف الخدمة ؟",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "حذف",
                cancelButtonText: "إلغاء"
            }).then((function(t) {
                t.value && ($("#remove-service-form").attr("action", $(e).data("remove_url")), $("#remove-service-form").submit())
            }))
        })), $(document).ready((function() {
            $(".select3,.select2").selectize({
                plugins: ["remove_button"],
                dataAttr: "data-extra",
                searchField: ["tag_name", "arabic_name", "english_name", "slug", "value", "text", "id"],
                maxItems: 25,
                valueField: "id",
                placeholder: ""
            })
        })), document.addEventListener("DOMContentLoaded", (function() {
            setTimeout((function() {
                $(".pace-activity").css({
                    "border-top-color": "#333",
                    "border-left-color": "#333"
                })
            }), 1200)
        })), $('a[href="' + window.location.pathname + '"]').addClass("active"), $((function() {
            $('[data-toggle="popover"]').popover({
                trigger: "hover"
            })
        })), toastr.options = {
            progressBar: !0,
            preventDuplicates: !0,
            newestOnTop: !0,
            positionClass: "toast-top-left",
            timeOut: 7e3,
            extendedTimeOut: 7e3
        };
        var i = document.querySelector("#recorded-audio");

        function n(e) {
            var t = i.parentNode;
            t.innerHTML = "";
            var n = document.createElement("audio");
            n.setAttribute("id", "recorded-audio"), n.controls = !0, n.autoplay = !0, n.style.height = "40px", n.style.width = "100%", e && (n.src = e), t.appendChild(n), i = n
        }

        function o() {
            n(URL.createObjectURL(r.getBlob())), setTimeout((function() {
                i.paused && (setTimeout((function() {
                    i.paused && i.play()
                }), 1e3), i.play())
            }), 300), i.play(), s && (s.stop(), s = null)
        }
        var r, s, a = !(-1 === navigator.userAgent.indexOf("Edge") || !navigator.msSaveOrOpenBlob && !navigator.msSaveBlob),
            l = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

        function c(e) {
            var t = new Date;
            return "RecordRTC-" + t.getFullYear() + t.getMonth() + t.getDate() + "-" + function() {
                if (window.crypto && window.crypto.getRandomValues && -1 === navigator.userAgent.indexOf("Safari")) {
                    for (var e = window.crypto.getRandomValues(new Uint32Array(3)), t = "", i = 0, n = e.length; i < n; i++) t += e[i].toString(36);
                    return t
                }
                return (Math.random() * (new Date).getTime()).toString(36).replace(/\./g, "")
            }() + "." + e
        }
        $(document).on("click", ".btnStopRecording", (function() {
            $(this).attr("disabled", "disabled"), $(this).parent().css("opacity", ".1"), $(".btnStartRecording").removeAttr("disabled"), $(".recorder-start-record-container").css("opacity", "1"), $(".recorder-audio-container").css({
                opacity: "1"
            }), $(".recorder-audio-container audio").removeAttr("disabled"), $(".recorder-send-audio-container").css({
                opacity: "1"
            }), $(".recorder-send-audio-container .btnDownloadRecording").removeAttr("disabled"), $(".recordig-icon").fadeOut(0), $(".recorder-start-record-container").fadeIn(0), $(".recorder-stop-record-container").fadeOut(0), r.stopRecording(o)
        })), $(document).on("click", ".btnStartRecording", (function() {
            var e, t = this;
            if ($(".recordig-icon").fadeIn(0), $(this).find(".mic-icon").fadeOut(0), this.style.border = "", this.style.fontSize = "", !s) return e = function(e) {
                if (s = e, l) return n(), i.muted = !0, void(i.srcObject = s);
                $(t).click()
            }, void(s ? e(s) : (void 0 !== navigator.mediaDevices && navigator.mediaDevices.getUserMedia || (alert("المتصفح الخاص بك لا يدعم هذه الخاصية"), navigator.getUserMedia && alert("المتصفح الخاص بك لا يدعم هذه الخاصية")), navigator.mediaDevices.getUserMedia({
                audio: !!a || {
                    echoCancellation: !1
                }
            }).then((function(t) {
                e(t)
            })).catch((function(e) {
                alert("حدث خطأ اثناء عملية التسجيل"), console.error(e)
            }))));
            n(), i.muted = !0, i.srcObject = s;
            var o = {
                type: "audio",
                numberOfAudioChannels: a ? 1 : 2,
                checkForInactiveTracks: !0,
                bufferSize: 16384
            };
            (l || a) && (o.recorderType = StereoAudioRecorder), navigator.platform && -1 === navigator.platform.toString().toLowerCase().indexOf("win") && (o.sampleRate = 48e3), l && (o.sampleRate = 44100, o.bufferSize = 4096, o.numberOfAudioChannels = 2), r && (r.destroy(), r = null), (r = RecordRTC(s, o)).startRecording(), $(".recorder-start-record-container").fadeOut(0), $(".recorder-stop-record-container").fadeIn(0), $(this).attr("disabled", "disabled"), $(this).parent().css("opacity", ".1"), $(".btnStopRecording").removeAttr("disabled"), $(".recorder-stop-record-container").css("opacity", "1"), $(".recorder-audio-container").css("opacity", ".1"), $(".recorder-audio-container audio").attr("disabled", "disabled"), $(".recorder-send-audio-container").css("opacity", ".1"), $(".recorder-send-audio-container .btnDownloadRecording").attr("disabled", "disabled")
        })), $(document).on("click", ".btnDownloadRecording", (function() {
            var e = this.getAttribute("data-attachment-uploader-container-selector");
            this.getAttribute("data-textarea-message-selector");
            if (r && r.getBlob()) {
                var t = r.getBlob(),
                    i = new File([t], c("mp3"), {
                        type: "audio/mp3"
                    });
                $.fileuploader.getInstance(e + " .file-uploader-files").add(i, "mp3", "record.mp3"), $(e).slideDown(), $(".close-record-modal").click(), $("#recording-audio").trigger("pause")
            }
        })), $(document).on("click", ".recorderNafezlyModalOpener", (function() {
            $(".btnDownloadRecording").attr("data-attachment-uploader-container-selector", $(this).attr("data-attachment-uploader-container-selector")), $(".btnDownloadRecording").attr("data-textarea-message-selector", $(this).attr("data-textarea-message-selector"))
        }))
    }
});
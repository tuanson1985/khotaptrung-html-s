! function() {
    "use strict";
    var t = {
            d: function(e, n) {
                for (var i in n) t.o(n, i) && !t.o(e, i) && Object.defineProperty(e, i, {
                    enumerable: !0,
                    get: n[i]
                })
            },
            o: function(t, e) {
                return Object.prototype.hasOwnProperty.call(t, e)
            },
            r: function(t) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(t, "__esModule", {
                    value: !0
                })
            }
        },
        e = {};

    function n(t) {
        if (this.formData = {}, this.tree = {}, !(t instanceof FormData)) return this;
        this.formData = t;
        const e = () => {
            const t = new Map;
            return t.largestIndex = 0, t.set = function(e, n) {
                "" === e ? e = t.largestIndex++ : /^[0-9]+$/.test(e) && (e = parseInt(e), t.largestIndex <= e && (t.largestIndex = e + 1)), Map.prototype.set.call(t, e, n)
            }, t
        };
        this.tree = e();
        const n = /^(?<name>[a-z][-a-z0-9_:]*)(?<array>(?:\[(?:[a-z][-a-z0-9_:]*|[0-9]*)\])*)/i;
        for (const [t, i] of this.formData) {
            const s = t.match(n);
            if (s)
                if ("" === s.groups.array) this.tree.set(s.groups.name, i);
                else {
                    const t = [...s.groups.array.matchAll(/\[([a-z][-a-z0-9_:]*|[0-9]*)\]/gi)].map((([t, e]) => e));
                    t.unshift(s.groups.name);
                    const n = t.pop();
                    t.reduce(((t, n) => {
                        if (/^[0-9]+$/.test(n) && (n = parseInt(n)), t.get(n) instanceof Map) return t.get(n);
                        const i = e();
                        return t.set(n, i), i
                    }), this.tree).set(n, i)
                }
        }
    }
    t.r(e), t.d(e, {
        date: function() {
            return f
        },
        email: function() {
            return r
        },
        enumeration: function() {
            return m
        },
        file: function() {
            return d
        },
        maxdate: function() {
            return b
        },
        maxfilesize: function() {
            return z
        },
        maxitems: function() {
            return h
        },
        maxlength: function() {
            return v
        },
        maxnumber: function() {
            return x
        },
        mindate: function() {
            return y
        },
        minfilesize: function() {
            return A
        },
        minitems: function() {
            return u
        },
        minlength: function() {
            return g
        },
        minnumber: function() {
            return w
        },
        number: function() {
            return c
        },
        required: function() {
            return o
        },
        requiredfile: function() {
            return a
        },
        tel: function() {
            return l
        },
        url: function() {
            return p
        }
    }), n.prototype.entries = function() {
        return this.tree.entries()
    }, n.prototype.get = function(t) {
        return this.tree.get(t)
    }, n.prototype.getAll = function(t) {
        if (!this.has(t)) return [];
        const e = t => {
            const n = [];
            if (t instanceof Map)
                for (const [i, s] of t) n.push(...e(s));
            else "" !== t && n.push(t);
            return n
        };
        return e(this.get(t))
    }, n.prototype.has = function(t) {
        return this.tree.has(t)
    }, n.prototype.keys = function() {
        return this.tree.keys()
    }, n.prototype.values = function() {
        return this.tree.values()
    };
    var i = n;

    function s({
                   rule: t,
                   field: e,
                   error: n,
                   ...i
               }) {
        this.rule = t, this.field = e, this.error = n, this.properties = i
    }
    const o = function(t) {
            if (0 === t.getAll(this.field).length) throw new s(this)
        },
        a = function(t) {
            if (0 === t.getAll(this.field).length) throw new s(this)
        },
        r = function(t) {
            if (!t.getAll(this.field).every((t => {
                if ((t = t.trim()).length < 6) return !1;
                if (-1 === t.indexOf("@", 1)) return !1;
                if (t.indexOf("@") !== t.lastIndexOf("@")) return !1;
                const [e, n] = t.split("@", 2);
                if (!/^[a-zA-Z0-9!#$%&\'*+\/=?^_`{|}~\.-]+$/.test(e)) return !1;
                if (/\.{2,}/.test(n)) return !1;
                if (/(?:^[ \t\n\r\0\x0B.]|[ \t\n\r\0\x0B.]$)/.test(n)) return !1;
                const i = n.split(".");
                if (i.length < 2) return !1;
                for (const t of i) {
                    if (/(?:^[ \t\n\r\0\x0B-]|[ \t\n\r\0\x0B-]$)/.test(t)) return !1;
                    if (!/^[a-z0-9-]+$/i.test(t)) return !1
                }
                return !0
            }))) throw new s(this)
        },
        p = function(t) {
            const e = t.getAll(this.field);
            if (!e.every((t => {
                if ("" === (t = t.trim())) return !1;
                try {
                    return (t => -1 !== ["http", "https", "ftp", "ftps", "mailto", "news", "irc", "irc6", "ircs", "gopher", "nntp", "feed", "telnet", "mms", "rtsp", "sms", "svn", "tel", "fax", "xmpp", "webcal", "urn"].indexOf(t))(new URL(t).protocol.replace(/:$/, ""))
                } catch {
                    return !1
                }
            }))) throw new s(this)
        },
        l = function(t) {
            if (!t.getAll(this.field).every((t => (t = (t = t.trim()).replaceAll(/[()/.*#\s-]+/g, ""), /^[+]?[0-9]+$/.test(t))))) throw new s(this)
        },
        c = function(t) {
            if (!t.getAll(this.field).every((t => (t = t.trim(), !!/^[-]?[0-9]+(?:[eE][+-]?[0-9]+)?$/.test(t) || !!/^[-]?(?:[0-9]+)?[.][0-9]+(?:[eE][+-]?[0-9]+)?$/.test(t))))) throw new s(this)
        },
        f = function(t) {
            if (!t.getAll(this.field).every((t => /^[0-9]{4,}-[0-9]{2}-[0-9]{2}$/.test(t.trim())))) throw new s(this)
        },
        d = function(t) {
            if (!t.getAll(this.field).every((t => t instanceof File && this.accept?.some((e => /^\.[a-z0-9]+$/i.test(e) ? t.name.toLowerCase().endsWith(e.toLowerCase()) : (t => {
                const e = [],
                    n = t.match(/^(?<toplevel>[a-z]+)\/(?<sub>[*]|[a-z0-9.+-]+)$/i);
                if (n) {
                    const t = n.groups.toplevel.toLowerCase(),
                        i = n.groups.sub.toLowerCase();
                    for (const [s, o] of(() => {
                        const t = new Map;
                        return t.set("jpg|jpeg|jpe", "image/jpeg"), t.set("gif", "image/gif"), t.set("png", "image/png"), t.set("bmp", "image/bmp"), t.set("tiff|tif", "image/tiff"), t.set("webp", "image/webp"), t.set("ico", "image/x-icon"), t.set("heic", "image/heic"), t.set("asf|asx", "video/x-ms-asf"), t.set("wmv", "video/x-ms-wmv"), t.set("wmx", "video/x-ms-wmx"), t.set("wm", "video/x-ms-wm"), t.set("avi", "video/avi"), t.set("divx", "video/divx"), t.set("flv", "video/x-flv"), t.set("mov|qt", "video/quicktime"), t.set("mpeg|mpg|mpe", "video/mpeg"), t.set("mp4|m4v", "video/mp4"), t.set("ogv", "video/ogg"), t.set("webm", "video/webm"), t.set("mkv", "video/x-matroska"), t.set("3gp|3gpp", "video/3gpp"), t.set("3g2|3gp2", "video/3gpp2"), t.set("txt|asc|c|cc|h|srt", "text/plain"), t.set("csv", "text/csv"), t.set("tsv", "text/tab-separated-values"), t.set("ics", "text/calendar"), t.set("rtx", "text/richtext"), t.set("css", "text/css"), t.set("htm|html", "text/html"), t.set("vtt", "text/vtt"), t.set("dfxp", "application/ttaf+xml"), t.set("mp3|m4a|m4b", "audio/mpeg"), t.set("aac", "audio/aac"), t.set("ra|ram", "audio/x-realaudio"), t.set("wav", "audio/wav"), t.set("ogg|oga", "audio/ogg"), t.set("flac", "audio/flac"), t.set("mid|midi", "audio/midi"), t.set("wma", "audio/x-ms-wma"), t.set("wax", "audio/x-ms-wax"), t.set("mka", "audio/x-matroska"), t.set("rtf", "application/rtf"), t.set("js", "application/javascript"), t.set("pdf", "application/pdf"), t.set("swf", "application/x-shockwave-flash"), t.set("class", "application/java"), t.set("tar", "application/x-tar"), t.set("zip", "application/zip"), t.set("gz|gzip", "application/x-gzip"), t.set("rar", "application/rar"), t.set("7z", "application/x-7z-compressed"), t.set("exe", "application/x-msdownload"), t.set("psd", "application/octet-stream"), t.set("xcf", "application/octet-stream"), t.set("doc", "application/msword"), t.set("pot|pps|ppt", "application/vnd.ms-powerpoint"), t.set("wri", "application/vnd.ms-write"), t.set("xla|xls|xlt|xlw", "application/vnd.ms-excel"), t.set("mdb", "application/vnd.ms-access"), t.set("mpp", "application/vnd.ms-project"), t.set("docx", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"), t.set("docm", "application/vnd.ms-word.document.macroEnabled.12"), t.set("dotx", "application/vnd.openxmlformats-officedocument.wordprocessingml.template"), t.set("dotm", "application/vnd.ms-word.template.macroEnabled.12"), t.set("xlsx", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"), t.set("xlsm", "application/vnd.ms-excel.sheet.macroEnabled.12"), t.set("xlsb", "application/vnd.ms-excel.sheet.binary.macroEnabled.12"), t.set("xltx", "application/vnd.openxmlformats-officedocument.spreadsheetml.template"), t.set("xltm", "application/vnd.ms-excel.template.macroEnabled.12"), t.set("xlam", "application/vnd.ms-excel.addin.macroEnabled.12"), t.set("pptx", "application/vnd.openxmlformats-officedocument.presentationml.presentation"), t.set("pptm", "application/vnd.ms-powerpoint.presentation.macroEnabled.12"), t.set("ppsx", "application/vnd.openxmlformats-officedocument.presentationml.slideshow"), t.set("ppsm", "application/vnd.ms-powerpoint.slideshow.macroEnabled.12"), t.set("potx", "application/vnd.openxmlformats-officedocument.presentationml.template"), t.set("potm", "application/vnd.ms-powerpoint.template.macroEnabled.12"), t.set("ppam", "application/vnd.ms-powerpoint.addin.macroEnabled.12"), t.set("sldx", "application/vnd.openxmlformats-officedocument.presentationml.slide"), t.set("sldm", "application/vnd.ms-powerpoint.slide.macroEnabled.12"), t.set("onetoc|onetoc2|onetmp|onepkg", "application/onenote"), t.set("oxps", "application/oxps"), t.set("xps", "application/vnd.ms-xpsdocument"), t.set("odt", "application/vnd.oasis.opendocument.text"), t.set("odp", "application/vnd.oasis.opendocument.presentation"), t.set("ods", "application/vnd.oasis.opendocument.spreadsheet"), t.set("odg", "application/vnd.oasis.opendocument.graphics"), t.set("odc", "application/vnd.oasis.opendocument.chart"), t.set("odb", "application/vnd.oasis.opendocument.database"), t.set("odf", "application/vnd.oasis.opendocument.formula"), t.set("wp|wpd", "application/wordperfect"), t.set("key", "application/vnd.apple.keynote"), t.set("numbers", "application/vnd.apple.numbers"), t.set("pages", "application/vnd.apple.pages"), t
                    })())("*" === i && o.startsWith(t + "/") || o === n[0]) && e.push(...s.split("|"))
                }
                return e
            })(e).some((e => (e = "." + e.trim(), t.name.toLowerCase().endsWith(e.toLowerCase()))))))))) throw new s(this)
        },
        m = function(t) {
            if (!t.getAll(this.field).every((t => this.accept?.some((e => t === String(e)))))) throw new s(this)
        },
        u = function(t) {
            if (t.getAll(this.field).length < parseInt(this.threshold)) throw new s(this)
        },
        h = function(t) {
            const e = t.getAll(this.field);
            if (parseInt(this.threshold) < e.length) throw new s(this)
        },
        g = function(t) {
            const e = t.getAll(this.field);
            let n = 0;
            if (e.forEach((t => {
                "string" == typeof t && (n += t.length)
            })), 0 !== n && n < parseInt(this.threshold)) throw new s(this)
        },
        v = function(t) {
            const e = t.getAll(this.field);
            let n = 0;
            if (e.forEach((t => {
                "string" == typeof t && (n += t.length)
            })), parseInt(this.threshold) < n) throw new s(this)
        },
        w = function(t) {
            if (!t.getAll(this.field).every((t => !(parseFloat(t) < parseFloat(this.threshold))))) throw new s(this)
        },
        x = function(t) {
            if (!t.getAll(this.field).every((t => !(parseFloat(this.threshold) < parseFloat(t))))) throw new s(this)
        },
        y = function(t) {
            if (!t.getAll(this.field).every((t => (t = t.trim(), !(/^[0-9]{4,}-[0-9]{2}-[0-9]{2}$/.test(t) && /^[0-9]{4,}-[0-9]{2}-[0-9]{2}$/.test(this.threshold) && t < this.threshold))))) throw new s(this)
        },
        b = function(t) {
            if (!t.getAll(this.field).every((t => (t = t.trim(), !(/^[0-9]{4,}-[0-9]{2}-[0-9]{2}$/.test(t) && /^[0-9]{4,}-[0-9]{2}-[0-9]{2}$/.test(this.threshold) && this.threshold < t))))) throw new s(this)
        },
        A = function(t) {
            const e = t.getAll(this.field);
            let n = 0;
            if (e.forEach((t => {
                t instanceof File && (n += t.size)
            })), n < parseInt(this.threshold)) throw new s(this)
        },
        z = function(t) {
            const e = t.getAll(this.field);
            let n = 0;
            if (e.forEach((t => {
                t instanceof File && (n += t.size)
            })), parseInt(this.threshold) < n) throw new s(this)
        };
    var $;
    window.swv = {
        validators: e,
        validate: (t, n, o = {}) => {
            const a = (t.rules ?? []).filter((({
                                                   rule: t,
                                                   ...n
                                               }) => "function" == typeof e[t] && ("function" != typeof e[t].matches || e[t].matches(n, o))));
            if (!a.length) return new Map;
            const r = new i(n),
                p = a.reduce(((t, n) => {
                    const {
                        rule: i,
                        ...o
                    } = n;
                    if (t.get(o.field)?.error) return t;
                    try {
                        e[i].call({
                            rule: i,
                            ...o
                        }, r)
                    } catch (e) {
                        if (e instanceof s) return t.set(o.field, e)
                    }
                    return t
                }), new Map);
            for (const t of r.keys()) p.has(t) || p.set(t, {
                validInputs: r.getAll(t)
            });
            return p
        },
        ...null !== ($ = window.swv) && void 0 !== $ ? $ : {}
    }
}();

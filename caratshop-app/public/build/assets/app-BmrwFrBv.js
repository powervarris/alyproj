function Fe(e, t) {
    return function () {
        return e.apply(t, arguments);
    };
}
const { toString: tt } = Object.prototype,
    { getPrototypeOf: fe } = Object,
    v = ((e) => (t) => {
        const n = tt.call(t);
        return e[n] || (e[n] = n.slice(8, -1).toLowerCase());
    })(Object.create(null)),
    N = (e) => ((e = e.toLowerCase()), (t) => v(t) === e),
    $ = (e) => (t) => typeof t === e,
    { isArray: U } = Array,
    q = $("undefined");
function nt(e) {
    return (
        e !== null &&
        !q(e) &&
        e.constructor !== null &&
        !q(e.constructor) &&
        A(e.constructor.isBuffer) &&
        e.constructor.isBuffer(e)
    );
}
const Le = N("ArrayBuffer");
function rt(e) {
    let t;
    return (
        typeof ArrayBuffer < "u" && ArrayBuffer.isView
            ? (t = ArrayBuffer.isView(e))
            : (t = e && e.buffer && Le(e.buffer)),
        t
    );
}
const st = $("string"),
    A = $("function"),
    Be = $("number"),
    K = (e) => e !== null && typeof e == "object",
    ot = (e) => e === !0 || e === !1,
    z = (e) => {
        if (v(e) !== "object") return !1;
        const t = fe(e);
        return (
            (t === null ||
                t === Object.prototype ||
                Object.getPrototypeOf(t) === null) &&
            !(Symbol.toStringTag in e) &&
            !(Symbol.iterator in e)
        );
    },
    it = N("Date"),
    at = N("File"),
    ct = N("Blob"),
    ut = N("FileList"),
    lt = (e) => K(e) && A(e.pipe),
    ft = (e) => {
        let t;
        return (
            e &&
            ((typeof FormData == "function" && e instanceof FormData) ||
                (A(e.append) &&
                    ((t = v(e)) === "formdata" ||
                        (t === "object" &&
                            A(e.toString) &&
                            e.toString() === "[object FormData]"))))
        );
    },
    dt = N("URLSearchParams"),
    [pt, ht, mt, yt] = ["ReadableStream", "Request", "Response", "Headers"].map(
        N
    ),
    wt = (e) =>
        e.trim ? e.trim() : e.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "");
function H(e, t, { allOwnKeys: n = !1 } = {}) {
    if (e === null || typeof e > "u") return;
    let r, s;
    if ((typeof e != "object" && (e = [e]), U(e)))
        for (r = 0, s = e.length; r < s; r++) t.call(null, e[r], r, e);
    else {
        const o = n ? Object.getOwnPropertyNames(e) : Object.keys(e),
            i = o.length;
        let c;
        for (r = 0; r < i; r++) (c = o[r]), t.call(null, e[c], c, e);
    }
}
function De(e, t) {
    t = t.toLowerCase();
    const n = Object.keys(e);
    let r = n.length,
        s;
    for (; r-- > 0; ) if (((s = n[r]), t === s.toLowerCase())) return s;
    return null;
}
const F =
        typeof globalThis < "u"
            ? globalThis
            : typeof self < "u"
            ? self
            : typeof window < "u"
            ? window
            : global,
    Ue = (e) => !q(e) && e !== F;
function re() {
    const { caseless: e } = (Ue(this) && this) || {},
        t = {},
        n = (r, s) => {
            const o = (e && De(t, s)) || s;
            z(t[o]) && z(r)
                ? (t[o] = re(t[o], r))
                : z(r)
                ? (t[o] = re({}, r))
                : U(r)
                ? (t[o] = r.slice())
                : (t[o] = r);
        };
    for (let r = 0, s = arguments.length; r < s; r++)
        arguments[r] && H(arguments[r], n);
    return t;
}
const bt = (e, t, n, { allOwnKeys: r } = {}) => (
        H(
            t,
            (s, o) => {
                n && A(s) ? (e[o] = Fe(s, n)) : (e[o] = s);
            },
            { allOwnKeys: r }
        ),
        e
    ),
    Et = (e) => (e.charCodeAt(0) === 65279 && (e = e.slice(1)), e),
    Rt = (e, t, n, r) => {
        (e.prototype = Object.create(t.prototype, r)),
            (e.prototype.constructor = e),
            Object.defineProperty(e, "super", { value: t.prototype }),
            n && Object.assign(e.prototype, n);
    },
    St = (e, t, n, r) => {
        let s, o, i;
        const c = {};
        if (((t = t || {}), e == null)) return t;
        do {
            for (s = Object.getOwnPropertyNames(e), o = s.length; o-- > 0; )
                (i = s[o]),
                    (!r || r(i, e, t)) && !c[i] && ((t[i] = e[i]), (c[i] = !0));
            e = n !== !1 && fe(e);
        } while (e && (!n || n(e, t)) && e !== Object.prototype);
        return t;
    },
    gt = (e, t, n) => {
        (e = String(e)),
            (n === void 0 || n > e.length) && (n = e.length),
            (n -= t.length);
        const r = e.indexOf(t, n);
        return r !== -1 && r === n;
    },
    Ot = (e) => {
        if (!e) return null;
        if (U(e)) return e;
        let t = e.length;
        if (!Be(t)) return null;
        const n = new Array(t);
        for (; t-- > 0; ) n[t] = e[t];
        return n;
    },
    Tt = (
        (e) => (t) =>
            e && t instanceof e
    )(typeof Uint8Array < "u" && fe(Uint8Array)),
    At = (e, t) => {
        const r = (e && e[Symbol.iterator]).call(e);
        let s;
        for (; (s = r.next()) && !s.done; ) {
            const o = s.value;
            t.call(e, o[0], o[1]);
        }
    },
    xt = (e, t) => {
        let n;
        const r = [];
        for (; (n = e.exec(t)) !== null; ) r.push(n);
        return r;
    },
    Ct = N("HTMLFormElement"),
    Nt = (e) =>
        e.toLowerCase().replace(/[-_\s]([a-z\d])(\w*)/g, function (n, r, s) {
            return r.toUpperCase() + s;
        }),
    we = (
        ({ hasOwnProperty: e }) =>
        (t, n) =>
            e.call(t, n)
    )(Object.prototype),
    Pt = N("RegExp"),
    ke = (e, t) => {
        const n = Object.getOwnPropertyDescriptors(e),
            r = {};
        H(n, (s, o) => {
            let i;
            (i = t(s, o, e)) !== !1 && (r[o] = i || s);
        }),
            Object.defineProperties(e, r);
    },
    _t = (e) => {
        ke(e, (t, n) => {
            if (A(e) && ["arguments", "caller", "callee"].indexOf(n) !== -1)
                return !1;
            const r = e[n];
            if (A(r)) {
                if (((t.enumerable = !1), "writable" in t)) {
                    t.writable = !1;
                    return;
                }
                t.set ||
                    (t.set = () => {
                        throw Error(
                            "Can not rewrite read-only method '" + n + "'"
                        );
                    });
            }
        });
    },
    Ft = (e, t) => {
        const n = {},
            r = (s) => {
                s.forEach((o) => {
                    n[o] = !0;
                });
            };
        return U(e) ? r(e) : r(String(e).split(t)), n;
    },
    Lt = () => {},
    Bt = (e, t) => (e != null && Number.isFinite((e = +e)) ? e : t),
    Y = "abcdefghijklmnopqrstuvwxyz",
    be = "0123456789",
    je = { DIGIT: be, ALPHA: Y, ALPHA_DIGIT: Y + Y.toUpperCase() + be },
    Dt = (e = 16, t = je.ALPHA_DIGIT) => {
        let n = "";
        const { length: r } = t;
        for (; e--; ) n += t[(Math.random() * r) | 0];
        return n;
    };
function Ut(e) {
    return !!(
        e &&
        A(e.append) &&
        e[Symbol.toStringTag] === "FormData" &&
        e[Symbol.iterator]
    );
}
const kt = (e) => {
        const t = new Array(10),
            n = (r, s) => {
                if (K(r)) {
                    if (t.indexOf(r) >= 0) return;
                    if (!("toJSON" in r)) {
                        t[s] = r;
                        const o = U(r) ? [] : {};
                        return (
                            H(r, (i, c) => {
                                const f = n(i, s + 1);
                                !q(f) && (o[c] = f);
                            }),
                            (t[s] = void 0),
                            o
                        );
                    }
                }
                return r;
            };
        return n(e, 0);
    },
    jt = N("AsyncFunction"),
    qt = (e) => e && (K(e) || A(e)) && A(e.then) && A(e.catch),
    qe = ((e, t) =>
        e
            ? setImmediate
            : t
            ? ((n, r) => (
                  F.addEventListener(
                      "message",
                      ({ source: s, data: o }) => {
                          s === F && o === n && r.length && r.shift()();
                      },
                      !1
                  ),
                  (s) => {
                      r.push(s), F.postMessage(n, "*");
                  }
              ))(`axios@${Math.random()}`, [])
            : (n) => setTimeout(n))(
        typeof setImmediate == "function",
        A(F.postMessage)
    ),
    Ht =
        typeof queueMicrotask < "u"
            ? queueMicrotask.bind(F)
            : (typeof process < "u" && process.nextTick) || qe,
    a = {
        isArray: U,
        isArrayBuffer: Le,
        isBuffer: nt,
        isFormData: ft,
        isArrayBufferView: rt,
        isString: st,
        isNumber: Be,
        isBoolean: ot,
        isObject: K,
        isPlainObject: z,
        isReadableStream: pt,
        isRequest: ht,
        isResponse: mt,
        isHeaders: yt,
        isUndefined: q,
        isDate: it,
        isFile: at,
        isBlob: ct,
        isRegExp: Pt,
        isFunction: A,
        isStream: lt,
        isURLSearchParams: dt,
        isTypedArray: Tt,
        isFileList: ut,
        forEach: H,
        merge: re,
        extend: bt,
        trim: wt,
        stripBOM: Et,
        inherits: Rt,
        toFlatObject: St,
        kindOf: v,
        kindOfTest: N,
        endsWith: gt,
        toArray: Ot,
        forEachEntry: At,
        matchAll: xt,
        isHTMLForm: Ct,
        hasOwnProperty: we,
        hasOwnProp: we,
        reduceDescriptors: ke,
        freezeMethods: _t,
        toObjectSet: Ft,
        toCamelCase: Nt,
        noop: Lt,
        toFiniteNumber: Bt,
        findKey: De,
        global: F,
        isContextDefined: Ue,
        ALPHABET: je,
        generateString: Dt,
        isSpecCompliantForm: Ut,
        toJSONObject: kt,
        isAsyncFn: jt,
        isThenable: qt,
        setImmediate: qe,
        asap: Ht,
    };
function m(e, t, n, r, s) {
    Error.call(this),
        Error.captureStackTrace
            ? Error.captureStackTrace(this, this.constructor)
            : (this.stack = new Error().stack),
        (this.message = e),
        (this.name = "AxiosError"),
        t && (this.code = t),
        n && (this.config = n),
        r && (this.request = r),
        s && ((this.response = s), (this.status = s.status ? s.status : null));
}
a.inherits(m, Error, {
    toJSON: function () {
        return {
            message: this.message,
            name: this.name,
            description: this.description,
            number: this.number,
            fileName: this.fileName,
            lineNumber: this.lineNumber,
            columnNumber: this.columnNumber,
            stack: this.stack,
            config: a.toJSONObject(this.config),
            code: this.code,
            status: this.status,
        };
    },
});
const He = m.prototype,
    Ie = {};
[
    "ERR_BAD_OPTION_VALUE",
    "ERR_BAD_OPTION",
    "ECONNABORTED",
    "ETIMEDOUT",
    "ERR_NETWORK",
    "ERR_FR_TOO_MANY_REDIRECTS",
    "ERR_DEPRECATED",
    "ERR_BAD_RESPONSE",
    "ERR_BAD_REQUEST",
    "ERR_CANCELED",
    "ERR_NOT_SUPPORT",
    "ERR_INVALID_URL",
].forEach((e) => {
    Ie[e] = { value: e };
});
Object.defineProperties(m, Ie);
Object.defineProperty(He, "isAxiosError", { value: !0 });
m.from = (e, t, n, r, s, o) => {
    const i = Object.create(He);
    return (
        a.toFlatObject(
            e,
            i,
            function (f) {
                return f !== Error.prototype;
            },
            (c) => c !== "isAxiosError"
        ),
        m.call(i, e.message, t, n, r, s),
        (i.cause = e),
        (i.name = e.name),
        o && Object.assign(i, o),
        i
    );
};
const It = null;
function se(e) {
    return a.isPlainObject(e) || a.isArray(e);
}
function Me(e) {
    return a.endsWith(e, "[]") ? e.slice(0, -2) : e;
}
function Ee(e, t, n) {
    return e
        ? e
              .concat(t)
              .map(function (s, o) {
                  return (s = Me(s)), !n && o ? "[" + s + "]" : s;
              })
              .join(n ? "." : "")
        : t;
}
function Mt(e) {
    return a.isArray(e) && !e.some(se);
}
const zt = a.toFlatObject(a, {}, null, function (t) {
    return /^is[A-Z]/.test(t);
});
function X(e, t, n) {
    if (!a.isObject(e)) throw new TypeError("target must be an object");
    (t = t || new FormData()),
        (n = a.toFlatObject(
            n,
            { metaTokens: !0, dots: !1, indexes: !1 },
            !1,
            function (y, d) {
                return !a.isUndefined(d[y]);
            }
        ));
    const r = n.metaTokens,
        s = n.visitor || l,
        o = n.dots,
        i = n.indexes,
        f = (n.Blob || (typeof Blob < "u" && Blob)) && a.isSpecCompliantForm(t);
    if (!a.isFunction(s)) throw new TypeError("visitor must be a function");
    function u(h) {
        if (h === null) return "";
        if (a.isDate(h)) return h.toISOString();
        if (!f && a.isBlob(h))
            throw new m("Blob is not supported. Use a Buffer instead.");
        return a.isArrayBuffer(h) || a.isTypedArray(h)
            ? f && typeof Blob == "function"
                ? new Blob([h])
                : Buffer.from(h)
            : h;
    }
    function l(h, y, d) {
        let g = h;
        if (h && !d && typeof h == "object") {
            if (a.endsWith(y, "{}"))
                (y = r ? y : y.slice(0, -2)), (h = JSON.stringify(h));
            else if (
                (a.isArray(h) && Mt(h)) ||
                ((a.isFileList(h) || a.endsWith(y, "[]")) && (g = a.toArray(h)))
            )
                return (
                    (y = Me(y)),
                    g.forEach(function (w, S) {
                        !(a.isUndefined(w) || w === null) &&
                            t.append(
                                i === !0
                                    ? Ee([y], S, o)
                                    : i === null
                                    ? y
                                    : y + "[]",
                                u(w)
                            );
                    }),
                    !1
                );
        }
        return se(h) ? !0 : (t.append(Ee(d, y, o), u(h)), !1);
    }
    const p = [],
        b = Object.assign(zt, {
            defaultVisitor: l,
            convertValue: u,
            isVisitable: se,
        });
    function E(h, y) {
        if (!a.isUndefined(h)) {
            if (p.indexOf(h) !== -1)
                throw Error("Circular reference detected in " + y.join("."));
            p.push(h),
                a.forEach(h, function (g, T) {
                    (!(a.isUndefined(g) || g === null) &&
                        s.call(t, g, a.isString(T) ? T.trim() : T, y, b)) ===
                        !0 && E(g, y ? y.concat(T) : [T]);
                }),
                p.pop();
        }
    }
    if (!a.isObject(e)) throw new TypeError("data must be an object");
    return E(e), t;
}
function Re(e) {
    const t = {
        "!": "%21",
        "'": "%27",
        "(": "%28",
        ")": "%29",
        "~": "%7E",
        "%20": "+",
        "%00": "\0",
    };
    return encodeURIComponent(e).replace(/[!'()~]|%20|%00/g, function (r) {
        return t[r];
    });
}
function de(e, t) {
    (this._pairs = []), e && X(e, this, t);
}
const ze = de.prototype;
ze.append = function (t, n) {
    this._pairs.push([t, n]);
};
ze.toString = function (t) {
    const n = t
        ? function (r) {
              return t.call(this, r, Re);
          }
        : Re;
    return this._pairs
        .map(function (s) {
            return n(s[0]) + "=" + n(s[1]);
        }, "")
        .join("&");
};
function Jt(e) {
    return encodeURIComponent(e)
        .replace(/%3A/gi, ":")
        .replace(/%24/g, "$")
        .replace(/%2C/gi, ",")
        .replace(/%20/g, "+")
        .replace(/%5B/gi, "[")
        .replace(/%5D/gi, "]");
}
function Je(e, t, n) {
    if (!t) return e;
    const r = (n && n.encode) || Jt,
        s = n && n.serialize;
    let o;
    if (
        (s
            ? (o = s(t, n))
            : (o = a.isURLSearchParams(t)
                  ? t.toString()
                  : new de(t, n).toString(r)),
        o)
    ) {
        const i = e.indexOf("#");
        i !== -1 && (e = e.slice(0, i)),
            (e += (e.indexOf("?") === -1 ? "?" : "&") + o);
    }
    return e;
}
class Se {
    constructor() {
        this.handlers = [];
    }
    use(t, n, r) {
        return (
            this.handlers.push({
                fulfilled: t,
                rejected: n,
                synchronous: r ? r.synchronous : !1,
                runWhen: r ? r.runWhen : null,
            }),
            this.handlers.length - 1
        );
    }
    eject(t) {
        this.handlers[t] && (this.handlers[t] = null);
    }
    clear() {
        this.handlers && (this.handlers = []);
    }
    forEach(t) {
        a.forEach(this.handlers, function (r) {
            r !== null && t(r);
        });
    }
}
const Ve = {
        silentJSONParsing: !0,
        forcedJSONParsing: !0,
        clarifyTimeoutError: !1,
    },
    Vt = typeof URLSearchParams < "u" ? URLSearchParams : de,
    Wt = typeof FormData < "u" ? FormData : null,
    vt = typeof Blob < "u" ? Blob : null,
    $t = {
        isBrowser: !0,
        classes: { URLSearchParams: Vt, FormData: Wt, Blob: vt },
        protocols: ["http", "https", "file", "blob", "url", "data"],
    },
    pe = typeof window < "u" && typeof document < "u",
    oe = (typeof navigator == "object" && navigator) || void 0,
    Kt =
        pe &&
        (!oe || ["ReactNative", "NativeScript", "NS"].indexOf(oe.product) < 0),
    Xt =
        typeof WorkerGlobalScope < "u" &&
        self instanceof WorkerGlobalScope &&
        typeof self.importScripts == "function",
    Gt = (pe && window.location.href) || "http://localhost",
    Qt = Object.freeze(
        Object.defineProperty(
            {
                __proto__: null,
                hasBrowserEnv: pe,
                hasStandardBrowserEnv: Kt,
                hasStandardBrowserWebWorkerEnv: Xt,
                navigator: oe,
                origin: Gt,
            },
            Symbol.toStringTag,
            { value: "Module" }
        )
    ),
    x = { ...Qt, ...$t };
function Zt(e, t) {
    return X(
        e,
        new x.classes.URLSearchParams(),
        Object.assign(
            {
                visitor: function (n, r, s, o) {
                    return x.isNode && a.isBuffer(n)
                        ? (this.append(r, n.toString("base64")), !1)
                        : o.defaultVisitor.apply(this, arguments);
                },
            },
            t
        )
    );
}
function Yt(e) {
    return a
        .matchAll(/\w+|\[(\w*)]/g, e)
        .map((t) => (t[0] === "[]" ? "" : t[1] || t[0]));
}
function en(e) {
    const t = {},
        n = Object.keys(e);
    let r;
    const s = n.length;
    let o;
    for (r = 0; r < s; r++) (o = n[r]), (t[o] = e[o]);
    return t;
}
function We(e) {
    function t(n, r, s, o) {
        let i = n[o++];
        if (i === "__proto__") return !0;
        const c = Number.isFinite(+i),
            f = o >= n.length;
        return (
            (i = !i && a.isArray(s) ? s.length : i),
            f
                ? (a.hasOwnProp(s, i) ? (s[i] = [s[i], r]) : (s[i] = r), !c)
                : ((!s[i] || !a.isObject(s[i])) && (s[i] = []),
                  t(n, r, s[i], o) && a.isArray(s[i]) && (s[i] = en(s[i])),
                  !c)
        );
    }
    if (a.isFormData(e) && a.isFunction(e.entries)) {
        const n = {};
        return (
            a.forEachEntry(e, (r, s) => {
                t(Yt(r), s, n, 0);
            }),
            n
        );
    }
    return null;
}
function tn(e, t, n) {
    if (a.isString(e))
        try {
            return (t || JSON.parse)(e), a.trim(e);
        } catch (r) {
            if (r.name !== "SyntaxError") throw r;
        }
    return (n || JSON.stringify)(e);
}
const I = {
    transitional: Ve,
    adapter: ["xhr", "http", "fetch"],
    transformRequest: [
        function (t, n) {
            const r = n.getContentType() || "",
                s = r.indexOf("application/json") > -1,
                o = a.isObject(t);
            if (
                (o && a.isHTMLForm(t) && (t = new FormData(t)), a.isFormData(t))
            )
                return s ? JSON.stringify(We(t)) : t;
            if (
                a.isArrayBuffer(t) ||
                a.isBuffer(t) ||
                a.isStream(t) ||
                a.isFile(t) ||
                a.isBlob(t) ||
                a.isReadableStream(t)
            )
                return t;
            if (a.isArrayBufferView(t)) return t.buffer;
            if (a.isURLSearchParams(t))
                return (
                    n.setContentType(
                        "application/x-www-form-urlencoded;charset=utf-8",
                        !1
                    ),
                    t.toString()
                );
            let c;
            if (o) {
                if (r.indexOf("application/x-www-form-urlencoded") > -1)
                    return Zt(t, this.formSerializer).toString();
                if (
                    (c = a.isFileList(t)) ||
                    r.indexOf("multipart/form-data") > -1
                ) {
                    const f = this.env && this.env.FormData;
                    return X(
                        c ? { "files[]": t } : t,
                        f && new f(),
                        this.formSerializer
                    );
                }
            }
            return o || s
                ? (n.setContentType("application/json", !1), tn(t))
                : t;
        },
    ],
    transformResponse: [
        function (t) {
            const n = this.transitional || I.transitional,
                r = n && n.forcedJSONParsing,
                s = this.responseType === "json";
            if (a.isResponse(t) || a.isReadableStream(t)) return t;
            if (t && a.isString(t) && ((r && !this.responseType) || s)) {
                const i = !(n && n.silentJSONParsing) && s;
                try {
                    return JSON.parse(t);
                } catch (c) {
                    if (i)
                        throw c.name === "SyntaxError"
                            ? m.from(
                                  c,
                                  m.ERR_BAD_RESPONSE,
                                  this,
                                  null,
                                  this.response
                              )
                            : c;
                }
            }
            return t;
        },
    ],
    timeout: 0,
    xsrfCookieName: "XSRF-TOKEN",
    xsrfHeaderName: "X-XSRF-TOKEN",
    maxContentLength: -1,
    maxBodyLength: -1,
    env: { FormData: x.classes.FormData, Blob: x.classes.Blob },
    validateStatus: function (t) {
        return t >= 200 && t < 300;
    },
    headers: {
        common: {
            Accept: "application/json, text/plain, */*",
            "Content-Type": void 0,
        },
    },
};
a.forEach(["delete", "get", "head", "post", "put", "patch"], (e) => {
    I.headers[e] = {};
});
const nn = a.toObjectSet([
        "age",
        "authorization",
        "content-length",
        "content-type",
        "etag",
        "expires",
        "from",
        "host",
        "if-modified-since",
        "if-unmodified-since",
        "last-modified",
        "location",
        "max-forwards",
        "proxy-authorization",
        "referer",
        "retry-after",
        "user-agent",
    ]),
    rn = (e) => {
        const t = {};
        let n, r, s;
        return (
            e &&
                e
                    .split(
                        `
`
                    )
                    .forEach(function (i) {
                        (s = i.indexOf(":")),
                            (n = i.substring(0, s).trim().toLowerCase()),
                            (r = i.substring(s + 1).trim()),
                            !(!n || (t[n] && nn[n])) &&
                                (n === "set-cookie"
                                    ? t[n]
                                        ? t[n].push(r)
                                        : (t[n] = [r])
                                    : (t[n] = t[n] ? t[n] + ", " + r : r));
                    }),
            t
        );
    },
    ge = Symbol("internals");
function j(e) {
    return e && String(e).trim().toLowerCase();
}
function J(e) {
    return e === !1 || e == null ? e : a.isArray(e) ? e.map(J) : String(e);
}
function sn(e) {
    const t = Object.create(null),
        n = /([^\s,;=]+)\s*(?:=\s*([^,;]+))?/g;
    let r;
    for (; (r = n.exec(e)); ) t[r[1]] = r[2];
    return t;
}
const on = (e) => /^[-_a-zA-Z0-9^`|~,!#$%&'*+.]+$/.test(e.trim());
function ee(e, t, n, r, s) {
    if (a.isFunction(r)) return r.call(this, t, n);
    if ((s && (t = n), !!a.isString(t))) {
        if (a.isString(r)) return t.indexOf(r) !== -1;
        if (a.isRegExp(r)) return r.test(t);
    }
}
function an(e) {
    return e
        .trim()
        .toLowerCase()
        .replace(/([a-z\d])(\w*)/g, (t, n, r) => n.toUpperCase() + r);
}
function cn(e, t) {
    const n = a.toCamelCase(" " + t);
    ["get", "set", "has"].forEach((r) => {
        Object.defineProperty(e, r + n, {
            value: function (s, o, i) {
                return this[r].call(this, t, s, o, i);
            },
            configurable: !0,
        });
    });
}
class O {
    constructor(t) {
        t && this.set(t);
    }
    set(t, n, r) {
        const s = this;
        function o(c, f, u) {
            const l = j(f);
            if (!l) throw new Error("header name must be a non-empty string");
            const p = a.findKey(s, l);
            (!p ||
                s[p] === void 0 ||
                u === !0 ||
                (u === void 0 && s[p] !== !1)) &&
                (s[p || f] = J(c));
        }
        const i = (c, f) => a.forEach(c, (u, l) => o(u, l, f));
        if (a.isPlainObject(t) || t instanceof this.constructor) i(t, n);
        else if (a.isString(t) && (t = t.trim()) && !on(t)) i(rn(t), n);
        else if (a.isHeaders(t)) for (const [c, f] of t.entries()) o(f, c, r);
        else t != null && o(n, t, r);
        return this;
    }
    get(t, n) {
        if (((t = j(t)), t)) {
            const r = a.findKey(this, t);
            if (r) {
                const s = this[r];
                if (!n) return s;
                if (n === !0) return sn(s);
                if (a.isFunction(n)) return n.call(this, s, r);
                if (a.isRegExp(n)) return n.exec(s);
                throw new TypeError("parser must be boolean|regexp|function");
            }
        }
    }
    has(t, n) {
        if (((t = j(t)), t)) {
            const r = a.findKey(this, t);
            return !!(
                r &&
                this[r] !== void 0 &&
                (!n || ee(this, this[r], r, n))
            );
        }
        return !1;
    }
    delete(t, n) {
        const r = this;
        let s = !1;
        function o(i) {
            if (((i = j(i)), i)) {
                const c = a.findKey(r, i);
                c && (!n || ee(r, r[c], c, n)) && (delete r[c], (s = !0));
            }
        }
        return a.isArray(t) ? t.forEach(o) : o(t), s;
    }
    clear(t) {
        const n = Object.keys(this);
        let r = n.length,
            s = !1;
        for (; r--; ) {
            const o = n[r];
            (!t || ee(this, this[o], o, t, !0)) && (delete this[o], (s = !0));
        }
        return s;
    }
    normalize(t) {
        const n = this,
            r = {};
        return (
            a.forEach(this, (s, o) => {
                const i = a.findKey(r, o);
                if (i) {
                    (n[i] = J(s)), delete n[o];
                    return;
                }
                const c = t ? an(o) : String(o).trim();
                c !== o && delete n[o], (n[c] = J(s)), (r[c] = !0);
            }),
            this
        );
    }
    concat(...t) {
        return this.constructor.concat(this, ...t);
    }
    toJSON(t) {
        const n = Object.create(null);
        return (
            a.forEach(this, (r, s) => {
                r != null &&
                    r !== !1 &&
                    (n[s] = t && a.isArray(r) ? r.join(", ") : r);
            }),
            n
        );
    }
    [Symbol.iterator]() {
        return Object.entries(this.toJSON())[Symbol.iterator]();
    }
    toString() {
        return Object.entries(this.toJSON()).map(([t, n]) => t + ": " + n)
            .join(`
`);
    }
    get [Symbol.toStringTag]() {
        return "AxiosHeaders";
    }
    static from(t) {
        return t instanceof this ? t : new this(t);
    }
    static concat(t, ...n) {
        const r = new this(t);
        return n.forEach((s) => r.set(s)), r;
    }
    static accessor(t) {
        const r = (this[ge] = this[ge] = { accessors: {} }).accessors,
            s = this.prototype;
        function o(i) {
            const c = j(i);
            r[c] || (cn(s, i), (r[c] = !0));
        }
        return a.isArray(t) ? t.forEach(o) : o(t), this;
    }
}
O.accessor([
    "Content-Type",
    "Content-Length",
    "Accept",
    "Accept-Encoding",
    "User-Agent",
    "Authorization",
]);
a.reduceDescriptors(O.prototype, ({ value: e }, t) => {
    let n = t[0].toUpperCase() + t.slice(1);
    return {
        get: () => e,
        set(r) {
            this[n] = r;
        },
    };
});
a.freezeMethods(O);
function te(e, t) {
    const n = this || I,
        r = t || n,
        s = O.from(r.headers);
    let o = r.data;
    return (
        a.forEach(e, function (c) {
            o = c.call(n, o, s.normalize(), t ? t.status : void 0);
        }),
        s.normalize(),
        o
    );
}
function ve(e) {
    return !!(e && e.__CANCEL__);
}
function k(e, t, n) {
    m.call(this, e ?? "canceled", m.ERR_CANCELED, t, n),
        (this.name = "CanceledError");
}
a.inherits(k, m, { __CANCEL__: !0 });
function $e(e, t, n) {
    const r = n.config.validateStatus;
    !n.status || !r || r(n.status)
        ? e(n)
        : t(
              new m(
                  "Request failed with status code " + n.status,
                  [m.ERR_BAD_REQUEST, m.ERR_BAD_RESPONSE][
                      Math.floor(n.status / 100) - 4
                  ],
                  n.config,
                  n.request,
                  n
              )
          );
}
function un(e) {
    const t = /^([-+\w]{1,25})(:?\/\/|:)/.exec(e);
    return (t && t[1]) || "";
}
function ln(e, t) {
    e = e || 10;
    const n = new Array(e),
        r = new Array(e);
    let s = 0,
        o = 0,
        i;
    return (
        (t = t !== void 0 ? t : 1e3),
        function (f) {
            const u = Date.now(),
                l = r[o];
            i || (i = u), (n[s] = f), (r[s] = u);
            let p = o,
                b = 0;
            for (; p !== s; ) (b += n[p++]), (p = p % e);
            if (((s = (s + 1) % e), s === o && (o = (o + 1) % e), u - i < t))
                return;
            const E = l && u - l;
            return E ? Math.round((b * 1e3) / E) : void 0;
        }
    );
}
function fn(e, t) {
    let n = 0,
        r = 1e3 / t,
        s,
        o;
    const i = (u, l = Date.now()) => {
        (n = l),
            (s = null),
            o && (clearTimeout(o), (o = null)),
            e.apply(null, u);
    };
    return [
        (...u) => {
            const l = Date.now(),
                p = l - n;
            p >= r
                ? i(u, l)
                : ((s = u),
                  o ||
                      (o = setTimeout(() => {
                          (o = null), i(s);
                      }, r - p)));
        },
        () => s && i(s),
    ];
}
const V = (e, t, n = 3) => {
        let r = 0;
        const s = ln(50, 250);
        return fn((o) => {
            const i = o.loaded,
                c = o.lengthComputable ? o.total : void 0,
                f = i - r,
                u = s(f),
                l = i <= c;
            r = i;
            const p = {
                loaded: i,
                total: c,
                progress: c ? i / c : void 0,
                bytes: f,
                rate: u || void 0,
                estimated: u && c && l ? (c - i) / u : void 0,
                event: o,
                lengthComputable: c != null,
                [t ? "download" : "upload"]: !0,
            };
            e(p);
        }, n);
    },
    Oe = (e, t) => {
        const n = e != null;
        return [
            (r) => t[0]({ lengthComputable: n, total: e, loaded: r }),
            t[1],
        ];
    },
    Te =
        (e) =>
        (...t) =>
            a.asap(() => e(...t)),
    dn = x.hasStandardBrowserEnv
        ? (function () {
              const t =
                      x.navigator &&
                      /(msie|trident)/i.test(x.navigator.userAgent),
                  n = document.createElement("a");
              let r;
              function s(o) {
                  let i = o;
                  return (
                      t && (n.setAttribute("href", i), (i = n.href)),
                      n.setAttribute("href", i),
                      {
                          href: n.href,
                          protocol: n.protocol
                              ? n.protocol.replace(/:$/, "")
                              : "",
                          host: n.host,
                          search: n.search ? n.search.replace(/^\?/, "") : "",
                          hash: n.hash ? n.hash.replace(/^#/, "") : "",
                          hostname: n.hostname,
                          port: n.port,
                          pathname:
                              n.pathname.charAt(0) === "/"
                                  ? n.pathname
                                  : "/" + n.pathname,
                      }
                  );
              }
              return (
                  (r = s(window.location.href)),
                  function (i) {
                      const c = a.isString(i) ? s(i) : i;
                      return c.protocol === r.protocol && c.host === r.host;
                  }
              );
          })()
        : (function () {
              return function () {
                  return !0;
              };
          })(),
    pn = x.hasStandardBrowserEnv
        ? {
              write(e, t, n, r, s, o) {
                  const i = [e + "=" + encodeURIComponent(t)];
                  a.isNumber(n) &&
                      i.push("expires=" + new Date(n).toGMTString()),
                      a.isString(r) && i.push("path=" + r),
                      a.isString(s) && i.push("domain=" + s),
                      o === !0 && i.push("secure"),
                      (document.cookie = i.join("; "));
              },
              read(e) {
                  const t = document.cookie.match(
                      new RegExp("(^|;\\s*)(" + e + ")=([^;]*)")
                  );
                  return t ? decodeURIComponent(t[3]) : null;
              },
              remove(e) {
                  this.write(e, "", Date.now() - 864e5);
              },
          }
        : {
              write() {},
              read() {
                  return null;
              },
              remove() {},
          };
function hn(e) {
    return /^([a-z][a-z\d+\-.]*:)?\/\//i.test(e);
}
function mn(e, t) {
    return t ? e.replace(/\/?\/$/, "") + "/" + t.replace(/^\/+/, "") : e;
}
function Ke(e, t) {
    return e && !hn(t) ? mn(e, t) : t;
}
const Ae = (e) => (e instanceof O ? { ...e } : e);
function B(e, t) {
    t = t || {};
    const n = {};
    function r(u, l, p) {
        return a.isPlainObject(u) && a.isPlainObject(l)
            ? a.merge.call({ caseless: p }, u, l)
            : a.isPlainObject(l)
            ? a.merge({}, l)
            : a.isArray(l)
            ? l.slice()
            : l;
    }
    function s(u, l, p) {
        if (a.isUndefined(l)) {
            if (!a.isUndefined(u)) return r(void 0, u, p);
        } else return r(u, l, p);
    }
    function o(u, l) {
        if (!a.isUndefined(l)) return r(void 0, l);
    }
    function i(u, l) {
        if (a.isUndefined(l)) {
            if (!a.isUndefined(u)) return r(void 0, u);
        } else return r(void 0, l);
    }
    function c(u, l, p) {
        if (p in t) return r(u, l);
        if (p in e) return r(void 0, u);
    }
    const f = {
        url: o,
        method: o,
        data: o,
        baseURL: i,
        transformRequest: i,
        transformResponse: i,
        paramsSerializer: i,
        timeout: i,
        timeoutMessage: i,
        withCredentials: i,
        withXSRFToken: i,
        adapter: i,
        responseType: i,
        xsrfCookieName: i,
        xsrfHeaderName: i,
        onUploadProgress: i,
        onDownloadProgress: i,
        decompress: i,
        maxContentLength: i,
        maxBodyLength: i,
        beforeRedirect: i,
        transport: i,
        httpAgent: i,
        httpsAgent: i,
        cancelToken: i,
        socketPath: i,
        responseEncoding: i,
        validateStatus: c,
        headers: (u, l) => s(Ae(u), Ae(l), !0),
    };
    return (
        a.forEach(Object.keys(Object.assign({}, e, t)), function (l) {
            const p = f[l] || s,
                b = p(e[l], t[l], l);
            (a.isUndefined(b) && p !== c) || (n[l] = b);
        }),
        n
    );
}
const Xe = (e) => {
        const t = B({}, e);
        let {
            data: n,
            withXSRFToken: r,
            xsrfHeaderName: s,
            xsrfCookieName: o,
            headers: i,
            auth: c,
        } = t;
        (t.headers = i = O.from(i)),
            (t.url = Je(Ke(t.baseURL, t.url), e.params, e.paramsSerializer)),
            c &&
                i.set(
                    "Authorization",
                    "Basic " +
                        btoa(
                            (c.username || "") +
                                ":" +
                                (c.password
                                    ? unescape(encodeURIComponent(c.password))
                                    : "")
                        )
                );
        let f;
        if (a.isFormData(n)) {
            if (x.hasStandardBrowserEnv || x.hasStandardBrowserWebWorkerEnv)
                i.setContentType(void 0);
            else if ((f = i.getContentType()) !== !1) {
                const [u, ...l] = f
                    ? f
                          .split(";")
                          .map((p) => p.trim())
                          .filter(Boolean)
                    : [];
                i.setContentType([u || "multipart/form-data", ...l].join("; "));
            }
        }
        if (
            x.hasStandardBrowserEnv &&
            (r && a.isFunction(r) && (r = r(t)), r || (r !== !1 && dn(t.url)))
        ) {
            const u = s && o && pn.read(o);
            u && i.set(s, u);
        }
        return t;
    },
    yn = typeof XMLHttpRequest < "u",
    wn =
        yn &&
        function (e) {
            return new Promise(function (n, r) {
                const s = Xe(e);
                let o = s.data;
                const i = O.from(s.headers).normalize();
                let {
                        responseType: c,
                        onUploadProgress: f,
                        onDownloadProgress: u,
                    } = s,
                    l,
                    p,
                    b,
                    E,
                    h;
                function y() {
                    E && E(),
                        h && h(),
                        s.cancelToken && s.cancelToken.unsubscribe(l),
                        s.signal && s.signal.removeEventListener("abort", l);
                }
                let d = new XMLHttpRequest();
                d.open(s.method.toUpperCase(), s.url, !0),
                    (d.timeout = s.timeout);
                function g() {
                    if (!d) return;
                    const w = O.from(
                            "getAllResponseHeaders" in d &&
                                d.getAllResponseHeaders()
                        ),
                        P = {
                            data:
                                !c || c === "text" || c === "json"
                                    ? d.responseText
                                    : d.response,
                            status: d.status,
                            statusText: d.statusText,
                            headers: w,
                            config: e,
                            request: d,
                        };
                    $e(
                        function (C) {
                            n(C), y();
                        },
                        function (C) {
                            r(C), y();
                        },
                        P
                    ),
                        (d = null);
                }
                "onloadend" in d
                    ? (d.onloadend = g)
                    : (d.onreadystatechange = function () {
                          !d ||
                              d.readyState !== 4 ||
                              (d.status === 0 &&
                                  !(
                                      d.responseURL &&
                                      d.responseURL.indexOf("file:") === 0
                                  )) ||
                              setTimeout(g);
                      }),
                    (d.onabort = function () {
                        d &&
                            (r(new m("Request aborted", m.ECONNABORTED, e, d)),
                            (d = null));
                    }),
                    (d.onerror = function () {
                        r(new m("Network Error", m.ERR_NETWORK, e, d)),
                            (d = null);
                    }),
                    (d.ontimeout = function () {
                        let S = s.timeout
                            ? "timeout of " + s.timeout + "ms exceeded"
                            : "timeout exceeded";
                        const P = s.transitional || Ve;
                        s.timeoutErrorMessage && (S = s.timeoutErrorMessage),
                            r(
                                new m(
                                    S,
                                    P.clarifyTimeoutError
                                        ? m.ETIMEDOUT
                                        : m.ECONNABORTED,
                                    e,
                                    d
                                )
                            ),
                            (d = null);
                    }),
                    o === void 0 && i.setContentType(null),
                    "setRequestHeader" in d &&
                        a.forEach(i.toJSON(), function (S, P) {
                            d.setRequestHeader(P, S);
                        }),
                    a.isUndefined(s.withCredentials) ||
                        (d.withCredentials = !!s.withCredentials),
                    c && c !== "json" && (d.responseType = s.responseType),
                    u &&
                        (([b, h] = V(u, !0)),
                        d.addEventListener("progress", b)),
                    f &&
                        d.upload &&
                        (([p, E] = V(f)),
                        d.upload.addEventListener("progress", p),
                        d.upload.addEventListener("loadend", E)),
                    (s.cancelToken || s.signal) &&
                        ((l = (w) => {
                            d &&
                                (r(!w || w.type ? new k(null, e, d) : w),
                                d.abort(),
                                (d = null));
                        }),
                        s.cancelToken && s.cancelToken.subscribe(l),
                        s.signal &&
                            (s.signal.aborted
                                ? l()
                                : s.signal.addEventListener("abort", l)));
                const T = un(s.url);
                if (T && x.protocols.indexOf(T) === -1) {
                    r(
                        new m(
                            "Unsupported protocol " + T + ":",
                            m.ERR_BAD_REQUEST,
                            e
                        )
                    );
                    return;
                }
                d.send(o || null);
            });
        },
    bn = (e, t) => {
        let n = new AbortController(),
            r;
        const s = function (f) {
            if (!r) {
                (r = !0), i();
                const u = f instanceof Error ? f : this.reason;
                n.abort(
                    u instanceof m
                        ? u
                        : new k(u instanceof Error ? u.message : u)
                );
            }
        };
        let o =
            t &&
            setTimeout(() => {
                s(new m(`timeout ${t} of ms exceeded`, m.ETIMEDOUT));
            }, t);
        const i = () => {
            e &&
                (o && clearTimeout(o),
                (o = null),
                e.forEach((f) => {
                    f &&
                        (f.removeEventListener
                            ? f.removeEventListener("abort", s)
                            : f.unsubscribe(s));
                }),
                (e = null));
        };
        e.forEach(
            (f) => f && f.addEventListener && f.addEventListener("abort", s)
        );
        const { signal: c } = n;
        return (
            (c.unsubscribe = i),
            [
                c,
                () => {
                    o && clearTimeout(o), (o = null);
                },
            ]
        );
    },
    En = function* (e, t) {
        let n = e.byteLength;
        if (!t || n < t) {
            yield e;
            return;
        }
        let r = 0,
            s;
        for (; r < n; ) (s = r + t), yield e.slice(r, s), (r = s);
    },
    Rn = async function* (e, t, n) {
        for await (const r of e)
            yield* En(ArrayBuffer.isView(r) ? r : await n(String(r)), t);
    },
    xe = (e, t, n, r, s) => {
        const o = Rn(e, t, s);
        let i = 0,
            c,
            f = (u) => {
                c || ((c = !0), r && r(u));
            };
        return new ReadableStream(
            {
                async pull(u) {
                    try {
                        const { done: l, value: p } = await o.next();
                        if (l) {
                            f(), u.close();
                            return;
                        }
                        let b = p.byteLength;
                        if (n) {
                            let E = (i += b);
                            n(E);
                        }
                        u.enqueue(new Uint8Array(p));
                    } catch (l) {
                        throw (f(l), l);
                    }
                },
                cancel(u) {
                    return f(u), o.return();
                },
            },
            { highWaterMark: 2 }
        );
    },
    G =
        typeof fetch == "function" &&
        typeof Request == "function" &&
        typeof Response == "function",
    Ge = G && typeof ReadableStream == "function",
    ie =
        G &&
        (typeof TextEncoder == "function"
            ? (
                  (e) => (t) =>
                      e.encode(t)
              )(new TextEncoder())
            : async (e) => new Uint8Array(await new Response(e).arrayBuffer())),
    Qe = (e, ...t) => {
        try {
            return !!e(...t);
        } catch {
            return !1;
        }
    },
    Sn =
        Ge &&
        Qe(() => {
            let e = !1;
            const t = new Request(x.origin, {
                body: new ReadableStream(),
                method: "POST",
                get duplex() {
                    return (e = !0), "half";
                },
            }).headers.has("Content-Type");
            return e && !t;
        }),
    Ce = 64 * 1024,
    ae = Ge && Qe(() => a.isReadableStream(new Response("").body)),
    W = { stream: ae && ((e) => e.body) };
G &&
    ((e) => {
        ["text", "arrayBuffer", "blob", "formData", "stream"].forEach((t) => {
            !W[t] &&
                (W[t] = a.isFunction(e[t])
                    ? (n) => n[t]()
                    : (n, r) => {
                          throw new m(
                              `Response type '${t}' is not supported`,
                              m.ERR_NOT_SUPPORT,
                              r
                          );
                      });
        });
    })(new Response());
const gn = async (e) => {
        if (e == null) return 0;
        if (a.isBlob(e)) return e.size;
        if (a.isSpecCompliantForm(e))
            return (await new Request(e).arrayBuffer()).byteLength;
        if (a.isArrayBufferView(e) || a.isArrayBuffer(e)) return e.byteLength;
        if ((a.isURLSearchParams(e) && (e = e + ""), a.isString(e)))
            return (await ie(e)).byteLength;
    },
    On = async (e, t) => {
        const n = a.toFiniteNumber(e.getContentLength());
        return n ?? gn(t);
    },
    Tn =
        G &&
        (async (e) => {
            let {
                url: t,
                method: n,
                data: r,
                signal: s,
                cancelToken: o,
                timeout: i,
                onDownloadProgress: c,
                onUploadProgress: f,
                responseType: u,
                headers: l,
                withCredentials: p = "same-origin",
                fetchOptions: b,
            } = Xe(e);
            u = u ? (u + "").toLowerCase() : "text";
            let [E, h] = s || o || i ? bn([s, o], i) : [],
                y,
                d;
            const g = () => {
                !y &&
                    setTimeout(() => {
                        E && E.unsubscribe();
                    }),
                    (y = !0);
            };
            let T;
            try {
                if (
                    f &&
                    Sn &&
                    n !== "get" &&
                    n !== "head" &&
                    (T = await On(l, r)) !== 0
                ) {
                    let C = new Request(t, {
                            method: "POST",
                            body: r,
                            duplex: "half",
                        }),
                        D;
                    if (
                        (a.isFormData(r) &&
                            (D = C.headers.get("content-type")) &&
                            l.setContentType(D),
                        C.body)
                    ) {
                        const [Z, M] = Oe(T, V(Te(f)));
                        r = xe(C.body, Ce, Z, M, ie);
                    }
                }
                a.isString(p) || (p = p ? "include" : "omit");
                const w = "credentials" in Request.prototype;
                d = new Request(t, {
                    ...b,
                    signal: E,
                    method: n.toUpperCase(),
                    headers: l.normalize().toJSON(),
                    body: r,
                    duplex: "half",
                    credentials: w ? p : void 0,
                });
                let S = await fetch(d);
                const P = ae && (u === "stream" || u === "response");
                if (ae && (c || P)) {
                    const C = {};
                    ["status", "statusText", "headers"].forEach((ye) => {
                        C[ye] = S[ye];
                    });
                    const D = a.toFiniteNumber(S.headers.get("content-length")),
                        [Z, M] = (c && Oe(D, V(Te(c), !0))) || [];
                    S = new Response(
                        xe(
                            S.body,
                            Ce,
                            Z,
                            () => {
                                M && M(), P && g();
                            },
                            ie
                        ),
                        C
                    );
                }
                u = u || "text";
                let Q = await W[a.findKey(W, u) || "text"](S, e);
                return (
                    !P && g(),
                    h && h(),
                    await new Promise((C, D) => {
                        $e(C, D, {
                            data: Q,
                            headers: O.from(S.headers),
                            status: S.status,
                            statusText: S.statusText,
                            config: e,
                            request: d,
                        });
                    })
                );
            } catch (w) {
                throw (
                    (g(),
                    w && w.name === "TypeError" && /fetch/i.test(w.message)
                        ? Object.assign(
                              new m("Network Error", m.ERR_NETWORK, e, d),
                              { cause: w.cause || w }
                          )
                        : m.from(w, w && w.code, e, d))
                );
            }
        }),
    ce = { http: It, xhr: wn, fetch: Tn };
a.forEach(ce, (e, t) => {
    if (e) {
        try {
            Object.defineProperty(e, "name", { value: t });
        } catch {}
        Object.defineProperty(e, "adapterName", { value: t });
    }
});
const Ne = (e) => `- ${e}`,
    An = (e) => a.isFunction(e) || e === null || e === !1,
    Ze = {
        getAdapter: (e) => {
            e = a.isArray(e) ? e : [e];
            const { length: t } = e;
            let n, r;
            const s = {};
            for (let o = 0; o < t; o++) {
                n = e[o];
                let i;
                if (
                    ((r = n),
                    !An(n) &&
                        ((r = ce[(i = String(n)).toLowerCase()]), r === void 0))
                )
                    throw new m(`Unknown adapter '${i}'`);
                if (r) break;
                s[i || "#" + o] = r;
            }
            if (!r) {
                const o = Object.entries(s).map(
                    ([c, f]) =>
                        `adapter ${c} ` +
                        (f === !1
                            ? "is not supported by the environment"
                            : "is not available in the build")
                );
                let i = t
                    ? o.length > 1
                        ? `since :
` +
                          o.map(Ne).join(`
`)
                        : " " + Ne(o[0])
                    : "as no adapter specified";
                throw new m(
                    "There is no suitable adapter to dispatch the request " + i,
                    "ERR_NOT_SUPPORT"
                );
            }
            return r;
        },
        adapters: ce,
    };
function ne(e) {
    if (
        (e.cancelToken && e.cancelToken.throwIfRequested(),
        e.signal && e.signal.aborted)
    )
        throw new k(null, e);
}
function Pe(e) {
    return (
        ne(e),
        (e.headers = O.from(e.headers)),
        (e.data = te.call(e, e.transformRequest)),
        ["post", "put", "patch"].indexOf(e.method) !== -1 &&
            e.headers.setContentType("application/x-www-form-urlencoded", !1),
        Ze.getAdapter(e.adapter || I.adapter)(e).then(
            function (r) {
                return (
                    ne(e),
                    (r.data = te.call(e, e.transformResponse, r)),
                    (r.headers = O.from(r.headers)),
                    r
                );
            },
            function (r) {
                return (
                    ve(r) ||
                        (ne(e),
                        r &&
                            r.response &&
                            ((r.response.data = te.call(
                                e,
                                e.transformResponse,
                                r.response
                            )),
                            (r.response.headers = O.from(r.response.headers)))),
                    Promise.reject(r)
                );
            }
        )
    );
}
const Ye = "1.7.5",
    he = {};
["object", "boolean", "number", "function", "string", "symbol"].forEach(
    (e, t) => {
        he[e] = function (r) {
            return typeof r === e || "a" + (t < 1 ? "n " : " ") + e;
        };
    }
);
const _e = {};
he.transitional = function (t, n, r) {
    function s(o, i) {
        return (
            "[Axios v" +
            Ye +
            "] Transitional option '" +
            o +
            "'" +
            i +
            (r ? ". " + r : "")
        );
    }
    return (o, i, c) => {
        if (t === !1)
            throw new m(
                s(i, " has been removed" + (n ? " in " + n : "")),
                m.ERR_DEPRECATED
            );
        return (
            n &&
                !_e[i] &&
                ((_e[i] = !0),
                console.warn(
                    s(
                        i,
                        " has been deprecated since v" +
                            n +
                            " and will be removed in the near future"
                    )
                )),
            t ? t(o, i, c) : !0
        );
    };
};
function xn(e, t, n) {
    if (typeof e != "object")
        throw new m("options must be an object", m.ERR_BAD_OPTION_VALUE);
    const r = Object.keys(e);
    let s = r.length;
    for (; s-- > 0; ) {
        const o = r[s],
            i = t[o];
        if (i) {
            const c = e[o],
                f = c === void 0 || i(c, o, e);
            if (f !== !0)
                throw new m(
                    "option " + o + " must be " + f,
                    m.ERR_BAD_OPTION_VALUE
                );
            continue;
        }
        if (n !== !0) throw new m("Unknown option " + o, m.ERR_BAD_OPTION);
    }
}
const ue = { assertOptions: xn, validators: he },
    _ = ue.validators;
class L {
    constructor(t) {
        (this.defaults = t),
            (this.interceptors = { request: new Se(), response: new Se() });
    }
    async request(t, n) {
        try {
            return await this._request(t, n);
        } catch (r) {
            if (r instanceof Error) {
                let s;
                Error.captureStackTrace
                    ? Error.captureStackTrace((s = {}))
                    : (s = new Error());
                const o = s.stack ? s.stack.replace(/^.+\n/, "") : "";
                try {
                    r.stack
                        ? o &&
                          !String(r.stack).endsWith(
                              o.replace(/^.+\n.+\n/, "")
                          ) &&
                          (r.stack +=
                              `
` + o)
                        : (r.stack = o);
                } catch {}
            }
            throw r;
        }
    }
    _request(t, n) {
        typeof t == "string" ? ((n = n || {}), (n.url = t)) : (n = t || {}),
            (n = B(this.defaults, n));
        const { transitional: r, paramsSerializer: s, headers: o } = n;
        r !== void 0 &&
            ue.assertOptions(
                r,
                {
                    silentJSONParsing: _.transitional(_.boolean),
                    forcedJSONParsing: _.transitional(_.boolean),
                    clarifyTimeoutError: _.transitional(_.boolean),
                },
                !1
            ),
            s != null &&
                (a.isFunction(s)
                    ? (n.paramsSerializer = { serialize: s })
                    : ue.assertOptions(
                          s,
                          { encode: _.function, serialize: _.function },
                          !0
                      )),
            (n.method = (
                n.method ||
                this.defaults.method ||
                "get"
            ).toLowerCase());
        let i = o && a.merge(o.common, o[n.method]);
        o &&
            a.forEach(
                ["delete", "get", "head", "post", "put", "patch", "common"],
                (h) => {
                    delete o[h];
                }
            ),
            (n.headers = O.concat(i, o));
        const c = [];
        let f = !0;
        this.interceptors.request.forEach(function (y) {
            (typeof y.runWhen == "function" && y.runWhen(n) === !1) ||
                ((f = f && y.synchronous), c.unshift(y.fulfilled, y.rejected));
        });
        const u = [];
        this.interceptors.response.forEach(function (y) {
            u.push(y.fulfilled, y.rejected);
        });
        let l,
            p = 0,
            b;
        if (!f) {
            const h = [Pe.bind(this), void 0];
            for (
                h.unshift.apply(h, c),
                    h.push.apply(h, u),
                    b = h.length,
                    l = Promise.resolve(n);
                p < b;

            )
                l = l.then(h[p++], h[p++]);
            return l;
        }
        b = c.length;
        let E = n;
        for (p = 0; p < b; ) {
            const h = c[p++],
                y = c[p++];
            try {
                E = h(E);
            } catch (d) {
                y.call(this, d);
                break;
            }
        }
        try {
            l = Pe.call(this, E);
        } catch (h) {
            return Promise.reject(h);
        }
        for (p = 0, b = u.length; p < b; ) l = l.then(u[p++], u[p++]);
        return l;
    }
    getUri(t) {
        t = B(this.defaults, t);
        const n = Ke(t.baseURL, t.url);
        return Je(n, t.params, t.paramsSerializer);
    }
}
a.forEach(["delete", "get", "head", "options"], function (t) {
    L.prototype[t] = function (n, r) {
        return this.request(
            B(r || {}, { method: t, url: n, data: (r || {}).data })
        );
    };
});
a.forEach(["post", "put", "patch"], function (t) {
    function n(r) {
        return function (o, i, c) {
            return this.request(
                B(c || {}, {
                    method: t,
                    headers: r ? { "Content-Type": "multipart/form-data" } : {},
                    url: o,
                    data: i,
                })
            );
        };
    }
    (L.prototype[t] = n()), (L.prototype[t + "Form"] = n(!0));
});
class me {
    constructor(t) {
        if (typeof t != "function")
            throw new TypeError("executor must be a function.");
        let n;
        this.promise = new Promise(function (o) {
            n = o;
        });
        const r = this;
        this.promise.then((s) => {
            if (!r._listeners) return;
            let o = r._listeners.length;
            for (; o-- > 0; ) r._listeners[o](s);
            r._listeners = null;
        }),
            (this.promise.then = (s) => {
                let o;
                const i = new Promise((c) => {
                    r.subscribe(c), (o = c);
                }).then(s);
                return (
                    (i.cancel = function () {
                        r.unsubscribe(o);
                    }),
                    i
                );
            }),
            t(function (o, i, c) {
                r.reason || ((r.reason = new k(o, i, c)), n(r.reason));
            });
    }
    throwIfRequested() {
        if (this.reason) throw this.reason;
    }
    subscribe(t) {
        if (this.reason) {
            t(this.reason);
            return;
        }
        this._listeners ? this._listeners.push(t) : (this._listeners = [t]);
    }
    unsubscribe(t) {
        if (!this._listeners) return;
        const n = this._listeners.indexOf(t);
        n !== -1 && this._listeners.splice(n, 1);
    }
    static source() {
        let t;
        return {
            token: new me(function (s) {
                t = s;
            }),
            cancel: t,
        };
    }
}
function Cn(e) {
    return function (n) {
        return e.apply(null, n);
    };
}
function Nn(e) {
    return a.isObject(e) && e.isAxiosError === !0;
}
const le = {
    Continue: 100,
    SwitchingProtocols: 101,
    Processing: 102,
    EarlyHints: 103,
    Ok: 200,
    Created: 201,
    Accepted: 202,
    NonAuthoritativeInformation: 203,
    NoContent: 204,
    ResetContent: 205,
    PartialContent: 206,
    MultiStatus: 207,
    AlreadyReported: 208,
    ImUsed: 226,
    MultipleChoices: 300,
    MovedPermanently: 301,
    Found: 302,
    SeeOther: 303,
    NotModified: 304,
    UseProxy: 305,
    Unused: 306,
    TemporaryRedirect: 307,
    PermanentRedirect: 308,
    BadRequest: 400,
    Unauthorized: 401,
    PaymentRequired: 402,
    Forbidden: 403,
    NotFound: 404,
    MethodNotAllowed: 405,
    NotAcceptable: 406,
    ProxyAuthenticationRequired: 407,
    RequestTimeout: 408,
    Conflict: 409,
    Gone: 410,
    LengthRequired: 411,
    PreconditionFailed: 412,
    PayloadTooLarge: 413,
    UriTooLong: 414,
    UnsupportedMediaType: 415,
    RangeNotSatisfiable: 416,
    ExpectationFailed: 417,
    ImATeapot: 418,
    MisdirectedRequest: 421,
    UnprocessableEntity: 422,
    Locked: 423,
    FailedDependency: 424,
    TooEarly: 425,
    UpgradeRequired: 426,
    PreconditionRequired: 428,
    TooManyRequests: 429,
    RequestHeaderFieldsTooLarge: 431,
    UnavailableForLegalReasons: 451,
    InternalServerError: 500,
    NotImplemented: 501,
    BadGateway: 502,
    ServiceUnavailable: 503,
    GatewayTimeout: 504,
    HttpVersionNotSupported: 505,
    VariantAlsoNegotiates: 506,
    InsufficientStorage: 507,
    LoopDetected: 508,
    NotExtended: 510,
    NetworkAuthenticationRequired: 511,
};
Object.entries(le).forEach(([e, t]) => {
    le[t] = e;
});
function et(e) {
    const t = new L(e),
        n = Fe(L.prototype.request, t);
    return (
        a.extend(n, L.prototype, t, { allOwnKeys: !0 }),
        a.extend(n, t, null, { allOwnKeys: !0 }),
        (n.create = function (s) {
            return et(B(e, s));
        }),
        n
    );
}
const R = et(I);
R.Axios = L;
R.CanceledError = k;
R.CancelToken = me;
R.isCancel = ve;
R.VERSION = Ye;
R.toFormData = X;
R.AxiosError = m;
R.Cancel = R.CanceledError;
R.all = function (t) {
    return Promise.all(t);
};
R.spread = Cn;
R.isAxiosError = Nn;
R.mergeConfig = B;
R.AxiosHeaders = O;
R.formToJSON = (e) => We(a.isHTMLForm(e) ? new FormData(e) : e);
R.getAdapter = Ze.getAdapter;
R.HttpStatusCode = le;
R.default = R;
window.axios = R;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

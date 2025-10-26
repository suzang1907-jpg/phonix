var Tn = Object.defineProperty;
var Fn = (e, t, i) => t in e ? Tn(e, t, { enumerable: !0, configurable: !0, writable: !0, value: i }) : e[t] = i;
var xt = (e, t, i) => Fn(e, typeof t != "symbol" ? t + "" : t, i);
import { defineComponent as P, openBlock as E, createElementBlock as B, normalizeClass as L, renderSlot as H, createElementVNode as A, withDirectives as se, vModelText as Et, Fragment as pe, renderList as rt, toDisplayString as F, createCommentVNode as $, vModelDynamic as xe, mergeProps as Cn, getCurrentScope as $n, onScopeDispose as On, unref as V, ref as Z, computed as Dt, watch as Ee, getCurrentInstance as Un, onMounted as kn, createTextVNode as Ge, createVNode as Me, withCtx as Xe, vModelSelect as Nn, withKeys as Bt, createBlock as vn } from "vue";
function Lt(e, t) {
  return function() {
    return e.apply(t, arguments);
  };
}
const { toString: Dn } = Object.prototype, { getPrototypeOf: it } = Object, $e = /* @__PURE__ */ ((e) => (t) => {
  const i = Dn.call(t);
  return e[i] || (e[i] = i.slice(8, -1).toLowerCase());
})(/* @__PURE__ */ Object.create(null)), Q = (e) => (e = e.toLowerCase(), (t) => $e(t) === e), Oe = (e) => (t) => typeof t === e, { isArray: ye } = Array, we = Oe("undefined");
function Ln(e) {
  return e !== null && !we(e) && e.constructor !== null && !we(e.constructor) && K(e.constructor.isBuffer) && e.constructor.isBuffer(e);
}
const Pt = Q("ArrayBuffer");
function Pn(e) {
  let t;
  return typeof ArrayBuffer < "u" && ArrayBuffer.isView ? t = ArrayBuffer.isView(e) : t = e && e.buffer && Pt(e.buffer), t;
}
const qn = Oe("string"), K = Oe("function"), qt = Oe("number"), Ue = (e) => e !== null && typeof e == "object", Mn = (e) => e === !0 || e === !1, Ie = (e) => {
  if ($e(e) !== "object")
    return !1;
  const t = it(e);
  return (t === null || t === Object.prototype || Object.getPrototypeOf(t) === null) && !(Symbol.toStringTag in e) && !(Symbol.iterator in e);
}, jn = Q("Date"), Hn = Q("File"), Vn = Q("Blob"), zn = Q("FileList"), Wn = (e) => Ue(e) && K(e.pipe), Jn = (e) => {
  let t;
  return e && (typeof FormData == "function" && e instanceof FormData || K(e.append) && ((t = $e(e)) === "formdata" || // detect form-data instance
  t === "object" && K(e.toString) && e.toString() === "[object FormData]"));
}, Kn = Q("URLSearchParams"), [Gn, Xn, Yn, Zn] = ["ReadableStream", "Request", "Response", "Headers"].map(Q), Qn = (e) => e.trim ? e.trim() : e.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "");
function Be(e, t, { allOwnKeys: i = !1 } = {}) {
  if (e === null || typeof e > "u")
    return;
  let o, a;
  if (typeof e != "object" && (e = [e]), ye(e))
    for (o = 0, a = e.length; o < a; o++)
      t.call(null, e[o], o, e);
  else {
    const c = i ? Object.getOwnPropertyNames(e) : Object.keys(e), f = c.length;
    let l;
    for (o = 0; o < f; o++)
      l = c[o], t.call(null, e[l], l, e);
  }
}
function Mt(e, t) {
  t = t.toLowerCase();
  const i = Object.keys(e);
  let o = i.length, a;
  for (; o-- > 0; )
    if (a = i[o], t === a.toLowerCase())
      return a;
  return null;
}
const jt = typeof globalThis < "u" ? globalThis : typeof self < "u" ? self : typeof window < "u" ? window : global, Ht = (e) => !we(e) && e !== jt;
function Ye() {
  const { caseless: e } = Ht(this) && this || {}, t = {}, i = (o, a) => {
    const c = e && Mt(t, a) || a;
    Ie(t[c]) && Ie(o) ? t[c] = Ye(t[c], o) : Ie(o) ? t[c] = Ye({}, o) : ye(o) ? t[c] = o.slice() : t[c] = o;
  };
  for (let o = 0, a = arguments.length; o < a; o++)
    arguments[o] && Be(arguments[o], i);
  return t;
}
const _n = (e, t, i, { allOwnKeys: o } = {}) => (Be(t, (a, c) => {
  i && K(a) ? e[c] = Lt(a, i) : e[c] = a;
}, { allOwnKeys: o }), e), er = (e) => (e.charCodeAt(0) === 65279 && (e = e.slice(1)), e), tr = (e, t, i, o) => {
  e.prototype = Object.create(t.prototype, o), e.prototype.constructor = e, Object.defineProperty(e, "super", {
    value: t.prototype
  }), i && Object.assign(e.prototype, i);
}, nr = (e, t, i, o) => {
  let a, c, f;
  const l = {};
  if (t = t || {}, e == null) return t;
  do {
    for (a = Object.getOwnPropertyNames(e), c = a.length; c-- > 0; )
      f = a[c], (!o || o(f, e, t)) && !l[f] && (t[f] = e[f], l[f] = !0);
    e = i !== !1 && it(e);
  } while (e && (!i || i(e, t)) && e !== Object.prototype);
  return t;
}, rr = (e, t, i) => {
  e = String(e), (i === void 0 || i > e.length) && (i = e.length), i -= t.length;
  const o = e.indexOf(t, i);
  return o !== -1 && o === i;
}, ir = (e) => {
  if (!e) return null;
  if (ye(e)) return e;
  let t = e.length;
  if (!qt(t)) return null;
  const i = new Array(t);
  for (; t-- > 0; )
    i[t] = e[t];
  return i;
}, or = /* @__PURE__ */ ((e) => (t) => e && t instanceof e)(typeof Uint8Array < "u" && it(Uint8Array)), sr = (e, t) => {
  const o = (e && e[Symbol.iterator]).call(e);
  let a;
  for (; (a = o.next()) && !a.done; ) {
    const c = a.value;
    t.call(e, c[0], c[1]);
  }
}, ar = (e, t) => {
  let i;
  const o = [];
  for (; (i = e.exec(t)) !== null; )
    o.push(i);
  return o;
}, lr = Q("HTMLFormElement"), ur = (e) => e.toLowerCase().replace(
  /[-_\s]([a-z\d])(\w*)/g,
  function(i, o, a) {
    return o.toUpperCase() + a;
  }
), St = (({ hasOwnProperty: e }) => (t, i) => e.call(t, i))(Object.prototype), cr = Q("RegExp"), Vt = (e, t) => {
  const i = Object.getOwnPropertyDescriptors(e), o = {};
  Be(i, (a, c) => {
    let f;
    (f = t(a, c, e)) !== !1 && (o[c] = f || a);
  }), Object.defineProperties(e, o);
}, fr = (e) => {
  Vt(e, (t, i) => {
    if (K(e) && ["arguments", "caller", "callee"].indexOf(i) !== -1)
      return !1;
    const o = e[i];
    if (K(o)) {
      if (t.enumerable = !1, "writable" in t) {
        t.writable = !1;
        return;
      }
      t.set || (t.set = () => {
        throw Error("Can not rewrite read-only method '" + i + "'");
      });
    }
  });
}, dr = (e, t) => {
  const i = {}, o = (a) => {
    a.forEach((c) => {
      i[c] = !0;
    });
  };
  return ye(e) ? o(e) : o(String(e).split(t)), i;
}, hr = () => {
}, pr = (e, t) => e != null && Number.isFinite(e = +e) ? e : t, je = "abcdefghijklmnopqrstuvwxyz", At = "0123456789", zt = {
  DIGIT: At,
  ALPHA: je,
  ALPHA_DIGIT: je + je.toUpperCase() + At
}, yr = (e = 16, t = zt.ALPHA_DIGIT) => {
  let i = "";
  const { length: o } = t;
  for (; e--; )
    i += t[Math.random() * o | 0];
  return i;
};
function mr(e) {
  return !!(e && K(e.append) && e[Symbol.toStringTag] === "FormData" && e[Symbol.iterator]);
}
const gr = (e) => {
  const t = new Array(10), i = (o, a) => {
    if (Ue(o)) {
      if (t.indexOf(o) >= 0)
        return;
      if (!("toJSON" in o)) {
        t[a] = o;
        const c = ye(o) ? [] : {};
        return Be(o, (f, l) => {
          const g = i(f, a + 1);
          !we(g) && (c[l] = g);
        }), t[a] = void 0, c;
      }
    }
    return o;
  };
  return i(e, 0);
}, br = Q("AsyncFunction"), wr = (e) => e && (Ue(e) || K(e)) && K(e.then) && K(e.catch), p = {
  isArray: ye,
  isArrayBuffer: Pt,
  isBuffer: Ln,
  isFormData: Jn,
  isArrayBufferView: Pn,
  isString: qn,
  isNumber: qt,
  isBoolean: Mn,
  isObject: Ue,
  isPlainObject: Ie,
  isReadableStream: Gn,
  isRequest: Xn,
  isResponse: Yn,
  isHeaders: Zn,
  isUndefined: we,
  isDate: jn,
  isFile: Hn,
  isBlob: Vn,
  isRegExp: cr,
  isFunction: K,
  isStream: Wn,
  isURLSearchParams: Kn,
  isTypedArray: or,
  isFileList: zn,
  forEach: Be,
  merge: Ye,
  extend: _n,
  trim: Qn,
  stripBOM: er,
  inherits: tr,
  toFlatObject: nr,
  kindOf: $e,
  kindOfTest: Q,
  endsWith: rr,
  toArray: ir,
  forEachEntry: sr,
  matchAll: ar,
  isHTMLForm: lr,
  hasOwnProperty: St,
  hasOwnProp: St,
  // an alias to avoid ESLint no-prototype-builtins detection
  reduceDescriptors: Vt,
  freezeMethods: fr,
  toObjectSet: dr,
  toCamelCase: ur,
  noop: hr,
  toFiniteNumber: pr,
  findKey: Mt,
  global: jt,
  isContextDefined: Ht,
  ALPHABET: zt,
  generateString: yr,
  isSpecCompliantForm: mr,
  toJSONObject: gr,
  isAsyncFn: br,
  isThenable: wr
};
function I(e, t, i, o, a) {
  Error.call(this), Error.captureStackTrace ? Error.captureStackTrace(this, this.constructor) : this.stack = new Error().stack, this.message = e, this.name = "AxiosError", t && (this.code = t), i && (this.config = i), o && (this.request = o), a && (this.response = a);
}
p.inherits(I, Error, {
  toJSON: function() {
    return {
      // Standard
      message: this.message,
      name: this.name,
      // Microsoft
      description: this.description,
      number: this.number,
      // Mozilla
      fileName: this.fileName,
      lineNumber: this.lineNumber,
      columnNumber: this.columnNumber,
      stack: this.stack,
      // Axios
      config: p.toJSONObject(this.config),
      code: this.code,
      status: this.response && this.response.status ? this.response.status : null
    };
  }
});
const Wt = I.prototype, Jt = {};
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
  "ERR_INVALID_URL"
  // eslint-disable-next-line func-names
].forEach((e) => {
  Jt[e] = { value: e };
});
Object.defineProperties(I, Jt);
Object.defineProperty(Wt, "isAxiosError", { value: !0 });
I.from = (e, t, i, o, a, c) => {
  const f = Object.create(Wt);
  return p.toFlatObject(e, f, function(g) {
    return g !== Error.prototype;
  }, (l) => l !== "isAxiosError"), I.call(f, e.message, t, i, o, a), f.cause = e, f.name = e.name, c && Object.assign(f, c), f;
};
const xr = null;
function Ze(e) {
  return p.isPlainObject(e) || p.isArray(e);
}
function Kt(e) {
  return p.endsWith(e, "[]") ? e.slice(0, -2) : e;
}
function Rt(e, t, i) {
  return e ? e.concat(t).map(function(a, c) {
    return a = Kt(a), !i && c ? "[" + a + "]" : a;
  }).join(i ? "." : "") : t;
}
function Er(e) {
  return p.isArray(e) && !e.some(Ze);
}
const Br = p.toFlatObject(p, {}, null, function(t) {
  return /^is[A-Z]/.test(t);
});
function ke(e, t, i) {
  if (!p.isObject(e))
    throw new TypeError("target must be an object");
  t = t || new FormData(), i = p.toFlatObject(i, {
    metaTokens: !0,
    dots: !1,
    indexes: !1
  }, !1, function(S, q) {
    return !p.isUndefined(q[S]);
  });
  const o = i.metaTokens, a = i.visitor || y, c = i.dots, f = i.indexes, g = (i.Blob || typeof Blob < "u" && Blob) && p.isSpecCompliantForm(t);
  if (!p.isFunction(a))
    throw new TypeError("visitor must be a function");
  function b(x) {
    if (x === null) return "";
    if (p.isDate(x))
      return x.toISOString();
    if (!g && p.isBlob(x))
      throw new I("Blob is not supported. Use a Buffer instead.");
    return p.isArrayBuffer(x) || p.isTypedArray(x) ? g && typeof Blob == "function" ? new Blob([x]) : Buffer.from(x) : x;
  }
  function y(x, S, q) {
    let N = x;
    if (x && !q && typeof x == "object") {
      if (p.endsWith(S, "{}"))
        S = o ? S : S.slice(0, -2), x = JSON.stringify(x);
      else if (p.isArray(x) && Er(x) || (p.isFileList(x) || p.endsWith(S, "[]")) && (N = p.toArray(x)))
        return S = Kt(S), N.forEach(function(U, ae) {
          !(p.isUndefined(U) || U === null) && t.append(
            // eslint-disable-next-line no-nested-ternary
            f === !0 ? Rt([S], ae, c) : f === null ? S : S + "[]",
            b(U)
          );
        }), !1;
    }
    return Ze(x) ? !0 : (t.append(Rt(q, S, c), b(x)), !1);
  }
  const w = [], C = Object.assign(Br, {
    defaultVisitor: y,
    convertValue: b,
    isVisitable: Ze
  });
  function R(x, S) {
    if (!p.isUndefined(x)) {
      if (w.indexOf(x) !== -1)
        throw Error("Circular reference detected in " + S.join("."));
      w.push(x), p.forEach(x, function(N, G) {
        (!(p.isUndefined(N) || N === null) && a.call(
          t,
          N,
          p.isString(G) ? G.trim() : G,
          S,
          C
        )) === !0 && R(N, S ? S.concat(G) : [G]);
      }), w.pop();
    }
  }
  if (!p.isObject(e))
    throw new TypeError("data must be an object");
  return R(e), t;
}
function It(e) {
  const t = {
    "!": "%21",
    "'": "%27",
    "(": "%28",
    ")": "%29",
    "~": "%7E",
    "%20": "+",
    "%00": "\0"
  };
  return encodeURIComponent(e).replace(/[!'()~]|%20|%00/g, function(o) {
    return t[o];
  });
}
function ot(e, t) {
  this._pairs = [], e && ke(e, this, t);
}
const Gt = ot.prototype;
Gt.append = function(t, i) {
  this._pairs.push([t, i]);
};
Gt.toString = function(t) {
  const i = t ? function(o) {
    return t.call(this, o, It);
  } : It;
  return this._pairs.map(function(a) {
    return i(a[0]) + "=" + i(a[1]);
  }, "").join("&");
};
function Sr(e) {
  return encodeURIComponent(e).replace(/%3A/gi, ":").replace(/%24/g, "$").replace(/%2C/gi, ",").replace(/%20/g, "+").replace(/%5B/gi, "[").replace(/%5D/gi, "]");
}
function Xt(e, t, i) {
  if (!t)
    return e;
  const o = i && i.encode || Sr, a = i && i.serialize;
  let c;
  if (a ? c = a(t, i) : c = p.isURLSearchParams(t) ? t.toString() : new ot(t, i).toString(o), c) {
    const f = e.indexOf("#");
    f !== -1 && (e = e.slice(0, f)), e += (e.indexOf("?") === -1 ? "?" : "&") + c;
  }
  return e;
}
class Tt {
  constructor() {
    this.handlers = [];
  }
  /**
   * Add a new interceptor to the stack
   *
   * @param {Function} fulfilled The function to handle `then` for a `Promise`
   * @param {Function} rejected The function to handle `reject` for a `Promise`
   *
   * @return {Number} An ID used to remove interceptor later
   */
  use(t, i, o) {
    return this.handlers.push({
      fulfilled: t,
      rejected: i,
      synchronous: o ? o.synchronous : !1,
      runWhen: o ? o.runWhen : null
    }), this.handlers.length - 1;
  }
  /**
   * Remove an interceptor from the stack
   *
   * @param {Number} id The ID that was returned by `use`
   *
   * @returns {Boolean} `true` if the interceptor was removed, `false` otherwise
   */
  eject(t) {
    this.handlers[t] && (this.handlers[t] = null);
  }
  /**
   * Clear all interceptors from the stack
   *
   * @returns {void}
   */
  clear() {
    this.handlers && (this.handlers = []);
  }
  /**
   * Iterate over all the registered interceptors
   *
   * This method is particularly useful for skipping over any
   * interceptors that may have become `null` calling `eject`.
   *
   * @param {Function} fn The function to call for each interceptor
   *
   * @returns {void}
   */
  forEach(t) {
    p.forEach(this.handlers, function(o) {
      o !== null && t(o);
    });
  }
}
const Yt = {
  silentJSONParsing: !0,
  forcedJSONParsing: !0,
  clarifyTimeoutError: !1
}, Ar = typeof URLSearchParams < "u" ? URLSearchParams : ot, Rr = typeof FormData < "u" ? FormData : null, Ir = typeof Blob < "u" ? Blob : null, Tr = {
  isBrowser: !0,
  classes: {
    URLSearchParams: Ar,
    FormData: Rr,
    Blob: Ir
  },
  protocols: ["http", "https", "file", "blob", "url", "data"]
}, st = typeof window < "u" && typeof document < "u", Fr = ((e) => st && ["ReactNative", "NativeScript", "NS"].indexOf(e) < 0)(typeof navigator < "u" && navigator.product), Cr = typeof WorkerGlobalScope < "u" && // eslint-disable-next-line no-undef
self instanceof WorkerGlobalScope && typeof self.importScripts == "function", $r = st && window.location.href || "http://localhost", Or = /* @__PURE__ */ Object.freeze(/* @__PURE__ */ Object.defineProperty({
  __proto__: null,
  hasBrowserEnv: st,
  hasStandardBrowserEnv: Fr,
  hasStandardBrowserWebWorkerEnv: Cr,
  origin: $r
}, Symbol.toStringTag, { value: "Module" })), Y = {
  ...Or,
  ...Tr
};
function Ur(e, t) {
  return ke(e, new Y.classes.URLSearchParams(), Object.assign({
    visitor: function(i, o, a, c) {
      return Y.isNode && p.isBuffer(i) ? (this.append(o, i.toString("base64")), !1) : c.defaultVisitor.apply(this, arguments);
    }
  }, t));
}
function kr(e) {
  return p.matchAll(/\w+|\[(\w*)]/g, e).map((t) => t[0] === "[]" ? "" : t[1] || t[0]);
}
function Nr(e) {
  const t = {}, i = Object.keys(e);
  let o;
  const a = i.length;
  let c;
  for (o = 0; o < a; o++)
    c = i[o], t[c] = e[c];
  return t;
}
function Zt(e) {
  function t(i, o, a, c) {
    let f = i[c++];
    if (f === "__proto__") return !0;
    const l = Number.isFinite(+f), g = c >= i.length;
    return f = !f && p.isArray(a) ? a.length : f, g ? (p.hasOwnProp(a, f) ? a[f] = [a[f], o] : a[f] = o, !l) : ((!a[f] || !p.isObject(a[f])) && (a[f] = []), t(i, o, a[f], c) && p.isArray(a[f]) && (a[f] = Nr(a[f])), !l);
  }
  if (p.isFormData(e) && p.isFunction(e.entries)) {
    const i = {};
    return p.forEachEntry(e, (o, a) => {
      t(kr(o), a, i, 0);
    }), i;
  }
  return null;
}
function vr(e, t, i) {
  if (p.isString(e))
    try {
      return (t || JSON.parse)(e), p.trim(e);
    } catch (o) {
      if (o.name !== "SyntaxError")
        throw o;
    }
  return (i || JSON.stringify)(e);
}
const Se = {
  transitional: Yt,
  adapter: ["xhr", "http", "fetch"],
  transformRequest: [function(t, i) {
    const o = i.getContentType() || "", a = o.indexOf("application/json") > -1, c = p.isObject(t);
    if (c && p.isHTMLForm(t) && (t = new FormData(t)), p.isFormData(t))
      return a ? JSON.stringify(Zt(t)) : t;
    if (p.isArrayBuffer(t) || p.isBuffer(t) || p.isStream(t) || p.isFile(t) || p.isBlob(t) || p.isReadableStream(t))
      return t;
    if (p.isArrayBufferView(t))
      return t.buffer;
    if (p.isURLSearchParams(t))
      return i.setContentType("application/x-www-form-urlencoded;charset=utf-8", !1), t.toString();
    let l;
    if (c) {
      if (o.indexOf("application/x-www-form-urlencoded") > -1)
        return Ur(t, this.formSerializer).toString();
      if ((l = p.isFileList(t)) || o.indexOf("multipart/form-data") > -1) {
        const g = this.env && this.env.FormData;
        return ke(
          l ? { "files[]": t } : t,
          g && new g(),
          this.formSerializer
        );
      }
    }
    return c || a ? (i.setContentType("application/json", !1), vr(t)) : t;
  }],
  transformResponse: [function(t) {
    const i = this.transitional || Se.transitional, o = i && i.forcedJSONParsing, a = this.responseType === "json";
    if (p.isResponse(t) || p.isReadableStream(t))
      return t;
    if (t && p.isString(t) && (o && !this.responseType || a)) {
      const f = !(i && i.silentJSONParsing) && a;
      try {
        return JSON.parse(t);
      } catch (l) {
        if (f)
          throw l.name === "SyntaxError" ? I.from(l, I.ERR_BAD_RESPONSE, this, null, this.response) : l;
      }
    }
    return t;
  }],
  /**
   * A timeout in milliseconds to abort a request. If set to 0 (default) a
   * timeout is not created.
   */
  timeout: 0,
  xsrfCookieName: "XSRF-TOKEN",
  xsrfHeaderName: "X-XSRF-TOKEN",
  maxContentLength: -1,
  maxBodyLength: -1,
  env: {
    FormData: Y.classes.FormData,
    Blob: Y.classes.Blob
  },
  validateStatus: function(t) {
    return t >= 200 && t < 300;
  },
  headers: {
    common: {
      Accept: "application/json, text/plain, */*",
      "Content-Type": void 0
    }
  }
};
p.forEach(["delete", "get", "head", "post", "put", "patch"], (e) => {
  Se.headers[e] = {};
});
const Dr = p.toObjectSet([
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
  "user-agent"
]), Lr = (e) => {
  const t = {};
  let i, o, a;
  return e && e.split(`
`).forEach(function(f) {
    a = f.indexOf(":"), i = f.substring(0, a).trim().toLowerCase(), o = f.substring(a + 1).trim(), !(!i || t[i] && Dr[i]) && (i === "set-cookie" ? t[i] ? t[i].push(o) : t[i] = [o] : t[i] = t[i] ? t[i] + ", " + o : o);
  }), t;
}, Ft = Symbol("internals");
function be(e) {
  return e && String(e).trim().toLowerCase();
}
function Te(e) {
  return e === !1 || e == null ? e : p.isArray(e) ? e.map(Te) : String(e);
}
function Pr(e) {
  const t = /* @__PURE__ */ Object.create(null), i = /([^\s,;=]+)\s*(?:=\s*([^,;]+))?/g;
  let o;
  for (; o = i.exec(e); )
    t[o[1]] = o[2];
  return t;
}
const qr = (e) => /^[-_a-zA-Z0-9^`|~,!#$%&'*+.]+$/.test(e.trim());
function He(e, t, i, o, a) {
  if (p.isFunction(o))
    return o.call(this, t, i);
  if (a && (t = i), !!p.isString(t)) {
    if (p.isString(o))
      return t.indexOf(o) !== -1;
    if (p.isRegExp(o))
      return o.test(t);
  }
}
function Mr(e) {
  return e.trim().toLowerCase().replace(/([a-z\d])(\w*)/g, (t, i, o) => i.toUpperCase() + o);
}
function jr(e, t) {
  const i = p.toCamelCase(" " + t);
  ["get", "set", "has"].forEach((o) => {
    Object.defineProperty(e, o + i, {
      value: function(a, c, f) {
        return this[o].call(this, t, a, c, f);
      },
      configurable: !0
    });
  });
}
class W {
  constructor(t) {
    t && this.set(t);
  }
  set(t, i, o) {
    const a = this;
    function c(l, g, b) {
      const y = be(g);
      if (!y)
        throw new Error("header name must be a non-empty string");
      const w = p.findKey(a, y);
      (!w || a[w] === void 0 || b === !0 || b === void 0 && a[w] !== !1) && (a[w || g] = Te(l));
    }
    const f = (l, g) => p.forEach(l, (b, y) => c(b, y, g));
    if (p.isPlainObject(t) || t instanceof this.constructor)
      f(t, i);
    else if (p.isString(t) && (t = t.trim()) && !qr(t))
      f(Lr(t), i);
    else if (p.isHeaders(t))
      for (const [l, g] of t.entries())
        c(g, l, o);
    else
      t != null && c(i, t, o);
    return this;
  }
  get(t, i) {
    if (t = be(t), t) {
      const o = p.findKey(this, t);
      if (o) {
        const a = this[o];
        if (!i)
          return a;
        if (i === !0)
          return Pr(a);
        if (p.isFunction(i))
          return i.call(this, a, o);
        if (p.isRegExp(i))
          return i.exec(a);
        throw new TypeError("parser must be boolean|regexp|function");
      }
    }
  }
  has(t, i) {
    if (t = be(t), t) {
      const o = p.findKey(this, t);
      return !!(o && this[o] !== void 0 && (!i || He(this, this[o], o, i)));
    }
    return !1;
  }
  delete(t, i) {
    const o = this;
    let a = !1;
    function c(f) {
      if (f = be(f), f) {
        const l = p.findKey(o, f);
        l && (!i || He(o, o[l], l, i)) && (delete o[l], a = !0);
      }
    }
    return p.isArray(t) ? t.forEach(c) : c(t), a;
  }
  clear(t) {
    const i = Object.keys(this);
    let o = i.length, a = !1;
    for (; o--; ) {
      const c = i[o];
      (!t || He(this, this[c], c, t, !0)) && (delete this[c], a = !0);
    }
    return a;
  }
  normalize(t) {
    const i = this, o = {};
    return p.forEach(this, (a, c) => {
      const f = p.findKey(o, c);
      if (f) {
        i[f] = Te(a), delete i[c];
        return;
      }
      const l = t ? Mr(c) : String(c).trim();
      l !== c && delete i[c], i[l] = Te(a), o[l] = !0;
    }), this;
  }
  concat(...t) {
    return this.constructor.concat(this, ...t);
  }
  toJSON(t) {
    const i = /* @__PURE__ */ Object.create(null);
    return p.forEach(this, (o, a) => {
      o != null && o !== !1 && (i[a] = t && p.isArray(o) ? o.join(", ") : o);
    }), i;
  }
  [Symbol.iterator]() {
    return Object.entries(this.toJSON())[Symbol.iterator]();
  }
  toString() {
    return Object.entries(this.toJSON()).map(([t, i]) => t + ": " + i).join(`
`);
  }
  get [Symbol.toStringTag]() {
    return "AxiosHeaders";
  }
  static from(t) {
    return t instanceof this ? t : new this(t);
  }
  static concat(t, ...i) {
    const o = new this(t);
    return i.forEach((a) => o.set(a)), o;
  }
  static accessor(t) {
    const o = (this[Ft] = this[Ft] = {
      accessors: {}
    }).accessors, a = this.prototype;
    function c(f) {
      const l = be(f);
      o[l] || (jr(a, f), o[l] = !0);
    }
    return p.isArray(t) ? t.forEach(c) : c(t), this;
  }
}
W.accessor(["Content-Type", "Content-Length", "Accept", "Accept-Encoding", "User-Agent", "Authorization"]);
p.reduceDescriptors(W.prototype, ({ value: e }, t) => {
  let i = t[0].toUpperCase() + t.slice(1);
  return {
    get: () => e,
    set(o) {
      this[i] = o;
    }
  };
});
p.freezeMethods(W);
function Ve(e, t) {
  const i = this || Se, o = t || i, a = W.from(o.headers);
  let c = o.data;
  return p.forEach(e, function(l) {
    c = l.call(i, c, a.normalize(), t ? t.status : void 0);
  }), a.normalize(), c;
}
function Qt(e) {
  return !!(e && e.__CANCEL__);
}
function me(e, t, i) {
  I.call(this, e ?? "canceled", I.ERR_CANCELED, t, i), this.name = "CanceledError";
}
p.inherits(me, I, {
  __CANCEL__: !0
});
function _t(e, t, i) {
  const o = i.config.validateStatus;
  !i.status || !o || o(i.status) ? e(i) : t(new I(
    "Request failed with status code " + i.status,
    [I.ERR_BAD_REQUEST, I.ERR_BAD_RESPONSE][Math.floor(i.status / 100) - 4],
    i.config,
    i.request,
    i
  ));
}
function Hr(e) {
  const t = /^([-+\w]{1,25})(:?\/\/|:)/.exec(e);
  return t && t[1] || "";
}
function Vr(e, t) {
  e = e || 10;
  const i = new Array(e), o = new Array(e);
  let a = 0, c = 0, f;
  return t = t !== void 0 ? t : 1e3, function(g) {
    const b = Date.now(), y = o[c];
    f || (f = b), i[a] = g, o[a] = b;
    let w = c, C = 0;
    for (; w !== a; )
      C += i[w++], w = w % e;
    if (a = (a + 1) % e, a === c && (c = (c + 1) % e), b - f < t)
      return;
    const R = y && b - y;
    return R ? Math.round(C * 1e3 / R) : void 0;
  };
}
function zr(e, t) {
  let i = 0;
  const o = 1e3 / t;
  let a = null;
  return function() {
    const f = this === !0, l = Date.now();
    if (f || l - i > o)
      return a && (clearTimeout(a), a = null), i = l, e.apply(null, arguments);
    a || (a = setTimeout(() => (a = null, i = Date.now(), e.apply(null, arguments)), o - (l - i)));
  };
}
const Fe = (e, t, i = 3) => {
  let o = 0;
  const a = Vr(50, 250);
  return zr((c) => {
    const f = c.loaded, l = c.lengthComputable ? c.total : void 0, g = f - o, b = a(g), y = f <= l;
    o = f;
    const w = {
      loaded: f,
      total: l,
      progress: l ? f / l : void 0,
      bytes: g,
      rate: b || void 0,
      estimated: b && l && y ? (l - f) / b : void 0,
      event: c,
      lengthComputable: l != null
    };
    w[t ? "download" : "upload"] = !0, e(w);
  }, i);
}, Wr = Y.hasStandardBrowserEnv ? (
  // Standard browser envs have full support of the APIs needed to test
  // whether the request URL is of the same origin as current location.
  function() {
    const t = /(msie|trident)/i.test(navigator.userAgent), i = document.createElement("a");
    let o;
    function a(c) {
      let f = c;
      return t && (i.setAttribute("href", f), f = i.href), i.setAttribute("href", f), {
        href: i.href,
        protocol: i.protocol ? i.protocol.replace(/:$/, "") : "",
        host: i.host,
        search: i.search ? i.search.replace(/^\?/, "") : "",
        hash: i.hash ? i.hash.replace(/^#/, "") : "",
        hostname: i.hostname,
        port: i.port,
        pathname: i.pathname.charAt(0) === "/" ? i.pathname : "/" + i.pathname
      };
    }
    return o = a(window.location.href), function(f) {
      const l = p.isString(f) ? a(f) : f;
      return l.protocol === o.protocol && l.host === o.host;
    };
  }()
) : (
  // Non standard browser envs (web workers, react-native) lack needed support.
  /* @__PURE__ */ function() {
    return function() {
      return !0;
    };
  }()
), Jr = Y.hasStandardBrowserEnv ? (
  // Standard browser envs support document.cookie
  {
    write(e, t, i, o, a, c) {
      const f = [e + "=" + encodeURIComponent(t)];
      p.isNumber(i) && f.push("expires=" + new Date(i).toGMTString()), p.isString(o) && f.push("path=" + o), p.isString(a) && f.push("domain=" + a), c === !0 && f.push("secure"), document.cookie = f.join("; ");
    },
    read(e) {
      const t = document.cookie.match(new RegExp("(^|;\\s*)(" + e + ")=([^;]*)"));
      return t ? decodeURIComponent(t[3]) : null;
    },
    remove(e) {
      this.write(e, "", Date.now() - 864e5);
    }
  }
) : (
  // Non-standard browser env (web workers, react-native) lack needed support.
  {
    write() {
    },
    read() {
      return null;
    },
    remove() {
    }
  }
);
function Kr(e) {
  return /^([a-z][a-z\d+\-.]*:)?\/\//i.test(e);
}
function Gr(e, t) {
  return t ? e.replace(/\/?\/$/, "") + "/" + t.replace(/^\/+/, "") : e;
}
function en(e, t) {
  return e && !Kr(t) ? Gr(e, t) : t;
}
const Ct = (e) => e instanceof W ? { ...e } : e;
function ue(e, t) {
  t = t || {};
  const i = {};
  function o(b, y, w) {
    return p.isPlainObject(b) && p.isPlainObject(y) ? p.merge.call({ caseless: w }, b, y) : p.isPlainObject(y) ? p.merge({}, y) : p.isArray(y) ? y.slice() : y;
  }
  function a(b, y, w) {
    if (p.isUndefined(y)) {
      if (!p.isUndefined(b))
        return o(void 0, b, w);
    } else return o(b, y, w);
  }
  function c(b, y) {
    if (!p.isUndefined(y))
      return o(void 0, y);
  }
  function f(b, y) {
    if (p.isUndefined(y)) {
      if (!p.isUndefined(b))
        return o(void 0, b);
    } else return o(void 0, y);
  }
  function l(b, y, w) {
    if (w in t)
      return o(b, y);
    if (w in e)
      return o(void 0, b);
  }
  const g = {
    url: c,
    method: c,
    data: c,
    baseURL: f,
    transformRequest: f,
    transformResponse: f,
    paramsSerializer: f,
    timeout: f,
    timeoutMessage: f,
    withCredentials: f,
    withXSRFToken: f,
    adapter: f,
    responseType: f,
    xsrfCookieName: f,
    xsrfHeaderName: f,
    onUploadProgress: f,
    onDownloadProgress: f,
    decompress: f,
    maxContentLength: f,
    maxBodyLength: f,
    beforeRedirect: f,
    transport: f,
    httpAgent: f,
    httpsAgent: f,
    cancelToken: f,
    socketPath: f,
    responseEncoding: f,
    validateStatus: l,
    headers: (b, y) => a(Ct(b), Ct(y), !0)
  };
  return p.forEach(Object.keys(Object.assign({}, e, t)), function(y) {
    const w = g[y] || a, C = w(e[y], t[y], y);
    p.isUndefined(C) && w !== l || (i[y] = C);
  }), i;
}
const tn = (e) => {
  const t = ue({}, e);
  let { data: i, withXSRFToken: o, xsrfHeaderName: a, xsrfCookieName: c, headers: f, auth: l } = t;
  t.headers = f = W.from(f), t.url = Xt(en(t.baseURL, t.url), e.params, e.paramsSerializer), l && f.set(
    "Authorization",
    "Basic " + btoa((l.username || "") + ":" + (l.password ? unescape(encodeURIComponent(l.password)) : ""))
  );
  let g;
  if (p.isFormData(i)) {
    if (Y.hasStandardBrowserEnv || Y.hasStandardBrowserWebWorkerEnv)
      f.setContentType(void 0);
    else if ((g = f.getContentType()) !== !1) {
      const [b, ...y] = g ? g.split(";").map((w) => w.trim()).filter(Boolean) : [];
      f.setContentType([b || "multipart/form-data", ...y].join("; "));
    }
  }
  if (Y.hasStandardBrowserEnv && (o && p.isFunction(o) && (o = o(t)), o || o !== !1 && Wr(t.url))) {
    const b = a && c && Jr.read(c);
    b && f.set(a, b);
  }
  return t;
}, Xr = typeof XMLHttpRequest < "u", Yr = Xr && function(e) {
  return new Promise(function(i, o) {
    const a = tn(e);
    let c = a.data;
    const f = W.from(a.headers).normalize();
    let { responseType: l } = a, g;
    function b() {
      a.cancelToken && a.cancelToken.unsubscribe(g), a.signal && a.signal.removeEventListener("abort", g);
    }
    let y = new XMLHttpRequest();
    y.open(a.method.toUpperCase(), a.url, !0), y.timeout = a.timeout;
    function w() {
      if (!y)
        return;
      const R = W.from(
        "getAllResponseHeaders" in y && y.getAllResponseHeaders()
      ), S = {
        data: !l || l === "text" || l === "json" ? y.responseText : y.response,
        status: y.status,
        statusText: y.statusText,
        headers: R,
        config: e,
        request: y
      };
      _t(function(N) {
        i(N), b();
      }, function(N) {
        o(N), b();
      }, S), y = null;
    }
    "onloadend" in y ? y.onloadend = w : y.onreadystatechange = function() {
      !y || y.readyState !== 4 || y.status === 0 && !(y.responseURL && y.responseURL.indexOf("file:") === 0) || setTimeout(w);
    }, y.onabort = function() {
      y && (o(new I("Request aborted", I.ECONNABORTED, a, y)), y = null);
    }, y.onerror = function() {
      o(new I("Network Error", I.ERR_NETWORK, a, y)), y = null;
    }, y.ontimeout = function() {
      let x = a.timeout ? "timeout of " + a.timeout + "ms exceeded" : "timeout exceeded";
      const S = a.transitional || Yt;
      a.timeoutErrorMessage && (x = a.timeoutErrorMessage), o(new I(
        x,
        S.clarifyTimeoutError ? I.ETIMEDOUT : I.ECONNABORTED,
        a,
        y
      )), y = null;
    }, c === void 0 && f.setContentType(null), "setRequestHeader" in y && p.forEach(f.toJSON(), function(x, S) {
      y.setRequestHeader(S, x);
    }), p.isUndefined(a.withCredentials) || (y.withCredentials = !!a.withCredentials), l && l !== "json" && (y.responseType = a.responseType), typeof a.onDownloadProgress == "function" && y.addEventListener("progress", Fe(a.onDownloadProgress, !0)), typeof a.onUploadProgress == "function" && y.upload && y.upload.addEventListener("progress", Fe(a.onUploadProgress)), (a.cancelToken || a.signal) && (g = (R) => {
      y && (o(!R || R.type ? new me(null, e, y) : R), y.abort(), y = null);
    }, a.cancelToken && a.cancelToken.subscribe(g), a.signal && (a.signal.aborted ? g() : a.signal.addEventListener("abort", g)));
    const C = Hr(a.url);
    if (C && Y.protocols.indexOf(C) === -1) {
      o(new I("Unsupported protocol " + C + ":", I.ERR_BAD_REQUEST, e));
      return;
    }
    y.send(c || null);
  });
}, Zr = (e, t) => {
  let i = new AbortController(), o;
  const a = function(g) {
    if (!o) {
      o = !0, f();
      const b = g instanceof Error ? g : this.reason;
      i.abort(b instanceof I ? b : new me(b instanceof Error ? b.message : b));
    }
  };
  let c = t && setTimeout(() => {
    a(new I(`timeout ${t} of ms exceeded`, I.ETIMEDOUT));
  }, t);
  const f = () => {
    e && (c && clearTimeout(c), c = null, e.forEach((g) => {
      g && (g.removeEventListener ? g.removeEventListener("abort", a) : g.unsubscribe(a));
    }), e = null);
  };
  e.forEach((g) => g && g.addEventListener && g.addEventListener("abort", a));
  const { signal: l } = i;
  return l.unsubscribe = f, [l, () => {
    c && clearTimeout(c), c = null;
  }];
}, Qr = function* (e, t) {
  let i = e.byteLength;
  if (!t || i < t) {
    yield e;
    return;
  }
  let o = 0, a;
  for (; o < i; )
    a = o + t, yield e.slice(o, a), o = a;
}, _r = async function* (e, t, i) {
  for await (const o of e)
    yield* Qr(ArrayBuffer.isView(o) ? o : await i(String(o)), t);
}, $t = (e, t, i, o, a) => {
  const c = _r(e, t, a);
  let f = 0;
  return new ReadableStream({
    type: "bytes",
    async pull(l) {
      const { done: g, value: b } = await c.next();
      if (g) {
        l.close(), o();
        return;
      }
      let y = b.byteLength;
      i && i(f += y), l.enqueue(new Uint8Array(b));
    },
    cancel(l) {
      return o(l), c.return();
    }
  }, {
    highWaterMark: 2
  });
}, Ot = (e, t) => {
  const i = e != null;
  return (o) => setTimeout(() => t({
    lengthComputable: i,
    total: e,
    loaded: o
  }));
}, Ne = typeof fetch == "function" && typeof Request == "function" && typeof Response == "function", nn = Ne && typeof ReadableStream == "function", Qe = Ne && (typeof TextEncoder == "function" ? /* @__PURE__ */ ((e) => (t) => e.encode(t))(new TextEncoder()) : async (e) => new Uint8Array(await new Response(e).arrayBuffer())), ei = nn && (() => {
  let e = !1;
  const t = new Request(Y.origin, {
    body: new ReadableStream(),
    method: "POST",
    get duplex() {
      return e = !0, "half";
    }
  }).headers.has("Content-Type");
  return e && !t;
})(), Ut = 64 * 1024, _e = nn && !!(() => {
  try {
    return p.isReadableStream(new Response("").body);
  } catch {
  }
})(), Ce = {
  stream: _e && ((e) => e.body)
};
Ne && ((e) => {
  ["text", "arrayBuffer", "blob", "formData", "stream"].forEach((t) => {
    !Ce[t] && (Ce[t] = p.isFunction(e[t]) ? (i) => i[t]() : (i, o) => {
      throw new I(`Response type '${t}' is not supported`, I.ERR_NOT_SUPPORT, o);
    });
  });
})(new Response());
const ti = async (e) => {
  if (e == null)
    return 0;
  if (p.isBlob(e))
    return e.size;
  if (p.isSpecCompliantForm(e))
    return (await new Request(e).arrayBuffer()).byteLength;
  if (p.isArrayBufferView(e))
    return e.byteLength;
  if (p.isURLSearchParams(e) && (e = e + ""), p.isString(e))
    return (await Qe(e)).byteLength;
}, ni = async (e, t) => {
  const i = p.toFiniteNumber(e.getContentLength());
  return i ?? ti(t);
}, ri = Ne && (async (e) => {
  let {
    url: t,
    method: i,
    data: o,
    signal: a,
    cancelToken: c,
    timeout: f,
    onDownloadProgress: l,
    onUploadProgress: g,
    responseType: b,
    headers: y,
    withCredentials: w = "same-origin",
    fetchOptions: C
  } = tn(e);
  b = b ? (b + "").toLowerCase() : "text";
  let [R, x] = a || c || f ? Zr([a, c], f) : [], S, q;
  const N = () => {
    !S && setTimeout(() => {
      R && R.unsubscribe();
    }), S = !0;
  };
  let G;
  try {
    if (g && ei && i !== "get" && i !== "head" && (G = await ni(y, o)) !== 0) {
      let X = new Request(t, {
        method: "POST",
        body: o,
        duplex: "half"
      }), ne;
      p.isFormData(o) && (ne = X.headers.get("content-type")) && y.setContentType(ne), X.body && (o = $t(X.body, Ut, Ot(
        G,
        Fe(g)
      ), null, Qe));
    }
    p.isString(w) || (w = w ? "cors" : "omit"), q = new Request(t, {
      ...C,
      signal: R,
      method: i.toUpperCase(),
      headers: y.normalize().toJSON(),
      body: o,
      duplex: "half",
      withCredentials: w
    });
    let U = await fetch(q);
    const ae = _e && (b === "stream" || b === "response");
    if (_e && (l || ae)) {
      const X = {};
      ["status", "statusText", "headers"].forEach((Ae) => {
        X[Ae] = U[Ae];
      });
      const ne = p.toFiniteNumber(U.headers.get("content-length"));
      U = new Response(
        $t(U.body, Ut, l && Ot(
          ne,
          Fe(l, !0)
        ), ae && N, Qe),
        X
      );
    }
    b = b || "text";
    let te = await Ce[p.findKey(Ce, b) || "text"](U, e);
    return !ae && N(), x && x(), await new Promise((X, ne) => {
      _t(X, ne, {
        data: te,
        headers: W.from(U.headers),
        status: U.status,
        statusText: U.statusText,
        config: e,
        request: q
      });
    });
  } catch (U) {
    throw N(), U && U.name === "TypeError" && /fetch/i.test(U.message) ? Object.assign(
      new I("Network Error", I.ERR_NETWORK, e, q),
      {
        cause: U.cause || U
      }
    ) : I.from(U, U && U.code, e, q);
  }
}), et = {
  http: xr,
  xhr: Yr,
  fetch: ri
};
p.forEach(et, (e, t) => {
  if (e) {
    try {
      Object.defineProperty(e, "name", { value: t });
    } catch {
    }
    Object.defineProperty(e, "adapterName", { value: t });
  }
});
const kt = (e) => `- ${e}`, ii = (e) => p.isFunction(e) || e === null || e === !1, rn = {
  getAdapter: (e) => {
    e = p.isArray(e) ? e : [e];
    const { length: t } = e;
    let i, o;
    const a = {};
    for (let c = 0; c < t; c++) {
      i = e[c];
      let f;
      if (o = i, !ii(i) && (o = et[(f = String(i)).toLowerCase()], o === void 0))
        throw new I(`Unknown adapter '${f}'`);
      if (o)
        break;
      a[f || "#" + c] = o;
    }
    if (!o) {
      const c = Object.entries(a).map(
        ([l, g]) => `adapter ${l} ` + (g === !1 ? "is not supported by the environment" : "is not available in the build")
      );
      let f = t ? c.length > 1 ? `since :
` + c.map(kt).join(`
`) : " " + kt(c[0]) : "as no adapter specified";
      throw new I(
        "There is no suitable adapter to dispatch the request " + f,
        "ERR_NOT_SUPPORT"
      );
    }
    return o;
  },
  adapters: et
};
function ze(e) {
  if (e.cancelToken && e.cancelToken.throwIfRequested(), e.signal && e.signal.aborted)
    throw new me(null, e);
}
function Nt(e) {
  return ze(e), e.headers = W.from(e.headers), e.data = Ve.call(
    e,
    e.transformRequest
  ), ["post", "put", "patch"].indexOf(e.method) !== -1 && e.headers.setContentType("application/x-www-form-urlencoded", !1), rn.getAdapter(e.adapter || Se.adapter)(e).then(function(o) {
    return ze(e), o.data = Ve.call(
      e,
      e.transformResponse,
      o
    ), o.headers = W.from(o.headers), o;
  }, function(o) {
    return Qt(o) || (ze(e), o && o.response && (o.response.data = Ve.call(
      e,
      e.transformResponse,
      o.response
    ), o.response.headers = W.from(o.response.headers))), Promise.reject(o);
  });
}
const on = "1.7.2", at = {};
["object", "boolean", "number", "function", "string", "symbol"].forEach((e, t) => {
  at[e] = function(o) {
    return typeof o === e || "a" + (t < 1 ? "n " : " ") + e;
  };
});
const vt = {};
at.transitional = function(t, i, o) {
  function a(c, f) {
    return "[Axios v" + on + "] Transitional option '" + c + "'" + f + (o ? ". " + o : "");
  }
  return (c, f, l) => {
    if (t === !1)
      throw new I(
        a(f, " has been removed" + (i ? " in " + i : "")),
        I.ERR_DEPRECATED
      );
    return i && !vt[f] && (vt[f] = !0, console.warn(
      a(
        f,
        " has been deprecated since v" + i + " and will be removed in the near future"
      )
    )), t ? t(c, f, l) : !0;
  };
};
function oi(e, t, i) {
  if (typeof e != "object")
    throw new I("options must be an object", I.ERR_BAD_OPTION_VALUE);
  const o = Object.keys(e);
  let a = o.length;
  for (; a-- > 0; ) {
    const c = o[a], f = t[c];
    if (f) {
      const l = e[c], g = l === void 0 || f(l, c, e);
      if (g !== !0)
        throw new I("option " + c + " must be " + g, I.ERR_BAD_OPTION_VALUE);
      continue;
    }
    if (i !== !0)
      throw new I("Unknown option " + c, I.ERR_BAD_OPTION);
  }
}
const tt = {
  assertOptions: oi,
  validators: at
}, ie = tt.validators;
class le {
  constructor(t) {
    this.defaults = t, this.interceptors = {
      request: new Tt(),
      response: new Tt()
    };
  }
  /**
   * Dispatch a request
   *
   * @param {String|Object} configOrUrl The config specific for this request (merged with this.defaults)
   * @param {?Object} config
   *
   * @returns {Promise} The Promise to be fulfilled
   */
  async request(t, i) {
    try {
      return await this._request(t, i);
    } catch (o) {
      if (o instanceof Error) {
        let a;
        Error.captureStackTrace ? Error.captureStackTrace(a = {}) : a = new Error();
        const c = a.stack ? a.stack.replace(/^.+\n/, "") : "";
        try {
          o.stack ? c && !String(o.stack).endsWith(c.replace(/^.+\n.+\n/, "")) && (o.stack += `
` + c) : o.stack = c;
        } catch {
        }
      }
      throw o;
    }
  }
  _request(t, i) {
    typeof t == "string" ? (i = i || {}, i.url = t) : i = t || {}, i = ue(this.defaults, i);
    const { transitional: o, paramsSerializer: a, headers: c } = i;
    o !== void 0 && tt.assertOptions(o, {
      silentJSONParsing: ie.transitional(ie.boolean),
      forcedJSONParsing: ie.transitional(ie.boolean),
      clarifyTimeoutError: ie.transitional(ie.boolean)
    }, !1), a != null && (p.isFunction(a) ? i.paramsSerializer = {
      serialize: a
    } : tt.assertOptions(a, {
      encode: ie.function,
      serialize: ie.function
    }, !0)), i.method = (i.method || this.defaults.method || "get").toLowerCase();
    let f = c && p.merge(
      c.common,
      c[i.method]
    );
    c && p.forEach(
      ["delete", "get", "head", "post", "put", "patch", "common"],
      (x) => {
        delete c[x];
      }
    ), i.headers = W.concat(f, c);
    const l = [];
    let g = !0;
    this.interceptors.request.forEach(function(S) {
      typeof S.runWhen == "function" && S.runWhen(i) === !1 || (g = g && S.synchronous, l.unshift(S.fulfilled, S.rejected));
    });
    const b = [];
    this.interceptors.response.forEach(function(S) {
      b.push(S.fulfilled, S.rejected);
    });
    let y, w = 0, C;
    if (!g) {
      const x = [Nt.bind(this), void 0];
      for (x.unshift.apply(x, l), x.push.apply(x, b), C = x.length, y = Promise.resolve(i); w < C; )
        y = y.then(x[w++], x[w++]);
      return y;
    }
    C = l.length;
    let R = i;
    for (w = 0; w < C; ) {
      const x = l[w++], S = l[w++];
      try {
        R = x(R);
      } catch (q) {
        S.call(this, q);
        break;
      }
    }
    try {
      y = Nt.call(this, R);
    } catch (x) {
      return Promise.reject(x);
    }
    for (w = 0, C = b.length; w < C; )
      y = y.then(b[w++], b[w++]);
    return y;
  }
  getUri(t) {
    t = ue(this.defaults, t);
    const i = en(t.baseURL, t.url);
    return Xt(i, t.params, t.paramsSerializer);
  }
}
p.forEach(["delete", "get", "head", "options"], function(t) {
  le.prototype[t] = function(i, o) {
    return this.request(ue(o || {}, {
      method: t,
      url: i,
      data: (o || {}).data
    }));
  };
});
p.forEach(["post", "put", "patch"], function(t) {
  function i(o) {
    return function(c, f, l) {
      return this.request(ue(l || {}, {
        method: t,
        headers: o ? {
          "Content-Type": "multipart/form-data"
        } : {},
        url: c,
        data: f
      }));
    };
  }
  le.prototype[t] = i(), le.prototype[t + "Form"] = i(!0);
});
class lt {
  constructor(t) {
    if (typeof t != "function")
      throw new TypeError("executor must be a function.");
    let i;
    this.promise = new Promise(function(c) {
      i = c;
    });
    const o = this;
    this.promise.then((a) => {
      if (!o._listeners) return;
      let c = o._listeners.length;
      for (; c-- > 0; )
        o._listeners[c](a);
      o._listeners = null;
    }), this.promise.then = (a) => {
      let c;
      const f = new Promise((l) => {
        o.subscribe(l), c = l;
      }).then(a);
      return f.cancel = function() {
        o.unsubscribe(c);
      }, f;
    }, t(function(c, f, l) {
      o.reason || (o.reason = new me(c, f, l), i(o.reason));
    });
  }
  /**
   * Throws a `CanceledError` if cancellation has been requested.
   */
  throwIfRequested() {
    if (this.reason)
      throw this.reason;
  }
  /**
   * Subscribe to the cancel signal
   */
  subscribe(t) {
    if (this.reason) {
      t(this.reason);
      return;
    }
    this._listeners ? this._listeners.push(t) : this._listeners = [t];
  }
  /**
   * Unsubscribe from the cancel signal
   */
  unsubscribe(t) {
    if (!this._listeners)
      return;
    const i = this._listeners.indexOf(t);
    i !== -1 && this._listeners.splice(i, 1);
  }
  /**
   * Returns an object that contains a new `CancelToken` and a function that, when called,
   * cancels the `CancelToken`.
   */
  static source() {
    let t;
    return {
      token: new lt(function(a) {
        t = a;
      }),
      cancel: t
    };
  }
}
function si(e) {
  return function(i) {
    return e.apply(null, i);
  };
}
function ai(e) {
  return p.isObject(e) && e.isAxiosError === !0;
}
const nt = {
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
  NetworkAuthenticationRequired: 511
};
Object.entries(nt).forEach(([e, t]) => {
  nt[t] = e;
});
function sn(e) {
  const t = new le(e), i = Lt(le.prototype.request, t);
  return p.extend(i, le.prototype, t, { allOwnKeys: !0 }), p.extend(i, t, null, { allOwnKeys: !0 }), i.create = function(a) {
    return sn(ue(e, a));
  }, i;
}
const M = sn(Se);
M.Axios = le;
M.CanceledError = me;
M.CancelToken = lt;
M.isCancel = Qt;
M.VERSION = on;
M.toFormData = ke;
M.AxiosError = I;
M.Cancel = M.CanceledError;
M.all = function(t) {
  return Promise.all(t);
};
M.spread = si;
M.isAxiosError = ai;
M.mergeConfig = ue;
M.AxiosHeaders = W;
M.formToJSON = (e) => Zt(p.isHTMLForm(e) ? new FormData(e) : e);
M.getAdapter = rn.getAdapter;
M.HttpStatusCode = nt;
M.default = M;
class oe {
  constructor(t) {
    xt(this, "response");
    this.response = t;
  }
  static error(t) {
    return new oe({
      status: "error",
      data: t.data,
      redirect: t.redirect
    });
  }
  static done(t) {
    return new oe({
      status: "done",
      data: t.data,
      redirect: t.redirect
    });
  }
  ok() {
    return this.response.status == "done";
  }
  data(t = null) {
    return this.response.data ? t ? this.response.data[t] ?? null : this.response.data : null;
  }
  redirect(t = "_self", i = void 0) {
    const o = this.response.redirect;
    if (o)
      return window.open(o, t, i);
  }
}
class li {
  static open() {
    const t = document.getElementById("loading-overlay");
    t && (t.style.display = "");
  }
  static close() {
    const t = document.getElementById("loading-overlay");
    t && (t.style.display = "none");
  }
}
class ms {
  static async post(t, i = null, o, a = {
    loadingOverlay: {
      open: !0,
      close: !0
    },
    redirect: {
      target: "_self",
      features: void 0
    }
  }) {
    var f;
    try {
      (((f = a.loadingOverlay) == null ? void 0 : f.open) ?? !0) && li.open();
      const l = await M.post(t, i);
      if (!l)
        return new oe({
          status: "error"
        });
      if (!l.data)
        return new oe({
          status: "error"
        });
      const g = l.data.data ?? [];
      if (l.data.status != "done")
        return new oe({
          status: "error",
          data: g
        });
      const b = l.data.redirect ?? null;
      var c = new oe({
        status: l.data.status,
        data: g,
        redirect: b
      });
      return b && (a.redirect ?? {
        target: "_self",
        features: void 0
      }) && (a.redirect ? c.redirect(
        a.redirect.target ?? "_self",
        a.redirect.features
      ) : c.redirect(
        "_self"
      )), c;
    } catch (l) {
      console.log(l);
    }
    return new oe({
      status: "error"
    });
  }
}
const ui = ["disabled"], ci = {
  methods: {
    onClick: function() {
      this.disabled || this.$emit("onclick");
    }
  }
}, gs = /* @__PURE__ */ P({
  ...ci,
  __name: "Solid",
  props: {
    type: { type: String, default: void 0 },
    disabled: { type: Boolean, default: !1 }
  },
  emits: ["onclick"],
  setup(e) {
    return (t, i) => (E(), B("button", {
      disabled: e.disabled,
      onClick: i[0] || (i[0] = //@ts-ignore
      (...o) => t.onClick && t.onClick(...o)),
      class: L({
        btn: !e.type,
        "btn btn-neutral": e.type == "neutral",
        "btn btn-primary": e.type == "primary",
        "btn btn-secondary": e.type == "secondary",
        "btn btn-accent": e.type == "accent",
        "btn btn-ghost": e.type == "ghost",
        "btn btn-link": e.type == "link",
        "btn btn-info": e.type == "info",
        "btn btn-success": e.type == "success",
        "btn btn-warning": e.type == "warning",
        "btn btn-error": e.type == "error"
      })
    }, [
      H(t.$slots, "default")
    ], 10, ui));
  }
}), fi = ["disabled"], di = {
  methods: {
    onClick: function() {
      this.disabled || this.$emit("onclick");
    }
  }
}, bs = /* @__PURE__ */ P({
  ...di,
  __name: "Outline",
  props: {
    type: { type: String, default: void 0 },
    disabled: { type: Boolean, default: !1 }
  },
  emits: ["onclick"],
  setup(e) {
    return (t, i) => (E(), B("button", {
      disabled: e.disabled,
      onClick: i[0] || (i[0] = //@ts-ignore
      (...o) => t.onClick && t.onClick(...o)),
      class: L({
        btn: !e.type,
        "btn btn-neutral btn-outline": e.type == "neutral",
        "btn btn-primary btn-outline": e.type == "primary",
        "btn btn-secondary btn-outline": e.type == "secondary",
        "btn btn-accent btn-outline": e.type == "accent",
        "btn btn-ghost btn-outline": e.type == "ghost",
        "btn btn-link btn-outline": e.type == "link",
        "btn btn-info btn-outline": e.type == "info",
        "btn btn-success btn-outline": e.type == "success",
        "btn btn-warning btn-outline": e.type == "warning",
        "btn btn-error btn-outline": e.type == "error"
      })
    }, [
      H(t.$slots, "default")
    ], 10, fi));
  }
}), hi = ["href"], ws = /* @__PURE__ */ P({
  __name: "Solid",
  props: {
    type: { type: String, default: void 0 },
    href: { type: String }
  },
  emits: ["onclick"],
  setup(e) {
    return (t, i) => (E(), B("a", {
      href: e.href,
      class: L({
        btn: !e.type,
        "btn btn-neutral": e.type == "neutral",
        "btn btn-primary": e.type == "primary",
        "btn btn-secondary": e.type == "secondary",
        "btn btn-accent": e.type == "accent",
        "btn btn-ghost": e.type == "ghost",
        "btn btn-link": e.type == "link",
        "btn btn-info": e.type == "info",
        "btn btn-success": e.type == "success",
        "btn btn-warning": e.type == "warning",
        "btn btn-error": e.type == "error"
      })
    }, [
      H(t.$slots, "default")
    ], 10, hi));
  }
}), pi = ["href"], xs = /* @__PURE__ */ P({
  __name: "Outline",
  props: {
    type: { type: String, default: void 0 },
    href: { type: String }
  },
  emits: ["onclick"],
  setup(e) {
    return (t, i) => (E(), B("a", {
      href: e.href,
      class: L({
        btn: !e.type,
        "btn btn-neutral btn-outline": e.type == "neutral",
        "btn btn-primary btn-outline": e.type == "primary",
        "btn btn-secondary btn-outline": e.type == "secondary",
        "btn btn-accent btn-outline": e.type == "accent",
        "btn btn-ghost btn-outline": e.type == "ghost",
        "btn btn-link btn-outline": e.type == "link",
        "btn btn-info btn-outline": e.type == "info",
        "btn btn-success btn-outline": e.type == "success",
        "btn btn-warning btn-outline": e.type == "warning",
        "btn btn-error btn-outline": e.type == "error"
      })
    }, [
      H(t.$slots, "default")
    ], 10, pi));
  }
}), yi = { class: "flex flex-col" }, mi = { class: "flex flex-row items-center p-2 justify-center" }, gi = /* @__PURE__ */ A("p", { class: "mx-2" }, "/", -1), bi = { class: "grid grid-cols-7 gap-1 mt-2 grid-rows-5" }, wi = ["onClick"], xi = { class: "text-center select-none" }, Ei = {
  watch: {
    month: function(e, t) {
      if (e != t) {
        var i = e;
        i < 1 && (i = 1), i > 12 && (i = 12), this.month = i;
      }
    },
    year: function(e, t) {
      if (e != t) {
        var i = e;
        i < 0 && (i = 0), i > 9999 && (i = 9999), this.year = i;
      }
    }
  },
  data() {
    var e = this.xdate ?? /* @__PURE__ */ new Date();
    return {
      year: e.getFullYear(),
      month: e.getMonth() + 1,
      day: e.getDate(),
      date: e
    };
  },
  methods: {
    onClickDay: function() {
      this.$emit("onday", {
        year: this.year,
        month: this.month,
        day: this.day,
        date: this.date
      });
    },
    setDate: function(e) {
      Object.assign(this.$data, {
        year: e.getFullYear(),
        month: e.getMonth() + 1,
        day: e.getDate(),
        date: e
      });
    },
    getCountOfDays: function(e = null, t = null) {
      return new Date(t ?? this.year, e ?? this.month, 0).getDate();
    },
    isSelected: function(e) {
      return e == this.day;
    },
    setDay: function(e) {
      this.day = e, this.calculateDate(), this.onClickDay();
    },
    calculateDate: function() {
      this.date = new Date(this.year, this.month - 1, this.day), this.day != this.date.getDate() && (this.day = this.date.getDate()), this.$emit("onchange", {
        year: this.year,
        month: this.month,
        day: this.day,
        date: this.date
      });
    }
  }
}, Bi = /* @__PURE__ */ P({
  ...Ei,
  __name: "DatePicker",
  props: {
    xdate: { type: Date }
  },
  emits: ["onchange", "onday"],
  setup(e) {
    return (t, i) => (E(), B("div", yi, [
      A("div", mi, [
        se(A("input", {
          onChange: i[0] || (i[0] = //@ts-ignore
          (...o) => t.calculateDate && t.calculateDate(...o)),
          class: "select-none outline-none text-center max-w-32 input",
          "onUpdate:modelValue": i[1] || (i[1] = (o) => t.month = o),
          type: "number"
        }, null, 544), [
          [Et, t.month]
        ]),
        gi,
        se(A("input", {
          onChange: i[2] || (i[2] = //@ts-ignore
          (...o) => t.calculateDate && t.calculateDate(...o)),
          class: "select-none outline-none text-center max-w-32 input",
          "onUpdate:modelValue": i[3] || (i[3] = (o) => t.year = o),
          type: "number"
        }, null, 544), [
          [Et, t.year]
        ])
      ]),
      A("div", bi, [
        (E(!0), B(pe, null, rt(t.getCountOfDays(), (o) => (E(), B("div", {
          onClick: (a) => t.setDay(o)
        }, [
          A("div", {
            class: L({
              "cursor-pointer rounded-xl col-span-1 min-w-12 min-h-12 aspect-square flex flex-col items-center justify-center hover:bg-primary hover:text-primary-content transition-colors duration-100": !t.isSelected(o),
              "cursor-pointer rounded-xl col-span-1 min-w-12 min-h-12 aspect-square flex flex-col items-center justify-center bg-primary text-primary-content transition-colors duration-100": t.isSelected(o)
            })
          }, [
            A("p", xi, F(o), 1)
          ], 2)
        ], 8, wi))), 256))
      ])
    ]));
  }
}), Si = { class: "form-control w-full" }, Ai = {
  key: 0,
  class: "label"
}, Ri = { class: "label-text" }, Ii = ["disabled", "required", "type", "id", "name", "placeholder"], Ti = {
  key: 1,
  class: "label"
}, Fi = { class: "label-text-alt" }, Ci = {
  key: 2,
  class: "label"
}, $i = { class: "label-text-alt" }, Oi = {
  data() {
    return {
      value: this.$props.xvalue
    };
  },
  methods: {
    onInput: function(e) {
      this.$emit("input", e);
    }
  }
}, Es = /* @__PURE__ */ P({
  ...Oi,
  __name: "Text",
  props: {
    hint: {},
    error: {},
    id: { type: String },
    name: { type: String },
    type: { type: String, default: "text" },
    title: { type: String, required: !0 },
    placeholder: { type: String },
    required: { type: Boolean, default: !1 },
    collapsed: { type: Boolean, default: !1 },
    xvalue: { type: String },
    disabled: { type: Boolean, default: !1 }
  },
  emits: ["input"],
  setup(e) {
    return (t, i) => (E(), B("label", Si, [
      e.collapsed ? $("", !0) : (E(), B("div", Ai, [
        A("span", Ri, F(e.title) + F(e.required ? "*" : ""), 1)
      ])),
      se(A("input", {
        onInput: i[0] || (i[0] = //@ts-ignore
        (...o) => t.onInput && t.onInput(...o)),
        class: L({
          "input input-bordered w-full": !e.error,
          "input input-bordered input-error w-full": e.error
        }),
        disabled: e.disabled,
        required: e.required,
        "onUpdate:modelValue": i[1] || (i[1] = (o) => t.value = o),
        type: e.type,
        id: e.id,
        name: e.name,
        placeholder: e.placeholder ?? e.title
      }, null, 42, Ii), [
        [xe, t.value]
      ]),
      e.hint && !e.error ? (E(), B("div", Ti, [
        A("span", Fi, F(e.hint), 1)
      ])) : $("", !0),
      e.error ? (E(), B("div", Ci, [
        A("span", $i, F(e.error), 1)
      ])) : $("", !0)
    ]));
  }
});
var ce = {}, ve = {};
ve.byteLength = Ni;
ve.toByteArray = Di;
ve.fromByteArray = qi;
var ee = [], J = [], Ui = typeof Uint8Array < "u" ? Uint8Array : Array, We = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
for (var he = 0, ki = We.length; he < ki; ++he)
  ee[he] = We[he], J[We.charCodeAt(he)] = he;
J[45] = 62;
J[95] = 63;
function an(e) {
  var t = e.length;
  if (t % 4 > 0)
    throw new Error("Invalid string. Length must be a multiple of 4");
  var i = e.indexOf("=");
  i === -1 && (i = t);
  var o = i === t ? 0 : 4 - i % 4;
  return [i, o];
}
function Ni(e) {
  var t = an(e), i = t[0], o = t[1];
  return (i + o) * 3 / 4 - o;
}
function vi(e, t, i) {
  return (t + i) * 3 / 4 - i;
}
function Di(e) {
  var t, i = an(e), o = i[0], a = i[1], c = new Ui(vi(e, o, a)), f = 0, l = a > 0 ? o - 4 : o, g;
  for (g = 0; g < l; g += 4)
    t = J[e.charCodeAt(g)] << 18 | J[e.charCodeAt(g + 1)] << 12 | J[e.charCodeAt(g + 2)] << 6 | J[e.charCodeAt(g + 3)], c[f++] = t >> 16 & 255, c[f++] = t >> 8 & 255, c[f++] = t & 255;
  return a === 2 && (t = J[e.charCodeAt(g)] << 2 | J[e.charCodeAt(g + 1)] >> 4, c[f++] = t & 255), a === 1 && (t = J[e.charCodeAt(g)] << 10 | J[e.charCodeAt(g + 1)] << 4 | J[e.charCodeAt(g + 2)] >> 2, c[f++] = t >> 8 & 255, c[f++] = t & 255), c;
}
function Li(e) {
  return ee[e >> 18 & 63] + ee[e >> 12 & 63] + ee[e >> 6 & 63] + ee[e & 63];
}
function Pi(e, t, i) {
  for (var o, a = [], c = t; c < i; c += 3)
    o = (e[c] << 16 & 16711680) + (e[c + 1] << 8 & 65280) + (e[c + 2] & 255), a.push(Li(o));
  return a.join("");
}
function qi(e) {
  for (var t, i = e.length, o = i % 3, a = [], c = 16383, f = 0, l = i - o; f < l; f += c)
    a.push(Pi(e, f, f + c > l ? l : f + c));
  return o === 1 ? (t = e[i - 1], a.push(
    ee[t >> 2] + ee[t << 4 & 63] + "=="
  )) : o === 2 && (t = (e[i - 2] << 8) + e[i - 1], a.push(
    ee[t >> 10] + ee[t >> 4 & 63] + ee[t << 2 & 63] + "="
  )), a.join("");
}
var ut = {};
/*! ieee754. BSD-3-Clause License. Feross Aboukhadijeh <https://feross.org/opensource> */
ut.read = function(e, t, i, o, a) {
  var c, f, l = a * 8 - o - 1, g = (1 << l) - 1, b = g >> 1, y = -7, w = i ? a - 1 : 0, C = i ? -1 : 1, R = e[t + w];
  for (w += C, c = R & (1 << -y) - 1, R >>= -y, y += l; y > 0; c = c * 256 + e[t + w], w += C, y -= 8)
    ;
  for (f = c & (1 << -y) - 1, c >>= -y, y += o; y > 0; f = f * 256 + e[t + w], w += C, y -= 8)
    ;
  if (c === 0)
    c = 1 - b;
  else {
    if (c === g)
      return f ? NaN : (R ? -1 : 1) * (1 / 0);
    f = f + Math.pow(2, o), c = c - b;
  }
  return (R ? -1 : 1) * f * Math.pow(2, c - o);
};
ut.write = function(e, t, i, o, a, c) {
  var f, l, g, b = c * 8 - a - 1, y = (1 << b) - 1, w = y >> 1, C = a === 23 ? Math.pow(2, -24) - Math.pow(2, -77) : 0, R = o ? 0 : c - 1, x = o ? 1 : -1, S = t < 0 || t === 0 && 1 / t < 0 ? 1 : 0;
  for (t = Math.abs(t), isNaN(t) || t === 1 / 0 ? (l = isNaN(t) ? 1 : 0, f = y) : (f = Math.floor(Math.log(t) / Math.LN2), t * (g = Math.pow(2, -f)) < 1 && (f--, g *= 2), f + w >= 1 ? t += C / g : t += C * Math.pow(2, 1 - w), t * g >= 2 && (f++, g /= 2), f + w >= y ? (l = 0, f = y) : f + w >= 1 ? (l = (t * g - 1) * Math.pow(2, a), f = f + w) : (l = t * Math.pow(2, w - 1) * Math.pow(2, a), f = 0)); a >= 8; e[i + R] = l & 255, R += x, l /= 256, a -= 8)
    ;
  for (f = f << a | l, b += a; b > 0; e[i + R] = f & 255, R += x, f /= 256, b -= 8)
    ;
  e[i + R - x] |= S * 128;
};
/*!
 * The buffer module from node.js, for the browser.
 *
 * @author   Feross Aboukhadijeh <https://feross.org>
 * @license  MIT
 */
(function(e) {
  const t = ve, i = ut, o = typeof Symbol == "function" && typeof Symbol.for == "function" ? Symbol.for("nodejs.util.inspect.custom") : null;
  e.Buffer = l, e.SlowBuffer = G, e.INSPECT_MAX_BYTES = 50;
  const a = 2147483647;
  e.kMaxLength = a, l.TYPED_ARRAY_SUPPORT = c(), !l.TYPED_ARRAY_SUPPORT && typeof console < "u" && typeof console.error == "function" && console.error(
    "This browser lacks typed array (Uint8Array) support which is required by `buffer` v5.x. Use `buffer` v4.x if you require old browser support."
  );
  function c() {
    try {
      const s = new Uint8Array(1), n = { foo: function() {
        return 42;
      } };
      return Object.setPrototypeOf(n, Uint8Array.prototype), Object.setPrototypeOf(s, n), s.foo() === 42;
    } catch {
      return !1;
    }
  }
  Object.defineProperty(l.prototype, "parent", {
    enumerable: !0,
    get: function() {
      if (l.isBuffer(this))
        return this.buffer;
    }
  }), Object.defineProperty(l.prototype, "offset", {
    enumerable: !0,
    get: function() {
      if (l.isBuffer(this))
        return this.byteOffset;
    }
  });
  function f(s) {
    if (s > a)
      throw new RangeError('The value "' + s + '" is invalid for option "size"');
    const n = new Uint8Array(s);
    return Object.setPrototypeOf(n, l.prototype), n;
  }
  function l(s, n, r) {
    if (typeof s == "number") {
      if (typeof n == "string")
        throw new TypeError(
          'The "string" argument must be of type string. Received type number'
        );
      return w(s);
    }
    return g(s, n, r);
  }
  l.poolSize = 8192;
  function g(s, n, r) {
    if (typeof s == "string")
      return C(s, n);
    if (ArrayBuffer.isView(s))
      return x(s);
    if (s == null)
      throw new TypeError(
        "The first argument must be one of type string, Buffer, ArrayBuffer, Array, or Array-like Object. Received type " + typeof s
      );
    if (_(s, ArrayBuffer) || s && _(s.buffer, ArrayBuffer) || typeof SharedArrayBuffer < "u" && (_(s, SharedArrayBuffer) || s && _(s.buffer, SharedArrayBuffer)))
      return S(s, n, r);
    if (typeof s == "number")
      throw new TypeError(
        'The "value" argument must not be of type number. Received type number'
      );
    const u = s.valueOf && s.valueOf();
    if (u != null && u !== s)
      return l.from(u, n, r);
    const d = q(s);
    if (d) return d;
    if (typeof Symbol < "u" && Symbol.toPrimitive != null && typeof s[Symbol.toPrimitive] == "function")
      return l.from(s[Symbol.toPrimitive]("string"), n, r);
    throw new TypeError(
      "The first argument must be one of type string, Buffer, ArrayBuffer, Array, or Array-like Object. Received type " + typeof s
    );
  }
  l.from = function(s, n, r) {
    return g(s, n, r);
  }, Object.setPrototypeOf(l.prototype, Uint8Array.prototype), Object.setPrototypeOf(l, Uint8Array);
  function b(s) {
    if (typeof s != "number")
      throw new TypeError('"size" argument must be of type number');
    if (s < 0)
      throw new RangeError('The value "' + s + '" is invalid for option "size"');
  }
  function y(s, n, r) {
    return b(s), s <= 0 ? f(s) : n !== void 0 ? typeof r == "string" ? f(s).fill(n, r) : f(s).fill(n) : f(s);
  }
  l.alloc = function(s, n, r) {
    return y(s, n, r);
  };
  function w(s) {
    return b(s), f(s < 0 ? 0 : N(s) | 0);
  }
  l.allocUnsafe = function(s) {
    return w(s);
  }, l.allocUnsafeSlow = function(s) {
    return w(s);
  };
  function C(s, n) {
    if ((typeof n != "string" || n === "") && (n = "utf8"), !l.isEncoding(n))
      throw new TypeError("Unknown encoding: " + n);
    const r = U(s, n) | 0;
    let u = f(r);
    const d = u.write(s, n);
    return d !== r && (u = u.slice(0, d)), u;
  }
  function R(s) {
    const n = s.length < 0 ? 0 : N(s.length) | 0, r = f(n);
    for (let u = 0; u < n; u += 1)
      r[u] = s[u] & 255;
    return r;
  }
  function x(s) {
    if (_(s, Uint8Array)) {
      const n = new Uint8Array(s);
      return S(n.buffer, n.byteOffset, n.byteLength);
    }
    return R(s);
  }
  function S(s, n, r) {
    if (n < 0 || s.byteLength < n)
      throw new RangeError('"offset" is outside of buffer bounds');
    if (s.byteLength < n + (r || 0))
      throw new RangeError('"length" is outside of buffer bounds');
    let u;
    return n === void 0 && r === void 0 ? u = new Uint8Array(s) : r === void 0 ? u = new Uint8Array(s, n) : u = new Uint8Array(s, n, r), Object.setPrototypeOf(u, l.prototype), u;
  }
  function q(s) {
    if (l.isBuffer(s)) {
      const n = N(s.length) | 0, r = f(n);
      return r.length === 0 || s.copy(r, 0, 0, n), r;
    }
    if (s.length !== void 0)
      return typeof s.length != "number" || qe(s.length) ? f(0) : R(s);
    if (s.type === "Buffer" && Array.isArray(s.data))
      return R(s.data);
  }
  function N(s) {
    if (s >= a)
      throw new RangeError("Attempt to allocate Buffer larger than maximum size: 0x" + a.toString(16) + " bytes");
    return s | 0;
  }
  function G(s) {
    return +s != s && (s = 0), l.alloc(+s);
  }
  l.isBuffer = function(n) {
    return n != null && n._isBuffer === !0 && n !== l.prototype;
  }, l.compare = function(n, r) {
    if (_(n, Uint8Array) && (n = l.from(n, n.offset, n.byteLength)), _(r, Uint8Array) && (r = l.from(r, r.offset, r.byteLength)), !l.isBuffer(n) || !l.isBuffer(r))
      throw new TypeError(
        'The "buf1", "buf2" arguments must be one of type Buffer or Uint8Array'
      );
    if (n === r) return 0;
    let u = n.length, d = r.length;
    for (let h = 0, m = Math.min(u, d); h < m; ++h)
      if (n[h] !== r[h]) {
        u = n[h], d = r[h];
        break;
      }
    return u < d ? -1 : d < u ? 1 : 0;
  }, l.isEncoding = function(n) {
    switch (String(n).toLowerCase()) {
      case "hex":
      case "utf8":
      case "utf-8":
      case "ascii":
      case "latin1":
      case "binary":
      case "base64":
      case "ucs2":
      case "ucs-2":
      case "utf16le":
      case "utf-16le":
        return !0;
      default:
        return !1;
    }
  }, l.concat = function(n, r) {
    if (!Array.isArray(n))
      throw new TypeError('"list" argument must be an Array of Buffers');
    if (n.length === 0)
      return l.alloc(0);
    let u;
    if (r === void 0)
      for (r = 0, u = 0; u < n.length; ++u)
        r += n[u].length;
    const d = l.allocUnsafe(r);
    let h = 0;
    for (u = 0; u < n.length; ++u) {
      let m = n[u];
      if (_(m, Uint8Array))
        h + m.length > d.length ? (l.isBuffer(m) || (m = l.from(m)), m.copy(d, h)) : Uint8Array.prototype.set.call(
          d,
          m,
          h
        );
      else if (l.isBuffer(m))
        m.copy(d, h);
      else
        throw new TypeError('"list" argument must be an Array of Buffers');
      h += m.length;
    }
    return d;
  };
  function U(s, n) {
    if (l.isBuffer(s))
      return s.length;
    if (ArrayBuffer.isView(s) || _(s, ArrayBuffer))
      return s.byteLength;
    if (typeof s != "string")
      throw new TypeError(
        'The "string" argument must be one of type string, Buffer, or ArrayBuffer. Received type ' + typeof s
      );
    const r = s.length, u = arguments.length > 2 && arguments[2] === !0;
    if (!u && r === 0) return 0;
    let d = !1;
    for (; ; )
      switch (n) {
        case "ascii":
        case "latin1":
        case "binary":
          return r;
        case "utf8":
        case "utf-8":
          return Pe(s).length;
        case "ucs2":
        case "ucs-2":
        case "utf16le":
        case "utf-16le":
          return r * 2;
        case "hex":
          return r >>> 1;
        case "base64":
          return wt(s).length;
        default:
          if (d)
            return u ? -1 : Pe(s).length;
          n = ("" + n).toLowerCase(), d = !0;
      }
  }
  l.byteLength = U;
  function ae(s, n, r) {
    let u = !1;
    if ((n === void 0 || n < 0) && (n = 0), n > this.length || ((r === void 0 || r > this.length) && (r = this.length), r <= 0) || (r >>>= 0, n >>>= 0, r <= n))
      return "";
    for (s || (s = "utf8"); ; )
      switch (s) {
        case "hex":
          return bn(this, n, r);
        case "utf8":
        case "utf-8":
          return ct(this, n, r);
        case "ascii":
          return mn(this, n, r);
        case "latin1":
        case "binary":
          return gn(this, n, r);
        case "base64":
          return pn(this, n, r);
        case "ucs2":
        case "ucs-2":
        case "utf16le":
        case "utf-16le":
          return wn(this, n, r);
        default:
          if (u) throw new TypeError("Unknown encoding: " + s);
          s = (s + "").toLowerCase(), u = !0;
      }
  }
  l.prototype._isBuffer = !0;
  function te(s, n, r) {
    const u = s[n];
    s[n] = s[r], s[r] = u;
  }
  l.prototype.swap16 = function() {
    const n = this.length;
    if (n % 2 !== 0)
      throw new RangeError("Buffer size must be a multiple of 16-bits");
    for (let r = 0; r < n; r += 2)
      te(this, r, r + 1);
    return this;
  }, l.prototype.swap32 = function() {
    const n = this.length;
    if (n % 4 !== 0)
      throw new RangeError("Buffer size must be a multiple of 32-bits");
    for (let r = 0; r < n; r += 4)
      te(this, r, r + 3), te(this, r + 1, r + 2);
    return this;
  }, l.prototype.swap64 = function() {
    const n = this.length;
    if (n % 8 !== 0)
      throw new RangeError("Buffer size must be a multiple of 64-bits");
    for (let r = 0; r < n; r += 8)
      te(this, r, r + 7), te(this, r + 1, r + 6), te(this, r + 2, r + 5), te(this, r + 3, r + 4);
    return this;
  }, l.prototype.toString = function() {
    const n = this.length;
    return n === 0 ? "" : arguments.length === 0 ? ct(this, 0, n) : ae.apply(this, arguments);
  }, l.prototype.toLocaleString = l.prototype.toString, l.prototype.equals = function(n) {
    if (!l.isBuffer(n)) throw new TypeError("Argument must be a Buffer");
    return this === n ? !0 : l.compare(this, n) === 0;
  }, l.prototype.inspect = function() {
    let n = "";
    const r = e.INSPECT_MAX_BYTES;
    return n = this.toString("hex", 0, r).replace(/(.{2})/g, "$1 ").trim(), this.length > r && (n += " ... "), "<Buffer " + n + ">";
  }, o && (l.prototype[o] = l.prototype.inspect), l.prototype.compare = function(n, r, u, d, h) {
    if (_(n, Uint8Array) && (n = l.from(n, n.offset, n.byteLength)), !l.isBuffer(n))
      throw new TypeError(
        'The "target" argument must be one of type Buffer or Uint8Array. Received type ' + typeof n
      );
    if (r === void 0 && (r = 0), u === void 0 && (u = n ? n.length : 0), d === void 0 && (d = 0), h === void 0 && (h = this.length), r < 0 || u > n.length || d < 0 || h > this.length)
      throw new RangeError("out of range index");
    if (d >= h && r >= u)
      return 0;
    if (d >= h)
      return -1;
    if (r >= u)
      return 1;
    if (r >>>= 0, u >>>= 0, d >>>= 0, h >>>= 0, this === n) return 0;
    let m = h - d, T = u - r;
    const v = Math.min(m, T), k = this.slice(d, h), D = n.slice(r, u);
    for (let O = 0; O < v; ++O)
      if (k[O] !== D[O]) {
        m = k[O], T = D[O];
        break;
      }
    return m < T ? -1 : T < m ? 1 : 0;
  };
  function X(s, n, r, u, d) {
    if (s.length === 0) return -1;
    if (typeof r == "string" ? (u = r, r = 0) : r > 2147483647 ? r = 2147483647 : r < -2147483648 && (r = -2147483648), r = +r, qe(r) && (r = d ? 0 : s.length - 1), r < 0 && (r = s.length + r), r >= s.length) {
      if (d) return -1;
      r = s.length - 1;
    } else if (r < 0)
      if (d) r = 0;
      else return -1;
    if (typeof n == "string" && (n = l.from(n, u)), l.isBuffer(n))
      return n.length === 0 ? -1 : ne(s, n, r, u, d);
    if (typeof n == "number")
      return n = n & 255, typeof Uint8Array.prototype.indexOf == "function" ? d ? Uint8Array.prototype.indexOf.call(s, n, r) : Uint8Array.prototype.lastIndexOf.call(s, n, r) : ne(s, [n], r, u, d);
    throw new TypeError("val must be string, number or Buffer");
  }
  function ne(s, n, r, u, d) {
    let h = 1, m = s.length, T = n.length;
    if (u !== void 0 && (u = String(u).toLowerCase(), u === "ucs2" || u === "ucs-2" || u === "utf16le" || u === "utf-16le")) {
      if (s.length < 2 || n.length < 2)
        return -1;
      h = 2, m /= 2, T /= 2, r /= 2;
    }
    function v(D, O) {
      return h === 1 ? D[O] : D.readUInt16BE(O * h);
    }
    let k;
    if (d) {
      let D = -1;
      for (k = r; k < m; k++)
        if (v(s, k) === v(n, D === -1 ? 0 : k - D)) {
          if (D === -1 && (D = k), k - D + 1 === T) return D * h;
        } else
          D !== -1 && (k -= k - D), D = -1;
    } else
      for (r + T > m && (r = m - T), k = r; k >= 0; k--) {
        let D = !0;
        for (let O = 0; O < T; O++)
          if (v(s, k + O) !== v(n, O)) {
            D = !1;
            break;
          }
        if (D) return k;
      }
    return -1;
  }
  l.prototype.includes = function(n, r, u) {
    return this.indexOf(n, r, u) !== -1;
  }, l.prototype.indexOf = function(n, r, u) {
    return X(this, n, r, u, !0);
  }, l.prototype.lastIndexOf = function(n, r, u) {
    return X(this, n, r, u, !1);
  };
  function Ae(s, n, r, u) {
    r = Number(r) || 0;
    const d = s.length - r;
    u ? (u = Number(u), u > d && (u = d)) : u = d;
    const h = n.length;
    u > h / 2 && (u = h / 2);
    let m;
    for (m = 0; m < u; ++m) {
      const T = parseInt(n.substr(m * 2, 2), 16);
      if (qe(T)) return m;
      s[r + m] = T;
    }
    return m;
  }
  function cn(s, n, r, u) {
    return Re(Pe(n, s.length - r), s, r, u);
  }
  function fn(s, n, r, u) {
    return Re(Sn(n), s, r, u);
  }
  function dn(s, n, r, u) {
    return Re(wt(n), s, r, u);
  }
  function hn(s, n, r, u) {
    return Re(An(n, s.length - r), s, r, u);
  }
  l.prototype.write = function(n, r, u, d) {
    if (r === void 0)
      d = "utf8", u = this.length, r = 0;
    else if (u === void 0 && typeof r == "string")
      d = r, u = this.length, r = 0;
    else if (isFinite(r))
      r = r >>> 0, isFinite(u) ? (u = u >>> 0, d === void 0 && (d = "utf8")) : (d = u, u = void 0);
    else
      throw new Error(
        "Buffer.write(string, encoding, offset[, length]) is no longer supported"
      );
    const h = this.length - r;
    if ((u === void 0 || u > h) && (u = h), n.length > 0 && (u < 0 || r < 0) || r > this.length)
      throw new RangeError("Attempt to write outside buffer bounds");
    d || (d = "utf8");
    let m = !1;
    for (; ; )
      switch (d) {
        case "hex":
          return Ae(this, n, r, u);
        case "utf8":
        case "utf-8":
          return cn(this, n, r, u);
        case "ascii":
        case "latin1":
        case "binary":
          return fn(this, n, r, u);
        case "base64":
          return dn(this, n, r, u);
        case "ucs2":
        case "ucs-2":
        case "utf16le":
        case "utf-16le":
          return hn(this, n, r, u);
        default:
          if (m) throw new TypeError("Unknown encoding: " + d);
          d = ("" + d).toLowerCase(), m = !0;
      }
  }, l.prototype.toJSON = function() {
    return {
      type: "Buffer",
      data: Array.prototype.slice.call(this._arr || this, 0)
    };
  };
  function pn(s, n, r) {
    return n === 0 && r === s.length ? t.fromByteArray(s) : t.fromByteArray(s.slice(n, r));
  }
  function ct(s, n, r) {
    r = Math.min(s.length, r);
    const u = [];
    let d = n;
    for (; d < r; ) {
      const h = s[d];
      let m = null, T = h > 239 ? 4 : h > 223 ? 3 : h > 191 ? 2 : 1;
      if (d + T <= r) {
        let v, k, D, O;
        switch (T) {
          case 1:
            h < 128 && (m = h);
            break;
          case 2:
            v = s[d + 1], (v & 192) === 128 && (O = (h & 31) << 6 | v & 63, O > 127 && (m = O));
            break;
          case 3:
            v = s[d + 1], k = s[d + 2], (v & 192) === 128 && (k & 192) === 128 && (O = (h & 15) << 12 | (v & 63) << 6 | k & 63, O > 2047 && (O < 55296 || O > 57343) && (m = O));
            break;
          case 4:
            v = s[d + 1], k = s[d + 2], D = s[d + 3], (v & 192) === 128 && (k & 192) === 128 && (D & 192) === 128 && (O = (h & 15) << 18 | (v & 63) << 12 | (k & 63) << 6 | D & 63, O > 65535 && O < 1114112 && (m = O));
        }
      }
      m === null ? (m = 65533, T = 1) : m > 65535 && (m -= 65536, u.push(m >>> 10 & 1023 | 55296), m = 56320 | m & 1023), u.push(m), d += T;
    }
    return yn(u);
  }
  const ft = 4096;
  function yn(s) {
    const n = s.length;
    if (n <= ft)
      return String.fromCharCode.apply(String, s);
    let r = "", u = 0;
    for (; u < n; )
      r += String.fromCharCode.apply(
        String,
        s.slice(u, u += ft)
      );
    return r;
  }
  function mn(s, n, r) {
    let u = "";
    r = Math.min(s.length, r);
    for (let d = n; d < r; ++d)
      u += String.fromCharCode(s[d] & 127);
    return u;
  }
  function gn(s, n, r) {
    let u = "";
    r = Math.min(s.length, r);
    for (let d = n; d < r; ++d)
      u += String.fromCharCode(s[d]);
    return u;
  }
  function bn(s, n, r) {
    const u = s.length;
    (!n || n < 0) && (n = 0), (!r || r < 0 || r > u) && (r = u);
    let d = "";
    for (let h = n; h < r; ++h)
      d += Rn[s[h]];
    return d;
  }
  function wn(s, n, r) {
    const u = s.slice(n, r);
    let d = "";
    for (let h = 0; h < u.length - 1; h += 2)
      d += String.fromCharCode(u[h] + u[h + 1] * 256);
    return d;
  }
  l.prototype.slice = function(n, r) {
    const u = this.length;
    n = ~~n, r = r === void 0 ? u : ~~r, n < 0 ? (n += u, n < 0 && (n = 0)) : n > u && (n = u), r < 0 ? (r += u, r < 0 && (r = 0)) : r > u && (r = u), r < n && (r = n);
    const d = this.subarray(n, r);
    return Object.setPrototypeOf(d, l.prototype), d;
  };
  function j(s, n, r) {
    if (s % 1 !== 0 || s < 0) throw new RangeError("offset is not uint");
    if (s + n > r) throw new RangeError("Trying to access beyond buffer length");
  }
  l.prototype.readUintLE = l.prototype.readUIntLE = function(n, r, u) {
    n = n >>> 0, r = r >>> 0, u || j(n, r, this.length);
    let d = this[n], h = 1, m = 0;
    for (; ++m < r && (h *= 256); )
      d += this[n + m] * h;
    return d;
  }, l.prototype.readUintBE = l.prototype.readUIntBE = function(n, r, u) {
    n = n >>> 0, r = r >>> 0, u || j(n, r, this.length);
    let d = this[n + --r], h = 1;
    for (; r > 0 && (h *= 256); )
      d += this[n + --r] * h;
    return d;
  }, l.prototype.readUint8 = l.prototype.readUInt8 = function(n, r) {
    return n = n >>> 0, r || j(n, 1, this.length), this[n];
  }, l.prototype.readUint16LE = l.prototype.readUInt16LE = function(n, r) {
    return n = n >>> 0, r || j(n, 2, this.length), this[n] | this[n + 1] << 8;
  }, l.prototype.readUint16BE = l.prototype.readUInt16BE = function(n, r) {
    return n = n >>> 0, r || j(n, 2, this.length), this[n] << 8 | this[n + 1];
  }, l.prototype.readUint32LE = l.prototype.readUInt32LE = function(n, r) {
    return n = n >>> 0, r || j(n, 4, this.length), (this[n] | this[n + 1] << 8 | this[n + 2] << 16) + this[n + 3] * 16777216;
  }, l.prototype.readUint32BE = l.prototype.readUInt32BE = function(n, r) {
    return n = n >>> 0, r || j(n, 4, this.length), this[n] * 16777216 + (this[n + 1] << 16 | this[n + 2] << 8 | this[n + 3]);
  }, l.prototype.readBigUInt64LE = re(function(n) {
    n = n >>> 0, de(n, "offset");
    const r = this[n], u = this[n + 7];
    (r === void 0 || u === void 0) && ge(n, this.length - 8);
    const d = r + this[++n] * 2 ** 8 + this[++n] * 2 ** 16 + this[++n] * 2 ** 24, h = this[++n] + this[++n] * 2 ** 8 + this[++n] * 2 ** 16 + u * 2 ** 24;
    return BigInt(d) + (BigInt(h) << BigInt(32));
  }), l.prototype.readBigUInt64BE = re(function(n) {
    n = n >>> 0, de(n, "offset");
    const r = this[n], u = this[n + 7];
    (r === void 0 || u === void 0) && ge(n, this.length - 8);
    const d = r * 2 ** 24 + this[++n] * 2 ** 16 + this[++n] * 2 ** 8 + this[++n], h = this[++n] * 2 ** 24 + this[++n] * 2 ** 16 + this[++n] * 2 ** 8 + u;
    return (BigInt(d) << BigInt(32)) + BigInt(h);
  }), l.prototype.readIntLE = function(n, r, u) {
    n = n >>> 0, r = r >>> 0, u || j(n, r, this.length);
    let d = this[n], h = 1, m = 0;
    for (; ++m < r && (h *= 256); )
      d += this[n + m] * h;
    return h *= 128, d >= h && (d -= Math.pow(2, 8 * r)), d;
  }, l.prototype.readIntBE = function(n, r, u) {
    n = n >>> 0, r = r >>> 0, u || j(n, r, this.length);
    let d = r, h = 1, m = this[n + --d];
    for (; d > 0 && (h *= 256); )
      m += this[n + --d] * h;
    return h *= 128, m >= h && (m -= Math.pow(2, 8 * r)), m;
  }, l.prototype.readInt8 = function(n, r) {
    return n = n >>> 0, r || j(n, 1, this.length), this[n] & 128 ? (255 - this[n] + 1) * -1 : this[n];
  }, l.prototype.readInt16LE = function(n, r) {
    n = n >>> 0, r || j(n, 2, this.length);
    const u = this[n] | this[n + 1] << 8;
    return u & 32768 ? u | 4294901760 : u;
  }, l.prototype.readInt16BE = function(n, r) {
    n = n >>> 0, r || j(n, 2, this.length);
    const u = this[n + 1] | this[n] << 8;
    return u & 32768 ? u | 4294901760 : u;
  }, l.prototype.readInt32LE = function(n, r) {
    return n = n >>> 0, r || j(n, 4, this.length), this[n] | this[n + 1] << 8 | this[n + 2] << 16 | this[n + 3] << 24;
  }, l.prototype.readInt32BE = function(n, r) {
    return n = n >>> 0, r || j(n, 4, this.length), this[n] << 24 | this[n + 1] << 16 | this[n + 2] << 8 | this[n + 3];
  }, l.prototype.readBigInt64LE = re(function(n) {
    n = n >>> 0, de(n, "offset");
    const r = this[n], u = this[n + 7];
    (r === void 0 || u === void 0) && ge(n, this.length - 8);
    const d = this[n + 4] + this[n + 5] * 2 ** 8 + this[n + 6] * 2 ** 16 + (u << 24);
    return (BigInt(d) << BigInt(32)) + BigInt(r + this[++n] * 2 ** 8 + this[++n] * 2 ** 16 + this[++n] * 2 ** 24);
  }), l.prototype.readBigInt64BE = re(function(n) {
    n = n >>> 0, de(n, "offset");
    const r = this[n], u = this[n + 7];
    (r === void 0 || u === void 0) && ge(n, this.length - 8);
    const d = (r << 24) + // Overflow
    this[++n] * 2 ** 16 + this[++n] * 2 ** 8 + this[++n];
    return (BigInt(d) << BigInt(32)) + BigInt(this[++n] * 2 ** 24 + this[++n] * 2 ** 16 + this[++n] * 2 ** 8 + u);
  }), l.prototype.readFloatLE = function(n, r) {
    return n = n >>> 0, r || j(n, 4, this.length), i.read(this, n, !0, 23, 4);
  }, l.prototype.readFloatBE = function(n, r) {
    return n = n >>> 0, r || j(n, 4, this.length), i.read(this, n, !1, 23, 4);
  }, l.prototype.readDoubleLE = function(n, r) {
    return n = n >>> 0, r || j(n, 8, this.length), i.read(this, n, !0, 52, 8);
  }, l.prototype.readDoubleBE = function(n, r) {
    return n = n >>> 0, r || j(n, 8, this.length), i.read(this, n, !1, 52, 8);
  };
  function z(s, n, r, u, d, h) {
    if (!l.isBuffer(s)) throw new TypeError('"buffer" argument must be a Buffer instance');
    if (n > d || n < h) throw new RangeError('"value" argument is out of bounds');
    if (r + u > s.length) throw new RangeError("Index out of range");
  }
  l.prototype.writeUintLE = l.prototype.writeUIntLE = function(n, r, u, d) {
    if (n = +n, r = r >>> 0, u = u >>> 0, !d) {
      const T = Math.pow(2, 8 * u) - 1;
      z(this, n, r, u, T, 0);
    }
    let h = 1, m = 0;
    for (this[r] = n & 255; ++m < u && (h *= 256); )
      this[r + m] = n / h & 255;
    return r + u;
  }, l.prototype.writeUintBE = l.prototype.writeUIntBE = function(n, r, u, d) {
    if (n = +n, r = r >>> 0, u = u >>> 0, !d) {
      const T = Math.pow(2, 8 * u) - 1;
      z(this, n, r, u, T, 0);
    }
    let h = u - 1, m = 1;
    for (this[r + h] = n & 255; --h >= 0 && (m *= 256); )
      this[r + h] = n / m & 255;
    return r + u;
  }, l.prototype.writeUint8 = l.prototype.writeUInt8 = function(n, r, u) {
    return n = +n, r = r >>> 0, u || z(this, n, r, 1, 255, 0), this[r] = n & 255, r + 1;
  }, l.prototype.writeUint16LE = l.prototype.writeUInt16LE = function(n, r, u) {
    return n = +n, r = r >>> 0, u || z(this, n, r, 2, 65535, 0), this[r] = n & 255, this[r + 1] = n >>> 8, r + 2;
  }, l.prototype.writeUint16BE = l.prototype.writeUInt16BE = function(n, r, u) {
    return n = +n, r = r >>> 0, u || z(this, n, r, 2, 65535, 0), this[r] = n >>> 8, this[r + 1] = n & 255, r + 2;
  }, l.prototype.writeUint32LE = l.prototype.writeUInt32LE = function(n, r, u) {
    return n = +n, r = r >>> 0, u || z(this, n, r, 4, 4294967295, 0), this[r + 3] = n >>> 24, this[r + 2] = n >>> 16, this[r + 1] = n >>> 8, this[r] = n & 255, r + 4;
  }, l.prototype.writeUint32BE = l.prototype.writeUInt32BE = function(n, r, u) {
    return n = +n, r = r >>> 0, u || z(this, n, r, 4, 4294967295, 0), this[r] = n >>> 24, this[r + 1] = n >>> 16, this[r + 2] = n >>> 8, this[r + 3] = n & 255, r + 4;
  };
  function dt(s, n, r, u, d) {
    bt(n, u, d, s, r, 7);
    let h = Number(n & BigInt(4294967295));
    s[r++] = h, h = h >> 8, s[r++] = h, h = h >> 8, s[r++] = h, h = h >> 8, s[r++] = h;
    let m = Number(n >> BigInt(32) & BigInt(4294967295));
    return s[r++] = m, m = m >> 8, s[r++] = m, m = m >> 8, s[r++] = m, m = m >> 8, s[r++] = m, r;
  }
  function ht(s, n, r, u, d) {
    bt(n, u, d, s, r, 7);
    let h = Number(n & BigInt(4294967295));
    s[r + 7] = h, h = h >> 8, s[r + 6] = h, h = h >> 8, s[r + 5] = h, h = h >> 8, s[r + 4] = h;
    let m = Number(n >> BigInt(32) & BigInt(4294967295));
    return s[r + 3] = m, m = m >> 8, s[r + 2] = m, m = m >> 8, s[r + 1] = m, m = m >> 8, s[r] = m, r + 8;
  }
  l.prototype.writeBigUInt64LE = re(function(n, r = 0) {
    return dt(this, n, r, BigInt(0), BigInt("0xffffffffffffffff"));
  }), l.prototype.writeBigUInt64BE = re(function(n, r = 0) {
    return ht(this, n, r, BigInt(0), BigInt("0xffffffffffffffff"));
  }), l.prototype.writeIntLE = function(n, r, u, d) {
    if (n = +n, r = r >>> 0, !d) {
      const v = Math.pow(2, 8 * u - 1);
      z(this, n, r, u, v - 1, -v);
    }
    let h = 0, m = 1, T = 0;
    for (this[r] = n & 255; ++h < u && (m *= 256); )
      n < 0 && T === 0 && this[r + h - 1] !== 0 && (T = 1), this[r + h] = (n / m >> 0) - T & 255;
    return r + u;
  }, l.prototype.writeIntBE = function(n, r, u, d) {
    if (n = +n, r = r >>> 0, !d) {
      const v = Math.pow(2, 8 * u - 1);
      z(this, n, r, u, v - 1, -v);
    }
    let h = u - 1, m = 1, T = 0;
    for (this[r + h] = n & 255; --h >= 0 && (m *= 256); )
      n < 0 && T === 0 && this[r + h + 1] !== 0 && (T = 1), this[r + h] = (n / m >> 0) - T & 255;
    return r + u;
  }, l.prototype.writeInt8 = function(n, r, u) {
    return n = +n, r = r >>> 0, u || z(this, n, r, 1, 127, -128), n < 0 && (n = 255 + n + 1), this[r] = n & 255, r + 1;
  }, l.prototype.writeInt16LE = function(n, r, u) {
    return n = +n, r = r >>> 0, u || z(this, n, r, 2, 32767, -32768), this[r] = n & 255, this[r + 1] = n >>> 8, r + 2;
  }, l.prototype.writeInt16BE = function(n, r, u) {
    return n = +n, r = r >>> 0, u || z(this, n, r, 2, 32767, -32768), this[r] = n >>> 8, this[r + 1] = n & 255, r + 2;
  }, l.prototype.writeInt32LE = function(n, r, u) {
    return n = +n, r = r >>> 0, u || z(this, n, r, 4, 2147483647, -2147483648), this[r] = n & 255, this[r + 1] = n >>> 8, this[r + 2] = n >>> 16, this[r + 3] = n >>> 24, r + 4;
  }, l.prototype.writeInt32BE = function(n, r, u) {
    return n = +n, r = r >>> 0, u || z(this, n, r, 4, 2147483647, -2147483648), n < 0 && (n = 4294967295 + n + 1), this[r] = n >>> 24, this[r + 1] = n >>> 16, this[r + 2] = n >>> 8, this[r + 3] = n & 255, r + 4;
  }, l.prototype.writeBigInt64LE = re(function(n, r = 0) {
    return dt(this, n, r, -BigInt("0x8000000000000000"), BigInt("0x7fffffffffffffff"));
  }), l.prototype.writeBigInt64BE = re(function(n, r = 0) {
    return ht(this, n, r, -BigInt("0x8000000000000000"), BigInt("0x7fffffffffffffff"));
  });
  function pt(s, n, r, u, d, h) {
    if (r + u > s.length) throw new RangeError("Index out of range");
    if (r < 0) throw new RangeError("Index out of range");
  }
  function yt(s, n, r, u, d) {
    return n = +n, r = r >>> 0, d || pt(s, n, r, 4), i.write(s, n, r, u, 23, 4), r + 4;
  }
  l.prototype.writeFloatLE = function(n, r, u) {
    return yt(this, n, r, !0, u);
  }, l.prototype.writeFloatBE = function(n, r, u) {
    return yt(this, n, r, !1, u);
  };
  function mt(s, n, r, u, d) {
    return n = +n, r = r >>> 0, d || pt(s, n, r, 8), i.write(s, n, r, u, 52, 8), r + 8;
  }
  l.prototype.writeDoubleLE = function(n, r, u) {
    return mt(this, n, r, !0, u);
  }, l.prototype.writeDoubleBE = function(n, r, u) {
    return mt(this, n, r, !1, u);
  }, l.prototype.copy = function(n, r, u, d) {
    if (!l.isBuffer(n)) throw new TypeError("argument should be a Buffer");
    if (u || (u = 0), !d && d !== 0 && (d = this.length), r >= n.length && (r = n.length), r || (r = 0), d > 0 && d < u && (d = u), d === u || n.length === 0 || this.length === 0) return 0;
    if (r < 0)
      throw new RangeError("targetStart out of bounds");
    if (u < 0 || u >= this.length) throw new RangeError("Index out of range");
    if (d < 0) throw new RangeError("sourceEnd out of bounds");
    d > this.length && (d = this.length), n.length - r < d - u && (d = n.length - r + u);
    const h = d - u;
    return this === n && typeof Uint8Array.prototype.copyWithin == "function" ? this.copyWithin(r, u, d) : Uint8Array.prototype.set.call(
      n,
      this.subarray(u, d),
      r
    ), h;
  }, l.prototype.fill = function(n, r, u, d) {
    if (typeof n == "string") {
      if (typeof r == "string" ? (d = r, r = 0, u = this.length) : typeof u == "string" && (d = u, u = this.length), d !== void 0 && typeof d != "string")
        throw new TypeError("encoding must be a string");
      if (typeof d == "string" && !l.isEncoding(d))
        throw new TypeError("Unknown encoding: " + d);
      if (n.length === 1) {
        const m = n.charCodeAt(0);
        (d === "utf8" && m < 128 || d === "latin1") && (n = m);
      }
    } else typeof n == "number" ? n = n & 255 : typeof n == "boolean" && (n = Number(n));
    if (r < 0 || this.length < r || this.length < u)
      throw new RangeError("Out of range index");
    if (u <= r)
      return this;
    r = r >>> 0, u = u === void 0 ? this.length : u >>> 0, n || (n = 0);
    let h;
    if (typeof n == "number")
      for (h = r; h < u; ++h)
        this[h] = n;
    else {
      const m = l.isBuffer(n) ? n : l.from(n, d), T = m.length;
      if (T === 0)
        throw new TypeError('The value "' + n + '" is invalid for argument "value"');
      for (h = 0; h < u - r; ++h)
        this[h + r] = m[h % T];
    }
    return this;
  };
  const fe = {};
  function Le(s, n, r) {
    fe[s] = class extends r {
      constructor() {
        super(), Object.defineProperty(this, "message", {
          value: n.apply(this, arguments),
          writable: !0,
          configurable: !0
        }), this.name = `${this.name} [${s}]`, this.stack, delete this.name;
      }
      get code() {
        return s;
      }
      set code(d) {
        Object.defineProperty(this, "code", {
          configurable: !0,
          enumerable: !0,
          value: d,
          writable: !0
        });
      }
      toString() {
        return `${this.name} [${s}]: ${this.message}`;
      }
    };
  }
  Le(
    "ERR_BUFFER_OUT_OF_BOUNDS",
    function(s) {
      return s ? `${s} is outside of buffer bounds` : "Attempt to access memory outside buffer bounds";
    },
    RangeError
  ), Le(
    "ERR_INVALID_ARG_TYPE",
    function(s, n) {
      return `The "${s}" argument must be of type number. Received type ${typeof n}`;
    },
    TypeError
  ), Le(
    "ERR_OUT_OF_RANGE",
    function(s, n, r) {
      let u = `The value of "${s}" is out of range.`, d = r;
      return Number.isInteger(r) && Math.abs(r) > 2 ** 32 ? d = gt(String(r)) : typeof r == "bigint" && (d = String(r), (r > BigInt(2) ** BigInt(32) || r < -(BigInt(2) ** BigInt(32))) && (d = gt(d)), d += "n"), u += ` It must be ${n}. Received ${d}`, u;
    },
    RangeError
  );
  function gt(s) {
    let n = "", r = s.length;
    const u = s[0] === "-" ? 1 : 0;
    for (; r >= u + 4; r -= 3)
      n = `_${s.slice(r - 3, r)}${n}`;
    return `${s.slice(0, r)}${n}`;
  }
  function xn(s, n, r) {
    de(n, "offset"), (s[n] === void 0 || s[n + r] === void 0) && ge(n, s.length - (r + 1));
  }
  function bt(s, n, r, u, d, h) {
    if (s > r || s < n) {
      const m = typeof n == "bigint" ? "n" : "";
      let T;
      throw n === 0 || n === BigInt(0) ? T = `>= 0${m} and < 2${m} ** ${(h + 1) * 8}${m}` : T = `>= -(2${m} ** ${(h + 1) * 8 - 1}${m}) and < 2 ** ${(h + 1) * 8 - 1}${m}`, new fe.ERR_OUT_OF_RANGE("value", T, s);
    }
    xn(u, d, h);
  }
  function de(s, n) {
    if (typeof s != "number")
      throw new fe.ERR_INVALID_ARG_TYPE(n, "number", s);
  }
  function ge(s, n, r) {
    throw Math.floor(s) !== s ? (de(s, r), new fe.ERR_OUT_OF_RANGE("offset", "an integer", s)) : n < 0 ? new fe.ERR_BUFFER_OUT_OF_BOUNDS() : new fe.ERR_OUT_OF_RANGE(
      "offset",
      `>= 0 and <= ${n}`,
      s
    );
  }
  const En = /[^+/0-9A-Za-z-_]/g;
  function Bn(s) {
    if (s = s.split("=")[0], s = s.trim().replace(En, ""), s.length < 2) return "";
    for (; s.length % 4 !== 0; )
      s = s + "=";
    return s;
  }
  function Pe(s, n) {
    n = n || 1 / 0;
    let r;
    const u = s.length;
    let d = null;
    const h = [];
    for (let m = 0; m < u; ++m) {
      if (r = s.charCodeAt(m), r > 55295 && r < 57344) {
        if (!d) {
          if (r > 56319) {
            (n -= 3) > -1 && h.push(239, 191, 189);
            continue;
          } else if (m + 1 === u) {
            (n -= 3) > -1 && h.push(239, 191, 189);
            continue;
          }
          d = r;
          continue;
        }
        if (r < 56320) {
          (n -= 3) > -1 && h.push(239, 191, 189), d = r;
          continue;
        }
        r = (d - 55296 << 10 | r - 56320) + 65536;
      } else d && (n -= 3) > -1 && h.push(239, 191, 189);
      if (d = null, r < 128) {
        if ((n -= 1) < 0) break;
        h.push(r);
      } else if (r < 2048) {
        if ((n -= 2) < 0) break;
        h.push(
          r >> 6 | 192,
          r & 63 | 128
        );
      } else if (r < 65536) {
        if ((n -= 3) < 0) break;
        h.push(
          r >> 12 | 224,
          r >> 6 & 63 | 128,
          r & 63 | 128
        );
      } else if (r < 1114112) {
        if ((n -= 4) < 0) break;
        h.push(
          r >> 18 | 240,
          r >> 12 & 63 | 128,
          r >> 6 & 63 | 128,
          r & 63 | 128
        );
      } else
        throw new Error("Invalid code point");
    }
    return h;
  }
  function Sn(s) {
    const n = [];
    for (let r = 0; r < s.length; ++r)
      n.push(s.charCodeAt(r) & 255);
    return n;
  }
  function An(s, n) {
    let r, u, d;
    const h = [];
    for (let m = 0; m < s.length && !((n -= 2) < 0); ++m)
      r = s.charCodeAt(m), u = r >> 8, d = r % 256, h.push(d), h.push(u);
    return h;
  }
  function wt(s) {
    return t.toByteArray(Bn(s));
  }
  function Re(s, n, r, u) {
    let d;
    for (d = 0; d < u && !(d + r >= n.length || d >= s.length); ++d)
      n[d + r] = s[d];
    return d;
  }
  function _(s, n) {
    return s instanceof n || s != null && s.constructor != null && s.constructor.name != null && s.constructor.name === n.name;
  }
  function qe(s) {
    return s !== s;
  }
  const Rn = function() {
    const s = "0123456789abcdef", n = new Array(256);
    for (let r = 0; r < 16; ++r) {
      const u = r * 16;
      for (let d = 0; d < 16; ++d)
        n[u + d] = s[r] + s[d];
    }
    return n;
  }();
  function re(s) {
    return typeof BigInt > "u" ? In : s;
  }
  function In() {
    throw new Error("BigInt not supported");
  }
})(ce);
const Mi = { class: "form-control w-full" }, ji = {
  key: 0,
  class: "label"
}, Hi = { class: "label-text" }, Vi = {
  key: 1,
  class: "mb-2 w-full p-2 border border-base-300 rounded-xl flex"
}, zi = ["accept", "disabled", "required", "type", "id", "name"], Wi = {
  key: 2,
  class: "label"
}, Ji = { class: "label-text-alt" }, Ki = {
  key: 3,
  class: "label"
}, Gi = { class: "label-text-alt" };
window.Buffer = window.Buffer || ce.Buffer;
const Xi = {
  data() {
    return {
      value: this.$props.xvalue
    };
  },
  methods: {
    onSelect(e) {
      const t = e.target.files[0], i = new FileReader();
      i.readAsDataURL(t), i.onload = () => {
        var o = i.result;
        typeof o == "object" && (o = o, o = ce.Buffer.from(o).toString("base64")), this.value = o, this.$emit("onselect", o);
      }, i.onerror = (o) => {
        console.log("Error: ", o);
      };
    }
  }
}, Ss = /* @__PURE__ */ P({
  ...Xi,
  __name: "File",
  props: {
    hint: {},
    error: {},
    id: { type: String },
    name: { type: String },
    type: { type: String, default: "file" },
    title: { type: String, required: !0 },
    placeholder: { type: String },
    required: { type: Boolean, default: !1 },
    accept: { type: String, default: "" },
    collapsed: { type: Boolean, default: !1 },
    xvalue: { type: String || null },
    disabled: { type: Boolean, default: !1 }
  },
  emits: ["onselect"],
  setup(e) {
    return (t, i) => (E(), B("label", Mi, [
      e.collapsed ? $("", !0) : (E(), B("div", ji, [
        A("span", Hi, F(e.title) + F(e.required ? "*" : ""), 1)
      ])),
      e.placeholder ? (E(), B("div", Vi, [
        A("p", null, F(e.placeholder), 1)
      ])) : $("", !0),
      se(A("input", {
        accept: e.accept,
        onChange: i[0] || (i[0] = //@ts-ignore
        (...o) => t.onSelect && t.onSelect(...o)),
        class: L({
          "file-input file-input-bordered w-full": !e.error,
          "file-input file-input-bordered file-input-error w-full": e.error
        }),
        disabled: e.disabled,
        required: e.required,
        "onUpdate:modelValue": i[1] || (i[1] = (o) => t.value = o),
        type: e.type,
        id: e.id,
        name: e.name
      }, null, 42, zi), [
        [xe, t.value]
      ]),
      e.hint && !e.error ? (E(), B("div", Wi, [
        A("span", Ji, F(e.hint), 1)
      ])) : $("", !0),
      e.error ? (E(), B("div", Ki, [
        A("span", Gi, F(e.error), 1)
      ])) : $("", !0)
    ]));
  }
}), Yi = { class: "form-control w-full" }, Zi = {
  key: 0,
  class: "label"
}, Qi = { class: "label-text" }, _i = {
  key: 1,
  class: "mb-2 w-full p-2 border border-base-300 rounded-xl flex"
}, eo = ["src"], to = ["accept", "disabled", "required", "type", "id", "name"], no = {
  key: 2,
  class: "label"
}, ro = { class: "label-text-alt" }, io = {
  key: 3,
  class: "label"
}, oo = { class: "label-text-alt" };
window.Buffer = window.Buffer || ce.Buffer;
const so = {
  data() {
    return {
      value: this.$props.xvalue
    };
  },
  methods: {
    onSelect(e) {
      const t = e.target.files[0], i = new FileReader();
      i.readAsDataURL(t), i.onload = () => {
        var o = i.result;
        typeof o == "object" && (o = o, o = ce.Buffer.from(o).toString("base64")), this.value = o, this.$emit("onselect", o);
      }, i.onerror = (o) => {
        console.log("Error: ", o);
      };
    }
  }
}, As = /* @__PURE__ */ P({
  ...so,
  __name: "Image",
  props: {
    hint: {},
    error: {},
    id: { type: String },
    name: { type: String },
    type: { type: String, default: "file" },
    title: { type: String, required: !0 },
    placeholder: { type: String },
    required: { type: Boolean, default: !1 },
    accept: { type: String, default: "image/*" },
    collapsed: { type: Boolean, default: !1 },
    xvalue: { type: String || null },
    disabled: { type: Boolean, default: !1 }
  },
  emits: ["onselect"],
  setup(e) {
    return (t, i) => (E(), B("label", Yi, [
      e.collapsed ? $("", !0) : (E(), B("div", Zi, [
        A("span", Qi, F(e.title) + F(e.required ? "*" : ""), 1)
      ])),
      t.value || e.placeholder ? (E(), B("div", _i, [
        A("img", {
          src: t.value ?? e.placeholder,
          class: "w-full h-full max-h-56 object-contain"
        }, null, 8, eo)
      ])) : $("", !0),
      se(A("input", {
        accept: e.accept,
        onChange: i[0] || (i[0] = //@ts-ignore
        (...o) => t.onSelect && t.onSelect(...o)),
        class: L({
          "file-input file-input-bordered w-full": !e.error,
          "file-input file-input-bordered file-input-error w-full": e.error
        }),
        disabled: e.disabled,
        required: e.required,
        "onUpdate:modelValue": i[1] || (i[1] = (o) => t.value = o),
        type: e.type,
        id: e.id,
        name: e.name
      }, null, 42, to), [
        [xe, t.value]
      ]),
      e.hint && !e.error ? (E(), B("div", no, [
        A("span", ro, F(e.hint), 1)
      ])) : $("", !0),
      e.error ? (E(), B("div", io, [
        A("span", oo, F(e.error), 1)
      ])) : $("", !0)
    ]));
  }
}), ao = { class: "form-control w-full" }, lo = {
  key: 0,
  class: "label"
}, uo = { class: "label-text" }, co = {
  key: 1,
  class: "mb-2 w-full p-2 border border-base-300 rounded-xl flex"
}, fo = ["src"], ho = ["accept", "disabled", "required", "type", "id", "name"], po = {
  key: 2,
  class: "label"
}, yo = { class: "label-text-alt" }, mo = {
  key: 3,
  class: "label"
}, go = { class: "label-text-alt" };
window.Buffer = window.Buffer || ce.Buffer;
const bo = {
  data() {
    return {
      value: this.$props.xvalue
    };
  },
  methods: {
    onSelect(e) {
      const t = e.target.files;
      var i = new Array(), o = 0;
      for (var a in t) {
        const c = t[a];
        if (typeof c == "number" || typeof c != "object")
          continue;
        const f = new FileReader();
        f.readAsDataURL(c), f.onload = () => {
          var l = f.result;
          typeof l == "object" && (l = l, l = ce.Buffer.from(l).toString("base64")), i.push(l), o++, o >= t.length && (this.value = i, this.$emit("onselect", {
            images: i
          }));
        }, f.onerror = (l) => {
          console.log("Error: ", l);
        };
      }
    }
  }
}, Rs = /* @__PURE__ */ P({
  ...bo,
  __name: "Images",
  props: {
    hint: {},
    error: {},
    id: { type: String },
    name: { type: String },
    type: { type: String, default: "file" },
    title: { type: String, required: !0 },
    placeholder: { type: Array },
    required: { type: Boolean, default: !1 },
    accept: { type: String, default: "image/*" },
    collapsed: { type: Boolean, default: !1 },
    xvalue: { type: Array || null },
    disabled: { type: Boolean, default: !1 }
  },
  emits: ["onselect"],
  setup(e) {
    return (t, i) => (E(), B("label", ao, [
      e.collapsed ? $("", !0) : (E(), B("div", lo, [
        A("span", uo, F(e.title) + F(e.required ? "*" : ""), 1)
      ])),
      e.placeholder && !t.value ? (E(), B("div", co, [
        (E(!0), B(pe, null, rt(e.placeholder, (o) => (E(), B("img", {
          src: o.toString(),
          class: "w-full h-full max-h-56 object-contain"
        }, null, 8, fo))), 256))
      ])) : $("", !0),
      se(A("input", {
        multiple: "",
        accept: e.accept,
        onChange: i[0] || (i[0] = //@ts-ignore
        (...o) => t.onSelect && t.onSelect(...o)),
        class: L({
          "file-input file-input-bordered w-full": !e.error,
          "file-input file-input-bordered file-input-error w-full": e.error
        }),
        disabled: e.disabled,
        required: e.required,
        "onUpdate:modelValue": i[1] || (i[1] = (o) => t.value = o),
        type: e.type,
        id: e.id,
        name: e.name
      }, null, 42, ho), [
        [xe, t.value]
      ]),
      e.hint && !e.error ? (E(), B("div", po, [
        A("span", yo, F(e.hint), 1)
      ])) : $("", !0),
      e.error ? (E(), B("div", mo, [
        A("span", go, F(e.error), 1)
      ])) : $("", !0)
    ]));
  }
}), wo = {
  key: 0,
  class: "fixed inset-0 z-50 flex flex-col items-center justify-center pointer-events-auto"
}, xo = {
  watch: {
    open: function(e, t) {
      e ? (document.getElementsByTagName("body")[0].style.overflow = "hidden", document.getElementsByTagName("body")[0].style.pointerEvents = "none") : (document.getElementsByTagName("body")[0].style.overflow = "auto", document.getElementsByTagName("body")[0].style.pointerEvents = "auto");
    }
  },
  mounted() {
    var e;
    (e = this.$el.parentNode) == null || e.removeChild(this.$el), document.body.appendChild(this.$el), this.$props.open ? (document.getElementsByTagName("body")[0].style.overflow = "hidden", document.getElementsByTagName("body")[0].style.pointerEvents = "none") : (document.getElementsByTagName("body")[0].style.overflow = "auto", document.getElementsByTagName("body")[0].style.pointerEvents = "auto");
  },
  methods: {
    onClose: function() {
      this.$emit("onclose");
    }
  }
}, Eo = /* @__PURE__ */ P({
  ...xo,
  __name: "Modal",
  props: {
    open: { type: Boolean, default: !1 }
  },
  emits: ["onclose"],
  setup(e) {
    return (t, i) => e.open ? (E(), B("div", wo, [
      A("div", {
        onClick: i[0] || (i[0] = //@ts-ignore
        (...o) => t.onClose && t.onClose(...o)),
        class: "absolute bg-base-300 opacity-30 inset-0 -z-10"
      }),
      A("div", Cn(t.$attrs, { class: "max-w-lg w-full no-scroll-bar overflow-y-scroll bg-base-100" }), [
        H(t.$slots, "default")
      ], 16)
    ])) : $("", !0);
  }
});
function Bo(e) {
  return $n() ? (On(e), !0) : !1;
}
function ln(e) {
  return typeof e == "function" ? e() : V(e);
}
const So = typeof window < "u" && typeof document < "u";
typeof WorkerGlobalScope < "u" && globalThis instanceof WorkerGlobalScope;
const Ao = (e) => e != null, Je = () => {
};
function Ke(e) {
  var t;
  const i = ln(e);
  return (t = i == null ? void 0 : i.$el) != null ? t : i;
}
const un = So ? window : void 0;
function Ro() {
  const e = Z(!1), t = Un();
  return t && kn(() => {
    e.value = !0;
  }, t), e;
}
function Io(e) {
  const t = Ro();
  return Dt(() => (t.value, !!e()));
}
function To(e, t, i = {}) {
  const {
    root: o,
    rootMargin: a = "0px",
    threshold: c = 0.1,
    window: f = un,
    immediate: l = !0
  } = i, g = Io(() => f && "IntersectionObserver" in f), b = Dt(() => {
    const x = ln(e);
    return (Array.isArray(x) ? x : [x]).map(Ke).filter(Ao);
  });
  let y = Je;
  const w = Z(l), C = g.value ? Ee(
    () => [b.value, Ke(o), w.value],
    ([x, S]) => {
      if (y(), !w.value || !x.length)
        return;
      const q = new IntersectionObserver(
        t,
        {
          root: Ke(S),
          rootMargin: a,
          threshold: c
        }
      );
      x.forEach((N) => N && q.observe(N)), y = () => {
        q.disconnect(), y = Je;
      };
    },
    { immediate: l, flush: "post" }
  ) : Je, R = () => {
    y(), C(), w.value = !1;
  };
  return Bo(R), {
    isSupported: g,
    isActive: w,
    pause() {
      y(), w.value = !1;
    },
    resume() {
      w.value = !0;
    },
    stop: R
  };
}
function De(e, t = {}) {
  const { window: i = un, scrollTarget: o, threshold: a = 0 } = t, c = Z(!1);
  return To(
    e,
    (f) => {
      let l = c.value, g = 0;
      for (const b of f)
        b.time >= g && (g = b.time, l = b.isIntersecting);
      c.value = l;
    },
    {
      root: o,
      window: i,
      threshold: a
    }
  ), c;
}
const Fo = /* @__PURE__ */ P({
  __name: "SlideUp",
  props: {
    repeat: { type: Boolean, default: !1 }
  },
  setup(e) {
    const t = Z(null), i = Z(!1), o = De(t);
    return Ee(o, function() {
      i.value = !0;
    }), (a, c) => (E(), B("div", {
      ref_key: "target",
      ref: t,
      class: L({
        "transition ease-in-out transform duration-300 opacity-0 translate-y-1/2": e.repeat ? !V(o) : !V(o) && !i.value,
        "transition ease-in-out transform duration-300 opacity-100 translate-y-0": e.repeat ? V(o) : V(o) || i.value
      })
    }, [
      H(a.$slots, "default")
    ], 2));
  }
}), Co = { class: "form-control w-full cursor-pointer" }, $o = {
  key: 0,
  class: "label"
}, Oo = { class: "label-text" }, Uo = {
  key: 1,
  class: "label"
}, ko = { class: "label-text-alt" }, No = {
  key: 2,
  class: "label"
}, vo = { class: "label-text-alt" }, Do = { class: "flex flex-col items-center justify-center p-4" }, Lo = {
  data() {
    return {
      value: this.$props.xvalue,
      modalIsOpen: !1
    };
  },
  methods: {
    openModal: function() {
      this.modalIsOpen = !0;
    },
    closeModal: function() {
      this.modalIsOpen = !1;
    },
    onChange: function(e) {
      this.value = e.date, this.$emit("onchange", e);
    },
    dateToString: function(e) {
      if (!e)
        return;
      let t = e.getDate().toString(), i = (e.getMonth() + 1).toString(), o = e.getFullYear();
      return parseInt(t) < 10 && (t = `0${t}`), parseInt(i) < 10 && (i = `0${i}`), t + "/" + i + "/" + o;
    }
  }
}, Is = /* @__PURE__ */ P({
  ...Lo,
  __name: "Date",
  props: {
    hint: {},
    error: {},
    id: { type: String },
    name: { type: String },
    title: { type: String, required: !0 },
    placeholder: { type: Date },
    required: { type: Boolean, default: !1 },
    collapsed: { type: Boolean, default: !1 },
    xvalue: { type: Date },
    modal: {},
    picker: {}
  },
  emits: ["onchange"],
  setup(e) {
    return (t, i) => (E(), B(pe, null, [
      A("label", Co, [
        e.collapsed ? $("", !0) : (E(), B("div", $o, [
          A("span", Oo, F(e.title) + F(e.required ? "*" : ""), 1)
        ])),
        A("div", {
          onClick: i[0] || (i[0] = //@ts-ignore
          (...o) => t.openModal && t.openModal(...o)),
          class: L({
            "input input-bordered w-full text-start flex flex-col justify-center": !e.error,
            "input input-bordered input-error w-full text-start flex flex-col justify-center": e.error
          })
        }, [
          A("p", null, [
            e.placeholder || t.value ? (E(), B(pe, { key: 0 }, [
              Ge(F(t.value ? t.dateToString(t.value) : t.dateToString(e.placeholder)), 1)
            ], 64)) : $("", !0),
            !e.placeholder && !t.value ? (E(), B(pe, { key: 1 }, [
              Ge(F(e.title), 1)
            ], 64)) : $("", !0)
          ])
        ], 2),
        e.hint && !e.error ? (E(), B("div", Uo, [
          A("span", ko, F(e.hint), 1)
        ])) : $("", !0),
        e.error ? (E(), B("div", No, [
          A("span", vo, F(e.error), 1)
        ])) : $("", !0)
      ]),
      Me(Eo, {
        class: L(e.modal),
        onOnclose: t.closeModal,
        open: t.modalIsOpen
      }, {
        default: Xe(() => [
          A("div", Do, [
            Me(Fo, null, {
              default: Xe(() => [
                Me(Bi, {
                  xdate: t.value,
                  class: L(e.picker),
                  onOnchange: t.onChange,
                  onOnday: t.closeModal
                }, null, 8, ["xdate", "class", "onOnchange", "onOnday"])
              ]),
              _: 1
            })
          ])
        ]),
        _: 1
      }, 8, ["class", "onOnclose", "open"])
    ], 64));
  }
}), Po = { class: "form-control w-full" }, qo = {
  key: 0,
  class: "label"
}, Mo = { class: "label-text" }, jo = ["disabled", "required", "id", "name"], Ho = {
  key: 1,
  class: "label"
}, Vo = { class: "label-text-alt" }, zo = {
  key: 2,
  class: "label"
}, Wo = { class: "label-text-alt" }, Jo = {
  data() {
    return {
      value: this.$props.xvalue
    };
  },
  methods: {
    onChange: function(e) {
      this.$emit("onchange", e);
    }
  }
}, Ts = /* @__PURE__ */ P({
  ...Jo,
  __name: "Select",
  props: {
    hint: {},
    error: {},
    id: { type: String },
    name: { type: String },
    title: { type: String, required: !0 },
    placeholder: { type: String },
    required: { type: Boolean, default: !1 },
    collapsed: { type: Boolean, default: !1 },
    xvalue: { type: String },
    disabled: { type: Boolean, default: !1 }
  },
  emits: ["onchange"],
  setup(e) {
    return (t, i) => (E(), B("label", Po, [
      e.collapsed ? $("", !0) : (E(), B("div", qo, [
        A("span", Mo, F(e.title) + F(e.required ? "*" : ""), 1)
      ])),
      se(A("select", {
        onChange: i[0] || (i[0] = //@ts-ignore
        (...o) => t.onChange && t.onChange(...o)),
        disabled: e.disabled,
        required: e.required,
        "onUpdate:modelValue": i[1] || (i[1] = (o) => t.value = o),
        id: e.id,
        name: e.name,
        class: L({
          "select select-bordered w-full": !e.error,
          "select select-bordered select-error w-full": e.error
        })
      }, [
        H(t.$slots, "default")
      ], 42, jo), [
        [Nn, t.value]
      ]),
      e.hint && !e.error ? (E(), B("div", Ho, [
        A("span", Vo, F(e.hint), 1)
      ])) : $("", !0),
      e.error ? (E(), B("div", zo, [
        A("span", Wo, F(e.error), 1)
      ])) : $("", !0)
    ]));
  }
}), Ko = ["value"], Go = {}, Fs = /* @__PURE__ */ P({
  ...Go,
  __name: "Option",
  props: {
    value: { required: !1 }
  },
  setup(e) {
    return (t, i) => (E(), B("option", {
      value: e.value,
      class: "px-4 py-2 text-base leading-7 bg-input outline-none w-full"
    }, [
      H(t.$slots, "default")
    ], 8, Ko));
  }
}), Xo = /* @__PURE__ */ P({
  __name: "Outline",
  props: {
    type: { type: String, default: void 0 },
    disabled: { type: Boolean, default: !1 }
  },
  setup(e) {
    return (t, i) => (E(), B("div", {
      class: L({
        badge: !e.type,
        "badge badge-outline badge-neutral": e.type == "neutral",
        "badge badge-outline badge-primary": e.type == "primary",
        "badge badge-outline badge-secondary": e.type == "secondary",
        "badge badge-outline badge-accent": e.type == "accent",
        "badge badge-outline badge-ghost": e.type == "ghost",
        "badge badge-outline badge-link": e.type == "link",
        "badge badge-outline badge-info": e.type == "info",
        "badge badge-outline badge-success": e.type == "success",
        "badge badge-outline badge-warning": e.type == "warning",
        "badge badge-outline badge-error": e.type == "error"
      })
    }, [
      H(t.$slots, "default")
    ], 2));
  }
}), Yo = { class: "flex flex-col items-start w-full" }, Zo = { class: "form-control w-full" }, Qo = {
  key: 0,
  class: "label"
}, _o = { class: "label-text" }, es = ["disabled", "required", "type", "id", "name", "placeholder"], ts = {
  key: 1,
  class: "label"
}, ns = { class: "label-text-alt" }, rs = {
  key: 2,
  class: "label"
}, is = { class: "label-text-alt" }, os = {
  key: 0,
  class: "flex flex-wrap gap-2 mt-2"
}, ss = {
  data() {
    return {
      value: this.$props.xvalue ?? [],
      vinput: ""
    };
  },
  methods: {
    onInput: function(e) {
      this.$emit("input", e);
    },
    add: function() {
      if (this.vinput && this.vinput != "") {
        var e = this.vinput.trim();
        e != "" && (this.value.push(e), this.vinput = "", this.onInput(this.value));
      }
    },
    remove: function(e) {
      var t = new Array();
      for (var i in this.value)
        i != e && t.push(this.value[Number(i)]);
      this.value = t, this.onInput(this.value);
    }
  }
}, Cs = /* @__PURE__ */ P({
  ...ss,
  __name: "KeyPoints",
  props: {
    hint: {},
    error: {},
    id: { type: String },
    name: { type: String },
    type: { type: String, default: "text" },
    title: { type: String, required: !0 },
    placeholder: { type: String },
    required: { type: Boolean, default: !1 },
    collapsed: { type: Boolean, default: !1 },
    xvalue: { required: !1, type: Array || null },
    disabled: { type: Boolean, default: !1 }
  },
  emits: ["input"],
  setup(e) {
    return (t, i) => (E(), B("div", Yo, [
      A("label", Zo, [
        e.collapsed ? $("", !0) : (E(), B("div", Qo, [
          A("span", _o, F(e.title) + F(e.required ? "*" : ""), 1)
        ])),
        se(A("input", {
          onKeyup: [
            i[0] || (i[0] = Bt(
              //@ts-ignore
              (...o) => t.add && t.add(...o),
              ["enter"]
            )),
            i[1] || (i[1] = Bt(
              //@ts-ignore
              (...o) => t.add && t.add(...o),
              ["native", "enter"]
            ))
          ],
          class: L({
            "input input-bordered w-full": !e.error,
            "input input-bordered input-error w-full": e.error
          }),
          disabled: e.disabled,
          required: e.required,
          "onUpdate:modelValue": i[2] || (i[2] = (o) => t.vinput = o),
          type: e.type,
          id: e.id,
          name: e.name,
          placeholder: e.placeholder ?? e.title
        }, null, 42, es), [
          [xe, t.vinput]
        ]),
        e.hint && !e.error ? (E(), B("div", ts, [
          A("span", ns, F(e.hint), 1)
        ])) : $("", !0),
        e.error ? (E(), B("div", rs, [
          A("span", is, F(e.error), 1)
        ])) : $("", !0)
      ]),
      t.value ? (E(), B("ul", os, [
        (E(!0), B(pe, null, rt(t.value, (o, a) => (E(), vn(Xo, {
          class: "cursor-pointer",
          onClick: (c) => t.remove(a)
        }, {
          default: Xe(() => [
            Ge(F(o), 1)
          ]),
          _: 2
        }, 1032, ["onClick"]))), 256))
      ])) : $("", !0)
    ]));
  }
}), as = { class: "flex flex-row items-center justify-between" }, ls = {
  mounted() {
    const e = document.getElementById("appbar"), t = document.getElementById("header"), i = document.getElementById("content");
    if (e && t ? t.style.paddingTop = e.clientHeight + "px" : e && i && (i.style.paddingTop = e.clientHeight + "px"), e) {
      const a = document.getElementsByClassName("top-safe");
      for (var o = 0; o < a.length; o++) {
        const c = a[o];
        c && (c.style.paddingTop = e.clientHeight + "px");
      }
    }
  }
}, $s = /* @__PURE__ */ P({
  ...ls,
  __name: "AppBar",
  props: {
    type: { type: String, default: "transparent" }
  },
  setup(e) {
    return (t, i) => (E(), B("div", {
      id: "appbar",
      class: L({
        "fixed left-0 right-0 flex flex-col p-4 bg-primary-500 text-primary-text z-10": e.type == "primary",
        "fixed left-0 right-0 flex flex-col p-4 bg-secondary-500 text-secondary-text z-10": e.type == "secondary",
        "fixed left-0 right-0 flex flex-col p-4 bg-neutral text-invert z-10": e.type == "neutral",
        "fixed left-0 right-0 flex flex-col p-4 bg-invert text-neutral z-10": e.type == "invert",
        "fixed left-0 right-0 flex flex-col bg-background text-invert p-4 z-10": e.type == "background",
        "fixed left-0 right-0 flex flex-col p-4 z-10": e.type == "transparent",
        "fixed left-0 right-0 flex flex-col p-4 z-10 backdrop-blur-sm bg-opacity-70": e.type == "blur"
      })
    }, [
      A("div", as, [
        H(t.$slots, "leading"),
        H(t.$slots, "default")
      ])
    ], 2));
  }
}), us = {
  updated() {
    this.open ? this.openSideBar() : this.closeSideBar();
  },
  methods: {
    handleResize: function() {
      this.open ? this.openSideBar() : this.closeSideBar();
    },
    openSideBar: function() {
      const e = window.innerWidth, t = document.getElementById("sidebar"), i = document.getElementById("content"), o = document.getElementById("header"), a = document.getElementById("footer"), c = document.getElementById("appbar");
      if (t && i && (e < 1024 ? i.style.display = "none" : (i.style.display = "", i.style.paddingLeft = t.clientWidth + "px")), t && o && (e < 1024 ? o.style.display = "none" : (o.style.display = "", o.style.paddingLeft = t.clientWidth + "px")), t && a && (e < 1024 ? a.style.display = "none" : (a.style.display = "", a.style.paddingLeft = t.clientWidth + "px")), t && c && (e < 1024 ? c.style.display = "none" : (c.style.display = "", c.style.left = t.clientWidth + "px")), t) {
        const l = document.getElementsByClassName("left-safe");
        for (var f = 0; f < l.length; f++) {
          const g = l[f];
          g && (e < 1024 ? g.style.display = "none" : (g.style.display = "", g.style.paddingLeft = t.clientWidth + "px"));
        }
      }
    },
    closeSideBar: function() {
      const e = window.innerWidth, t = document.getElementById("sidebar"), i = document.getElementById("content"), o = document.getElementById("header"), a = document.getElementById("footer"), c = document.getElementById("appbar");
      if (t && i && (e < 1024 ? i.style.display = "" : (i.style.display = "", i.style.paddingLeft = "")), t && o && (e < 1024 ? o.style.display = "" : (o.style.display = "", o.style.paddingLeft = "")), t && a && (e < 1024 ? a.style.display = "" : (a.style.display = "", a.style.paddingLeft = "")), t && c && (e < 1024 ? c.style.display = "" : (c.style.display = "", c.style.left = "")), t) {
        const l = document.getElementsByClassName("left-safe");
        for (var f = 0; f < l.length; f++) {
          const g = l[f];
          g && (e < 1024 ? g.style.display = "" : (g.style.display = "", g.style.paddingLeft = ""));
        }
      }
    }
  },
  mounted() {
    window.addEventListener("resize", this.handleResize), this.open ? this.openSideBar() : this.closeSideBar();
  }
}, Os = /* @__PURE__ */ P({
  ...us,
  __name: "SideBar",
  props: {
    open: { type: Boolean }
  },
  setup(e) {
    return (t, i) => (E(), B("div", {
      id: "sidebar",
      class: L({
        "fixed left-0 top-0 bottom-0 flex flex-col bg-background w-full p-4 justify-between lg:max-w-xs right-0 lg:right-auto": e.open,
        "hidden fixed left-0 top-0 bottom-0 flex-col bg-background w-full p-4 justify-between lg:max-w-xs right-0 lg:right-auto": !e.open
      })
    }, [
      H(t.$slots, "leading"),
      H(t.$slots, "default")
    ], 2));
  }
}), Us = /* @__PURE__ */ P({
  __name: "Solid",
  props: {
    type: { type: String, default: void 0 },
    disabled: { type: Boolean, default: !1 }
  },
  setup(e) {
    return (t, i) => (E(), B("div", {
      class: L({
        badge: !e.type,
        "badge badge-neutral": e.type == "neutral",
        "badge badge-primary": e.type == "primary",
        "badge badge-secondary": e.type == "secondary",
        "badge badge-accent": e.type == "accent",
        "badge badge-ghost": e.type == "ghost",
        "badge badge-link": e.type == "link",
        "badge badge-info": e.type == "info",
        "badge badge-success": e.type == "success",
        "badge badge-warning": e.type == "warning",
        "badge badge-error": e.type == "error"
      })
    }, [
      H(t.$slots, "default")
    ], 2));
  }
}), cs = {}, fs = (e, t) => {
  const i = e.__vccOpts || e;
  for (const [o, a] of t)
    i[o] = a;
  return i;
}, ds = { class: "bg-clip-text text-transparent" };
function hs(e, t, i, o, a, c) {
  return E(), B("span", ds, [
    H(e.$slots, "default")
  ]);
}
const ks = /* @__PURE__ */ fs(cs, [["render", hs]]), Ns = /* @__PURE__ */ P({
  __name: "SlideDown",
  props: {
    repeat: { type: Boolean, default: !1 }
  },
  setup(e) {
    const t = Z(null), i = Z(!1), o = De(t);
    return Ee(o, function() {
      i.value = !0;
    }), (a, c) => (E(), B("div", {
      ref_key: "target",
      ref: t,
      class: L({
        "transition ease-in-out transform duration-300 opacity-0 -translate-y-1/2": e.repeat ? !V(o) : !V(o) && !i.value,
        "transition ease-in-out transform duration-300 opacity-100 translate-y-0": e.repeat ? V(o) : V(o) || i.value
      })
    }, [
      H(a.$slots, "default")
    ], 2));
  }
}), vs = /* @__PURE__ */ P({
  __name: "SlideLeft",
  props: {
    repeat: { type: Boolean, default: !1 }
  },
  setup(e) {
    const t = Z(null), i = Z(!1), o = De(t);
    return Ee(o, function() {
      i.value = !0;
    }), (a, c) => (E(), B("div", {
      ref_key: "target",
      ref: t,
      class: L({
        "transition ease-in-out transform duration-300 opacity-0 translate-x-1/2": e.repeat ? !V(o) : !V(o) && !i.value,
        "transition ease-in-out transform duration-300 opacity-100 translate-x-0": e.repeat ? V(o) : V(o) || i.value
      })
    }, [
      H(a.$slots, "default")
    ], 2));
  }
}), Ds = /* @__PURE__ */ P({
  __name: "SlideRight",
  props: {
    repeat: { type: Boolean, default: !1 }
  },
  setup(e) {
    const t = Z(null), i = Z(!1), o = De(t);
    return Ee(o, function() {
      i.value = !0;
    }), (a, c) => (E(), B("div", {
      ref_key: "target",
      ref: t,
      class: L({
        "transition ease-in-out transform duration-300 opacity-0 -translate-x-1/2": e.repeat ? !V(o) : !V(o) && !i.value,
        "transition ease-in-out transform duration-300 opacity-100 translate-x-0": e.repeat ? V(o) : V(o) || i.value
      })
    }, [
      H(a.$slots, "default")
    ], 2));
  }
});
export {
  Ns as AnimateSlideDown,
  vs as AnimateSlideLeft,
  Ds as AnimateSlideRight,
  Fo as AnimateSlideUp,
  $s as AppBar,
  ms as BSRequest,
  oe as BSResponse,
  Xo as BadgeOutline,
  Us as BadgeSolid,
  bs as ButtonOutline,
  gs as ButtonSolid,
  Is as InputDate,
  Bi as InputDatePicker,
  Ss as InputFile,
  As as InputImage,
  Rs as InputImages,
  Cs as InputKeyPoints,
  Ts as InputSelect,
  Fs as InputSelectOption,
  Es as InputText,
  xs as LinkOutline,
  ws as LinkSolid,
  li as LoadingOverlay,
  Eo as Modal,
  Os as SideBar,
  ks as TextGradient
};

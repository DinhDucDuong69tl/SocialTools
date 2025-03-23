var VUATRAFFIC_COM = document.getElementById("API_TRAFFIC_USER_NET");
VUATRAFFIC_COM.insertAdjacentHTML('beforebegin', '<KETQUA-CLICK-VUATRAFFIC id="ketqua_dautien_vuatraffic"></KETQUA-CLICK-VUATRAFFIC>');

var ID_ADMIN_TRAFFIC = VUATRAFFIC_COM.getAttribute("bit"); // Lấy thuộc tính "bit" của ID
var HRE = 'traffic-';
var YBF = 'user';
var DMT = '.net/';
var hkg = 'GET_';
var idk = 'VUATRAFFIC.';
var URL_Ref_Vuatraffic = document.referrer;
var URL_Goc_Vuatraffic = location.href;

var data_sen1 = URL_Goc_Vuatraffic + "," + URL_Ref_Vuatraffic;
var DATA_SEN = URL_Goc_Vuatraffic + "," + URL_Ref_Vuatraffic + ",IOS900,hidden," + ID_ADMIN_TRAFFIC;
var TR1 = 'php?data=';
var TR2 = 'php?token=';
var CLK = '&clk=' + sessionStorage.getItem('ymnclk');

// Gửi yêu cầu đến trang gắn code
var xhr = new XMLHttpRequest();
xhr.open('POST', '//' + HRE + YBF + DMT + hkg + idk + TR1 + DATA_SEN + CLK, true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onload = function () {
    let ketqua_dautien_vuatraffic = document.getElementById('ketqua_dautien_vuatraffic');
    ketqua_dautien_vuatraffic.innerHTML = this.responseText;
};
xhr.send('NO', '');

// Hàm kiểm tra chế độ ẩn danh và thực hiện hành động
function CLICK_VUATRAFFIC_COM() {
    var v = function () {
        return new Promise(function (e, o) {
            var n, r = "Unknown";

            function a(o) { e({ isPrivate: o, browserName: r }); }
            function i(e) { return e === eval.toString().length; }

            if ((n = navigator.vendor) && n.indexOf("Apple") === 0 && i(37)) {
                r = "Safari";
                if (navigator.maxTouchPoints) {
                    try {
                        var e = String(Math.random());
                        window.indexedDB.open(e, 1).onupgradeneeded = function (o) {
                            var t, n, r = o.target?.result;
                            try {
                                r.createObjectStore("test", { autoIncrement: !0 }).put(new Blob);
                                a(!1);
                            } catch (e) {
                                var i = e.message;
                                a(typeof i === "string" && /BlobURLs are not yet supported/.test(i));
                            } finally {
                                r.close();
                                window.indexedDB.deleteDatabase(e);
                            }
                        };
                    } catch (e) { a(!1); }
                }
            } else {
                var e = navigator.vendor;
                if (e && e.indexOf("Google") === 0 && i(33)) {
                    var t = navigator.userAgent;
                    r = t.match(/Chrome/) ? (navigator.brave ? "Brave" : t.match(/Edg/) ? "Edge" : t.match(/OPR/) ? "Opera" : "Chrome") : "Chromium";
                    if (navigator.webkitTemporaryStorage?.queryUsageAndQuota) {
                        navigator.webkitTemporaryStorage.queryUsageAndQuota(function (e, o) {
                            var t;
                            a(Math.round(o / 1048576) < 2 * Math.round(((t = window.performance?.memory?.jsHeapSizeLimit ?? 1073741824) / 1048576)));
                        }, function (e) { o(new Error("detectIncognito failed: " + e.message)); });
                    }
                }
            }
        });
    };

    return v().then((e) => {
        e.isPrivate ? alert("Vui lòng tắt chế độ ẩn danh") : _CLICK_VUATRAFFIC_COM();
    });
}

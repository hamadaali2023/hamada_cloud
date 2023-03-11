function checkformload() {
    function e() {
        $(".form-horizontal").each(function() {
            var e = $(this).attr("id");
            $("#" + e + " .btn:not(.cancel) , #" + e + " .btn:not(.cancel)").click(function(event) {
                console.log(event);
                if (void 0 !== e && !1 !== e) {
                    var r = [],
                        t = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                    return $('[id$="' + e + '"] input.required:not(:disabled), [id$="' + e + '"] textarea.required').each(function() {
                        var e = $(this).attr("placeholder");
                        "" == $(this).val() ? (r.push(e + " ضروري"), $(this).parent().addClass("has-error")) : $(this).hasClass("email") && (t.test($(this).val()) || (r.push(e + " غير صحيح"), $(this).parent().addClass("has-error")))
                    }), $('[id$="' + e + '"] .requiredcheck').length && $('[id$="' + e + '"] .requiredcheck').each(function() {
                        var e = jQuery(this);
                        e.find("input[type=checkbox]:checked").length > 0 ? e.removeClass("has-error") : (e.addClass("has-error"), r.push("Checkbox required"))
                    }), $('[id$="' + e + '"] select.form-control.required').each(function() {
                        var e = $(this).parent().prev("label").text();
                        "0" == $(this).val() ? (r.push(e + " ضروري"), $(this).parent().addClass("has-error")) : ($(this).parent().addClass("has-success"), $(this).parent().removeClass("has-error"))
                    }), r.length > 0 ? (cancelSubmit($(this)) , !1) : (r.length, !0)
                }
            })
        })
    }
    $(".form-control").focus(function() {
        $(this).parent().removeClass("has-error")
    }), $("input[type=checkbox]").focus(function() {
        $(this).closest(".requiredcheck").removeClass("has-error")
    }), $(document).ready(function() {
        e(), $(".OnlyLatin").length > 0 && ($(".OnlyLatin").focus(function() {
            $(this).tooltip({
                trigger: "focus",
                placement: "top",
                title: "الأحرف اللاتينية"
            }).tooltip("show")
        }), $(".OnlyLatin").on("keypress", function(e) {
            var r = /[A-Za-z \-]/g,
                t = String.fromCharCode(e.which);
            return !(8 != e.keyCode && 37 != e.keyCode && 39 != e.keyCode && !r.test(t))
        })), $(".OnlyArabic").length > 0 && ($(".OnlyArabic").focus(function() {
            $(this).tooltip({
                trigger: "focus",
                placement: "top",
                title: "الأحرف العربية"
            }).tooltip("show")
        }), $(".OnlyArabic").bind("keypress", function(e) {
            if (0 != e.charCode && 32 != e.charCode) {
                var r = new RegExp("^[؀-ۿ]|[ݐ-ݿ]|[ﭐ-ﰿ]|[ﹰ-ﻼ]+$"),
                    t = String.fromCharCode(e.charCode ? e.charCode : e.which);
                if (!r.test(t)) return e.preventDefault(), !1
            }
        })), $(".OnlyNbr").length > 0 && $(".OnlyNbr").bind("keypress", function(e) {
            if (0 != e.charCode && 32 != e.charCode) {
                var r = new RegExp("^[0-9+]+$"),
                    t = String.fromCharCode(e.charCode ? e.charCode : e.which);
                if (!r.test(t)) return e.preventDefault(), !1
            }
        }), $(".zipCode").length > 0 && ($(".zipCode").attr("maxlength", "5"), $(".zipCode").bind("keypress", function(e) {
            if (0 != e.charCode && 32 != e.charCode) {
                var r = new RegExp("^[0-9+]+$"),
                    t = String.fromCharCode(e.charCode ? e.charCode : e.which);
                if (!r.test(t)) return e.preventDefault(), !1
            }
        })), $(".phone, .mobile").length > 0 && ($(".phone, .mobile").attr("maxlength", "10"), $(".phone, .mobile").bind("keypress", function(e) {
            if (0 != e.charCode && 32 != e.charCode) {
                var r = new RegExp("^[0-9+]+$"),
                    t = String.fromCharCode(e.charCode ? e.charCode : e.which);
                if (!r.test(t)) return e.preventDefault(), !1
            }
        }))
    })
}
function murderEvent(evt) {
 evt.cancel=true;
 evt.returnValue=false;
 evt.cancelBubble=true;
 if (evt.stopPropagation) evt.stopPropagation();
 if (evt.preventDefault) evt.preventDefault();
 return false;
}
  function cancelSubmit(elem){
     console.log(elem);
    elem.addEventListener('submit', event => {
      event.preventDefault();
      // actual logic, e.g. validate the form
      console.log('Form submission cancelled.');
    });
 }
checkformload();

jQuery(function($) {

    //ห้ามกด f12
    document.keypress = function(event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }

    //ห้ามกด f12
    document.onmousedown = function(event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }

    //ห้ามกด f12
    document.onkeydown = function(event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }

    //ห้ามคลิกขวา
    $(document).on("contextmenu", function(e) {
        return false;
    });

    //ห้าม ctrl+v
    $(':input').on("cut copy paste", function(e) {
        e.preventDefault();
    });

    //เช็คตัวหนังอักษร
    $(".inputs").keypress(function(event) {
        var ew = event.which;
        var regex = /^[0-9]+$/;
        var isValid = regex.test(String.fromCharCode(ew));
        if (isValid) return false;
        if (48 <= ew && ew <= 57) return true;
        if (65 <= ew && ew <= 90) return true;
        if (97 <= ew && ew <= 122) return true;
        return false;
    });

    //เมื่อพิมพ์ 1 ตัว Cursor จะเด้งไปช่องต่อไป
    $(".inputs").keyup(function() {
        if (this.value.length == this.maxLength) {
            $(this).next('input').focus();
        }
    });

    //เมื่อลบ 1 ตัว Cursor จะเด้งถอยหลังกลับมา
    $(".inputs").keydown(function() {
        var key = event.keyCode || event.charCode;
        if (key == 8) {
            $(this).val("");
            $(this).prev('input').focus();
        }
    });

    //เช็คเมื่อกด Enter ในบริเวณโล่งๆ
    $(document).keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') validateEnter()
    });

    //เช็คเมื่อกด Enter ใน input 
    $(':input').keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') validateEnter()
    });

    //validate ค่าในช่องว่าว่างหรือไม่
    function validateEnter() {
        if ($('#c1').val() == "") {
            alert("โปรดกรอกให้ครบทุกช่อง");
        } else if ($('#c2').val() == "") {
            alert("โปรดกรอกให้ครบทุกช่อง");
        } else if ($('#c3').val() == "") {
            alert("โปรดกรอกให้ครบทุกช่อง");
        } else if ($('#c4').val() == "") {
            alert("โปรดกรอกให้ครบทุกช่อง");
        } else if ($('#c5').val() == "") {
            alert("โปรดกรอกให้ครบทุกช่อง");
        } else {
            value = $('#c1').val() + $('#c2').val() + $('#c3').val() + $('#c4').val() + $('#c5').val();
            translate(value, translated_area, from_lang = 'en', to_lang = 'th')
        }
    }

    //API แปลภาษา
    function translate(sentences, targetDiv, from_lang, to_lang) {
        $.ajax({
            url: 'https://translate.googleapis.com/translate_a/single',
            type: "get",
            data: {
                client: 'gtx',
                sl: from_lang,
                tl: to_lang,
                dt: 't',
                ie: 'UTF-8',
                oe: 'UTF-8',
                q: encodeURIComponent(sentences)
            },
            success: function(response) {
                text = response[0][0][0];
                var rex = /^[A-Za-z]*$/;
                if (rex.test(text[0])) {
                    console.log("ไม่พบคำแปล");
                } else {
                    // scoreup();
                    console.log(text);
                }

                $('h1#translated_area').text(text);
                $(document).find("input").val("").end();
                $('#c1').focus();
            }
        });
    }
});
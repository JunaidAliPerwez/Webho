
<script src="{{asset('web/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('web/js/jquery-ui-1.10.3.custom.min.js')}}"></script>
<script src="{{asset('web/js/tether.min.js')}}"></script>
<script src="{{asset('web/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('web/js/slick.js')}}"></script>
<script src="{{asset('web/js/slick.min.js')}}"></script>
<script src="{{asset('web/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('web/js/wow.min.js')}}"></script>
<script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('web/js/custom.js')}}"></script>
<script src="{{asset('web/js/popper.min.js')}}"></script>
<script src="{{asset('web/js/moment.min.js')}}"></script>


<script>

$(document).ready(function() {
	$(".uniq-logo-div-li").hover(function () {
	    $(".uniq-logo-div-li").removeClass("active");
	    // $(".tab").addClass("active"); // instead of this do the below
	    $(this).addClass("active");
	});
});

$(".open_modal").click(function () {

    //$("#packages").prop("disabled", false);

    $("#packages").find("option:selected").attr("selected", false);

    var pack_id = $(this).data("pack_id");

    $("#packages").find("option[value='" + pack_id + "']").attr("selected", true);

    //$("#packages").prop("disabled", true);

    //$("#popupformWebsite").modal("show");

});

$("#package_submit").click(function () {
    $("#package_form").submit();
});

$(".clickbutton").click(function () {
    $(".floatbutton").toggleClass("active");
}),
    $("#vbtn").on("click", function () {
        "View Less" != $(this).html() ? $(this).html("View Less") : $(this).html("View More..");
    });

function setButtonURL() {
    //$zopim.livechat.window.toggle();
}

$(function () {
    var hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab();
    $(".nav-tabs a").click(function (e) {
        $(this).tab();
        var scrollmem = $("body").scrollTop() || $("html").scrollTop();
        window.location.hash = this.hash;
        $("html,body").scrollTop(scrollmem);
    });

});

$(document).ready(function () {

    if (location.hash) {
        $("a[href='" + location.hash + "']").tab();
    }
    $(document.body).on("click", "a[data-toggle='tab']", function (event) {
        location.hash = this.getAttribute("href");
    });


    $('ul.nav-tabs > li').click(function (e) {
        $('ul.nav-tabs > li')
            .removeClass('active');
        $(this).addClass('active');
    });


});


$(window).on("popstate", function () {

    var anchor = location.hash || $("a[data-toggle='tab']").first().attr("href");

    $("a[href='" + anchor + "']").tab('show');


});

function order_now_value(objButton) {
    x = objButton.name;

    //document.getElementById("lead_area_popup").value = x;
    //document.getElementById("lead_text").innerHTML = x;


}

$(document).ready(function () {
    //var currentIP;
    var key = "5XpThOAEkfgOvEJ";
    var currentIP = $("meta[name=ip2loc]").attr("content");
    var pgurl = $("meta[name=page_url]").attr("content");
    $.ajax({
        method: "get",
        url: "//pro.ip-api.com/json/" + currentIP,
        data: { key: key },
        success: function (data) {
            if (data) {
                $("input[name=ip2loc_ip]").val(data.query);
                $("input[name=ip2loc_isp]").val(data.isp);
                $("input[name=ip2loc_org]").val(data.org);
                $("input[name=ip2loc_country]").val(data.country);
                $("input[name=ip2loc_region]").val(data.regionName);
                $("input[name=ip2loc_city]").val(data.city);
                $("input[name=pageurl]").val(pgurl);
                $("input[name=fullpageurl]").val(pgurl);
            }
        },
    });
});
$(".type_of_seo_boxes ul li a").on("click", function () {
    $(".type_of_seo_boxes ul li").removeClass("active");
    $(this).addClass("active");
});
$(document).ready(function () {
    $(".moreBox").slice(0, 3).show();
    if ($(".blogBox:hidden").length != 0) {
        $("#loadMore_port").show();
    }
    $("#loadMore_port").on("click", function (e) {
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 6).slideDown();
        if ($(".moreBox:hidden").length == 0) {
            $("#loadMore_port").fadeOut("slow");
        }
    });
});

</script>

<script type="text/javascript">
(function () {
    window["__CF$cv$params"] = {
    r: "6b3cbaa32c614b80",
    m: "WIrtLlHVdpV4opdhZHBKZlJXmDwS3fOI0_uSvCDULRM-1637862728-0-AZyq9Ce9ANxirY83Lnbr+XgaWLkSyMywCjeeIgHRc9G+YknGz0KS548dE2aiVEuk/fOYAIFUVI9Jfw7Lu8jMdG6C3XAFHm3SZcKDdGlkPSXtLC/62OMwhakhOvHrGqKuCA==",
    s: [0x3ae54ab0f1, 0xec31006453],
    u: "/cdn-cgi/challenge-platform/h/b",
};
})();</script>

</body>

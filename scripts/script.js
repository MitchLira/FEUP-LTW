$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return decodeURIComponent(results[1]) || 0;
};

$(setUp);

function setUp() {
    addDoms();
    handleDropdown();
    handleSearchbar();

    if ($('body').hasClass('create_account')) {
        validateRegister();
    }
    else if ($('body').hasClass('restaurant')) {
        handleAdditionalInfo();
    }
}


function addDoms() {
    if ($('body').hasClass('restaurant')) {
        $.getJSON("../scripts/restaurant.php", addReviewTextArea);
        addGoogleMaps();
    }
}


function addReviewTextArea(session) {
    var idRestaurant = $.urlParam('id');

    if (session.status == "reviewer") {
        var doms = 
            "<textarea name='review_text' rows=\"8\" cols=\"50\" form='review_form' placeholder=\"Write your review...\" ></textarea>" +
            "<form action='add_review.php' method='post' id='review_form' >" +
                "<input type='hidden' name='id' value='" + idRestaurant + "'>" +
                "<input type='hidden' name='username' value='" + session.username + "'>" +
                "<label>Rating:" +
                    "<input type='number' name='rating' value='0' min='0' max='5' step='0.5'>" +
                "</label>" +
                "<input id='btnSubmit' type='submit' value='Send'>" +
            "</form>";
        $("body").append(doms);
    }
}



function handleDropdown() {

    $("#btnDropdown").click(function() {
        $("#userDropdown").toggle();
    });

    $("body").click(function(event) {
        if (event.target.id != "btnDropdown") {
            $("#userDropdown").hide();
        }
    });
}


function handleSearchbar() {
    $("#textSearch").keyup(function(e) {
        if (e.which == 13) {      // Pressed ENTER
            $("#btnSearch").trigger('click');
        }
    });
}



function validateRegister() {

    $("input[name=username]").focusout(checkUserName);
    $("form input").keyup(checkValidRegister);
    $("input[type=date]").change(checkValidRegister);
} 


function checkUserName() {
    var user = $("input[name=username]").val();

    $.ajax ({
        url: "../scripts/valid_user_register.php",
        type: "get",
        data: { username : user },
        success: function(validUser) {

            if (validUser == "true") {
                $(".info").text("Username not yet in use!");
                $(".info").css("color", "green");
            }
            else {
                $(".info").text("Username already in use. Please choose a different one.");
                $(".info").css("color", "red");
            }
        }
    });
}


function checkValidRegister() {
    var empty = false;
    var button = $("input[name=submit]");

    $("form input").each(function() {
        if ($(this).val() === "") {
            empty = true;
            return false;
        }
    });

    if (empty) {
        button.prop("disabled", true);
    }
    else {
        button.prop("disabled", false);
    }
}


function handleAdditionalInfo() {
    $("#additionalInfo").hide();
    $("#btnAdditionalInfo").click(function() {
         $("#additionalInfo").slideToggle('slow', 'linear', function() {});
    });
}



function addGoogleMaps() {
    $.ajax ({
        url: "../scripts/google_maps_info.php",
        type: "get",
        data: { id : $.urlParam('id') },
        success: function(data) {
                var address = data.street + ", " + data.state + ", " +
                            data.city + ", " + data.country; 

                $(function() {
                    $("#map").googleMap({
                        zoom: 11    
                    });
                    $("#map").addMarker({
                        title: data.name,
                        address: address
                    });
                });
        }
    });
}
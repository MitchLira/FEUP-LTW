$(setUp);

function setUp() {
    addDoms();
}


function addDoms() {
    if ($('body').hasClass('restaurant')) {
        $.getJSON("scripts/restaurant.php", addReviewTextArea);
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


$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return decodeURIComponent(results[1]) || 0;
}
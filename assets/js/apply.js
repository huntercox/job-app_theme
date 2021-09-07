// Redirect form after submission
function redirectToThankYou() {
  window.location = 'https://localhost:3000/thank-you';
}

(function ($) {
  $(document).ready(function () {
    $('#phone').inputmask({ mask: "(999) 999-9999" });
    // Residency
    $('#currentState').inputmask({ mask: "AA" });
    $('#currentZipcode').inputmask({ mask: "99999" });
    $('#mailingState').inputmask({ mask: "AA" });
    $('#mailingZipcode').inputmask({ mask: "99999" });
    $('#prev1State').inputmask({ mask: "AA" });
    $('#prev1Zipcode').inputmask({ mask: "99999" });
    $('#prev2State').inputmask({ mask: "AA" });
    $('#prev2Zipcode').inputmask({ mask: "99999" });
    $('#prev3State').inputmask({ mask: "AA" });
    $('#prev3Zipcode').inputmask({ mask: "99999" });
    // Licnese
    $('#currentLicenseState').inputmask({ mask: "AA" });
    $('#prev1LicenseState').inputmask({ mask: "AA" });
    $('#prev2LicenseState').inputmask({ mask: "AA" });
    // Driving Experience
    $('#straightTruckMiles').inputmask(({ mask: "999,999" }));
    $('#tractorSemiMiles').inputmask(({ mask: "999,999" }));
    $('#tractorTrailersMiles').inputmask(({ mask: "999,999" }));
    $('#tractorTankerMiles').inputmask(({ mask: "999,999" }));
    $('#otherMiles').inputmask(({ mask: "999,999" }));






  });
})(jQuery);

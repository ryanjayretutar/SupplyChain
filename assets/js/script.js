$(document).ready(function(){
   $( "#register").validate( {
        rules: {
          firstName: "required",
          lastName: "required",
          username: {
            required: true,
            minlength: 5
          },
          password: {
            required: true,
            minlength: 8
          },
          confirmPass: {
            required: true,
            minlength: 8,
            equalTo: "#password"
          },
          email: {
            required: true,
            email: true
          }
          
        },
        messages: {
          firstName: "Please enter your firstname",
          lastName: "Please enter your lastname",
          username: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          confirmPass: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
          },
          email: "Please enter a valid email address"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block " );
           error.css({
             fontSize: '14px'
           });

          // Add `has-feedback` class to the parent div.form-group
          // in order to add icons to inputs
          element.parent( ".col-sm-4" ).addClass( "has-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }

          // Add the span element, if doesn't exists, and apply the icon classes to it.
          if ( !element.next( "span" )[ 0 ] ) {
            $( "<span class='fa fa-remove form-control-feedback'></span>" ).insertAfter( element );
          }
        },
        success: function ( label, element ) {
          // Add the span element, if doesn't exists, and apply the icon classes to it.
          if ( !$( element ).next( "span" )[ 0 ] ) {
            $( "<span class='fa fa-check form-control-feedback'></span>" ).insertAfter( $( element ) );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parent( ".col-sm-4" ).addClass( "has-error" ).removeClass( "has-success" );
          $( element ).next( "span" ).addClass( "fa-remove" ).removeClass( "fa-check" );
        },
        unhighlight: function ( element, errorClass, validClass ) {
          $( element ).parent( ".col-sm-4" ).addClass( "has-success" ).removeClass( "has-error" );
          $( element ).next( "span" ).addClass( "fa-check" ).removeClass( "fa-remove" );
        }
      } );



    $(".sidebar-dropdown > a").click(function() {
      $(".sidebar-submenu").slideUp(200);
      if (
        $(this)
          .parent()
          .hasClass("active")
      ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .parent()
          .removeClass("active");
      } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .next(".sidebar-submenu")
          .slideDown(200);
        $(this)
          .parent()
          .addClass("active");
      }
    });

    $("#close-sidebar").click(function() {
      $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
      $(".page-wrapper").addClass("toggled");
});

});
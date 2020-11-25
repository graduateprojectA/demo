<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


        <style>
           
        </style>  
    
    <script type="text/javascript">

//<![CDATA[

$(function() {

    var availableCity = ["서울","부산","대구","광주","울산"];

    $("#city").autocomplete({

        source: availableCity,

        select: function(event, ui) {

            console.log(ui.item);

        },

        focus: function(event, ui) {
            return false;
            //event.preventDefault();
        }
    });
});

//]]>

</script>

    </head>

    <body>    
    <div class="ui-widget">

<label for="city">도시: </label>

<input id="city">

</div>


    </body>
</html>
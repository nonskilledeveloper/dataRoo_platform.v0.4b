$(document).ready(function(){
    $("#send").click(function(e){
        e.preventDefault();
        
        var score = $("input[name='score']:checked").val();
        if (!score) {
            alert("Please select an answer");
            return;
        }
        var query = $("input[name='query']").val();
        var rc = $("input[name='rc']").val();

        $.ajax({
            type: "POST",
            url: "verify-js.php",
            data: { score: score, query: query, rc: rc },
            success: function(response){

                console.log(response);
                $("body").append(response);
                $("#modal").modal();
            }
        });
                
    });
});


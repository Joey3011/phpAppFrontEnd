$(document).ready(function(){
    $("#searchbar").keyup(function(){
        var input = $(this).val();
        if(input != ""){
            $.ajax({
                url: "/../DIYerSeeker/searchIssue",
                method: "POST",
                data: {input: input},
                success: function(data){
                    $(".visible").html(data);
                }
            });
        }else{
            location.reload(true);
        }
    });
});
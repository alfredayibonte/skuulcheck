/**
 * Created by masaud on 1/15/14.
 */

jQuery(function(){
    $('free').click(function(){
       alert('it worked');
       //var divObj = '<div class="form-group lshift"><label> Question</label><input class="input-question form-control" name="question" type="text"/></div><div class="form-group lshift"><label> Answer</label><textarea name="input-answer" class="form-control" rows="10" cols="45"></textarea></div>';
       //$('form div').last().append(divObj);
    });

    $('#btn-add-school').click(function(){
       $('#view-schools').css({'display': 'none'});
       $('#add-school').css({'display': 'block'});
    });
    $('#btn-view-schools').click(function(){
       $('#add-school').css({'display': 'none'});
       $('#view-schools').css({'display': 'block'});
    });
    // show modal when button clicked
    //$('.btn-add-school').click(function(){
    //
    //});
    $('#messages-link').click(function(){
        $(".mainpane-content").css({'display': 'none'});
        var newRequest = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
        newRequest.open("GET", "./messages-partial.html", true);
        newRequest.send();

        newRequest.onreadystatechange=function(){
            if(newRequest.readyState == 4 && newRequest.status == 200){
                $(".mainpane-content").css({'display': 'block'});
                document.getElementById("mainpane-content").innerHTML = newRequest.responseText;
            }
        }
    });
    $('#manage-schools-link').click(function(){
        $(".mainpane-content").css({'display': 'none'});
        var newRequest = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
        newRequest.open("GET", "./manage-schools-partial.html", true);
        newRequest.send();

        newRequest.onreadystatechange=function(){
            if(newRequest.readyState == 4 && newRequest.status == 200){
                $(".mainpane-content").css({'display': 'block'});
                document.getElementById("mainpane-content").innerHTML = newRequest.responseText;
            }
        }
    });
    $('#manage-respondents-link').click(function(){

    });
    $('#analytics-link').click(function(){

    });
});
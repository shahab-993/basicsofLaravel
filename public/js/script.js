function toggleAll(){
    $('div[id*="showUsersDetails-"]').toggle();
    if($("#chkShowHide").is(":checked")){
        $("#lblShowHide").text("Show Address Details")
    }else{
        $("#lblShowHide").text("Hide Address Details")

    }
}

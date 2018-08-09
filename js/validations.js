function withOutSpace(str){
    var ans=true;
    if(str.charAt(0) == ' ' || str.charAt(str.length - 1) == ' '){
        ans=false;
    }
    return ans;
}

function IsNotNull(str){
    var ans=true;
    if(str==""){
        ans=false;
    }
    return ans;
}

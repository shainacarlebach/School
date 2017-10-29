// Show div html based on role
if (HelpCenter.user.role=="anonymous"){
 $("div.anonymous").show();
}

if (HelpCenter.user.role=="end_user"){
 $("div.end_user").show();
}

if (HelpCenter.user.role=="agent"){
 $("div.agent").show();
}

if (HelpCenter.user.role=="manager"){
 $("div.manager").show();
}
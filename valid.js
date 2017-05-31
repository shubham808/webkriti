
function mail()
 {
    var e = document.getElementById("emaill");
    if(e.value.length==0)
    {
        document.getElementById("submit").type="button";
    	label("eprompt"," *","red");
    	return false;
    }
    else if(!e.value.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/))
        { 
            document.getElementById("submit").type="button";
            label("eprompt"," &#10008 This is not an email address","red");
            return false;
        }
        document.getElementById("submit").type="submit";
        label("eprompt"," &#10004","green");
    return true;
}
function usernam() 
{
    var u = document.getElementById("username");
    if(u.value.length==0)
    {
        document.getElementById("submit").type="button";
        label("uprompt"," *","red");
        return false;
    }
    else if (!u.value.match(/^(ipg_2015)([0-9]{3})$/))
     {
        document.getElementById("submit").type="button";
        label("uprompt"," roll number man!","red");
        return false;
     }
    document.getElementById("submit").type="submit";
    label("uprompt"," &#10004","green");
    return true;
}
function firs() 
{
    var f = document.getElementById("first");
    if(f.value.length==0)
    {
        document.getElementById("submit").type="button";
        label("flabel"," *","red");
        return false;
    }
    else if (!f.value.match(/^([A-Za-z])+$/))
     {
        document.getElementById("submit").type="button";
        label("flabel"," that cant be a name","red");
        return false;
     }
    document.getElementById("submit").type="submit";
    label("flabel"," &#10004","green");
    return true;
}
function las() 
{
    var l = document.getElementById("last");
    if(l.value.length==0)
    {
        document.getElementById("submit").type="button";
        label("llabel"," *","red");
        return false;
    }
    else if (!l.value.match(/^([A-Za-z])+$/))
     {
        document.getElementById("submit").type="button";
        label("llabel"," that cant be a name","red");
        return false;
     }
    document.getElementById("submit").type="submit"; 
    label("llabel"," &#10004","green");
    return true;
}
function pass(){
    var s=document.getElementById('password');
       if(s.value.length==0)
    {
        document.getElementById("submit").type="button";
        label("pass"," *","red");
        return false;
    }
    if(s.value.length>=11)
    {
        document.getElementById("submit").type="button";
        label("pass"," Must be less than 10 chracters","red");
        return false;   
    }

    document.getElementById("submit").type="submit"; 
    label("pass"," &#10004","green");
    return true;

}
function label(id,x,color)
{
    document.getElementById(id).innerHTML=x;
    document.getElementById(id).style.color=color;
}
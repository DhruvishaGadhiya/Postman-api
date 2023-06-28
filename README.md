
    protected $fillable=['id','name'];
    protected $table = "posts";
    
    
    
    function validation()
{
var name=document.regist_form.name_id.value;
if(name=="")
{
document.getElementById("id").innerHTML="Enter Id";
return false;
}
else
{
document.getElementById("id").innerHTML="";
}



var zipcode=document.regist_form.zcode.value;
if(zipcode==0){
alert("enter zipcode");
return false;
}

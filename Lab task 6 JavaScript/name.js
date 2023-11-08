function namefunc(){
    let username = document.getElementById('username').value;
    if(username == '')
    {
        alert("User Name is NULL!");
    }
    if(username.length<2)
    {
        alert("User Name too short!")
    }
    let first = username.charCodeAt(0);
    if(!(first>=65 && first<=90)&&!(first>=97 && first<=122))
    {
        alert("User Name must start with a Letter!");
    }
}
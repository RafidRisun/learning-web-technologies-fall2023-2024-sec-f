//name = "alamin";
//var name = "alamin";
//let name = "alamin";
//const name ="alamin";
//let std = [1, 'alamin', 'alamin@aiub.edu'];

// function abc(){

// }

// let f1 = (a, b)=>a+b;
// f1();

// if(){

// }else{

// }

// for(let i=0; i>10; i++){

// }

//console.log('test');
//alert('test...');
//document.write('<h2>testing JS dom...</h2>');
//document.getElementsByTagName('h1')[1].innerHTML = "TESTing DOM...";


function abc(){
    // alert('test');
    let term = document.getElementById('term').value;
    let xhttp = new XMLHttpRequest();

    

    xhttp.open('POST', 'abc.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            // alert(this.responseText);
            let std = JSON.parse(this.responseText);
            let user = `<tr>
                <td> ID: </td>
                <td> username: </td>
                <td> email: </td>
            </tr>`;
            for(let i = 0; i<std.length; i++)
            {
                console.log(std[i]);
                
                user+= `<tr>
                <td> ${std[i].ID} </td>
                <td> ${std[i].username} </td>
                <td> ${std[i].email} </td>
                </tr>`;

            }
            document.getElementById('result').innerHTML = user;
        }
    }

    xhttp.send('std='+term);
}
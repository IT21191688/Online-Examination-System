/* Clock */
function displayTime(){
    //create date object
    var dateTime= new Date();


    //variable initialisation
    var hrs=dateTime.getHours();
    var min= dateTime.getMinutes();
    var sec= dateTime.getSeconds();
    
    var session= document.getElementById('session');


    //set am pm
    if(hrs>=12){
        session.innerHTML="PM";
    }
    else{
        session.innerHTML="AM";
    }

    //if time less than 10 concatanate 0
    if(hrs < 10){ hrs= "0" + hrs; }
    if(min < 10){ min= "0" + min; }
    if(sec < 10){ sec= "0" + sec; }



    document.getElementById('hours').innerHTML=hrs;
    document.getElementById('minutes').innerHTML=min;
    document.getElementById('seconds').innerHTML=sec;



}
//exicute every 1s displaytime function
setInterval(displayTime,10);
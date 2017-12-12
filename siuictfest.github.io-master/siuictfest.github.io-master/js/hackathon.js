
  // HACKATHON
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDbo-PX3Xd4e8QSHBFk6OGAOhODLcShg0c",
    authDomain: "siuictfest-81cc2.firebaseapp.com",
    databaseURL: "https://siuictfest-81cc2.firebaseio.com",
    projectId: "siuictfest-81cc2",
    storageBucket: "",
    messagingSenderId: "985132371852"
  };
  firebase.initializeApp(config);

var acmTeamData = firebase.database().ref('HACKATHON');


document.getElementById('formid').addEventListener('submit',submitFrom);

function submitFrom(e){
    e.preventDefault();
    
    var teamName = getInputval('teamName');
    //Participant 1
    var name1 = getInputval('m1name');
    var roll1 = getInputval('m1roll');
    var dpt1 = getInputval('m1dpt');
    var email1 = getInputval('m1email');
    var phone1= getInputval('m1phone');
    var shirt1 =getInputval('m1shirt');
    
        
    //Participant 2
    var name2 = getInputval('m2name');
    var roll2 = getInputval('m2roll');
    var dpt2 = getInputval('m2dpt');
    var email2 = getInputval('m2email');
    var phone2= getInputval('m2phone');
    var shirt2 =getInputval('m2shirt');
    
        
    //Participant 2
    var name3 = getInputval('m3name');
    var roll3 = getInputval('m3roll');
    var dpt3 = getInputval('m3dpt');
    var email3 = getInputval('m3email');
    var phone3= getInputval('m3phone');
    var shirt3 =getInputval('m3shirt');
    
    var  data= {
        team:teamName,
        m1:{
            name:name1,
            roll:roll1,
            dpt:dpt1,
            emaill:email1,
            phone:phone1,
            shirt:shirt1
        },m2:{
            name:name2,
            roll:roll2,
            dpt:dpt2,
            emaill:email2,
            phone:phone2,
            shirt:shirt2
        },m3:{
            name:name3,
            roll:roll3,
            dpt:dpt3,
            emaill:email3,
            phone:phone3,
            shirt:shirt3
        },
        status:"Pending"
    };
    
    console.log(data);
    SaveMessage(data);
    
   
  
}


//Function to get form values

function getInputval(id){
 return document.getElementById(id).value;
} 


//push data to firebase

function SaveMessage(data){
    var PushID=acmTeamData.push();
    PushID.set(data).then(()=>{
            //Show alert 
    document.querySelector('.alert').style.display='block';
        
         alert("Your registration has been sucessfully completed.... :)");
    
    //Hide alert after 3 seconds
    setTimeout(()=>{
        document.querySelector('.alert').style.display='none';
    
    },3000);
    
    document.getElementById('formid').reset();
    });
}




















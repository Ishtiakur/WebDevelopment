
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

var acmTeamData = firebase.database().ref('PROJECT');


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
   
    var  data= {
        proejcetName:teamName,
        m1:{
            name:name1,
            roll:roll1,
            dpt:dpt1,
            emaill:email1,
            phone:phone1
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




















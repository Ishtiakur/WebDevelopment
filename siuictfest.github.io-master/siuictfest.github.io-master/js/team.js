
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


var Acm = firebase.database().ref("ACM");
var Hack = firebase.database().ref("HACKATHON");
var Pro = firebase.database().ref("PROJECT");

Acm.on("child_added",snap=>{
   /*console.log("ACM : ",  snap.val()); 
    console.log("TEAM NAME : " ,snap.child('team').val());
    console.log("Particiapant One : ")
    console.log("NAME : ",snap.child('m1').child('name').val());
    console.log("DEPT :",snap.child('m1').child('dpt').val());
    console.log("ROLL : ",snap.child('m1').child('shirt').val());
     console.log("==========");
   console.log("Particiapant TWO : ")
    console.log("NAME : ",snap.child('m2').child('name').val());
    console.log("DEPT :",snap.child('m2').child('dpt').val());
    console.log("ROLL : ",snap.child('m2').child('shirt').val());
    console.log("==========");
   
    console.log("Particiapant THREE: ")
    console.log("NAME : ",snap.child('m3').child('name').val());
    console.log("DEPT :",snap.child('m3').child('dpt').val());
    console.log("ROLL : ",snap.child('m3').child('shirt').val());
    console.log("==========");*/

    var team = snap.child('team').val();
    var p1 = snap.child('m1').child('name').val();
    var p2 = snap.child('m2').child('name').val();
    var p3 = snap.child('m3').child('name').val();
//    var pending = snap.child('status').val();
//    pending = pending.toLowerCase();
//    var classname = ' class="'+pending+'"';
   console.log(p1);
   console.log(p2);
   console.log(p3);


    var table = document.getElementById("myTable");
    var data = "<tr><td>"+team+"</td><td>"+p1+"</td><td>"+p2+"</td><td>"+p3+"</td></tr>";
    table.innerHTML +=data;
    
});

Hack.on("child_added",snap=>{
  //  console.log("Hack : ",snap.val());
     var team = snap.child('team').val();
    var p1 = snap.child('m1').child('name').val();
    var p2 = snap.child('m2').child('name').val();
    var p3 = snap.child('m3').child('name').val();
//    var pending = snap.child('status').val();
//    pending = pending.toLowerCase();
//    var classname = ' class="'+pending+'"';
//    console.log(p1);
//    console.log(p2);
//    console.log(p3);


    var table = document.getElementById("myTable2");
    var data = "<tr><td>"+team+"</td><td>"+p1+"</td><td>"+p2+"</td><td>"+p3+"</td></tr>";
    table.innerHTML +=data;
});

Pro.on("child_added",snap=>{
  // console.log("Pro : ", snap.val()); 
    
     var team = snap.child('proejcetName').val();
    var p1 = snap.child('m1').child('name').val();

//    var pending = snap.child('status').val();
//    pending = pending.toLowerCase();
//    var classname = ' class="'+pending+'"';

    var table = document.getElementById("myTable3");
    var data = "<tr><td>"+team+"</td><td>"+p1+"</td></tr>";
    table.innerHTML +=data;
});































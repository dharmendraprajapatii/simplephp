
var database;


$(document).ready(function(){
    var firebaseConfig={
    "api_key":"AIzaSyD3P4c2dNlJ3Un-xHejUUGoMTwb_qQ8jbw",
    "type": "service_account",
    "project_id": "locsaleapplication",
    "private_key_id": "01d372832bc264fbf1e4265822c19fc5579e07dc",
    "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCpmadRJFjn1KJA\nmEHd7gTfY7L0q2Is8RvfPvwXGM4T011hlvnTWOjvvuRNR+3ecK47BoN7MzxYHe8T\nqNiZbfX8faL4wwzCvsBEHWVcHNamrJqwekFa08Fgl8+tvbydvBK1DxolwD7sZ8Gq\nG/j4xOLbBKZ+Ckf4CMZ4VJzJCXBTIKPFXrvwd8BQMJByGLAW+FK55wU3VTbgQCJW\nYe9jEoz1SGujtR67ipaUN3bLAfIuTrMuZ/FF4FamhDKDBxh/dT2Z7h5BuQJ28sIi\nbDtWSFkOnWw9eCBCvhvxUEf9OXVCp506suNYtfjFiv4qvmSsJvQysN+0+izU08ZU\nrRzhnxSFAgMBAAECggEAEaz6J2aEnorGazmDGdxh5R9Iqh/HgFwTldGEZ+rVpXLQ\np2ha+qgoRL5OIHDH7XgsbGnqH5ewKRXbkh61jk4LxkgYyVjYtl43fxHaO76kr2PL\nTmu7bnolzAmeYyLkasMMZxLfHIKb/Dr3D+HQ8aphY0apjHbJV+QgPS/CVGB3tK4F\nW9fq7+mTQ49ZEH+4zmX/PAvO9WnxL2k8iUS37jwYeu6HRCnjtGJr61YIjHx0hHSV\n0HkDSoJwHD0CNjpsE6k40oGqIMxrGssFqaXaalzllPkX9RnVO7cjt7Ci+IYZ9AYR\nihVuidXAKRHRXAi32EI6ZHDPSEgGj6NDeedMSkpK2QKBgQDhAINxaky2wKCrpRZw\nAV5YWlHvEQPbZ5OUfK0d5Qf7qCJ3mLeWsKfhyh/LRX/v04xV9RwhidMaxKt9027+\nijsPK46p6TxsEUbBzMkjjPgCT1QazQla5kIPtWzsVqONyNw2SmHCCpeb5eD+VkPw\n6U/JbshFtfI1g6GExZQvACEfPQKBgQDA9zN4x/usofOMnYd7QH7nIo2ssydij4fV\nsM5E9iySqxoLvfZjETlxaxJ+H2uwhQOzdFpVpqRQB9jbi0x9/WMETdcm+AnmvNir\njpji8yO4eQET0HJIFNrk7s5Q70kK0wszXC+2OSWbJQWwMJogqwdEc6MMZsiq733e\nTgfXHhqe6QKBgQDGzZ9WLKhPqW/NeXaTzIHB6zwN0ajoyWG6h1am3WDqWKrrpUJB\noSEU/XSONIBQNUkAAiyy7YZbVn54FMMzoIuCYegR9QTwL2unfPwTr1DLKbCUZano\naR7hplnxkLO+aUU5qwspWhaPJtRfpXUufdeDkaDfB15VLlMebzz5MlIRuQKBgFKV\neWHntL5dUW6MvL7zC1zAXQHcaq6z3t6FnMHG2ayrran40snzRTJVMMTpjZ0uUDct\nRLwDZa8arKTJKSOCni3pYns7DIHDsLc7gBMhG9iHcP6Z508SHdx8l6/ruMb5K4H/\noivKqV2MqrKNGmmAyMty8gUMuDTv6l6J5rEaISqBAoGARSZp9jXyXVr0XZMdtkNW\nXcBGrvIRjzYRs1y4pszeNGnr1AiPMVVO/Ymyz6KzEWBw7qAyG92OfQ0lp1CmFV0G\n+dyzzoOYUgg4T7Dl9NSTwR3aje6TM5E++i7Iu5uAtgBWuX4HvJnfgS4wMU2nPQCi\nYigy8iWr76rfq6dMwztOmA0=\n-----END PRIVATE KEY-----\n",
    "client_email": "firebase-adminsdk-6hjf0@locsaleapplication.iam.gserviceaccount.com",
    "client_id": "104206983025500029508",
    "auth_uri": "https://accounts.google.com/o/oauth2/auth",
    "token_uri": "https://oauth2.googleapis.com/token",
    "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
    "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-6hjf0%40locsaleapplication.iam.gserviceaccount.com",
    "databaseURL": "https://locsaleapplication-default-rtdb.firebaseio.com",
    };
    firebase.initializeApp(firebaseConfig);
     database=firebase.database();
    var userId=1;
    database.ref('Users').on('value', function(snapshot){
        var userData=snapshot.val();
        var counter=0;
        var html=[];
        $.each(userData, function(index, value){
          if (value.type == 1 ) {
           
           
            // var userCount = initUserCount( database, value.id );
                   
            setTimeout(
                function() 
                {
                    

                   }, 1000);  
            
          }   
          database.ref('Posts').on('value',function(snapshot){
            var userData=snapshot.val();
            $.each(userData,function(index1,value1){
                
                var currentUserId=value1.publisher;
                if (index === value1.publisher && value1.type == 1) {
                    
                    html.push('<tr>\
                    <td style="border: 1px solid black;" >'+userId++ +'</td>\
                    <td style="border: 1px solid black;" class="businessData-'+value.id+'" name-id="'+index+'">'+value.business_name+'</td>\
                    <td style="border: 1px solid black;" class="audienceData-'+index+'" like-id="'+value.id+'">0</td>\
                    <td style="border: 1px solid black;">\
                    <button class="viewData btn btn-info btn-sm" onclick="initViewData1($(this))" view-id="'+index+'"data-toggle="modal" data-target=".bd-example-modal-lg">View</button>\
                    <button class="deleteData btn btn-danger btn-sm" data-id="'+index+'">Delete</button>\
                    </td>\
                         </tr>');
                       
                         $('#nPostData').html(html);
                   
                }
            });
              database.ref('AudienceSell').on('value', function(snapshot){
                      var num=0; 
            var like=snapshot.val();
            
            $.each(like,function(index3,value3){
                
                if (value3.currentUserId === index && value3 ) {
                    
                     num++;
                     $('.audienceData-'+index).html(num);
                }
            });
            
        });
            
        });
                
            
        });
       setTimeout(
                function() 
                {
                    $('#example').DataTable();

                   }, 1500);   
    }); 
  


    database.ref('Users/').on('value',function(snapshot){
      var deleteData=snapshot.val();
         $.each(deleteData,function(index,value){
             database.ref('Posts').on('value',function(snapshot){
                 var data=snapshot.val();
                 $.each(data,function(index1,value1){
                     $('.deleteData').click(function(){
                        var idData=$(this).attr('data-id');
                            
                        if ( index === idData && index === value1.publisher) {
                             if (confirm('Are you sure delete this item')) {
                            firebase.database().ref("Posts/"+index1).update({ type: "0" });

                            jQuery( this ).parent().parent().remove();
                            
                           window.location.href="live_post";
                        }
                        }
                    });
                 });
             });
         });  
        
    });
    
      
   
});
  

function initViewData1( node ) {

    var idData=$(node).attr('view-id');

        database.ref('Posts').on('value',function(snapshot){
            var count=0;
            var html=[];
            var id=1;
          var viewData=snapshot.val();
            $.each(viewData, function(index, value){                               
                var d=new Date(value.timestamp);
                   if (idData ===  value.publisher && value.type == 1 ) {
                       
                       var href=value.imageUrl;
                       html.push('<tr>\
                       <td style="border: 1px solid black">'+id++ +'</td>\
                       <td style="border: 1px solid black" id="Postimage"><img  class="mt-2 mb-2 ml-2 mr-2"  width="50px" height="50px" src="'+href+'"></td>\
                        <td style="border: 1px solid black">'+value.description +'</td>\
                        <td style="border: 1px solid black">'+d+'</td>\
                        <td style="border: 1px solid black;" class="saveData-'+index+'" >'+value.savedCount+'</td>\
                        <td style="border: 1px solid black;" class="imresionData-'+index+'">'+value.impressionCount+'</td>\
                        <td style="border: 1px solid black;" class="likeData-'+index+'" like-id="'+index+'">0</td>\
                        <td style="border: 1px solid black;" class="commData-'+index+'" comm-id="'+index+'">0</td>\
                        <td style="border: 1px solid black">\
                            <button class="btn deletepost btn-danger btn-sm"  post-id="'+index+'" data-name="'+value.name+'">Delete</button>\
                        </td>\
                       </tr>');
                       count++;
                    //    console.log(count);
                    //    $('.imresionData-'+index).html(value.impressionCount);
                    //    $('.saveData-'+index).html(value.savedCount);
                       database.ref('Likes').on('value', function(snapshot){
                        var count=0;
                        var like=snapshot.val();
                        
                        $.each(like,function(index2,value2){
                            
                            if (index == index2 && value2) {
                               
                                $.each(value2,function(index3,value3){
                                    count++;
                                    // console.log(index3);
                                    setTimeout(function(){
                                        $('.likeData-'+index).html(count);
                                     }, 1500);
                                    
                                });
                                
                                 // console.log(counter);
                                
                            }
                        });
                        // $('.likeData-'+index).html(counter);
                        
                    });
                    database.ref('Comments').on('value', function(snapshot){
                        var count=0;
                        var like=snapshot.val();
                        
                        $.each(like,function(index2,value2){
                            
                            if (index == index2 && value2) {
                               
                                $.each(value2,function(index3,value3){
                                    count++;
                                    // console.log(index3);
                                    setTimeout(function(){
                                        $('.commData-'+index).html(count);
                                     }, 1500);
                                    
                                });
                                
                                
                                
                            }
                        });
                       
                        
                    });
                   }
                   $('#totalpost').html(count);
                   $('#allData1').html(html);
                   $('.deletepost').on('click', function(){
                    var idData=$(this).attr('post-id');
                    if (confirm('Are you sure delete this item')) {
                        firebase.database().ref('Posts/' +idData).remove();
                        
                    }
                });                              
                

            });
        });
}
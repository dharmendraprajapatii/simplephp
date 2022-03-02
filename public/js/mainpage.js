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
    // firebase.analytics();

    var database=firebase.database();
    database.ref('Users').on('value', function(snapshot){
        var num = 0;
        var userData=snapshot.val();
       $.each(userData, function(index, value){
            var typeData=value.type;
            if (typeData == 2) {
                    num++; 
                    $("#customerCountData").html(num);
            }
       });  
    });
    database.ref('Users').on('value', function(snapshot){
        var num = 0;
        var userData1=snapshot.val();
       $.each(userData1, function(index1, value1){
            var typeDataBusiness=value1.type;
            if (typeDataBusiness == 1) {
                    num++;  
                    $("#businessCountData").html(num);
            }  
       });  
    });
    database.ref('Users').on('value', function(snapshot){
        var num = 0;
        var userData2=snapshot.val();
       $.each(userData2, function(index2, value2){
            var typeDataTotal=value2.type;
            if (typeDataTotal) {
                    num++;  
                    $("#totalCountData").html(num);
            }   
       });
    });
    database.ref('Users').on('value', function (snapshot) {
        var numcount = 0;
        var html = [];
        var userData3 = snapshot.val();
        // var selectedData = document.getElementById('first').value;
       html.push('<option id="first" value="Ahmedabad" selected>Ahmedabad</option>\
                    <option  value="Surat">Surat</option>\
                    <option value="Vadodara">Vadodara</option>\
                    <option value="Rajkot">Rajkot</option>\
                    <option value="Bhavnagar">Bhavnagar</option>\
                    <option value="Jamnagar">Jamnagar</option>\
                    <option value="Junagadh">Junagadh</option>\
                    <option value="Gandhinagar">Gandhinagar</option>\
                    <option value="Gandhidham">Gandhidham</option>\
                    <option value="Anand">Anand</option>\
                    <option value="Navsari">Navsari</option>\
                    <option value="Morbi">Morbi</option>\
                    <option value="Nadiad">Nadiad</option>\
                    <option value="Surendranagar">Surendranagar</option>\
                    <option value="Bharuch">Bharuch</option>\
                    <option value="Mehsana">Mehsana</option>\
                    <option value="Bhuj">Bhuj</option>\
                    <option value="Porbandar">Porbandar</option>\
                    <option value="Palanpur">Palanpur</option>\
                    <option value="Valsad">Valsad</option>\
                    <option value="Vapi">Vapi</option>\
                    <option value="Gondal">Gondal</option>\
                    <option value="Veraval">Veraval</option>\
                    <option value="Godhra">Godhra</option>\
                    <option value="Patan">Patan</option>\
                    <option value="Kalol">Kalol</option>\
                    <option value="Dahod">Dahod</option>\
                    <option value="Botad">Botad</option>\
                    <option value="Amreli">Amreli</option>\
                    <option value="Deesa">Deesa</option>\
                    <option value="Jetpur">Jetpur</option>\
                    ');
        $('#otherCity').html(html);
         jQuery(function($){
                $(document).ajaxSend(function() {
                    $("#overlay").fadeIn(300);　
                });
                        
                $('#otherCity option').click(function(){
                    $.ajax({
                    type: 'GET',
                    success: function(data){
                        // console.log(data);
                    }
                    }).done(function() {
                    setTimeout(function(){
                        $("#overlay").fadeOut(300);
                    },500);
                    });
                });	
                });
    });
    $('#otherCity').ready(function(){
        var num = 0; 
        database.ref('Users').on('value', function (snapshot) {              
            var userData3 = snapshot.val();
            // var html = [];  
            $.each(userData3, function (index3, value3) {
                        var selectData =document.getElementById('first').value;
                        if (selectData === value3.address) {
                            if (value3.address) {
                                num++;
                                // console.log(num);
                            }
                           
                        }  
                $("#cityData").html(num);
            });
        });
              
    });
    $('#otherCity').change(function(){
        var counter = 0;
        var selectedOption = jQuery(this);
        database.ref('Users').on('value', function (snapshot) {            
            var userData3 = snapshot.val();
            var html = []; 
            $.each(userData3, function (index3, value3) {
                if (value3.address) {
                        var selectData = jQuery(selectedOption).val(); 
                        if (selectData === value3.address) {
                            counter++; 

                        }  
                }
            });
        });
        $("#cityData").html(counter);       
    });
    var userId=1;
    database.ref('Users').on('value', function(snapshot){
        var userData=snapshot.val();
        var html=[];
        $.each(userData, function(index4, value4){
            if (value4.business_field && value4.business_sub_category) {
                html.push('<tr>\
                        <td style="border: 1px solid black">'+userId++ +'</td>\
                        <td style="border: 1px solid black">'+value4.name +'</td>\
                        <td style="border: 1px solid black">'+value4.business_field+'</td>\
                        <td style="border: 1px solid black">'+value4.business_sub_category+'</td>\
                        <td style="border: 1px solid black">'+value4.business_name +'</td>\
                    </tr>\
                ');
                $('#listData').html(html);
            }
        });
            setTimeout(
                function() 
                {
                    $('#example').DataTable();

                   }, 1500);
    });  
    database.ref('Posts').on('value', function(snapshot){
        var count=0;
        var userId=1;
        var userData=snapshot.val();
        var html=[];
        html.push('<tr>\
        <td style="border: 1px solid black" id="userIdData">'+userId++ +'</td>\
        <td style="border: 1px solid black"  id="businessData"></td>\
        <td style="border: 1px solid black" id="audenceData"></td>\
        <td style="border: 1px solid black" id="coundData"></td>\
        </tr>');
        $.each(userData, function(index, value){
            if (value.type == 1) {
                count++;
            }
           
            database.ref('Users').on('value', function(snapshot){
             var userDatas=snapshot.val();
             $.each(userDatas, function(index1, value1){
                    if (value.type == 1 && value.publisher === index1) {
                       
                    database.ref('AudienceSell').on('value',function(snapshot){
                        var targetData=snapshot.val();
                        $.each(targetData, function(index2, value2){
                          
                                if (index1 == value2.currentUserId) {
                                    

                                        $('#postData').html(html);
                                        $('#audenceData').html(value2.stLocationName);
                                        $('#coundData').html(count);
                                        $('#businessData').html(value1.business_name);
                                        // $('#table').DataTable();
                                    
                                }
                        });
                        
                     });
                     
                    }
             });
                                       
             
            });
            
        });
           setTimeout(
                function() 
                {
                    $('#table').DataTable();

                   }, 1500);
        
        $('#promtedPost').html(count);
        
        
    });  
});

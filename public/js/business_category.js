
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

    var database=firebase.database();
    var userId=1;
    database.ref('Users').on('value', function(snapshot){
        var userData=snapshot.val();
        var html=[];
        // var html1=[];
        $.each(userData, function(index, value){
          if (value.type == 1 && value.business_field) {
              html.push('\
              <option class="category" data-name="'+value.business_field+'">'+value.business_field+'</option>\
              ');
             
            //   console.log(value.business_field);
          }   
          
        });
        $('#categoryData').html(html);
        $('.category').on('click',function(){
            var cData=$(this).attr('data-name');
            var userId1=1;
            var html1=[];
            $.each(userData, function(index, value){
                if (value.business_field == cData) {
                    html1.push('<tr>\
                    <td>'+userId1++ +'</td>\
                    <td>'+value.business_name+'</td>\
                    <td>'+cData +'</td>\
                    </tr>');
                 
                    
                }
                
            });
            $('#allDataCategory').html(html1);
            // $('#example').DataTable();  
          setTimeout(
                function() 
                {
                    $('#example').DataTable();

                   }, 1500);
      });

        
    }); 
     
   
});
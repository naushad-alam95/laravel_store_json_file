<html>
   <link rel="shortcut icon" href="https://www.greenhonchos.com/wp-content/uploads/2014/10/favicon_greenhonchos.ico" type="image/x-icon">
   <title>Available endpoints |Green Honchos Solutions Pvt Ltd</title>
   <style>
   .main_page{margin:0px;}
   .main_page p.post_url{max-width: 880px;width: 100%;word-wrap: break-word;word-break: break-all;padding: 0px 5px;}
   .subheading{margin-left:20px;}
   .margleft{margin-left:20px;}
   .marglefttble{margin-left:50px;}
   .golden_cage{text-align:center;display:block; text-transform: uppercase;}
   .modules{border-bottom:#000 solid 1px;display:block; padding-bottom: 15px;}
   </style>
   <body>
      <style type='text/css'>.tg  {border-collapse:collapse;border-spacing:0;}.tg td{font-family:Courier;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}.tg th{font-family:Arial, sans-serif;font-size:13px;font-weight:bold;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}.tg .tg-yw4l{vertical-align:top}.tg .tg-y9vz{color:#036400}</style>
      <div class="main_page">
         <h2 class="golden_cage">Green Honchos Solutions Pvt Ltd</h2>  
         <h2 class="modules">Task Module</h2>	
      
         <h3 class="subheading">1. API to create user accounts.
                  We’ll pass the following details to the API: Username, Email, First Name, Last Name, Password.
                  The API will revert with the User ID of the new user on success, else false.</h3>
         <p class="subheading">/api/store-user</p>
         <table class='tg margleft'>
            <tr>
               <th class='tg-yw4l'>Method</th>
               <td class='tg-yw4l'>Post</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Endpoint</th>
               <td class='tg-yw4l'>/api/store-user</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Postman URL</th>
               <td class='tg-yw4l '><p class="post_url">http://dev.greenhonchos.com/api/store-user</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Overview</th>
               <td class='tg-yw4l'>Store User Detail</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Param</th>
               <td class='tg-yw4l'>
                  <table class='tg'>
                     <tr>
                        <th class='tg-yw4l'>userName</th>
                        <td class='tg-yw4l'>To get user name</th>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>email</th>
                        <td class='tg-yw4l'>To get user email</th>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>firstName</th>
                        <td class='tg-yw4l'>To get user first name</td>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>lastName</th>
                        <td class='tg-yw4l'>To get user last name</th>
                     </tr>  
                     <tr>
                        <th class='tg-yw4l'>password</th>
                        <td class='tg-yw4l'>To get user password</th>
                     </tr>
                  </table>
               </td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Code</th>
               <td class='tg-yw4l'>
         
                  <table class='tg'>
                     <tr>
                        <th class='tg-yw4l'>Code</th>
                        <th class='tg-yw4l'>Meaning</th>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>200</th>
                        <td class='tg-yw4l'>Data Created </td>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>422</th>
                        <td class='tg-yw4l'>Invalid Input </td>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>404</th>
                        <td class='tg-yw4l'>Data not found </td>
                     </tr>
                  </table>
               </td>
            </tr>
            <tr>
               <th class='tg-yw4l'>ScreenShot</th>
               <td class='tg-yw4l'><img src="/images/store_user.png" style="height: 500px;"></td>
            </tr>
         </table> 
         <h3 class="subheading">2. API to edit a user account.
         We’ll pass the User ID, and the field to edit. For example, we will pass a user ID as 2, and the new value for Last Name</h3>
         <p class="subheading">/api/user_edit/{id}</p>
         <table class='tg margleft'>
            <tr>
               <th class='tg-yw4l'>Method</th>
               <td class='tg-yw4l'>Get</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Endpoint</th>
               <td class='tg-yw4l'>/api/user_edit/{id}</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Postman URL</th>
               <td class='tg-yw4l'><p class="post_url">http://dev.greenhonchos.com/api/user_edit/1</p></td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Overview</th>
               <td class='tg-yw4l'>To get user detail by Id. </td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Param</th>
               <td class='tg-yw4l'>
                  <table class='tg'>
                     <tr>
                        <th class='tg-yw4l'>id</th>
                        <td class='tg-yw4l'>To get user id</th>
                     </tr>
                  </table>
               </td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Code</th>
               <td class='tg-yw4l'>
         
                  <table class='tg'>
                     <tr>
                        <th class='tg-yw4l'>Code</th>
                        <th class='tg-yw4l'>Meaning</th>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>200</th>
                        <td class='tg-yw4l'>Data found </td>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>422</th>
                        <td class='tg-yw4l'>Invalid Input </td>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>404</th>
                        <td class='tg-yw4l'>Data not found </td>
                     </tr>
                  </table>
                  <tr>
                  <th class='tg-yw4l'>ScreenShot</th>
                  <td class='tg-yw4l'><img src="/images/edit_user.png" style="height: 500px;"></td>
               </tr>
               </td>
            </tr>
         </table>
         <h3 class="subheading">3. Update User Detail by Id.</h3>
         <p class="subheading">/api/user_update</p>
         <table class='tg margleft'>
            <tr>
               <th class='tg-yw4l'>Method</th>
               <td class='tg-yw4l'>Post</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Endpoint</th>
               <td class='tg-yw4l'>/api/user_update</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Postman URL</th>
               <td class='tg-yw4l '><p class="post_url">http://dev.greenhonchos.com/api/user_update</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Overview</th>
               <td class='tg-yw4l'>Update User Detail</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Param</th>
               <td class='tg-yw4l'>
                  <table class='tg'>
                     <tr>
                        <th class='tg-yw4l'>id</th>
                        <td class='tg-yw4l'>To get user id</th>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>userName</th>
                        <td class='tg-yw4l'>To get user name</th>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>email</th>
                        <td class='tg-yw4l'>To get user email</th>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>firstName</th>
                        <td class='tg-yw4l'>To get user first name</td>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>lastName</th>
                        <td class='tg-yw4l'>To get user last name</th>
                     </tr>
                  </table>
               </td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Code</th>
               <td class='tg-yw4l'>
         
                  <table class='tg'>
                     <tr>
                        <th class='tg-yw4l'>Code</th>
                        <th class='tg-yw4l'>Meaning</th>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>200</th>
                        <td class='tg-yw4l'>Data Created </td>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>422</th>
                        <td class='tg-yw4l'>Invalid Input </td>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>404</th>
                        <td class='tg-yw4l'>Data not found </td>
                     </tr>
                  </table>
               </td>
            </tr>
            <tr>
               <th class='tg-yw4l'>ScreenShot Input Data</th>
               <td class='tg-yw4l'><img src="/images/update_user1.png" style="height: 500px;"></td>
               
            </tr>
            <tr>
               <th class='tg-yw4l'>ScreenShot after update data</th>
               
               <td class='tg-yw4l'><img src="/images/update_user2.png" style="height: 500px;"></td>
            </tr>
         </table> 
         <h3 class="subheading">4. API to get list of all the users</h3>
         <p class="subheading">/api/get-users</p>
         <table class='tg margleft'>
            <tr>
               <th class='tg-yw4l'>Method</th>
               <td class='tg-yw4l'>Get</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Endpoint</th>
               <td class='tg-yw4l'>/api/get-users</td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Postman URL</th>
               <td class='tg-yw4l'><p class="post_url">http://dev.greenhonchos.com/api/get-users</p></td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Overview</th>
               <td class='tg-yw4l'>To get user list. </td>
            </tr>
            <tr>
               <th class='tg-yw4l'>Code</th>
               <td class='tg-yw4l'>
         
                  <table class='tg'>
                     <tr>
                        <th class='tg-yw4l'>Code</th>
                        <th class='tg-yw4l'>Meaning</th>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>200</th>
                        <td class='tg-yw4l'>Data found </td>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>422</th>
                        <td class='tg-yw4l'>Invalid Input </td>
                     </tr>
                     <tr>
                        <th class='tg-yw4l'>404</th>
                        <td class='tg-yw4l'>Data not found </td>
                     </tr>
                  </table>
                  <tr>
                  <th class='tg-yw4l'>ScreenShot</th>
                  <td class='tg-yw4l'><img src="/images/userlist.png" style="height: 500px;"></td>
               </tr>
               </td>
            </tr>
         </table>
      </div>
   </body>
</html> 

